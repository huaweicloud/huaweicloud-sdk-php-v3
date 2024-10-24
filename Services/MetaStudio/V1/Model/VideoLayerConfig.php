<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoLayerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoLayerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoUrl  **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * videoCoverUrl  **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * loopCount  **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoUrl' => 'string',
            'videoCoverUrl' => 'string',
            'loopCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoUrl  **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * videoCoverUrl  **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * loopCount  **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoUrl' => null,
        'videoCoverUrl' => null,
        'loopCount' => 'int32'
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
    * videoUrl  **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * videoCoverUrl  **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * loopCount  **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoUrl' => 'video_url',
            'videoCoverUrl' => 'video_cover_url',
            'loopCount' => 'loop_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoUrl  **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * videoCoverUrl  **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * loopCount  **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'videoUrl' => 'setVideoUrl',
            'videoCoverUrl' => 'setVideoCoverUrl',
            'loopCount' => 'setLoopCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoUrl  **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * videoCoverUrl  **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    * loopCount  **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'videoUrl' => 'getVideoUrl',
            'videoCoverUrl' => 'getVideoCoverUrl',
            'loopCount' => 'getLoopCount'
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
        $this->container['loopCount'] = isset($data['loopCount']) ? $data['loopCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['videoUrl']) && (mb_strlen($this->container['videoUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'videoUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['videoUrl']) && (mb_strlen($this->container['videoUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'videoUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['videoCoverUrl']) && (mb_strlen($this->container['videoCoverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'videoCoverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['videoCoverUrl']) && (mb_strlen($this->container['videoCoverUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'videoCoverUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loopCount']) && ($this->container['loopCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'loopCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['loopCount']) && ($this->container['loopCount'] < -1)) {
                $invalidProperties[] = "invalid value for 'loopCount', must be bigger than or equal to -1.";
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
    *  **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
    * Sets videoUrl
    *
    * @param string|null $videoUrl **参数解释**： 视频文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
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
    *  **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
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
    * @param string|null $videoCoverUrl **参数解释**： 视频封面文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 **取值范围**： 字符长度1-2048位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVideoCoverUrl($videoCoverUrl)
    {
        $this->container['videoCoverUrl'] = $videoCoverUrl;
        return $this;
    }

    /**
    * Gets loopCount
    *  **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @return int|null
    */
    public function getLoopCount()
    {
        return $this->container['loopCount'];
    }

    /**
    * Sets loopCount
    *
    * @param int|null $loopCount **参数解释**： 循环播放视频次数。  特殊取值： * 0：表示不播放 * -1：表示持续循环播放  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setLoopCount($loopCount)
    {
        $this->container['loopCount'] = $loopCount;
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

