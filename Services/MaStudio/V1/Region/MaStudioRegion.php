<?php
namespace HuaweiCloud\SDK\MaStudio\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class MaStudioRegion {

    public static $REGION = array("https://mastudio.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2",);

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