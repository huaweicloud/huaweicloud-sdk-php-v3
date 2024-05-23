<?php
namespace HuaweiCloud\SDK\Er\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ErRegion {

    public static $REGION = array("https://er.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://er.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://er.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://er.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://er.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://er.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://er.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://er.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://er.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://er.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://er.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://er.la-south-2.myhuaweicloud.com"=>"la-south-2","https://er.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://er.me-east-1.myhuaweicloud.com"=>"me-east-1","https://er.af-south-1.myhuaweicloud.com"=>"af-south-1","https://er.la-north-2.myhuaweicloud.com"=>"la-north-2","https://er.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://er.af-north-1.myhuaweicloud.com"=>"af-north-1",);

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