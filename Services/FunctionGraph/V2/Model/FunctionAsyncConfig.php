<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FunctionAsyncConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FunctionAsyncConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxAsyncEventAgeInSeconds' => 'int',
            'maxAsyncRetryAttempts' => 'int',
            'destinationConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig',
            'createdTime' => 'string',
            'lastModified' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxAsyncEventAgeInSeconds' => null,
        'maxAsyncRetryAttempts' => null,
        'destinationConfig' => null,
        'createdTime' => null,
        'lastModified' => null
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
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxAsyncEventAgeInSeconds' => 'max_async_event_age_in_seconds',
            'maxAsyncRetryAttempts' => 'max_async_retry_attempts',
            'destinationConfig' => 'destination_config',
            'createdTime' => 'created_time',
            'lastModified' => 'last_modified'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxAsyncEventAgeInSeconds' => 'setMaxAsyncEventAgeInSeconds',
            'maxAsyncRetryAttempts' => 'setMaxAsyncRetryAttempts',
            'destinationConfig' => 'setDestinationConfig',
            'createdTime' => 'setCreatedTime',
            'lastModified' => 'setLastModified'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxAsyncEventAgeInSeconds' => 'getMaxAsyncEventAgeInSeconds',
            'maxAsyncRetryAttempts' => 'getMaxAsyncRetryAttempts',
            'destinationConfig' => 'getDestinationConfig',
            'createdTime' => 'getCreatedTime',
            'lastModified' => 'getLastModified'
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
        $this->container['maxAsyncEventAgeInSeconds'] = isset($data['maxAsyncEventAgeInSeconds']) ? $data['maxAsyncEventAgeInSeconds'] : null;
        $this->container['maxAsyncRetryAttempts'] = isset($data['maxAsyncRetryAttempts']) ? $data['maxAsyncRetryAttempts'] : null;
        $this->container['destinationConfig'] = isset($data['destinationConfig']) ? $data['destinationConfig'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['maxAsyncEventAgeInSeconds'] === null) {
            $invalidProperties[] = "'maxAsyncEventAgeInSeconds' can't be null";
        }
        if ($this->container['maxAsyncRetryAttempts'] === null) {
            $invalidProperties[] = "'maxAsyncRetryAttempts' can't be null";
        }
        if ($this->container['destinationConfig'] === null) {
            $invalidProperties[] = "'destinationConfig' can't be null";
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
    * Gets maxAsyncEventAgeInSeconds
    *  消息最大存活时长，取值范围[60，86400]。单位：秒。
    *
    * @return int
    */
    public function getMaxAsyncEventAgeInSeconds()
    {
        return $this->container['maxAsyncEventAgeInSeconds'];
    }

    /**
    * Sets maxAsyncEventAgeInSeconds
    *
    * @param int $maxAsyncEventAgeInSeconds 消息最大存活时长，取值范围[60，86400]。单位：秒。
    *
    * @return $this
    */
    public function setMaxAsyncEventAgeInSeconds($maxAsyncEventAgeInSeconds)
    {
        $this->container['maxAsyncEventAgeInSeconds'] = $maxAsyncEventAgeInSeconds;
        return $this;
    }

    /**
    * Gets maxAsyncRetryAttempts
    *  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    *
    * @return int
    */
    public function getMaxAsyncRetryAttempts()
    {
        return $this->container['maxAsyncRetryAttempts'];
    }

    /**
    * Sets maxAsyncRetryAttempts
    *
    * @param int $maxAsyncRetryAttempts 异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    *
    * @return $this
    */
    public function setMaxAsyncRetryAttempts($maxAsyncRetryAttempts)
    {
        $this->container['maxAsyncRetryAttempts'] = $maxAsyncRetryAttempts;
        return $this;
    }

    /**
    * Gets destinationConfig
    *  destinationConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig
    */
    public function getDestinationConfig()
    {
        return $this->container['destinationConfig'];
    }

    /**
    * Sets destinationConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig $destinationConfig destinationConfig
    *
    * @return $this
    */
    public function setDestinationConfig($destinationConfig)
    {
        $this->container['destinationConfig'] = $destinationConfig;
        return $this;
    }

    /**
    * Gets createdTime
    *  异步调用配置的创建时间。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 异步调用配置的创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets lastModified
    *  异步调用配置的最后更改时间。
    *
    * @return string|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param string|null $lastModified 异步调用配置的最后更改时间。
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
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

