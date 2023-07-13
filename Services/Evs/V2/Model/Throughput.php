<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Throughput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'throughput';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * frozened  冻结标签。
    * id  云硬盘吞吐量标识。
    * totalVal  吞吐量大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'frozened' => 'bool',
            'id' => 'string',
            'totalVal' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * frozened  冻结标签。
    * id  云硬盘吞吐量标识。
    * totalVal  吞吐量大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'frozened' => null,
        'id' => null,
        'totalVal' => 'int32'
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
    * frozened  冻结标签。
    * id  云硬盘吞吐量标识。
    * totalVal  吞吐量大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'frozened' => 'frozened',
            'id' => 'id',
            'totalVal' => 'total_val'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * frozened  冻结标签。
    * id  云硬盘吞吐量标识。
    * totalVal  吞吐量大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'frozened' => 'setFrozened',
            'id' => 'setId',
            'totalVal' => 'setTotalVal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * frozened  冻结标签。
    * id  云硬盘吞吐量标识。
    * totalVal  吞吐量大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'frozened' => 'getFrozened',
            'id' => 'getId',
            'totalVal' => 'getTotalVal'
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
        $this->container['frozened'] = isset($data['frozened']) ? $data['frozened'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['totalVal'] = isset($data['totalVal']) ? $data['totalVal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['frozened'] === null) {
            $invalidProperties[] = "'frozened' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['totalVal'] === null) {
            $invalidProperties[] = "'totalVal' can't be null";
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
    * Gets frozened
    *  冻结标签。
    *
    * @return bool
    */
    public function getFrozened()
    {
        return $this->container['frozened'];
    }

    /**
    * Sets frozened
    *
    * @param bool $frozened 冻结标签。
    *
    * @return $this
    */
    public function setFrozened($frozened)
    {
        $this->container['frozened'] = $frozened;
        return $this;
    }

    /**
    * Gets id
    *  云硬盘吞吐量标识。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 云硬盘吞吐量标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets totalVal
    *  吞吐量大小。
    *
    * @return int
    */
    public function getTotalVal()
    {
        return $this->container['totalVal'];
    }

    /**
    * Sets totalVal
    *
    * @param int $totalVal 吞吐量大小。
    *
    * @return $this
    */
    public function setTotalVal($totalVal)
    {
        $this->container['totalVal'] = $totalVal;
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

