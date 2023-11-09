<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentVideoImageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentVideoImageDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  截帧在视频文件中的时间，单位为秒
    * suggestion  截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * ocrText  截帧检测出的文本
    * label  识别的详细标签
    * segments  命中的文本风险片段列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'float',
            'suggestion' => 'string',
            'ocrText' => 'string',
            'label' => 'string',
            'segments' => '\HuaweiCloud\SDK\Moderation\V3\Model\DocumentVideoImageDetailSegments[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  截帧在视频文件中的时间，单位为秒
    * suggestion  截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * ocrText  截帧检测出的文本
    * label  识别的详细标签
    * segments  命中的文本风险片段列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => 'float',
        'suggestion' => null,
        'ocrText' => null,
        'label' => null,
        'segments' => null
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
    * time  截帧在视频文件中的时间，单位为秒
    * suggestion  截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * ocrText  截帧检测出的文本
    * label  识别的详细标签
    * segments  命中的文本风险片段列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'suggestion' => 'suggestion',
            'ocrText' => 'ocr_text',
            'label' => 'label',
            'segments' => 'segments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  截帧在视频文件中的时间，单位为秒
    * suggestion  截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * ocrText  截帧检测出的文本
    * label  识别的详细标签
    * segments  命中的文本风险片段列表
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'suggestion' => 'setSuggestion',
            'ocrText' => 'setOcrText',
            'label' => 'setLabel',
            'segments' => 'setSegments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  截帧在视频文件中的时间，单位为秒
    * suggestion  截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * ocrText  截帧检测出的文本
    * label  识别的详细标签
    * segments  命中的文本风险片段列表
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'suggestion' => 'getSuggestion',
            'ocrText' => 'getOcrText',
            'label' => 'getLabel',
            'segments' => 'getSegments'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['ocrText'] = isset($data['ocrText']) ? $data['ocrText'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
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
    * Gets time
    *  截帧在视频文件中的时间，单位为秒
    *
    * @return float|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param float|null $time 截帧在视频文件中的时间，单位为秒
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets suggestion
    *  截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 截帧审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets ocrText
    *  截帧检测出的文本
    *
    * @return string|null
    */
    public function getOcrText()
    {
        return $this->container['ocrText'];
    }

    /**
    * Sets ocrText
    *
    * @param string|null $ocrText 截帧检测出的文本
    *
    * @return $this
    */
    public function setOcrText($ocrText)
    {
        $this->container['ocrText'] = $ocrText;
        return $this;
    }

    /**
    * Gets label
    *  识别的详细标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 识别的详细标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets segments
    *  命中的文本风险片段列表
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\DocumentVideoImageDetailSegments[]|null
    */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
    * Sets segments
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\DocumentVideoImageDetailSegments[]|null $segments 命中的文本风险片段列表
    *
    * @return $this
    */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;
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

