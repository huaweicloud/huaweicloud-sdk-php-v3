<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateDnat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateDnat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  DNAT规则的ID。
    * projectId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpId  中转IP的ID。
    * gatewayId  私网NAT网关实例的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    * type  DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * privateIpAddress  后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    * internalServicePort  后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    * transitServicePort  中转IP的端口号。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * createdAt  DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * status  私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'description' => 'string',
            'transitIpId' => 'string',
            'gatewayId' => 'string',
            'networkInterfaceId' => 'string',
            'type' => 'string',
            'protocol' => 'string',
            'privateIpAddress' => 'string',
            'internalServicePort' => 'string',
            'transitServicePort' => 'string',
            'enterpriseProjectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  DNAT规则的ID。
    * projectId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpId  中转IP的ID。
    * gatewayId  私网NAT网关实例的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    * type  DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * privateIpAddress  后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    * internalServicePort  后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    * transitServicePort  中转IP的端口号。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * createdAt  DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * status  私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'description' => null,
        'transitIpId' => null,
        'gatewayId' => null,
        'networkInterfaceId' => null,
        'type' => null,
        'protocol' => null,
        'privateIpAddress' => null,
        'internalServicePort' => null,
        'transitServicePort' => null,
        'enterpriseProjectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'status' => null
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
    * projectId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpId  中转IP的ID。
    * gatewayId  私网NAT网关实例的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    * type  DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * privateIpAddress  后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    * internalServicePort  后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    * transitServicePort  中转IP的端口号。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * createdAt  DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * status  私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'description' => 'description',
            'transitIpId' => 'transit_ip_id',
            'gatewayId' => 'gateway_id',
            'networkInterfaceId' => 'network_interface_id',
            'type' => 'type',
            'protocol' => 'protocol',
            'privateIpAddress' => 'private_ip_address',
            'internalServicePort' => 'internal_service_port',
            'transitServicePort' => 'transit_service_port',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  DNAT规则的ID。
    * projectId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpId  中转IP的ID。
    * gatewayId  私网NAT网关实例的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    * type  DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * privateIpAddress  后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    * internalServicePort  后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    * transitServicePort  中转IP的端口号。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * createdAt  DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * status  私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'description' => 'setDescription',
            'transitIpId' => 'setTransitIpId',
            'gatewayId' => 'setGatewayId',
            'networkInterfaceId' => 'setNetworkInterfaceId',
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'privateIpAddress' => 'setPrivateIpAddress',
            'internalServicePort' => 'setInternalServicePort',
            'transitServicePort' => 'setTransitServicePort',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  DNAT规则的ID。
    * projectId  项目的ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpId  中转IP的ID。
    * gatewayId  私网NAT网关实例的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    * type  DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * privateIpAddress  后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    * internalServicePort  后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    * transitServicePort  中转IP的端口号。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * createdAt  DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * status  私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'description' => 'getDescription',
            'transitIpId' => 'getTransitIpId',
            'gatewayId' => 'getGatewayId',
            'networkInterfaceId' => 'getNetworkInterfaceId',
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'privateIpAddress' => 'getPrivateIpAddress',
            'internalServicePort' => 'getInternalServicePort',
            'transitServicePort' => 'getTransitServicePort',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'status' => 'getStatus'
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
    const PROTOCOL_TCP = 'tcp';
    const PROTOCOL_UDP = 'udp';
    const PROTOCOL_ANY = 'any';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_INACTIVE = 'INACTIVE';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_FROZEN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['transitIpId'] = isset($data['transitIpId']) ? $data['transitIpId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['networkInterfaceId'] = isset($data['networkInterfaceId']) ? $data['networkInterfaceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['transitServicePort'] = isset($data['transitServicePort']) ? $data['transitServicePort'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 36)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transitIpId']) && (mb_strlen($this->container['transitIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'transitIpId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['transitIpId']) && (mb_strlen($this->container['transitIpId']) < 36)) {
                $invalidProperties[] = "invalid value for 'transitIpId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) < 1)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['networkInterfaceId']) && (mb_strlen($this->container['networkInterfaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkInterfaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['networkInterfaceId']) && (mb_strlen($this->container['networkInterfaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'networkInterfaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 10)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['internalServicePort']) && (mb_strlen($this->container['internalServicePort']) > 5)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['internalServicePort']) && (mb_strlen($this->container['internalServicePort']) < 1)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transitServicePort']) && (mb_strlen($this->container['transitServicePort']) > 5)) {
                $invalidProperties[] = "invalid value for 'transitServicePort', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['transitServicePort']) && (mb_strlen($this->container['transitServicePort']) < 1)) {
                $invalidProperties[] = "invalid value for 'transitServicePort', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets projectId
    *  项目的ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目的ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets description
    *  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets transitIpId
    *  中转IP的ID。
    *
    * @return string|null
    */
    public function getTransitIpId()
    {
        return $this->container['transitIpId'];
    }

    /**
    * Sets transitIpId
    *
    * @param string|null $transitIpId 中转IP的ID。
    *
    * @return $this
    */
    public function setTransitIpId($transitIpId)
    {
        $this->container['transitIpId'] = $transitIpId;
        return $this;
    }

    /**
    * Gets gatewayId
    *  私网NAT网关实例的ID。
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
    * @param string|null $gatewayId 私网NAT网关实例的ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets networkInterfaceId
    *  网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    *
    * @return string|null
    */
    public function getNetworkInterfaceId()
    {
        return $this->container['networkInterfaceId'];
    }

    /**
    * Sets networkInterfaceId
    *
    * @param string|null $networkInterfaceId 网络接口ID，支持计算、ELBV2、ELBV3、VIP等实例的端口。
    *
    * @return $this
    */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->container['networkInterfaceId'] = $networkInterfaceId;
        return $this;
    }

    /**
    * Gets type
    *  DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type DNAT规则后端的类型。 取值： - COMPUTE：后端为计算实例。 - VIP：后端为VIP的实例。 - ELB：后端为ELBv2的实例。 - ELBv3：后端为ELBv3的实例。 - CUSTOMIZE：后端为自定义IP。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
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
    * @param string|null $protocol 协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress 后端资源（计算实例、ELBV2、ELBV3、VIP等）的私网IP地址。
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets internalServicePort
    *  后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    *
    * @return string|null
    */
    public function getInternalServicePort()
    {
        return $this->container['internalServicePort'];
    }

    /**
    * Sets internalServicePort
    *
    * @param string|null $internalServicePort 后端实例的端口号（计算实例、ELBV2、ELBV3、VIP等)。
    *
    * @return $this
    */
    public function setInternalServicePort($internalServicePort)
    {
        $this->container['internalServicePort'] = $internalServicePort;
        return $this;
    }

    /**
    * Gets transitServicePort
    *  中转IP的端口号。
    *
    * @return string|null
    */
    public function getTransitServicePort()
    {
        return $this->container['transitServicePort'];
    }

    /**
    * Sets transitServicePort
    *
    * @param string|null $transitServicePort 中转IP的端口号。
    *
    * @return $this
    */
    public function setTransitServicePort($transitServicePort)
    {
        $this->container['transitServicePort'] = $transitServicePort;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。创建DNAT规则时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt DNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt DNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets status
    *  私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 私网NAT的DNAT规则状态。 取值为： - ACTIVE：正常运行 - FROZEN：冻结 - INACTIVE：不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

