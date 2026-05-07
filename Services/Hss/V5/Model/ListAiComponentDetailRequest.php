<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiComponentDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiComponentDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * catalogue  **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    * serverName  **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * serverIp  **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiApplication  **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiTool  **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * version  **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * installationPath  **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerId  **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'category' => 'string',
            'catalogue' => 'string',
            'serverName' => 'string',
            'serverIp' => 'string',
            'aiApplication' => 'string',
            'hostId' => 'string',
            'aiTool' => 'string',
            'type' => 'string',
            'version' => 'string',
            'installationPath' => 'string',
            'firstScanTime' => 'int',
            'latestScanTime' => 'int',
            'containerName' => 'string',
            'containerId' => 'string',
            'imageName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * catalogue  **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    * serverName  **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * serverIp  **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiApplication  **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiTool  **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * version  **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * installationPath  **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerId  **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'category' => null,
        'catalogue' => null,
        'serverName' => null,
        'serverIp' => null,
        'aiApplication' => null,
        'hostId' => null,
        'aiTool' => null,
        'type' => null,
        'version' => null,
        'installationPath' => null,
        'firstScanTime' => 'int64',
        'latestScanTime' => 'int64',
        'containerName' => null,
        'containerId' => null,
        'imageName' => null
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
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * catalogue  **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    * serverName  **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * serverIp  **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiApplication  **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiTool  **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * version  **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * installationPath  **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerId  **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'category' => 'category',
            'catalogue' => 'catalogue',
            'serverName' => 'server_name',
            'serverIp' => 'server_ip',
            'aiApplication' => 'ai_application',
            'hostId' => 'host_id',
            'aiTool' => 'ai_tool',
            'type' => 'type',
            'version' => 'version',
            'installationPath' => 'installation_path',
            'firstScanTime' => 'first_scan_time',
            'latestScanTime' => 'latest_scan_time',
            'containerName' => 'container_name',
            'containerId' => 'container_id',
            'imageName' => 'image_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * catalogue  **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    * serverName  **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * serverIp  **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiApplication  **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiTool  **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * version  **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * installationPath  **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerId  **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'category' => 'setCategory',
            'catalogue' => 'setCatalogue',
            'serverName' => 'setServerName',
            'serverIp' => 'setServerIp',
            'aiApplication' => 'setAiApplication',
            'hostId' => 'setHostId',
            'aiTool' => 'setAiTool',
            'type' => 'setType',
            'version' => 'setVersion',
            'installationPath' => 'setInstallationPath',
            'firstScanTime' => 'setFirstScanTime',
            'latestScanTime' => 'setLatestScanTime',
            'containerName' => 'setContainerName',
            'containerId' => 'setContainerId',
            'imageName' => 'setImageName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * catalogue  **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    * serverName  **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * serverIp  **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiApplication  **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * aiTool  **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * type  **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * version  **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * installationPath  **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerId  **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'category' => 'getCategory',
            'catalogue' => 'getCatalogue',
            'serverName' => 'getServerName',
            'serverIp' => 'getServerIp',
            'aiApplication' => 'getAiApplication',
            'hostId' => 'getHostId',
            'aiTool' => 'getAiTool',
            'type' => 'getType',
            'version' => 'getVersion',
            'installationPath' => 'getInstallationPath',
            'firstScanTime' => 'getFirstScanTime',
            'latestScanTime' => 'getLatestScanTime',
            'containerName' => 'getContainerName',
            'containerId' => 'getContainerId',
            'imageName' => 'getImageName'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['aiApplication'] = isset($data['aiApplication']) ? $data['aiApplication'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['aiTool'] = isset($data['aiTool']) ? $data['aiTool'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['installationPath'] = isset($data['installationPath']) ? $data['installationPath'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(host|container)$/", $this->container['category'])) {
                $invalidProperties[] = "invalid value for 'category', must be conform to the pattern /^(host|container)$/.";
            }
        if ($this->container['catalogue'] === null) {
            $invalidProperties[] = "'catalogue' can't be null";
        }
            if ((mb_strlen($this->container['catalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['catalogue']) < 0)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) > 256)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverName']) && !preg_match("/^.*$/", $this->container['serverName'])) {
                $invalidProperties[] = "invalid value for 'serverName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serverIp']) && (mb_strlen($this->container['serverIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverIp']) && !preg_match("/^.*$/", $this->container['serverIp'])) {
                $invalidProperties[] = "invalid value for 'serverIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['aiApplication']) && (mb_strlen($this->container['aiApplication']) > 128)) {
                $invalidProperties[] = "invalid value for 'aiApplication', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['aiApplication']) && (mb_strlen($this->container['aiApplication']) < 0)) {
                $invalidProperties[] = "invalid value for 'aiApplication', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aiApplication']) && !preg_match("/^.*$/", $this->container['aiApplication'])) {
                $invalidProperties[] = "invalid value for 'aiApplication', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['aiTool']) && (mb_strlen($this->container['aiTool']) > 128)) {
                $invalidProperties[] = "invalid value for 'aiTool', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['aiTool']) && (mb_strlen($this->container['aiTool']) < 0)) {
                $invalidProperties[] = "invalid value for 'aiTool', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aiTool']) && !preg_match("/^.*$/", $this->container['aiTool'])) {
                $invalidProperties[] = "invalid value for 'aiTool', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^.*$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && !preg_match("/^.*$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['installationPath']) && (mb_strlen($this->container['installationPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'installationPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['installationPath']) && (mb_strlen($this->container['installationPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'installationPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installationPath']) && !preg_match("/^.*$/", $this->container['installationPath'])) {
                $invalidProperties[] = "invalid value for 'installationPath', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && !preg_match("/^.*$/", $this->container['containerId'])) {
                $invalidProperties[] = "invalid value for 'containerId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
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
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets catalogue
    *  **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getCatalogue()
    {
        return $this->container['catalogue'];
    }

    /**
    * Sets catalogue
    *
    * @param string $catalogue **参数解释**: AI组件类别 **约束限制**: 不涉及 **取值范围**: - app：应用 - tool：工具  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets serverName
    *  **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    * @param string|null $serverName **参数解释**: category==host时 表示服务器名称 category==container时 表示节点名称 category==serverless时 表示实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    *  **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $serverIp **参数解释**: category==host时 表示服务器IP地址 category==container时 表示节点IP地址 category==serverless时 表示实例IP地址 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    *  **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $aiApplication **参数解释**: AI应用名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAiApplication($aiApplication)
    {
        $this->container['aiApplication'] = $aiApplication;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets aiTool
    *  **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $aiTool **参数解释**: AI工具名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    *  **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * @param string|null $type **参数解释**: AI应用类型 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    *  **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
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
    * @param string|null $version **参数解释**: AI版本 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets installationPath
    *  **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInstallationPath()
    {
        return $this->container['installationPath'];
    }

    /**
    * Sets installationPath
    *
    * @param string|null $installationPath **参数解释**: 安装路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstallationPath($installationPath)
    {
        $this->container['installationPath'] = $installationPath;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
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
    * @param int|null $firstScanTime **参数解释**: 首次扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
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
    *  **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
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
    * @param int|null $latestScanTime **参数解释**: 最近扫描时间，时间单位毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
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
    *  **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    * @param string|null $containerName **参数解释**: 容器名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    *  **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $containerId **参数解释**: 容器ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
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

