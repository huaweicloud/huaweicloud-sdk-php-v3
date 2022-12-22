<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchDevicesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchDevicesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * devices  搜索设备结果列表。
    * count  满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'devices' => '\HuaweiCloud\SDK\IoTDA\V5\Model\SearchDevice[]',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * devices  搜索设备结果列表。
    * count  满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'devices' => null,
        'count' => 'int64'
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
    * devices  搜索设备结果列表。
    * count  满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'devices' => 'devices',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * devices  搜索设备结果列表。
    * count  满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @var string[]
    */
    protected static $setters = [
            'devices' => 'setDevices',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * devices  搜索设备结果列表。
    * count  满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @var string[]
    */
    protected static $getters = [
            'devices' => 'getDevices',
            'count' => 'getCount'
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
        $this->container['devices'] = isset($data['devices']) ? $data['devices'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets devices
    *  搜索设备结果列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\SearchDevice[]|null
    */
    public function getDevices()
    {
        return $this->container['devices'];
    }

    /**
    * Sets devices
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\SearchDevice[]|null $devices 搜索设备结果列表。
    *
    * @return $this
    */
    public function setDevices($devices)
    {
        $this->container['devices'] = $devices;
        return $this;
    }

    /**
    * Gets count
    *  满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 满足查询条件的记录总数(只有条件为select count(*)/count(1)时单独返回)。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

