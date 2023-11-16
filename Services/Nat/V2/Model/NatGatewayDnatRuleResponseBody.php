<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NatGatewayDnatRuleResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NatGatewayDnatRuleResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  DNAT规则的ID。
    * tenantId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * natGatewayId  公网NAT网关实例的ID。
    * floatingIpId  弹性公网IP的id。
    * floatingIpAddress  弹性公网IP的IP地址。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * globalEipId  全域弹性公网IP的id。
    * globalEipAddress  全域弹性公网IP的地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'description' => 'string',
            'portId' => 'string',
            'privateIp' => 'string',
            'internalServicePort' => 'int',
            'natGatewayId' => 'string',
            'floatingIpId' => 'string',
            'floatingIpAddress' => 'string',
            'externalServicePort' => 'int',
            'status' => 'string',
            'adminStateUp' => 'bool',
            'internalServicePortRange' => 'string',
            'externalServicePortRange' => 'string',
            'protocol' => 'string',
            'createdAt' => 'string',
            'globalEipId' => 'string',
            'globalEipAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  DNAT规则的ID。
    * tenantId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * natGatewayId  公网NAT网关实例的ID。
    * floatingIpId  弹性公网IP的id。
    * floatingIpAddress  弹性公网IP的IP地址。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * globalEipId  全域弹性公网IP的id。
    * globalEipAddress  全域弹性公网IP的地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'description' => null,
        'portId' => null,
        'privateIp' => null,
        'internalServicePort' => 'int32',
        'natGatewayId' => null,
        'floatingIpId' => null,
        'floatingIpAddress' => null,
        'externalServicePort' => 'int32',
        'status' => null,
        'adminStateUp' => null,
        'internalServicePortRange' => null,
        'externalServicePortRange' => null,
        'protocol' => null,
        'createdAt' => null,
        'globalEipId' => null,
        'globalEipAddress' => null
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
    * id  DNAT规则的ID。
    * tenantId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * natGatewayId  公网NAT网关实例的ID。
    * floatingIpId  弹性公网IP的id。
    * floatingIpAddress  弹性公网IP的IP地址。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * globalEipId  全域弹性公网IP的id。
    * globalEipAddress  全域弹性公网IP的地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'description' => 'description',
            'portId' => 'port_id',
            'privateIp' => 'private_ip',
            'internalServicePort' => 'internal_service_port',
            'natGatewayId' => 'nat_gateway_id',
            'floatingIpId' => 'floating_ip_id',
            'floatingIpAddress' => 'floating_ip_address',
            'externalServicePort' => 'external_service_port',
            'status' => 'status',
            'adminStateUp' => 'admin_state_up',
            'internalServicePortRange' => 'internal_service_port_range',
            'externalServicePortRange' => 'external_service_port_range',
            'protocol' => 'protocol',
            'createdAt' => 'created_at',
            'globalEipId' => 'global_eip_id',
            'globalEipAddress' => 'global_eip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  DNAT规则的ID。
    * tenantId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * natGatewayId  公网NAT网关实例的ID。
    * floatingIpId  弹性公网IP的id。
    * floatingIpAddress  弹性公网IP的IP地址。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * globalEipId  全域弹性公网IP的id。
    * globalEipAddress  全域弹性公网IP的地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'description' => 'setDescription',
            'portId' => 'setPortId',
            'privateIp' => 'setPrivateIp',
            'internalServicePort' => 'setInternalServicePort',
            'natGatewayId' => 'setNatGatewayId',
            'floatingIpId' => 'setFloatingIpId',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'externalServicePort' => 'setExternalServicePort',
            'status' => 'setStatus',
            'adminStateUp' => 'setAdminStateUp',
            'internalServicePortRange' => 'setInternalServicePortRange',
            'externalServicePortRange' => 'setExternalServicePortRange',
            'protocol' => 'setProtocol',
            'createdAt' => 'setCreatedAt',
            'globalEipId' => 'setGlobalEipId',
            'globalEipAddress' => 'setGlobalEipAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  DNAT规则的ID。
    * tenantId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * natGatewayId  公网NAT网关实例的ID。
    * floatingIpId  弹性公网IP的id。
    * floatingIpAddress  弹性公网IP的IP地址。
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    * internalServicePortRange  虚拟机或者裸机对外提供服务的协议端口号范围。 功能说明：该端口范围与external _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围。
    * externalServicePortRange  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * globalEipId  全域弹性公网IP的id。
    * globalEipAddress  全域弹性公网IP的地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'description' => 'getDescription',
            'portId' => 'getPortId',
            'privateIp' => 'getPrivateIp',
            'internalServicePort' => 'getInternalServicePort',
            'natGatewayId' => 'getNatGatewayId',
            'floatingIpId' => 'getFloatingIpId',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'externalServicePort' => 'getExternalServicePort',
            'status' => 'getStatus',
            'adminStateUp' => 'getAdminStateUp',
            'internalServicePortRange' => 'getInternalServicePortRange',
            'externalServicePortRange' => 'getExternalServicePortRange',
            'protocol' => 'getProtocol',
            'createdAt' => 'getCreatedAt',
            'globalEipId' => 'getGlobalEipId',
            'globalEipAddress' => 'getGlobalEipAddress'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_EIP_FREEZED = 'EIP_FREEZED';
    const STATUS_INACTIVE = 'INACTIVE';
    const PROTOCOL_TCP = 'tcp';
    const PROTOCOL_UDP = 'udp';
    const PROTOCOL_ANY = 'any';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING_CREATE,
            self::STATUS_PENDING_UPDATE,
            self::STATUS_PENDING_DELETE,
            self::STATUS_EIP_FREEZED,
            self::STATUS_INACTIVE,
        ];
    }

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['internalServicePortRange'] = isset($data['internalServicePortRange']) ? $data['internalServicePortRange'] : null;
        $this->container['externalServicePortRange'] = isset($data['externalServicePortRange']) ? $data['externalServicePortRange'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
        $this->container['globalEipAddress'] = isset($data['globalEipAddress']) ? $data['globalEipAddress'] : null;
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
            if ((mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
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
        if ($this->container['internalServicePort'] === null) {
            $invalidProperties[] = "'internalServicePort' can't be null";
        }
            if (($this->container['internalServicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', must be smaller than or equal to 65535.";
            }
            if (($this->container['internalServicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', must be bigger than or equal to 0.";
            }
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['natGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['natGatewayId']) < 1)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['floatingIpId'] === null) {
            $invalidProperties[] = "'floatingIpId' can't be null";
        }
            if ((mb_strlen($this->container['floatingIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['floatingIpId']) < 1)) {
                $invalidProperties[] = "invalid value for 'floatingIpId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['floatingIpAddress'] === null) {
            $invalidProperties[] = "'floatingIpAddress' can't be null";
        }
            if ((mb_strlen($this->container['floatingIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['floatingIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['externalServicePort'] === null) {
            $invalidProperties[] = "'externalServicePort' can't be null";
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

        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['protocol']) > 3)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 36)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['globalEipId'] === null) {
            $invalidProperties[] = "'globalEipId' can't be null";
        }
            if ((mb_strlen($this->container['globalEipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['globalEipId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['globalEipAddress'] === null) {
            $invalidProperties[] = "'globalEipAddress' can't be null";
        }
            if ((mb_strlen($this->container['globalEipAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'globalEipAddress', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['globalEipAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'globalEipAddress', the character length must be bigger than or equal to 7.";
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
    *  DNAT规则的ID。
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
    * @param string $id DNAT规则的ID。
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
    *  项目的ID。
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
    * @param string $tenantId 项目的ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets description
    *  DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description DNAT规则的描述。长度范围小于等于255个字符，不能包含<>
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
    * Gets floatingIpAddress
    *  弹性公网IP的IP地址。
    *
    * @return string
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string $floatingIpAddress 弹性公网IP的IP地址。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
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
    * Gets status
    *  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
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
    * @param string $status DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 解冻/冻结状态。 取值范围： − “true”： 解冻 − “false”： 冻结
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
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
    *  Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
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
    * @param string|null $externalServicePortRange Floatingip对外提供服务的端口号范围。 功能说明：该端口范围与internal _service_port_range按顺序实现1:1映射。 取值范围：1~65535。 约束：只能以’-’字符连接端口范围
    *
    * @return $this
    */
    public function setExternalServicePortRange($externalServicePortRange)
    {
        $this->container['externalServicePortRange'] = $externalServicePortRange;
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
    * Gets createdAt
    *  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets globalEipId
    *  全域弹性公网IP的id。
    *
    * @return string
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string $globalEipId 全域弹性公网IP的id。
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets globalEipAddress
    *  全域弹性公网IP的地址。
    *
    * @return string
    */
    public function getGlobalEipAddress()
    {
        return $this->container['globalEipAddress'];
    }

    /**
    * Sets globalEipAddress
    *
    * @param string $globalEipAddress 全域弹性公网IP的地址。
    *
    * @return $this
    */
    public function setGlobalEipAddress($globalEipAddress)
    {
        $this->container['globalEipAddress'] = $globalEipAddress;
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

