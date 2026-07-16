<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindPublicGatewayRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindPublicGatewayRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'natGatewayId' => 'string',
            'publicIpId' => 'string',
            'externalServicePort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'natGatewayId' => null,
        'publicIpId' => null,
        'externalServicePort' => null
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
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'natGatewayId' => 'nat_gateway_id',
            'publicIpId' => 'public_ip_id',
            'externalServicePort' => 'external_service_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'natGatewayId' => 'setNatGatewayId',
            'publicIpId' => 'setPublicIpId',
            'externalServicePort' => 'setExternalServicePort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'natGatewayId' => 'getNatGatewayId',
            'publicIpId' => 'getPublicIpId',
            'externalServicePort' => 'getExternalServicePort'
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
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
        if ($this->container['publicIpId'] === null) {
            $invalidProperties[] = "'publicIpId' can't be null";
        }
        if ($this->container['externalServicePort'] === null) {
            $invalidProperties[] = "'externalServicePort' can't be null";
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
    * Gets natGatewayId
    *  **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getNatGatewayId()
    {
        return $this->container['natGatewayId'];
    }

    /**
    * Sets natGatewayId
    *
    * @param string $natGatewayId **参数解释：** 公网NAT网关实例的ID。可以调用“查询公网NAT网关列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets publicIpId
    *  **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string $publicIpId **参数解释：** 弹性公网IP的ID。可以调用“查询弹性公网IP列表”接口获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets externalServicePort
    *  **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getExternalServicePort()
    {
        return $this->container['externalServicePort'];
    }

    /**
    * Sets externalServicePort
    *
    * @param int $externalServicePort **参数解释：** 弹性公网IP对外提供服务的端口号。 **约束限制：** 不涉及。 **取值范围：** 1~65535。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setExternalServicePort($externalServicePort)
    {
        $this->container['externalServicePort'] = $externalServicePort;
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

