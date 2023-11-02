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
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * status  公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * createdAt  公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
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
            'createdAt' => 'string',
            'routerId' => 'string',
            'internalNetworkId' => 'string',
            'enterpriseProjectId' => 'string',
            'sessionConf' => '\HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration',
            'ngportIpAddress' => 'string',
            'billingInfo' => 'string',
            'dnatRulesLimit' => 'int',
            'snatRulePublicIpLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * status  公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * createdAt  公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
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
        'createdAt' => null,
        'routerId' => null,
        'internalNetworkId' => null,
        'enterpriseProjectId' => null,
        'sessionConf' => null,
        'ngportIpAddress' => null,
        'billingInfo' => null,
        'dnatRulesLimit' => 'int64',
        'snatRulePublicIpLimit' => 'int32'
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
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * status  公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * createdAt  公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
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
            'snatRulePublicIpLimit' => 'snat_rule_public_ip_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * status  公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * createdAt  公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
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
            'snatRulePublicIpLimit' => 'setSnatRulePublicIpLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  公网NAT网关实例的ID。
    * tenantId  项目的ID。
    * name  公网NAT网关实例的名字，长度限制为64。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * status  公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
    * adminStateUp  解冻/冻结状态。 取值范围： - \"true\"：解冻 - \"false\"：冻结
    * createdAt  公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * enterpriseProjectId  企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
    * sessionConf  sessionConf
    * ngportIpAddress  公网NAT网关私有IP地址，由VPC中子网分配。
    * billingInfo  订单信息。
    * dnatRulesLimit  公网NAT网关下DNAT规则数量限制，默认为200。
    * snatRulePublicIpLimit  公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
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
            'snatRulePublicIpLimit' => 'getSnatRulePublicIpLimit'
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
        if ($this->container['spec'] === null) {
            $invalidProperties[] = "'spec' can't be null";
        }
            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 36)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['routerId'] === null) {
            $invalidProperties[] = "'routerId' can't be null";
        }
            if ((mb_strlen($this->container['routerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['routerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['internalNetworkId'] === null) {
            $invalidProperties[] = "'internalNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['internalNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'internalNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['internalNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'internalNetworkId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sessionConf'] === null) {
            $invalidProperties[] = "'sessionConf' can't be null";
        }
        if ($this->container['ngportIpAddress'] === null) {
            $invalidProperties[] = "'ngportIpAddress' can't be null";
        }
            if ((mb_strlen($this->container['ngportIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'ngportIpAddress', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['ngportIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'ngportIpAddress', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['billingInfo'] === null) {
            $invalidProperties[] = "'billingInfo' can't be null";
        }
        if ($this->container['dnatRulesLimit'] === null) {
            $invalidProperties[] = "'dnatRulesLimit' can't be null";
        }
            if (($this->container['dnatRulesLimit'] > 100000)) {
                $invalidProperties[] = "invalid value for 'dnatRulesLimit', must be smaller than or equal to 100000.";
            }
            if (($this->container['dnatRulesLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'dnatRulesLimit', must be bigger than or equal to 1.";
            }
        if ($this->container['snatRulePublicIpLimit'] === null) {
            $invalidProperties[] = "'snatRulePublicIpLimit' can't be null";
        }
            if (($this->container['snatRulePublicIpLimit'] > 100)) {
                $invalidProperties[] = "invalid value for 'snatRulePublicIpLimit', must be smaller than or equal to 100.";
            }
            if (($this->container['snatRulePublicIpLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'snatRulePublicIpLimit', must be bigger than or equal to 1.";
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
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 公网NAT网关实例的ID。
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
    * Gets name
    *  公网NAT网关实例的名字，长度限制为64。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 公网NAT网关实例的名字，长度限制为64。
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
    *  公网NAT网关实例的描述，长度限制为255。
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
    * @param string $description 公网NAT网关实例的描述，长度限制为255。
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
    *  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    *
    * @return string
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string $spec 公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
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
    *  公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
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
    * @param string $status 公网NAT网关实例的状态。 取值为： \"ACTIVE\": 可用 \"PENDING_CREATE\"：创建中 \"PENDING_UPDATE\"：更新中 \"PENDING_DELETE\"：删除中 \"INACTIVE\"：不可用
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
    * Gets createdAt
    *  公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
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
    * @param string $createdAt 公网NAT网关实例的创建时间，格式是yyyy-mm-dd hh:mm:ss.SSSSSS。
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
    * @return string
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string $routerId VPC的id。
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
    * @return string
    */
    public function getInternalNetworkId()
    {
        return $this->container['internalNetworkId'];
    }

    /**
    * Sets internalNetworkId
    *
    * @param string $internalNetworkId 公网NAT网关下行口（DVR的下一跳）所属的network id。
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
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。 创建公网NAT网关实例时，关联的企业项目ID。
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
    * @return \HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration
    */
    public function getSessionConf()
    {
        return $this->container['sessionConf'];
    }

    /**
    * Sets sessionConf
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration $sessionConf sessionConf
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
    * @return string
    */
    public function getNgportIpAddress()
    {
        return $this->container['ngportIpAddress'];
    }

    /**
    * Sets ngportIpAddress
    *
    * @param string $ngportIpAddress 公网NAT网关私有IP地址，由VPC中子网分配。
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
    *  订单信息。
    *
    * @return string
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string $billingInfo 订单信息。
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
    * @return int
    */
    public function getDnatRulesLimit()
    {
        return $this->container['dnatRulesLimit'];
    }

    /**
    * Sets dnatRulesLimit
    *
    * @param int $dnatRulesLimit 公网NAT网关下DNAT规则数量限制，默认为200。
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
    * @return int
    */
    public function getSnatRulePublicIpLimit()
    {
        return $this->container['snatRulePublicIpLimit'];
    }

    /**
    * Sets snatRulePublicIpLimit
    *
    * @param int $snatRulePublicIpLimit 公网NAT网关下SNAT规则EIP池中EIP数量限制，默认为20。
    *
    * @return $this
    */
    public function setSnatRulePublicIpLimit($snatRulePublicIpLimit)
    {
        $this->container['snatRulePublicIpLimit'] = $snatRulePublicIpLimit;
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

