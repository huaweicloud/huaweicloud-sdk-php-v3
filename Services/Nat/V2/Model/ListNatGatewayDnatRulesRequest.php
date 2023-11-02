<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNatGatewayDnatRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNatGatewayDnatRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * floatingIpAddress  弹性公网的IP地址。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * id  DNAT规则的ID。
    * description  DNAT规则的描述，长度限制为255。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'externalServicePort' => 'int',
            'floatingIpAddress' => 'string',
            'status' => 'string[]',
            'floatingIpId' => 'string',
            'internalServicePort' => 'int',
            'limit' => 'int',
            'id' => 'string',
            'description' => 'string',
            'createdAt' => 'string',
            'natGatewayId' => 'string[]',
            'portId' => 'string',
            'privateIp' => 'string',
            'protocol' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * floatingIpAddress  弹性公网的IP地址。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * id  DNAT规则的ID。
    * description  DNAT规则的描述，长度限制为255。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'externalServicePort' => 'int32',
        'floatingIpAddress' => null,
        'status' => null,
        'floatingIpId' => null,
        'internalServicePort' => 'int32',
        'limit' => null,
        'id' => null,
        'description' => null,
        'createdAt' => null,
        'natGatewayId' => null,
        'portId' => null,
        'privateIp' => null,
        'protocol' => null
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
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * floatingIpAddress  弹性公网的IP地址。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * id  DNAT规则的ID。
    * description  DNAT规则的描述，长度限制为255。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'externalServicePort' => 'external_service_port',
            'floatingIpAddress' => 'floating_ip_address',
            'status' => 'status',
            'floatingIpId' => 'floating_ip_id',
            'internalServicePort' => 'internal_service_port',
            'limit' => 'limit',
            'id' => 'id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'natGatewayId' => 'nat_gateway_id',
            'portId' => 'port_id',
            'privateIp' => 'private_ip',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * floatingIpAddress  弹性公网的IP地址。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * id  DNAT规则的ID。
    * description  DNAT规则的描述，长度限制为255。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'externalServicePort' => 'setExternalServicePort',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'status' => 'setStatus',
            'floatingIpId' => 'setFloatingIpId',
            'internalServicePort' => 'setInternalServicePort',
            'limit' => 'setLimit',
            'id' => 'setId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'natGatewayId' => 'setNatGatewayId',
            'portId' => 'setPortId',
            'privateIp' => 'setPrivateIp',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * externalServicePort  Floatingip对外提供服务的端口号。 取值范围：0~65535。
    * floatingIpAddress  弹性公网的IP地址。
    * status  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * floatingIpId  弹性公网IP的id。
    * internalServicePort  虚拟机或者裸机对外提供服务的协议端口号。 取值范围：0~65535。
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * id  DNAT规则的ID。
    * description  DNAT规则的描述，长度限制为255。
    * createdAt  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * portId  虚拟机或者裸机的Port ID，对应虚拟私有云场景，与private_ip参数二选一。
    * privateIp  用户私有IP地址，对应专线、云连接场景，与port_id参数二选一。
    * protocol  协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'externalServicePort' => 'getExternalServicePort',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'status' => 'getStatus',
            'floatingIpId' => 'getFloatingIpId',
            'internalServicePort' => 'getInternalServicePort',
            'limit' => 'getLimit',
            'id' => 'getId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'natGatewayId' => 'getNatGatewayId',
            'portId' => 'getPortId',
            'privateIp' => 'getPrivateIp',
            'protocol' => 'getProtocol'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['externalServicePort'] = isset($data['externalServicePort']) ? $data['externalServicePort'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['externalServicePort']) && ($this->container['externalServicePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'externalServicePort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['externalServicePort']) && ($this->container['externalServicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'externalServicePort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be bigger than or equal to 7.";
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 36)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
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
    * Gets adminStateUp
    *  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
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
    * Gets floatingIpAddress
    *  弹性公网的IP地址。
    *
    * @return string|null
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string|null $floatingIpAddress 弹性公网的IP地址。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets status
    *  DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status DNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets limit
    *  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets id
    *  DNAT规则的ID。
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
    * @param string|null $id DNAT规则的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets createdAt
    *  DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt DNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets natGatewayId
    *  公网NAT网关实例的ID。
    *
    * @return string[]|null
    */
    public function getNatGatewayId()
    {
        return $this->container['natGatewayId'];
    }

    /**
    * Sets natGatewayId
    *
    * @param string[]|null $natGatewayId 公网NAT网关实例的ID。
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
    * @return string[]|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string[]|null $protocol 协议类型，目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

