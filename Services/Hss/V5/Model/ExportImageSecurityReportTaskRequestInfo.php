<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportImageSecurityReportTaskRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportImageSecurityReportTaskRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exportSize  导出数据条数
    * securityReportType  **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    * imageIdList  要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
    * operateAll  若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
    * imageType  **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageId  镜像id
    * latestVersion  仅关注最新版本镜像
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasVul  是否存在软件漏洞
    * hasUnsafeSetting  是否存在基线检查
    * risky  是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
    * severityLevel  镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
    * instanceName  企业镜像实例名称
    * cicdName  cicd名称
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
    * buildCommandRiskName  构建指令风险名称
    * buildCommandRuleIdList  要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exportSize' => 'int',
            'securityReportType' => 'string',
            'imageIdList' => 'string[]',
            'operateAll' => 'bool',
            'imageType' => 'string',
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
            'cicdName' => 'string',
            'buildCommandRiskLevel' => 'string',
            'buildCommandRiskName' => 'string',
            'buildCommandRuleIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exportSize  导出数据条数
    * securityReportType  **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    * imageIdList  要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
    * operateAll  若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
    * imageType  **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageId  镜像id
    * latestVersion  仅关注最新版本镜像
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasVul  是否存在软件漏洞
    * hasUnsafeSetting  是否存在基线检查
    * risky  是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
    * severityLevel  镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
    * instanceName  企业镜像实例名称
    * cicdName  cicd名称
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
    * buildCommandRiskName  构建指令风险名称
    * buildCommandRuleIdList  要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exportSize' => 'int32',
        'securityReportType' => null,
        'imageIdList' => null,
        'operateAll' => null,
        'imageType' => null,
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
        'cicdName' => null,
        'buildCommandRiskLevel' => null,
        'buildCommandRiskName' => null,
        'buildCommandRuleIdList' => null
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
    * exportSize  导出数据条数
    * securityReportType  **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    * imageIdList  要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
    * operateAll  若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
    * imageType  **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageId  镜像id
    * latestVersion  仅关注最新版本镜像
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasVul  是否存在软件漏洞
    * hasUnsafeSetting  是否存在基线检查
    * risky  是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
    * severityLevel  镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
    * instanceName  企业镜像实例名称
    * cicdName  cicd名称
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
    * buildCommandRiskName  构建指令风险名称
    * buildCommandRuleIdList  要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exportSize' => 'export_size',
            'securityReportType' => 'security_report_type',
            'imageIdList' => 'image_id_list',
            'operateAll' => 'operate_all',
            'imageType' => 'image_type',
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
            'cicdName' => 'cicd_name',
            'buildCommandRiskLevel' => 'build_command_risk_level',
            'buildCommandRiskName' => 'build_command_risk_name',
            'buildCommandRuleIdList' => 'build_command_rule_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exportSize  导出数据条数
    * securityReportType  **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    * imageIdList  要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
    * operateAll  若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
    * imageType  **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageId  镜像id
    * latestVersion  仅关注最新版本镜像
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasVul  是否存在软件漏洞
    * hasUnsafeSetting  是否存在基线检查
    * risky  是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
    * severityLevel  镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
    * instanceName  企业镜像实例名称
    * cicdName  cicd名称
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
    * buildCommandRiskName  构建指令风险名称
    * buildCommandRuleIdList  要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
    *
    * @var string[]
    */
    protected static $setters = [
            'exportSize' => 'setExportSize',
            'securityReportType' => 'setSecurityReportType',
            'imageIdList' => 'setImageIdList',
            'operateAll' => 'setOperateAll',
            'imageType' => 'setImageType',
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
            'cicdName' => 'setCicdName',
            'buildCommandRiskLevel' => 'setBuildCommandRiskLevel',
            'buildCommandRiskName' => 'setBuildCommandRiskName',
            'buildCommandRuleIdList' => 'setBuildCommandRuleIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exportSize  导出数据条数
    * securityReportType  **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    * imageIdList  要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
    * operateAll  若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
    * imageType  **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageId  镜像id
    * latestVersion  仅关注最新版本镜像
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasVul  是否存在软件漏洞
    * hasUnsafeSetting  是否存在基线检查
    * risky  是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
    * severityLevel  镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
    * instanceName  企业镜像实例名称
    * cicdName  cicd名称
    * buildCommandRiskLevel  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
    * buildCommandRiskName  构建指令风险名称
    * buildCommandRuleIdList  要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
    *
    * @var string[]
    */
    protected static $getters = [
            'exportSize' => 'getExportSize',
            'securityReportType' => 'getSecurityReportType',
            'imageIdList' => 'getImageIdList',
            'operateAll' => 'getOperateAll',
            'imageType' => 'getImageType',
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
            'cicdName' => 'getCicdName',
            'buildCommandRiskLevel' => 'getBuildCommandRiskLevel',
            'buildCommandRiskName' => 'getBuildCommandRiskName',
            'buildCommandRuleIdList' => 'getBuildCommandRuleIdList'
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
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['securityReportType'] = isset($data['securityReportType']) ? $data['securityReportType'] : null;
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
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
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['buildCommandRiskLevel'] = isset($data['buildCommandRiskLevel']) ? $data['buildCommandRiskLevel'] : null;
        $this->container['buildCommandRiskName'] = isset($data['buildCommandRiskName']) ? $data['buildCommandRiskName'] : null;
        $this->container['buildCommandRuleIdList'] = isset($data['buildCommandRuleIdList']) ? $data['buildCommandRuleIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['exportSize'] === null) {
            $invalidProperties[] = "'exportSize' can't be null";
        }
            if (($this->container['exportSize'] > 200000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 200000.";
            }
            if (($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
            }
        if ($this->container['securityReportType'] === null) {
            $invalidProperties[] = "'securityReportType' can't be null";
        }
            if ((mb_strlen($this->container['securityReportType']) > 64)) {
                $invalidProperties[] = "invalid value for 'securityReportType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['securityReportType']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityReportType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['operateAll'] === null) {
            $invalidProperties[] = "'operateAll' can't be null";
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
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceName']) && !preg_match("/^.*$/", $this->container['instanceName'])) {
                $invalidProperties[] = "invalid value for 'instanceName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be bigger than or equal to 0.";
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
    * Gets exportSize
    *  导出数据条数
    *
    * @return int
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int $exportSize 导出数据条数
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets securityReportType
    *  **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    *
    * @return string
    */
    public function getSecurityReportType()
    {
        return $this->container['securityReportType'];
    }

    /**
    * Sets securityReportType
    *
    * @param string $securityReportType **参数解释**: 安全报告类型 **约束限制**: 不涉及 **取值范围**: - malwares : 恶意文件信息 - apps : 软件信息 - files : 文件信息 - sensitive-info : 敏感信息 - non-compliant-app : 软件合规信息 - build-command-risks : 镜像构建指令风险
    *
    * @return $this
    */
    public function setSecurityReportType($securityReportType)
    {
        $this->container['securityReportType'] = $securityReportType;
        return $this;
    }

    /**
    * Gets imageIdList
    *  要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
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
    * @param string[]|null $imageIdList 要导出的镜像id列表。operate_all参数为false时,需要填写此批量查询条件。本地/CICD镜像填写image_id，仓库镜像填写镜像列表返回的id
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
    *  若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
    *
    * @return bool
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool $operateAll 若为true表示查询全量镜像，可传其他参数对全量镜像数据进行筛选
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
    *  **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
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
    * @param string|null $imageType **参数解释**: 镜像类型。导出本地镜像和cicd镜像报告时，需要传参image_type。不传此参数时，默认导出其他仓库镜像数据。 **约束限制**: 不涉及 **取值范围**: - private_image : 私有镜像 - shared_image : 共享镜像 - local_image : 本地镜像 - instance_image : 企业镜像 - harbor : Harbor镜像 - jfrog : Jfrog镜像 - cicd : cicd镜像
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets scanStatus
    *  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
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
    * @param string|null $scanStatus 扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
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
    *  组织名称
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
    * @param string|null $namespace 组织名称
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
    *  镜像名称
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
    * @param string|null $imageName 镜像名称
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
    *  镜像版本
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
    * @param string|null $imageVersion 镜像版本
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
    *  镜像id
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
    * @param string|null $imageId 镜像id
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
    *  镜像大小
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
    * @param int|null $imageSize 镜像大小
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
    *  创建时间开始日期，时间单位 毫秒（ms）
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
    * @param int|null $startLatestUpdateTime 创建时间开始日期，时间单位 毫秒（ms）
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
    *  创建时间结束日期，时间单位 毫秒（ms）
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
    * @param int|null $endLatestUpdateTime 创建时间结束日期，时间单位 毫秒（ms）
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
    *  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
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
    * @param int|null $startLatestScanTime 最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
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
    *  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
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
    * @param int|null $endLatestScanTime 最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
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
    * Gets hasUnsafeSetting
    *  是否存在基线检查
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
    * @param bool|null $hasUnsafeSetting 是否存在基线检查
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
    *  是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
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
    * @param bool|null $risky 是否有安全风险，包含如下:   - true : 有风险   - false : 无风险
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
    *  镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
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
    * @param string|null $severityLevel 镜像风险程度，在镜像扫描完成后展示，包含如下：   - Security：安全   - Low：低危   - Medium：中危   - High：高危
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
    *  企业镜像实例名称
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
    * @param string|null $instanceName 企业镜像实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets cicdName
    *  cicd名称
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
    * @param string|null $cicdName cicd名称
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
    *  **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
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
    * @param string|null $buildCommandRiskLevel **参数解释**: 构建指令风险程度 **约束限制**: 不涉及 **取值范围**: - critical ：严重 - high ：高危 - medium ：中危 - low ：低危  **默认取值**: 不涉及
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
    *  构建指令风险名称
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
    * @param string|null $buildCommandRiskName 构建指令风险名称
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
    *  要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
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
    * @param string[]|null $buildCommandRuleIdList 要导出的构建指令风险检测规则id列表。rule_id的值可以从接口/v5/{project_id}/image/build-command-risks的返回参数获取
    *
    * @return $this
    */
    public function setBuildCommandRuleIdList($buildCommandRuleIdList)
    {
        $this->container['buildCommandRuleIdList'] = $buildCommandRuleIdList;
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

