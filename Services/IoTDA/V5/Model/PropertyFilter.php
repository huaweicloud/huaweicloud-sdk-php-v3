<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PropertyFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PropertyFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    * operator  **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    * value  **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    * strategy  strategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'operator' => 'string',
            'value' => 'string',
            'strategy' => '\HuaweiCloud\SDK\IoTDA\V5\Model\Strategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    * operator  **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    * value  **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    * strategy  strategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'operator' => null,
        'value' => null,
        'strategy' => null
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
    * path  **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    * operator  **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    * value  **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    * strategy  strategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'operator' => 'operator',
            'value' => 'value',
            'strategy' => 'strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    * operator  **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    * value  **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    * strategy  strategy
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'operator' => 'setOperator',
            'value' => 'setValue',
            'strategy' => 'setStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    * operator  **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    * value  **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    * strategy  strategy
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'operator' => 'getOperator',
            'value' => 'getValue',
            'strategy' => 'getStrategy'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
            if ((mb_strlen($this->container['path']) > 128)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
            if (!preg_match("/(>|<|>=|<=|=|between|geo.circle.in|geo.circle.out)/", $this->container['operator'])) {
                $invalidProperties[] = "invalid value for 'operator', must be conform to the pattern /(>|<|>=|<=|=|between|geo.circle.in|geo.circle.out)/.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 64)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 64.";
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
    * Gets path
    *  **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path **参数说明**：设备属性的路径信息，格式：service_id/DataProperty，例如门磁状态为“DoorWindow/status”。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets operator
    *  **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator **参数说明**：数据比较的操作符。 **取值范围**：当前支持的操作符有：>，<，>=，<=，=和between:表示数值区间。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets value
    *  **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value **参数说明**：数据比较表达式的右值。与数据比较操作符between联用时，右值表示最小值和最大值，用逗号隔开，如“20,30”表示大于等于20小于30。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets strategy
    *  strategy
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\Strategy|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\Strategy|null $strategy strategy
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
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

