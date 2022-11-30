<?php
namespace HuaweiCloud\SDK\Live\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class LiveRegion {

    public static $REGION = array("https://live.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://live.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://live.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://live.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://live.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

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