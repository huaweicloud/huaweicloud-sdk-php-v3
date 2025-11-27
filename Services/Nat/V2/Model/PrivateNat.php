<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateNat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateNat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  私网NAT网关实例的ID。
    * projectId  项目的ID。
    * name  私网NAT网关实例的名字。
    * description  私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
    * status  私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    * createdAt  私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * downlinkVpcs  私网NAT网关实例所属的VPC实例。
    * tags  标签列表。
    * enterpriseProjectId  企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
    * ruleMax  最大规则数。
    * transitIpPoolSizeMax  中转ip池大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'spec' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'downlinkVpcs' => '\HuaweiCloud\SDK\Nat\V2\Model\DownlinkVpc[]',
            'tags' => '\HuaweiCloud\SDK\Nat\V2\Model\Tag[]',
            'enterpriseProjectId' => 'string',
            'ruleMax' => 'int',
            'transitIpPoolSizeMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  私网NAT网关实例的ID。
    * projectId  项目的ID。
    * name  私网NAT网关实例的名字。
    * description  私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
    * status  私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    * createdAt  私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * downlinkVpcs  私网NAT网关实例所属的VPC实例。
    * tags  标签列表。
    * enterpriseProjectId  企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
    * ruleMax  最大规则数。
    * transitIpPoolSizeMax  中转ip池大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'name' => null,
        'description' => null,
        'spec' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'downlinkVpcs' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'ruleMax' => 'int32',
        'transitIpPoolSizeMax' => 'int32'
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
    * id  私网NAT网关实例的ID。
    * projectId  项目的ID。
    * name  私网NAT网关实例的名字。
    * description  私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
    * status  私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    * createdAt  私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * downlinkVpcs  私网NAT网关实例所属的VPC实例。
    * tags  标签列表。
    * enterpriseProjectId  企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
    * ruleMax  最大规则数。
    * transitIpPoolSizeMax  中转ip池大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'name' => 'name',
            'description' => 'description',
            'spec' => 'spec',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'downlinkVpcs' => 'downlink_vpcs',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ruleMax' => 'rule_max',
            'transitIpPoolSizeMax' => 'transit_ip_pool_size_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  私网NAT网关实例的ID。
    * projectId  项目的ID。
    * name  私网NAT网关实例的名字。
    * description  私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
    * status  私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    * createdAt  私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * downlinkVpcs  私网NAT网关实例所属的VPC实例。
    * tags  标签列表。
    * enterpriseProjectId  企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
    * ruleMax  最大规则数。
    * transitIpPoolSizeMax  中转ip池大小
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'description' => 'setDescription',
            'spec' => 'setSpec',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'downlinkVpcs' => 'setDownlinkVpcs',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ruleMax' => 'setRuleMax',
            'transitIpPoolSizeMax' => 'setTransitIpPoolSizeMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  私网NAT网关实例的ID。
    * projectId  项目的ID。
    * name  私网NAT网关实例的名字。
    * description  私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
    * status  私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    * createdAt  私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * downlinkVpcs  私网NAT网关实例所属的VPC实例。
    * tags  标签列表。
    * enterpriseProjectId  企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
    * ruleMax  最大规则数。
    * transitIpPoolSizeMax  中转ip池大小
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'description' => 'getDescription',
            'spec' => 'getSpec',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'downlinkVpcs' => 'getDownlinkVpcs',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ruleMax' => 'getRuleMax',
            'transitIpPoolSizeMax' => 'getTransitIpPoolSizeMax'
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
    const SPEC_SMALL = 'Small';
    const SPEC_MEDIUM = 'Medium';
    const SPEC_LARGE = 'Large';
    const SPEC_EXTRA_LARGE = 'Extra-large';
    const SPEC_EXTRA_XLARGE = 'Extra-xlarge';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_INACTIVE = 'INACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC_SMALL,
            self::SPEC_MEDIUM,
            self::SPEC_LARGE,
            self::SPEC_EXTRA_LARGE,
            self::SPEC_EXTRA_XLARGE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['downlinkVpcs'] = isset($data['downlinkVpcs']) ? $data['downlinkVpcs'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ruleMax'] = isset($data['ruleMax']) ? $data['ruleMax'] : null;
        $this->container['transitIpPoolSizeMax'] = isset($data['transitIpPoolSizeMax']) ? $data['transitIpPoolSizeMax'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['downlinkVpcs'] === null) {
            $invalidProperties[] = "'downlinkVpcs' can't be null";
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
            if (!is_null($this->container['ruleMax']) && ($this->container['ruleMax'] > 65535)) {
                $invalidProperties[] = "invalid value for 'ruleMax', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['ruleMax']) && ($this->container['ruleMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'ruleMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transitIpPoolSizeMax']) && ($this->container['transitIpPoolSizeMax'] > 100)) {
                $invalidProperties[] = "invalid value for 'transitIpPoolSizeMax', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['transitIpPoolSizeMax']) && ($this->container['transitIpPoolSizeMax'] < 1)) {
                $invalidProperties[] = "invalid value for 'transitIpPoolSizeMax', must be bigger than or equal to 1.";
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
    *  私网NAT网关实例的ID。
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
    * @param string $id 私网NAT网关实例的ID。
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
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目的ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  私网NAT网关实例的名字。
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
    * @param string $name 私网NAT网关实例的名字。
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
    *  私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string $description 私网NAT网关实例的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    *  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
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
    * @param string $spec 私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型 \"Extra-xlarge\"：企业型
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
    *  私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
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
    * @param string $status 私网NAT网关实例的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
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
    *  私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 私网NAT网关实例的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    *  私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 私网NAT网关实例的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets downlinkVpcs
    *  私网NAT网关实例所属的VPC实例。
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\DownlinkVpc[]
    */
    public function getDownlinkVpcs()
    {
        return $this->container['downlinkVpcs'];
    }

    /**
    * Sets downlinkVpcs
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\DownlinkVpc[] $downlinkVpcs 私网NAT网关实例所属的VPC实例。
    *
    * @return $this
    */
    public function setDownlinkVpcs($downlinkVpcs)
    {
        $this->container['downlinkVpcs'] = $downlinkVpcs;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\Tag[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
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
    * @param string $enterpriseProjectId 企业项目ID。 创建私网NAT网关实例时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ruleMax
    *  最大规则数。
    *
    * @return int|null
    */
    public function getRuleMax()
    {
        return $this->container['ruleMax'];
    }

    /**
    * Sets ruleMax
    *
    * @param int|null $ruleMax 最大规则数。
    *
    * @return $this
    */
    public function setRuleMax($ruleMax)
    {
        $this->container['ruleMax'] = $ruleMax;
        return $this;
    }

    /**
    * Gets transitIpPoolSizeMax
    *  中转ip池大小
    *
    * @return int|null
    */
    public function getTransitIpPoolSizeMax()
    {
        return $this->container['transitIpPoolSizeMax'];
    }

    /**
    * Sets transitIpPoolSizeMax
    *
    * @param int|null $transitIpPoolSizeMax 中转ip池大小
    *
    * @return $this
    */
    public function setTransitIpPoolSizeMax($transitIpPoolSizeMax)
    {
        $this->container['transitIpPoolSizeMax'] = $transitIpPoolSizeMax;
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

