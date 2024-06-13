<?php
namespace HuaweiCloud\SDK\SFSTurbo\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SFSTurboRegion {

    public static $REGION = array("https://sfs-turbo.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://sfs-turbo.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://sfs-turbo.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://sfs-turbo.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://sfs-turbo.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://sfs-turbo.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://sfs-turbo.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://sfs-turbo.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://sfs-turbo.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://sfs-turbo.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://sfs-turbo.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://sfs-turbo.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://sfs-turbo.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://sfs-turbo.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://sfs-turbo.la-south-2.myhuaweicloud.com"=>"la-south-2","https://sfs-turbo.la-north-2.myhuaweicloud.com"=>"la-north-2","https://sfs-turbo.af-south-1.myhuaweicloud.com"=>"af-south-1","https://sfs-turbo.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://sfs-turbo.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://sfs-turbo.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://sfs-turbo.me-east-1.myhuaweicloud.com"=>"me-east-1","https://sfs-turbo.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://sfs-turbo.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://sfs-turbo.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://sfs-turbo.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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