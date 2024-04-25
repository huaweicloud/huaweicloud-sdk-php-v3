<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addrs  Redis实例名称(source_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * taskStatus  任务状态。
    * id  Redis实例ID。
    * ip  Redis IP地址。
    * port  Redis端口。
    * name  Redis名称。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addrs' => 'string',
            'password' => 'string',
            'taskStatus' => 'string',
            'id' => 'string',
            'ip' => 'string',
            'port' => 'string',
            'name' => 'string',
            'proxyMultiDb' => 'bool',
            'db' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addrs  Redis实例名称(source_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * taskStatus  任务状态。
    * id  Redis实例ID。
    * ip  Redis IP地址。
    * port  Redis端口。
    * name  Redis名称。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addrs' => null,
        'password' => null,
        'taskStatus' => null,
        'id' => null,
        'ip' => null,
        'port' => null,
        'name' => null,
        'proxyMultiDb' => null,
        'db' => null
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
    * addrs  Redis实例名称(source_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * taskStatus  任务状态。
    * id  Redis实例ID。
    * ip  Redis IP地址。
    * port  Redis端口。
    * name  Redis名称。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addrs' => 'addrs',
            'password' => 'password',
            'taskStatus' => 'task_status',
            'id' => 'id',
            'ip' => 'ip',
            'port' => 'port',
            'name' => 'name',
            'proxyMultiDb' => 'proxy_multi_db',
            'db' => 'db'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addrs  Redis实例名称(source_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * taskStatus  任务状态。
    * id  Redis实例ID。
    * ip  Redis IP地址。
    * port  Redis端口。
    * name  Redis名称。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $setters = [
            'addrs' => 'setAddrs',
            'password' => 'setPassword',
            'taskStatus' => 'setTaskStatus',
            'id' => 'setId',
            'ip' => 'setIp',
            'port' => 'setPort',
            'name' => 'setName',
            'proxyMultiDb' => 'setProxyMultiDb',
            'db' => 'setDb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addrs  Redis实例名称(source_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * taskStatus  任务状态。
    * id  Redis实例ID。
    * ip  Redis IP地址。
    * port  Redis端口。
    * name  Redis名称。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $getters = [
            'addrs' => 'getAddrs',
            'password' => 'getPassword',
            'taskStatus' => 'getTaskStatus',
            'id' => 'getId',
            'ip' => 'getIp',
            'port' => 'getPort',
            'name' => 'getName',
            'proxyMultiDb' => 'getProxyMultiDb',
            'db' => 'getDb'
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
        $this->container['addrs'] = isset($data['addrs']) ? $data['addrs'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['proxyMultiDb'] = isset($data['proxyMultiDb']) ? $data['proxyMultiDb'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addrs'] === null) {
            $invalidProperties[] = "'addrs' can't be null";
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
    * Gets addrs
    *  Redis实例名称(source_instance信息中填写)。
    *
    * @return string
    */
    public function getAddrs()
    {
        return $this->container['addrs'];
    }

    /**
    * Sets addrs
    *
    * @param string $addrs Redis实例名称(source_instance信息中填写)。
    *
    * @return $this
    */
    public function setAddrs($addrs)
    {
        $this->container['addrs'] = $addrs;
        return $this;
    }

    /**
    * Gets password
    *  Redis密码，如果设置了密码，则必须填写。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password Redis密码，如果设置了密码，则必须填写。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态。
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets id
    *  Redis实例ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id Redis实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ip
    *  Redis IP地址。
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
    * @param string|null $ip Redis IP地址。
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
    *  Redis端口。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port Redis端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets name
    *  Redis名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name Redis名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets proxyMultiDb
    *  proxy实例是否开启了多DB。
    *
    * @return bool|null
    */
    public function getProxyMultiDb()
    {
        return $this->container['proxyMultiDb'];
    }

    /**
    * Sets proxyMultiDb
    *
    * @param bool|null $proxyMultiDb proxy实例是否开启了多DB。
    *
    * @return $this
    */
    public function setProxyMultiDb($proxyMultiDb)
    {
        $this->container['proxyMultiDb'] = $proxyMultiDb;
        return $this;
    }

    /**
    * Gets db
    *  Redis数据库。
    *
    * @return string|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param string|null $db Redis数据库。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
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

