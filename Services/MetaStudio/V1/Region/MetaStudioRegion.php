<?php
namespace HuaweiCloud\SDK\MetaStudio\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class MetaStudioRegion {

    public static $REGION = array("https://metastudio.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://metastudio.cn-east-3.myhuaweicloud.com"=>"cn-east-3",);

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