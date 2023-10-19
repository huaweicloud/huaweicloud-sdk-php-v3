<?php
namespace HuaweiCloud\SDK\Dcs\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DcsRegion {

    public static $REGION = array("https://dcs.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dcs.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dcs.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dcs.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dcs.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dcs.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dcs.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dcs.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://dcs.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dcs.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dcs.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dcs.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dcs.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://dcs.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dcs.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dcs.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dcs.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dcs.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dcs.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1",);

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