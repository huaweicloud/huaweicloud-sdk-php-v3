<?php
namespace HuaweiCloud\SDK\Iam\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IamRegion {

    public static $REGION = array("https://iam.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://iam.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://iam.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://iam.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://iam.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://iam.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://iam.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://iam.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://iam.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://iam.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://iam.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://iam.af-south-1.myhuaweicloud.com"=>"af-south-1","https://iam.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://iam.la-south-2.myhuaweicloud.com"=>"la-south-2","https://iam.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://iam.la-north-2.myhuaweicloud.com"=>"la-north-2","https://iam.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://iam.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://iam.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://iam.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1","https://iam.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://iam.me-east-1.myhuaweicloud.com"=>"me-east-1","https://iam.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://iam.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://iam.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://iam.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://iam.tr-west-1.myhuaweicloud.com"=>"tr-west-1",);

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