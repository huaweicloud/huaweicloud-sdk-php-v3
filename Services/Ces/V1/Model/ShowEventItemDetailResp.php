<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventItemDetailResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventItemDetailResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    * groupId  **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    * eventState  **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    * eventLevel  **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    * eventUser  **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    * eventType  **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    * subEventType  **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    * dimensions  **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'groupId' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'eventState' => 'string',
            'eventLevel' => 'string',
            'eventUser' => 'string',
            'eventType' => 'string',
            'subEventType' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V1\Model\MetricsDimensionResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    * groupId  **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    * eventState  **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    * eventLevel  **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    * eventUser  **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    * eventType  **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    * subEventType  **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    * dimensions  **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'groupId' => null,
        'resourceId' => null,
        'resourceName' => null,
        'eventState' => null,
        'eventLevel' => null,
        'eventUser' => null,
        'eventType' => null,
        'subEventType' => null,
        'dimensions' => null
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
    * content  **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    * groupId  **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    * eventState  **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    * eventLevel  **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    * eventUser  **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    * eventType  **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    * subEventType  **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    * dimensions  **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'groupId' => 'group_id',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'eventState' => 'event_state',
            'eventLevel' => 'event_level',
            'eventUser' => 'event_user',
            'eventType' => 'event_type',
            'subEventType' => 'sub_event_type',
            'dimensions' => 'dimensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    * groupId  **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    * eventState  **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    * eventLevel  **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    * eventUser  **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    * eventType  **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    * subEventType  **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    * dimensions  **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'groupId' => 'setGroupId',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'eventState' => 'setEventState',
            'eventLevel' => 'setEventLevel',
            'eventUser' => 'setEventUser',
            'eventType' => 'setEventType',
            'subEventType' => 'setSubEventType',
            'dimensions' => 'setDimensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    * groupId  **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    * resourceName  **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    * eventState  **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    * eventLevel  **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    * eventUser  **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    * eventType  **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    * subEventType  **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    * dimensions  **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'groupId' => 'getGroupId',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'eventState' => 'getEventState',
            'eventLevel' => 'getEventLevel',
            'eventUser' => 'getEventUser',
            'eventType' => 'getEventType',
            'subEventType' => 'getSubEventType',
            'dimensions' => 'getDimensions'
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
    const EVENT_STATE_NORMAL = 'normal';
    const EVENT_STATE_WARNING = 'warning';
    const EVENT_STATE_INCIDENT = 'incident';
    const EVENT_LEVEL_CRITICAL = 'Critical';
    const EVENT_LEVEL_MAJOR = 'Major';
    const EVENT_LEVEL_MINOR = 'Minor';
    const EVENT_LEVEL_INFO = 'Info';
    const SUB_EVENT_TYPE_SUB_EVENT_OPS = 'SUB_EVENT.OPS';
    const SUB_EVENT_TYPE_SUB_EVENT_PLAN = 'SUB_EVENT.PLAN';
    const SUB_EVENT_TYPE_SUB_EVENT_CUSTOM = 'SUB_EVENT.CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventStateAllowableValues()
    {
        return [
            self::EVENT_STATE_NORMAL,
            self::EVENT_STATE_WARNING,
            self::EVENT_STATE_INCIDENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventLevelAllowableValues()
    {
        return [
            self::EVENT_LEVEL_CRITICAL,
            self::EVENT_LEVEL_MAJOR,
            self::EVENT_LEVEL_MINOR,
            self::EVENT_LEVEL_INFO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubEventTypeAllowableValues()
    {
        return [
            self::SUB_EVENT_TYPE_SUB_EVENT_OPS,
            self::SUB_EVENT_TYPE_SUB_EVENT_PLAN,
            self::SUB_EVENT_TYPE_SUB_EVENT_CUSTOM,
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['eventState'] = isset($data['eventState']) ? $data['eventState'] : null;
        $this->container['eventLevel'] = isset($data['eventLevel']) ? $data['eventLevel'] : null;
        $this->container['eventUser'] = isset($data['eventUser']) ? $data['eventUser'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['subEventType'] = isset($data['subEventType']) ? $data['subEventType'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getEventStateAllowableValues();
                if (!is_null($this->container['eventState']) && !in_array($this->container['eventState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEventLevelAllowableValues();
                if (!is_null($this->container['eventLevel']) && !in_array($this->container['eventLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['eventUser']) && (mb_strlen($this->container['eventUser']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventUser', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventUser']) && (mb_strlen($this->container['eventUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventUser']) && !preg_match("/([a-z]|[A-Z]|_|-|\/|@|\\.){0,64}/", $this->container['eventUser'])) {
                $invalidProperties[] = "invalid value for 'eventUser', must be conform to the pattern /([a-z]|[A-Z]|_|-|\/|@|\\.){0,64}/.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) > 9999)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSubEventTypeAllowableValues();
                if (!is_null($this->container['subEventType']) && !in_array($this->container['subEventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subEventType', must be one of '%s'",
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
    * Gets content
    *  **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释**： 事件内容。 **取值范围**： 长度为[1,4096]个字符。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
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
    * @param string|null $groupId **参数解释**： 所属分组。 **取值范围**： 长度只能为24个字符。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 资源ID。 **取值范围**： 长度为[1,128]个字符。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释**： 资源名称。 **取值范围**： 长度为[1,128]个字符。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets eventState
    *  **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    *
    * @return string|null
    */
    public function getEventState()
    {
        return $this->container['eventState'];
    }

    /**
    * Sets eventState
    *
    * @param string|null $eventState **参数解释**： 事件状态。 **取值范围**： 枚举类型：normal\\warning\\incident。 - normal: 正常 - warning: 警告 - incident: 故障
    *
    * @return $this
    */
    public function setEventState($eventState)
    {
        $this->container['eventState'] = $eventState;
        return $this;
    }

    /**
    * Gets eventLevel
    *  **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    *
    * @return string|null
    */
    public function getEventLevel()
    {
        return $this->container['eventLevel'];
    }

    /**
    * Sets eventLevel
    *
    * @param string|null $eventLevel **参数解释**： 事件级别。 **取值范围**： 枚举类型：Critical, Major, Minor, Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示
    *
    * @return $this
    */
    public function setEventLevel($eventLevel)
    {
        $this->container['eventLevel'] = $eventLevel;
        return $this;
    }

    /**
    * Gets eventUser
    *  **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    *
    * @return string|null
    */
    public function getEventUser()
    {
        return $this->container['eventUser'];
    }

    /**
    * Sets eventUser
    *
    * @param string|null $eventUser **参数解释**： 事件用户。 **取值范围**： 下划线、横线、斜杠、@ 符号或点号组成，长度为[0,64]个字符。
    *
    * @return $this
    */
    public function setEventUser($eventUser)
    {
        $this->container['eventUser'] = $eventUser;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType **参数解释**： 事件类型。 **取值范围**： 枚举类型：EVENT.SYS，EVENT.CUSTOM - EVENT.SYS: 系统事件。 - EVENT.CUSTOM: 自定义事件。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets subEventType
    *  **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    *
    * @return string|null
    */
    public function getSubEventType()
    {
        return $this->container['subEventType'];
    }

    /**
    * Sets subEventType
    *
    * @param string|null $subEventType **参数解释**： 事件子类。 **取值范围**： 枚举类型。 当事件类型为系统事件时，参数值为SUB_EVENT.OPS或SUB_EVENT.PLAN。 当事件类型为自定义事件时，参数值为SUB_EVENT.CUSTOM。 - SUB_EVENT.OPS：运维事件。 - SUB_EVENT.PLAN：计划事件。 - SUB_EVENT.CUSTOM：自定义事件。
    *
    * @return $this
    */
    public function setSubEventType($subEventType)
    {
        $this->container['subEventType'] = $subEventType;
        return $this;
    }

    /**
    * Gets dimensions
    *  **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetricsDimensionResp[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetricsDimensionResp[]|null $dimensions **参数解释**： 事件的维度，根据维度描述资源信息。 用于指定资源、资源分组的事件告警场景中，支持按维度配置告警规则。 **取值范围**： 目前最大支持4个维度
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
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

