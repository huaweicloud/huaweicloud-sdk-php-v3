<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipv6Enable  **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
    * roceId  **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * securityGroupId  **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * subnetId  **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * vpcId  **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * hyperCluster  hyperCluster
    * allowedAddressPairs  **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipv6Enable' => 'bool',
            'roceId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'vpcId' => 'string',
            'hyperCluster' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerNetworkHyperCluster',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AllowedAddressPairs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipv6Enable  **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
    * roceId  **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * securityGroupId  **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * subnetId  **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * vpcId  **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * hyperCluster  hyperCluster
    * allowedAddressPairs  **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipv6Enable' => null,
        'roceId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'vpcId' => null,
        'hyperCluster' => null,
        'allowedAddressPairs' => null
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
    * ipv6Enable  **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
    * roceId  **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * securityGroupId  **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * subnetId  **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * vpcId  **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * hyperCluster  hyperCluster
    * allowedAddressPairs  **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipv6Enable' => 'ipv6_enable',
            'roceId' => 'roce_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id',
            'hyperCluster' => 'hyper_cluster',
            'allowedAddressPairs' => 'allowed_address_pairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipv6Enable  **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
    * roceId  **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * securityGroupId  **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * subnetId  **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * vpcId  **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * hyperCluster  hyperCluster
    * allowedAddressPairs  **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @var string[]
    */
    protected static $setters = [
            'ipv6Enable' => 'setIpv6Enable',
            'roceId' => 'setRoceId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId',
            'hyperCluster' => 'setHyperCluster',
            'allowedAddressPairs' => 'setAllowedAddressPairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipv6Enable  **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
    * roceId  **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * securityGroupId  **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * subnetId  **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * vpcId  **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    * hyperCluster  hyperCluster
    * allowedAddressPairs  **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @var string[]
    */
    protected static $getters = [
            'ipv6Enable' => 'getIpv6Enable',
            'roceId' => 'getRoceId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId',
            'hyperCluster' => 'getHyperCluster',
            'allowedAddressPairs' => 'getAllowedAddressPairs'
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
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['roceId'] = isset($data['roceId']) ? $data['roceId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['hyperCluster'] = isset($data['hyperCluster']) ? $data['hyperCluster'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roceId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['roceId'])) {
                $invalidProperties[] = "invalid value for 'roceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['securityGroupId'])) {
                $invalidProperties[] = "invalid value for 'securityGroupId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['subnetId'])) {
                $invalidProperties[] = "invalid value for 'subnetId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
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
    * Gets ipv6Enable
    *  **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
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
    * @param bool|null $ipv6Enable **参数解释**：创建服务器是否启用IPv6。表示在创建服务器时是否启用IPv6支持。 **约束限制**：不涉及。 **取值范围**： - true：启用IPv6 - false：不启用IPv6 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets roceId
    *  **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getRoceId()
    {
        return $this->container['roceId'];
    }

    /**
    * Sets roceId
    *
    * @param string|null $roceId **参数解释**：服务器RoCE网络ID。表示服务器的RoCE网络ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setRoceId($roceId)
    {
        $this->container['roceId'] = $roceId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
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
    * @param string $securityGroupId **参数解释**：服务器所在的安全组ID。表示服务器所属的安全组ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
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
    * @param string $subnetId **参数解释**：服务器所在子网ID。表示服务器所属的子网ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
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
    * @param string $vpcId **参数解释**：服务器所在虚拟私有云ID。表示服务器所属的虚拟私有云ID。 **约束限制**：不涉及。 **取值范围**：必须是UUID格式的字符串。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets hyperCluster
    *  hyperCluster
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerNetworkHyperCluster|null
    */
    public function getHyperCluster()
    {
        return $this->container['hyperCluster'];
    }

    /**
    * Sets hyperCluster
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerNetworkHyperCluster|null $hyperCluster hyperCluster
    *
    * @return $this
    */
    public function setHyperCluster($hyperCluster)
    {
        $this->container['hyperCluster'] = $hyperCluster;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AllowedAddressPairs[]|null
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AllowedAddressPairs[]|null $allowedAddressPairs **参数解释：** IP/Mac对列表。 **约束限制：** - IP地址不允许为 “0.0.0.0/0”。 - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs为“1.1.1.1/0”，表示关闭源目的地址检查开关。 - 如果是虚拟IP绑定云服务器，       则mac_address可为空或者填写被绑定云服务器网卡的Mac地址。       被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 **取值范围：** 不涉及 **默认取值：** 不涉及\"
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
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

