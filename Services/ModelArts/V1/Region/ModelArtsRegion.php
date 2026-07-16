<?php
namespace HuaweiCloud\SDK\ModelArts\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ModelArtsRegion {

    public static $REGION = array("https://modelarts.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://modelarts.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://modelarts.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://modelarts.ap-southeast-1.myhuaweicloud.cn"=>"ap-southeast-1","https://modelarts.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://modelarts.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://modelarts.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://modelarts.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://modelarts.la-south-2.myhuaweicloud.com"=>"la-south-2","https://modelarts.af-south-1.myhuaweicloud.com"=>"af-south-1","https://modelarts.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://modelarts.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://modelarts.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://modelarts.me-east-1.myhuaweicloud.com"=>"me-east-1","https://modelarts.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://modelarts.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://modelarts.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://modelarts.la-north-2.myhuaweicloud.com"=>"la-north-2","https://modelarts.af-north-1.myhuaweicloud.com"=>"af-north-1","https://modelarts.cn-north-12.myhuaweicloud.com"=>"cn-north-12","https://modelarts.cn-southwest-3.myhuaweicloud.com"=>"cn-southwest-3","https://modelarts.cn-north-11.myhuaweicloud.com"=>"cn-north-11",);

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