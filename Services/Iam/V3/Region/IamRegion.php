<?php
namespace HuaweiCloud\SDK\Iam\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IamRegion {

    public static $REGION = array("https://iam.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://iam.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://iam.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://iam.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://iam.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://iam.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://iam.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://iam.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://iam.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://iam.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://iam.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://iam.af-south-1.myhuaweicloud.com"=>"af-south-1",);

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