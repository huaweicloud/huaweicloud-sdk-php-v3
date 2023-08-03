<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnimatedGraphicsOutputParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnimatedGraphicsOutputParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * format  动图格式，目前仅支持取值 gif
    * width  输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    * height  输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    * start  起始时间，单位：毫秒
    * end  结束时间。  单位：毫秒。  end、start差值最多60秒。
    * frameRate  动图帧率。  取值范围：[1,75]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'format' => 'string',
            'width' => 'int',
            'height' => 'int',
            'start' => 'int',
            'end' => 'int',
            'frameRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * format  动图格式，目前仅支持取值 gif
    * width  输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    * height  输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    * start  起始时间，单位：毫秒
    * end  结束时间。  单位：毫秒。  end、start差值最多60秒。
    * frameRate  动图帧率。  取值范围：[1,75]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'format' => null,
        'width' => 'int32',
        'height' => 'int32',
        'start' => 'int32',
        'end' => 'int32',
        'frameRate' => 'int32'
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
    * format  动图格式，目前仅支持取值 gif
    * width  输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    * height  输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    * start  起始时间，单位：毫秒
    * end  结束时间。  单位：毫秒。  end、start差值最多60秒。
    * frameRate  动图帧率。  取值范围：[1,75]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'format' => 'format',
            'width' => 'width',
            'height' => 'height',
            'start' => 'start',
            'end' => 'end',
            'frameRate' => 'frame_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * format  动图格式，目前仅支持取值 gif
    * width  输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    * height  输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    * start  起始时间，单位：毫秒
    * end  结束时间。  单位：毫秒。  end、start差值最多60秒。
    * frameRate  动图帧率。  取值范围：[1,75]
    *
    * @var string[]
    */
    protected static $setters = [
            'format' => 'setFormat',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'start' => 'setStart',
            'end' => 'setEnd',
            'frameRate' => 'setFrameRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * format  动图格式，目前仅支持取值 gif
    * width  输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    * height  输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    * start  起始时间，单位：毫秒
    * end  结束时间。  单位：毫秒。  end、start差值最多60秒。
    * frameRate  动图帧率。  取值范围：[1,75]
    *
    * @var string[]
    */
    protected static $getters = [
            'format' => 'getFormat',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'start' => 'getStart',
            'end' => 'getEnd',
            'frameRate' => 'getFrameRate'
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
    const FORMAT_GIF = 'gif';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_GIF,
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 16)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
            if (($this->container['width'] > 3840)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 3840.";
            }
            if (($this->container['width'] < -1)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to -1.";
            }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
            if (($this->container['height'] > 2160)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2160.";
            }
            if (($this->container['height'] < -1)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to -1.";
            }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
            if (($this->container['start'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'start', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['start'] < 0)) {
                $invalidProperties[] = "invalid value for 'start', must be bigger than or equal to 0.";
            }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
            if (($this->container['end'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'end', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['end'] < 0)) {
                $invalidProperties[] = "invalid value for 'end', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] > 76)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 76.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 0.";
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
    *  动图格式，目前仅支持取值 gif
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
    * @param string|null $format 动图格式，目前仅支持取值 gif
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets width
    *  输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    *
    * @return int
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int $width 输出动图的宽。  取值范围：0，-1或[32,3840]之间2的倍数。  >- 若设置为-1， 则宽根据高来自适应，此时“height”不能取-1或0。 >- 若设置为0，则取原始视频的宽，此时“height”只能取0。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    *
    * @return int
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int $height 输出动图的高。  取值范围：0，-1或[32,2160]之间2的倍数。  >- 若设置为-1， 则高根据宽来自适应，此时“width”不能取-1或0。 >- 若设置为0，则取原始视频的高，此时“width”只能取0。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets start
    *  起始时间，单位：毫秒
    *
    * @return int
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int $start 起始时间，单位：毫秒
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  结束时间。  单位：毫秒。  end、start差值最多60秒。
    *
    * @return int
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param int $end 结束时间。  单位：毫秒。  end、start差值最多60秒。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets frameRate
    *  动图帧率。  取值范围：[1,75]
    *
    * @return int|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int|null $frameRate 动图帧率。  取值范围：[1,75]
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
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

