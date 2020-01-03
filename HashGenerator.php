<?php

/**
 * ID encrypt and decrypted interface
 * User: Songyl
 * Date: 2019-04-24 10:20
 * Mail: skill1221@163.com
 */

interface IHashGenerator
{
    public function encode();

    public function decode($hash);

    public function encode_hex($str);

    public function decode_hex($hash);
}
