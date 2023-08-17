<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineBuildResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineBuildResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildId  执行ID
    * elapseTime  运行耗时
    * endTime  执行结束时间
    * outcome  运行结果
    * pipelineId  流水线id
    * pipelineName  流水线名称
    * startTime  执行开始时间
    * status  运行状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildId' => 'string',
            'elapseTime' => 'string',
            'endTime' => 'string',
            'outcome' => 'string',
            'pipelineId' => 'string',
            'pipelineName' => 'string',
            'startTime' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildId  执行ID
    * elapseTime  运行耗时
    * endTime  执行结束时间
    * outcome  运行结果
    * pipelineId  流水线id
    * pipelineName  流水线名称
    * startTime  执行开始时间
    * status  运行状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildId' => null,
        'elapseTime' => null,
        'endTime' => null,
        'outcome' => null,
        'pipelineId' => null,
        'pipelineName' => null,
        'startTime' => null,
        'status' => null
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
    * buildId  执行ID
    * elapseTime  运行耗时
    * endTime  执行结束时间
    * outcome  运行结果
    * pipelineId  流水线id
    * pipelineName  流水线名称
    * startTime  执行开始时间
    * status  运行状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildId' => 'build_id',
            'elapseTime' => 'elapse_time',
            'endTime' => 'end_time',
            'outcome' => 'outcome',
            'pipelineId' => 'pipeline_id',
            'pipelineName' => 'pipeline_name',
            'startTime' => 'start_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildId  执行ID
    * elapseTime  运行耗时
    * endTime  执行结束时间
    * outcome  运行结果
    * pipelineId  流水线id
    * pipelineName  流水线名称
    * startTime  执行开始时间
    * status  运行状态
    *
    * @var string[]
    */
    protected static $setters = [
            'buildId' => 'setBuildId',
            'elapseTime' => 'setElapseTime',
            'endTime' => 'setEndTime',
            'outcome' => 'setOutcome',
            'pipelineId' => 'setPipelineId',
            'pipelineName' => 'setPipelineName',
            'startTime' => 'setStartTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildId  执行ID
    * elapseTime  运行耗时
    * endTime  执行结束时间
    * outcome  运行结果
    * pipelineId  流水线id
    * pipelineName  流水线名称
    * startTime  执行开始时间
    * status  运行状态
    *
    * @var string[]
    */
    protected static $getters = [
            'buildId' => 'getBuildId',
            'elapseTime' => 'getElapseTime',
            'endTime' => 'getEndTime',
            'outcome' => 'getOutcome',
            'pipelineId' => 'getPipelineId',
            'pipelineName' => 'getPipelineName',
            'startTime' => 'getStartTime',
            'status' => 'getStatus'
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
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['elapseTime'] = isset($data['elapseTime']) ? $data['elapseTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['buildId'] === null) {
            $invalidProperties[] = "'buildId' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['outcome'] === null) {
            $invalidProperties[] = "'outcome' can't be null";
        }
        if ($this->container['pipelineId'] === null) {
            $invalidProperties[] = "'pipelineId' can't be null";
        }
        if ($this->container['pipelineName'] === null) {
            $invalidProperties[] = "'pipelineName' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets buildId
    *  执行ID
    *
    * @return string
    */
    public function getBuildId()
    {
        return $this->container['buildId'];
    }

    /**
    * Sets buildId
    *
    * @param string $buildId 执行ID
    *
    * @return $this
    */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;
        return $this;
    }

    /**
    * Gets elapseTime
    *  运行耗时
    *
    * @return string|null
    */
    public function getElapseTime()
    {
        return $this->container['elapseTime'];
    }

    /**
    * Sets elapseTime
    *
    * @param string|null $elapseTime 运行耗时
    *
    * @return $this
    */
    public function setElapseTime($elapseTime)
    {
        $this->container['elapseTime'] = $elapseTime;
        return $this;
    }

    /**
    * Gets endTime
    *  执行结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 执行结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets outcome
    *  运行结果
    *
    * @return string
    */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
    * Sets outcome
    *
    * @param string $outcome 运行结果
    *
    * @return $this
    */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;
        return $this;
    }

    /**
    * Gets pipelineId
    *  流水线id
    *
    * @return string
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string $pipelineId 流水线id
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets pipelineName
    *  流水线名称
    *
    * @return string
    */
    public function getPipelineName()
    {
        return $this->container['pipelineName'];
    }

    /**
    * Sets pipelineName
    *
    * @param string $pipelineName 流水线名称
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
        return $this;
    }

    /**
    * Gets startTime
    *  执行开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 执行开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  运行状态
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
    * @param string $status 运行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

