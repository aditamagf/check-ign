<?php

require 'mainconfig.php';
header('Content-Type: application/json');
if (isset($_POST['game'], $_POST['user_id'], $_POST['other_id'])) {
    $input_post = array(
        'game' => trim($_POST['game']),
        'user_id' => trim($_POST['user_id']),
        'other_id' => trim($_POST['other_id'])
    );
    $is_check = false;
    $is_new = false;
    $checkAccount = mysqli_query($db, "SELECT * FROM accounts WHERE code = '" . $input_post['game'] . "' AND user_id = '" . $input_post['user_id'] . "' AND other_id = '" . $input_post['other_id'] . "'");
    if (mysqli_num_rows($checkAccount) == 1) {
        $dataAccount = mysqli_fetch_assoc($checkAccount);
        if ($dataAccount['expired_at'] > time()) {
            $result = array('response' => true, 'data' => ['status' => 200, 'nickname' => $dataAccount['nickname']]);
        } else {
            $is_check = true;
        }
    } else {
        $is_check = true;
        $is_new = true;
    }
    if ($is_check) {
        require 'src/Games.php';
        $apiGames = new ApiGames;
        if (!method_exists($apiGames, $input_post['game'])) {
            $result = array('response' => false, 'data' => array('msg' => 'Game not found (' . $input_post['game'] . ')'));
        } else {
            $result = json_decode($apiGames->{$input_post['game']}($input_post['user_id'], $input_post['other_id']), true);
            if ($result['status'] == 200) {
                if ($is_new) {
                    mysqli_query($db, "INSERT INTO accounts (code, user_id, other_id, nickname, expired_at) VALUES ('" . $input_post['game'] . "', '" . $input_post['user_id'] . "', '" . $input_post['other_id'] . "', '" . $result['nickname'] . "', '" . strtotime('+7 day') . "')");
                } else {
                    mysqli_query($db, "UPDATE accounts SET nickname = '" . $result['nickname'] . "', expired_at = '" . strtotime('+7 day') . "' WHERE id = '" . $dataAccount['id'] . "'");
                }
                $result = array('response' => true, 'data' => $result);
            } else {
                $result = array('response' => false, 'data' => $result);
            }
        }
    }
    exit(print(json_encode($result, JSON_PRETTY_PRINT)));
} else {
    exit(print(json_encode(array('response' => false, 'data' => array('msg' => 'Invalid Request')), JSON_PRETTY_PRINT)));
}
