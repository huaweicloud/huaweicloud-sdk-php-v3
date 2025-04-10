<?php
namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CodeArtsArtifactRegion {

    public static $REGION = array("https://cloudartifacts-ext.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cloudartifacts-ext.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://cloudartifacts-ext.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cloudartifacts-ext.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://artifact.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cloudartifacts-ext.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://artifact.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://cloudartifacts-ext.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cloudartifacts-ext.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://cloudartifacts-ext.la-south-2.myhuaweicloud.com"=>"la-south-2","https://cloudartifacts-ext.la-north-2.myhuaweicloud.com"=>"la-north-2","https://cloudartifacts-ext.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://artifact.me-east-1.myhuaweicloud.com"=>"me-east-1","https://artifact.af-south-1.myhuaweicloud.com"=>"af-south-1","https://artifact.af-north-1.myhuaweicloud.com"=>"af-north-1",);

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