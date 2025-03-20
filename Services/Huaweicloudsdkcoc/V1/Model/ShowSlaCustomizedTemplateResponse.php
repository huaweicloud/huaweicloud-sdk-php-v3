<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlaCustomizedTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlaCustomizedTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Id
    * name  名称
    * description  描述
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * triggerLevel  触发等级
    * application  应用
    * defaultTemplate  默认模板
    * enabled  启用状态
    * slaRules  规则信息
    * effectiveType  生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    * effectivePeriod  生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    * effectiveStartTime  生效开始时间
    * effectiveEndTime  生效结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'triggerType' => 'string',
            'triggerLevel' => 'string',
            'application' => 'string',
            'defaultTemplate' => 'bool',
            'enabled' => 'bool',
            'slaRules' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaRuleInfo[]',
            'effectiveType' => 'string',
            'effectivePeriod' => 'string',
            'effectiveStartTime' => 'string',
            'effectiveEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Id
    * name  名称
    * description  描述
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * triggerLevel  触发等级
    * application  应用
    * defaultTemplate  默认模板
    * enabled  启用状态
    * slaRules  规则信息
    * effectiveType  生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    * effectivePeriod  生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    * effectiveStartTime  生效开始时间
    * effectiveEndTime  生效结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'triggerType' => null,
        'triggerLevel' => null,
        'application' => null,
        'defaultTemplate' => null,
        'enabled' => null,
        'slaRules' => null,
        'effectiveType' => null,
        'effectivePeriod' => null,
        'effectiveStartTime' => null,
        'effectiveEndTime' => null
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
    * id  Id
    * name  名称
    * description  描述
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * triggerLevel  触发等级
    * application  应用
    * defaultTemplate  默认模板
    * enabled  启用状态
    * slaRules  规则信息
    * effectiveType  生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    * effectivePeriod  生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    * effectiveStartTime  生效开始时间
    * effectiveEndTime  生效结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'triggerType' => 'trigger_type',
            'triggerLevel' => 'trigger_level',
            'application' => 'application',
            'defaultTemplate' => 'default_template',
            'enabled' => 'enabled',
            'slaRules' => 'sla_rules',
            'effectiveType' => 'effective_type',
            'effectivePeriod' => 'effective_period',
            'effectiveStartTime' => 'effective_start_time',
            'effectiveEndTime' => 'effective_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Id
    * name  名称
    * description  描述
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * triggerLevel  触发等级
    * application  应用
    * defaultTemplate  默认模板
    * enabled  启用状态
    * slaRules  规则信息
    * effectiveType  生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    * effectivePeriod  生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    * effectiveStartTime  生效开始时间
    * effectiveEndTime  生效结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'triggerType' => 'setTriggerType',
            'triggerLevel' => 'setTriggerLevel',
            'application' => 'setApplication',
            'defaultTemplate' => 'setDefaultTemplate',
            'enabled' => 'setEnabled',
            'slaRules' => 'setSlaRules',
            'effectiveType' => 'setEffectiveType',
            'effectivePeriod' => 'setEffectivePeriod',
            'effectiveStartTime' => 'setEffectiveStartTime',
            'effectiveEndTime' => 'setEffectiveEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Id
    * name  名称
    * description  描述
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * triggerLevel  触发等级
    * application  应用
    * defaultTemplate  默认模板
    * enabled  启用状态
    * slaRules  规则信息
    * effectiveType  生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    * effectivePeriod  生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    * effectiveStartTime  生效开始时间
    * effectiveEndTime  生效结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'triggerType' => 'getTriggerType',
            'triggerLevel' => 'getTriggerLevel',
            'application' => 'getApplication',
            'defaultTemplate' => 'getDefaultTemplate',
            'enabled' => 'getEnabled',
            'slaRules' => 'getSlaRules',
            'effectiveType' => 'getEffectiveType',
            'effectivePeriod' => 'getEffectivePeriod',
            'effectiveStartTime' => 'getEffectiveStartTime',
            'effectiveEndTime' => 'getEffectiveEndTime'
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
    const TRIGGER_TYPE_EVENT_TICKET = 'EVENT_TICKET';
    const TRIGGER_TYPE_ALARM_TICKET = 'ALARM_TICKET';
    const TRIGGER_TYPE_CHANGE_NOTE = 'CHANGE_NOTE';
    const TRIGGER_TYPE_TO_DO_TASKS = 'TO_DO_TASKS';
    const TRIGGER_TYPE_ISSUE_TICKET = 'ISSUE_TICKET';
    const EFFECTIVE_TYPE_MON_SUN_24_HOURS = 'MON_SUN_24_HOURS';
    const EFFECTIVE_TYPE_SPECIFIC_TIME = 'SPECIFIC_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_EVENT_TICKET,
            self::TRIGGER_TYPE_ALARM_TICKET,
            self::TRIGGER_TYPE_CHANGE_NOTE,
            self::TRIGGER_TYPE_TO_DO_TASKS,
            self::TRIGGER_TYPE_ISSUE_TICKET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectiveTypeAllowableValues()
    {
        return [
            self::EFFECTIVE_TYPE_MON_SUN_24_HOURS,
            self::EFFECTIVE_TYPE_SPECIFIC_TIME,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['triggerLevel'] = isset($data['triggerLevel']) ? $data['triggerLevel'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['defaultTemplate'] = isset($data['defaultTemplate']) ? $data['defaultTemplate'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['slaRules'] = isset($data['slaRules']) ? $data['slaRules'] : null;
        $this->container['effectiveType'] = isset($data['effectiveType']) ? $data['effectiveType'] : null;
        $this->container['effectivePeriod'] = isset($data['effectivePeriod']) ? $data['effectivePeriod'] : null;
        $this->container['effectiveStartTime'] = isset($data['effectiveStartTime']) ? $data['effectiveStartTime'] : null;
        $this->container['effectiveEndTime'] = isset($data['effectiveEndTime']) ? $data['effectiveEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 32)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getEffectiveTypeAllowableValues();
                if (!is_null($this->container['effectiveType']) && !in_array($this->container['effectiveType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'effectiveType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['effectiveType']) && (mb_strlen($this->container['effectiveType']) > 50)) {
                $invalidProperties[] = "invalid value for 'effectiveType', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['effectiveType']) && (mb_strlen($this->container['effectiveType']) < 1)) {
                $invalidProperties[] = "invalid value for 'effectiveType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectivePeriod']) && (mb_strlen($this->container['effectivePeriod']) > 50)) {
                $invalidProperties[] = "invalid value for 'effectivePeriod', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['effectivePeriod']) && (mb_strlen($this->container['effectivePeriod']) < 1)) {
                $invalidProperties[] = "invalid value for 'effectivePeriod', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  Id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
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
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets triggerLevel
    *  触发等级
    *
    * @return string|null
    */
    public function getTriggerLevel()
    {
        return $this->container['triggerLevel'];
    }

    /**
    * Sets triggerLevel
    *
    * @param string|null $triggerLevel 触发等级
    *
    * @return $this
    */
    public function setTriggerLevel($triggerLevel)
    {
        $this->container['triggerLevel'] = $triggerLevel;
        return $this;
    }

    /**
    * Gets application
    *  应用
    *
    * @return string|null
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param string|null $application 应用
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
        return $this;
    }

    /**
    * Gets defaultTemplate
    *  默认模板
    *
    * @return bool|null
    */
    public function getDefaultTemplate()
    {
        return $this->container['defaultTemplate'];
    }

    /**
    * Sets defaultTemplate
    *
    * @param bool|null $defaultTemplate 默认模板
    *
    * @return $this
    */
    public function setDefaultTemplate($defaultTemplate)
    {
        $this->container['defaultTemplate'] = $defaultTemplate;
        return $this;
    }

    /**
    * Gets enabled
    *  启用状态
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 启用状态
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets slaRules
    *  规则信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SlaRuleInfo[]|null
    */
    public function getSlaRules()
    {
        return $this->container['slaRules'];
    }

    /**
    * Sets slaRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SlaRuleInfo[]|null $slaRules 规则信息
    *
    * @return $this
    */
    public function setSlaRules($slaRules)
    {
        $this->container['slaRules'] = $slaRules;
        return $this;
    }

    /**
    * Gets effectiveType
    *  生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    *
    * @return string|null
    */
    public function getEffectiveType()
    {
        return $this->container['effectiveType'];
    }

    /**
    * Sets effectiveType
    *
    * @param string|null $effectiveType 生效类型（MON_SUN_24_HOURS一直生效、SPECIFIC_TIME阶段性生效）
    *
    * @return $this
    */
    public function setEffectiveType($effectiveType)
    {
        $this->container['effectiveType'] = $effectiveType;
        return $this;
    }

    /**
    * Gets effectivePeriod
    *  生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    *
    * @return string|null
    */
    public function getEffectivePeriod()
    {
        return $this->container['effectivePeriod'];
    }

    /**
    * Sets effectivePeriod
    *
    * @param string|null $effectivePeriod 生效周期（每天、周一、周二、周三、周四、周五、周六、周日）
    *
    * @return $this
    */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->container['effectivePeriod'] = $effectivePeriod;
        return $this;
    }

    /**
    * Gets effectiveStartTime
    *  生效开始时间
    *
    * @return string|null
    */
    public function getEffectiveStartTime()
    {
        return $this->container['effectiveStartTime'];
    }

    /**
    * Sets effectiveStartTime
    *
    * @param string|null $effectiveStartTime 生效开始时间
    *
    * @return $this
    */
    public function setEffectiveStartTime($effectiveStartTime)
    {
        $this->container['effectiveStartTime'] = $effectiveStartTime;
        return $this;
    }

    /**
    * Gets effectiveEndTime
    *  生效结束时间
    *
    * @return string|null
    */
    public function getEffectiveEndTime()
    {
        return $this->container['effectiveEndTime'];
    }

    /**
    * Sets effectiveEndTime
    *
    * @param string|null $effectiveEndTime 生效结束时间
    *
    * @return $this
    */
    public function setEffectiveEndTime($effectiveEndTime)
    {
        $this->container['effectiveEndTime'] = $effectiveEndTime;
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

