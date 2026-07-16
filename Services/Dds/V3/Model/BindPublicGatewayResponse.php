<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindPublicGatewayResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindPublicGatewayResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * nodeId  **参数解释：** 节点ID。 **取值范围：** 不涉及。
    * nodeName  **参数解释：** 节点名称。 **取值范围：** 不涉及。
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'natGatewayId' => 'string',
            'publicIpId' => 'string',
            'externalServicePort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * nodeId  **参数解释：** 节点ID。 **取值范围：** 不涉及。
    * nodeName  **参数解释：** 节点名称。 **取值范围：** 不涉及。
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'nodeId' => null,
        'nodeName' => null,
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
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * nodeId  **参数解释：** 节点ID。 **取值范围：** 不涉及。
    * nodeName  **参数解释：** 节点名称。 **取值范围：** 不涉及。
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'natGatewayId' => 'nat_gateway_id',
            'publicIpId' => 'public_ip_id',
            'externalServicePort' => 'external_service_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * nodeId  **参数解释：** 节点ID。 **取值范围：** 不涉及。
    * nodeName  **参数解释：** 节点名称。 **取值范围：** 不涉及。
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'natGatewayId' => 'setNatGatewayId',
            'publicIpId' => 'setPublicIpId',
            'externalServicePort' => 'setExternalServicePort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * nodeId  **参数解释：** 节点ID。 **取值范围：** 不涉及。
    * nodeName  **参数解释：** 节点名称。 **取值范围：** 不涉及。
    * natGatewayId  **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
    * publicIpId  **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
    * externalServicePort  **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
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
    *  **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    * @param string|null $instanceId **参数解释：** 实例ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释：** 实例名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释：** 节点ID。 **取值范围：** 不涉及。
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
    * @param string|null $nodeId **参数解释：** 节点ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释：** 节点名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName **参数解释：** 节点名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets natGatewayId
    *  **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
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
    * @param string|null $natGatewayId **参数解释：** 公网NAT网关实例的ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
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
    * @param string|null $publicIpId **参数解释：** 弹性公网IP的ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
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
    * @param int|null $externalServicePort **参数解释：** 弹性公网IP对外提供服务的端口号。 **取值范围：** 1~65535。
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

