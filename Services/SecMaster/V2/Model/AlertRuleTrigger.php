<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertRuleTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertRuleTrigger';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  模式，数量。Mode. COUNT.
    * operator  操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    * expression  expression
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * accumulatedTimes  accumulated_times
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'operator' => 'string',
            'expression' => 'string',
            'severity' => 'string',
            'accumulatedTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  模式，数量。Mode. COUNT.
    * operator  操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    * expression  expression
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * accumulatedTimes  accumulated_times
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'operator' => null,
        'expression' => null,
        'severity' => null,
        'accumulatedTimes' => null
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
    * mode  模式，数量。Mode. COUNT.
    * operator  操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    * expression  expression
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * accumulatedTimes  accumulated_times
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'operator' => 'operator',
            'expression' => 'expression',
            'severity' => 'severity',
            'accumulatedTimes' => 'accumulated_times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  模式，数量。Mode. COUNT.
    * operator  操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    * expression  expression
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * accumulatedTimes  accumulated_times
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'operator' => 'setOperator',
            'expression' => 'setExpression',
            'severity' => 'setSeverity',
            'accumulatedTimes' => 'setAccumulatedTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  模式，数量。Mode. COUNT.
    * operator  操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    * expression  expression
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * accumulatedTimes  accumulated_times
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'operator' => 'getOperator',
            'expression' => 'getExpression',
            'severity' => 'getSeverity',
            'accumulatedTimes' => 'getAccumulatedTimes'
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
    const MODE_COUNT = 'COUNT';
    const OPERATOR_EQ = 'EQ';
    const OPERATOR_NE = 'NE';
    const OPERATOR_GT = 'GT';
    const OPERATOR_LT = 'LT';
    const SEVERITY_TIPS = 'TIPS';
    const SEVERITY_LOW = 'LOW';
    const SEVERITY_MEDIUM = 'MEDIUM';
    const SEVERITY_HIGH = 'HIGH';
    const SEVERITY_FATAL = 'FATAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_COUNT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_EQ,
            self::OPERATOR_NE,
            self::OPERATOR_GT,
            self::OPERATOR_LT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_TIPS,
            self::SEVERITY_LOW,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_HIGH,
            self::SEVERITY_FATAL,
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['accumulatedTimes'] = isset($data['accumulatedTimes']) ? $data['accumulatedTimes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 255)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 1)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOperatorAllowableValues();
                if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 255)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 1)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['expression'] === null) {
            $invalidProperties[] = "'expression' can't be null";
        }
            if ((mb_strlen($this->container['expression']) > 255)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['expression']) < 1)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accumulatedTimes']) && ($this->container['accumulatedTimes'] > 1000)) {
                $invalidProperties[] = "invalid value for 'accumulatedTimes', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['accumulatedTimes']) && ($this->container['accumulatedTimes'] < 1)) {
                $invalidProperties[] = "invalid value for 'accumulatedTimes', must be bigger than or equal to 1.";
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
    * Gets mode
    *  模式，数量。Mode. COUNT.
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 模式，数量。Mode. COUNT.
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets operator
    *  操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作符，等于、不等于、大于、小于。 operator. EQ equal, NE not equal, GT greater than, LT less than.
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets expression
    *  expression
    *
    * @return string
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string $expression expression
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets severity
    *  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets accumulatedTimes
    *  accumulated_times
    *
    * @return int|null
    */
    public function getAccumulatedTimes()
    {
        return $this->container['accumulatedTimes'];
    }

    /**
    * Sets accumulatedTimes
    *
    * @param int|null $accumulatedTimes accumulated_times
    *
    * @return $this
    */
    public function setAccumulatedTimes($accumulatedTimes)
    {
        $this->container['accumulatedTimes'] = $accumulatedTimes;
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

