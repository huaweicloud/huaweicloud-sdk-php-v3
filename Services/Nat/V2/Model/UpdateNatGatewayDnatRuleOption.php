<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNatGatewayDnatRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNatGatewayDnatRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * natGatewayId  NAT网关的id。
    * description  DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'natGatewayId' => 'string',
            'description' => 'string',
            'portId' => 'string',
            'privateIp' => 'string',
            'protocol' => 'string',
            'floatingIpId' => 'string',
            'internalServicePort' => 'int',
            'externalServicePort' => 'int',
            'internalServicePortRange' => 'string',
            'externalServicePortRange' => 'string',
            'globalEipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * natGatewayId  NAT网关的id。
    * description  DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'natGatewayId' => null,
        'description' => null,
        'portId' => null,
        'privateIp' => null,
        'protocol' => null,
        'floatingIpId' => null,
        'internalServicePort' => 'int32',
        'externalServicePort' => 'int32',
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
    * natGatewayId  NAT网关的id。
    * description  DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'natGatewayId' => 'nat_gateway_id',
            'description' => 'description',
            'portId' => 'port_id',
            'privateIp' => 'private_ip',
            'protocol' => 'protocol',
            'floatingIpId' => 'floating_ip_id',
            'internalServicePort' => 'internal_service_port',
            'externalServicePort' => 'external_service_port',
            'internalServicePortRange' => 'internal_service_port_range',
            'externalServicePortRange' => 'external_service_port_range',
            'globalEipId' => 'global_eip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * natGatewayId  NAT网关的id。
    * description  DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'natGatewayId' => 'setNatGatewayId',
            'description' => 'setDescription',
            'portId' => 'setPortId',
            'privateIp' => 'setPrivateIp',
            'protocol' => 'setProtocol',
            'floatingIpId' => 'setFloatingIpId',
            'internalServicePort' => 'setInternalServicePort',
            'externalServicePort' => 'setExternalServicePort',
            'internalServicePortRange' => 'setInternalServicePortRange',
            'externalServicePortRange' => 'setExternalServicePortRange',
            'globalEipId' => 'setGlobalEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * natGatewayId  NAT网关的id。
    * description  DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'natGatewayId' => 'getNatGatewayId',
            'description' => 'getDescription',
            'portId' => 'getPortId',
            'privateIp' => 'getPrivateIp',
            'protocol' => 'getProtocol',
            'floatingIpId' => 'getFloatingIpId',
            'internalServicePort' => 'getInternalServicePort',
            'externalServicePort' => 'getExternalServicePort',
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
    const PROTOCOL_TCP = 'TCP';
    const PROTOCOL_UDP = 'UDP';
    const PROTOCOL_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
            self::PROTOCOL_UDP,
            self::PROTOCOL_ANY,
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
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
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
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['natGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['natGatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be bigger than or equal to 36.";
            }
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
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 3)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['floatingIpId']) && (mb_strlen($this->container['floatingIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['floatingIpId']) && (mb_strlen($this->container['floatingIpId']) < 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['internalServicePort']) && ($this->container['internalServicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['internalServicePort']) && ($this->container['internalServicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['externalServicePort']) && ($this->container['externalServicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'externalServicePort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['externalServicePort']) && ($this->container['externalServicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'externalServicePort', must be bigger than or equal to 0.";
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
    * Gets natGatewayId
    *  NAT网关的id。
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
    * @param string $natGatewayId NAT网关的id。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets description
    *  DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description DNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * Gets protocol
    *  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets floatingIpId
    *  弹性公网IP的id。
    *
    * @return string|null
    */
    public function getFloatingIpId()
    {
        return $this->container['floatingIpId'];
    }

    /**
    * Sets floatingIpId
    *
    * @param string|null $floatingIpId 弹性公网IP的id。
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets internalServicePort
    *  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
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
    * @param int|null $internalServicePort 虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    *
    * @return $this
    */
    public function setInternalServicePort($internalServicePort)
    {
        $this->container['internalServicePort'] = $internalServicePort;
        return $this;
    }

    /**
    * Gets externalServicePort
    *  Floatingip对外提供服务的端口号。 取值范围：0~65535。
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
    * @param int|null $externalServicePort Floatingip对外提供服务的端口号。 取值范围：0~65535。
    *
    * @return $this
    */
    public function setExternalServicePort($externalServicePort)
    {
        $this->container['externalServicePort'] = $externalServicePort;
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

