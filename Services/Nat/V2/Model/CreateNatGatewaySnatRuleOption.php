<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNatGatewaySnatRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNatGatewaySnatRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * natGatewayId  公网NAT网关实例的ID。
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'natGatewayId' => 'string',
            'cidr' => 'string',
            'networkId' => 'string',
            'description' => 'string',
            'sourceType' => 'int',
            'floatingIpId' => 'string',
            'globalEipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * natGatewayId  公网NAT网关实例的ID。
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'natGatewayId' => null,
        'cidr' => null,
        'networkId' => null,
        'description' => null,
        'sourceType' => 'int32',
        'floatingIpId' => null,
        'globalEipId' => null
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
    * natGatewayId  公网NAT网关实例的ID。
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'natGatewayId' => 'nat_gateway_id',
            'cidr' => 'cidr',
            'networkId' => 'network_id',
            'description' => 'description',
            'sourceType' => 'source_type',
            'floatingIpId' => 'floating_ip_id',
            'globalEipId' => 'global_eip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * natGatewayId  公网NAT网关实例的ID。
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'natGatewayId' => 'setNatGatewayId',
            'cidr' => 'setCidr',
            'networkId' => 'setNetworkId',
            'description' => 'setDescription',
            'sourceType' => 'setSourceType',
            'floatingIpId' => 'setFloatingIpId',
            'globalEipId' => 'setGlobalEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * natGatewayId  公网NAT网关实例的ID。
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'natGatewayId' => 'getNatGatewayId',
            'cidr' => 'getCidr',
            'networkId' => 'getNetworkId',
            'description' => 'getDescription',
            'sourceType' => 'getSourceType',
            'floatingIpId' => 'getFloatingIpId',
            'globalEipId' => 'getGlobalEipId'
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
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['natGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['natGatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 18)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 18.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 9)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 9.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceType']) && ($this->container['sourceType'] > 1)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['sourceType']) && ($this->container['sourceType'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be bigger than or equal to 0.";
            }
        if ($this->container['floatingIpId'] === null) {
            $invalidProperties[] = "'floatingIpId' can't be null";
        }
            if ((mb_strlen($this->container['floatingIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['floatingIpId']) < 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['globalEipId']) && (mb_strlen($this->container['globalEipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalEipId']) && (mb_strlen($this->container['globalEipId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be bigger than or equal to 36.";
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
    * Gets natGatewayId
    *  公网NAT网关实例的ID。
    *
    * @return string
    */
    public function getNatGatewayId()
    {
        return $this->container['natGatewayId'];
    }

    /**
    * Sets natGatewayId
    *
    * @param string $natGatewayId 公网NAT网关实例的ID。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets cidr
    *  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets networkId
    *  规则使用的网络id。与cidr参数二选一。
    *
    * @return string|null
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string|null $networkId 规则使用的网络id。与cidr参数二选一。
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets description
    *  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
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
    * @param string|null $description SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sourceType
    *  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    *
    * @return int|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int|null $sourceType 0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets floatingIpId
    *  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    *
    * @return string
    */
    public function getFloatingIpId()
    {
        return $this->container['floatingIpId'];
    }

    /**
    * Sets floatingIpId
    *
    * @param string $floatingIpId 功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。 约束：弹性公网IP的id个数不能超过20个。
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets globalEipId
    *  全域弹性公网IP的id。
    *
    * @return string|null
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string|null $globalEipId 全域弹性公网IP的id。
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
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

