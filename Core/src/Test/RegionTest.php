<?php

use HuaweiCloud\SDK\IoTDA\V5\Region\IoTDARegion;
use PHPUnit\Framework\TestCase;


class RegionTest extends TestCase
{

    public function testCorrectRegion()
    {
        try {
            $region = IoTDARegion::valueOf("cn-north-4");
            $this->assertEquals("https://iotda.cn-north-4.myhuaweicloud.com",$region->getEndpoint());
        } catch (\Exception $e) {
            $this->expectException("Unexpected regionId: cn-north-4");
        }
    }

    public function testErrorRegion()
    {
        try {
            $region = IoTDARegion::valueOf("cn-north-5");
            $this->assertNull($region);
        } catch (\Exception $e) {
            $this->expectException("Unexpected regionId: cn-north-5");
        }
    }
}