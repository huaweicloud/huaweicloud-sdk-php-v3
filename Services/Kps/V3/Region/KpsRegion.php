<?php
namespace HuaweiCloud\SDK\Kps\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class KpsRegion {

    public static $REGION = array("https://kms.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://kms.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://kms.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://kms.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://kms.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://kms.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://kms.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://kms.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://kms.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://kms.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://kms.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://kms.la-south-2.myhuaweicloud.com"=>"la-south-2","https://kms.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://kms.la-north-2.myhuaweicloud.com"=>"la-north-2","https://kms.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://kms.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://kms.af-south-1.myhuaweicloud.com"=>"af-south-1","https://kms.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://kms.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://kms.me-east-1.myhuaweicloud.com"=>"me-east-1","https://kms.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://kms.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://kms.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://kms.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://kms.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://kms.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5",);

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