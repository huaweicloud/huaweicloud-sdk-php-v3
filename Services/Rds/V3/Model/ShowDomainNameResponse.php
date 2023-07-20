<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainNameResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainNameResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * dnsName  实例域名。
    * dnsType  实例域名类型，当前只支持private。
    * ipv4Address  实例内网IPv4地址。
    * status  域名状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'dnsName' => 'string',
            'dnsType' => 'string',
            'ipv4Address' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * dnsName  实例域名。
    * dnsType  实例域名类型，当前只支持private。
    * ipv4Address  实例内网IPv4地址。
    * status  域名状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'dnsName' => null,
        'dnsType' => null,
        'ipv4Address' => null,
        'status' => null
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
    * instanceId  实例ID。
    * dnsName  实例域名。
    * dnsType  实例域名类型，当前只支持private。
    * ipv4Address  实例内网IPv4地址。
    * status  域名状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'dnsName' => 'dns_name',
            'dnsType' => 'dns_type',
            'ipv4Address' => 'ipv4_address',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * dnsName  实例域名。
    * dnsType  实例域名类型，当前只支持private。
    * ipv4Address  实例内网IPv4地址。
    * status  域名状态
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'dnsName' => 'setDnsName',
            'dnsType' => 'setDnsType',
            'ipv4Address' => 'setIpv4Address',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * dnsName  实例域名。
    * dnsType  实例域名类型，当前只支持private。
    * ipv4Address  实例内网IPv4地址。
    * status  域名状态
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'dnsName' => 'getDnsName',
            'dnsType' => 'getDnsType',
            'ipv4Address' => 'getIpv4Address',
            'status' => 'getStatus'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['dnsName'] = isset($data['dnsName']) ? $data['dnsName'] : null;
        $this->container['dnsType'] = isset($data['dnsType']) ? $data['dnsType'] : null;
        $this->container['ipv4Address'] = isset($data['ipv4Address']) ? $data['ipv4Address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets dnsName
    *  实例域名。
    *
    * @return string|null
    */
    public function getDnsName()
    {
        return $this->container['dnsName'];
    }

    /**
    * Sets dnsName
    *
    * @param string|null $dnsName 实例域名。
    *
    * @return $this
    */
    public function setDnsName($dnsName)
    {
        $this->container['dnsName'] = $dnsName;
        return $this;
    }

    /**
    * Gets dnsType
    *  实例域名类型，当前只支持private。
    *
    * @return string|null
    */
    public function getDnsType()
    {
        return $this->container['dnsType'];
    }

    /**
    * Sets dnsType
    *
    * @param string|null $dnsType 实例域名类型，当前只支持private。
    *
    * @return $this
    */
    public function setDnsType($dnsType)
    {
        $this->container['dnsType'] = $dnsType;
        return $this;
    }

    /**
    * Gets ipv4Address
    *  实例内网IPv4地址。
    *
    * @return string|null
    */
    public function getIpv4Address()
    {
        return $this->container['ipv4Address'];
    }

    /**
    * Sets ipv4Address
    *
    * @param string|null $ipv4Address 实例内网IPv4地址。
    *
    * @return $this
    */
    public function setIpv4Address($ipv4Address)
    {
        $this->container['ipv4Address'] = $ipv4Address;
        return $this;
    }

    /**
    * Gets status
    *  域名状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 域名状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

