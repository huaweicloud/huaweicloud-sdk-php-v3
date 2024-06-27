<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddOrUpdateAlarmRuleV4ItemResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddOrUpdateAlarmRuleV4ItemResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRuleName  告警规则名称。
    * result  告警规则新增或修改结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRuleName' => 'string',
            'result' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRuleName  告警规则名称。
    * result  告警规则新增或修改结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRuleName' => null,
        'result' => null
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
    * alarmRuleName  告警规则名称。
    * result  告警规则新增或修改结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRuleName' => 'alarm_rule_name',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRuleName  告警规则名称。
    * result  告警规则新增或修改结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRuleName' => 'setAlarmRuleName',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRuleName  告警规则名称。
    * result  告警规则新增或修改结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRuleName' => 'getAlarmRuleName',
            'result' => 'getResult'
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
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmRuleName'] === null) {
            $invalidProperties[] = "'alarmRuleName' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
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
    * Gets alarmRuleName
    *  告警规则名称。
    *
    * @return string
    */
    public function getAlarmRuleName()
    {
        return $this->container['alarmRuleName'];
    }

    /**
    * Sets alarmRuleName
    *
    * @param string $alarmRuleName 告警规则名称。
    *
    * @return $this
    */
    public function setAlarmRuleName($alarmRuleName)
    {
        $this->container['alarmRuleName'] = $alarmRuleName;
        return $this;
    }

    /**
    * Gets result
    *  告警规则新增或修改结果。
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 告警规则新增或修改结果。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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

