<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Trigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Trigger';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accumulatedTimes  累计次数
    * expression  表达式
    * jobId  UUID
    * mode  mode
    * operator  operator
    * severity  severity
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accumulatedTimes' => 'int',
            'expression' => 'string',
            'jobId' => 'string',
            'mode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Mode',
            'operator' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Operator',
            'severity' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Serverity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accumulatedTimes  累计次数
    * expression  表达式
    * jobId  UUID
    * mode  mode
    * operator  operator
    * severity  severity
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accumulatedTimes' => 'int32',
        'expression' => null,
        'jobId' => null,
        'mode' => null,
        'operator' => null,
        'severity' => null
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
    * accumulatedTimes  累计次数
    * expression  表达式
    * jobId  UUID
    * mode  mode
    * operator  operator
    * severity  severity
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accumulatedTimes' => 'accumulated_times',
            'expression' => 'expression',
            'jobId' => 'job_id',
            'mode' => 'mode',
            'operator' => 'operator',
            'severity' => 'severity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accumulatedTimes  累计次数
    * expression  表达式
    * jobId  UUID
    * mode  mode
    * operator  operator
    * severity  severity
    *
    * @var string[]
    */
    protected static $setters = [
            'accumulatedTimes' => 'setAccumulatedTimes',
            'expression' => 'setExpression',
            'jobId' => 'setJobId',
            'mode' => 'setMode',
            'operator' => 'setOperator',
            'severity' => 'setSeverity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accumulatedTimes  累计次数
    * expression  表达式
    * jobId  UUID
    * mode  mode
    * operator  operator
    * severity  severity
    *
    * @var string[]
    */
    protected static $getters = [
            'accumulatedTimes' => 'getAccumulatedTimes',
            'expression' => 'getExpression',
            'jobId' => 'getJobId',
            'mode' => 'getMode',
            'operator' => 'getOperator',
            'severity' => 'getSeverity'
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
        $this->container['accumulatedTimes'] = isset($data['accumulatedTimes']) ? $data['accumulatedTimes'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accumulatedTimes']) && ($this->container['accumulatedTimes'] > 500)) {
                $invalidProperties[] = "invalid value for 'accumulatedTimes', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['accumulatedTimes']) && ($this->container['accumulatedTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'accumulatedTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 1024)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) < 0)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 36)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 36)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 36.";
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
    * Gets accumulatedTimes
    *  累计次数
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
    * @param int|null $accumulatedTimes 累计次数
    *
    * @return $this
    */
    public function setAccumulatedTimes($accumulatedTimes)
    {
        $this->container['accumulatedTimes'] = $accumulatedTimes;
        return $this;
    }

    /**
    * Gets expression
    *  表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets jobId
    *  UUID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId UUID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets mode
    *  mode
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Mode|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Mode|null $mode mode
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
    *  operator
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Operator|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Operator|null $operator operator
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Serverity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Serverity|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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

