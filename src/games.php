<?php

/*
 * Game registry (data-driven).
 * ----------------------------------------------------------------------------
 * Adding a game  : add one entry below.
 * Removing a game: delete its entry.
 *
 * All Codashop games use the initPayment flow. Per-game schema:
 *   'GAME_CODE' => [
 *       'name'            => 'Human readable name',     // for docs/listing
 *       'provider'        => 'codashop',                // default: codashop
 *       'vppId'           => 12345,                     // voucherPricePoint.id
 *       'price'           => 100000.0,                  // voucherPricePoint.price
 *       'zone'            => 'user' | '<fixed value>',  // omit if no server/zone
 *       'zoneFilter'      => 'digits',                  // optional, strips non-digits
 *       'voucherTypeName' => 'OVERRIDE',                // optional, default = GAME_CODE
 *       'nickname'        => 'username'|'role'|'result',// response path, default username
 *       'lvtId'           => 11840,                     // optional (SKU-token games)
 *       'dynamicSkuToken' => '...',                     // optional
 *       'pricePointDynamicSkuToken' => '...',           // optional
 *       'voucherTypeId'   => 47,                        // optional
 *       'errorMessage'    => 'Invalid ID or Server',    // optional, default 'Invalid ID'
 *   ]
 *
 * 'zone' meaning:
 *   - omitted   -> no zone is sent
 *   - 'user'    -> the second argument (server/zone id) is used
 *   - any other -> a fixed server value is always sent
 *
 * Non-Codashop providers (e.g. 'dancingidol') ignore the Codashop-specific keys.
 *
 * Dynamic-SKU titles (e.g. VALORANT) use 'provider' => 'codashop_dynamic' and
 * resolve short-lived tokens at runtime. They require these extra keys:
 *   pageUrl, productPath, skuId, paymentChannelId, voucherTypeId, lvtId, gvtId.
 * See src/Providers/CodashopDynamicProvider.php for the full flow.
 */

