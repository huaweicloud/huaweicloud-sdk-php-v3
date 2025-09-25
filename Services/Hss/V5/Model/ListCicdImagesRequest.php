<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCicdImagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCicdImagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageId  **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
    * risky  **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'imageId' => 'string',
            'cicdName' => 'string',
            'latestVersion' => 'bool',
            'imageSize' => 'int',
            'scanStatus' => 'string',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int',
            'hasMaliciousFile' => 'bool',
            'hasUnsafeSetting' => 'bool',
            'hasVul' => 'bool',
            'severityLevel' => 'string',
            'risky' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageId  **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
    * risky  **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'imageId' => null,
        'cicdName' => null,
        'latestVersion' => null,
        'imageSize' => 'int64',
        'scanStatus' => null,
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64',
        'hasMaliciousFile' => null,
        'hasUnsafeSetting' => null,
        'hasVul' => null,
        'severityLevel' => null,
        'risky' => null
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
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageId  **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
    * risky  **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'imageId' => 'image_id',
            'cicdName' => 'cicd_name',
            'latestVersion' => 'latest_version',
            'imageSize' => 'image_size',
            'scanStatus' => 'scan_status',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time',
            'hasMaliciousFile' => 'has_malicious_file',
            'hasUnsafeSetting' => 'has_unsafe_setting',
            'hasVul' => 'has_vul',
            'severityLevel' => 'severity_level',
            'risky' => 'risky'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageId  **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
    * risky  **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'imageId' => 'setImageId',
            'cicdName' => 'setCicdName',
            'latestVersion' => 'setLatestVersion',
            'imageSize' => 'setImageSize',
            'scanStatus' => 'setScanStatus',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime',
            'hasMaliciousFile' => 'setHasMaliciousFile',
            'hasUnsafeSetting' => 'setHasUnsafeSetting',
            'hasVul' => 'setHasVul',
            'severityLevel' => 'setSeverityLevel',
            'risky' => 'setRisky'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位。  **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度1-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度1-64位
    * sortKey  **参数解释**: 可排序字段 **约束限制**: 不涉及 **取值范围**: - latest_scan_time：最近扫描时间。  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * imageId  **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * scanStatus  **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
    * risky  **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'imageId' => 'getImageId',
            'cicdName' => 'getCicdName',
            'latestVersion' => 'getLatestVersion',
            'imageSize' => 'getImageSize',
            'scanStatus' => 'getScanStatus',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime',
            'hasMaliciousFile' => 'getHasMaliciousFile',
            'hasUnsafeSetting' => 'getHasUnsafeSetting',
            'hasVul' => 'getHasVul',
            'severityLevel' => 'getSeverityLevel',
            'risky' => 'getRisky'
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
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
        $this->container['hasMaliciousFile'] = isset($data['hasMaliciousFile']) ? $data['hasMaliciousFile'] : null;
        $this->container['hasUnsafeSetting'] = isset($data['hasUnsafeSetting']) ? $data['hasUnsafeSetting'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && !preg_match("/^.*$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdName']) && !preg_match("/^.*$/", $this->container['cicdName'])) {
                $invalidProperties[] = "invalid value for 'cicdName', must be conform to the pattern /^.*$/.";
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
    * Gets imageId
    *  **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $imageId **参数解释**: cicd镜像标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets cicdName
    *  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getCicdName()
    {
        return $this->container['cicdName'];
    }

    /**
    * Sets cicdName
    *
    * @param string|null $cicdName **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCicdName($cicdName)
    {
        $this->container['cicdName'] = $cicdName;
        return $this;
    }

    /**
    * Gets latestVersion
    *  **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $latestVersion **参数解释**: 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    *  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    * @param int|null $imageSize **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    *  **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
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
    * @param string|null $scanStatus **参数解释** 扫描状态 **约束限制** 不涉及 **取值范围** - unscan : 未扫描。 - success : 扫描完成。 - scanning : 扫描中 - failed : 扫描失败。 - waiting_for_scan : 等待扫描。  **默认取值**: 不涉及
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
    *  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    * @param int|null $startLatestUpdateTime **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    *  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    * @param int|null $endLatestUpdateTime **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    *  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    * @param int|null $startLatestScanTime **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    *  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
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
    * @param int|null $endLatestScanTime **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setEndLatestScanTime($endLatestScanTime)
    {
        $this->container['endLatestScanTime'] = $endLatestScanTime;
        return $this;
    }

    /**
    * Gets hasMaliciousFile
    *  **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $hasMaliciousFile **参数解释**: 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    *  **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $hasUnsafeSetting **参数解释**: 是否存在基线检查 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    *  **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $hasVul **参数解释**: 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasVul($hasVul)
    {
        $this->container['hasVul'] = $hasVul;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释** 镜像风险程度，在镜像扫描完成后展示 **约束限制** 不涉及 **取值范围** - Security : 安全。 - Low : 低危。 - Medium : 中危 - High : 高危。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets risky
    *  **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $risky **参数解释**: 有安全风险 **约束限制**: 不涉及 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
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

