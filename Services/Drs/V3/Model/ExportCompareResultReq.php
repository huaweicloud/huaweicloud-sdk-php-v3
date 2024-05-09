<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportCompareResultReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportCompareResultReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareType  对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    * compareJobId  对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    * timeZone  时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareType' => 'string',
            'compareJobId' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareType  对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    * compareJobId  对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    * timeZone  时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareType' => null,
        'compareJobId' => null,
        'timeZone' => null
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
    * compareType  对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    * compareJobId  对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    * timeZone  时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareType' => 'compare_type',
            'compareJobId' => 'compare_job_id',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareType  对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    * compareJobId  对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    * timeZone  时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareType' => 'setCompareType',
            'compareJobId' => 'setCompareJobId',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareType  对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    * compareJobId  对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    * timeZone  时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareType' => 'getCompareType',
            'compareJobId' => 'getCompareJobId',
            'timeZone' => 'getTimeZone'
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
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['compareJobId'] = isset($data['compareJobId']) ? $data['compareJobId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['compareType'] === null) {
            $invalidProperties[] = "'compareType' can't be null";
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
    * Gets compareType
    *  对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    *
    * @return string
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string $compareType 对比任务类型： - contents： 内容对比。 - lines：行数对比。 - random：抽样对比。 - objects_comparison：对象对比。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets compareJobId
    *  对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    *
    * @return string|null
    */
    public function getCompareJobId()
    {
        return $this->container['compareJobId'];
    }

    /**
    * Sets compareJobId
    *
    * @param string|null $compareJobId 对比任务的ID，内容对比、抽样对比、行数对比场景必填。
    *
    * @return $this
    */
    public function setCompareJobId($compareJobId)
    {
        $this->container['compareJobId'] = $compareJobId;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区，如GMT+08:00，用于生成当前时间标识，拼接到文件名称中。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

