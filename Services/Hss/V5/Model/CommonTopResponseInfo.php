<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommonTopResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommonTopResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-128位
    * hostNum  **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    * percentage  **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'hostNum' => 'int',
            'percentage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-128位
    * hostNum  **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    * percentage  **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'hostNum' => null,
        'percentage' => null
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
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-128位
    * hostNum  **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    * percentage  **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'hostNum' => 'host_num',
            'percentage' => 'percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-128位
    * hostNum  **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    * percentage  **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'hostNum' => 'setHostNum',
            'percentage' => 'setPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-128位
    * hostNum  **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    * percentage  **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'hostNum' => 'getHostNum',
            'percentage' => 'getPercentage'
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
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['percentage']) && ($this->container['percentage'] > 100)) {
                $invalidProperties[] = "invalid value for 'percentage', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['percentage']) && ($this->container['percentage'] < 0)) {
                $invalidProperties[] = "invalid value for 'percentage', must be bigger than or equal to 0.";
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
    * Gets name
    *  **参数解释**: 名称 **取值范围**: 字符长度1-128位
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
    * @param string|null $name **参数解释**: 名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 主机数量 **取值范围**: 取值0-2147483647位
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets percentage
    *  **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @return int|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param int|null $percentage **参数解释**:  主机占用百分比  **取值范围**:  取值0-100位
    *
    * @return $this
    */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
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

