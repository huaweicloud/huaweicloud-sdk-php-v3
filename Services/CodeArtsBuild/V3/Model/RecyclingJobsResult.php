<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecyclingJobsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecyclingJobs_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keepTime  任务保留时间
    * total  总数
    * jobList  任务列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepTime' => 'int',
            'total' => 'int',
            'jobList' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RecyclingJob[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepTime  任务保留时间
    * total  总数
    * jobList  任务列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepTime' => null,
        'total' => null,
        'jobList' => null
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
    * keepTime  任务保留时间
    * total  总数
    * jobList  任务列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepTime' => 'keep_time',
            'total' => 'total',
            'jobList' => 'job_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepTime  任务保留时间
    * total  总数
    * jobList  任务列表
    *
    * @var string[]
    */
    protected static $setters = [
            'keepTime' => 'setKeepTime',
            'total' => 'setTotal',
            'jobList' => 'setJobList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepTime  任务保留时间
    * total  总数
    * jobList  任务列表
    *
    * @var string[]
    */
    protected static $getters = [
            'keepTime' => 'getKeepTime',
            'total' => 'getTotal',
            'jobList' => 'getJobList'
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
        $this->container['keepTime'] = isset($data['keepTime']) ? $data['keepTime'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['jobList'] = isset($data['jobList']) ? $data['jobList'] : null;
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
    * Gets keepTime
    *  任务保留时间
    *
    * @return int|null
    */
    public function getKeepTime()
    {
        return $this->container['keepTime'];
    }

    /**
    * Sets keepTime
    *
    * @param int|null $keepTime 任务保留时间
    *
    * @return $this
    */
    public function setKeepTime($keepTime)
    {
        $this->container['keepTime'] = $keepTime;
        return $this;
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
    * Gets jobList
    *  任务列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RecyclingJob[]|null
    */
    public function getJobList()
    {
        return $this->container['jobList'];
    }

    /**
    * Sets jobList
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\RecyclingJob[]|null $jobList 任务列表
    *
    * @return $this
    */
    public function setJobList($jobList)
    {
        $this->container['jobList'] = $jobList;
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

