<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyAutoExpandPolicyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyAutoExpandPolicyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOption  **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    * limitSize  **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    * triggerAvailablePercent  **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    * stepPercent  **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOption' => 'bool',
            'limitSize' => 'int',
            'triggerAvailablePercent' => 'int',
            'stepPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOption  **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    * limitSize  **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    * triggerAvailablePercent  **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    * stepPercent  **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOption' => null,
        'limitSize' => null,
        'triggerAvailablePercent' => 'int32',
        'stepPercent' => null
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
    * switchOption  **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    * limitSize  **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    * triggerAvailablePercent  **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    * stepPercent  **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOption' => 'switch_option',
            'limitSize' => 'limit_size',
            'triggerAvailablePercent' => 'trigger_available_percent',
            'stepPercent' => 'step_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOption  **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    * limitSize  **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    * triggerAvailablePercent  **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    * stepPercent  **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOption' => 'setSwitchOption',
            'limitSize' => 'setLimitSize',
            'triggerAvailablePercent' => 'setTriggerAvailablePercent',
            'stepPercent' => 'setStepPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOption  **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    * limitSize  **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    * triggerAvailablePercent  **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    * stepPercent  **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOption' => 'getSwitchOption',
            'limitSize' => 'getLimitSize',
            'triggerAvailablePercent' => 'getTriggerAvailablePercent',
            'stepPercent' => 'getStepPercent'
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
    const TRIGGER_AVAILABLE_PERCENT_10 = 10;
    const TRIGGER_AVAILABLE_PERCENT_15 = 15;
    const TRIGGER_AVAILABLE_PERCENT_20 = 20;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerAvailablePercentAllowableValues()
    {
        return [
            self::TRIGGER_AVAILABLE_PERCENT_10,
            self::TRIGGER_AVAILABLE_PERCENT_15,
            self::TRIGGER_AVAILABLE_PERCENT_20,
        ];
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
        $this->container['switchOption'] = isset($data['switchOption']) ? $data['switchOption'] : null;
        $this->container['limitSize'] = isset($data['limitSize']) ? $data['limitSize'] : null;
        $this->container['triggerAvailablePercent'] = isset($data['triggerAvailablePercent']) ? $data['triggerAvailablePercent'] : null;
        $this->container['stepPercent'] = isset($data['stepPercent']) ? $data['stepPercent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limitSize']) && ($this->container['limitSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'limitSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['limitSize']) && ($this->container['limitSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'limitSize', must be bigger than or equal to 10.";
            }
            $allowedValues = $this->getTriggerAvailablePercentAllowableValues();
                if (!is_null($this->container['triggerAvailablePercent']) && !in_array($this->container['triggerAvailablePercent'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerAvailablePercent', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['stepPercent']) && ($this->container['stepPercent'] > 100)) {
                $invalidProperties[] = "invalid value for 'stepPercent', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['stepPercent']) && ($this->container['stepPercent'] < 5)) {
                $invalidProperties[] = "invalid value for 'stepPercent', must be bigger than or equal to 5.";
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
    * Gets switchOption
    *  **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    *
    * @return bool|null
    */
    public function getSwitchOption()
    {
        return $this->container['switchOption'];
    }

    /**
    * Sets switchOption
    *
    * @param bool|null $switchOption **参数解释**：  自动扩容策略开关。  **取值范围**：  - true：表示开启。 - false：表示关闭。
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets limitSize
    *  **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    *
    * @return int|null
    */
    public function getLimitSize()
    {
        return $this->container['limitSize'];
    }

    /**
    * Sets limitSize
    *
    * @param int|null $limitSize **参数解释**：  存储自动扩容上限，需要为10的倍数，单位GB。  **取值范围**：  10 - 最大容量上限。  示例：500
    *
    * @return $this
    */
    public function setLimitSize($limitSize)
    {
        $this->container['limitSize'] = $limitSize;
        return $this;
    }

    /**
    * Gets triggerAvailablePercent
    *  **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    *
    * @return int|null
    */
    public function getTriggerAvailablePercent()
    {
        return $this->container['triggerAvailablePercent'];
    }

    /**
    * Sets triggerAvailablePercent
    *
    * @param int|null $triggerAvailablePercent **参数解释**：  可用存储空间率。  **取值范围**：  - 10 - 15 - 20
    *
    * @return $this
    */
    public function setTriggerAvailablePercent($triggerAvailablePercent)
    {
        $this->container['triggerAvailablePercent'] = $triggerAvailablePercent;
        return $this;
    }

    /**
    * Gets stepPercent
    *  **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @return int|null
    */
    public function getStepPercent()
    {
        return $this->container['stepPercent'];
    }

    /**
    * Sets stepPercent
    *
    * @param int|null $stepPercent **参数解释**：  扩容步长百分比。  **取值范围**:   5 - 50
    *
    * @return $this
    */
    public function setStepPercent($stepPercent)
    {
        $this->container['stepPercent'] = $stepPercent;
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

