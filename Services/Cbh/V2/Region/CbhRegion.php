<?php
namespace HuaweiCloud\SDK\Cbh\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CbhRegion {

    public static $REGION = array("https://cbh.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cbh.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cbh.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cbh.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cbh.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cbh.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cbh.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cbh.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cbh.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cbh.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://cbh.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://cbh.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://cbh.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cbh.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cbh.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cbh.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cbh.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cbh.af-north-1.myhuaweicloud.com"=>"af-north-1","https://cbh.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://cbh.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://cbh.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://cbh.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://cbh.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cbh.me-east-1.myhuaweicloud.com"=>"me-east-1","https://cbh.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://cbh.cn-north-12.myhuaweicloud.com"=>"cn-north-12","https://cbh.cn-southwest-3.myhuaweicloud.com"=>"cn-southwest-3",);

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