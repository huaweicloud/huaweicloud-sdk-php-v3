<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskCheckSettingsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskCheckSettingsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cfgKey  检查参数对应的key值
    * status  参数状态
    * cfgValue  检查参数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cfgKey' => 'string',
            'status' => 'string',
            'cfgValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cfgKey  检查参数对应的key值
    * status  参数状态
    * cfgValue  检查参数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cfgKey' => null,
        'status' => null,
        'cfgValue' => null
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
    * cfgKey  检查参数对应的key值
    * status  参数状态
    * cfgValue  检查参数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cfgKey' => 'cfg_key',
            'status' => 'status',
            'cfgValue' => 'cfg_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cfgKey  检查参数对应的key值
    * status  参数状态
    * cfgValue  检查参数值
    *
    * @var string[]
    */
    protected static $setters = [
            'cfgKey' => 'setCfgKey',
            'status' => 'setStatus',
            'cfgValue' => 'setCfgValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cfgKey  检查参数对应的key值
    * status  参数状态
    * cfgValue  检查参数值
    *
    * @var string[]
    */
    protected static $getters = [
            'cfgKey' => 'getCfgKey',
            'status' => 'getStatus',
            'cfgValue' => 'getCfgValue'
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
        $this->container['cfgKey'] = isset($data['cfgKey']) ? $data['cfgKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cfgValue'] = isset($data['cfgValue']) ? $data['cfgValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cfgKey'] === null) {
            $invalidProperties[] = "'cfgKey' can't be null";
        }
            if ((mb_strlen($this->container['cfgKey']) > 50)) {
                $invalidProperties[] = "invalid value for 'cfgKey', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['cfgKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'cfgKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 3)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cfgValue']) && (mb_strlen($this->container['cfgValue']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cfgValue', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cfgValue']) && (mb_strlen($this->container['cfgValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'cfgValue', the character length must be bigger than or equal to 1.";
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
    * Gets cfgKey
    *  检查参数对应的key值
    *
    * @return string
    */
    public function getCfgKey()
    {
        return $this->container['cfgKey'];
    }

    /**
    * Sets cfgKey
    *
    * @param string $cfgKey 检查参数对应的key值
    *
    * @return $this
    */
    public function setCfgKey($cfgKey)
    {
        $this->container['cfgKey'] = $cfgKey;
        return $this;
    }

    /**
    * Gets status
    *  参数状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 参数状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cfgValue
    *  检查参数值
    *
    * @return string|null
    */
    public function getCfgValue()
    {
        return $this->container['cfgValue'];
    }

    /**
    * Sets cfgValue
    *
    * @param string|null $cfgValue 检查参数值
    *
    * @return $this
    */
    public function setCfgValue($cfgValue)
    {
        $this->container['cfgValue'] = $cfgValue;
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

