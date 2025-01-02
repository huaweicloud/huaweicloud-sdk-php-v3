<?php
namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class GaussDBforopenGaussRegion {

    public static $REGION = array("https://gaussdb-opengauss.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://gaussdb-opengauss.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://gaussdb-opengauss.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://gaussdb-opengauss.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://gaussdb-opengauss.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://gaussdb-opengauss.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://gaussdb-opengauss.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://gaussdb-opengauss.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://gaussdb-opengauss.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://gaussdb-opengauss.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://gaussdb-opengauss.la-south-2.myhuaweicloud.com"=>"la-south-2","https://gaussdb-opengauss.la-north-2.myhuaweicloud.com"=>"la-north-2","https://gaussdb-opengauss.af-south-1.myhuaweicloud.com"=>"af-south-1","https://gaussdb-opengauss.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://gaussdb-opengauss.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://gaussdb.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://gaussdb.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://gaussdb.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5","https://gaussdb.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://gaussdb.me-east-1.myhuaweicloud.com"=>"me-east-1","https://gaussdb.af-north-1.myhuaweicloud.com"=>"af-north-1","https://gaussdb-opengauss.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://gaussdb.cn-east-2.myhuaweicloud.com"=>"cn-east-2",);

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