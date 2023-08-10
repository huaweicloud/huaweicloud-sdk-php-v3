<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchEnableAlarmsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchEnableAlarmsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmIds  需要批量启停的告警规则的ID列表
    * alarmEnabled  告警开关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmIds' => 'string[]',
            'alarmEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmIds  需要批量启停的告警规则的ID列表
    * alarmEnabled  告警开关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmIds' => null,
        'alarmEnabled' => null
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
    * alarmIds  需要批量启停的告警规则的ID列表
    * alarmEnabled  告警开关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmIds' => 'alarm_ids',
            'alarmEnabled' => 'alarm_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmIds  需要批量启停的告警规则的ID列表
    * alarmEnabled  告警开关
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmIds' => 'setAlarmIds',
            'alarmEnabled' => 'setAlarmEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmIds  需要批量启停的告警规则的ID列表
    * alarmEnabled  告警开关
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmIds' => 'getAlarmIds',
            'alarmEnabled' => 'getAlarmEnabled'
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
        $this->container['alarmIds'] = isset($data['alarmIds']) ? $data['alarmIds'] : null;
        $this->container['alarmEnabled'] = isset($data['alarmEnabled']) ? $data['alarmEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmIds'] === null) {
            $invalidProperties[] = "'alarmIds' can't be null";
        }
        if ($this->container['alarmEnabled'] === null) {
            $invalidProperties[] = "'alarmEnabled' can't be null";
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
    * Gets alarmIds
    *  需要批量启停的告警规则的ID列表
    *
    * @return string[]
    */
    public function getAlarmIds()
    {
        return $this->container['alarmIds'];
    }

    /**
    * Sets alarmIds
    *
    * @param string[] $alarmIds 需要批量启停的告警规则的ID列表
    *
    * @return $this
    */
    public function setAlarmIds($alarmIds)
    {
        $this->container['alarmIds'] = $alarmIds;
        return $this;
    }

    /**
    * Gets alarmEnabled
    *  告警开关
    *
    * @return bool
    */
    public function getAlarmEnabled()
    {
        return $this->container['alarmEnabled'];
    }

    /**
    * Sets alarmEnabled
    *
    * @param bool $alarmEnabled 告警开关
    *
    * @return $this
    */
    public function setAlarmEnabled($alarmEnabled)
    {
        $this->container['alarmEnabled'] = $alarmEnabled;
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

