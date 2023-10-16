<?php

namespace Aditdev;

class ApiGames
{
    const API_CODASHOP = 'https://order-sg.codashop.com/initPayment.action';
    const API_DUNIAGAMES = 'https://api.duniagames.co.id/api/transaction/v1/top-up/inquiry/store';
    const API_BOSBOSGAMES = 'https://www.bosbosgames.com/web/infullRequest.do';
    const API_XDG = 'https://xdg-hk.xd.com/api/v1/user/get_role?client_id=zuRsHFfcY2KtVql3&server_id=global-release&character_id=';
    const API_DANCINGIDOL = 'http://dancingidol.uniuhk.com/api/role/info?roleId=';

    public function EIGHT_BALL_POOL($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 272568,
            'voucherPricePoint.price' => 350000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1853',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'EIGHT_BALL_POOL',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function APEX_LEGENDS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 293464,
            'voucherPricePoint.price' => 629000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1921',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'APEX_LEGENDS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 270229,
            'voucherPricePoint.price' => 5000000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '11/27/2022-162',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'AOV',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function AUTO_CHESS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 203913,
            'voucherPricePoint.price' => 1000000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1912',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'AUTO_CHESS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 99733,
            'voucherPricePoint.price' => 1136971.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1917',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'AZUR_LANE',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function AU_TWO_MOBILE($id, $otherid = '')
    {
        $response = json_decode(self::Request(self::API_DANCINGIDOL . $id, '', 'dancingidol'), true);
        if (isset($response['data']['rolename']) && !empty($response['data']['rolename'])) {
            return json_encode(['status' => 200, 'nickname' => $response['data']['rolename']]);
        } else {
            return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
        }
    }

    public function BAD_LANDERS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 124082,
            'voucherPricePoint.price' => 423000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1926',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'BAD_LANDERS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 46221,
            'voucherPricePoint.price' => 500000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1942',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'CALL_OF_DUTY',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function CLUB_VEGAS($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 160795,
            'voucherPricePoint.price' => 300000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1939',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'CLUB_VEGAS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 3745,
            'voucherPricePoint.price' => 300000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1946',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'HEROGAMES',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['apiResult'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID or Server']);
            }
        }
    }

    public function DRAGON_CITY($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 254278,
            'voucherPricePoint.price' => 479000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1953',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'DRAGON_CITY',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 75616,
            'voucherPricePoint.price' => 450000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1956',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'ZULONG_DRAGON_RAJA',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 182201,
            'voucherPricePoint.price' => 340825.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-1959',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'EOS_RED',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function ELEX($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 6614,
            'voucherPricePoint.price' => 739000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-203',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '1',
            'msisdn' => '',
            'voucherTypeName' => 'ELEX',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['apiResult'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function FOOTBALL_MASTER($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 185386,
            'voucherPricePoint.price' => 500000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-206',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'FOOTBALL_MASTER',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 8159,
            'voucherPricePoint.price' => 300000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-208',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'FREEFIRE',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function MECHANIST($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 18549,
            'voucherPricePoint.price' => 329000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2013',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'MECHANIST',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function GENSHIN_IMPACT($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 116103,
            'voucherPricePoint.price' => 489000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2015',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'GENSHIN_IMPACT',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 183,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    // public function HIGGS_DOMINO($id, $otherid = '')
    // {
    //     $postdata = [
    //         'userId'        => $id,
    //         'costKey'       => 'com.neptune.domino.berliancard0035',
    //         'infullType'    => 13,
    //         'version'       => ''
    //     ];
    //     $response = json_decode(self::Request(self::API_BOSBOSGAMES, $postdata, 'bosbosgames', false), true);
    //     if (isset($response['message']['nickName'])) {
    //         return json_encode(['status' => 200, 'nickname' => $response['message']['nickName']]);
    //     } else {
    //         return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
    //     }
    // }

    public function HIGGS_DOMINO($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 27642,
            'voucherPricePoint.price' => 250000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2017',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'HIGGS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function IDENTITY_V($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 59687,
            'voucherPricePoint.price' => 435000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2020',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'IDENTITY_V',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 25514,
            'voucherPricePoint.price' => 439000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2027',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'ZLONGAME',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 372111,
            'voucherPricePoint.price' => 360000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2031',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'WILD_RIFT',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 45768,
            'voucherPricePoint.price' => 424000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2029',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'NETEASE_LIFEAFTER',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function LIGHT_OF_THEL($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 62560,
            'voucherPricePoint.price' => 299000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2033',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'LIGHT_OF_THEL',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['role_name'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function LORDS_MOBILE($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 50032,
            'voucherPricePoint.price' => 250000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '11/27/2022-1710',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '1051',
            'msisdn' => '',
            'voucherTypeName' => 'LORDS_MOBILE',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function LOVENIKKI($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 51847,
            'voucherPricePoint.price' => 250000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2036',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'LOVENIKKI',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
        ];
        $response = json_decode(self::Request(self::API_CODASHOP, $postdata, 'codashop'), true);
        if (isset($response['RESULT_CODE']) && $response['RESULT_CODE'] == '10001') {
            return json_encode(['status' => 429, 'msg' => 'Too many attempts, plz wait 5 seconds']);
        } else {
            if ($response['success'] && empty($response['errorMsg'])) {
                return json_encode(['status' => 200, 'nickname' => urldecode($response['confirmationFields']['apiResult'])]);
            } else {
                return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
            }
        }
    }

    public function MARVEL_DUEL($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 62214,
            'voucherPricePoint.price' => 280978.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2042',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'MARVEL_DUEL',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function MARVEL_SUPER_WAR($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 52439,
            'voucherPricePoint.price' => 299000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2044',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'MARVEL_SUPER_WAR',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 27670,
            'voucherPricePoint.price' => 242535.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2046',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'MOBILE_LEGENDS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 36344,
            'voucherPricePoint.price' => 439000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2048',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'ADVENTURE',
            'voucherTypeId' => 1,
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 16261,
            'voucherPricePoint.price' => 275000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2052',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => preg_replace('/\D/', '', $otherid),
            'msisdn' => '',
            'voucherTypeName' => 'OURPALM',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function SPEED_NO_LIMIT($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 78140,
            'voucherPricePoint.price' => 291200.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2056',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'SPEED_NO_LIMIT',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function ONE_PUNCH_MAN($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 77800,
            'voucherPricePoint.price' => 440000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-216',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'ONE_PUNCH_MAN',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 46451,
            'voucherPricePoint.price' => 283000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-219',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'ONMYOJI_ARENA',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 54774,
            'voucherPricePoint.price' => 330000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2111',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'POINT_BLANK',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 127103,
            'voucherPricePoint.price' => 300000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2113',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'GRAVITY_RAGNAROK_M',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 195803,
            'voucherPricePoint.price' => 330000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2116',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => $otherid,
            'msisdn' => '',
            'voucherTypeName' => 'RAGNAROK_X',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    // public function SAUSAGE_MAN($id, $otherid = '')
    // {
    //     $response = json_decode(self::Request(self::API_XDG . $id, '', 'xdg'), true);
    //     if (isset($response['data']['name']) && !empty($response['data']['name'])) {
    //         return json_encode(['status' => 200, 'nickname' => $response['data']['name']]);
    //     } else {
    //         return json_encode(['status' => 400, 'msg' => 'Invalid ID']);
    //     }
    // }

    public function SAUSAGE_MAN($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 256580,
            'voucherPricePoint.price' => 329000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2117',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => 'global-release',
            'msisdn' => '',
            'voucherTypeName' => 'SAUSAGE_MAN',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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

    public function SHINING_NIKKI($id, $otherid = '')
    {
        $postdata = [
            'voucherPricePoint.id' => 284192,
            'voucherPricePoint.price' => 329000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2120',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'SHINING_NIKKI',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 12837,
            'voucherPricePoint.price' => 300000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2122',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'SPEEDDRIFTERS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 37800,
            'voucherPricePoint.price' => 283000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2127',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'SUPER_MECHA_CHAMPIONS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 266144,
            'voucherPricePoint.price' => 210000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2123',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'SUPER_SUS',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 75194,
            'voucherPricePoint.price' => 250000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2135',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'VALORANT',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
            'voucherPricePoint.id' => 145623,
            'voucherPricePoint.price' => 180000.0,
            'voucherPricePoint.variablePrice' => 0,
            'n' => '12/7/2022-2138',
            'email' => '',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ==',
            'user.userId' => $id,
            'user.zoneId' => '',
            'msisdn' => '',
            'voucherTypeName' => 'NAVER_Z_CORPORATION',
            'shopLang' => 'id_ID',
            'voucherTypeId' => 5,
            'gvtId' => 19,
            'checkoutId' => '',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => ''
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
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
            )
        );
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
