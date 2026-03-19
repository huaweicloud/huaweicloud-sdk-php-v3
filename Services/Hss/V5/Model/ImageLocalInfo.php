<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageLocalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageLocalInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  **参数解释** 镜像名称 **取值范围** 字符长度0-256位
    * imageId  **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    * imageDigest  **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    * imageVersion  **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    * localImageType  **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    * scanStatus  **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    * latestUpdateTime  **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    * latestScanTime  **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
    * vulNum  **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    * unsafeSettingNum  **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    * maliciousFileNum  **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    * hostNum  **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    * containerNum  **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    * componentNum  **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    * scanFailedDesc  **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    * severityLevel  **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * agentId  **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
    * nonScanReason  **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageId' => 'string',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'localImageType' => 'string',
            'scanStatus' => 'string',
            'imageSize' => 'int',
            'latestUpdateTime' => 'int',
            'latestScanTime' => 'int',
            'vulNum' => 'int',
            'unsafeSettingNum' => 'int',
            'maliciousFileNum' => 'int',
            'hostNum' => 'int',
            'containerNum' => 'int',
            'componentNum' => 'int',
            'scanFailedDesc' => 'string',
            'severityLevel' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'agentId' => 'string',
            'nonScanReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  **参数解释** 镜像名称 **取值范围** 字符长度0-256位
    * imageId  **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    * imageDigest  **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    * imageVersion  **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    * localImageType  **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    * scanStatus  **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    * latestUpdateTime  **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    * latestScanTime  **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
    * vulNum  **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    * unsafeSettingNum  **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    * maliciousFileNum  **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    * hostNum  **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    * containerNum  **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    * componentNum  **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    * scanFailedDesc  **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    * severityLevel  **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * agentId  **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
    * nonScanReason  **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageId' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'localImageType' => null,
        'scanStatus' => null,
        'imageSize' => 'int64',
        'latestUpdateTime' => 'int64',
        'latestScanTime' => 'int64',
        'vulNum' => 'int64',
        'unsafeSettingNum' => 'int64',
        'maliciousFileNum' => 'int64',
        'hostNum' => 'int64',
        'containerNum' => 'int64',
        'componentNum' => 'int64',
        'scanFailedDesc' => null,
        'severityLevel' => null,
        'hostName' => null,
        'hostId' => null,
        'agentId' => null,
        'nonScanReason' => null
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
    * imageName  **参数解释** 镜像名称 **取值范围** 字符长度0-256位
    * imageId  **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    * imageDigest  **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    * imageVersion  **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    * localImageType  **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    * scanStatus  **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    * latestUpdateTime  **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    * latestScanTime  **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
    * vulNum  **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    * unsafeSettingNum  **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    * maliciousFileNum  **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    * hostNum  **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    * containerNum  **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    * componentNum  **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    * scanFailedDesc  **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    * severityLevel  **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * agentId  **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
    * nonScanReason  **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageId' => 'image_id',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'localImageType' => 'local_image_type',
            'scanStatus' => 'scan_status',
            'imageSize' => 'image_size',
            'latestUpdateTime' => 'latest_update_time',
            'latestScanTime' => 'latest_scan_time',
            'vulNum' => 'vul_num',
            'unsafeSettingNum' => 'unsafe_setting_num',
            'maliciousFileNum' => 'malicious_file_num',
            'hostNum' => 'host_num',
            'containerNum' => 'container_num',
            'componentNum' => 'component_num',
            'scanFailedDesc' => 'scan_failed_desc',
            'severityLevel' => 'severity_level',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'nonScanReason' => 'non_scan_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  **参数解释** 镜像名称 **取值范围** 字符长度0-256位
    * imageId  **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    * imageDigest  **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    * imageVersion  **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    * localImageType  **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    * scanStatus  **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    * latestUpdateTime  **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    * latestScanTime  **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
    * vulNum  **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    * unsafeSettingNum  **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    * maliciousFileNum  **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    * hostNum  **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    * containerNum  **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    * componentNum  **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    * scanFailedDesc  **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    * severityLevel  **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * agentId  **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
    * nonScanReason  **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageId' => 'setImageId',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'localImageType' => 'setLocalImageType',
            'scanStatus' => 'setScanStatus',
            'imageSize' => 'setImageSize',
            'latestUpdateTime' => 'setLatestUpdateTime',
            'latestScanTime' => 'setLatestScanTime',
            'vulNum' => 'setVulNum',
            'unsafeSettingNum' => 'setUnsafeSettingNum',
            'maliciousFileNum' => 'setMaliciousFileNum',
            'hostNum' => 'setHostNum',
            'containerNum' => 'setContainerNum',
            'componentNum' => 'setComponentNum',
            'scanFailedDesc' => 'setScanFailedDesc',
            'severityLevel' => 'setSeverityLevel',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'nonScanReason' => 'setNonScanReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  **参数解释** 镜像名称 **取值范围** 字符长度0-256位
    * imageId  **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    * imageDigest  **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    * imageVersion  **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    * localImageType  **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    * scanStatus  **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    * latestUpdateTime  **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    * latestScanTime  **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
    * vulNum  **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    * unsafeSettingNum  **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    * maliciousFileNum  **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    * hostNum  **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    * containerNum  **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    * componentNum  **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    * scanFailedDesc  **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    * severityLevel  **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * hostId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * agentId  **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
    * nonScanReason  **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageId' => 'getImageId',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'localImageType' => 'getLocalImageType',
            'scanStatus' => 'getScanStatus',
            'imageSize' => 'getImageSize',
            'latestUpdateTime' => 'getLatestUpdateTime',
            'latestScanTime' => 'getLatestScanTime',
            'vulNum' => 'getVulNum',
            'unsafeSettingNum' => 'getUnsafeSettingNum',
            'maliciousFileNum' => 'getMaliciousFileNum',
            'hostNum' => 'getHostNum',
            'containerNum' => 'getContainerNum',
            'componentNum' => 'getComponentNum',
            'scanFailedDesc' => 'getScanFailedDesc',
            'severityLevel' => 'getSeverityLevel',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'nonScanReason' => 'getNonScanReason'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['localImageType'] = isset($data['localImageType']) ? $data['localImageType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['latestUpdateTime'] = isset($data['latestUpdateTime']) ? $data['latestUpdateTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['unsafeSettingNum'] = isset($data['unsafeSettingNum']) ? $data['unsafeSettingNum'] : null;
        $this->container['maliciousFileNum'] = isset($data['maliciousFileNum']) ? $data['maliciousFileNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['containerNum'] = isset($data['containerNum']) ? $data['containerNum'] : null;
        $this->container['componentNum'] = isset($data['componentNum']) ? $data['componentNum'] : null;
        $this->container['scanFailedDesc'] = isset($data['scanFailedDesc']) ? $data['scanFailedDesc'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['nonScanReason'] = isset($data['nonScanReason']) ? $data['nonScanReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) > 256)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentNum']) && ($this->container['componentNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'componentNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['componentNum']) && ($this->container['componentNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'componentNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 256)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nonScanReason']) && (mb_strlen($this->container['nonScanReason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'nonScanReason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['nonScanReason']) && (mb_strlen($this->container['nonScanReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'nonScanReason', the character length must be bigger than or equal to 1.";
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
    * Gets imageName
    *  **参数解释** 镜像名称 **取值范围** 字符长度0-256位
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
    * @param string|null $imageName **参数解释** 镜像名称 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释** 本地镜像的唯一标识，用于后续查询镜像详情、执行扫描等操作 **取值范围** 字符长度1-64位，支持字母、数字、短横线，符合UUID格式
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageDigest
    *  **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    *
    * @return string|null
    */
    public function getImageDigest()
    {
        return $this->container['imageDigest'];
    }

    /**
    * Sets imageDigest
    *
    * @param string|null $imageDigest **参数解释** 本地镜像的加密摘要（SHA-256算法），用于唯一标识镜像内容，避免篡改 **取值范围** 字符长度64-128位，以'sha256:'开头，后跟十六进制字符串（如sha256:ce0b5d91b072730d0bc9518f11efd07eb7fdb9f43251e11a96cab5b1918b7044）
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释** 镜像版本 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets localImageType
    *  **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    *
    * @return string|null
    */
    public function getLocalImageType()
    {
        return $this->container['localImageType'];
    }

    /**
    * Sets localImageType
    *
    * @param string|null $localImageType **参数解释** 本地镜像的存储来源类型，标识镜像是否来自华为云SWR仓库 **取值范围** swr_image：华为云SWR仓库镜像 other_image：非SWR仓库镜像
    *
    * @return $this
    */
    public function setLocalImageType($localImageType)
    {
        $this->container['localImageType'] = $localImageType;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus **参数解释** 本地镜像的安全扫描状态，反映当前镜像是否完成安全检测 **取值范围** 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize **参数解释** 本地镜像的实际存储大小，单位为字节（B） **取值范围** 取值0-9223372036854775807（约9EB）
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets latestUpdateTime
    *  **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getLatestUpdateTime()
    {
        return $this->container['latestUpdateTime'];
    }

    /**
    * Sets latestUpdateTime
    *
    * @param int|null $latestUpdateTime **参数解释** 本地镜像版本的最后更新时间，即镜像创建或更新的时间戳 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807
    *
    * @return $this
    */
    public function setLatestUpdateTime($latestUpdateTime)
    {
        $this->container['latestUpdateTime'] = $latestUpdateTime;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
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
    * @param int|null $latestScanTime **参数解释** 本地镜像最近一次完成安全扫描的时间戳，未扫描时该字段可能为0或空 **取值范围** Unix时间戳（单位ms），取值0-9223372036854775807，未扫描时为0
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets vulNum
    *  **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum **参数解释** 本地镜像中检测到的软件漏洞总数，包含高、中、低危漏洞 **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets unsafeSettingNum
    *  **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getUnsafeSettingNum()
    {
        return $this->container['unsafeSettingNum'];
    }

    /**
    * Sets unsafeSettingNum
    *
    * @param int|null $unsafeSettingNum **参数解释** 本地镜像在安全基线扫描中未通过的检查项数量，反映镜像配置合规性 **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setUnsafeSettingNum($unsafeSettingNum)
    {
        $this->container['unsafeSettingNum'] = $unsafeSettingNum;
        return $this;
    }

    /**
    * Gets maliciousFileNum
    *  **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getMaliciousFileNum()
    {
        return $this->container['maliciousFileNum'];
    }

    /**
    * Sets maliciousFileNum
    *
    * @param int|null $maliciousFileNum **参数解释** 本地镜像中检测到的恶意文件（如病毒、木马）总数 **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setMaliciousFileNum($maliciousFileNum)
    {
        $this->container['maliciousFileNum'] = $maliciousFileNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释** 当前本地镜像所关联的云服务器总数 **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets containerNum
    *  **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getContainerNum()
    {
        return $this->container['containerNum'];
    }

    /**
    * Sets containerNum
    *
    * @param int|null $containerNum **参数解释** 当前本地镜像所创建或关联的容器总数 **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setContainerNum($containerNum)
    {
        $this->container['containerNum'] = $containerNum;
        return $this;
    }

    /**
    * Gets componentNum
    *  **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getComponentNum()
    {
        return $this->container['componentNum'];
    }

    /**
    * Sets componentNum
    *
    * @param int|null $componentNum **参数解释** 本地镜像中包含的软件组件（如依赖库、应用程序）总数 **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setComponentNum($componentNum)
    {
        $this->container['componentNum'] = $componentNum;
        return $this;
    }

    /**
    * Gets scanFailedDesc
    *  **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    *
    * @return string|null
    */
    public function getScanFailedDesc()
    {
        return $this->container['scanFailedDesc'];
    }

    /**
    * Sets scanFailedDesc
    *
    * @param string|null $scanFailedDesc **参数解释** 当scan_status为failed时，该字段说明扫描失败的具体原因，未失败时为空字符串 **取值范围** - unknown_error：未知错误 - failed_to_match_agent：对应主机未开启容器版防护或agent离线 - create_container_failed：创建容器失败      - get_container_info_failed：获取容器信息失败 - docker_offline：docker引擎不在线 - get_docker_root_failed：获取容器根文件系统失败 - image_not_exist_or_docker_api_fault：镜像不存在或docker接口错误 - huge_image：超大镜像 - docker_root_in_nfs：容器根目录位于网络挂载 - response_timed_out：响应超时
    *
    * @return $this
    */
    public function setScanFailedDesc($scanFailedDesc)
    {
        $this->container['scanFailedDesc'] = $scanFailedDesc;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释** 根据镜像的漏洞、基线违规、恶意文件情况综合评定的风险等级 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
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
    * @param string|null $hostName **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
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
    * @param string|null $agentId **参数解释** 本地镜像所在服务器上安装的HSS Agent唯一标识，用于关联Agent相关操作 **取值范围** 字符长度1-128位，支持字母、数字、短横线、下划线
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets nonScanReason
    *  **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @return string|null
    */
    public function getNonScanReason()
    {
        return $this->container['nonScanReason'];
    }

    /**
    * Sets nonScanReason
    *
    * @param string|null $nonScanReason **参数解释** 说明本地镜像无法进行安全扫描的具体原因（如镜像格式不支持、权限不足等），为空表示支持扫描 **取值范围** 字符长度0-1024位，支持中文、英文、数字、常用标点符号
    *
    * @return $this
    */
    public function setNonScanReason($nonScanReason)
    {
        $this->container['nonScanReason'] = $nonScanReason;
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

