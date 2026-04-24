<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindDNatRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindDNatRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * natGatewayId  **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
    * action  **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'publicIpId' => 'string',
            'natGatewayId' => 'string',
            'externalServicePort' => 'int',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * natGatewayId  **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
    * action  **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'publicIpId' => null,
        'natGatewayId' => null,
        'externalServicePort' => null,
        'action' => null
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
    * nodeId  **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * natGatewayId  **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
    * action  **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'publicIpId' => 'public_ip_id',
            'natGatewayId' => 'nat_gateway_id',
            'externalServicePort' => 'external_service_port',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * natGatewayId  **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
    * action  **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'publicIpId' => 'setPublicIpId',
            'natGatewayId' => 'setNatGatewayId',
            'externalServicePort' => 'setExternalServicePort',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * publicIpId  **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * natGatewayId  **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    * externalServicePort  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
    * action  **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'publicIpId' => 'getPublicIpId',
            'natGatewayId' => 'getNatGatewayId',
            'externalServicePort' => 'getExternalServicePort',
            'action' => 'getAction'
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
    const ACTION_BIND = 'BIND';
    const ACTION_UNBIND = 'UNBIND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_BIND,
            self::ACTION_UNBIND,
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets nodeId
    *  **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**: 需要绑定或者解绑的节点ID。 **约束限制**: 分布式仅支持CN节点，集中式不支持日志节点。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets publicIpId
    *  **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
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
    * @param string|null $publicIpId **参数解释**: 弹性公网ID。 **约束限制**: action类型为BIND时必选。 一个弹性公网IP只能绑定到一个NAT网关。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets natGatewayId
    *  **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
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
    * @param string|null $natGatewayId **参数解释**: 公网NAT网关的ID。 **约束限制**: action类型为BIND时必选。 NAT网关的虚拟私有云和子网需要和GaussDB数据库实例的虚拟私有云和子网保持一致。 **取值范围**: UUID格式。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets externalServicePort
    *  **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
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
    * @param int|null $externalServicePort **参数解释**: 对外提供服务的端口号，可通过弹性公网IP加该端口号的方式连接数据库实例。 **约束限制**: action类型为BIND时必选。 **取值范围**: 0~65535。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setExternalServicePort($externalServicePort)
    {
        $this->container['externalServicePort'] = $externalServicePort;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**: 操作标识。 **约束限制**: 不涉及。 **取值范围**: BIND，表示绑定NAT网关。 UNBIND，表示解绑NAT网关。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

