<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DNatInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DNatInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    * natGatewayId  **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    * portId  **参数解释**: 端口ID。 **取值范围**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    * publicIp  **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    * internalServicePort  **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    * privateIp  **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'natGatewayId' => 'string',
            'portId' => 'string',
            'publicIpId' => 'string',
            'publicIp' => 'string',
            'externalServicePort' => 'int',
            'internalServicePort' => 'int',
            'privateIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    * natGatewayId  **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    * portId  **参数解释**: 端口ID。 **取值范围**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    * publicIp  **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    * internalServicePort  **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    * privateIp  **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'natGatewayId' => null,
        'portId' => null,
        'publicIpId' => null,
        'publicIp' => null,
        'externalServicePort' => null,
        'internalServicePort' => null,
        'privateIp' => null
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
    * nodeId  **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    * natGatewayId  **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    * portId  **参数解释**: 端口ID。 **取值范围**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    * publicIp  **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    * internalServicePort  **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    * privateIp  **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'natGatewayId' => 'nat_gateway_id',
            'portId' => 'port_id',
            'publicIpId' => 'public_ip_id',
            'publicIp' => 'public_ip',
            'externalServicePort' => 'external_service_port',
            'internalServicePort' => 'internal_service_port',
            'privateIp' => 'private_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    * natGatewayId  **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    * portId  **参数解释**: 端口ID。 **取值范围**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    * publicIp  **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    * internalServicePort  **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    * privateIp  **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'natGatewayId' => 'setNatGatewayId',
            'portId' => 'setPortId',
            'publicIpId' => 'setPublicIpId',
            'publicIp' => 'setPublicIp',
            'externalServicePort' => 'setExternalServicePort',
            'internalServicePort' => 'setInternalServicePort',
            'privateIp' => 'setPrivateIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    * natGatewayId  **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    * portId  **参数解释**: 端口ID。 **取值范围**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    * publicIp  **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    * internalServicePort  **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    * privateIp  **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'natGatewayId' => 'getNatGatewayId',
            'portId' => 'getPortId',
            'publicIpId' => 'getPublicIpId',
            'publicIp' => 'getPublicIp',
            'externalServicePort' => 'getExternalServicePort',
            'internalServicePort' => 'getInternalServicePort',
            'privateIp' => 'getPrivateIp'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
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
    * Gets nodeId
    *  **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId **参数解释**: 已经绑定NAT网关的节点ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets natGatewayId
    *  **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNatGatewayId()
    {
        return $this->container['natGatewayId'];
    }

    /**
    * Sets natGatewayId
    *
    * @param string|null $natGatewayId **参数解释**: NAT网关实例的ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets portId
    *  **参数解释**: 端口ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId **参数解释**: 端口ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets publicIpId
    *  **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string|null $publicIpId **参数解释**: 弹性公网ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**: 弹性公网IP。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets externalServicePort
    *  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getExternalServicePort()
    {
        return $this->container['externalServicePort'];
    }

    /**
    * Sets externalServicePort
    *
    * @param int|null $externalServicePort **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExternalServicePort($externalServicePort)
    {
        $this->container['externalServicePort'] = $externalServicePort;
        return $this;
    }

    /**
    * Gets internalServicePort
    *  **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getInternalServicePort()
    {
        return $this->container['internalServicePort'];
    }

    /**
    * Sets internalServicePort
    *
    * @param int|null $internalServicePort **参数解释**: GaussDB数据库端口号。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInternalServicePort($internalServicePort)
    {
        $this->container['internalServicePort'] = $internalServicePort;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 内网地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
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

