<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  主机ID
    * ip  主机IP
    * os  主机操作系统
    * port  端口
    * authorization  authorization
    * permission  permission
    * hostName  主机名称
    * asProxy  是否为代理机
    * groupId  主机集群id
    * proxyHostId  代理机ID
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * proxyHost  proxyHost
    * connectionStatus  连通性状态
    * createTime  创建时间
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  主机所属人昵称
    * importStatus  导入状态
    * envCount  关联环境数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'ip' => 'string',
            'os' => 'string',
            'port' => 'int',
            'authorization' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\HostAuthorizationBody',
            'permission' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionHostDetail',
            'hostName' => 'string',
            'asProxy' => 'bool',
            'groupId' => 'string',
            'proxyHostId' => 'string',
            'ownerId' => 'string',
            'ownerName' => 'string',
            'proxyHost' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\HostInfo',
            'connectionStatus' => 'string',
            'createTime' => 'string',
            'lastestConnectionTime' => 'string',
            'connectionResult' => 'string',
            'nickName' => 'string',
            'importStatus' => 'string',
            'envCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  主机ID
    * ip  主机IP
    * os  主机操作系统
    * port  端口
    * authorization  authorization
    * permission  permission
    * hostName  主机名称
    * asProxy  是否为代理机
    * groupId  主机集群id
    * proxyHostId  代理机ID
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * proxyHost  proxyHost
    * connectionStatus  连通性状态
    * createTime  创建时间
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  主机所属人昵称
    * importStatus  导入状态
    * envCount  关联环境数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'ip' => null,
        'os' => null,
        'port' => null,
        'authorization' => null,
        'permission' => null,
        'hostName' => null,
        'asProxy' => null,
        'groupId' => null,
        'proxyHostId' => null,
        'ownerId' => null,
        'ownerName' => null,
        'proxyHost' => null,
        'connectionStatus' => null,
        'createTime' => null,
        'lastestConnectionTime' => null,
        'connectionResult' => null,
        'nickName' => null,
        'importStatus' => null,
        'envCount' => null
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
    * uuid  主机ID
    * ip  主机IP
    * os  主机操作系统
    * port  端口
    * authorization  authorization
    * permission  permission
    * hostName  主机名称
    * asProxy  是否为代理机
    * groupId  主机集群id
    * proxyHostId  代理机ID
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * proxyHost  proxyHost
    * connectionStatus  连通性状态
    * createTime  创建时间
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  主机所属人昵称
    * importStatus  导入状态
    * envCount  关联环境数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'ip' => 'ip',
            'os' => 'os',
            'port' => 'port',
            'authorization' => 'authorization',
            'permission' => 'permission',
            'hostName' => 'host_name',
            'asProxy' => 'as_proxy',
            'groupId' => 'group_id',
            'proxyHostId' => 'proxy_host_id',
            'ownerId' => 'owner_id',
            'ownerName' => 'owner_name',
            'proxyHost' => 'proxy_host',
            'connectionStatus' => 'connection_status',
            'createTime' => 'create_time',
            'lastestConnectionTime' => 'lastest_connection_time',
            'connectionResult' => 'connection_result',
            'nickName' => 'nick_name',
            'importStatus' => 'import_status',
            'envCount' => 'env_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  主机ID
    * ip  主机IP
    * os  主机操作系统
    * port  端口
    * authorization  authorization
    * permission  permission
    * hostName  主机名称
    * asProxy  是否为代理机
    * groupId  主机集群id
    * proxyHostId  代理机ID
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * proxyHost  proxyHost
    * connectionStatus  连通性状态
    * createTime  创建时间
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  主机所属人昵称
    * importStatus  导入状态
    * envCount  关联环境数量
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'ip' => 'setIp',
            'os' => 'setOs',
            'port' => 'setPort',
            'authorization' => 'setAuthorization',
            'permission' => 'setPermission',
            'hostName' => 'setHostName',
            'asProxy' => 'setAsProxy',
            'groupId' => 'setGroupId',
            'proxyHostId' => 'setProxyHostId',
            'ownerId' => 'setOwnerId',
            'ownerName' => 'setOwnerName',
            'proxyHost' => 'setProxyHost',
            'connectionStatus' => 'setConnectionStatus',
            'createTime' => 'setCreateTime',
            'lastestConnectionTime' => 'setLastestConnectionTime',
            'connectionResult' => 'setConnectionResult',
            'nickName' => 'setNickName',
            'importStatus' => 'setImportStatus',
            'envCount' => 'setEnvCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  主机ID
    * ip  主机IP
    * os  主机操作系统
    * port  端口
    * authorization  authorization
    * permission  permission
    * hostName  主机名称
    * asProxy  是否为代理机
    * groupId  主机集群id
    * proxyHostId  代理机ID
    * ownerId  主机所属人id
    * ownerName  主机所属人名称
    * proxyHost  proxyHost
    * connectionStatus  连通性状态
    * createTime  创建时间
    * lastestConnectionTime  上次连通时间
    * connectionResult  连通性验证结果
    * nickName  主机所属人昵称
    * importStatus  导入状态
    * envCount  关联环境数量
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'ip' => 'getIp',
            'os' => 'getOs',
            'port' => 'getPort',
            'authorization' => 'getAuthorization',
            'permission' => 'getPermission',
            'hostName' => 'getHostName',
            'asProxy' => 'getAsProxy',
            'groupId' => 'getGroupId',
            'proxyHostId' => 'getProxyHostId',
            'ownerId' => 'getOwnerId',
            'ownerName' => 'getOwnerName',
            'proxyHost' => 'getProxyHost',
            'connectionStatus' => 'getConnectionStatus',
            'createTime' => 'getCreateTime',
            'lastestConnectionTime' => 'getLastestConnectionTime',
            'connectionResult' => 'getConnectionResult',
            'nickName' => 'getNickName',
            'importStatus' => 'getImportStatus',
            'envCount' => 'getEnvCount'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['asProxy'] = isset($data['asProxy']) ? $data['asProxy'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['proxyHostId'] = isset($data['proxyHostId']) ? $data['proxyHostId'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['proxyHost'] = isset($data['proxyHost']) ? $data['proxyHost'] : null;
        $this->container['connectionStatus'] = isset($data['connectionStatus']) ? $data['connectionStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastestConnectionTime'] = isset($data['lastestConnectionTime']) ? $data['lastestConnectionTime'] : null;
        $this->container['connectionResult'] = isset($data['connectionResult']) ? $data['connectionResult'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['importStatus'] = isset($data['importStatus']) ? $data['importStatus'] : null;
        $this->container['envCount'] = isset($data['envCount']) ? $data['envCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uuid']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['uuid'])) {
                $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
    * Gets uuid
    *  主机ID
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 主机ID
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets ip
    *  主机IP
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
    * @param string|null $ip 主机IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets os
    *  主机操作系统
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 主机操作系统
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets port
    *  端口
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
    * @param int|null $port 端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets authorization
    *  authorization
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\HostAuthorizationBody|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\HostAuthorizationBody|null $authorization authorization
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionHostDetail|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionHostDetail|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
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
    * @param string|null $hostName 主机名称
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
    * Gets proxyHostId
    *  代理机ID
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
    * @param string|null $proxyHostId 代理机ID
    *
    * @return $this
    */
    public function setProxyHostId($proxyHostId)
    {
        $this->container['proxyHostId'] = $proxyHostId;
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
    * Gets proxyHost
    *  proxyHost
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\HostInfo|null
    */
    public function getProxyHost()
    {
        return $this->container['proxyHost'];
    }

    /**
    * Sets proxyHost
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\HostInfo|null $proxyHost proxyHost
    *
    * @return $this
    */
    public function setProxyHost($proxyHost)
    {
        $this->container['proxyHost'] = $proxyHost;
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
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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
    *  主机所属人昵称
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
    * @param string|null $nickName 主机所属人昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets importStatus
    *  导入状态
    *
    * @return string|null
    */
    public function getImportStatus()
    {
        return $this->container['importStatus'];
    }

    /**
    * Sets importStatus
    *
    * @param string|null $importStatus 导入状态
    *
    * @return $this
    */
    public function setImportStatus($importStatus)
    {
        $this->container['importStatus'] = $importStatus;
        return $this;
    }

    /**
    * Gets envCount
    *  关联环境数量
    *
    * @return int|null
    */
    public function getEnvCount()
    {
        return $this->container['envCount'];
    }

    /**
    * Sets envCount
    *
    * @param int|null $envCount 关联环境数量
    *
    * @return $this
    */
    public function setEnvCount($envCount)
    {
        $this->container['envCount'] = $envCount;
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

