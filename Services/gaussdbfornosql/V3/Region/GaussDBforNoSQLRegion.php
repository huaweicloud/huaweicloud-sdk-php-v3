<?php
namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class GaussDBforNoSQLRegion {

    public static $REGION = array("https://gaussdb-nosql.af-south-1.myhuaweicloud.com"=>"af-south-1","https://gaussdb-nosql.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://gaussdb-nosql.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://gaussdb-nosql.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://gaussdb-nosql.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://gaussdb-nosql.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://gaussdb-nosql.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://gaussdb-nosql.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://gaussdb-nosql.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://gaussdb-nosql.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://gaussdb-nosql.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://gaussdb-nosql.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://gaussdb-nosql.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://gaussdb-nosql.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://gaussdb-nosql.la-north-2.myhuaweicloud.com"=>"la-north-2","https://gaussdb-nosql.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://gaussdb-nosql.la-south-2.myhuaweicloud.com"=>"la-south-2","https://gaussdb-nosql.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://gaussdb-nosql.eu-west-101.myhuaweicloud.eu"=>"eu-west-101",);

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