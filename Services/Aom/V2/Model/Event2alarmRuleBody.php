<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Event2alarmRuleBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Event2alarmRuleBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户项目id
    * name  规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
    * description  规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
    * createTime  创建时间
    * updateTime  更新时间
    * resourceProvider  事件源
    * metadata  metadata
    * enable  规则是否启用
    * triggerPolicies  触发策略
    * alarmType  告警类型。notification：直接告警。denoising：告警降噪。
    * actionRule  告警行动规则
    * inhibitRule  告警抑制规则
    * routeGroupRule  告警分组规则
    * eventNames  事件名称
    * migrated  是否迁移到2.0
    * topics  smn信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'resourceProvider' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Aom\V2\Model\Event2alarmRuleBodyMetadata',
            'enable' => 'bool',
            'triggerPolicies' => '\HuaweiCloud\SDK\Aom\V2\Model\Event2alarmRuleBodyTriggerPolicies[]',
            'alarmType' => 'string',
            'actionRule' => 'string',
            'inhibitRule' => 'string',
            'routeGroupRule' => 'string',
            'eventNames' => 'string[]',
            'migrated' => 'bool',
            'topics' => '\HuaweiCloud\SDK\Aom\V2\Model\SmnTopics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户项目id
    * name  规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
    * description  规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
    * createTime  创建时间
    * updateTime  更新时间
    * resourceProvider  事件源
    * metadata  metadata
    * enable  规则是否启用
    * triggerPolicies  触发策略
    * alarmType  告警类型。notification：直接告警。denoising：告警降噪。
    * actionRule  告警行动规则
    * inhibitRule  告警抑制规则
    * routeGroupRule  告警分组规则
    * eventNames  事件名称
    * migrated  是否迁移到2.0
    * topics  smn信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'name' => null,
        'description' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'resourceProvider' => null,
        'metadata' => null,
        'enable' => null,
        'triggerPolicies' => null,
        'alarmType' => null,
        'actionRule' => null,
        'inhibitRule' => null,
        'routeGroupRule' => null,
        'eventNames' => null,
        'migrated' => null,
        'topics' => null
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
    * userId  用户项目id
    * name  规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
    * description  规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
    * createTime  创建时间
    * updateTime  更新时间
    * resourceProvider  事件源
    * metadata  metadata
    * enable  规则是否启用
    * triggerPolicies  触发策略
    * alarmType  告警类型。notification：直接告警。denoising：告警降噪。
    * actionRule  告警行动规则
    * inhibitRule  告警抑制规则
    * routeGroupRule  告警分组规则
    * eventNames  事件名称
    * migrated  是否迁移到2.0
    * topics  smn信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'name' => 'name',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'resourceProvider' => 'resource_provider',
            'metadata' => 'metadata',
            'enable' => 'enable',
            'triggerPolicies' => 'trigger_policies',
            'alarmType' => 'alarm_type',
            'actionRule' => 'action_rule',
            'inhibitRule' => 'inhibit_rule',
            'routeGroupRule' => 'route_group_rule',
            'eventNames' => 'event_names',
            'migrated' => 'migrated',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户项目id
    * name  规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
    * description  规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
    * createTime  创建时间
    * updateTime  更新时间
    * resourceProvider  事件源
    * metadata  metadata
    * enable  规则是否启用
    * triggerPolicies  触发策略
    * alarmType  告警类型。notification：直接告警。denoising：告警降噪。
    * actionRule  告警行动规则
    * inhibitRule  告警抑制规则
    * routeGroupRule  告警分组规则
    * eventNames  事件名称
    * migrated  是否迁移到2.0
    * topics  smn信息
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'name' => 'setName',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'resourceProvider' => 'setResourceProvider',
            'metadata' => 'setMetadata',
            'enable' => 'setEnable',
            'triggerPolicies' => 'setTriggerPolicies',
            'alarmType' => 'setAlarmType',
            'actionRule' => 'setActionRule',
            'inhibitRule' => 'setInhibitRule',
            'routeGroupRule' => 'setRouteGroupRule',
            'eventNames' => 'setEventNames',
            'migrated' => 'setMigrated',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户项目id
    * name  规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
    * description  规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
    * createTime  创建时间
    * updateTime  更新时间
    * resourceProvider  事件源
    * metadata  metadata
    * enable  规则是否启用
    * triggerPolicies  触发策略
    * alarmType  告警类型。notification：直接告警。denoising：告警降噪。
    * actionRule  告警行动规则
    * inhibitRule  告警抑制规则
    * routeGroupRule  告警分组规则
    * eventNames  事件名称
    * migrated  是否迁移到2.0
    * topics  smn信息
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'name' => 'getName',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'resourceProvider' => 'getResourceProvider',
            'metadata' => 'getMetadata',
            'enable' => 'getEnable',
            'triggerPolicies' => 'getTriggerPolicies',
            'alarmType' => 'getAlarmType',
            'actionRule' => 'getActionRule',
            'inhibitRule' => 'getInhibitRule',
            'routeGroupRule' => 'getRouteGroupRule',
            'eventNames' => 'getEventNames',
            'migrated' => 'getMigrated',
            'topics' => 'getTopics'
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
    const ALARM_TYPE_NOTIFICATION = 'notification';
    const ALARM_TYPE_DENOISING = 'denoising';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmTypeAllowableValues()
    {
        return [
            self::ALARM_TYPE_NOTIFICATION,
            self::ALARM_TYPE_DENOISING,
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['triggerPolicies'] = isset($data['triggerPolicies']) ? $data['triggerPolicies'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['actionRule'] = isset($data['actionRule']) ? $data['actionRule'] : null;
        $this->container['inhibitRule'] = isset($data['inhibitRule']) ? $data['inhibitRule'] : null;
        $this->container['routeGroupRule'] = isset($data['routeGroupRule']) ? $data['routeGroupRule'] : null;
        $this->container['eventNames'] = isset($data['eventNames']) ? $data['eventNames'] : null;
        $this->container['migrated'] = isset($data['migrated']) ? $data['migrated'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['userId']) < 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 100)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceProvider']) && (mb_strlen($this->container['resourceProvider']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceProvider']) && (mb_strlen($this->container['resourceProvider']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
        if ($this->container['triggerPolicies'] === null) {
            $invalidProperties[] = "'triggerPolicies' can't be null";
        }
        if ($this->container['alarmType'] === null) {
            $invalidProperties[] = "'alarmType' can't be null";
        }
            $allowedValues = $this->getAlarmTypeAllowableValues();
                if (!is_null($this->container['alarmType']) && !in_array($this->container['alarmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['alarmType']) > 32)) {
                $invalidProperties[] = "invalid value for 'alarmType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['alarmType']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarmType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['actionRule'] === null) {
            $invalidProperties[] = "'actionRule' can't be null";
        }
            if ((mb_strlen($this->container['actionRule']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionRule', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['actionRule']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionRule', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inhibitRule']) && (mb_strlen($this->container['inhibitRule']) > 128)) {
                $invalidProperties[] = "invalid value for 'inhibitRule', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['inhibitRule']) && (mb_strlen($this->container['inhibitRule']) < 0)) {
                $invalidProperties[] = "invalid value for 'inhibitRule', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['routeGroupRule']) && (mb_strlen($this->container['routeGroupRule']) > 128)) {
                $invalidProperties[] = "invalid value for 'routeGroupRule', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['routeGroupRule']) && (mb_strlen($this->container['routeGroupRule']) < 0)) {
                $invalidProperties[] = "invalid value for 'routeGroupRule', the character length must be bigger than or equal to 0.";
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
    * Gets userId
    *  用户项目id
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 用户项目id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets name
    *  规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
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
    * @param string $name 规则名称。规则名称包含大小写字母，数字，特殊字符（_-）和汉字组成，不能以特殊字符开头或结尾，最大长度为100。
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
    *  规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
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
    * @param string|null $description 规则描述。描述包含大小写字母，数字，特殊字符（_-<>=,.）和汉字组成，不能以下划线、中划线开头结尾，最大长度为1024。
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
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  事件源
    *
    * @return string|null
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string|null $resourceProvider 事件源
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Event2alarmRuleBodyMetadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Event2alarmRuleBodyMetadata $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets enable
    *  规则是否启用
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable 规则是否启用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets triggerPolicies
    *  触发策略
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Event2alarmRuleBodyTriggerPolicies[]
    */
    public function getTriggerPolicies()
    {
        return $this->container['triggerPolicies'];
    }

    /**
    * Sets triggerPolicies
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Event2alarmRuleBodyTriggerPolicies[] $triggerPolicies 触发策略
    *
    * @return $this
    */
    public function setTriggerPolicies($triggerPolicies)
    {
        $this->container['triggerPolicies'] = $triggerPolicies;
        return $this;
    }

    /**
    * Gets alarmType
    *  告警类型。notification：直接告警。denoising：告警降噪。
    *
    * @return string
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string $alarmType 告警类型。notification：直接告警。denoising：告警降噪。
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets actionRule
    *  告警行动规则
    *
    * @return string
    */
    public function getActionRule()
    {
        return $this->container['actionRule'];
    }

    /**
    * Sets actionRule
    *
    * @param string $actionRule 告警行动规则
    *
    * @return $this
    */
    public function setActionRule($actionRule)
    {
        $this->container['actionRule'] = $actionRule;
        return $this;
    }

    /**
    * Gets inhibitRule
    *  告警抑制规则
    *
    * @return string|null
    */
    public function getInhibitRule()
    {
        return $this->container['inhibitRule'];
    }

    /**
    * Sets inhibitRule
    *
    * @param string|null $inhibitRule 告警抑制规则
    *
    * @return $this
    */
    public function setInhibitRule($inhibitRule)
    {
        $this->container['inhibitRule'] = $inhibitRule;
        return $this;
    }

    /**
    * Gets routeGroupRule
    *  告警分组规则
    *
    * @return string|null
    */
    public function getRouteGroupRule()
    {
        return $this->container['routeGroupRule'];
    }

    /**
    * Sets routeGroupRule
    *
    * @param string|null $routeGroupRule 告警分组规则
    *
    * @return $this
    */
    public function setRouteGroupRule($routeGroupRule)
    {
        $this->container['routeGroupRule'] = $routeGroupRule;
        return $this;
    }

    /**
    * Gets eventNames
    *  事件名称
    *
    * @return string[]|null
    */
    public function getEventNames()
    {
        return $this->container['eventNames'];
    }

    /**
    * Sets eventNames
    *
    * @param string[]|null $eventNames 事件名称
    *
    * @return $this
    */
    public function setEventNames($eventNames)
    {
        $this->container['eventNames'] = $eventNames;
        return $this;
    }

    /**
    * Gets migrated
    *  是否迁移到2.0
    *
    * @return bool|null
    */
    public function getMigrated()
    {
        return $this->container['migrated'];
    }

    /**
    * Sets migrated
    *
    * @param bool|null $migrated 是否迁移到2.0
    *
    * @return $this
    */
    public function setMigrated($migrated)
    {
        $this->container['migrated'] = $migrated;
        return $this;
    }

    /**
    * Gets topics
    *  smn信息
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\SmnTopics[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\SmnTopics[]|null $topics smn信息
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
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

