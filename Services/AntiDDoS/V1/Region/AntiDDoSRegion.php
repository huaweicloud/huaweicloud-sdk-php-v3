<?php
namespace HuaweiCloud\SDK\AntiDDoS\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class AntiDDoSRegion {

    public static $REGION = array("https://antiddos.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://antiddos.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://antiddos.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://antiddos.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://antiddos.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://antiddos.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://antiddos.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://antiddos.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://antiddos.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://antiddos.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://antiddos.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://antiddos.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://antiddos.af-south-1.myhuaweicloud.com"=>"af-south-1","https://antiddos.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://antiddos.la-south-2.myhuaweicloud.com"=>"la-south-2","https://antiddos.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://antiddos.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://antiddos.la-north-2.myhuaweicloud.com"=>"la-north-2","https://antiddos.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://antiddos.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://antiddos.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://antiddos.eu-west-0.myhuaweicloud.com"=>"eu-west-0",);

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