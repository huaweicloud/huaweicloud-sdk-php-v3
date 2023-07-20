<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Jobs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'jobs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业ID
    * status  作业状态
    * createTime  时间戳
    * exceptions  作业异常信息
    * metrics  作业指标信息
    * plan  作业执行计划
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'int',
            'status' => 'string',
            'createTime' => 'int',
            'exceptions' => 'string',
            'metrics' => 'string',
            'plan' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业ID
    * status  作业状态
    * createTime  时间戳
    * exceptions  作业异常信息
    * metrics  作业指标信息
    * plan  作业执行计划
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => 'int32',
        'status' => null,
        'createTime' => 'int64',
        'exceptions' => null,
        'metrics' => null,
        'plan' => null
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
    * jobId  作业ID
    * status  作业状态
    * createTime  时间戳
    * exceptions  作业异常信息
    * metrics  作业指标信息
    * plan  作业执行计划
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'exceptions' => 'exceptions',
            'metrics' => 'metrics',
            'plan' => 'plan'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业ID
    * status  作业状态
    * createTime  时间戳
    * exceptions  作业异常信息
    * metrics  作业指标信息
    * plan  作业执行计划
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'exceptions' => 'setExceptions',
            'metrics' => 'setMetrics',
            'plan' => 'setPlan'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业ID
    * status  作业状态
    * createTime  时间戳
    * exceptions  作业异常信息
    * metrics  作业指标信息
    * plan  作业执行计划
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'exceptions' => 'getExceptions',
            'metrics' => 'getMetrics',
            'plan' => 'getPlan'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['exceptions'] = isset($data['exceptions']) ? $data['exceptions'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
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
    *  作业ID
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 作业ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  作业状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 作业状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  时间戳
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets exceptions
    *  作业异常信息
    *
    * @return string|null
    */
    public function getExceptions()
    {
        return $this->container['exceptions'];
    }

    /**
    * Sets exceptions
    *
    * @param string|null $exceptions 作业异常信息
    *
    * @return $this
    */
    public function setExceptions($exceptions)
    {
        $this->container['exceptions'] = $exceptions;
        return $this;
    }

    /**
    * Gets metrics
    *  作业指标信息
    *
    * @return string|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param string|null $metrics 作业指标信息
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets plan
    *  作业执行计划
    *
    * @return string|null
    */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
    * Sets plan
    *
    * @param string|null $plan 作业执行计划
    *
    * @return $this
    */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;
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

