<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommonRoutetable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommonRoutetable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  路由id
    * tenantId  租户id
    * gatewayId  网关id
    * destination  路由子网
    * nexthop  下一跳id
    * obtainMode  路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
    * status  路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
    * addressFamily  addressFamily
    * description  路由描述
    * type  下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'gatewayId' => 'string',
            'destination' => 'string',
            'nexthop' => 'string',
            'obtainMode' => 'string',
            'status' => 'string',
            'addressFamily' => '\HuaweiCloud\SDK\Dc\V3\Model\AddressFamily',
            'description' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  路由id
    * tenantId  租户id
    * gatewayId  网关id
    * destination  路由子网
    * nexthop  下一跳id
    * obtainMode  路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
    * status  路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
    * addressFamily  addressFamily
    * description  路由描述
    * type  下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'gatewayId' => null,
        'destination' => null,
        'nexthop' => null,
        'obtainMode' => null,
        'status' => null,
        'addressFamily' => null,
        'description' => null,
        'type' => null
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
    * id  路由id
    * tenantId  租户id
    * gatewayId  网关id
    * destination  路由子网
    * nexthop  下一跳id
    * obtainMode  路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
    * status  路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
    * addressFamily  addressFamily
    * description  路由描述
    * type  下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'gatewayId' => 'gateway_id',
            'destination' => 'destination',
            'nexthop' => 'nexthop',
            'obtainMode' => 'obtain_mode',
            'status' => 'status',
            'addressFamily' => 'address_family',
            'description' => 'description',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  路由id
    * tenantId  租户id
    * gatewayId  网关id
    * destination  路由子网
    * nexthop  下一跳id
    * obtainMode  路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
    * status  路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
    * addressFamily  addressFamily
    * description  路由描述
    * type  下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'gatewayId' => 'setGatewayId',
            'destination' => 'setDestination',
            'nexthop' => 'setNexthop',
            'obtainMode' => 'setObtainMode',
            'status' => 'setStatus',
            'addressFamily' => 'setAddressFamily',
            'description' => 'setDescription',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  路由id
    * tenantId  租户id
    * gatewayId  网关id
    * destination  路由子网
    * nexthop  下一跳id
    * obtainMode  路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
    * status  路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
    * addressFamily  addressFamily
    * description  路由描述
    * type  下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'gatewayId' => 'getGatewayId',
            'destination' => 'getDestination',
            'nexthop' => 'getNexthop',
            'obtainMode' => 'getObtainMode',
            'status' => 'getStatus',
            'addressFamily' => 'getAddressFamily',
            'description' => 'getDescription',
            'type' => 'getType'
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
    const OBTAIN_MODE_CUSTOMIZED = 'customized';
    const OBTAIN_MODE_SPECIFIC = 'specific';
    const OBTAIN_MODE_BGP = 'bgp';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ERROR = 'ERROR';
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const TYPE_VIF_PEER = 'vif_peer';
    const TYPE_GDGW = 'gdgw';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObtainModeAllowableValues()
    {
        return [
            self::OBTAIN_MODE_CUSTOMIZED,
            self::OBTAIN_MODE_SPECIFIC,
            self::OBTAIN_MODE_BGP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ERROR,
            self::STATUS_PENDING_CREATE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VIF_PEER,
            self::TYPE_GDGW,
        ];
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
        $this->container['obtainMode'] = isset($data['obtainMode']) ? $data['obtainMode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tenantId']) < 64)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
            if ((mb_strlen($this->container['destination']) > 64)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['destination']) < 64)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be bigger than or equal to 64.";
            }
        if ($this->container['nexthop'] === null) {
            $invalidProperties[] = "'nexthop' can't be null";
        }
            if ((mb_strlen($this->container['nexthop']) > 36)) {
                $invalidProperties[] = "invalid value for 'nexthop', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['nexthop']) < 36)) {
                $invalidProperties[] = "invalid value for 'nexthop', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['obtainMode'] === null) {
            $invalidProperties[] = "'obtainMode' can't be null";
        }
            $allowedValues = $this->getObtainModeAllowableValues();
                if (!is_null($this->container['obtainMode']) && !in_array($this->container['obtainMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'obtainMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['addressFamily'] === null) {
            $invalidProperties[] = "'addressFamily' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  路由id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 路由id
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
    *  租户id
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 租户id
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
    *  网关id
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
    * @param string|null $gatewayId 网关id
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
    *  路由子网
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 路由子网
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
    *  下一跳id
    *
    * @return string
    */
    public function getNexthop()
    {
        return $this->container['nexthop'];
    }

    /**
    * Sets nexthop
    *
    * @param string $nexthop 下一跳id
    *
    * @return $this
    */
    public function setNexthop($nexthop)
    {
        $this->container['nexthop'] = $nexthop;
        return $this;
    }

    /**
    * Gets obtainMode
    *  路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
    *
    * @return string
    */
    public function getObtainMode()
    {
        return $this->container['obtainMode'];
    }

    /**
    * Sets obtainMode
    *
    * @param string $obtainMode 路由类型: - customized: 默认路由 - specific: 自定义路由 - bgp: 动态路由
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
    *  路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 路由状态: - ACTIVE: 下发正常 - ERROR: 下发失败 - PENDING_CREATE: 待下发
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
    *  addressFamily
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\AddressFamily
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\AddressFamily $addressFamily addressFamily
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
    *  路由描述
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
    * @param string|null $description 路由描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 下一跳类型: - vif_peer: 虚拟接口对等体 - gdgw: 全域接入网关
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

