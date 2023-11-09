<?php
namespace HuaweiCloud\SDK\SecMaster\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SecMasterRegion {

    public static $REGION = array("https://sa.myhuaweicloud.com"=>"cn-north-4","https://secmaster.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://secmaster.cn-south-1.myhuaweicloud.com"=>"cn-south-1",);

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