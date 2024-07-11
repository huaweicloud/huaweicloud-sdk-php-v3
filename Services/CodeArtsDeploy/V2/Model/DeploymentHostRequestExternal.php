<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentHostRequestExternal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentHostRequestExternal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * asProxy  是否为代理主机
    * authorization  authorization
    * hostName  主机名称
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * proxyHostId  代理主机id
    * sync  是否同步主机信息
    * installIcagent  是否安装icAgent
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'asProxy' => 'bool',
            'authorization' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostAuthorizationBody',
            'hostName' => 'string',
            'ip' => 'string',
            'port' => 'int',
            'proxyHostId' => 'string',
            'sync' => 'bool',
            'installIcagent' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * asProxy  是否为代理主机
    * authorization  authorization
    * hostName  主机名称
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * proxyHostId  代理主机id
    * sync  是否同步主机信息
    * installIcagent  是否安装icAgent
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'asProxy' => null,
        'authorization' => null,
        'hostName' => null,
        'ip' => null,
        'port' => 'int32',
        'proxyHostId' => null,
        'sync' => null,
        'installIcagent' => null
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
    * asProxy  是否为代理主机
    * authorization  authorization
    * hostName  主机名称
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * proxyHostId  代理主机id
    * sync  是否同步主机信息
    * installIcagent  是否安装icAgent
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'asProxy' => 'as_proxy',
            'authorization' => 'authorization',
            'hostName' => 'host_name',
            'ip' => 'ip',
            'port' => 'port',
            'proxyHostId' => 'proxy_host_id',
            'sync' => 'sync',
            'installIcagent' => 'install_icagent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * asProxy  是否为代理主机
    * authorization  authorization
    * hostName  主机名称
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * proxyHostId  代理主机id
    * sync  是否同步主机信息
    * installIcagent  是否安装icAgent
    *
    * @var string[]
    */
    protected static $setters = [
            'asProxy' => 'setAsProxy',
            'authorization' => 'setAuthorization',
            'hostName' => 'setHostName',
            'ip' => 'setIp',
            'port' => 'setPort',
            'proxyHostId' => 'setProxyHostId',
            'sync' => 'setSync',
            'installIcagent' => 'setInstallIcagent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * asProxy  是否为代理主机
    * authorization  authorization
    * hostName  主机名称
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * proxyHostId  代理主机id
    * sync  是否同步主机信息
    * installIcagent  是否安装icAgent
    *
    * @var string[]
    */
    protected static $getters = [
            'asProxy' => 'getAsProxy',
            'authorization' => 'getAuthorization',
            'hostName' => 'getHostName',
            'ip' => 'getIp',
            'port' => 'getPort',
            'proxyHostId' => 'getProxyHostId',
            'sync' => 'getSync',
            'installIcagent' => 'getInstallIcagent'
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
        $this->container['asProxy'] = isset($data['asProxy']) ? $data['asProxy'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['proxyHostId'] = isset($data['proxyHostId']) ? $data['proxyHostId'] : null;
        $this->container['sync'] = isset($data['sync']) ? $data['sync'] : null;
        $this->container['installIcagent'] = isset($data['installIcagent']) ? $data['installIcagent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
            if ((mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hostName']) < 3)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/.";
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
            if (!preg_match("/^([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])$/", $this->container['ip'])) {
                $invalidProperties[] = "invalid value for 'ip', must be conform to the pattern /^([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])$/.";
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
            if (!is_null($this->container['proxyHostId']) && (mb_strlen($this->container['proxyHostId']) > 32)) {
                $invalidProperties[] = "invalid value for 'proxyHostId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['proxyHostId']) && (mb_strlen($this->container['proxyHostId']) < 32)) {
                $invalidProperties[] = "invalid value for 'proxyHostId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['proxyHostId']) && !preg_match("/^[0-9A-Za-z]{32}$/", $this->container['proxyHostId'])) {
                $invalidProperties[] = "invalid value for 'proxyHostId', must be conform to the pattern /^[0-9A-Za-z]{32}$/.";
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
    * Gets asProxy
    *  是否为代理主机
    *
    * @return bool|null
    */
    public function getAsProxy()
    {
        return $this->container['asProxy'];
    }

    /**
    * Sets asProxy
    *
    * @param bool|null $asProxy 是否为代理主机
    *
    * @return $this
    */
    public function setAsProxy($asProxy)
    {
        $this->container['asProxy'] = $asProxy;
        return $this;
    }

    /**
    * Gets authorization
    *  authorization
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostAuthorizationBody|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostAuthorizationBody|null $authorization authorization
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets ip
    *  主机ip，如：161.17.101.12
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
    * @param string $ip 主机ip，如：161.17.101.12
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
    *  ssh端口，如：22
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
    * @param int $port ssh端口，如：22
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets proxyHostId
    *  代理主机id
    *
    * @return string|null
    */
    public function getProxyHostId()
    {
        return $this->container['proxyHostId'];
    }

    /**
    * Sets proxyHostId
    *
    * @param string|null $proxyHostId 代理主机id
    *
    * @return $this
    */
    public function setProxyHostId($proxyHostId)
    {
        $this->container['proxyHostId'] = $proxyHostId;
        return $this;
    }

    /**
    * Gets sync
    *  是否同步主机信息
    *
    * @return bool|null
    */
    public function getSync()
    {
        return $this->container['sync'];
    }

    /**
    * Sets sync
    *
    * @param bool|null $sync 是否同步主机信息
    *
    * @return $this
    */
    public function setSync($sync)
    {
        $this->container['sync'] = $sync;
        return $this;
    }

    /**
    * Gets installIcagent
    *  是否安装icAgent
    *
    * @return bool|null
    */
    public function getInstallIcagent()
    {
        return $this->container['installIcagent'];
    }

    /**
    * Sets installIcagent
    *
    * @param bool|null $installIcagent 是否安装icAgent
    *
    * @return $this
    */
    public function setInstallIcagent($installIcagent)
    {
        $this->container['installIcagent'] = $installIcagent;
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

