<?php
namespace HuaweiCloud\SDK\Frs\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class FrsRegion {

    public static $REGION = array("https://face.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://face.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://face.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://face.cn-north-1.myhuaweicloud.com"=>"cn-north-1",);

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