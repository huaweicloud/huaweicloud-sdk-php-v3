<?php
namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IAMAccessAnalyzerRegion {

    public static $REGION = array("https://access-analyzer.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://access-analyzer.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4",);

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