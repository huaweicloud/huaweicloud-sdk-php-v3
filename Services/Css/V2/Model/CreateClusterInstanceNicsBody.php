<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterInstanceNicsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterInstanceNicsBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * netId  子网ID(网络ID)。
    * securityGroupId  安全组ID。
    * ips  节点IP信息，在指定IP创建集群时配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'netId' => 'string',
            'securityGroupId' => 'string',
            'ips' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * netId  子网ID(网络ID)。
    * securityGroupId  安全组ID。
    * ips  节点IP信息，在指定IP创建集群时配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'netId' => null,
        'securityGroupId' => null,
        'ips' => null
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
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * netId  子网ID(网络ID)。
    * securityGroupId  安全组ID。
    * ips  节点IP信息，在指定IP创建集群时配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpcId',
            'netId' => 'netId',
            'securityGroupId' => 'securityGroupId',
            'ips' => 'ips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * netId  子网ID(网络ID)。
    * securityGroupId  安全组ID。
    * ips  节点IP信息，在指定IP创建集群时配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'netId' => 'setNetId',
            'securityGroupId' => 'setSecurityGroupId',
            'ips' => 'setIps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * netId  子网ID(网络ID)。
    * securityGroupId  安全组ID。
    * ips  节点IP信息，在指定IP创建集群时配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'netId' => 'getNetId',
            'securityGroupId' => 'getSecurityGroupId',
            'ips' => 'getIps'
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
        $this->container['netId'] = isset($data['netId']) ? $data['netId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['netId'] === null) {
            $invalidProperties[] = "'netId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
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
    * Gets vpcId
    *  指定虚拟私有云ID，用于集群网络配置。
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
    * @param string $vpcId 指定虚拟私有云ID，用于集群网络配置。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets netId
    *  子网ID(网络ID)。
    *
    * @return string
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string $netId 子网ID(网络ID)。
    *
    * @return $this
    */
    public function setNetId($netId)
    {
        $this->container['netId'] = $netId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。
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
    * @param string $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets ips
    *  节点IP信息，在指定IP创建集群时配置。
    *
    * @return string[]|null
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string[]|null $ips 节点IP信息，在指定IP创建集群时配置。
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
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

