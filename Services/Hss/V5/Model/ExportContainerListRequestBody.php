<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportContainerListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportContainerListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterContainer  **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * clusterType  **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    * clusterName  **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * podName  **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * status  **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
    * risky  **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * createTime  createTime
    * cpuLimit  **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    * memoryLimit  **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterContainer' => 'bool',
            'clusterType' => 'string',
            'clusterName' => 'string',
            'containerName' => 'string',
            'podName' => 'string',
            'imageName' => 'string',
            'status' => 'string',
            'risky' => 'bool',
            'createTime' => '\HuaweiCloud\SDK\Hss\V5\Model\ExportContainerListRequestBodyCreateTime',
            'cpuLimit' => 'string',
            'memoryLimit' => 'string',
            'exportHeaders' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterContainer  **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * clusterType  **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    * clusterName  **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * podName  **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * status  **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
    * risky  **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * createTime  createTime
    * cpuLimit  **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    * memoryLimit  **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterContainer' => null,
        'clusterType' => null,
        'clusterName' => null,
        'containerName' => null,
        'podName' => null,
        'imageName' => null,
        'status' => null,
        'risky' => null,
        'createTime' => null,
        'cpuLimit' => null,
        'memoryLimit' => null,
        'exportHeaders' => null
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
    * clusterContainer  **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * clusterType  **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    * clusterName  **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * podName  **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * status  **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
    * risky  **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * createTime  createTime
    * cpuLimit  **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    * memoryLimit  **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterContainer' => 'cluster_container',
            'clusterType' => 'cluster_type',
            'clusterName' => 'cluster_name',
            'containerName' => 'container_name',
            'podName' => 'pod_name',
            'imageName' => 'image_name',
            'status' => 'status',
            'risky' => 'risky',
            'createTime' => 'create_time',
            'cpuLimit' => 'cpu_limit',
            'memoryLimit' => 'memory_limit',
            'exportHeaders' => 'export_headers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterContainer  **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * clusterType  **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    * clusterName  **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * podName  **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * status  **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
    * risky  **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * createTime  createTime
    * cpuLimit  **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    * memoryLimit  **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterContainer' => 'setClusterContainer',
            'clusterType' => 'setClusterType',
            'clusterName' => 'setClusterName',
            'containerName' => 'setContainerName',
            'podName' => 'setPodName',
            'imageName' => 'setImageName',
            'status' => 'setStatus',
            'risky' => 'setRisky',
            'createTime' => 'setCreateTime',
            'cpuLimit' => 'setCpuLimit',
            'memoryLimit' => 'setMemoryLimit',
            'exportHeaders' => 'setExportHeaders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterContainer  **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * clusterType  **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    * clusterName  **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * containerName  **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * podName  **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    * imageName  **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    * status  **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
    * risky  **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    * createTime  createTime
    * cpuLimit  **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    * memoryLimit  **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    * exportHeaders  **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterContainer' => 'getClusterContainer',
            'clusterType' => 'getClusterType',
            'clusterName' => 'getClusterName',
            'containerName' => 'getContainerName',
            'podName' => 'getPodName',
            'imageName' => 'getImageName',
            'status' => 'getStatus',
            'risky' => 'getRisky',
            'createTime' => 'getCreateTime',
            'cpuLimit' => 'getCpuLimit',
            'memoryLimit' => 'getMemoryLimit',
            'exportHeaders' => 'getExportHeaders'
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
        $this->container['clusterContainer'] = isset($data['clusterContainer']) ? $data['clusterContainer'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['exportHeaders'] = isset($data['exportHeaders']) ? $data['exportHeaders'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterType']) && !preg_match("/^cce|ali|tencent|azure|aws|self_built_hw|self_built_idc$/", $this->container['clusterType'])) {
                $invalidProperties[] = "invalid value for 'clusterType', must be conform to the pattern /^cce|ali|tencent|azure|aws|self_built_hw|self_built_idc$/.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 255)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 512)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 1)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podName']) && !preg_match("/^.*$/", $this->container['podName'])) {
                $invalidProperties[] = "invalid value for 'podName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^Running|Waiting|Terminated|Isolated|Paused$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^Running|Waiting|Terminated|Isolated|Paused$/.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) > 64)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) > 64)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['exportHeaders'] === null) {
            $invalidProperties[] = "'exportHeaders' can't be null";
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
    * Gets clusterContainer
    *  **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getClusterContainer()
    {
        return $this->container['clusterContainer'];
    }

    /**
    * Sets clusterContainer
    *
    * @param bool|null $clusterContainer **参数解释**: 是否是集群内的容器。只导出集群内容器时，设置此参数值为true。只导出非集群容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterContainer($clusterContainer)
    {
        $this->container['clusterContainer'] = $clusterContainer;
        return $this;
    }

    /**
    * Gets clusterType
    *  **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType **参数解释**: 集群类型。 **约束限制**: 不涉及 **取值范围**:   - cce : CCE集群   - ali : 阿里云集群   - tencent : 腾讯云集群   - azure : 微软云集群   - aws : 亚马逊集群   - self_built_hw : 华为云自建集群   - self_built_idc : IDC自建集群    **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
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
    * @param string|null $clusterName **参数解释**: 所属集群名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
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
    * @param string|null $containerName **参数解释**: 容器名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName **参数解释**: 所属Pod名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-512。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
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
    * @param string|null $imageName **参数解释**: 镜像名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-255。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 容器状态。 **约束限制**: 不涉及 **取值范围**:   - Running : 运行中   - Waiting : 等待   - Terminated : 终止   - Isolated : 已隔离   - Paused : 已暂停    **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets risky
    *  **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
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
    * @param bool|null $risky **参数解释**: 是否有安全风险。只导出有安全风险容器时，设置此参数值为true。只导出无安全风险容器时，设置此参数为false。 **约束限制**: 不涉及 **取值范围**: true或者false。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
        return $this;
    }

    /**
    * Gets createTime
    *  createTime
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ExportContainerListRequestBodyCreateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ExportContainerListRequestBodyCreateTime|null $createTime createTime
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param string|null $cpuLimit **参数解释**: cpu限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以m为单位，例如100m。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memoryLimit
    *  **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getMemoryLimit()
    {
        return $this->container['memoryLimit'];
    }

    /**
    * Sets memoryLimit
    *
    * @param string|null $memoryLimit **参数解释**: 内存限制。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64。以Mi、Gi为单位，例如300Mi。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMemoryLimit($memoryLimit)
    {
        $this->container['memoryLimit'] = $memoryLimit;
        return $this;
    }

    /**
    * Gets exportHeaders
    *  **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @return string[][]
    */
    public function getExportHeaders()
    {
        return $this->container['exportHeaders'];
    }

    /**
    * Sets exportHeaders
    *
    * @param string[][] $exportHeaders **参数解释**: 导出容器列表的表头信息。 **约束限制**: 不涉及 **取值范围**: 合法的key值及其对应的表头名称（表头名称可自定义）   - container_id：容器id   - container_name：容器名称   - image_name：镜像名称   - pod_name：所属POD   - cluster_name：所属集群   - cluster_type：集群类型   - status：状态   - risky：是否有安全风险   - low_risk：低危风险   - medium_risk：中危风险   - high_risk：高危风险   - fatal_risk：致命风险   - create_time：创建时间   - restart_count：重启次数   - cpu_limit：CPU限制   - memory_limit：内存限制    **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExportHeaders($exportHeaders)
    {
        $this->container['exportHeaders'] = $exportHeaders;
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

