<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmId  **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmStatus  **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    * alarmLevel  **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    * from  **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * to  **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * start  **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    * limit  **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'alarmId' => 'string',
            'alarmName' => 'string',
            'alarmStatus' => 'string',
            'alarmLevel' => 'int',
            'namespace' => 'string',
            'from' => 'string',
            'to' => 'string',
            'start' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmId  **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmStatus  **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    * alarmLevel  **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    * from  **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * to  **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * start  **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    * limit  **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'alarmId' => null,
        'alarmName' => null,
        'alarmStatus' => null,
        'alarmLevel' => null,
        'namespace' => null,
        'from' => null,
        'to' => null,
        'start' => null,
        'limit' => null
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
    * groupId  **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmId  **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmStatus  **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    * alarmLevel  **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    * from  **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * to  **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * start  **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    * limit  **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'alarmId' => 'alarm_id',
            'alarmName' => 'alarm_name',
            'alarmStatus' => 'alarm_status',
            'alarmLevel' => 'alarm_level',
            'namespace' => 'namespace',
            'from' => 'from',
            'to' => 'to',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmId  **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmStatus  **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    * alarmLevel  **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    * from  **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * to  **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * start  **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    * limit  **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'alarmId' => 'setAlarmId',
            'alarmName' => 'setAlarmName',
            'alarmStatus' => 'setAlarmStatus',
            'alarmLevel' => 'setAlarmLevel',
            'namespace' => 'setNamespace',
            'from' => 'setFrom',
            'to' => 'setTo',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmId  **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    * alarmName  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    * alarmStatus  **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    * alarmLevel  **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    * from  **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * to  **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    * start  **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    * limit  **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'alarmId' => 'getAlarmId',
            'alarmName' => 'getAlarmName',
            'alarmStatus' => 'getAlarmStatus',
            'alarmLevel' => 'getAlarmLevel',
            'namespace' => 'getNamespace',
            'from' => 'getFrom',
            'to' => 'getTo',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
    const ALARM_STATUS_OK = 'ok';
    const ALARM_STATUS_ALARM = 'alarm';
    const ALARM_STATUS_INSUFFICIENT_DATA = 'insufficient_data';
    const ALARM_STATUS_INVALID = 'invalid';
    const ALARM_LEVEL_1 = 1;
    const ALARM_LEVEL_2 = 2;
    const ALARM_LEVEL_3 = 3;
    const ALARM_LEVEL_4 = 4;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmStatusAllowableValues()
    {
        return [
            self::ALARM_STATUS_OK,
            self::ALARM_STATUS_ALARM,
            self::ALARM_STATUS_INSUFFICIENT_DATA,
            self::ALARM_STATUS_INVALID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmLevelAllowableValues()
    {
        return [
            self::ALARM_LEVEL_1,
            self::ALARM_LEVEL_2,
            self::ALARM_LEVEL_3,
            self::ALARM_LEVEL_4,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && !preg_match("/^rg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^rg([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            if (!is_null($this->container['alarmId']) && !preg_match("/^al([0-9A-Za-z]){22}$/", $this->container['alarmId'])) {
                $invalidProperties[] = "invalid value for 'alarmId', must be conform to the pattern /^al([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['alarmName']) && (mb_strlen($this->container['alarmName']) > 128)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['alarmName']) && (mb_strlen($this->container['alarmName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['alarmName'])) {
                $invalidProperties[] = "invalid value for 'alarmName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            $allowedValues = $this->getAlarmStatusAllowableValues();
                if (!is_null($this->container['alarmStatus']) && !in_array($this->container['alarmStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAlarmLevelAllowableValues();
                if (!is_null($this->container['alarmLevel']) && !in_array($this->container['alarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) > 13)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) < 1)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['from']) && !preg_match("/^(0|[1-9]([0-9]+))$/", $this->container['from'])) {
                $invalidProperties[] = "invalid value for 'from', must be conform to the pattern /^(0|[1-9]([0-9]+))$/.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) > 13)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) < 1)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['to']) && !preg_match("/^(0|[1-9]([0-9]+))$/", $this->container['to'])) {
                $invalidProperties[] = "invalid value for 'to', must be conform to the pattern /^(0|[1-9]([0-9]+))$/.";
            }
            if (!is_null($this->container['start']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['start'])) {
                $invalidProperties[] = "invalid value for 'start', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
            }
            if (!is_null($this->container['limit']) && !preg_match("/^([1-9]|[1-9][0-9]|100)$/", $this->container['limit'])) {
                $invalidProperties[] = "invalid value for 'limit', must be conform to the pattern /^([1-9]|[1-9][0-9]|100)$/.";
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
    * Gets groupId
    *  **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
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
    * @param string|null $groupId **参数解释**： 当前资源所在分组信息 **约束限制**： 不涉及。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets alarmId
    *  **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId **参数解释**： 告警规则ID **约束限制**： 不涉及 **取值范围**： 以al开头，后跟22位由字母或数字组成的字符串，字符长度为24 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmName
    *  **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string|null $alarmName **参数解释**： 告警规则名称 **约束限制**： 不涉及 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1, 128]个字符 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus **参数解释**： 告警状态。 **约束限制**： 不涉及 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param int|null $alarmLevel **参数解释**： 告警历史的告警级别，值为1,2,3,4 **约束限制**： 不涉及 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)” **约束限制**： 不涉及 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from **参数解释**： 通过时间筛选traces的起始时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to **参数解释**： 通过时间筛选traces的终止时间(包括传入时间)，为timestamp **约束限制**： 不涉及 **取值范围**： 长度为[1,13]个字符 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets start
    *  **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start **参数解释**： 分页查询时查询的起始位置，表示从第几条数据开始 **约束限制**： 不涉及。 **取值范围**： 大于等于0的整数 **默认取值**： 0
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit **参数解释**： 本次查询的最大条目数 **约束限制**： 不涉及。 **取值范围**： 取值范围[1,100] **默认取值**： 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

