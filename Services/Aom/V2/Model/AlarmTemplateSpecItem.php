<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmTemplateSpecItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmTemplateSpecItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmTemplateName  告警模板下单个告警规则名称。
    * alarmTemplateNameEn  告警模板下单个告警规则英文名称。
    * desc  告警模板下单个告警规则描述。
    * descEn  告警模板下单个告警规则英文描述。
    * alarmTemplateSpecType  告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    * metricAlarmTemplateSpec  metricAlarmTemplateSpec
    * eventAlarmTemplateSpec  eventAlarmTemplateSpec
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmTemplateName' => 'string',
            'alarmTemplateNameEn' => 'string',
            'desc' => 'string',
            'descEn' => 'string',
            'alarmTemplateSpecType' => 'string',
            'metricAlarmTemplateSpec' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmTemplateSpec',
            'eventAlarmTemplateSpec' => '\HuaweiCloud\SDK\Aom\V2\Model\EventAlarmTemplateSpec'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmTemplateName  告警模板下单个告警规则名称。
    * alarmTemplateNameEn  告警模板下单个告警规则英文名称。
    * desc  告警模板下单个告警规则描述。
    * descEn  告警模板下单个告警规则英文描述。
    * alarmTemplateSpecType  告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    * metricAlarmTemplateSpec  metricAlarmTemplateSpec
    * eventAlarmTemplateSpec  eventAlarmTemplateSpec
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmTemplateName' => null,
        'alarmTemplateNameEn' => null,
        'desc' => null,
        'descEn' => null,
        'alarmTemplateSpecType' => null,
        'metricAlarmTemplateSpec' => null,
        'eventAlarmTemplateSpec' => null
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
    * alarmTemplateName  告警模板下单个告警规则名称。
    * alarmTemplateNameEn  告警模板下单个告警规则英文名称。
    * desc  告警模板下单个告警规则描述。
    * descEn  告警模板下单个告警规则英文描述。
    * alarmTemplateSpecType  告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    * metricAlarmTemplateSpec  metricAlarmTemplateSpec
    * eventAlarmTemplateSpec  eventAlarmTemplateSpec
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmTemplateName' => 'alarm_template_name',
            'alarmTemplateNameEn' => 'alarm_template_name_en',
            'desc' => 'desc',
            'descEn' => 'desc_en',
            'alarmTemplateSpecType' => 'alarm_template_spec_type',
            'metricAlarmTemplateSpec' => 'metric_alarm_template_spec',
            'eventAlarmTemplateSpec' => 'event_alarm_template_spec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmTemplateName  告警模板下单个告警规则名称。
    * alarmTemplateNameEn  告警模板下单个告警规则英文名称。
    * desc  告警模板下单个告警规则描述。
    * descEn  告警模板下单个告警规则英文描述。
    * alarmTemplateSpecType  告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    * metricAlarmTemplateSpec  metricAlarmTemplateSpec
    * eventAlarmTemplateSpec  eventAlarmTemplateSpec
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmTemplateName' => 'setAlarmTemplateName',
            'alarmTemplateNameEn' => 'setAlarmTemplateNameEn',
            'desc' => 'setDesc',
            'descEn' => 'setDescEn',
            'alarmTemplateSpecType' => 'setAlarmTemplateSpecType',
            'metricAlarmTemplateSpec' => 'setMetricAlarmTemplateSpec',
            'eventAlarmTemplateSpec' => 'setEventAlarmTemplateSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmTemplateName  告警模板下单个告警规则名称。
    * alarmTemplateNameEn  告警模板下单个告警规则英文名称。
    * desc  告警模板下单个告警规则描述。
    * descEn  告警模板下单个告警规则英文描述。
    * alarmTemplateSpecType  告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    * metricAlarmTemplateSpec  metricAlarmTemplateSpec
    * eventAlarmTemplateSpec  eventAlarmTemplateSpec
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmTemplateName' => 'getAlarmTemplateName',
            'alarmTemplateNameEn' => 'getAlarmTemplateNameEn',
            'desc' => 'getDesc',
            'descEn' => 'getDescEn',
            'alarmTemplateSpecType' => 'getAlarmTemplateSpecType',
            'metricAlarmTemplateSpec' => 'getMetricAlarmTemplateSpec',
            'eventAlarmTemplateSpec' => 'getEventAlarmTemplateSpec'
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
        $this->container['alarmTemplateName'] = isset($data['alarmTemplateName']) ? $data['alarmTemplateName'] : null;
        $this->container['alarmTemplateNameEn'] = isset($data['alarmTemplateNameEn']) ? $data['alarmTemplateNameEn'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['descEn'] = isset($data['descEn']) ? $data['descEn'] : null;
        $this->container['alarmTemplateSpecType'] = isset($data['alarmTemplateSpecType']) ? $data['alarmTemplateSpecType'] : null;
        $this->container['metricAlarmTemplateSpec'] = isset($data['metricAlarmTemplateSpec']) ? $data['metricAlarmTemplateSpec'] : null;
        $this->container['eventAlarmTemplateSpec'] = isset($data['eventAlarmTemplateSpec']) ? $data['eventAlarmTemplateSpec'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmTemplateName'] === null) {
            $invalidProperties[] = "'alarmTemplateName' can't be null";
        }
        if ($this->container['alarmTemplateSpecType'] === null) {
            $invalidProperties[] = "'alarmTemplateSpecType' can't be null";
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
    * Gets alarmTemplateName
    *  告警模板下单个告警规则名称。
    *
    * @return string
    */
    public function getAlarmTemplateName()
    {
        return $this->container['alarmTemplateName'];
    }

    /**
    * Sets alarmTemplateName
    *
    * @param string $alarmTemplateName 告警模板下单个告警规则名称。
    *
    * @return $this
    */
    public function setAlarmTemplateName($alarmTemplateName)
    {
        $this->container['alarmTemplateName'] = $alarmTemplateName;
        return $this;
    }

    /**
    * Gets alarmTemplateNameEn
    *  告警模板下单个告警规则英文名称。
    *
    * @return string|null
    */
    public function getAlarmTemplateNameEn()
    {
        return $this->container['alarmTemplateNameEn'];
    }

    /**
    * Sets alarmTemplateNameEn
    *
    * @param string|null $alarmTemplateNameEn 告警模板下单个告警规则英文名称。
    *
    * @return $this
    */
    public function setAlarmTemplateNameEn($alarmTemplateNameEn)
    {
        $this->container['alarmTemplateNameEn'] = $alarmTemplateNameEn;
        return $this;
    }

    /**
    * Gets desc
    *  告警模板下单个告警规则描述。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 告警模板下单个告警规则描述。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets descEn
    *  告警模板下单个告警规则英文描述。
    *
    * @return string|null
    */
    public function getDescEn()
    {
        return $this->container['descEn'];
    }

    /**
    * Sets descEn
    *
    * @param string|null $descEn 告警模板下单个告警规则英文描述。
    *
    * @return $this
    */
    public function setDescEn($descEn)
    {
        $this->container['descEn'] = $descEn;
        return $this;
    }

    /**
    * Gets alarmTemplateSpecType
    *  告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    *
    * @return string
    */
    public function getAlarmTemplateSpecType()
    {
        return $this->container['alarmTemplateSpecType'];
    }

    /**
    * Sets alarmTemplateSpecType
    *
    * @param string $alarmTemplateSpecType 告警模板下单个告警规则类型。 “metric”：指标告警 “event”：事件告警
    *
    * @return $this
    */
    public function setAlarmTemplateSpecType($alarmTemplateSpecType)
    {
        $this->container['alarmTemplateSpecType'] = $alarmTemplateSpecType;
        return $this;
    }

    /**
    * Gets metricAlarmTemplateSpec
    *  metricAlarmTemplateSpec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmTemplateSpec|null
    */
    public function getMetricAlarmTemplateSpec()
    {
        return $this->container['metricAlarmTemplateSpec'];
    }

    /**
    * Sets metricAlarmTemplateSpec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmTemplateSpec|null $metricAlarmTemplateSpec metricAlarmTemplateSpec
    *
    * @return $this
    */
    public function setMetricAlarmTemplateSpec($metricAlarmTemplateSpec)
    {
        $this->container['metricAlarmTemplateSpec'] = $metricAlarmTemplateSpec;
        return $this;
    }

    /**
    * Gets eventAlarmTemplateSpec
    *  eventAlarmTemplateSpec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventAlarmTemplateSpec|null
    */
    public function getEventAlarmTemplateSpec()
    {
        return $this->container['eventAlarmTemplateSpec'];
    }

    /**
    * Sets eventAlarmTemplateSpec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventAlarmTemplateSpec|null $eventAlarmTemplateSpec eventAlarmTemplateSpec
    *
    * @return $this
    */
    public function setEventAlarmTemplateSpec($eventAlarmTemplateSpec)
    {
        $this->container['eventAlarmTemplateSpec'] = $eventAlarmTemplateSpec;
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

