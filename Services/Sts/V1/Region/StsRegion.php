<?php
namespace HuaweiCloud\SDK\Sts\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class StsRegion {

    public static $REGION = array("https://sts.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://sts.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://sts.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://sts.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://sts.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://sts.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://sts.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://sts.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://sts.la-south-2.myhuaweicloud.com"=>"la-south-2","https://sts.af-south-1.myhuaweicloud.com"=>"af-south-1","https://sts.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://sts.tr-west-1.myhuaweicloud.com"=>"tr-west-1",);

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