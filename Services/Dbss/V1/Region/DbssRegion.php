<?php
namespace HuaweiCloud\SDK\Dbss\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DbssRegion {

    public static $REGION = array("https://dbss.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://dbss.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dbss.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dbss.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dbss.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dbss.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dbss.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dbss.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dbss.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://dbss.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dbss.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dbss.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dbss.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dbss.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dbss.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dbss.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dbss.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dbss.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://dbss.me-east-1.myhuaweicloud.com"=>"me-east-1","https://dbss.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://dbss.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dbss.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://dbss.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://dbss.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://dbss.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1",);

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