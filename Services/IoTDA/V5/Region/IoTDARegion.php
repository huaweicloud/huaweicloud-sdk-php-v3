<?php
namespace HuaweiCloud\SDK\IoTDA\V5\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IoTDARegion {

    public static $REGION = array("https://iotda.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://iotda.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://iotda.cn-south-1.myhuaweicloud.com"=>"cn-south-1",);

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