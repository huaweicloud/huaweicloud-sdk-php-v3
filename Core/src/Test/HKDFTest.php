<?php

use HuaweiCloud\SDK\Core\Auth\HKDF;
use PHPUnit\Framework\TestCase;


class HKDFTest extends TestCase
{

    public function testDerivedSk()
    {
        try {
            $derivationKey = HKDF::getDerKeySHA256("RXKT3UXNJUE7EP6XO9NX", "E6ZARQS6jkC3NDtrqErJ7qgRrGHABeokBr42DXz4", "20240801/cn-north-4/iotdm");
            $this->assertEquals("dec8925d79117ef80d132672159bbd900940fd63a035b460bd90da006707c9dc", $derivationKey);
        } catch (\Exception $e) {
            $this->expectException("Unexpected regionId: cn-north-4");
        }
    }
}