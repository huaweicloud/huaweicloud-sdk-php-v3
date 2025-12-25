<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectRolePermissionDo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectRolePermissionDo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: ID。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色ID。 **取值范围**: 不涉及。
    * devucRoleId  **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * isPermissionConfig  **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    * isChangePkgStatus  **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    * isUpload  **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    * isDeleteRestoreTestPkg  **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    * isDeleteRestoreProdPkg  **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    * isEditTestPkg  **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    * isMkdir  **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    * isDownload  **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    * isRestoreAll  **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    * isEmpty  **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * migrated630  **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * roles  **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'roleId' => 'int',
            'devucRoleId' => 'string',
            'projectId' => 'string',
            'isPermissionConfig' => 'bool',
            'isChangePkgStatus' => 'bool',
            'isUpload' => 'bool',
            'isDeleteRestoreTestPkg' => 'bool',
            'isDeleteRestoreProdPkg' => 'bool',
            'isEditTestPkg' => 'bool',
            'isMkdir' => 'bool',
            'isDownload' => 'bool',
            'isRestoreAll' => 'bool',
            'isEmpty' => 'bool',
            'createTime' => 'int',
            'updateTime' => 'int',
            'migrated630' => 'int',
            'region' => 'string',
            'userId' => 'string',
            'roles' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: ID。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色ID。 **取值范围**: 不涉及。
    * devucRoleId  **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * isPermissionConfig  **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    * isChangePkgStatus  **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    * isUpload  **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    * isDeleteRestoreTestPkg  **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    * isDeleteRestoreProdPkg  **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    * isEditTestPkg  **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    * isMkdir  **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    * isDownload  **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    * isRestoreAll  **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    * isEmpty  **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * migrated630  **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * roles  **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'roleId' => 'int32',
        'devucRoleId' => null,
        'projectId' => null,
        'isPermissionConfig' => null,
        'isChangePkgStatus' => null,
        'isUpload' => null,
        'isDeleteRestoreTestPkg' => null,
        'isDeleteRestoreProdPkg' => null,
        'isEditTestPkg' => null,
        'isMkdir' => null,
        'isDownload' => null,
        'isRestoreAll' => null,
        'isEmpty' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'migrated630' => 'int32',
        'region' => null,
        'userId' => null,
        'roles' => null
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
    * id  **参数解释**: ID。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色ID。 **取值范围**: 不涉及。
    * devucRoleId  **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * isPermissionConfig  **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    * isChangePkgStatus  **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    * isUpload  **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    * isDeleteRestoreTestPkg  **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    * isDeleteRestoreProdPkg  **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    * isEditTestPkg  **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    * isMkdir  **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    * isDownload  **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    * isRestoreAll  **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    * isEmpty  **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * migrated630  **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * roles  **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'roleId' => 'role_id',
            'devucRoleId' => 'devuc_role_id',
            'projectId' => 'project_id',
            'isPermissionConfig' => 'is_permission_config',
            'isChangePkgStatus' => 'is_change_pkg_status',
            'isUpload' => 'is_upload',
            'isDeleteRestoreTestPkg' => 'is_delete_restore_test_pkg',
            'isDeleteRestoreProdPkg' => 'is_delete_restore_prod_pkg',
            'isEditTestPkg' => 'is_edit_test_pkg',
            'isMkdir' => 'is_mkdir',
            'isDownload' => 'is_download',
            'isRestoreAll' => 'is_restore_all',
            'isEmpty' => 'is_empty',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'migrated630' => 'migrated_630',
            'region' => 'region',
            'userId' => 'user_id',
            'roles' => 'roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: ID。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色ID。 **取值范围**: 不涉及。
    * devucRoleId  **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * isPermissionConfig  **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    * isChangePkgStatus  **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    * isUpload  **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    * isDeleteRestoreTestPkg  **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    * isDeleteRestoreProdPkg  **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    * isEditTestPkg  **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    * isMkdir  **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    * isDownload  **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    * isRestoreAll  **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    * isEmpty  **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * migrated630  **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * roles  **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'roleId' => 'setRoleId',
            'devucRoleId' => 'setDevucRoleId',
            'projectId' => 'setProjectId',
            'isPermissionConfig' => 'setIsPermissionConfig',
            'isChangePkgStatus' => 'setIsChangePkgStatus',
            'isUpload' => 'setIsUpload',
            'isDeleteRestoreTestPkg' => 'setIsDeleteRestoreTestPkg',
            'isDeleteRestoreProdPkg' => 'setIsDeleteRestoreProdPkg',
            'isEditTestPkg' => 'setIsEditTestPkg',
            'isMkdir' => 'setIsMkdir',
            'isDownload' => 'setIsDownload',
            'isRestoreAll' => 'setIsRestoreAll',
            'isEmpty' => 'setIsEmpty',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'migrated630' => 'setMigrated630',
            'region' => 'setRegion',
            'userId' => 'setUserId',
            'roles' => 'setRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: ID。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色ID。 **取值范围**: 不涉及。
    * devucRoleId  **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * isPermissionConfig  **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    * isChangePkgStatus  **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    * isUpload  **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    * isDeleteRestoreTestPkg  **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    * isDeleteRestoreProdPkg  **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    * isEditTestPkg  **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    * isMkdir  **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    * isDownload  **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    * isRestoreAll  **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    * isEmpty  **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * migrated630  **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * roles  **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'roleId' => 'getRoleId',
            'devucRoleId' => 'getDevucRoleId',
            'projectId' => 'getProjectId',
            'isPermissionConfig' => 'getIsPermissionConfig',
            'isChangePkgStatus' => 'getIsChangePkgStatus',
            'isUpload' => 'getIsUpload',
            'isDeleteRestoreTestPkg' => 'getIsDeleteRestoreTestPkg',
            'isDeleteRestoreProdPkg' => 'getIsDeleteRestoreProdPkg',
            'isEditTestPkg' => 'getIsEditTestPkg',
            'isMkdir' => 'getIsMkdir',
            'isDownload' => 'getIsDownload',
            'isRestoreAll' => 'getIsRestoreAll',
            'isEmpty' => 'getIsEmpty',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'migrated630' => 'getMigrated630',
            'region' => 'getRegion',
            'userId' => 'getUserId',
            'roles' => 'getRoles'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['devucRoleId'] = isset($data['devucRoleId']) ? $data['devucRoleId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['isPermissionConfig'] = isset($data['isPermissionConfig']) ? $data['isPermissionConfig'] : null;
        $this->container['isChangePkgStatus'] = isset($data['isChangePkgStatus']) ? $data['isChangePkgStatus'] : null;
        $this->container['isUpload'] = isset($data['isUpload']) ? $data['isUpload'] : null;
        $this->container['isDeleteRestoreTestPkg'] = isset($data['isDeleteRestoreTestPkg']) ? $data['isDeleteRestoreTestPkg'] : null;
        $this->container['isDeleteRestoreProdPkg'] = isset($data['isDeleteRestoreProdPkg']) ? $data['isDeleteRestoreProdPkg'] : null;
        $this->container['isEditTestPkg'] = isset($data['isEditTestPkg']) ? $data['isEditTestPkg'] : null;
        $this->container['isMkdir'] = isset($data['isMkdir']) ? $data['isMkdir'] : null;
        $this->container['isDownload'] = isset($data['isDownload']) ? $data['isDownload'] : null;
        $this->container['isRestoreAll'] = isset($data['isRestoreAll']) ? $data['isRestoreAll'] : null;
        $this->container['isEmpty'] = isset($data['isEmpty']) ? $data['isEmpty'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['migrated630'] = isset($data['migrated630']) ? $data['migrated630'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
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
    * Gets id
    *  **参数解释**: ID。 **取值范围**: 不涉及。
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
    * @param string|null $id **参数解释**: ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets roleId
    *  **参数解释**: 角色ID。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param int|null $roleId **参数解释**: 角色ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets devucRoleId
    *  **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDevucRoleId()
    {
        return $this->container['devucRoleId'];
    }

    /**
    * Sets devucRoleId
    *
    * @param string|null $devucRoleId **参数解释**: DEVUC角色ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDevucRoleId($devucRoleId)
    {
        $this->container['devucRoleId'] = $devucRoleId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**: 项目ID。 **取值范围**: 不涉及。
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
    * @param string|null $projectId **参数解释**: 项目ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets isPermissionConfig
    *  **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    *
    * @return bool|null
    */
    public function getIsPermissionConfig()
    {
        return $this->container['isPermissionConfig'];
    }

    /**
    * Sets isPermissionConfig
    *
    * @param bool|null $isPermissionConfig **参数解释**: 是否具有权限配置能力。 **取值范围**: - true：能够配置权限。 - false：不能配置权限。
    *
    * @return $this
    */
    public function setIsPermissionConfig($isPermissionConfig)
    {
        $this->container['isPermissionConfig'] = $isPermissionConfig;
        return $this;
    }

    /**
    * Gets isChangePkgStatus
    *  **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    *
    * @return bool|null
    */
    public function getIsChangePkgStatus()
    {
        return $this->container['isChangePkgStatus'];
    }

    /**
    * Sets isChangePkgStatus
    *
    * @param bool|null $isChangePkgStatus **参数解释**: 能否更改软件包状态。 **取值范围**: - true：能够更改软件包状态。 - false：不能更改软件包状态。
    *
    * @return $this
    */
    public function setIsChangePkgStatus($isChangePkgStatus)
    {
        $this->container['isChangePkgStatus'] = $isChangePkgStatus;
        return $this;
    }

    /**
    * Gets isUpload
    *  **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    *
    * @return bool|null
    */
    public function getIsUpload()
    {
        return $this->container['isUpload'];
    }

    /**
    * Sets isUpload
    *
    * @param bool|null $isUpload **参数解释**: 能否进行上传。 **取值范围**: - true：能够进行上传。 - false：不能上传。
    *
    * @return $this
    */
    public function setIsUpload($isUpload)
    {
        $this->container['isUpload'] = $isUpload;
        return $this;
    }

    /**
    * Gets isDeleteRestoreTestPkg
    *  **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    *
    * @return bool|null
    */
    public function getIsDeleteRestoreTestPkg()
    {
        return $this->container['isDeleteRestoreTestPkg'];
    }

    /**
    * Sets isDeleteRestoreTestPkg
    *
    * @param bool|null $isDeleteRestoreTestPkg **参数解释**: 能否删除和还原测试状态的软件包。 **取值范围**: - true：能够删除和还原测试状态的软件包。 - false：不能删除和还原测试状态的软件包。
    *
    * @return $this
    */
    public function setIsDeleteRestoreTestPkg($isDeleteRestoreTestPkg)
    {
        $this->container['isDeleteRestoreTestPkg'] = $isDeleteRestoreTestPkg;
        return $this;
    }

    /**
    * Gets isDeleteRestoreProdPkg
    *  **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    *
    * @return bool|null
    */
    public function getIsDeleteRestoreProdPkg()
    {
        return $this->container['isDeleteRestoreProdPkg'];
    }

    /**
    * Sets isDeleteRestoreProdPkg
    *
    * @param bool|null $isDeleteRestoreProdPkg **参数解释**: 能否删除和还原生产状态的软件包。 **取值范围**: - true：能够删除和还原生产状态的软件包。 - false：不能删除和还原生产状态的软件包。
    *
    * @return $this
    */
    public function setIsDeleteRestoreProdPkg($isDeleteRestoreProdPkg)
    {
        $this->container['isDeleteRestoreProdPkg'] = $isDeleteRestoreProdPkg;
        return $this;
    }

    /**
    * Gets isEditTestPkg
    *  **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    *
    * @return bool|null
    */
    public function getIsEditTestPkg()
    {
        return $this->container['isEditTestPkg'];
    }

    /**
    * Sets isEditTestPkg
    *
    * @param bool|null $isEditTestPkg **参数解释**: 能否编辑测试状态的软件包。 **取值范围**: - true：能够编辑测试状态的软件包。 - false：不能编辑测试状态的软件包。
    *
    * @return $this
    */
    public function setIsEditTestPkg($isEditTestPkg)
    {
        $this->container['isEditTestPkg'] = $isEditTestPkg;
        return $this;
    }

    /**
    * Gets isMkdir
    *  **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    *
    * @return bool|null
    */
    public function getIsMkdir()
    {
        return $this->container['isMkdir'];
    }

    /**
    * Sets isMkdir
    *
    * @param bool|null $isMkdir **参数解释**: 能否创建文件夹。 **取值范围**: - true：能够创建目录。 - false：不能创建目录。
    *
    * @return $this
    */
    public function setIsMkdir($isMkdir)
    {
        $this->container['isMkdir'] = $isMkdir;
        return $this;
    }

    /**
    * Gets isDownload
    *  **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    *
    * @return bool|null
    */
    public function getIsDownload()
    {
        return $this->container['isDownload'];
    }

    /**
    * Sets isDownload
    *
    * @param bool|null $isDownload **参数解释**: 能否进行下载。 **取值范围**: - true：能够下载。 - false：不能下载。
    *
    * @return $this
    */
    public function setIsDownload($isDownload)
    {
        $this->container['isDownload'] = $isDownload;
        return $this;
    }

    /**
    * Gets isRestoreAll
    *  **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    *
    * @return bool|null
    */
    public function getIsRestoreAll()
    {
        return $this->container['isRestoreAll'];
    }

    /**
    * Sets isRestoreAll
    *
    * @param bool|null $isRestoreAll **参数解释**: 能否还原回收站。 **取值范围**: - true：能够在回收站还原所有。 - false：不能在回收站还原所有。
    *
    * @return $this
    */
    public function setIsRestoreAll($isRestoreAll)
    {
        $this->container['isRestoreAll'] = $isRestoreAll;
        return $this;
    }

    /**
    * Gets isEmpty
    *  **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    *
    * @return bool|null
    */
    public function getIsEmpty()
    {
        return $this->container['isEmpty'];
    }

    /**
    * Sets isEmpty
    *
    * @param bool|null $isEmpty **参数解释**: 能否清空回收站。 **取值范围**: - true：能够清空回收站。 - false：不能清空回收站。
    *
    * @return $this
    */
    public function setIsEmpty($isEmpty)
    {
        $this->container['isEmpty'] = $isEmpty;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间。 **取值范围**: 不涉及。
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
    * @param int|null $createTime **参数解释**: 创建时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: 更新时间。 **取值范围**: 不涉及。
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
    * @param int|null $updateTime **参数解释**: 更新时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets migrated630
    *  **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMigrated630()
    {
        return $this->container['migrated630'];
    }

    /**
    * Sets migrated630
    *
    * @param int|null $migrated630 **参数解释**: 权限迁移状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMigrated630($migrated630)
    {
        $this->container['migrated630'] = $migrated630;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**: 区域。 **取值范围**: 不涉及。
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
    * @param string|null $region **参数解释**: 区域。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**: 用户id。 **取值范围**: 不涉及。
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
    * @param string|null $userId **参数解释**: 用户id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets roles
    *  **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param string|null $roles **参数解释**: 角色。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
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

