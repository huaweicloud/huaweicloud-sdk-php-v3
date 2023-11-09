<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentCreateRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentCreateRequest_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  文档url
    * format  文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    * frameInterval  当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'format' => 'string',
            'frameInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  文档url
    * format  文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    * frameInterval  当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'format' => null,
        'frameInterval' => 'int32'
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
    * url  文档url
    * format  文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    * frameInterval  当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'format' => 'format',
            'frameInterval' => 'frame_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  文档url
    * format  文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    * frameInterval  当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'format' => 'setFormat',
            'frameInterval' => 'setFrameInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  文档url
    * format  文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    * frameInterval  当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'format' => 'getFormat',
            'frameInterval' => 'getFrameInterval'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['frameInterval'] = isset($data['frameInterval']) ? $data['frameInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
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
    * Gets url
    *  文档url
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 文档url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets format
    *  文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 文档格式。可选值： docx pdf doc xls xlsx ppt pptx pps ppsx xltx xltm xlsb xlsm txt csv epub webpage 若format与文档实际格式不一致，则返回报错参数错误
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets frameInterval
    *  当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @return int|null
    */
    public function getFrameInterval()
    {
        return $this->container['frameInterval'];
    }

    /**
    * Sets frameInterval
    *
    * @param int|null $frameInterval 当需要审核网页视频时，视频截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @return $this
    */
    public function setFrameInterval($frameInterval)
    {
        $this->container['frameInterval'] = $frameInterval;
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

