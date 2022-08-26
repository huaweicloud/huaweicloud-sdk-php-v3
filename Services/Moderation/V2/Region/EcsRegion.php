<?php
namespace HuaweiCloud\SDK\Ecs\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class EcsRegion {

    public static $REGION = [
        "https://moderation.cn-north-1.myhuaweicloud.com"=>"cn-north-1",
        "https://moderation.cn-north-4.myhuaweicloud.com"=>"cn-north-4",
        "https://moderation.cn-east-3.myhuaweicloud.com"=>"cn-east-3",
        "https://moderation.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1",
        "https://moderation.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",

    ];

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
