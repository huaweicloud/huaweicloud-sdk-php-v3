<?php
namespace HuaweiCloud\SDK\Ims\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ImsRegion {

    public static $REGION = array("https://ims.af-south-1.myhuaweicloud.com"=>"af-south-1","https://ims.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ims.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://ims.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://ims.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://ims.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://ims.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://ims.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://ims.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://ims.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://ims.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://ims.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://ims.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://ims.la-south-2.myhuaweicloud.com"=>"la-south-2","https://ims.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://ims.la-north-2.myhuaweicloud.com"=>"la-north-2","https://ims.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://ims.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://ims.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://ims.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://ims.me-east-1.myhuaweicloud.com"=>"me-east-1","https://ims.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://ims.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://ims.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://ims.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://ims.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://ims.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://ims.af-north-1.myhuaweicloud.com"=>"af-north-1","https://ims.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://ims.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://ims.cn-north-12.myhuaweicloud.com"=>"cn-north-12","https://ims.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://ims.cn-southwest-3.myhuaweicloud.com"=>"cn-southwest-3",);

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