<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IamBpRootUserHasAccessKeyDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IamBpRootUserHasAccessKeyDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKeyId  用户访问密钥唯一标识符（ID）。
    * lastAccessed  用户访问密钥的最后访问时间。
    * createdAt  用户访问密钥的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKeyId' => 'string',
            'lastAccessed' => '\DateTime',
            'createdAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKeyId  用户访问密钥唯一标识符（ID）。
    * lastAccessed  用户访问密钥的最后访问时间。
    * createdAt  用户访问密钥的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKeyId' => null,
        'lastAccessed' => 'date-time',
        'createdAt' => 'date-time'
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
    * accessKeyId  用户访问密钥唯一标识符（ID）。
    * lastAccessed  用户访问密钥的最后访问时间。
    * createdAt  用户访问密钥的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKeyId' => 'access_key_id',
            'lastAccessed' => 'last_accessed',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKeyId  用户访问密钥唯一标识符（ID）。
    * lastAccessed  用户访问密钥的最后访问时间。
    * createdAt  用户访问密钥的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKeyId' => 'setAccessKeyId',
            'lastAccessed' => 'setLastAccessed',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKeyId  用户访问密钥唯一标识符（ID）。
    * lastAccessed  用户访问密钥的最后访问时间。
    * createdAt  用户访问密钥的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKeyId' => 'getAccessKeyId',
            'lastAccessed' => 'getLastAccessed',
            'createdAt' => 'getCreatedAt'
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
        $this->container['accessKeyId'] = isset($data['accessKeyId']) ? $data['accessKeyId'] : null;
        $this->container['lastAccessed'] = isset($data['lastAccessed']) ? $data['lastAccessed'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessKeyId'] === null) {
            $invalidProperties[] = "'accessKeyId' can't be null";
        }
            if ((mb_strlen($this->container['accessKeyId']) > 40)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['accessKeyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    * Gets accessKeyId
    *  用户访问密钥唯一标识符（ID）。
    *
    * @return string
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string $accessKeyId 用户访问密钥唯一标识符（ID）。
    *
    * @return $this
    */
    public function setAccessKeyId($accessKeyId)
    {
        $this->container['accessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
    * Gets lastAccessed
    *  用户访问密钥的最后访问时间。
    *
    * @return \DateTime|null
    */
    public function getLastAccessed()
    {
        return $this->container['lastAccessed'];
    }

    /**
    * Sets lastAccessed
    *
    * @param \DateTime|null $lastAccessed 用户访问密钥的最后访问时间。
    *
    * @return $this
    */
    public function setLastAccessed($lastAccessed)
    {
        $this->container['lastAccessed'] = $lastAccessed;
        return $this;
    }

    /**
    * Gets createdAt
    *  用户访问密钥的创建时间。
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
    * @param \DateTime $createdAt 用户访问密钥的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

