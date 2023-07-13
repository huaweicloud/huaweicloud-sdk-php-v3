<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCompareTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCompareTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareType  对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    * dataLevelCompareInfo  dataLevelCompareInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'objectLevelCompareType' => 'string',
            'dataLevelCompareInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\CreateDataLevelCompareReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareType  对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    * dataLevelCompareInfo  dataLevelCompareInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'objectLevelCompareType' => null,
        'dataLevelCompareInfo' => null
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
    * jobId  任务id。
    * objectLevelCompareType  对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    * dataLevelCompareInfo  dataLevelCompareInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'objectLevelCompareType' => 'object_level_compare_type',
            'dataLevelCompareInfo' => 'data_level_compare_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id。
    * objectLevelCompareType  对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    * dataLevelCompareInfo  dataLevelCompareInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'objectLevelCompareType' => 'setObjectLevelCompareType',
            'dataLevelCompareInfo' => 'setDataLevelCompareInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id。
    * objectLevelCompareType  对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    * dataLevelCompareInfo  dataLevelCompareInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'objectLevelCompareType' => 'getObjectLevelCompareType',
            'dataLevelCompareInfo' => 'getDataLevelCompareInfo'
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
    const OBJECT_LEVEL_COMPARE_TYPE_OBJECTS = 'objects';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectLevelCompareTypeAllowableValues()
    {
        return [
            self::OBJECT_LEVEL_COMPARE_TYPE_OBJECTS,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['objectLevelCompareType'] = isset($data['objectLevelCompareType']) ? $data['objectLevelCompareType'] : null;
        $this->container['dataLevelCompareInfo'] = isset($data['dataLevelCompareInfo']) ? $data['dataLevelCompareInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            $allowedValues = $this->getObjectLevelCompareTypeAllowableValues();
                if (!is_null($this->container['objectLevelCompareType']) && !in_array($this->container['objectLevelCompareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectLevelCompareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets jobId
    *  任务id。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets objectLevelCompareType
    *  对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    *
    * @return string|null
    */
    public function getObjectLevelCompareType()
    {
        return $this->container['objectLevelCompareType'];
    }

    /**
    * Sets objectLevelCompareType
    *
    * @param string|null $objectLevelCompareType 对象级对比类型，取值为空代表不创建对象级对比。object_level_compare_type和data_level_compare_info都为空时，只查询已创建的对比任务列表。
    *
    * @return $this
    */
    public function setObjectLevelCompareType($objectLevelCompareType)
    {
        $this->container['objectLevelCompareType'] = $objectLevelCompareType;
        return $this;
    }

    /**
    * Gets dataLevelCompareInfo
    *  dataLevelCompareInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CreateDataLevelCompareReq|null
    */
    public function getDataLevelCompareInfo()
    {
        return $this->container['dataLevelCompareInfo'];
    }

    /**
    * Sets dataLevelCompareInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CreateDataLevelCompareReq|null $dataLevelCompareInfo dataLevelCompareInfo
    *
    * @return $this
    */
    public function setDataLevelCompareInfo($dataLevelCompareInfo)
    {
        $this->container['dataLevelCompareInfo'] = $dataLevelCompareInfo;
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

