<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Member implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Member';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  后端服务器名称。
    * address  后端服务器对应的IP地址。
    * protocolPort  后端服务器业务端口号。
    * operatingStatus  后端云服务器的健康状态。
    * instanceId  member关联的实例ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'address' => 'string',
            'protocolPort' => 'int',
            'operatingStatus' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  后端服务器名称。
    * address  后端服务器对应的IP地址。
    * protocolPort  后端服务器业务端口号。
    * operatingStatus  后端云服务器的健康状态。
    * instanceId  member关联的实例ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'address' => null,
        'protocolPort' => 'int32',
        'operatingStatus' => null,
        'instanceId' => null
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
    * name  后端服务器名称。
    * address  后端服务器对应的IP地址。
    * protocolPort  后端服务器业务端口号。
    * operatingStatus  后端云服务器的健康状态。
    * instanceId  member关联的实例ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'address' => 'address',
            'protocolPort' => 'protocol_port',
            'operatingStatus' => 'operating_status',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  后端服务器名称。
    * address  后端服务器对应的IP地址。
    * protocolPort  后端服务器业务端口号。
    * operatingStatus  后端云服务器的健康状态。
    * instanceId  member关联的实例ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort',
            'operatingStatus' => 'setOperatingStatus',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  后端服务器名称。
    * address  后端服务器对应的IP地址。
    * protocolPort  后端服务器业务端口号。
    * operatingStatus  后端云服务器的健康状态。
    * instanceId  member关联的实例ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort',
            'operatingStatus' => 'getOperatingStatus',
            'instanceId' => 'getInstanceId'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
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
    * Gets name
    *  后端服务器名称。
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
    * @param string|null $name 后端服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets address
    *  后端服务器对应的IP地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 后端服务器对应的IP地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端服务器业务端口号。
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 后端服务器业务端口号。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  后端云服务器的健康状态。
    *
    * @return string|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string|null $operatingStatus 后端云服务器的健康状态。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets instanceId
    *  member关联的实例ID。
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
    * @param string|null $instanceId member关联的实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

