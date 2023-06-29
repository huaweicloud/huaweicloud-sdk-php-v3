<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemuxOutputParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemuxOutputParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * format  输出格式。取值范围： - HLS - MP4
    * segmentDuration  分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    * removeMeta  输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'format' => 'string',
            'segmentDuration' => 'int',
            'removeMeta' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * format  输出格式。取值范围： - HLS - MP4
    * segmentDuration  分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    * removeMeta  输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'format' => null,
        'segmentDuration' => 'int32',
        'removeMeta' => null
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
    * format  输出格式。取值范围： - HLS - MP4
    * segmentDuration  分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    * removeMeta  输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'format' => 'format',
            'segmentDuration' => 'segment_duration',
            'removeMeta' => 'remove_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * format  输出格式。取值范围： - HLS - MP4
    * segmentDuration  分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    * removeMeta  输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @var string[]
    */
    protected static $setters = [
            'format' => 'setFormat',
            'segmentDuration' => 'setSegmentDuration',
            'removeMeta' => 'setRemoveMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * format  输出格式。取值范围： - HLS - MP4
    * segmentDuration  分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    * removeMeta  输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @var string[]
    */
    protected static $getters = [
            'format' => 'getFormat',
            'segmentDuration' => 'getSegmentDuration',
            'removeMeta' => 'getRemoveMeta'
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : 'MP4';
        $this->container['segmentDuration'] = isset($data['segmentDuration']) ? $data['segmentDuration'] : 5;
        $this->container['removeMeta'] = isset($data['removeMeta']) ? $data['removeMeta'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 16)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['segmentDuration']) && ($this->container['segmentDuration'] > 20)) {
                $invalidProperties[] = "invalid value for 'segmentDuration', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['segmentDuration']) && ($this->container['segmentDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'segmentDuration', must be bigger than or equal to 0.";
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
    * Gets format
    *  输出格式。取值范围： - HLS - MP4
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 输出格式。取值范围： - HLS - MP4
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets segmentDuration
    *  分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    *
    * @return int|null
    */
    public function getSegmentDuration()
    {
        return $this->container['segmentDuration'];
    }

    /**
    * Sets segmentDuration
    *
    * @param int|null $segmentDuration 分片时长，仅当“format”为“HLS”时有效。  取值范围：[2，10]。  默认值： 5。  单位：秒。
    *
    * @return $this
    */
    public function setSegmentDuration($segmentDuration)
    {
        $this->container['segmentDuration'] = $segmentDuration;
        return $this;
    }

    /**
    * Gets removeMeta
    *  输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @return bool|null
    */
    public function getRemoveMeta()
    {
        return $this->container['removeMeta'];
    }

    /**
    * Sets removeMeta
    *
    * @param bool|null $removeMeta 输出媒体是否去除片源的中metadata自定义信息。默认值：false
    *
    * @return $this
    */
    public function setRemoveMeta($removeMeta)
    {
        $this->container['removeMeta'] = $removeMeta;
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

