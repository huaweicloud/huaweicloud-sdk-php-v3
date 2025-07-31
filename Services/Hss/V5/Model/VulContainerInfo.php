<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulContainerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulContainerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  受漏洞影响的容器id
    * containerName  受影响容器名称
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * clusterId  受漏洞影响的容器所处集群id
    * clusterName  受影响容器所处集群名称
    * imageId  受漏洞影响的容器对应镜像id
    * imageName  受影响容器对应镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型
    * imageOrg  所属组织
    * registryType  仓库类型
    * registryName  仓库名称
    * hostName  受影响容器对应主机名称
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * hostIp  服务器公网ip
    * privateIp  服务器私网ip
    * remark  处置操作的描述信息
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'containerName' => 'string',
            'severityLevel' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'imageOrg' => 'string',
            'registryType' => 'string',
            'registryName' => 'string',
            'hostName' => 'string',
            'status' => 'string',
            'hostIp' => 'string',
            'privateIp' => 'string',
            'remark' => 'string',
            'firstScanTime' => 'int',
            'scanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  受漏洞影响的容器id
    * containerName  受影响容器名称
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * clusterId  受漏洞影响的容器所处集群id
    * clusterName  受影响容器所处集群名称
    * imageId  受漏洞影响的容器对应镜像id
    * imageName  受影响容器对应镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型
    * imageOrg  所属组织
    * registryType  仓库类型
    * registryName  仓库名称
    * hostName  受影响容器对应主机名称
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * hostIp  服务器公网ip
    * privateIp  服务器私网ip
    * remark  处置操作的描述信息
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'containerName' => null,
        'severityLevel' => null,
        'clusterId' => null,
        'clusterName' => null,
        'imageId' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'imageOrg' => null,
        'registryType' => null,
        'registryName' => null,
        'hostName' => null,
        'status' => null,
        'hostIp' => null,
        'privateIp' => null,
        'remark' => null,
        'firstScanTime' => 'int64',
        'scanTime' => 'int64'
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
    * containerId  受漏洞影响的容器id
    * containerName  受影响容器名称
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * clusterId  受漏洞影响的容器所处集群id
    * clusterName  受影响容器所处集群名称
    * imageId  受漏洞影响的容器对应镜像id
    * imageName  受影响容器对应镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型
    * imageOrg  所属组织
    * registryType  仓库类型
    * registryName  仓库名称
    * hostName  受影响容器对应主机名称
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * hostIp  服务器公网ip
    * privateIp  服务器私网ip
    * remark  处置操作的描述信息
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'severityLevel' => 'severity_level',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'imageOrg' => 'image_org',
            'registryType' => 'registry_type',
            'registryName' => 'registry_name',
            'hostName' => 'host_name',
            'status' => 'status',
            'hostIp' => 'host_ip',
            'privateIp' => 'private_ip',
            'remark' => 'remark',
            'firstScanTime' => 'first_scan_time',
            'scanTime' => 'scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  受漏洞影响的容器id
    * containerName  受影响容器名称
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * clusterId  受漏洞影响的容器所处集群id
    * clusterName  受影响容器所处集群名称
    * imageId  受漏洞影响的容器对应镜像id
    * imageName  受影响容器对应镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型
    * imageOrg  所属组织
    * registryType  仓库类型
    * registryName  仓库名称
    * hostName  受影响容器对应主机名称
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * hostIp  服务器公网ip
    * privateIp  服务器私网ip
    * remark  处置操作的描述信息
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'severityLevel' => 'setSeverityLevel',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'imageOrg' => 'setImageOrg',
            'registryType' => 'setRegistryType',
            'registryName' => 'setRegistryName',
            'hostName' => 'setHostName',
            'status' => 'setStatus',
            'hostIp' => 'setHostIp',
            'privateIp' => 'setPrivateIp',
            'remark' => 'setRemark',
            'firstScanTime' => 'setFirstScanTime',
            'scanTime' => 'setScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  受漏洞影响的容器id
    * containerName  受影响容器名称
    * severityLevel  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    * clusterId  受漏洞影响的容器所处集群id
    * clusterName  受影响容器所处集群名称
    * imageId  受漏洞影响的容器对应镜像id
    * imageName  受影响容器对应镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型
    * imageOrg  所属组织
    * registryType  仓库类型
    * registryName  仓库名称
    * hostName  受影响容器对应主机名称
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * hostIp  服务器公网ip
    * privateIp  服务器私网ip
    * remark  处置操作的描述信息
    * firstScanTime  首次扫描时间
    * scanTime  扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'severityLevel' => 'getSeverityLevel',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'imageOrg' => 'getImageOrg',
            'registryType' => 'getRegistryType',
            'registryName' => 'getRegistryName',
            'hostName' => 'getHostName',
            'status' => 'getStatus',
            'hostIp' => 'getHostIp',
            'privateIp' => 'getPrivateIp',
            'remark' => 'getRemark',
            'firstScanTime' => 'getFirstScanTime',
            'scanTime' => 'getScanTime'
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
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['imageOrg'] = isset($data['imageOrg']) ? $data['imageOrg'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageOrg']) && (mb_strlen($this->container['imageOrg']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageOrg', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageOrg']) && (mb_strlen($this->container['imageOrg']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageOrg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 512)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
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
    * Gets containerId
    *  受漏洞影响的容器id
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
    * @param string|null $containerId 受漏洞影响的容器id
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  受影响容器名称
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
    * @param string|null $containerName 受影响容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets severityLevel
    *  危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
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
    * @param string|null $severityLevel 危险程度   - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危   - High : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危   - Medium : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危   - Low : 漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets clusterId
    *  受漏洞影响的容器所处集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 受漏洞影响的容器所处集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  受影响容器所处集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 受影响容器所处集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets imageId
    *  受漏洞影响的容器对应镜像id
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
    * @param string|null $imageId 受漏洞影响的容器对应镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  受影响容器对应镜像名称
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
    * @param string|null $imageName 受影响容器对应镜像名称
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
    * Gets imageType
    *  镜像类型
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
    * @param string|null $imageType 镜像类型
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets imageOrg
    *  所属组织
    *
    * @return string|null
    */
    public function getImageOrg()
    {
        return $this->container['imageOrg'];
    }

    /**
    * Sets imageOrg
    *
    * @param string|null $imageOrg 所属组织
    *
    * @return $this
    */
    public function setImageOrg($imageOrg)
    {
        $this->container['imageOrg'] = $imageOrg;
        return $this;
    }

    /**
    * Gets registryType
    *  仓库类型
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
    * @param string|null $registryType 仓库类型
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
        return $this;
    }

    /**
    * Gets registryName
    *  仓库名称
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
    * @param string|null $registryName 仓库名称
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets hostName
    *  受影响容器对应主机名称
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
    * @param string|null $hostName 受影响容器对应主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets status
    *  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets hostIp
    *  服务器公网ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 服务器公网ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  服务器私网ip
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
    * @param string|null $privateIp 服务器私网ip
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets remark
    *  处置操作的描述信息
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 处置操作的描述信息
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  首次扫描时间
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
    * @param int|null $firstScanTime 首次扫描时间
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets scanTime
    *  扫描时间，时间戳单位：毫秒
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime 扫描时间，时间戳单位：毫秒
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
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

