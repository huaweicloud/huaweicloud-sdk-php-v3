<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机id
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * permission  permission
    * groupId  主机集群id
    * hostName  主机名
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * proxyHostName  代理机名称
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * connectionStatus  连通性状态
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  创建人昵称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'ip' => 'string',
            'port' => 'int',
            'permission' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\EnvironmentHostPermission',
            'groupId' => 'string',
            'hostName' => 'string',
            'asProxy' => 'bool',
            'proxyHostId' => 'string',
            'proxyHostName' => 'string',
            'ownerId' => 'string',
            'ownerName' => 'string',
            'connectionStatus' => 'string',
            'lastestConnectionTime' => 'string',
            'connectionResult' => 'string',
            'nickName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机id
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * permission  permission
    * groupId  主机集群id
    * hostName  主机名
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * proxyHostName  代理机名称
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * connectionStatus  连通性状态
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  创建人昵称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'ip' => null,
        'port' => null,
        'permission' => null,
        'groupId' => null,
        'hostName' => null,
        'asProxy' => null,
        'proxyHostId' => null,
        'proxyHostName' => null,
        'ownerId' => null,
        'ownerName' => null,
        'connectionStatus' => null,
        'lastestConnectionTime' => null,
        'connectionResult' => null,
        'nickName' => null
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
    * hostId  主机id
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * permission  permission
    * groupId  主机集群id
    * hostName  主机名
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * proxyHostName  代理机名称
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * connectionStatus  连通性状态
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  创建人昵称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'ip' => 'ip',
            'port' => 'port',
            'permission' => 'permission',
            'groupId' => 'group_id',
            'hostName' => 'host_name',
            'asProxy' => 'as_proxy',
            'proxyHostId' => 'proxy_host_id',
            'proxyHostName' => 'proxy_host_name',
            'ownerId' => 'owner_id',
            'ownerName' => 'owner_name',
            'connectionStatus' => 'connection_status',
            'lastestConnectionTime' => 'lastest_connection_time',
            'connectionResult' => 'connection_result',
            'nickName' => 'nick_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机id
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * permission  permission
    * groupId  主机集群id
    * hostName  主机名
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * proxyHostName  代理机名称
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * connectionStatus  连通性状态
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  创建人昵称
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'ip' => 'setIp',
            'port' => 'setPort',
            'permission' => 'setPermission',
            'groupId' => 'setGroupId',
            'hostName' => 'setHostName',
            'asProxy' => 'setAsProxy',
            'proxyHostId' => 'setProxyHostId',
            'proxyHostName' => 'setProxyHostName',
            'ownerId' => 'setOwnerId',
            'ownerName' => 'setOwnerName',
            'connectionStatus' => 'setConnectionStatus',
            'lastestConnectionTime' => 'setLastestConnectionTime',
            'connectionResult' => 'setConnectionResult',
            'nickName' => 'setNickName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机id
    * ip  主机ip，如：161.17.101.12
    * port  ssh端口，如：22
    * permission  permission
    * groupId  主机集群id
    * hostName  主机名
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * proxyHostName  代理机名称
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * connectionStatus  连通性状态
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  创建人昵称
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'ip' => 'getIp',
            'port' => 'getPort',
            'permission' => 'getPermission',
            'groupId' => 'getGroupId',
            'hostName' => 'getHostName',
            'asProxy' => 'getAsProxy',
            'proxyHostId' => 'getProxyHostId',
            'proxyHostName' => 'getProxyHostName',
            'ownerId' => 'getOwnerId',
            'ownerName' => 'getOwnerName',
            'connectionStatus' => 'getConnectionStatus',
            'lastestConnectionTime' => 'getLastestConnectionTime',
            'connectionResult' => 'getConnectionResult',
            'nickName' => 'getNickName'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['asProxy'] = isset($data['asProxy']) ? $data['asProxy'] : null;
        $this->container['proxyHostId'] = isset($data['proxyHostId']) ? $data['proxyHostId'] : null;
        $this->container['proxyHostName'] = isset($data['proxyHostName']) ? $data['proxyHostName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['connectionStatus'] = isset($data['connectionStatus']) ? $data['connectionStatus'] : null;
        $this->container['lastestConnectionTime'] = isset($data['lastestConnectionTime']) ? $data['lastestConnectionTime'] : null;
        $this->container['connectionResult'] = isset($data['connectionResult']) ? $data['connectionResult'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
    * Gets hostId
    *  主机id
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 主机id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets ip
    *  主机ip，如：161.17.101.12
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
    * @param string|null $ip 主机ip，如：161.17.101.12
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
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port ssh端口，如：22
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\EnvironmentHostPermission|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\EnvironmentHostPermission|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets groupId
    *  主机集群id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 主机集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets asProxy
    *  是否为代理机
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
    * @param bool|null $asProxy 是否为代理机
    *
    * @return $this
    */
    public function setAsProxy($asProxy)
    {
        $this->container['asProxy'] = $asProxy;
        return $this;
    }

    /**
    * Gets proxyHostId
    *  代理机id
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
    * @param string|null $proxyHostId 代理机id
    *
    * @return $this
    */
    public function setProxyHostId($proxyHostId)
    {
        $this->container['proxyHostId'] = $proxyHostId;
        return $this;
    }

    /**
    * Gets proxyHostName
    *  代理机名称
    *
    * @return string|null
    */
    public function getProxyHostName()
    {
        return $this->container['proxyHostName'];
    }

    /**
    * Sets proxyHostName
    *
    * @param string|null $proxyHostName 代理机名称
    *
    * @return $this
    */
    public function setProxyHostName($proxyHostName)
    {
        $this->container['proxyHostName'] = $proxyHostName;
        return $this;
    }

    /**
    * Gets ownerId
    *  主机所属人id
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 主机所属人id
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets ownerName
    *  主机所属人名称
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 主机所属人名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets connectionStatus
    *  连通性状态
    *
    * @return string|null
    */
    public function getConnectionStatus()
    {
        return $this->container['connectionStatus'];
    }

    /**
    * Sets connectionStatus
    *
    * @param string|null $connectionStatus 连通性状态
    *
    * @return $this
    */
    public function setConnectionStatus($connectionStatus)
    {
        $this->container['connectionStatus'] = $connectionStatus;
        return $this;
    }

    /**
    * Gets lastestConnectionTime
    *  上次连通时间
    *
    * @return string|null
    */
    public function getLastestConnectionTime()
    {
        return $this->container['lastestConnectionTime'];
    }

    /**
    * Sets lastestConnectionTime
    *
    * @param string|null $lastestConnectionTime 上次连通时间
    *
    * @return $this
    */
    public function setLastestConnectionTime($lastestConnectionTime)
    {
        $this->container['lastestConnectionTime'] = $lastestConnectionTime;
        return $this;
    }

    /**
    * Gets connectionResult
    *  连通性验证结果
    *
    * @return string|null
    */
    public function getConnectionResult()
    {
        return $this->container['connectionResult'];
    }

    /**
    * Sets connectionResult
    *
    * @param string|null $connectionResult 连通性验证结果
    *
    * @return $this
    */
    public function setConnectionResult($connectionResult)
    {
        $this->container['connectionResult'] = $connectionResult;
        return $this;
    }

    /**
    * Gets nickName
    *  创建人昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 创建人昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
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

