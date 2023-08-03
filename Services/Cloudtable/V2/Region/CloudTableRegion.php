<?php
namespace HuaweiCloud\SDK\CloudTable\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CloudTableRegion {

    public static $REGION = array("https://cloudtable.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cloudtable.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cloudtable.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cloudtable.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://cloudtable.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cloudtable.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cloudtable.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cloudtable.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://cloudtable.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cloudtable.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cloudtable.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://cloudtable.cn-north-2.myhuaweicloud.com"=>"cn-north-2",);

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