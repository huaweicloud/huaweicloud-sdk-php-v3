<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PicLayoutInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PicLayoutInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * x  横向小格子数。
    * y  纵向小格子数。
    * subPicLayoutInfoList  多画面信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'x' => 'int',
            'y' => 'int',
            'subPicLayoutInfoList' => '\HuaweiCloud\SDK\Meeting\V1\Model\SubPicLayoutInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * x  横向小格子数。
    * y  纵向小格子数。
    * subPicLayoutInfoList  多画面信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'x' => 'int32',
        'y' => 'int32',
        'subPicLayoutInfoList' => null
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
    * x  横向小格子数。
    * y  纵向小格子数。
    * subPicLayoutInfoList  多画面信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'x' => 'x',
            'y' => 'y',
            'subPicLayoutInfoList' => 'subPicLayoutInfoList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * x  横向小格子数。
    * y  纵向小格子数。
    * subPicLayoutInfoList  多画面信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'x' => 'setX',
            'y' => 'setY',
            'subPicLayoutInfoList' => 'setSubPicLayoutInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * x  横向小格子数。
    * y  纵向小格子数。
    * subPicLayoutInfoList  多画面信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'x' => 'getX',
            'y' => 'getY',
            'subPicLayoutInfoList' => 'getSubPicLayoutInfoList'
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
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['subPicLayoutInfoList'] = isset($data['subPicLayoutInfoList']) ? $data['subPicLayoutInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['x']) && ($this->container['x'] < 1)) {
                $invalidProperties[] = "invalid value for 'x', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['y']) && ($this->container['y'] < 1)) {
                $invalidProperties[] = "invalid value for 'y', must be bigger than or equal to 1.";
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
    * Gets x
    *  横向小格子数。
    *
    * @return int|null
    */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
    * Sets x
    *
    * @param int|null $x 横向小格子数。
    *
    * @return $this
    */
    public function setX($x)
    {
        $this->container['x'] = $x;
        return $this;
    }

    /**
    * Gets y
    *  纵向小格子数。
    *
    * @return int|null
    */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
    * Sets y
    *
    * @param int|null $y 纵向小格子数。
    *
    * @return $this
    */
    public function setY($y)
    {
        $this->container['y'] = $y;
        return $this;
    }

    /**
    * Gets subPicLayoutInfoList
    *  多画面信息。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\SubPicLayoutInfo[]|null
    */
    public function getSubPicLayoutInfoList()
    {
        return $this->container['subPicLayoutInfoList'];
    }

    /**
    * Sets subPicLayoutInfoList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\SubPicLayoutInfo[]|null $subPicLayoutInfoList 多画面信息。
    *
    * @return $this
    */
    public function setSubPicLayoutInfoList($subPicLayoutInfoList)
    {
        $this->container['subPicLayoutInfoList'] = $subPicLayoutInfoList;
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

