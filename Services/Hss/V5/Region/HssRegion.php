<?php
namespace HuaweiCloud\SDK\Hss\V5\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class HssRegion {

    public static $REGION = array("https://hss.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://hss.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://hss.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://hss.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://hss.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://hss.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://hss.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://hss.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://hss.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://hss.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://hss.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://hss.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://hss.af-south-1.myhuaweicloud.com"=>"af-south-1","https://hss.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://hss.la-south-2.myhuaweicloud.com"=>"la-south-2","https://hss.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://hss.la-north-2.myhuaweicloud.com"=>"la-north-2","https://hss.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://hss.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://hss.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://hss.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://hss.me-east-1.myhuaweicloud.com"=>"me-east-1","https://hss.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://hss.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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