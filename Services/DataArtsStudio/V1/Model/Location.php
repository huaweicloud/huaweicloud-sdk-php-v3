<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Location implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Location';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * x  节点在作业画布上的横轴位置
    * y  节点在作业画布上的纵轴位置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'x' => 'string',
            'y' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * x  节点在作业画布上的横轴位置
    * y  节点在作业画布上的纵轴位置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'x' => null,
        'y' => null
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
    * x  节点在作业画布上的横轴位置
    * y  节点在作业画布上的纵轴位置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'x' => 'x',
            'y' => 'y'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * x  节点在作业画布上的横轴位置
    * y  节点在作业画布上的纵轴位置
    *
    * @var string[]
    */
    protected static $setters = [
            'x' => 'setX',
            'y' => 'setY'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * x  节点在作业画布上的横轴位置
    * y  节点在作业画布上的纵轴位置
    *
    * @var string[]
    */
    protected static $getters = [
            'x' => 'getX',
            'y' => 'getY'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
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
    *  节点在作业画布上的横轴位置
    *
    * @return string
    */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
    * Sets x
    *
    * @param string $x 节点在作业画布上的横轴位置
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
    *  节点在作业画布上的纵轴位置
    *
    * @return string
    */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
    * Sets y
    *
    * @param string $y 节点在作业画布上的纵轴位置
    *
    * @return $this
    */
    public function setY($y)
    {
        $this->container['y'] = $y;
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

