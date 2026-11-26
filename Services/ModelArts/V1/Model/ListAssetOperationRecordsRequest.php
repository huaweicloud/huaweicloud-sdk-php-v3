<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssetOperationRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssetOperationRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * recordId  **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobType  **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobId  **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userId  **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetId  **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'recordId' => 'string',
            'jobType' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'jobStatus' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'assetId' => 'string',
            'assetCode' => 'string',
            'isDeleted' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * recordId  **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobType  **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobId  **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userId  **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetId  **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'sortDir' => null,
        'sortKey' => null,
        'recordId' => null,
        'jobType' => null,
        'jobId' => null,
        'jobName' => null,
        'jobStatus' => null,
        'userId' => null,
        'userName' => null,
        'assetId' => null,
        'assetCode' => null,
        'isDeleted' => null
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
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * recordId  **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobType  **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobId  **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userId  **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetId  **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'recordId' => 'record_id',
            'jobType' => 'job_type',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'jobStatus' => 'job_status',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'assetId' => 'asset_id',
            'assetCode' => 'asset_code',
            'isDeleted' => 'is_deleted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * recordId  **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobType  **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobId  **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userId  **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetId  **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'recordId' => 'setRecordId',
            'jobType' => 'setJobType',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'jobStatus' => 'setJobStatus',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'assetId' => 'setAssetId',
            'assetCode' => 'setAssetCode',
            'isDeleted' => 'setIsDeleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * recordId  **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobType  **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobId  **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userId  **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetId  **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'recordId' => 'getRecordId',
            'jobType' => 'getJobType',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'jobStatus' => 'getJobStatus',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'assetId' => 'getAssetId',
            'assetCode' => 'getAssetCode',
            'isDeleted' => 'getIsDeleted'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && !preg_match("/ASC|DESC/", $this->container['sortDir'])) {
                $invalidProperties[] = "invalid value for 'sortDir', must be conform to the pattern /ASC|DESC/.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/created_at|updated_at/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /created_at|updated_at/.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) > 64)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) < 1)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 40)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobStatus']) && (mb_strlen($this->container['jobStatus']) > 40)) {
                $invalidProperties[] = "invalid value for 'jobStatus', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['jobStatus']) && (mb_strlen($this->container['jobStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be bigger than or equal to 1.";
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
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
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
    * @param int|null $limit **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
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
    *  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
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
    * @param int|null $offset **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets recordId
    *  **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId **参数解释**：操作记录ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets jobType
    *  **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType **参数解释**：作业类型。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**：关联任务ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName **参数解释**：关联任务名称。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobStatus
    *  **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string|null $jobStatus **参数解释**：关联任务状态。 **约束限制**：1-40位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**：操作用户ID。 **约束限制**：1-36位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**：操作用户的用户名。 **约束限制**：1-128位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets assetId
    *  **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId **参数解释**：资产ID。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetCode
    *  **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetCode()
    {
        return $this->container['assetCode'];
    }

    /**
    * Sets assetCode
    *
    * @param string|null $assetCode **参数解释**：资产code。 **约束限制**：1-64位字符串。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetCode($assetCode)
    {
        $this->container['assetCode'] = $assetCode;
        return $this;
    }

    /**
    * Gets isDeleted
    *  **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted **参数解释**：任务是否删除。 **约束限制**：不涉及。 **取值范围**：true,false。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
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

