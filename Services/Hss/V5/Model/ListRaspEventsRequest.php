<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRaspEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRaspEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  Host Id
    * startTime  **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * endTime  **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * appType  **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    * protectStatus  **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'hostId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'appType' => 'string',
            'severity' => 'string',
            'attackTag' => 'string',
            'protectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  Host Id
    * startTime  **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * endTime  **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * appType  **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    * protectStatus  **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'hostId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'appType' => null,
        'severity' => null,
        'attackTag' => null,
        'protectStatus' => null
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
    * hostId  Host Id
    * startTime  **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * endTime  **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * appType  **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    * protectStatus  **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'hostId' => 'host_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'appType' => 'app_type',
            'severity' => 'severity',
            'attackTag' => 'attack_tag',
            'protectStatus' => 'protect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  Host Id
    * startTime  **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * endTime  **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * appType  **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    * protectStatus  **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'hostId' => 'setHostId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'appType' => 'setAppType',
            'severity' => 'setSeverity',
            'attackTag' => 'setAttackTag',
            'protectStatus' => 'setProtectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  Host Id
    * startTime  **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * endTime  **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    * appType  **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    * protectStatus  **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'hostId' => 'getHostId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'appType' => 'getAppType',
            'severity' => 'getSeverity',
            'attackTag' => 'getAttackTag',
            'protectStatus' => 'getProtectStatus'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['attackTag'] = isset($data['attackTag']) ? $data['attackTag'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
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
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 64)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appType']) && !preg_match("/^(java)$/", $this->container['appType'])) {
                $invalidProperties[] = "invalid value for 'appType', must be conform to the pattern /^(java)$/.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 64)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severity']) && !preg_match("/^(Security|Low|Medium|High|Critical)$/", $this->container['severity'])) {
                $invalidProperties[] = "invalid value for 'severity', must be conform to the pattern /^(Security|Low|Medium|High|Critical)$/.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) > 64)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attackTag']) && !preg_match("/^(Attack Success|Attack Attempt|Attack Blocked|Abnormal Behavior|Collapsible Host|System Vulnerability)$/", $this->container['attackTag'])) {
                $invalidProperties[] = "invalid value for 'attackTag', must be conform to the pattern /^(Attack Success|Attack Attempt|Attack Blocked|Abnormal Behavior|Collapsible Host|System Vulnerability)$/.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && !preg_match("/^(closed|opened)$/", $this->container['protectStatus'])) {
                $invalidProperties[] = "invalid value for 'protectStatus', must be conform to the pattern /^(closed|opened)$/.";
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
    * Gets hostId
    *  Host Id
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
    * @param string $hostId Host Id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime **参数解释**: 应用防护事件的查询起始时间（Unix时间戳），与end_time配合筛选指定时间段内的事件 **时间格式** Unix时间戳（精确到毫秒，如1736414463000表示2024-12-10 10:41:03） **约束限制**: 需小于end_time，否则返回空结果；时间戳需为有效时间（1970-01-01 00:00:00至今） **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime **参数解释**: 查询时间段的终止时间，毫秒级时间戳(ms) **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 无
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets appType
    *  **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType **参数解释** 应用防护的应用类型，用于筛选指定类型应用的防护事件 **约束限制** 当前仅支持java类型，传其他值返回空结果，区分大小写 **取值范围** - java：Java语言开发的应用防护事件 **默认取值** 无（查询所有支持的应用类型事件）
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets attackTag
    *  **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    *
    * @return string|null
    */
    public function getAttackTag()
    {
        return $this->container['attackTag'];
    }

    /**
    * Sets attackTag
    *
    * @param string|null $attackTag **参数解释** 应用防护事件的攻击类型标识，用于筛选指定攻击类型的事件 **约束限制** 取值区分大小写，必须与指定格式一致，否则返回空结果 **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性 **默认取值** 无
    *
    * @return $this
    */
    public function setAttackTag($attackTag)
    {
        $this->container['attackTag'] = $attackTag;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus **参数解释** 应用防护的启用状态，用于筛选指定防护状态下的事件 **约束限制** 取值区分大小写，必须在指定范围内，否则返回空结果 **取值范围** - closed：未开启防护 - opened：已开启防护 **默认取值** 无（查询所有防护状态的事件）
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
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

