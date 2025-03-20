<?php
namespace HuaweiCloud\SDK\_As\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class AsRegion {

    public static $REGION = array("https://as.af-south-1.myhuaweicloud.com"=>"af-south-1","https://as.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://as.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://as.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://as.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://as.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://as.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://as.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://as.ap-southeast-1.myhwclouds.com"=>"ap-southeast-1","https://as.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://as.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://as.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://as.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://as.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://as.la-north-2.myhuaweicloud.com"=>"la-north-2","https://as.la-south-2.myhuaweicloud.com"=>"la-south-2","https://as.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://as.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://as.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://as.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://as.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://as.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://as.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://as.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://as.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://as.me-east-1.myhuaweicloud.com"=>"me-east-1",);

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