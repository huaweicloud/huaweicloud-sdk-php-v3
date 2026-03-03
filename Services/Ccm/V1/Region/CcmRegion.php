<?php
namespace HuaweiCloud\SDK\Ccm\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CcmRegion {

    public static $REGION = array("https://ccm.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ccm.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://ccm.myhuaweicloud.com"=>"sa-brazil-1","https://ccm.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://ccm.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://ccm.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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