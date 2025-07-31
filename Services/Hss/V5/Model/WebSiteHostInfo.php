<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebSiteHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebSiteHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * domain  域名
    * appName  应用名称
    * path  路径
    * port  端口
    * bindAddr  绑定地址
    * urlPath  url路径
    * uid  用户id
    * gid  用户组id
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * isHttps  是否是https
    * certIssuer  SSL证书颁发者
    * certUser  SSL证书使用者
    * certIssueTime  SSL证书颁发时间
    * certExpiredTime  SSL证书截止时间
    * recordTime  扫描时间
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'domain' => 'string',
            'appName' => 'string',
            'path' => 'string',
            'port' => 'int',
            'bindAddr' => 'string',
            'urlPath' => 'string',
            'uid' => 'int',
            'gid' => 'int',
            'mode' => 'string',
            'pid' => 'int',
            'procPath' => 'string',
            'isHttps' => 'bool',
            'certIssuer' => 'string',
            'certUser' => 'string',
            'certIssueTime' => 'string',
            'certExpiredTime' => 'string',
            'recordTime' => 'int',
            'containerId' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * domain  域名
    * appName  应用名称
    * path  路径
    * port  端口
    * bindAddr  绑定地址
    * urlPath  url路径
    * uid  用户id
    * gid  用户组id
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * isHttps  是否是https
    * certIssuer  SSL证书颁发者
    * certUser  SSL证书使用者
    * certIssueTime  SSL证书颁发时间
    * certExpiredTime  SSL证书截止时间
    * recordTime  扫描时间
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'domain' => null,
        'appName' => null,
        'path' => null,
        'port' => 'int32',
        'bindAddr' => null,
        'urlPath' => null,
        'uid' => 'int32',
        'gid' => 'int32',
        'mode' => null,
        'pid' => 'int32',
        'procPath' => null,
        'isHttps' => null,
        'certIssuer' => null,
        'certUser' => null,
        'certIssueTime' => null,
        'certExpiredTime' => null,
        'recordTime' => 'int64',
        'containerId' => null,
        'containerName' => null
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
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * domain  域名
    * appName  应用名称
    * path  路径
    * port  端口
    * bindAddr  绑定地址
    * urlPath  url路径
    * uid  用户id
    * gid  用户组id
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * isHttps  是否是https
    * certIssuer  SSL证书颁发者
    * certUser  SSL证书使用者
    * certIssueTime  SSL证书颁发时间
    * certExpiredTime  SSL证书截止时间
    * recordTime  扫描时间
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'domain' => 'domain',
            'appName' => 'app_name',
            'path' => 'path',
            'port' => 'port',
            'bindAddr' => 'bind_addr',
            'urlPath' => 'url_path',
            'uid' => 'uid',
            'gid' => 'gid',
            'mode' => 'mode',
            'pid' => 'pid',
            'procPath' => 'proc_path',
            'isHttps' => 'is_https',
            'certIssuer' => 'cert_issuer',
            'certUser' => 'cert_user',
            'certIssueTime' => 'cert_issue_time',
            'certExpiredTime' => 'cert_expired_time',
            'recordTime' => 'record_time',
            'containerId' => 'container_id',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * domain  域名
    * appName  应用名称
    * path  路径
    * port  端口
    * bindAddr  绑定地址
    * urlPath  url路径
    * uid  用户id
    * gid  用户组id
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * isHttps  是否是https
    * certIssuer  SSL证书颁发者
    * certUser  SSL证书使用者
    * certIssueTime  SSL证书颁发时间
    * certExpiredTime  SSL证书截止时间
    * recordTime  扫描时间
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'path' => 'setPath',
            'port' => 'setPort',
            'bindAddr' => 'setBindAddr',
            'urlPath' => 'setUrlPath',
            'uid' => 'setUid',
            'gid' => 'setGid',
            'mode' => 'setMode',
            'pid' => 'setPid',
            'procPath' => 'setProcPath',
            'isHttps' => 'setIsHttps',
            'certIssuer' => 'setCertIssuer',
            'certUser' => 'setCertUser',
            'certIssueTime' => 'setCertIssueTime',
            'certExpiredTime' => 'setCertExpiredTime',
            'recordTime' => 'setRecordTime',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * domain  域名
    * appName  应用名称
    * path  路径
    * port  端口
    * bindAddr  绑定地址
    * urlPath  url路径
    * uid  用户id
    * gid  用户组id
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * isHttps  是否是https
    * certIssuer  SSL证书颁发者
    * certUser  SSL证书使用者
    * certIssueTime  SSL证书颁发时间
    * certExpiredTime  SSL证书截止时间
    * recordTime  扫描时间
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'path' => 'getPath',
            'port' => 'getPort',
            'bindAddr' => 'getBindAddr',
            'urlPath' => 'getUrlPath',
            'uid' => 'getUid',
            'gid' => 'getGid',
            'mode' => 'getMode',
            'pid' => 'getPid',
            'procPath' => 'getProcPath',
            'isHttps' => 'getIsHttps',
            'certIssuer' => 'getCertIssuer',
            'certUser' => 'getCertUser',
            'certIssueTime' => 'getCertIssueTime',
            'certExpiredTime' => 'getCertExpiredTime',
            'recordTime' => 'getRecordTime',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['bindAddr'] = isset($data['bindAddr']) ? $data['bindAddr'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['procPath'] = isset($data['procPath']) ? $data['procPath'] : null;
        $this->container['isHttps'] = isset($data['isHttps']) ? $data['isHttps'] : null;
        $this->container['certIssuer'] = isset($data['certIssuer']) ? $data['certIssuer'] : null;
        $this->container['certUser'] = isset($data['certUser']) ? $data['certUser'] : null;
        $this->container['certIssueTime'] = isset($data['certIssueTime']) ? $data['certIssueTime'] : null;
        $this->container['certExpiredTime'] = isset($data['certExpiredTime']) ? $data['certExpiredTime'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
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
    * Gets agentId
    *  agent_id
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId agent_id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
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
    * Gets hostName
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  服务器ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 服务器ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets domain
    *  域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets path
    *  路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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
    * Gets bindAddr
    *  绑定地址
    *
    * @return string|null
    */
    public function getBindAddr()
    {
        return $this->container['bindAddr'];
    }

    /**
    * Sets bindAddr
    *
    * @param string|null $bindAddr 绑定地址
    *
    * @return $this
    */
    public function setBindAddr($bindAddr)
    {
        $this->container['bindAddr'] = $bindAddr;
        return $this;
    }

    /**
    * Gets urlPath
    *  url路径
    *
    * @return string|null
    */
    public function getUrlPath()
    {
        return $this->container['urlPath'];
    }

    /**
    * Sets urlPath
    *
    * @param string|null $urlPath url路径
    *
    * @return $this
    */
    public function setUrlPath($urlPath)
    {
        $this->container['urlPath'] = $urlPath;
        return $this;
    }

    /**
    * Gets uid
    *  用户id
    *
    * @return int|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param int|null $uid 用户id
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets gid
    *  用户组id
    *
    * @return int|null
    */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
    * Sets gid
    *
    * @param int|null $gid 用户组id
    *
    * @return $this
    */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;
        return $this;
    }

    /**
    * Gets mode
    *  文件权限
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 文件权限
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets pid
    *  进程id
    *
    * @return int|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param int|null $pid 进程id
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets procPath
    *  进程路径
    *
    * @return string|null
    */
    public function getProcPath()
    {
        return $this->container['procPath'];
    }

    /**
    * Sets procPath
    *
    * @param string|null $procPath 进程路径
    *
    * @return $this
    */
    public function setProcPath($procPath)
    {
        $this->container['procPath'] = $procPath;
        return $this;
    }

    /**
    * Gets isHttps
    *  是否是https
    *
    * @return bool|null
    */
    public function getIsHttps()
    {
        return $this->container['isHttps'];
    }

    /**
    * Sets isHttps
    *
    * @param bool|null $isHttps 是否是https
    *
    * @return $this
    */
    public function setIsHttps($isHttps)
    {
        $this->container['isHttps'] = $isHttps;
        return $this;
    }

    /**
    * Gets certIssuer
    *  SSL证书颁发者
    *
    * @return string|null
    */
    public function getCertIssuer()
    {
        return $this->container['certIssuer'];
    }

    /**
    * Sets certIssuer
    *
    * @param string|null $certIssuer SSL证书颁发者
    *
    * @return $this
    */
    public function setCertIssuer($certIssuer)
    {
        $this->container['certIssuer'] = $certIssuer;
        return $this;
    }

    /**
    * Gets certUser
    *  SSL证书使用者
    *
    * @return string|null
    */
    public function getCertUser()
    {
        return $this->container['certUser'];
    }

    /**
    * Sets certUser
    *
    * @param string|null $certUser SSL证书使用者
    *
    * @return $this
    */
    public function setCertUser($certUser)
    {
        $this->container['certUser'] = $certUser;
        return $this;
    }

    /**
    * Gets certIssueTime
    *  SSL证书颁发时间
    *
    * @return string|null
    */
    public function getCertIssueTime()
    {
        return $this->container['certIssueTime'];
    }

    /**
    * Sets certIssueTime
    *
    * @param string|null $certIssueTime SSL证书颁发时间
    *
    * @return $this
    */
    public function setCertIssueTime($certIssueTime)
    {
        $this->container['certIssueTime'] = $certIssueTime;
        return $this;
    }

    /**
    * Gets certExpiredTime
    *  SSL证书截止时间
    *
    * @return string|null
    */
    public function getCertExpiredTime()
    {
        return $this->container['certExpiredTime'];
    }

    /**
    * Sets certExpiredTime
    *
    * @param string|null $certExpiredTime SSL证书截止时间
    *
    * @return $this
    */
    public function setCertExpiredTime($certExpiredTime)
    {
        $this->container['certExpiredTime'] = $certExpiredTime;
        return $this;
    }

    /**
    * Gets recordTime
    *  扫描时间
    *
    * @return int|null
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param int|null $recordTime 扫描时间
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets containerId
    *  容器id
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId 容器id
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  容器名称
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName 容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
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

