<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHostVulsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHostVulsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'hostId' => 'string',
            'type' => 'string',
            'vulName' => 'string',
            'handleStatus' => 'string',
            'status' => 'string',
            'repairPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'hostId' => null,
        'type' => null,
        'vulName' => null,
        'handleStatus' => null,
        'status' => null,
        'repairPriority' => null
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
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'hostId' => 'host_id',
            'type' => 'type',
            'vulName' => 'vul_name',
            'handleStatus' => 'handle_status',
            'status' => 'status',
            'repairPriority' => 'repair_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'hostId' => 'setHostId',
            'type' => 'setType',
            'vulName' => 'setVulName',
            'handleStatus' => 'setHandleStatus',
            'status' => 'setStatus',
            'repairPriority' => 'setRepairPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
    * vulName  **参数解释**: 漏洞名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'hostId' => 'getHostId',
            'type' => 'getType',
            'vulName' => 'getVulName',
            'handleStatus' => 'getHandleStatus',
            'status' => 'getStatus',
            'repairPriority' => 'getRepairPriority'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
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
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^(linux_vul|windows_vul|web_cms|app_vul|urgent_vul)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(linux_vul|windows_vul|web_cms|app_vul|urgent_vul)$/.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && !preg_match("/^.*$/", $this->container['vulName'])) {
                $invalidProperties[] = "invalid value for 'vulName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && !preg_match("/^(unhandled|handled)$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^(unhandled|handled)$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(vul_status_unfix|vul_status_unfix|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(vul_status_unfix|vul_status_unfix|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot)$/.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 10)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairPriority']) && !preg_match("/^(Critical|High|Medium|Low)$/", $this->container['repairPriority'])) {
                $invalidProperties[] = "invalid value for 'repairPriority', must be conform to the pattern /^(Critical|High|Medium|Low)$/.";
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
    * Gets hostId
    *  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
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
    * @param string|null $type **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: linux_vul : linux漏洞
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets handleStatus
    *  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled ：未处理 - handled : 已处理  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets repairPriority
    *  **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRepairPriority()
    {
        return $this->container['repairPriority'];
    }

    /**
    * Sets repairPriority
    *
    * @param string|null $repairPriority **参数解释**: 漏洞修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
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

