<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailabilityZones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailabilityZones';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basic  basic
    * professional1  professional1
    * professional2  professional2
    * professional1NonFixedIp  professional1NonFixedIp
    * professional2NonFixedIp  professional2NonFixedIp
    * gm  gm
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basic' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones',
            'professional1' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones',
            'professional2' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones',
            'professional1NonFixedIp' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones',
            'professional2NonFixedIp' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones',
            'gm' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basic  basic
    * professional1  professional1
    * professional2  professional2
    * professional1NonFixedIp  professional1NonFixedIp
    * professional2NonFixedIp  professional2NonFixedIp
    * gm  gm
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basic' => null,
        'professional1' => null,
        'professional2' => null,
        'professional1NonFixedIp' => null,
        'professional2NonFixedIp' => null,
        'gm' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * basic  basic
    * professional1  professional1
    * professional2  professional2
    * professional1NonFixedIp  professional1NonFixedIp
    * professional2NonFixedIp  professional2NonFixedIp
    * gm  gm
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basic' => 'basic',
            'professional1' => 'professional1',
            'professional2' => 'professional2',
            'professional1NonFixedIp' => 'Professional1-NonFixedIP',
            'professional2NonFixedIp' => 'Professional2-NonFixedIP',
            'gm' => 'gm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basic  basic
    * professional1  professional1
    * professional2  professional2
    * professional1NonFixedIp  professional1NonFixedIp
    * professional2NonFixedIp  professional2NonFixedIp
    * gm  gm
    *
    * @var string[]
    */
    protected static $setters = [
            'basic' => 'setBasic',
            'professional1' => 'setProfessional1',
            'professional2' => 'setProfessional2',
            'professional1NonFixedIp' => 'setProfessional1NonFixedIp',
            'professional2NonFixedIp' => 'setProfessional2NonFixedIp',
            'gm' => 'setGm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basic  basic
    * professional1  professional1
    * professional2  professional2
    * professional1NonFixedIp  professional1NonFixedIp
    * professional2NonFixedIp  professional2NonFixedIp
    * gm  gm
    *
    * @var string[]
    */
    protected static $getters = [
            'basic' => 'getBasic',
            'professional1' => 'getProfessional1',
            'professional2' => 'getProfessional2',
            'professional1NonFixedIp' => 'getProfessional1NonFixedIp',
            'professional2NonFixedIp' => 'getProfessional2NonFixedIp',
            'gm' => 'getGm'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['professional1'] = isset($data['professional1']) ? $data['professional1'] : null;
        $this->container['professional2'] = isset($data['professional2']) ? $data['professional2'] : null;
        $this->container['professional1NonFixedIp'] = isset($data['professional1NonFixedIp']) ? $data['professional1NonFixedIp'] : null;
        $this->container['professional2NonFixedIp'] = isset($data['professional2NonFixedIp']) ? $data['professional2NonFixedIp'] : null;
        $this->container['gm'] = isset($data['gm']) ? $data['gm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets basic
    *  basic
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null
    */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
    * Sets basic
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null $basic basic
    *
    * @return $this
    */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;
        return $this;
    }

    /**
    * Gets professional1
    *  professional1
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null
    */
    public function getProfessional1()
    {
        return $this->container['professional1'];
    }

    /**
    * Sets professional1
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null $professional1 professional1
    *
    * @return $this
    */
    public function setProfessional1($professional1)
    {
        $this->container['professional1'] = $professional1;
        return $this;
    }

    /**
    * Gets professional2
    *  professional2
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null
    */
    public function getProfessional2()
    {
        return $this->container['professional2'];
    }

    /**
    * Sets professional2
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null $professional2 professional2
    *
    * @return $this
    */
    public function setProfessional2($professional2)
    {
        $this->container['professional2'] = $professional2;
        return $this;
    }

    /**
    * Gets professional1NonFixedIp
    *  professional1NonFixedIp
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null
    */
    public function getProfessional1NonFixedIp()
    {
        return $this->container['professional1NonFixedIp'];
    }

    /**
    * Sets professional1NonFixedIp
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null $professional1NonFixedIp professional1NonFixedIp
    *
    * @return $this
    */
    public function setProfessional1NonFixedIp($professional1NonFixedIp)
    {
        $this->container['professional1NonFixedIp'] = $professional1NonFixedIp;
        return $this;
    }

    /**
    * Gets professional2NonFixedIp
    *  professional2NonFixedIp
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null
    */
    public function getProfessional2NonFixedIp()
    {
        return $this->container['professional2NonFixedIp'];
    }

    /**
    * Sets professional2NonFixedIp
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null $professional2NonFixedIp professional2NonFixedIp
    *
    * @return $this
    */
    public function setProfessional2NonFixedIp($professional2NonFixedIp)
    {
        $this->container['professional2NonFixedIp'] = $professional2NonFixedIp;
        return $this;
    }

    /**
    * Gets gm
    *  gm
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null
    */
    public function getGm()
    {
        return $this->container['gm'];
    }

    /**
    * Sets gm
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnGatewayAvailabilityZones|null $gm gm
    *
    * @return $this
    */
    public function setGm($gm)
    {
        $this->container['gm'] = $gm;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

