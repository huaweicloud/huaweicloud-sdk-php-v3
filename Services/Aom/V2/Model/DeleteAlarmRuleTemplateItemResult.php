<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAlarmRuleTemplateItemResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAlarmRuleTemplateItemResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRuleTemplateName  告警模板id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRuleTemplateName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRuleTemplateName  告警模板id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRuleTemplateName' => null
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
    * alarmRuleTemplateName  告警模板id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRuleTemplateName' => 'alarm_rule_template_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRuleTemplateName  告警模板id。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRuleTemplateName' => 'setAlarmRuleTemplateName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRuleTemplateName  告警模板id。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRuleTemplateName' => 'getAlarmRuleTemplateName'
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
        $this->container['alarmRuleTemplateName'] = isset($data['alarmRuleTemplateName']) ? $data['alarmRuleTemplateName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmRuleTemplateName'] === null) {
            $invalidProperties[] = "'alarmRuleTemplateName' can't be null";
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
    * Gets alarmRuleTemplateName
    *  告警模板id。
    *
    * @return string
    */
    public function getAlarmRuleTemplateName()
    {
        return $this->container['alarmRuleTemplateName'];
    }

    /**
    * Sets alarmRuleTemplateName
    *
    * @param string $alarmRuleTemplateName 告警模板id。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateName($alarmRuleTemplateName)
    {
        $this->container['alarmRuleTemplateName'] = $alarmRuleTemplateName;
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

