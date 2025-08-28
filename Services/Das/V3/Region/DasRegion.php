<?php
namespace HuaweiCloud\SDK\Das\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DasRegion {

    public static $REGION = array("https://das.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://das.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://das.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://das.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://das.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://das.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://das.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://das.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://das.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://das.me-east-1.myhuaweicloud.com"=>"me-east-1","https://das.la-south-2.myhuaweicloud.com"=>"na-mexico-1","https://das.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://das.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://das.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://das.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://das.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://das.af-south-1.myhuaweicloud.com"=>"af-south-1","https://das.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://das.af-north-1.myhuaweicloud.com"=>"af-north-1",);

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