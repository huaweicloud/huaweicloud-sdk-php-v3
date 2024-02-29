<?php
namespace HuaweiCloud\SDK\Rds\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class RdsRegion {

    public static $REGION = array("https://rds.af-south-1.myhuaweicloud.com"=>"af-south-1","https://rds.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://rds.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://rds.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://rds.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://rds.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://rds.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://rds.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://rds.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://rds.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://rds.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://rds.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://rds.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://rds.la-north-2.myhuaweicloud.com"=>"la-north-2","https://rds.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://rds.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://rds.la-south-2.myhuaweicloud.com"=>"la-south-2","https://rds.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://rds.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://rds.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://rds.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://rds.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://rds.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://rds.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://rds.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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