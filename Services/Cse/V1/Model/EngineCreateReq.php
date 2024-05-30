<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎描述，长度0~255。
    * payment  微服务引擎计费方式，1表示按需
    * flavor  微服务引擎的规格
    * azList  当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    * authType  ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎子网ID
    * subnetCidr  微服务引擎子网划分
    * publicIpId  ServiceComb引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎部署类型
    * inputs  引擎附加参数
    * enginestateInfo  enginestateInfo
    * periodType  创建阶段类型
    * flavorType  flavorType
    * enterpriseProject  enterpriseProject
    * vpcCidr  网关vpc划分
    * resourceParams  resourceParams
    * productId  产品ID
    * capacityProductId  容量产品ID
    * isFree  微服务引擎是否免费
    * subnetName  微服务引擎使用的子网名称
    * tags  标签
    * maintenanceConfig  maintenanceConfig
    * elbid  微服务引擎使用的elb的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'payment' => 'string',
            'flavor' => 'string',
            'azList' => 'string[]',
            'authType' => 'string',
            'vpc' => 'string',
            'vpcId' => 'string',
            'networkId' => 'string',
            'subnetCidr' => 'string',
            'publicIpId' => 'string',
            'authCred' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineRbacPwd',
            'specType' => 'string',
            'inputs' => 'map[string,string]',
            'enginestateInfo' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqEnginestateInfo',
            'periodType' => 'int',
            'flavorType' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqFlavorType',
            'enterpriseProject' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqEnterpriseProject',
            'vpcCidr' => 'string',
            'resourceParams' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqResourceParams',
            'productId' => 'string',
            'capacityProductId' => 'string',
            'isFree' => 'bool',
            'subnetName' => 'string',
            'tags' => 'string[]',
            'maintenanceConfig' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqMaintenanceConfig',
            'elbid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎描述，长度0~255。
    * payment  微服务引擎计费方式，1表示按需
    * flavor  微服务引擎的规格
    * azList  当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    * authType  ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎子网ID
    * subnetCidr  微服务引擎子网划分
    * publicIpId  ServiceComb引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎部署类型
    * inputs  引擎附加参数
    * enginestateInfo  enginestateInfo
    * periodType  创建阶段类型
    * flavorType  flavorType
    * enterpriseProject  enterpriseProject
    * vpcCidr  网关vpc划分
    * resourceParams  resourceParams
    * productId  产品ID
    * capacityProductId  容量产品ID
    * isFree  微服务引擎是否免费
    * subnetName  微服务引擎使用的子网名称
    * tags  标签
    * maintenanceConfig  maintenanceConfig
    * elbid  微服务引擎使用的elb的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'payment' => null,
        'flavor' => null,
        'azList' => null,
        'authType' => null,
        'vpc' => null,
        'vpcId' => null,
        'networkId' => null,
        'subnetCidr' => null,
        'publicIpId' => null,
        'authCred' => null,
        'specType' => null,
        'inputs' => null,
        'enginestateInfo' => null,
        'periodType' => 'int32',
        'flavorType' => null,
        'enterpriseProject' => null,
        'vpcCidr' => null,
        'resourceParams' => null,
        'productId' => null,
        'capacityProductId' => null,
        'isFree' => null,
        'subnetName' => null,
        'tags' => null,
        'maintenanceConfig' => null,
        'elbid' => null
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
    * name  微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎描述，长度0~255。
    * payment  微服务引擎计费方式，1表示按需
    * flavor  微服务引擎的规格
    * azList  当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    * authType  ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎子网ID
    * subnetCidr  微服务引擎子网划分
    * publicIpId  ServiceComb引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎部署类型
    * inputs  引擎附加参数
    * enginestateInfo  enginestateInfo
    * periodType  创建阶段类型
    * flavorType  flavorType
    * enterpriseProject  enterpriseProject
    * vpcCidr  网关vpc划分
    * resourceParams  resourceParams
    * productId  产品ID
    * capacityProductId  容量产品ID
    * isFree  微服务引擎是否免费
    * subnetName  微服务引擎使用的子网名称
    * tags  标签
    * maintenanceConfig  maintenanceConfig
    * elbid  微服务引擎使用的elb的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'payment' => 'payment',
            'flavor' => 'flavor',
            'azList' => 'azList',
            'authType' => 'authType',
            'vpc' => 'vpc',
            'vpcId' => 'vpcId',
            'networkId' => 'networkId',
            'subnetCidr' => 'subnetCidr',
            'publicIpId' => 'publicIpId',
            'authCred' => 'auth_cred',
            'specType' => 'specType',
            'inputs' => 'inputs',
            'enginestateInfo' => 'enginestateInfo',
            'periodType' => 'periodType',
            'flavorType' => 'flavorType',
            'enterpriseProject' => 'enterpriseProject',
            'vpcCidr' => 'vpcCidr',
            'resourceParams' => 'resourceParams',
            'productId' => 'productId',
            'capacityProductId' => 'capacityProductId',
            'isFree' => 'isFree',
            'subnetName' => 'subnetName',
            'tags' => 'tags',
            'maintenanceConfig' => 'maintenanceConfig',
            'elbid' => 'elbid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎描述，长度0~255。
    * payment  微服务引擎计费方式，1表示按需
    * flavor  微服务引擎的规格
    * azList  当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    * authType  ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎子网ID
    * subnetCidr  微服务引擎子网划分
    * publicIpId  ServiceComb引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎部署类型
    * inputs  引擎附加参数
    * enginestateInfo  enginestateInfo
    * periodType  创建阶段类型
    * flavorType  flavorType
    * enterpriseProject  enterpriseProject
    * vpcCidr  网关vpc划分
    * resourceParams  resourceParams
    * productId  产品ID
    * capacityProductId  容量产品ID
    * isFree  微服务引擎是否免费
    * subnetName  微服务引擎使用的子网名称
    * tags  标签
    * maintenanceConfig  maintenanceConfig
    * elbid  微服务引擎使用的elb的id
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'payment' => 'setPayment',
            'flavor' => 'setFlavor',
            'azList' => 'setAzList',
            'authType' => 'setAuthType',
            'vpc' => 'setVpc',
            'vpcId' => 'setVpcId',
            'networkId' => 'setNetworkId',
            'subnetCidr' => 'setSubnetCidr',
            'publicIpId' => 'setPublicIpId',
            'authCred' => 'setAuthCred',
            'specType' => 'setSpecType',
            'inputs' => 'setInputs',
            'enginestateInfo' => 'setEnginestateInfo',
            'periodType' => 'setPeriodType',
            'flavorType' => 'setFlavorType',
            'enterpriseProject' => 'setEnterpriseProject',
            'vpcCidr' => 'setVpcCidr',
            'resourceParams' => 'setResourceParams',
            'productId' => 'setProductId',
            'capacityProductId' => 'setCapacityProductId',
            'isFree' => 'setIsFree',
            'subnetName' => 'setSubnetName',
            'tags' => 'setTags',
            'maintenanceConfig' => 'setMaintenanceConfig',
            'elbid' => 'setElbid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎描述，长度0~255。
    * payment  微服务引擎计费方式，1表示按需
    * flavor  微服务引擎的规格
    * azList  当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    * authType  ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎子网ID
    * subnetCidr  微服务引擎子网划分
    * publicIpId  ServiceComb引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎部署类型
    * inputs  引擎附加参数
    * enginestateInfo  enginestateInfo
    * periodType  创建阶段类型
    * flavorType  flavorType
    * enterpriseProject  enterpriseProject
    * vpcCidr  网关vpc划分
    * resourceParams  resourceParams
    * productId  产品ID
    * capacityProductId  容量产品ID
    * isFree  微服务引擎是否免费
    * subnetName  微服务引擎使用的子网名称
    * tags  标签
    * maintenanceConfig  maintenanceConfig
    * elbid  微服务引擎使用的elb的id
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'payment' => 'getPayment',
            'flavor' => 'getFlavor',
            'azList' => 'getAzList',
            'authType' => 'getAuthType',
            'vpc' => 'getVpc',
            'vpcId' => 'getVpcId',
            'networkId' => 'getNetworkId',
            'subnetCidr' => 'getSubnetCidr',
            'publicIpId' => 'getPublicIpId',
            'authCred' => 'getAuthCred',
            'specType' => 'getSpecType',
            'inputs' => 'getInputs',
            'enginestateInfo' => 'getEnginestateInfo',
            'periodType' => 'getPeriodType',
            'flavorType' => 'getFlavorType',
            'enterpriseProject' => 'getEnterpriseProject',
            'vpcCidr' => 'getVpcCidr',
            'resourceParams' => 'getResourceParams',
            'productId' => 'getProductId',
            'capacityProductId' => 'getCapacityProductId',
            'isFree' => 'getIsFree',
            'subnetName' => 'getSubnetName',
            'tags' => 'getTags',
            'maintenanceConfig' => 'getMaintenanceConfig',
            'elbid' => 'getElbid'
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
    const PAYMENT__1 = '1';
    const FLAVOR_CSE_S1_SMALL2 = 'cse.s1.small2';
    const FLAVOR_CSE_S1_MEDIUM2 = 'cse.s1.medium2';
    const FLAVOR_CSE_S1_LARGE2 = 'cse.s1.large2';
    const FLAVOR_CSE_S1_XLARGE2 = 'cse.s1.xlarge2';
    const FLAVOR_CSE_NACOS2_C1_LARGE_10 = 'cse.nacos2.c1.large.10';
    const FLAVOR_CSE_NACOS2_C1_XLARGE_20 = 'cse.nacos2.c1.xlarge.20';
    const FLAVOR_CSE_NACOS2_C1_XLARGE_50 = 'cse.nacos2.c1.xlarge.50';
    const FLAVOR_CSE_NACOS2_C1_XLARGE_60 = 'cse.nacos2.c1.xlarge.60';
    const FLAVOR_CSE_NACOS2_C1_2XLARGE_100 = 'cse.nacos2.c1.2xlarge.100';
    const FLAVOR_CSE_MICROGATEWAY_PRO_SMALL_1 = 'cse.microgateway.pro.small.1';
    const FLAVOR_CSE_MICROGATEWAY_PRO_MEDIUM_1 = 'cse.microgateway.pro.medium.1';
    const FLAVOR_CSE_MICROGATEWAY_PRO_LARGE_1 = 'cse.microgateway.pro.large.1';
    const AUTH_TYPE_RBAC = 'RBAC';
    const AUTH_TYPE_NONE = 'NONE';
    const SPEC_TYPE_CSE2 = 'CSE2';
    const SPEC_TYPE_NACOS2 = 'Nacos2';
    const SPEC_TYPE_MICRO_GATEWAY = 'MicroGateway';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPaymentAllowableValues()
    {
        return [
            self::PAYMENT__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFlavorAllowableValues()
    {
        return [
            self::FLAVOR_CSE_S1_SMALL2,
            self::FLAVOR_CSE_S1_MEDIUM2,
            self::FLAVOR_CSE_S1_LARGE2,
            self::FLAVOR_CSE_S1_XLARGE2,
            self::FLAVOR_CSE_NACOS2_C1_LARGE_10,
            self::FLAVOR_CSE_NACOS2_C1_XLARGE_20,
            self::FLAVOR_CSE_NACOS2_C1_XLARGE_50,
            self::FLAVOR_CSE_NACOS2_C1_XLARGE_60,
            self::FLAVOR_CSE_NACOS2_C1_2XLARGE_100,
            self::FLAVOR_CSE_MICROGATEWAY_PRO_SMALL_1,
            self::FLAVOR_CSE_MICROGATEWAY_PRO_MEDIUM_1,
            self::FLAVOR_CSE_MICROGATEWAY_PRO_LARGE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_RBAC,
            self::AUTH_TYPE_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecTypeAllowableValues()
    {
        return [
            self::SPEC_TYPE_CSE2,
            self::SPEC_TYPE_NACOS2,
            self::SPEC_TYPE_MICRO_GATEWAY,
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
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['azList'] = isset($data['azList']) ? $data['azList'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['authCred'] = isset($data['authCred']) ? $data['authCred'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['enginestateInfo'] = isset($data['enginestateInfo']) ? $data['enginestateInfo'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['vpcCidr'] = isset($data['vpcCidr']) ? $data['vpcCidr'] : null;
        $this->container['resourceParams'] = isset($data['resourceParams']) ? $data['resourceParams'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['capacityProductId'] = isset($data['capacityProductId']) ? $data['capacityProductId'] : null;
        $this->container['isFree'] = isset($data['isFree']) ? $data['isFree'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['maintenanceConfig'] = isset($data['maintenanceConfig']) ? $data['maintenanceConfig'] : null;
        $this->container['elbid'] = isset($data['elbid']) ? $data['elbid'] : null;
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
            if (!preg_match("/[a-zA-Z]{1}[a-z0-9A-Z-]{3,24}[a-z0-9A-Z]$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-zA-Z]{1}[a-z0-9A-Z-]{3,24}[a-z0-9A-Z]$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
            $allowedValues = $this->getPaymentAllowableValues();
                if (!is_null($this->container['payment']) && !in_array($this->container['payment'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'payment', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['payment']) > 24)) {
                $invalidProperties[] = "invalid value for 'payment', the character length must be smaller than or equal to 24.";
            }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
            $allowedValues = $this->getFlavorAllowableValues();
                if (!is_null($this->container['flavor']) && !in_array($this->container['flavor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flavor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
        }
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['vpc'] === null) {
            $invalidProperties[] = "'vpc' can't be null";
        }
            if ((mb_strlen($this->container['vpc']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
            if ((mb_strlen($this->container['networkId']) > 64)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['subnetCidr'] === null) {
            $invalidProperties[] = "'subnetCidr' can't be null";
        }
            if ((mb_strlen($this->container['subnetCidr']) > 24)) {
                $invalidProperties[] = "invalid value for 'subnetCidr', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['publicIpId']) && (mb_strlen($this->container['publicIpId']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicIpId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['specType'] === null) {
            $invalidProperties[] = "'specType' can't be null";
        }
            $allowedValues = $this->getSpecTypeAllowableValues();
                if (!is_null($this->container['specType']) && !in_array($this->container['specType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
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
    * @param string $name 微服务引擎的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
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
    *  微服务引擎描述，长度0~255。
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
    * @param string|null $description 微服务引擎描述，长度0~255。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets payment
    *  微服务引擎计费方式，1表示按需
    *
    * @return string
    */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
    * Sets payment
    *
    * @param string $payment 微服务引擎计费方式，1表示按需
    *
    * @return $this
    */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;
        return $this;
    }

    /**
    * Gets flavor
    *  微服务引擎的规格
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor 微服务引擎的规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets azList
    *  当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    *
    * @return string[]|null
    */
    public function getAzList()
    {
        return $this->container['azList'];
    }

    /**
    * Sets azList
    *
    * @param string[]|null $azList 当前局点可用区列表，创建ServiceComb引擎专享版需要填写。
    *
    * @return $this
    */
    public function setAzList($azList)
    {
        $this->container['azList'] = $azList;
        return $this;
    }

    /**
    * Gets authType
    *  ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType ServiceComb引擎专享版与注册配置中心认证方式，RBAC为安全认证，NONE为无认证。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets vpc
    *  vpc名称
    *
    * @return string
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string $vpc vpc名称
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpc标识
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId vpc标识
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets networkId
    *  微服务引擎子网ID
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 微服务引擎子网ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  微服务引擎子网划分
    *
    * @return string
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string $subnetCidr 微服务引擎子网划分
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets publicIpId
    *  ServiceComb引擎专享版公网地址ID，当前为null
    *
    * @return string|null
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string|null $publicIpId ServiceComb引擎专享版公网地址ID，当前为null
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets authCred
    *  authCred
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineRbacPwd|null
    */
    public function getAuthCred()
    {
        return $this->container['authCred'];
    }

    /**
    * Sets authCred
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineRbacPwd|null $authCred authCred
    *
    * @return $this
    */
    public function setAuthCred($authCred)
    {
        $this->container['authCred'] = $authCred;
        return $this;
    }

    /**
    * Gets specType
    *  微服务引擎部署类型
    *
    * @return string
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param string $specType 微服务引擎部署类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets inputs
    *  引擎附加参数
    *
    * @return map[string,string]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param map[string,string]|null $inputs 引擎附加参数
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets enginestateInfo
    *  enginestateInfo
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqEnginestateInfo|null
    */
    public function getEnginestateInfo()
    {
        return $this->container['enginestateInfo'];
    }

    /**
    * Sets enginestateInfo
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqEnginestateInfo|null $enginestateInfo enginestateInfo
    *
    * @return $this
    */
    public function setEnginestateInfo($enginestateInfo)
    {
        $this->container['enginestateInfo'] = $enginestateInfo;
        return $this;
    }

    /**
    * Gets periodType
    *  创建阶段类型
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 创建阶段类型
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets flavorType
    *  flavorType
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqFlavorType|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqFlavorType|null $flavorType flavorType
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  enterpriseProject
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqEnterpriseProject|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqEnterpriseProject|null $enterpriseProject enterpriseProject
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets vpcCidr
    *  网关vpc划分
    *
    * @return string|null
    */
    public function getVpcCidr()
    {
        return $this->container['vpcCidr'];
    }

    /**
    * Sets vpcCidr
    *
    * @param string|null $vpcCidr 网关vpc划分
    *
    * @return $this
    */
    public function setVpcCidr($vpcCidr)
    {
        $this->container['vpcCidr'] = $vpcCidr;
        return $this;
    }

    /**
    * Gets resourceParams
    *  resourceParams
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqResourceParams|null
    */
    public function getResourceParams()
    {
        return $this->container['resourceParams'];
    }

    /**
    * Sets resourceParams
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqResourceParams|null $resourceParams resourceParams
    *
    * @return $this
    */
    public function setResourceParams($resourceParams)
    {
        $this->container['resourceParams'] = $resourceParams;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets capacityProductId
    *  容量产品ID
    *
    * @return string|null
    */
    public function getCapacityProductId()
    {
        return $this->container['capacityProductId'];
    }

    /**
    * Sets capacityProductId
    *
    * @param string|null $capacityProductId 容量产品ID
    *
    * @return $this
    */
    public function setCapacityProductId($capacityProductId)
    {
        $this->container['capacityProductId'] = $capacityProductId;
        return $this;
    }

    /**
    * Gets isFree
    *  微服务引擎是否免费
    *
    * @return bool|null
    */
    public function getIsFree()
    {
        return $this->container['isFree'];
    }

    /**
    * Sets isFree
    *
    * @param bool|null $isFree 微服务引擎是否免费
    *
    * @return $this
    */
    public function setIsFree($isFree)
    {
        $this->container['isFree'] = $isFree;
        return $this;
    }

    /**
    * Gets subnetName
    *  微服务引擎使用的子网名称
    *
    * @return string|null
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string|null $subnetName 微服务引擎使用的子网名称
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets maintenanceConfig
    *  maintenanceConfig
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqMaintenanceConfig|null
    */
    public function getMaintenanceConfig()
    {
        return $this->container['maintenanceConfig'];
    }

    /**
    * Sets maintenanceConfig
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineCreateReqMaintenanceConfig|null $maintenanceConfig maintenanceConfig
    *
    * @return $this
    */
    public function setMaintenanceConfig($maintenanceConfig)
    {
        $this->container['maintenanceConfig'] = $maintenanceConfig;
        return $this;
    }

    /**
    * Gets elbid
    *  微服务引擎使用的elb的id
    *
    * @return string|null
    */
    public function getElbid()
    {
        return $this->container['elbid'];
    }

    /**
    * Sets elbid
    *
    * @param string|null $elbid 微服务引擎使用的elb的id
    *
    * @return $this
    */
    public function setElbid($elbid)
    {
        $this->container['elbid'] = $elbid;
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

