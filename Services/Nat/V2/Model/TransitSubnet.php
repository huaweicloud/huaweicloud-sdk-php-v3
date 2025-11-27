<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransitSubnet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransitSubnet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  中转子网的ID
    * name  中转子网的名称
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属的项目ID
    * projectId  项目ID
    * vpcId  中转子网的子网所属VPC的ID
    * virsubnetId  中转子网的子网ID
    * cidr  中转子网的子网网段
    * type  中转子网类型。取值范围：VPC
    * status  中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
    * ipCount  当前中转子网下已分配的中转子网IP数量。
    * createdAt  中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'virsubnetProjectId' => 'string',
            'projectId' => 'string',
            'vpcId' => 'string',
            'virsubnetId' => 'string',
            'cidr' => 'string',
            'type' => 'string',
            'status' => 'string',
            'ipCount' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\Nat\V2\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  中转子网的ID
    * name  中转子网的名称
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属的项目ID
    * projectId  项目ID
    * vpcId  中转子网的子网所属VPC的ID
    * virsubnetId  中转子网的子网ID
    * cidr  中转子网的子网网段
    * type  中转子网类型。取值范围：VPC
    * status  中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
    * ipCount  当前中转子网下已分配的中转子网IP数量。
    * createdAt  中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'virsubnetProjectId' => null,
        'projectId' => null,
        'vpcId' => null,
        'virsubnetId' => null,
        'cidr' => null,
        'type' => null,
        'status' => null,
        'ipCount' => 'int32',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'tags' => null
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
    * id  中转子网的ID
    * name  中转子网的名称
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属的项目ID
    * projectId  项目ID
    * vpcId  中转子网的子网所属VPC的ID
    * virsubnetId  中转子网的子网ID
    * cidr  中转子网的子网网段
    * type  中转子网类型。取值范围：VPC
    * status  中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
    * ipCount  当前中转子网下已分配的中转子网IP数量。
    * createdAt  中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'virsubnetProjectId' => 'virsubnet_project_id',
            'projectId' => 'project_id',
            'vpcId' => 'vpc_id',
            'virsubnetId' => 'virsubnet_id',
            'cidr' => 'cidr',
            'type' => 'type',
            'status' => 'status',
            'ipCount' => 'ip_count',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  中转子网的ID
    * name  中转子网的名称
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属的项目ID
    * projectId  项目ID
    * vpcId  中转子网的子网所属VPC的ID
    * virsubnetId  中转子网的子网ID
    * cidr  中转子网的子网网段
    * type  中转子网类型。取值范围：VPC
    * status  中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
    * ipCount  当前中转子网下已分配的中转子网IP数量。
    * createdAt  中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'virsubnetProjectId' => 'setVirsubnetProjectId',
            'projectId' => 'setProjectId',
            'vpcId' => 'setVpcId',
            'virsubnetId' => 'setVirsubnetId',
            'cidr' => 'setCidr',
            'type' => 'setType',
            'status' => 'setStatus',
            'ipCount' => 'setIpCount',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  中转子网的ID
    * name  中转子网的名称
    * description  中转子网的描述
    * virsubnetProjectId  中转子网的子网所属的项目ID
    * projectId  项目ID
    * vpcId  中转子网的子网所属VPC的ID
    * virsubnetId  中转子网的子网ID
    * cidr  中转子网的子网网段
    * type  中转子网类型。取值范围：VPC
    * status  中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
    * ipCount  当前中转子网下已分配的中转子网IP数量。
    * createdAt  中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * updatedAt  中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'virsubnetProjectId' => 'getVirsubnetProjectId',
            'projectId' => 'getProjectId',
            'vpcId' => 'getVpcId',
            'virsubnetId' => 'getVirsubnetId',
            'cidr' => 'getCidr',
            'type' => 'getType',
            'status' => 'getStatus',
            'ipCount' => 'getIpCount',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'tags' => 'getTags'
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
    const TYPE_VPC = 'VPC';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPC,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['virsubnetProjectId'] = isset($data['virsubnetProjectId']) ? $data['virsubnetProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ipCount'] = isset($data['ipCount']) ? $data['ipCount'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['virsubnetProjectId'] === null) {
            $invalidProperties[] = "'virsubnetProjectId' can't be null";
        }
            if ((mb_strlen($this->container['virsubnetProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['virsubnetProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'virsubnetProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
            if ((mb_strlen($this->container['virsubnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['virsubnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
            if ((mb_strlen($this->container['cidr']) > 36)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cidr']) < 1)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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

        if ($this->container['ipCount'] === null) {
            $invalidProperties[] = "'ipCount' can't be null";
        }
            if (($this->container['ipCount'] > 16777215)) {
                $invalidProperties[] = "invalid value for 'ipCount', must be smaller than or equal to 16777215.";
            }
            if (($this->container['ipCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'ipCount', must be bigger than or equal to 0.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
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
    *  中转子网的ID
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
    * @param string $id 中转子网的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  中转子网的名称
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
    * @param string $name 中转子网的名称
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
    *  中转子网的描述
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
    * @param string $description 中转子网的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets virsubnetProjectId
    *  中转子网的子网所属的项目ID
    *
    * @return string
    */
    public function getVirsubnetProjectId()
    {
        return $this->container['virsubnetProjectId'];
    }

    /**
    * Sets virsubnetProjectId
    *
    * @param string $virsubnetProjectId 中转子网的子网所属的项目ID
    *
    * @return $this
    */
    public function setVirsubnetProjectId($virsubnetProjectId)
    {
        $this->container['virsubnetProjectId'] = $virsubnetProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vpcId
    *  中转子网的子网所属VPC的ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 中转子网的子网所属VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  中转子网的子网ID
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId 中转子网的子网ID
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets cidr
    *  中转子网的子网网段
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
    * @param string $cidr 中转子网的子网网段
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets type
    *  中转子网类型。取值范围：VPC
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 中转子网类型。取值范围：VPC
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
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
    * @param string $status 中转子网状态。 取值范围： ACTIVE： 当前资源状态正常。 INACTIVE： 不可用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ipCount
    *  当前中转子网下已分配的中转子网IP数量。
    *
    * @return int
    */
    public function getIpCount()
    {
        return $this->container['ipCount'];
    }

    /**
    * Sets ipCount
    *
    * @param int $ipCount 当前中转子网下已分配的中转子网IP数量。
    *
    * @return $this
    */
    public function setIpCount($ipCount)
    {
        $this->container['ipCount'] = $ipCount;
        return $this;
    }

    /**
    * Gets createdAt
    *  中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    * @param \DateTime $createdAt 中转子网创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    *  中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
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
    * @param \DateTime $updatedAt 中转子网更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\Tag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\Tag[] $tags 标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

