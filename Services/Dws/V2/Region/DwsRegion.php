<?php
namespace HuaweiCloud\SDK\Dws\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DwsRegion {

    public static $REGION = array("https://dws.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://dws.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dws.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dws.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dws.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dws.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dws.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dws.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dws.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dws.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dws.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dws.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dws.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dws.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dws.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dws.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dws.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dws.tr-west-1.myhuaweicloud.cn"=>"tr-west-1",);

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