<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricOrEventAlarmRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricOrEventAlarmRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRules  告警规则列表。
    * metadata  元数据信息。
    * count  告警规则数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRules' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmParamForV4Db[]',
            'metadata' => 'object',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRules  告警规则列表。
    * metadata  元数据信息。
    * count  告警规则数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRules' => null,
        'metadata' => null,
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
    * alarmRules  告警规则列表。
    * metadata  元数据信息。
    * count  告警规则数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRules' => 'alarm_rules',
            'metadata' => 'metadata',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRules  告警规则列表。
    * metadata  元数据信息。
    * count  告警规则数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRules' => 'setAlarmRules',
            'metadata' => 'setMetadata',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRules  告警规则列表。
    * metadata  元数据信息。
    * count  告警规则数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRules' => 'getAlarmRules',
            'metadata' => 'getMetadata',
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
        $this->container['alarmRules'] = isset($data['alarmRules']) ? $data['alarmRules'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
    * Gets alarmRules
    *  告警规则列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmParamForV4Db[]|null
    */
    public function getAlarmRules()
    {
        return $this->container['alarmRules'];
    }

    /**
    * Sets alarmRules
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmParamForV4Db[]|null $alarmRules 告警规则列表。
    *
    * @return $this
    */
    public function setAlarmRules($alarmRules)
    {
        $this->container['alarmRules'] = $alarmRules;
        return $this;
    }

    /**
    * Gets metadata
    *  元数据信息。
    *
    * @return object|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param object|null $metadata 元数据信息。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets count
    *  告警规则数量。
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
    * @param int|null $count 告警规则数量。
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

