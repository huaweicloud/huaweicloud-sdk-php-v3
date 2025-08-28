<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowLogList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowLogList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * users  执行慢sql的DDM账号名称。
    * database  慢sql所属逻辑库的名称。
    * querySample  慢sql执行语法。
    * logTime  DDM慢sql开始执行时间。
    * time  慢sql的执行时长，精确到毫秒。
    * shards  逻辑库物理分片名称。
    * rowsExamined  慢sql影响行数。
    * host  客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'users' => 'string',
            'database' => 'string',
            'querySample' => 'string',
            'logTime' => 'string',
            'time' => 'string',
            'shards' => 'string',
            'rowsExamined' => 'string',
            'host' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * users  执行慢sql的DDM账号名称。
    * database  慢sql所属逻辑库的名称。
    * querySample  慢sql执行语法。
    * logTime  DDM慢sql开始执行时间。
    * time  慢sql的执行时长，精确到毫秒。
    * shards  逻辑库物理分片名称。
    * rowsExamined  慢sql影响行数。
    * host  客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'users' => null,
        'database' => null,
        'querySample' => null,
        'logTime' => null,
        'time' => null,
        'shards' => null,
        'rowsExamined' => null,
        'host' => null
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
    * users  执行慢sql的DDM账号名称。
    * database  慢sql所属逻辑库的名称。
    * querySample  慢sql执行语法。
    * logTime  DDM慢sql开始执行时间。
    * time  慢sql的执行时长，精确到毫秒。
    * shards  逻辑库物理分片名称。
    * rowsExamined  慢sql影响行数。
    * host  客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'users' => 'users',
            'database' => 'database',
            'querySample' => 'querySample',
            'logTime' => 'logTime',
            'time' => 'time',
            'shards' => 'shards',
            'rowsExamined' => 'rowsExamined',
            'host' => 'host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * users  执行慢sql的DDM账号名称。
    * database  慢sql所属逻辑库的名称。
    * querySample  慢sql执行语法。
    * logTime  DDM慢sql开始执行时间。
    * time  慢sql的执行时长，精确到毫秒。
    * shards  逻辑库物理分片名称。
    * rowsExamined  慢sql影响行数。
    * host  客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @var string[]
    */
    protected static $setters = [
            'users' => 'setUsers',
            'database' => 'setDatabase',
            'querySample' => 'setQuerySample',
            'logTime' => 'setLogTime',
            'time' => 'setTime',
            'shards' => 'setShards',
            'rowsExamined' => 'setRowsExamined',
            'host' => 'setHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * users  执行慢sql的DDM账号名称。
    * database  慢sql所属逻辑库的名称。
    * querySample  慢sql执行语法。
    * logTime  DDM慢sql开始执行时间。
    * time  慢sql的执行时长，精确到毫秒。
    * shards  逻辑库物理分片名称。
    * rowsExamined  慢sql影响行数。
    * host  客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @var string[]
    */
    protected static $getters = [
            'users' => 'getUsers',
            'database' => 'getDatabase',
            'querySample' => 'getQuerySample',
            'logTime' => 'getLogTime',
            'time' => 'getTime',
            'shards' => 'getShards',
            'rowsExamined' => 'getRowsExamined',
            'host' => 'getHost'
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
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['querySample'] = isset($data['querySample']) ? $data['querySample'] : null;
        $this->container['logTime'] = isset($data['logTime']) ? $data['logTime'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
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
    * Gets users
    *  执行慢sql的DDM账号名称。
    *
    * @return string|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param string|null $users 执行慢sql的DDM账号名称。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets database
    *  慢sql所属逻辑库的名称。
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
    * @param string|null $database 慢sql所属逻辑库的名称。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets querySample
    *  慢sql执行语法。
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
    * @param string|null $querySample 慢sql执行语法。
    *
    * @return $this
    */
    public function setQuerySample($querySample)
    {
        $this->container['querySample'] = $querySample;
        return $this;
    }

    /**
    * Gets logTime
    *  DDM慢sql开始执行时间。
    *
    * @return string|null
    */
    public function getLogTime()
    {
        return $this->container['logTime'];
    }

    /**
    * Sets logTime
    *
    * @param string|null $logTime DDM慢sql开始执行时间。
    *
    * @return $this
    */
    public function setLogTime($logTime)
    {
        $this->container['logTime'] = $logTime;
        return $this;
    }

    /**
    * Gets time
    *  慢sql的执行时长，精确到毫秒。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 慢sql的执行时长，精确到毫秒。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets shards
    *  逻辑库物理分片名称。
    *
    * @return string|null
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param string|null $shards 逻辑库物理分片名称。
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  慢sql影响行数。
    *
    * @return string|null
    */
    public function getRowsExamined()
    {
        return $this->container['rowsExamined'];
    }

    /**
    * Sets rowsExamined
    *
    * @param string|null $rowsExamined 慢sql影响行数。
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets host
    *  客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 客户端ip，该IP地址可能涉及个人数据，建议用户依据实际IP地址的敏感性做查询后脱敏处理。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
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

