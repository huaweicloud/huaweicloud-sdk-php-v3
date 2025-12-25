<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataclassTypeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataclassTypeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  类型id
    * dataclassId  数据类id
    * domainId  账号id
    * projectId  项目id
    * workspaceId  工作空间id
    * regionId  局点id
    * layoutId  布局id
    * layoutName  布局名称
    * category  数据类类型分类
    * categoryCode  数据类类型分类编码
    * subCategory  数据类类型名称
    * subCategoryCode  数据类类型业务编码
    * description  数据类类型描述
    * enabled  状态
    * level  事件等级
    * isBuiltIn  是否内置，true内置，false非内置
    * sla  响应时长
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * createTime  创建时间
    * updateTime  修改时间
    * dataclassBusinessCode  所属数据类业务编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'dataclassId' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'regionId' => 'string',
            'layoutId' => 'string',
            'layoutName' => 'string',
            'category' => 'string',
            'categoryCode' => 'string',
            'subCategory' => 'string',
            'subCategoryCode' => 'string',
            'description' => 'string',
            'enabled' => 'bool',
            'level' => 'int',
            'isBuiltIn' => 'bool',
            'sla' => 'int',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'dataclassBusinessCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  类型id
    * dataclassId  数据类id
    * domainId  账号id
    * projectId  项目id
    * workspaceId  工作空间id
    * regionId  局点id
    * layoutId  布局id
    * layoutName  布局名称
    * category  数据类类型分类
    * categoryCode  数据类类型分类编码
    * subCategory  数据类类型名称
    * subCategoryCode  数据类类型业务编码
    * description  数据类类型描述
    * enabled  状态
    * level  事件等级
    * isBuiltIn  是否内置，true内置，false非内置
    * sla  响应时长
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * createTime  创建时间
    * updateTime  修改时间
    * dataclassBusinessCode  所属数据类业务编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'dataclassId' => null,
        'domainId' => null,
        'projectId' => null,
        'workspaceId' => null,
        'regionId' => null,
        'layoutId' => null,
        'layoutName' => null,
        'category' => null,
        'categoryCode' => null,
        'subCategory' => null,
        'subCategoryCode' => null,
        'description' => null,
        'enabled' => null,
        'level' => null,
        'isBuiltIn' => null,
        'sla' => 'int64',
        'creatorId' => null,
        'creatorName' => null,
        'modifierId' => null,
        'modifierName' => null,
        'createTime' => null,
        'updateTime' => null,
        'dataclassBusinessCode' => null
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
    * id  类型id
    * dataclassId  数据类id
    * domainId  账号id
    * projectId  项目id
    * workspaceId  工作空间id
    * regionId  局点id
    * layoutId  布局id
    * layoutName  布局名称
    * category  数据类类型分类
    * categoryCode  数据类类型分类编码
    * subCategory  数据类类型名称
    * subCategoryCode  数据类类型业务编码
    * description  数据类类型描述
    * enabled  状态
    * level  事件等级
    * isBuiltIn  是否内置，true内置，false非内置
    * sla  响应时长
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * createTime  创建时间
    * updateTime  修改时间
    * dataclassBusinessCode  所属数据类业务编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'dataclassId' => 'dataclass_id',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'regionId' => 'region_id',
            'layoutId' => 'layout_id',
            'layoutName' => 'layout_name',
            'category' => 'category',
            'categoryCode' => 'category_code',
            'subCategory' => 'sub_category',
            'subCategoryCode' => 'sub_category_code',
            'description' => 'description',
            'enabled' => 'enabled',
            'level' => 'level',
            'isBuiltIn' => 'is_built_in',
            'sla' => 'sla',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'dataclassBusinessCode' => 'dataclass_business_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  类型id
    * dataclassId  数据类id
    * domainId  账号id
    * projectId  项目id
    * workspaceId  工作空间id
    * regionId  局点id
    * layoutId  布局id
    * layoutName  布局名称
    * category  数据类类型分类
    * categoryCode  数据类类型分类编码
    * subCategory  数据类类型名称
    * subCategoryCode  数据类类型业务编码
    * description  数据类类型描述
    * enabled  状态
    * level  事件等级
    * isBuiltIn  是否内置，true内置，false非内置
    * sla  响应时长
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * createTime  创建时间
    * updateTime  修改时间
    * dataclassBusinessCode  所属数据类业务编码
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'dataclassId' => 'setDataclassId',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'regionId' => 'setRegionId',
            'layoutId' => 'setLayoutId',
            'layoutName' => 'setLayoutName',
            'category' => 'setCategory',
            'categoryCode' => 'setCategoryCode',
            'subCategory' => 'setSubCategory',
            'subCategoryCode' => 'setSubCategoryCode',
            'description' => 'setDescription',
            'enabled' => 'setEnabled',
            'level' => 'setLevel',
            'isBuiltIn' => 'setIsBuiltIn',
            'sla' => 'setSla',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'dataclassBusinessCode' => 'setDataclassBusinessCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  类型id
    * dataclassId  数据类id
    * domainId  账号id
    * projectId  项目id
    * workspaceId  工作空间id
    * regionId  局点id
    * layoutId  布局id
    * layoutName  布局名称
    * category  数据类类型分类
    * categoryCode  数据类类型分类编码
    * subCategory  数据类类型名称
    * subCategoryCode  数据类类型业务编码
    * description  数据类类型描述
    * enabled  状态
    * level  事件等级
    * isBuiltIn  是否内置，true内置，false非内置
    * sla  响应时长
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * createTime  创建时间
    * updateTime  修改时间
    * dataclassBusinessCode  所属数据类业务编码
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'dataclassId' => 'getDataclassId',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'regionId' => 'getRegionId',
            'layoutId' => 'getLayoutId',
            'layoutName' => 'getLayoutName',
            'category' => 'getCategory',
            'categoryCode' => 'getCategoryCode',
            'subCategory' => 'getSubCategory',
            'subCategoryCode' => 'getSubCategoryCode',
            'description' => 'getDescription',
            'enabled' => 'getEnabled',
            'level' => 'getLevel',
            'isBuiltIn' => 'getIsBuiltIn',
            'sla' => 'getSla',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'dataclassBusinessCode' => 'getDataclassBusinessCode'
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
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['layoutName'] = isset($data['layoutName']) ? $data['layoutName'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['subCategory'] = isset($data['subCategory']) ? $data['subCategory'] : null;
        $this->container['subCategoryCode'] = isset($data['subCategoryCode']) ? $data['subCategoryCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['sla'] = isset($data['sla']) ? $data['sla'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['dataclassBusinessCode'] = isset($data['dataclassBusinessCode']) ? $data['dataclassBusinessCode'] : null;
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
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
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
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) < 32)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) < 2)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['categoryCode']) && (mb_strlen($this->container['categoryCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'categoryCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['categoryCode']) && (mb_strlen($this->container['categoryCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'categoryCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['subCategory']) && (mb_strlen($this->container['subCategory']) > 64)) {
                $invalidProperties[] = "invalid value for 'subCategory', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subCategory']) && (mb_strlen($this->container['subCategory']) < 2)) {
                $invalidProperties[] = "invalid value for 'subCategory', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['subCategoryCode']) && (mb_strlen($this->container['subCategoryCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'subCategoryCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subCategoryCode']) && (mb_strlen($this->container['subCategoryCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'subCategoryCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 2)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 5)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 0)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sla']) && ($this->container['sla'] > 15634800000)) {
                $invalidProperties[] = "invalid value for 'sla', must be smaller than or equal to 15634800000.";
            }
            if (!is_null($this->container['sla']) && ($this->container['sla'] < 0)) {
                $invalidProperties[] = "invalid value for 'sla', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 32.";
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
            if (!is_null($this->container['dataclassBusinessCode']) && (mb_strlen($this->container['dataclassBusinessCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassBusinessCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassBusinessCode']) && (mb_strlen($this->container['dataclassBusinessCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'dataclassBusinessCode', the character length must be bigger than or equal to 2.";
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
    *  类型id
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
    * @param string|null $id 类型id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类id
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
    * @param string|null $dataclassId 数据类id
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets domainId
    *  账号id
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
    * @param string|null $domainId 账号id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets workspaceId
    *  工作空间id
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
    * @param string|null $workspaceId 工作空间id
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
    *  局点id
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
    * @param string|null $regionId 局点id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局id
    *
    * @return string|null
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string|null $layoutId 布局id
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
        return $this;
    }

    /**
    * Gets layoutName
    *  布局名称
    *
    * @return string|null
    */
    public function getLayoutName()
    {
        return $this->container['layoutName'];
    }

    /**
    * Sets layoutName
    *
    * @param string|null $layoutName 布局名称
    *
    * @return $this
    */
    public function setLayoutName($layoutName)
    {
        $this->container['layoutName'] = $layoutName;
        return $this;
    }

    /**
    * Gets category
    *  数据类类型分类
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 数据类类型分类
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets categoryCode
    *  数据类类型分类编码
    *
    * @return string|null
    */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
    * Sets categoryCode
    *
    * @param string|null $categoryCode 数据类类型分类编码
    *
    * @return $this
    */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;
        return $this;
    }

    /**
    * Gets subCategory
    *  数据类类型名称
    *
    * @return string|null
    */
    public function getSubCategory()
    {
        return $this->container['subCategory'];
    }

    /**
    * Sets subCategory
    *
    * @param string|null $subCategory 数据类类型名称
    *
    * @return $this
    */
    public function setSubCategory($subCategory)
    {
        $this->container['subCategory'] = $subCategory;
        return $this;
    }

    /**
    * Gets subCategoryCode
    *  数据类类型业务编码
    *
    * @return string|null
    */
    public function getSubCategoryCode()
    {
        return $this->container['subCategoryCode'];
    }

    /**
    * Sets subCategoryCode
    *
    * @param string|null $subCategoryCode 数据类类型业务编码
    *
    * @return $this
    */
    public function setSubCategoryCode($subCategoryCode)
    {
        $this->container['subCategoryCode'] = $subCategoryCode;
        return $this;
    }

    /**
    * Gets description
    *  数据类类型描述
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
    * @param string|null $description 数据类类型描述
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
    *  状态
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
    * @param bool|null $enabled 状态
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets level
    *  事件等级
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 事件等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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
    * Gets sla
    *  响应时长
    *
    * @return int|null
    */
    public function getSla()
    {
        return $this->container['sla'];
    }

    /**
    * Sets sla
    *
    * @param int|null $sla 响应时长
    *
    * @return $this
    */
    public function setSla($sla)
    {
        $this->container['sla'] = $sla;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人id
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
    * @param string|null $creatorId 创建人id
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
    *  创建人名称
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
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets modifierId
    *  修改人id
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
    * @param string|null $modifierId 修改人id
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
    *  修改人名称
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
    * @param string|null $modifierName 修改人名称
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
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
    * Gets updateTime
    *  修改时间
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
    * @param string|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets dataclassBusinessCode
    *  所属数据类业务编码
    *
    * @return string|null
    */
    public function getDataclassBusinessCode()
    {
        return $this->container['dataclassBusinessCode'];
    }

    /**
    * Sets dataclassBusinessCode
    *
    * @param string|null $dataclassBusinessCode 所属数据类业务编码
    *
    * @return $this
    */
    public function setDataclassBusinessCode($dataclassBusinessCode)
    {
        $this->container['dataclassBusinessCode'] = $dataclassBusinessCode;
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

