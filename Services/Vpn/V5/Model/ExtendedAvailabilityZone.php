<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendedAvailabilityZone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendedAvailabilityZone';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  可用区名称
    * publicBorderGroup  公共边界组
    * availableSpecs  该可用区下可选的VPN网关规格组合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'publicBorderGroup' => 'string',
            'availableSpecs' => '\HuaweiCloud\SDK\Vpn\V5\Model\AvailableSpec[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  可用区名称
    * publicBorderGroup  公共边界组
    * availableSpecs  该可用区下可选的VPN网关规格组合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'publicBorderGroup' => null,
        'availableSpecs' => null
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
    * name  可用区名称
    * publicBorderGroup  公共边界组
    * availableSpecs  该可用区下可选的VPN网关规格组合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'publicBorderGroup' => 'public_border_group',
            'availableSpecs' => 'available_specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  可用区名称
    * publicBorderGroup  公共边界组
    * availableSpecs  该可用区下可选的VPN网关规格组合
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'availableSpecs' => 'setAvailableSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  可用区名称
    * publicBorderGroup  公共边界组
    * availableSpecs  该可用区下可选的VPN网关规格组合
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'availableSpecs' => 'getAvailableSpecs'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['availableSpecs'] = isset($data['availableSpecs']) ? $data['availableSpecs'] : null;
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
    * Gets name
    *  可用区名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 可用区名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  公共边界组
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 公共边界组
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets availableSpecs
    *  该可用区下可选的VPN网关规格组合
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\AvailableSpec[]|null
    */
    public function getAvailableSpecs()
    {
        return $this->container['availableSpecs'];
    }

    /**
    * Sets availableSpecs
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\AvailableSpec[]|null $availableSpecs 该可用区下可选的VPN网关规格组合
    *
    * @return $this
    */
    public function setAvailableSpecs($availableSpecs)
    {
        $this->container['availableSpecs'] = $availableSpecs;
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

