<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyInstancePortRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyInstancePortRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => null
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
    * port  **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
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
    * Gets port
    *  **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**: 实例设置的数据库端口号。 **约束限制**: 不涉及。 **取值范围**: 1024~39998（其中2378、2379、2380、4999、5000、5999、6000、60001、8097、8098、12016、12017、20049、20050、21731、21732、32122、32123和32124被系统占用不可设置）。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
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

