<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OcaIpSystem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OcaIpSystem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * family  系统类型
    * name  系统名称
    * version  系统版本
    * vendor  vendor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'family' => 'string',
            'name' => 'string',
            'version' => 'string',
            'vendor' => '\HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpVendor'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * family  系统类型
    * name  系统名称
    * version  系统版本
    * vendor  vendor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'family' => null,
        'name' => null,
        'version' => null,
        'vendor' => null
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
    * family  系统类型
    * name  系统名称
    * version  系统版本
    * vendor  vendor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'family' => 'family',
            'name' => 'name',
            'version' => 'version',
            'vendor' => 'vendor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * family  系统类型
    * name  系统名称
    * version  系统版本
    * vendor  vendor
    *
    * @var string[]
    */
    protected static $setters = [
            'family' => 'setFamily',
            'name' => 'setName',
            'version' => 'setVersion',
            'vendor' => 'setVendor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * family  系统类型
    * name  系统名称
    * version  系统版本
    * vendor  vendor
    *
    * @var string[]
    */
    protected static $getters = [
            'family' => 'getFamily',
            'name' => 'getName',
            'version' => 'getVersion',
            'vendor' => 'getVendor'
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
        $this->container['family'] = isset($data['family']) ? $data['family'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['family']) && (mb_strlen($this->container['family']) > 128)) {
                $invalidProperties[] = "invalid value for 'family', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['family']) && (mb_strlen($this->container['family']) < 0)) {
                $invalidProperties[] = "invalid value for 'family', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
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
    * Gets family
    *  系统类型
    *
    * @return string|null
    */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
    * Sets family
    *
    * @param string|null $family 系统类型
    *
    * @return $this
    */
    public function setFamily($family)
    {
        $this->container['family'] = $family;
        return $this;
    }

    /**
    * Gets name
    *  系统名称
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
    * @param string|null $name 系统名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  系统版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 系统版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets vendor
    *  vendor
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpVendor|null
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpVendor|null $vendor vendor
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
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

