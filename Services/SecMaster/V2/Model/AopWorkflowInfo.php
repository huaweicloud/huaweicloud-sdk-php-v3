<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AopWorkflowInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AopWorkflowInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  流程ID
    * name  流程名称
    * description  描述
    * projectId  租户ID
    * ownerId  所有者ID
    * creatorId  创建者ID
    * editRole  编辑角色
    * useRole  是用角色
    * approveRole  审核人
    * enabled  是否已启用
    * workspaceId  工作空间ID
    * versionId  流程版本ID
    * currentApprovalVersionId  当前待审核版本号
    * currentRejectedVersoinId  当前拒绝的版本号
    * aopType  aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    * engineType  引擎的类型分为共享版和专项版
    * dataclassId  数据类的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'ownerId' => 'string',
            'creatorId' => 'string',
            'editRole' => 'string',
            'useRole' => 'string',
            'approveRole' => 'string',
            'enabled' => 'bool',
            'workspaceId' => 'string',
            'versionId' => 'string',
            'currentApprovalVersionId' => 'string',
            'currentRejectedVersoinId' => 'string',
            'aopType' => 'string',
            'engineType' => 'string',
            'dataclassId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  流程ID
    * name  流程名称
    * description  描述
    * projectId  租户ID
    * ownerId  所有者ID
    * creatorId  创建者ID
    * editRole  编辑角色
    * useRole  是用角色
    * approveRole  审核人
    * enabled  是否已启用
    * workspaceId  工作空间ID
    * versionId  流程版本ID
    * currentApprovalVersionId  当前待审核版本号
    * currentRejectedVersoinId  当前拒绝的版本号
    * aopType  aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    * engineType  引擎的类型分为共享版和专项版
    * dataclassId  数据类的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'projectId' => null,
        'ownerId' => null,
        'creatorId' => null,
        'editRole' => null,
        'useRole' => null,
        'approveRole' => null,
        'enabled' => null,
        'workspaceId' => null,
        'versionId' => null,
        'currentApprovalVersionId' => null,
        'currentRejectedVersoinId' => null,
        'aopType' => null,
        'engineType' => null,
        'dataclassId' => null
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
    * id  流程ID
    * name  流程名称
    * description  描述
    * projectId  租户ID
    * ownerId  所有者ID
    * creatorId  创建者ID
    * editRole  编辑角色
    * useRole  是用角色
    * approveRole  审核人
    * enabled  是否已启用
    * workspaceId  工作空间ID
    * versionId  流程版本ID
    * currentApprovalVersionId  当前待审核版本号
    * currentRejectedVersoinId  当前拒绝的版本号
    * aopType  aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    * engineType  引擎的类型分为共享版和专项版
    * dataclassId  数据类的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'ownerId' => 'owner_id',
            'creatorId' => 'creator_id',
            'editRole' => 'edit_role',
            'useRole' => 'use_role',
            'approveRole' => 'approve_role',
            'enabled' => 'enabled',
            'workspaceId' => 'workspace_id',
            'versionId' => 'version_id',
            'currentApprovalVersionId' => 'current_approval_version_id',
            'currentRejectedVersoinId' => 'current_rejected_versoin_id',
            'aopType' => 'aop_type',
            'engineType' => 'engine_type',
            'dataclassId' => 'dataclass_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  流程ID
    * name  流程名称
    * description  描述
    * projectId  租户ID
    * ownerId  所有者ID
    * creatorId  创建者ID
    * editRole  编辑角色
    * useRole  是用角色
    * approveRole  审核人
    * enabled  是否已启用
    * workspaceId  工作空间ID
    * versionId  流程版本ID
    * currentApprovalVersionId  当前待审核版本号
    * currentRejectedVersoinId  当前拒绝的版本号
    * aopType  aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    * engineType  引擎的类型分为共享版和专项版
    * dataclassId  数据类的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'ownerId' => 'setOwnerId',
            'creatorId' => 'setCreatorId',
            'editRole' => 'setEditRole',
            'useRole' => 'setUseRole',
            'approveRole' => 'setApproveRole',
            'enabled' => 'setEnabled',
            'workspaceId' => 'setWorkspaceId',
            'versionId' => 'setVersionId',
            'currentApprovalVersionId' => 'setCurrentApprovalVersionId',
            'currentRejectedVersoinId' => 'setCurrentRejectedVersoinId',
            'aopType' => 'setAopType',
            'engineType' => 'setEngineType',
            'dataclassId' => 'setDataclassId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  流程ID
    * name  流程名称
    * description  描述
    * projectId  租户ID
    * ownerId  所有者ID
    * creatorId  创建者ID
    * editRole  编辑角色
    * useRole  是用角色
    * approveRole  审核人
    * enabled  是否已启用
    * workspaceId  工作空间ID
    * versionId  流程版本ID
    * currentApprovalVersionId  当前待审核版本号
    * currentRejectedVersoinId  当前拒绝的版本号
    * aopType  aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    * engineType  引擎的类型分为共享版和专项版
    * dataclassId  数据类的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'ownerId' => 'getOwnerId',
            'creatorId' => 'getCreatorId',
            'editRole' => 'getEditRole',
            'useRole' => 'getUseRole',
            'approveRole' => 'getApproveRole',
            'enabled' => 'getEnabled',
            'workspaceId' => 'getWorkspaceId',
            'versionId' => 'getVersionId',
            'currentApprovalVersionId' => 'getCurrentApprovalVersionId',
            'currentRejectedVersoinId' => 'getCurrentRejectedVersoinId',
            'aopType' => 'getAopType',
            'engineType' => 'getEngineType',
            'dataclassId' => 'getDataclassId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['editRole'] = isset($data['editRole']) ? $data['editRole'] : null;
        $this->container['useRole'] = isset($data['useRole']) ? $data['useRole'] : null;
        $this->container['approveRole'] = isset($data['approveRole']) ? $data['approveRole'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['currentApprovalVersionId'] = isset($data['currentApprovalVersionId']) ? $data['currentApprovalVersionId'] : null;
        $this->container['currentRejectedVersoinId'] = isset($data['currentRejectedVersoinId']) ? $data['currentRejectedVersoinId'] : null;
        $this->container['aopType'] = isset($data['aopType']) ? $data['aopType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
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
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) < 32)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['editRole']) && (mb_strlen($this->container['editRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'editRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['editRole']) && (mb_strlen($this->container['editRole']) < 32)) {
                $invalidProperties[] = "invalid value for 'editRole', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['useRole']) && (mb_strlen($this->container['useRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'useRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['useRole']) && (mb_strlen($this->container['useRole']) < 32)) {
                $invalidProperties[] = "invalid value for 'useRole', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['approveRole']) && (mb_strlen($this->container['approveRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'approveRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['approveRole']) && (mb_strlen($this->container['approveRole']) < 32)) {
                $invalidProperties[] = "invalid value for 'approveRole', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['currentApprovalVersionId']) && (mb_strlen($this->container['currentApprovalVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentApprovalVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentApprovalVersionId']) && (mb_strlen($this->container['currentApprovalVersionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentApprovalVersionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentRejectedVersoinId']) && (mb_strlen($this->container['currentRejectedVersoinId']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentRejectedVersoinId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentRejectedVersoinId']) && (mb_strlen($this->container['currentRejectedVersoinId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentRejectedVersoinId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) < 1)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineType']) && (mb_strlen($this->container['engineType']) > 64)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['engineType']) && (mb_strlen($this->container['engineType']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 1.";
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
    *  流程ID
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
    * @param string|null $id 流程ID
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
    *  流程名称
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
    * @param string|null $name 流程名称
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
    * Gets projectId
    *  租户ID
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
    * @param string|null $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets creatorId
    *  创建者ID
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets editRole
    *  编辑角色
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
    * @param string|null $editRole 编辑角色
    *
    * @return $this
    */
    public function setEditRole($editRole)
    {
        $this->container['editRole'] = $editRole;
        return $this;
    }

    /**
    * Gets useRole
    *  是用角色
    *
    * @return string|null
    */
    public function getUseRole()
    {
        return $this->container['useRole'];
    }

    /**
    * Sets useRole
    *
    * @param string|null $useRole 是用角色
    *
    * @return $this
    */
    public function setUseRole($useRole)
    {
        $this->container['useRole'] = $useRole;
        return $this;
    }

    /**
    * Gets approveRole
    *  审核人
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
    * @param string|null $approveRole 审核人
    *
    * @return $this
    */
    public function setApproveRole($approveRole)
    {
        $this->container['approveRole'] = $approveRole;
        return $this;
    }

    /**
    * Gets enabled
    *  是否已启用
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
    * @param bool|null $enabled 是否已启用
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
    * Gets versionId
    *  流程版本ID
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
    * @param string|null $versionId 流程版本ID
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets currentApprovalVersionId
    *  当前待审核版本号
    *
    * @return string|null
    */
    public function getCurrentApprovalVersionId()
    {
        return $this->container['currentApprovalVersionId'];
    }

    /**
    * Sets currentApprovalVersionId
    *
    * @param string|null $currentApprovalVersionId 当前待审核版本号
    *
    * @return $this
    */
    public function setCurrentApprovalVersionId($currentApprovalVersionId)
    {
        $this->container['currentApprovalVersionId'] = $currentApprovalVersionId;
        return $this;
    }

    /**
    * Gets currentRejectedVersoinId
    *  当前拒绝的版本号
    *
    * @return string|null
    */
    public function getCurrentRejectedVersoinId()
    {
        return $this->container['currentRejectedVersoinId'];
    }

    /**
    * Sets currentRejectedVersoinId
    *
    * @param string|null $currentRejectedVersoinId 当前拒绝的版本号
    *
    * @return $this
    */
    public function setCurrentRejectedVersoinId($currentRejectedVersoinId)
    {
        $this->container['currentRejectedVersoinId'] = $currentRejectedVersoinId;
        return $this;
    }

    /**
    * Gets aopType
    *  aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    *
    * @return string|null
    */
    public function getAopType()
    {
        return $this->container['aopType'];
    }

    /**
    * Sets aopType
    *
    * @param string|null $aopType aop的类型有以下的值     NORMAL, 通用     SURVEY, 调查     HEMOSTASIS,止血     EASE;缓解
    *
    * @return $this
    */
    public function setAopType($aopType)
    {
        $this->container['aopType'] = $aopType;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎的类型分为共享版和专项版
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎的类型分为共享版和专项版
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类的ID
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
    * @param string|null $dataclassId 数据类的ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
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

