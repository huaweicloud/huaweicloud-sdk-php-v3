<?php
namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CodeArtsBuildRegion {

    public static $REGION = array("https://cloudbuild-ext.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cloudbuild-ext.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cloudbuild-ext.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cloudbuild-ext.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cloudbuild-ext.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cloudbuild-ext.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cloudbuild-ext.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://cloudbuild-ext.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cloudbuild-ext.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cloudbuild-ext.la-north-2.myhuaweicloud.com"=>"la-north-2",);

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