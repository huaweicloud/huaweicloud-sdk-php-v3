<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * instanceName  实例名称
    * instanceStatus  实例状态
    * version  实例版本号
    * engineType  引擎类型
    * ip  客户端IP
    * port  客户端端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量SQL是否启用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceStatus' => 'string',
            'version' => 'string',
            'engineType' => 'string',
            'ip' => 'string',
            'port' => 'int',
            'cpu' => 'int',
            'mem' => 'int',
            'loginFlag' => 'bool',
            'slowSqlFlag' => 'bool',
            'deadlockFlag' => 'bool',
            'lockBlockingFlag' => 'bool',
            'chargeFlag' => 'bool',
            'fullSqlFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * instanceName  实例名称
    * instanceStatus  实例状态
    * version  实例版本号
    * engineType  引擎类型
    * ip  客户端IP
    * port  客户端端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量SQL是否启用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'instanceStatus' => null,
        'version' => null,
        'engineType' => null,
        'ip' => null,
        'port' => 'int32',
        'cpu' => 'int32',
        'mem' => 'int32',
        'loginFlag' => null,
        'slowSqlFlag' => null,
        'deadlockFlag' => null,
        'lockBlockingFlag' => null,
        'chargeFlag' => null,
        'fullSqlFlag' => null
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
    * instanceId  实例ID
    * instanceName  实例名称
    * instanceStatus  实例状态
    * version  实例版本号
    * engineType  引擎类型
    * ip  客户端IP
    * port  客户端端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量SQL是否启用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceStatus' => 'instance_status',
            'version' => 'version',
            'engineType' => 'engine_type',
            'ip' => 'ip',
            'port' => 'port',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'loginFlag' => 'login_flag',
            'slowSqlFlag' => 'slow_sql_flag',
            'deadlockFlag' => 'deadlock_flag',
            'lockBlockingFlag' => 'lock_blocking_flag',
            'chargeFlag' => 'charge_flag',
            'fullSqlFlag' => 'full_sql_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * instanceName  实例名称
    * instanceStatus  实例状态
    * version  实例版本号
    * engineType  引擎类型
    * ip  客户端IP
    * port  客户端端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量SQL是否启用
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceStatus' => 'setInstanceStatus',
            'version' => 'setVersion',
            'engineType' => 'setEngineType',
            'ip' => 'setIp',
            'port' => 'setPort',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'loginFlag' => 'setLoginFlag',
            'slowSqlFlag' => 'setSlowSqlFlag',
            'deadlockFlag' => 'setDeadlockFlag',
            'lockBlockingFlag' => 'setLockBlockingFlag',
            'chargeFlag' => 'setChargeFlag',
            'fullSqlFlag' => 'setFullSqlFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * instanceName  实例名称
    * instanceStatus  实例状态
    * version  实例版本号
    * engineType  引擎类型
    * ip  客户端IP
    * port  客户端端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量SQL是否启用
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceStatus' => 'getInstanceStatus',
            'version' => 'getVersion',
            'engineType' => 'getEngineType',
            'ip' => 'getIp',
            'port' => 'getPort',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'loginFlag' => 'getLoginFlag',
            'slowSqlFlag' => 'getSlowSqlFlag',
            'deadlockFlag' => 'getDeadlockFlag',
            'lockBlockingFlag' => 'getLockBlockingFlag',
            'chargeFlag' => 'getChargeFlag',
            'fullSqlFlag' => 'getFullSqlFlag'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['loginFlag'] = isset($data['loginFlag']) ? $data['loginFlag'] : null;
        $this->container['slowSqlFlag'] = isset($data['slowSqlFlag']) ? $data['slowSqlFlag'] : null;
        $this->container['deadlockFlag'] = isset($data['deadlockFlag']) ? $data['deadlockFlag'] : null;
        $this->container['lockBlockingFlag'] = isset($data['lockBlockingFlag']) ? $data['lockBlockingFlag'] : null;
        $this->container['chargeFlag'] = isset($data['chargeFlag']) ? $data['chargeFlag'] : null;
        $this->container['fullSqlFlag'] = isset($data['fullSqlFlag']) ? $data['fullSqlFlag'] : null;
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
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus 实例状态
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets version
    *  实例版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 实例版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets ip
    *  客户端IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 客户端IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets port
    *  客户端端口号
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 客户端端口号
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets cpu
    *  实例cpu核数
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu 实例cpu核数
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  实例内存大小
    *
    * @return int|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param int|null $mem 实例内存大小
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets loginFlag
    *  实例登录是否启用
    *
    * @return bool|null
    */
    public function getLoginFlag()
    {
        return $this->container['loginFlag'];
    }

    /**
    * Sets loginFlag
    *
    * @param bool|null $loginFlag 实例登录是否启用
    *
    * @return $this
    */
    public function setLoginFlag($loginFlag)
    {
        $this->container['loginFlag'] = $loginFlag;
        return $this;
    }

    /**
    * Gets slowSqlFlag
    *  慢sql是否启用
    *
    * @return bool|null
    */
    public function getSlowSqlFlag()
    {
        return $this->container['slowSqlFlag'];
    }

    /**
    * Sets slowSqlFlag
    *
    * @param bool|null $slowSqlFlag 慢sql是否启用
    *
    * @return $this
    */
    public function setSlowSqlFlag($slowSqlFlag)
    {
        $this->container['slowSqlFlag'] = $slowSqlFlag;
        return $this;
    }

    /**
    * Gets deadlockFlag
    *  死锁分析是否启用
    *
    * @return bool|null
    */
    public function getDeadlockFlag()
    {
        return $this->container['deadlockFlag'];
    }

    /**
    * Sets deadlockFlag
    *
    * @param bool|null $deadlockFlag 死锁分析是否启用
    *
    * @return $this
    */
    public function setDeadlockFlag($deadlockFlag)
    {
        $this->container['deadlockFlag'] = $deadlockFlag;
        return $this;
    }

    /**
    * Gets lockBlockingFlag
    *  锁阻塞是否启用
    *
    * @return bool|null
    */
    public function getLockBlockingFlag()
    {
        return $this->container['lockBlockingFlag'];
    }

    /**
    * Sets lockBlockingFlag
    *
    * @param bool|null $lockBlockingFlag 锁阻塞是否启用
    *
    * @return $this
    */
    public function setLockBlockingFlag($lockBlockingFlag)
    {
        $this->container['lockBlockingFlag'] = $lockBlockingFlag;
        return $this;
    }

    /**
    * Gets chargeFlag
    *  当前实例是否计费
    *
    * @return bool|null
    */
    public function getChargeFlag()
    {
        return $this->container['chargeFlag'];
    }

    /**
    * Sets chargeFlag
    *
    * @param bool|null $chargeFlag 当前实例是否计费
    *
    * @return $this
    */
    public function setChargeFlag($chargeFlag)
    {
        $this->container['chargeFlag'] = $chargeFlag;
        return $this;
    }

    /**
    * Gets fullSqlFlag
    *  全量SQL是否启用
    *
    * @return bool|null
    */
    public function getFullSqlFlag()
    {
        return $this->container['fullSqlFlag'];
    }

    /**
    * Sets fullSqlFlag
    *
    * @param bool|null $fullSqlFlag 全量SQL是否启用
    *
    * @return $this
    */
    public function setFullSqlFlag($fullSqlFlag)
    {
        $this->container['fullSqlFlag'] = $fullSqlFlag;
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

