<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QRLocationDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QRLocationDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topLeftX  检测出的二维码左上角横坐标。
    * topLeftY  检测出的二维码左上角纵坐标。
    * bottomRightX  检测出的二维码右下角横坐标。
    * bottomRightY  检测出的二维码右下角纵坐标。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topLeftX' => 'int',
            'topLeftY' => 'int',
            'bottomRightX' => 'int',
            'bottomRightY' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topLeftX  检测出的二维码左上角横坐标。
    * topLeftY  检测出的二维码左上角纵坐标。
    * bottomRightX  检测出的二维码右下角横坐标。
    * bottomRightY  检测出的二维码右下角纵坐标。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topLeftX' => 'int32',
        'topLeftY' => 'int32',
        'bottomRightX' => 'int32',
        'bottomRightY' => 'int32'
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
    * topLeftX  检测出的二维码左上角横坐标。
    * topLeftY  检测出的二维码左上角纵坐标。
    * bottomRightX  检测出的二维码右下角横坐标。
    * bottomRightY  检测出的二维码右下角纵坐标。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topLeftX' => 'top_left_x',
            'topLeftY' => 'top_left_y',
            'bottomRightX' => 'bottom_right_x',
            'bottomRightY' => 'bottom_right_y'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topLeftX  检测出的二维码左上角横坐标。
    * topLeftY  检测出的二维码左上角纵坐标。
    * bottomRightX  检测出的二维码右下角横坐标。
    * bottomRightY  检测出的二维码右下角纵坐标。
    *
    * @var string[]
    */
    protected static $setters = [
            'topLeftX' => 'setTopLeftX',
            'topLeftY' => 'setTopLeftY',
            'bottomRightX' => 'setBottomRightX',
            'bottomRightY' => 'setBottomRightY'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topLeftX  检测出的二维码左上角横坐标。
    * topLeftY  检测出的二维码左上角纵坐标。
    * bottomRightX  检测出的二维码右下角横坐标。
    * bottomRightY  检测出的二维码右下角纵坐标。
    *
    * @var string[]
    */
    protected static $getters = [
            'topLeftX' => 'getTopLeftX',
            'topLeftY' => 'getTopLeftY',
            'bottomRightX' => 'getBottomRightX',
            'bottomRightY' => 'getBottomRightY'
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
        $this->container['topLeftX'] = isset($data['topLeftX']) ? $data['topLeftX'] : null;
        $this->container['topLeftY'] = isset($data['topLeftY']) ? $data['topLeftY'] : null;
        $this->container['bottomRightX'] = isset($data['bottomRightX']) ? $data['bottomRightX'] : null;
        $this->container['bottomRightY'] = isset($data['bottomRightY']) ? $data['bottomRightY'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets topLeftX
    *  检测出的二维码左上角横坐标。
    *
    * @return int|null
    */
    public function getTopLeftX()
    {
        return $this->container['topLeftX'];
    }

    /**
    * Sets topLeftX
    *
    * @param int|null $topLeftX 检测出的二维码左上角横坐标。
    *
    * @return $this
    */
    public function setTopLeftX($topLeftX)
    {
        $this->container['topLeftX'] = $topLeftX;
        return $this;
    }

    /**
    * Gets topLeftY
    *  检测出的二维码左上角纵坐标。
    *
    * @return int|null
    */
    public function getTopLeftY()
    {
        return $this->container['topLeftY'];
    }

    /**
    * Sets topLeftY
    *
    * @param int|null $topLeftY 检测出的二维码左上角纵坐标。
    *
    * @return $this
    */
    public function setTopLeftY($topLeftY)
    {
        $this->container['topLeftY'] = $topLeftY;
        return $this;
    }

    /**
    * Gets bottomRightX
    *  检测出的二维码右下角横坐标。
    *
    * @return int|null
    */
    public function getBottomRightX()
    {
        return $this->container['bottomRightX'];
    }

    /**
    * Sets bottomRightX
    *
    * @param int|null $bottomRightX 检测出的二维码右下角横坐标。
    *
    * @return $this
    */
    public function setBottomRightX($bottomRightX)
    {
        $this->container['bottomRightX'] = $bottomRightX;
        return $this;
    }

    /**
    * Gets bottomRightY
    *  检测出的二维码右下角纵坐标。
    *
    * @return int|null
    */
    public function getBottomRightY()
    {
        return $this->container['bottomRightY'];
    }

    /**
    * Sets bottomRightY
    *
    * @param int|null $bottomRightY 检测出的二维码右下角纵坐标。
    *
    * @return $this
    */
    public function setBottomRightY($bottomRightY)
    {
        $this->container['bottomRightY'] = $bottomRightY;
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

