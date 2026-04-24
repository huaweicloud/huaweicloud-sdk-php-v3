<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TokenVault implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TokenVault';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tokenVaultId  The unique identifier of the token vault.
    * kmsConfiguration  kmsConfiguration
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tokenVaultId' => 'string',
            'kmsConfiguration' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\KmsConfiguration',
            'updatedAt' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tokenVaultId  The unique identifier of the token vault.
    * kmsConfiguration  kmsConfiguration
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tokenVaultId' => null,
        'kmsConfiguration' => null,
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
    * tokenVaultId  The unique identifier of the token vault.
    * kmsConfiguration  kmsConfiguration
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tokenVaultId' => 'token_vault_id',
            'kmsConfiguration' => 'kms_configuration',
            'updatedAt' => 'updated_at',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tokenVaultId  The unique identifier of the token vault.
    * kmsConfiguration  kmsConfiguration
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'tokenVaultId' => 'setTokenVaultId',
            'kmsConfiguration' => 'setKmsConfiguration',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tokenVaultId  The unique identifier of the token vault.
    * kmsConfiguration  kmsConfiguration
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'tokenVaultId' => 'getTokenVaultId',
            'kmsConfiguration' => 'getKmsConfiguration',
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
        $this->container['tokenVaultId'] = isset($data['tokenVaultId']) ? $data['tokenVaultId'] : null;
        $this->container['kmsConfiguration'] = isset($data['kmsConfiguration']) ? $data['kmsConfiguration'] : null;
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
        if ($this->container['tokenVaultId'] === null) {
            $invalidProperties[] = "'tokenVaultId' can't be null";
        }
            if ((mb_strlen($this->container['tokenVaultId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tokenVaultId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tokenVaultId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tokenVaultId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['tokenVaultId'])) {
                $invalidProperties[] = "invalid value for 'tokenVaultId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
        if ($this->container['kmsConfiguration'] === null) {
            $invalidProperties[] = "'kmsConfiguration' can't be null";
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
    * Gets tokenVaultId
    *  The unique identifier of the token vault.
    *
    * @return string
    */
    public function getTokenVaultId()
    {
        return $this->container['tokenVaultId'];
    }

    /**
    * Sets tokenVaultId
    *
    * @param string $tokenVaultId The unique identifier of the token vault.
    *
    * @return $this
    */
    public function setTokenVaultId($tokenVaultId)
    {
        $this->container['tokenVaultId'] = $tokenVaultId;
        return $this;
    }

    /**
    * Gets kmsConfiguration
    *  kmsConfiguration
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\KmsConfiguration
    */
    public function getKmsConfiguration()
    {
        return $this->container['kmsConfiguration'];
    }

    /**
    * Sets kmsConfiguration
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\KmsConfiguration $kmsConfiguration kmsConfiguration
    *
    * @return $this
    */
    public function setKmsConfiguration($kmsConfiguration)
    {
        $this->container['kmsConfiguration'] = $kmsConfiguration;
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

