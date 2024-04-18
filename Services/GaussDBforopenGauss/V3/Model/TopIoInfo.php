<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopIoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopIoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * threadId  线程ID
    * threadType  线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    * diskReadRate  从磁盘读取数据速率, 单位：KB/s
    * diskWriteRate  写入磁盘数据速率, 单位：KB/s
    * sessionId  会话ID
    * uniqueSqlId  SQL ID
    * databaseName  数据库
    * clientIp  客户端IP
    * userName  用户名
    * state  状态
    * sqlStart  语句开始时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'threadId' => 'string',
            'threadType' => 'string',
            'diskReadRate' => 'int',
            'diskWriteRate' => 'int',
            'sessionId' => 'string',
            'uniqueSqlId' => 'string',
            'databaseName' => 'string',
            'clientIp' => 'string',
            'userName' => 'string',
            'state' => 'string',
            'sqlStart' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * threadId  线程ID
    * threadType  线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    * diskReadRate  从磁盘读取数据速率, 单位：KB/s
    * diskWriteRate  写入磁盘数据速率, 单位：KB/s
    * sessionId  会话ID
    * uniqueSqlId  SQL ID
    * databaseName  数据库
    * clientIp  客户端IP
    * userName  用户名
    * state  状态
    * sqlStart  语句开始时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'threadId' => null,
        'threadType' => null,
        'diskReadRate' => 'float',
        'diskWriteRate' => 'float',
        'sessionId' => null,
        'uniqueSqlId' => null,
        'databaseName' => null,
        'clientIp' => null,
        'userName' => null,
        'state' => null,
        'sqlStart' => 'int64'
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
    * threadId  线程ID
    * threadType  线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    * diskReadRate  从磁盘读取数据速率, 单位：KB/s
    * diskWriteRate  写入磁盘数据速率, 单位：KB/s
    * sessionId  会话ID
    * uniqueSqlId  SQL ID
    * databaseName  数据库
    * clientIp  客户端IP
    * userName  用户名
    * state  状态
    * sqlStart  语句开始时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'threadId' => 'thread_id',
            'threadType' => 'thread_type',
            'diskReadRate' => 'disk_read_rate',
            'diskWriteRate' => 'disk_write_rate',
            'sessionId' => 'session_id',
            'uniqueSqlId' => 'unique_sql_id',
            'databaseName' => 'database_name',
            'clientIp' => 'client_ip',
            'userName' => 'user_name',
            'state' => 'state',
            'sqlStart' => 'sql_start'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * threadId  线程ID
    * threadType  线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    * diskReadRate  从磁盘读取数据速率, 单位：KB/s
    * diskWriteRate  写入磁盘数据速率, 单位：KB/s
    * sessionId  会话ID
    * uniqueSqlId  SQL ID
    * databaseName  数据库
    * clientIp  客户端IP
    * userName  用户名
    * state  状态
    * sqlStart  语句开始时间
    *
    * @var string[]
    */
    protected static $setters = [
            'threadId' => 'setThreadId',
            'threadType' => 'setThreadType',
            'diskReadRate' => 'setDiskReadRate',
            'diskWriteRate' => 'setDiskWriteRate',
            'sessionId' => 'setSessionId',
            'uniqueSqlId' => 'setUniqueSqlId',
            'databaseName' => 'setDatabaseName',
            'clientIp' => 'setClientIp',
            'userName' => 'setUserName',
            'state' => 'setState',
            'sqlStart' => 'setSqlStart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * threadId  线程ID
    * threadType  线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    * diskReadRate  从磁盘读取数据速率, 单位：KB/s
    * diskWriteRate  写入磁盘数据速率, 单位：KB/s
    * sessionId  会话ID
    * uniqueSqlId  SQL ID
    * databaseName  数据库
    * clientIp  客户端IP
    * userName  用户名
    * state  状态
    * sqlStart  语句开始时间
    *
    * @var string[]
    */
    protected static $getters = [
            'threadId' => 'getThreadId',
            'threadType' => 'getThreadType',
            'diskReadRate' => 'getDiskReadRate',
            'diskWriteRate' => 'getDiskWriteRate',
            'sessionId' => 'getSessionId',
            'uniqueSqlId' => 'getUniqueSqlId',
            'databaseName' => 'getDatabaseName',
            'clientIp' => 'getClientIp',
            'userName' => 'getUserName',
            'state' => 'getState',
            'sqlStart' => 'getSqlStart'
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
    const THREAD_TYPE_WORKER = 'worker';
    const THREAD_TYPE_BACKGROUND = 'background';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getThreadTypeAllowableValues()
    {
        return [
            self::THREAD_TYPE_WORKER,
            self::THREAD_TYPE_BACKGROUND,
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
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['threadType'] = isset($data['threadType']) ? $data['threadType'] : null;
        $this->container['diskReadRate'] = isset($data['diskReadRate']) ? $data['diskReadRate'] : null;
        $this->container['diskWriteRate'] = isset($data['diskWriteRate']) ? $data['diskWriteRate'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['uniqueSqlId'] = isset($data['uniqueSqlId']) ? $data['uniqueSqlId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sqlStart'] = isset($data['sqlStart']) ? $data['sqlStart'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getThreadTypeAllowableValues();
                if (!is_null($this->container['threadType']) && !in_array($this->container['threadType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'threadType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets threadId
    *  线程ID
    *
    * @return string|null
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param string|null $threadId 线程ID
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets threadType
    *  线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    *
    * @return string|null
    */
    public function getThreadType()
    {
        return $this->container['threadType'];
    }

    /**
    * Sets threadType
    *
    * @param string|null $threadType 线程分类标识，取值：业务（worker）和后台（background）。需将GUC参数\"enable_thread_pool\"设置为on
    *
    * @return $this
    */
    public function setThreadType($threadType)
    {
        $this->container['threadType'] = $threadType;
        return $this;
    }

    /**
    * Gets diskReadRate
    *  从磁盘读取数据速率, 单位：KB/s
    *
    * @return int|null
    */
    public function getDiskReadRate()
    {
        return $this->container['diskReadRate'];
    }

    /**
    * Sets diskReadRate
    *
    * @param int|null $diskReadRate 从磁盘读取数据速率, 单位：KB/s
    *
    * @return $this
    */
    public function setDiskReadRate($diskReadRate)
    {
        $this->container['diskReadRate'] = $diskReadRate;
        return $this;
    }

    /**
    * Gets diskWriteRate
    *  写入磁盘数据速率, 单位：KB/s
    *
    * @return int|null
    */
    public function getDiskWriteRate()
    {
        return $this->container['diskWriteRate'];
    }

    /**
    * Sets diskWriteRate
    *
    * @param int|null $diskWriteRate 写入磁盘数据速率, 单位：KB/s
    *
    * @return $this
    */
    public function setDiskWriteRate($diskWriteRate)
    {
        $this->container['diskWriteRate'] = $diskWriteRate;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话ID
    *
    * @return string|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string|null $sessionId 会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets uniqueSqlId
    *  SQL ID
    *
    * @return string|null
    */
    public function getUniqueSqlId()
    {
        return $this->container['uniqueSqlId'];
    }

    /**
    * Sets uniqueSqlId
    *
    * @param string|null $uniqueSqlId SQL ID
    *
    * @return $this
    */
    public function setUniqueSqlId($uniqueSqlId)
    {
        $this->container['uniqueSqlId'] = $uniqueSqlId;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库
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
    * @param string|null $databaseName 数据库
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets clientIp
    *  客户端IP
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp 客户端IP
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
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
    * Gets state
    *  状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets sqlStart
    *  语句开始时间
    *
    * @return int|null
    */
    public function getSqlStart()
    {
        return $this->container['sqlStart'];
    }

    /**
    * Sets sqlStart
    *
    * @param int|null $sqlStart 语句开始时间
    *
    * @return $this
    */
    public function setSqlStart($sqlStart)
    {
        $this->container['sqlStart'] = $sqlStart;
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

