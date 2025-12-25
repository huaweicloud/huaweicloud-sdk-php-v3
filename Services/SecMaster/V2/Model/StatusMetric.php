<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  已开启的数量
    * disabled  未开启的数量
    * error  错误的数量
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'int',
            'disabled' => 'int',
            'error' => 'int',
            'isPercentage' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  已开启的数量
    * disabled  未开启的数量
    * error  错误的数量
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => 'int64',
        'disabled' => 'int64',
        'error' => 'int64',
        'isPercentage' => null
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
    * enabled  已开启的数量
    * disabled  未开启的数量
    * error  错误的数量
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'disabled' => 'disabled',
            'error' => 'error',
            'isPercentage' => 'is_percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  已开启的数量
    * disabled  未开启的数量
    * error  错误的数量
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'disabled' => 'setDisabled',
            'error' => 'setError',
            'isPercentage' => 'setIsPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  已开启的数量
    * disabled  未开启的数量
    * error  错误的数量
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'disabled' => 'getDisabled',
            'error' => 'getError',
            'isPercentage' => 'getIsPercentage'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['isPercentage'] = isset($data['isPercentage']) ? $data['isPercentage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enabled']) && ($this->container['enabled'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'enabled', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['enabled']) && ($this->container['enabled'] < 0)) {
                $invalidProperties[] = "invalid value for 'enabled', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['disabled']) && ($this->container['disabled'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'disabled', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['disabled']) && ($this->container['disabled'] < 0)) {
                $invalidProperties[] = "invalid value for 'disabled', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['error']) && ($this->container['error'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'error', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['error']) && ($this->container['error'] < 0)) {
                $invalidProperties[] = "invalid value for 'error', must be bigger than or equal to 0.";
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
    * Gets enabled
    *  已开启的数量
    *
    * @return int|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param int|null $enabled 已开启的数量
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets disabled
    *  未开启的数量
    *
    * @return int|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param int|null $disabled 未开启的数量
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets error
    *  错误的数量
    *
    * @return int|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param int|null $error 错误的数量
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets isPercentage
    *  是否百分比
    *
    * @return bool|null
    */
    public function getIsPercentage()
    {
        return $this->container['isPercentage'];
    }

    /**
    * Sets isPercentage
    *
    * @param bool|null $isPercentage 是否百分比
    *
    * @return $this
    */
    public function setIsPercentage($isPercentage)
    {
        $this->container['isPercentage'] = $isPercentage;
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

