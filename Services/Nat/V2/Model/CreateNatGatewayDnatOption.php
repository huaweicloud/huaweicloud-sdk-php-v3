<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNatGatewayDnatOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNatGatewayDnatOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  DNAT规则的描述，长度限制为255。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * natGatewayId  公网NAT网关实例的ID。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * floatingIpId  弹性公网IP的id。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'portId' => 'string',
            'privateIp' => 'string',
            'natGatewayId' => 'string',
            'internalServicePort' => 'int',
            'floatingIpId' => 'string',
            'externalServicePort' => 'int',
            'protocol' => 'string',
            'internalServicePortRange' => 'string',
            'externalServicePortRange' => 'string',
            'globalEipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  DNAT规则的描述，长度限制为255。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * natGatewayId  公网NAT网关实例的ID。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * floatingIpId  弹性公网IP的id。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'portId' => null,
        'privateIp' => null,
        'natGatewayId' => null,
        'internalServicePort' => 'int32',
        'floatingIpId' => null,
        'externalServicePort' => 'int32',
        'protocol' => null,
        'internalServicePortRange' => null,
        'externalServicePortRange' => null,
        'globalEipId' => null
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
    * description  DNAT规则的描述，长度限制为255。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * natGatewayId  公网NAT网关实例的ID。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * floatingIpId  弹性公网IP的id。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'portId' => 'port_id',
            'privateIp' => 'private_ip',
            'natGatewayId' => 'nat_gateway_id',
            'internalServicePort' => 'internal_service_port',
            'floatingIpId' => 'floating_ip_id',
            'externalServicePort' => 'external_service_port',
            'protocol' => 'protocol',
            'internalServicePortRange' => 'internal_service_port_range',
            'externalServicePortRange' => 'external_service_port_range',
            'globalEipId' => 'global_eip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  DNAT规则的描述，长度限制为255。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * natGatewayId  公网NAT网关实例的ID。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * floatingIpId  弹性公网IP的id。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'portId' => 'setPortId',
            'privateIp' => 'setPrivateIp',
            'natGatewayId' => 'setNatGatewayId',
            'internalServicePort' => 'setInternalServicePort',
            'floatingIpId' => 'setFloatingIpId',
            'externalServicePort' => 'setExternalServicePort',
            'protocol' => 'setProtocol',
            'internalServicePortRange' => 'setInternalServicePortRange',
            'externalServicePortRange' => 'setExternalServicePortRange',
            'globalEipId' => 'setGlobalEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  DNAT规则的描述，长度限制为255。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * natGatewayId  公网NAT网关实例的ID。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * floatingIpId  弹性公网IP的id。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'portId' => 'getPortId',
            'privateIp' => 'getPrivateIp',
            'natGatewayId' => 'getNatGatewayId',
            'internalServicePort' => 'getInternalServicePort',
            'floatingIpId' => 'getFloatingIpId',
            'externalServicePort' => 'getExternalServicePort',
            'protocol' => 'getProtocol',
            'internalServicePortRange' => 'getInternalServicePortRange',
            'externalServicePortRange' => 'getExternalServicePortRange',
            'globalEipId' => 'getGlobalEipId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['internalServicePortRange'] = isset($data['internalServicePortRange']) ? $data['internalServicePortRange'] : null;
        $this->container['externalServicePortRange'] = isset($data['externalServicePortRange']) ? $data['externalServicePortRange'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) < 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 7)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['natGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['natGatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['internalServicePort'] === null) {
            $invalidProperties[] = "'internalServicePort' can't be null";
        }
            if (($this->container['internalServicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', must be smaller than or equal to 65535.";
            }
            if (($this->container['internalServicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', must be bigger than or equal to 0.";
            }
        if ($this->container['floatingIpId'] === null) {
            $invalidProperties[] = "'floatingIpId' can't be null";
        }
            if ((mb_strlen($this->container['floatingIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['floatingIpId']) < 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['externalServicePort'] === null) {
            $invalidProperties[] = "'externalServicePort' can't be null";
        }
            if (($this->container['externalServicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'externalServicePort', must be smaller than or equal to 65535.";
            }
            if (($this->container['externalServicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'externalServicePort', must be bigger than or equal to 0.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if (!is_null($this->container['globalEipId']) && (mb_strlen($this->container['globalEipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalEipId']) && (mb_strlen($this->container['globalEipId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be bigger than or equal to 36.";
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
    * Gets description
    *  DNAT规则的描述，长度限制为255。
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
    * @param string|null $description DNAT规则的描述，长度限制为255。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets portId
    *  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
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
    * @param string|null $portId 虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets privateIp
    *  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
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
    * @param string|null $privateIp 用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets natGatewayId
    *  公网NAT网关实例的ID。
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
    * @param string $natGatewayId 公网NAT网关实例的ID。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets internalServicePort
    *  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    *
    * @return int
    */
    public function getInternalServicePort()
    {
        return $this->container['internalServicePort'];
    }

    /**
    * Sets internalServicePort
    *
    * @param int $internalServicePort 虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    *
    * @return $this
    */
    public function setInternalServicePort($internalServicePort)
    {
        $this->container['internalServicePort'] = $internalServicePort;
        return $this;
    }

    /**
    * Gets floatingIpId
    *  弹性公网IP的id。
    *
    * @return string
    */
    public function getFloatingIpId()
    {
        return $this->container['floatingIpId'];
    }

    /**
    * Sets floatingIpId
    *
    * @param string $floatingIpId 弹性公网IP的id。
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets externalServicePort
    *  Floatingip对外提供服务的端口号。 取值范围：0~65535。
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
    * @param int $externalServicePort Floatingip对外提供服务的端口号。 取值范围：0~65535。
    *
    * @return $this
    */
    public function setExternalServicePort($externalServicePort)
    {
        $this->container['externalServicePort'] = $externalServicePort;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets internalServicePortRange
    *  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    *
    * @return string|null
    */
    public function getInternalServicePortRange()
    {
        return $this->container['internalServicePortRange'];
    }

    /**
    * Sets internalServicePortRange
    *
    * @param string|null $internalServicePortRange 虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    *
    * @return $this
    */
    public function setInternalServicePortRange($internalServicePortRange)
    {
        $this->container['internalServicePortRange'] = $internalServicePortRange;
        return $this;
    }

    /**
    * Gets externalServicePortRange
    *  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    *
    * @return string|null
    */
    public function getExternalServicePortRange()
    {
        return $this->container['externalServicePortRange'];
    }

    /**
    * Sets externalServicePortRange
    *
    * @param string|null $externalServicePortRange Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    *
    * @return $this
    */
    public function setExternalServicePortRange($externalServicePortRange)
    {
        $this->container['externalServicePortRange'] = $externalServicePortRange;
        return $this;
    }

    /**
    * Gets globalEipId
    *  全域弹性公网IP的id。
    *
    * @return string|null
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string|null $globalEipId 全域弹性公网IP的id。
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
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

