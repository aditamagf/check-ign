<?php

require 'mainconfig.php';
require 'src/ApiGames.php';

use Aditdev\ApiGames;

header('Content-Type: application/json');

if (!isset($_POST['game'], $_POST['user_id'], $_POST['other_id'])) {
    exit(json_encode([
        'response' => false,
        'data'     => ['msg' => 'Invalid Request'],
    ], JSON_PRETTY_PRINT));
}

$game    = trim($_POST['game']);
$userId  = trim($_POST['user_id']);
$otherId = trim($_POST['other_id']);

$apiGames = new ApiGames();

if (!$apiGames->supports($game)) {
    exit(json_encode([
        'response' => false,
        'data'     => ['msg' => "Game not found ($game)"],
    ], JSON_PRETTY_PRINT));
}

// 1. Try the cache first (prepared statement: no SQL injection).
$stmt = mysqli_prepare($db, 'SELECT id, nickname, expired_at FROM accounts WHERE code = ? AND user_id = ? AND other_id = ? LIMIT 1');
mysqli_stmt_bind_param($stmt, 'sss', $game, $userId, $otherId);
mysqli_stmt_execute($stmt);
$cached = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

if ($cached && $cached['expired_at'] > time()) {
    exit(json_encode([
        'response' => true,
        'data'     => ['status' => 200, 'nickname' => $cached['nickname']],
    ], JSON_PRETTY_PRINT));
}

// 2. Cache miss or expired: query the upstream API.
$result = $apiGames->check($game, $userId, $otherId);

if ($result['status'] !== 200) {
    exit(json_encode(['response' => false, 'data' => $result], JSON_PRETTY_PRINT));
}

// 3. Persist the fresh nickname (valid for 7 days).
$expiredAt = strtotime('+7 day');
if ($cached) {
    $update = mysqli_prepare($db, 'UPDATE accounts SET nickname = ?, expired_at = ? WHERE id = ?');
    mysqli_stmt_bind_param($update, 'ssi', $result['nickname'], $expiredAt, $cached['id']);
    mysqli_stmt_execute($update);
} else {
    $insert = mysqli_prepare($db, 'INSERT INTO accounts (code, user_id, other_id, nickname, expired_at) VALUES (?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($insert, 'sssss', $game, $userId, $otherId, $result['nickname'], $expiredAt);
    mysqli_stmt_execute($insert);
}

exit(json_encode(['response' => true, 'data' => $result], JSON_PRETTY_PRINT));
