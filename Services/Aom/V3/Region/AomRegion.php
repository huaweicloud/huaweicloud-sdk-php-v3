<?php
namespace HuaweiCloud\SDK\Aom\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class AomRegion {

    public static $REGION = array("https://aom.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://aom.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://aom.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://aom.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://aom.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://aom.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://aom.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://aom.af-south-1.myhuaweicloud.com"=>"af-south-1","https://aom.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://aom.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://aom.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://aom.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://aom.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://aom.la-south-2.myhuaweicloud.com"=>"la-south-2","https://aom.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://aom.la-north-2.myhuaweicloud.com"=>"la-north-2","https://aom.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://aom.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://aom.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://aom.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://aom.me-east-1.myhuaweicloud.com"=>"me-east-1","https://aom.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://aom.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://aom.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://aom.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://aom.af-north-1.myhuaweicloud.com"=>"af-north-1","https://aom.cn-north-12.myhuaweicloud.com"=>"cn-north-12",);

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