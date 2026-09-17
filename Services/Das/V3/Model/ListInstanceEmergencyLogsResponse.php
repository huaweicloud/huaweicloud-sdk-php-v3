<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceEmergencyLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceEmergencyLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  总数
    * data  数据列表
    * objectType  对象类型
    * collectDate  采集时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'data' => '\HuaweiCloud\SDK\Das\V3\Model\DDSEmergencyLogInfo[]',
            'objectType' => 'string',
            'collectDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  总数
    * data  数据列表
    * objectType  对象类型
    * collectDate  采集时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int64',
        'data' => null,
        'objectType' => null,
        'collectDate' => null
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
    * total  总数
    * data  数据列表
    * objectType  对象类型
    * collectDate  采集时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'data' => 'data',
            'objectType' => 'object_type',
            'collectDate' => 'collect_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  总数
    * data  数据列表
    * objectType  对象类型
    * collectDate  采集时间
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'data' => 'setData',
            'objectType' => 'setObjectType',
            'collectDate' => 'setCollectDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  总数
    * data  数据列表
    * objectType  对象类型
    * collectDate  采集时间
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'data' => 'getData',
            'objectType' => 'getObjectType',
            'collectDate' => 'getCollectDate'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['collectDate'] = isset($data['collectDate']) ? $data['collectDate'] : null;
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
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets data
    *  数据列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DDSEmergencyLogInfo[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DDSEmergencyLogInfo[]|null $data 数据列表
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets objectType
    *  对象类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 对象类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets collectDate
    *  采集时间
    *
    * @return string|null
    */
    public function getCollectDate()
    {
        return $this->container['collectDate'];
    }

    /**
    * Sets collectDate
    *
    * @param string|null $collectDate 采集时间
    *
    * @return $this
    */
    public function setCollectDate($collectDate)
    {
        $this->container['collectDate'] = $collectDate;
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

