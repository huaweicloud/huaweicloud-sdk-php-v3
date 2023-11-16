<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NatGatewayUpdateSnatRuleResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NatGatewayUpdateSnatRuleResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SNAT规则的ID。
    * tenantId  项目的ID。
    * natGatewayId  公网NAT网关实例的ID。
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * status  SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * globalEipAddress  全域弹性公网IP的地址。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'natGatewayId' => 'string',
            'sourceType' => 'int',
            'cidr' => 'string',
            'floatingIpId' => 'string',
            'description' => 'string',
            'status' => 'string',
            'createdAt' => 'string',
            'networkId' => 'string',
            'adminStateUp' => 'bool',
            'floatingIpAddress' => 'string',
            'publicIpAddress' => 'string',
            'globalEipAddress' => 'string',
            'globalEipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SNAT规则的ID。
    * tenantId  项目的ID。
    * natGatewayId  公网NAT网关实例的ID。
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * status  SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * globalEipAddress  全域弹性公网IP的地址。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'natGatewayId' => null,
        'sourceType' => 'int32',
        'cidr' => null,
        'floatingIpId' => null,
        'description' => null,
        'status' => null,
        'createdAt' => null,
        'networkId' => null,
        'adminStateUp' => null,
        'floatingIpAddress' => null,
        'publicIpAddress' => null,
        'globalEipAddress' => null,
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
    * id  SNAT规则的ID。
    * tenantId  项目的ID。
    * natGatewayId  公网NAT网关实例的ID。
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * status  SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * globalEipAddress  全域弹性公网IP的地址。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'natGatewayId' => 'nat_gateway_id',
            'sourceType' => 'source_type',
            'cidr' => 'cidr',
            'floatingIpId' => 'floating_ip_id',
            'description' => 'description',
            'status' => 'status',
            'createdAt' => 'created_at',
            'networkId' => 'network_id',
            'adminStateUp' => 'admin_state_up',
            'floatingIpAddress' => 'floating_ip_address',
            'publicIpAddress' => 'public_ip_address',
            'globalEipAddress' => 'global_eip_address',
            'globalEipId' => 'global_eip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SNAT规则的ID。
    * tenantId  项目的ID。
    * natGatewayId  公网NAT网关实例的ID。
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * status  SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * globalEipAddress  全域弹性公网IP的地址。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'natGatewayId' => 'setNatGatewayId',
            'sourceType' => 'setSourceType',
            'cidr' => 'setCidr',
            'floatingIpId' => 'setFloatingIpId',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'networkId' => 'setNetworkId',
            'adminStateUp' => 'setAdminStateUp',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'publicIpAddress' => 'setPublicIpAddress',
            'globalEipAddress' => 'setGlobalEipAddress',
            'globalEipId' => 'setGlobalEipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SNAT规则的ID。
    * tenantId  项目的ID。
    * natGatewayId  公网NAT网关实例的ID。
    * sourceType  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * cidr  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    * status  SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    * globalEipAddress  全域弹性公网IP的地址。
    * globalEipId  全域弹性公网IP的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'natGatewayId' => 'getNatGatewayId',
            'sourceType' => 'getSourceType',
            'cidr' => 'getCidr',
            'floatingIpId' => 'getFloatingIpId',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'networkId' => 'getNetworkId',
            'adminStateUp' => 'getAdminStateUp',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'publicIpAddress' => 'getPublicIpAddress',
            'globalEipAddress' => 'getGlobalEipAddress',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['globalEipAddress'] = isset($data['globalEipAddress']) ? $data['globalEipAddress'] : null;
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
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['natGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['natGatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            if (($this->container['sourceType'] > 1)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be smaller than or equal to 1.";
            }
            if (($this->container['sourceType'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be bigger than or equal to 0.";
            }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
            if ((mb_strlen($this->container['cidr']) > 18)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 18.";
            }
            if ((mb_strlen($this->container['cidr']) < 9)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 9.";
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 36)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
            if ((mb_strlen($this->container['networkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['networkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
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
        if ($this->container['publicIpAddress'] === null) {
            $invalidProperties[] = "'publicIpAddress' can't be null";
        }
            if ((mb_strlen($this->container['publicIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['publicIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be bigger than or equal to 7.";
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
        if ($this->container['globalEipId'] === null) {
            $invalidProperties[] = "'globalEipId' can't be null";
        }
            if ((mb_strlen($this->container['globalEipId']) < 36)) {
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
    * Gets id
    *  SNAT规则的ID。
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
    * @param string $id SNAT规则的ID。
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
    * Gets sourceType
    *  0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    *
    * @return int
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int $sourceType 0：VPC侧，可以指定network_id 或者cidr 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets cidr
    *  cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr cidr，可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc 子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets floatingIpId
    *  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
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
    * @param string $floatingIpId 功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets description
    *  SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
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
    * @param string $description SNAT规则的描述，长度范围小于等于255个字符，不能包含<>
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
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
    * @param string $status SNAT规则的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"EIP_FREEZED\"：EIP冻结 \"INACTIVE\"：不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
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
    * @param string $createdAt SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets networkId
    *  规则使用的网络id。与cidr参数二选一。
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 规则使用的网络id。与cidr参数二选一。
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
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
    * @param bool $adminStateUp 解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets floatingIpAddress
    *  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
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
    * @param string $floatingIpAddress 功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    *
    * @return string
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string $publicIpAddress 功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
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

