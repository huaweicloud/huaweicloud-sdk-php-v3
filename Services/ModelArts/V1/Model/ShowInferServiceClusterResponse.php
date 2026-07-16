<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInferServiceClusterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInferServiceClusterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * logicClusterId  **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    * status  **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
    * resourceCategories  **参数解释：** 资源池类型。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    * flavors  **参数解释：** 当前专属池支持的规格。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'logicClusterId' => 'string',
            'status' => 'string',
            'poolId' => 'string',
            'type' => 'string',
            'resourceCategories' => 'string[]',
            'projectId' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int',
            'flavors' => '\HuaweiCloud\SDK\ModelArts\V1\Model\InferFlavor[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * logicClusterId  **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    * status  **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
    * resourceCategories  **参数解释：** 资源池类型。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    * flavors  **参数解释：** 当前专属池支持的规格。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'logicClusterId' => null,
        'status' => null,
        'poolId' => null,
        'type' => null,
        'resourceCategories' => null,
        'projectId' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'flavors' => null
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
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * logicClusterId  **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    * status  **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
    * resourceCategories  **参数解释：** 资源池类型。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    * flavors  **参数解释：** 当前专属池支持的规格。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'logicClusterId' => 'logic_cluster_id',
            'status' => 'status',
            'poolId' => 'pool_id',
            'type' => 'type',
            'resourceCategories' => 'resource_categories',
            'projectId' => 'project_id',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'flavors' => 'flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * logicClusterId  **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    * status  **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
    * resourceCategories  **参数解释：** 资源池类型。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    * flavors  **参数解释：** 当前专属池支持的规格。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'logicClusterId' => 'setLogicClusterId',
            'status' => 'setStatus',
            'poolId' => 'setPoolId',
            'type' => 'setType',
            'resourceCategories' => 'setResourceCategories',
            'projectId' => 'setProjectId',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'flavors' => 'setFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * logicClusterId  **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    * status  **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
    * resourceCategories  **参数解释：** 资源池类型。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    * flavors  **参数解释：** 当前专属池支持的规格。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'logicClusterId' => 'getLogicClusterId',
            'status' => 'getStatus',
            'poolId' => 'getPoolId',
            'type' => 'getType',
            'resourceCategories' => 'getResourceCategories',
            'projectId' => 'getProjectId',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'flavors' => 'getFlavors'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PENDING = 'PENDING';
    const STATUS_INITIALIZING = 'INITIALIZING';
    const STATUS_INITIALIZE_FAILED = 'INITIALIZE_FAILED';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DELETING = 'DELETING';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_MIGRATING = 'MIGRATING';
    const TYPE_MANAGED = 'MANAGED';
    const TYPE_MANAGED_ROMA = 'MANAGED_ROMA';
    const TYPE_DEDICATED = 'DEDICATED';
    const TYPE_DEDICATED_ROMA = 'DEDICATED_ROMA';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING,
            self::STATUS_INITIALIZING,
            self::STATUS_INITIALIZE_FAILED,
            self::STATUS_DELETED,
            self::STATUS_DELETING,
            self::STATUS_DELETE_FAILED,
            self::STATUS_MIGRATING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MANAGED,
            self::TYPE_MANAGED_ROMA,
            self::TYPE_DEDICATED,
            self::TYPE_DEDICATED_ROMA,
        ];
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
        $this->container['logicClusterId'] = isset($data['logicClusterId']) ? $data['logicClusterId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resourceCategories'] = isset($data['resourceCategories']) ? $data['resourceCategories'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['flavors'] = isset($data['flavors']) ? $data['flavors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
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
    * @param string|null $workspaceId **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets logicClusterId
    *  **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLogicClusterId()
    {
        return $this->container['logicClusterId'];
    }

    /**
    * Sets logicClusterId
    *
    * @param string|null $logicClusterId **参数解释：** 资源池cceID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogicClusterId($logicClusterId)
    {
        $this->container['logicClusterId'] = $logicClusterId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
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
    * @param string|null $status **参数解释：** 资源当前状态。 **取值范围：** - ACTIVE ：开启。 - PENDING ：待处理。 - INITIALIZING ：初始化中。 - INITIALIZE_FAILED ：初始化失败。 - DELETED ：已删除。 - DELETING ：删除中。 - DELETE_FAILED ：删除失败。 - MIGRATING : 迁移中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
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
    * @param string|null $type **参数解释：** 专属池类型。 **取值范围：** - MANAGED ：公共。 - MANAGED_ROMA ：公共。 - DEDICATED ：专属。 - DEDICATED_ROMA ：专属。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets resourceCategories
    *  **参数解释：** 资源池类型。
    *
    * @return string[]|null
    */
    public function getResourceCategories()
    {
        return $this->container['resourceCategories'];
    }

    /**
    * Sets resourceCategories
    *
    * @param string[]|null $resourceCategories **参数解释：** 资源池类型。
    *
    * @return $this
    */
    public function setResourceCategories($resourceCategories)
    {
        $this->container['resourceCategories'] = $resourceCategories;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
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
    * @param string|null $projectId **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](modelarts_03_0147.xml)](tag:hws,hws_hk,fcs,fcs_super)[[获取资源空间ID和名称](modelarts_03_0147.xml)](tag:hcs,hcs_sm)。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释：** 资源池启用的时间，UTC毫秒。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释：** 资源池最后更新的时间，UTC毫秒。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets flavors
    *  **参数解释：** 当前专属池支持的规格。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\InferFlavor[]|null
    */
    public function getFlavors()
    {
        return $this->container['flavors'];
    }

    /**
    * Sets flavors
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\InferFlavor[]|null $flavors **参数解释：** 当前专属池支持的规格。
    *
    * @return $this
    */
    public function setFlavors($flavors)
    {
        $this->container['flavors'] = $flavors;
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

