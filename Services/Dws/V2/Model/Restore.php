<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Restore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Restore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
    * subnetId  指定子网ID，用于集群网络配置。默认值与原集群相同。
    * securityGroupId  指定安全组ID，用于集群网络配置。默认值与原集群相同。
    * vpcId  指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
    * availabilityZone  指定集群可用区。默认值与原集群相同。
    * port  指定集群服务端口
    * publicIp  publicIp
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    * ipv6Enable  指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'vpcId' => 'string',
            'availabilityZone' => 'string',
            'port' => 'int',
            'publicIp' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicIp',
            'enterpriseProjectId' => 'string',
            'ipv6Enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
    * subnetId  指定子网ID，用于集群网络配置。默认值与原集群相同。
    * securityGroupId  指定安全组ID，用于集群网络配置。默认值与原集群相同。
    * vpcId  指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
    * availabilityZone  指定集群可用区。默认值与原集群相同。
    * port  指定集群服务端口
    * publicIp  publicIp
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    * ipv6Enable  指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'vpcId' => null,
        'availabilityZone' => null,
        'port' => 'int32',
        'publicIp' => null,
        'enterpriseProjectId' => null,
        'ipv6Enable' => null
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
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
    * subnetId  指定子网ID，用于集群网络配置。默认值与原集群相同。
    * securityGroupId  指定安全组ID，用于集群网络配置。默认值与原集群相同。
    * vpcId  指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
    * availabilityZone  指定集群可用区。默认值与原集群相同。
    * port  指定集群服务端口
    * publicIp  publicIp
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    * ipv6Enable  指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'vpcId' => 'vpc_id',
            'availabilityZone' => 'availability_zone',
            'port' => 'port',
            'publicIp' => 'public_ip',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipv6Enable' => 'ipv6_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
    * subnetId  指定子网ID，用于集群网络配置。默认值与原集群相同。
    * securityGroupId  指定安全组ID，用于集群网络配置。默认值与原集群相同。
    * vpcId  指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
    * availabilityZone  指定集群可用区。默认值与原集群相同。
    * port  指定集群服务端口
    * publicIp  publicIp
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    * ipv6Enable  指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'vpcId' => 'setVpcId',
            'availabilityZone' => 'setAvailabilityZone',
            'port' => 'setPort',
            'publicIp' => 'setPublicIp',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipv6Enable' => 'setIpv6Enable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
    * subnetId  指定子网ID，用于集群网络配置。默认值与原集群相同。
    * securityGroupId  指定安全组ID，用于集群网络配置。默认值与原集群相同。
    * vpcId  指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
    * availabilityZone  指定集群可用区。默认值与原集群相同。
    * port  指定集群服务端口
    * publicIp  publicIp
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    * ipv6Enable  指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'vpcId' => 'getVpcId',
            'availabilityZone' => 'getAvailabilityZone',
            'port' => 'getPort',
            'publicIp' => 'getPublicIp',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipv6Enable' => 'getIpv6Enable'
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
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
            if (!is_null($this->container['port']) && ($this->container['port'] > 30000)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 8000)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 8000.";
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
    *  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
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
    * @param string $name 集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线，下划线，长度为4~64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets subnetId
    *  指定子网ID，用于集群网络配置。默认值与原集群相同。
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
    * @param string|null $subnetId 指定子网ID，用于集群网络配置。默认值与原集群相同。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  指定安全组ID，用于集群网络配置。默认值与原集群相同。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 指定安全组ID，用于集群网络配置。默认值与原集群相同。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets vpcId
    *  指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
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
    * @param string|null $vpcId 指定虚拟私有云ID，用于集群网络配置。默认值与原集群相同。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  指定集群可用区。默认值与原集群相同。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 指定集群可用区。默认值与原集群相同。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets port
    *  指定集群服务端口
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 指定集群服务端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PublicIp|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PublicIp|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
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
    * @param string|null $enterpriseProjectId 企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
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
    * @param bool|null $ipv6Enable 指定网络协议类型，表明是否支持IPv6,默认不使用IPv6。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
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

