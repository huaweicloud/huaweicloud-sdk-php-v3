<?php
namespace HuaweiCloud\SDK\Cbr\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CbrRegion {

    public static $REGION = array("https://cbr.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://cbr.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cbr.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cbr.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cbr.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cbr.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cbr.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cbr.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cbr.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cbr.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cbr.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cbr.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cbr.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cbr.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://cbr.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://cbr.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cbr.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cbr.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cbr.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://cbr.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://cbr.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://cbr.me-east-1.myhuaweicloud.com"=>"me-east-1","https://cbr.ae-ad-1.g42cloud.com"=>"ae-ad-1",);

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