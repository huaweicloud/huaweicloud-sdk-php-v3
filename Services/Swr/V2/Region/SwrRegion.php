<?php
namespace HuaweiCloud\SDK\Swr\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SwrRegion {

    public static $REGION = array("https://swr-api.af-south-1.myhuaweicloud.com"=>"af-south-1","https://swr-api.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://swr-api.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://swr-api.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://swr-api.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://swr-api.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://swr-api.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://swr-api.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://swr-api.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://swr-api.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://swr-api.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://swr-api.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://swr-api.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://swr-api.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://swr-api.la-south-2.myhuaweicloud.com"=>"la-south-2","https://swr-api.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://swr-api.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://swr-api.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://swr-api.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://swr-api.la-north-2.myhuaweicloud.com"=>"la-north-2","https://swr-api.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://swr-api.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://swr-api.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://swr-api.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://swr-api.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://swr-api.me-east-1.myhuaweicloud.com"=>"me-east-1","https://swr-api.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://swr-api.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://swr-api.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://swr-api.af-north-1.myhuaweicloud.com"=>"af-north-1","https://swr-api.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://swr-api.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://swr-api.cn-southwest-3.myhuaweicloud.com"=>"cn-southwest-3","https://swr-api.cn-north-12.myhuaweicloud.com"=>"cn-north-12","https://swr-api.sa-peru-1.myhuaweicloud.com"=>"sa-peru-1",);

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