<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecognizeFlashAsrResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecognizeFlashAsrResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * traceId  服务内部的令牌，可用于在日志中追溯具体调用流程
    * audioDuration  音频时长
    * flashResult  识别结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'traceId' => 'string',
            'audioDuration' => 'int',
            'flashResult' => '\HuaweiCloud\SDK\Sis\V1\Model\FlashResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * traceId  服务内部的令牌，可用于在日志中追溯具体调用流程
    * audioDuration  音频时长
    * flashResult  识别结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'traceId' => null,
        'audioDuration' => 'int32',
        'flashResult' => null
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
    * traceId  服务内部的令牌，可用于在日志中追溯具体调用流程
    * audioDuration  音频时长
    * flashResult  识别结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'traceId' => 'trace_id',
            'audioDuration' => 'audio_duration',
            'flashResult' => 'flash_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * traceId  服务内部的令牌，可用于在日志中追溯具体调用流程
    * audioDuration  音频时长
    * flashResult  识别结果
    *
    * @var string[]
    */
    protected static $setters = [
            'traceId' => 'setTraceId',
            'audioDuration' => 'setAudioDuration',
            'flashResult' => 'setFlashResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * traceId  服务内部的令牌，可用于在日志中追溯具体调用流程
    * audioDuration  音频时长
    * flashResult  识别结果
    *
    * @var string[]
    */
    protected static $getters = [
            'traceId' => 'getTraceId',
            'audioDuration' => 'getAudioDuration',
            'flashResult' => 'getFlashResult'
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
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['audioDuration'] = isset($data['audioDuration']) ? $data['audioDuration'] : null;
        $this->container['flashResult'] = isset($data['flashResult']) ? $data['flashResult'] : null;
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
    * Gets traceId
    *  服务内部的令牌，可用于在日志中追溯具体调用流程
    *
    * @return string|null
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string|null $traceId 服务内部的令牌，可用于在日志中追溯具体调用流程
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets audioDuration
    *  音频时长
    *
    * @return int|null
    */
    public function getAudioDuration()
    {
        return $this->container['audioDuration'];
    }

    /**
    * Sets audioDuration
    *
    * @param int|null $audioDuration 音频时长
    *
    * @return $this
    */
    public function setAudioDuration($audioDuration)
    {
        $this->container['audioDuration'] = $audioDuration;
        return $this;
    }

    /**
    * Gets flashResult
    *  识别结果
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\FlashResult[]|null
    */
    public function getFlashResult()
    {
        return $this->container['flashResult'];
    }

    /**
    * Sets flashResult
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\FlashResult[]|null $flashResult 识别结果
    *
    * @return $this
    */
    public function setFlashResult($flashResult)
    {
        $this->container['flashResult'] = $flashResult;
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

