<?php
namespace HuaweiCloud\SDK\GaussDB\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class GaussDBRegion {

    public static $REGION = array("https://gaussdb.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://gaussdb.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://gaussdb.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://gaussdb.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://gaussdb.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://gaussdb.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://gaussdb.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://gaussdb.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://gaussdbformysql.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://gaussdb.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://gaussdb.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://gaussdbformysql.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://gaussdbformysql.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2",);

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