<?php
namespace HuaweiCloud\SDK\Drs\V5\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DrsRegion {

    public static $REGION = array("https://drs.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://drs.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://drs.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://drs.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://drs.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://drs.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://drs.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://drs.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://drs.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://drs.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://drs.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://drs.la-south-2.myhuaweicloud.com"=>"la-south-2","https://drs.la-north-2.myhuaweicloud.com"=>"la-north-2","https://drs.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://drs.af-south-1.myhuaweicloud.com"=>"af-south-1","https://drs.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://drs.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://drs.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://drs.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://drs.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://drs.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://drs.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://drs.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://drs.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://drs.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://drs.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://drs.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5",);

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