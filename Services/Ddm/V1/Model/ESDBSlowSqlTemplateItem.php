<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ESDBSlowSqlTemplateItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ESDBSlowSqlTemplateItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * querySample  **参数解释**：  示例。  **参数范围**：  不涉及。
    * database  **参数解释**：  数据库。  **参数范围**：  不涉及。
    * executeTimes  **参数解释**：  执行时间。  **参数范围**：  不涉及。
    * avgRowsExamined  **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    * maxTime  **参数解释**：  最大时间。  **参数范围**：  不涉及。
    * avgTime  **参数解释**：  平均时间。  **参数范围**：  不涉及。
    * maxRowsExamined  **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    * rowsExaminedSum  **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    * costTimeSum  **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'querySample' => 'string',
            'database' => 'string',
            'executeTimes' => 'float',
            'avgRowsExamined' => 'float',
            'maxTime' => 'float',
            'avgTime' => 'float',
            'maxRowsExamined' => 'float',
            'rowsExaminedSum' => 'float',
            'costTimeSum' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * querySample  **参数解释**：  示例。  **参数范围**：  不涉及。
    * database  **参数解释**：  数据库。  **参数范围**：  不涉及。
    * executeTimes  **参数解释**：  执行时间。  **参数范围**：  不涉及。
    * avgRowsExamined  **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    * maxTime  **参数解释**：  最大时间。  **参数范围**：  不涉及。
    * avgTime  **参数解释**：  平均时间。  **参数范围**：  不涉及。
    * maxRowsExamined  **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    * rowsExaminedSum  **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    * costTimeSum  **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'querySample' => null,
        'database' => null,
        'executeTimes' => null,
        'avgRowsExamined' => null,
        'maxTime' => null,
        'avgTime' => null,
        'maxRowsExamined' => null,
        'rowsExaminedSum' => null,
        'costTimeSum' => null
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
    * querySample  **参数解释**：  示例。  **参数范围**：  不涉及。
    * database  **参数解释**：  数据库。  **参数范围**：  不涉及。
    * executeTimes  **参数解释**：  执行时间。  **参数范围**：  不涉及。
    * avgRowsExamined  **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    * maxTime  **参数解释**：  最大时间。  **参数范围**：  不涉及。
    * avgTime  **参数解释**：  平均时间。  **参数范围**：  不涉及。
    * maxRowsExamined  **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    * rowsExaminedSum  **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    * costTimeSum  **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'querySample' => 'query_sample',
            'database' => 'database',
            'executeTimes' => 'execute_times',
            'avgRowsExamined' => 'avg_rows_examined',
            'maxTime' => 'max_time',
            'avgTime' => 'avg_time',
            'maxRowsExamined' => 'max_rows_examined',
            'rowsExaminedSum' => 'rows_examined_sum',
            'costTimeSum' => 'cost_time_sum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * querySample  **参数解释**：  示例。  **参数范围**：  不涉及。
    * database  **参数解释**：  数据库。  **参数范围**：  不涉及。
    * executeTimes  **参数解释**：  执行时间。  **参数范围**：  不涉及。
    * avgRowsExamined  **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    * maxTime  **参数解释**：  最大时间。  **参数范围**：  不涉及。
    * avgTime  **参数解释**：  平均时间。  **参数范围**：  不涉及。
    * maxRowsExamined  **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    * rowsExaminedSum  **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    * costTimeSum  **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'querySample' => 'setQuerySample',
            'database' => 'setDatabase',
            'executeTimes' => 'setExecuteTimes',
            'avgRowsExamined' => 'setAvgRowsExamined',
            'maxTime' => 'setMaxTime',
            'avgTime' => 'setAvgTime',
            'maxRowsExamined' => 'setMaxRowsExamined',
            'rowsExaminedSum' => 'setRowsExaminedSum',
            'costTimeSum' => 'setCostTimeSum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * querySample  **参数解释**：  示例。  **参数范围**：  不涉及。
    * database  **参数解释**：  数据库。  **参数范围**：  不涉及。
    * executeTimes  **参数解释**：  执行时间。  **参数范围**：  不涉及。
    * avgRowsExamined  **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    * maxTime  **参数解释**：  最大时间。  **参数范围**：  不涉及。
    * avgTime  **参数解释**：  平均时间。  **参数范围**：  不涉及。
    * maxRowsExamined  **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    * rowsExaminedSum  **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    * costTimeSum  **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'querySample' => 'getQuerySample',
            'database' => 'getDatabase',
            'executeTimes' => 'getExecuteTimes',
            'avgRowsExamined' => 'getAvgRowsExamined',
            'maxTime' => 'getMaxTime',
            'avgTime' => 'getAvgTime',
            'maxRowsExamined' => 'getMaxRowsExamined',
            'rowsExaminedSum' => 'getRowsExaminedSum',
            'costTimeSum' => 'getCostTimeSum'
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
        $this->container['querySample'] = isset($data['querySample']) ? $data['querySample'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['executeTimes'] = isset($data['executeTimes']) ? $data['executeTimes'] : null;
        $this->container['avgRowsExamined'] = isset($data['avgRowsExamined']) ? $data['avgRowsExamined'] : null;
        $this->container['maxTime'] = isset($data['maxTime']) ? $data['maxTime'] : null;
        $this->container['avgTime'] = isset($data['avgTime']) ? $data['avgTime'] : null;
        $this->container['maxRowsExamined'] = isset($data['maxRowsExamined']) ? $data['maxRowsExamined'] : null;
        $this->container['rowsExaminedSum'] = isset($data['rowsExaminedSum']) ? $data['rowsExaminedSum'] : null;
        $this->container['costTimeSum'] = isset($data['costTimeSum']) ? $data['costTimeSum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['querySample']) && (mb_strlen($this->container['querySample']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'querySample', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['querySample']) && (mb_strlen($this->container['querySample']) < 0)) {
                $invalidProperties[] = "invalid value for 'querySample', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 0)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executeTimes']) && ($this->container['executeTimes'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'executeTimes', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['executeTimes']) && ($this->container['executeTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'executeTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['avgRowsExamined']) && ($this->container['avgRowsExamined'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'avgRowsExamined', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['avgRowsExamined']) && ($this->container['avgRowsExamined'] < 0)) {
                $invalidProperties[] = "invalid value for 'avgRowsExamined', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxTime']) && ($this->container['maxTime'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'maxTime', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['maxTime']) && ($this->container['maxTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['avgTime']) && ($this->container['avgTime'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'avgTime', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['avgTime']) && ($this->container['avgTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'avgTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxRowsExamined']) && ($this->container['maxRowsExamined'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'maxRowsExamined', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['maxRowsExamined']) && ($this->container['maxRowsExamined'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxRowsExamined', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rowsExaminedSum']) && ($this->container['rowsExaminedSum'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'rowsExaminedSum', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['rowsExaminedSum']) && ($this->container['rowsExaminedSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'rowsExaminedSum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['costTimeSum']) && ($this->container['costTimeSum'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'costTimeSum', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['costTimeSum']) && ($this->container['costTimeSum'] < 0)) {
                $invalidProperties[] = "invalid value for 'costTimeSum', must be bigger than or equal to 0.";
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
    * Gets querySample
    *  **参数解释**：  示例。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getQuerySample()
    {
        return $this->container['querySample'];
    }

    /**
    * Sets querySample
    *
    * @param string|null $querySample **参数解释**：  示例。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setQuerySample($querySample)
    {
        $this->container['querySample'] = $querySample;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释**：  数据库。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database **参数解释**：  数据库。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets executeTimes
    *  **参数解释**：  执行时间。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getExecuteTimes()
    {
        return $this->container['executeTimes'];
    }

    /**
    * Sets executeTimes
    *
    * @param float|null $executeTimes **参数解释**：  执行时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setExecuteTimes($executeTimes)
    {
        $this->container['executeTimes'] = $executeTimes;
        return $this;
    }

    /**
    * Gets avgRowsExamined
    *  **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getAvgRowsExamined()
    {
        return $this->container['avgRowsExamined'];
    }

    /**
    * Sets avgRowsExamined
    *
    * @param float|null $avgRowsExamined **参数解释**：  平均检查行数。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAvgRowsExamined($avgRowsExamined)
    {
        $this->container['avgRowsExamined'] = $avgRowsExamined;
        return $this;
    }

    /**
    * Gets maxTime
    *  **参数解释**：  最大时间。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getMaxTime()
    {
        return $this->container['maxTime'];
    }

    /**
    * Sets maxTime
    *
    * @param float|null $maxTime **参数解释**：  最大时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setMaxTime($maxTime)
    {
        $this->container['maxTime'] = $maxTime;
        return $this;
    }

    /**
    * Gets avgTime
    *  **参数解释**：  平均时间。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getAvgTime()
    {
        return $this->container['avgTime'];
    }

    /**
    * Sets avgTime
    *
    * @param float|null $avgTime **参数解释**：  平均时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAvgTime($avgTime)
    {
        $this->container['avgTime'] = $avgTime;
        return $this;
    }

    /**
    * Gets maxRowsExamined
    *  **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getMaxRowsExamined()
    {
        return $this->container['maxRowsExamined'];
    }

    /**
    * Sets maxRowsExamined
    *
    * @param float|null $maxRowsExamined **参数解释**：  最大检查行数。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setMaxRowsExamined($maxRowsExamined)
    {
        $this->container['maxRowsExamined'] = $maxRowsExamined;
        return $this;
    }

    /**
    * Gets rowsExaminedSum
    *  **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getRowsExaminedSum()
    {
        return $this->container['rowsExaminedSum'];
    }

    /**
    * Sets rowsExaminedSum
    *
    * @param float|null $rowsExaminedSum **参数解释**：  总检查行数。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setRowsExaminedSum($rowsExaminedSum)
    {
        $this->container['rowsExaminedSum'] = $rowsExaminedSum;
        return $this;
    }

    /**
    * Gets costTimeSum
    *  **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getCostTimeSum()
    {
        return $this->container['costTimeSum'];
    }

    /**
    * Sets costTimeSum
    *
    * @param float|null $costTimeSum **参数解释**：  总耗时。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setCostTimeSum($costTimeSum)
    {
        $this->container['costTimeSum'] = $costTimeSum;
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

