<?php

/*

8 Ball Pool                             = EIGHT_BALL_POOL           2180533717
Aether Gazer                            = AETHER_GAZER              53687921700
Arena of Valor                          = AOV                       2748846783202461
Asphalt 9: Legends                      = GAMELOFT_A9               3e031e | ios (IOS)
AU2 Mobile                              = AU_TWO_MOBILE             662311
Auto Chess                              = AUTO_CHESS                GTFWF1
Azur Lane                               = AZUR_LANE                 271394707 | 4 (Washington)
Badlanders                              = BAD_LANDERS               3542797653 | 11001 (Global)
BarbarQ                                 = ELECSOUL                  DV0165253
Basketrio                               = BASKETRIO                 93398 | 2 (Buzzer Beater)
Call of Duty Mobile                     = CALL_OF_DUTY              10808316016143544796
Captain Tsubasa: Dream Team             = CAPTAIN_TSUBASA           123456789
Crisis Action                           = CA_HEROGAMES              483395457 | 2003 (Avenger)
Dragon City                             = DRAGON_CITY               3281168132375957269
Dragon Raja                             = ZULONG_DRAGON_RAJA        1333896351
EOS RED                                 = EOS_RED                   Md0P0q2sdZbkGaYTYN2yZSJhCj83 | 15 (MARIE)
Farlight 84                             = FARLIGHT84                12787216
Football Master 2                       = FOOTBALL_MASTER           SXM2_soccer2_prd_296_ia8kvv
Free Fire                               = FREEFIRE                  116502997
Genshin Impact                          = GENSHIN_IMPACT            700001772 | os_euro (Europe)
Hago                                    = HAGO                      31148107
Identity V                              = IDENTITY_V                839263 | 2001 (Asia)
Laplace M                               = ZLONGAME                  500218273
League of Legends: Wild Rift            = WILD_RIFT                 Westbourne#SEA
LifeAfter                               = NETEASE_LIFEAFTER         22512309 | 520006 (MileStone)
MARVEL Duel                             = MARVEL_DUEL               3939705020
Mobile Legends: Bang Bang               = MOBILE_LEGENDS            604210151 | 8425
Mobile Legends: Adventure               = ADVENTURE                 27968096 | 70284
MU Origin 2                             = OURPALM                   78123282 | S651
ONE PUNCH MAN: The Strongest            = ONE_PUNCH_MAN             444470_310001 | 310001
Onmyoji Arena                           = ONMYOJI_ARENA             3022022128
Point Blank                             = POINT_BLANK               febiantolie
Ragnarok M: Eternal Love Big Cat Coin   = GRAVITY_RAGNAROK_M        4297559571 | 90001 (Eternal Love)
Ragnarok X: Next Generation             = RAGNAROK_X                4611687693683257090 | 2031 (Golden Route)
Sausage Man                             = SAUSAGE_MAN               7fs17x
Speed Drifters                          = SPEEDDRIFTERS             11822383813845047
Super Mecha Champions                   = SUPER_MECHA_CHAMPIONS     1943687
Super SUS                               = SUPER_SUS                 15916605
VALORANT                                = VALORANT                  Diezyyy#666
ZEPETO                                  = NAVER_Z_CORPORATION       zepeto

*/

namespace Aditdev;

class ApiGames
{
    const API_CODASHOP      = 'https://order-sg.codashop.com/initPayment.action';
    const API_DUNIAGAMES    = 'https://api.duniagames.co.id/api/transaction/v1/top-up/inquiry/store';
    const API_BOSBOSGAMES   = 'https://www.bosbosgames.com/web/infullRequest.do';
    const API_XDG           = 'https://xdg-hk.xd.com/api/v1/user/get_role?client_id=zuRsHFfcY2KtVql3&server_id=global-release&character_id=';
    const API_DANCINGIDOL   = 'http://dancingidol.uniuhk.com/api/role/info?roleId=';

