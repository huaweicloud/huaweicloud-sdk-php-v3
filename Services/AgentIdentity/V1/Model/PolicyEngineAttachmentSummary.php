<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyEngineAttachmentSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyEngineAttachmentSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entityType  entityType
    * entityId  The unique identifier of the attached entity.
    * mode  mode
    * attachedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entityType' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\EntityType',
            'entityId' => 'string',
            'mode' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineMode',
            'attachedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entityType  entityType
    * entityId  The unique identifier of the attached entity.
    * mode  mode
    * attachedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entityType' => null,
        'entityId' => null,
        'mode' => null,
        'attachedAt' => 'date-time'
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
    * entityType  entityType
    * entityId  The unique identifier of the attached entity.
    * mode  mode
    * attachedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entityType' => 'entity_type',
            'entityId' => 'entity_id',
            'mode' => 'mode',
            'attachedAt' => 'attached_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entityType  entityType
    * entityId  The unique identifier of the attached entity.
    * mode  mode
    * attachedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $setters = [
            'entityType' => 'setEntityType',
            'entityId' => 'setEntityId',
            'mode' => 'setMode',
            'attachedAt' => 'setAttachedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entityType  entityType
    * entityId  The unique identifier of the attached entity.
    * mode  mode
    * attachedAt  Timestamp in RFC 3339 format (UTC)
    *
    * @var string[]
    */
    protected static $getters = [
            'entityType' => 'getEntityType',
            'entityId' => 'getEntityId',
            'mode' => 'getMode',
            'attachedAt' => 'getAttachedAt'
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
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['attachedAt'] = isset($data['attachedAt']) ? $data['attachedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        if ($this->container['entityId'] === null) {
            $invalidProperties[] = "'entityId' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['attachedAt'] === null) {
            $invalidProperties[] = "'attachedAt' can't be null";
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
    * Gets entityType
    *  entityType
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\EntityType
    */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
    * Sets entityType
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\EntityType $entityType entityType
    *
    * @return $this
    */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;
        return $this;
    }

    /**
    * Gets entityId
    *  The unique identifier of the attached entity.
    *
    * @return string
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string $entityId The unique identifier of the attached entity.
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
        return $this;
    }

    /**
    * Gets mode
    *  mode
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineMode
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineMode $mode mode
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets attachedAt
    *  Timestamp in RFC 3339 format (UTC)
    *
    * @return \DateTime
    */
    public function getAttachedAt()
    {
        return $this->container['attachedAt'];
    }

    /**
    * Sets attachedAt
    *
    * @param \DateTime $attachedAt Timestamp in RFC 3339 format (UTC)
    *
    * @return $this
    */
    public function setAttachedAt($attachedAt)
    {
        $this->container['attachedAt'] = $attachedAt;
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

