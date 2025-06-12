<?php
namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IdentityCenterPortalAPIRegion {

    public static $REGION = array("https://portal-identitycenter.myhuaweicloud.com"=>"cn-north-4","https://portal-identitycenter.myhuaweicloud.com"=>"cn-south-1",);

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