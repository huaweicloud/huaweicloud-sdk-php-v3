<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StarRocksCreateRequestFeVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StarRocksCreateRequest_fe_volume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ioType  磁盘类型。通过查询HTAP引擎资源返回消息获取。
    * capacityInGb  磁盘容量，单位GB 增长的步长：10GB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ioType' => 'string',
            'capacityInGb' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ioType  磁盘类型。通过查询HTAP引擎资源返回消息获取。
    * capacityInGb  磁盘容量，单位GB 增长的步长：10GB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ioType' => null,
        'capacityInGb' => 'int32'
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
    * ioType  磁盘类型。通过查询HTAP引擎资源返回消息获取。
    * capacityInGb  磁盘容量，单位GB 增长的步长：10GB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ioType' => 'io_type',
            'capacityInGb' => 'capacity_in_gb'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ioType  磁盘类型。通过查询HTAP引擎资源返回消息获取。
    * capacityInGb  磁盘容量，单位GB 增长的步长：10GB。
    *
    * @var string[]
    */
    protected static $setters = [
            'ioType' => 'setIoType',
            'capacityInGb' => 'setCapacityInGb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ioType  磁盘类型。通过查询HTAP引擎资源返回消息获取。
    * capacityInGb  磁盘容量，单位GB 增长的步长：10GB。
    *
    * @var string[]
    */
    protected static $getters = [
            'ioType' => 'getIoType',
            'capacityInGb' => 'getCapacityInGb'
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
        $this->container['ioType'] = isset($data['ioType']) ? $data['ioType'] : null;
        $this->container['capacityInGb'] = isset($data['capacityInGb']) ? $data['capacityInGb'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ioType'] === null) {
            $invalidProperties[] = "'ioType' can't be null";
        }
        if ($this->container['capacityInGb'] === null) {
            $invalidProperties[] = "'capacityInGb' can't be null";
        }
            if (($this->container['capacityInGb'] > 1000)) {
                $invalidProperties[] = "invalid value for 'capacityInGb', must be smaller than or equal to 1000.";
            }
            if (($this->container['capacityInGb'] < 50)) {
                $invalidProperties[] = "invalid value for 'capacityInGb', must be bigger than or equal to 50.";
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
    * Gets ioType
    *  磁盘类型。通过查询HTAP引擎资源返回消息获取。
    *
    * @return string
    */
    public function getIoType()
    {
        return $this->container['ioType'];
    }

    /**
    * Sets ioType
    *
    * @param string $ioType 磁盘类型。通过查询HTAP引擎资源返回消息获取。
    *
    * @return $this
    */
    public function setIoType($ioType)
    {
        $this->container['ioType'] = $ioType;
        return $this;
    }

    /**
    * Gets capacityInGb
    *  磁盘容量，单位GB 增长的步长：10GB。
    *
    * @return int
    */
    public function getCapacityInGb()
    {
        return $this->container['capacityInGb'];
    }

    /**
    * Sets capacityInGb
    *
    * @param int $capacityInGb 磁盘容量，单位GB 增长的步长：10GB。
    *
    * @return $this
    */
    public function setCapacityInGb($capacityInGb)
    {
        $this->container['capacityInGb'] = $capacityInGb;
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

