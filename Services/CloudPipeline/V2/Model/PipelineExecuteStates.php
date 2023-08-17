<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineExecuteStates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineExecuteStates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * stages  阶段执行情况
    * executor  执行人
    * pipelineName  流水线名字
    * pipelineId  流水线ID
    * buildId  流水线执行ID
    * detailUrl  流水线详情页URL
    * modifyUrl  流水线编辑页URL
    * startTime  开始执行时间
    * endTime  结束执行时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'status' => 'string',
            'stages' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\Stages[]',
            'executor' => 'string',
            'pipelineName' => 'string',
            'pipelineId' => 'string',
            'buildId' => 'string',
            'detailUrl' => 'string',
            'modifyUrl' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * stages  阶段执行情况
    * executor  执行人
    * pipelineName  流水线名字
    * pipelineId  流水线ID
    * buildId  流水线执行ID
    * detailUrl  流水线详情页URL
    * modifyUrl  流水线编辑页URL
    * startTime  开始执行时间
    * endTime  结束执行时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'status' => null,
        'stages' => null,
        'executor' => null,
        'pipelineName' => null,
        'pipelineId' => null,
        'buildId' => null,
        'detailUrl' => null,
        'modifyUrl' => null,
        'startTime' => null,
        'endTime' => null
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
    * result  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * stages  阶段执行情况
    * executor  执行人
    * pipelineName  流水线名字
    * pipelineId  流水线ID
    * buildId  流水线执行ID
    * detailUrl  流水线详情页URL
    * modifyUrl  流水线编辑页URL
    * startTime  开始执行时间
    * endTime  结束执行时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'status' => 'status',
            'stages' => 'stages',
            'executor' => 'executor',
            'pipelineName' => 'pipeline_name',
            'pipelineId' => 'pipeline_id',
            'buildId' => 'build_id',
            'detailUrl' => 'detail_url',
            'modifyUrl' => 'modify_url',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * stages  阶段执行情况
    * executor  执行人
    * pipelineName  流水线名字
    * pipelineId  流水线ID
    * buildId  流水线执行ID
    * detailUrl  流水线详情页URL
    * modifyUrl  流水线编辑页URL
    * startTime  开始执行时间
    * endTime  结束执行时间
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'status' => 'setStatus',
            'stages' => 'setStages',
            'executor' => 'setExecutor',
            'pipelineName' => 'setPipelineName',
            'pipelineId' => 'setPipelineId',
            'buildId' => 'setBuildId',
            'detailUrl' => 'setDetailUrl',
            'modifyUrl' => 'setModifyUrl',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * stages  阶段执行情况
    * executor  执行人
    * pipelineName  流水线名字
    * pipelineId  流水线ID
    * buildId  流水线执行ID
    * detailUrl  流水线详情页URL
    * modifyUrl  流水线编辑页URL
    * startTime  开始执行时间
    * endTime  结束执行时间
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'status' => 'getStatus',
            'stages' => 'getStages',
            'executor' => 'getExecutor',
            'pipelineName' => 'getPipelineName',
            'pipelineId' => 'getPipelineId',
            'buildId' => 'getBuildId',
            'detailUrl' => 'getDetailUrl',
            'modifyUrl' => 'getModifyUrl',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
        $this->container['modifyUrl'] = isset($data['modifyUrl']) ? $data['modifyUrl'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['stages'] === null) {
            $invalidProperties[] = "'stages' can't be null";
        }
        if ($this->container['executor'] === null) {
            $invalidProperties[] = "'executor' can't be null";
        }
        if ($this->container['pipelineName'] === null) {
            $invalidProperties[] = "'pipelineName' can't be null";
        }
        if ($this->container['pipelineId'] === null) {
            $invalidProperties[] = "'pipelineId' can't be null";
        }
        if ($this->container['buildId'] === null) {
            $invalidProperties[] = "'buildId' can't be null";
        }
        if ($this->container['detailUrl'] === null) {
            $invalidProperties[] = "'detailUrl' can't be null";
        }
        if ($this->container['modifyUrl'] === null) {
            $invalidProperties[] = "'modifyUrl' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets result
    *  流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 流水线执行结果。取值及含义：success：成功；error：失败；aborted：终止
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets status
    *  流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
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
    * @param string $status 流水线执行状态.取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets stages
    *  阶段执行情况
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\Stages[]
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\Stages[] $stages 阶段执行情况
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
        return $this;
    }

    /**
    * Gets executor
    *  执行人
    *
    * @return string
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string $executor 执行人
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets pipelineName
    *  流水线名字
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
    * @param string $pipelineName 流水线名字
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
        return $this;
    }

    /**
    * Gets pipelineId
    *  流水线ID
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
    * @param string $pipelineId 流水线ID
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets buildId
    *  流水线执行ID
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
    * @param string $buildId 流水线执行ID
    *
    * @return $this
    */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;
        return $this;
    }

    /**
    * Gets detailUrl
    *  流水线详情页URL
    *
    * @return string
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string $detailUrl 流水线详情页URL
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
        return $this;
    }

    /**
    * Gets modifyUrl
    *  流水线编辑页URL
    *
    * @return string
    */
    public function getModifyUrl()
    {
        return $this->container['modifyUrl'];
    }

    /**
    * Sets modifyUrl
    *
    * @param string $modifyUrl 流水线编辑页URL
    *
    * @return $this
    */
    public function setModifyUrl($modifyUrl)
    {
        $this->container['modifyUrl'] = $modifyUrl;
        return $this;
    }

    /**
    * Gets startTime
    *  开始执行时间
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
    * @param string $startTime 开始执行时间
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
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束执行时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

