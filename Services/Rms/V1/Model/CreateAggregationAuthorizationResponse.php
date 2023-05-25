<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAggregationAuthorizationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAggregationAuthorizationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggregationAuthorizationUrn  资源聚合器授权标识符。
    * authorizedAccountId  授权的资源聚合器的帐号ID。
    * createdAt  资源聚合器授权的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggregationAuthorizationUrn' => 'string',
            'authorizedAccountId' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggregationAuthorizationUrn  资源聚合器授权标识符。
    * authorizedAccountId  授权的资源聚合器的帐号ID。
    * createdAt  资源聚合器授权的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggregationAuthorizationUrn' => null,
        'authorizedAccountId' => null,
        'createdAt' => null
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
    * aggregationAuthorizationUrn  资源聚合器授权标识符。
    * authorizedAccountId  授权的资源聚合器的帐号ID。
    * createdAt  资源聚合器授权的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggregationAuthorizationUrn' => 'aggregation_authorization_urn',
            'authorizedAccountId' => 'authorized_account_id',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggregationAuthorizationUrn  资源聚合器授权标识符。
    * authorizedAccountId  授权的资源聚合器的帐号ID。
    * createdAt  资源聚合器授权的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'aggregationAuthorizationUrn' => 'setAggregationAuthorizationUrn',
            'authorizedAccountId' => 'setAuthorizedAccountId',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggregationAuthorizationUrn  资源聚合器授权标识符。
    * authorizedAccountId  授权的资源聚合器的帐号ID。
    * createdAt  资源聚合器授权的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'aggregationAuthorizationUrn' => 'getAggregationAuthorizationUrn',
            'authorizedAccountId' => 'getAuthorizedAccountId',
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
        $this->container['aggregationAuthorizationUrn'] = isset($data['aggregationAuthorizationUrn']) ? $data['aggregationAuthorizationUrn'] : null;
        $this->container['authorizedAccountId'] = isset($data['authorizedAccountId']) ? $data['authorizedAccountId'] : null;
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
    * Gets aggregationAuthorizationUrn
    *  资源聚合器授权标识符。
    *
    * @return string|null
    */
    public function getAggregationAuthorizationUrn()
    {
        return $this->container['aggregationAuthorizationUrn'];
    }

    /**
    * Sets aggregationAuthorizationUrn
    *
    * @param string|null $aggregationAuthorizationUrn 资源聚合器授权标识符。
    *
    * @return $this
    */
    public function setAggregationAuthorizationUrn($aggregationAuthorizationUrn)
    {
        $this->container['aggregationAuthorizationUrn'] = $aggregationAuthorizationUrn;
        return $this;
    }

    /**
    * Gets authorizedAccountId
    *  授权的资源聚合器的帐号ID。
    *
    * @return string|null
    */
    public function getAuthorizedAccountId()
    {
        return $this->container['authorizedAccountId'];
    }

    /**
    * Sets authorizedAccountId
    *
    * @param string|null $authorizedAccountId 授权的资源聚合器的帐号ID。
    *
    * @return $this
    */
    public function setAuthorizedAccountId($authorizedAccountId)
    {
        $this->container['authorizedAccountId'] = $authorizedAccountId;
        return $this;
    }

    /**
    * Gets createdAt
    *  资源聚合器授权的创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 资源聚合器授权的创建时间。
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

