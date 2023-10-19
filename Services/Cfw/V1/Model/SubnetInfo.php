<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubnetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubnetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  子网id
    * cidr  vpc cidr
    * name  子网名称
    * id  子网id
    * gatewayIp  子网网关ip
    * vpcId  vpc id
    * status  子网的状态
    * ipv6Enable  是否支持ipv6，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'cidr' => 'string',
            'name' => 'string',
            'id' => 'string',
            'gatewayIp' => 'string',
            'vpcId' => 'string',
            'status' => 'string',
            'ipv6Enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  子网id
    * cidr  vpc cidr
    * name  子网名称
    * id  子网id
    * gatewayIp  子网网关ip
    * vpcId  vpc id
    * status  子网的状态
    * ipv6Enable  是否支持ipv6，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'cidr' => null,
        'name' => null,
        'id' => null,
        'gatewayIp' => null,
        'vpcId' => null,
        'status' => null,
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
    * availabilityZone  子网id
    * cidr  vpc cidr
    * name  子网名称
    * id  子网id
    * gatewayIp  子网网关ip
    * vpcId  vpc id
    * status  子网的状态
    * ipv6Enable  是否支持ipv6，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'cidr' => 'cidr',
            'name' => 'name',
            'id' => 'id',
            'gatewayIp' => 'gateway_ip',
            'vpcId' => 'vpc_id',
            'status' => 'status',
            'ipv6Enable' => 'ipv6_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  子网id
    * cidr  vpc cidr
    * name  子网名称
    * id  子网id
    * gatewayIp  子网网关ip
    * vpcId  vpc id
    * status  子网的状态
    * ipv6Enable  是否支持ipv6，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'cidr' => 'setCidr',
            'name' => 'setName',
            'id' => 'setId',
            'gatewayIp' => 'setGatewayIp',
            'vpcId' => 'setVpcId',
            'status' => 'setStatus',
            'ipv6Enable' => 'setIpv6Enable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  子网id
    * cidr  vpc cidr
    * name  子网名称
    * id  子网id
    * gatewayIp  子网网关ip
    * vpcId  vpc id
    * status  子网的状态
    * ipv6Enable  是否支持ipv6，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'cidr' => 'getCidr',
            'name' => 'getName',
            'id' => 'getId',
            'gatewayIp' => 'getGatewayIp',
            'vpcId' => 'getVpcId',
            'status' => 'getStatus',
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['cidr']) && !preg_match("/^(?:(?:[0-9]|[1-9]\\d|1\\d{2}|2[0-4]\\d|25[0-5])(?:\\.(?:[0-9]|[1-9]\\d|1\\d{2}|2[0-4]\\d|25[0-5])){3}(?:(?:\/|\\\\)(?:\\d|[1-2]\\d|3[0-2]))?)$/", $this->container['cidr'])) {
                $invalidProperties[] = "invalid value for 'cidr', must be conform to the pattern /^(?:(?:[0-9]|[1-9]\\d|1\\d{2}|2[0-4]\\d|25[0-5])(?:\\.(?:[0-9]|[1-9]\\d|1\\d{2}|2[0-4]\\d|25[0-5])){3}(?:(?:\/|\\\\)(?:\\d|[1-2]\\d|3[0-2]))?)$/.";
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
    * Gets availabilityZone
    *  子网id
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
    * @param string|null $availabilityZone 子网id
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets cidr
    *  vpc cidr
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
    * @param string|null $cidr vpc cidr
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets name
    *  子网名称
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
    * @param string|null $name 子网名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  子网id
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
    * @param string|null $id 子网id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  子网网关ip
    *
    * @return string|null
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string|null $gatewayIp 子网网关ip
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpc id
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
    * @param string|null $vpcId vpc id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets status
    *  子网的状态
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
    * @param string|null $status 子网的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否支持ipv6，boolean值为true表示是，false表示否
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
    * @param bool|null $ipv6Enable 是否支持ipv6，boolean值为true表示是，false表示否
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

