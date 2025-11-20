<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterLogConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterLogConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ttlInDays  **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    * logConfigs  **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ttlInDays' => 'int',
            'logConfigs' => '\HuaweiCloud\SDK\Cce\V3\Model\ClusterLogConfigLogConfigs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ttlInDays  **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    * logConfigs  **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ttlInDays' => 'int32',
        'logConfigs' => null
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
    * ttlInDays  **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    * logConfigs  **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ttlInDays' => 'ttl_in_days',
            'logConfigs' => 'log_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ttlInDays  **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    * logConfigs  **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ttlInDays' => 'setTtlInDays',
            'logConfigs' => 'setLogConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ttlInDays  **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    * logConfigs  **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ttlInDays' => 'getTtlInDays',
            'logConfigs' => 'getLogConfigs'
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
        $this->container['ttlInDays'] = isset($data['ttlInDays']) ? $data['ttlInDays'] : null;
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ttlInDays']) && ($this->container['ttlInDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['ttlInDays']) && ($this->container['ttlInDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be bigger than or equal to 0.";
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
    * Gets ttlInDays
    *  **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getTtlInDays()
    {
        return $this->container['ttlInDays'];
    }

    /**
    * Sets ttlInDays
    *
    * @param int|null $ttlInDays **参数解释**：  存储时长，单位：天。  **约束限制**：  不涉及  **取值范围**： 0-30  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTtlInDays($ttlInDays)
    {
        $this->container['ttlInDays'] = $ttlInDays;
        return $this;
    }

    /**
    * Gets logConfigs
    *  **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ClusterLogConfigLogConfigs[]|null
    */
    public function getLogConfigs()
    {
        return $this->container['logConfigs'];
    }

    /**
    * Sets logConfigs
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ClusterLogConfigLogConfigs[]|null $logConfigs **参数解释**： 日志配置项详细信息 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setLogConfigs($logConfigs)
    {
        $this->container['logConfigs'] = $logConfigs;
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

