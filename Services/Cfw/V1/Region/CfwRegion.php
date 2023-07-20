<?php
namespace HuaweiCloud\SDK\Cfw\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CfwRegion {

    public static $REGION = array("https://cfw.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://cfw.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://cfw.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cfw.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cfw.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cfw.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cfw.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cfw.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cfw.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cfw.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cfw.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://cfw.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cfw.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cfw.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cfw.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cfw.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1",);

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