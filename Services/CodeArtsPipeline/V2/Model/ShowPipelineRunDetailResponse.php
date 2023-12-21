<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipelineRunDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipelineRunDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  流水线运行实例ID
    * pipelineId  流水线ID
    * manifestVersion  流水线版本
    * name  流水线名称
    * description  运行描述
    * isPublish  是否为变更流水线
    * executorId  运行人ID
    * executorName  运行人名称
    * status  状态
    * triggerType  触发类型
    * runNumber  运行序号
    * startTime  开始时间
    * endTime  结束时间
    * stages  阶段信息
    * domainId  租户ID
    * projectId  项目ID
    * region  局点
    * componentId  组件ID
    * language  语言
    * sources  运行源信息
    * artifacts  流水线运行产物
    * subjectId  流水线运行实例ID
    * groupId  分组ID
    * groupName  分组名称
    * detailUrl  详情页地址
    * currentSystemTime  当前系统时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'pipelineId' => 'string',
            'manifestVersion' => 'string',
            'name' => 'string',
            'description' => 'string',
            'isPublish' => 'bool',
            'executorId' => 'string',
            'executorName' => 'string',
            'status' => 'string',
            'triggerType' => 'string',
            'runNumber' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'stages' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StageRun[]',
            'domainId' => 'string',
            'projectId' => 'string',
            'region' => 'string',
            'componentId' => 'string',
            'language' => 'string',
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineSource[]',
            'artifacts' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PackageInfo[]',
            'subjectId' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'detailUrl' => 'string',
            'currentSystemTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  流水线运行实例ID
    * pipelineId  流水线ID
    * manifestVersion  流水线版本
    * name  流水线名称
    * description  运行描述
    * isPublish  是否为变更流水线
    * executorId  运行人ID
    * executorName  运行人名称
    * status  状态
    * triggerType  触发类型
    * runNumber  运行序号
    * startTime  开始时间
    * endTime  结束时间
    * stages  阶段信息
    * domainId  租户ID
    * projectId  项目ID
    * region  局点
    * componentId  组件ID
    * language  语言
    * sources  运行源信息
    * artifacts  流水线运行产物
    * subjectId  流水线运行实例ID
    * groupId  分组ID
    * groupName  分组名称
    * detailUrl  详情页地址
    * currentSystemTime  当前系统时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'pipelineId' => null,
        'manifestVersion' => null,
        'name' => null,
        'description' => null,
        'isPublish' => null,
        'executorId' => null,
        'executorName' => null,
        'status' => null,
        'triggerType' => null,
        'runNumber' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'stages' => null,
        'domainId' => null,
        'projectId' => null,
        'region' => null,
        'componentId' => null,
        'language' => null,
        'sources' => null,
        'artifacts' => null,
        'subjectId' => null,
        'groupId' => null,
        'groupName' => null,
        'detailUrl' => null,
        'currentSystemTime' => 'int64'
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
    * id  流水线运行实例ID
    * pipelineId  流水线ID
    * manifestVersion  流水线版本
    * name  流水线名称
    * description  运行描述
    * isPublish  是否为变更流水线
    * executorId  运行人ID
    * executorName  运行人名称
    * status  状态
    * triggerType  触发类型
    * runNumber  运行序号
    * startTime  开始时间
    * endTime  结束时间
    * stages  阶段信息
    * domainId  租户ID
    * projectId  项目ID
    * region  局点
    * componentId  组件ID
    * language  语言
    * sources  运行源信息
    * artifacts  流水线运行产物
    * subjectId  流水线运行实例ID
    * groupId  分组ID
    * groupName  分组名称
    * detailUrl  详情页地址
    * currentSystemTime  当前系统时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'pipelineId' => 'pipeline_id',
            'manifestVersion' => 'manifest_version',
            'name' => 'name',
            'description' => 'description',
            'isPublish' => 'is_publish',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name',
            'status' => 'status',
            'triggerType' => 'trigger_type',
            'runNumber' => 'run_number',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'stages' => 'stages',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'region' => 'region',
            'componentId' => 'component_id',
            'language' => 'language',
            'sources' => 'sources',
            'artifacts' => 'artifacts',
            'subjectId' => 'subject_id',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'detailUrl' => 'detail_url',
            'currentSystemTime' => 'current_system_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  流水线运行实例ID
    * pipelineId  流水线ID
    * manifestVersion  流水线版本
    * name  流水线名称
    * description  运行描述
    * isPublish  是否为变更流水线
    * executorId  运行人ID
    * executorName  运行人名称
    * status  状态
    * triggerType  触发类型
    * runNumber  运行序号
    * startTime  开始时间
    * endTime  结束时间
    * stages  阶段信息
    * domainId  租户ID
    * projectId  项目ID
    * region  局点
    * componentId  组件ID
    * language  语言
    * sources  运行源信息
    * artifacts  流水线运行产物
    * subjectId  流水线运行实例ID
    * groupId  分组ID
    * groupName  分组名称
    * detailUrl  详情页地址
    * currentSystemTime  当前系统时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'pipelineId' => 'setPipelineId',
            'manifestVersion' => 'setManifestVersion',
            'name' => 'setName',
            'description' => 'setDescription',
            'isPublish' => 'setIsPublish',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName',
            'status' => 'setStatus',
            'triggerType' => 'setTriggerType',
            'runNumber' => 'setRunNumber',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'stages' => 'setStages',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'componentId' => 'setComponentId',
            'language' => 'setLanguage',
            'sources' => 'setSources',
            'artifacts' => 'setArtifacts',
            'subjectId' => 'setSubjectId',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'detailUrl' => 'setDetailUrl',
            'currentSystemTime' => 'setCurrentSystemTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  流水线运行实例ID
    * pipelineId  流水线ID
    * manifestVersion  流水线版本
    * name  流水线名称
    * description  运行描述
    * isPublish  是否为变更流水线
    * executorId  运行人ID
    * executorName  运行人名称
    * status  状态
    * triggerType  触发类型
    * runNumber  运行序号
    * startTime  开始时间
    * endTime  结束时间
    * stages  阶段信息
    * domainId  租户ID
    * projectId  项目ID
    * region  局点
    * componentId  组件ID
    * language  语言
    * sources  运行源信息
    * artifacts  流水线运行产物
    * subjectId  流水线运行实例ID
    * groupId  分组ID
    * groupName  分组名称
    * detailUrl  详情页地址
    * currentSystemTime  当前系统时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'pipelineId' => 'getPipelineId',
            'manifestVersion' => 'getManifestVersion',
            'name' => 'getName',
            'description' => 'getDescription',
            'isPublish' => 'getIsPublish',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName',
            'status' => 'getStatus',
            'triggerType' => 'getTriggerType',
            'runNumber' => 'getRunNumber',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'stages' => 'getStages',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'componentId' => 'getComponentId',
            'language' => 'getLanguage',
            'sources' => 'getSources',
            'artifacts' => 'getArtifacts',
            'subjectId' => 'getSubjectId',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'detailUrl' => 'getDetailUrl',
            'currentSystemTime' => 'getCurrentSystemTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['runNumber'] = isset($data['runNumber']) ? $data['runNumber'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
        $this->container['subjectId'] = isset($data['subjectId']) ? $data['subjectId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
        $this->container['currentSystemTime'] = isset($data['currentSystemTime']) ? $data['currentSystemTime'] : null;
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
    * Gets id
    *  流水线运行实例ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 流水线运行实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets manifestVersion
    *  流水线版本
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion 流水线版本
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets name
    *  流水线名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 流水线名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  运行描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 运行描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPublish
    *  是否为变更流水线
    *
    * @return bool|null
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool|null $isPublish 是否为变更流水线
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets executorId
    *  运行人ID
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
    * @param string|null $executorId 运行人ID
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
    *  运行人名称
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
    * @param string|null $executorName 运行人名称
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
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
    * Gets stages
    *  阶段信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StageRun[]|null
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StageRun[]|null $stages 阶段信息
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets region
    *  局点
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets componentId
    *  组件ID
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件ID
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets language
    *  语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets sources
    *  运行源信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineSource[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineSource[]|null $sources 运行源信息
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets artifacts
    *  流水线运行产物
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PackageInfo[]|null
    */
    public function getArtifacts()
    {
        return $this->container['artifacts'];
    }

    /**
    * Sets artifacts
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PackageInfo[]|null $artifacts 流水线运行产物
    *
    * @return $this
    */
    public function setArtifacts($artifacts)
    {
        $this->container['artifacts'] = $artifacts;
        return $this;
    }

    /**
    * Gets subjectId
    *  流水线运行实例ID
    *
    * @return string|null
    */
    public function getSubjectId()
    {
        return $this->container['subjectId'];
    }

    /**
    * Sets subjectId
    *
    * @param string|null $subjectId 流水线运行实例ID
    *
    * @return $this
    */
    public function setSubjectId($subjectId)
    {
        $this->container['subjectId'] = $subjectId;
        return $this;
    }

    /**
    * Gets groupId
    *  分组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  分组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 分组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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
    * Gets currentSystemTime
    *  当前系统时间
    *
    * @return int|null
    */
    public function getCurrentSystemTime()
    {
        return $this->container['currentSystemTime'];
    }

    /**
    * Sets currentSystemTime
    *
    * @param int|null $currentSystemTime 当前系统时间
    *
    * @return $this
    */
    public function setCurrentSystemTime($currentSystemTime)
    {
        $this->container['currentSystemTime'] = $currentSystemTime;
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

