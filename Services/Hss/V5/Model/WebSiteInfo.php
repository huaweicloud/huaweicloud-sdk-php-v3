<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebSiteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebSiteInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  **参数解释**: 域名 **取值范围**: 字符长度1-256
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256
    * path  **参数解释**: web目录路径 **取值范围**: 字符长度1-512
    * port  **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
    * bindAddr  **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
    * urlPath  **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
    * uid  **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
    * isHttps  **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
    * certIssuer  **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
    * certUser  **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
    * certIssueTime  **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
    * certExpiredTime  **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
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
    * domain  **参数解释**: 域名 **取值范围**: 字符长度1-256
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256
    * path  **参数解释**: web目录路径 **取值范围**: 字符长度1-512
    * port  **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
    * bindAddr  **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
    * urlPath  **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
    * uid  **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
    * isHttps  **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
    * certIssuer  **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
    * certUser  **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
    * certIssueTime  **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
    * certExpiredTime  **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * domain  **参数解释**: 域名 **取值范围**: 字符长度1-256
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256
    * path  **参数解释**: web目录路径 **取值范围**: 字符长度1-512
    * port  **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
    * bindAddr  **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
    * urlPath  **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
    * uid  **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
    * isHttps  **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
    * certIssuer  **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
    * certUser  **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
    * certIssueTime  **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
    * certExpiredTime  **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $attributeMap = [
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
    * domain  **参数解释**: 域名 **取值范围**: 字符长度1-256
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256
    * path  **参数解释**: web目录路径 **取值范围**: 字符长度1-512
    * port  **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
    * bindAddr  **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
    * urlPath  **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
    * uid  **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
    * isHttps  **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
    * certIssuer  **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
    * certUser  **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
    * certIssueTime  **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
    * certExpiredTime  **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $setters = [
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
    * domain  **参数解释**: 域名 **取值范围**: 字符长度1-256
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256
    * path  **参数解释**: web目录路径 **取值范围**: 字符长度1-512
    * port  **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
    * bindAddr  **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
    * urlPath  **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
    * uid  **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
    * isHttps  **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
    * certIssuer  **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
    * certUser  **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
    * certIssueTime  **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
    * certExpiredTime  **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $getters = [
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
    * Gets domain
    *  **参数解释**: 域名 **取值范围**: 字符长度1-256
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
    * @param string|null $domain **参数解释**: 域名 **取值范围**: 字符长度1-256
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
    *  **参数解释**: 软件名称 **取值范围**: 字符长度1-256
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
    * @param string|null $appName **参数解释**: 软件名称 **取值范围**: 字符长度1-256
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
    *  **参数解释**: web目录路径 **取值范围**: 字符长度1-512
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
    * @param string|null $path **参数解释**: web目录路径 **取值范围**: 字符长度1-512
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
    *  **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $port **参数解释**: web站点对外端口 **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
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
    * @param string|null $bindAddr **参数解释**: web站点绑定IP **取值范围**: 字符长度1-512
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
    *  **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
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
    * @param string|null $urlPath **参数解释**: web站点url路径 **取值范围**: 字符长度1-128
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
    *  **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $uid **参数解释**: web站点进程uid **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $gid **参数解释**: web站点进程gid **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
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
    * @param string|null $mode **参数解释**: web站点文件权限 **取值范围**: 字符长度1-32
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
    *  **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $pid **参数解释**: web站点进程pid **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
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
    * @param string|null $procPath **参数解释**: web站点进程路径 **取值范围**: 字符长度1-1024
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
    *  **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
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
    * @param bool|null $isHttps **参数解释**: web站点是否为https **取值范围**: - true：是。 - false：否。
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
    *  **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
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
    * @param string|null $certIssuer **参数解释**: web站点SSL证书颁发者 **取值范围**: 字符长度0-256
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
    *  **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
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
    * @param string|null $certUser **参数解释**: web站点SSL证书使用者 **取值范围**: 字符长度0-256
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
    *  **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
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
    * @param string|null $certIssueTime **参数解释**: web站点SSL证书颁发时间 **取值范围**: 字符长度0-32
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
    *  **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
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
    * @param string|null $certExpiredTime **参数解释**: web站点SSL证书截止时间 **取值范围**: 字符长度0-32
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
    *  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
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
    * @param int|null $recordTime **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
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
    *  **参数解释**: 容器id **取值范围**: 字符长度1-128
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
    * @param string|null $containerId **参数解释**: 容器id **取值范围**: 字符长度1-128
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
    *  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
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
    * @param string|null $containerName **参数解释**: 容器名称 **取值范围**: 字符长度1-256
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

