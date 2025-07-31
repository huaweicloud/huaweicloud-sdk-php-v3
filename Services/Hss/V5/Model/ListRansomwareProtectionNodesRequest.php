<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRansomwareProtectionNodesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRansomwareProtectionNodesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  服务器名称
    * hostId  服务器ID
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * hostIp  服务器IP地址,服务器公网IP地址
    * privateIp  服务器私有IP
    * hostStatus  主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    * ransomProtectionStatus  勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    * protectPolicyName  勒索防护策略名称
    * policyName  防护策略名称
    * policyId  防护策略id
    * agentStatus  Agent状态
    * groupId  服务器组ID
    * groupName  服务器组名称
    * lastDays  查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'hostName' => 'string',
            'hostId' => 'string',
            'osType' => 'string',
            'hostIp' => 'string',
            'privateIp' => 'string',
            'hostStatus' => 'string',
            'ransomProtectionStatus' => 'string',
            'protectPolicyName' => 'string',
            'policyName' => 'string',
            'policyId' => 'string',
            'agentStatus' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'lastDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  服务器名称
    * hostId  服务器ID
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * hostIp  服务器IP地址,服务器公网IP地址
    * privateIp  服务器私有IP
    * hostStatus  主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    * ransomProtectionStatus  勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    * protectPolicyName  勒索防护策略名称
    * policyName  防护策略名称
    * policyId  防护策略id
    * agentStatus  Agent状态
    * groupId  服务器组ID
    * groupName  服务器组名称
    * lastDays  查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'hostName' => null,
        'hostId' => null,
        'osType' => null,
        'hostIp' => null,
        'privateIp' => null,
        'hostStatus' => null,
        'ransomProtectionStatus' => null,
        'protectPolicyName' => null,
        'policyName' => null,
        'policyId' => null,
        'agentStatus' => null,
        'groupId' => null,
        'groupName' => null,
        'lastDays' => 'int64'
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  服务器名称
    * hostId  服务器ID
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * hostIp  服务器IP地址,服务器公网IP地址
    * privateIp  服务器私有IP
    * hostStatus  主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    * ransomProtectionStatus  勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    * protectPolicyName  勒索防护策略名称
    * policyName  防护策略名称
    * policyId  防护策略id
    * agentStatus  Agent状态
    * groupId  服务器组ID
    * groupName  服务器组名称
    * lastDays  查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'osType' => 'os_type',
            'hostIp' => 'host_ip',
            'privateIp' => 'private_ip',
            'hostStatus' => 'host_status',
            'ransomProtectionStatus' => 'ransom_protection_status',
            'protectPolicyName' => 'protect_policy_name',
            'policyName' => 'policy_name',
            'policyId' => 'policy_id',
            'agentStatus' => 'agent_status',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'lastDays' => 'last_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  服务器名称
    * hostId  服务器ID
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * hostIp  服务器IP地址,服务器公网IP地址
    * privateIp  服务器私有IP
    * hostStatus  主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    * ransomProtectionStatus  勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    * protectPolicyName  勒索防护策略名称
    * policyName  防护策略名称
    * policyId  防护策略id
    * agentStatus  Agent状态
    * groupId  服务器组ID
    * groupName  服务器组名称
    * lastDays  查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'osType' => 'setOsType',
            'hostIp' => 'setHostIp',
            'privateIp' => 'setPrivateIp',
            'hostStatus' => 'setHostStatus',
            'ransomProtectionStatus' => 'setRansomProtectionStatus',
            'protectPolicyName' => 'setProtectPolicyName',
            'policyName' => 'setPolicyName',
            'policyId' => 'setPolicyId',
            'agentStatus' => 'setAgentStatus',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'lastDays' => 'setLastDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostName  服务器名称
    * hostId  服务器ID
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * hostIp  服务器IP地址,服务器公网IP地址
    * privateIp  服务器私有IP
    * hostStatus  主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    * ransomProtectionStatus  勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    * protectPolicyName  勒索防护策略名称
    * policyName  防护策略名称
    * policyId  防护策略id
    * agentStatus  Agent状态
    * groupId  服务器组ID
    * groupName  服务器组名称
    * lastDays  查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'osType' => 'getOsType',
            'hostIp' => 'getHostIp',
            'privateIp' => 'getPrivateIp',
            'hostStatus' => 'getHostStatus',
            'ransomProtectionStatus' => 'getRansomProtectionStatus',
            'protectPolicyName' => 'getProtectPolicyName',
            'policyName' => 'getPolicyName',
            'policyId' => 'getPolicyId',
            'agentStatus' => 'getAgentStatus',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'lastDays' => 'getLastDays'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['ransomProtectionStatus'] = isset($data['ransomProtectionStatus']) ? $data['ransomProtectionStatus'] : null;
        $this->container['protectPolicyName'] = isset($data['protectPolicyName']) ? $data['protectPolicyName'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['lastDays'] = isset($data['lastDays']) ? $data['lastDays'] : null;
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
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^Linux|Windows$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^Linux|Windows$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^((25[0-5]|2[0-4]\\d|[01]?\\d\\d?)\\.){3}(25[0-5]|2[0-4]\\d|[01]?\\d\\d?)$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^((25[0-5]|2[0-4]\\d|[01]?\\d\\d?)\\.){3}(25[0-5]|2[0-4]\\d|[01]?\\d\\d?)$/.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostStatus']) && !preg_match("/^ACTIVE|SHUTOFF$/", $this->container['hostStatus'])) {
                $invalidProperties[] = "invalid value for 'hostStatus', must be conform to the pattern /^ACTIVE|SHUTOFF$/.";
            }
            if (!is_null($this->container['ransomProtectionStatus']) && (mb_strlen($this->container['ransomProtectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ransomProtectionStatus']) && (mb_strlen($this->container['ransomProtectionStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ransomProtectionStatus']) && !preg_match("/^closed|opened|opening|closing|protect_failed|protect_degraded$/", $this->container['ransomProtectionStatus'])) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', must be conform to the pattern /^closed|opened|opening|closing|protect_failed|protect_degraded$/.";
            }
            if (!is_null($this->container['protectPolicyName']) && (mb_strlen($this->container['protectPolicyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectPolicyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectPolicyName']) && (mb_strlen($this->container['protectPolicyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectPolicyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectPolicyName']) && !preg_match("/^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/", $this->container['protectPolicyName'])) {
                $invalidProperties[] = "invalid value for 'protectPolicyName', must be conform to the pattern /^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyName']) && !preg_match("/^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^[A-Za-z0-9\\u4E00-\\u9FA5,\\.\\u3002\\uff0c_-]+$/.";
            }
            if (!is_null($this->container['lastDays']) && ($this->container['lastDays'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastDays', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastDays']) && ($this->container['lastDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastDays', must be bigger than or equal to 0.";
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
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
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
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  服务器ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets hostIp
    *  服务器IP地址,服务器公网IP地址
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
    * @param string|null $hostIp 服务器IP地址,服务器公网IP地址
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  服务器私有IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 服务器私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets hostStatus
    *  主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus 主机状态，包含如下3种。   - 不传参默认为全部。   - ACTIVE ：正在运行。   - SHUTOFF ：关机。
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets ransomProtectionStatus
    *  勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    *
    * @return string|null
    */
    public function getRansomProtectionStatus()
    {
        return $this->container['ransomProtectionStatus'];
    }

    /**
    * Sets ransomProtectionStatus
    *
    * @param string|null $ransomProtectionStatus 勒索防护状态，包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级。
    *
    * @return $this
    */
    public function setRansomProtectionStatus($ransomProtectionStatus)
    {
        $this->container['ransomProtectionStatus'] = $ransomProtectionStatus;
        return $this;
    }

    /**
    * Gets protectPolicyName
    *  勒索防护策略名称
    *
    * @return string|null
    */
    public function getProtectPolicyName()
    {
        return $this->container['protectPolicyName'];
    }

    /**
    * Sets protectPolicyName
    *
    * @param string|null $protectPolicyName 勒索防护策略名称
    *
    * @return $this
    */
    public function setProtectPolicyName($protectPolicyName)
    {
        $this->container['protectPolicyName'] = $protectPolicyName;
        return $this;
    }

    /**
    * Gets policyName
    *  防护策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 防护策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyId
    *  防护策略id
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 防护策略id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets agentStatus
    *  Agent状态
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus Agent状态
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets groupId
    *  服务器组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 服务器组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  服务器组名称
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
    * @param string|null $groupName 服务器组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets lastDays
    *  查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @return int|null
    */
    public function getLastDays()
    {
        return $this->container['lastDays'];
    }

    /**
    * Sets lastDays
    *
    * @param int|null $lastDays 查询时间范围天数，1~30天，若不填，则默认查询一天
    *
    * @return $this
    */
    public function setLastDays($lastDays)
    {
        $this->container['lastDays'] = $lastDays;
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