    public function EIGHT_BALL_POOL($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 205678,
            'voucherPricePoint.price'           => 140000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'EIGHT_BALL_POOL',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function AETHER_GAZER($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 62,
            'voucherPricePoint.price'           => 765900.0,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => '547-AETHER_GAZER',
            'lvtId'                             => 11840,
            'shopLang'                          => 'id_ID',
            'dynamicSkuToken'                   => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCJjb20ueW9zdGFyLmFldGhlcmdhemVyLnNoaWZ0aW5nZmxvd2VyNVwiLFwiZXZlbnRQYWNrYWdlXCI6XCIwXCIsXCJkZW5vbUltYWdlVXJsXCI6XCJodHRwczovL2NkbjEuY29kYXNob3AuY29tL2ltYWdlcy81NDdfM2QyMTBiNzUtNTJkYi00YjUxLTgzMGYtZDYxMTFiNjFkNDQ5X0FFVEhFUiBHQVpFUl9pbWFnZS9Db2RhX0FHX1NLVWltYWdlcy8yOTkwLnBuZ1wiLFwiZGVub21OYW1lXCI6XCIyOTkwIFNoaWZ0aW5nIEZsb3dlcnNcIixcImRlbm9tQ2F0ZWdvcnlOYW1lXCI6XCJTaGlmdGluZyBGbG93ZXJzXCIsXCJ0YWdzXCI6W10sXCJjb3VudHJ5Mk5hbWVcIjpcIklEXCIsXCJsdnRJZFwiOjExODQwfSJ9.qyp6OeAstvp7_0tRS4vWuvcko6D4quDUGTTRMWrbrHM',
            'pricePointDynamicSkuToken'         => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjc2NTkwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo3NjU5MDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwicHJpY2VCZWZvcmVUYXhcIjo2OTAwMDAuMCxcInRheEFtb3VudFwiOjc1OTAwLjAsXCJza3VJZFwiOlwiY29tLnlvc3Rhci5hZXRoZXJnYXplci5zaGlmdGluZ2Zsb3dlcjVcIixcImx2dElkXCI6MTE4NDB9In0.8WW45qBicqad7rTGEFzMOEWUmkxEwIm76-nd0yVBTYc'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function AOV($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 8003,
            'voucherPricePoint.price'           => 300000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'AOV',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['roles'][0]['role'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function GAMELOFT_A9($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 114548,
            'voucherPricePoint.price'           => 479700.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'GAMELOFT_A9',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function AU_TWO_MOBILE($id, $otherid = '')
    {
        $response = json_decode(self::Request(self::API_DANCINGIDOL . $id, '', 'dancingidol'), true);
        if (isset($response['data']['rolename']) && !empty($response['data']['rolename'])) {
            return json_encode(['status' => 200, 'nickname' => $response['data']['rolename']]);
        } else {
            return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
        }
    }

    public function AUTO_CHESS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 203896,
            'voucherPricePoint.price'           => 250000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'AUTO_CHESS',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function AZUR_LANE($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 99716,
            'voucherPricePoint.price'           => 590000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'AZUR_LANE',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function BAD_LANDERS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 124099,
            'voucherPricePoint.price'           => 705000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'BAD_LANDERS',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function ELECSOUL($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 5171,
            'voucherPricePoint.price'           => 660000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '1',
            'voucherTypeName'                   => 'ELECSOUL',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['result'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function BASKETRIO($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 147203,
            'voucherPricePoint.price'           => 832500.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'BASKETRIO',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function CALL_OF_DUTY($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 46251,
            'voucherPricePoint.price'           => 2000000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'CALL_OF_DUTY',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['roles'][0]['role'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function CAPTAIN_TSUBASA($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 352113,
            'voucherPricePoint.price'           => 1099000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'CAPTAIN_TSUBASA',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function CA_HEROGAMES($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 3745,
            'voucherPricePoint.price'           => 300000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'HEROGAMES',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function DRAGON_CITY($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 254278,
            'voucherPricePoint.price'           => 479000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'DRAGON_CITY',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function ZULONG_DRAGON_RAJA($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 75648,
            'voucherPricePoint.price'           => 1000000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'ZULONG_DRAGON_RAJA',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function EOS_RED($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 182235,
            'voucherPricePoint.price'           => 852139.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'EOS_RED',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function FARLIGHT84($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 229,
            'voucherPricePoint.price'           => 559900.0,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'FARLIGHT84',
            'lvtId'                             => 4138,
            'shopLang'                          => 'id_ID',
            'dynamicSkuToken'                   => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCJjb20ubWlyYWNsZWdhbWVzLnNvbGFybGFuZC5sb3Rjb2luXzQwMDBcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiaHR0cHM6Ly9jZG4xLmNvZGFzaG9wLmNvbS9pbWFnZXMvNzQzXzkwMTk2YjZlLTlkODYtNGM4Ni1hZmJiLTY4NTg0M2QyNzM5Y19GYXJsaWdodCA4NF9pbWFnZS80NzAwX0ZhcmxpZ2h0X0RpYW1vbmRzLnBuZ1wiLFwiZGVub21OYW1lXCI6XCI0NzAwIERpYW1vbmRzXCIsXCJkZW5vbUNhdGVnb3J5TmFtZVwiOlwiVW5jYXRlZ29yaXplZFwiLFwidGFnc1wiOltdLFwiY291bnRyeTJOYW1lXCI6XCJJRFwiLFwibHZ0SWRcIjo0MTM4fSJ9.i442v0Nxnnq09y0r5V9N-xJ6w4x5bd9jhqExylX_u7s',
            'pricePointDynamicSkuToken'         => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjU1OTkwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo1NTk5MDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwicHJpY2VCZWZvcmVUYXhcIjo1MDQ0MTQuMCxcInRheEFtb3VudFwiOjU1NDg2LjAsXCJza3VJZFwiOlwiY29tLm1pcmFjbGVnYW1lcy5zb2xhcmxhbmQubG90Y29pbl80MDAwXCIsXCJsdnRJZFwiOjQxMzh9In0.RXIVBNGby3DdMmpjoqAjDWfyLserZaZ0Ajshqp2ioLM'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function FOOTBALL_MASTER($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 185403,
            'voucherPricePoint.price'           => 1000000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'FOOTBALL_MASTER',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function FREEFIRE($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 28153,
            'voucherPricePoint.price'           => 1000000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'FREEFIRE',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['roles'][0]['role'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function GENSHIN_IMPACT($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 116118,
            'voucherPricePoint.price'           => 815000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'GENSHIN_IMPACT',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function HAGO($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 16153,
            'voucherPricePoint.price'           => 544500.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'HAGO',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function IDENTITY_V($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 59703,
            'voucherPricePoint.price'           => 725000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'IDENTITY_V',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function ZLONGAME($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 25528,
            'voucherPricePoint.price'           => 739000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'ZLONGAME',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function WILD_RIFT($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 372111,
            'voucherPricePoint.price'           => 360000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'WILD_RIFT',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function NETEASE_LIFEAFTER($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 45798,
            'voucherPricePoint.price'           => 1098977.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'NETEASE_LIFEAFTER',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function MARVEL_DUEL($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 155959,
            'voucherPricePoint.price'           => 739000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'MARVEL_DUEL',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function MOBILE_LEGENDS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 27684,
            'voucherPricePoint.price'           => 527250.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'MOBILE_LEGENDS',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function ADVENTURE($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 36359,
            'voucherPricePoint.price'           => 739000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'ADVENTURE',
            'voucherTypeId'                     => 47,
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function OURPALM($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 16273,
            'voucherPricePoint.price'           => 550000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => preg_replace('/\D/', '', $otherid),
            'voucherTypeName'                   => 'OURPALM',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function ONE_PUNCH_MAN($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 77832,
            'voucherPricePoint.price'           => 5500000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'ONE_PUNCH_MAN',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function ONMYOJI_ARENA($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 46466,
            'voucherPricePoint.price'           => 706000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'ONMYOJI_ARENA',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function POINT_BLANK($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 54790,
            'voucherPricePoint.price'           => 550000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'POINT_BLANK',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function GRAVITY_RAGNAROK_M($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 414041,
            'voucherPricePoint.price'           => 1519050.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'GRAVITY_RAGNAROK_M',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function RAGNAROK_X($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 195837,
            'voucherPricePoint.price'           => 1000000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => $otherid,
            'voucherTypeName'                   => 'RAGNAROK_X',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function SAUSAGE_MAN($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 256634,
            'voucherPricePoint.price'           => 1599000.0,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => 'global-release',
            'voucherTypeName'                   => 'SAUSAGE_MAN',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function SPEEDDRIFTERS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 12861,
            'voucherPricePoint.price'           => 1000000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'SPEEDDRIFTERS',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['roles'][0]['role'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function SUPER_MECHA_CHAMPIONS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 37815,
            'voucherPricePoint.price'           => 706000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'SUPER_MECHA_CHAMPIONS',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function SUPER_SUS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 266162,
            'voucherPricePoint.price'           => 681000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'SUPER_SUS',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function VALORANT($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 950605,
            'voucherPricePoint.price'           => 739000.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'VALORANT',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function NAVER_Z_CORPORATION($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => 937273,
            'voucherPricePoint.price'           => 1082050.0000,
            'voucherPricePoint.variablePrice'   => 0,
            'user.userId'                       => $id,
            'user.zoneId'                       => '',
            'voucherTypeName'                   => 'NAVER_Z_CORPORATION',
            'shopLang'                          => 'id_ID'
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['username'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    protected function buildHeaders($provider)
    {
        $headers = [];
        if ($provider == 'codashop') {
            $headers = array(
                'Content-Type: application/json',
                'Origin: https://www.codashop.com',
                'Referer: https://www.codashop.com/',
                'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Mobile Safari/537.36',
            );
        } elseif ($provider == 'duniagames') {
            $headers = array(
                'Content-Type: application/json',
                'Host: api.duniagames.co.id',
                'Origin: https://duniagames.co.id',
                'Referer: https://duniagames.co.id/',
                'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Mobile Safari/537.36'
            );
        } elseif ($provider == 'bosbosgames') {
            $headers = array(
                'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
                'Cookie: _ga=GA1.2.298876061.1652097083; _gid=GA1.2.1859066530.1654426776; aliyungf_tc=7f81248f2e832e4a3ea67cf14a5791629061b6016866ffb0391a681cb00325ef',
                'Host: www.bosbosgames.com',
                'Origin: https://www.bosbosgames.com',
                'Referer: https://www.bosbosgames.com/web/webInfull.do',
                'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Mobile Safari/537.36',
                'X-Requested-With: XMLHttpRequest'
            );
        } elseif ($provider == 'xdg') {
            $headers = array(
                'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
                'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Mobile Safari/537.36',
                'X-Requested-With: XMLHttpRequest'
            );
        } elseif ($provider == 'dancingidol') {
            $headers = array(
                'Host: dancingidol.uniuhk.com',
                'Referer: http://dancingidol.uniuhk.com/payment'
            );
        }
        return $headers;
    }

    protected function Request($url, $post, $provider, $json = true)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
        ));
        if (!empty($post)) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, ($json) ? json_encode($post) : http_build_query($post));
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, self::buildHeaders($provider));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
