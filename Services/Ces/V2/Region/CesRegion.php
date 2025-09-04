<?php
namespace HuaweiCloud\SDK\Ces\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CesRegion {

    public static $REGION = array("https://ces.af-south-1.myhuaweicloud.com"=>"af-south-1","https://ces.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ces.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://ces.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://ces.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://ces.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://ces.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://ces.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://ces.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://ces.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://ces.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://ces.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://ces.la-south-2.myhuaweicloud.com"=>"la-south-2","https://ces.la-north-2.myhuaweicloud.com"=>"la-north-2","https://ces.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://ces.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://ces.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://ces.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://ces.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://ces.me-east-1.myhuaweicloud.com"=>"me-east-1","https://ces.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://ces.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://ces.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://ces.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://ces.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://ces.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://ces.af-north-1.myhuaweicloud.com"=>"af-north-1","https://ces.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://ces.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://ces.cn-north-12.myhuaweicloud.com"=>"cn-north-12","https://ces.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://ces.cn-southwest-3.myhuaweicloud.com"=>"cn-southwest-3",);

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