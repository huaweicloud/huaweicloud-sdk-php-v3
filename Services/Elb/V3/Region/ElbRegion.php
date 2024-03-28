<?php
namespace HuaweiCloud\SDK\Elb\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ElbRegion {

    public static $REGION = array("https://elb.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://elb.af-south-1.myhuaweicloud.com"=>"af-south-1","https://elb.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://elb.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://elb.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://elb.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://elb.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://elb.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://elb.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://elb.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://elb.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://elb.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://elb.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://elb.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://elb.la-south-2.myhuaweicloud.com"=>"la-south-2","https://elb.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://elb.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://elb.la-north-2.myhuaweicloud.com"=>"la-north-2","https://elb.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://elb.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://elb.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://elb.eu-west-0.myhuaweicloud.com"=>"eu-west-0","https://elb.me-east-1.myhuaweicloud.com"=>"me-east-1","https://elb.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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