<?php
namespace HuaweiCloud\SDK\SMSApi\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SMSApiRegion {

    public static $REGION = array("https://smsapi.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://smsapi.cn-south-1.myhuaweicloud.com"=>"cn-south-1",);

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