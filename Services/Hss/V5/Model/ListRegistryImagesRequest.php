<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRegistryImagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRegistryImagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
    * latestVersion  仅关注最新版本镜像
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestSyncTime  **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestSyncTime  **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查风险
    * hasVul  是否存在软件漏洞
    * risky  有安全风险
    * instanceId  **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * instanceName  **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * isMultarch  是否是多架构镜像
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'registryName' => 'string',
            'offset' => 'int',
            'imageType' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'latestVersion' => 'bool',
            'imageSize' => 'int',
            'scanStatus' => 'string',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int',
            'startLatestSyncTime' => 'int',
            'endLatestSyncTime' => 'int',
            'hasMaliciousFile' => 'bool',
            'hasUnsafeSetting' => 'bool',
            'hasVul' => 'bool',
            'risky' => 'bool',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'isMultarch' => 'bool',
            'severityLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
    * latestVersion  仅关注最新版本镜像
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestSyncTime  **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestSyncTime  **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查风险
    * hasVul  是否存在软件漏洞
    * risky  有安全风险
    * instanceId  **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * instanceName  **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * isMultarch  是否是多架构镜像
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'registryName' => null,
        'offset' => 'int32',
        'imageType' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'latestVersion' => null,
        'imageSize' => 'int64',
        'scanStatus' => null,
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64',
        'startLatestSyncTime' => 'int64',
        'endLatestSyncTime' => 'int64',
        'hasMaliciousFile' => null,
        'hasUnsafeSetting' => null,
        'hasVul' => null,
        'risky' => null,
        'instanceId' => null,
        'instanceName' => null,
        'isMultarch' => null,
        'severityLevel' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
    * latestVersion  仅关注最新版本镜像
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestSyncTime  **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestSyncTime  **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查风险
    * hasVul  是否存在软件漏洞
    * risky  有安全风险
    * instanceId  **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * instanceName  **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * isMultarch  是否是多架构镜像
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'registryName' => 'registry_name',
            'offset' => 'offset',
            'imageType' => 'image_type',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'latestVersion' => 'latest_version',
            'imageSize' => 'image_size',
            'scanStatus' => 'scan_status',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time',
            'startLatestSyncTime' => 'start_latest_sync_time',
            'endLatestSyncTime' => 'end_latest_sync_time',
            'hasMaliciousFile' => 'has_malicious_file',
            'hasUnsafeSetting' => 'has_unsafe_setting',
            'hasVul' => 'has_vul',
            'risky' => 'risky',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'isMultarch' => 'is_multarch',
            'severityLevel' => 'severity_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
    * latestVersion  仅关注最新版本镜像
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestSyncTime  **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestSyncTime  **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查风险
    * hasVul  是否存在软件漏洞
    * risky  有安全风险
    * instanceId  **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * instanceName  **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * isMultarch  是否是多架构镜像
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'registryName' => 'setRegistryName',
            'offset' => 'setOffset',
            'imageType' => 'setImageType',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'latestVersion' => 'setLatestVersion',
            'imageSize' => 'setImageSize',
            'scanStatus' => 'setScanStatus',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime',
            'startLatestSyncTime' => 'setStartLatestSyncTime',
            'endLatestSyncTime' => 'setEndLatestSyncTime',
            'hasMaliciousFile' => 'setHasMaliciousFile',
            'hasUnsafeSetting' => 'setHasUnsafeSetting',
            'hasVul' => 'setHasVul',
            'risky' => 'setRisky',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'isMultarch' => 'setIsMultarch',
            'severityLevel' => 'setSeverityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
    * latestVersion  仅关注最新版本镜像
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * startLatestSyncTime  **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * endLatestSyncTime  **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查风险
    * hasVul  是否存在软件漏洞
    * risky  有安全风险
    * instanceId  **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * instanceName  **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    * isMultarch  是否是多架构镜像
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'registryName' => 'getRegistryName',
            'offset' => 'getOffset',
            'imageType' => 'getImageType',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'latestVersion' => 'getLatestVersion',
            'imageSize' => 'getImageSize',
            'scanStatus' => 'getScanStatus',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime',
            'startLatestSyncTime' => 'getStartLatestSyncTime',
            'endLatestSyncTime' => 'getEndLatestSyncTime',
            'hasMaliciousFile' => 'getHasMaliciousFile',
            'hasUnsafeSetting' => 'getHasUnsafeSetting',
            'hasVul' => 'getHasVul',
            'risky' => 'getRisky',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'isMultarch' => 'getIsMultarch',
            'severityLevel' => 'getSeverityLevel'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
        $this->container['startLatestSyncTime'] = isset($data['startLatestSyncTime']) ? $data['startLatestSyncTime'] : null;
        $this->container['endLatestSyncTime'] = isset($data['endLatestSyncTime']) ? $data['endLatestSyncTime'] : null;
        $this->container['hasMaliciousFile'] = isset($data['hasMaliciousFile']) ? $data['hasMaliciousFile'] : null;
        $this->container['hasUnsafeSetting'] = isset($data['hasUnsafeSetting']) ? $data['hasUnsafeSetting'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['isMultarch'] = isset($data['isMultarch']) ? $data['isMultarch'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 128)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryName']) && !preg_match("/^.*$/", $this->container['registryName'])) {
                $invalidProperties[] = "invalid value for 'registryName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^private_image|shared_image|instance_image|harbor|jfrog$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^private_image|shared_image|instance_image|harbor|jfrog$/.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/^latest_scan_time$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^latest_scan_time$/.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && !preg_match("/^(asc|desc)$/", $this->container['sortDir'])) {
                $invalidProperties[] = "invalid value for 'sortDir', must be conform to the pattern /^(asc|desc)$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && !preg_match("/^unscan|success|scanning|failed|waiting_for_scan$/", $this->container['scanStatus'])) {
                $invalidProperties[] = "invalid value for 'scanStatus', must be conform to the pattern /^unscan|success|scanning|failed|waiting_for_scan$/.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestSyncTime']) && ($this->container['startLatestSyncTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startLatestSyncTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startLatestSyncTime']) && ($this->container['startLatestSyncTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestSyncTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestSyncTime']) && ($this->container['endLatestSyncTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endLatestSyncTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endLatestSyncTime']) && ($this->container['endLatestSyncTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestSyncTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^.*$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceName']) && !preg_match("/^.*$/", $this->container['instanceName'])) {
                $invalidProperties[] = "invalid value for 'instanceName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 256)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && !preg_match("/(^((Security|Low|Medium|High),){0,3}(|(Security|Low|Medium|High))$)|(^$)/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /(^((Security|Low|Medium|High),){0,3}(|(Security|Low|Medium|High))$)|(^$)/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets registryName
    *  **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getRegistryName()
    {
        return $this->container['registryName'];
    }

    /**
    * Sets registryName
    *
    * @param string|null $registryName **参数解释**: 仓库名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
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
    * Gets imageType
    *  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值1-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets latestVersion
    *  仅关注最新版本镜像
    *
    * @return bool|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param bool|null $latestVersion 仅关注最新版本镜像
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
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
    * @param int|null $imageSize **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 取值0-2147483547 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
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
    * @param string|null $scanStatus **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan：未扫描。 - success：扫描完成。 - scanning：扫描中。 - failed：扫描失败。 - waiting_for_scan：等待扫描。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets startLatestUpdateTime
    *  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getStartLatestUpdateTime()
    {
        return $this->container['startLatestUpdateTime'];
    }

    /**
    * Sets startLatestUpdateTime
    *
    * @param int|null $startLatestUpdateTime **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStartLatestUpdateTime($startLatestUpdateTime)
    {
        $this->container['startLatestUpdateTime'] = $startLatestUpdateTime;
        return $this;
    }

    /**
    * Gets endLatestUpdateTime
    *  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getEndLatestUpdateTime()
    {
        return $this->container['endLatestUpdateTime'];
    }

    /**
    * Sets endLatestUpdateTime
    *
    * @param int|null $endLatestUpdateTime **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndLatestUpdateTime($endLatestUpdateTime)
    {
        $this->container['endLatestUpdateTime'] = $endLatestUpdateTime;
        return $this;
    }

    /**
    * Gets startLatestScanTime
    *  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getStartLatestScanTime()
    {
        return $this->container['startLatestScanTime'];
    }

    /**
    * Sets startLatestScanTime
    *
    * @param int|null $startLatestScanTime **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStartLatestScanTime($startLatestScanTime)
    {
        $this->container['startLatestScanTime'] = $startLatestScanTime;
        return $this;
    }

    /**
    * Gets endLatestScanTime
    *  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getEndLatestScanTime()
    {
        return $this->container['endLatestScanTime'];
    }

    /**
    * Sets endLatestScanTime
    *
    * @param int|null $endLatestScanTime **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndLatestScanTime($endLatestScanTime)
    {
        $this->container['endLatestScanTime'] = $endLatestScanTime;
        return $this;
    }

    /**
    * Gets startLatestSyncTime
    *  **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getStartLatestSyncTime()
    {
        return $this->container['startLatestSyncTime'];
    }

    /**
    * Sets startLatestSyncTime
    *
    * @param int|null $startLatestSyncTime **参数解释**: 最近一次同步完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStartLatestSyncTime($startLatestSyncTime)
    {
        $this->container['startLatestSyncTime'] = $startLatestSyncTime;
        return $this;
    }

    /**
    * Gets endLatestSyncTime
    *  **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getEndLatestSyncTime()
    {
        return $this->container['endLatestSyncTime'];
    }

    /**
    * Sets endLatestSyncTime
    *
    * @param int|null $endLatestSyncTime **参数解释**: 最近一次同步完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 取值0-9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndLatestSyncTime($endLatestSyncTime)
    {
        $this->container['endLatestSyncTime'] = $endLatestSyncTime;
        return $this;
    }

    /**
    * Gets hasMaliciousFile
    *  是否存在恶意文件
    *
    * @return bool|null
    */
    public function getHasMaliciousFile()
    {
        return $this->container['hasMaliciousFile'];
    }

    /**
    * Sets hasMaliciousFile
    *
    * @param bool|null $hasMaliciousFile 是否存在恶意文件
    *
    * @return $this
    */
    public function setHasMaliciousFile($hasMaliciousFile)
    {
        $this->container['hasMaliciousFile'] = $hasMaliciousFile;
        return $this;
    }

    /**
    * Gets hasUnsafeSetting
    *  是否存在基线检查风险
    *
    * @return bool|null
    */
    public function getHasUnsafeSetting()
    {
        return $this->container['hasUnsafeSetting'];
    }

    /**
    * Sets hasUnsafeSetting
    *
    * @param bool|null $hasUnsafeSetting 是否存在基线检查风险
    *
    * @return $this
    */
    public function setHasUnsafeSetting($hasUnsafeSetting)
    {
        $this->container['hasUnsafeSetting'] = $hasUnsafeSetting;
        return $this;
    }

    /**
    * Gets hasVul
    *  是否存在软件漏洞
    *
    * @return bool|null
    */
    public function getHasVul()
    {
        return $this->container['hasVul'];
    }

    /**
    * Sets hasVul
    *
    * @param bool|null $hasVul 是否存在软件漏洞
    *
    * @return $this
    */
    public function setHasVul($hasVul)
    {
        $this->container['hasVul'] = $hasVul;
        return $this;
    }

    /**
    * Gets risky
    *  有安全风险
    *
    * @return bool|null
    */
    public function getRisky()
    {
        return $this->container['risky'];
    }

    /**
    * Sets risky
    *
    * @param bool|null $risky 有安全风险
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**： 企业仓库实例ID，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**： 企业镜像实例名称，SWR企业版可以使用该参数 **约束限制**： 不涉及 **取值范围**： 字符长度0-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets isMultarch
    *  是否是多架构镜像
    *
    * @return bool|null
    */
    public function getIsMultarch()
    {
        return $this->container['isMultarch'];
    }

    /**
    * Sets isMultarch
    *
    * @param bool|null $isMultarch 是否是多架构镜像
    *
    * @return $this
    */
    public function setIsMultarch($isMultarch)
    {
        $this->container['isMultarch'] = $isMultarch;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **约束限制**: 不涉及 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
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

