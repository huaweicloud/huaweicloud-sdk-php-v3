<?php
namespace HuaweiCloud\SDK\Ddm\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DdmRegion {

    public static $REGION = array("https://ddm.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://ddm.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://ddm.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://ddm.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ddm.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://ddm.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://ddm.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://ddm.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://ddm.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://ddm.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://ddm.la-north-2.myhuaweicloud.com"=>"la-north-2","https://ddm.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://ddm.la-south-2.myhuaweicloud.com"=>"la-south-2","https://ddm.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://ddm.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://ddm.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1",);

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