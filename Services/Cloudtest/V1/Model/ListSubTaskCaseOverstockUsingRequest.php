<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubTaskCaseOverstockUsingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubTaskCaseOverstockUsingRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  服务id
    * startTime  数据开始时间
    * endTime  数据结束时间
    * executorType  执行机类型
    * label  执行机标签
    * locationId  执行机所属区域id
    * pageNum  分页当前页码
    * pageSize  分页大小(分页参数只要有一个为空即不做分页)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'executorType' => 'string',
            'label' => 'string',
            'locationId' => 'string',
            'pageNum' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  服务id
    * startTime  数据开始时间
    * endTime  数据结束时间
    * executorType  执行机类型
    * label  执行机标签
    * locationId  执行机所属区域id
    * pageNum  分页当前页码
    * pageSize  分页大小(分页参数只要有一个为空即不做分页)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'executorType' => null,
        'label' => null,
        'locationId' => null,
        'pageNum' => 'int32',
        'pageSize' => 'int32'
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
    * serviceId  服务id
    * startTime  数据开始时间
    * endTime  数据结束时间
    * executorType  执行机类型
    * label  执行机标签
    * locationId  执行机所属区域id
    * pageNum  分页当前页码
    * pageSize  分页大小(分页参数只要有一个为空即不做分页)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'executorType' => 'executorType',
            'label' => 'label',
            'locationId' => 'locationId',
            'pageNum' => 'pageNum',
            'pageSize' => 'pageSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  服务id
    * startTime  数据开始时间
    * endTime  数据结束时间
    * executorType  执行机类型
    * label  执行机标签
    * locationId  执行机所属区域id
    * pageNum  分页当前页码
    * pageSize  分页大小(分页参数只要有一个为空即不做分页)
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'executorType' => 'setExecutorType',
            'label' => 'setLabel',
            'locationId' => 'setLocationId',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  服务id
    * startTime  数据开始时间
    * endTime  数据结束时间
    * executorType  执行机类型
    * label  执行机标签
    * locationId  执行机所属区域id
    * pageNum  分页当前页码
    * pageSize  分页大小(分页参数只要有一个为空即不做分页)
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'executorType' => 'getExecutorType',
            'label' => 'getLabel',
            'locationId' => 'getLocationId',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executorType'] = isset($data['executorType']) ? $data['executorType'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if ((mb_strlen($this->container['serviceId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['serviceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
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
    * Gets serviceId
    *  服务id
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId 服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets startTime
    *  数据开始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 数据开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  数据结束时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 数据结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets label
    *  执行机标签
    *
    * @return string
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string $label 执行机标签
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
    *  执行机所属区域id
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
    * @param string|null $locationId 执行机所属区域id
    *
    * @return $this
    */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;
        return $this;
    }

    /**
    * Gets pageNum
    *  分页当前页码
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 分页当前页码
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页大小(分页参数只要有一个为空即不做分页)
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 分页大小(分页参数只要有一个为空即不做分页)
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

