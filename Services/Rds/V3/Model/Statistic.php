<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Statistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Statistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  用户名称
    * database  数据库名称
    * queryId  由SQL的语法解析树计算出的内部哈希码。
    * calls  调用次数
    * query  SQL语句的文本形式。
    * rows  扫描行数
    * canUse  是否可以执行sql限流
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'database' => 'string',
            'queryId' => 'string',
            'calls' => 'int',
            'query' => 'string',
            'rows' => 'int',
            'canUse' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  用户名称
    * database  数据库名称
    * queryId  由SQL的语法解析树计算出的内部哈希码。
    * calls  调用次数
    * query  SQL语句的文本形式。
    * rows  扫描行数
    * canUse  是否可以执行sql限流
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'database' => null,
        'queryId' => null,
        'calls' => 'int64',
        'query' => null,
        'rows' => 'int64',
        'canUse' => 'double'
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
    * userName  用户名称
    * database  数据库名称
    * queryId  由SQL的语法解析树计算出的内部哈希码。
    * calls  调用次数
    * query  SQL语句的文本形式。
    * rows  扫描行数
    * canUse  是否可以执行sql限流
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'database' => 'database',
            'queryId' => 'query_id',
            'calls' => 'calls',
            'query' => 'query',
            'rows' => 'rows',
            'canUse' => 'canUse'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  用户名称
    * database  数据库名称
    * queryId  由SQL的语法解析树计算出的内部哈希码。
    * calls  调用次数
    * query  SQL语句的文本形式。
    * rows  扫描行数
    * canUse  是否可以执行sql限流
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'database' => 'setDatabase',
            'queryId' => 'setQueryId',
            'calls' => 'setCalls',
            'query' => 'setQuery',
            'rows' => 'setRows',
            'canUse' => 'setCanUse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  用户名称
    * database  数据库名称
    * queryId  由SQL的语法解析树计算出的内部哈希码。
    * calls  调用次数
    * query  SQL语句的文本形式。
    * rows  扫描行数
    * canUse  是否可以执行sql限流
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'database' => 'getDatabase',
            'queryId' => 'getQueryId',
            'calls' => 'getCalls',
            'query' => 'getQuery',
            'rows' => 'getRows',
            'canUse' => 'getCanUse'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['calls'] = isset($data['calls']) ? $data['calls'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['canUse'] = isset($data['canUse']) ? $data['canUse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称
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
    * @param string|null $database 数据库名称
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets queryId
    *  由SQL的语法解析树计算出的内部哈希码。
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId 由SQL的语法解析树计算出的内部哈希码。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets calls
    *  调用次数
    *
    * @return int|null
    */
    public function getCalls()
    {
        return $this->container['calls'];
    }

    /**
    * Sets calls
    *
    * @param int|null $calls 调用次数
    *
    * @return $this
    */
    public function setCalls($calls)
    {
        $this->container['calls'] = $calls;
        return $this;
    }

    /**
    * Gets query
    *  SQL语句的文本形式。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query SQL语句的文本形式。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets rows
    *  扫描行数
    *
    * @return int|null
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int|null $rows 扫描行数
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
        return $this;
    }

    /**
    * Gets canUse
    *  是否可以执行sql限流
    *
    * @return double|null
    */
    public function getCanUse()
    {
        return $this->container['canUse'];
    }

    /**
    * Sets canUse
    *
    * @param double|null $canUse 是否可以执行sql限流
    *
    * @return $this
    */
    public function setCanUse($canUse)
    {
        $this->container['canUse'] = $canUse;
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

