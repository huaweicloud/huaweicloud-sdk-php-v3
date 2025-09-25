<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CICDImageResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CICDImageResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
    * cicdName  **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    * latestVersion  **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
    * scanStatus  **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
    * scanFailedDesc  **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
    * scanFailedCode  **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
    * latestUpdateTime  **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'cicdName' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'registryName' => 'string',
            'imageType' => 'string',
            'registryType' => 'string',
            'latestVersion' => 'bool',
            'scanStatus' => 'string',
            'scanFailedDesc' => 'string',
            'scanFailedCode' => 'string',
            'imageSize' => 'int',
            'latestUpdateTime' => 'int',
            'latestScanTime' => 'int',
            'vulNum' => 'int',
            'unsafeSettingNum' => 'int',
            'maliciousFileNum' => 'int',
            'severityLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
    * cicdName  **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    * latestVersion  **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
    * scanStatus  **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
    * scanFailedDesc  **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
    * scanFailedCode  **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
    * latestUpdateTime  **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'cicdName' => null,
        'namespace' => null,
        'imageName' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'registryName' => null,
        'imageType' => null,
        'registryType' => null,
        'latestVersion' => null,
        'scanStatus' => null,
        'scanFailedDesc' => null,
        'scanFailedCode' => null,
        'imageSize' => 'int64',
        'latestUpdateTime' => 'int64',
        'latestScanTime' => 'int64',
        'vulNum' => 'int32',
        'unsafeSettingNum' => 'int32',
        'maliciousFileNum' => 'int32',
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
    * imageId  **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
    * cicdName  **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    * latestVersion  **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
    * scanStatus  **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
    * scanFailedDesc  **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
    * scanFailedCode  **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
    * latestUpdateTime  **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'cicdName' => 'cicd_name',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'registryName' => 'registry_name',
            'imageType' => 'image_type',
            'registryType' => 'registry_type',
            'latestVersion' => 'latest_version',
            'scanStatus' => 'scan_status',
            'scanFailedDesc' => 'scan_failed_desc',
            'scanFailedCode' => 'scan_failed_code',
            'imageSize' => 'image_size',
            'latestUpdateTime' => 'latest_update_time',
            'latestScanTime' => 'latest_scan_time',
            'vulNum' => 'vul_num',
            'unsafeSettingNum' => 'unsafe_setting_num',
            'maliciousFileNum' => 'malicious_file_num',
            'severityLevel' => 'severity_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
    * cicdName  **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    * latestVersion  **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
    * scanStatus  **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
    * scanFailedDesc  **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
    * scanFailedCode  **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
    * latestUpdateTime  **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'cicdName' => 'setCicdName',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'registryName' => 'setRegistryName',
            'imageType' => 'setImageType',
            'registryType' => 'setRegistryType',
            'latestVersion' => 'setLatestVersion',
            'scanStatus' => 'setScanStatus',
            'scanFailedDesc' => 'setScanFailedDesc',
            'scanFailedCode' => 'setScanFailedCode',
            'imageSize' => 'setImageSize',
            'latestUpdateTime' => 'setLatestUpdateTime',
            'latestScanTime' => 'setLatestScanTime',
            'vulNum' => 'setVulNum',
            'unsafeSettingNum' => 'setUnsafeSettingNum',
            'maliciousFileNum' => 'setMaliciousFileNum',
            'severityLevel' => 'setSeverityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
    * cicdName  **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * imageType  **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    * latestVersion  **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
    * scanStatus  **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
    * scanFailedDesc  **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
    * scanFailedCode  **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
    * latestUpdateTime  **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * latestScanTime  **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'cicdName' => 'getCicdName',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'registryName' => 'getRegistryName',
            'imageType' => 'getImageType',
            'registryType' => 'getRegistryType',
            'latestVersion' => 'getLatestVersion',
            'scanStatus' => 'getScanStatus',
            'scanFailedDesc' => 'getScanFailedDesc',
            'scanFailedCode' => 'getScanFailedCode',
            'imageSize' => 'getImageSize',
            'latestUpdateTime' => 'getLatestUpdateTime',
            'latestScanTime' => 'getLatestScanTime',
            'vulNum' => 'getVulNum',
            'unsafeSettingNum' => 'getUnsafeSettingNum',
            'maliciousFileNum' => 'getMaliciousFileNum',
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['scanFailedDesc'] = isset($data['scanFailedDesc']) ? $data['scanFailedDesc'] : null;
        $this->container['scanFailedCode'] = isset($data['scanFailedCode']) ? $data['scanFailedCode'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['latestUpdateTime'] = isset($data['latestUpdateTime']) ? $data['latestUpdateTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['unsafeSettingNum'] = isset($data['unsafeSettingNum']) ? $data['unsafeSettingNum'] : null;
        $this->container['maliciousFileNum'] = isset($data['maliciousFileNum']) ? $data['maliciousFileNum'] : null;
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
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 64)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 0)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) > 128)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanFailedCode']) && (mb_strlen($this->container['scanFailedCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanFailedCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanFailedCode']) && (mb_strlen($this->container['scanFailedCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanFailedCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 256)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
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
    * Gets imageId
    *  **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
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
    * @param string|null $imageId **参数解释**: cicd镜像标识 **取值范围**: 字符长度0-128位
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
    *  **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
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
    * @param string|null $cicdName **参数解释**: cicd名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setCicdName($cicdName)
    {
        $this->container['cicdName'] = $cicdName;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
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
    * @param string|null $namespace **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
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
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageDigest
    *  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
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
    * @param string|null $imageDigest **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
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
    *  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
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
    *  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
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
    * @param string|null $registryName **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
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
    * @param string|null $imageType **参数解释**： 镜像类型 **取值范围**： - cicd ：cicd镜像。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets registryType
    *  **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    *
    * @return string|null
    */
    public function getRegistryType()
    {
        return $this->container['registryType'];
    }

    /**
    * Sets registryType
    *
    * @param string|null $registryType **参数解释**： 镜像仓库类型 **取值范围**： - cicd ：cicd镜像。
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
        return $this;
    }

    /**
    * Gets latestVersion
    *  **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
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
    * @param bool|null $latestVersion **参数解释**: 是否是最新版本 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
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
    * @param string|null $scanStatus **参数解释**: 扫描状态 **取值范围**: - unscan ：未扫描。 - success ：扫描完成。 - scanning ：正在扫描。 - failed ：扫描失败。 - download_failed ：下载失败。 - image_oversized ：镜像超大。 - waiting_for_scan ：等待扫描。
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets scanFailedDesc
    *  **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
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
    * @param string|null $scanFailedDesc **参数解释**: 扫描失败原因，包含如下16种。   - 未知错误   - 认证失败   - 镜像下载失败。请向技术人员寻求帮助。   - 镜像大小超限，不支持扫描。建议精简镜像。   - 获取镜像详细信息失败，镜像仓中可能已经不存在此镜像。请重新同步最新镜像。   - 镜像层数超限，不支持扫描。建议精简镜像。   - 漏洞扫描失败   - 文件扫描失败   - 软件扫描失败   - 敏感信息核查失败   - 基线检查失败   - 软件合规检查失败   - 基础镜像信息查询失败   - 响应超时   - 数据库错误   - 发送扫描请求失败 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setScanFailedDesc($scanFailedDesc)
    {
        $this->container['scanFailedDesc'] = $scanFailedDesc;
        return $this;
    }

    /**
    * Gets scanFailedCode
    *  **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getScanFailedCode()
    {
        return $this->container['scanFailedCode'];
    }

    /**
    * Sets scanFailedCode
    *
    * @param string|null $scanFailedCode **参数解释**: 扫描失败原因code，包含如下16种。   - \"unknown_error\"   - \"authentication_failed\"   - \"download_failed\"   - \"image_over_sized\"   - \"get_detail_info_not_found\"   - \"image_layer_over_sized\"   - \"failed_to_scan_vulnerability\"   - \"failed_to_scan_file\"   - \"failed_to_scan_software\"   - \"failed_to_check_sensitive_information\"   - \"failed_to_check_baseline\"   - \"failed_to_check_software_compliance\"   - \"failed_to_query_basic_image_information\"   - \"response_timed_out\"   - \"database_error\"   - \"failed_to_send_the_scan_request\" **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setScanFailedCode($scanFailedCode)
    {
        $this->container['scanFailedCode'] = $scanFailedCode;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
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
    * @param int|null $imageSize **参数解释**: 镜像大小 **取值范围**: 最小值0，最大值2147483547
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
    *  **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $latestUpdateTime **参数解释**: 镜像版本最后更新时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
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
    *  **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $latestScanTime **参数解释**: 最近扫描时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
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
    *  **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $vulNum **参数解释**: 漏洞个数 **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $unsafeSettingNum **参数解释**: 基线扫描未通过数 **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $maliciousFileNum **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMaliciousFileNum($maliciousFileNum)
    {
        $this->container['maliciousFileNum'] = $maliciousFileNum;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
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
    * @param string|null $severityLevel **参数解释**: 镜像风险程度，在镜像扫描完成后展示 **取值范围**: - Security：安全。 - Low：低危。 - Medium：中危。 - High：高危。
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

