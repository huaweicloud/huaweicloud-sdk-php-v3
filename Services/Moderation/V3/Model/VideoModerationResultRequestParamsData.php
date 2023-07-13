<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoModerationResultRequestParamsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoModerationResult_request_params_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  创建作业时传的url参数
    * frameInterval  创建作业时传的frame_interval参数，默认为5秒截取一帧
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'frameInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  创建作业时传的url参数
    * frameInterval  创建作业时传的frame_interval参数，默认为5秒截取一帧
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
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
    * url  创建作业时传的url参数
    * frameInterval  创建作业时传的frame_interval参数，默认为5秒截取一帧
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'frameInterval' => 'frame_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  创建作业时传的url参数
    * frameInterval  创建作业时传的frame_interval参数，默认为5秒截取一帧
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'frameInterval' => 'setFrameInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  创建作业时传的url参数
    * frameInterval  创建作业时传的frame_interval参数，默认为5秒截取一帧
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
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
    *  创建作业时传的url参数
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
    * @param string $url 创建作业时传的url参数
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets frameInterval
    *  创建作业时传的frame_interval参数，默认为5秒截取一帧
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
    * @param int|null $frameInterval 创建作业时传的frame_interval参数，默认为5秒截取一帧
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

