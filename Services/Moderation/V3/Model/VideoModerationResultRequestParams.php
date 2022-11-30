<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoModerationResultRequestParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoModerationResult_request_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  data
    * eventType  创建作业时传的event_type参数
    * imageCategories  创建作业时传的image_categories参数
    * audioCategories  创建作业时传的audio_categories参数
    * callback  创建作业时传的callback参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultRequestParamsData',
            'eventType' => 'string',
            'imageCategories' => 'string[]',
            'audioCategories' => 'string[]',
            'callback' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  data
    * eventType  创建作业时传的event_type参数
    * imageCategories  创建作业时传的image_categories参数
    * audioCategories  创建作业时传的audio_categories参数
    * callback  创建作业时传的callback参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'eventType' => null,
        'imageCategories' => null,
        'audioCategories' => null,
        'callback' => null
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
    * data  data
    * eventType  创建作业时传的event_type参数
    * imageCategories  创建作业时传的image_categories参数
    * audioCategories  创建作业时传的audio_categories参数
    * callback  创建作业时传的callback参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'eventType' => 'event_type',
            'imageCategories' => 'image_categories',
            'audioCategories' => 'audio_categories',
            'callback' => 'callback'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  data
    * eventType  创建作业时传的event_type参数
    * imageCategories  创建作业时传的image_categories参数
    * audioCategories  创建作业时传的audio_categories参数
    * callback  创建作业时传的callback参数
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'eventType' => 'setEventType',
            'imageCategories' => 'setImageCategories',
            'audioCategories' => 'setAudioCategories',
            'callback' => 'setCallback'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  data
    * eventType  创建作业时传的event_type参数
    * imageCategories  创建作业时传的image_categories参数
    * audioCategories  创建作业时传的audio_categories参数
    * callback  创建作业时传的callback参数
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'eventType' => 'getEventType',
            'imageCategories' => 'getImageCategories',
            'audioCategories' => 'getAudioCategories',
            'callback' => 'getCallback'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['imageCategories'] = isset($data['imageCategories']) ? $data['imageCategories'] : null;
        $this->container['audioCategories'] = isset($data['audioCategories']) ? $data['audioCategories'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if ($this->container['imageCategories'] === null) {
            $invalidProperties[] = "'imageCategories' can't be null";
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
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultRequestParamsData
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultRequestParamsData $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets eventType
    *  创建作业时传的event_type参数
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 创建作业时传的event_type参数
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets imageCategories
    *  创建作业时传的image_categories参数
    *
    * @return string[]
    */
    public function getImageCategories()
    {
        return $this->container['imageCategories'];
    }

    /**
    * Sets imageCategories
    *
    * @param string[] $imageCategories 创建作业时传的image_categories参数
    *
    * @return $this
    */
    public function setImageCategories($imageCategories)
    {
        $this->container['imageCategories'] = $imageCategories;
        return $this;
    }

    /**
    * Gets audioCategories
    *  创建作业时传的audio_categories参数
    *
    * @return string[]|null
    */
    public function getAudioCategories()
    {
        return $this->container['audioCategories'];
    }

    /**
    * Sets audioCategories
    *
    * @param string[]|null $audioCategories 创建作业时传的audio_categories参数
    *
    * @return $this
    */
    public function setAudioCategories($audioCategories)
    {
        $this->container['audioCategories'] = $audioCategories;
        return $this;
    }

    /**
    * Gets callback
    *  创建作业时传的callback参数
    *
    * @return string|null
    */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
    * Sets callback
    *
    * @param string|null $callback 创建作业时传的callback参数
    *
    * @return $this
    */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;
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

