<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoIncrementUsageRespAutoIncrementUsageList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoIncrementUsageResp_auto_increment_usage_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * database  数据库名
    * table  表名
    * column  列名
    * currentValue  自增ID当前值
    * maxValue  该数据类型的自增 ID 支持的最大值。
    * ratio  自增ID使用比例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'database' => 'string',
            'table' => 'string',
            'column' => 'string',
            'currentValue' => 'string',
            'maxValue' => 'string',
            'ratio' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * database  数据库名
    * table  表名
    * column  列名
    * currentValue  自增ID当前值
    * maxValue  该数据类型的自增 ID 支持的最大值。
    * ratio  自增ID使用比例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'database' => null,
        'table' => null,
        'column' => null,
        'currentValue' => null,
        'maxValue' => null,
        'ratio' => null
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
    * database  数据库名
    * table  表名
    * column  列名
    * currentValue  自增ID当前值
    * maxValue  该数据类型的自增 ID 支持的最大值。
    * ratio  自增ID使用比例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'database' => 'database',
            'table' => 'table',
            'column' => 'column',
            'currentValue' => 'current_value',
            'maxValue' => 'max_value',
            'ratio' => 'ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * database  数据库名
    * table  表名
    * column  列名
    * currentValue  自增ID当前值
    * maxValue  该数据类型的自增 ID 支持的最大值。
    * ratio  自增ID使用比例
    *
    * @var string[]
    */
    protected static $setters = [
            'database' => 'setDatabase',
            'table' => 'setTable',
            'column' => 'setColumn',
            'currentValue' => 'setCurrentValue',
            'maxValue' => 'setMaxValue',
            'ratio' => 'setRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * database  数据库名
    * table  表名
    * column  列名
    * currentValue  自增ID当前值
    * maxValue  该数据类型的自增 ID 支持的最大值。
    * ratio  自增ID使用比例
    *
    * @var string[]
    */
    protected static $getters = [
            'database' => 'getDatabase',
            'table' => 'getTable',
            'column' => 'getColumn',
            'currentValue' => 'getCurrentValue',
            'maxValue' => 'getMaxValue',
            'ratio' => 'getRatio'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['currentValue'] = isset($data['currentValue']) ? $data['currentValue'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['table'] === null) {
            $invalidProperties[] = "'table' can't be null";
        }
        if ($this->container['column'] === null) {
            $invalidProperties[] = "'column' can't be null";
        }
        if ($this->container['currentValue'] === null) {
            $invalidProperties[] = "'currentValue' can't be null";
        }
        if ($this->container['maxValue'] === null) {
            $invalidProperties[] = "'maxValue' can't be null";
        }
        if ($this->container['ratio'] === null) {
            $invalidProperties[] = "'ratio' can't be null";
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
    * Gets database
    *  数据库名
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库名
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets table
    *  表名
    *
    * @return string
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string $table 表名
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets column
    *  列名
    *
    * @return string
    */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
    * Sets column
    *
    * @param string $column 列名
    *
    * @return $this
    */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
    * Gets currentValue
    *  自增ID当前值
    *
    * @return string
    */
    public function getCurrentValue()
    {
        return $this->container['currentValue'];
    }

    /**
    * Sets currentValue
    *
    * @param string $currentValue 自增ID当前值
    *
    * @return $this
    */
    public function setCurrentValue($currentValue)
    {
        $this->container['currentValue'] = $currentValue;
        return $this;
    }

    /**
    * Gets maxValue
    *  该数据类型的自增 ID 支持的最大值。
    *
    * @return string
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param string $maxValue 该数据类型的自增 ID 支持的最大值。
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets ratio
    *  自增ID使用比例
    *
    * @return string
    */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
    * Sets ratio
    *
    * @param string $ratio 自增ID使用比例
    *
    * @return $this
    */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;
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

