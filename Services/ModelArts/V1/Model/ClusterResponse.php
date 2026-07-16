<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicClusterId  **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
    * status  **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
    * poolId  **参数解释**：资源池ID。 **取值范围**：不涉及。
    * type  **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
    * resourceCategories  **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * projectId  **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * domainId  **参数解释**：账号ID。 **取值范围**：不涉及。
    * flavors  **参数解释**：资源池规格。
    * isAllowRoot  **参数解释**：资源池是否允许实例以root启动。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicClusterId' => 'string',
            'status' => 'string',
            'poolId' => 'string',
            'type' => 'string',
            'resourceCategories' => 'string',
            'workspaceId' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'flavors' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Flavor[]',
            'isAllowRoot' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicClusterId  **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
    * status  **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
    * poolId  **参数解释**：资源池ID。 **取值范围**：不涉及。
    * type  **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
    * resourceCategories  **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * projectId  **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * domainId  **参数解释**：账号ID。 **取值范围**：不涉及。
    * flavors  **参数解释**：资源池规格。
    * isAllowRoot  **参数解释**：资源池是否允许实例以root启动。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicClusterId' => null,
        'status' => null,
        'poolId' => null,
        'type' => null,
        'resourceCategories' => null,
        'workspaceId' => null,
        'createAt' => null,
        'updateAt' => null,
        'projectId' => null,
        'domainId' => null,
        'flavors' => null,
        'isAllowRoot' => null
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
    * logicClusterId  **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
    * status  **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
    * poolId  **参数解释**：资源池ID。 **取值范围**：不涉及。
    * type  **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
    * resourceCategories  **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * projectId  **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * domainId  **参数解释**：账号ID。 **取值范围**：不涉及。
    * flavors  **参数解释**：资源池规格。
    * isAllowRoot  **参数解释**：资源池是否允许实例以root启动。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicClusterId' => 'logic_cluster_id',
            'status' => 'status',
            'poolId' => 'pool_id',
            'type' => 'type',
            'resourceCategories' => 'resource_categories',
            'workspaceId' => 'workspace_id',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'flavors' => 'flavors',
            'isAllowRoot' => 'is_allow_root'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicClusterId  **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
    * status  **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
    * poolId  **参数解释**：资源池ID。 **取值范围**：不涉及。
    * type  **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
    * resourceCategories  **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * projectId  **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * domainId  **参数解释**：账号ID。 **取值范围**：不涉及。
    * flavors  **参数解释**：资源池规格。
    * isAllowRoot  **参数解释**：资源池是否允许实例以root启动。
    *
    * @var string[]
    */
    protected static $setters = [
            'logicClusterId' => 'setLogicClusterId',
            'status' => 'setStatus',
            'poolId' => 'setPoolId',
            'type' => 'setType',
            'resourceCategories' => 'setResourceCategories',
            'workspaceId' => 'setWorkspaceId',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'flavors' => 'setFlavors',
            'isAllowRoot' => 'setIsAllowRoot'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicClusterId  **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
    * status  **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
    * poolId  **参数解释**：资源池ID。 **取值范围**：不涉及。
    * type  **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
    * resourceCategories  **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * projectId  **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * domainId  **参数解释**：账号ID。 **取值范围**：不涉及。
    * flavors  **参数解释**：资源池规格。
    * isAllowRoot  **参数解释**：资源池是否允许实例以root启动。
    *
    * @var string[]
    */
    protected static $getters = [
            'logicClusterId' => 'getLogicClusterId',
            'status' => 'getStatus',
            'poolId' => 'getPoolId',
            'type' => 'getType',
            'resourceCategories' => 'getResourceCategories',
            'workspaceId' => 'getWorkspaceId',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'flavors' => 'getFlavors',
            'isAllowRoot' => 'getIsAllowRoot'
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
        $this->container['logicClusterId'] = isset($data['logicClusterId']) ? $data['logicClusterId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resourceCategories'] = isset($data['resourceCategories']) ? $data['resourceCategories'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['flavors'] = isset($data['flavors']) ? $data['flavors'] : null;
        $this->container['isAllowRoot'] = isset($data['isAllowRoot']) ? $data['isAllowRoot'] : null;
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
    * Gets logicClusterId
    *  **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
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
    * @param string|null $logicClusterId **参数解释**： 逻辑资源池ID。 **取值范围**： 不涉及。
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
    *  **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
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
    * @param string|null $status **参数解释**：资源池状态。 **取值范围**：枚举类型，取值如下： - PENDING：等待中。 - INITIALIZING：初始化中。 - INITIALIZE_FAILED：初始化失败。 - ACTIVE：可用。 - DELETING：删除中。 - DELETED：已删除。 - DELETE_FAILED：删除失败。 - MIGRATING：迁移中。
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
    *  **参数解释**：资源池ID。 **取值范围**：不涉及。
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
    * @param string|null $poolId **参数解释**：资源池ID。 **取值范围**：不涉及。
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
    *  **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
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
    * @param string|null $type **参数解释**：资源池类型。  **取值范围**：枚举类型，取值如下： - MANAGED：公共池。 - DEDICATED：专属池。
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
    *  **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    *
    * @return string|null
    */
    public function getResourceCategories()
    {
        return $this->container['resourceCategories'];
    }

    /**
    * Sets resourceCategories
    *
    * @param string|null $resourceCategories **参数解释**：资源类别。 **取值范围**：枚举类型，取值如下： - GPU - CPU - ASCEND
    *
    * @return $this
    */
    public function setResourceCategories($resourceCategories)
    {
        $this->container['resourceCategories'] = $resourceCategories;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
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
    *  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
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
    * @param string|null $projectId **参数解释**：用户项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**：账号ID。 **取值范围**：不涉及。
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
    * @param string|null $domainId **参数解释**：账号ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets flavors
    *  **参数解释**：资源池规格。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Flavor[]|null
    */
    public function getFlavors()
    {
        return $this->container['flavors'];
    }

    /**
    * Sets flavors
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Flavor[]|null $flavors **参数解释**：资源池规格。
    *
    * @return $this
    */
    public function setFlavors($flavors)
    {
        $this->container['flavors'] = $flavors;
        return $this;
    }

    /**
    * Gets isAllowRoot
    *  **参数解释**：资源池是否允许实例以root启动。
    *
    * @return bool|null
    */
    public function getIsAllowRoot()
    {
        return $this->container['isAllowRoot'];
    }

    /**
    * Sets isAllowRoot
    *
    * @param bool|null $isAllowRoot **参数解释**：资源池是否允许实例以root启动。
    *
    * @return $this
    */
    public function setIsAllowRoot($isAllowRoot)
    {
        $this->container['isAllowRoot'] = $isAllowRoot;
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

