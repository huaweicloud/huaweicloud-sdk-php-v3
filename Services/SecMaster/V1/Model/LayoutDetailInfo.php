<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LayoutDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LayoutDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * createTime  创建时间
    * creatorId  创建者ID
    * parentId  父布局ID
    * creatorName  创建者名称
    * description  描述信息
    * enDescription  英文描述信息
    * id  订阅包id
    * name  名称
    * enName  英文名称
    * layoutJson  布局下的wizard id列表
    * projectId  租户ID
    * updateTime  更新时间
    * workspaceId  工作空间ID
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutCfg  前端根据该值绑定图标
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingName  数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统区块总数
    * modulesSum  系统模块总数
    * tabsSum  自定义指标总数
    * version  安全云脑版本
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudPackId' => 'string',
            'cloudPackName' => 'string',
            'cloudPackVersion' => 'string',
            'isBuiltIn' => 'bool',
            'isTemplate' => 'bool',
            'createTime' => 'string',
            'creatorId' => 'string',
            'parentId' => 'string',
            'creatorName' => 'string',
            'description' => 'string',
            'enDescription' => 'string',
            'id' => 'string',
            'name' => 'string',
            'enName' => 'string',
            'layoutJson' => 'string',
            'projectId' => 'string',
            'updateTime' => 'string',
            'workspaceId' => 'string',
            'regionId' => 'string',
            'domainId' => 'string',
            'thumbnail' => 'string',
            'usedBy' => 'string',
            'layoutCfg' => 'string',
            'layoutType' => 'string',
            'bindingId' => 'string',
            'bindingName' => 'string',
            'bindingCode' => 'string',
            'fieldsSum' => 'int',
            'wizardsSum' => 'int',
            'sectionsSum' => 'int',
            'modulesSum' => 'int',
            'tabsSum' => 'int',
            'version' => 'string',
            'boaVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * createTime  创建时间
    * creatorId  创建者ID
    * parentId  父布局ID
    * creatorName  创建者名称
    * description  描述信息
    * enDescription  英文描述信息
    * id  订阅包id
    * name  名称
    * enName  英文名称
    * layoutJson  布局下的wizard id列表
    * projectId  租户ID
    * updateTime  更新时间
    * workspaceId  工作空间ID
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutCfg  前端根据该值绑定图标
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingName  数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统区块总数
    * modulesSum  系统模块总数
    * tabsSum  自定义指标总数
    * version  安全云脑版本
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudPackId' => null,
        'cloudPackName' => null,
        'cloudPackVersion' => null,
        'isBuiltIn' => null,
        'isTemplate' => null,
        'createTime' => null,
        'creatorId' => null,
        'parentId' => null,
        'creatorName' => null,
        'description' => null,
        'enDescription' => null,
        'id' => null,
        'name' => null,
        'enName' => null,
        'layoutJson' => null,
        'projectId' => null,
        'updateTime' => null,
        'workspaceId' => null,
        'regionId' => null,
        'domainId' => null,
        'thumbnail' => null,
        'usedBy' => null,
        'layoutCfg' => null,
        'layoutType' => null,
        'bindingId' => null,
        'bindingName' => null,
        'bindingCode' => null,
        'fieldsSum' => null,
        'wizardsSum' => null,
        'sectionsSum' => null,
        'modulesSum' => null,
        'tabsSum' => null,
        'version' => null,
        'boaVersion' => null
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
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * createTime  创建时间
    * creatorId  创建者ID
    * parentId  父布局ID
    * creatorName  创建者名称
    * description  描述信息
    * enDescription  英文描述信息
    * id  订阅包id
    * name  名称
    * enName  英文名称
    * layoutJson  布局下的wizard id列表
    * projectId  租户ID
    * updateTime  更新时间
    * workspaceId  工作空间ID
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutCfg  前端根据该值绑定图标
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingName  数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统区块总数
    * modulesSum  系统模块总数
    * tabsSum  自定义指标总数
    * version  安全云脑版本
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudPackId' => 'cloud_pack_id',
            'cloudPackName' => 'cloud_pack_name',
            'cloudPackVersion' => 'cloud_pack_version',
            'isBuiltIn' => 'is_built_in',
            'isTemplate' => 'is_template',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'parentId' => 'parent_id',
            'creatorName' => 'creator_name',
            'description' => 'description',
            'enDescription' => 'en_description',
            'id' => 'id',
            'name' => 'name',
            'enName' => 'en_name',
            'layoutJson' => 'layout_json',
            'projectId' => 'project_id',
            'updateTime' => 'update_time',
            'workspaceId' => 'workspace_id',
            'regionId' => 'region_id',
            'domainId' => 'domain_id',
            'thumbnail' => 'thumbnail',
            'usedBy' => 'used_by',
            'layoutCfg' => 'layout_cfg',
            'layoutType' => 'layout_type',
            'bindingId' => 'binding_id',
            'bindingName' => 'binding_name',
            'bindingCode' => 'binding_code',
            'fieldsSum' => 'fields_sum',
            'wizardsSum' => 'wizards_sum',
            'sectionsSum' => 'sections_sum',
            'modulesSum' => 'modules_sum',
            'tabsSum' => 'tabs_sum',
            'version' => 'version',
            'boaVersion' => 'boa_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * createTime  创建时间
    * creatorId  创建者ID
    * parentId  父布局ID
    * creatorName  创建者名称
    * description  描述信息
    * enDescription  英文描述信息
    * id  订阅包id
    * name  名称
    * enName  英文名称
    * layoutJson  布局下的wizard id列表
    * projectId  租户ID
    * updateTime  更新时间
    * workspaceId  工作空间ID
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutCfg  前端根据该值绑定图标
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingName  数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统区块总数
    * modulesSum  系统模块总数
    * tabsSum  自定义指标总数
    * version  安全云脑版本
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudPackId' => 'setCloudPackId',
            'cloudPackName' => 'setCloudPackName',
            'cloudPackVersion' => 'setCloudPackVersion',
            'isBuiltIn' => 'setIsBuiltIn',
            'isTemplate' => 'setIsTemplate',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'parentId' => 'setParentId',
            'creatorName' => 'setCreatorName',
            'description' => 'setDescription',
            'enDescription' => 'setEnDescription',
            'id' => 'setId',
            'name' => 'setName',
            'enName' => 'setEnName',
            'layoutJson' => 'setLayoutJson',
            'projectId' => 'setProjectId',
            'updateTime' => 'setUpdateTime',
            'workspaceId' => 'setWorkspaceId',
            'regionId' => 'setRegionId',
            'domainId' => 'setDomainId',
            'thumbnail' => 'setThumbnail',
            'usedBy' => 'setUsedBy',
            'layoutCfg' => 'setLayoutCfg',
            'layoutType' => 'setLayoutType',
            'bindingId' => 'setBindingId',
            'bindingName' => 'setBindingName',
            'bindingCode' => 'setBindingCode',
            'fieldsSum' => 'setFieldsSum',
            'wizardsSum' => 'setWizardsSum',
            'sectionsSum' => 'setSectionsSum',
            'modulesSum' => 'setModulesSum',
            'tabsSum' => 'setTabsSum',
            'version' => 'setVersion',
            'boaVersion' => 'setBoaVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * isTemplate  是否为模板
    * createTime  创建时间
    * creatorId  创建者ID
    * parentId  父布局ID
    * creatorName  创建者名称
    * description  描述信息
    * enDescription  英文描述信息
    * id  订阅包id
    * name  名称
    * enName  英文名称
    * layoutJson  布局下的wizard id列表
    * projectId  租户ID
    * updateTime  更新时间
    * workspaceId  工作空间ID
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutCfg  前端根据该值绑定图标
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingName  数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统区块总数
    * modulesSum  系统模块总数
    * tabsSum  自定义指标总数
    * version  安全云脑版本
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudPackId' => 'getCloudPackId',
            'cloudPackName' => 'getCloudPackName',
            'cloudPackVersion' => 'getCloudPackVersion',
            'isBuiltIn' => 'getIsBuiltIn',
            'isTemplate' => 'getIsTemplate',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'parentId' => 'getParentId',
            'creatorName' => 'getCreatorName',
            'description' => 'getDescription',
            'enDescription' => 'getEnDescription',
            'id' => 'getId',
            'name' => 'getName',
            'enName' => 'getEnName',
            'layoutJson' => 'getLayoutJson',
            'projectId' => 'getProjectId',
            'updateTime' => 'getUpdateTime',
            'workspaceId' => 'getWorkspaceId',
            'regionId' => 'getRegionId',
            'domainId' => 'getDomainId',
            'thumbnail' => 'getThumbnail',
            'usedBy' => 'getUsedBy',
            'layoutCfg' => 'getLayoutCfg',
            'layoutType' => 'getLayoutType',
            'bindingId' => 'getBindingId',
            'bindingName' => 'getBindingName',
            'bindingCode' => 'getBindingCode',
            'fieldsSum' => 'getFieldsSum',
            'wizardsSum' => 'getWizardsSum',
            'sectionsSum' => 'getSectionsSum',
            'modulesSum' => 'getModulesSum',
            'tabsSum' => 'getTabsSum',
            'version' => 'getVersion',
            'boaVersion' => 'getBoaVersion'
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
        $this->container['cloudPackId'] = isset($data['cloudPackId']) ? $data['cloudPackId'] : null;
        $this->container['cloudPackName'] = isset($data['cloudPackName']) ? $data['cloudPackName'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['isTemplate'] = isset($data['isTemplate']) ? $data['isTemplate'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enDescription'] = isset($data['enDescription']) ? $data['enDescription'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['layoutJson'] = isset($data['layoutJson']) ? $data['layoutJson'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['usedBy'] = isset($data['usedBy']) ? $data['usedBy'] : null;
        $this->container['layoutCfg'] = isset($data['layoutCfg']) ? $data['layoutCfg'] : null;
        $this->container['layoutType'] = isset($data['layoutType']) ? $data['layoutType'] : null;
        $this->container['bindingId'] = isset($data['bindingId']) ? $data['bindingId'] : null;
        $this->container['bindingName'] = isset($data['bindingName']) ? $data['bindingName'] : null;
        $this->container['bindingCode'] = isset($data['bindingCode']) ? $data['bindingCode'] : null;
        $this->container['fieldsSum'] = isset($data['fieldsSum']) ? $data['fieldsSum'] : null;
        $this->container['wizardsSum'] = isset($data['wizardsSum']) ? $data['wizardsSum'] : null;
        $this->container['sectionsSum'] = isset($data['sectionsSum']) ? $data['sectionsSum'] : null;
        $this->container['modulesSum'] = isset($data['modulesSum']) ? $data['modulesSum'] : null;
        $this->container['tabsSum'] = isset($data['tabsSum']) ? $data['tabsSum'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['boaVersion'] = isset($data['boaVersion']) ? $data['boaVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
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
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enDescription']) && (mb_strlen($this->container['enDescription']) > 65535)) {
                $invalidProperties[] = "invalid value for 'enDescription', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['enDescription']) && (mb_strlen($this->container['enDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'enDescription', the character length must be bigger than or equal to 0.";
            }
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
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) > 64)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) < 1)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['layoutJson']) && (mb_strlen($this->container['layoutJson']) > 65525)) {
                $invalidProperties[] = "invalid value for 'layoutJson', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['layoutJson']) && (mb_strlen($this->container['layoutJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutJson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) > 65525)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedBy']) && (mb_strlen($this->container['usedBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['usedBy']) && (mb_strlen($this->container['usedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['layoutCfg']) && (mb_strlen($this->container['layoutCfg']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutCfg', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutCfg']) && (mb_strlen($this->container['layoutCfg']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutCfg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['layoutType']) && (mb_strlen($this->container['layoutType']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutType']) && (mb_strlen($this->container['layoutType']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bindingId']) && (mb_strlen($this->container['bindingId']) > 64)) {
                $invalidProperties[] = "invalid value for 'bindingId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bindingId']) && (mb_strlen($this->container['bindingId']) < 32)) {
                $invalidProperties[] = "invalid value for 'bindingId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['bindingName']) && (mb_strlen($this->container['bindingName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bindingName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bindingName']) && (mb_strlen($this->container['bindingName']) < 32)) {
                $invalidProperties[] = "invalid value for 'bindingName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['bindingCode']) && (mb_strlen($this->container['bindingCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'bindingCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bindingCode']) && (mb_strlen($this->container['bindingCode']) < 32)) {
                $invalidProperties[] = "invalid value for 'bindingCode', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['fieldsSum']) && ($this->container['fieldsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'fieldsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['fieldsSum']) && ($this->container['fieldsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'fieldsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wizardsSum']) && ($this->container['wizardsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'wizardsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['wizardsSum']) && ($this->container['wizardsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'wizardsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sectionsSum']) && ($this->container['sectionsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'sectionsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['sectionsSum']) && ($this->container['sectionsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'sectionsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modulesSum']) && ($this->container['modulesSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'modulesSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['modulesSum']) && ($this->container['modulesSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'modulesSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tabsSum']) && ($this->container['tabsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'tabsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['tabsSum']) && ($this->container['tabsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'tabsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 32.";
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
    * Gets cloudPackId
    *  订阅包id
    *
    * @return string|null
    */
    public function getCloudPackId()
    {
        return $this->container['cloudPackId'];
    }

    /**
    * Sets cloudPackId
    *
    * @param string|null $cloudPackId 订阅包id
    *
    * @return $this
    */
    public function setCloudPackId($cloudPackId)
    {
        $this->container['cloudPackId'] = $cloudPackId;
        return $this;
    }

    /**
    * Gets cloudPackName
    *  订阅包名称
    *
    * @return string|null
    */
    public function getCloudPackName()
    {
        return $this->container['cloudPackName'];
    }

    /**
    * Sets cloudPackName
    *
    * @param string|null $cloudPackName 订阅包名称
    *
    * @return $this
    */
    public function setCloudPackName($cloudPackName)
    {
        $this->container['cloudPackName'] = $cloudPackName;
        return $this;
    }

    /**
    * Gets cloudPackVersion
    *  订阅包版本
    *
    * @return string|null
    */
    public function getCloudPackVersion()
    {
        return $this->container['cloudPackVersion'];
    }

    /**
    * Sets cloudPackVersion
    *
    * @param string|null $cloudPackVersion 订阅包版本
    *
    * @return $this
    */
    public function setCloudPackVersion($cloudPackVersion)
    {
        $this->container['cloudPackVersion'] = $cloudPackVersion;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否内置，true内置，false非内置
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否内置，true内置，false非内置
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets isTemplate
    *  是否为模板
    *
    * @return bool|null
    */
    public function getIsTemplate()
    {
        return $this->container['isTemplate'];
    }

    /**
    * Sets isTemplate
    *
    * @param bool|null $isTemplate 是否为模板
    *
    * @return $this
    */
    public function setIsTemplate($isTemplate)
    {
        $this->container['isTemplate'] = $isTemplate;
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
    * Gets parentId
    *  父布局ID
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
    * @param string|null $parentId 父布局ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
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
    * Gets enDescription
    *  英文描述信息
    *
    * @return string|null
    */
    public function getEnDescription()
    {
        return $this->container['enDescription'];
    }

    /**
    * Sets enDescription
    *
    * @param string|null $enDescription 英文描述信息
    *
    * @return $this
    */
    public function setEnDescription($enDescription)
    {
        $this->container['enDescription'] = $enDescription;
        return $this;
    }

    /**
    * Gets id
    *  订阅包id
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
    * @param string|null $id 订阅包id
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
    * Gets enName
    *  英文名称
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName 英文名称
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets layoutJson
    *  布局下的wizard id列表
    *
    * @return string|null
    */
    public function getLayoutJson()
    {
        return $this->container['layoutJson'];
    }

    /**
    * Sets layoutJson
    *
    * @param string|null $layoutJson 布局下的wizard id列表
    *
    * @return $this
    */
    public function setLayoutJson($layoutJson)
    {
        $this->container['layoutJson'] = $layoutJson;
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
    * Gets regionId
    *  区域ID
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
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets domainId
    *  用户ID
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
    * @param string|null $domainId 用户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets thumbnail
    *  模板缩略图，当布局为模板时不为空
    *
    * @return string|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param string|null $thumbnail 模板缩略图，当布局为模板时不为空
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets usedBy
    *  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    *
    * @return string|null
    */
    public function getUsedBy()
    {
        return $this->container['usedBy'];
    }

    /**
    * Sets usedBy
    *
    * @param string|null $usedBy 被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    *
    * @return $this
    */
    public function setUsedBy($usedBy)
    {
        $this->container['usedBy'] = $usedBy;
        return $this;
    }

    /**
    * Gets layoutCfg
    *  前端根据该值绑定图标
    *
    * @return string|null
    */
    public function getLayoutCfg()
    {
        return $this->container['layoutCfg'];
    }

    /**
    * Sets layoutCfg
    *
    * @param string|null $layoutCfg 前端根据该值绑定图标
    *
    * @return $this
    */
    public function setLayoutCfg($layoutCfg)
    {
        $this->container['layoutCfg'] = $layoutCfg;
        return $this;
    }

    /**
    * Gets layoutType
    *  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return string|null
    */
    public function getLayoutType()
    {
        return $this->container['layoutType'];
    }

    /**
    * Sets layoutType
    *
    * @param string|null $layoutType 布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setLayoutType($layoutType)
    {
        $this->container['layoutType'] = $layoutType;
        return $this;
    }

    /**
    * Gets bindingId
    *  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return string|null
    */
    public function getBindingId()
    {
        return $this->container['bindingId'];
    }

    /**
    * Sets bindingId
    *
    * @param string|null $bindingId 数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setBindingId($bindingId)
    {
        $this->container['bindingId'] = $bindingId;
        return $this;
    }

    /**
    * Gets bindingName
    *  数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return string|null
    */
    public function getBindingName()
    {
        return $this->container['bindingName'];
    }

    /**
    * Sets bindingName
    *
    * @param string|null $bindingName 数据类名称或流程名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setBindingName($bindingName)
    {
        $this->container['bindingName'] = $bindingName;
        return $this;
    }

    /**
    * Gets bindingCode
    *  数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return string|null
    */
    public function getBindingCode()
    {
        return $this->container['bindingCode'];
    }

    /**
    * Sets bindingCode
    *
    * @param string|null $bindingCode 数据类或流程英文名称；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setBindingCode($bindingCode)
    {
        $this->container['bindingCode'] = $bindingCode;
        return $this;
    }

    /**
    * Gets fieldsSum
    *  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return int|null
    */
    public function getFieldsSum()
    {
        return $this->container['fieldsSum'];
    }

    /**
    * Sets fieldsSum
    *
    * @param int|null $fieldsSum 字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setFieldsSum($fieldsSum)
    {
        $this->container['fieldsSum'] = $fieldsSum;
        return $this;
    }

    /**
    * Gets wizardsSum
    *  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return int|null
    */
    public function getWizardsSum()
    {
        return $this->container['wizardsSum'];
    }

    /**
    * Sets wizardsSum
    *
    * @param int|null $wizardsSum 页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    *
    * @return $this
    */
    public function setWizardsSum($wizardsSum)
    {
        $this->container['wizardsSum'] = $wizardsSum;
        return $this;
    }

    /**
    * Gets sectionsSum
    *  系统区块总数
    *
    * @return int|null
    */
    public function getSectionsSum()
    {
        return $this->container['sectionsSum'];
    }

    /**
    * Sets sectionsSum
    *
    * @param int|null $sectionsSum 系统区块总数
    *
    * @return $this
    */
    public function setSectionsSum($sectionsSum)
    {
        $this->container['sectionsSum'] = $sectionsSum;
        return $this;
    }

    /**
    * Gets modulesSum
    *  系统模块总数
    *
    * @return int|null
    */
    public function getModulesSum()
    {
        return $this->container['modulesSum'];
    }

    /**
    * Sets modulesSum
    *
    * @param int|null $modulesSum 系统模块总数
    *
    * @return $this
    */
    public function setModulesSum($modulesSum)
    {
        $this->container['modulesSum'] = $modulesSum;
        return $this;
    }

    /**
    * Gets tabsSum
    *  自定义指标总数
    *
    * @return int|null
    */
    public function getTabsSum()
    {
        return $this->container['tabsSum'];
    }

    /**
    * Sets tabsSum
    *
    * @param int|null $tabsSum 自定义指标总数
    *
    * @return $this
    */
    public function setTabsSum($tabsSum)
    {
        $this->container['tabsSum'] = $tabsSum;
        return $this;
    }

    /**
    * Gets version
    *  安全云脑版本
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
    * @param string|null $version 安全云脑版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets boaVersion
    *  BOA底座版本
    *
    * @return string|null
    */
    public function getBoaVersion()
    {
        return $this->container['boaVersion'];
    }

    /**
    * Sets boaVersion
    *
    * @param string|null $boaVersion BOA底座版本
    *
    * @return $this
    */
    public function setBoaVersion($boaVersion)
    {
        $this->container['boaVersion'] = $boaVersion;
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

