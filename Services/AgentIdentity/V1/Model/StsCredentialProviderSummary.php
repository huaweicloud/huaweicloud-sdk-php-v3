<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StsCredentialProviderSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StsCredentialProviderSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  The name of the credential provider.
    * urn  凭证提供者的唯一资源名称（URN）。
    * agencyUrn  The URN of the agency used to obtain IAM temporary credentials.
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'urn' => 'string',
            'agencyUrn' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  The name of the credential provider.
    * urn  凭证提供者的唯一资源名称（URN）。
    * agencyUrn  The URN of the agency used to obtain IAM temporary credentials.
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'urn' => null,
        'agencyUrn' => null,
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
    * name  The name of the credential provider.
    * urn  凭证提供者的唯一资源名称（URN）。
    * agencyUrn  The URN of the agency used to obtain IAM temporary credentials.
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'urn' => 'urn',
            'agencyUrn' => 'agency_urn',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  The name of the credential provider.
    * urn  凭证提供者的唯一资源名称（URN）。
    * agencyUrn  The URN of the agency used to obtain IAM temporary credentials.
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'urn' => 'setUrn',
            'agencyUrn' => 'setAgencyUrn',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  The name of the credential provider.
    * urn  凭证提供者的唯一资源名称（URN）。
    * agencyUrn  The URN of the agency used to obtain IAM temporary credentials.
    * createdAt  Timestamp in RFC 3339 format (UTC)
    * updatedAt  Timestamp in RFC 3339 format (UTC)
    * tags  自定义标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'urn' => 'getUrn',
            'agencyUrn' => 'getAgencyUrn',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['agencyUrn'] = isset($data['agencyUrn']) ? $data['agencyUrn'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 56)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 56.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,56}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_-]{1,56}$/.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
        if ($this->container['agencyUrn'] === null) {
            $invalidProperties[] = "'agencyUrn' can't be null";
        }
            if ((mb_strlen($this->container['agencyUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'agencyUrn', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['agencyUrn']) < 16)) {
                $invalidProperties[] = "invalid value for 'agencyUrn', the character length must be bigger than or equal to 16.";
            }
            if (!preg_match("/^[A-Za-z0-9\/=_:-]+$/", $this->container['agencyUrn'])) {
                $invalidProperties[] = "invalid value for 'agencyUrn', must be conform to the pattern /^[A-Za-z0-9\/=_:-]+$/.";
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
    * Gets name
    *  The name of the credential provider.
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
    * @param string $name The name of the credential provider.
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets urn
    *  凭证提供者的唯一资源名称（URN）。
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
    * @param string $urn 凭证提供者的唯一资源名称（URN）。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets agencyUrn
    *  The URN of the agency used to obtain IAM temporary credentials.
    *
    * @return string
    */
    public function getAgencyUrn()
    {
        return $this->container['agencyUrn'];
    }

    /**
    * Sets agencyUrn
    *
    * @param string $agencyUrn The URN of the agency used to obtain IAM temporary credentials.
    *
    * @return $this
    */
    public function setAgencyUrn($agencyUrn)
    {
        $this->container['agencyUrn'] = $agencyUrn;
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

