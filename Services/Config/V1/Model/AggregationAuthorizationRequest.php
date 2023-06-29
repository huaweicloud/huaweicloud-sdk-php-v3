<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregationAuthorizationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregationAuthorizationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizedAccountId  要授权的资源聚合器的帐号ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizedAccountId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizedAccountId  要授权的资源聚合器的帐号ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizedAccountId' => null
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
    * authorizedAccountId  要授权的资源聚合器的帐号ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizedAccountId' => 'authorized_account_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizedAccountId  要授权的资源聚合器的帐号ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizedAccountId' => 'setAuthorizedAccountId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizedAccountId  要授权的资源聚合器的帐号ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizedAccountId' => 'getAuthorizedAccountId'
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
        $this->container['authorizedAccountId'] = isset($data['authorizedAccountId']) ? $data['authorizedAccountId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authorizedAccountId'] === null) {
            $invalidProperties[] = "'authorizedAccountId' can't be null";
        }
            if ((mb_strlen($this->container['authorizedAccountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'authorizedAccountId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['authorizedAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizedAccountId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['authorizedAccountId'])) {
                $invalidProperties[] = "invalid value for 'authorizedAccountId', must be conform to the pattern /[\\w-]+/.";
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
    * Gets authorizedAccountId
    *  要授权的资源聚合器的帐号ID。
    *
    * @return string
    */
    public function getAuthorizedAccountId()
    {
        return $this->container['authorizedAccountId'];
    }

    /**
    * Sets authorizedAccountId
    *
    * @param string $authorizedAccountId 要授权的资源聚合器的帐号ID。
    *
    * @return $this
    */
    public function setAuthorizedAccountId($authorizedAccountId)
    {
        $this->container['authorizedAccountId'] = $authorizedAccountId;
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

