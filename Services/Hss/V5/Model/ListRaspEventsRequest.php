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
    * hostId  Host Id
    * startTime  查询时间段的起始时间，毫秒级时间戳(ms)
    * endTime  查询时间段的终止时间，毫秒级时间戳(ms)
    * limit  默认10
    * offset  默认0
    * appType  应用类型，包含如下1种。   - java ：java类型应用防护。
    * severity  告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
    * attackTag  攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * protectStatus  防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'hostId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'appType' => 'string',
            'severity' => 'string',
            'attackTag' => 'string',
            'protectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  Host Id
    * startTime  查询时间段的起始时间，毫秒级时间戳(ms)
    * endTime  查询时间段的终止时间，毫秒级时间戳(ms)
    * limit  默认10
    * offset  默认0
    * appType  应用类型，包含如下1种。   - java ：java类型应用防护。
    * severity  告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
    * attackTag  攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * protectStatus  防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'hostId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32',
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
    * hostId  Host Id
    * startTime  查询时间段的起始时间，毫秒级时间戳(ms)
    * endTime  查询时间段的终止时间，毫秒级时间戳(ms)
    * limit  默认10
    * offset  默认0
    * appType  应用类型，包含如下1种。   - java ：java类型应用防护。
    * severity  告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
    * attackTag  攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * protectStatus  防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'hostId' => 'host_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'appType' => 'app_type',
            'severity' => 'severity',
            'attackTag' => 'attack_tag',
            'protectStatus' => 'protect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  Host Id
    * startTime  查询时间段的起始时间，毫秒级时间戳(ms)
    * endTime  查询时间段的终止时间，毫秒级时间戳(ms)
    * limit  默认10
    * offset  默认0
    * appType  应用类型，包含如下1种。   - java ：java类型应用防护。
    * severity  告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
    * attackTag  攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * protectStatus  防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hostId' => 'setHostId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'appType' => 'setAppType',
            'severity' => 'setSeverity',
            'attackTag' => 'setAttackTag',
            'protectStatus' => 'setProtectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostId  Host Id
    * startTime  查询时间段的起始时间，毫秒级时间戳(ms)
    * endTime  查询时间段的终止时间，毫秒级时间戳(ms)
    * limit  默认10
    * offset  默认0
    * appType  应用类型，包含如下1种。   - java ：java类型应用防护。
    * severity  告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
    * attackTag  攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * protectStatus  防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hostId' => 'getHostId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
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
    const APP_TYPE_JAVA = 'java';
    const PROTECT_STATUS_CLOSED = 'closed';
    const PROTECT_STATUS_OPENED = 'opened';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppTypeAllowableValues()
    {
        return [
            self::APP_TYPE_JAVA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectStatusAllowableValues()
    {
        return [
            self::PROTECT_STATUS_CLOSED,
            self::PROTECT_STATUS_OPENED,
        ];
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAppTypeAllowableValues();
                if (!is_null($this->container['appType']) && !in_array($this->container['appType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 64)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) > 64)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getProtectStatusAllowableValues();
                if (!is_null($this->container['protectStatus']) && !in_array($this->container['protectStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  查询时间段的起始时间，毫秒级时间戳(ms)
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
    * @param int $startTime 查询时间段的起始时间，毫秒级时间戳(ms)
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
    *  查询时间段的终止时间，毫秒级时间戳(ms)
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
    * @param int $endTime 查询时间段的终止时间，毫秒级时间戳(ms)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  默认10
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
    * @param int $limit 默认10
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
    *  默认0
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
    * @param int $offset 默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets appType
    *  应用类型，包含如下1种。   - java ：java类型应用防护。
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
    * @param string|null $appType 应用类型，包含如下1种。   - java ：java类型应用防护。
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
    *  告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
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
    * @param string|null $severity 告警级别 |- 告警级别，包含如下1种。 - 0 ：Info级别告警 - 1 ：Low级别告警 - 2 ：Medium级别告警 - 3 ：High级别告警 - 4 ：Critical级别告警
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
    *  攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
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
    * @param string|null $attackTag 攻击标识 |- 攻击标识，包含如下6种。 - Attack Success：攻击成功 - Attack Attempt：攻击尝试  - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
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
    *  防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
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
    * @param string|null $protectStatus 防护状态，包含如下2种。   - closed ：未开启。   - opened ：防护中。
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

