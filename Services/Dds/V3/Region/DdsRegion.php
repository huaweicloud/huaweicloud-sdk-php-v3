<?php
namespace HuaweiCloud\SDK\Dds\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DdsRegion {

    public static $REGION = array("https://dds.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://dds.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dds.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dds.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dds.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dds.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dds.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dds.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dds.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dds.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dds.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dds.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://dds.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://dds.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dds.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dds.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dds.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dds.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dds.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dds.me-east-1.myhuaweicloud.com"=>"me-east-1","https://dds.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://dds.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dds.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://dd.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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