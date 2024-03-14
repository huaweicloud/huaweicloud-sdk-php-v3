<?php
namespace HuaweiCloud\SDK\Sms\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SmsRegion {

    public static $REGION = array("https://sms.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://sms.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://sms.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://sms.eu-west-101.myhuaweicloud.eu"=>"eu-west-101",);

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