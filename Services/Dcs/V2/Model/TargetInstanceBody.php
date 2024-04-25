<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Redis实例ID（target_instance信息中必须填写）。
    * name  Redis实例名称(target_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * ip  Redis IP地址。
    * port  Redis端口。
    * addrs  Redis实例地址。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'password' => 'string',
            'ip' => 'string',
            'port' => 'string',
            'addrs' => 'string',
            'proxyMultiDb' => 'bool',
            'db' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Redis实例ID（target_instance信息中必须填写）。
    * name  Redis实例名称(target_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * ip  Redis IP地址。
    * port  Redis端口。
    * addrs  Redis实例地址。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'password' => null,
        'ip' => null,
        'port' => null,
        'addrs' => null,
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
    * id  Redis实例ID（target_instance信息中必须填写）。
    * name  Redis实例名称(target_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * ip  Redis IP地址。
    * port  Redis端口。
    * addrs  Redis实例地址。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'password' => 'password',
            'ip' => 'ip',
            'port' => 'port',
            'addrs' => 'addrs',
            'proxyMultiDb' => 'proxy_multi_db',
            'db' => 'db'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Redis实例ID（target_instance信息中必须填写）。
    * name  Redis实例名称(target_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * ip  Redis IP地址。
    * port  Redis端口。
    * addrs  Redis实例地址。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'password' => 'setPassword',
            'ip' => 'setIp',
            'port' => 'setPort',
            'addrs' => 'setAddrs',
            'proxyMultiDb' => 'setProxyMultiDb',
            'db' => 'setDb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Redis实例ID（target_instance信息中必须填写）。
    * name  Redis实例名称(target_instance信息中填写)。
    * password  Redis密码，如果设置了密码，则必须填写。
    * ip  Redis IP地址。
    * port  Redis端口。
    * addrs  Redis实例地址。
    * proxyMultiDb  proxy实例是否开启了多DB。
    * db  Redis数据库。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'password' => 'getPassword',
            'ip' => 'getIp',
            'port' => 'getPort',
            'addrs' => 'getAddrs',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['addrs'] = isset($data['addrs']) ? $data['addrs'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets id
    *  Redis实例ID（target_instance信息中必须填写）。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id Redis实例ID（target_instance信息中必须填写）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  Redis实例名称(target_instance信息中填写)。
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
    * @param string|null $name Redis实例名称(target_instance信息中填写)。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets addrs
    *  Redis实例地址。
    *
    * @return string|null
    */
    public function getAddrs()
    {
        return $this->container['addrs'];
    }

    /**
    * Sets addrs
    *
    * @param string|null $addrs Redis实例地址。
    *
    * @return $this
    */
    public function setAddrs($addrs)
    {
        $this->container['addrs'] = $addrs;
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

