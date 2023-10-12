<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsLoadBalancerResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsLoadBalancerResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  负载均衡器ID。
    * name  负载均衡器名称。
    * guaranteed  是否独享型LB。 - false：共享型。 - true：独享型。
    * billingInfo  资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    * description  描述信息。
    * vpcId  负载均衡器所属VPC ID。
    * provisioningStatus  负载均衡器的配置状态。
    * listeners  listeners
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * publicips  publicips
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'guaranteed' => 'string',
            'billingInfo' => 'string',
            'description' => 'string',
            'vpcId' => 'string',
            'provisioningStatus' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Css\V1\Model\EsListenersResource',
            'vipAddress' => 'string',
            'publicips' => '\HuaweiCloud\SDK\Css\V1\Model\EsPublicipsResource'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  负载均衡器ID。
    * name  负载均衡器名称。
    * guaranteed  是否独享型LB。 - false：共享型。 - true：独享型。
    * billingInfo  资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    * description  描述信息。
    * vpcId  负载均衡器所属VPC ID。
    * provisioningStatus  负载均衡器的配置状态。
    * listeners  listeners
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * publicips  publicips
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'guaranteed' => null,
        'billingInfo' => null,
        'description' => null,
        'vpcId' => null,
        'provisioningStatus' => null,
        'listeners' => null,
        'vipAddress' => null,
        'publicips' => null
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
    * id  负载均衡器ID。
    * name  负载均衡器名称。
    * guaranteed  是否独享型LB。 - false：共享型。 - true：独享型。
    * billingInfo  资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    * description  描述信息。
    * vpcId  负载均衡器所属VPC ID。
    * provisioningStatus  负载均衡器的配置状态。
    * listeners  listeners
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * publicips  publicips
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'guaranteed' => 'guaranteed',
            'billingInfo' => 'billing_info',
            'description' => 'description',
            'vpcId' => 'vpc_id',
            'provisioningStatus' => 'provisioning_status',
            'listeners' => 'listeners',
            'vipAddress' => 'vip_address',
            'publicips' => 'publicips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  负载均衡器ID。
    * name  负载均衡器名称。
    * guaranteed  是否独享型LB。 - false：共享型。 - true：独享型。
    * billingInfo  资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    * description  描述信息。
    * vpcId  负载均衡器所属VPC ID。
    * provisioningStatus  负载均衡器的配置状态。
    * listeners  listeners
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * publicips  publicips
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'guaranteed' => 'setGuaranteed',
            'billingInfo' => 'setBillingInfo',
            'description' => 'setDescription',
            'vpcId' => 'setVpcId',
            'provisioningStatus' => 'setProvisioningStatus',
            'listeners' => 'setListeners',
            'vipAddress' => 'setVipAddress',
            'publicips' => 'setPublicips'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  负载均衡器ID。
    * name  负载均衡器名称。
    * guaranteed  是否独享型LB。 - false：共享型。 - true：独享型。
    * billingInfo  资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    * description  描述信息。
    * vpcId  负载均衡器所属VPC ID。
    * provisioningStatus  负载均衡器的配置状态。
    * listeners  listeners
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * publicips  publicips
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'guaranteed' => 'getGuaranteed',
            'billingInfo' => 'getBillingInfo',
            'description' => 'getDescription',
            'vpcId' => 'getVpcId',
            'provisioningStatus' => 'getProvisioningStatus',
            'listeners' => 'getListeners',
            'vipAddress' => 'getVipAddress',
            'publicips' => 'getPublicips'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['guaranteed'] = isset($data['guaranteed']) ? $data['guaranteed'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['publicips'] = isset($data['publicips']) ? $data['publicips'] : null;
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
    * Gets id
    *  负载均衡器ID。
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
    * @param string|null $id 负载均衡器ID。
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
    *  负载均衡器名称。
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
    * @param string|null $name 负载均衡器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets guaranteed
    *  是否独享型LB。 - false：共享型。 - true：独享型。
    *
    * @return string|null
    */
    public function getGuaranteed()
    {
        return $this->container['guaranteed'];
    }

    /**
    * Sets guaranteed
    *
    * @param string|null $guaranteed 是否独享型LB。 - false：共享型。 - true：独享型。
    *
    * @return $this
    */
    public function setGuaranteed($guaranteed)
    {
        $this->container['guaranteed'] = $guaranteed;
        return $this;
    }

    /**
    * Gets billingInfo
    *  资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo 资源账单信息 - 空：按需计费。 - 非空：包周期计费。
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
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
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vpcId
    *  负载均衡器所属VPC ID。
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
    * @param string|null $vpcId 负载均衡器所属VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  负载均衡器的配置状态。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus 负载均衡器的配置状态。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets listeners
    *  listeners
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\EsListenersResource|null
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\EsListenersResource|null $listeners listeners
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets vipAddress
    *  负载均衡器的IPv4虚拟IP地址。
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
    * @param string|null $vipAddress 负载均衡器的IPv4虚拟IP地址。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets publicips
    *  publicips
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\EsPublicipsResource|null
    */
    public function getPublicips()
    {
        return $this->container['publicips'];
    }

    /**
    * Sets publicips
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\EsPublicipsResource|null $publicips publicips
    *
    * @return $this
    */
    public function setPublicips($publicips)
    {
        $this->container['publicips'] = $publicips;
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

