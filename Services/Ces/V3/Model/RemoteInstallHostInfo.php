<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoteInstallHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoteInstallHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  被远程安装的主机名称
    * remoteIp  被远程安装的主机IP
    * userName  被远程安装的主机的登录用户名
    * port  被远程安装的主机的登录端口
    * password  被远程安装的主机的登录密码
    * remoteUsePem  被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'remoteIp' => 'string',
            'userName' => 'string',
            'port' => 'string',
            'password' => 'string',
            'remoteUsePem' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  被远程安装的主机名称
    * remoteIp  被远程安装的主机IP
    * userName  被远程安装的主机的登录用户名
    * port  被远程安装的主机的登录端口
    * password  被远程安装的主机的登录密码
    * remoteUsePem  被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'remoteIp' => null,
        'userName' => null,
        'port' => null,
        'password' => null,
        'remoteUsePem' => null
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
    * instanceName  被远程安装的主机名称
    * remoteIp  被远程安装的主机IP
    * userName  被远程安装的主机的登录用户名
    * port  被远程安装的主机的登录端口
    * password  被远程安装的主机的登录密码
    * remoteUsePem  被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'remoteIp' => 'remote_ip',
            'userName' => 'user_name',
            'port' => 'port',
            'password' => 'password',
            'remoteUsePem' => 'remote_use_pem'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  被远程安装的主机名称
    * remoteIp  被远程安装的主机IP
    * userName  被远程安装的主机的登录用户名
    * port  被远程安装的主机的登录端口
    * password  被远程安装的主机的登录密码
    * remoteUsePem  被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'remoteIp' => 'setRemoteIp',
            'userName' => 'setUserName',
            'port' => 'setPort',
            'password' => 'setPassword',
            'remoteUsePem' => 'setRemoteUsePem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  被远程安装的主机名称
    * remoteIp  被远程安装的主机IP
    * userName  被远程安装的主机的登录用户名
    * port  被远程安装的主机的登录端口
    * password  被远程安装的主机的登录密码
    * remoteUsePem  被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'remoteIp' => 'getRemoteIp',
            'userName' => 'getUserName',
            'port' => 'getPort',
            'password' => 'getPassword',
            'remoteUsePem' => 'getRemoteUsePem'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['remoteIp'] = isset($data['remoteIp']) ? $data['remoteIp'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['remoteUsePem'] = isset($data['remoteUsePem']) ? $data['remoteUsePem'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remoteIp']) && !preg_match("/^(([0-9]|\\.){1,15})$/", $this->container['remoteIp'])) {
                $invalidProperties[] = "invalid value for 'remoteIp', must be conform to the pattern /^(([0-9]|\\.){1,15})$/.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 16)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) > 5)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) < 1)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 3000)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 3000.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
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
    * Gets instanceName
    *  被远程安装的主机名称
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
    * @param string|null $instanceName 被远程安装的主机名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets remoteIp
    *  被远程安装的主机IP
    *
    * @return string|null
    */
    public function getRemoteIp()
    {
        return $this->container['remoteIp'];
    }

    /**
    * Sets remoteIp
    *
    * @param string|null $remoteIp 被远程安装的主机IP
    *
    * @return $this
    */
    public function setRemoteIp($remoteIp)
    {
        $this->container['remoteIp'] = $remoteIp;
        return $this;
    }

    /**
    * Gets userName
    *  被远程安装的主机的登录用户名
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
    * @param string|null $userName 被远程安装的主机的登录用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets port
    *  被远程安装的主机的登录端口
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
    * @param string|null $port 被远程安装的主机的登录端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets password
    *  被远程安装的主机的登录密码
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
    * @param string|null $password 被远程安装的主机的登录密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets remoteUsePem
    *  被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @return bool|null
    */
    public function getRemoteUsePem()
    {
        return $this->container['remoteUsePem'];
    }

    /**
    * Sets remoteUsePem
    *
    * @param bool|null $remoteUsePem 被远程安装的主机远程连接是否采用秘钥方式（false时为密码方式）
    *
    * @return $this
    */
    public function setRemoteUsePem($remoteUsePem)
    {
        $this->container['remoteUsePem'] = $remoteUsePem;
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

