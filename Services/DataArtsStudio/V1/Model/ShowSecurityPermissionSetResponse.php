<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityPermissionSetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityPermissionSetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号
    * parentId  父权限集id
    * name  名称
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * projectId  项目id
    * domainId  租户id
    * instanceId  实例id
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型
    * datasourceType  数据源类型
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * syncTime  同步时间
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parentId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'managedClusterId' => 'string',
            'managedClusterName' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'instanceId' => 'string',
            'managerId' => 'string',
            'managerName' => 'string',
            'managerType' => 'string',
            'datasourceType' => 'string',
            'syncStatus' => 'string',
            'syncMsg' => 'string',
            'syncTime' => 'int',
            'createTime' => 'int',
            'createUser' => 'string',
            'updateTime' => 'int',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号
    * parentId  父权限集id
    * name  名称
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * projectId  项目id
    * domainId  租户id
    * instanceId  实例id
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型
    * datasourceType  数据源类型
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * syncTime  同步时间
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parentId' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'managedClusterId' => null,
        'managedClusterName' => null,
        'projectId' => null,
        'domainId' => null,
        'instanceId' => null,
        'managerId' => null,
        'managerName' => null,
        'managerType' => null,
        'datasourceType' => null,
        'syncStatus' => null,
        'syncMsg' => null,
        'syncTime' => 'int64',
        'createTime' => 'int64',
        'createUser' => null,
        'updateTime' => 'int64',
        'updateUser' => null
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
    * id  编号
    * parentId  父权限集id
    * name  名称
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * projectId  项目id
    * domainId  租户id
    * instanceId  实例id
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型
    * datasourceType  数据源类型
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * syncTime  同步时间
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parentId' => 'parent_id',
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'managedClusterId' => 'managed_cluster_id',
            'managedClusterName' => 'managed_cluster_name',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'instanceId' => 'instance_id',
            'managerId' => 'manager_id',
            'managerName' => 'manager_name',
            'managerType' => 'manager_type',
            'datasourceType' => 'datasource_type',
            'syncStatus' => 'sync_status',
            'syncMsg' => 'sync_msg',
            'syncTime' => 'sync_time',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号
    * parentId  父权限集id
    * name  名称
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * projectId  项目id
    * domainId  租户id
    * instanceId  实例id
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型
    * datasourceType  数据源类型
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * syncTime  同步时间
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parentId' => 'setParentId',
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'managedClusterId' => 'setManagedClusterId',
            'managedClusterName' => 'setManagedClusterName',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'instanceId' => 'setInstanceId',
            'managerId' => 'setManagerId',
            'managerName' => 'setManagerName',
            'managerType' => 'setManagerType',
            'datasourceType' => 'setDatasourceType',
            'syncStatus' => 'setSyncStatus',
            'syncMsg' => 'setSyncMsg',
            'syncTime' => 'setSyncTime',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号
    * parentId  父权限集id
    * name  名称
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * projectId  项目id
    * domainId  租户id
    * instanceId  实例id
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型
    * datasourceType  数据源类型
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * syncTime  同步时间
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parentId' => 'getParentId',
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'managedClusterId' => 'getManagedClusterId',
            'managedClusterName' => 'getManagedClusterName',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'instanceId' => 'getInstanceId',
            'managerId' => 'getManagerId',
            'managerName' => 'getManagerName',
            'managerType' => 'getManagerType',
            'datasourceType' => 'getDatasourceType',
            'syncStatus' => 'getSyncStatus',
            'syncMsg' => 'getSyncMsg',
            'syncTime' => 'getSyncTime',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser'
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
    const TYPE_COMMON = 'COMMON';
    const TYPE_MRS_MANAGED = 'MRS_MANAGED';
    const SYNC_STATUS_UNKNOWN = 'UNKNOWN';
    const SYNC_STATUS_NOT_SYNC = 'NOT_SYNC';
    const SYNC_STATUS_SYNCING = 'SYNCING';
    const SYNC_STATUS_SYNC_SUCCESS = 'SYNC_SUCCESS';
    const SYNC_STATUS_SYNC_FAIL = 'SYNC_FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMMON,
            self::TYPE_MRS_MANAGED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncStatusAllowableValues()
    {
        return [
            self::SYNC_STATUS_UNKNOWN,
            self::SYNC_STATUS_NOT_SYNC,
            self::SYNC_STATUS_SYNCING,
            self::SYNC_STATUS_SYNC_SUCCESS,
            self::SYNC_STATUS_SYNC_FAIL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['managedClusterId'] = isset($data['managedClusterId']) ? $data['managedClusterId'] : null;
        $this->container['managedClusterName'] = isset($data['managedClusterName']) ? $data['managedClusterName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['managerId'] = isset($data['managerId']) ? $data['managerId'] : null;
        $this->container['managerName'] = isset($data['managerName']) ? $data['managerName'] : null;
        $this->container['managerType'] = isset($data['managerType']) ? $data['managerType'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['syncMsg'] = isset($data['syncMsg']) ? $data['syncMsg'] : null;
        $this->container['syncTime'] = isset($data['syncTime']) ? $data['syncTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['managedClusterId']) && (mb_strlen($this->container['managedClusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedClusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedClusterId']) && (mb_strlen($this->container['managedClusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedClusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managedClusterName']) && (mb_strlen($this->container['managedClusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedClusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedClusterName']) && (mb_strlen($this->container['managedClusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedClusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerType']) && (mb_strlen($this->container['managerType']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerType']) && (mb_strlen($this->container['managerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['syncMsg']) && (mb_strlen($this->container['syncMsg']) > 10240)) {
                $invalidProperties[] = "invalid value for 'syncMsg', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['syncMsg']) && (mb_strlen($this->container['syncMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'syncMsg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['syncTime']) && ($this->container['syncTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'syncTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['syncTime']) && ($this->container['syncTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'syncTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  编号
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
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  父权限集id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父权限集id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
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
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  权限集类型, COMMON, MRS_MANAGED
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
    * @param string|null $type 权限集类型, COMMON, MRS_MANAGED
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets managedClusterId
    *  纳管角色所在集群id（仅纳管类权限集需要）
    *
    * @return string|null
    */
    public function getManagedClusterId()
    {
        return $this->container['managedClusterId'];
    }

    /**
    * Sets managedClusterId
    *
    * @param string|null $managedClusterId 纳管角色所在集群id（仅纳管类权限集需要）
    *
    * @return $this
    */
    public function setManagedClusterId($managedClusterId)
    {
        $this->container['managedClusterId'] = $managedClusterId;
        return $this;
    }

    /**
    * Gets managedClusterName
    *  纳管角色所在集群名称（仅纳管类权限集需要）
    *
    * @return string|null
    */
    public function getManagedClusterName()
    {
        return $this->container['managedClusterName'];
    }

    /**
    * Sets managedClusterName
    *
    * @param string|null $managedClusterName 纳管角色所在集群名称（仅纳管类权限集需要）
    *
    * @return $this
    */
    public function setManagedClusterName($managedClusterName)
    {
        $this->container['managedClusterName'] = $managedClusterName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
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
    *  租户id
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
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets managerId
    *  管理员id
    *
    * @return string|null
    */
    public function getManagerId()
    {
        return $this->container['managerId'];
    }

    /**
    * Sets managerId
    *
    * @param string|null $managerId 管理员id
    *
    * @return $this
    */
    public function setManagerId($managerId)
    {
        $this->container['managerId'] = $managerId;
        return $this;
    }

    /**
    * Gets managerName
    *  管理员名称
    *
    * @return string|null
    */
    public function getManagerName()
    {
        return $this->container['managerName'];
    }

    /**
    * Sets managerName
    *
    * @param string|null $managerName 管理员名称
    *
    * @return $this
    */
    public function setManagerName($managerName)
    {
        $this->container['managerName'] = $managerName;
        return $this;
    }

    /**
    * Gets managerType
    *  管理员类型
    *
    * @return string|null
    */
    public function getManagerType()
    {
        return $this->container['managerType'];
    }

    /**
    * Sets managerType
    *
    * @param string|null $managerType 管理员类型
    *
    * @return $this
    */
    public function setManagerType($managerType)
    {
        $this->container['managerType'] = $managerType;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets syncStatus
    *  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    *
    * @return string|null
    */
    public function getSyncStatus()
    {
        return $this->container['syncStatus'];
    }

    /**
    * Sets syncStatus
    *
    * @param string|null $syncStatus 同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    *
    * @return $this
    */
    public function setSyncStatus($syncStatus)
    {
        $this->container['syncStatus'] = $syncStatus;
        return $this;
    }

    /**
    * Gets syncMsg
    *  同步信息
    *
    * @return string|null
    */
    public function getSyncMsg()
    {
        return $this->container['syncMsg'];
    }

    /**
    * Sets syncMsg
    *
    * @param string|null $syncMsg 同步信息
    *
    * @return $this
    */
    public function setSyncMsg($syncMsg)
    {
        $this->container['syncMsg'] = $syncMsg;
        return $this;
    }

    /**
    * Gets syncTime
    *  同步时间
    *
    * @return int|null
    */
    public function getSyncTime()
    {
        return $this->container['syncTime'];
    }

    /**
    * Sets syncTime
    *
    * @param int|null $syncTime 同步时间
    *
    * @return $this
    */
    public function setSyncTime($syncTime)
    {
        $this->container['syncTime'] = $syncTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新者
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新者
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

