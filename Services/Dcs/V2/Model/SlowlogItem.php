<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowlogItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowlogItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  慢日志的唯一标识
    * command  慢命令
    * startTime  执行开始时间,格式为“2020-06-19T07:06:07Z”
    * duration  持续时间，单位是ms
    * shardName  慢命令所在的分片名称，仅在实例类型为集群时支持
    * databaseId  数据库id，当前只对指定客户开放
    * username  操作慢日志的账号名称，当前只对指定客户开放
    * nodeRole  **参数解释**： 节点类型。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'command' => 'string',
            'startTime' => 'string',
            'duration' => 'string',
            'shardName' => 'string',
            'databaseId' => 'int',
            'username' => 'string',
            'nodeRole' => 'string',
            'clientIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  慢日志的唯一标识
    * command  慢命令
    * startTime  执行开始时间,格式为“2020-06-19T07:06:07Z”
    * duration  持续时间，单位是ms
    * shardName  慢命令所在的分片名称，仅在实例类型为集群时支持
    * databaseId  数据库id，当前只对指定客户开放
    * username  操作慢日志的账号名称，当前只对指定客户开放
    * nodeRole  **参数解释**： 节点类型。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'command' => null,
        'startTime' => null,
        'duration' => null,
        'shardName' => null,
        'databaseId' => null,
        'username' => null,
        'nodeRole' => null,
        'clientIp' => null
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
    * id  慢日志的唯一标识
    * command  慢命令
    * startTime  执行开始时间,格式为“2020-06-19T07:06:07Z”
    * duration  持续时间，单位是ms
    * shardName  慢命令所在的分片名称，仅在实例类型为集群时支持
    * databaseId  数据库id，当前只对指定客户开放
    * username  操作慢日志的账号名称，当前只对指定客户开放
    * nodeRole  **参数解释**： 节点类型。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'command' => 'command',
            'startTime' => 'start_time',
            'duration' => 'duration',
            'shardName' => 'shard_name',
            'databaseId' => 'database_id',
            'username' => 'username',
            'nodeRole' => 'node_role',
            'clientIp' => 'client_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  慢日志的唯一标识
    * command  慢命令
    * startTime  执行开始时间,格式为“2020-06-19T07:06:07Z”
    * duration  持续时间，单位是ms
    * shardName  慢命令所在的分片名称，仅在实例类型为集群时支持
    * databaseId  数据库id，当前只对指定客户开放
    * username  操作慢日志的账号名称，当前只对指定客户开放
    * nodeRole  **参数解释**： 节点类型。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'command' => 'setCommand',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'shardName' => 'setShardName',
            'databaseId' => 'setDatabaseId',
            'username' => 'setUsername',
            'nodeRole' => 'setNodeRole',
            'clientIp' => 'setClientIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  慢日志的唯一标识
    * command  慢命令
    * startTime  执行开始时间,格式为“2020-06-19T07:06:07Z”
    * duration  持续时间，单位是ms
    * shardName  慢命令所在的分片名称，仅在实例类型为集群时支持
    * databaseId  数据库id，当前只对指定客户开放
    * username  操作慢日志的账号名称，当前只对指定客户开放
    * nodeRole  **参数解释**： 节点类型。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'command' => 'getCommand',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'shardName' => 'getShardName',
            'databaseId' => 'getDatabaseId',
            'username' => 'getUsername',
            'nodeRole' => 'getNodeRole',
            'clientIp' => 'getClientIp'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['shardName'] = isset($data['shardName']) ? $data['shardName'] : null;
        $this->container['databaseId'] = isset($data['databaseId']) ? $data['databaseId'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
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
    * Gets id
    *  慢日志的唯一标识
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 慢日志的唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets command
    *  慢命令
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 慢命令
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets startTime
    *  执行开始时间,格式为“2020-06-19T07:06:07Z”
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
    * @param string|null $startTime 执行开始时间,格式为“2020-06-19T07:06:07Z”
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  持续时间，单位是ms
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 持续时间，单位是ms
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets shardName
    *  慢命令所在的分片名称，仅在实例类型为集群时支持
    *
    * @return string|null
    */
    public function getShardName()
    {
        return $this->container['shardName'];
    }

    /**
    * Sets shardName
    *
    * @param string|null $shardName 慢命令所在的分片名称，仅在实例类型为集群时支持
    *
    * @return $this
    */
    public function setShardName($shardName)
    {
        $this->container['shardName'] = $shardName;
        return $this;
    }

    /**
    * Gets databaseId
    *  数据库id，当前只对指定客户开放
    *
    * @return int|null
    */
    public function getDatabaseId()
    {
        return $this->container['databaseId'];
    }

    /**
    * Sets databaseId
    *
    * @param int|null $databaseId 数据库id，当前只对指定客户开放
    *
    * @return $this
    */
    public function setDatabaseId($databaseId)
    {
        $this->container['databaseId'] = $databaseId;
        return $this;
    }

    /**
    * Gets username
    *  操作慢日志的账号名称，当前只对指定客户开放
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 操作慢日志的账号名称，当前只对指定客户开放
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets nodeRole
    *  **参数解释**： 节点类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string|null $nodeRole **参数解释**： 节点类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
        return $this;
    }

    /**
    * Gets clientIp
    *  **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
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
    * @param string|null $clientIp **参数解释**： 客户端IP地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
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

