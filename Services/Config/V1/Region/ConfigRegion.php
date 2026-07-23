<?php
namespace HuaweiCloud\SDK\Config\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ConfigRegion {

    public static $REGION = array("https://rms.myhuaweicloud.com"=>"cn-north-4","https://rms.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://rms.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1",);

    public static function valueOf($regionId)
    {
        try {
            if (null == $regionId) {
                throw new InvalidArgumentException("Unexpected empty parameter: regionId.");
            }
            $endpoint = array_search($regionId, self::$REGION);
            if (!$endpoint) {
                throw new InvalidArgumentException("Unexpected regionId: " . $regionId);
            }
            return new Region($regionId, $endpoint);
        } catch (InvalidArgumentException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }
}