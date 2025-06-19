<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtaskcaseOverstockDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtaskcaseOverstockDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataTime  查询时间
    * executorType  执行机类型
    * id  UUID
    * label  执行机标签
    * locationId  执行机所属区域
    * subtaskcaseOverstockCount  积压数量
    * testServiceId  服务ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataTime' => '\DateTime',
            'executorType' => 'string',
            'id' => 'string',
            'label' => 'string',
            'locationId' => 'string',
            'subtaskcaseOverstockCount' => 'int',
            'testServiceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataTime  查询时间
    * executorType  执行机类型
    * id  UUID
    * label  执行机标签
    * locationId  执行机所属区域
    * subtaskcaseOverstockCount  积压数量
    * testServiceId  服务ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataTime' => 'date-time',
        'executorType' => null,
        'id' => null,
        'label' => null,
        'locationId' => null,
        'subtaskcaseOverstockCount' => 'int32',
        'testServiceId' => null
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
    * dataTime  查询时间
    * executorType  执行机类型
    * id  UUID
    * label  执行机标签
    * locationId  执行机所属区域
    * subtaskcaseOverstockCount  积压数量
    * testServiceId  服务ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataTime' => 'data_time',
            'executorType' => 'executor_type',
            'id' => 'id',
            'label' => 'label',
            'locationId' => 'location_id',
            'subtaskcaseOverstockCount' => 'subtaskcase_overstock_count',
            'testServiceId' => 'test_service_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataTime  查询时间
    * executorType  执行机类型
    * id  UUID
    * label  执行机标签
    * locationId  执行机所属区域
    * subtaskcaseOverstockCount  积压数量
    * testServiceId  服务ID
    *
    * @var string[]
    */
    protected static $setters = [
            'dataTime' => 'setDataTime',
            'executorType' => 'setExecutorType',
            'id' => 'setId',
            'label' => 'setLabel',
            'locationId' => 'setLocationId',
            'subtaskcaseOverstockCount' => 'setSubtaskcaseOverstockCount',
            'testServiceId' => 'setTestServiceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataTime  查询时间
    * executorType  执行机类型
    * id  UUID
    * label  执行机标签
    * locationId  执行机所属区域
    * subtaskcaseOverstockCount  积压数量
    * testServiceId  服务ID
    *
    * @var string[]
    */
    protected static $getters = [
            'dataTime' => 'getDataTime',
            'executorType' => 'getExecutorType',
            'id' => 'getId',
            'label' => 'getLabel',
            'locationId' => 'getLocationId',
            'subtaskcaseOverstockCount' => 'getSubtaskcaseOverstockCount',
            'testServiceId' => 'getTestServiceId'
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
        $this->container['dataTime'] = isset($data['dataTime']) ? $data['dataTime'] : null;
        $this->container['executorType'] = isset($data['executorType']) ? $data['executorType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['subtaskcaseOverstockCount'] = isset($data['subtaskcaseOverstockCount']) ? $data['subtaskcaseOverstockCount'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
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
    * Gets dataTime
    *  查询时间
    *
    * @return \DateTime|null
    */
    public function getDataTime()
    {
        return $this->container['dataTime'];
    }

    /**
    * Sets dataTime
    *
    * @param \DateTime|null $dataTime 查询时间
    *
    * @return $this
    */
    public function setDataTime($dataTime)
    {
        $this->container['dataTime'] = $dataTime;
        return $this;
    }

    /**
    * Gets executorType
    *  执行机类型
    *
    * @return string|null
    */
    public function getExecutorType()
    {
        return $this->container['executorType'];
    }

    /**
    * Sets executorType
    *
    * @param string|null $executorType 执行机类型
    *
    * @return $this
    */
    public function setExecutorType($executorType)
    {
        $this->container['executorType'] = $executorType;
        return $this;
    }

    /**
    * Gets id
    *  UUID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id UUID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets label
    *  执行机标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 执行机标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets locationId
    *  执行机所属区域
    *
    * @return string|null
    */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
    * Sets locationId
    *
    * @param string|null $locationId 执行机所属区域
    *
    * @return $this
    */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;
        return $this;
    }

    /**
    * Gets subtaskcaseOverstockCount
    *  积压数量
    *
    * @return int|null
    */
    public function getSubtaskcaseOverstockCount()
    {
        return $this->container['subtaskcaseOverstockCount'];
    }

    /**
    * Sets subtaskcaseOverstockCount
    *
    * @param int|null $subtaskcaseOverstockCount 积压数量
    *
    * @return $this
    */
    public function setSubtaskcaseOverstockCount($subtaskcaseOverstockCount)
    {
        $this->container['subtaskcaseOverstockCount'] = $subtaskcaseOverstockCount;
        return $this;
    }

    /**
    * Gets testServiceId
    *  服务ID
    *
    * @return string|null
    */
    public function getTestServiceId()
    {
        return $this->container['testServiceId'];
    }

    /**
    * Sets testServiceId
    *
    * @param string|null $testServiceId 服务ID
    *
    * @return $this
    */
    public function setTestServiceId($testServiceId)
    {
        $this->container['testServiceId'] = $testServiceId;
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

