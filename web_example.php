<?php

require 'src/ApiGames.php';

use Aditdev\ApiGames;

$api = new ApiGames;

echo $api->EIGHT_BALL_POOL('2180533717');
// echo $api->FREEFIRE('<userID>');
