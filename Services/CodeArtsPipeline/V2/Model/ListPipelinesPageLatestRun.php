<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelinesPageLatestRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelinesPage_latest_run';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    * executorId  执行人ID
    * executorName  执行人名称
    * stageStatusList  阶段信息列表
    * status  状态
    * runNumber  运行序号
    * triggerType  触发类型
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  开始时间
    * endTime  结束时间
    * modifyUrl  修改页地址
    * detailUrl  详情页地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'pipelineRunId' => 'string',
            'executorId' => 'string',
            'executorName' => 'string',
            'stageStatusList' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunStageStatusList[]',
            'status' => 'string',
            'runNumber' => 'int',
            'triggerType' => 'string',
            'buildParams' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunBuildParams',
            'artifactParams' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunArtifactParams',
            'startTime' => 'int',
            'endTime' => 'int',
            'modifyUrl' => 'string',
            'detailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    * executorId  执行人ID
    * executorName  执行人名称
    * stageStatusList  阶段信息列表
    * status  状态
    * runNumber  运行序号
    * triggerType  触发类型
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  开始时间
    * endTime  结束时间
    * modifyUrl  修改页地址
    * detailUrl  详情页地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'pipelineRunId' => null,
        'executorId' => null,
        'executorName' => null,
        'stageStatusList' => null,
        'status' => null,
        'runNumber' => 'int32',
        'triggerType' => null,
        'buildParams' => null,
        'artifactParams' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'modifyUrl' => null,
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
    * pipelineRunId  流水线运行实例ID
    * executorId  执行人ID
    * executorName  执行人名称
    * stageStatusList  阶段信息列表
    * status  状态
    * runNumber  运行序号
    * triggerType  触发类型
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  开始时间
    * endTime  结束时间
    * modifyUrl  修改页地址
    * detailUrl  详情页地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'pipelineRunId' => 'pipeline_run_id',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name',
            'stageStatusList' => 'stage_status_list',
            'status' => 'status',
            'runNumber' => 'run_number',
            'triggerType' => 'trigger_type',
            'buildParams' => 'build_params',
            'artifactParams' => 'artifact_params',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'modifyUrl' => 'modify_url',
            'detailUrl' => 'detail_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    * executorId  执行人ID
    * executorName  执行人名称
    * stageStatusList  阶段信息列表
    * status  状态
    * runNumber  运行序号
    * triggerType  触发类型
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  开始时间
    * endTime  结束时间
    * modifyUrl  修改页地址
    * detailUrl  详情页地址
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'pipelineRunId' => 'setPipelineRunId',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName',
            'stageStatusList' => 'setStageStatusList',
            'status' => 'setStatus',
            'runNumber' => 'setRunNumber',
            'triggerType' => 'setTriggerType',
            'buildParams' => 'setBuildParams',
            'artifactParams' => 'setArtifactParams',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'modifyUrl' => 'setModifyUrl',
            'detailUrl' => 'setDetailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  流水线ID
    * pipelineRunId  流水线运行实例ID
    * executorId  执行人ID
    * executorName  执行人名称
    * stageStatusList  阶段信息列表
    * status  状态
    * runNumber  运行序号
    * triggerType  触发类型
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  开始时间
    * endTime  结束时间
    * modifyUrl  修改页地址
    * detailUrl  详情页地址
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'pipelineRunId' => 'getPipelineRunId',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName',
            'stageStatusList' => 'getStageStatusList',
            'status' => 'getStatus',
            'runNumber' => 'getRunNumber',
            'triggerType' => 'getTriggerType',
            'buildParams' => 'getBuildParams',
            'artifactParams' => 'getArtifactParams',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'modifyUrl' => 'getModifyUrl',
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
        $this->container['pipelineRunId'] = isset($data['pipelineRunId']) ? $data['pipelineRunId'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
        $this->container['stageStatusList'] = isset($data['stageStatusList']) ? $data['stageStatusList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runNumber'] = isset($data['runNumber']) ? $data['runNumber'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['buildParams'] = isset($data['buildParams']) ? $data['buildParams'] : null;
        $this->container['artifactParams'] = isset($data['artifactParams']) ? $data['artifactParams'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['modifyUrl'] = isset($data['modifyUrl']) ? $data['modifyUrl'] : null;
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
    * Gets pipelineRunId
    *  流水线运行实例ID
    *
    * @return string|null
    */
    public function getPipelineRunId()
    {
        return $this->container['pipelineRunId'];
    }

    /**
    * Sets pipelineRunId
    *
    * @param string|null $pipelineRunId 流水线运行实例ID
    *
    * @return $this
    */
    public function setPipelineRunId($pipelineRunId)
    {
        $this->container['pipelineRunId'] = $pipelineRunId;
        return $this;
    }

    /**
    * Gets executorId
    *  执行人ID
    *
    * @return string|null
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string|null $executorId 执行人ID
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorName
    *  执行人名称
    *
    * @return string|null
    */
    public function getExecutorName()
    {
        return $this->container['executorName'];
    }

    /**
    * Sets executorName
    *
    * @param string|null $executorName 执行人名称
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
        return $this;
    }

    /**
    * Gets stageStatusList
    *  阶段信息列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunStageStatusList[]|null
    */
    public function getStageStatusList()
    {
        return $this->container['stageStatusList'];
    }

    /**
    * Sets stageStatusList
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunStageStatusList[]|null $stageStatusList 阶段信息列表
    *
    * @return $this
    */
    public function setStageStatusList($stageStatusList)
    {
        $this->container['stageStatusList'] = $stageStatusList;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets runNumber
    *  运行序号
    *
    * @return int|null
    */
    public function getRunNumber()
    {
        return $this->container['runNumber'];
    }

    /**
    * Sets runNumber
    *
    * @param int|null $runNumber 运行序号
    *
    * @return $this
    */
    public function setRunNumber($runNumber)
    {
        $this->container['runNumber'] = $runNumber;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets buildParams
    *  buildParams
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunBuildParams|null
    */
    public function getBuildParams()
    {
        return $this->container['buildParams'];
    }

    /**
    * Sets buildParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunBuildParams|null $buildParams buildParams
    *
    * @return $this
    */
    public function setBuildParams($buildParams)
    {
        $this->container['buildParams'] = $buildParams;
        return $this;
    }

    /**
    * Gets artifactParams
    *  artifactParams
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunArtifactParams|null
    */
    public function getArtifactParams()
    {
        return $this->container['artifactParams'];
    }

    /**
    * Sets artifactParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageLatestRunArtifactParams|null $artifactParams artifactParams
    *
    * @return $this
    */
    public function setArtifactParams($artifactParams)
    {
        $this->container['artifactParams'] = $artifactParams;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间
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
    *  结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets modifyUrl
    *  修改页地址
    *
    * @return string|null
    */
    public function getModifyUrl()
    {
        return $this->container['modifyUrl'];
    }

    /**
    * Sets modifyUrl
    *
    * @param string|null $modifyUrl 修改页地址
    *
    * @return $this
    */
    public function setModifyUrl($modifyUrl)
    {
        $this->container['modifyUrl'] = $modifyUrl;
        return $this;
    }

    /**
    * Gets detailUrl
    *  详情页地址
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
    * @param string|null $detailUrl 详情页地址
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

