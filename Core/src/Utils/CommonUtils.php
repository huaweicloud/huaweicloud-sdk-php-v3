<?php


namespace HuaweiCloud\SDK\Core\Utils;


class CommonUtils
{
    // CanonicalQueryString
    public static function CanonicalQueryString($r)
    {
        $keys = [];
        foreach ($r->queryParams as $key => $value) {
            array_push($keys, $key);
        }
        sort($keys);
        $a = [];
        foreach ($keys as $key) {
            $k = str_replace(['+', '%7E'], ['%20', '~'], urlencode($key));
            $value = $r->queryParams[$key];
            if (is_array($value)) {
                sort($value);
                foreach ($value as $v) {
                    $kv = "$k=".str_replace(['+', '%7E'], ['%20',
                            '~', ], urlencode($v));
                    array_push($a, $kv);
                }
            } else {
                $kv = "$k=".str_replace(['+', '%7E'], ['%20',
                        '~', ], urlencode($value));
                array_push($a, $kv);
            }
        }

        return join('&', $a);
    }


    public static function startWith($str, $needle)
    {
        return strpos($str, $needle) === 0;
    }

    public static function endsWith($haystack, $needle) {
        $length = strlen($needle);
        return $length > 0 ? substr($haystack, -$length) === $needle : true;
    }
}