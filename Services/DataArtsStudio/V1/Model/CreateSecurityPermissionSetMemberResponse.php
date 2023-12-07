<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecurityPermissionSetMemberResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecurityPermissionSetMemberResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * memberType  成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    * memberId  成员id
    * memberName  成员名称
    * memberStatus  成员状态, NORMAL, UNFINISHED
    * workspace  工作空间(仅工作空间角色需要)
    * clusterType  集群类型(仅集群角色需要), MRS, DWS, DLI
    * clusterId  集群id(仅集群角色需要)
    * clusterName  集群名称(仅集群角色需要)
    * createTime  创建时间
    * createUser  创建者
    * deadline  到期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'permissionSetId' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'memberType' => 'string',
            'memberId' => 'string',
            'memberName' => 'string',
            'memberStatus' => 'string',
            'workspace' => 'string',
            'clusterType' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'createTime' => 'int',
            'createUser' => 'string',
            'deadline' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * memberType  成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    * memberId  成员id
    * memberName  成员名称
    * memberStatus  成员状态, NORMAL, UNFINISHED
    * workspace  工作空间(仅工作空间角色需要)
    * clusterType  集群类型(仅集群角色需要), MRS, DWS, DLI
    * clusterId  集群id(仅集群角色需要)
    * clusterName  集群名称(仅集群角色需要)
    * createTime  创建时间
    * createUser  创建者
    * deadline  到期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'permissionSetId' => null,
        'projectId' => null,
        'instanceId' => null,
        'memberType' => null,
        'memberId' => null,
        'memberName' => null,
        'memberStatus' => null,
        'workspace' => null,
        'clusterType' => null,
        'clusterId' => null,
        'clusterName' => null,
        'createTime' => 'int64',
        'createUser' => null,
        'deadline' => 'int64'
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
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * memberType  成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    * memberId  成员id
    * memberName  成员名称
    * memberStatus  成员状态, NORMAL, UNFINISHED
    * workspace  工作空间(仅工作空间角色需要)
    * clusterType  集群类型(仅集群角色需要), MRS, DWS, DLI
    * clusterId  集群id(仅集群角色需要)
    * clusterName  集群名称(仅集群角色需要)
    * createTime  创建时间
    * createUser  创建者
    * deadline  到期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'permissionSetId' => 'permission_set_id',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'memberType' => 'member_type',
            'memberId' => 'member_id',
            'memberName' => 'member_name',
            'memberStatus' => 'member_status',
            'workspace' => 'workspace',
            'clusterType' => 'cluster_type',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'deadline' => 'deadline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * memberType  成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    * memberId  成员id
    * memberName  成员名称
    * memberStatus  成员状态, NORMAL, UNFINISHED
    * workspace  工作空间(仅工作空间角色需要)
    * clusterType  集群类型(仅集群角色需要), MRS, DWS, DLI
    * clusterId  集群id(仅集群角色需要)
    * clusterName  集群名称(仅集群角色需要)
    * createTime  创建时间
    * createUser  创建者
    * deadline  到期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'permissionSetId' => 'setPermissionSetId',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'memberType' => 'setMemberType',
            'memberId' => 'setMemberId',
            'memberName' => 'setMemberName',
            'memberStatus' => 'setMemberStatus',
            'workspace' => 'setWorkspace',
            'clusterType' => 'setClusterType',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'deadline' => 'setDeadline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * memberType  成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    * memberId  成员id
    * memberName  成员名称
    * memberStatus  成员状态, NORMAL, UNFINISHED
    * workspace  工作空间(仅工作空间角色需要)
    * clusterType  集群类型(仅集群角色需要), MRS, DWS, DLI
    * clusterId  集群id(仅集群角色需要)
    * clusterName  集群名称(仅集群角色需要)
    * createTime  创建时间
    * createUser  创建者
    * deadline  到期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'permissionSetId' => 'getPermissionSetId',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'memberType' => 'getMemberType',
            'memberId' => 'getMemberId',
            'memberName' => 'getMemberName',
            'memberStatus' => 'getMemberStatus',
            'workspace' => 'getWorkspace',
            'clusterType' => 'getClusterType',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'deadline' => 'getDeadline'
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
    const MEMBER_TYPE_USER = 'USER';
    const MEMBER_TYPE_USER_GROUP = 'USER_GROUP';
    const MEMBER_TYPE_WORKSPACE_ROLE = 'WORKSPACE_ROLE';
    const MEMBER_TYPE_CLUSTER_ROLE = 'CLUSTER_ROLE';
    const MEMBER_STATUS_NORMAL = 'NORMAL';
    const MEMBER_STATUS_UNFINISHED = 'UNFINISHED';
    const CLUSTER_TYPE_MRS = 'MRS';
    const CLUSTER_TYPE_DWS = 'DWS';
    const CLUSTER_TYPE_DLI = 'DLI';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMemberTypeAllowableValues()
    {
        return [
            self::MEMBER_TYPE_USER,
            self::MEMBER_TYPE_USER_GROUP,
            self::MEMBER_TYPE_WORKSPACE_ROLE,
            self::MEMBER_TYPE_CLUSTER_ROLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMemberStatusAllowableValues()
    {
        return [
            self::MEMBER_STATUS_NORMAL,
            self::MEMBER_STATUS_UNFINISHED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_MRS,
            self::CLUSTER_TYPE_DWS,
            self::CLUSTER_TYPE_DLI,
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['memberStatus'] = isset($data['memberStatus']) ? $data['memberStatus'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
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
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMemberTypeAllowableValues();
                if (!is_null($this->container['memberType']) && !in_array($this->container['memberType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMemberStatusAllowableValues();
                if (!is_null($this->container['memberStatus']) && !in_array($this->container['memberStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['deadline']) && ($this->container['deadline'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'deadline', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['deadline']) && ($this->container['deadline'] < 0)) {
                $invalidProperties[] = "invalid value for 'deadline', must be bigger than or equal to 0.";
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  权限集id
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 权限集id
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
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
    * Gets memberType
    *  成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    *
    * @return string|null
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string|null $memberType 成员类型, 用户/用户组/工作空间角色(废弃)/集群角色, USER, USER_GROUP, WORKSPACE_ROLE, CLUSTER_ROLE
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets memberId
    *  成员id
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId 成员id
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
        return $this;
    }

    /**
    * Gets memberName
    *  成员名称
    *
    * @return string|null
    */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
    * Sets memberName
    *
    * @param string|null $memberName 成员名称
    *
    * @return $this
    */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;
        return $this;
    }

    /**
    * Gets memberStatus
    *  成员状态, NORMAL, UNFINISHED
    *
    * @return string|null
    */
    public function getMemberStatus()
    {
        return $this->container['memberStatus'];
    }

    /**
    * Sets memberStatus
    *
    * @param string|null $memberStatus 成员状态, NORMAL, UNFINISHED
    *
    * @return $this
    */
    public function setMemberStatus($memberStatus)
    {
        $this->container['memberStatus'] = $memberStatus;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间(仅工作空间角色需要)
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间(仅工作空间角色需要)
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型(仅集群角色需要), MRS, DWS, DLI
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型(仅集群角色需要), MRS, DWS, DLI
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id(仅集群角色需要)
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id(仅集群角色需要)
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称(仅集群角色需要)
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称(仅集群角色需要)
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
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
    * Gets deadline
    *  到期时间
    *
    * @return int|null
    */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
    * Sets deadline
    *
    * @param int|null $deadline 到期时间
    *
    * @return $this
    */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;
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

