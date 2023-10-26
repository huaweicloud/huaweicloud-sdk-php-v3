<?php
namespace HuaweiCloud\SDK\Nat\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class NatRegion {

    public static $REGION = array("https://nat.af-south-1.myhuaweicloud.com"=>"af-south-1","https://nat.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://nat.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://nat.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://nat.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://nat.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://nat.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://nat.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://nat.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://nat.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://nat.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://nat.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://nat.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://nat.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://nat.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://nat.la-south-2.myhuaweicloud.com"=>"la-south-2","https://nat.la-north-2.myhuaweicloud.com"=>"la-north-2","https://nat.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://nat.me-east-1.myhuaweicloud.com"=>"me-east-1","https://nat.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://nat.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://nat.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://nat.ap-southeast-4.myhuaweicloud.cn"=>"ap-southeast-4",);

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