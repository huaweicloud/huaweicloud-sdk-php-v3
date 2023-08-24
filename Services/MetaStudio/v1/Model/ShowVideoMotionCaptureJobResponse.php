<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVideoMotionCaptureJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVideoMotionCaptureJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * motionCaptureMode  视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    * inputInfo  inputInfo
    * outputInfo  outputInfo
    * jobId  视频驱动任务ID。
    * state  任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'motionCaptureMode' => 'string',
            'inputInfo' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\InputInfo',
            'outputInfo' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\OutputInfo',
            'jobId' => 'string',
            'state' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * motionCaptureMode  视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    * inputInfo  inputInfo
    * outputInfo  outputInfo
    * jobId  视频驱动任务ID。
    * state  任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'motionCaptureMode' => null,
        'inputInfo' => null,
        'outputInfo' => null,
        'jobId' => null,
        'state' => null,
        'startTime' => null,
        'endTime' => null
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
    * motionCaptureMode  视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    * inputInfo  inputInfo
    * outputInfo  outputInfo
    * jobId  视频驱动任务ID。
    * state  任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'motionCaptureMode' => 'motion_capture_mode',
            'inputInfo' => 'input_info',
            'outputInfo' => 'output_info',
            'jobId' => 'job_id',
            'state' => 'state',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * motionCaptureMode  视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    * inputInfo  inputInfo
    * outputInfo  outputInfo
    * jobId  视频驱动任务ID。
    * state  任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @var string[]
    */
    protected static $setters = [
            'motionCaptureMode' => 'setMotionCaptureMode',
            'inputInfo' => 'setInputInfo',
            'outputInfo' => 'setOutputInfo',
            'jobId' => 'setJobId',
            'state' => 'setState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * motionCaptureMode  视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    * inputInfo  inputInfo
    * outputInfo  outputInfo
    * jobId  视频驱动任务ID。
    * state  任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @var string[]
    */
    protected static $getters = [
            'motionCaptureMode' => 'getMotionCaptureMode',
            'inputInfo' => 'getInputInfo',
            'outputInfo' => 'getOutputInfo',
            'jobId' => 'getJobId',
            'state' => 'getState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
    const MOTION_CAPTURE_MODE_HEAD = 'HEAD';
    const MOTION_CAPTURE_MODE_HALF_BODY = 'HALF_BODY';
    const MOTION_CAPTURE_MODE_FULL_BODY = 'FULL_BODY';
    const MOTION_CAPTURE_MODE_AUTO = 'AUTO';
    const STATE_WAITING = 'WAITING';
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_SUCCEED = 'SUCCEED';
    const STATE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMotionCaptureModeAllowableValues()
    {
        return [
            self::MOTION_CAPTURE_MODE_HEAD,
            self::MOTION_CAPTURE_MODE_HALF_BODY,
            self::MOTION_CAPTURE_MODE_FULL_BODY,
            self::MOTION_CAPTURE_MODE_AUTO,
        ];
    }

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
        $this->container['motionCaptureMode'] = isset($data['motionCaptureMode']) ? $data['motionCaptureMode'] : null;
        $this->container['inputInfo'] = isset($data['inputInfo']) ? $data['inputInfo'] : null;
        $this->container['outputInfo'] = isset($data['outputInfo']) ? $data['outputInfo'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMotionCaptureModeAllowableValues();
                if (!is_null($this->container['motionCaptureMode']) && !in_array($this->container['motionCaptureMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'motionCaptureMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['motionCaptureMode']) && (mb_strlen($this->container['motionCaptureMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'motionCaptureMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['motionCaptureMode']) && (mb_strlen($this->container['motionCaptureMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'motionCaptureMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
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
    * Gets motionCaptureMode
    *  视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    *
    * @return string|null
    */
    public function getMotionCaptureMode()
    {
        return $this->container['motionCaptureMode'];
    }

    /**
    * Sets motionCaptureMode
    *
    * @param string|null $motionCaptureMode 视频驱动模式。 * HEAD：头部 * HALF_BODY：半身 * FULL_BODY：全身 * AUTO：自动
    *
    * @return $this
    */
    public function setMotionCaptureMode($motionCaptureMode)
    {
        $this->container['motionCaptureMode'] = $motionCaptureMode;
        return $this;
    }

    /**
    * Gets inputInfo
    *  inputInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\InputInfo|null
    */
    public function getInputInfo()
    {
        return $this->container['inputInfo'];
    }

    /**
    * Sets inputInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\InputInfo|null $inputInfo inputInfo
    *
    * @return $this
    */
    public function setInputInfo($inputInfo)
    {
        $this->container['inputInfo'] = $inputInfo;
        return $this;
    }

    /**
    * Gets outputInfo
    *  outputInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\OutputInfo|null
    */
    public function getOutputInfo()
    {
        return $this->container['outputInfo'];
    }

    /**
    * Sets outputInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\OutputInfo|null $outputInfo outputInfo
    *
    * @return $this
    */
    public function setOutputInfo($outputInfo)
    {
        $this->container['outputInfo'] = $outputInfo;
        return $this;
    }

    /**
    * Gets jobId
    *  视频驱动任务ID。
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
    * @param string|null $jobId 视频驱动任务ID。
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
    *  任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
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
    * @param string|null $state 任务的状态。 * WAITING：等待中 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
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

