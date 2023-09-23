<?php

require 'src/ApiGames.php';

use Aditdev\ApiGames;

$api = new ApiGames;

echo $api->MOBILE_LEGENDS('<userID>', '<zoneID>');
echo $api->FREEFIRE('<userID>');
