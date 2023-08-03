<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFunctionAsyncInvokeConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFunctionAsyncInvokeConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcUrn  函数URN。
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    * enableAsyncStatusLog  开启异步调用状态持久化
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcUrn' => 'string',
            'maxAsyncEventAgeInSeconds' => 'int',
            'maxAsyncRetryAttempts' => 'int',
            'destinationConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig',
            'createdTime' => 'string',
            'lastModified' => 'string',
            'enableAsyncStatusLog' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcUrn  函数URN。
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    * enableAsyncStatusLog  开启异步调用状态持久化
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcUrn' => null,
        'maxAsyncEventAgeInSeconds' => null,
        'maxAsyncRetryAttempts' => null,
        'destinationConfig' => null,
        'createdTime' => null,
        'lastModified' => null,
        'enableAsyncStatusLog' => null
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
    * funcUrn  函数URN。
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    * enableAsyncStatusLog  开启异步调用状态持久化
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcUrn' => 'func_urn',
            'maxAsyncEventAgeInSeconds' => 'max_async_event_age_in_seconds',
            'maxAsyncRetryAttempts' => 'max_async_retry_attempts',
            'destinationConfig' => 'destination_config',
            'createdTime' => 'created_time',
            'lastModified' => 'last_modified',
            'enableAsyncStatusLog' => 'enable_async_status_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcUrn  函数URN。
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    * enableAsyncStatusLog  开启异步调用状态持久化
    *
    * @var string[]
    */
    protected static $setters = [
            'funcUrn' => 'setFuncUrn',
            'maxAsyncEventAgeInSeconds' => 'setMaxAsyncEventAgeInSeconds',
            'maxAsyncRetryAttempts' => 'setMaxAsyncRetryAttempts',
            'destinationConfig' => 'setDestinationConfig',
            'createdTime' => 'setCreatedTime',
            'lastModified' => 'setLastModified',
            'enableAsyncStatusLog' => 'setEnableAsyncStatusLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcUrn  函数URN。
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[60，86400]。单位：秒。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
    * destinationConfig  destinationConfig
    * createdTime  异步调用配置的创建时间。
    * lastModified  异步调用配置的最后更改时间。
    * enableAsyncStatusLog  开启异步调用状态持久化
    *
    * @var string[]
    */
    protected static $getters = [
            'funcUrn' => 'getFuncUrn',
            'maxAsyncEventAgeInSeconds' => 'getMaxAsyncEventAgeInSeconds',
            'maxAsyncRetryAttempts' => 'getMaxAsyncRetryAttempts',
            'destinationConfig' => 'getDestinationConfig',
            'createdTime' => 'getCreatedTime',
            'lastModified' => 'getLastModified',
            'enableAsyncStatusLog' => 'getEnableAsyncStatusLog'
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
        $this->container['funcUrn'] = isset($data['funcUrn']) ? $data['funcUrn'] : null;
        $this->container['maxAsyncEventAgeInSeconds'] = isset($data['maxAsyncEventAgeInSeconds']) ? $data['maxAsyncEventAgeInSeconds'] : null;
        $this->container['maxAsyncRetryAttempts'] = isset($data['maxAsyncRetryAttempts']) ? $data['maxAsyncRetryAttempts'] : null;
        $this->container['destinationConfig'] = isset($data['destinationConfig']) ? $data['destinationConfig'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['enableAsyncStatusLog'] = isset($data['enableAsyncStatusLog']) ? $data['enableAsyncStatusLog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['funcUrn']) && (mb_strlen($this->container['funcUrn']) > 269)) {
                $invalidProperties[] = "invalid value for 'funcUrn', the character length must be smaller than or equal to 269.";
            }
            if (!is_null($this->container['funcUrn']) && (mb_strlen($this->container['funcUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'funcUrn', the character length must be bigger than or equal to 1.";
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
    * Gets funcUrn
    *  函数URN。
    *
    * @return string|null
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string|null $funcUrn 函数URN。
    *
    * @return $this
    */
    public function setFuncUrn($funcUrn)
    {
        $this->container['funcUrn'] = $funcUrn;
        return $this;
    }

    /**
    * Gets maxAsyncEventAgeInSeconds
    *  消息最大存活时长，取值范围[60，86400]。单位：秒。
    *
    * @return int|null
    */
    public function getMaxAsyncEventAgeInSeconds()
    {
        return $this->container['maxAsyncEventAgeInSeconds'];
    }

    /**
    * Sets maxAsyncEventAgeInSeconds
    *
    * @param int|null $maxAsyncEventAgeInSeconds 消息最大存活时长，取值范围[60，86400]。单位：秒。
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
    * @return int|null
    */
    public function getMaxAsyncRetryAttempts()
    {
        return $this->container['maxAsyncRetryAttempts'];
    }

    /**
    * Sets maxAsyncRetryAttempts
    *
    * @param int|null $maxAsyncRetryAttempts 异步调用失败后的最大重试次数，默认值为3。取值范围[0，8]。
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
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig|null
    */
    public function getDestinationConfig()
    {
        return $this->container['destinationConfig'];
    }

    /**
    * Sets destinationConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig|null $destinationConfig destinationConfig
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
    * Gets enableAsyncStatusLog
    *  开启异步调用状态持久化
    *
    * @return bool|null
    */
    public function getEnableAsyncStatusLog()
    {
        return $this->container['enableAsyncStatusLog'];
    }

    /**
    * Sets enableAsyncStatusLog
    *
    * @param bool|null $enableAsyncStatusLog 开启异步调用状态持久化
    *
    * @return $this
    */
    public function setEnableAsyncStatusLog($enableAsyncStatusLog)
    {
        $this->container['enableAsyncStatusLog'] = $enableAsyncStatusLog;
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

