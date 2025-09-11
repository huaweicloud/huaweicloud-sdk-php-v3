<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFunctionAsyncInvokeConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFunctionAsyncInvokeConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
    * destinationConfig  destinationConfig
    * enableAsyncStatusLog  开启异步调用状态持久化
    * logGroupId  自定义日志查询组id。
    * logStreamId  自定义日志查询流id。
    * logGroupName  自定义日志查询组名称。
    * logStreamName  自定义日志查询流名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxAsyncEventAgeInSeconds' => 'int',
            'maxAsyncRetryAttempts' => 'int',
            'destinationConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncAsyncDestinationConfig',
            'enableAsyncStatusLog' => 'bool',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'logGroupName' => 'string',
            'logStreamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
    * destinationConfig  destinationConfig
    * enableAsyncStatusLog  开启异步调用状态持久化
    * logGroupId  自定义日志查询组id。
    * logStreamId  自定义日志查询流id。
    * logGroupName  自定义日志查询组名称。
    * logStreamName  自定义日志查询流名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxAsyncEventAgeInSeconds' => null,
        'maxAsyncRetryAttempts' => null,
        'destinationConfig' => null,
        'enableAsyncStatusLog' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'logGroupName' => null,
        'logStreamName' => null
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
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
    * destinationConfig  destinationConfig
    * enableAsyncStatusLog  开启异步调用状态持久化
    * logGroupId  自定义日志查询组id。
    * logStreamId  自定义日志查询流id。
    * logGroupName  自定义日志查询组名称。
    * logStreamName  自定义日志查询流名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxAsyncEventAgeInSeconds' => 'max_async_event_age_in_seconds',
            'maxAsyncRetryAttempts' => 'max_async_retry_attempts',
            'destinationConfig' => 'destination_config',
            'enableAsyncStatusLog' => 'enable_async_status_log',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'logGroupName' => 'log_group_name',
            'logStreamName' => 'log_stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
    * destinationConfig  destinationConfig
    * enableAsyncStatusLog  开启异步调用状态持久化
    * logGroupId  自定义日志查询组id。
    * logStreamId  自定义日志查询流id。
    * logGroupName  自定义日志查询组名称。
    * logStreamName  自定义日志查询流名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxAsyncEventAgeInSeconds' => 'setMaxAsyncEventAgeInSeconds',
            'maxAsyncRetryAttempts' => 'setMaxAsyncRetryAttempts',
            'destinationConfig' => 'setDestinationConfig',
            'enableAsyncStatusLog' => 'setEnableAsyncStatusLog',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'logGroupName' => 'setLogGroupName',
            'logStreamName' => 'setLogStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxAsyncEventAgeInSeconds  消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
    * maxAsyncRetryAttempts  异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
    * destinationConfig  destinationConfig
    * enableAsyncStatusLog  开启异步调用状态持久化
    * logGroupId  自定义日志查询组id。
    * logStreamId  自定义日志查询流id。
    * logGroupName  自定义日志查询组名称。
    * logStreamName  自定义日志查询流名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxAsyncEventAgeInSeconds' => 'getMaxAsyncEventAgeInSeconds',
            'maxAsyncRetryAttempts' => 'getMaxAsyncRetryAttempts',
            'destinationConfig' => 'getDestinationConfig',
            'enableAsyncStatusLog' => 'getEnableAsyncStatusLog',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'logGroupName' => 'getLogGroupName',
            'logStreamName' => 'getLogStreamName'
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
        $this->container['enableAsyncStatusLog'] = isset($data['enableAsyncStatusLog']) ? $data['enableAsyncStatusLog'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['maxAsyncEventAgeInSeconds']) && ($this->container['maxAsyncEventAgeInSeconds'] > 86400)) {
                $invalidProperties[] = "invalid value for 'maxAsyncEventAgeInSeconds', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['maxAsyncEventAgeInSeconds']) && ($this->container['maxAsyncEventAgeInSeconds'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxAsyncEventAgeInSeconds', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxAsyncRetryAttempts']) && ($this->container['maxAsyncRetryAttempts'] > 3)) {
                $invalidProperties[] = "invalid value for 'maxAsyncRetryAttempts', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['maxAsyncRetryAttempts']) && ($this->container['maxAsyncRetryAttempts'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxAsyncRetryAttempts', must be bigger than or equal to 0.";
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
    *  消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
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
    * @param int|null $maxAsyncEventAgeInSeconds 消息最大存活时长，取值范围[1，86400]，单位：秒，默认值为3600。
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
    *  异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
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
    * @param int|null $maxAsyncRetryAttempts 异步调用失败后的最大重试次数，默认值为1。取值范围[0，3]。
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
    * Gets logGroupId
    *  自定义日志查询组id。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 自定义日志查询组id。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  自定义日志查询流id。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 自定义日志查询流id。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  自定义日志查询组名称。
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 自定义日志查询组名称。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamName
    *  自定义日志查询流名称。
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 自定义日志查询流名称。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
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

