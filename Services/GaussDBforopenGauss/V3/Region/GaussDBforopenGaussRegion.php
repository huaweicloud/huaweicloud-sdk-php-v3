<?php
namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class GaussDBforopenGaussRegion {

    public static $REGION = array("https://gaussdb-opengauss.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://gaussdb-opengauss.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://gaussdb-opengauss.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://gaussdb-opengauss.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://gaussdb-opengauss.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://gaussdb-opengauss.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://gaussdb-opengauss.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://gaussdb-opengauss.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://gaussdb-opengauss.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://gaussdb-opengauss.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://gaussdb-opengauss.la-south-2.myhuaweicloud.com"=>"la-south-2","https://gaussdb-opengauss.la-north-2.myhuaweicloud.com"=>"la-north-2","https://gaussdb-opengauss.af-south-1.myhuaweicloud.com"=>"af-south-1","https://gaussdb-opengauss.cn-north-9.myhuaweicloud.com"=>"cn-north-9",);

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