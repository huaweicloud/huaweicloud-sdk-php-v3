<?php
namespace HuaweiCloud\SDK\Mpc\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class MpcRegion {

    public static $REGION = array("https://mpc.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://mts.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://mpc.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://mpc.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://mpc.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://mpc.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

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