<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TTSAJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TTSAJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  语音驱动任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * contentDuration  语音驱动内容时长。  单位:秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'state' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'contentDuration' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  语音驱动任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * contentDuration  语音驱动内容时长。  单位:秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'state' => null,
        'startTime' => null,
        'endTime' => null,
        'contentDuration' => 'float'
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
    * jobId  语音驱动任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * contentDuration  语音驱动内容时长。  单位:秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'state' => 'state',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'contentDuration' => 'content_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  语音驱动任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * contentDuration  语音驱动内容时长。  单位:秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'state' => 'setState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'contentDuration' => 'setContentDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  语音驱动任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * contentDuration  语音驱动内容时长。  单位:秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'state' => 'getState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'contentDuration' => 'getContentDuration'
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
    const STATE_WAITING = 'WAITING';
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_SUCCEED = 'SUCCEED';
    const STATE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAITING,
            self::STATE_PROCESSING,
            self::STATE_SUCCEED,
            self::STATE_FAILED,
        ];
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['contentDuration'] = isset($data['contentDuration']) ? $data['contentDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 36)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['contentDuration']) && ($this->container['contentDuration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'contentDuration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['contentDuration']) && ($this->container['contentDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'contentDuration', must be bigger than or equal to 0.";
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
    * Gets jobId
    *  语音驱动任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 语音驱动任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets state
    *  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets contentDuration
    *  语音驱动内容时长。  单位:秒。
    *
    * @return float|null
    */
    public function getContentDuration()
    {
        return $this->container['contentDuration'];
    }

    /**
    * Sets contentDuration
    *
    * @param float|null $contentDuration 语音驱动内容时长。  单位:秒。
    *
    * @return $this
    */
    public function setContentDuration($contentDuration)
    {
        $this->container['contentDuration'] = $contentDuration;
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

