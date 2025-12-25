<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetInfoResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetInfoResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  操作连接ID
    * projectId  项目ID
    * workspaceId  空间ID
    * name  操作连接名称
    * componentId  操作连接所属的插件id
    * componentName  操作连接所属的插件id名称
    * componentVersionId  插件版本ID
    * type  操作连接类型
    * status  操作连接状态（SUCCESS/FAILED）
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    * description  操作连接描述
    * enabled  是否启用
    * createTime  创建时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  更新者ID
    * modifierName  更新者名称
    * defenseType  下发应急策略时的所属的防线分类
    * targetProjectId  下发应急策略时的IAM项目ID
    * targetProjectName  下发应急策略时的IAM项目名称
    * targetEnterpriseId  下发应急策略时的企业项目ID
    * targetEnterpriseName  下发应急策略时的企业项目名称
    * regionId  下发应急策略时的区域ID
    * regionName  下发应急策略时的区域名称
    * canBeDeleted  是否可删除，操作连接有流程在使用时，返回false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'name' => 'string',
            'componentId' => 'string',
            'componentName' => 'string',
            'componentVersionId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'config' => 'string',
            'description' => 'string',
            'enabled' => 'bool',
            'createTime' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'updateTime' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'defenseType' => 'string',
            'targetProjectId' => 'string',
            'targetProjectName' => 'string',
            'targetEnterpriseId' => 'string',
            'targetEnterpriseName' => 'string',
            'regionId' => 'string',
            'regionName' => 'string',
            'canBeDeleted' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  操作连接ID
    * projectId  项目ID
    * workspaceId  空间ID
    * name  操作连接名称
    * componentId  操作连接所属的插件id
    * componentName  操作连接所属的插件id名称
    * componentVersionId  插件版本ID
    * type  操作连接类型
    * status  操作连接状态（SUCCESS/FAILED）
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    * description  操作连接描述
    * enabled  是否启用
    * createTime  创建时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  更新者ID
    * modifierName  更新者名称
    * defenseType  下发应急策略时的所属的防线分类
    * targetProjectId  下发应急策略时的IAM项目ID
    * targetProjectName  下发应急策略时的IAM项目名称
    * targetEnterpriseId  下发应急策略时的企业项目ID
    * targetEnterpriseName  下发应急策略时的企业项目名称
    * regionId  下发应急策略时的区域ID
    * regionName  下发应急策略时的区域名称
    * canBeDeleted  是否可删除，操作连接有流程在使用时，返回false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'workspaceId' => null,
        'name' => null,
        'componentId' => null,
        'componentName' => null,
        'componentVersionId' => null,
        'type' => null,
        'status' => null,
        'config' => null,
        'description' => null,
        'enabled' => null,
        'createTime' => null,
        'creatorId' => null,
        'creatorName' => null,
        'updateTime' => null,
        'modifierId' => null,
        'modifierName' => null,
        'defenseType' => null,
        'targetProjectId' => null,
        'targetProjectName' => null,
        'targetEnterpriseId' => null,
        'targetEnterpriseName' => null,
        'regionId' => null,
        'regionName' => null,
        'canBeDeleted' => null
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
    * id  操作连接ID
    * projectId  项目ID
    * workspaceId  空间ID
    * name  操作连接名称
    * componentId  操作连接所属的插件id
    * componentName  操作连接所属的插件id名称
    * componentVersionId  插件版本ID
    * type  操作连接类型
    * status  操作连接状态（SUCCESS/FAILED）
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    * description  操作连接描述
    * enabled  是否启用
    * createTime  创建时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  更新者ID
    * modifierName  更新者名称
    * defenseType  下发应急策略时的所属的防线分类
    * targetProjectId  下发应急策略时的IAM项目ID
    * targetProjectName  下发应急策略时的IAM项目名称
    * targetEnterpriseId  下发应急策略时的企业项目ID
    * targetEnterpriseName  下发应急策略时的企业项目名称
    * regionId  下发应急策略时的区域ID
    * regionName  下发应急策略时的区域名称
    * canBeDeleted  是否可删除，操作连接有流程在使用时，返回false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'name' => 'name',
            'componentId' => 'component_id',
            'componentName' => 'component_name',
            'componentVersionId' => 'component_version_id',
            'type' => 'type',
            'status' => 'status',
            'config' => 'config',
            'description' => 'description',
            'enabled' => 'enabled',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'updateTime' => 'update_time',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'defenseType' => 'defense_type',
            'targetProjectId' => 'target_project_id',
            'targetProjectName' => 'target_project_name',
            'targetEnterpriseId' => 'target_enterprise_id',
            'targetEnterpriseName' => 'target_enterprise_name',
            'regionId' => 'region_id',
            'regionName' => 'region_name',
            'canBeDeleted' => 'can_be_deleted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  操作连接ID
    * projectId  项目ID
    * workspaceId  空间ID
    * name  操作连接名称
    * componentId  操作连接所属的插件id
    * componentName  操作连接所属的插件id名称
    * componentVersionId  插件版本ID
    * type  操作连接类型
    * status  操作连接状态（SUCCESS/FAILED）
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    * description  操作连接描述
    * enabled  是否启用
    * createTime  创建时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  更新者ID
    * modifierName  更新者名称
    * defenseType  下发应急策略时的所属的防线分类
    * targetProjectId  下发应急策略时的IAM项目ID
    * targetProjectName  下发应急策略时的IAM项目名称
    * targetEnterpriseId  下发应急策略时的企业项目ID
    * targetEnterpriseName  下发应急策略时的企业项目名称
    * regionId  下发应急策略时的区域ID
    * regionName  下发应急策略时的区域名称
    * canBeDeleted  是否可删除，操作连接有流程在使用时，返回false
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'name' => 'setName',
            'componentId' => 'setComponentId',
            'componentName' => 'setComponentName',
            'componentVersionId' => 'setComponentVersionId',
            'type' => 'setType',
            'status' => 'setStatus',
            'config' => 'setConfig',
            'description' => 'setDescription',
            'enabled' => 'setEnabled',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'updateTime' => 'setUpdateTime',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'defenseType' => 'setDefenseType',
            'targetProjectId' => 'setTargetProjectId',
            'targetProjectName' => 'setTargetProjectName',
            'targetEnterpriseId' => 'setTargetEnterpriseId',
            'targetEnterpriseName' => 'setTargetEnterpriseName',
            'regionId' => 'setRegionId',
            'regionName' => 'setRegionName',
            'canBeDeleted' => 'setCanBeDeleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  操作连接ID
    * projectId  项目ID
    * workspaceId  空间ID
    * name  操作连接名称
    * componentId  操作连接所属的插件id
    * componentName  操作连接所属的插件id名称
    * componentVersionId  插件版本ID
    * type  操作连接类型
    * status  操作连接状态（SUCCESS/FAILED）
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    * description  操作连接描述
    * enabled  是否启用
    * createTime  创建时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  更新者ID
    * modifierName  更新者名称
    * defenseType  下发应急策略时的所属的防线分类
    * targetProjectId  下发应急策略时的IAM项目ID
    * targetProjectName  下发应急策略时的IAM项目名称
    * targetEnterpriseId  下发应急策略时的企业项目ID
    * targetEnterpriseName  下发应急策略时的企业项目名称
    * regionId  下发应急策略时的区域ID
    * regionName  下发应急策略时的区域名称
    * canBeDeleted  是否可删除，操作连接有流程在使用时，返回false
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'name' => 'getName',
            'componentId' => 'getComponentId',
            'componentName' => 'getComponentName',
            'componentVersionId' => 'getComponentVersionId',
            'type' => 'getType',
            'status' => 'getStatus',
            'config' => 'getConfig',
            'description' => 'getDescription',
            'enabled' => 'getEnabled',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'updateTime' => 'getUpdateTime',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'defenseType' => 'getDefenseType',
            'targetProjectId' => 'getTargetProjectId',
            'targetProjectName' => 'getTargetProjectName',
            'targetEnterpriseId' => 'getTargetEnterpriseId',
            'targetEnterpriseName' => 'getTargetEnterpriseName',
            'regionId' => 'getRegionId',
            'regionName' => 'getRegionName',
            'canBeDeleted' => 'getCanBeDeleted'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['componentVersionId'] = isset($data['componentVersionId']) ? $data['componentVersionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['defenseType'] = isset($data['defenseType']) ? $data['defenseType'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['targetProjectName'] = isset($data['targetProjectName']) ? $data['targetProjectName'] : null;
        $this->container['targetEnterpriseId'] = isset($data['targetEnterpriseId']) ? $data['targetEnterpriseId'] : null;
        $this->container['targetEnterpriseName'] = isset($data['targetEnterpriseName']) ? $data['targetEnterpriseName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['canBeDeleted'] = isset($data['canBeDeleted']) ? $data['canBeDeleted'] : null;
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
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentVersionId']) && (mb_strlen($this->container['componentVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'componentVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['componentVersionId']) && (mb_strlen($this->container['componentVersionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentVersionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['config']) && (mb_strlen($this->container['config']) > 1024)) {
                $invalidProperties[] = "invalid value for 'config', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['config']) && (mb_strlen($this->container['config']) < 0)) {
                $invalidProperties[] = "invalid value for 'config', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defenseType']) && (mb_strlen($this->container['defenseType']) > 16)) {
                $invalidProperties[] = "invalid value for 'defenseType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['defenseType']) && (mb_strlen($this->container['defenseType']) < 1)) {
                $invalidProperties[] = "invalid value for 'defenseType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetProjectName']) && (mb_strlen($this->container['targetProjectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetProjectName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetProjectName']) && (mb_strlen($this->container['targetProjectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetProjectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetEnterpriseId']) && (mb_strlen($this->container['targetEnterpriseId']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetEnterpriseId']) && (mb_strlen($this->container['targetEnterpriseId']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetEnterpriseName']) && (mb_strlen($this->container['targetEnterpriseName']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetEnterpriseName']) && (mb_strlen($this->container['targetEnterpriseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 16)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 16)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 1.";
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
    *  操作连接ID
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
    * @param string|null $id 操作连接ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets workspaceId
    *  空间ID
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
    * @param string|null $workspaceId 空间ID
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
    *  操作连接名称
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
    * @param string|null $name 操作连接名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets componentId
    *  操作连接所属的插件id
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 操作连接所属的插件id
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentName
    *  操作连接所属的插件id名称
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 操作连接所属的插件id名称
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets componentVersionId
    *  插件版本ID
    *
    * @return string|null
    */
    public function getComponentVersionId()
    {
        return $this->container['componentVersionId'];
    }

    /**
    * Sets componentVersionId
    *
    * @param string|null $componentVersionId 插件版本ID
    *
    * @return $this
    */
    public function setComponentVersionId($componentVersionId)
    {
        $this->container['componentVersionId'] = $componentVersionId;
        return $this;
    }

    /**
    * Gets type
    *  操作连接类型
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
    * @param string|null $type 操作连接类型
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
    *  操作连接状态（SUCCESS/FAILED）
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
    * @param string|null $status 操作连接状态（SUCCESS/FAILED）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets config
    *  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @return string|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param string|null $config 具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets description
    *  操作连接描述
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
    * @param string|null $description 操作连接描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets modifierId
    *  更新者ID
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId 更新者ID
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets modifierName
    *  更新者名称
    *
    * @return string|null
    */
    public function getModifierName()
    {
        return $this->container['modifierName'];
    }

    /**
    * Sets modifierName
    *
    * @param string|null $modifierName 更新者名称
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets defenseType
    *  下发应急策略时的所属的防线分类
    *
    * @return string|null
    */
    public function getDefenseType()
    {
        return $this->container['defenseType'];
    }

    /**
    * Sets defenseType
    *
    * @param string|null $defenseType 下发应急策略时的所属的防线分类
    *
    * @return $this
    */
    public function setDefenseType($defenseType)
    {
        $this->container['defenseType'] = $defenseType;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  下发应急策略时的IAM项目ID
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId 下发应急策略时的IAM项目ID
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets targetProjectName
    *  下发应急策略时的IAM项目名称
    *
    * @return string|null
    */
    public function getTargetProjectName()
    {
        return $this->container['targetProjectName'];
    }

    /**
    * Sets targetProjectName
    *
    * @param string|null $targetProjectName 下发应急策略时的IAM项目名称
    *
    * @return $this
    */
    public function setTargetProjectName($targetProjectName)
    {
        $this->container['targetProjectName'] = $targetProjectName;
        return $this;
    }

    /**
    * Gets targetEnterpriseId
    *  下发应急策略时的企业项目ID
    *
    * @return string|null
    */
    public function getTargetEnterpriseId()
    {
        return $this->container['targetEnterpriseId'];
    }

    /**
    * Sets targetEnterpriseId
    *
    * @param string|null $targetEnterpriseId 下发应急策略时的企业项目ID
    *
    * @return $this
    */
    public function setTargetEnterpriseId($targetEnterpriseId)
    {
        $this->container['targetEnterpriseId'] = $targetEnterpriseId;
        return $this;
    }

    /**
    * Gets targetEnterpriseName
    *  下发应急策略时的企业项目名称
    *
    * @return string|null
    */
    public function getTargetEnterpriseName()
    {
        return $this->container['targetEnterpriseName'];
    }

    /**
    * Sets targetEnterpriseName
    *
    * @param string|null $targetEnterpriseName 下发应急策略时的企业项目名称
    *
    * @return $this
    */
    public function setTargetEnterpriseName($targetEnterpriseName)
    {
        $this->container['targetEnterpriseName'] = $targetEnterpriseName;
        return $this;
    }

    /**
    * Gets regionId
    *  下发应急策略时的区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 下发应急策略时的区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets regionName
    *  下发应急策略时的区域名称
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 下发应急策略时的区域名称
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets canBeDeleted
    *  是否可删除，操作连接有流程在使用时，返回false
    *
    * @return bool|null
    */
    public function getCanBeDeleted()
    {
        return $this->container['canBeDeleted'];
    }

    /**
    * Sets canBeDeleted
    *
    * @param bool|null $canBeDeleted 是否可删除，操作连接有流程在使用时，返回false
    *
    * @return $this
    */
    public function setCanBeDeleted($canBeDeleted)
    {
        $this->container['canBeDeleted'] = $canBeDeleted;
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

