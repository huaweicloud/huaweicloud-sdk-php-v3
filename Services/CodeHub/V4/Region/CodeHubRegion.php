<?php
namespace HuaweiCloud\SDK\CodeHub\V4\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CodeHubRegion {

    public static $REGION = array("https://codehub-ext.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://codehub-ext.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://codehub-ext.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://codehub-ext.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://codehub-ext.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://codehub-ext.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://codehub-ext.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://codehub-ext.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://codehub-ext.la-north-2.myhuaweicloud.com"=>"la-north-2",);

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