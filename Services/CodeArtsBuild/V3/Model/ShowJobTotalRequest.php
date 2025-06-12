<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobTotalRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobTotalRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildProjectId  构建工程项目ID，36位数字、小写字母组合。
    * fromDate  区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    * toDate  区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildProjectId' => 'string',
            'fromDate' => 'string',
            'toDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildProjectId  构建工程项目ID，36位数字、小写字母组合。
    * fromDate  区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    * toDate  区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildProjectId' => null,
        'fromDate' => null,
        'toDate' => null
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
    * buildProjectId  构建工程项目ID，36位数字、小写字母组合。
    * fromDate  区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    * toDate  区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildProjectId' => 'build_project_id',
            'fromDate' => 'from_date',
            'toDate' => 'to_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildProjectId  构建工程项目ID，36位数字、小写字母组合。
    * fromDate  区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    * toDate  区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @var string[]
    */
    protected static $setters = [
            'buildProjectId' => 'setBuildProjectId',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildProjectId  构建工程项目ID，36位数字、小写字母组合。
    * fromDate  区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    * toDate  区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @var string[]
    */
    protected static $getters = [
            'buildProjectId' => 'getBuildProjectId',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate'
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
        $this->container['buildProjectId'] = isset($data['buildProjectId']) ? $data['buildProjectId'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['buildProjectId'] === null) {
            $invalidProperties[] = "'buildProjectId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{36}$/", $this->container['buildProjectId'])) {
                $invalidProperties[] = "invalid value for 'buildProjectId', must be conform to the pattern /^[0-9a-z]{36}$/.";
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
    * Gets buildProjectId
    *  构建工程项目ID，36位数字、小写字母组合。
    *
    * @return string
    */
    public function getBuildProjectId()
    {
        return $this->container['buildProjectId'];
    }

    /**
    * Sets buildProjectId
    *
    * @param string $buildProjectId 构建工程项目ID，36位数字、小写字母组合。
    *
    * @return $this
    */
    public function setBuildProjectId($buildProjectId)
    {
        $this->container['buildProjectId'] = $buildProjectId;
        return $this;
    }

    /**
    * Gets fromDate
    *  区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @return string|null
    */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
    * Sets fromDate
    *
    * @param string|null $fromDate 区间开始时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @return $this
    */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;
        return $this;
    }

    /**
    * Gets toDate
    *  区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @return string|null
    */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
    * Sets toDate
    *
    * @param string|null $toDate 区间结束时间，格式yyyy-MM-dd HH:mm:ss。
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
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

