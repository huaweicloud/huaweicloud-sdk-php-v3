<?php
namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CodeArtsCheckRegion {

    public static $REGION = array("https://codearts-check.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://codearts-check.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://codearts-check.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://codearts-check.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://codearts-check.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://codearts-check.la-north-2.myhuaweicloud.com"=>"la-north-2","https://codearts-check.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://codearts-check.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

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