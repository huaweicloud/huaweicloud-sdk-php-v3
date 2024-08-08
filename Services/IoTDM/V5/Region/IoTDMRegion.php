<?php
namespace HuaweiCloud\SDK\IoTDM\V5\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class IoTDMRegion {

    public static $REGION = array("https://iotda-mgmt.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://iotda-mgmt.cn-south-4.myhuaweicloud.com"=>"cn-south-4","https://iotda-mgmt.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://iotda-mgmt.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://iotda-mgmt.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://iotda-mgmt.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://iotda-mgmt.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://iotda-mgmt.af-south-1.myhuaweicloud.com"=>"af-south-1","https://iotda-mgmt.me-east-1.myhuaweicloud.com"=>"me-east-1","https://iotda-mgmt.la-south-2.myhuaweicloud.com"=>"la-south-2",);

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