<?php
namespace HuaweiCloud\SDK\Ocr\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class OcrRegion {

    public static $REGION = array("https://ocr.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ocr.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://ocr.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://ocr.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://ocr.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2",);

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