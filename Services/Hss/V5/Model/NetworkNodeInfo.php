<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节点id
    * name  节点
    * status  状态
    * ipAddr  ip地址
    * ipv6Addr  ipv6地址
    * privateIpAddr  私有ip地址
    * privateIpv6Addr  私有ipv6地址
    * runtimeVersion  运行时版本
    * osVersion  os版本
    * securityGroup  安全组
    * serverId  服务器id
    * serverType  服务器类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'ipAddr' => 'string',
            'ipv6Addr' => 'string',
            'privateIpAddr' => 'string',
            'privateIpv6Addr' => 'string',
            'runtimeVersion' => 'string',
            'osVersion' => 'string',
            'securityGroup' => 'string',
            'serverId' => 'string',
            'serverType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节点id
    * name  节点
    * status  状态
    * ipAddr  ip地址
    * ipv6Addr  ipv6地址
    * privateIpAddr  私有ip地址
    * privateIpv6Addr  私有ipv6地址
    * runtimeVersion  运行时版本
    * osVersion  os版本
    * securityGroup  安全组
    * serverId  服务器id
    * serverType  服务器类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'ipAddr' => null,
        'ipv6Addr' => null,
        'privateIpAddr' => null,
        'privateIpv6Addr' => null,
        'runtimeVersion' => null,
        'osVersion' => null,
        'securityGroup' => null,
        'serverId' => null,
        'serverType' => null
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
    * id  节点id
    * name  节点
    * status  状态
    * ipAddr  ip地址
    * ipv6Addr  ipv6地址
    * privateIpAddr  私有ip地址
    * privateIpv6Addr  私有ipv6地址
    * runtimeVersion  运行时版本
    * osVersion  os版本
    * securityGroup  安全组
    * serverId  服务器id
    * serverType  服务器类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'ipAddr' => 'ip_addr',
            'ipv6Addr' => 'ipv6_addr',
            'privateIpAddr' => 'private_ip_addr',
            'privateIpv6Addr' => 'private_ipv6_addr',
            'runtimeVersion' => 'runtime_version',
            'osVersion' => 'os_version',
            'securityGroup' => 'security_group',
            'serverId' => 'server_id',
            'serverType' => 'server_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节点id
    * name  节点
    * status  状态
    * ipAddr  ip地址
    * ipv6Addr  ipv6地址
    * privateIpAddr  私有ip地址
    * privateIpv6Addr  私有ipv6地址
    * runtimeVersion  运行时版本
    * osVersion  os版本
    * securityGroup  安全组
    * serverId  服务器id
    * serverType  服务器类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'ipAddr' => 'setIpAddr',
            'ipv6Addr' => 'setIpv6Addr',
            'privateIpAddr' => 'setPrivateIpAddr',
            'privateIpv6Addr' => 'setPrivateIpv6Addr',
            'runtimeVersion' => 'setRuntimeVersion',
            'osVersion' => 'setOsVersion',
            'securityGroup' => 'setSecurityGroup',
            'serverId' => 'setServerId',
            'serverType' => 'setServerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节点id
    * name  节点
    * status  状态
    * ipAddr  ip地址
    * ipv6Addr  ipv6地址
    * privateIpAddr  私有ip地址
    * privateIpv6Addr  私有ipv6地址
    * runtimeVersion  运行时版本
    * osVersion  os版本
    * securityGroup  安全组
    * serverId  服务器id
    * serverType  服务器类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'ipAddr' => 'getIpAddr',
            'ipv6Addr' => 'getIpv6Addr',
            'privateIpAddr' => 'getPrivateIpAddr',
            'privateIpv6Addr' => 'getPrivateIpv6Addr',
            'runtimeVersion' => 'getRuntimeVersion',
            'osVersion' => 'getOsVersion',
            'securityGroup' => 'getSecurityGroup',
            'serverId' => 'getServerId',
            'serverType' => 'getServerType'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ipAddr'] = isset($data['ipAddr']) ? $data['ipAddr'] : null;
        $this->container['ipv6Addr'] = isset($data['ipv6Addr']) ? $data['ipv6Addr'] : null;
        $this->container['privateIpAddr'] = isset($data['privateIpAddr']) ? $data['privateIpAddr'] : null;
        $this->container['privateIpv6Addr'] = isset($data['privateIpv6Addr']) ? $data['privateIpv6Addr'] : null;
        $this->container['runtimeVersion'] = isset($data['runtimeVersion']) ? $data['runtimeVersion'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
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
            if ((mb_strlen($this->container['id']) > 256)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ipAddr'] === null) {
            $invalidProperties[] = "'ipAddr' can't be null";
        }
            if ((mb_strlen($this->container['ipAddr']) > 128)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ipAddr']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipv6Addr']) && (mb_strlen($this->container['ipv6Addr']) > 256)) {
                $invalidProperties[] = "invalid value for 'ipv6Addr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ipv6Addr']) && (mb_strlen($this->container['ipv6Addr']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipv6Addr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIpAddr']) && (mb_strlen($this->container['privateIpAddr']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIpAddr', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIpAddr']) && (mb_strlen($this->container['privateIpAddr']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIpAddr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIpv6Addr']) && (mb_strlen($this->container['privateIpv6Addr']) > 256)) {
                $invalidProperties[] = "invalid value for 'privateIpv6Addr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['privateIpv6Addr']) && (mb_strlen($this->container['privateIpv6Addr']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIpv6Addr', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['runtimeVersion'] === null) {
            $invalidProperties[] = "'runtimeVersion' can't be null";
        }
            if ((mb_strlen($this->container['runtimeVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'runtimeVersion', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['runtimeVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'runtimeVersion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['osVersion'] === null) {
            $invalidProperties[] = "'osVersion' can't be null";
        }
            if ((mb_strlen($this->container['osVersion']) > 512)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroup'] === null) {
            $invalidProperties[] = "'securityGroup' can't be null";
        }
            if ((mb_strlen($this->container['securityGroup']) > 256)) {
                $invalidProperties[] = "invalid value for 'securityGroup', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['securityGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityGroup', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 256)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be bigger than or equal to 1.";
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
    *  节点id
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
    * @param string $id 节点id
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
    *  节点
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 节点
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ipAddr
    *  ip地址
    *
    * @return string
    */
    public function getIpAddr()
    {
        return $this->container['ipAddr'];
    }

    /**
    * Sets ipAddr
    *
    * @param string $ipAddr ip地址
    *
    * @return $this
    */
    public function setIpAddr($ipAddr)
    {
        $this->container['ipAddr'] = $ipAddr;
        return $this;
    }

    /**
    * Gets ipv6Addr
    *  ipv6地址
    *
    * @return string|null
    */
    public function getIpv6Addr()
    {
        return $this->container['ipv6Addr'];
    }

    /**
    * Sets ipv6Addr
    *
    * @param string|null $ipv6Addr ipv6地址
    *
    * @return $this
    */
    public function setIpv6Addr($ipv6Addr)
    {
        $this->container['ipv6Addr'] = $ipv6Addr;
        return $this;
    }

    /**
    * Gets privateIpAddr
    *  私有ip地址
    *
    * @return string|null
    */
    public function getPrivateIpAddr()
    {
        return $this->container['privateIpAddr'];
    }

    /**
    * Sets privateIpAddr
    *
    * @param string|null $privateIpAddr 私有ip地址
    *
    * @return $this
    */
    public function setPrivateIpAddr($privateIpAddr)
    {
        $this->container['privateIpAddr'] = $privateIpAddr;
        return $this;
    }

    /**
    * Gets privateIpv6Addr
    *  私有ipv6地址
    *
    * @return string|null
    */
    public function getPrivateIpv6Addr()
    {
        return $this->container['privateIpv6Addr'];
    }

    /**
    * Sets privateIpv6Addr
    *
    * @param string|null $privateIpv6Addr 私有ipv6地址
    *
    * @return $this
    */
    public function setPrivateIpv6Addr($privateIpv6Addr)
    {
        $this->container['privateIpv6Addr'] = $privateIpv6Addr;
        return $this;
    }

    /**
    * Gets runtimeVersion
    *  运行时版本
    *
    * @return string
    */
    public function getRuntimeVersion()
    {
        return $this->container['runtimeVersion'];
    }

    /**
    * Sets runtimeVersion
    *
    * @param string $runtimeVersion 运行时版本
    *
    * @return $this
    */
    public function setRuntimeVersion($runtimeVersion)
    {
        $this->container['runtimeVersion'] = $runtimeVersion;
        return $this;
    }

    /**
    * Gets osVersion
    *  os版本
    *
    * @return string
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string $osVersion os版本
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets securityGroup
    *  安全组
    *
    * @return string
    */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
    * Sets securityGroup
    *
    * @param string $securityGroup 安全组
    *
    * @return $this
    */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;
        return $this;
    }

    /**
    * Gets serverId
    *  服务器id
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
    * @param string|null $serverId 服务器id
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverType
    *  服务器类型
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 服务器类型
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
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

