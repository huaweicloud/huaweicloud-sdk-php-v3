<?php
namespace HuaweiCloud\SDK\Mrs\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class MrsRegion {

    public static $REGION = array("https://mrs.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://mrs.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://mrs.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://mrs.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://mrs.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://mrs.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://mrs.ap-southeast-1.myhuaweicloud.cn"=>"ap-southeast-1","https://mrs.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://mrs.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://mrs.af-south-1.myhuaweicloud.com"=>"af-south-1","https://mrs.ru-northwest-2.myhuaweicloud.cn"=>"ru-northwest-2","https://mrs.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://mrs.la-south-2.myhuaweicloud.com"=>"la-south-2","https://mrs.la-north-2.myhuaweicloud.com"=>"la-north-2","https://mrs.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://mrs.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://mrs.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://mrs.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://mrs.ap-southeast-4.myhuaweicloud.cn"=>"ap-southeast-4","https://mrs.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://mrs.me-east-1.myhuaweicloud.com"=>"me-east-1",);

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