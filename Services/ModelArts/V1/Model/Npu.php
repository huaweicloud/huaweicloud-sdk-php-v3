<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Npu implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Npu';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unitNum  npu卡数。
    * productName  产品名。
    * memory  内存。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unitNum' => 'string',
            'productName' => 'string',
            'memory' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unitNum  npu卡数。
    * productName  产品名。
    * memory  内存。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unitNum' => null,
        'productName' => null,
        'memory' => null
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
    * unitNum  npu卡数。
    * productName  产品名。
    * memory  内存。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unitNum' => 'unit_num',
            'productName' => 'product_name',
            'memory' => 'memory'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unitNum  npu卡数。
    * productName  产品名。
    * memory  内存。
    *
    * @var string[]
    */
    protected static $setters = [
            'unitNum' => 'setUnitNum',
            'productName' => 'setProductName',
            'memory' => 'setMemory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unitNum  npu卡数。
    * productName  产品名。
    * memory  内存。
    *
    * @var string[]
    */
    protected static $getters = [
            'unitNum' => 'getUnitNum',
            'productName' => 'getProductName',
            'memory' => 'getMemory'
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
        $this->container['unitNum'] = isset($data['unitNum']) ? $data['unitNum'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
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
    * Gets unitNum
    *  npu卡数。
    *
    * @return string|null
    */
    public function getUnitNum()
    {
        return $this->container['unitNum'];
    }

    /**
    * Sets unitNum
    *
    * @param string|null $unitNum npu卡数。
    *
    * @return $this
    */
    public function setUnitNum($unitNum)
    {
        $this->container['unitNum'] = $unitNum;
        return $this;
    }

    /**
    * Gets productName
    *  产品名。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品名。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets memory
    *  内存。
    *
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory 内存。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
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

