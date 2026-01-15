<?php
namespace HuaweiCloud\SDK\Esw\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class EswRegion {

    public static $REGION = array("https://esw.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://esw.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://esw.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://esw.cn-east-4.myhuaweicloud.com"=>"cn-east-4","https://esw.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://esw.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://esw.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://esw.ap-southeast-4.myhuaweicloud.com"=>"ap-southeast-4","https://esw.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://esw.la-south-2.myhuaweicloud.com"=>"la-south-2","https://esw.tr-west-1.myhuaweicloud.com"=>"tr-west-1","https://esw.me-east-1.myhuaweicloud.com"=>"me-east-1","https://esw.af-south-1.myhuaweicloud.com"=>"af-south-1","https://esw.la-north-2.myhuaweicloud.com"=>"la-north-2","https://esw.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1",);

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