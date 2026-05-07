<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AIDetailInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AIDetailInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverName  **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    * serverIp  **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    * aiApplication  **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    * aiTool  **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    * type  **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
    * version  **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    * startupPath  **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    * startupTime  **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    * installPath  **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    * firstScanTime  **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    * latestScanTime  **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-128位
    * hostId  **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
    * pid  **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
    * ppid  **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    * user  **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    * netInfo  **参数解释**： 应用进程监听网络信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverName' => 'string',
            'serverIp' => 'string',
            'aiApplication' => 'string',
            'aiTool' => 'string',
            'type' => 'string',
            'version' => 'string',
            'startupPath' => 'string',
            'startupTime' => 'int',
            'installPath' => 'string',
            'cmdline' => 'string',
            'firstScanTime' => 'int',
            'latestScanTime' => 'int',
            'containerName' => 'string',
            'containerId' => 'string',
            'hostId' => 'string',
            'pid' => 'int',
            'ppid' => 'int',
            'user' => 'string',
            'netInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\AIProcessNetInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverName  **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    * serverIp  **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    * aiApplication  **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    * aiTool  **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    * type  **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
    * version  **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    * startupPath  **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    * startupTime  **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    * installPath  **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    * firstScanTime  **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    * latestScanTime  **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-128位
    * hostId  **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
    * pid  **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
    * ppid  **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    * user  **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    * netInfo  **参数解释**： 应用进程监听网络信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverName' => null,
        'serverIp' => null,
        'aiApplication' => null,
        'aiTool' => null,
        'type' => null,
        'version' => null,
        'startupPath' => null,
        'startupTime' => 'int64',
        'installPath' => null,
        'cmdline' => null,
        'firstScanTime' => 'int64',
        'latestScanTime' => 'int64',
        'containerName' => null,
        'containerId' => null,
        'hostId' => null,
        'pid' => 'int32',
        'ppid' => 'int32',
        'user' => null,
        'netInfo' => null
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
    * serverName  **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    * serverIp  **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    * aiApplication  **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    * aiTool  **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    * type  **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
    * version  **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    * startupPath  **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    * startupTime  **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    * installPath  **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    * firstScanTime  **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    * latestScanTime  **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-128位
    * hostId  **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
    * pid  **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
    * ppid  **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    * user  **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    * netInfo  **参数解释**： 应用进程监听网络信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverName' => 'server_name',
            'serverIp' => 'server_ip',
            'aiApplication' => 'ai_application',
            'aiTool' => 'ai_tool',
            'type' => 'type',
            'version' => 'version',
            'startupPath' => 'startup_path',
            'startupTime' => 'startup_time',
            'installPath' => 'install_path',
            'cmdline' => 'cmdline',
            'firstScanTime' => 'first_scan_time',
            'latestScanTime' => 'latest_scan_time',
            'containerName' => 'container_name',
            'containerId' => 'container_id',
            'hostId' => 'host_id',
            'pid' => 'pid',
            'ppid' => 'ppid',
            'user' => 'user',
            'netInfo' => 'net_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverName  **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    * serverIp  **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    * aiApplication  **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    * aiTool  **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    * type  **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
    * version  **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    * startupPath  **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    * startupTime  **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    * installPath  **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    * firstScanTime  **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    * latestScanTime  **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-128位
    * hostId  **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
    * pid  **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
    * ppid  **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    * user  **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    * netInfo  **参数解释**： 应用进程监听网络信息
    *
    * @var string[]
    */
    protected static $setters = [
            'serverName' => 'setServerName',
            'serverIp' => 'setServerIp',
            'aiApplication' => 'setAiApplication',
            'aiTool' => 'setAiTool',
            'type' => 'setType',
            'version' => 'setVersion',
            'startupPath' => 'setStartupPath',
            'startupTime' => 'setStartupTime',
            'installPath' => 'setInstallPath',
            'cmdline' => 'setCmdline',
            'firstScanTime' => 'setFirstScanTime',
            'latestScanTime' => 'setLatestScanTime',
            'containerName' => 'setContainerName',
            'containerId' => 'setContainerId',
            'hostId' => 'setHostId',
            'pid' => 'setPid',
            'ppid' => 'setPpid',
            'user' => 'setUser',
            'netInfo' => 'setNetInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverName  **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    * serverIp  **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    * aiApplication  **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    * aiTool  **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    * type  **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
    * version  **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    * startupPath  **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    * startupTime  **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    * installPath  **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    * cmdline  **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    * firstScanTime  **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    * latestScanTime  **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-128位
    * hostId  **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
    * pid  **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
    * ppid  **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    * user  **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    * netInfo  **参数解释**： 应用进程监听网络信息
    *
    * @var string[]
    */
    protected static $getters = [
            'serverName' => 'getServerName',
            'serverIp' => 'getServerIp',
            'aiApplication' => 'getAiApplication',
            'aiTool' => 'getAiTool',
            'type' => 'getType',
            'version' => 'getVersion',
            'startupPath' => 'getStartupPath',
            'startupTime' => 'getStartupTime',
            'installPath' => 'getInstallPath',
            'cmdline' => 'getCmdline',
            'firstScanTime' => 'getFirstScanTime',
            'latestScanTime' => 'getLatestScanTime',
            'containerName' => 'getContainerName',
            'containerId' => 'getContainerId',
            'hostId' => 'getHostId',
            'pid' => 'getPid',
            'ppid' => 'getPpid',
            'user' => 'getUser',
            'netInfo' => 'getNetInfo'
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
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['aiApplication'] = isset($data['aiApplication']) ? $data['aiApplication'] : null;
        $this->container['aiTool'] = isset($data['aiTool']) ? $data['aiTool'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['startupPath'] = isset($data['startupPath']) ? $data['startupPath'] : null;
        $this->container['startupTime'] = isset($data['startupTime']) ? $data['startupTime'] : null;
        $this->container['installPath'] = isset($data['installPath']) ? $data['installPath'] : null;
        $this->container['cmdline'] = isset($data['cmdline']) ? $data['cmdline'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['ppid'] = isset($data['ppid']) ? $data['ppid'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['netInfo'] = isset($data['netInfo']) ? $data['netInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) > 256)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aiApplication']) && (mb_strlen($this->container['aiApplication']) > 256)) {
                $invalidProperties[] = "invalid value for 'aiApplication', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['aiApplication']) && (mb_strlen($this->container['aiApplication']) < 1)) {
                $invalidProperties[] = "invalid value for 'aiApplication', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aiTool']) && (mb_strlen($this->container['aiTool']) > 256)) {
                $invalidProperties[] = "invalid value for 'aiTool', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['aiTool']) && (mb_strlen($this->container['aiTool']) < 1)) {
                $invalidProperties[] = "invalid value for 'aiTool', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startupPath']) && (mb_strlen($this->container['startupPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'startupPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['startupPath']) && (mb_strlen($this->container['startupPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'startupPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startupTime']) && ($this->container['startupTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startupTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startupTime']) && ($this->container['startupTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startupTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installPath']) && (mb_strlen($this->container['installPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'installPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['installPath']) && (mb_strlen($this->container['installPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'installPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmdline']) && (mb_strlen($this->container['cmdline']) > 512)) {
                $invalidProperties[] = "invalid value for 'cmdline', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['cmdline']) && (mb_strlen($this->container['cmdline']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmdline', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] < 0)) {
                $invalidProperties[] = "invalid value for 'pid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ppid']) && ($this->container['ppid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ppid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ppid']) && ($this->container['ppid'] < 0)) {
                $invalidProperties[] = "invalid value for 'ppid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) > 128)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
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
    * Gets serverName
    *  **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string|null $serverName **参数解释**： category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets serverIp
    *  **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string|null $serverIp **参数解释**： category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址        **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
        return $this;
    }

    /**
    * Gets aiApplication
    *  **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getAiApplication()
    {
        return $this->container['aiApplication'];
    }

    /**
    * Sets aiApplication
    *
    * @param string|null $aiApplication **参数解释**： AI应用名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setAiApplication($aiApplication)
    {
        $this->container['aiApplication'] = $aiApplication;
        return $this;
    }

    /**
    * Gets aiTool
    *  **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getAiTool()
    {
        return $this->container['aiTool'];
    }

    /**
    * Sets aiTool
    *
    * @param string|null $aiTool **参数解释**： AI工具名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setAiTool($aiTool)
    {
        $this->container['aiTool'] = $aiTool;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
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
    * @param string|null $type **参数解释**： AI应用类型 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**： 版本号 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets startupPath
    *  **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    *
    * @return string|null
    */
    public function getStartupPath()
    {
        return $this->container['startupPath'];
    }

    /**
    * Sets startupPath
    *
    * @param string|null $startupPath **参数解释**： 应用启动路径 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setStartupPath($startupPath)
    {
        $this->container['startupPath'] = $startupPath;
        return $this;
    }

    /**
    * Gets startupTime
    *  **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    *
    * @return int|null
    */
    public function getStartupTime()
    {
        return $this->container['startupTime'];
    }

    /**
    * Sets startupTime
    *
    * @param int|null $startupTime **参数解释**： 应用启动时间 **取值范围**： 时间戳，毫秒级
    *
    * @return $this
    */
    public function setStartupTime($startupTime)
    {
        $this->container['startupTime'] = $startupTime;
        return $this;
    }

    /**
    * Gets installPath
    *  **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    *
    * @return string|null
    */
    public function getInstallPath()
    {
        return $this->container['installPath'];
    }

    /**
    * Sets installPath
    *
    * @param string|null $installPath **参数解释**： 安装路径 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setInstallPath($installPath)
    {
        $this->container['installPath'] = $installPath;
        return $this;
    }

    /**
    * Gets cmdline
    *  **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    *
    * @return string|null
    */
    public function getCmdline()
    {
        return $this->container['cmdline'];
    }

    /**
    * Sets cmdline
    *
    * @param string|null $cmdline **参数解释**： 应用启动命令行 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setCmdline($cmdline)
    {
        $this->container['cmdline'] = $cmdline;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime **参数解释**： 首次扫描时间 **取值范围**： 时间戳，毫秒级
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime **参数解释**： 最近一次扫描时间 **取值范围**： 时间戳，毫秒级
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
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
    * @param string|null $containerName **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**： 容器ID **取值范围**： 字符长度1-128位
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
    * @param string|null $containerId **参数解释**： 容器ID **取值范围**： 字符长度1-128位
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
    *  **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
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
    * @param string|null $hostId **参数解释**： 服务器ID，查看服务器详情使用 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
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
    * @param int|null $pid **参数解释**： 应用进程PID **取值范围**： 取值0-2147483647
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets ppid
    *  **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    *
    * @return int|null
    */
    public function getPpid()
    {
        return $this->container['ppid'];
    }

    /**
    * Sets ppid
    *
    * @param int|null $ppid **参数解释**： 应用进程的父进程PID **取值范围**： 取值0-2147483647
    *
    * @return $this
    */
    public function setPpid($ppid)
    {
        $this->container['ppid'] = $ppid;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user **参数解释**： 应用运行用户 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets netInfo
    *  **参数解释**： 应用进程监听网络信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AIProcessNetInfo[]|null
    */
    public function getNetInfo()
    {
        return $this->container['netInfo'];
    }

    /**
    * Sets netInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AIProcessNetInfo[]|null $netInfo **参数解释**： 应用进程监听网络信息
    *
    * @return $this
    */
    public function setNetInfo($netInfo)
    {
        $this->container['netInfo'] = $netInfo;
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

