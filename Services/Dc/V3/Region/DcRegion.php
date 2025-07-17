<?php
namespace HuaweiCloud\SDK\Dc\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DcRegion {

    public static $REGION = array("https://dcaas.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dcaas.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dcaas.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dcaas.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dcaas.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dcaas.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dcaas.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dcaas.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dcaas.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dcaas.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dcaas.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dcaas.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dcaas.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dcaas.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://dcaas.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dcaas.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dcaas.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dcaas.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dcaas.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://dcaas.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://dcaas.me-east-1.myhuaweicloud.com"=>"me-east-1","https://dcaas.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://dcaas.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://dcaas.eu-west-0.myhuaweicloud.com"=>"eu-west-0",);

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