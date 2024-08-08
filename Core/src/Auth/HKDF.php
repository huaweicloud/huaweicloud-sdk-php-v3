<?php

namespace HuaweiCloud\SDK\Core\Auth;

define('HMAC_SHA1', 'sha1');
define('HMAC_SHA256', 'sha256');
define('DERIVATION_KEY_LENGTH', 32);
define('HMAC_ALGORITHM', HMAC_SHA256);
define('ALGORITHM_HASH_LENGTH', HKDF::getHashLen(HMAC_ALGORITHM));
define('UTF_8', 'utf-8');
define('EXPAND_CEIL', ceil(DERIVATION_KEY_LENGTH / ALGORITHM_HASH_LENGTH));

class HKDF {
    public static function getDerKeySHA256($access_key, $secret_key, $info) {
        if (!$access_key || !$secret_key) {
            return null;
        }
        try {
            $tmp_key = self::extract($secret_key, $access_key, HMAC_ALGORITHM);
            $der_secret_key = self::expand($tmp_key, $info, HMAC_ALGORITHM, DERIVATION_KEY_LENGTH, EXPAND_CEIL);
            if ($der_secret_key !== null) {
                return bin2hex($der_secret_key);
            }
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getHashLen($hmac_algorithm) {
        if ($hmac_algorithm == HMAC_SHA1) {
            return 20;
        } elseif ($hmac_algorithm == HMAC_SHA256) {
            return 32;
        } else {
            return 32;
        }
    }

    public static function extract($ikm, $salt, $hmac_algorithm) {
        if (!$salt) {
            $salt = str_repeat(chr(0), self::getHashLen($hmac_algorithm));
        }
        return hash_hmac($hmac_algorithm, $ikm, $salt, true);
    }

    public static function expand($prk, $info, $hmac_algorithm, $okm_len, $ceil) {
        if ($ceil == 1) {
            $raw_result = self::expandFirst($prk, $info, $hmac_algorithm);
        } else {
            $raw_result = '';
            $tmp = '';
            for ($i = 1; $i <= $ceil; $i++) {
                $tmp = self::expandOnce($prk, $info, $tmp, $i, $hmac_algorithm);
                $raw_result .= $tmp;
            }
        }
        if ($okm_len == strlen($raw_result)) {
            return $raw_result;
        } elseif ($okm_len < strlen($raw_result)) {
            return substr($raw_result, 0, $okm_len);
        } else {
            return null;
        }
    }

    public static function expandFirst($prk, $info, $hmac_algorithm) {
        $result = $info;
        $result .= chr(1);
        return hash_hmac($hmac_algorithm, $result, $prk, true);
    }

    public static function expandOnce($prk, $info, $pre_tmp, $i, $hmac_algorithm) {
        $result = $pre_tmp . $info . chr($i);
        return hash_hmac($hmac_algorithm, $result, $prk, true);
    }

}