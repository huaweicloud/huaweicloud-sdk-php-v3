<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNatGatewaysRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNatGatewaysRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  项目的ID。
    * id  公网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
    * status  公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
    * spec  公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * routerId  VPC的id。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    * sortKey  排序使用的key
    * sortDir  返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'id' => 'string',
            'enterpriseProjectId' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'name' => 'string',
            'status' => 'string[]',
            'spec' => 'string[]',
            'adminStateUp' => 'bool',
            'internalNetworkId' => 'string',
            'routerId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  项目的ID。
    * id  公网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
    * status  公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
    * spec  公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * routerId  VPC的id。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    * sortKey  排序使用的key
    * sortDir  返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'id' => null,
        'enterpriseProjectId' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'name' => null,
        'status' => null,
        'spec' => null,
        'adminStateUp' => null,
        'internalNetworkId' => null,
        'routerId' => null,
        'limit' => null,
        'marker' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * tenantId  项目的ID。
    * id  公网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
    * status  公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
    * spec  公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * routerId  VPC的id。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    * sortKey  排序使用的key
    * sortDir  返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'id' => 'id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'name' => 'name',
            'status' => 'status',
            'spec' => 'spec',
            'adminStateUp' => 'admin_state_up',
            'internalNetworkId' => 'internal_network_id',
            'routerId' => 'router_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  项目的ID。
    * id  公网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
    * status  公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
    * spec  公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * routerId  VPC的id。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    * sortKey  排序使用的key
    * sortDir  返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'id' => 'setId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'name' => 'setName',
            'status' => 'setStatus',
            'spec' => 'setSpec',
            'adminStateUp' => 'setAdminStateUp',
            'internalNetworkId' => 'setInternalNetworkId',
            'routerId' => 'setRouterId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  项目的ID。
    * id  公网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
    * description  公网NAT网关实例的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    * createdAt  公网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
    * status  公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
    * spec  公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    * adminStateUp  解冻/冻结状态。 取值范围： \"true\"：解冻 \"false\"：冻结
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * routerId  VPC的id。
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  分页查询的起始资源ID，表示从指定资源的下一条记录开始查询。 - 若不传入marker和limit参数，查询结果返回第一页全部资源记录（默认2000条）。 - 若不传入marker参数，limit为10，查询结果返回第1~10条资源记录。 - 若marker为第10条记录的资源ID，limit为10，查询结果返回第11~20条资源记录。 - 若marker为第10条记录的资源ID，不传入limit参数，查询结果返回第11条及之后的资源记录（默认2000条）。
    * sortKey  排序使用的key
    * sortDir  返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'id' => 'getId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'name' => 'getName',
            'status' => 'getStatus',
            'spec' => 'getSpec',
            'adminStateUp' => 'getAdminStateUp',
            'internalNetworkId' => 'getInternalNetworkId',
            'routerId' => 'getRouterId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const STATUS_INACTIVE = 'INACTIVE';
    const SPEC__1 = '1';
    const SPEC__2 = '2';
    const SPEC__3 = '3';
    const SPEC__4 = '4';
    const SPEC__5 = '5';
    const SORT_KEY_ID = 'id';
    const SORT_KEY_NAME = 'name';
    const SORT_KEY_STATUS = 'status';
    const SORT_KEY_CREATED_AT = 'created_at';
    const SORT_DIR_DESC = 'desc';
    const SORT_DIR_ASC = 'asc';
    

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
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_ID,
            self::SORT_KEY_NAME,
            self::SORT_KEY_STATUS,
            self::SORT_KEY_CREATED_AT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_DESC,
            self::SORT_DIR_ASC,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['internalNetworkId'] = isset($data['internalNetworkId']) ? $data['internalNetworkId'] : null;
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['internalNetworkId']) && (mb_strlen($this->container['internalNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'internalNetworkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['internalNetworkId']) && (mb_strlen($this->container['internalNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'internalNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
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
    * Gets enterpriseProjectId
    *  企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。创建公网NAT网关实例时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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
    * Gets name
    *  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
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
    * @param string|null $name 公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
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
    * @param string[]|null $status 公网NAT网关实例的状态。 取值为:  ACTIVE: 可用 PENDING_CREATE: 创建中 PENDING_UPDATE: 更新中 PENDING_DELETE: 删除中 INACTIVE: 不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets spec
    *  公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    *
    * @return string[]|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string[]|null $spec 公网NAT网关实例的规格。 取值为： \"1\"：小型，SNAT最大连接数10000 \"2\"：中型，SNAT最大连接数50000 \"3\"：大型，SNAT最大连接数200000 \"4\"：超大型，SNAT最大连接数1000000 “5”：企业型，SNAT最大连接数10000000
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
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
    * Gets sortKey
    *  排序使用的key
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序使用的key
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 返回结果按照升序或降序排列，默认降序desc，升序为asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

