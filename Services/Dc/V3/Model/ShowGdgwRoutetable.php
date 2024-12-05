<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGdgwRoutetable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGdgwRoutetable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一ID
    * tenantId  租户ID
    * gatewayId  网关ID
    * destination  描述信息
    * nexthop  下一跳ID
    * type  类型
    * obtainMode  获得模式
    * status  状态：ACTIVE-正常，ERROR-异常
    * addressFamily  地址簇：ipv4 | ipv6
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'gatewayId' => 'string',
            'destination' => 'string',
            'nexthop' => 'string',
            'type' => 'string',
            'obtainMode' => 'string',
            'status' => 'string',
            'addressFamily' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一ID
    * tenantId  租户ID
    * gatewayId  网关ID
    * destination  描述信息
    * nexthop  下一跳ID
    * type  类型
    * obtainMode  获得模式
    * status  状态：ACTIVE-正常，ERROR-异常
    * addressFamily  地址簇：ipv4 | ipv6
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'gatewayId' => null,
        'destination' => null,
        'nexthop' => null,
        'type' => null,
        'obtainMode' => null,
        'status' => null,
        'addressFamily' => null,
        'description' => null
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
    * id  唯一ID
    * tenantId  租户ID
    * gatewayId  网关ID
    * destination  描述信息
    * nexthop  下一跳ID
    * type  类型
    * obtainMode  获得模式
    * status  状态：ACTIVE-正常，ERROR-异常
    * addressFamily  地址簇：ipv4 | ipv6
    * description  描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'gatewayId' => 'gateway_id',
            'destination' => 'destination',
            'nexthop' => 'nexthop',
            'type' => 'type',
            'obtainMode' => 'obtain_mode',
            'status' => 'status',
            'addressFamily' => 'address_family',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一ID
    * tenantId  租户ID
    * gatewayId  网关ID
    * destination  描述信息
    * nexthop  下一跳ID
    * type  类型
    * obtainMode  获得模式
    * status  状态：ACTIVE-正常，ERROR-异常
    * addressFamily  地址簇：ipv4 | ipv6
    * description  描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'gatewayId' => 'setGatewayId',
            'destination' => 'setDestination',
            'nexthop' => 'setNexthop',
            'type' => 'setType',
            'obtainMode' => 'setObtainMode',
            'status' => 'setStatus',
            'addressFamily' => 'setAddressFamily',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一ID
    * tenantId  租户ID
    * gatewayId  网关ID
    * destination  描述信息
    * nexthop  下一跳ID
    * type  类型
    * obtainMode  获得模式
    * status  状态：ACTIVE-正常，ERROR-异常
    * addressFamily  地址簇：ipv4 | ipv6
    * description  描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'gatewayId' => 'getGatewayId',
            'destination' => 'getDestination',
            'nexthop' => 'getNexthop',
            'type' => 'getType',
            'obtainMode' => 'getObtainMode',
            'status' => 'getStatus',
            'addressFamily' => 'getAddressFamily',
            'description' => 'getDescription'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['nexthop'] = isset($data['nexthop']) ? $data['nexthop'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['obtainMode'] = isset($data['obtainMode']) ? $data['obtainMode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    *  唯一ID
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
    * @param string|null $id 唯一ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets gatewayId
    *  网关ID
    *
    * @return string|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string|null $gatewayId 网关ID
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets destination
    *  描述信息
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 描述信息
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets nexthop
    *  下一跳ID
    *
    * @return string|null
    */
    public function getNexthop()
    {
        return $this->container['nexthop'];
    }

    /**
    * Sets nexthop
    *
    * @param string|null $nexthop 下一跳ID
    *
    * @return $this
    */
    public function setNexthop($nexthop)
    {
        $this->container['nexthop'] = $nexthop;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets obtainMode
    *  获得模式
    *
    * @return string|null
    */
    public function getObtainMode()
    {
        return $this->container['obtainMode'];
    }

    /**
    * Sets obtainMode
    *
    * @param string|null $obtainMode 获得模式
    *
    * @return $this
    */
    public function setObtainMode($obtainMode)
    {
        $this->container['obtainMode'] = $obtainMode;
        return $this;
    }

    /**
    * Gets status
    *  状态：ACTIVE-正常，ERROR-异常
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
    * @param string|null $status 状态：ACTIVE-正常，ERROR-异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets addressFamily
    *  地址簇：ipv4 | ipv6
    *
    * @return string|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string|null $addressFamily 地址簇：ipv4 | ipv6
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

