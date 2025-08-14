<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepairPriorityListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepairPriorityListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostNum  **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repairPriority' => 'string',
            'hostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostNum  **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repairPriority' => null,
        'hostNum' => 'int32'
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
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostNum  **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repairPriority' => 'repair_priority',
            'hostNum' => 'host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostNum  **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'repairPriority' => 'setRepairPriority',
            'hostNum' => 'setHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostNum  **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'repairPriority' => 'getRepairPriority',
            'hostNum' => 'getHostNum'
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
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 10)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
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
    * Gets repairPriority
    *  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    *
    * @return string|null
    */
    public function getRepairPriority()
    {
        return $this->container['repairPriority'];
    }

    /**
    * Sets repairPriority
    *
    * @param string|null $repairPriority **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 当前修复优先级对应的主机数量 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
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

