<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyEngine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyEngine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyEngineId  System-generated unique identifier for the policy engine.
    * name  Customer-assigned immutable name for the policy engine.
    * type  type
    * description  策略集的可读描述。
    * urn  The URN of the policy engine.
    * tags  自定义标签列表。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyEngineId' => 'string',
            'name' => 'string',
            'type' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineType',
            'description' => 'string',
            'urn' => 'string',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyEngineId  System-generated unique identifier for the policy engine.
    * name  Customer-assigned immutable name for the policy engine.
    * type  type
    * description  策略集的可读描述。
    * urn  The URN of the policy engine.
    * tags  自定义标签列表。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyEngineId' => null,
        'name' => null,
        'type' => null,
        'description' => null,
        'urn' => null,
        'tags' => null,
        'createdAt' => 'date-time',
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
    * policyEngineId  System-generated unique identifier for the policy engine.
    * name  Customer-assigned immutable name for the policy engine.
    * type  type
    * description  策略集的可读描述。
    * urn  The URN of the policy engine.
    * tags  自定义标签列表。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyEngineId' => 'policy_engine_id',
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'urn' => 'urn',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyEngineId  System-generated unique identifier for the policy engine.
    * name  Customer-assigned immutable name for the policy engine.
    * type  type
    * description  策略集的可读描述。
    * urn  The URN of the policy engine.
    * tags  自定义标签列表。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $setters = [
            'policyEngineId' => 'setPolicyEngineId',
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'urn' => 'setUrn',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyEngineId  System-generated unique identifier for the policy engine.
    * name  Customer-assigned immutable name for the policy engine.
    * type  type
    * description  策略集的可读描述。
    * urn  The URN of the policy engine.
    * tags  自定义标签列表。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $getters = [
            'policyEngineId' => 'getPolicyEngineId',
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'urn' => 'getUrn',
            'tags' => 'getTags',
            'createdAt' => 'getCreatedAt',
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
        $this->container['policyEngineId'] = isset($data['policyEngineId']) ? $data['policyEngineId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
        if ($this->container['policyEngineId'] === null) {
            $invalidProperties[] = "'policyEngineId' can't be null";
        }
            if ((mb_strlen($this->container['policyEngineId']) > 59)) {
                $invalidProperties[] = "invalid value for 'policyEngineId', the character length must be smaller than or equal to 59.";
            }
            if ((mb_strlen($this->container['policyEngineId']) < 12)) {
                $invalidProperties[] = "invalid value for 'policyEngineId', the character length must be bigger than or equal to 12.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-_]+$/", $this->container['policyEngineId'])) {
                $invalidProperties[] = "invalid value for 'policyEngineId', must be conform to the pattern /^[a-zA-Z0-9\\-_]+$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 48)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 48.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z][A-Za-z0-9_]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z][A-Za-z0-9_]*$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    * Gets policyEngineId
    *  System-generated unique identifier for the policy engine.
    *
    * @return string
    */
    public function getPolicyEngineId()
    {
        return $this->container['policyEngineId'];
    }

    /**
    * Sets policyEngineId
    *
    * @param string $policyEngineId System-generated unique identifier for the policy engine.
    *
    * @return $this
    */
    public function setPolicyEngineId($policyEngineId)
    {
        $this->container['policyEngineId'] = $policyEngineId;
        return $this;
    }

    /**
    * Gets name
    *  Customer-assigned immutable name for the policy engine.
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
    * @param string $name Customer-assigned immutable name for the policy engine.
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineType
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineType $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  策略集的可读描述。
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
    * @param string|null $description 策略集的可读描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets urn
    *  The URN of the policy engine.
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
    * @param string $urn The URN of the policy engine.
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets tags
    *  自定义标签列表。
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]|null $tags 自定义标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createdAt
    *  Timestamp in RFC 3339 format (UTC)
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
    * @param \DateTime $createdAt Timestamp in RFC 3339 format (UTC)
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
    *  Timestamp in RFC 3339 format (UTC)
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
    * @param \DateTime $updatedAt Timestamp in RFC 3339 format (UTC)
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

