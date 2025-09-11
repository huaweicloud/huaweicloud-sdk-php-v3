<?php
namespace HuaweiCloud\SDK\Tms\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class TmsRegion {

    public static $REGION = array("https://tms.myhuaweicloud.com"=>"cn-north-4","https://tms-intl.myhuaweicloud.com"=>"ap-southeast-1","https://tms.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://tms.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://tms.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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