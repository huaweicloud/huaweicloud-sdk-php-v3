<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateImageRepositoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateImageRepositoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * scanFailedDesc  扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间，时间单位 毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位 毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * instanceName  企业版镜像实例名称
    * instanceId  企业版镜像实例ID
    * instanceUrl  企业版镜像实例URL
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageId' => 'string',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'latestVersion' => 'bool',
            'scanStatus' => 'string',
            'scanFailedDesc' => 'string',
            'imageSize' => 'int',
            'latestUpdateTime' => 'int',
            'latestScanTime' => 'int',
            'vulNum' => 'int',
            'unsafeSettingNum' => 'int',
            'maliciousFileNum' => 'int',
            'domainName' => 'string',
            'sharedStatus' => 'string',
            'scannable' => 'bool',
            'instanceName' => 'string',
            'instanceId' => 'string',
            'instanceUrl' => 'string',
            'associationImages' => '\HuaweiCloud\SDK\Hss\V5\Model\AssociateImages[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * scanFailedDesc  扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间，时间单位 毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位 毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * instanceName  企业版镜像实例名称
    * instanceId  企业版镜像实例ID
    * instanceUrl  企业版镜像实例URL
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'namespace' => null,
        'imageName' => null,
        'imageId' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'imageType' => null,
        'latestVersion' => null,
        'scanStatus' => null,
        'scanFailedDesc' => null,
        'imageSize' => 'int64',
        'latestUpdateTime' => 'int64',
        'latestScanTime' => 'int64',
        'vulNum' => 'int32',
        'unsafeSettingNum' => 'int32',
        'maliciousFileNum' => 'int32',
        'domainName' => null,
        'sharedStatus' => null,
        'scannable' => 'int64',
        'instanceName' => null,
        'instanceId' => null,
        'instanceUrl' => null,
        'associationImages' => null
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
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * scanFailedDesc  扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间，时间单位 毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位 毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * instanceName  企业版镜像实例名称
    * instanceId  企业版镜像实例ID
    * instanceUrl  企业版镜像实例URL
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageId' => 'image_id',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'latestVersion' => 'latest_version',
            'scanStatus' => 'scan_status',
            'scanFailedDesc' => 'scan_failed_desc',
            'imageSize' => 'image_size',
            'latestUpdateTime' => 'latest_update_time',
            'latestScanTime' => 'latest_scan_time',
            'vulNum' => 'vul_num',
            'unsafeSettingNum' => 'unsafe_setting_num',
            'maliciousFileNum' => 'malicious_file_num',
            'domainName' => 'domain_name',
            'sharedStatus' => 'shared_status',
            'scannable' => 'scannable',
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'instanceUrl' => 'instance_url',
            'associationImages' => 'association_images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * scanFailedDesc  扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间，时间单位 毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位 毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * instanceName  企业版镜像实例名称
    * instanceId  企业版镜像实例ID
    * instanceUrl  企业版镜像实例URL
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageId' => 'setImageId',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'latestVersion' => 'setLatestVersion',
            'scanStatus' => 'setScanStatus',
            'scanFailedDesc' => 'setScanFailedDesc',
            'imageSize' => 'setImageSize',
            'latestUpdateTime' => 'setLatestUpdateTime',
            'latestScanTime' => 'setLatestScanTime',
            'vulNum' => 'setVulNum',
            'unsafeSettingNum' => 'setUnsafeSettingNum',
            'maliciousFileNum' => 'setMaliciousFileNum',
            'domainName' => 'setDomainName',
            'sharedStatus' => 'setSharedStatus',
            'scannable' => 'setScannable',
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'instanceUrl' => 'setInstanceUrl',
            'associationImages' => 'setAssociationImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * scanFailedDesc  扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间，时间单位 毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位 毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * instanceName  企业版镜像实例名称
    * instanceId  企业版镜像实例ID
    * instanceUrl  企业版镜像实例URL
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageId' => 'getImageId',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'latestVersion' => 'getLatestVersion',
            'scanStatus' => 'getScanStatus',
            'scanFailedDesc' => 'getScanFailedDesc',
            'imageSize' => 'getImageSize',
            'latestUpdateTime' => 'getLatestUpdateTime',
            'latestScanTime' => 'getLatestScanTime',
            'vulNum' => 'getVulNum',
            'unsafeSettingNum' => 'getUnsafeSettingNum',
            'maliciousFileNum' => 'getMaliciousFileNum',
            'domainName' => 'getDomainName',
            'sharedStatus' => 'getSharedStatus',
            'scannable' => 'getScannable',
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'instanceUrl' => 'getInstanceUrl',
            'associationImages' => 'getAssociationImages'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['scanFailedDesc'] = isset($data['scanFailedDesc']) ? $data['scanFailedDesc'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['latestUpdateTime'] = isset($data['latestUpdateTime']) ? $data['latestUpdateTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['unsafeSettingNum'] = isset($data['unsafeSettingNum']) ? $data['unsafeSettingNum'] : null;
        $this->container['maliciousFileNum'] = isset($data['maliciousFileNum']) ? $data['maliciousFileNum'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['sharedStatus'] = isset($data['sharedStatus']) ? $data['sharedStatus'] : null;
        $this->container['scannable'] = isset($data['scannable']) ? $data['scannable'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceUrl'] = isset($data['instanceUrl']) ? $data['instanceUrl'] : null;
        $this->container['associationImages'] = isset($data['associationImages']) ? $data['associationImages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
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
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sharedStatus']) && (mb_strlen($this->container['sharedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'sharedStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sharedStatus']) && (mb_strlen($this->container['sharedStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'sharedStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceUrl']) && (mb_strlen($this->container['instanceUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'instanceUrl', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['instanceUrl']) && (mb_strlen($this->container['instanceUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceUrl', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
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
    * @param string|null $namespace 命名空间
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
    * Gets imageDigest
    *  镜像digest
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
    * @param string|null $imageDigest 镜像digest
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
    * Gets imageType
    *  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
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
    * @param string|null $imageType 镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets latestVersion
    *  是否是最新版本
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
    * @param bool|null $latestVersion 是否是最新版本
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
    *  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
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
    * @param string|null $scanStatus 扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
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
    *  扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
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
    * @param string|null $scanFailedDesc 扫描失败原因，包含如下14种。   - \"unknown_error\" :未知错误   - \"authentication_failed\":认证失败   - \"download_failed\":镜像下载失败   - \"image_over_sized\":镜像大小超限   - \"image_oversized\":镜像超大   - \"failed_to_scan_vulnerability\":漏洞扫描失败      - \"failed_to_scan_file\":文件扫描失败   - \"failed_to_scan_software\":软件扫描失败   - \"failed_to_check_sensitive_information\":敏感信息核查失败   - \"failed_to_check_baseline\":基线检查失败   - \"failed_to_check_software_compliance\":软件合规检查失败   - \"failed_to_query_basic_image_information\":基础镜像信息查询失败   - \"response_timed_out\":响应超时   - \"database_error\" : 数据库错误   - \"failed_to_send_the_scan_request\" : 发送扫描请求失败
    *
    * @return $this
    */
    public function setScanFailedDesc($scanFailedDesc)
    {
        $this->container['scanFailedDesc'] = $scanFailedDesc;
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
    * Gets latestUpdateTime
    *  镜像版本最后更新时间，时间单位 毫秒（ms）
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
    * @param int|null $latestUpdateTime 镜像版本最后更新时间，时间单位 毫秒（ms）
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
    *  最近扫描时间，时间单位 毫秒（ms）
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
    * @param int|null $latestScanTime 最近扫描时间，时间单位 毫秒（ms）
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
    *  漏洞个数
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
    * @param int|null $vulNum 漏洞个数
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
    *  基线扫描未通过数
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
    * @param int|null $unsafeSettingNum 基线扫描未通过数
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
    *  恶意文件数
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
    * @param int|null $maliciousFileNum 恶意文件数
    *
    * @return $this
    */
    public function setMaliciousFileNum($maliciousFileNum)
    {
        $this->container['maliciousFileNum'] = $maliciousFileNum;
        return $this;
    }

    /**
    * Gets domainName
    *  拥有者（共享镜像参数）
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 拥有者（共享镜像参数）
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets sharedStatus
    *  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    *
    * @return string|null
    */
    public function getSharedStatus()
    {
        return $this->container['sharedStatus'];
    }

    /**
    * Sets sharedStatus
    *
    * @param string|null $sharedStatus 共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    *
    * @return $this
    */
    public function setSharedStatus($sharedStatus)
    {
        $this->container['sharedStatus'] = $sharedStatus;
        return $this;
    }

    /**
    * Gets scannable
    *  是否可扫描
    *
    * @return bool|null
    */
    public function getScannable()
    {
        return $this->container['scannable'];
    }

    /**
    * Sets scannable
    *
    * @param bool|null $scannable 是否可扫描
    *
    * @return $this
    */
    public function setScannable($scannable)
    {
        $this->container['scannable'] = $scannable;
        return $this;
    }

    /**
    * Gets instanceName
    *  企业版镜像实例名称
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
    * @param string|null $instanceName 企业版镜像实例名称
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
    *  企业版镜像实例ID
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
    * @param string|null $instanceId 企业版镜像实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceUrl
    *  企业版镜像实例URL
    *
    * @return string|null
    */
    public function getInstanceUrl()
    {
        return $this->container['instanceUrl'];
    }

    /**
    * Sets instanceUrl
    *
    * @param string|null $instanceUrl 企业版镜像实例URL
    *
    * @return $this
    */
    public function setInstanceUrl($instanceUrl)
    {
        $this->container['instanceUrl'] = $instanceUrl;
        return $this;
    }

    /**
    * Gets associationImages
    *  多架构关联镜像信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AssociateImages[]|null
    */
    public function getAssociationImages()
    {
        return $this->container['associationImages'];
    }

    /**
    * Sets associationImages
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AssociateImages[]|null $associationImages 多架构关联镜像信息
    *
    * @return $this
    */
    public function setAssociationImages($associationImages)
    {
        $this->container['associationImages'] = $associationImages;
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

