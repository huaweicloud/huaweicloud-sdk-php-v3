<?php
namespace HuaweiCloud\SDK\Vpc\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class VpcRegion {

    public static $REGION = array("https://vpc.af-south-1.myhuaweicloud.com"=>"af-south-1","https://vpc.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://vpc.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://vpc.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://vpc.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://vpc.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://vpc.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://vpc.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://vpc.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://vpc.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://vpc.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://vpc.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://vpc.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://vpc.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://vpc.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://vpc.la-north-2.myhuaweicloud.com"=>"la-north-2","https://vpc.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://vpc.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://vpc.la-south-2.myhuaweicloud.com"=>"la-south-2","https://vpc.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://vpc.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://vpc.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://vpc.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://vpc.me-east-1.myhuaweicloud.com"=>"me-east-1","https://vpc.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://vpc.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://vpc.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://vpc.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://vpc.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://vpc.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://vpc.af-north-1.myhuaweicloud.com"=>"af-north-1","https://vpc.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5",);

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