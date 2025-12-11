<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * laddr  **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    * path  **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
    * pid  **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
    * port  **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
    * status  状态
    * type  **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'hostId' => 'string',
            'hostIp' => 'string',
            'hostName' => 'string',
            'laddr' => 'string',
            'path' => 'string',
            'pid' => 'int',
            'port' => 'int',
            'status' => 'string',
            'type' => 'string',
            'containerName' => 'string',
            'agentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * laddr  **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    * path  **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
    * pid  **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
    * port  **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
    * status  状态
    * type  **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'hostId' => null,
        'hostIp' => null,
        'hostName' => null,
        'laddr' => null,
        'path' => null,
        'pid' => 'int32',
        'port' => 'int32',
        'status' => null,
        'type' => null,
        'containerName' => null,
        'agentId' => null
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
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * laddr  **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    * path  **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
    * pid  **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
    * port  **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
    * status  状态
    * type  **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'hostId' => 'host_id',
            'hostIp' => 'host_ip',
            'hostName' => 'host_name',
            'laddr' => 'laddr',
            'path' => 'path',
            'pid' => 'pid',
            'port' => 'port',
            'status' => 'status',
            'type' => 'type',
            'containerName' => 'container_name',
            'agentId' => 'agent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * laddr  **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    * path  **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
    * pid  **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
    * port  **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
    * status  状态
    * type  **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp',
            'hostName' => 'setHostName',
            'laddr' => 'setLaddr',
            'path' => 'setPath',
            'pid' => 'setPid',
            'port' => 'setPort',
            'status' => 'setStatus',
            'type' => 'setType',
            'containerName' => 'setContainerName',
            'agentId' => 'setAgentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * laddr  **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    * path  **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
    * pid  **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
    * port  **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
    * status  状态
    * type  **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'hostId' => 'getHostId',
            'hostIp' => 'getHostIp',
            'hostName' => 'getHostName',
            'laddr' => 'getLaddr',
            'path' => 'getPath',
            'pid' => 'getPid',
            'port' => 'getPort',
            'status' => 'getStatus',
            'type' => 'getType',
            'containerName' => 'getContainerName',
            'agentId' => 'getAgentId'
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
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['laddr'] = isset($data['laddr']) ? $data['laddr'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['laddr']) && (mb_strlen($this->container['laddr']) > 256)) {
                $invalidProperties[] = "invalid value for 'laddr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['laddr']) && (mb_strlen($this->container['laddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'laddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] > 100000)) {
                $invalidProperties[] = "invalid value for 'pid', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] < 0)) {
                $invalidProperties[] = "invalid value for 'pid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
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
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
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
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
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
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
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
    * @param string|null $hostIp **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets laddr
    *  **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    *
    * @return string|null
    */
    public function getLaddr()
    {
        return $this->container['laddr'];
    }

    /**
    * Sets laddr
    *
    * @param string|null $laddr **参数解释**: 端口的监听IP地址（0.0.0.0表示监听所有网卡） **取值范围**: 支持IPv4或IPv6格式，IPv4长度7-15位，IPv6长度15-39位
    *
    * @return $this
    */
    public function setLaddr($laddr)
    {
        $this->container['laddr'] = $laddr;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
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
    * @param string|null $path **参数解释**: 占用当前端口的进程对应的可执行文件绝对路径 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
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
    * @param int|null $pid **参数解释**: 占用当前端口的进程ID **取值范围**: 非负整数，最小值0（无对应进程时为0）；单位：个
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
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
    * @param int|null $port **参数解释**: 端口的具体编号 **取值范围**: 1-65535（TCP/UDP标准端口范围）
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 端口类型 **取值范围**: 目前包括TCP，UDP两种
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
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
    * @param string|null $containerName **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $agentId **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
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

