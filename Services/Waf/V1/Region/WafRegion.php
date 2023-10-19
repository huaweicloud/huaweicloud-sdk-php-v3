<?php
namespace HuaweiCloud\SDK\Waf\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class WafRegion {

    public static $REGION = array("https://waf.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://waf.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://waf.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://waf.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://waf.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://waf.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://waf.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://waf.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://waf.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://waf.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://waf.af-south-1.myhuaweicloud.com"=>"af-south-1","https://waf.ru-northwest-2.myhuaweicloud.com"=>"ru-northwest-2","https://waf.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://waf.cn-north-9.myhuaweicloud.cn"=>"cn-north-9","https://waf.la-south-2.myhuaweicloud.com"=>"la-south-2","https://waf.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://waf.la-north-2.myhuaweicloud.com"=>"la-north-2","https://waf.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://waf.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1",);

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