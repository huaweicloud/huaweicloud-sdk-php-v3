<?php
namespace HuaweiCloud\SDK\Coc\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CocRegion {

    public static $REGION = array("https://coc.myhuaweicloud.com"=>"cn-north-4","https://coc-intl.myhuaweicloud.com"=>"ap-southeast-3","https://coc-eu-west-101-open-api.myhuaweicloud.eu"=>"eu-west-101",);

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