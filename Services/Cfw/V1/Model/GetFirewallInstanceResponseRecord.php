<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetFirewallInstanceResponseRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetFirewallInstanceResponseRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    * name  防火墙名称
    * haType  集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  防火墙防护类型，目前仅支持0，互联网防护
    * engineType  引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * isAvailableObs  是否支持obs，true表示是，false表示不是
    * isSupportThreatTags  是否支持威胁情报标签，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    * resources  防火墙资源列表
    * fwInstanceName  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * resourceId  防火墙资源id，同fw_instance_id
    * supportUrlFiltering  是否支持url过滤，true表示是，false表示不是
    * tags  标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceId' => 'string',
            'name' => 'string',
            'haType' => 'int',
            'chargeMode' => 'int',
            'serviceType' => 'int',
            'engineType' => 'int',
            'flavor' => '\HuaweiCloud\SDK\Cfw\V1\Model\Flavor',
            'protectObjects' => '\HuaweiCloud\SDK\Cfw\V1\Model\ProtectObjectVO[]',
            'status' => 'int',
            'isOldFirewallInstance' => 'bool',
            'isAvailableObs' => 'bool',
            'isSupportThreatTags' => 'bool',
            'supportIpv6' => 'bool',
            'featureToggle' => 'map[string,bool]',
            'resources' => '\HuaweiCloud\SDK\Cfw\V1\Model\FirewallInstanceResource[]',
            'fwInstanceName' => 'string',
            'enterpriseProjectId' => 'string',
            'resourceId' => 'string',
            'supportUrlFiltering' => 'bool',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    * name  防火墙名称
    * haType  集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  防火墙防护类型，目前仅支持0，互联网防护
    * engineType  引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * isAvailableObs  是否支持obs，true表示是，false表示不是
    * isSupportThreatTags  是否支持威胁情报标签，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    * resources  防火墙资源列表
    * fwInstanceName  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * resourceId  防火墙资源id，同fw_instance_id
    * supportUrlFiltering  是否支持url过滤，true表示是，false表示不是
    * tags  标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceId' => null,
        'name' => null,
        'haType' => 'int32',
        'chargeMode' => 'int32',
        'serviceType' => 'int32',
        'engineType' => 'int32',
        'flavor' => null,
        'protectObjects' => null,
        'status' => 'int32',
        'isOldFirewallInstance' => null,
        'isAvailableObs' => null,
        'isSupportThreatTags' => null,
        'supportIpv6' => null,
        'featureToggle' => null,
        'resources' => null,
        'fwInstanceName' => null,
        'enterpriseProjectId' => null,
        'resourceId' => null,
        'supportUrlFiltering' => null,
        'tags' => null
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
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    * name  防火墙名称
    * haType  集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  防火墙防护类型，目前仅支持0，互联网防护
    * engineType  引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * isAvailableObs  是否支持obs，true表示是，false表示不是
    * isSupportThreatTags  是否支持威胁情报标签，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    * resources  防火墙资源列表
    * fwInstanceName  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * resourceId  防火墙资源id，同fw_instance_id
    * supportUrlFiltering  是否支持url过滤，true表示是，false表示不是
    * tags  标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceId' => 'fw_instance_id',
            'name' => 'name',
            'haType' => 'ha_type',
            'chargeMode' => 'charge_mode',
            'serviceType' => 'service_type',
            'engineType' => 'engine_type',
            'flavor' => 'flavor',
            'protectObjects' => 'protect_objects',
            'status' => 'status',
            'isOldFirewallInstance' => 'is_old_firewall_instance',
            'isAvailableObs' => 'is_available_obs',
            'isSupportThreatTags' => 'is_support_threat_tags',
            'supportIpv6' => 'support_ipv6',
            'featureToggle' => 'feature_toggle',
            'resources' => 'resources',
            'fwInstanceName' => 'fw_instance_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'resourceId' => 'resource_id',
            'supportUrlFiltering' => 'support_url_filtering',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    * name  防火墙名称
    * haType  集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  防火墙防护类型，目前仅支持0，互联网防护
    * engineType  引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * isAvailableObs  是否支持obs，true表示是，false表示不是
    * isSupportThreatTags  是否支持威胁情报标签，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    * resources  防火墙资源列表
    * fwInstanceName  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * resourceId  防火墙资源id，同fw_instance_id
    * supportUrlFiltering  是否支持url过滤，true表示是，false表示不是
    * tags  标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceId' => 'setFwInstanceId',
            'name' => 'setName',
            'haType' => 'setHaType',
            'chargeMode' => 'setChargeMode',
            'serviceType' => 'setServiceType',
            'engineType' => 'setEngineType',
            'flavor' => 'setFlavor',
            'protectObjects' => 'setProtectObjects',
            'status' => 'setStatus',
            'isOldFirewallInstance' => 'setIsOldFirewallInstance',
            'isAvailableObs' => 'setIsAvailableObs',
            'isSupportThreatTags' => 'setIsSupportThreatTags',
            'supportIpv6' => 'setSupportIpv6',
            'featureToggle' => 'setFeatureToggle',
            'resources' => 'setResources',
            'fwInstanceName' => 'setFwInstanceName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'resourceId' => 'setResourceId',
            'supportUrlFiltering' => 'setSupportUrlFiltering',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    * name  防火墙名称
    * haType  集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  防火墙防护类型，目前仅支持0，互联网防护
    * engineType  引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * isAvailableObs  是否支持obs，true表示是，false表示不是
    * isSupportThreatTags  是否支持威胁情报标签，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    * resources  防火墙资源列表
    * fwInstanceName  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * resourceId  防火墙资源id，同fw_instance_id
    * supportUrlFiltering  是否支持url过滤，true表示是，false表示不是
    * tags  标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceId' => 'getFwInstanceId',
            'name' => 'getName',
            'haType' => 'getHaType',
            'chargeMode' => 'getChargeMode',
            'serviceType' => 'getServiceType',
            'engineType' => 'getEngineType',
            'flavor' => 'getFlavor',
            'protectObjects' => 'getProtectObjects',
            'status' => 'getStatus',
            'isOldFirewallInstance' => 'getIsOldFirewallInstance',
            'isAvailableObs' => 'getIsAvailableObs',
            'isSupportThreatTags' => 'getIsSupportThreatTags',
            'supportIpv6' => 'getSupportIpv6',
            'featureToggle' => 'getFeatureToggle',
            'resources' => 'getResources',
            'fwInstanceName' => 'getFwInstanceName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'resourceId' => 'getResourceId',
            'supportUrlFiltering' => 'getSupportUrlFiltering',
            'tags' => 'getTags'
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
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['haType'] = isset($data['haType']) ? $data['haType'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['protectObjects'] = isset($data['protectObjects']) ? $data['protectObjects'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isOldFirewallInstance'] = isset($data['isOldFirewallInstance']) ? $data['isOldFirewallInstance'] : null;
        $this->container['isAvailableObs'] = isset($data['isAvailableObs']) ? $data['isAvailableObs'] : null;
        $this->container['isSupportThreatTags'] = isset($data['isSupportThreatTags']) ? $data['isSupportThreatTags'] : null;
        $this->container['supportIpv6'] = isset($data['supportIpv6']) ? $data['supportIpv6'] : null;
        $this->container['featureToggle'] = isset($data['featureToggle']) ? $data['featureToggle'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['fwInstanceName'] = isset($data['fwInstanceName']) ? $data['fwInstanceName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['supportUrlFiltering'] = isset($data['supportUrlFiltering']) ? $data['supportUrlFiltering'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets fwInstanceId
    *  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id。，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)，默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets name
    *  防火墙名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 防火墙名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets haType
    *  集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    *
    * @return int|null
    */
    public function getHaType()
    {
        return $this->container['haType'];
    }

    /**
    * Sets haType
    *
    * @param int|null $haType 集群类型，包含主备（0）和集群（1）两种方式，主备模式包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点，集群模式仅拉起两个节点作为集群。
    *
    * @return $this
    */
    public function setHaType($haType)
    {
        $this->container['haType'] = $haType;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式 0：包年/包月 1：按需
    *
    * @return int|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int|null $chargeMode 计费模式 0：包年/包月 1：按需
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets serviceType
    *  防火墙防护类型，目前仅支持0，互联网防护
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType 防火墙防护类型，目前仅支持0，互联网防护
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    *
    * @return int|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param int|null $engineType 引擎类型，0：自研引擎 1：山石引擎 3：天融信引擎
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Flavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Flavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets protectObjects
    *  防护对象列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ProtectObjectVO[]|null
    */
    public function getProtectObjects()
    {
        return $this->container['protectObjects'];
    }

    /**
    * Sets protectObjects
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ProtectObjectVO[]|null $protectObjects 防护对象列表
    *
    * @return $this
    */
    public function setProtectObjects($protectObjects)
    {
        $this->container['protectObjects'] = $protectObjects;
        return $this;
    }

    /**
    * Gets status
    *  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isOldFirewallInstance
    *  是否为旧引擎，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsOldFirewallInstance()
    {
        return $this->container['isOldFirewallInstance'];
    }

    /**
    * Sets isOldFirewallInstance
    *
    * @param bool|null $isOldFirewallInstance 是否为旧引擎，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsOldFirewallInstance($isOldFirewallInstance)
    {
        $this->container['isOldFirewallInstance'] = $isOldFirewallInstance;
        return $this;
    }

    /**
    * Gets isAvailableObs
    *  是否支持obs，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsAvailableObs()
    {
        return $this->container['isAvailableObs'];
    }

    /**
    * Sets isAvailableObs
    *
    * @param bool|null $isAvailableObs 是否支持obs，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsAvailableObs($isAvailableObs)
    {
        $this->container['isAvailableObs'] = $isAvailableObs;
        return $this;
    }

    /**
    * Gets isSupportThreatTags
    *  是否支持威胁情报标签，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsSupportThreatTags()
    {
        return $this->container['isSupportThreatTags'];
    }

    /**
    * Sets isSupportThreatTags
    *
    * @param bool|null $isSupportThreatTags 是否支持威胁情报标签，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsSupportThreatTags($isSupportThreatTags)
    {
        $this->container['isSupportThreatTags'] = $isSupportThreatTags;
        return $this;
    }

    /**
    * Gets supportIpv6
    *  是否支持ipv6，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getSupportIpv6()
    {
        return $this->container['supportIpv6'];
    }

    /**
    * Sets supportIpv6
    *
    * @param bool|null $supportIpv6 是否支持ipv6，true表示是，false表示不是
    *
    * @return $this
    */
    public function setSupportIpv6($supportIpv6)
    {
        $this->container['supportIpv6'] = $supportIpv6;
        return $this;
    }

    /**
    * Gets featureToggle
    *  特性开关，boolean值为true表示是，false表示否
    *
    * @return map[string,bool]|null
    */
    public function getFeatureToggle()
    {
        return $this->container['featureToggle'];
    }

    /**
    * Sets featureToggle
    *
    * @param map[string,bool]|null $featureToggle 特性开关，boolean值为true表示是，false表示否
    *
    * @return $this
    */
    public function setFeatureToggle($featureToggle)
    {
        $this->container['featureToggle'] = $featureToggle;
        return $this;
    }

    /**
    * Gets resources
    *  防火墙资源列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\FirewallInstanceResource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\FirewallInstanceResource[]|null $resources 防火墙资源列表
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets fwInstanceName
    *  防火墙名称
    *
    * @return string|null
    */
    public function getFwInstanceName()
    {
        return $this->container['fwInstanceName'];
    }

    /**
    * Sets fwInstanceName
    *
    * @param string|null $fwInstanceName 防火墙名称
    *
    * @return $this
    */
    public function setFwInstanceName($fwInstanceName)
    {
        $this->container['fwInstanceName'] = $fwInstanceName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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
    * @param string|null $enterpriseProjectId 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets resourceId
    *  防火墙资源id，同fw_instance_id
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
    * @param string|null $resourceId 防火墙资源id，同fw_instance_id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets supportUrlFiltering
    *  是否支持url过滤，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getSupportUrlFiltering()
    {
        return $this->container['supportUrlFiltering'];
    }

    /**
    * Sets supportUrlFiltering
    *
    * @param bool|null $supportUrlFiltering 是否支持url过滤，true表示是，false表示不是
    *
    * @return $this
    */
    public function setSupportUrlFiltering($supportUrlFiltering)
    {
        $this->container['supportUrlFiltering'] = $supportUrlFiltering;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\"
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

