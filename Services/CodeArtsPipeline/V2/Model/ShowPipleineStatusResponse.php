<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipleineStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipleineStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * executor  执行人
    * buildId  流水线执行ID
    * startTime  开始执行时间
    * endTime  结束执行时间
    * parameters  流水线参数
    * states  流水线执行情况
    * elapsedTime  执行耗时
    * status  流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    * outcome  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * detailUrl  流水线详情页地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'pipelineName' => 'string',
            'executor' => 'string',
            'buildId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineParameter[]',
            'states' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineStateStatus[]',
            'elapsedTime' => 'string',
            'status' => 'string',
            'outcome' => 'string',
            'detailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * executor  执行人
    * buildId  流水线执行ID
    * startTime  开始执行时间
    * endTime  结束执行时间
    * parameters  流水线参数
    * states  流水线执行情况
    * elapsedTime  执行耗时
    * status  流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    * outcome  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * detailUrl  流水线详情页地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'pipelineName' => null,
        'executor' => null,
        'buildId' => null,
        'startTime' => null,
        'endTime' => null,
        'parameters' => null,
        'states' => null,
        'elapsedTime' => null,
        'status' => null,
        'outcome' => null,
        'detailUrl' => null
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
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * executor  执行人
    * buildId  流水线执行ID
    * startTime  开始执行时间
    * endTime  结束执行时间
    * parameters  流水线参数
    * states  流水线执行情况
    * elapsedTime  执行耗时
    * status  流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    * outcome  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * detailUrl  流水线详情页地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'pipelineName' => 'pipeline_name',
            'executor' => 'executor',
            'buildId' => 'build_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'parameters' => 'parameters',
            'states' => 'states',
            'elapsedTime' => 'elapsed_time',
            'status' => 'status',
            'outcome' => 'outcome',
            'detailUrl' => 'detail_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * executor  执行人
    * buildId  流水线执行ID
    * startTime  开始执行时间
    * endTime  结束执行时间
    * parameters  流水线参数
    * states  流水线执行情况
    * elapsedTime  执行耗时
    * status  流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    * outcome  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * detailUrl  流水线详情页地址
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'pipelineName' => 'setPipelineName',
            'executor' => 'setExecutor',
            'buildId' => 'setBuildId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'parameters' => 'setParameters',
            'states' => 'setStates',
            'elapsedTime' => 'setElapsedTime',
            'status' => 'setStatus',
            'outcome' => 'setOutcome',
            'detailUrl' => 'setDetailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * executor  执行人
    * buildId  流水线执行ID
    * startTime  开始执行时间
    * endTime  结束执行时间
    * parameters  流水线参数
    * states  流水线执行情况
    * elapsedTime  执行耗时
    * status  流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    * outcome  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * detailUrl  流水线详情页地址
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'pipelineName' => 'getPipelineName',
            'executor' => 'getExecutor',
            'buildId' => 'getBuildId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'parameters' => 'getParameters',
            'states' => 'getStates',
            'elapsedTime' => 'getElapsedTime',
            'status' => 'getStatus',
            'outcome' => 'getOutcome',
            'detailUrl' => 'getDetailUrl'
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
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['elapsedTime'] = isset($data['elapsedTime']) ? $data['elapsedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
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
    * Gets pipelineId
    *  流水线ID
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId 流水线ID
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
    * @return string|null
    */
    public function getPipelineName()
    {
        return $this->container['pipelineName'];
    }

    /**
    * Sets pipelineName
    *
    * @param string|null $pipelineName 流水线名称
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
        return $this;
    }

    /**
    * Gets executor
    *  执行人
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行人
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets buildId
    *  流水线执行ID
    *
    * @return string|null
    */
    public function getBuildId()
    {
        return $this->container['buildId'];
    }

    /**
    * Sets buildId
    *
    * @param string|null $buildId 流水线执行ID
    *
    * @return $this
    */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始执行时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始执行时间
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
    *  结束执行时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束执行时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets parameters
    *  流水线参数
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineParameter[]|null $parameters 流水线参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets states
    *  流水线执行情况
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineStateStatus[]|null
    */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
    * Sets states
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineStateStatus[]|null $states 流水线执行情况
    *
    * @return $this
    */
    public function setStates($states)
    {
        $this->container['states'] = $states;
        return $this;
    }

    /**
    * Gets elapsedTime
    *  执行耗时
    *
    * @return string|null
    */
    public function getElapsedTime()
    {
        return $this->container['elapsedTime'];
    }

    /**
    * Sets elapsedTime
    *
    * @param string|null $elapsedTime 执行耗时
    *
    * @return $this
    */
    public function setElapsedTime($elapsedTime)
    {
        $this->container['elapsedTime'] = $elapsedTime;
        return $this;
    }

    /**
    * Gets status
    *  流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 流水线运行状态。取值及含义：waiting：等待；running：执行中；verifying：待审核；suspending：挂起；completed：完成。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets outcome
    *  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    *
    * @return string|null
    */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
    * Sets outcome
    *
    * @param string|null $outcome 流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    *
    * @return $this
    */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;
        return $this;
    }

    /**
    * Gets detailUrl
    *  流水线详情页地址
    *
    * @return string|null
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string|null $detailUrl 流水线详情页地址
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
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

