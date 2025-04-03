<?php
namespace HuaweiCloud\SDK\ServiceStage\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ServiceStageRegion {

    public static $REGION = array("https://servicestage.af-south-1.myhuaweicloud.com"=>"af-south-1","https://servicestage.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://servicestage.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://servicestage.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://servicestage.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://servicestage.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://servicestage.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://servicestage.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://servicestage.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://servicestage.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://servicestage.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://servicestage.la-south-2.myhuaweicloud.com"=>"la-south-2","https://servicestage.la-north-2.myhuaweicloud.com"=>"la-north-2","https://servicestage.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://servicestage.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://servicestage.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://servicestage.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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