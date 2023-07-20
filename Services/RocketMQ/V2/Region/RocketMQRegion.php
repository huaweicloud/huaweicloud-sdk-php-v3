<?php
namespace HuaweiCloud\SDK\RocketMQ\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class RocketMQRegion {

    public static $REGION = array("https://dms.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://dms.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dms.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dms.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dms.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dms.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dms.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dms.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://dms.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dms.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dms.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dms.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dms.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dms.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://dms.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dms.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dms.tr-west-1.myhuaweicloud.com"=>"tr-west-1",);

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