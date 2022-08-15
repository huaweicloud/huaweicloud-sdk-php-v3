<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAddServerNicOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAddServerNicOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
    * securityGroups  添加网卡的安全组信息
    * ipAddress  IP地址，无该参数表示自动分配IP地址。
    * ipv6Enable  是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
    * ipv6Bandwidth  ipv6Bandwidth
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerNicSecurityGroup[]',
            'ipAddress' => 'string',
            'ipv6Enable' => 'bool',
            'ipv6Bandwidth' => '\HuaweiCloud\SDK\Ecs\V2\Model\Ipv6Bandwidth'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
    * securityGroups  添加网卡的安全组信息
    * ipAddress  IP地址，无该参数表示自动分配IP地址。
    * ipv6Enable  是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
    * ipv6Bandwidth  ipv6Bandwidth
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'securityGroups' => null,
        'ipAddress' => null,
        'ipv6Enable' => null,
        'ipv6Bandwidth' => null
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
    * subnetId  云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
    * securityGroups  添加网卡的安全组信息
    * ipAddress  IP地址，无该参数表示自动分配IP地址。
    * ipv6Enable  是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
    * ipv6Bandwidth  ipv6Bandwidth
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'securityGroups' => 'security_groups',
            'ipAddress' => 'ip_address',
            'ipv6Enable' => 'ipv6_enable',
            'ipv6Bandwidth' => 'ipv6_bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
    * securityGroups  添加网卡的安全组信息
    * ipAddress  IP地址，无该参数表示自动分配IP地址。
    * ipv6Enable  是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
    * ipv6Bandwidth  ipv6Bandwidth
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'securityGroups' => 'setSecurityGroups',
            'ipAddress' => 'setIpAddress',
            'ipv6Enable' => 'setIpv6Enable',
            'ipv6Bandwidth' => 'setIpv6Bandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
    * securityGroups  添加网卡的安全组信息
    * ipAddress  IP地址，无该参数表示自动分配IP地址。
    * ipv6Enable  是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
    * ipv6Bandwidth  ipv6Bandwidth
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'securityGroups' => 'getSecurityGroups',
            'ipAddress' => 'getIpAddress',
            'ipv6Enable' => 'getIpv6Enable',
            'ipv6Bandwidth' => 'getIpv6Bandwidth'
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['ipv6Bandwidth'] = isset($data['ipv6Bandwidth']) ? $data['ipv6Bandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
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
    * Gets subnetId
    *  云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
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
    * @param string $subnetId 云服务器添加网卡的信息。  需要指定云服务器所属虚拟私有云下已创建的网络（network）的ID，UUID格式。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroups
    *  添加网卡的安全组信息
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerNicSecurityGroup[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerNicSecurityGroup[]|null $securityGroups 添加网卡的安全组信息
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IP地址，无该参数表示自动分配IP地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IP地址，无该参数表示自动分配IP地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
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
    * @param bool|null $ipv6Enable 是否支持ipv6。  取值为true时，标识此网卡支持ipv6。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets ipv6Bandwidth
    *  ipv6Bandwidth
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\Ipv6Bandwidth|null
    */
    public function getIpv6Bandwidth()
    {
        return $this->container['ipv6Bandwidth'];
    }

    /**
    * Sets ipv6Bandwidth
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\Ipv6Bandwidth|null $ipv6Bandwidth ipv6Bandwidth
    *
    * @return $this
    */
    public function setIpv6Bandwidth($ipv6Bandwidth)
    {
        $this->container['ipv6Bandwidth'] = $ipv6Bandwidth;
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

