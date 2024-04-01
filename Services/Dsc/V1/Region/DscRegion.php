<?php
namespace HuaweiCloud\SDK\Dsc\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DscRegion {

    public static $REGION = array("https://sdg.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://sdg.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://sdg.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://sdg.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://sdg.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://sdg.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://sdg.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://sdg.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://sdg.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://sdg.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://sdg.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://sdg.la-south-2.myhuaweicloud.com"=>"la-south-2","https://sdg.af-south-1.myhuaweicloud.com"=>"af-south-1","https://sdg.la-north-2.myhuaweicloud.com"=>"la-north-2","https://sdg.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://sdg.eu-west-101.myhuaweicloud.com"=>"eu-west-101",);

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