<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClickHouseNodeInfoVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClickHouseNodeInfo_volume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
    * size  实例节点存储大小。
    * used  实例节点存储使用大小。
    * iops  实例节点存储IOPS大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'size' => 'string',
            'used' => 'string',
            'iops' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
    * size  实例节点存储大小。
    * used  实例节点存储使用大小。
    * iops  实例节点存储IOPS大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'size' => null,
        'used' => null,
        'iops' => 'int32'
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
    * type  实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
    * size  实例节点存储大小。
    * used  实例节点存储使用大小。
    * iops  实例节点存储IOPS大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'size' => 'size',
            'used' => 'used',
            'iops' => 'iops'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
    * size  实例节点存储大小。
    * used  实例节点存储使用大小。
    * iops  实例节点存储IOPS大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'size' => 'setSize',
            'used' => 'setUsed',
            'iops' => 'setIops'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
    * size  实例节点存储大小。
    * used  实例节点存储使用大小。
    * iops  实例节点存储IOPS大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'size' => 'getSize',
            'used' => 'getUsed',
            'iops' => 'getIops'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['iops'] = isset($data['iops']) ? $data['iops'] : null;
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
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
    *  实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
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
    * @param string $type 实例节点存储类型。 取值范围： - SSD：超高IO - ESSD：极速型SSD
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets size
    *  实例节点存储大小。
    *
    * @return string
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string $size 实例节点存储大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets used
    *  实例节点存储使用大小。
    *
    * @return string|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param string|null $used 实例节点存储使用大小。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets iops
    *  实例节点存储IOPS大小。
    *
    * @return int|null
    */
    public function getIops()
    {
        return $this->container['iops'];
    }

    /**
    * Sets iops
    *
    * @param int|null $iops 实例节点存储IOPS大小。
    *
    * @return $this
    */
    public function setIops($iops)
    {
        $this->container['iops'] = $iops;
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

