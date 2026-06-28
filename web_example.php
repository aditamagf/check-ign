<?php

require 'src/ApiGames.php';

use Aditdev\ApiGames;

$api = new ApiGames();

// Modern API: returns an array.
print_r($api->check('MOBILE_LEGENDS', '604210151', '8425'));

// Legacy API: returns a JSON string (still supported).
echo $api->GROWTOPIA('Mrshadnic');
// echo $api->FREEFIRE('<userID>');
