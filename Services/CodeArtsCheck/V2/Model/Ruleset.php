<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Ruleset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Ruleset';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    * templateName  **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    * language  **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    * isDefault  **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    * ruleIds  **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * uncheckIds  **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * templateId  **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    * customAttributes  自定义规则参数项，支持修改规则阈值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'templateName' => 'string',
            'language' => 'string',
            'isDefault' => 'string',
            'ruleIds' => 'string',
            'uncheckIds' => 'string',
            'templateId' => 'string',
            'customAttributes' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomAttributes[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    * templateName  **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    * language  **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    * isDefault  **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    * ruleIds  **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * uncheckIds  **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * templateId  **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    * customAttributes  自定义规则参数项，支持修改规则阈值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'templateName' => null,
        'language' => null,
        'isDefault' => null,
        'ruleIds' => null,
        'uncheckIds' => null,
        'templateId' => null,
        'customAttributes' => null
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
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    * templateName  **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    * language  **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    * isDefault  **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    * ruleIds  **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * uncheckIds  **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * templateId  **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    * customAttributes  自定义规则参数项，支持修改规则阈值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'templateName' => 'template_name',
            'language' => 'language',
            'isDefault' => 'is_default',
            'ruleIds' => 'rule_ids',
            'uncheckIds' => 'uncheck_ids',
            'templateId' => 'template_id',
            'customAttributes' => 'custom_attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    * templateName  **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    * language  **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    * isDefault  **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    * ruleIds  **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * uncheckIds  **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * templateId  **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    * customAttributes  自定义规则参数项，支持修改规则阈值。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'templateName' => 'setTemplateName',
            'language' => 'setLanguage',
            'isDefault' => 'setIsDefault',
            'ruleIds' => 'setRuleIds',
            'uncheckIds' => 'setUncheckIds',
            'templateId' => 'setTemplateId',
            'customAttributes' => 'setCustomAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    * templateName  **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    * language  **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    * isDefault  **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    * ruleIds  **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * uncheckIds  **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    * templateId  **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    * customAttributes  自定义规则参数项，支持修改规则阈值。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'templateName' => 'getTemplateName',
            'language' => 'getLanguage',
            'isDefault' => 'getIsDefault',
            'ruleIds' => 'getRuleIds',
            'uncheckIds' => 'getUncheckIds',
            'templateId' => 'getTemplateId',
            'customAttributes' => 'getCustomAttributes'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['uncheckIds'] = isset($data['uncheckIds']) ? $data['uncheckIds'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 50)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 500)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 500.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 128)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isDefault'] === null) {
            $invalidProperties[] = "'isDefault' can't be null";
        }
            if ((mb_strlen($this->container['isDefault']) > 1)) {
                $invalidProperties[] = "invalid value for 'isDefault', the character length must be smaller than or equal to 1.";
            }
            if ((mb_strlen($this->container['isDefault']) < 1)) {
                $invalidProperties[] = "invalid value for 'isDefault', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleIds']) && (mb_strlen($this->container['ruleIds']) > 4000)) {
                $invalidProperties[] = "invalid value for 'ruleIds', the character length must be smaller than or equal to 4000.";
            }
            if (!is_null($this->container['ruleIds']) && (mb_strlen($this->container['ruleIds']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleIds', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uncheckIds']) && (mb_strlen($this->container['uncheckIds']) > 4000)) {
                $invalidProperties[] = "invalid value for 'uncheckIds', the character length must be smaller than or equal to 4000.";
            }
            if (!is_null($this->container['uncheckIds']) && (mb_strlen($this->container['uncheckIds']) < 1)) {
                $invalidProperties[] = "invalid value for 'uncheckIds', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 50)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 长度为[1~32]个字符。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets templateName
    *  **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName **参数解释:** 新规则集名称。 **约束限制:** 不能含有任意中英文，数字，点，连字符-及下划线_以外的特殊字符。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language **参数解释:** 规则集语言。 **约束限制:** 只能选择当前系统上支持的语言。 **取值范围:** 只能传一种语言。当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    *
    * @return string
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param string $isDefault **参数解释:** 是否基于已存在的规则集创建新规则集。 **约束限制:** 只能填0或1。 **取值范围:** - 0：新建空白规则集。 - 1：基于已存在的规则集创建新规则集。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets ruleIds
    *  **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    *
    * @return string|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string|null $ruleIds **参数解释:** 新启用规则ID集合，启用多条规则时，id用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets uncheckIds
    *  **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    *
    * @return string|null
    */
    public function getUncheckIds()
    {
        return $this->container['uncheckIds'];
    }

    /**
    * Sets uncheckIds
    *
    * @param string|null $uncheckIds **参数解释:** 新关闭规则ID集合，多个ID用英文逗号相连。可调用[[获取规则列表接口](https://support.huaweicloud.com/api-codecheck/ListRules.html)](tag:hws)[[获取规则列表接口](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRules.html)](tag:hws_hk)[获取规则列表接口](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取规则ID。 **约束限制:** 规则ID为32位UUID，多个ID之间用英文逗号分隔。例如：\"00034fc32ee045388365d42ca4e07fe1,002c2eda6d6c11edab16fa163e0fa374\"。 **取值范围:** 长度为[1~4000]个字符。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setUncheckIds($uncheckIds)
    {
        $this->container['uncheckIds'] = $uncheckIds;
        return $this;
    }

    /**
    * Gets templateId
    *  **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId **参数解释:** 规则集ID。当is_default参数为1时，该参数需要传参。可调用[[查询规则集列表](https://support.huaweicloud.com/api-codecheck/ListRulesets.html)](tag:hws)[[查询规则集列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ListRulesets.html)](tag:hws_hk)[查询规则集列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)获取已存在的规则集ID。 **约束限制:** 32位UUID。例如：\"da303d80d2594faca60dbcc2e29c18aa\"。 **取值范围:** 不涉及。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets customAttributes
    *  自定义规则参数项，支持修改规则阈值。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomAttributes[]|null
    */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
    * Sets customAttributes
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomAttributes[]|null $customAttributes 自定义规则参数项，支持修改规则阈值。
    *
    * @return $this
    */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;
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

