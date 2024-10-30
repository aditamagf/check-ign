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
Growtopia                               = GROWTOPIA                 Mrshadnic
Hago                                    = HAGO                      31148107
Identity V                              = IDENTITY_V                839263 | 2001 (Asia)
Laplace M                               = ZLONGAME                  500218273
League of Legends: Wild Rift            = WILD_RIFT                 Westbourne#SEA
LifeAfter                               = NETEASE_LIFEAFTER         22512309 | 520006 (MileStone)
Love and Deepspace                      = LOVE_AND_DEEPSPACE        81001445172
MARVEL Duel                             = MARVEL_DUEL               3939705020
Mobile Legends: Bang Bang               = MOBILE_LEGENDS            604210151 | 8425
Mobile Legends: Adventure               = ADVENTURE                 27968096 | 70284
MU Origin 2                             = OURPALM                   78123282 | S651
ONE PUNCH MAN: The Strongest            = ONE_PUNCH_MAN             444470_310001 | 310001
Onmyoji Arena                           = ONMYOJI_ARENA             3022022128
Pixel Gun 3D                            = PIXEL_GUN_3D              198180845
Point Blank                             = POINT_BLANK               febiantolie
Ragnarok M: Eternal Love Big Cat Coin   = GRAVITY_RAGNAROK_M        4297559571 | 90001 (Eternal Love)
Ragnarok X: Next Generation             = RAGNAROK_X                4611687693683257090 | 2031 (Golden Route)
Sausage Man                             = SAUSAGE_MAN               7fs17x
Speed Drifters                          = SPEEDDRIFTERS             11822383813845047
Super Mecha Champions                   = SUPER_MECHA_CHAMPIONS     1943687
Super SUS                               = SUPER_SUS                 15916605
VALORANT                                = VALORANT                  Diezyyy#666
War Planet Online                       = WAR_PLANET_ONLINE         mdc:9dd2
Watcher of Realms                       = WATCHER_OF_REALMS         6573780 | 50088
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
        $postdata = self::buildBodys(205678, 140000.0000, 0, $id, '', 'EIGHT_BALL_POOL', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(62, 765900.0, 0, $id, '', '547-AETHER_GAZER', 11840, 'id_ID', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCJjb20ueW9zdGFyLmFldGhlcmdhemVyLnNoaWZ0aW5nZmxvd2VyNVwiLFwiZXZlbnRQYWNrYWdlXCI6XCIwXCIsXCJkZW5vbUltYWdlVXJsXCI6XCJodHRwczovL2NkbjEuY29kYXNob3AuY29tL2ltYWdlcy81NDdfM2QyMTBiNzUtNTJkYi00YjUxLTgzMGYtZDYxMTFiNjFkNDQ5X0FFVEhFUiBHQVpFUl9pbWFnZS9Db2RhX0FHX1NLVWltYWdlcy8yOTkwLnBuZ1wiLFwiZGVub21OYW1lXCI6XCIyOTkwIFNoaWZ0aW5nIEZsb3dlcnNcIixcImRlbm9tQ2F0ZWdvcnlOYW1lXCI6XCJTaGlmdGluZyBGbG93ZXJzXCIsXCJ0YWdzXCI6W10sXCJjb3VudHJ5Mk5hbWVcIjpcIklEXCIsXCJsdnRJZFwiOjExODQwfSJ9.qyp6OeAstvp7_0tRS4vWuvcko6D4quDUGTTRMWrbrHM', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjc2NTkwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo3NjU5MDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwicHJpY2VCZWZvcmVUYXhcIjo2OTAwMDAuMCxcInRheEFtb3VudFwiOjc1OTAwLjAsXCJza3VJZFwiOlwiY29tLnlvc3Rhci5hZXRoZXJnYXplci5zaGlmdGluZ2Zsb3dlcjVcIixcImx2dElkXCI6MTE4NDB9In0.8WW45qBicqad7rTGEFzMOEWUmkxEwIm76-nd0yVBTYc');
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
        $postdata = self::buildBodys(8003, 300000.0000, 0, $id, '', 'AOV', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(114548, 479700.0000, 0, $id, $otherid, 'GAMELOFT_A9', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(203896, 250000.0000, 0, $id, '', 'AUTO_CHESS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(99716, 590000.0000, 0, $id, $otherid, 'AZUR_LANE', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(124099, 705000.0000, 0, $id, $otherid, 'BAD_LANDERS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(5171, 660000.0000, 0, $id, '1', 'ELECSOUL', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(147203, 832500.0000, 0, $id, $otherid, 'BASKETRIO', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(46251, 2000000.0000, 0, $id, '', 'CALL_OF_DUTY', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(352113, 1099000.0000, 0, $id, '', 'CAPTAIN_TSUBASA', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(3745, 300000.0000, 0, $id, $otherid, 'HEROGAMES', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(254278, 479000.0000, 0, $id, '', 'DRAGON_CITY', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(75648, 1000000.0000, 0, $id, '', 'ZULONG_DRAGON_RAJA', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(182235, 852139.0000, 0, $id, $otherid, 'EOS_RED', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(229, 559900.0, 0, $id, '', 'FARLIGHT84', 4138, 'id_ID', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCJjb20ubWlyYWNsZWdhbWVzLnNvbGFybGFuZC5sb3Rjb2luXzQwMDBcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiaHR0cHM6Ly9jZG4xLmNvZGFzaG9wLmNvbS9pbWFnZXMvNzQzXzkwMTk2YjZlLTlkODYtNGM4Ni1hZmJiLTY4NTg0M2QyNzM5Y19GYXJsaWdodCA4NF9pbWFnZS80NzAwX0ZhcmxpZ2h0X0RpYW1vbmRzLnBuZ1wiLFwiZGVub21OYW1lXCI6XCI0NzAwIERpYW1vbmRzXCIsXCJkZW5vbUNhdGVnb3J5TmFtZVwiOlwiVW5jYXRlZ29yaXplZFwiLFwidGFnc1wiOltdLFwiY291bnRyeTJOYW1lXCI6XCJJRFwiLFwibHZ0SWRcIjo0MTM4fSJ9.i442v0Nxnnq09y0r5V9N-xJ6w4x5bd9jhqExylX_u7s', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjU1OTkwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo1NTk5MDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwicHJpY2VCZWZvcmVUYXhcIjo1MDQ0MTQuMCxcInRheEFtb3VudFwiOjU1NDg2LjAsXCJza3VJZFwiOlwiY29tLm1pcmFjbGVnYW1lcy5zb2xhcmxhbmQubG90Y29pbl80MDAwXCIsXCJsdnRJZFwiOjQxMzh9In0.RXIVBNGby3DdMmpjoqAjDWfyLserZaZ0Ajshqp2ioLM');
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
        $postdata = self::buildBodys(185403, 1000000.0000, 0, $id, '', 'FOOTBALL_MASTER', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(28153, 1000000.0000, 0, $id, '', 'FREEFIRE', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(116118, 815000.0000, 0, $id, $otherid, 'GENSHIN_IMPACT', '', 'id_ID', '', '');
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

    public function GROWTOPIA($id, $otherid = '')
    {
        $postdata = self::buildBodys(398701, 800000.0000, 0, $id, '', 'GROWTOPIA', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(16153, 544500.0000, 0, $id, $otherid, 'HAGO', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(59703, 725000.0000, 0, $id, $otherid, 'IDENTITY_V', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(25528, 739000.0000, 0, $id, '', 'ZLONGAME', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(372111, 360000.0000, 0, $id, '', 'WILD_RIFT', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(45798, 1098977.0000, 0, $id, $otherid, 'NETEASE_LIFEAFTER', '', 'id_ID', '', '');
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

    public function LOVE_AND_DEEPSPACE($id, $otherid = '')
    {
        $postdata = self::buildBodys(125, 799000.0, 0, $id, '', 'INFOLD_GAMES-LOVE_AND_DEEPSPACE', 11684, 'id_ID', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCI2XzEwMDVcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiaHR0cHM6Ly9jZG4xLmNvZGFzaG9wLmNvbS9pbWFnZXMvOTE2XzQ0Y2MyNmU3LWU3NDctNDk4NS04MzQ1LWZmODFjMGUwM2QxN19MT1ZFIEFORCBERUVQU1BBQ0VfaW1hZ2UvMzI4MCBDcnlzdGFscy5wbmdcIixcImRlbm9tTmFtZVwiOlwiMzI4MCBDcnlzdGFscys3MjAgRGlhbW9uZHNcIixcImRlbm9tQ2F0ZWdvcnlOYW1lXCI6XCJDcnlzdGFsXCIsXCJ0YWdzXCI6W10sXCJjb3VudHJ5Mk5hbWVcIjpcIklEXCIsXCJsdnRJZFwiOjExNjg0LFwiZGVmYXVsdFByaWNlXCI6Nzk5MDAwLjAsXCJkZWZhdWx0Q3VycmVuY3lcIjpcIklEUlwiLFwiYWRkaXRpb25hbEluZm9cIjp7XCJEeW5hbWljU2t1UHJvbW9EZXRhaWxcIjpcIm51bGxcIixcIkxveWFsdHlDdXJyZW5jeURldGFpbFwiOlwie1xcXCJwcmljaW5nU2NoZW1lXFxcIjpcXFwicGFpZF9jdXJyZW5jeVxcXCIsXFxcImxveWFsdHlFYXJuZWRBbW91bnRcXFwiOjAuMCxcXFwibG95YWx0eUJ1cm5lZEFtb3VudFxcXCI6MC4wfVwifX0ifQ.9qYXDANw-mvEGUDZwJWYHow4xe1aMy27ATQ3HwRMpqc', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjoyMjAsXCJwcmljZVwiOjc5OTAwMC4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo3OTkwMDAuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwiZGlzY291bnRQcmljZVwiOjc5OTAwMC4wLFwicHJpY2VCZWZvcmVUYXhcIjo3MTk4MjAuMCxcInRheEFtb3VudFwiOjc5MTgwLjAsXCJza3VJZFwiOlwiNl8xMDA1XCIsXCJsdnRJZFwiOjExNjg0fSJ9.egPFavIM4u6tfG5wjYyCwXWY8IQZkLF4UbnqdOzHpGc', 423);
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
        $postdata = self::buildBodys(155959, 739000.0000, 0, $id, '', 'MARVEL_DUEL', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(27684, 527250.0000, 0, $id, $otherid, 'MOBILE_LEGENDS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(36359, 739000.0000, 0, $id, $otherid, 'ADVENTURE', '', 'id_ID', '', '', 47);
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
        $postdata = self::buildBodys(16273, 550000.0000, 0, $id, preg_replace('/\D/', '', $otherid), 'OURPALM', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(77832, 5500000.0000, 0, $id, $otherid, 'ONE_PUNCH_MAN', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(46466, 706000.0000, 0, $id, '', 'ONMYOJI_ARENA', '', 'id_ID', '', '');
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

    public function PIXEL_GUN_3D($id, $otherid = '')
    {
        $postdata = self::buildBodys(410, 788767.0, 0, $id, '', 'PIXEL_GUN_3D', 11461, 'id_ID', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInNrdUlkXCI6XCIyMDE1OjIyMDBcIixcImV2ZW50UGFja2FnZVwiOlwiMFwiLFwiZGVub21JbWFnZVVybFwiOlwiXCIsXCJkZW5vbU5hbWVcIjpcIjIyMDAgR2Vtc1wiLFwiZGVub21DYXRlZ29yeU5hbWVcIjpcIkdlbXNcIixcInRhZ3NcIjpbXSxcImNvdW50cnkyTmFtZVwiOlwiSURcIixcImx2dElkXCI6MTE0NjEsXCJkZWZhdWx0UHJpY2VcIjo3ODg3NjYuMCxcImRlZmF1bHRDdXJyZW5jeVwiOlwiSURSXCIsXCJhZGRpdGlvbmFsSW5mb1wiOntcIkR5bmFtaWNTa3VQcm9tb0RldGFpbFwiOlwibnVsbFwiLFwiTG95YWx0eUN1cnJlbmN5RGV0YWlsXCI6XCJ7XFxcInByaWNpbmdTY2hlbWVcXFwiOlxcXCJwYWlkX2N1cnJlbmN5XFxcIixcXFwibG95YWx0eUVhcm5lZEFtb3VudFxcXCI6MC4wLFxcXCJsb3lhbHR5QnVybmVkQW1vdW50XFxcIjowLjB9XCJ9fSJ9.Ejfuo0gIJHP2drx6Q6Ax0L8U8la7iyyoeGRwz5kYCdM', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkeW5hbWljU2t1SW5mbyI6IntcInBjSWRcIjo5MDYsXCJwcmljZVwiOjc4ODc2Ny4wLFwiY3VycmVuY3lcIjpcIklEUlwiLFwiYXBpUHJpY2VcIjo3ODg3NjYuMCxcImFwaVByaWNlQ3VycmVuY3lcIjpcIklEUlwiLFwiZGlzY291bnRQcmljZVwiOjc4ODc2Ny4wLFwicHJpY2VCZWZvcmVUYXhcIjo3MTA2MDEuMCxcInRheEFtb3VudFwiOjc4MTY2LjAsXCJza3VJZFwiOlwiMjAxNToyMjAwXCIsXCJsdnRJZFwiOjExNDYxfSJ9.evXYDJkpDK2BCTSF3TxajPyQske4BpEkzAD6CSW-Vig', 355);
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
        $postdata = self::buildBodys(54790, 550000.0000, 0, $id, '', 'POINT_BLANK', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(414041, 1519050.0000, 0, $id, $otherid, 'GRAVITY_RAGNAROK_M', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(195837, 1000000.0000, 0, $id, $otherid, 'RAGNAROK_X', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(256634, 1599000.0000, 0, $id, 'global-release', 'SAUSAGE_MAN', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(12861, 1000000.0000, 0, $id, '', 'SPEEDDRIFTERS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(37815, 706000.0000, 0, $id, '', 'SUPER_MECHA_CHAMPIONS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(266162, 681000.0000, 0, $id, '', 'SUPER_SUS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(950605, 739000.0000, 0, $id, '', 'VALORANT', '', 'id_ID', '', '');
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

    public function WAR_PLANET_ONLINE($id, $otherid = '')
    {
        $postdata = self::buildBodys(424705, 535000.0000, 0, $id, '', 'WAR_PLANET_ONLINE', '', 'id_ID', '', '');
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

    public function WATCHER_OF_REALMS($id, $otherid = '')
    {
        $postdata = self::buildBodys(963012, 819000.0000, 0, $id, $otherid, 'WATCHER_OF_REALMS', '', 'id_ID', '', '');
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
        $postdata = self::buildBodys(937273, 1082050.0000, 0, $id, '', 'NAVER_Z_CORPORATION', '', 'id_ID', '', '');
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

    protected function buildBodys($vppId, $vppPrice, $vppvarPrice, $userId, $zoneId, $voucherTypeName, $lvtId, $shopLang, $dynamicSkuToken = '', $pricePointDynamicSkuToken = '', $voucherTypeId = '')
    {
        $postdata = [
            'voucherPricePoint.id'              => $vppId,
            'voucherPricePoint.price'           => $vppPrice,
            'voucherPricePoint.variablePrice'   => $vppvarPrice,
            'user.userId'                       => $userId,
            'user.zoneId'                       => $zoneId,
            'voucherTypeName'                   => $voucherTypeName,
            'lvtId'                             => $lvtId,
            'shopLang'                          => $shopLang,
            'dynamicSkuToken'                   => $dynamicSkuToken,
            'pricePointDynamicSkuToken'         => $pricePointDynamicSkuToken,
            'voucherTypeId'                     => $voucherTypeId
        ];

        return $postdata;
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
