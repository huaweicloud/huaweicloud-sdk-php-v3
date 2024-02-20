<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Finding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Finding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  访问信任区域内资源的外部主体。
    * analyzedAt  分析资源的时间。
    * condition  condition
    * createdAt  生成查找结果的时间。
    * id  要检索的结果的ID。
    * isPublic  表示生成查找结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  唯一的资源名称。
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的帐户ID。
    * resourceType  resourceType
    * sources  sources
    * status  结果的当前状态。
    * updatedAt  更新调查结果的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string[]',
            'analyzedAt' => '\DateTime',
            'condition' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[]',
            'createdAt' => '\DateTime',
            'id' => 'string',
            'isPublic' => 'bool',
            'principal' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal',
            'resource' => 'string',
            'resourceId' => 'string',
            'resourceOwnerAccount' => 'string',
            'resourceType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ResourceType',
            'sources' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]',
            'status' => 'string',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  访问信任区域内资源的外部主体。
    * analyzedAt  分析资源的时间。
    * condition  condition
    * createdAt  生成查找结果的时间。
    * id  要检索的结果的ID。
    * isPublic  表示生成查找结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  唯一的资源名称。
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的帐户ID。
    * resourceType  resourceType
    * sources  sources
    * status  结果的当前状态。
    * updatedAt  更新调查结果的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'analyzedAt' => 'date-time',
        'condition' => null,
        'createdAt' => 'date-time',
        'id' => null,
        'isPublic' => null,
        'principal' => null,
        'resource' => null,
        'resourceId' => null,
        'resourceOwnerAccount' => null,
        'resourceType' => null,
        'sources' => null,
        'status' => null,
        'updatedAt' => 'date-time'
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
    * action  访问信任区域内资源的外部主体。
    * analyzedAt  分析资源的时间。
    * condition  condition
    * createdAt  生成查找结果的时间。
    * id  要检索的结果的ID。
    * isPublic  表示生成查找结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  唯一的资源名称。
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的帐户ID。
    * resourceType  resourceType
    * sources  sources
    * status  结果的当前状态。
    * updatedAt  更新调查结果的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'analyzedAt' => 'analyzed_at',
            'condition' => 'condition',
            'createdAt' => 'created_at',
            'id' => 'id',
            'isPublic' => 'is_public',
            'principal' => 'principal',
            'resource' => 'resource',
            'resourceId' => 'resource_id',
            'resourceOwnerAccount' => 'resource_owner_account',
            'resourceType' => 'resource_type',
            'sources' => 'sources',
            'status' => 'status',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  访问信任区域内资源的外部主体。
    * analyzedAt  分析资源的时间。
    * condition  condition
    * createdAt  生成查找结果的时间。
    * id  要检索的结果的ID。
    * isPublic  表示生成查找结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  唯一的资源名称。
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的帐户ID。
    * resourceType  resourceType
    * sources  sources
    * status  结果的当前状态。
    * updatedAt  更新调查结果的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'analyzedAt' => 'setAnalyzedAt',
            'condition' => 'setCondition',
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'isPublic' => 'setIsPublic',
            'principal' => 'setPrincipal',
            'resource' => 'setResource',
            'resourceId' => 'setResourceId',
            'resourceOwnerAccount' => 'setResourceOwnerAccount',
            'resourceType' => 'setResourceType',
            'sources' => 'setSources',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  访问信任区域内资源的外部主体。
    * analyzedAt  分析资源的时间。
    * condition  condition
    * createdAt  生成查找结果的时间。
    * id  要检索的结果的ID。
    * isPublic  表示生成查找结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  唯一的资源名称。
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的帐户ID。
    * resourceType  resourceType
    * sources  sources
    * status  结果的当前状态。
    * updatedAt  更新调查结果的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'analyzedAt' => 'getAnalyzedAt',
            'condition' => 'getCondition',
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
            'isPublic' => 'getIsPublic',
            'principal' => 'getPrincipal',
            'resource' => 'getResource',
            'resourceId' => 'getResourceId',
            'resourceOwnerAccount' => 'getResourceOwnerAccount',
            'resourceType' => 'getResourceType',
            'sources' => 'getSources',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt'
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
    const STATUS_ACTIVE = 'active';
    const STATUS_ARCHIVED = 'archived';
    const STATUS_RESOLVED = 'resolved';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ARCHIVED,
            self::STATUS_RESOLVED,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['analyzedAt'] = isset($data['analyzedAt']) ? $data['analyzedAt'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceOwnerAccount'] = isset($data['resourceOwnerAccount']) ? $data['resourceOwnerAccount'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['analyzedAt'] === null) {
            $invalidProperties[] = "'analyzedAt' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['isPublic'] === null) {
            $invalidProperties[] = "'isPublic' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
        }
            if ((mb_strlen($this->container['resource']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resource', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/^[\\w-]+$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['resourceOwnerAccount'] === null) {
            $invalidProperties[] = "'resourceOwnerAccount' can't be null";
        }
            if ((mb_strlen($this->container['resourceOwnerAccount']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceOwnerAccount', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceOwnerAccount']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceOwnerAccount', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['resourceOwnerAccount'])) {
                $invalidProperties[] = "invalid value for 'resourceOwnerAccount', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
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

        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets action
    *  访问信任区域内资源的外部主体。
    *
    * @return string[]
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string[] $action 访问信任区域内资源的外部主体。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets analyzedAt
    *  分析资源的时间。
    *
    * @return \DateTime
    */
    public function getAnalyzedAt()
    {
        return $this->container['analyzedAt'];
    }

    /**
    * Sets analyzedAt
    *
    * @param \DateTime $analyzedAt 分析资源的时间。
    *
    * @return $this
    */
    public function setAnalyzedAt($analyzedAt)
    {
        $this->container['analyzedAt'] = $analyzedAt;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[]
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[] $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets createdAt
    *  生成查找结果的时间。
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
    * @param \DateTime $createdAt 生成查找结果的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets id
    *  要检索的结果的ID。
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
    * @param string $id 要检索的结果的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isPublic
    *  表示生成查找结果的策略是否允许公共访问资源。
    *
    * @return bool
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool $isPublic 表示生成查找结果的策略是否允许公共访问资源。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets principal
    *  principal
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal
    */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
    * Sets principal
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal $principal principal
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets resource
    *  唯一的资源名称。
    *
    * @return string
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string $resource 唯一的资源名称。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源的唯一标识符。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源的唯一标识符。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceOwnerAccount
    *  拥有资源的帐户ID。
    *
    * @return string
    */
    public function getResourceOwnerAccount()
    {
        return $this->container['resourceOwnerAccount'];
    }

    /**
    * Sets resourceOwnerAccount
    *
    * @param string $resourceOwnerAccount 拥有资源的帐户ID。
    *
    * @return $this
    */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->container['resourceOwnerAccount'] = $resourceOwnerAccount;
        return $this;
    }

    /**
    * Gets resourceType
    *  resourceType
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ResourceType
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ResourceType $resourceType resourceType
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets sources
    *  sources
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]|null $sources sources
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets status
    *  结果的当前状态。
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
    * @param string $status 结果的当前状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新调查结果的时间。
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
    * @param \DateTime $updatedAt 更新调查结果的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

