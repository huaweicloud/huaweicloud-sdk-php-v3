<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  工作项名称
    * owner  处理人
    * path  工作项路径
    * startDate  预计开始日期
    * dueDate  预计结束日期
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    * creator  创建人
    * updator  更新人
    * projectUuid  项目ID，外部使用项目ID，内部使用默认值
    * workItemId  工作项编号
    * statusId  状态ID
    * statusName  状态
    * trackerId  类型ID
    * trackerName  类型
    * iterationId  迭代ID
    * moduleId  模块ID
    * severityId  重要程度ID
    * severityName  重要程度
    * parentWorkitemId  父工作项编号
    * boardId  看板ID
    * boardName  看板
    * createTime  创建时间
    * updateTime  更新时间
    * iterationName  迭代名
    * moduleName  模块名
    * modulePath  模块path
    * modulePathName  模块路径名称
    * ownerName  处理人
    * haveChildDynamic  父工作项下是否有子工作项包含动态
    * hasChild  父工作项下是否有子工作项
    * issueDynamicCount  需求动态数量
    * caseCount  用例数量
    * sequenceId  xBoard项目工作项序列号
    * piId  pi的id，层级关系：pi -> 迭代 -> 需求
    * piName  迭代ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'owner' => 'string',
            'path' => 'string',
            'startDate' => 'string',
            'dueDate' => 'string',
            'region' => 'string',
            'creator' => 'string',
            'updator' => 'string',
            'projectUuid' => 'string',
            'workItemId' => 'string',
            'statusId' => 'string',
            'statusName' => 'string',
            'trackerId' => 'string',
            'trackerName' => 'string',
            'iterationId' => 'string',
            'moduleId' => 'string',
            'severityId' => 'string',
            'severityName' => 'string',
            'parentWorkitemId' => 'string',
            'boardId' => 'string',
            'boardName' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'iterationName' => 'string',
            'moduleName' => 'string',
            'modulePath' => 'string',
            'modulePathName' => 'string',
            'ownerName' => 'string',
            'haveChildDynamic' => 'bool',
            'hasChild' => 'bool',
            'issueDynamicCount' => 'int',
            'caseCount' => 'int',
            'sequenceId' => 'string',
            'piId' => 'string',
            'piName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  工作项名称
    * owner  处理人
    * path  工作项路径
    * startDate  预计开始日期
    * dueDate  预计结束日期
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    * creator  创建人
    * updator  更新人
    * projectUuid  项目ID，外部使用项目ID，内部使用默认值
    * workItemId  工作项编号
    * statusId  状态ID
    * statusName  状态
    * trackerId  类型ID
    * trackerName  类型
    * iterationId  迭代ID
    * moduleId  模块ID
    * severityId  重要程度ID
    * severityName  重要程度
    * parentWorkitemId  父工作项编号
    * boardId  看板ID
    * boardName  看板
    * createTime  创建时间
    * updateTime  更新时间
    * iterationName  迭代名
    * moduleName  模块名
    * modulePath  模块path
    * modulePathName  模块路径名称
    * ownerName  处理人
    * haveChildDynamic  父工作项下是否有子工作项包含动态
    * hasChild  父工作项下是否有子工作项
    * issueDynamicCount  需求动态数量
    * caseCount  用例数量
    * sequenceId  xBoard项目工作项序列号
    * piId  pi的id，层级关系：pi -> 迭代 -> 需求
    * piName  迭代ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'owner' => null,
        'path' => null,
        'startDate' => null,
        'dueDate' => null,
        'region' => null,
        'creator' => null,
        'updator' => null,
        'projectUuid' => null,
        'workItemId' => null,
        'statusId' => null,
        'statusName' => null,
        'trackerId' => null,
        'trackerName' => null,
        'iterationId' => null,
        'moduleId' => null,
        'severityId' => null,
        'severityName' => null,
        'parentWorkitemId' => null,
        'boardId' => null,
        'boardName' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'iterationName' => null,
        'moduleName' => null,
        'modulePath' => null,
        'modulePathName' => null,
        'ownerName' => null,
        'haveChildDynamic' => null,
        'hasChild' => null,
        'issueDynamicCount' => 'int32',
        'caseCount' => 'int32',
        'sequenceId' => null,
        'piId' => null,
        'piName' => null
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
    * name  工作项名称
    * owner  处理人
    * path  工作项路径
    * startDate  预计开始日期
    * dueDate  预计结束日期
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    * creator  创建人
    * updator  更新人
    * projectUuid  项目ID，外部使用项目ID，内部使用默认值
    * workItemId  工作项编号
    * statusId  状态ID
    * statusName  状态
    * trackerId  类型ID
    * trackerName  类型
    * iterationId  迭代ID
    * moduleId  模块ID
    * severityId  重要程度ID
    * severityName  重要程度
    * parentWorkitemId  父工作项编号
    * boardId  看板ID
    * boardName  看板
    * createTime  创建时间
    * updateTime  更新时间
    * iterationName  迭代名
    * moduleName  模块名
    * modulePath  模块path
    * modulePathName  模块路径名称
    * ownerName  处理人
    * haveChildDynamic  父工作项下是否有子工作项包含动态
    * hasChild  父工作项下是否有子工作项
    * issueDynamicCount  需求动态数量
    * caseCount  用例数量
    * sequenceId  xBoard项目工作项序列号
    * piId  pi的id，层级关系：pi -> 迭代 -> 需求
    * piName  迭代ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'owner' => 'owner',
            'path' => 'path',
            'startDate' => 'start_date',
            'dueDate' => 'due_date',
            'region' => 'region',
            'creator' => 'creator',
            'updator' => 'updator',
            'projectUuid' => 'project_uuid',
            'workItemId' => 'work_item_id',
            'statusId' => 'status_id',
            'statusName' => 'status_name',
            'trackerId' => 'tracker_id',
            'trackerName' => 'tracker_name',
            'iterationId' => 'iteration_id',
            'moduleId' => 'module_id',
            'severityId' => 'severity_id',
            'severityName' => 'severity_name',
            'parentWorkitemId' => 'parent_workitem_id',
            'boardId' => 'board_id',
            'boardName' => 'board_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'iterationName' => 'iteration_name',
            'moduleName' => 'module_name',
            'modulePath' => 'module_path',
            'modulePathName' => 'module_path_name',
            'ownerName' => 'owner_name',
            'haveChildDynamic' => 'have_child_dynamic',
            'hasChild' => 'has_child',
            'issueDynamicCount' => 'issue_dynamic_count',
            'caseCount' => 'case_count',
            'sequenceId' => 'sequence_id',
            'piId' => 'pi_id',
            'piName' => 'pi_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  工作项名称
    * owner  处理人
    * path  工作项路径
    * startDate  预计开始日期
    * dueDate  预计结束日期
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    * creator  创建人
    * updator  更新人
    * projectUuid  项目ID，外部使用项目ID，内部使用默认值
    * workItemId  工作项编号
    * statusId  状态ID
    * statusName  状态
    * trackerId  类型ID
    * trackerName  类型
    * iterationId  迭代ID
    * moduleId  模块ID
    * severityId  重要程度ID
    * severityName  重要程度
    * parentWorkitemId  父工作项编号
    * boardId  看板ID
    * boardName  看板
    * createTime  创建时间
    * updateTime  更新时间
    * iterationName  迭代名
    * moduleName  模块名
    * modulePath  模块path
    * modulePathName  模块路径名称
    * ownerName  处理人
    * haveChildDynamic  父工作项下是否有子工作项包含动态
    * hasChild  父工作项下是否有子工作项
    * issueDynamicCount  需求动态数量
    * caseCount  用例数量
    * sequenceId  xBoard项目工作项序列号
    * piId  pi的id，层级关系：pi -> 迭代 -> 需求
    * piName  迭代ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'owner' => 'setOwner',
            'path' => 'setPath',
            'startDate' => 'setStartDate',
            'dueDate' => 'setDueDate',
            'region' => 'setRegion',
            'creator' => 'setCreator',
            'updator' => 'setUpdator',
            'projectUuid' => 'setProjectUuid',
            'workItemId' => 'setWorkItemId',
            'statusId' => 'setStatusId',
            'statusName' => 'setStatusName',
            'trackerId' => 'setTrackerId',
            'trackerName' => 'setTrackerName',
            'iterationId' => 'setIterationId',
            'moduleId' => 'setModuleId',
            'severityId' => 'setSeverityId',
            'severityName' => 'setSeverityName',
            'parentWorkitemId' => 'setParentWorkitemId',
            'boardId' => 'setBoardId',
            'boardName' => 'setBoardName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'iterationName' => 'setIterationName',
            'moduleName' => 'setModuleName',
            'modulePath' => 'setModulePath',
            'modulePathName' => 'setModulePathName',
            'ownerName' => 'setOwnerName',
            'haveChildDynamic' => 'setHaveChildDynamic',
            'hasChild' => 'setHasChild',
            'issueDynamicCount' => 'setIssueDynamicCount',
            'caseCount' => 'setCaseCount',
            'sequenceId' => 'setSequenceId',
            'piId' => 'setPiId',
            'piName' => 'setPiName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  工作项名称
    * owner  处理人
    * path  工作项路径
    * startDate  预计开始日期
    * dueDate  预计结束日期
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    * creator  创建人
    * updator  更新人
    * projectUuid  项目ID，外部使用项目ID，内部使用默认值
    * workItemId  工作项编号
    * statusId  状态ID
    * statusName  状态
    * trackerId  类型ID
    * trackerName  类型
    * iterationId  迭代ID
    * moduleId  模块ID
    * severityId  重要程度ID
    * severityName  重要程度
    * parentWorkitemId  父工作项编号
    * boardId  看板ID
    * boardName  看板
    * createTime  创建时间
    * updateTime  更新时间
    * iterationName  迭代名
    * moduleName  模块名
    * modulePath  模块path
    * modulePathName  模块路径名称
    * ownerName  处理人
    * haveChildDynamic  父工作项下是否有子工作项包含动态
    * hasChild  父工作项下是否有子工作项
    * issueDynamicCount  需求动态数量
    * caseCount  用例数量
    * sequenceId  xBoard项目工作项序列号
    * piId  pi的id，层级关系：pi -> 迭代 -> 需求
    * piName  迭代ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'owner' => 'getOwner',
            'path' => 'getPath',
            'startDate' => 'getStartDate',
            'dueDate' => 'getDueDate',
            'region' => 'getRegion',
            'creator' => 'getCreator',
            'updator' => 'getUpdator',
            'projectUuid' => 'getProjectUuid',
            'workItemId' => 'getWorkItemId',
            'statusId' => 'getStatusId',
            'statusName' => 'getStatusName',
            'trackerId' => 'getTrackerId',
            'trackerName' => 'getTrackerName',
            'iterationId' => 'getIterationId',
            'moduleId' => 'getModuleId',
            'severityId' => 'getSeverityId',
            'severityName' => 'getSeverityName',
            'parentWorkitemId' => 'getParentWorkitemId',
            'boardId' => 'getBoardId',
            'boardName' => 'getBoardName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'iterationName' => 'getIterationName',
            'moduleName' => 'getModuleName',
            'modulePath' => 'getModulePath',
            'modulePathName' => 'getModulePathName',
            'ownerName' => 'getOwnerName',
            'haveChildDynamic' => 'getHaveChildDynamic',
            'hasChild' => 'getHasChild',
            'issueDynamicCount' => 'getIssueDynamicCount',
            'caseCount' => 'getCaseCount',
            'sequenceId' => 'getSequenceId',
            'piId' => 'getPiId',
            'piName' => 'getPiName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['workItemId'] = isset($data['workItemId']) ? $data['workItemId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['severityId'] = isset($data['severityId']) ? $data['severityId'] : null;
        $this->container['severityName'] = isset($data['severityName']) ? $data['severityName'] : null;
        $this->container['parentWorkitemId'] = isset($data['parentWorkitemId']) ? $data['parentWorkitemId'] : null;
        $this->container['boardId'] = isset($data['boardId']) ? $data['boardId'] : null;
        $this->container['boardName'] = isset($data['boardName']) ? $data['boardName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['iterationName'] = isset($data['iterationName']) ? $data['iterationName'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['modulePath'] = isset($data['modulePath']) ? $data['modulePath'] : null;
        $this->container['modulePathName'] = isset($data['modulePathName']) ? $data['modulePathName'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['haveChildDynamic'] = isset($data['haveChildDynamic']) ? $data['haveChildDynamic'] : null;
        $this->container['hasChild'] = isset($data['hasChild']) ? $data['hasChild'] : null;
        $this->container['issueDynamicCount'] = isset($data['issueDynamicCount']) ? $data['issueDynamicCount'] : null;
        $this->container['caseCount'] = isset($data['caseCount']) ? $data['caseCount'] : null;
        $this->container['sequenceId'] = isset($data['sequenceId']) ? $data['sequenceId'] : null;
        $this->container['piId'] = isset($data['piId']) ? $data['piId'] : null;
        $this->container['piName'] = isset($data['piName']) ? $data['piName'] : null;
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
    * Gets name
    *  工作项名称
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
    * @param string|null $name 工作项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  处理人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 处理人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets path
    *  工作项路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 工作项路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets startDate
    *  预计开始日期
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 预计开始日期
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets dueDate
    *  预计结束日期
    *
    * @return string|null
    */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
    * Sets dueDate
    *
    * @param string|null $dueDate 预计结束日期
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets region
    *  逻辑region，外部使用公有云实际区域，内部使用默认值
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
    * @param string|null $region 逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updator
    *  更新人
    *
    * @return string|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param string|null $updator 更新人
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID，外部使用项目ID，内部使用默认值
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID，外部使用项目ID，内部使用默认值
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets workItemId
    *  工作项编号
    *
    * @return string|null
    */
    public function getWorkItemId()
    {
        return $this->container['workItemId'];
    }

    /**
    * Sets workItemId
    *
    * @param string|null $workItemId 工作项编号
    *
    * @return $this
    */
    public function setWorkItemId($workItemId)
    {
        $this->container['workItemId'] = $workItemId;
        return $this;
    }

    /**
    * Gets statusId
    *  状态ID
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 状态ID
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets statusName
    *  状态
    *
    * @return string|null
    */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
    * Sets statusName
    *
    * @param string|null $statusName 状态
    *
    * @return $this
    */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;
        return $this;
    }

    /**
    * Gets trackerId
    *  类型ID
    *
    * @return string|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param string|null $trackerId 类型ID
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets trackerName
    *  类型
    *
    * @return string|null
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string|null $trackerName 类型
    *
    * @return $this
    */
    public function setTrackerName($trackerName)
    {
        $this->container['trackerName'] = $trackerName;
        return $this;
    }

    /**
    * Gets iterationId
    *  迭代ID
    *
    * @return string|null
    */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
    * Sets iterationId
    *
    * @param string|null $iterationId 迭代ID
    *
    * @return $this
    */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块ID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块ID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets severityId
    *  重要程度ID
    *
    * @return string|null
    */
    public function getSeverityId()
    {
        return $this->container['severityId'];
    }

    /**
    * Sets severityId
    *
    * @param string|null $severityId 重要程度ID
    *
    * @return $this
    */
    public function setSeverityId($severityId)
    {
        $this->container['severityId'] = $severityId;
        return $this;
    }

    /**
    * Gets severityName
    *  重要程度
    *
    * @return string|null
    */
    public function getSeverityName()
    {
        return $this->container['severityName'];
    }

    /**
    * Sets severityName
    *
    * @param string|null $severityName 重要程度
    *
    * @return $this
    */
    public function setSeverityName($severityName)
    {
        $this->container['severityName'] = $severityName;
        return $this;
    }

    /**
    * Gets parentWorkitemId
    *  父工作项编号
    *
    * @return string|null
    */
    public function getParentWorkitemId()
    {
        return $this->container['parentWorkitemId'];
    }

    /**
    * Sets parentWorkitemId
    *
    * @param string|null $parentWorkitemId 父工作项编号
    *
    * @return $this
    */
    public function setParentWorkitemId($parentWorkitemId)
    {
        $this->container['parentWorkitemId'] = $parentWorkitemId;
        return $this;
    }

    /**
    * Gets boardId
    *  看板ID
    *
    * @return string|null
    */
    public function getBoardId()
    {
        return $this->container['boardId'];
    }

    /**
    * Sets boardId
    *
    * @param string|null $boardId 看板ID
    *
    * @return $this
    */
    public function setBoardId($boardId)
    {
        $this->container['boardId'] = $boardId;
        return $this;
    }

    /**
    * Gets boardName
    *  看板
    *
    * @return string|null
    */
    public function getBoardName()
    {
        return $this->container['boardName'];
    }

    /**
    * Sets boardName
    *
    * @param string|null $boardName 看板
    *
    * @return $this
    */
    public function setBoardName($boardName)
    {
        $this->container['boardName'] = $boardName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets iterationName
    *  迭代名
    *
    * @return string|null
    */
    public function getIterationName()
    {
        return $this->container['iterationName'];
    }

    /**
    * Sets iterationName
    *
    * @param string|null $iterationName 迭代名
    *
    * @return $this
    */
    public function setIterationName($iterationName)
    {
        $this->container['iterationName'] = $iterationName;
        return $this;
    }

    /**
    * Gets moduleName
    *  模块名
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 模块名
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets modulePath
    *  模块path
    *
    * @return string|null
    */
    public function getModulePath()
    {
        return $this->container['modulePath'];
    }

    /**
    * Sets modulePath
    *
    * @param string|null $modulePath 模块path
    *
    * @return $this
    */
    public function setModulePath($modulePath)
    {
        $this->container['modulePath'] = $modulePath;
        return $this;
    }

    /**
    * Gets modulePathName
    *  模块路径名称
    *
    * @return string|null
    */
    public function getModulePathName()
    {
        return $this->container['modulePathName'];
    }

    /**
    * Sets modulePathName
    *
    * @param string|null $modulePathName 模块路径名称
    *
    * @return $this
    */
    public function setModulePathName($modulePathName)
    {
        $this->container['modulePathName'] = $modulePathName;
        return $this;
    }

    /**
    * Gets ownerName
    *  处理人
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 处理人
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets haveChildDynamic
    *  父工作项下是否有子工作项包含动态
    *
    * @return bool|null
    */
    public function getHaveChildDynamic()
    {
        return $this->container['haveChildDynamic'];
    }

    /**
    * Sets haveChildDynamic
    *
    * @param bool|null $haveChildDynamic 父工作项下是否有子工作项包含动态
    *
    * @return $this
    */
    public function setHaveChildDynamic($haveChildDynamic)
    {
        $this->container['haveChildDynamic'] = $haveChildDynamic;
        return $this;
    }

    /**
    * Gets hasChild
    *  父工作项下是否有子工作项
    *
    * @return bool|null
    */
    public function getHasChild()
    {
        return $this->container['hasChild'];
    }

    /**
    * Sets hasChild
    *
    * @param bool|null $hasChild 父工作项下是否有子工作项
    *
    * @return $this
    */
    public function setHasChild($hasChild)
    {
        $this->container['hasChild'] = $hasChild;
        return $this;
    }

    /**
    * Gets issueDynamicCount
    *  需求动态数量
    *
    * @return int|null
    */
    public function getIssueDynamicCount()
    {
        return $this->container['issueDynamicCount'];
    }

    /**
    * Sets issueDynamicCount
    *
    * @param int|null $issueDynamicCount 需求动态数量
    *
    * @return $this
    */
    public function setIssueDynamicCount($issueDynamicCount)
    {
        $this->container['issueDynamicCount'] = $issueDynamicCount;
        return $this;
    }

    /**
    * Gets caseCount
    *  用例数量
    *
    * @return int|null
    */
    public function getCaseCount()
    {
        return $this->container['caseCount'];
    }

    /**
    * Sets caseCount
    *
    * @param int|null $caseCount 用例数量
    *
    * @return $this
    */
    public function setCaseCount($caseCount)
    {
        $this->container['caseCount'] = $caseCount;
        return $this;
    }

    /**
    * Gets sequenceId
    *  xBoard项目工作项序列号
    *
    * @return string|null
    */
    public function getSequenceId()
    {
        return $this->container['sequenceId'];
    }

    /**
    * Sets sequenceId
    *
    * @param string|null $sequenceId xBoard项目工作项序列号
    *
    * @return $this
    */
    public function setSequenceId($sequenceId)
    {
        $this->container['sequenceId'] = $sequenceId;
        return $this;
    }

    /**
    * Gets piId
    *  pi的id，层级关系：pi -> 迭代 -> 需求
    *
    * @return string|null
    */
    public function getPiId()
    {
        return $this->container['piId'];
    }

    /**
    * Sets piId
    *
    * @param string|null $piId pi的id，层级关系：pi -> 迭代 -> 需求
    *
    * @return $this
    */
    public function setPiId($piId)
    {
        $this->container['piId'] = $piId;
        return $this;
    }

    /**
    * Gets piName
    *  迭代ID
    *
    * @return string|null
    */
    public function getPiName()
    {
        return $this->container['piName'];
    }

    /**
    * Sets piName
    *
    * @param string|null $piName 迭代ID
    *
    * @return $this
    */
    public function setPiName($piName)
    {
        $this->container['piName'] = $piName;
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

