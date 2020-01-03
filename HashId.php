<?php
/**
 * User: Songyl
 * Date: 2019-04-25 13:31
 * Mail: skill1221@163.com
 */

require_once "./HashGenerator.php";
require_once './Hashids.php';

class Ap_HashIds_HashId
{
    const HASH_IDS_KEY = 'ba43f826-a680-4a64-8e2d-a5afcf9b77b0';
    const MIN_HASH_LENGTH = 32;

    public static function getInstance($salt = '', $minHashLength = 0, $alphabet = '')
    {
        if ($salt == '') {
            $salt = self::HASH_IDS_KEY;
        }
        if ($minHashLength == 0) {
            $minHashLength = self::MIN_HASH_LENGTH;
        }

        return new Hashids($salt, $minHashLength, $alphabet);
    }
}
