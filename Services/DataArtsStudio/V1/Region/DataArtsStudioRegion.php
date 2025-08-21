<?php
namespace HuaweiCloud\SDK\DataArtsStudio\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DataArtsStudioRegion {

    public static $REGION = array("https://dayu.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dayu.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dayu.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dayu.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dayu.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dayu.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dayu.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dayu.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dayu.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dayu.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dayu.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://dayu.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dayu.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dayu.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dayu.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dayu.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dayu.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dayu.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dayu.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://dayu.me-east-1.myhuaweicloud.com"=>"me-east-1","https://dayu.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://dayu.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://dayu.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://dayu.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://dayu.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://dayu.cn-east-4.myhuaweicloud.com"=>"cn-east-4",);

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