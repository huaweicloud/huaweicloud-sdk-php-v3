<?php
namespace HuaweiCloud\SDK\Dli\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DliRegion {

    public static $REGION = array("https://dli.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dli.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dli.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dli.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dli.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dli.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dli.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dli.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dli.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dli.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dli.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dli.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dli.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dli.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dli.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dli.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://dli.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dli.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://dli.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dli.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://dli.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://dli.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://dli.me-east-1.myhuaweicloud.com"=>"me-east-1",);

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