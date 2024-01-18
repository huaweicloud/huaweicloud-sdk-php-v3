<?php
namespace HuaweiCloud\SDK\Cdn\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CdnRegion {

    public static $REGION = array("https://cdn.myhuaweicloud.com"=>"cn-north-1","https://cdn.myhuaweicloud.com"=>"ap-southeast-1","https://cdn.myhuaweicloud.eu"=>"eu-west-101",);

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