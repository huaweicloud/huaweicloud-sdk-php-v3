<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticTypeData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticTypeData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataType  统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    * data  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataType' => 'string',
            'data' => '\HuaweiCloud\SDK\Oms\V2\Model\StatisticData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataType  统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    * data  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataType' => null,
        'data' => null
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
    * dataType  统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    * data  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataType' => 'data_type',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataType  统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    * data  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $setters = [
            'dataType' => 'setDataType',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataType  统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    * data  查询的同步任务统计结果集
    *
    * @var string[]
    */
    protected static $getters = [
            'dataType' => 'getDataType',
            'data' => 'getData'
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
    const DATA_TYPE_REQUEST = 'REQUEST';
    const DATA_TYPE_SUCCESS = 'SUCCESS';
    const DATA_TYPE_FAILURE = 'FAILURE';
    const DATA_TYPE_SKIP = 'SKIP';
    const DATA_TYPE_SIZE = 'SIZE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_REQUEST,
            self::DATA_TYPE_SUCCESS,
            self::DATA_TYPE_FAILURE,
            self::DATA_TYPE_SKIP,
            self::DATA_TYPE_SIZE,
        ];
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
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDataTypeAllowableValues();
                if (!is_null($this->container['dataType']) && !in_array($this->container['dataType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) > 255)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be bigger than or equal to 1.";
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
    * Gets dataType
    *  统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 统计数据类型： REQUEST：请求对象数 SUCCESS：成功对象数 FAILURE：失败对象数 SKIP：跳过对象数 SIZE：对象容量(Byte)
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets data
    *  查询的同步任务统计结果集
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\StatisticData[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\StatisticData[]|null $data 查询的同步任务统计结果集
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

