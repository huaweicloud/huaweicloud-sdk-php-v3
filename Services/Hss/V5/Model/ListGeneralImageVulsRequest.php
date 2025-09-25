<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGeneralImageVulsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGeneralImageVulsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * cveId  **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    * status  **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'type' => 'string',
            'handleStatus' => 'string',
            'imageType' => 'string',
            'severityLevel' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'cveId' => 'string',
            'labelList' => 'string[]',
            'status' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * cveId  **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    * status  **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'type' => null,
        'handleStatus' => null,
        'imageType' => null,
        'severityLevel' => null,
        'vulId' => null,
        'vulName' => null,
        'cveId' => null,
        'labelList' => null,
        'status' => null,
        'clusterId' => null
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * cveId  **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    * status  **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'type' => 'type',
            'handleStatus' => 'handle_status',
            'imageType' => 'image_type',
            'severityLevel' => 'severity_level',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'cveId' => 'cve_id',
            'labelList' => 'label_list',
            'status' => 'status',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * cveId  **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    * status  **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'type' => 'setType',
            'handleStatus' => 'setHandleStatus',
            'imageType' => 'setImageType',
            'severityLevel' => 'setSeverityLevel',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'cveId' => 'setCveId',
            'labelList' => 'setLabelList',
            'status' => 'setStatus',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * cveId  **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    * status  **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'type' => 'getType',
            'handleStatus' => 'getHandleStatus',
            'imageType' => 'getImageType',
            'severityLevel' => 'getSeverityLevel',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'cveId' => 'getCveId',
            'labelList' => 'getLabelList',
            'status' => 'getStatus',
            'clusterId' => 'getClusterId'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['cveId'] = isset($data['cveId']) ? $data['cveId'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!preg_match("/^linux_vul|app_vul$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^linux_vul|app_vul$/.";
            }
        if ($this->container['handleStatus'] === null) {
            $invalidProperties[] = "'handleStatus' can't be null";
        }
            if (!preg_match("/^unhandled|handled$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^unhandled|handled$/.";
            }
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
        }
            if (!preg_match("/^local|registry|cicd|cluster$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^local|registry|cicd|cluster$/.";
            }
            if (!is_null($this->container['severityLevel']) && !preg_match("/^Critical|High|Medium|Low$/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /^Critical|High|Medium|Low$/.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) > 256)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^vul_status_unfix|vul_status_ignored$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^vul_status_unfix|vul_status_ignored$/.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string $handleStatus **参数解释**: 漏洞的处理状态 **约束限制**: 不涉及 **取值范围**:： - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string $imageType **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释**: 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**: - Critical：严重 - High：高危 - Medium：中危 - Low：低危  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets cveId
    *  **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getCveId()
    {
        return $this->container['cveId'];
    }

    /**
    * Sets cveId
    *
    * @param string|null $cveId **参数解释**: 漏洞编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCveId($cveId)
    {
        $this->container['cveId'] = $cveId;
        return $this;
    }

    /**
    * Gets labelList
    *  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    *
    * @return string[]|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param string[]|null $labelList **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值10
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 漏洞当前状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

