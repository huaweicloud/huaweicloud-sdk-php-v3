<?php
namespace HuaweiCloud\SDK\Dns\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class DnsRegion {

    public static $REGION = array("https://dns.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://dns.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://dns.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://dns.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://dns.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://dns.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://dns.af-south-1.myhuaweicloud.com"=>"af-south-1","https://dns.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://dns.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://dns.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://dns.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://dns.la-south-2.myhuaweicloud.com"=>"la-south-2","https://dns.la-north-2.myhuaweicloud.com"=>"la-north-2","https://dns.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://dns.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://dns.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://dns.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://dns.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://dns.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://dns.ru-moscow-1.myhuaweicloud.com"=>"ru-moscow-1","https://dns.me-east-1.myhuaweicloud.com"=>"me-east-1","https://dns.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5",);

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