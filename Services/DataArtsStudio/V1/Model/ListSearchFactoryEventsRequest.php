<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSearchFactoryEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSearchFactoryEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * taskName  作业名称
    * ownerName  责任人名称。
    * type  事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    * status  事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
    * orderBy  排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    * startTime  创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'xProjectId' => 'string',
            'workspace' => 'string',
            'workspaceId' => 'string',
            'name' => 'string',
            'taskName' => 'string',
            'ownerName' => 'string',
            'type' => 'string',
            'status' => 'string',
            'orderBy' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * taskName  作业名称
    * ownerName  责任人名称。
    * type  事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    * status  事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
    * orderBy  排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    * startTime  创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'xProjectId' => null,
        'workspace' => null,
        'workspaceId' => null,
        'name' => null,
        'taskName' => null,
        'ownerName' => null,
        'type' => null,
        'status' => null,
        'orderBy' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'offset' => null,
        'limit' => null
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
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * taskName  作业名称
    * ownerName  责任人名称。
    * type  事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    * status  事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
    * orderBy  排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    * startTime  创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'xProjectId' => 'X-Project-Id',
            'workspace' => 'workspace',
            'workspaceId' => 'workspace_id',
            'name' => 'name',
            'taskName' => 'task_name',
            'ownerName' => 'owner_name',
            'type' => 'type',
            'status' => 'status',
            'orderBy' => 'order_by',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * taskName  作业名称
    * ownerName  责任人名称。
    * type  事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    * status  事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
    * orderBy  排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    * startTime  创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'xProjectId' => 'setXProjectId',
            'workspace' => 'setWorkspace',
            'workspaceId' => 'setWorkspaceId',
            'name' => 'setName',
            'taskName' => 'setTaskName',
            'ownerName' => 'setOwnerName',
            'type' => 'setType',
            'status' => 'setStatus',
            'orderBy' => 'setOrderBy',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  DataArts Studio实例ID。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * name  基线任务名称。
    * taskName  作业名称
    * ownerName  责任人名称。
    * type  事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    * status  事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
    * orderBy  排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    * startTime  创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
    * endTime  创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    * offset  分页列表的页数，默认值为1。取值范围大于等于1。
    * limit  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'xProjectId' => 'getXProjectId',
            'workspace' => 'getWorkspace',
            'workspaceId' => 'getWorkspaceId',
            'name' => 'getName',
            'taskName' => 'getTaskName',
            'ownerName' => 'getOwnerName',
            'type' => 'getType',
            'status' => 'getStatus',
            'orderBy' => 'getOrderBy',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) < 5)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  DataArts Studio实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId DataArts Studio实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets name
    *  基线任务名称。
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
    * @param string|null $name 基线任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets taskName
    *  作业名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 作业名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人名称。
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
    * @param string|null $ownerName 责任人名称。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets type
    *  事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 事件类型:  - ERROR: 出错 - SLOW_DOWN: 变慢  默认查询全部事件类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
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
    * @param string|null $status 事件状态: - NEW_DISCOVERY: 新发现 - PROCESSING: 处理中 - RESTORED: 已恢复 - IGNORED: 已忽略
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则，示例 happen_time_ms asc asc，表示按照优先级升序排序，有如下取值： - happen_time_ms asc asc: 按照触发事件升序。 - happen_time_ms asc desc: 按照触发事件降序。  默认不排序。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets startTime
    *  创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
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
    * @param int|null $startTime 创建时间检索区间，起始时间戳，单位毫秒。默认为当天0点0分0秒，当end_time有值时，该值不能为空。
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
    *  创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
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
    * @param int|null $endTime 创建时间检索区间，终止时间戳，单位毫秒。默认为当天23点59分59秒，当start_time有值时，该值不能为空，最大查询范围为180天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  分页列表的页数，默认值为1。取值范围大于等于1。
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
    * @param int|null $offset 分页列表的页数，默认值为1。取值范围大于等于1。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
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
    * @param int|null $limit 分页返回结果，指定每页最大记录数。范围[1,100] 默认值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

