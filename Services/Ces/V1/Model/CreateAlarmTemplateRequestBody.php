<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAlarmTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAlarmTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
    * templateDescription  **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    * namespace  **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    * dimensionName  **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    * templateItems  创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'templateDescription' => 'string',
            'namespace' => 'string',
            'dimensionName' => 'string',
            'templateItems' => '\HuaweiCloud\SDK\Ces\V1\Model\TemplateItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
    * templateDescription  **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    * namespace  **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    * dimensionName  **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    * templateItems  创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'templateDescription' => null,
        'namespace' => null,
        'dimensionName' => null,
        'templateItems' => null
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
    * templateName  **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
    * templateDescription  **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    * namespace  **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    * dimensionName  **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    * templateItems  创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'templateDescription' => 'template_description',
            'namespace' => 'namespace',
            'dimensionName' => 'dimension_name',
            'templateItems' => 'template_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
    * templateDescription  **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    * namespace  **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    * dimensionName  **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    * templateItems  创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'templateDescription' => 'setTemplateDescription',
            'namespace' => 'setNamespace',
            'dimensionName' => 'setDimensionName',
            'templateItems' => 'setTemplateItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
    * templateDescription  **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    * namespace  **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    * dimensionName  **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    * templateItems  创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'templateDescription' => 'getTemplateDescription',
            'namespace' => 'getNamespace',
            'dimensionName' => 'getDimensionName',
            'templateItems' => 'getTemplateItems'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateDescription'] = isset($data['templateDescription']) ? $data['templateDescription'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensionName'] = isset($data['dimensionName']) ? $data['dimensionName'] : null;
        $this->container['templateItems'] = isset($data['templateItems']) ? $data['templateItems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
            }
        if ($this->container['dimensionName'] === null) {
            $invalidProperties[] = "'dimensionName' can't be null";
        }
            if ((mb_strlen($this->container['dimensionName']) > 131)) {
                $invalidProperties[] = "invalid value for 'dimensionName', the character length must be smaller than or equal to 131.";
            }
            if ((mb_strlen($this->container['dimensionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimensionName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/", $this->container['dimensionName'])) {
                $invalidProperties[] = "invalid value for 'dimensionName', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/.";
            }
        if ($this->container['templateItems'] === null) {
            $invalidProperties[] = "'templateItems' can't be null";
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
    * Gets templateName
    *  **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
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
    * @param string $templateName **参数解释** 告自定义告警模板名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为1-128。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateDescription
    *  **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTemplateDescription()
    {
        return $this->container['templateDescription'];
    }

    /**
    * Sets templateDescription
    *
    * @param string|null $templateDescription **参数解释** 自定义告警模板详细描述 **约束限制**： 不涉及 **取值范围**： 长度范围[0,256]。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTemplateDescription($templateDescription)
    {
        $this->container['templateDescription'] = $templateDescription;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace **参数解释** 创建自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensionName
    *  **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDimensionName()
    {
        return $this->container['dimensionName'];
    }

    /**
    * Sets dimensionName
    *
    * @param string $dimensionName **参数解释** 资源类型对应的指标监控维度，选择弹性云服务器，则维度为云服务器，dimension_name值为instance_id；各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及 **取值范围**： 必须以字母开头，多维度用\",\"分隔，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。目前最大支持4个维度。字符串总最大长度为131。举例：单维度场景：instance_id；多维度场景：instance_id,disk        **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDimensionName($dimensionName)
    {
        $this->container['dimensionName'] = $dimensionName;
        return $this;
    }

    /**
    * Gets templateItems
    *  创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\TemplateItem[]
    */
    public function getTemplateItems()
    {
        return $this->container['templateItems'];
    }

    /**
    * Sets templateItems
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\TemplateItem[] $templateItems 创建自定义告警模板添加一个或者多个指标的告警规则；目前最多可增加30组告警规则策略。
    *
    * @return $this
    */
    public function setTemplateItems($templateItems)
    {
        $this->container['templateItems'] = $templateItems;
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

