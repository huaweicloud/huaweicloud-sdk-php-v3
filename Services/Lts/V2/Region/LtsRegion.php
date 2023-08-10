<?php
namespace HuaweiCloud\SDK\Lts\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class LtsRegion {

    public static $REGION = array("https://lts.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://lts.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://lts.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://lts.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://lts.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://lts.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://lts.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://lts.af-south-1.myhuaweicloud.com"=>"af-south-1","https://lts.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://lts.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://lts.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://lts.la-south-2.myhuaweicloud.com"=>"la-south-2","https://lts.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://lts.la-north-2.myhuaweicloud.com"=>"la-north-2","https://lts.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://lts.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://lts.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1",);

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