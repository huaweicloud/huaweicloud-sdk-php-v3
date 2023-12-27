<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTtsaDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTtsaDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * startTime  驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
    * endTime  驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
    * isTail  是否为尾部(任务数据已全部生成，后续没有新的数据)
    * audio  音频数据，Base64编码，1秒内的数据。
    * blendshapes  语音驱动的表情基数据。
    * animations  手工指定的动作库动作数据。
    * motions  语义驱动的智能动作数据。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'isTail' => 'bool',
            'audio' => 'string',
            'blendshapes' => 'string[]',
            'animations' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AnimationItem[]',
            'motions' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\MotionItem[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * startTime  驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
    * endTime  驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
    * isTail  是否为尾部(任务数据已全部生成，后续没有新的数据)
    * audio  音频数据，Base64编码，1秒内的数据。
    * blendshapes  语音驱动的表情基数据。
    * animations  手工指定的动作库动作数据。
    * motions  语义驱动的智能动作数据。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'startTime' => null,
        'endTime' => null,
        'isTail' => null,
        'audio' => null,
        'blendshapes' => null,
        'animations' => null,
        'motions' => null,
        'xRequestId' => null
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
    * jobId  任务ID。
    * startTime  驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
    * endTime  驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
    * isTail  是否为尾部(任务数据已全部生成，后续没有新的数据)
    * audio  音频数据，Base64编码，1秒内的数据。
    * blendshapes  语音驱动的表情基数据。
    * animations  手工指定的动作库动作数据。
    * motions  语义驱动的智能动作数据。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'jobId',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'isTail' => 'is_tail',
            'audio' => 'audio',
            'blendshapes' => 'blendshapes',
            'animations' => 'animations',
            'motions' => 'motions',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * startTime  驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
    * endTime  驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
    * isTail  是否为尾部(任务数据已全部生成，后续没有新的数据)
    * audio  音频数据，Base64编码，1秒内的数据。
    * blendshapes  语音驱动的表情基数据。
    * animations  手工指定的动作库动作数据。
    * motions  语义驱动的智能动作数据。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'isTail' => 'setIsTail',
            'audio' => 'setAudio',
            'blendshapes' => 'setBlendshapes',
            'animations' => 'setAnimations',
            'motions' => 'setMotions',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * startTime  驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
    * endTime  驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
    * isTail  是否为尾部(任务数据已全部生成，后续没有新的数据)
    * audio  音频数据，Base64编码，1秒内的数据。
    * blendshapes  语音驱动的表情基数据。
    * animations  手工指定的动作库动作数据。
    * motions  语义驱动的智能动作数据。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'isTail' => 'getIsTail',
            'audio' => 'getAudio',
            'blendshapes' => 'getBlendshapes',
            'animations' => 'getAnimations',
            'motions' => 'getMotions',
            'xRequestId' => 'getXRequestId'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['isTail'] = isset($data['isTail']) ? $data['isTail'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
        $this->container['blendshapes'] = isset($data['blendshapes']) ? $data['blendshapes'] : null;
        $this->container['animations'] = isset($data['animations']) ? $data['animations'] : null;
        $this->container['motions'] = isset($data['motions']) ? $data['motions'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['audio']) && (mb_strlen($this->container['audio']) > 131072)) {
                $invalidProperties[] = "invalid value for 'audio', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['audio']) && (mb_strlen($this->container['audio']) < 0)) {
                $invalidProperties[] = "invalid value for 'audio', the character length must be bigger than or equal to 0.";
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
    *  任务ID。
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
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets startTime
    *  驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
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
    * @param string|null $startTime 驱动任务开始时间，格式遵循：RFC 3339， 例 “2020-07-30T10:43:17Z”
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
    *  驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
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
    * @param string|null $endTime 驱动任务结束时间，格式遵循：RFC 3339， 例 “2020-07-30T10:45:17Z”
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets isTail
    *  是否为尾部(任务数据已全部生成，后续没有新的数据)
    *
    * @return bool|null
    */
    public function getIsTail()
    {
        return $this->container['isTail'];
    }

    /**
    * Sets isTail
    *
    * @param bool|null $isTail 是否为尾部(任务数据已全部生成，后续没有新的数据)
    *
    * @return $this
    */
    public function setIsTail($isTail)
    {
        $this->container['isTail'] = $isTail;
        return $this;
    }

    /**
    * Gets audio
    *  音频数据，Base64编码，1秒内的数据。
    *
    * @return string|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param string|null $audio 音频数据，Base64编码，1秒内的数据。
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
        return $this;
    }

    /**
    * Gets blendshapes
    *  语音驱动的表情基数据。
    *
    * @return string[]|null
    */
    public function getBlendshapes()
    {
        return $this->container['blendshapes'];
    }

    /**
    * Sets blendshapes
    *
    * @param string[]|null $blendshapes 语音驱动的表情基数据。
    *
    * @return $this
    */
    public function setBlendshapes($blendshapes)
    {
        $this->container['blendshapes'] = $blendshapes;
        return $this;
    }

    /**
    * Gets animations
    *  手工指定的动作库动作数据。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AnimationItem[]|null
    */
    public function getAnimations()
    {
        return $this->container['animations'];
    }

    /**
    * Sets animations
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AnimationItem[]|null $animations 手工指定的动作库动作数据。
    *
    * @return $this
    */
    public function setAnimations($animations)
    {
        $this->container['animations'] = $animations;
        return $this;
    }

    /**
    * Gets motions
    *  语义驱动的智能动作数据。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\MotionItem[]|null
    */
    public function getMotions()
    {
        return $this->container['motions'];
    }

    /**
    * Sets motions
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\MotionItem[]|null $motions 语义驱动的智能动作数据。
    *
    * @return $this
    */
    public function setMotions($motions)
    {
        $this->container['motions'] = $motions;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

