<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscodeDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscodeDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * streamName  流名
    * template  转码模板
    * codeRateFormat  转码格式（H264/H265）
    * duration  转码时长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'streamName' => 'string',
            'template' => 'string',
            'codeRateFormat' => 'string',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * streamName  流名
    * template  转码模板
    * codeRateFormat  转码格式（H264/H265）
    * duration  转码时长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'streamName' => null,
        'template' => null,
        'codeRateFormat' => null,
        'duration' => 'int64'
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
    * streamName  流名
    * template  转码模板
    * codeRateFormat  转码格式（H264/H265）
    * duration  转码时长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'streamName' => 'stream_name',
            'template' => 'template',
            'codeRateFormat' => 'code_rate_format',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * streamName  流名
    * template  转码模板
    * codeRateFormat  转码格式（H264/H265）
    * duration  转码时长
    *
    * @var string[]
    */
    protected static $setters = [
            'streamName' => 'setStreamName',
            'template' => 'setTemplate',
            'codeRateFormat' => 'setCodeRateFormat',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * streamName  流名
    * template  转码模板
    * codeRateFormat  转码格式（H264/H265）
    * duration  转码时长
    *
    * @var string[]
    */
    protected static $getters = [
            'streamName' => 'getStreamName',
            'template' => 'getTemplate',
            'codeRateFormat' => 'getCodeRateFormat',
            'duration' => 'getDuration'
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
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['codeRateFormat'] = isset($data['codeRateFormat']) ? $data['codeRateFormat'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 512)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) < 0)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['template']) && (mb_strlen($this->container['template']) > 64)) {
                $invalidProperties[] = "invalid value for 'template', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['template']) && (mb_strlen($this->container['template']) < 0)) {
                $invalidProperties[] = "invalid value for 'template', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['codeRateFormat']) && (mb_strlen($this->container['codeRateFormat']) > 64)) {
                $invalidProperties[] = "invalid value for 'codeRateFormat', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['codeRateFormat']) && (mb_strlen($this->container['codeRateFormat']) < 0)) {
                $invalidProperties[] = "invalid value for 'codeRateFormat', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
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
    * Gets streamName
    *  流名
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 流名
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets template
    *  转码模板
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template 转码模板
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets codeRateFormat
    *  转码格式（H264/H265）
    *
    * @return string|null
    */
    public function getCodeRateFormat()
    {
        return $this->container['codeRateFormat'];
    }

    /**
    * Sets codeRateFormat
    *
    * @param string|null $codeRateFormat 转码格式（H264/H265）
    *
    * @return $this
    */
    public function setCodeRateFormat($codeRateFormat)
    {
        $this->container['codeRateFormat'] = $codeRateFormat;
        return $this;
    }

    /**
    * Gets duration
    *  转码时长
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 转码时长
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

