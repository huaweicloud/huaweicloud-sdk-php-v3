<?php
namespace HuaweiCloud\SDK\Bms\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class BmsRegion {

    public static $REGION = array("https://bms.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://bms.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://bms.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://bms.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://bms.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://bms.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://bms.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://bms.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://bms.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://bms.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://bms.la-south-2.myhuaweicloud.com"=>"la-south-2","https://bms.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://bms.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://bms.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://bms.af-south-1.myhuaweicloud.com"=>"af-south-1","https://bms.la-north-2.myhuaweicloud.com"=>"la-north-2","https://bms.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://bms.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://bms.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://bms.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://bms.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://bms.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://bms.me-east-1.myhuaweicloud.com"=>"me-east-1","https://bms.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://bms.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://bms.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1",);

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