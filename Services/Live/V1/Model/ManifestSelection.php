<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ManifestSelection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ManifestSelection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * streamOrder  **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    * minVideoBandwidth  **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    * maxVideoBandwidth  **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'streamOrder' => 'string',
            'minVideoBandwidth' => 'int',
            'maxVideoBandwidth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * streamOrder  **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    * minVideoBandwidth  **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    * maxVideoBandwidth  **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'streamOrder' => null,
        'minVideoBandwidth' => 'int32',
        'maxVideoBandwidth' => 'int32'
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
    * streamOrder  **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    * minVideoBandwidth  **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    * maxVideoBandwidth  **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'streamOrder' => 'stream_order',
            'minVideoBandwidth' => 'min_video_bandwidth',
            'maxVideoBandwidth' => 'max_video_bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * streamOrder  **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    * minVideoBandwidth  **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    * maxVideoBandwidth  **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @var string[]
    */
    protected static $setters = [
            'streamOrder' => 'setStreamOrder',
            'minVideoBandwidth' => 'setMinVideoBandwidth',
            'maxVideoBandwidth' => 'setMaxVideoBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * streamOrder  **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    * minVideoBandwidth  **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    * maxVideoBandwidth  **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @var string[]
    */
    protected static $getters = [
            'streamOrder' => 'getStreamOrder',
            'minVideoBandwidth' => 'getMinVideoBandwidth',
            'maxVideoBandwidth' => 'getMaxVideoBandwidth'
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
    const STREAM_ORDER_ORIGINAL = 'ORIGINAL';
    const STREAM_ORDER_VIDEO_BITRATE_ASCENDING = 'VIDEO_BITRATE_ASCENDING';
    const STREAM_ORDER_VIDEO_BITRATE_DESCENDING = 'VIDEO_BITRATE_DESCENDING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStreamOrderAllowableValues()
    {
        return [
            self::STREAM_ORDER_ORIGINAL,
            self::STREAM_ORDER_VIDEO_BITRATE_ASCENDING,
            self::STREAM_ORDER_VIDEO_BITRATE_DESCENDING,
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
        $this->container['streamOrder'] = isset($data['streamOrder']) ? $data['streamOrder'] : null;
        $this->container['minVideoBandwidth'] = isset($data['minVideoBandwidth']) ? $data['minVideoBandwidth'] : null;
        $this->container['maxVideoBandwidth'] = isset($data['maxVideoBandwidth']) ? $data['maxVideoBandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStreamOrderAllowableValues();
                if (!is_null($this->container['streamOrder']) && !in_array($this->container['streamOrder'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'streamOrder', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['minVideoBandwidth']) && ($this->container['minVideoBandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'minVideoBandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['minVideoBandwidth']) && ($this->container['minVideoBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'minVideoBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxVideoBandwidth']) && ($this->container['maxVideoBandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maxVideoBandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maxVideoBandwidth']) && ($this->container['maxVideoBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxVideoBandwidth', must be bigger than or equal to 0.";
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
    * Gets streamOrder
    *  **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    *
    * @return string|null
    */
    public function getStreamOrder()
    {
        return $this->container['streamOrder'];
    }

    /**
    * Sets streamOrder
    *
    * @param string|null $streamOrder **参数解释**： 流排序模式 **约束限制**： 不涉及 **取值范围**： - ORIGINAL：保持原始顺序，即按照频道配置中转码模板的顺序 - VIDEO_BITRATE_ASCENDING：按照视频码率升序 - VIDEO_BITRATE_DESCENDING：按照视频码率降序
    *
    * @return $this
    */
    public function setStreamOrder($streamOrder)
    {
        $this->container['streamOrder'] = $streamOrder;
        return $this;
    }

    /**
    * Gets minVideoBandwidth
    *  **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    *
    * @return int|null
    */
    public function getMinVideoBandwidth()
    {
        return $this->container['minVideoBandwidth'];
    }

    /**
    * Sets minVideoBandwidth
    *
    * @param int|null $minVideoBandwidth **参数解释**： 视频码率过滤的最小码率 **约束限制**： 单位：bit/s；取值必须比max_video_bandwidth小
    *
    * @return $this
    */
    public function setMinVideoBandwidth($minVideoBandwidth)
    {
        $this->container['minVideoBandwidth'] = $minVideoBandwidth;
        return $this;
    }

    /**
    * Gets maxVideoBandwidth
    *  **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @return int|null
    */
    public function getMaxVideoBandwidth()
    {
        return $this->container['maxVideoBandwidth'];
    }

    /**
    * Sets maxVideoBandwidth
    *
    * @param int|null $maxVideoBandwidth **参数解释**： 视频码率过滤的最大码率 **约束限制**： 单位：bit/s；取值必须比min_video_bandwidth大
    *
    * @return $this
    */
    public function setMaxVideoBandwidth($maxVideoBandwidth)
    {
        $this->container['maxVideoBandwidth'] = $maxVideoBandwidth;
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

