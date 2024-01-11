<?php
namespace HuaweiCloud\SDK\Cse\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CseRegion {

    public static $REGION = array("https://cse.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cse.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cse.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cse.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cse.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cse.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cse.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cse.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cse.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cse.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cse.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://cse.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cse.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cse.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cse.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cse.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cse.me-east-1.myhuaweicloud.com"=>"me-east-1","https://cse.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://cse.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4",);

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