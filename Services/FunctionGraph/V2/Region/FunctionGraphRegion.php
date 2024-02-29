<?php
namespace HuaweiCloud\SDK\FunctionGraph\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class FunctionGraphRegion {

    public static $REGION = array("https://functiongraph.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://functiongraph.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://functiongraph.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://functiongraph.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://functiongraph.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://functiongraph.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://functiongraph.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://functiongraph.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://functiongraph.af-south-1.myhuaweicloud.com"=>"af-south-1","https://functiongraph.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://functiongraph.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://functiongraph.la-south-2.myhuaweicloud.com"=>"la-south-2","https://functiongraph.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://functiongraph.la-north-2.myhuaweicloud.com"=>"la-north-2","https://functiongraph.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://functiongraph.eu-west-101.myhuaweicloud.eu"=>"eu-west-101","https://functiongraph.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://functiongraph.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://functiongraph.cn-north-11.myhuaweicloud.com"=>"cn-north-11","https://functiongraph.me-east-1.myhuaweicloud.com"=>"me-east-1","https://functiongraph.my-kualalumpur-1.myhuaweicloud.com"=>"my-kualalumpur-1",);

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