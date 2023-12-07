<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRocketMqConfigsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRocketMqConfigsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rocketmqConfigs  RocketMQ配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rocketmqConfigs' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQConfigResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rocketmqConfigs  RocketMQ配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rocketmqConfigs' => null
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
    * rocketmqConfigs  RocketMQ配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rocketmqConfigs' => 'rocketmq_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rocketmqConfigs  RocketMQ配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'rocketmqConfigs' => 'setRocketmqConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rocketmqConfigs  RocketMQ配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'rocketmqConfigs' => 'getRocketmqConfigs'
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
        $this->container['rocketmqConfigs'] = isset($data['rocketmqConfigs']) ? $data['rocketmqConfigs'] : null;
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
    * Gets rocketmqConfigs
    *  RocketMQ配置。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQConfigResp[]|null
    */
    public function getRocketmqConfigs()
    {
        return $this->container['rocketmqConfigs'];
    }

    /**
    * Sets rocketmqConfigs
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQConfigResp[]|null $rocketmqConfigs RocketMQ配置。
    *
    * @return $this
    */
    public function setRocketmqConfigs($rocketmqConfigs)
    {
        $this->container['rocketmqConfigs'] = $rocketmqConfigs;
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

