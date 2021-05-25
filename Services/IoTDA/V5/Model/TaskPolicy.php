<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleTime  批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * retryCount  批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    * retryInterval  批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleTime' => 'string',
            'retryCount' => 'int',
            'retryInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleTime  批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * retryCount  批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    * retryInterval  批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleTime' => null,
        'retryCount' => 'int32',
        'retryInterval' => 'int32'
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
    * scheduleTime  批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * retryCount  批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    * retryInterval  批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleTime' => 'schedule_time',
            'retryCount' => 'retry_count',
            'retryInterval' => 'retry_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleTime  批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * retryCount  批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    * retryInterval  批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleTime' => 'setScheduleTime',
            'retryCount' => 'setRetryCount',
            'retryInterval' => 'setRetryInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleTime  批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * retryCount  批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    * retryInterval  批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleTime' => 'getScheduleTime',
            'retryCount' => 'getRetryCount',
            'retryInterval' => 'getRetryInterval'
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
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
        $this->container['retryCount'] = isset($data['retryCount']) ? $data['retryCount'] : null;
        $this->container['retryInterval'] = isset($data['retryInterval']) ? $data['retryInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scheduleTime']) && !preg_match("/^[0-9]{8}[T]{1}[0-9]{6}[Z]{1}$/", $this->container['scheduleTime'])) {
                $invalidProperties[] = "invalid value for 'scheduleTime', must be conform to the pattern /^[0-9]{8}[T]{1}[0-9]{6}[Z]{1}$/.";
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
    * Gets scheduleTime
    *  批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getScheduleTime()
    {
        return $this->container['scheduleTime'];
    }

    /**
    * Sets scheduleTime
    *
    * @param string|null $scheduleTime 批量任务指定执行时间，取值范围为7天内，不传入此参数表示立即执行，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setScheduleTime($scheduleTime)
    {
        $this->container['scheduleTime'] = $scheduleTime;
        return $this;
    }

    /**
    * Gets retryCount
    *  批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    *
    * @return int|null
    */
    public function getRetryCount()
    {
        return $this->container['retryCount'];
    }

    /**
    * Sets retryCount
    *
    * @param int|null $retryCount 批量任务子任务自动重试次数，如果传入retry_interval参数，则需传入该参数，最大支持重试5次。
    *
    * @return $this
    */
    public function setRetryCount($retryCount)
    {
        $this->container['retryCount'] = $retryCount;
        return $this;
    }

    /**
    * Gets retryInterval
    *  批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @return int|null
    */
    public function getRetryInterval()
    {
        return $this->container['retryInterval'];
    }

    /**
    * Sets retryInterval
    *
    * @param int|null $retryInterval 批量任务子任务失败后，自动重试时间间隔，单位：分钟，最大1440(24小时)，不传入此参数表示不重试，如果传入retry_count参数则需要传入该参数。
    *
    * @return $this
    */
    public function setRetryInterval($retryInterval)
    {
        $this->container['retryInterval'] = $retryInterval;
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

