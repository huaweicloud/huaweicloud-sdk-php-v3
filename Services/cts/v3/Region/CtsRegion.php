<?php
namespace HuaweiCloud\SDK\Cts\v3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CtsRegion {

    public static $REGION = array("https://cts.af-south-1.myhuaweicloud.com"=>"af-south-1","https://cts.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cts.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cts.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cts.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cts.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cts.cn-south-2.myhuaweicloud.cn"=>"cn-south-2","https://cts.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cts.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://cts.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cts.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cts.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://cts.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cts.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://cts.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://cts.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cts.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cts.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cts.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1",);

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