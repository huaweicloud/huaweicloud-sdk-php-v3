<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TunnelInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TunnelInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    * tunnelType  - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'virsubnetId' => 'string',
            'tunnelIp' => 'string',
            'tunnelPort' => 'int',
            'tunnelType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    * tunnelType  - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'virsubnetId' => null,
        'tunnelIp' => null,
        'tunnelPort' => 'int32',
        'tunnelType' => null
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
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    * tunnelType  - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'virsubnetId' => 'virsubnet_id',
            'tunnelIp' => 'tunnel_ip',
            'tunnelPort' => 'tunnel_port',
            'tunnelType' => 'tunnel_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    * tunnelType  - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'virsubnetId' => 'setVirsubnetId',
            'tunnelIp' => 'setTunnelIp',
            'tunnelPort' => 'setTunnelPort',
            'tunnelType' => 'setTunnelType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    * tunnelType  - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'virsubnetId' => 'getVirsubnetId',
            'tunnelIp' => 'getTunnelIp',
            'tunnelPort' => 'getTunnelPort',
            'tunnelType' => 'getTunnelType'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['tunnelIp'] = isset($data['tunnelIp']) ? $data['tunnelIp'] : null;
        $this->container['tunnelPort'] = isset($data['tunnelPort']) ? $data['tunnelPort'] : null;
        $this->container['tunnelType'] = isset($data['tunnelType']) ? $data['tunnelType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['tunnelIp'] === null) {
            $invalidProperties[] = "'tunnelIp' can't be null";
        }
        if ($this->container['tunnelPort'] === null) {
            $invalidProperties[] = "'tunnelPort' can't be null";
        }
        if ($this->container['tunnelType'] === null) {
            $invalidProperties[] = "'tunnelType' can't be null";
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
    * Gets vpcId
    *  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId - 参数解释：ESW所在隧道子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets tunnelIp
    *  - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getTunnelIp()
    {
        return $this->container['tunnelIp'];
    }

    /**
    * Sets tunnelIp
    *
    * @param string $tunnelIp - 参数解释：ESW实例的本端隧道IP。 - 约束限制：不能与已存在的子网IP冲突。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setTunnelIp($tunnelIp)
    {
        $this->container['tunnelIp'] = $tunnelIp;
        return $this;
    }

    /**
    * Gets tunnelPort
    *  - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @return int
    */
    public function getTunnelPort()
    {
        return $this->container['tunnelPort'];
    }

    /**
    * Sets tunnelPort
    *
    * @param int $tunnelPort - 参数解释：ESW实例的隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setTunnelPort($tunnelPort)
    {
        $this->container['tunnelPort'] = $tunnelPort;
        return $this;
    }

    /**
    * Gets tunnelType
    *  - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getTunnelType()
    {
        return $this->container['tunnelType'];
    }

    /**
    * Sets tunnelType
    *
    * @param string $tunnelType - 参数解释：ESW实例的隧道协议类型。 - 约束限制：不涉及。 - 取值范围：vxlan。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setTunnelType($tunnelType)
    {
        $this->container['tunnelType'] = $tunnelType;
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

