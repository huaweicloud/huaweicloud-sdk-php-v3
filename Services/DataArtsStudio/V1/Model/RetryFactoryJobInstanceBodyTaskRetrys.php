<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryFactoryJobInstanceBodyTaskRetrys implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryFactoryJobInstanceBody_task_retrys';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业id，当前重跑实例的作业id。
    * planTime  实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    * submitTime  实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'int',
            'planTime' => 'int',
            'submitTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业id，当前重跑实例的作业id。
    * planTime  实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    * submitTime  实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => 'int64',
        'planTime' => 'int64',
        'submitTime' => 'int64'
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
    * jobId  作业id，当前重跑实例的作业id。
    * planTime  实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    * submitTime  实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'planTime' => 'plan_time',
            'submitTime' => 'submit_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业id，当前重跑实例的作业id。
    * planTime  实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    * submitTime  实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'planTime' => 'setPlanTime',
            'submitTime' => 'setSubmitTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业id，当前重跑实例的作业id。
    * planTime  实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    * submitTime  实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'planTime' => 'getPlanTime',
            'submitTime' => 'getSubmitTime'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
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
        if ($this->container['planTime'] === null) {
            $invalidProperties[] = "'planTime' can't be null";
        }
        if ($this->container['submitTime'] === null) {
            $invalidProperties[] = "'submitTime' can't be null";
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
    *  作业id，当前重跑实例的作业id。
    *
    * @return int
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int $jobId 作业id，当前重跑实例的作业id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets planTime
    *  实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @return int
    */
    public function getPlanTime()
    {
        return $this->container['planTime'];
    }

    /**
    * Sets planTime
    *
    * @param int $planTime 实例计划时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets submitTime
    *  实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @return int
    */
    public function getSubmitTime()
    {
        return $this->container['submitTime'];
    }

    /**
    * Sets submitTime
    *
    * @param int $submitTime 实例提交时间，13位时间戳，可通过查询作业实例列表接口获取。
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
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

