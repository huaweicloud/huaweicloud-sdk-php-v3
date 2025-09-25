<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulReportRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulReportRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
    * status  **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetValue' => 'string',
            'groupName' => 'string',
            'hostIds' => 'string[]',
            'hostName' => 'string',
            'hostIp' => 'string',
            'severityLevel' => 'string',
            'handleStatus' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
    * status  **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetValue' => null,
        'groupName' => null,
        'hostIds' => null,
        'hostName' => null,
        'hostIp' => null,
        'severityLevel' => null,
        'handleStatus' => null,
        'status' => null
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
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
    * status  **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetValue' => 'asset_value',
            'groupName' => 'group_name',
            'hostIds' => 'host_ids',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'severityLevel' => 'severity_level',
            'handleStatus' => 'handle_status',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
    * status  **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'assetValue' => 'setAssetValue',
            'groupName' => 'setGroupName',
            'hostIds' => 'setHostIds',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'severityLevel' => 'setSeverityLevel',
            'handleStatus' => 'setHandleStatus',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
    * status  **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'assetValue' => 'getAssetValue',
            'groupName' => 'getGroupName',
            'hostIds' => 'getHostIds',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'severityLevel' => 'getSeverityLevel',
            'handleStatus' => 'getHandleStatus',
            'status' => 'getStatus'
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
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && !preg_match("/^.*$/", $this->container['hostIp'])) {
                $invalidProperties[] = "invalid value for 'hostIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severityLevel']) && !preg_match("/^High|Medium|Low|Security$/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /^High|Medium|Low|Security$/.";
            }
        if ($this->container['handleStatus'] === null) {
            $invalidProperties[] = "'handleStatus' can't be null";
        }
            if ((mb_strlen($this->container['handleStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^unhandled|handled$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^unhandled|handled$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^vul_status_unfix|vul_status_ignored|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^vul_status_unfix|vul_status_ignored|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot$/.";
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
    * Gets assetValue
    *  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产。 - common：一般资产。 - test：测试资产。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 0-100个items **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**： 主机ip **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释**: 漏洞风险等级 **约束限制**: 不涉及 **取值范围**: - High：高。 - Medium：中等。 - Low：低。 - Security：安全。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
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
    * @param string $handleStatus **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理。 - handled：已处理。  **默认取值**: 不涉及
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
    *  **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 主机的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix：未处理。 - vul_status_ignored：已忽略。 - vul_status_verified：验证中。 - vul_status_fixing：修复中。 - vul_status_fixed：已修复。 - vul_status_reboot：修复待重启。 - vul_status_failed：修复失败。 - vul_status_fix_after_reboot：请重启主机再次修复。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

