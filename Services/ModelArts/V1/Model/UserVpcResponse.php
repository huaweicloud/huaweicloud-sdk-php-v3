<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserVpcResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserVpcResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
    * subnetId  **参数解释**：子网ID。 **取值范围**：不涉及。
    * securityGroupIds  **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    * connectCidrs  **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    * portId  **参数解释**：网卡ID。 **取值范围**：不涉及。
    * portIp  **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupIds' => 'string[]',
            'connectCidrs' => 'string',
            'portId' => 'string[]',
            'portIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
    * subnetId  **参数解释**：子网ID。 **取值范围**：不涉及。
    * securityGroupIds  **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    * connectCidrs  **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    * portId  **参数解释**：网卡ID。 **取值范围**：不涉及。
    * portIp  **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupIds' => null,
        'connectCidrs' => null,
        'portId' => null,
        'portIp' => null
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
    * vpcId  **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
    * subnetId  **参数解释**：子网ID。 **取值范围**：不涉及。
    * securityGroupIds  **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    * connectCidrs  **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    * portId  **参数解释**：网卡ID。 **取值范围**：不涉及。
    * portIp  **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupIds' => 'security_group_ids',
            'connectCidrs' => 'connect_cidrs',
            'portId' => 'port_id',
            'portIp' => 'port_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
    * subnetId  **参数解释**：子网ID。 **取值范围**：不涉及。
    * securityGroupIds  **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    * connectCidrs  **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    * portId  **参数解释**：网卡ID。 **取值范围**：不涉及。
    * portIp  **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupIds' => 'setSecurityGroupIds',
            'connectCidrs' => 'setConnectCidrs',
            'portId' => 'setPortId',
            'portIp' => 'setPortIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
    * subnetId  **参数解释**：子网ID。 **取值范围**：不涉及。
    * securityGroupIds  **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    * connectCidrs  **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    * portId  **参数解释**：网卡ID。 **取值范围**：不涉及。
    * portIp  **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupIds' => 'getSecurityGroupIds',
            'connectCidrs' => 'getConnectCidrs',
            'portId' => 'getPortId',
            'portIp' => 'getPortIp'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupIds'] = isset($data['securityGroupIds']) ? $data['securityGroupIds'] : null;
        $this->container['connectCidrs'] = isset($data['connectCidrs']) ? $data['connectCidrs'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['portIp'] = isset($data['portIp']) ? $data['portIp'] : null;
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
    * Gets vpcId
    *  **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
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
    * @param string|null $vpcId **参数解释**：虚拟私有网络（VPC）ID。 **取值范围**：不涉及。
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
    *  **参数解释**：子网ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId **参数解释**：子网ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupIds
    *  **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    *
    * @return string[]|null
    */
    public function getSecurityGroupIds()
    {
        return $this->container['securityGroupIds'];
    }

    /**
    * Sets securityGroupIds
    *
    * @param string[]|null $securityGroupIds **参数解释**：安全组ID列表。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupIds($securityGroupIds)
    {
        $this->container['securityGroupIds'] = $securityGroupIds;
        return $this;
    }

    /**
    * Gets connectCidrs
    *  **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getConnectCidrs()
    {
        return $this->container['connectCidrs'];
    }

    /**
    * Sets connectCidrs
    *
    * @param string|null $connectCidrs **参数解释**：连接的CIDR地址列表。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setConnectCidrs($connectCidrs)
    {
        $this->container['connectCidrs'] = $connectCidrs;
        return $this;
    }

    /**
    * Gets portId
    *  **参数解释**：网卡ID。 **取值范围**：不涉及。
    *
    * @return string[]|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string[]|null $portId **参数解释**：网卡ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets portIp
    *  **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPortIp()
    {
        return $this->container['portIp'];
    }

    /**
    * Sets portIp
    *
    * @param string|null $portIp **参数解释**：网卡ip。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPortIp($portIp)
    {
        $this->container['portIp'] = $portIp;
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

