<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreviewFinding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreviewFinding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  允许外部主体使用的操作。
    * changeType  结果状态的变化。
    * condition  分析的策略语句中导致访问预览分析结果的条件。
    * createdAt  生成访问预览分析结果的时间。
    * existingFindingId  访问分析结果的唯一标识符。
    * existingFindingStatus  分析结果的当前状态。
    * id  访问分析结果的唯一标识符。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  资源的唯一资源标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceType  resourceType
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    * status  变化后的状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string[]',
            'changeType' => 'string',
            'condition' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[]',
            'createdAt' => '\DateTime',
            'existingFindingId' => 'string',
            'existingFindingStatus' => 'string',
            'id' => 'string',
            'isPublic' => 'bool',
            'principal' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingPrincipal',
            'resource' => 'string',
            'resourceOwnerAccount' => 'string',
            'resourceType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ResourceType',
            'sources' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  允许外部主体使用的操作。
    * changeType  结果状态的变化。
    * condition  分析的策略语句中导致访问预览分析结果的条件。
    * createdAt  生成访问预览分析结果的时间。
    * existingFindingId  访问分析结果的唯一标识符。
    * existingFindingStatus  分析结果的当前状态。
    * id  访问分析结果的唯一标识符。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  资源的唯一资源标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceType  resourceType
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    * status  变化后的状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'changeType' => null,
        'condition' => null,
        'createdAt' => 'date-time',
        'existingFindingId' => null,
        'existingFindingStatus' => null,
        'id' => null,
        'isPublic' => null,
        'principal' => null,
        'resource' => null,
        'resourceOwnerAccount' => null,
        'resourceType' => null,
        'sources' => null,
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
    * action  允许外部主体使用的操作。
    * changeType  结果状态的变化。
    * condition  分析的策略语句中导致访问预览分析结果的条件。
    * createdAt  生成访问预览分析结果的时间。
    * existingFindingId  访问分析结果的唯一标识符。
    * existingFindingStatus  分析结果的当前状态。
    * id  访问分析结果的唯一标识符。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  资源的唯一资源标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceType  resourceType
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    * status  变化后的状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'changeType' => 'change_type',
            'condition' => 'condition',
            'createdAt' => 'created_at',
            'existingFindingId' => 'existing_finding_id',
            'existingFindingStatus' => 'existing_finding_status',
            'id' => 'id',
            'isPublic' => 'is_public',
            'principal' => 'principal',
            'resource' => 'resource',
            'resourceOwnerAccount' => 'resource_owner_account',
            'resourceType' => 'resource_type',
            'sources' => 'sources',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  允许外部主体使用的操作。
    * changeType  结果状态的变化。
    * condition  分析的策略语句中导致访问预览分析结果的条件。
    * createdAt  生成访问预览分析结果的时间。
    * existingFindingId  访问分析结果的唯一标识符。
    * existingFindingStatus  分析结果的当前状态。
    * id  访问分析结果的唯一标识符。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  资源的唯一资源标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceType  resourceType
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    * status  变化后的状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'changeType' => 'setChangeType',
            'condition' => 'setCondition',
            'createdAt' => 'setCreatedAt',
            'existingFindingId' => 'setExistingFindingId',
            'existingFindingStatus' => 'setExistingFindingStatus',
            'id' => 'setId',
            'isPublic' => 'setIsPublic',
            'principal' => 'setPrincipal',
            'resource' => 'setResource',
            'resourceOwnerAccount' => 'setResourceOwnerAccount',
            'resourceType' => 'setResourceType',
            'sources' => 'setSources',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  允许外部主体使用的操作。
    * changeType  结果状态的变化。
    * condition  分析的策略语句中导致访问预览分析结果的条件。
    * createdAt  生成访问预览分析结果的时间。
    * existingFindingId  访问分析结果的唯一标识符。
    * existingFindingStatus  分析结果的当前状态。
    * id  访问分析结果的唯一标识符。
    * isPublic  表示生成访问分析结果的策略是否允许公共访问资源。
    * principal  principal
    * resource  资源的唯一资源标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceType  resourceType
    * sources  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
    * status  变化后的状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'changeType' => 'getChangeType',
            'condition' => 'getCondition',
            'createdAt' => 'getCreatedAt',
            'existingFindingId' => 'getExistingFindingId',
            'existingFindingStatus' => 'getExistingFindingStatus',
            'id' => 'getId',
            'isPublic' => 'getIsPublic',
            'principal' => 'getPrincipal',
            'resource' => 'getResource',
            'resourceOwnerAccount' => 'getResourceOwnerAccount',
            'resourceType' => 'getResourceType',
            'sources' => 'getSources',
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
    const CHANGE_TYPE_UNCHANGED = 'unchanged';
    const CHANGE_TYPE__NEW = 'new';
    const CHANGE_TYPE_CHANGED = 'changed';
    const EXISTING_FINDING_STATUS_ACTIVE = 'active';
    const EXISTING_FINDING_STATUS_ARCHIVED = 'archived';
    const EXISTING_FINDING_STATUS_RESOLVED = 'resolved';
    const STATUS_ACTIVE = 'active';
    const STATUS_ARCHIVED = 'archived';
    const STATUS_RESOLVED = 'resolved';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_UNCHANGED,
            self::CHANGE_TYPE__NEW,
            self::CHANGE_TYPE_CHANGED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExistingFindingStatusAllowableValues()
    {
        return [
            self::EXISTING_FINDING_STATUS_ACTIVE,
            self::EXISTING_FINDING_STATUS_ARCHIVED,
            self::EXISTING_FINDING_STATUS_RESOLVED,
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
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['existingFindingId'] = isset($data['existingFindingId']) ? $data['existingFindingId'] : null;
        $this->container['existingFindingStatus'] = isset($data['existingFindingStatus']) ? $data['existingFindingStatus'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['resourceOwnerAccount'] = isset($data['resourceOwnerAccount']) ? $data['resourceOwnerAccount'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
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
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['changeType'] === null) {
            $invalidProperties[] = "'changeType' can't be null";
        }
            $allowedValues = $this->getChangeTypeAllowableValues();
                if (!is_null($this->container['changeType']) && !in_array($this->container['changeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if (!is_null($this->container['existingFindingId']) && (mb_strlen($this->container['existingFindingId']) > 36)) {
                $invalidProperties[] = "invalid value for 'existingFindingId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['existingFindingId']) && (mb_strlen($this->container['existingFindingId']) < 1)) {
                $invalidProperties[] = "invalid value for 'existingFindingId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['existingFindingId']) && !preg_match("/^[\\w-]+$/", $this->container['existingFindingId'])) {
                $invalidProperties[] = "invalid value for 'existingFindingId', must be conform to the pattern /^[\\w-]+$/.";
            }
            $allowedValues = $this->getExistingFindingStatusAllowableValues();
                if (!is_null($this->container['existingFindingStatus']) && !in_array($this->container['existingFindingStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'existingFindingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  允许外部主体使用的操作。
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
    * @param string[] $action 允许外部主体使用的操作。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets changeType
    *  结果状态的变化。
    *
    * @return string
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string $changeType 结果状态的变化。
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets condition
    *  分析的策略语句中导致访问预览分析结果的条件。
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
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingCondition[] $condition 分析的策略语句中导致访问预览分析结果的条件。
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
    *  生成访问预览分析结果的时间。
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
    * @param \DateTime $createdAt 生成访问预览分析结果的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets existingFindingId
    *  访问分析结果的唯一标识符。
    *
    * @return string|null
    */
    public function getExistingFindingId()
    {
        return $this->container['existingFindingId'];
    }

    /**
    * Sets existingFindingId
    *
    * @param string|null $existingFindingId 访问分析结果的唯一标识符。
    *
    * @return $this
    */
    public function setExistingFindingId($existingFindingId)
    {
        $this->container['existingFindingId'] = $existingFindingId;
        return $this;
    }

    /**
    * Gets existingFindingStatus
    *  分析结果的当前状态。
    *
    * @return string|null
    */
    public function getExistingFindingStatus()
    {
        return $this->container['existingFindingStatus'];
    }

    /**
    * Sets existingFindingStatus
    *
    * @param string|null $existingFindingStatus 分析结果的当前状态。
    *
    * @return $this
    */
    public function setExistingFindingStatus($existingFindingStatus)
    {
        $this->container['existingFindingStatus'] = $existingFindingStatus;
        return $this;
    }

    /**
    * Gets id
    *  访问分析结果的唯一标识符。
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
    * @param string $id 访问分析结果的唯一标识符。
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
    *  表示生成访问分析结果的策略是否允许公共访问资源。
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
    * @param bool $isPublic 表示生成访问分析结果的策略是否允许公共访问资源。
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
    *  资源的唯一资源标识符。
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
    * @param string $resource 资源的唯一资源标识符。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets resourceOwnerAccount
    *  拥有资源的账号ID。
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
    * @param string $resourceOwnerAccount 拥有资源的账号ID。
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
    *  访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
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
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingSourceType[]|null $sources 访问分析结果的来源，这指示如何授予生成访问分析结果的访问权限。
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
    *  变化后的状态。
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
    * @param string $status 变化后的状态。
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

