<?php
namespace HuaweiCloud\SDK\Vpcep\V1\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class VpcepRegion {

    public static $REGION = array("https://vpcep.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://vpcep.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://vpcep.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://vpcep.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://vpcep.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://vpcep.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://vpcep.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://vpcep.la-south-2.myhuaweicloud.com"=>"la-south-2","https://vpcep.na-mexico-1.myhuaweicloud.com"=>"na-mexico-1","https://vpcep.cn-north-9.myhuaweicloud.com"=>"cn-north-9","https://vpcep.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://vpcep.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://vpcep.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://vpcep.af-south-1.myhuaweicloud.com"=>"af-south-1","https://vpcep.cn-south-2.myhuaweicloud.com"=>"cn-south-2","https://vpcep.sa-brazil-1.myhuaweicloud.com"=>"sa-brazil-1","https://vpcep.la-north-2.myhuaweicloud.com"=>"la-north-2",);

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