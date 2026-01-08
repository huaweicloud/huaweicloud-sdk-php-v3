<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNatGatewaySnatRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNatGatewaySnatRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * cidr  可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * globalEipAddress  功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * globalEipId  功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * sourceType  资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * status  SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'cidr' => 'string',
            'limit' => 'int',
            'floatingIpAddress' => 'string',
            'globalEipAddress' => 'string',
            'floatingIpId' => 'string',
            'globalEipId' => 'string',
            'id' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'natGatewayId' => 'string[]',
            'networkId' => 'string',
            'sourceType' => 'int',
            'status' => 'string',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * cidr  可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * globalEipAddress  功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * globalEipId  功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * sourceType  资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * status  SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'cidr' => null,
        'limit' => null,
        'floatingIpAddress' => null,
        'globalEipAddress' => null,
        'floatingIpId' => null,
        'globalEipId' => null,
        'id' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'natGatewayId' => null,
        'networkId' => null,
        'sourceType' => 'int32',
        'status' => null,
        'marker' => null
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
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * cidr  可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * globalEipAddress  功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * globalEipId  功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * sourceType  资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * status  SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'cidr' => 'cidr',
            'limit' => 'limit',
            'floatingIpAddress' => 'floating_ip_address',
            'globalEipAddress' => 'global_eip_address',
            'floatingIpId' => 'floating_ip_id',
            'globalEipId' => 'global_eip_id',
            'id' => 'id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'natGatewayId' => 'nat_gateway_id',
            'networkId' => 'network_id',
            'sourceType' => 'source_type',
            'status' => 'status',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * cidr  可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * globalEipAddress  功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * globalEipId  功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * sourceType  资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * status  SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'cidr' => 'setCidr',
            'limit' => 'setLimit',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'globalEipAddress' => 'setGlobalEipAddress',
            'floatingIpId' => 'setFloatingIpId',
            'globalEipId' => 'setGlobalEipId',
            'id' => 'setId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'natGatewayId' => 'setNatGatewayId',
            'networkId' => 'setNetworkId',
            'sourceType' => 'setSourceType',
            'status' => 'setStatus',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * cidr  可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * floatingIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * globalEipAddress  功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    * floatingIpId  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * globalEipId  功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * natGatewayId  公网NAT网关实例的ID。
    * networkId  规则使用的网络id。与cidr参数二选一。
    * sourceType  资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    * status  SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'cidr' => 'getCidr',
            'limit' => 'getLimit',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'globalEipAddress' => 'getGlobalEipAddress',
            'floatingIpId' => 'getFloatingIpId',
            'globalEipId' => 'getGlobalEipId',
            'id' => 'getId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'natGatewayId' => 'getNatGatewayId',
            'networkId' => 'getNetworkId',
            'sourceType' => 'getSourceType',
            'status' => 'getStatus',
            'marker' => 'getMarker'
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
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['globalEipAddress'] = isset($data['globalEipAddress']) ? $data['globalEipAddress'] : null;
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 64)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sourceType']) && ($this->container['sourceType'] > 1)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['sourceType']) && ($this->container['sourceType'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 36.";
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
    *  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
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
    * @param bool|null $adminStateUp 解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets cidr
    *  可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 可以是网段或者主机格式，与network_id参数二选一。 Source_type=0时，cidr必须是vpc子网网段的子集(不能相等）; Source_type=1时，cidr必须指定专线侧网段。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets limit
    *  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
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
    * @param int|null $limit 功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets floatingIpAddress
    *  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
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
    * @param string|null $floatingIpAddress 功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets globalEipAddress
    *  功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    *
    * @return string|null
    */
    public function getGlobalEipAddress()
    {
        return $this->container['globalEipAddress'];
    }

    /**
    * Sets globalEipAddress
    *
    * @param string|null $globalEipAddress 功能说明：全域弹性公网IP，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度1024字节。
    *
    * @return $this
    */
    public function setGlobalEipAddress($globalEipAddress)
    {
        $this->container['globalEipAddress'] = $globalEipAddress;
        return $this;
    }

    /**
    * Gets floatingIpId
    *  功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
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
    * @param string|null $floatingIpId 功能说明：弹性公网IP的id，多个弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets globalEipId
    *  功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
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
    * @param string|null $globalEipId 功能说明：全域弹性公网IP的id，多个全域弹性公网IP使用逗号分隔。 取值范围：最大长度4096字节。
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets id
    *  SNAT规则的ID。
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
    * @param string|null $id SNAT规则的ID。
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
    *  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
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
    *  SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
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
    * @param \DateTime|null $createdAt SNAT规则的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
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
    * Gets networkId
    *  规则使用的网络id。与cidr参数二选一。
    *
    * @return string|null
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string|null $networkId 规则使用的网络id。与cidr参数二选一。
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets sourceType
    *  资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    *
    * @return int|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int|null $sourceType 资源类型。 取值范围： - 0：VPC侧，可以指定network_id 或者cidr - 1：专线侧，只能指定cidr 不输入默认为0（VPC）
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets status
    *  SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
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
    * @param string|null $status SNAT规则的状态。 取值为:  - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - EIP_FREEZED: EIP冻结 - INACTIVE: 不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

