<?php
namespace HuaweiCloud\SDK\Vpn\V5\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class VpnRegion {

    public static $REGION = array("https://vpn.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://vpn.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://vpn.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://vpn.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://vpn.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://vpn.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://vpn.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://vpn.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://vpn.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://vpn.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://vpn.la-south-2.myhuaweicloud.com"=>"la-south-2","https://vpn.la-north-2.myhuaweicloud.com"=>"la-north-2","https://vpn.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://vpn.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://vpn.ae-ad-1.myhuaweicloud.com"=>"ae-ad-1","https://vpn.eu-west-101.myhuaweicloud.com"=>"eu-west-101","https://vpn.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://vpn.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://vpn.me-east-1.myhuaweicloud.com"=>"me-east-1","https://vpn.cn-east-5.myhuaweicloud.com"=>"cn-east-5","https://vpn.af-south-1.myhuaweicloud.com"=>"af-south-1",);

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