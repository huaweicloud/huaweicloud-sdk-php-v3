<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePostPaidInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePostPaidInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：reliability。
    * engineVersion  消息引擎的版本。取值填写为：4.8.0。
    * storageSpace  存储空间。
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    * sslEnable  是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * storageSpecCode  存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * enableAcl  是否开启访问控制列表。
    * ipv6Enable  是否支持IPv6。   - true: 支持   - false：不支持
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * brokerNum  代理个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'storageSpace' => 'int',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'availableZones' => 'string[]',
            'productId' => 'string',
            'sslEnable' => 'bool',
            'storageSpecCode' => 'string',
            'enterpriseProjectId' => 'string',
            'enableAcl' => 'bool',
            'ipv6Enable' => 'bool',
            'enablePublicip' => 'bool',
            'publicipId' => 'string',
            'brokerNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：reliability。
    * engineVersion  消息引擎的版本。取值填写为：4.8.0。
    * storageSpace  存储空间。
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    * sslEnable  是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * storageSpecCode  存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * enableAcl  是否开启访问控制列表。
    * ipv6Enable  是否支持IPv6。   - true: 支持   - false：不支持
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * brokerNum  代理个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'engine' => null,
        'engineVersion' => null,
        'storageSpace' => 'int32',
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'availableZones' => null,
        'productId' => null,
        'sslEnable' => null,
        'storageSpecCode' => null,
        'enterpriseProjectId' => null,
        'enableAcl' => null,
        'ipv6Enable' => null,
        'enablePublicip' => null,
        'publicipId' => null,
        'brokerNum' => 'int32'
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：reliability。
    * engineVersion  消息引擎的版本。取值填写为：4.8.0。
    * storageSpace  存储空间。
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    * sslEnable  是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * storageSpecCode  存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * enableAcl  是否开启访问控制列表。
    * ipv6Enable  是否支持IPv6。   - true: 支持   - false：不支持
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * brokerNum  代理个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'storageSpace' => 'storage_space',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'availableZones' => 'available_zones',
            'productId' => 'product_id',
            'sslEnable' => 'ssl_enable',
            'storageSpecCode' => 'storage_spec_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enableAcl' => 'enable_acl',
            'ipv6Enable' => 'ipv6_enable',
            'enablePublicip' => 'enable_publicip',
            'publicipId' => 'publicip_id',
            'brokerNum' => 'broker_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：reliability。
    * engineVersion  消息引擎的版本。取值填写为：4.8.0。
    * storageSpace  存储空间。
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    * sslEnable  是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * storageSpecCode  存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * enableAcl  是否开启访问控制列表。
    * ipv6Enable  是否支持IPv6。   - true: 支持   - false：不支持
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * brokerNum  代理个数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'storageSpace' => 'setStorageSpace',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'availableZones' => 'setAvailableZones',
            'productId' => 'setProductId',
            'sslEnable' => 'setSslEnable',
            'storageSpecCode' => 'setStorageSpecCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enableAcl' => 'setEnableAcl',
            'ipv6Enable' => 'setIpv6Enable',
            'enablePublicip' => 'setEnablePublicip',
            'publicipId' => 'setPublicipId',
            'brokerNum' => 'setBrokerNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：reliability。
    * engineVersion  消息引擎的版本。取值填写为：4.8.0。
    * storageSpace  存储空间。
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    * sslEnable  是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * storageSpecCode  存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * enableAcl  是否开启访问控制列表。
    * ipv6Enable  是否支持IPv6。   - true: 支持   - false：不支持
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * brokerNum  代理个数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'storageSpace' => 'getStorageSpace',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'availableZones' => 'getAvailableZones',
            'productId' => 'getProductId',
            'sslEnable' => 'getSslEnable',
            'storageSpecCode' => 'getStorageSpecCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enableAcl' => 'getEnableAcl',
            'ipv6Enable' => 'getIpv6Enable',
            'enablePublicip' => 'getEnablePublicip',
            'publicipId' => 'getPublicipId',
            'brokerNum' => 'getBrokerNum'
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
    const ENGINE_RELIABILITY = 'reliability';
    const ENGINE_VERSION__4_8_0 = '4.8.0';
    const PRODUCT_ID_C6_4U8G_CLUSTER = 'c6.4u8g.cluster';
    const PRODUCT_ID_C6_8U16G_CLUSTER = 'c6.8u16g.cluster';
    const PRODUCT_ID_C6_12U24G_CLUSTER = 'c6.12u24g.cluster';
    const PRODUCT_ID_C6_16U32G_CLUSTER = 'c6.16u32g.cluster';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH_V2 = 'dms.physical.storage.high.v2';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA_V2 = 'dms.physical.storage.ultra.v2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_RELIABILITY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineVersionAllowableValues()
    {
        return [
            self::ENGINE_VERSION__4_8_0,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProductIdAllowableValues()
    {
        return [
            self::PRODUCT_ID_C6_4U8G_CLUSTER,
            self::PRODUCT_ID_C6_8U16G_CLUSTER,
            self::PRODUCT_ID_C6_12U24G_CLUSTER,
            self::PRODUCT_ID_C6_16U32G_CLUSTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageSpecCodeAllowableValues()
    {
        return [
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH_V2,
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA_V2,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
            $allowedValues = $this->getEngineVersionAllowableValues();
                if (!is_null($this->container['engineVersion']) && !in_array($this->container['engineVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['storageSpace'] === null) {
            $invalidProperties[] = "'storageSpace' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
            $allowedValues = $this->getProductIdAllowableValues();
                if (!is_null($this->container['productId']) && !in_array($this->container['productId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'productId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['storageSpecCode'] === null) {
            $invalidProperties[] = "'storageSpecCode' can't be null";
        }
            $allowedValues = $this->getStorageSpecCodeAllowableValues();
                if (!is_null($this->container['storageSpecCode']) && !in_array($this->container['storageSpecCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageSpecCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['brokerNum'] === null) {
            $invalidProperties[] = "'brokerNum' can't be null";
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
    * Gets name
    *  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
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
    * @param string|null $description 实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets engine
    *  消息引擎。取值填写为：reliability。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 消息引擎。取值填写为：reliability。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  消息引擎的版本。取值填写为：4.8.0。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 消息引擎的版本。取值填写为：4.8.0。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets storageSpace
    *  存储空间。
    *
    * @return int
    */
    public function getStorageSpace()
    {
        return $this->container['storageSpace'];
    }

    /**
    * Sets storageSpace
    *
    * @param int $storageSpace 存储空间。
    *
    * @return $this
    */
    public function setStorageSpace($storageSpace)
    {
        $this->container['storageSpace'] = $storageSpace;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets availableZones
    *  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    *
    * @return string[]
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[] $availableZones 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets productId
    *  RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId RocketMQ实例规格。   - c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000   - c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000   - c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000   - c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets sslEnable
    *  是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable 是否打开SSL加密访问。 - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets storageSpecCode
    *  存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    *
    * @return string
    */
    public function getStorageSpecCode()
    {
        return $this->container['storageSpecCode'];
    }

    /**
    * Sets storageSpecCode
    *
    * @param string $storageSpecCode 存储IO规格。   - dms.physical.storage.high.v2: 高IO类型磁盘   - dms.physical.storage.ultra.v2: 超高IO类型磁盘
    *
    * @return $this
    */
    public function setStorageSpecCode($storageSpecCode)
    {
        $this->container['storageSpecCode'] = $storageSpecCode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。若为企业项目帐号，该参数必填。
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
    * @param string|null $enterpriseProjectId 企业项目ID。若为企业项目帐号，该参数必填。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enableAcl
    *  是否开启访问控制列表。
    *
    * @return bool|null
    */
    public function getEnableAcl()
    {
        return $this->container['enableAcl'];
    }

    /**
    * Sets enableAcl
    *
    * @param bool|null $enableAcl 是否开启访问控制列表。
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否支持IPv6。   - true: 支持   - false：不支持
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否支持IPv6。   - true: 支持   - false：不支持
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    *
    * @return bool|null
    */
    public function getEnablePublicip()
    {
        return $this->container['enablePublicip'];
    }

    /**
    * Sets enablePublicip
    *
    * @param bool|null $enablePublicip 是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets publicipId
    *  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets brokerNum
    *  代理个数
    *
    * @return int
    */
    public function getBrokerNum()
    {
        return $this->container['brokerNum'];
    }

    /**
    * Sets brokerNum
    *
    * @param int $brokerNum 代理个数
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
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

