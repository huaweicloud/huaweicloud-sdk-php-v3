<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetDdlLogPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetDdlLogPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchStatus  **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    * keepDays  **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchStatus' => 'string',
            'keepDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchStatus  **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    * keepDays  **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchStatus' => null,
        'keepDays' => null
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
    * switchStatus  **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    * keepDays  **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchStatus' => 'switch_status',
            'keepDays' => 'keep_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchStatus  **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    * keepDays  **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchStatus' => 'setSwitchStatus',
            'keepDays' => 'setKeepDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchStatus  **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    * keepDays  **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchStatus' => 'getSwitchStatus',
            'keepDays' => 'getKeepDays'
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
        $this->container['switchStatus'] = isset($data['switchStatus']) ? $data['switchStatus'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['switchStatus'] === null) {
            $invalidProperties[] = "'switchStatus' can't be null";
        }
        if ($this->container['keepDays'] === null) {
            $invalidProperties[] = "'keepDays' can't be null";
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
    * Gets switchStatus
    *  **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getSwitchStatus()
    {
        return $this->container['switchStatus'];
    }

    /**
    * Sets switchStatus
    *
    * @param string $switchStatus **参数解释**：  设置DDL日志下载功能开关。  **约束限制**：  不涉及。  **取值范围**：  - ON，开启。 - OFF，关闭。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSwitchStatus($switchStatus)
    {
        $this->container['switchStatus'] = $switchStatus;
        return $this;
    }

    /**
    * Gets keepDays
    *  **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @return int
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int $keepDays **参数解释**：  设置DDL日志保留天数。  **约束限制**：  不涉及。  **取值范围**：  1~30。  **默认取值**：  3。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
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

