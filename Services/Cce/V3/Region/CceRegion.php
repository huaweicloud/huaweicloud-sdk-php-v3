<?php
namespace HuaweiCloud\SDK\Cce\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CceRegion {

    public static $REGION = array("https://cce.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cce.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://cce.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cce.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cce.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cce.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cce.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://cce.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cce.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cce.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cce.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cce.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cce.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cce.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cce.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cce.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cce.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cce.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://cce.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://cce.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://cce.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://cce.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://cce.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://cce.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://cce.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://cce.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://cce.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://cce.me-east-1.myhuaweicloud.com"=>"me-east-1",);

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