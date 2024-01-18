<?php
namespace HuaweiCloud\SDK\Css\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CssRegion {

    public static $REGION = array("https://css.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://css.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://css.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://css.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://es.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://css.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://es.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://css.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://css.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://css.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://css.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://css.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://css.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://css.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://css.la-north-2.myhuaweicloud.com"=>"la-north-2","https://css.af-south-1.myhuaweicloud.com"=>"af-south-1","https://css.la-south-2.myhuaweicloud.com"=>"la-south-2","https://css.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://css.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://css.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://css.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://css.cn-east-5.myhuaweicloud.com"=>"cn-east-5",);

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