<?php
namespace HuaweiCloud\SDK\Ges\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class GesRegion {

    public static $REGION = array("https://ges.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://ges.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://ges.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ges.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://ges.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://ges.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://ges.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://ges.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

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