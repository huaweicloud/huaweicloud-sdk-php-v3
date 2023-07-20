<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlSlowLogDetailsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlSlowLogDetailsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  执行次数。
    * time  执行时间。
    * lockTime  等待锁时间。mysql支持
    * rowsSent  结果行数量。mysql支持
    * rowsExamined  扫描的行数量。mysql支持
    * database  所属数据库。
    * users  帐号。
    * querySample  执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
    * type  语句类型。
    * startTime  发生时间，UTC时间。
    * clientIp  IP地址。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'string',
            'time' => 'string',
            'lockTime' => 'string',
            'rowsSent' => 'string',
            'rowsExamined' => 'string',
            'database' => 'string',
            'users' => 'string',
            'querySample' => 'string',
            'type' => 'string',
            'startTime' => 'string',
            'clientIp' => 'string',
            'lineNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  执行次数。
    * time  执行时间。
    * lockTime  等待锁时间。mysql支持
    * rowsSent  结果行数量。mysql支持
    * rowsExamined  扫描的行数量。mysql支持
    * database  所属数据库。
    * users  帐号。
    * querySample  执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
    * type  语句类型。
    * startTime  发生时间，UTC时间。
    * clientIp  IP地址。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'time' => null,
        'lockTime' => null,
        'rowsSent' => null,
        'rowsExamined' => null,
        'database' => null,
        'users' => null,
        'querySample' => null,
        'type' => null,
        'startTime' => null,
        'clientIp' => null,
        'lineNum' => null
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
    * count  执行次数。
    * time  执行时间。
    * lockTime  等待锁时间。mysql支持
    * rowsSent  结果行数量。mysql支持
    * rowsExamined  扫描的行数量。mysql支持
    * database  所属数据库。
    * users  帐号。
    * querySample  执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
    * type  语句类型。
    * startTime  发生时间，UTC时间。
    * clientIp  IP地址。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'time' => 'time',
            'lockTime' => 'lock_time',
            'rowsSent' => 'rows_sent',
            'rowsExamined' => 'rows_examined',
            'database' => 'database',
            'users' => 'users',
            'querySample' => 'query_sample',
            'type' => 'type',
            'startTime' => 'start_time',
            'clientIp' => 'client_ip',
            'lineNum' => 'line_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  执行次数。
    * time  执行时间。
    * lockTime  等待锁时间。mysql支持
    * rowsSent  结果行数量。mysql支持
    * rowsExamined  扫描的行数量。mysql支持
    * database  所属数据库。
    * users  帐号。
    * querySample  执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
    * type  语句类型。
    * startTime  发生时间，UTC时间。
    * clientIp  IP地址。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'time' => 'setTime',
            'lockTime' => 'setLockTime',
            'rowsSent' => 'setRowsSent',
            'rowsExamined' => 'setRowsExamined',
            'database' => 'setDatabase',
            'users' => 'setUsers',
            'querySample' => 'setQuerySample',
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'clientIp' => 'setClientIp',
            'lineNum' => 'setLineNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  执行次数。
    * time  执行时间。
    * lockTime  等待锁时间。mysql支持
    * rowsSent  结果行数量。mysql支持
    * rowsExamined  扫描的行数量。mysql支持
    * database  所属数据库。
    * users  帐号。
    * querySample  执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
    * type  语句类型。
    * startTime  发生时间，UTC时间。
    * clientIp  IP地址。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'time' => 'getTime',
            'lockTime' => 'getLockTime',
            'rowsSent' => 'getRowsSent',
            'rowsExamined' => 'getRowsExamined',
            'database' => 'getDatabase',
            'users' => 'getUsers',
            'querySample' => 'getQuerySample',
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'clientIp' => 'getClientIp',
            'lineNum' => 'getLineNum'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['querySample'] = isset($data['querySample']) ? $data['querySample'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
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
    * Gets count
    *  执行次数。
    *
    * @return string|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string|null $count 执行次数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets time
    *  执行时间。
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
    * @param string|null $time 执行时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets lockTime
    *  等待锁时间。mysql支持
    *
    * @return string|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param string|null $lockTime 等待锁时间。mysql支持
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets rowsSent
    *  结果行数量。mysql支持
    *
    * @return string|null
    */
    public function getRowsSent()
    {
        return $this->container['rowsSent'];
    }

    /**
    * Sets rowsSent
    *
    * @param string|null $rowsSent 结果行数量。mysql支持
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  扫描的行数量。mysql支持
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
    * @param string|null $rowsExamined 扫描的行数量。mysql支持
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets database
    *  所属数据库。
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
    * @param string|null $database 所属数据库。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets users
    *  帐号。
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
    * @param string|null $users 帐号。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets querySample
    *  执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
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
    * @param string|null $querySample 执行语法。慢日志默认脱敏显示，如需明文显示，请联系客服人员添加白名单。
    *
    * @return $this
    */
    public function setQuerySample($querySample)
    {
        $this->container['querySample'] = $querySample;
        return $this;
    }

    /**
    * Gets type
    *  语句类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 语句类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  发生时间，UTC时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 发生时间，UTC时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets clientIp
    *  IP地址。
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
    * @param string|null $clientIp IP地址。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号。
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum 日志单行序列号。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
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

