<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DASInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DASInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * instanceStatus  实例状态。
    * version  实例版本号。
    * engineType  引擎类型。
    * ip  ip
    * port  端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量sql是否启用
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * instanceStatus  实例状态。
    * version  实例版本号。
    * engineType  引擎类型。
    * ip  ip
    * port  端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量sql是否启用
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * instanceStatus  实例状态。
    * version  实例版本号。
    * engineType  引擎类型。
    * ip  ip
    * port  端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量sql是否启用
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * instanceStatus  实例状态。
    * version  实例版本号。
    * engineType  引擎类型。
    * ip  ip
    * port  端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量sql是否启用
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * instanceStatus  实例状态。
    * version  实例版本号。
    * engineType  引擎类型。
    * ip  ip
    * port  端口号
    * cpu  实例cpu核数
    * mem  实例内存大小
    * loginFlag  实例登录是否启用
    * slowSqlFlag  慢sql是否启用
    * deadlockFlag  死锁分析是否启用
    * lockBlockingFlag  锁阻塞是否启用
    * chargeFlag  当前实例是否计费
    * fullSqlFlag  全量sql是否启用
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
            if ((mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceStatus'] === null) {
            $invalidProperties[] = "'instanceStatus' can't be null";
        }
            if ((mb_strlen($this->container['instanceStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['instanceStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
            if ((mb_strlen($this->container['engineType']) > 64)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['engineType']) < 0)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 128)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
            if (($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
        if ($this->container['loginFlag'] === null) {
            $invalidProperties[] = "'loginFlag' can't be null";
        }
        if ($this->container['slowSqlFlag'] === null) {
            $invalidProperties[] = "'slowSqlFlag' can't be null";
        }
        if ($this->container['deadlockFlag'] === null) {
            $invalidProperties[] = "'deadlockFlag' can't be null";
        }
        if ($this->container['lockBlockingFlag'] === null) {
            $invalidProperties[] = "'lockBlockingFlag' can't be null";
        }
        if ($this->container['chargeFlag'] === null) {
            $invalidProperties[] = "'chargeFlag' can't be null";
        }
        if ($this->container['fullSqlFlag'] === null) {
            $invalidProperties[] = "'fullSqlFlag' can't be null";
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
    * Gets instanceId
    *  实例id。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id。
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
    *  实例名称。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 实例名称。
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
    *  实例状态。
    *
    * @return string
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string $instanceStatus 实例状态。
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
    *  实例版本号。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 实例版本号。
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
    *  引擎类型。
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 引擎类型。
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
    *  ip
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip ip
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
    *  端口号
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port 端口号
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
    * @return int
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int $cpu 实例cpu核数
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
    * @return int
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param int $mem 实例内存大小
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
    * @return bool
    */
    public function getLoginFlag()
    {
        return $this->container['loginFlag'];
    }

    /**
    * Sets loginFlag
    *
    * @param bool $loginFlag 实例登录是否启用
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
    * @return bool
    */
    public function getSlowSqlFlag()
    {
        return $this->container['slowSqlFlag'];
    }

    /**
    * Sets slowSqlFlag
    *
    * @param bool $slowSqlFlag 慢sql是否启用
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
    * @return bool
    */
    public function getDeadlockFlag()
    {
        return $this->container['deadlockFlag'];
    }

    /**
    * Sets deadlockFlag
    *
    * @param bool $deadlockFlag 死锁分析是否启用
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
    * @return bool
    */
    public function getLockBlockingFlag()
    {
        return $this->container['lockBlockingFlag'];
    }

    /**
    * Sets lockBlockingFlag
    *
    * @param bool $lockBlockingFlag 锁阻塞是否启用
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
    * @return bool
    */
    public function getChargeFlag()
    {
        return $this->container['chargeFlag'];
    }

    /**
    * Sets chargeFlag
    *
    * @param bool $chargeFlag 当前实例是否计费
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
    *  全量sql是否启用
    *
    * @return bool
    */
    public function getFullSqlFlag()
    {
        return $this->container['fullSqlFlag'];
    }

    /**
    * Sets fullSqlFlag
    *
    * @param bool $fullSqlFlag 全量sql是否启用
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

