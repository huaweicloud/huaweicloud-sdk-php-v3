<?php
namespace HuaweiCloud\SDK\Rgc\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class RgcRegion {

    public static $REGION = array("https://rgc.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://rgc.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://rgc.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://rgc.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://rgc.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://rgc.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://rgc.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://rgc.af-south-1.myhuaweicloud.com"=>"af-south-1","https://rgc.la-south-2.myhuaweicloud.com"=>"la-south-2","https://rgc.la-north-2.myhuaweicloud.com"=>"la-north-2","https://rgc.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://rgc.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://rgc.me-east-1.myhuaweicloud.com"=>"me-east-1","https://rgc.tr-west-1.myhuaweicloud.com"=>"tr-west-1",);

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