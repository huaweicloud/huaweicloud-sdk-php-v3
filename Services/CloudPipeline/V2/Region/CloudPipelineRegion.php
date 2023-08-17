<?php
namespace HuaweiCloud\SDK\CloudPipeline\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class CloudPipelineRegion {

    public static $REGION = array("https://cloudpipeline-ext.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://cloudpipeline-ext.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://cloudpipeline-ext.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://cloudpipeline-ext.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://cloudpipeline-ext.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://cloudpipeline-ext.cn-east-2.myhuaweicloud.com"=>"cn-east-2",);

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