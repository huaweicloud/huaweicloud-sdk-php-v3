<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostgresqlHbaConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostgresqlHbaConf';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  连接类型，枚举，host、hostssl、hostnossl
    * database  数据库名，除template0，template1的数据库名，多个以逗号隔开
    * user  用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    * address  客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    * mask  掩码，默认为空字符串
    * method  认证方式。枚举：reject、md5、scram-sha-256
    * priority  优先级，表示配置的先后
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'database' => 'string',
            'user' => 'string',
            'address' => 'string',
            'mask' => 'string',
            'method' => 'string',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  连接类型，枚举，host、hostssl、hostnossl
    * database  数据库名，除template0，template1的数据库名，多个以逗号隔开
    * user  用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    * address  客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    * mask  掩码，默认为空字符串
    * method  认证方式。枚举：reject、md5、scram-sha-256
    * priority  优先级，表示配置的先后
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'database' => null,
        'user' => null,
        'address' => null,
        'mask' => null,
        'method' => null,
        'priority' => 'int32'
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
    * type  连接类型，枚举，host、hostssl、hostnossl
    * database  数据库名，除template0，template1的数据库名，多个以逗号隔开
    * user  用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    * address  客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    * mask  掩码，默认为空字符串
    * method  认证方式。枚举：reject、md5、scram-sha-256
    * priority  优先级，表示配置的先后
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'database' => 'database',
            'user' => 'user',
            'address' => 'address',
            'mask' => 'mask',
            'method' => 'method',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  连接类型，枚举，host、hostssl、hostnossl
    * database  数据库名，除template0，template1的数据库名，多个以逗号隔开
    * user  用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    * address  客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    * mask  掩码，默认为空字符串
    * method  认证方式。枚举：reject、md5、scram-sha-256
    * priority  优先级，表示配置的先后
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'database' => 'setDatabase',
            'user' => 'setUser',
            'address' => 'setAddress',
            'mask' => 'setMask',
            'method' => 'setMethod',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  连接类型，枚举，host、hostssl、hostnossl
    * database  数据库名，除template0，template1的数据库名，多个以逗号隔开
    * user  用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    * address  客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    * mask  掩码，默认为空字符串
    * method  认证方式。枚举：reject、md5、scram-sha-256
    * priority  优先级，表示配置的先后
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'database' => 'getDatabase',
            'user' => 'getUser',
            'address' => 'getAddress',
            'mask' => 'getMask',
            'method' => 'getMethod',
            'priority' => 'getPriority'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets type
    *  连接类型，枚举，host、hostssl、hostnossl
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 连接类型，枚举，host、hostssl、hostnossl
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets database
    *  数据库名，除template0，template1的数据库名，多个以逗号隔开
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
    * @param string $database 数据库名，除template0，template1的数据库名，多个以逗号隔开
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets user
    *  用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user 用户名，all，除内置用户（rdsAdmin, rdsMetric, rdsBackup, rdsRepl, rdsProxy）以外，多个以逗号隔开
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets address
    *  客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 客户端IP地址。0.0.0.0/0表示允许用户从任意IP地址访问数据库
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets mask
    *  掩码，默认为空字符串
    *
    * @return string|null
    */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
    * Sets mask
    *
    * @param string|null $mask 掩码，默认为空字符串
    *
    * @return $this
    */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;
        return $this;
    }

    /**
    * Gets method
    *  认证方式。枚举：reject、md5、scram-sha-256
    *
    * @return string
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string $method 认证方式。枚举：reject、md5、scram-sha-256
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets priority
    *  优先级，表示配置的先后
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 优先级，表示配置的先后
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

