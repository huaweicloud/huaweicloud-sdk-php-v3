<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueId  队列ID。
    * queueName  队列名称。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列的类型。： sql general all 如果不指定，默认为“sql”。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * enterpriseProjectId  企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * cidrInMgntsubnet  管理子网的网段。
    * cidrInSubnet  子网网段。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * platform  队列计算资源的cpu架构。
    * isRestarting  是否在重启状态。默认值为“false”。
    * labels  队列的标签信息，目前只支持设置跨az配置，multi_az=2
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * resourceType  队列所属资源类型, vm或container。
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueId' => 'int',
            'queueName' => 'string',
            'description' => 'string',
            'owner' => 'string',
            'createTime' => 'int',
            'queueType' => 'string',
            'cuCount' => 'int',
            'chargingMode' => 'int',
            'resourceId' => 'string',
            'enterpriseProjectId' => 'string',
            'cidrInVpc' => 'string',
            'cidrInMgntsubnet' => 'string',
            'cidrInSubnet' => 'string',
            'resourceMode' => 'int',
            'platform' => 'string',
            'isRestarting' => 'bool',
            'labels' => 'string',
            'feature' => 'string',
            'resourceType' => 'string',
            'cuSpec' => 'int',
            'cuScaleOutLimit' => 'int',
            'cuScaleInLimit' => 'int',
            'elasticResourcePoolName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueId  队列ID。
    * queueName  队列名称。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列的类型。： sql general all 如果不指定，默认为“sql”。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * enterpriseProjectId  企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * cidrInMgntsubnet  管理子网的网段。
    * cidrInSubnet  子网网段。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * platform  队列计算资源的cpu架构。
    * isRestarting  是否在重启状态。默认值为“false”。
    * labels  队列的标签信息，目前只支持设置跨az配置，multi_az=2
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * resourceType  队列所属资源类型, vm或container。
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueId' => 'int64',
        'queueName' => null,
        'description' => null,
        'owner' => null,
        'createTime' => 'int64',
        'queueType' => null,
        'cuCount' => 'int32',
        'chargingMode' => 'int32',
        'resourceId' => null,
        'enterpriseProjectId' => null,
        'cidrInVpc' => null,
        'cidrInMgntsubnet' => null,
        'cidrInSubnet' => null,
        'resourceMode' => 'int32',
        'platform' => null,
        'isRestarting' => null,
        'labels' => null,
        'feature' => null,
        'resourceType' => null,
        'cuSpec' => 'int32',
        'cuScaleOutLimit' => 'int32',
        'cuScaleInLimit' => 'int32',
        'elasticResourcePoolName' => null
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
    * queueId  队列ID。
    * queueName  队列名称。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列的类型。： sql general all 如果不指定，默认为“sql”。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * enterpriseProjectId  企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * cidrInMgntsubnet  管理子网的网段。
    * cidrInSubnet  子网网段。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * platform  队列计算资源的cpu架构。
    * isRestarting  是否在重启状态。默认值为“false”。
    * labels  队列的标签信息，目前只支持设置跨az配置，multi_az=2
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * resourceType  队列所属资源类型, vm或container。
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueId' => 'queue_id',
            'queueName' => 'queue_name',
            'description' => 'description',
            'owner' => 'owner',
            'createTime' => 'create_time',
            'queueType' => 'queue_type',
            'cuCount' => 'cu_count',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'cidrInVpc' => 'cidr_in_vpc',
            'cidrInMgntsubnet' => 'cidr_in_mgntsubnet',
            'cidrInSubnet' => 'cidr_in_subnet',
            'resourceMode' => 'resource_mode',
            'platform' => 'platform',
            'isRestarting' => 'is_restarting',
            'labels' => 'labels',
            'feature' => 'feature',
            'resourceType' => 'resource_type',
            'cuSpec' => 'cu_spec',
            'cuScaleOutLimit' => 'cu_scale_out_limit',
            'cuScaleInLimit' => 'cu_scale_in_limit',
            'elasticResourcePoolName' => 'elastic_resource_pool_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueId  队列ID。
    * queueName  队列名称。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列的类型。： sql general all 如果不指定，默认为“sql”。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * enterpriseProjectId  企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * cidrInMgntsubnet  管理子网的网段。
    * cidrInSubnet  子网网段。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * platform  队列计算资源的cpu架构。
    * isRestarting  是否在重启状态。默认值为“false”。
    * labels  队列的标签信息，目前只支持设置跨az配置，multi_az=2
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * resourceType  队列所属资源类型, vm或container。
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueId' => 'setQueueId',
            'queueName' => 'setQueueName',
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'createTime' => 'setCreateTime',
            'queueType' => 'setQueueType',
            'cuCount' => 'setCuCount',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'cidrInVpc' => 'setCidrInVpc',
            'cidrInMgntsubnet' => 'setCidrInMgntsubnet',
            'cidrInSubnet' => 'setCidrInSubnet',
            'resourceMode' => 'setResourceMode',
            'platform' => 'setPlatform',
            'isRestarting' => 'setIsRestarting',
            'labels' => 'setLabels',
            'feature' => 'setFeature',
            'resourceType' => 'setResourceType',
            'cuSpec' => 'setCuSpec',
            'cuScaleOutLimit' => 'setCuScaleOutLimit',
            'cuScaleInLimit' => 'setCuScaleInLimit',
            'elasticResourcePoolName' => 'setElasticResourcePoolName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueId  队列ID。
    * queueName  队列名称。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列的类型。： sql general all 如果不指定，默认为“sql”。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * enterpriseProjectId  企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * cidrInMgntsubnet  管理子网的网段。
    * cidrInSubnet  子网网段。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * platform  队列计算资源的cpu架构。
    * isRestarting  是否在重启状态。默认值为“false”。
    * labels  队列的标签信息，目前只支持设置跨az配置，multi_az=2
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * resourceType  队列所属资源类型, vm或container。
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueId' => 'getQueueId',
            'queueName' => 'getQueueName',
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'createTime' => 'getCreateTime',
            'queueType' => 'getQueueType',
            'cuCount' => 'getCuCount',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'cidrInVpc' => 'getCidrInVpc',
            'cidrInMgntsubnet' => 'getCidrInMgntsubnet',
            'cidrInSubnet' => 'getCidrInSubnet',
            'resourceMode' => 'getResourceMode',
            'platform' => 'getPlatform',
            'isRestarting' => 'getIsRestarting',
            'labels' => 'getLabels',
            'feature' => 'getFeature',
            'resourceType' => 'getResourceType',
            'cuSpec' => 'getCuSpec',
            'cuScaleOutLimit' => 'getCuScaleOutLimit',
            'cuScaleInLimit' => 'getCuScaleInLimit',
            'elasticResourcePoolName' => 'getElasticResourcePoolName'
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
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['cuCount'] = isset($data['cuCount']) ? $data['cuCount'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['cidrInVpc'] = isset($data['cidrInVpc']) ? $data['cidrInVpc'] : null;
        $this->container['cidrInMgntsubnet'] = isset($data['cidrInMgntsubnet']) ? $data['cidrInMgntsubnet'] : null;
        $this->container['cidrInSubnet'] = isset($data['cidrInSubnet']) ? $data['cidrInSubnet'] : null;
        $this->container['resourceMode'] = isset($data['resourceMode']) ? $data['resourceMode'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['isRestarting'] = isset($data['isRestarting']) ? $data['isRestarting'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['cuSpec'] = isset($data['cuSpec']) ? $data['cuSpec'] : null;
        $this->container['cuScaleOutLimit'] = isset($data['cuScaleOutLimit']) ? $data['cuScaleOutLimit'] : null;
        $this->container['cuScaleInLimit'] = isset($data['cuScaleInLimit']) ? $data['cuScaleInLimit'] : null;
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets queueId
    *  队列ID。
    *
    * @return int|null
    */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
    * Sets queueId
    *
    * @param int|null $queueId 队列ID。
    *
    * @return $this
    */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets description
    *  队列描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 队列描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets owner
    *  创建队列的用户。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 创建队列的用户。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets createTime
    *  创建队列的时间。是单位为“毫秒”的时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建队列的时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets queueType
    *  队列的类型。： sql general all 如果不指定，默认为“sql”。
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 队列的类型。： sql general all 如果不指定，默认为“sql”。
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets cuCount
    *  队列的实际CU。
    *
    * @return int|null
    */
    public function getCuCount()
    {
        return $this->container['cuCount'];
    }

    /**
    * Sets cuCount
    *
    * @param int|null $cuCount 队列的实际CU。
    *
    * @return $this
    */
    public function setCuCount($cuCount)
    {
        $this->container['cuCount'] = $cuCount;
        return $this;
    }

    /**
    * Gets chargingMode
    *  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  队列的资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 队列的资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID。0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets cidrInVpc
    *  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    *
    * @return string|null
    */
    public function getCidrInVpc()
    {
        return $this->container['cidrInVpc'];
    }

    /**
    * Sets cidrInVpc
    *
    * @param string|null $cidrInVpc 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    *
    * @return $this
    */
    public function setCidrInVpc($cidrInVpc)
    {
        $this->container['cidrInVpc'] = $cidrInVpc;
        return $this;
    }

    /**
    * Gets cidrInMgntsubnet
    *  管理子网的网段。
    *
    * @return string|null
    */
    public function getCidrInMgntsubnet()
    {
        return $this->container['cidrInMgntsubnet'];
    }

    /**
    * Sets cidrInMgntsubnet
    *
    * @param string|null $cidrInMgntsubnet 管理子网的网段。
    *
    * @return $this
    */
    public function setCidrInMgntsubnet($cidrInMgntsubnet)
    {
        $this->container['cidrInMgntsubnet'] = $cidrInMgntsubnet;
        return $this;
    }

    /**
    * Gets cidrInSubnet
    *  子网网段。
    *
    * @return string|null
    */
    public function getCidrInSubnet()
    {
        return $this->container['cidrInSubnet'];
    }

    /**
    * Sets cidrInSubnet
    *
    * @param string|null $cidrInSubnet 子网网段。
    *
    * @return $this
    */
    public function setCidrInSubnet($cidrInSubnet)
    {
        $this->container['cidrInSubnet'] = $cidrInSubnet;
        return $this;
    }

    /**
    * Gets resourceMode
    *  队列类型。 0：共享队列 1：专属队列
    *
    * @return int|null
    */
    public function getResourceMode()
    {
        return $this->container['resourceMode'];
    }

    /**
    * Sets resourceMode
    *
    * @param int|null $resourceMode 队列类型。 0：共享队列 1：专属队列
    *
    * @return $this
    */
    public function setResourceMode($resourceMode)
    {
        $this->container['resourceMode'] = $resourceMode;
        return $this;
    }

    /**
    * Gets platform
    *  队列计算资源的cpu架构。
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 队列计算资源的cpu架构。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets isRestarting
    *  是否在重启状态。默认值为“false”。
    *
    * @return bool|null
    */
    public function getIsRestarting()
    {
        return $this->container['isRestarting'];
    }

    /**
    * Sets isRestarting
    *
    * @param bool|null $isRestarting 是否在重启状态。默认值为“false”。
    *
    * @return $this
    */
    public function setIsRestarting($isRestarting)
    {
        $this->container['isRestarting'] = $isRestarting;
        return $this;
    }

    /**
    * Gets labels
    *  队列的标签信息，目前只支持设置跨az配置，multi_az=2
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 队列的标签信息，目前只支持设置跨az配置，multi_az=2
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets feature
    *  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature 队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets resourceType
    *  队列所属资源类型, vm或container。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 队列所属资源类型, vm或container。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets cuSpec
    *  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    *
    * @return int|null
    */
    public function getCuSpec()
    {
        return $this->container['cuSpec'];
    }

    /**
    * Sets cuSpec
    *
    * @param int|null $cuSpec 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    *
    * @return $this
    */
    public function setCuSpec($cuSpec)
    {
        $this->container['cuSpec'] = $cuSpec;
        return $this;
    }

    /**
    * Gets cuScaleOutLimit
    *  当前队列弹性扩缩容的CU值上限。
    *
    * @return int|null
    */
    public function getCuScaleOutLimit()
    {
        return $this->container['cuScaleOutLimit'];
    }

    /**
    * Sets cuScaleOutLimit
    *
    * @param int|null $cuScaleOutLimit 当前队列弹性扩缩容的CU值上限。
    *
    * @return $this
    */
    public function setCuScaleOutLimit($cuScaleOutLimit)
    {
        $this->container['cuScaleOutLimit'] = $cuScaleOutLimit;
        return $this;
    }

    /**
    * Gets cuScaleInLimit
    *  当前队列弹性扩缩容的CU值下限。
    *
    * @return int|null
    */
    public function getCuScaleInLimit()
    {
        return $this->container['cuScaleInLimit'];
    }

    /**
    * Sets cuScaleInLimit
    *
    * @param int|null $cuScaleInLimit 当前队列弹性扩缩容的CU值下限。
    *
    * @return $this
    */
    public function setCuScaleInLimit($cuScaleInLimit)
    {
        $this->container['cuScaleInLimit'] = $cuScaleInLimit;
        return $this;
    }

    /**
    * Gets elasticResourcePoolName
    *  弹性资源池名称。
    *
    * @return string|null
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string|null $elasticResourcePoolName 弹性资源池名称。
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
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

