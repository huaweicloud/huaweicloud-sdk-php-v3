<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlaybookInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlaybookInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  剧本ID
    * name  剧本名称
    * description  描述信息
    * createTime  剧本创建时间
    * updateTime  剧本更新时间
    * projectId  项目ID
    * versionId  剧本版本ID
    * enabled  是否启用
    * workspaceId  工作空间ID
    * approveRole  审核用户角色
    * userRole  用户角色
    * editRole  编辑用户角色
    * ownerId  所有者ID
    * version  版本号
    * dataclassName  数据类名称
    * dataclassId  数据类ID
    * unauditedVersionId  待审核剧本版本ID
    * rejectVersionId  已驳回剧本版本ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'projectId' => 'string',
            'versionId' => 'string',
            'enabled' => 'bool',
            'workspaceId' => 'string',
            'approveRole' => 'string',
            'userRole' => 'string',
            'editRole' => 'string',
            'ownerId' => 'string',
            'version' => 'string',
            'dataclassName' => 'string',
            'dataclassId' => 'string',
            'unauditedVersionId' => 'string',
            'rejectVersionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  剧本ID
    * name  剧本名称
    * description  描述信息
    * createTime  剧本创建时间
    * updateTime  剧本更新时间
    * projectId  项目ID
    * versionId  剧本版本ID
    * enabled  是否启用
    * workspaceId  工作空间ID
    * approveRole  审核用户角色
    * userRole  用户角色
    * editRole  编辑用户角色
    * ownerId  所有者ID
    * version  版本号
    * dataclassName  数据类名称
    * dataclassId  数据类ID
    * unauditedVersionId  待审核剧本版本ID
    * rejectVersionId  已驳回剧本版本ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'createTime' => null,
        'updateTime' => null,
        'projectId' => null,
        'versionId' => null,
        'enabled' => null,
        'workspaceId' => null,
        'approveRole' => null,
        'userRole' => null,
        'editRole' => null,
        'ownerId' => null,
        'version' => null,
        'dataclassName' => null,
        'dataclassId' => null,
        'unauditedVersionId' => null,
        'rejectVersionId' => null
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
    * id  剧本ID
    * name  剧本名称
    * description  描述信息
    * createTime  剧本创建时间
    * updateTime  剧本更新时间
    * projectId  项目ID
    * versionId  剧本版本ID
    * enabled  是否启用
    * workspaceId  工作空间ID
    * approveRole  审核用户角色
    * userRole  用户角色
    * editRole  编辑用户角色
    * ownerId  所有者ID
    * version  版本号
    * dataclassName  数据类名称
    * dataclassId  数据类ID
    * unauditedVersionId  待审核剧本版本ID
    * rejectVersionId  已驳回剧本版本ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'projectId' => 'project_id',
            'versionId' => 'version_id',
            'enabled' => 'enabled',
            'workspaceId' => 'workspace_id',
            'approveRole' => 'approve_role',
            'userRole' => 'user_role',
            'editRole' => 'edit_role',
            'ownerId' => 'owner_id',
            'version' => 'version',
            'dataclassName' => 'dataclass_name',
            'dataclassId' => 'dataclass_id',
            'unauditedVersionId' => 'unaudited_version_id',
            'rejectVersionId' => 'reject_version_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  剧本ID
    * name  剧本名称
    * description  描述信息
    * createTime  剧本创建时间
    * updateTime  剧本更新时间
    * projectId  项目ID
    * versionId  剧本版本ID
    * enabled  是否启用
    * workspaceId  工作空间ID
    * approveRole  审核用户角色
    * userRole  用户角色
    * editRole  编辑用户角色
    * ownerId  所有者ID
    * version  版本号
    * dataclassName  数据类名称
    * dataclassId  数据类ID
    * unauditedVersionId  待审核剧本版本ID
    * rejectVersionId  已驳回剧本版本ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'projectId' => 'setProjectId',
            'versionId' => 'setVersionId',
            'enabled' => 'setEnabled',
            'workspaceId' => 'setWorkspaceId',
            'approveRole' => 'setApproveRole',
            'userRole' => 'setUserRole',
            'editRole' => 'setEditRole',
            'ownerId' => 'setOwnerId',
            'version' => 'setVersion',
            'dataclassName' => 'setDataclassName',
            'dataclassId' => 'setDataclassId',
            'unauditedVersionId' => 'setUnauditedVersionId',
            'rejectVersionId' => 'setRejectVersionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  剧本ID
    * name  剧本名称
    * description  描述信息
    * createTime  剧本创建时间
    * updateTime  剧本更新时间
    * projectId  项目ID
    * versionId  剧本版本ID
    * enabled  是否启用
    * workspaceId  工作空间ID
    * approveRole  审核用户角色
    * userRole  用户角色
    * editRole  编辑用户角色
    * ownerId  所有者ID
    * version  版本号
    * dataclassName  数据类名称
    * dataclassId  数据类ID
    * unauditedVersionId  待审核剧本版本ID
    * rejectVersionId  已驳回剧本版本ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'projectId' => 'getProjectId',
            'versionId' => 'getVersionId',
            'enabled' => 'getEnabled',
            'workspaceId' => 'getWorkspaceId',
            'approveRole' => 'getApproveRole',
            'userRole' => 'getUserRole',
            'editRole' => 'getEditRole',
            'ownerId' => 'getOwnerId',
            'version' => 'getVersion',
            'dataclassName' => 'getDataclassName',
            'dataclassId' => 'getDataclassId',
            'unauditedVersionId' => 'getUnauditedVersionId',
            'rejectVersionId' => 'getRejectVersionId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['approveRole'] = isset($data['approveRole']) ? $data['approveRole'] : null;
        $this->container['userRole'] = isset($data['userRole']) ? $data['userRole'] : null;
        $this->container['editRole'] = isset($data['editRole']) ? $data['editRole'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['unauditedVersionId'] = isset($data['unauditedVersionId']) ? $data['unauditedVersionId'] : null;
        $this->container['rejectVersionId'] = isset($data['rejectVersionId']) ? $data['rejectVersionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['approveRole']) && (mb_strlen($this->container['approveRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'approveRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['approveRole']) && (mb_strlen($this->container['approveRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'approveRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userRole']) && (mb_strlen($this->container['userRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'userRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userRole']) && (mb_strlen($this->container['userRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'userRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['editRole']) && (mb_strlen($this->container['editRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'editRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['editRole']) && (mb_strlen($this->container['editRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'editRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) < 32)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unauditedVersionId']) && (mb_strlen($this->container['unauditedVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'unauditedVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['unauditedVersionId']) && (mb_strlen($this->container['unauditedVersionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'unauditedVersionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rejectVersionId']) && (mb_strlen($this->container['rejectVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'rejectVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['rejectVersionId']) && (mb_strlen($this->container['rejectVersionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'rejectVersionId', the character length must be bigger than or equal to 1.";
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
    *  剧本ID
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
    * @param string|null $id 剧本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  剧本名称
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
    * @param string|null $name 剧本名称
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
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  剧本创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 剧本创建时间
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
    *  剧本更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 剧本更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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
    * Gets versionId
    *  剧本版本ID
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 剧本版本ID
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
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
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets approveRole
    *  审核用户角色
    *
    * @return string|null
    */
    public function getApproveRole()
    {
        return $this->container['approveRole'];
    }

    /**
    * Sets approveRole
    *
    * @param string|null $approveRole 审核用户角色
    *
    * @return $this
    */
    public function setApproveRole($approveRole)
    {
        $this->container['approveRole'] = $approveRole;
        return $this;
    }

    /**
    * Gets userRole
    *  用户角色
    *
    * @return string|null
    */
    public function getUserRole()
    {
        return $this->container['userRole'];
    }

    /**
    * Sets userRole
    *
    * @param string|null $userRole 用户角色
    *
    * @return $this
    */
    public function setUserRole($userRole)
    {
        $this->container['userRole'] = $userRole;
        return $this;
    }

    /**
    * Gets editRole
    *  编辑用户角色
    *
    * @return string|null
    */
    public function getEditRole()
    {
        return $this->container['editRole'];
    }

    /**
    * Sets editRole
    *
    * @param string|null $editRole 编辑用户角色
    *
    * @return $this
    */
    public function setEditRole($editRole)
    {
        $this->container['editRole'] = $editRole;
        return $this;
    }

    /**
    * Gets ownerId
    *  所有者ID
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 所有者ID
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets version
    *  版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类ID
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 数据类ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets unauditedVersionId
    *  待审核剧本版本ID
    *
    * @return string|null
    */
    public function getUnauditedVersionId()
    {
        return $this->container['unauditedVersionId'];
    }

    /**
    * Sets unauditedVersionId
    *
    * @param string|null $unauditedVersionId 待审核剧本版本ID
    *
    * @return $this
    */
    public function setUnauditedVersionId($unauditedVersionId)
    {
        $this->container['unauditedVersionId'] = $unauditedVersionId;
        return $this;
    }

    /**
    * Gets rejectVersionId
    *  已驳回剧本版本ID
    *
    * @return string|null
    */
    public function getRejectVersionId()
    {
        return $this->container['rejectVersionId'];
    }

    /**
    * Sets rejectVersionId
    *
    * @param string|null $rejectVersionId 已驳回剧本版本ID
    *
    * @return $this
    */
    public function setRejectVersionId($rejectVersionId)
    {
        $this->container['rejectVersionId'] = $rejectVersionId;
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

