<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NatGatewayResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NatGatewayResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    * status  公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    * ppsMax  网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    * bpsMax  网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'spec' => 'string',
            'status' => 'string',
            'adminStateUp' => 'bool',
            'createdAt' => '\DateTime',
            'routerId' => 'string',
            'internalNetworkId' => 'string',
            'enterpriseProjectId' => 'string',
            'sessionConf' => '\HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration',
            'ngportIpAddress' => 'string',
            'billingInfo' => 'string',
            'dnatRulesLimit' => 'int',
            'snatRulePublicIpLimit' => 'int',
            'ppsMax' => 'int',
            'bpsMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    * status  公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    * ppsMax  网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    * bpsMax  网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'spec' => null,
        'status' => null,
        'adminStateUp' => null,
        'createdAt' => 'date-time',
        'routerId' => null,
        'internalNetworkId' => null,
        'enterpriseProjectId' => null,
        'sessionConf' => null,
        'ngportIpAddress' => null,
        'billingInfo' => null,
        'dnatRulesLimit' => 'int64',
        'snatRulePublicIpLimit' => 'int32',
        'ppsMax' => null,
        'bpsMax' => null
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
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    * status  公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    * ppsMax  网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    * bpsMax  网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'spec' => 'spec',
            'status' => 'status',
            'adminStateUp' => 'admin_state_up',
            'createdAt' => 'created_at',
            'routerId' => 'router_id',
            'internalNetworkId' => 'internal_network_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sessionConf' => 'session_conf',
            'ngportIpAddress' => 'ngport_ip_address',
            'billingInfo' => 'billing_info',
            'dnatRulesLimit' => 'dnat_rules_limit',
            'snatRulePublicIpLimit' => 'snat_rule_public_ip_limit',
            'ppsMax' => 'pps_max',
            'bpsMax' => 'bps_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    * status  公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    * ppsMax  网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    * bpsMax  网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'spec' => 'setSpec',
            'status' => 'setStatus',
            'adminStateUp' => 'setAdminStateUp',
            'createdAt' => 'setCreatedAt',
            'routerId' => 'setRouterId',
            'internalNetworkId' => 'setInternalNetworkId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sessionConf' => 'setSessionConf',
            'ngportIpAddress' => 'setNgportIpAddress',
            'billingInfo' => 'setBillingInfo',
            'dnatRulesLimit' => 'setDnatRulesLimit',
            'snatRulePublicIpLimit' => 'setSnatRulePublicIpLimit',
            'ppsMax' => 'setPpsMax',
            'bpsMax' => 'setBpsMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    * status  公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
    * adminStateUp  解冻/冻结状态。 取值范围：  - true: 解冻 - false: 冻结
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    * ppsMax  网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    * bpsMax  网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'spec' => 'getSpec',
            'status' => 'getStatus',
            'adminStateUp' => 'getAdminStateUp',
            'createdAt' => 'getCreatedAt',
            'routerId' => 'getRouterId',
            'internalNetworkId' => 'getInternalNetworkId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sessionConf' => 'getSessionConf',
            'ngportIpAddress' => 'getNgportIpAddress',
            'billingInfo' => 'getBillingInfo',
            'dnatRulesLimit' => 'getDnatRulesLimit',
            'snatRulePublicIpLimit' => 'getSnatRulePublicIpLimit',
            'ppsMax' => 'getPpsMax',
            'bpsMax' => 'getBpsMax'
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
    const SPEC__1 = '1';
    const SPEC__2 = '2';
    const SPEC__3 = '3';
    const SPEC__4 = '4';
    const SPEC__5 = '5';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_INACTIVE = 'INACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC__1,
            self::SPEC__2,
            self::SPEC__3,
            self::SPEC__4,
            self::SPEC__5,
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
            self::STATUS_PENDING_CREATE,
            self::STATUS_PENDING_UPDATE,
            self::STATUS_PENDING_DELETE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['internalNetworkId'] = isset($data['internalNetworkId']) ? $data['internalNetworkId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sessionConf'] = isset($data['sessionConf']) ? $data['sessionConf'] : null;
        $this->container['ngportIpAddress'] = isset($data['ngportIpAddress']) ? $data['ngportIpAddress'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['dnatRulesLimit'] = isset($data['dnatRulesLimit']) ? $data['dnatRulesLimit'] : null;
        $this->container['snatRulePublicIpLimit'] = isset($data['snatRulePublicIpLimit']) ? $data['snatRulePublicIpLimit'] : null;
        $this->container['ppsMax'] = isset($data['ppsMax']) ? $data['ppsMax'] : null;
        $this->container['bpsMax'] = isset($data['bpsMax']) ? $data['bpsMax'] : null;
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
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['internalNetworkId']) && (mb_strlen($this->container['internalNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'internalNetworkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['internalNetworkId']) && (mb_strlen($this->container['internalNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'internalNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ngportIpAddress']) && (mb_strlen($this->container['ngportIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'ngportIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['ngportIpAddress']) && (mb_strlen($this->container['ngportIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'ngportIpAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 128)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dnatRulesLimit']) && ($this->container['dnatRulesLimit'] > 100000)) {
                $invalidProperties[] = "invalid value for 'dnatRulesLimit', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['dnatRulesLimit']) && ($this->container['dnatRulesLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'dnatRulesLimit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['snatRulePublicIpLimit']) && ($this->container['snatRulePublicIpLimit'] > 100)) {
                $invalidProperties[] = "invalid value for 'snatRulePublicIpLimit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['snatRulePublicIpLimit']) && ($this->container['snatRulePublicIpLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'snatRulePublicIpLimit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ppsMax']) && ($this->container['ppsMax'] > 100000000)) {
                $invalidProperties[] = "invalid value for 'ppsMax', must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['ppsMax']) && ($this->container['ppsMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'ppsMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bpsMax']) && ($this->container['bpsMax'] > 102400)) {
                $invalidProperties[] = "invalid value for 'bpsMax', must be smaller than or equal to 102400.";
            }
            if (!is_null($this->container['bpsMax']) && ($this->container['bpsMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'bpsMax', must be bigger than or equal to 0.";
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
    *  公网NAT网关实例的ID。
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
    * @param string|null $id 公网NAT网关实例的ID。
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
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 项目的ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  公网NAT网关实例的名字，长度限制为64。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 公网NAT网关实例的名字，长度限制为64。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description 公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets spec
    *  公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 公网NAT网关的规格。 取值为： - 1：小型，SNAT最大连接数10000 - 2：中型，SNAT最大连接数50000 - 3：大型，SNAT最大连接数200000 - 4：超大型，SNAT最大连接数1000000 - 5：企业型，SNAT最大连接数10000000
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets status
    *  公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
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
    * @param string|null $status 公网NAT网关实例的状态。 取值为:   - ACTIVE: 可用 - PENDING_CREATE: 创建中 - PENDING_UPDATE: 更新中 - PENDING_DELETE: 删除中 - INACTIVE: 不可用
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
    * Gets createdAt
    *  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    * @param \DateTime|null $createdAt 公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets routerId
    *  VPC的id。
    *
    * @return string|null
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string|null $routerId VPC的id。
    *
    * @return $this
    */
    public function setRouterId($routerId)
    {
        $this->container['routerId'] = $routerId;
        return $this;
    }

    /**
    * Gets internalNetworkId
    *  公网NAT网关下行口（DVR的下一跳）所属的network id。
    *
    * @return string|null
    */
    public function getInternalNetworkId()
    {
        return $this->container['internalNetworkId'];
    }

    /**
    * Sets internalNetworkId
    *
    * @param string|null $internalNetworkId 公网NAT网关下行口（DVR的下一跳）所属的network id。
    *
    * @return $this
    */
    public function setInternalNetworkId($internalNetworkId)
    {
        $this->container['internalNetworkId'] = $internalNetworkId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets sessionConf
    *  sessionConf
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration|null
    */
    public function getSessionConf()
    {
        return $this->container['sessionConf'];
    }

    /**
    * Sets sessionConf
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration|null $sessionConf sessionConf
    *
    * @return $this
    */
    public function setSessionConf($sessionConf)
    {
        $this->container['sessionConf'] = $sessionConf;
        return $this;
    }

    /**
    * Gets ngportIpAddress
    *  公网NAT网关私有IP地址，由VPC中子网分配。
    *
    * @return string|null
    */
    public function getNgportIpAddress()
    {
        return $this->container['ngportIpAddress'];
    }

    /**
    * Sets ngportIpAddress
    *
    * @param string|null $ngportIpAddress 公网NAT网关私有IP地址，由VPC中子网分配。
    *
    * @return $this
    */
    public function setNgportIpAddress($ngportIpAddress)
    {
        $this->container['ngportIpAddress'] = $ngportIpAddress;
        return $this;
    }

    /**
    * Gets billingInfo
    *  订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo 订单信息。此字段只有在订购包周期资源时才会有订单信息，而在订购按需资源时则为空。
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets dnatRulesLimit
    *  公网NAT网关下DNAT规则数量限制，默认为200。
    *
    * @return int|null
    */
    public function getDnatRulesLimit()
    {
        return $this->container['dnatRulesLimit'];
    }

    /**
    * Sets dnatRulesLimit
    *
    * @param int|null $dnatRulesLimit 公网NAT网关下DNAT规则数量限制，默认为200。
    *
    * @return $this
    */
    public function setDnatRulesLimit($dnatRulesLimit)
    {
        $this->container['dnatRulesLimit'] = $dnatRulesLimit;
        return $this;
    }

    /**
    * Gets snatRulePublicIpLimit
    *  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    *
    * @return int|null
    */
    public function getSnatRulePublicIpLimit()
    {
        return $this->container['snatRulePublicIpLimit'];
    }

    /**
    * Sets snatRulePublicIpLimit
    *
    * @param int|null $snatRulePublicIpLimit 公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    *
    * @return $this
    */
    public function setSnatRulePublicIpLimit($snatRulePublicIpLimit)
    {
        $this->container['snatRulePublicIpLimit'] = $snatRulePublicIpLimit;
        return $this;
    }

    /**
    * Gets ppsMax
    *  网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    *
    * @return int|null
    */
    public function getPpsMax()
    {
        return $this->container['ppsMax'];
    }

    /**
    * Sets ppsMax
    *
    * @param int|null $ppsMax 网关每秒能够接收或发送的数据包数量，代表网络设备的流量处理能力。
    *
    * @return $this
    */
    public function setPpsMax($ppsMax)
    {
        $this->container['ppsMax'] = $ppsMax;
        return $this;
    }

    /**
    * Gets bpsMax
    *  网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @return int|null
    */
    public function getBpsMax()
    {
        return $this->container['bpsMax'];
    }

    /**
    * Sets bpsMax
    *
    * @param int|null $bpsMax 网关每秒能够接收或发送的带宽大小，代表网络设备的流量处理能力。单位M
    *
    * @return $this
    */
    public function setBpsMax($bpsMax)
    {
        $this->container['bpsMax'] = $bpsMax;
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

