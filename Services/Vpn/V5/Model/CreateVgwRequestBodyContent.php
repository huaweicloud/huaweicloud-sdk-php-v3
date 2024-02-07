<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVgwRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVgwRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VPN网关名称
    * attachmentType  关联模式
    * erId  VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    * connectSubnet  VPN网关所使用的VPC子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型，当attachment_type为er时不能填写Basic
    * availabilityZoneIds  部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    * enterpriseProjectId  企业项目ID
    * eip1  eip1
    * eip2  eip2
    * accessPrivateIp1  私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    * accessPrivateIp2  私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    * haMode  ha模式
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'attachmentType' => 'string',
            'erId' => 'string',
            'vpcId' => 'string',
            'localSubnets' => 'string[]',
            'connectSubnet' => 'string',
            'bgpAsn' => 'int',
            'flavor' => 'string',
            'availabilityZoneIds' => 'string[]',
            'enterpriseProjectId' => 'string',
            'eip1' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateRequestEip',
            'eip2' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateRequestEip',
            'accessPrivateIp1' => 'string',
            'accessPrivateIp2' => 'string',
            'networkType' => 'string',
            'accessVpcId' => 'string',
            'accessSubnetId' => 'string',
            'haMode' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VPN网关名称
    * attachmentType  关联模式
    * erId  VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    * connectSubnet  VPN网关所使用的VPC子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型，当attachment_type为er时不能填写Basic
    * availabilityZoneIds  部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    * enterpriseProjectId  企业项目ID
    * eip1  eip1
    * eip2  eip2
    * accessPrivateIp1  私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    * accessPrivateIp2  私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    * haMode  ha模式
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'attachmentType' => null,
        'erId' => null,
        'vpcId' => null,
        'localSubnets' => null,
        'connectSubnet' => null,
        'bgpAsn' => 'int64',
        'flavor' => null,
        'availabilityZoneIds' => null,
        'enterpriseProjectId' => null,
        'eip1' => null,
        'eip2' => null,
        'accessPrivateIp1' => null,
        'accessPrivateIp2' => null,
        'networkType' => null,
        'accessVpcId' => null,
        'accessSubnetId' => null,
        'haMode' => null,
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
    * name  VPN网关名称
    * attachmentType  关联模式
    * erId  VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    * connectSubnet  VPN网关所使用的VPC子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型，当attachment_type为er时不能填写Basic
    * availabilityZoneIds  部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    * enterpriseProjectId  企业项目ID
    * eip1  eip1
    * eip2  eip2
    * accessPrivateIp1  私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    * accessPrivateIp2  私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    * haMode  ha模式
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'attachmentType' => 'attachment_type',
            'erId' => 'er_id',
            'vpcId' => 'vpc_id',
            'localSubnets' => 'local_subnets',
            'connectSubnet' => 'connect_subnet',
            'bgpAsn' => 'bgp_asn',
            'flavor' => 'flavor',
            'availabilityZoneIds' => 'availability_zone_ids',
            'enterpriseProjectId' => 'enterprise_project_id',
            'eip1' => 'eip1',
            'eip2' => 'eip2',
            'accessPrivateIp1' => 'access_private_ip_1',
            'accessPrivateIp2' => 'access_private_ip_2',
            'networkType' => 'network_type',
            'accessVpcId' => 'access_vpc_id',
            'accessSubnetId' => 'access_subnet_id',
            'haMode' => 'ha_mode',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VPN网关名称
    * attachmentType  关联模式
    * erId  VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    * connectSubnet  VPN网关所使用的VPC子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型，当attachment_type为er时不能填写Basic
    * availabilityZoneIds  部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    * enterpriseProjectId  企业项目ID
    * eip1  eip1
    * eip2  eip2
    * accessPrivateIp1  私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    * accessPrivateIp2  私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    * haMode  ha模式
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'attachmentType' => 'setAttachmentType',
            'erId' => 'setErId',
            'vpcId' => 'setVpcId',
            'localSubnets' => 'setLocalSubnets',
            'connectSubnet' => 'setConnectSubnet',
            'bgpAsn' => 'setBgpAsn',
            'flavor' => 'setFlavor',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'eip1' => 'setEip1',
            'eip2' => 'setEip2',
            'accessPrivateIp1' => 'setAccessPrivateIp1',
            'accessPrivateIp2' => 'setAccessPrivateIp2',
            'networkType' => 'setNetworkType',
            'accessVpcId' => 'setAccessVpcId',
            'accessSubnetId' => 'setAccessSubnetId',
            'haMode' => 'setHaMode',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VPN网关名称
    * attachmentType  关联模式
    * erId  VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    * connectSubnet  VPN网关所使用的VPC子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型，当attachment_type为er时不能填写Basic
    * availabilityZoneIds  部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    * enterpriseProjectId  企业项目ID
    * eip1  eip1
    * eip2  eip2
    * accessPrivateIp1  私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    * accessPrivateIp2  私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    * haMode  ha模式
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'attachmentType' => 'getAttachmentType',
            'erId' => 'getErId',
            'vpcId' => 'getVpcId',
            'localSubnets' => 'getLocalSubnets',
            'connectSubnet' => 'getConnectSubnet',
            'bgpAsn' => 'getBgpAsn',
            'flavor' => 'getFlavor',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'eip1' => 'getEip1',
            'eip2' => 'getEip2',
            'accessPrivateIp1' => 'getAccessPrivateIp1',
            'accessPrivateIp2' => 'getAccessPrivateIp2',
            'networkType' => 'getNetworkType',
            'accessVpcId' => 'getAccessVpcId',
            'accessSubnetId' => 'getAccessSubnetId',
            'haMode' => 'getHaMode',
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
    const ATTACHMENT_TYPE_VPC = 'vpc';
    const ATTACHMENT_TYPE_ER = 'er';
    const FLAVOR_BASIC = 'Basic';
    const FLAVOR_PROFESSIONAL1 = 'Professional1';
    const FLAVOR_PROFESSIONAL2 = 'Professional2';
    const FLAVOR_PROFESSIONAL1_NON_FIXED_IP = 'Professional1-NonFixedIP';
    const FLAVOR_PROFESSIONAL2_NON_FIXED_IP = 'Professional2-NonFixedIP';
    const NETWORK_TYPE__PUBLIC = 'public';
    const NETWORK_TYPE__PRIVATE = 'private';
    const HA_MODE_ACTIVE_ACTIVE = 'active-active';
    const HA_MODE_ACTIVE_STANDBY = 'active-standby';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAttachmentTypeAllowableValues()
    {
        return [
            self::ATTACHMENT_TYPE_VPC,
            self::ATTACHMENT_TYPE_ER,
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
            self::FLAVOR_BASIC,
            self::FLAVOR_PROFESSIONAL1,
            self::FLAVOR_PROFESSIONAL2,
            self::FLAVOR_PROFESSIONAL1_NON_FIXED_IP,
            self::FLAVOR_PROFESSIONAL2_NON_FIXED_IP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE__PUBLIC,
            self::NETWORK_TYPE__PRIVATE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaModeAllowableValues()
    {
        return [
            self::HA_MODE_ACTIVE_ACTIVE,
            self::HA_MODE_ACTIVE_STANDBY,
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
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['localSubnets'] = isset($data['localSubnets']) ? $data['localSubnets'] : null;
        $this->container['connectSubnet'] = isset($data['connectSubnet']) ? $data['connectSubnet'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['eip1'] = isset($data['eip1']) ? $data['eip1'] : null;
        $this->container['eip2'] = isset($data['eip2']) ? $data['eip2'] : null;
        $this->container['accessPrivateIp1'] = isset($data['accessPrivateIp1']) ? $data['accessPrivateIp1'] : null;
        $this->container['accessPrivateIp2'] = isset($data['accessPrivateIp2']) ? $data['accessPrivateIp2'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['accessVpcId'] = isset($data['accessVpcId']) ? $data['accessVpcId'] : null;
        $this->container['accessSubnetId'] = isset($data['accessSubnetId']) ? $data['accessSubnetId'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[一-龥a-zA-Z0-9-_.]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]+/.";
            }
            $allowedValues = $this->getAttachmentTypeAllowableValues();
                if (!is_null($this->container['attachmentType']) && !in_array($this->container['attachmentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'attachmentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['erId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['erId'])) {
                $invalidProperties[] = "invalid value for 'erId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['vpcId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getFlavorAllowableValues();
                if (!is_null($this->container['flavor']) && !in_array($this->container['flavor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flavor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessPrivateIp1']) && (mb_strlen($this->container['accessPrivateIp1']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessPrivateIp1', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accessPrivateIp2']) && (mb_strlen($this->container['accessPrivateIp2']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessPrivateIp2', the character length must be smaller than or equal to 64.";
            }
            $allowedValues = $this->getNetworkTypeAllowableValues();
                if (!is_null($this->container['networkType']) && !in_array($this->container['networkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'networkType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['accessVpcId']) && !preg_match("/[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}/", $this->container['accessVpcId'])) {
                $invalidProperties[] = "invalid value for 'accessVpcId', must be conform to the pattern /[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}/.";
            }
            if (!is_null($this->container['accessSubnetId']) && !preg_match("/[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}/", $this->container['accessSubnetId'])) {
                $invalidProperties[] = "invalid value for 'accessSubnetId', must be conform to the pattern /[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}/.";
            }
            $allowedValues = $this->getHaModeAllowableValues();
                if (!is_null($this->container['haMode']) && !in_array($this->container['haMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haMode', must be one of '%s'",
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
    *  VPN网关名称
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
    * @param string|null $name VPN网关名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets attachmentType
    *  关联模式
    *
    * @return string|null
    */
    public function getAttachmentType()
    {
        return $this->container['attachmentType'];
    }

    /**
    * Sets attachmentType
    *
    * @param string|null $attachmentType 关联模式
    *
    * @return $this
    */
    public function setAttachmentType($attachmentType)
    {
        $this->container['attachmentType'] = $attachmentType;
        return $this;
    }

    /**
    * Gets erId
    *  VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    *
    * @return string|null
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string|null $erId VPN网关所连接的ER实例的ID，当attachment_type配置为\"er\"时必填，否则不填
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPN网关所连接的VPC的ID
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
    * @param string|null $vpcId VPN网关所连接的VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets localSubnets
    *  本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    *
    * @return string[]|null
    */
    public function getLocalSubnets()
    {
        return $this->container['localSubnets'];
    }

    /**
    * Sets localSubnets
    *
    * @param string[]|null $localSubnets 本端子网，当attachment_type配置为\"vpc\"时必填，否则不填
    *
    * @return $this
    */
    public function setLocalSubnets($localSubnets)
    {
        $this->container['localSubnets'] = $localSubnets;
        return $this;
    }

    /**
    * Gets connectSubnet
    *  VPN网关所使用的VPC子网ID
    *
    * @return string|null
    */
    public function getConnectSubnet()
    {
        return $this->container['connectSubnet'];
    }

    /**
    * Sets connectSubnet
    *
    * @param string|null $connectSubnet VPN网关所使用的VPC子网ID
    *
    * @return $this
    */
    public function setConnectSubnet($connectSubnet)
    {
        $this->container['connectSubnet'] = $connectSubnet;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  bgp所使用的asn号
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn bgp所使用的asn号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets flavor
    *  VPN网关的规格类型，当attachment_type为er时不能填写Basic
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor VPN网关的规格类型，当attachment_type为er时不能填写Basic
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[]|null $availabilityZoneIds 部署VPN网关的可用区。不填时自动为VPN网关选择可用区。如果需要指定可用区可以通过查询VPN网关可用区查询可用区列表。
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets eip1
    *  eip1
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateRequestEip|null
    */
    public function getEip1()
    {
        return $this->container['eip1'];
    }

    /**
    * Sets eip1
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateRequestEip|null $eip1 eip1
    *
    * @return $this
    */
    public function setEip1($eip1)
    {
        $this->container['eip1'] = $eip1;
        return $this;
    }

    /**
    * Gets eip2
    *  eip2
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateRequestEip|null
    */
    public function getEip2()
    {
        return $this->container['eip2'];
    }

    /**
    * Sets eip2
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateRequestEip|null $eip2 eip2
    *
    * @return $this
    */
    public function setEip2($eip2)
    {
        $this->container['eip2'] = $eip2;
        return $this;
    }

    /**
    * Gets accessPrivateIp1
    *  私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    *
    * @return string|null
    */
    public function getAccessPrivateIp1()
    {
        return $this->container['accessPrivateIp1'];
    }

    /**
    * Sets accessPrivateIp1
    *
    * @param string|null $accessPrivateIp1 私网类型VPN网关的接入私网IP1，指定ip创建私网网关时设置，主备网关时为主ip，双活网关时为主ip1
    *
    * @return $this
    */
    public function setAccessPrivateIp1($accessPrivateIp1)
    {
        $this->container['accessPrivateIp1'] = $accessPrivateIp1;
        return $this;
    }

    /**
    * Gets accessPrivateIp2
    *  私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    *
    * @return string|null
    */
    public function getAccessPrivateIp2()
    {
        return $this->container['accessPrivateIp2'];
    }

    /**
    * Sets accessPrivateIp2
    *
    * @param string|null $accessPrivateIp2 私网类型VPN网关的接入私网IP2，指定ip创建私网网关时设置，主备网关时为备ip，双活网关时为主ip2
    *
    * @return $this
    */
    public function setAccessPrivateIp2($accessPrivateIp2)
    {
        $this->container['accessPrivateIp2'] = $accessPrivateIp2;
        return $this;
    }

    /**
    * Gets networkType
    *  VPN网关的网络类型，默认为公网(public)
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType VPN网关的网络类型，默认为公网(public)
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets accessVpcId
    *  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    *
    * @return string|null
    */
    public function getAccessVpcId()
    {
        return $this->container['accessVpcId'];
    }

    /**
    * Sets accessVpcId
    *
    * @param string|null $accessVpcId VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    *
    * @return $this
    */
    public function setAccessVpcId($accessVpcId)
    {
        $this->container['accessVpcId'] = $accessVpcId;
        return $this;
    }

    /**
    * Gets accessSubnetId
    *  VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    *
    * @return string|null
    */
    public function getAccessSubnetId()
    {
        return $this->container['accessSubnetId'];
    }

    /**
    * Sets accessSubnetId
    *
    * @param string|null $accessSubnetId VPN网关北向接入VPC中的接入子网ID，在填写了access_vpc_id时必填
    *
    * @return $this
    */
    public function setAccessSubnetId($accessSubnetId)
    {
        $this->container['accessSubnetId'] = $accessSubnetId;
        return $this;
    }

    /**
    * Gets haMode
    *  ha模式
    *
    * @return string|null
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string|null $haMode ha模式
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null $tags 标签
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

