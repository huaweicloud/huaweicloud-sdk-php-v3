<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlSampleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlSampleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  SQL
    * sqlTemplateId  SQL模板
    * database  数据库名称
    * client  客户端地址
    * user  用户名
    * executeAt  执行时间
    * queryTime  执行耗时（ms）
    * lockTime  锁等待时间（ms）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'sqlTemplateId' => 'string',
            'database' => 'string',
            'client' => 'string',
            'user' => 'string',
            'executeAt' => 'int',
            'queryTime' => 'double',
            'lockTime' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  SQL
    * sqlTemplateId  SQL模板
    * database  数据库名称
    * client  客户端地址
    * user  用户名
    * executeAt  执行时间
    * queryTime  执行耗时（ms）
    * lockTime  锁等待时间（ms）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'sqlTemplateId' => null,
        'database' => null,
        'client' => null,
        'user' => null,
        'executeAt' => 'int64',
        'queryTime' => 'double',
        'lockTime' => 'double'
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
    * sql  SQL
    * sqlTemplateId  SQL模板
    * database  数据库名称
    * client  客户端地址
    * user  用户名
    * executeAt  执行时间
    * queryTime  执行耗时（ms）
    * lockTime  锁等待时间（ms）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'sqlTemplateId' => 'sql_template_id',
            'database' => 'database',
            'client' => 'client',
            'user' => 'user',
            'executeAt' => 'execute_at',
            'queryTime' => 'query_time',
            'lockTime' => 'lock_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  SQL
    * sqlTemplateId  SQL模板
    * database  数据库名称
    * client  客户端地址
    * user  用户名
    * executeAt  执行时间
    * queryTime  执行耗时（ms）
    * lockTime  锁等待时间（ms）
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'sqlTemplateId' => 'setSqlTemplateId',
            'database' => 'setDatabase',
            'client' => 'setClient',
            'user' => 'setUser',
            'executeAt' => 'setExecuteAt',
            'queryTime' => 'setQueryTime',
            'lockTime' => 'setLockTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  SQL
    * sqlTemplateId  SQL模板
    * database  数据库名称
    * client  客户端地址
    * user  用户名
    * executeAt  执行时间
    * queryTime  执行耗时（ms）
    * lockTime  锁等待时间（ms）
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'sqlTemplateId' => 'getSqlTemplateId',
            'database' => 'getDatabase',
            'client' => 'getClient',
            'user' => 'getUser',
            'executeAt' => 'getExecuteAt',
            'queryTime' => 'getQueryTime',
            'lockTime' => 'getLockTime'
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['executeAt'] = isset($data['executeAt']) ? $data['executeAt'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
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
    * Gets sql
    *  SQL
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql SQL
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板
    *
    * @return string|null
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string|null $sqlTemplateId SQL模板
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
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
    * Gets client
    *  客户端地址
    *
    * @return string|null
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string|null $client 客户端地址
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets user
    *  用户名
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets executeAt
    *  执行时间
    *
    * @return int|null
    */
    public function getExecuteAt()
    {
        return $this->container['executeAt'];
    }

    /**
    * Sets executeAt
    *
    * @param int|null $executeAt 执行时间
    *
    * @return $this
    */
    public function setExecuteAt($executeAt)
    {
        $this->container['executeAt'] = $executeAt;
        return $this;
    }

    /**
    * Gets queryTime
    *  执行耗时（ms）
    *
    * @return double|null
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param double|null $queryTime 执行耗时（ms）
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
        return $this;
    }

    /**
    * Gets lockTime
    *  锁等待时间（ms）
    *
    * @return double|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param double|null $lockTime 锁等待时间（ms）
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
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

