<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Policy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  System-generated unique identifier for the policy.
    * name  Human-readable display name for the policy
    * description  策略的可读描述。
    * urn  The URN of the policy.
    * pendingDefinition  pendingDefinition
    * activeDefinition  activeDefinition
    * status  status
    * statusReasons  关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * policyEngineId  System-generated unique identifier for the policy engine.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'urn' => 'string',
            'pendingDefinition' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyDefinition',
            'activeDefinition' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyDefinition',
            'status' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyStatus',
            'statusReasons' => 'string[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'policyEngineId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  System-generated unique identifier for the policy.
    * name  Human-readable display name for the policy
    * description  策略的可读描述。
    * urn  The URN of the policy.
    * pendingDefinition  pendingDefinition
    * activeDefinition  activeDefinition
    * status  status
    * statusReasons  关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * policyEngineId  System-generated unique identifier for the policy engine.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'name' => null,
        'description' => null,
        'urn' => null,
        'pendingDefinition' => null,
        'activeDefinition' => null,
        'status' => null,
        'statusReasons' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'policyEngineId' => null
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
    * policyId  System-generated unique identifier for the policy.
    * name  Human-readable display name for the policy
    * description  策略的可读描述。
    * urn  The URN of the policy.
    * pendingDefinition  pendingDefinition
    * activeDefinition  activeDefinition
    * status  status
    * statusReasons  关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * policyEngineId  System-generated unique identifier for the policy engine.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'name' => 'name',
            'description' => 'description',
            'urn' => 'urn',
            'pendingDefinition' => 'pending_definition',
            'activeDefinition' => 'active_definition',
            'status' => 'status',
            'statusReasons' => 'status_reasons',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'policyEngineId' => 'policy_engine_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  System-generated unique identifier for the policy.
    * name  Human-readable display name for the policy
    * description  策略的可读描述。
    * urn  The URN of the policy.
    * pendingDefinition  pendingDefinition
    * activeDefinition  activeDefinition
    * status  status
    * statusReasons  关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * policyEngineId  System-generated unique identifier for the policy engine.
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'name' => 'setName',
            'description' => 'setDescription',
            'urn' => 'setUrn',
            'pendingDefinition' => 'setPendingDefinition',
            'activeDefinition' => 'setActiveDefinition',
            'status' => 'setStatus',
            'statusReasons' => 'setStatusReasons',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'policyEngineId' => 'setPolicyEngineId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  System-generated unique identifier for the policy.
    * name  Human-readable display name for the policy
    * description  策略的可读描述。
    * urn  The URN of the policy.
    * pendingDefinition  pendingDefinition
    * activeDefinition  activeDefinition
    * status  status
    * statusReasons  关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * policyEngineId  System-generated unique identifier for the policy engine.
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'name' => 'getName',
            'description' => 'getDescription',
            'urn' => 'getUrn',
            'pendingDefinition' => 'getPendingDefinition',
            'activeDefinition' => 'getActiveDefinition',
            'status' => 'getStatus',
            'statusReasons' => 'getStatusReasons',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'policyEngineId' => 'getPolicyEngineId'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['pendingDefinition'] = isset($data['pendingDefinition']) ? $data['pendingDefinition'] : null;
        $this->container['activeDefinition'] = isset($data['activeDefinition']) ? $data['activeDefinition'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusReasons'] = isset($data['statusReasons']) ? $data['statusReasons'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['policyEngineId'] = isset($data['policyEngineId']) ? $data['policyEngineId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-_]+$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^[a-zA-Z0-9\\-_]+$/.";
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
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
    * Gets policyId
    *  System-generated unique identifier for the policy.
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId System-generated unique identifier for the policy.
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets name
    *  Human-readable display name for the policy
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
    * @param string $name Human-readable display name for the policy
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
    *  策略的可读描述。
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
    * @param string|null $description 策略的可读描述。
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
    *  The URN of the policy.
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
    * @param string $urn The URN of the policy.
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets pendingDefinition
    *  pendingDefinition
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyDefinition|null
    */
    public function getPendingDefinition()
    {
        return $this->container['pendingDefinition'];
    }

    /**
    * Sets pendingDefinition
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyDefinition|null $pendingDefinition pendingDefinition
    *
    * @return $this
    */
    public function setPendingDefinition($pendingDefinition)
    {
        $this->container['pendingDefinition'] = $pendingDefinition;
        return $this;
    }

    /**
    * Gets activeDefinition
    *  activeDefinition
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyDefinition|null
    */
    public function getActiveDefinition()
    {
        return $this->container['activeDefinition'];
    }

    /**
    * Sets activeDefinition
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyDefinition|null $activeDefinition activeDefinition
    *
    * @return $this
    */
    public function setActiveDefinition($activeDefinition)
    {
        $this->container['activeDefinition'] = $activeDefinition;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyStatus
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyStatus $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusReasons
    *  关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    *
    * @return string[]|null
    */
    public function getStatusReasons()
    {
        return $this->container['statusReasons'];
    }

    /**
    * Sets statusReasons
    *
    * @param string[]|null $statusReasons 关于策略状态的额外信息，提供关于任何失败或策略创建过程当前状态的详细信息。
    *
    * @return $this
    */
    public function setStatusReasons($statusReasons)
    {
        $this->container['statusReasons'] = $statusReasons;
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

