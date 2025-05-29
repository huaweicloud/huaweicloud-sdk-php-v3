<?php
namespace HuaweiCloud\SDK\Evs\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class EvsRegion {

    public static $REGION = array("https://evs.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://evs.af-south-1.myhuaweicloud.com"=>"af-south-1","https://evs.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://evs.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://evs.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://evs.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://evs.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://evs.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://evs.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://evs.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://evs.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://evs.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://evs.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://evs.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://evs.la-north-2.myhuaweicloud.com"=>"la-north-2","https://evs.la-south-2.myhuaweicloud.com"=>"la-south-2","https://evs.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://evs.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://evs.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://evs.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://evs.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://evs.me-east-1.myhuaweicloud.com"=>"me-east-1","https://evs.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://evs.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://evs.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://evs.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://evs.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://evs.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://evs.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://evs.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://evs.af-north-1.myhuaweicloud.com"=>"af-north-1","https://evs.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5",);

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