return [
    'EIGHT_BALL_POOL' => ['name' => '8 Ball Pool', 'vppId' => 205678, 'price' => 140000.0],
    'AOV' => ['name' => 'Arena of Valor', 'vppId' => 8003, 'price' => 300000.0, 'nickname' => 'role'],
    'GAMELOFT_A9' => ['name' => 'Asphalt 9: Legends', 'vppId' => 114548, 'price' => 479700.0, 'zone' => 'user'],
    'AU_TWO_MOBILE' => ['name' => 'AU2 Mobile', 'provider' => 'dancingidol', 'errorMessage' => 'Invalid ID'],
    'AUTO_CHESS' => ['name' => 'Auto Chess', 'vppId' => 203896, 'price' => 250000.0],
    'AZUR_LANE' => ['name' => 'Azur Lane', 'vppId' => 99716, 'price' => 590000.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'BAD_LANDERS' => ['name' => 'Badlanders', 'vppId' => 124099, 'price' => 705000.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'BASKETRIO' => ['name' => 'Basketrio', 'vppId' => 147203, 'price' => 832500.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'CALL_OF_DUTY' => ['name' => 'Call of Duty Mobile', 'vppId' => 46251, 'price' => 2000000.0, 'nickname' => 'role'],
    'CAPTAIN_TSUBASA' => ['name' => 'Captain Tsubasa: Dream Team', 'vppId' => 352113, 'price' => 1099000.0],
    'CA_HEROGAMES' => ['name' => 'Crisis Action', 'vppId' => 3745, 'price' => 300000.0, 'zone' => 'user', 'voucherTypeName' => 'HEROGAMES', 'errorMessage' => 'Invalid ID or Server'],
    'DRAGON_CITY' => ['name' => 'Dragon City', 'vppId' => 254278, 'price' => 479000.0],
    'ZULONG_DRAGON_RAJA' => ['name' => 'Dragon Raja', 'vppId' => 75648, 'price' => 1000000.0],
    'EOS_RED' => ['name' => 'EOS RED', 'vppId' => 182235, 'price' => 852139.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'FARLIGHT84' => ['name' => 'Farlight 84', 'vppId' => 229, 'price' => 559900.0, 'lvtId' => 4138, 'dynamicSkuToken' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCJjb20ubWlyYWNsZWdhbWVzLnNvbGFybGFuZC5sb3Rjb2luXzQwMDBcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiaHR0cHM6Ly9jZG4xLmNvZGFzaG9wLmNvbS9pbWFnZXMvNzQzXzkwMTk2YjZlLTlkODYtNGM4Ni1hZmJiLTY4NTg0M2QyNzM5Y19GYXJsaWdodCA4NF9pbWFnZS80NzAwX0ZhcmxpZ2h0X0RpYW1vbmRzLnBuZ1wiLFwiZGVub21OYW1lXCI6XCI0NzAwIERpYW1vbmRzXCIsXCJkZW5vbUNhdGVnb3J5TmFtZVwiOlwiVW5jYXRlZ29yaXplZFwiLFwidGFnc1wiOltdLFwiY291bnRyeTJOYW1lXCI6XCJJRFwiLFwibHZ0SWRcIjo0MTM4fSJ9.i442v0Nxnnq09y0r5V9N-xJ6w4x5bd9jhqExylX_u7s', 'pricePointDynamicSkuToken' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjU1OTkwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo1NTk5MDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwicHJpY2VCZWZvcmVUYXhcIjo1MDQ0MTQuMCxcInRheEFtb3VudFwiOjU1NDg2LjAsXCJza3VJZFwiOlwiY29tLm1pcmFjbGVnYW1lcy5zb2xhcmxhbmQubG90Y29pbl80MDAwXCIsXCJsdnRJZFwiOjQxMzh9In0.RXIVBNGby3DdMmpjoqAjDWfyLserZaZ0Ajshqp2ioLM', 'errorMessage' => 'Invalid ID or Server'],
    'FOOTBALL_MASTER' => ['name' => 'Football Master 2', 'vppId' => 185403, 'price' => 1000000.0],
    'FREEFIRE' => ['name' => 'Free Fire', 'vppId' => 28153, 'price' => 1000000.0, 'nickname' => 'role'],
    'GENSHIN_IMPACT' => ['name' => 'Genshin Impact', 'vppId' => 116118, 'price' => 815000.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'GROWTOPIA' => ['name' => 'Growtopia', 'provider' => 'codashop_dynamic', 'pageUrl' => 'https://www.codashop.com/id-id/growtopia', 'productPath' => '/id/growtopia', 'skuId' => 'rt_grope_gem_fountain', 'paymentChannelId' => 220, 'voucherTypeName' => 'GROWTOPIA', 'voucherTypeId' => 307, 'lvtId' => 5445, 'gvtId' => 424, 'vppId' => 4, 'price' => 83876.0, 'errorMessage' => 'Invalid ID or Server'],
    'HAGO' => ['name' => 'Hago', 'vppId' => 16153, 'price' => 544500.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'ZLONGAME' => ['name' => 'Laplace M', 'vppId' => 25528, 'price' => 739000.0],
    'WILD_RIFT' => ['name' => 'League of Legends: Wild Rift', 'vppId' => 372111, 'price' => 360000.0],
    'NETEASE_LIFEAFTER' => ['name' => 'LifeAfter', 'vppId' => 45798, 'price' => 1098977.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'LOVE_AND_DEEPSPACE' => ['name' => 'Love and Deepspace', 'vppId' => 125, 'price' => 799000.0, 'voucherTypeName' => 'INFOLD_GAMES-LOVE_AND_DEEPSPACE', 'lvtId' => 11684, 'dynamicSkuToken' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCI2XzEwMDVcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiaHR0cHM6Ly9jZG4xLmNvZGFzaG9wLmNvbS9pbWFnZXMvOTE2XzQ0Y2MyNmU3LWU3NDctNDk4NS04MzQ1LWZmODFjMGUwM2QxN19MT1ZFIEFORCBERUVQU1BBQ0VfaW1hZ2UvMzI4MCBDcnlzdGFscy5wbmdcIixcImRlbm9tTmFtZVwiOlwiMzI4MCBDcnlzdGFscys3MjAgRGlhbW9uZHNcIixcImRlbm9tQ2F0ZWdvcnlOYW1lXCI6XCJDcnlzdGFsXCIsXCJ0YWdzXCI6W10sXCJjb3VudHJ5Mk5hbWVcIjpcIklEXCIsXCJsdnRJZFwiOjExNjg0LFwiZGVmYXVsdFByaWNlXCI6Nzk5MDAwLjAsXCJkZWZhdWx0Q3VycmVuY3lcIjpcIklEUlwiLFwiYWRkaXRpb25hbEluZm9cIjp7XCJEeW5hbWljU2t1UHJvbW9EZXRhaWxcIjpcIm51bGxcIixcIkxveWFsdHlDdXJyZW5jeURldGFpbFwiOlwie1xcXCJwcmljaW5nU2NoZW1lXFxcIjpcXFwicGFpZF9jdXJyZW5jeVxcXCIsXFxcImxveWFsdHlFYXJuZWRBbW91bnRcXFwiOjAuMCxcXFwibG95YWx0eUJ1cm5lZEFtb3VudFxcXCI6MC4wfVwifX0ifQ.9qYXDANw-mvEGUDZwJWYHow4xe1aMy27ATQ3HwRMpqc', 'pricePointDynamicSkuToken' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjc5OTAwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo3OTkwMDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwiZGlzY291bnRQcmljZVwiOjc5OTAwMC4wLFwicHJpY2VCZWZvcmVUYXhcIjo3MTk4MjAuMCxcInRheEFtb3VudFwiOjc5MTgwLjAsXCJza3VJZFwiOlwiNl8xMDA1XCIsXCJsdnRJZFwiOjExNjg0fSJ9.egPFavIM4u6tfG5wjYyCwXWY8IQZkLF4UbnqdOzHpGc', 'voucherTypeId' => 423, 'errorMessage' => 'Invalid ID or Server'],
    'MARVEL_DUEL' => ['name' => 'MARVEL Duel', 'vppId' => 155959, 'price' => 739000.0],
    'MOBILE_LEGENDS' => ['name' => 'Mobile Legends: Bang Bang', 'vppId' => 27684, 'price' => 527250.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'ADVENTURE' => ['name' => 'Mobile Legends: Adventure', 'vppId' => 36359, 'price' => 739000.0, 'zone' => 'user', 'voucherTypeId' => 47, 'errorMessage' => 'Invalid ID or Server'],
    'OURPALM' => ['name' => 'MU Origin 2', 'vppId' => 16273, 'price' => 550000.0, 'zone' => 'user', 'zoneFilter' => 'digits', 'errorMessage' => 'Invalid ID or Server'],
    'ONE_PUNCH_MAN' => ['name' => 'ONE PUNCH MAN: The Strongest', 'vppId' => 77832, 'price' => 5500000.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'ONMYOJI_ARENA' => ['name' => 'Onmyoji Arena', 'vppId' => 46466, 'price' => 706000.0],
    'PIXEL_GUN_3D' => ['name' => 'Pixel Gun 3D', 'vppId' => 410, 'price' => 788767.0, 'lvtId' => 11461, 'dynamicSkuToken' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCIyMDE1OjIyMDBcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiXCIsXCJkZW5vbU5hbWVcIjpcIjIyMDAgR2Vtc1wiLFwiZGVub21DYXRlZ29yeU5hbWVcIjpcIkdlbXNcIixcInRhZ3NcIjpbXSxcImNvdW50cnkyTmFtZVwiOlwiSURcIixcImx2dElkXCI6MTE0NjEsXCJkZWZhdWx0UHJpY2VcIjo3ODg3NjYuMCxcImRlZmF1bHRDdXJyZW5jeVwiOlwiSURSXCIsXCJhZGRpdGlvbmFsSW5mb1wiOntcIkR5bmFtaWNTa3VQcm9tb0RldGFpbFwiOlwibnVsbFwiLFwiTG95YWx0eUN1cnJlbmN5RGV0YWlsXCI6XCJ7XFxcInByaWNpbmdTY2hlbWVcXFwiOlxcXCJwYWlkX2N1cnJlbmN5XFxcIixcXFwibG95YWx0eUVhcm5lZEFtb3VudFxcXCI6MC4wLFxcXCJsb3lhbHR5QnVybmVkQW1vdW50XFxcIjowLjB9XCJ9fSJ9.Ejfuo0gIJHP2drx6Q6Ax0L8U8la7iyyoeGRwz5kYCdM', 'pricePointDynamicSkuToken' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjo5MDYsXCJwcmljZVwiOjc4ODc2Ny4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo3ODg3NjYuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwiZGlzY291bnRQcmljZVwiOjc4ODc2Ny4wLFwicHJpY2VCZWZvcmVUYXhcIjo3MTA2MDEuMCxcInRheEFtb3VudFwiOjc4MTY2LjAsXCJza3VJZFwiOlwiMjAxNToyMjAwXCIsXCJsdnRJZFwiOjExNDYxfSJ9.evXYDJkpDK2BCTSF3TxajPyQske4BpEkzAD6CSW-Vig', 'voucherTypeId' => 355],
    'POINT_BLANK' => ['name' => 'Point Blank', 'vppId' => 54790, 'price' => 550000.0],
    'GRAVITY_RAGNAROK_M' => ['name' => 'Ragnarok M: Eternal Love', 'vppId' => 414041, 'price' => 1519050.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'RAGNAROK_X' => ['name' => 'Ragnarok X: Next Generation', 'vppId' => 195837, 'price' => 1000000.0, 'zone' => 'user', 'errorMessage' => 'Invalid ID or Server'],
    'SAUSAGE_MAN' => ['name' => 'Sausage Man', 'vppId' => 256634, 'price' => 1599000.0, 'zone' => 'global-release'],
    'SPEEDDRIFTERS' => ['name' => 'Speed Drifters', 'vppId' => 12861, 'price' => 1000000.0, 'nickname' => 'role'],
    'SUPER_MECHA_CHAMPIONS' => ['name' => 'Super Mecha Champions', 'vppId' => 37815, 'price' => 706000.0],
    'SUPER_SUS' => ['name' => 'Super SUS', 'vppId' => 266162, 'price' => 681000.0],
    'VALORANT' => ['name' => 'VALORANT', 'provider' => 'codashop_dynamic', 'pageUrl' => 'https://www.codashop.com/id-id/valorant', 'productPath' => '/id/valorant', 'skuId' => 'defa5e21-a4f3-40eb-835b-79c67d9b9263', 'paymentChannelId' => 220, 'voucherTypeName' => 'VALORANT', 'voucherTypeId' => 109, 'lvtId' => 1321, 'gvtId' => 139, 'vppId' => 3, 'price' => 559000.0],
    'WAR_PLANET_ONLINE' => ['name' => 'War Planet Online', 'vppId' => 424705, 'price' => 535000.0],
    'WATCHER_OF_REALMS' => ['name' => 'Watcher of Realms', 'vppId' => 963012, 'price' => 819000.0, 'zone' => 'user'],
    'NAVER_Z_CORPORATION' => ['name' => 'ZEPETO', 'vppId' => 937273, 'price' => 1082050.0],
];
