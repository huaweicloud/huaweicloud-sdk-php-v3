<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmRuleTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmRuleTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRuleTemplates  告警模板列表。
    * count  告警模板总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRuleTemplates' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmRuleTemplateBody[]',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRuleTemplates  告警模板列表。
    * count  告警模板总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRuleTemplates' => null,
        'count' => 'int32'
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
    * alarmRuleTemplates  告警模板列表。
    * count  告警模板总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRuleTemplates' => 'alarm_rule_templates',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRuleTemplates  告警模板列表。
    * count  告警模板总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRuleTemplates' => 'setAlarmRuleTemplates',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRuleTemplates  告警模板列表。
    * count  告警模板总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRuleTemplates' => 'getAlarmRuleTemplates',
            'count' => 'getCount'
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
        $this->container['alarmRuleTemplates'] = isset($data['alarmRuleTemplates']) ? $data['alarmRuleTemplates'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets alarmRuleTemplates
    *  告警模板列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmRuleTemplateBody[]|null
    */
    public function getAlarmRuleTemplates()
    {
        return $this->container['alarmRuleTemplates'];
    }

    /**
    * Sets alarmRuleTemplates
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmRuleTemplateBody[]|null $alarmRuleTemplates 告警模板列表。
    *
    * @return $this
    */
    public function setAlarmRuleTemplates($alarmRuleTemplates)
    {
        $this->container['alarmRuleTemplates'] = $alarmRuleTemplates;
        return $this;
    }

    /**
    * Gets count
    *  告警模板总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 告警模板总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

