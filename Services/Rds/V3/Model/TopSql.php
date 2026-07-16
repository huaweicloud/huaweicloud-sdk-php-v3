<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopSql implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopSql';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sampleTime  采样时间
    * count  个数
    * databaseName  数据库名
    * userName  用户名
    * sqlStatement  SQL语句
    * queryId  Query ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sampleTime' => 'string',
            'count' => 'int',
            'databaseName' => 'string',
            'userName' => 'string',
            'sqlStatement' => 'string',
            'queryId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sampleTime  采样时间
    * count  个数
    * databaseName  数据库名
    * userName  用户名
    * sqlStatement  SQL语句
    * queryId  Query ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sampleTime' => null,
        'count' => 'int32',
        'databaseName' => null,
        'userName' => null,
        'sqlStatement' => null,
        'queryId' => null
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
    * sampleTime  采样时间
    * count  个数
    * databaseName  数据库名
    * userName  用户名
    * sqlStatement  SQL语句
    * queryId  Query ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sampleTime' => 'sample_time',
            'count' => 'count',
            'databaseName' => 'database_name',
            'userName' => 'user_name',
            'sqlStatement' => 'sql_statement',
            'queryId' => 'query_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sampleTime  采样时间
    * count  个数
    * databaseName  数据库名
    * userName  用户名
    * sqlStatement  SQL语句
    * queryId  Query ID
    *
    * @var string[]
    */
    protected static $setters = [
            'sampleTime' => 'setSampleTime',
            'count' => 'setCount',
            'databaseName' => 'setDatabaseName',
            'userName' => 'setUserName',
            'sqlStatement' => 'setSqlStatement',
            'queryId' => 'setQueryId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sampleTime  采样时间
    * count  个数
    * databaseName  数据库名
    * userName  用户名
    * sqlStatement  SQL语句
    * queryId  Query ID
    *
    * @var string[]
    */
    protected static $getters = [
            'sampleTime' => 'getSampleTime',
            'count' => 'getCount',
            'databaseName' => 'getDatabaseName',
            'userName' => 'getUserName',
            'sqlStatement' => 'getSqlStatement',
            'queryId' => 'getQueryId'
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
        $this->container['sampleTime'] = isset($data['sampleTime']) ? $data['sampleTime'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
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
    * Gets sampleTime
    *  采样时间
    *
    * @return string|null
    */
    public function getSampleTime()
    {
        return $this->container['sampleTime'];
    }

    /**
    * Sets sampleTime
    *
    * @param string|null $sampleTime 采样时间
    *
    * @return $this
    */
    public function setSampleTime($sampleTime)
    {
        $this->container['sampleTime'] = $sampleTime;
        return $this;
    }

    /**
    * Gets count
    *  个数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  SQL语句
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement SQL语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets queryId
    *  Query ID
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
    * @param string|null $queryId Query ID
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
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

