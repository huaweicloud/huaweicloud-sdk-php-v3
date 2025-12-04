<?php
namespace HuaweiCloud\SDK\Cph\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CphRegion {

    public static $REGION = array("https://cph.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://cph.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cph.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cph.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cph.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cph.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cph.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cph.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cph.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cph.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cph.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cph.af-north-1.myhuaweicloud.com"=>"af-north-1","https://cph.cn-east-4.myhuaweicloud.com"=>"cn-east-4",);

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