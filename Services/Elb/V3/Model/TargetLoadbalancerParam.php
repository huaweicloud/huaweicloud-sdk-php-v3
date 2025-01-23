<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetLoadbalancerParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetLoadbalancerParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
    * availabilityZoneList  新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    * vipSubnetCidrId  新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    * vipAddress  新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    * ipv6VipVirsubnetId  新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    * ipv6VipAddress  新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    * elbVirsubnetIds  新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l4FlavorId  新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l7FlavorId  新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * enterpriseProjectId  新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
    * reusePool  新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    * guaranteed  新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'availabilityZoneList' => 'string[]',
            'vipSubnetCidrId' => 'string',
            'vipAddress' => 'string',
            'ipv6VipVirsubnetId' => 'string',
            'ipv6VipAddress' => 'string',
            'elbVirsubnetIds' => 'string[]',
            'l4FlavorId' => 'string',
            'l7FlavorId' => 'string',
            'enterpriseProjectId' => 'string',
            'reusePool' => 'bool',
            'guaranteed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
    * availabilityZoneList  新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    * vipSubnetCidrId  新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    * vipAddress  新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    * ipv6VipVirsubnetId  新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    * ipv6VipAddress  新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    * elbVirsubnetIds  新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l4FlavorId  新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l7FlavorId  新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * enterpriseProjectId  新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
    * reusePool  新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    * guaranteed  新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'availabilityZoneList' => null,
        'vipSubnetCidrId' => null,
        'vipAddress' => null,
        'ipv6VipVirsubnetId' => null,
        'ipv6VipAddress' => null,
        'elbVirsubnetIds' => null,
        'l4FlavorId' => null,
        'l7FlavorId' => null,
        'enterpriseProjectId' => null,
        'reusePool' => null,
        'guaranteed' => null
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
    * name  新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
    * availabilityZoneList  新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    * vipSubnetCidrId  新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    * vipAddress  新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    * ipv6VipVirsubnetId  新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    * ipv6VipAddress  新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    * elbVirsubnetIds  新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l4FlavorId  新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l7FlavorId  新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * enterpriseProjectId  新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
    * reusePool  新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    * guaranteed  新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'availabilityZoneList' => 'availability_zone_list',
            'vipSubnetCidrId' => 'vip_subnet_cidr_id',
            'vipAddress' => 'vip_address',
            'ipv6VipVirsubnetId' => 'ipv6_vip_virsubnet_id',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'elbVirsubnetIds' => 'elb_virsubnet_ids',
            'l4FlavorId' => 'l4_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'reusePool' => 'reuse_pool',
            'guaranteed' => 'guaranteed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
    * availabilityZoneList  新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    * vipSubnetCidrId  新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    * vipAddress  新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    * ipv6VipVirsubnetId  新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    * ipv6VipAddress  新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    * elbVirsubnetIds  新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l4FlavorId  新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l7FlavorId  新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * enterpriseProjectId  新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
    * reusePool  新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    * guaranteed  新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'availabilityZoneList' => 'setAvailabilityZoneList',
            'vipSubnetCidrId' => 'setVipSubnetCidrId',
            'vipAddress' => 'setVipAddress',
            'ipv6VipVirsubnetId' => 'setIpv6VipVirsubnetId',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'elbVirsubnetIds' => 'setElbVirsubnetIds',
            'l4FlavorId' => 'setL4FlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'reusePool' => 'setReusePool',
            'guaranteed' => 'setGuaranteed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
    * availabilityZoneList  新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    * vipSubnetCidrId  新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    * vipAddress  新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    * ipv6VipVirsubnetId  新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    * ipv6VipAddress  新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    * elbVirsubnetIds  新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l4FlavorId  新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * l7FlavorId  新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    * enterpriseProjectId  新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
    * reusePool  新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    * guaranteed  新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'availabilityZoneList' => 'getAvailabilityZoneList',
            'vipSubnetCidrId' => 'getVipSubnetCidrId',
            'vipAddress' => 'getVipAddress',
            'ipv6VipVirsubnetId' => 'getIpv6VipVirsubnetId',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'elbVirsubnetIds' => 'getElbVirsubnetIds',
            'l4FlavorId' => 'getL4FlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'reusePool' => 'getReusePool',
            'guaranteed' => 'getGuaranteed'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['availabilityZoneList'] = isset($data['availabilityZoneList']) ? $data['availabilityZoneList'] : null;
        $this->container['vipSubnetCidrId'] = isset($data['vipSubnetCidrId']) ? $data['vipSubnetCidrId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['ipv6VipVirsubnetId'] = isset($data['ipv6VipVirsubnetId']) ? $data['ipv6VipVirsubnetId'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['elbVirsubnetIds'] = isset($data['elbVirsubnetIds']) ? $data['elbVirsubnetIds'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['reusePool'] = isset($data['reusePool']) ? $data['reusePool'] : null;
        $this->container['guaranteed'] = isset($data['guaranteed']) ? $data['guaranteed'] : null;
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
    * Gets name
    *  新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
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
    * @param string|null $name 新实例名称。 可选，不选时使用源负载均衡器名称加copy-x的后缀作为新实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets availabilityZoneList
    *  新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneList()
    {
        return $this->container['availabilityZoneList'];
    }

    /**
    * Sets availabilityZoneList
    *
    * @param string[]|null $availabilityZoneList 新实例所属可用区。 可选，不选时使用源负载均衡器的可用区。 只在独享型复制场景可配置。
    *
    * @return $this
    */
    public function setAvailabilityZoneList($availabilityZoneList)
    {
        $this->container['availabilityZoneList'] = $availabilityZoneList;
        return $this;
    }

    /**
    * Gets vipSubnetCidrId
    *  新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    *
    * @return string|null
    */
    public function getVipSubnetCidrId()
    {
        return $this->container['vipSubnetCidrId'];
    }

    /**
    * Sets vipSubnetCidrId
    *
    * @param string|null $vipSubnetCidrId 新实例所属子网的ipv4子网id。 可选，不选时使用源负载均衡器的ipv4子网。 所选子网需要与源负载均衡器在同一个vpc内。
    *
    * @return $this
    */
    public function setVipSubnetCidrId($vipSubnetCidrId)
    {
        $this->container['vipSubnetCidrId'] = $vipSubnetCidrId;
        return $this;
    }

    /**
    * Gets vipAddress
    *  新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress 新实例的ipv4私网地址。 可选，不选时随机分配。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets ipv6VipVirsubnetId
    *  新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    *
    * @return string|null
    */
    public function getIpv6VipVirsubnetId()
    {
        return $this->container['ipv6VipVirsubnetId'];
    }

    /**
    * Sets ipv6VipVirsubnetId
    *
    * @param string|null $ipv6VipVirsubnetId 新实例ipv6网络所属的子网网络id。 可选，不选时使用源负载均衡器的子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景可配。
    *
    * @return $this
    */
    public function setIpv6VipVirsubnetId($ipv6VipVirsubnetId)
    {
        $this->container['ipv6VipVirsubnetId'] = $ipv6VipVirsubnetId;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    *
    * @return string|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string|null $ipv6VipAddress 新实例的ipv6地址。 可选，不选时随机分配。 只在独享型复制场景可配。
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
        return $this;
    }

    /**
    * Gets elbVirsubnetIds
    *  新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return string[]|null
    */
    public function getElbVirsubnetIds()
    {
        return $this->container['elbVirsubnetIds'];
    }

    /**
    * Sets elbVirsubnetIds
    *
    * @param string[]|null $elbVirsubnetIds 新实例后端子网的网络id。 可选，不选时使用源负载均衡器的后端子网。 所选子网需要与源负载均衡器在同一个vpc内。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return $this
    */
    public function setElbVirsubnetIds($elbVirsubnetIds)
    {
        $this->container['elbVirsubnetIds'] = $elbVirsubnetIds;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return string|null
    */
    public function getL4FlavorId()
    {
        return $this->container['l4FlavorId'];
    }

    /**
    * Sets l4FlavorId
    *
    * @param string|null $l4FlavorId 新实例4层规格。 可选，不选时使用源负载均衡器的4层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return $this
    */
    public function setL4FlavorId($l4FlavorId)
    {
        $this->container['l4FlavorId'] = $l4FlavorId;
        return $this;
    }

    /**
    * Gets l7FlavorId
    *  新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return string|null
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string|null $l7FlavorId 新实例7层规格。 可选，不选时使用源负载均衡器的7层规格。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
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
    * @param string|null $enterpriseProjectId 新实例所属企业项目。 可选，不选时使用源负载均衡器的企业项目
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets reusePool
    *  新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return bool|null
    */
    public function getReusePool()
    {
        return $this->container['reusePool'];
    }

    /**
    * Sets reusePool
    *
    * @param bool|null $reusePool 新实例是否复用源ELB的后端服务器组和后端服务器标识。 可选，配置为true时需要开启后端服务器组多实例挂载功能。 不选时默认新创建后端服务器组。 enterprise_project_id选项配置使用其他企业项目时，该选项失效。 只在独享型复制场景、共享型复制为独享型场景可配。
    *
    * @return $this
    */
    public function setReusePool($reusePool)
    {
        $this->container['reusePool'] = $reusePool;
        return $this;
    }

    /**
    * Gets guaranteed
    *  新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @return bool|null
    */
    public function getGuaranteed()
    {
        return $this->container['guaranteed'];
    }

    /**
    * Sets guaranteed
    *
    * @param bool|null $guaranteed 新实例类型。 可选配置。 独享型复制场景默认为true，若显式指定，只能配置为true。 共享型复制场景默认为false，若显式指定，配置为false表示新复制共享型实例，配置为true表示新复制独享型实例。
    *
    * @return $this
    */
    public function setGuaranteed($guaranteed)
    {
        $this->container['guaranteed'] = $guaranteed;
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

