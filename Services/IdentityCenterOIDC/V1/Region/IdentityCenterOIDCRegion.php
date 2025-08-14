<?php
namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IdentityCenterOIDCRegion {

    public static $REGION = array("https://oidc.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://oidc.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://oidc.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://oidc.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://oidc.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://oidc.la-south-2.myhuaweicloud.com"=>"la-south-2","https://oidc.af-south-1.myhuaweicloud.com"=>"af-south-1","https://oidc.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://oidc.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://oidc.me-east-1.myhuaweicloud.com"=>"me-east-1","https://oidc.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://oidc.la-north-2.myhuaweicloud.com"=>"la-north-2","https://oidc.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://oidc.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://oidc.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://oidc.af-north-1.myhuaweicloud.com"=>"af-north-1","https://oidc.ap-southeast-5.myhuaweicloud.com"=>"ap-southeast-5",);

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