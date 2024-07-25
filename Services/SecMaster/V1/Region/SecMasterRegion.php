<?php
namespace HuaweiCloud\SDK\SecMaster\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SecMasterRegion {

    public static $REGION = array("https://secmaster.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://secmaster.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://secmaster.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://secmaster.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://secmaster.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://secmaster.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://secmaster.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://secmaster.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://secmaster.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://secmaster.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://secmaster.me-east-1.myhuaweicloud.com"=>"me-east-1","https://secmaster.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://secmaster.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://secmaster.la-north-2.myhuaweicloud.com"=>"la-north-2","https://secmaster.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://secmaster.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://secmaster.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://secmaster.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://secmaster.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://secmaster.af-north-1.myhuaweicloud.com"=>"af-north-1",);

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