<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LayoutCreateRequestPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LayoutCreateRequestPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  布局名称
    * description  描述信息
    * createTime  创建时间
    * creatorName  创建者
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * layoutJson  布局信息
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'creatorName' => 'string',
            'cloudPackId' => 'string',
            'cloudPackName' => 'string',
            'cloudPackVersion' => 'string',
            'isBuiltIn' => 'bool',
            'layoutJson' => 'object',
            'regionId' => 'string',
            'domainId' => 'string',
            'thumbnail' => 'string',
            'usedBy' => 'string',
            'layoutType' => 'string',
            'bindingId' => 'string',
            'bindingCode' => 'string',
            'fieldsSum' => 'int',
            'wizardsSum' => 'int',
            'sectionsSum' => 'int',
            'tabsSum' => 'int',
            'boaVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  布局名称
    * description  描述信息
    * createTime  创建时间
    * creatorName  创建者
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * layoutJson  布局信息
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'createTime' => null,
        'creatorName' => null,
        'cloudPackId' => null,
        'cloudPackName' => null,
        'cloudPackVersion' => null,
        'isBuiltIn' => null,
        'layoutJson' => null,
        'regionId' => null,
        'domainId' => null,
        'thumbnail' => null,
        'usedBy' => null,
        'layoutType' => null,
        'bindingId' => null,
        'bindingCode' => null,
        'fieldsSum' => null,
        'wizardsSum' => null,
        'sectionsSum' => null,
        'tabsSum' => null,
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
    * name  布局名称
    * description  描述信息
    * createTime  创建时间
    * creatorName  创建者
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * layoutJson  布局信息
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'cloudPackId' => 'cloud_pack_id',
            'cloudPackName' => 'cloud_pack_name',
            'cloudPackVersion' => 'cloud_pack_version',
            'isBuiltIn' => 'is_built_in',
            'layoutJson' => 'layout_json',
            'regionId' => 'region_id',
            'domainId' => 'domain_id',
            'thumbnail' => 'thumbnail',
            'usedBy' => 'used_by',
            'layoutType' => 'layout_type',
            'bindingId' => 'binding_id',
            'bindingCode' => 'binding_code',
            'fieldsSum' => 'fields_sum',
            'wizardsSum' => 'wizards_sum',
            'sectionsSum' => 'sections_sum',
            'tabsSum' => 'tabs_sum',
            'boaVersion' => 'boa_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  布局名称
    * description  描述信息
    * createTime  创建时间
    * creatorName  创建者
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * layoutJson  布局信息
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'cloudPackId' => 'setCloudPackId',
            'cloudPackName' => 'setCloudPackName',
            'cloudPackVersion' => 'setCloudPackVersion',
            'isBuiltIn' => 'setIsBuiltIn',
            'layoutJson' => 'setLayoutJson',
            'regionId' => 'setRegionId',
            'domainId' => 'setDomainId',
            'thumbnail' => 'setThumbnail',
            'usedBy' => 'setUsedBy',
            'layoutType' => 'setLayoutType',
            'bindingId' => 'setBindingId',
            'bindingCode' => 'setBindingCode',
            'fieldsSum' => 'setFieldsSum',
            'wizardsSum' => 'setWizardsSum',
            'sectionsSum' => 'setSectionsSum',
            'tabsSum' => 'setTabsSum',
            'boaVersion' => 'setBoaVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  布局名称
    * description  描述信息
    * createTime  创建时间
    * creatorName  创建者
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * isBuiltIn  是否内置，true内置，false非内置
    * layoutJson  布局信息
    * regionId  区域ID
    * domainId  用户ID
    * thumbnail  模板缩略图，当布局为模板时不为空
    * usedBy  被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    * layoutType  布局类型；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingId  数据类ID或流程ID；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * bindingCode  数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * fieldsSum  字段总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * wizardsSum  页面总数；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
    * sectionsSum  系统指标总数
    * tabsSum  自定义指标总数
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'cloudPackId' => 'getCloudPackId',
            'cloudPackName' => 'getCloudPackName',
            'cloudPackVersion' => 'getCloudPackVersion',
            'isBuiltIn' => 'getIsBuiltIn',
            'layoutJson' => 'getLayoutJson',
            'regionId' => 'getRegionId',
            'domainId' => 'getDomainId',
            'thumbnail' => 'getThumbnail',
            'usedBy' => 'getUsedBy',
            'layoutType' => 'getLayoutType',
            'bindingId' => 'getBindingId',
            'bindingCode' => 'getBindingCode',
            'fieldsSum' => 'getFieldsSum',
            'wizardsSum' => 'getWizardsSum',
            'sectionsSum' => 'getSectionsSum',
            'tabsSum' => 'getTabsSum',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['cloudPackId'] = isset($data['cloudPackId']) ? $data['cloudPackId'] : null;
        $this->container['cloudPackName'] = isset($data['cloudPackName']) ? $data['cloudPackName'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['layoutJson'] = isset($data['layoutJson']) ? $data['layoutJson'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['usedBy'] = isset($data['usedBy']) ? $data['usedBy'] : null;
        $this->container['layoutType'] = isset($data['layoutType']) ? $data['layoutType'] : null;
        $this->container['bindingId'] = isset($data['bindingId']) ? $data['bindingId'] : null;
        $this->container['bindingCode'] = isset($data['bindingCode']) ? $data['bindingCode'] : null;
        $this->container['fieldsSum'] = isset($data['fieldsSum']) ? $data['fieldsSum'] : null;
        $this->container['wizardsSum'] = isset($data['wizardsSum']) ? $data['wizardsSum'] : null;
        $this->container['sectionsSum'] = isset($data['sectionsSum']) ? $data['sectionsSum'] : null;
        $this->container['tabsSum'] = isset($data['tabsSum']) ? $data['tabsSum'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
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
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 0.";
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
        if ($this->container['usedBy'] === null) {
            $invalidProperties[] = "'usedBy' can't be null";
        }
            if ((mb_strlen($this->container['usedBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['usedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['bindingId']) && (mb_strlen($this->container['bindingId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bindingId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bindingCode']) && (mb_strlen($this->container['bindingCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'bindingCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bindingCode']) && (mb_strlen($this->container['bindingCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'bindingCode', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['tabsSum']) && ($this->container['tabsSum'] > 65525)) {
                $invalidProperties[] = "invalid value for 'tabsSum', must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['tabsSum']) && ($this->container['tabsSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'tabsSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  布局名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 布局名称
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
    * Gets creatorName
    *  创建者
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
    * @param string|null $creatorName 创建者
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
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
    * Gets layoutJson
    *  布局信息
    *
    * @return object|null
    */
    public function getLayoutJson()
    {
        return $this->container['layoutJson'];
    }

    /**
    * Sets layoutJson
    *
    * @param object|null $layoutJson 布局信息
    *
    * @return $this
    */
    public function setLayoutJson($layoutJson)
    {
        $this->container['layoutJson'] = $layoutJson;
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
    * @return string
    */
    public function getUsedBy()
    {
        return $this->container['usedBy'];
    }

    /**
    * Sets usedBy
    *
    * @param string $usedBy 被什么业务使用，DATACLASS/AOP_WORKFLOW/SECURITY_REPORT/DASHBOARD，及对应的字段
    *
    * @return $this
    */
    public function setUsedBy($usedBy)
    {
        $this->container['usedBy'] = $usedBy;
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
    * Gets bindingCode
    *  数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
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
    * @param string|null $bindingCode 数据类名称business_code；used_by为SECURITY_REPORT/DASHBOARD时不返回该字段
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
    *  系统指标总数
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
    * @param int|null $sectionsSum 系统指标总数
    *
    * @return $this
    */
    public function setSectionsSum($sectionsSum)
    {
        $this->container['sectionsSum'] = $sectionsSum;
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

