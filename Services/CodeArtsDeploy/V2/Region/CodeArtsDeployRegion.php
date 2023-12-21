<?php
namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CodeArtsDeployRegion {

    public static $REGION = array("https://codearts-deploy.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://codearts-deploy.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://codearts-deploy.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://codearts-deploy.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://codearts-deploy.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://codearts-deploy.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://codearts-deploy.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://codearts-deploy.la-north-2.myhuaweicloud.com"=>"la-north-2","https://codearts-deploy.tr-west-1.myhuaweicloud.com"=>"tr-west-1",);

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