<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartVideoLayerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartVideoLayerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoUrl  视频文件的URL。
    * videoCoverUrl  视频封面文件的URL。
    * displayDuration  视频显示时长。单位s * 0：表示一直显示。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoUrl' => 'string',
            'videoCoverUrl' => 'string',
            'displayDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoUrl  视频文件的URL。
    * videoCoverUrl  视频封面文件的URL。
    * displayDuration  视频显示时长。单位s * 0：表示一直显示。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoUrl' => null,
        'videoCoverUrl' => null,
        'displayDuration' => null
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
    * videoUrl  视频文件的URL。
    * videoCoverUrl  视频封面文件的URL。
    * displayDuration  视频显示时长。单位s * 0：表示一直显示。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoUrl' => 'video_url',
            'videoCoverUrl' => 'video_cover_url',
            'displayDuration' => 'display_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoUrl  视频文件的URL。
    * videoCoverUrl  视频封面文件的URL。
    * displayDuration  视频显示时长。单位s * 0：表示一直显示。
    *
    * @var string[]
    */
    protected static $setters = [
            'videoUrl' => 'setVideoUrl',
            'videoCoverUrl' => 'setVideoCoverUrl',
            'displayDuration' => 'setDisplayDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoUrl  视频文件的URL。
    * videoCoverUrl  视频封面文件的URL。
    * displayDuration  视频显示时长。单位s * 0：表示一直显示。
    *
    * @var string[]
    */
    protected static $getters = [
            'videoUrl' => 'getVideoUrl',
            'videoCoverUrl' => 'getVideoCoverUrl',
            'displayDuration' => 'getDisplayDuration'
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
        $this->container['videoUrl'] = isset($data['videoUrl']) ? $data['videoUrl'] : null;
        $this->container['videoCoverUrl'] = isset($data['videoCoverUrl']) ? $data['videoCoverUrl'] : null;
        $this->container['displayDuration'] = isset($data['displayDuration']) ? $data['displayDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['videoUrl'] === null) {
            $invalidProperties[] = "'videoUrl' can't be null";
        }
            if ((mb_strlen($this->container['videoUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'videoUrl', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['videoUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoCoverUrl']) && (mb_strlen($this->container['videoCoverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'videoCoverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['videoCoverUrl']) && (mb_strlen($this->container['videoCoverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoCoverUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['displayDuration']) && ($this->container['displayDuration'] > 3600)) {
                $invalidProperties[] = "invalid value for 'displayDuration', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['displayDuration']) && ($this->container['displayDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'displayDuration', must be bigger than or equal to 0.";
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
    * Gets videoUrl
    *  视频文件的URL。
    *
    * @return string
    */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
    * Sets videoUrl
    *
    * @param string $videoUrl 视频文件的URL。
    *
    * @return $this
    */
    public function setVideoUrl($videoUrl)
    {
        $this->container['videoUrl'] = $videoUrl;
        return $this;
    }

    /**
    * Gets videoCoverUrl
    *  视频封面文件的URL。
    *
    * @return string|null
    */
    public function getVideoCoverUrl()
    {
        return $this->container['videoCoverUrl'];
    }

    /**
    * Sets videoCoverUrl
    *
    * @param string|null $videoCoverUrl 视频封面文件的URL。
    *
    * @return $this
    */
    public function setVideoCoverUrl($videoCoverUrl)
    {
        $this->container['videoCoverUrl'] = $videoCoverUrl;
        return $this;
    }

    /**
    * Gets displayDuration
    *  视频显示时长。单位s * 0：表示一直显示。
    *
    * @return int|null
    */
    public function getDisplayDuration()
    {
        return $this->container['displayDuration'];
    }

    /**
    * Sets displayDuration
    *
    * @param int|null $displayDuration 视频显示时长。单位s * 0：表示一直显示。
    *
    * @return $this
    */
    public function setDisplayDuration($displayDuration)
    {
        $this->container['displayDuration'] = $displayDuration;
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

