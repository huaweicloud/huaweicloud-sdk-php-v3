<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncodeServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncodeServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * encodeServerName  编码服务的名称，不大于64个字节。
    * encodeServerId  编码服务的唯一标识ID，不大于32个字节。
    * encodeServerIp  编码服务IP地址。
    * serverId  云手机服务器ID，不大于32个字节。
    * keypairName  编码服务登录密钥名称。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    * accessInfos  编码服务的访问信息。
    * encodeServerIpv6  编码服务IPv6地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'encodeServerName' => 'string',
            'encodeServerId' => 'string',
            'encodeServerIp' => 'string',
            'serverId' => 'string',
            'keypairName' => 'string',
            'type' => 'int',
            'status' => 'int',
            'accessInfos' => '\HuaweiCloud\SDK\Cph\V1\Model\EncodeServerAccessInfo[]',
            'encodeServerIpv6' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * encodeServerName  编码服务的名称，不大于64个字节。
    * encodeServerId  编码服务的唯一标识ID，不大于32个字节。
    * encodeServerIp  编码服务IP地址。
    * serverId  云手机服务器ID，不大于32个字节。
    * keypairName  编码服务登录密钥名称。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    * accessInfos  编码服务的访问信息。
    * encodeServerIpv6  编码服务IPv6地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'encodeServerName' => null,
        'encodeServerId' => null,
        'encodeServerIp' => null,
        'serverId' => null,
        'keypairName' => null,
        'type' => 'int32',
        'status' => 'int32',
        'accessInfos' => null,
        'encodeServerIpv6' => null
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
    * encodeServerName  编码服务的名称，不大于64个字节。
    * encodeServerId  编码服务的唯一标识ID，不大于32个字节。
    * encodeServerIp  编码服务IP地址。
    * serverId  云手机服务器ID，不大于32个字节。
    * keypairName  编码服务登录密钥名称。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    * accessInfos  编码服务的访问信息。
    * encodeServerIpv6  编码服务IPv6地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'encodeServerName' => 'encode_server_name',
            'encodeServerId' => 'encode_server_id',
            'encodeServerIp' => 'encode_server_ip',
            'serverId' => 'server_id',
            'keypairName' => 'keypair_name',
            'type' => 'type',
            'status' => 'status',
            'accessInfos' => 'access_infos',
            'encodeServerIpv6' => 'encode_server_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * encodeServerName  编码服务的名称，不大于64个字节。
    * encodeServerId  编码服务的唯一标识ID，不大于32个字节。
    * encodeServerIp  编码服务IP地址。
    * serverId  云手机服务器ID，不大于32个字节。
    * keypairName  编码服务登录密钥名称。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    * accessInfos  编码服务的访问信息。
    * encodeServerIpv6  编码服务IPv6地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'encodeServerName' => 'setEncodeServerName',
            'encodeServerId' => 'setEncodeServerId',
            'encodeServerIp' => 'setEncodeServerIp',
            'serverId' => 'setServerId',
            'keypairName' => 'setKeypairName',
            'type' => 'setType',
            'status' => 'setStatus',
            'accessInfos' => 'setAccessInfos',
            'encodeServerIpv6' => 'setEncodeServerIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * encodeServerName  编码服务的名称，不大于64个字节。
    * encodeServerId  编码服务的唯一标识ID，不大于32个字节。
    * encodeServerIp  编码服务IP地址。
    * serverId  云手机服务器ID，不大于32个字节。
    * keypairName  编码服务登录密钥名称。
    * type  编码服务类型。 - 0：服务器 - 1：容器
    * status  编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    * accessInfos  编码服务的访问信息。
    * encodeServerIpv6  编码服务IPv6地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'encodeServerName' => 'getEncodeServerName',
            'encodeServerId' => 'getEncodeServerId',
            'encodeServerIp' => 'getEncodeServerIp',
            'serverId' => 'getServerId',
            'keypairName' => 'getKeypairName',
            'type' => 'getType',
            'status' => 'getStatus',
            'accessInfos' => 'getAccessInfos',
            'encodeServerIpv6' => 'getEncodeServerIpv6'
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
        $this->container['encodeServerName'] = isset($data['encodeServerName']) ? $data['encodeServerName'] : null;
        $this->container['encodeServerId'] = isset($data['encodeServerId']) ? $data['encodeServerId'] : null;
        $this->container['encodeServerIp'] = isset($data['encodeServerIp']) ? $data['encodeServerIp'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['accessInfos'] = isset($data['accessInfos']) ? $data['accessInfos'] : null;
        $this->container['encodeServerIpv6'] = isset($data['encodeServerIpv6']) ? $data['encodeServerIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['encodeServerName']) && (mb_strlen($this->container['encodeServerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'encodeServerName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['encodeServerName']) && (mb_strlen($this->container['encodeServerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'encodeServerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encodeServerId']) && (mb_strlen($this->container['encodeServerId']) > 32)) {
                $invalidProperties[] = "invalid value for 'encodeServerId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['encodeServerId']) && (mb_strlen($this->container['encodeServerId']) < 32)) {
                $invalidProperties[] = "invalid value for 'encodeServerId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['encodeServerIp']) && (mb_strlen($this->container['encodeServerIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'encodeServerIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['encodeServerIp']) && (mb_strlen($this->container['encodeServerIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'encodeServerIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) < 0)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 128)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < -128)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['encodeServerIpv6']) && (mb_strlen($this->container['encodeServerIpv6']) > 1024)) {
                $invalidProperties[] = "invalid value for 'encodeServerIpv6', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['encodeServerIpv6']) && (mb_strlen($this->container['encodeServerIpv6']) < 0)) {
                $invalidProperties[] = "invalid value for 'encodeServerIpv6', the character length must be bigger than or equal to 0.";
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
    * Gets encodeServerName
    *  编码服务的名称，不大于64个字节。
    *
    * @return string|null
    */
    public function getEncodeServerName()
    {
        return $this->container['encodeServerName'];
    }

    /**
    * Sets encodeServerName
    *
    * @param string|null $encodeServerName 编码服务的名称，不大于64个字节。
    *
    * @return $this
    */
    public function setEncodeServerName($encodeServerName)
    {
        $this->container['encodeServerName'] = $encodeServerName;
        return $this;
    }

    /**
    * Gets encodeServerId
    *  编码服务的唯一标识ID，不大于32个字节。
    *
    * @return string|null
    */
    public function getEncodeServerId()
    {
        return $this->container['encodeServerId'];
    }

    /**
    * Sets encodeServerId
    *
    * @param string|null $encodeServerId 编码服务的唯一标识ID，不大于32个字节。
    *
    * @return $this
    */
    public function setEncodeServerId($encodeServerId)
    {
        $this->container['encodeServerId'] = $encodeServerId;
        return $this;
    }

    /**
    * Gets encodeServerIp
    *  编码服务IP地址。
    *
    * @return string|null
    */
    public function getEncodeServerIp()
    {
        return $this->container['encodeServerIp'];
    }

    /**
    * Sets encodeServerIp
    *
    * @param string|null $encodeServerIp 编码服务IP地址。
    *
    * @return $this
    */
    public function setEncodeServerIp($encodeServerIp)
    {
        $this->container['encodeServerIp'] = $encodeServerIp;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机服务器ID，不大于32个字节。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机服务器ID，不大于32个字节。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets keypairName
    *  编码服务登录密钥名称。
    *
    * @return string|null
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string|null $keypairName 编码服务登录密钥名称。
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
        return $this;
    }

    /**
    * Gets type
    *  编码服务类型。 - 0：服务器 - 1：容器
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 编码服务类型。 - 0：服务器 - 1：容器
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 编码服务状态。 - 1：运行中 - 2：异常 - 3：重启中 - 0、4、5：创建中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets accessInfos
    *  编码服务的访问信息。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\EncodeServerAccessInfo[]|null
    */
    public function getAccessInfos()
    {
        return $this->container['accessInfos'];
    }

    /**
    * Sets accessInfos
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\EncodeServerAccessInfo[]|null $accessInfos 编码服务的访问信息。
    *
    * @return $this
    */
    public function setAccessInfos($accessInfos)
    {
        $this->container['accessInfos'] = $accessInfos;
        return $this;
    }

    /**
    * Gets encodeServerIpv6
    *  编码服务IPv6地址。
    *
    * @return string|null
    */
    public function getEncodeServerIpv6()
    {
        return $this->container['encodeServerIpv6'];
    }

    /**
    * Sets encodeServerIpv6
    *
    * @param string|null $encodeServerIpv6 编码服务IPv6地址。
    *
    * @return $this
    */
    public function setEncodeServerIpv6($encodeServerIpv6)
    {
        $this->container['encodeServerIpv6'] = $encodeServerIpv6;
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

