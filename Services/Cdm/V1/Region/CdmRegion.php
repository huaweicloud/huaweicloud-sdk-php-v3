<?php
namespace HuaweiCloud\SDK\Cdm\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CdmRegion {

    public static $REGION = array("https://cdm.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cdm.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cdm.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cdm.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cdm.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cdm.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cdm.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cdm.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cdm.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cdm.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cdm.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cdm.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cdm.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cdm.cn-north-2.myhuaweicloud.cn"=>"cn-north-2","https://cdm.na-mexico-1.myhuaweicloud.cn"=>"na-mexico-1","https://cdm.la-north-2.myhuaweicloud.cn"=>"la-north-2","https://cdm.ap-southeast-3.myhuaweicloud.cn"=>"ap-southeast-3","https://cdm.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://cdm.tr-west-1.myhuaweicloud.com"=>"tr-west-1",);

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