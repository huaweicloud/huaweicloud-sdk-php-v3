<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResponseVpnGateway implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResponseVpnGateway';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  VPN网关ID
    * name  VPN网关名称
    * attachmentType  关联模式
    * certificateId  certificateId
    * erId  VPN网关所连接的ER实例的ID
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网
    * connectSubnet  VPN网关所使用的VPC子网ID
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型
    * connectionNumber  最大可创建的VPN连接数
    * usedConnectionNumber  当前已经使用的VPN连接数
    * usedConnectionGroup  当前已经使用的VPN连接组个数
    * enterpriseProjectId  企业项目ID
    * haMode  ha模式
    * policyTemplate  policyTemplate
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'attachmentType' => 'string',
            'certificateId' => 'string',
            'erId' => 'string',
            'vpcId' => 'string',
            'localSubnets' => 'string[]',
            'connectSubnet' => 'string',
            'networkType' => 'string',
            'accessVpcId' => 'string',
            'accessSubnetId' => 'string',
            'bgpAsn' => 'int',
            'flavor' => 'string',
            'connectionNumber' => 'int',
            'usedConnectionNumber' => 'int',
            'usedConnectionGroup' => 'int',
            'enterpriseProjectId' => 'string',
            'haMode' => 'string',
            'policyTemplate' => '\HuaweiCloud\SDK\Vpn\V5\Model\PolicyTemplate',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  VPN网关ID
    * name  VPN网关名称
    * attachmentType  关联模式
    * certificateId  certificateId
    * erId  VPN网关所连接的ER实例的ID
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网
    * connectSubnet  VPN网关所使用的VPC子网ID
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型
    * connectionNumber  最大可创建的VPN连接数
    * usedConnectionNumber  当前已经使用的VPN连接数
    * usedConnectionGroup  当前已经使用的VPN连接组个数
    * enterpriseProjectId  企业项目ID
    * haMode  ha模式
    * policyTemplate  policyTemplate
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'attachmentType' => null,
        'certificateId' => null,
        'erId' => null,
        'vpcId' => null,
        'localSubnets' => null,
        'connectSubnet' => null,
        'networkType' => null,
        'accessVpcId' => null,
        'accessSubnetId' => null,
        'bgpAsn' => 'int64',
        'flavor' => null,
        'connectionNumber' => 'int32',
        'usedConnectionNumber' => 'int32',
        'usedConnectionGroup' => 'int32',
        'enterpriseProjectId' => null,
        'haMode' => null,
        'policyTemplate' => null,
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
    * id  VPN网关ID
    * name  VPN网关名称
    * attachmentType  关联模式
    * certificateId  certificateId
    * erId  VPN网关所连接的ER实例的ID
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网
    * connectSubnet  VPN网关所使用的VPC子网ID
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型
    * connectionNumber  最大可创建的VPN连接数
    * usedConnectionNumber  当前已经使用的VPN连接数
    * usedConnectionGroup  当前已经使用的VPN连接组个数
    * enterpriseProjectId  企业项目ID
    * haMode  ha模式
    * policyTemplate  policyTemplate
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'attachmentType' => 'attachment_type',
            'certificateId' => 'certificate_id',
            'erId' => 'er_id',
            'vpcId' => 'vpc_id',
            'localSubnets' => 'local_subnets',
            'connectSubnet' => 'connect_subnet',
            'networkType' => 'network_type',
            'accessVpcId' => 'access_vpc_id',
            'accessSubnetId' => 'access_subnet_id',
            'bgpAsn' => 'bgp_asn',
            'flavor' => 'flavor',
            'connectionNumber' => 'connection_number',
            'usedConnectionNumber' => 'used_connection_number',
            'usedConnectionGroup' => 'used_connection_group',
            'enterpriseProjectId' => 'enterprise_project_id',
            'haMode' => 'ha_mode',
            'policyTemplate' => 'policy_template',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  VPN网关ID
    * name  VPN网关名称
    * attachmentType  关联模式
    * certificateId  certificateId
    * erId  VPN网关所连接的ER实例的ID
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网
    * connectSubnet  VPN网关所使用的VPC子网ID
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型
    * connectionNumber  最大可创建的VPN连接数
    * usedConnectionNumber  当前已经使用的VPN连接数
    * usedConnectionGroup  当前已经使用的VPN连接组个数
    * enterpriseProjectId  企业项目ID
    * haMode  ha模式
    * policyTemplate  policyTemplate
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'attachmentType' => 'setAttachmentType',
            'certificateId' => 'setCertificateId',
            'erId' => 'setErId',
            'vpcId' => 'setVpcId',
            'localSubnets' => 'setLocalSubnets',
            'connectSubnet' => 'setConnectSubnet',
            'networkType' => 'setNetworkType',
            'accessVpcId' => 'setAccessVpcId',
            'accessSubnetId' => 'setAccessSubnetId',
            'bgpAsn' => 'setBgpAsn',
            'flavor' => 'setFlavor',
            'connectionNumber' => 'setConnectionNumber',
            'usedConnectionNumber' => 'setUsedConnectionNumber',
            'usedConnectionGroup' => 'setUsedConnectionGroup',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'haMode' => 'setHaMode',
            'policyTemplate' => 'setPolicyTemplate',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  VPN网关ID
    * name  VPN网关名称
    * attachmentType  关联模式
    * certificateId  certificateId
    * erId  VPN网关所连接的ER实例的ID
    * vpcId  VPN网关所连接的VPC的ID
    * localSubnets  本端子网
    * connectSubnet  VPN网关所使用的VPC子网ID
    * networkType  VPN网关的网络类型，默认为公网(public)
    * accessVpcId  VPN网关北向接入VPC ID，不填时默认使用vpc_id字段的值
    * accessSubnetId  VPN网关北向接入VPC中的接入子网ID
    * bgpAsn  bgp所使用的asn号
    * flavor  VPN网关的规格类型
    * connectionNumber  最大可创建的VPN连接数
    * usedConnectionNumber  当前已经使用的VPN连接数
    * usedConnectionGroup  当前已经使用的VPN连接组个数
    * enterpriseProjectId  企业项目ID
    * haMode  ha模式
    * policyTemplate  policyTemplate
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'attachmentType' => 'getAttachmentType',
            'certificateId' => 'getCertificateId',
            'erId' => 'getErId',
            'vpcId' => 'getVpcId',
            'localSubnets' => 'getLocalSubnets',
            'connectSubnet' => 'getConnectSubnet',
            'networkType' => 'getNetworkType',
            'accessVpcId' => 'getAccessVpcId',
            'accessSubnetId' => 'getAccessSubnetId',
            'bgpAsn' => 'getBgpAsn',
            'flavor' => 'getFlavor',
            'connectionNumber' => 'getConnectionNumber',
            'usedConnectionNumber' => 'getUsedConnectionNumber',
            'usedConnectionGroup' => 'getUsedConnectionGroup',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'haMode' => 'getHaMode',
            'policyTemplate' => 'getPolicyTemplate',
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
    const NETWORK_TYPE__PUBLIC = 'public';
    const NETWORK_TYPE__PRIVATE = 'private';
    

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
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE__PUBLIC,
            self::NETWORK_TYPE__PRIVATE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['localSubnets'] = isset($data['localSubnets']) ? $data['localSubnets'] : null;
        $this->container['connectSubnet'] = isset($data['connectSubnet']) ? $data['connectSubnet'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['accessVpcId'] = isset($data['accessVpcId']) ? $data['accessVpcId'] : null;
        $this->container['accessSubnetId'] = isset($data['accessSubnetId']) ? $data['accessSubnetId'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['connectionNumber'] = isset($data['connectionNumber']) ? $data['connectionNumber'] : null;
        $this->container['usedConnectionNumber'] = isset($data['usedConnectionNumber']) ? $data['usedConnectionNumber'] : null;
        $this->container['usedConnectionGroup'] = isset($data['usedConnectionGroup']) ? $data['usedConnectionGroup'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['policyTemplate'] = isset($data['policyTemplate']) ? $data['policyTemplate'] : null;
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

            if (!is_null($this->container['certificateId']) && (mb_strlen($this->container['certificateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'certificateId', the character length must be smaller than or equal to 64.";
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
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    *  VPN网关ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id VPN网关ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets certificateId
    *  certificateId
    *
    * @return string|null
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string|null $certificateId certificateId
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets erId
    *  VPN网关所连接的ER实例的ID
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
    * @param string|null $erId VPN网关所连接的ER实例的ID
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
    *  本端子网
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
    * @param string[]|null $localSubnets 本端子网
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
    *  VPN网关北向接入VPC中的接入子网ID
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
    * @param string|null $accessSubnetId VPN网关北向接入VPC中的接入子网ID
    *
    * @return $this
    */
    public function setAccessSubnetId($accessSubnetId)
    {
        $this->container['accessSubnetId'] = $accessSubnetId;
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
    *  VPN网关的规格类型
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
    * @param string|null $flavor VPN网关的规格类型
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets connectionNumber
    *  最大可创建的VPN连接数
    *
    * @return int|null
    */
    public function getConnectionNumber()
    {
        return $this->container['connectionNumber'];
    }

    /**
    * Sets connectionNumber
    *
    * @param int|null $connectionNumber 最大可创建的VPN连接数
    *
    * @return $this
    */
    public function setConnectionNumber($connectionNumber)
    {
        $this->container['connectionNumber'] = $connectionNumber;
        return $this;
    }

    /**
    * Gets usedConnectionNumber
    *  当前已经使用的VPN连接数
    *
    * @return int|null
    */
    public function getUsedConnectionNumber()
    {
        return $this->container['usedConnectionNumber'];
    }

    /**
    * Sets usedConnectionNumber
    *
    * @param int|null $usedConnectionNumber 当前已经使用的VPN连接数
    *
    * @return $this
    */
    public function setUsedConnectionNumber($usedConnectionNumber)
    {
        $this->container['usedConnectionNumber'] = $usedConnectionNumber;
        return $this;
    }

    /**
    * Gets usedConnectionGroup
    *  当前已经使用的VPN连接组个数
    *
    * @return int|null
    */
    public function getUsedConnectionGroup()
    {
        return $this->container['usedConnectionGroup'];
    }

    /**
    * Sets usedConnectionGroup
    *
    * @param int|null $usedConnectionGroup 当前已经使用的VPN连接组个数
    *
    * @return $this
    */
    public function setUsedConnectionGroup($usedConnectionGroup)
    {
        $this->container['usedConnectionGroup'] = $usedConnectionGroup;
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
    * Gets policyTemplate
    *  policyTemplate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\PolicyTemplate|null
    */
    public function getPolicyTemplate()
    {
        return $this->container['policyTemplate'];
    }

    /**
    * Sets policyTemplate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\PolicyTemplate|null $policyTemplate policyTemplate
    *
    * @return $this
    */
    public function setPolicyTemplate($policyTemplate)
    {
        $this->container['policyTemplate'] = $policyTemplate;
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

