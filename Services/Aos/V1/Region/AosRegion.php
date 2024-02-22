<?php
namespace HuaweiCloud\SDK\Aos\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class AosRegion {

    public static $REGION = array("https://rfs.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://rfs.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://rfs.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://rfs.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://rfs.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://rfs.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://rfs.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://rfs.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://rfs.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://rfs.me-east-1.myhuaweicloud.com"=>"me-east-1","https://rfs.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://rfs.la-south-2.myhuaweicloud.com"=>"la-south-2","https://rfs.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://rfs.la-north-2.myhuaweicloud.com"=>"la-north-2","https://rfs.af-south-1.myhuaweicloud.com"=>"af-south-1","https://aos.myhuaweicloud.eu"=>"eu-west-101",);

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