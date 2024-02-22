<?php
namespace HuaweiCloud\SDK\SecMaster\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SecMasterRegion {

    public static $REGION = array("https://secmaster.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://secmaster.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://secmaster.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://secmaster.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://secmaster.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://secmaster.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://secmaster.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://secmaster.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://secmaster.cn-north-1.myhuaweicloud.com"=>"cn-north-1",);

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