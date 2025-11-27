<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterProtectPolicyTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterProtectPolicyTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * templateName  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * templateType  **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    * targetKind  **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    * tag  **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    * level  **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'templateName' => 'string',
            'templateType' => 'string',
            'targetKind' => 'string',
            'tag' => 'string',
            'level' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * templateName  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * templateType  **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    * targetKind  **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    * tag  **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    * level  **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'templateName' => null,
        'templateType' => null,
        'targetKind' => null,
        'tag' => null,
        'level' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * templateName  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * templateType  **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    * targetKind  **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    * tag  **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    * level  **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'targetKind' => 'target_kind',
            'tag' => 'tag',
            'level' => 'level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * templateName  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * templateType  **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    * targetKind  **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    * tag  **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    * level  **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'targetKind' => 'setTargetKind',
            'tag' => 'setTag',
            'level' => 'setLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * templateName  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * templateType  **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    * targetKind  **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    * tag  **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    * level  **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'targetKind' => 'getTargetKind',
            'tag' => 'getTag',
            'level' => 'getLevel'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['targetKind'] = isset($data['targetKind']) ? $data['targetKind'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateName']) && !preg_match("/^.*$/", $this->container['templateName'])) {
                $invalidProperties[] = "invalid value for 'templateName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['templateType']) && (mb_strlen($this->container['templateType']) > 16)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['templateType']) && (mb_strlen($this->container['templateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateType']) && !preg_match("/^.*$/", $this->container['templateType'])) {
                $invalidProperties[] = "invalid value for 'templateType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['targetKind']) && (mb_strlen($this->container['targetKind']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetKind', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetKind']) && (mb_strlen($this->container['targetKind']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetKind', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetKind']) && !preg_match("/^.*$/", $this->container['targetKind'])) {
                $invalidProperties[] = "invalid value for 'targetKind', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 2048)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 1)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^.*$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 5)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['level']) && !preg_match("/^.*$/", $this->container['level'])) {
                $invalidProperties[] = "invalid value for 'level', must be conform to the pattern /^.*$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets templateName
    *  **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName **参数解释**： 模板名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateType
    *  **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string|null $templateType **参数解释**： 模板类型 **约束限制**： 不涉及 **取值范围**： 字符长度1-16位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets targetKind
    *  **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTargetKind()
    {
        return $this->container['targetKind'];
    }

    /**
    * Sets targetKind
    *
    * @param string|null $targetKind **参数解释**： 策略模板应用资源类型，多个资源类型通过分号分隔连接 **约束限制**： 不涉及 **取值范围**： 字符长度1-255位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTargetKind($targetKind)
    {
        $this->container['targetKind'] = $targetKind;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释**： 标签 **约束限制**： 不涉及 **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**： 推荐等级 **约束限制**： 不涉及 **取值范围**： 字符长度1-5位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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

