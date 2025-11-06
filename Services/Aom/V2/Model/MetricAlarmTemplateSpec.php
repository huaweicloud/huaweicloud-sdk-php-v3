<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricAlarmTemplateSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricAlarmTemplateSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * monitorType  监控类型。
    * triggerConditions  触发条件。
    * noDataConditions  数据不足条件。
    * alarmTags  告警标签。
    * recoveryConditions  recoveryConditions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmSubtype' => 'string',
            'alarmSource' => 'string',
            'monitorType' => 'string',
            'triggerConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\TemplateTriggerCondition[]',
            'noDataConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\NoDataCondition[]',
            'alarmTags' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmTags[]',
            'recoveryConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\RecoveryCondition'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * monitorType  监控类型。
    * triggerConditions  触发条件。
    * noDataConditions  数据不足条件。
    * alarmTags  告警标签。
    * recoveryConditions  recoveryConditions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmSubtype' => null,
        'alarmSource' => null,
        'monitorType' => null,
        'triggerConditions' => null,
        'noDataConditions' => null,
        'alarmTags' => null,
        'recoveryConditions' => null
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
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * monitorType  监控类型。
    * triggerConditions  触发条件。
    * noDataConditions  数据不足条件。
    * alarmTags  告警标签。
    * recoveryConditions  recoveryConditions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmSubtype' => 'alarm_subtype',
            'alarmSource' => 'alarm_source',
            'monitorType' => 'monitor_type',
            'triggerConditions' => 'trigger_conditions',
            'noDataConditions' => 'no_data_conditions',
            'alarmTags' => 'alarm_tags',
            'recoveryConditions' => 'recovery_conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * monitorType  监控类型。
    * triggerConditions  触发条件。
    * noDataConditions  数据不足条件。
    * alarmTags  告警标签。
    * recoveryConditions  recoveryConditions
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmSubtype' => 'setAlarmSubtype',
            'alarmSource' => 'setAlarmSource',
            'monitorType' => 'setMonitorType',
            'triggerConditions' => 'setTriggerConditions',
            'noDataConditions' => 'setNoDataConditions',
            'alarmTags' => 'setAlarmTags',
            'recoveryConditions' => 'setRecoveryConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * monitorType  监控类型。
    * triggerConditions  触发条件。
    * noDataConditions  数据不足条件。
    * alarmTags  告警标签。
    * recoveryConditions  recoveryConditions
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmSubtype' => 'getAlarmSubtype',
            'alarmSource' => 'getAlarmSource',
            'monitorType' => 'getMonitorType',
            'triggerConditions' => 'getTriggerConditions',
            'noDataConditions' => 'getNoDataConditions',
            'alarmTags' => 'getAlarmTags',
            'recoveryConditions' => 'getRecoveryConditions'
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
        $this->container['alarmSubtype'] = isset($data['alarmSubtype']) ? $data['alarmSubtype'] : null;
        $this->container['alarmSource'] = isset($data['alarmSource']) ? $data['alarmSource'] : null;
        $this->container['monitorType'] = isset($data['monitorType']) ? $data['monitorType'] : null;
        $this->container['triggerConditions'] = isset($data['triggerConditions']) ? $data['triggerConditions'] : null;
        $this->container['noDataConditions'] = isset($data['noDataConditions']) ? $data['noDataConditions'] : null;
        $this->container['alarmTags'] = isset($data['alarmTags']) ? $data['alarmTags'] : null;
        $this->container['recoveryConditions'] = isset($data['recoveryConditions']) ? $data['recoveryConditions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets alarmSubtype
    *  告警规则类别。
    *
    * @return string|null
    */
    public function getAlarmSubtype()
    {
        return $this->container['alarmSubtype'];
    }

    /**
    * Sets alarmSubtype
    *
    * @param string|null $alarmSubtype 告警规则类别。
    *
    * @return $this
    */
    public function setAlarmSubtype($alarmSubtype)
    {
        $this->container['alarmSubtype'] = $alarmSubtype;
        return $this;
    }

    /**
    * Gets alarmSource
    *  告警规则来源云服务：CCE 创建标识。
    *
    * @return string|null
    */
    public function getAlarmSource()
    {
        return $this->container['alarmSource'];
    }

    /**
    * Sets alarmSource
    *
    * @param string|null $alarmSource 告警规则来源云服务：CCE 创建标识。
    *
    * @return $this
    */
    public function setAlarmSource($alarmSource)
    {
        $this->container['alarmSource'] = $alarmSource;
        return $this;
    }

    /**
    * Gets monitorType
    *  监控类型。
    *
    * @return string|null
    */
    public function getMonitorType()
    {
        return $this->container['monitorType'];
    }

    /**
    * Sets monitorType
    *
    * @param string|null $monitorType 监控类型。
    *
    * @return $this
    */
    public function setMonitorType($monitorType)
    {
        $this->container['monitorType'] = $monitorType;
        return $this;
    }

    /**
    * Gets triggerConditions
    *  触发条件。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\TemplateTriggerCondition[]|null
    */
    public function getTriggerConditions()
    {
        return $this->container['triggerConditions'];
    }

    /**
    * Sets triggerConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\TemplateTriggerCondition[]|null $triggerConditions 触发条件。
    *
    * @return $this
    */
    public function setTriggerConditions($triggerConditions)
    {
        $this->container['triggerConditions'] = $triggerConditions;
        return $this;
    }

    /**
    * Gets noDataConditions
    *  数据不足条件。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\NoDataCondition[]|null
    */
    public function getNoDataConditions()
    {
        return $this->container['noDataConditions'];
    }

    /**
    * Sets noDataConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\NoDataCondition[]|null $noDataConditions 数据不足条件。
    *
    * @return $this
    */
    public function setNoDataConditions($noDataConditions)
    {
        $this->container['noDataConditions'] = $noDataConditions;
        return $this;
    }

    /**
    * Gets alarmTags
    *  告警标签。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmTags[]|null
    */
    public function getAlarmTags()
    {
        return $this->container['alarmTags'];
    }

    /**
    * Sets alarmTags
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmTags[]|null $alarmTags 告警标签。
    *
    * @return $this
    */
    public function setAlarmTags($alarmTags)
    {
        $this->container['alarmTags'] = $alarmTags;
        return $this;
    }

    /**
    * Gets recoveryConditions
    *  recoveryConditions
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\RecoveryCondition|null
    */
    public function getRecoveryConditions()
    {
        return $this->container['recoveryConditions'];
    }

    /**
    * Sets recoveryConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\RecoveryCondition|null $recoveryConditions recoveryConditions
    *
    * @return $this
    */
    public function setRecoveryConditions($recoveryConditions)
    {
        $this->container['recoveryConditions'] = $recoveryConditions;
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

