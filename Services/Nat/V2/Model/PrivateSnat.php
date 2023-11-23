<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateSnat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateSnat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SNAT规则的ID。
    * projectId  项目的ID。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpAssociations  关联的中转IP详情列表。
    * createdAt  SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'gatewayId' => 'string',
            'cidr' => 'string',
            'virsubnetId' => 'string',
            'description' => 'string',
            'transitIpAssociations' => '\HuaweiCloud\SDK\Nat\V2\Model\AssociatedTransitIp[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SNAT规则的ID。
    * projectId  项目的ID。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpAssociations  关联的中转IP详情列表。
    * createdAt  SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'gatewayId' => null,
        'cidr' => null,
        'virsubnetId' => null,
        'description' => null,
        'transitIpAssociations' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'enterpriseProjectId' => null
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
    * projectId  项目的ID。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpAssociations  关联的中转IP详情列表。
    * createdAt  SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'gatewayId' => 'gateway_id',
            'cidr' => 'cidr',
            'virsubnetId' => 'virsubnet_id',
            'description' => 'description',
            'transitIpAssociations' => 'transit_ip_associations',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SNAT规则的ID。
    * projectId  项目的ID。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpAssociations  关联的中转IP详情列表。
    * createdAt  SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'gatewayId' => 'setGatewayId',
            'cidr' => 'setCidr',
            'virsubnetId' => 'setVirsubnetId',
            'description' => 'setDescription',
            'transitIpAssociations' => 'setTransitIpAssociations',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SNAT规则的ID。
    * projectId  项目的ID。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * transitIpAssociations  关联的中转IP详情列表。
    * createdAt  SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'gatewayId' => 'getGatewayId',
            'cidr' => 'getCidr',
            'virsubnetId' => 'getVirsubnetId',
            'description' => 'getDescription',
            'transitIpAssociations' => 'getTransitIpAssociations',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['transitIpAssociations'] = isset($data['transitIpAssociations']) ? $data['transitIpAssociations'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 18)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 18.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 9)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 9.";
            }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    * Gets cidr
    *  功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
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
    * @param string|null $cidr 功能说明：规则匹配的CIDR。 取值约束： - 与virsubnet_id参数二选一。 - cidr不能与已有snat规则的网段相同。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId 功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets description
    *  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets transitIpAssociations
    *  关联的中转IP详情列表。
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\AssociatedTransitIp[]|null
    */
    public function getTransitIpAssociations()
    {
        return $this->container['transitIpAssociations'];
    }

    /**
    * Sets transitIpAssociations
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\AssociatedTransitIp[]|null $transitIpAssociations 关联的中转IP详情列表。
    *
    * @return $this
    */
    public function setTransitIpAssociations($transitIpAssociations)
    {
        $this->container['transitIpAssociations'] = $transitIpAssociations;
        return $this;
    }

    /**
    * Gets createdAt
    *  SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    * @param \DateTime|null $createdAt SNAT规则的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    *  SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    * @param \DateTime|null $updatedAt SNAT规则的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

