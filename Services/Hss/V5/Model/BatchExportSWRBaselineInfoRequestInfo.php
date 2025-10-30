<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchExportSWRBaselineInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchExportSWRBaselineInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageIdList  **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * operateAll  **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * risky  **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
    * instanceName  **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * instanceId  **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    * buildCommandRiskName  **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * buildCommandRuleIdList  **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    * hasContainer  **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageIdList' => 'string[]',
            'operateAll' => 'bool',
            'imageType' => 'string',
            'vulType' => 'string',
            'scanStatus' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageId' => 'string',
            'latestVersion' => 'bool',
            'imageSize' => 'int',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int',
            'hasMaliciousFile' => 'bool',
            'hasVul' => 'bool',
            'hasUnsafeSetting' => 'bool',
            'risky' => 'bool',
            'severityLevel' => 'string',
            'instanceName' => 'string',
            'instanceId' => 'string',
            'cicdName' => 'string',
            'buildCommandRiskLevel' => 'string',
            'buildCommandRiskName' => 'string',
            'buildCommandRuleIdList' => 'string[]',
            'hasContainer' => 'bool',
            'vulIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageIdList  **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * operateAll  **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * risky  **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
    * instanceName  **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * instanceId  **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    * buildCommandRiskName  **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * buildCommandRuleIdList  **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    * hasContainer  **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageIdList' => null,
        'operateAll' => null,
        'imageType' => null,
        'vulType' => null,
        'scanStatus' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageId' => null,
        'latestVersion' => null,
        'imageSize' => 'int64',
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64',
        'hasMaliciousFile' => null,
        'hasVul' => null,
        'hasUnsafeSetting' => null,
        'risky' => null,
        'severityLevel' => null,
        'instanceName' => null,
        'instanceId' => null,
        'cicdName' => null,
        'buildCommandRiskLevel' => null,
        'buildCommandRiskName' => null,
        'buildCommandRuleIdList' => null,
        'hasContainer' => null,
        'vulIdList' => null
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
    * imageIdList  **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * operateAll  **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * risky  **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
    * instanceName  **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * instanceId  **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    * buildCommandRiskName  **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * buildCommandRuleIdList  **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    * hasContainer  **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageIdList' => 'image_id_list',
            'operateAll' => 'operate_all',
            'imageType' => 'image_type',
            'vulType' => 'vul_type',
            'scanStatus' => 'scan_status',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageId' => 'image_id',
            'latestVersion' => 'latest_version',
            'imageSize' => 'image_size',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time',
            'hasMaliciousFile' => 'has_malicious_file',
            'hasVul' => 'has_vul',
            'hasUnsafeSetting' => 'has_unsafe_setting',
            'risky' => 'risky',
            'severityLevel' => 'severity_level',
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'cicdName' => 'cicd_name',
            'buildCommandRiskLevel' => 'build_command_risk_level',
            'buildCommandRiskName' => 'build_command_risk_name',
            'buildCommandRuleIdList' => 'build_command_rule_id_list',
            'hasContainer' => 'has_container',
            'vulIdList' => 'vul_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageIdList  **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * operateAll  **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * risky  **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
    * instanceName  **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * instanceId  **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    * buildCommandRiskName  **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * buildCommandRuleIdList  **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    * hasContainer  **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'imageIdList' => 'setImageIdList',
            'operateAll' => 'setOperateAll',
            'imageType' => 'setImageType',
            'vulType' => 'setVulType',
            'scanStatus' => 'setScanStatus',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageId' => 'setImageId',
            'latestVersion' => 'setLatestVersion',
            'imageSize' => 'setImageSize',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime',
            'hasMaliciousFile' => 'setHasMaliciousFile',
            'hasVul' => 'setHasVul',
            'hasUnsafeSetting' => 'setHasUnsafeSetting',
            'risky' => 'setRisky',
            'severityLevel' => 'setSeverityLevel',
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'cicdName' => 'setCicdName',
            'buildCommandRiskLevel' => 'setBuildCommandRiskLevel',
            'buildCommandRiskName' => 'setBuildCommandRiskName',
            'buildCommandRuleIdList' => 'setBuildCommandRuleIdList',
            'hasContainer' => 'setHasContainer',
            'vulIdList' => 'setVulIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageIdList  **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * operateAll  **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageType  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
    * vulType  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * latestVersion  **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * imageSize  **参数解释**: 镜像大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestUpdateTime  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestUpdateTime  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * startLatestScanTime  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * endLatestScanTime  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
    * hasMaliciousFile  **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasVul  **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * hasUnsafeSetting  **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * risky  **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
    * instanceName  **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * instanceId  **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * cicdName  **参数解释**: cicd名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    * buildCommandRiskName  **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * buildCommandRuleIdList  **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    * hasContainer  **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    * vulIdList  **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'imageIdList' => 'getImageIdList',
            'operateAll' => 'getOperateAll',
            'imageType' => 'getImageType',
            'vulType' => 'getVulType',
            'scanStatus' => 'getScanStatus',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageId' => 'getImageId',
            'latestVersion' => 'getLatestVersion',
            'imageSize' => 'getImageSize',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime',
            'hasMaliciousFile' => 'getHasMaliciousFile',
            'hasVul' => 'getHasVul',
            'hasUnsafeSetting' => 'getHasUnsafeSetting',
            'risky' => 'getRisky',
            'severityLevel' => 'getSeverityLevel',
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'cicdName' => 'getCicdName',
            'buildCommandRiskLevel' => 'getBuildCommandRiskLevel',
            'buildCommandRiskName' => 'getBuildCommandRiskName',
            'buildCommandRuleIdList' => 'getBuildCommandRuleIdList',
            'hasContainer' => 'getHasContainer',
            'vulIdList' => 'getVulIdList'
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
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
        $this->container['hasMaliciousFile'] = isset($data['hasMaliciousFile']) ? $data['hasMaliciousFile'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['hasUnsafeSetting'] = isset($data['hasUnsafeSetting']) ? $data['hasUnsafeSetting'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['buildCommandRiskLevel'] = isset($data['buildCommandRiskLevel']) ? $data['buildCommandRiskLevel'] : null;
        $this->container['buildCommandRiskName'] = isset($data['buildCommandRiskName']) ? $data['buildCommandRiskName'] : null;
        $this->container['buildCommandRuleIdList'] = isset($data['buildCommandRuleIdList']) ? $data['buildCommandRuleIdList'] : null;
        $this->container['hasContainer'] = isset($data['hasContainer']) ? $data['hasContainer'] : null;
        $this->container['vulIdList'] = isset($data['vulIdList']) ? $data['vulIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^(private_image|shared_image|local_image|instance_image|cicd|harbor|jfrog)$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^(private_image|shared_image|local_image|instance_image|cicd|harbor|jfrog)$/.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulType']) && !preg_match("/^(linux_vul|app_vul)$/", $this->container['vulType'])) {
                $invalidProperties[] = "invalid value for 'vulType', must be conform to the pattern /^(linux_vul|app_vul)$/.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanStatus']) && !preg_match("/^(unscan|success|scanning|failed|download_failed|image_oversized)$/", $this->container['scanStatus'])) {
                $invalidProperties[] = "invalid value for 'scanStatus', must be conform to the pattern /^(unscan|success|scanning|failed|download_failed|image_oversized)$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 65535)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 2147483547.";
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
            if (!is_null($this->container['severityLevel']) && !preg_match("/^Security|Low|Medium|High$/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /^Security|Low|Medium|High$/.";
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
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^.*$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['buildCommandRiskLevel']) && (mb_strlen($this->container['buildCommandRiskLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'buildCommandRiskLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['buildCommandRiskLevel']) && (mb_strlen($this->container['buildCommandRiskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'buildCommandRiskLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['buildCommandRiskLevel']) && !preg_match("/^critical|high|medium|low$/", $this->container['buildCommandRiskLevel'])) {
                $invalidProperties[] = "invalid value for 'buildCommandRiskLevel', must be conform to the pattern /^critical|high|medium|low$/.";
            }
            if (!is_null($this->container['buildCommandRiskName']) && (mb_strlen($this->container['buildCommandRiskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'buildCommandRiskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['buildCommandRiskName']) && (mb_strlen($this->container['buildCommandRiskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'buildCommandRiskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['buildCommandRiskName']) && !preg_match("/^.*$/", $this->container['buildCommandRiskName'])) {
                $invalidProperties[] = "invalid value for 'buildCommandRiskName', must be conform to the pattern /^.*$/.";
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
    * Gets imageIdList
    *  **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
    * Sets imageIdList
    *
    * @param string[]|null $imageIdList **参数解释**: 要导出的镜像信息列表，operate_all参数为false时需要填写批量查询条件,image_id 镜像id，唯一镜像标识（注：对私有镜像和共享镜像来说是镜像列表返回的id） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageIdList($imageIdList)
    {
        $this->container['imageIdList'] = $imageIdList;
        return $this;
    }

    /**
    * Gets operateAll
    *  **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll **参数解释**： 若为true全量查询，可筛选条件全部查询 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
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
    * @param string|null $imageType **参数解释**: 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image: 私有镜像。 - shared_image: 共享镜像。 - local_image: 本地镜像。 - instance_image: 企业镜像。 - harbor: Harbor镜像。 - jfrog: Jfrog镜像。 - cicd: cicd镜像。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets vulType
    *  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul : linux漏洞。 - app_vul : 应用漏洞。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
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
    * @param string|null $scanStatus **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - unscan: 未扫描。 - success: 扫描完成。 - scanning: 扫描中。 - failed: 扫描失败。 - download_failed: 下载失败。 - image_oversized: 镜像超大。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
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
    * @param string|null $namespace **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
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
    *  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
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
    * @param string|null $imageName **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
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
    *  **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
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
    * @param string|null $imageVersion **参数解释**: 镜像版本名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-65535位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $imageId **参数解释**: 镜像id **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets latestVersion
    *  **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $latestVersion **参数解释**： 仅关注最新版本镜像 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
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
    * Gets startLatestUpdateTime
    *  **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    * @param int|null $startLatestUpdateTime **参数解释**: 创建时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    *  **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    * @param int|null $endLatestUpdateTime **参数解释**: 创建时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    *  **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    * @param int|null $startLatestScanTime **参数解释**: 最近一次扫描完成时间开始日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    *  **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    * @param int|null $endLatestScanTime **参数解释**: 最近一次扫描完成时间结束日期，时间单位 毫秒（ms） **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2147483547 **默认取值**: 不涉及
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
    *  **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $hasMaliciousFile **参数解释**： 是否存在恶意文件 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasMaliciousFile($hasMaliciousFile)
    {
        $this->container['hasMaliciousFile'] = $hasMaliciousFile;
        return $this;
    }

    /**
    * Gets hasVul
    *  **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $hasVul **参数解释**： 是否存在软件漏洞 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasVul($hasVul)
    {
        $this->container['hasVul'] = $hasVul;
        return $this;
    }

    /**
    * Gets hasUnsafeSetting
    *  **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $hasUnsafeSetting **参数解释**： 是否存在基线检查 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasUnsafeSetting($hasUnsafeSetting)
    {
        $this->container['hasUnsafeSetting'] = $hasUnsafeSetting;
        return $this;
    }

    /**
    * Gets risky
    *  **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
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
    * @param bool|null $risky **参数解释**： 是否有安全风险 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释**: 镜像风险程度，在镜像扫描完成后展示，包含如下: **约束限制**: 不涉及 **取值范围**: - Security : 安全。 - Low : 低危。 - Medium : 中危。 - High : 高危。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $instanceName **参数解释**: 企业镜像实例名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $instanceId **参数解释**: 企业仓库实例ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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
    * Gets buildCommandRiskLevel
    *  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getBuildCommandRiskLevel()
    {
        return $this->container['buildCommandRiskLevel'];
    }

    /**
    * Sets buildCommandRiskLevel
    *
    * @param string|null $buildCommandRiskLevel **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重。 - high ：高危。 - medium ：中危。 - low ：低危。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBuildCommandRiskLevel($buildCommandRiskLevel)
    {
        $this->container['buildCommandRiskLevel'] = $buildCommandRiskLevel;
        return $this;
    }

    /**
    * Gets buildCommandRiskName
    *  **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getBuildCommandRiskName()
    {
        return $this->container['buildCommandRiskName'];
    }

    /**
    * Sets buildCommandRiskName
    *
    * @param string|null $buildCommandRiskName **参数解释**: 构建指令风险名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBuildCommandRiskName($buildCommandRiskName)
    {
        $this->container['buildCommandRiskName'] = $buildCommandRiskName;
        return $this;
    }

    /**
    * Gets buildCommandRuleIdList
    *  **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getBuildCommandRuleIdList()
    {
        return $this->container['buildCommandRuleIdList'];
    }

    /**
    * Sets buildCommandRuleIdList
    *
    * @param string[]|null $buildCommandRuleIdList **参数解释**: 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取 **约束限制**: 不涉及 **取值范围**: 字符长度1-200位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBuildCommandRuleIdList($buildCommandRuleIdList)
    {
        $this->container['buildCommandRuleIdList'] = $buildCommandRuleIdList;
        return $this;
    }

    /**
    * Gets hasContainer
    *  **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasContainer()
    {
        return $this->container['hasContainer'];
    }

    /**
    * Sets hasContainer
    *
    * @param bool|null $hasContainer **参数解释**： 是否存在容器 **约束限制**: 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasContainer($hasContainer)
    {
        $this->container['hasContainer'] = $hasContainer;
        return $this;
    }

    /**
    * Gets vulIdList
    *  **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getVulIdList()
    {
        return $this->container['vulIdList'];
    }

    /**
    * Sets vulIdList
    *
    * @param string[]|null $vulIdList **参数解释**: 导出镜像漏洞时的漏洞id列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2048 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulIdList($vulIdList)
    {
        $this->container['vulIdList'] = $vulIdList;
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

