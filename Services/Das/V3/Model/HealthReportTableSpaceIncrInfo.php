<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportTableSpaceIncrInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportTableSpaceIncrInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * database  数据库名。
    * table  表名。
    * increment  增长量。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'database' => 'string',
            'table' => 'string',
            'increment' => 'int',
            'analyzeSuccess' => 'bool',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * database  数据库名。
    * table  表名。
    * increment  增长量。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'database' => null,
        'table' => null,
        'increment' => 'int64',
        'analyzeSuccess' => null,
        'errorMessage' => null
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
    * database  数据库名。
    * table  表名。
    * increment  增长量。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'database' => 'database',
            'table' => 'table',
            'increment' => 'increment',
            'analyzeSuccess' => 'analyze_success',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * database  数据库名。
    * table  表名。
    * increment  增长量。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'database' => 'setDatabase',
            'table' => 'setTable',
            'increment' => 'setIncrement',
            'analyzeSuccess' => 'setAnalyzeSuccess',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * database  数据库名。
    * table  表名。
    * increment  增长量。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'database' => 'getDatabase',
            'table' => 'getTable',
            'increment' => 'getIncrement',
            'analyzeSuccess' => 'getAnalyzeSuccess',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['increment'] = isset($data['increment']) ? $data['increment'] : null;
        $this->container['analyzeSuccess'] = isset($data['analyzeSuccess']) ? $data['analyzeSuccess'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
        if ($this->container['increment'] === null) {
            $invalidProperties[] = "'increment' can't be null";
        }
        if ($this->container['analyzeSuccess'] === null) {
            $invalidProperties[] = "'analyzeSuccess' can't be null";
        }
        if ($this->container['errorMessage'] === null) {
            $invalidProperties[] = "'errorMessage' can't be null";
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
    *  数据库名。
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
    * @param string $database 数据库名。
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
    *  表名。
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
    * @param string $table 表名。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets increment
    *  增长量。
    *
    * @return int
    */
    public function getIncrement()
    {
        return $this->container['increment'];
    }

    /**
    * Sets increment
    *
    * @param int $increment 增长量。
    *
    * @return $this
    */
    public function setIncrement($increment)
    {
        $this->container['increment'] = $increment;
        return $this;
    }

    /**
    * Gets analyzeSuccess
    *  统计分析是否成功。
    *
    * @return bool
    */
    public function getAnalyzeSuccess()
    {
        return $this->container['analyzeSuccess'];
    }

    /**
    * Sets analyzeSuccess
    *
    * @param bool $analyzeSuccess 统计分析是否成功。
    *
    * @return $this
    */
    public function setAnalyzeSuccess($analyzeSuccess)
    {
        $this->container['analyzeSuccess'] = $analyzeSuccess;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

