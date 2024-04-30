<?php
namespace HuaweiCloud\SDK\Smn\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SmnRegion {

    public static $REGION = array("https://smn.af-south-1.myhuaweicloud.com"=>"af-south-1","https://smn.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://smn.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://smn.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://smn.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://smn.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://smn.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://smn.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://smn.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://smn.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://smn.cn-north-2.myhuaweicloud.cn"=>"cn-north-2","https://smn.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://smn.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://smn.la-north-2.myhuaweicloud.com"=>"la-north-2","https://smn.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://smn.la-south-2.myhuaweicloud.com"=>"la-south-2","https://smn.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://smn.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://smn.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://smn.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://smn.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://smn.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://smn.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1",);

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