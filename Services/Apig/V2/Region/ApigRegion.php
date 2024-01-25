<?php
namespace HuaweiCloud\SDK\Apig\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ApigRegion {

    public static $REGION = array("https://apig.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://apig.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://apig.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://apig.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://apig.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://apig.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://apig.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://apig.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://apig.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://apig.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://apig.la-south-2.myhuaweicloud.com"=>"la-south-2","https://apig.la-north-2.myhuaweicloud.com"=>"la-north-2","https://apig.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://apig.af-south-1.myhuaweicloud.com"=>"af-south-1","https://apig.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://apig.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://apig.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://apig.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://apig.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://apig.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://apig.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://apig.me-east-1.myhuaweicloud.com"=>"me-east-1",);

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