<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSwrImageRepositoryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSwrImageRepositoryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * latestVersion  仅关注最新版本镜像
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * instanceName  企业镜像实例名称
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查
    * hasVul  是否存在软件漏洞
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'latestVersion' => 'bool',
            'offset' => 'int',
            'limit' => 'int',
            'imageType' => 'string',
            'scanStatus' => 'string',
            'instanceName' => 'string',
            'imageSize' => 'int',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int',
            'hasMaliciousFile' => 'bool',
            'hasUnsafeSetting' => 'bool',
            'hasVul' => 'bool',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * latestVersion  仅关注最新版本镜像
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * instanceName  企业镜像实例名称
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查
    * hasVul  是否存在软件漏洞
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'latestVersion' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'imageType' => null,
        'scanStatus' => null,
        'instanceName' => null,
        'imageSize' => 'int64',
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64',
        'hasMaliciousFile' => null,
        'hasUnsafeSetting' => null,
        'hasVul' => null,
        'instanceId' => null
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
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * latestVersion  仅关注最新版本镜像
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * instanceName  企业镜像实例名称
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查
    * hasVul  是否存在软件漏洞
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'latestVersion' => 'latest_version',
            'offset' => 'offset',
            'limit' => 'limit',
            'imageType' => 'image_type',
            'scanStatus' => 'scan_status',
            'instanceName' => 'instance_name',
            'imageSize' => 'image_size',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time',
            'hasMaliciousFile' => 'has_malicious_file',
            'hasUnsafeSetting' => 'has_unsafe_setting',
            'hasVul' => 'has_vul',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * latestVersion  仅关注最新版本镜像
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * instanceName  企业镜像实例名称
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查
    * hasVul  是否存在软件漏洞
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'latestVersion' => 'setLatestVersion',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'imageType' => 'setImageType',
            'scanStatus' => 'setScanStatus',
            'instanceName' => 'setInstanceName',
            'imageSize' => 'setImageSize',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime',
            'hasMaliciousFile' => 'setHasMaliciousFile',
            'hasUnsafeSetting' => 'setHasUnsafeSetting',
            'hasVul' => 'setHasVul',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * latestVersion  仅关注最新版本镜像
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * instanceName  企业镜像实例名称
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位 毫秒（ms）
    * hasMaliciousFile  是否存在恶意文件
    * hasUnsafeSetting  是否存在基线检查
    * hasVul  是否存在软件漏洞
    * instanceId  企业仓库实例ID，swr共享版无需使用该参数
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'latestVersion' => 'getLatestVersion',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'imageType' => 'getImageType',
            'scanStatus' => 'getScanStatus',
            'instanceName' => 'getInstanceName',
            'imageSize' => 'getImageSize',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime',
            'hasMaliciousFile' => 'getHasMaliciousFile',
            'hasUnsafeSetting' => 'getHasUnsafeSetting',
            'hasVul' => 'getHasVul',
            'instanceId' => 'getInstanceId'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
        $this->container['hasMaliciousFile'] = isset($data['hasMaliciousFile']) ? $data['hasMaliciousFile'] : null;
        $this->container['hasUnsafeSetting'] = isset($data['hasUnsafeSetting']) ? $data['hasUnsafeSetting'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
        }
            if ((mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
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
    * Gets region
    *  Region ID
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region Region ID
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * Gets offset
    *  偏移量：指定返回记录的开始位置
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数量
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
    * @param int|null $limit 每页显示数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets imageType
    *  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
    *
    * @return string
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string $imageType 镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库   - local_image : 本地镜像   - instance_image : 企业镜像
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
    *  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
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
    * @param string|null $scanStatus 扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
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
    * Gets instanceId
    *  企业仓库实例ID，swr共享版无需使用该参数
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
    * @param string|null $instanceId 企业仓库实例ID，swr共享版无需使用该参数
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

