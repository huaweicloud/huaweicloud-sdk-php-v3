<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnalyzerSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnalyzerSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configuration  configuration
    * createdAt  分析器创建的时间。
    * id  分析器的唯一标识符。
    * lastAnalyzedResource  最近分析的资源的唯一资源标识符。
    * lastResourceAnalyzedAt  最近一次分析资源的时间。
    * name  分析器的名称。
    * organizationId  组织ID。
    * status  分析器的状态。
    * statusReason  statusReason
    * tags  自定义标签列表。
    * type  type
    * urn  分析器的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configuration' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerConfiguration',
            'createdAt' => '\DateTime',
            'id' => 'string',
            'lastAnalyzedResource' => 'string',
            'lastResourceAnalyzedAt' => '\DateTime',
            'name' => 'string',
            'organizationId' => 'string',
            'status' => 'string',
            'statusReason' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\StatusReason',
            'tags' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Tag[]',
            'type' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType',
            'urn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configuration  configuration
    * createdAt  分析器创建的时间。
    * id  分析器的唯一标识符。
    * lastAnalyzedResource  最近分析的资源的唯一资源标识符。
    * lastResourceAnalyzedAt  最近一次分析资源的时间。
    * name  分析器的名称。
    * organizationId  组织ID。
    * status  分析器的状态。
    * statusReason  statusReason
    * tags  自定义标签列表。
    * type  type
    * urn  分析器的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configuration' => null,
        'createdAt' => 'date-time',
        'id' => null,
        'lastAnalyzedResource' => null,
        'lastResourceAnalyzedAt' => 'date-time',
        'name' => null,
        'organizationId' => null,
        'status' => null,
        'statusReason' => null,
        'tags' => null,
        'type' => null,
        'urn' => null
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
    * configuration  configuration
    * createdAt  分析器创建的时间。
    * id  分析器的唯一标识符。
    * lastAnalyzedResource  最近分析的资源的唯一资源标识符。
    * lastResourceAnalyzedAt  最近一次分析资源的时间。
    * name  分析器的名称。
    * organizationId  组织ID。
    * status  分析器的状态。
    * statusReason  statusReason
    * tags  自定义标签列表。
    * type  type
    * urn  分析器的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configuration' => 'configuration',
            'createdAt' => 'created_at',
            'id' => 'id',
            'lastAnalyzedResource' => 'last_analyzed_resource',
            'lastResourceAnalyzedAt' => 'last_resource_analyzed_at',
            'name' => 'name',
            'organizationId' => 'organization_id',
            'status' => 'status',
            'statusReason' => 'status_reason',
            'tags' => 'tags',
            'type' => 'type',
            'urn' => 'urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configuration  configuration
    * createdAt  分析器创建的时间。
    * id  分析器的唯一标识符。
    * lastAnalyzedResource  最近分析的资源的唯一资源标识符。
    * lastResourceAnalyzedAt  最近一次分析资源的时间。
    * name  分析器的名称。
    * organizationId  组织ID。
    * status  分析器的状态。
    * statusReason  statusReason
    * tags  自定义标签列表。
    * type  type
    * urn  分析器的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $setters = [
            'configuration' => 'setConfiguration',
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'lastAnalyzedResource' => 'setLastAnalyzedResource',
            'lastResourceAnalyzedAt' => 'setLastResourceAnalyzedAt',
            'name' => 'setName',
            'organizationId' => 'setOrganizationId',
            'status' => 'setStatus',
            'statusReason' => 'setStatusReason',
            'tags' => 'setTags',
            'type' => 'setType',
            'urn' => 'setUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configuration  configuration
    * createdAt  分析器创建的时间。
    * id  分析器的唯一标识符。
    * lastAnalyzedResource  最近分析的资源的唯一资源标识符。
    * lastResourceAnalyzedAt  最近一次分析资源的时间。
    * name  分析器的名称。
    * organizationId  组织ID。
    * status  分析器的状态。
    * statusReason  statusReason
    * tags  自定义标签列表。
    * type  type
    * urn  分析器的唯一资源标识符。
    *
    * @var string[]
    */
    protected static $getters = [
            'configuration' => 'getConfiguration',
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
            'lastAnalyzedResource' => 'getLastAnalyzedResource',
            'lastResourceAnalyzedAt' => 'getLastResourceAnalyzedAt',
            'name' => 'getName',
            'organizationId' => 'getOrganizationId',
            'status' => 'getStatus',
            'statusReason' => 'getStatusReason',
            'tags' => 'getTags',
            'type' => 'getType',
            'urn' => 'getUrn'
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
    const STATUS_CREATING = 'creating';
    const STATUS_DISABLED = 'disabled';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_CREATING,
            self::STATUS_DISABLED,
            self::STATUS_FAILED,
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
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastAnalyzedResource'] = isset($data['lastAnalyzedResource']) ? $data['lastAnalyzedResource'] : null;
        $this->container['lastResourceAnalyzedAt'] = isset($data['lastResourceAnalyzedAt']) ? $data['lastResourceAnalyzedAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusReason'] = isset($data['statusReason']) ? $data['statusReason'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['lastAnalyzedResource']) && (mb_strlen($this->container['lastAnalyzedResource']) > 1500)) {
                $invalidProperties[] = "invalid value for 'lastAnalyzedResource', the character length must be smaller than or equal to 1500.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z][A-Za-z0-9_.-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z][A-Za-z0-9_.-]*$/.";
            }
            if (!is_null($this->container['organizationId']) && (mb_strlen($this->container['organizationId']) > 35)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 35.";
            }
            if (!is_null($this->container['organizationId']) && (mb_strlen($this->container['organizationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationId']) && !preg_match("/^ou-[0-9a-z]{8,32}$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^ou-[0-9a-z]{8,32}$/.";
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
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
    * Gets configuration
    *  configuration
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerConfiguration|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerConfiguration|null $configuration configuration
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets createdAt
    *  分析器创建的时间。
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
    * @param \DateTime $createdAt 分析器创建的时间。
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
    *  分析器的唯一标识符。
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
    * @param string $id 分析器的唯一标识符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastAnalyzedResource
    *  最近分析的资源的唯一资源标识符。
    *
    * @return string|null
    */
    public function getLastAnalyzedResource()
    {
        return $this->container['lastAnalyzedResource'];
    }

    /**
    * Sets lastAnalyzedResource
    *
    * @param string|null $lastAnalyzedResource 最近分析的资源的唯一资源标识符。
    *
    * @return $this
    */
    public function setLastAnalyzedResource($lastAnalyzedResource)
    {
        $this->container['lastAnalyzedResource'] = $lastAnalyzedResource;
        return $this;
    }

    /**
    * Gets lastResourceAnalyzedAt
    *  最近一次分析资源的时间。
    *
    * @return \DateTime|null
    */
    public function getLastResourceAnalyzedAt()
    {
        return $this->container['lastResourceAnalyzedAt'];
    }

    /**
    * Sets lastResourceAnalyzedAt
    *
    * @param \DateTime|null $lastResourceAnalyzedAt 最近一次分析资源的时间。
    *
    * @return $this
    */
    public function setLastResourceAnalyzedAt($lastResourceAnalyzedAt)
    {
        $this->container['lastResourceAnalyzedAt'] = $lastResourceAnalyzedAt;
        return $this;
    }

    /**
    * Gets name
    *  分析器的名称。
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
    * @param string $name 分析器的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets organizationId
    *  组织ID。
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId 组织ID。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets status
    *  分析器的状态。
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
    * @param string $status 分析器的状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusReason
    *  statusReason
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\StatusReason|null
    */
    public function getStatusReason()
    {
        return $this->container['statusReason'];
    }

    /**
    * Sets statusReason
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\StatusReason|null $statusReason statusReason
    *
    * @return $this
    */
    public function setStatusReason($statusReason)
    {
        $this->container['statusReason'] = $statusReason;
        return $this;
    }

    /**
    * Gets tags
    *  自定义标签列表。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Tag[]|null $tags 自定义标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AnalyzerType $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets urn
    *  分析器的唯一资源标识符。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 分析器的唯一资源标识符。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
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

