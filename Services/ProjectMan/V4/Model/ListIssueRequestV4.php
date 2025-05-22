<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIssueRequestV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIssueRequestV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assignedIds  处理人id
    * creatorIds  创建者id
    * developerIds  开发人id,对应用户信息的数字id
    * domainIds  id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    * doneRatios  完成度
    * iterationIds  迭代id
    * limit  每页显示数量
    * offset  分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    * moduleIds  模块id
    * priorityIds  优先级
    * queryType  查询类型 backlog feature epic
    * severityIds  查询类型
    * statusIds  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    * storyPointIds  故事点id
    * trackerIds  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * includeDeleted  true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    * createdTimeInterval  根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    * closedTimeInterval  根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    * customFields  自定义字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assignedIds' => 'int[]',
            'creatorIds' => 'int[]',
            'developerIds' => 'int[]',
            'domainIds' => 'int[]',
            'doneRatios' => 'int[]',
            'iterationIds' => 'int[]',
            'limit' => 'int',
            'offset' => 'int',
            'moduleIds' => 'int[]',
            'priorityIds' => 'int[]',
            'queryType' => 'string',
            'severityIds' => 'int[]',
            'statusIds' => 'int[]',
            'storyPointIds' => 'int[]',
            'trackerIds' => 'int[]',
            'includeDeleted' => 'bool',
            'createdTimeInterval' => 'string',
            'updatedTimeInterval' => 'string',
            'closedTimeInterval' => 'string',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ListIssueRequestV4CustomFields[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assignedIds  处理人id
    * creatorIds  创建者id
    * developerIds  开发人id,对应用户信息的数字id
    * domainIds  id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    * doneRatios  完成度
    * iterationIds  迭代id
    * limit  每页显示数量
    * offset  分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    * moduleIds  模块id
    * priorityIds  优先级
    * queryType  查询类型 backlog feature epic
    * severityIds  查询类型
    * statusIds  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    * storyPointIds  故事点id
    * trackerIds  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * includeDeleted  true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    * createdTimeInterval  根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    * closedTimeInterval  根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    * customFields  自定义字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assignedIds' => 'int32',
        'creatorIds' => 'int32',
        'developerIds' => 'int32',
        'domainIds' => 'int32',
        'doneRatios' => 'int32',
        'iterationIds' => 'int32',
        'limit' => 'int32',
        'offset' => 'int32',
        'moduleIds' => 'int32',
        'priorityIds' => 'int32',
        'queryType' => null,
        'severityIds' => 'int32',
        'statusIds' => 'int32',
        'storyPointIds' => 'int32',
        'trackerIds' => 'int32',
        'includeDeleted' => null,
        'createdTimeInterval' => null,
        'updatedTimeInterval' => null,
        'closedTimeInterval' => null,
        'customFields' => null
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
    * assignedIds  处理人id
    * creatorIds  创建者id
    * developerIds  开发人id,对应用户信息的数字id
    * domainIds  id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    * doneRatios  完成度
    * iterationIds  迭代id
    * limit  每页显示数量
    * offset  分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    * moduleIds  模块id
    * priorityIds  优先级
    * queryType  查询类型 backlog feature epic
    * severityIds  查询类型
    * statusIds  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    * storyPointIds  故事点id
    * trackerIds  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * includeDeleted  true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    * createdTimeInterval  根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    * closedTimeInterval  根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    * customFields  自定义字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assignedIds' => 'assigned_ids',
            'creatorIds' => 'creator_ids',
            'developerIds' => 'developer_ids',
            'domainIds' => 'domain_ids',
            'doneRatios' => 'done_ratios',
            'iterationIds' => 'iteration_ids',
            'limit' => 'limit',
            'offset' => 'offset',
            'moduleIds' => 'module_ids',
            'priorityIds' => 'priority_ids',
            'queryType' => 'query_type',
            'severityIds' => 'severity_ids',
            'statusIds' => 'status_ids',
            'storyPointIds' => 'story_point_ids',
            'trackerIds' => 'tracker_ids',
            'includeDeleted' => 'include_deleted',
            'createdTimeInterval' => 'created_time_interval',
            'updatedTimeInterval' => 'updated_time_interval',
            'closedTimeInterval' => 'closed_time_interval',
            'customFields' => 'custom_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assignedIds  处理人id
    * creatorIds  创建者id
    * developerIds  开发人id,对应用户信息的数字id
    * domainIds  id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    * doneRatios  完成度
    * iterationIds  迭代id
    * limit  每页显示数量
    * offset  分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    * moduleIds  模块id
    * priorityIds  优先级
    * queryType  查询类型 backlog feature epic
    * severityIds  查询类型
    * statusIds  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    * storyPointIds  故事点id
    * trackerIds  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * includeDeleted  true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    * createdTimeInterval  根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    * closedTimeInterval  根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    * customFields  自定义字段
    *
    * @var string[]
    */
    protected static $setters = [
            'assignedIds' => 'setAssignedIds',
            'creatorIds' => 'setCreatorIds',
            'developerIds' => 'setDeveloperIds',
            'domainIds' => 'setDomainIds',
            'doneRatios' => 'setDoneRatios',
            'iterationIds' => 'setIterationIds',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'moduleIds' => 'setModuleIds',
            'priorityIds' => 'setPriorityIds',
            'queryType' => 'setQueryType',
            'severityIds' => 'setSeverityIds',
            'statusIds' => 'setStatusIds',
            'storyPointIds' => 'setStoryPointIds',
            'trackerIds' => 'setTrackerIds',
            'includeDeleted' => 'setIncludeDeleted',
            'createdTimeInterval' => 'setCreatedTimeInterval',
            'updatedTimeInterval' => 'setUpdatedTimeInterval',
            'closedTimeInterval' => 'setClosedTimeInterval',
            'customFields' => 'setCustomFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assignedIds  处理人id
    * creatorIds  创建者id
    * developerIds  开发人id,对应用户信息的数字id
    * domainIds  id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    * doneRatios  完成度
    * iterationIds  迭代id
    * limit  每页显示数量
    * offset  分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    * moduleIds  模块id
    * priorityIds  优先级
    * queryType  查询类型 backlog feature epic
    * severityIds  查询类型
    * statusIds  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    * storyPointIds  故事点id
    * trackerIds  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * includeDeleted  true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    * createdTimeInterval  根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    * closedTimeInterval  根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    * customFields  自定义字段
    *
    * @var string[]
    */
    protected static $getters = [
            'assignedIds' => 'getAssignedIds',
            'creatorIds' => 'getCreatorIds',
            'developerIds' => 'getDeveloperIds',
            'domainIds' => 'getDomainIds',
            'doneRatios' => 'getDoneRatios',
            'iterationIds' => 'getIterationIds',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'moduleIds' => 'getModuleIds',
            'priorityIds' => 'getPriorityIds',
            'queryType' => 'getQueryType',
            'severityIds' => 'getSeverityIds',
            'statusIds' => 'getStatusIds',
            'storyPointIds' => 'getStoryPointIds',
            'trackerIds' => 'getTrackerIds',
            'includeDeleted' => 'getIncludeDeleted',
            'createdTimeInterval' => 'getCreatedTimeInterval',
            'updatedTimeInterval' => 'getUpdatedTimeInterval',
            'closedTimeInterval' => 'getClosedTimeInterval',
            'customFields' => 'getCustomFields'
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
        $this->container['assignedIds'] = isset($data['assignedIds']) ? $data['assignedIds'] : null;
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['developerIds'] = isset($data['developerIds']) ? $data['developerIds'] : null;
        $this->container['domainIds'] = isset($data['domainIds']) ? $data['domainIds'] : null;
        $this->container['doneRatios'] = isset($data['doneRatios']) ? $data['doneRatios'] : null;
        $this->container['iterationIds'] = isset($data['iterationIds']) ? $data['iterationIds'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['moduleIds'] = isset($data['moduleIds']) ? $data['moduleIds'] : null;
        $this->container['priorityIds'] = isset($data['priorityIds']) ? $data['priorityIds'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['severityIds'] = isset($data['severityIds']) ? $data['severityIds'] : null;
        $this->container['statusIds'] = isset($data['statusIds']) ? $data['statusIds'] : null;
        $this->container['storyPointIds'] = isset($data['storyPointIds']) ? $data['storyPointIds'] : null;
        $this->container['trackerIds'] = isset($data['trackerIds']) ? $data['trackerIds'] : null;
        $this->container['includeDeleted'] = isset($data['includeDeleted']) ? $data['includeDeleted'] : null;
        $this->container['createdTimeInterval'] = isset($data['createdTimeInterval']) ? $data['createdTimeInterval'] : null;
        $this->container['updatedTimeInterval'] = isset($data['updatedTimeInterval']) ? $data['updatedTimeInterval'] : null;
        $this->container['closedTimeInterval'] = isset($data['closedTimeInterval']) ? $data['closedTimeInterval'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets assignedIds
    *  处理人id
    *
    * @return int[]|null
    */
    public function getAssignedIds()
    {
        return $this->container['assignedIds'];
    }

    /**
    * Sets assignedIds
    *
    * @param int[]|null $assignedIds 处理人id
    *
    * @return $this
    */
    public function setAssignedIds($assignedIds)
    {
        $this->container['assignedIds'] = $assignedIds;
        return $this;
    }

    /**
    * Gets creatorIds
    *  创建者id
    *
    * @return int[]|null
    */
    public function getCreatorIds()
    {
        return $this->container['creatorIds'];
    }

    /**
    * Sets creatorIds
    *
    * @param int[]|null $creatorIds 创建者id
    *
    * @return $this
    */
    public function setCreatorIds($creatorIds)
    {
        $this->container['creatorIds'] = $creatorIds;
        return $this;
    }

    /**
    * Gets developerIds
    *  开发人id,对应用户信息的数字id
    *
    * @return int[]|null
    */
    public function getDeveloperIds()
    {
        return $this->container['developerIds'];
    }

    /**
    * Sets developerIds
    *
    * @param int[]|null $developerIds 开发人id,对应用户信息的数字id
    *
    * @return $this
    */
    public function setDeveloperIds($developerIds)
    {
        $this->container['developerIds'] = $developerIds;
        return $this;
    }

    /**
    * Gets domainIds
    *  id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    *
    * @return int[]|null
    */
    public function getDomainIds()
    {
        return $this->container['domainIds'];
    }

    /**
    * Sets domainIds
    *
    * @param int[]|null $domainIds id, 领域, 14 '性能', 15 '功能', 16 '可靠性', 17 '网络安全', 18 '可维护性', 19 '其他DFX', 20 '可用性',
    *
    * @return $this
    */
    public function setDomainIds($domainIds)
    {
        $this->container['domainIds'] = $domainIds;
        return $this;
    }

    /**
    * Gets doneRatios
    *  完成度
    *
    * @return int[]|null
    */
    public function getDoneRatios()
    {
        return $this->container['doneRatios'];
    }

    /**
    * Sets doneRatios
    *
    * @param int[]|null $doneRatios 完成度
    *
    * @return $this
    */
    public function setDoneRatios($doneRatios)
    {
        $this->container['doneRatios'] = $doneRatios;
        return $this;
    }

    /**
    * Gets iterationIds
    *  迭代id
    *
    * @return int[]|null
    */
    public function getIterationIds()
    {
        return $this->container['iterationIds'];
    }

    /**
    * Sets iterationIds
    *
    * @param int[]|null $iterationIds 迭代id
    *
    * @return $this
    */
    public function setIterationIds($iterationIds)
    {
        $this->container['iterationIds'] = $iterationIds;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页索引，偏移量，offset是limit的整数倍数，limit=10,offset=0,10,20...
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets moduleIds
    *  模块id
    *
    * @return int[]|null
    */
    public function getModuleIds()
    {
        return $this->container['moduleIds'];
    }

    /**
    * Sets moduleIds
    *
    * @param int[]|null $moduleIds 模块id
    *
    * @return $this
    */
    public function setModuleIds($moduleIds)
    {
        $this->container['moduleIds'] = $moduleIds;
        return $this;
    }

    /**
    * Gets priorityIds
    *  优先级
    *
    * @return int[]|null
    */
    public function getPriorityIds()
    {
        return $this->container['priorityIds'];
    }

    /**
    * Sets priorityIds
    *
    * @param int[]|null $priorityIds 优先级
    *
    * @return $this
    */
    public function setPriorityIds($priorityIds)
    {
        $this->container['priorityIds'] = $priorityIds;
        return $this;
    }

    /**
    * Gets queryType
    *  查询类型 backlog feature epic
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询类型 backlog feature epic
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets severityIds
    *  查询类型
    *
    * @return int[]|null
    */
    public function getSeverityIds()
    {
        return $this->container['severityIds'];
    }

    /**
    * Sets severityIds
    *
    * @param int[]|null $severityIds 查询类型
    *
    * @return $this
    */
    public function setSeverityIds($severityIds)
    {
        $this->container['severityIds'] = $severityIds;
        return $this;
    }

    /**
    * Gets statusIds
    *  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    *
    * @return int[]|null
    */
    public function getStatusIds()
    {
        return $this->container['statusIds'];
    }

    /**
    * Sets statusIds
    *
    * @param int[]|null $statusIds 状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已拒绝 6,
    *
    * @return $this
    */
    public function setStatusIds($statusIds)
    {
        $this->container['statusIds'] = $statusIds;
        return $this;
    }

    /**
    * Gets storyPointIds
    *  故事点id
    *
    * @return int[]|null
    */
    public function getStoryPointIds()
    {
        return $this->container['storyPointIds'];
    }

    /**
    * Sets storyPointIds
    *
    * @param int[]|null $storyPointIds 故事点id
    *
    * @return $this
    */
    public function setStoryPointIds($storyPointIds)
    {
        $this->container['storyPointIds'] = $storyPointIds;
        return $this;
    }

    /**
    * Gets trackerIds
    *  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return int[]|null
    */
    public function getTrackerIds()
    {
        return $this->container['trackerIds'];
    }

    /**
    * Sets trackerIds
    *
    * @param int[]|null $trackerIds 工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return $this
    */
    public function setTrackerIds($trackerIds)
    {
        $this->container['trackerIds'] = $trackerIds;
        return $this;
    }

    /**
    * Gets includeDeleted
    *  true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    *
    * @return bool|null
    */
    public function getIncludeDeleted()
    {
        return $this->container['includeDeleted'];
    }

    /**
    * Sets includeDeleted
    *
    * @param bool|null $includeDeleted true 查询的工作项包含已经逻辑删除的，false 查询的工作项不包含已经删除的
    *
    * @return $this
    */
    public function setIncludeDeleted($includeDeleted)
    {
        $this->container['includeDeleted'] = $includeDeleted;
        return $this;
    }

    /**
    * Gets createdTimeInterval
    *  根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    *
    * @return string|null
    */
    public function getCreatedTimeInterval()
    {
        return $this->container['createdTimeInterval'];
    }

    /**
    * Sets createdTimeInterval
    *
    * @param string|null $createdTimeInterval 根据工作项的创建时间查询工作项，(查询的起始时间,查询的结束时间)
    *
    * @return $this
    */
    public function setCreatedTimeInterval($createdTimeInterval)
    {
        $this->container['createdTimeInterval'] = $createdTimeInterval;
        return $this;
    }

    /**
    * Gets updatedTimeInterval
    *  根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    *
    * @return string|null
    */
    public function getUpdatedTimeInterval()
    {
        return $this->container['updatedTimeInterval'];
    }

    /**
    * Sets updatedTimeInterval
    *
    * @param string|null $updatedTimeInterval 根据工作项的更新时间查询工作项，(查询的起始时间,查询的结束时间)
    *
    * @return $this
    */
    public function setUpdatedTimeInterval($updatedTimeInterval)
    {
        $this->container['updatedTimeInterval'] = $updatedTimeInterval;
        return $this;
    }

    /**
    * Gets closedTimeInterval
    *  根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    *
    * @return string|null
    */
    public function getClosedTimeInterval()
    {
        return $this->container['closedTimeInterval'];
    }

    /**
    * Sets closedTimeInterval
    *
    * @param string|null $closedTimeInterval 根据工作项的结束时间查询工作项，(查询的起始时间,查询的结束时间)
    *
    * @return $this
    */
    public function setClosedTimeInterval($closedTimeInterval)
    {
        $this->container['closedTimeInterval'] = $closedTimeInterval;
        return $this;
    }

    /**
    * Gets customFields
    *  自定义字段
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ListIssueRequestV4CustomFields[]|null
    */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
    * Sets customFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ListIssueRequestV4CustomFields[]|null $customFields 自定义字段
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
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

