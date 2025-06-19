<?php
namespace HuaweiCloud\SDK\Cloudtest\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CloudtestRegion {

    public static $REGION = array("https://cloudtest-ext.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cloudtest-ext.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cloudtest-ext.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cloudtest-ext.cn-east-2.myhuaweicloud.cn"=>"cn-east-2","https://cloudtest-ext.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cloudtest-ext.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cloudtest-ext.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cloudtest-ext.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

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