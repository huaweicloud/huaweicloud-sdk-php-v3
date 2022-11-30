<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Thumbnail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Thumbnail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    * time  **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    * dots  **type**取值为dots时必填。指定时间截图时的时间点数组。
    * coverPosition  该值表示指定第几张截图作为封面。  默认值：1。
    * format  截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    * aspectRatio  纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    * maxLength  截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'time' => 'int',
            'dots' => 'int[]',
            'coverPosition' => 'int',
            'format' => 'int',
            'aspectRatio' => 'int',
            'maxLength' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    * time  **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    * dots  **type**取值为dots时必填。指定时间截图时的时间点数组。
    * coverPosition  该值表示指定第几张截图作为封面。  默认值：1。
    * format  截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    * aspectRatio  纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    * maxLength  截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'time' => null,
        'dots' => null,
        'coverPosition' => null,
        'format' => null,
        'aspectRatio' => null,
        'maxLength' => null
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
    * type  截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    * time  **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    * dots  **type**取值为dots时必填。指定时间截图时的时间点数组。
    * coverPosition  该值表示指定第几张截图作为封面。  默认值：1。
    * format  截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    * aspectRatio  纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    * maxLength  截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'time' => 'time',
            'dots' => 'dots',
            'coverPosition' => 'cover_position',
            'format' => 'format',
            'aspectRatio' => 'aspect_ratio',
            'maxLength' => 'max_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    * time  **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    * dots  **type**取值为dots时必填。指定时间截图时的时间点数组。
    * coverPosition  该值表示指定第几张截图作为封面。  默认值：1。
    * format  截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    * aspectRatio  纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    * maxLength  截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'time' => 'setTime',
            'dots' => 'setDots',
            'coverPosition' => 'setCoverPosition',
            'format' => 'setFormat',
            'aspectRatio' => 'setAspectRatio',
            'maxLength' => 'setMaxLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    * time  **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    * dots  **type**取值为dots时必填。指定时间截图时的时间点数组。
    * coverPosition  该值表示指定第几张截图作为封面。  默认值：1。
    * format  截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    * aspectRatio  纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    * maxLength  截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'time' => 'getTime',
            'dots' => 'getDots',
            'coverPosition' => 'getCoverPosition',
            'format' => 'getFormat',
            'aspectRatio' => 'getAspectRatio',
            'maxLength' => 'getMaxLength'
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
    const TYPE_TIME = 'time';
    const TYPE_DOTS = 'dots';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TIME,
            self::TYPE_DOTS,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['dots'] = isset($data['dots']) ? $data['dots'] : null;
        $this->container['coverPosition'] = isset($data['coverPosition']) ? $data['coverPosition'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['aspectRatio'] = isset($data['aspectRatio']) ? $data['aspectRatio'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 截图类型。  取值如下： - time：每次进行截图的间隔时间。 - dots: 按照指定的时间点截图。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets time
    *  **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time **type**取值为time时必填。根据时间间隔采样时的时间间隔值。  取值范围：[1,12]之间的整数。  单位：秒。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets dots
    *  **type**取值为dots时必填。指定时间截图时的时间点数组。
    *
    * @return int[]|null
    */
    public function getDots()
    {
        return $this->container['dots'];
    }

    /**
    * Sets dots
    *
    * @param int[]|null $dots **type**取值为dots时必填。指定时间截图时的时间点数组。
    *
    * @return $this
    */
    public function setDots($dots)
    {
        $this->container['dots'] = $dots;
        return $this;
    }

    /**
    * Gets coverPosition
    *  该值表示指定第几张截图作为封面。  默认值：1。
    *
    * @return int|null
    */
    public function getCoverPosition()
    {
        return $this->container['coverPosition'];
    }

    /**
    * Sets coverPosition
    *
    * @param int|null $coverPosition 该值表示指定第几张截图作为封面。  默认值：1。
    *
    * @return $this
    */
    public function setCoverPosition($coverPosition)
    {
        $this->container['coverPosition'] = $coverPosition;
        return $this;
    }

    /**
    * Gets format
    *  截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    *
    * @return int|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param int|null $format 截图文件格式。  取值如下： - 1：jpg。  默认值：1 。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets aspectRatio
    *  纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    *
    * @return int|null
    */
    public function getAspectRatio()
    {
        return $this->container['aspectRatio'];
    }

    /**
    * Sets aspectRatio
    *
    * @param int|null $aspectRatio 纵横比，图像缩放方式。  取值如下： - 0：自适应（保持原有宽高比）。 - 1：16:9。  默认值：0。
    *
    * @return $this
    */
    public function setAspectRatio($aspectRatio)
    {
        $this->container['aspectRatio'] = $aspectRatio;
        return $this;
    }

    /**
    * Gets maxLength
    *  截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 截图最长边的尺寸。  单位：像素。  宽边尺寸按照该尺寸与原始视频像素等比缩放计算。
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
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

