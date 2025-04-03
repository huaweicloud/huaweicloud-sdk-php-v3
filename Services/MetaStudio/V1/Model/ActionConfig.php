<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionInterval  算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionInterval' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionInterval  算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionInterval' => 'float'
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
    * actionInterval  算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionInterval' => 'action_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionInterval  算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionInterval' => 'setActionInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionInterval  算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionInterval' => 'getActionInterval'
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
        $this->container['actionInterval'] = isset($data['actionInterval']) ? $data['actionInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actionInterval']) && ($this->container['actionInterval'] > 255)) {
                $invalidProperties[] = "invalid value for 'actionInterval', must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['actionInterval']) && ($this->container['actionInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'actionInterval', must be bigger than or equal to 0.";
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
    * Gets actionInterval
    *  算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @return float|null
    */
    public function getActionInterval()
    {
        return $this->container['actionInterval'];
    }

    /**
    * Sets actionInterval
    *
    * @param float|null $actionInterval 算法自动插入无语义动作的时间间隔。这个参数填0或者不填默认是间隔4秒，设置成255时不自动插入无语义动作。
    *
    * @return $this
    */
    public function setActionInterval($actionInterval)
    {
        $this->container['actionInterval'] = $actionInterval;
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

