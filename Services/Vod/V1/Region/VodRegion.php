<?php
namespace HuaweiCloud\SDK\Vod\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class VodRegion {

    public static $REGION = array("https://vod.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://vod.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://vod.cn-north-4.myhuaweicloud.com"=>"cn-north-4",);

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