<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HumanPosition2D implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HumanPosition2D';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * position  分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    * positionX  分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * positionY  分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'position' => 'string',
            'positionX' => 'int',
            'positionY' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * position  分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    * positionX  分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * positionY  分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'position' => null,
        'positionX' => 'int32',
        'positionY' => 'int32'
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
    * position  分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    * positionX  分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * positionY  分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'position' => 'position',
            'positionX' => 'position_x',
            'positionY' => 'position_y'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * position  分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    * positionX  分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * positionY  分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $setters = [
            'position' => 'setPosition',
            'positionX' => 'setPositionX',
            'positionY' => 'setPositionY'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * position  分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    * positionX  分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * positionY  分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $getters = [
            'position' => 'getPosition',
            'positionX' => 'getPositionX',
            'positionY' => 'getPositionY'
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
    const POSITION_LEFT = 'LEFT';
    const POSITION_MIDDLE = 'MIDDLE';
    const POSITION_RIGHT = 'RIGHT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_LEFT,
            self::POSITION_MIDDLE,
            self::POSITION_RIGHT,
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['positionX'] = isset($data['positionX']) ? $data['positionX'] : null;
        $this->container['positionY'] = isset($data['positionY']) ? $data['positionY'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPositionAllowableValues();
                if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) > 64)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) < 1)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['positionX']) && ($this->container['positionX'] > 3840)) {
                $invalidProperties[] = "invalid value for 'positionX', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['positionX']) && ($this->container['positionX'] < -1920)) {
                $invalidProperties[] = "invalid value for 'positionX', must be bigger than or equal to -1920.";
            }
            if (!is_null($this->container['positionY']) && ($this->container['positionY'] > 3840)) {
                $invalidProperties[] = "invalid value for 'positionY', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['positionY']) && ($this->container['positionY'] < -1920)) {
                $invalidProperties[] = "invalid value for 'positionY', must be bigger than or equal to -1920.";
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
    * Gets position
    *  分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position 分身数字人在背景图片中的位置。 * LEFT： 左 * MIDDLE： 中 * RIGHT： 右 > 当position_x和position_y参数值存在时，position不生效
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets positionX
    *  分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @return int|null
    */
    public function getPositionX()
    {
        return $this->container['positionX'];
    }

    /**
    * Sets positionX
    *
    * @param int|null $positionX 分身数字人X轴位置，即分身数字图片底边中心点像素的X轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @return $this
    */
    public function setPositionX($positionX)
    {
        $this->container['positionX'] = $positionX;
        return $this;
    }

    /**
    * Gets positionY
    *  分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @return int|null
    */
    public function getPositionY()
    {
        return $this->container['positionY'];
    }

    /**
    * Sets positionY
    *
    * @param int|null $positionY 分身数字Y轴位置，即分身数字图片底边中心点像素的Y轴的像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @return $this
    */
    public function setPositionY($positionY)
    {
        $this->container['positionY'] = $positionY;
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

