<?php
namespace HuaweiCloud\SDK\Cbh\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CbhRegion {

    public static $REGION = array("https://cbh.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cbh.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cbh.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cbh.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cbh.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cbh.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

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