<?php
namespace HuaweiCloud\SDK\Eg\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class EgRegion {

    public static $REGION = array("https://eg.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://eg.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://eg.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://eg.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://eg.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://eg.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://eg.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://eg.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://eg.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://eg.eu-west-101.myhuaweicloud.eu"=>"eu-west-101",);

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