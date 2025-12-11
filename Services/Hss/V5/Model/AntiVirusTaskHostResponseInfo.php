<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntiVirusTaskHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntiVirusTaskHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * startTime  **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    * runDuration  **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    * scanProgress  **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    * virusNum  **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    * scanFileNum  **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    * hostTaskStatus  **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    * failReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * deleted  **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    * whetherUsingQuota  **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    * protectStatus  **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'assetValue' => 'string',
            'startTime' => 'int',
            'runDuration' => 'int',
            'scanProgress' => 'string',
            'virusNum' => 'int',
            'scanFileNum' => 'int',
            'hostTaskStatus' => 'string',
            'failReason' => 'string',
            'deleted' => 'bool',
            'whetherUsingQuota' => 'int',
            'agentId' => 'string',
            'osType' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'protectStatus' => 'string',
            'osName' => 'string',
            'osVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * startTime  **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    * runDuration  **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    * scanProgress  **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    * virusNum  **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    * scanFileNum  **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    * hostTaskStatus  **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    * failReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * deleted  **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    * whetherUsingQuota  **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    * protectStatus  **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'assetValue' => null,
        'startTime' => 'int64',
        'runDuration' => 'int64',
        'scanProgress' => null,
        'virusNum' => 'int32',
        'scanFileNum' => 'int64',
        'hostTaskStatus' => null,
        'failReason' => null,
        'deleted' => null,
        'whetherUsingQuota' => null,
        'agentId' => null,
        'osType' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'protectStatus' => null,
        'osName' => null,
        'osVersion' => null
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
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * startTime  **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    * runDuration  **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    * scanProgress  **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    * virusNum  **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    * scanFileNum  **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    * hostTaskStatus  **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    * failReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * deleted  **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    * whetherUsingQuota  **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    * protectStatus  **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'assetValue' => 'asset_value',
            'startTime' => 'start_time',
            'runDuration' => 'run_duration',
            'scanProgress' => 'scan_progress',
            'virusNum' => 'virus_num',
            'scanFileNum' => 'scan_file_num',
            'hostTaskStatus' => 'host_task_status',
            'failReason' => 'fail_reason',
            'deleted' => 'deleted',
            'whetherUsingQuota' => 'whether_using_quota',
            'agentId' => 'agent_id',
            'osType' => 'os_type',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'protectStatus' => 'protect_status',
            'osName' => 'os_name',
            'osVersion' => 'os_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * startTime  **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    * runDuration  **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    * scanProgress  **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    * virusNum  **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    * scanFileNum  **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    * hostTaskStatus  **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    * failReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * deleted  **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    * whetherUsingQuota  **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    * protectStatus  **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'assetValue' => 'setAssetValue',
            'startTime' => 'setStartTime',
            'runDuration' => 'setRunDuration',
            'scanProgress' => 'setScanProgress',
            'virusNum' => 'setVirusNum',
            'scanFileNum' => 'setScanFileNum',
            'hostTaskStatus' => 'setHostTaskStatus',
            'failReason' => 'setFailReason',
            'deleted' => 'setDeleted',
            'whetherUsingQuota' => 'setWhetherUsingQuota',
            'agentId' => 'setAgentId',
            'osType' => 'setOsType',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'protectStatus' => 'setProtectStatus',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * startTime  **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    * runDuration  **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    * scanProgress  **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    * virusNum  **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    * scanFileNum  **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    * hostTaskStatus  **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    * failReason  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    * deleted  **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    * whetherUsingQuota  **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    * protectStatus  **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'assetValue' => 'getAssetValue',
            'startTime' => 'getStartTime',
            'runDuration' => 'getRunDuration',
            'scanProgress' => 'getScanProgress',
            'virusNum' => 'getVirusNum',
            'scanFileNum' => 'getScanFileNum',
            'hostTaskStatus' => 'getHostTaskStatus',
            'failReason' => 'getFailReason',
            'deleted' => 'getDeleted',
            'whetherUsingQuota' => 'getWhetherUsingQuota',
            'agentId' => 'getAgentId',
            'osType' => 'getOsType',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'protectStatus' => 'getProtectStatus',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['runDuration'] = isset($data['runDuration']) ? $data['runDuration'] : null;
        $this->container['scanProgress'] = isset($data['scanProgress']) ? $data['scanProgress'] : null;
        $this->container['virusNum'] = isset($data['virusNum']) ? $data['virusNum'] : null;
        $this->container['scanFileNum'] = isset($data['scanFileNum']) ? $data['scanFileNum'] : null;
        $this->container['hostTaskStatus'] = isset($data['hostTaskStatus']) ? $data['hostTaskStatus'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['whetherUsingQuota'] = isset($data['whetherUsingQuota']) ? $data['whetherUsingQuota'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runDuration']) && ($this->container['runDuration'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'runDuration', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['runDuration']) && ($this->container['runDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'runDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanProgress']) && (mb_strlen($this->container['scanProgress']) > 128)) {
                $invalidProperties[] = "invalid value for 'scanProgress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scanProgress']) && (mb_strlen($this->container['scanProgress']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanProgress', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['virusNum']) && ($this->container['virusNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'virusNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['virusNum']) && ($this->container['virusNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'virusNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanFileNum']) && ($this->container['scanFileNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanFileNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanFileNum']) && ($this->container['scanFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failReason']) && !preg_match("/^.*$/", $this->container['failReason'])) {
                $invalidProperties[] = "invalid value for 'failReason', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
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
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 启动时间 **取值范围**： 最小值0，最大值9223372036854775807；时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算）；单位：ms
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets runDuration
    *  **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    *
    * @return int|null
    */
    public function getRunDuration()
    {
        return $this->container['runDuration'];
    }

    /**
    * Sets runDuration
    *
    * @param int|null $runDuration **参数解释**: 运行时长 **取值范围**: 非负整数，最小值0；单位：s（秒）
    *
    * @return $this
    */
    public function setRunDuration($runDuration)
    {
        $this->container['runDuration'] = $runDuration;
        return $this;
    }

    /**
    * Gets scanProgress
    *  **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    *
    * @return string|null
    */
    public function getScanProgress()
    {
        return $this->container['scanProgress'];
    }

    /**
    * Sets scanProgress
    *
    * @param string|null $scanProgress **参数解释**： 扫描进度 **取值范围**： 字符串格式，支持百分比（如“50%”）或0-100的数值字符串
    *
    * @return $this
    */
    public function setScanProgress($scanProgress)
    {
        $this->container['scanProgress'] = $scanProgress;
        return $this;
    }

    /**
    * Gets virusNum
    *  **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    *
    * @return int|null
    */
    public function getVirusNum()
    {
        return $this->container['virusNum'];
    }

    /**
    * Sets virusNum
    *
    * @param int|null $virusNum **参数解释** 新发现病毒数量 **取值范围** 非负整数，最小值0；单位：个
    *
    * @return $this
    */
    public function setVirusNum($virusNum)
    {
        $this->container['virusNum'] = $virusNum;
        return $this;
    }

    /**
    * Gets scanFileNum
    *  **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    *
    * @return int|null
    */
    public function getScanFileNum()
    {
        return $this->container['scanFileNum'];
    }

    /**
    * Sets scanFileNum
    *
    * @param int|null $scanFileNum **参数解释**: 已扫描的文件数量 **取值范围**: 非负整数，最小值0；单位：个
    *
    * @return $this
    */
    public function setScanFileNum($scanFileNum)
    {
        $this->container['scanFileNum'] = $scanFileNum;
        return $this;
    }

    /**
    * Gets hostTaskStatus
    *  **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    *
    * @return string|null
    */
    public function getHostTaskStatus()
    {
        return $this->container['hostTaskStatus'];
    }

    /**
    * Sets hostTaskStatus
    *
    * @param string|null $hostTaskStatus **参数解释**: 服务器扫描状态 **取值范围**: - scanning ：扫描中 - success ：扫描成功 - fail ：扫描失败 - cancel ：取消扫描
    *
    * @return $this
    */
    public function setHostTaskStatus($hostTaskStatus)
    {
        $this->container['hostTaskStatus'] = $hostTaskStatus;
        return $this;
    }

    /**
    * Gets failReason
    *  **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason **参数解释**: 失败原因 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets deleted
    *  **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted **参数解释**： 是否删除 **取值范围**： 包含如下:   - true ：已删除   - false : 未删除
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets whetherUsingQuota
    *  **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    *
    * @return int|null
    */
    public function getWhetherUsingQuota()
    {
        return $this->container['whetherUsingQuota'];
    }

    /**
    * Sets whetherUsingQuota
    *
    * @param int|null $whetherUsingQuota **参数解释**： 是否使用病毒查杀按次计费配额 **取值范围**： 0（未使用）、1（已使用）
    *
    * @return $this
    */
    public function setWhetherUsingQuota($whetherUsingQuota)
    {
        $this->container['whetherUsingQuota'] = $whetherUsingQuota;
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
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**： Agent状态 **取值范围**: - installed：已安装 - not_installed：未安 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus **参数解释**: 防护状态 **取值范围**:  - closed ：关闭  - opened ：开启
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets osVersion
    *  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
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

