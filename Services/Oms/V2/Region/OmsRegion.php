<?php
namespace HuaweiCloud\SDK\Oms\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class OmsRegion {

    public static $REGION = array("https://oms.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://oms.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://oms.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://oms.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://oms.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://oms.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://oms.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://oms.la-south-2.myhuaweicloud.com"=>"la-south-2","https://oms.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://oms.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://oms.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://oms.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://oms.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://oms.la-north-2.myhuaweicloud.com"=>"la-north-2","https://oms.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://oms.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://oms.me-east-1.myhuaweicloud.com"=>"me-east-1","https://oms.af-south-1.myhuaweicloud.com"=>"af-south-1","https://oms.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://oms.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://oms.cn-north-12.myhuaweicloud.com"=>"cn-north-12",);

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