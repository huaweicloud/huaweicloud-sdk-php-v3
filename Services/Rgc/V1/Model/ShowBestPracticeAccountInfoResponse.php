<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBestPracticeAccountInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBestPracticeAccountInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountType  账号类型
    * effectiveStartTime  有效开始时间
    * effectiveExpirationTime  有效过期时间
    * currentTime  当前时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountType' => 'string',
            'effectiveStartTime' => '\DateTime',
            'effectiveExpirationTime' => '\DateTime',
            'currentTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountType  账号类型
    * effectiveStartTime  有效开始时间
    * effectiveExpirationTime  有效过期时间
    * currentTime  当前时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountType' => null,
        'effectiveStartTime' => 'date-time',
        'effectiveExpirationTime' => 'date-time',
        'currentTime' => 'date-time'
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
    * accountType  账号类型
    * effectiveStartTime  有效开始时间
    * effectiveExpirationTime  有效过期时间
    * currentTime  当前时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountType' => 'account_type',
            'effectiveStartTime' => 'effective_start_time',
            'effectiveExpirationTime' => 'effective_expiration_time',
            'currentTime' => 'current_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountType  账号类型
    * effectiveStartTime  有效开始时间
    * effectiveExpirationTime  有效过期时间
    * currentTime  当前时间
    *
    * @var string[]
    */
    protected static $setters = [
            'accountType' => 'setAccountType',
            'effectiveStartTime' => 'setEffectiveStartTime',
            'effectiveExpirationTime' => 'setEffectiveExpirationTime',
            'currentTime' => 'setCurrentTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountType  账号类型
    * effectiveStartTime  有效开始时间
    * effectiveExpirationTime  有效过期时间
    * currentTime  当前时间
    *
    * @var string[]
    */
    protected static $getters = [
            'accountType' => 'getAccountType',
            'effectiveStartTime' => 'getEffectiveStartTime',
            'effectiveExpirationTime' => 'getEffectiveExpirationTime',
            'currentTime' => 'getCurrentTime'
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
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['effectiveStartTime'] = isset($data['effectiveStartTime']) ? $data['effectiveStartTime'] : null;
        $this->container['effectiveExpirationTime'] = isset($data['effectiveExpirationTime']) ? $data['effectiveExpirationTime'] : null;
        $this->container['currentTime'] = isset($data['currentTime']) ? $data['currentTime'] : null;
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
    * Gets accountType
    *  账号类型
    *
    * @return string|null
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param string|null $accountType 账号类型
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
        return $this;
    }

    /**
    * Gets effectiveStartTime
    *  有效开始时间
    *
    * @return \DateTime|null
    */
    public function getEffectiveStartTime()
    {
        return $this->container['effectiveStartTime'];
    }

    /**
    * Sets effectiveStartTime
    *
    * @param \DateTime|null $effectiveStartTime 有效开始时间
    *
    * @return $this
    */
    public function setEffectiveStartTime($effectiveStartTime)
    {
        $this->container['effectiveStartTime'] = $effectiveStartTime;
        return $this;
    }

    /**
    * Gets effectiveExpirationTime
    *  有效过期时间
    *
    * @return \DateTime|null
    */
    public function getEffectiveExpirationTime()
    {
        return $this->container['effectiveExpirationTime'];
    }

    /**
    * Sets effectiveExpirationTime
    *
    * @param \DateTime|null $effectiveExpirationTime 有效过期时间
    *
    * @return $this
    */
    public function setEffectiveExpirationTime($effectiveExpirationTime)
    {
        $this->container['effectiveExpirationTime'] = $effectiveExpirationTime;
        return $this;
    }

    /**
    * Gets currentTime
    *  当前时间
    *
    * @return \DateTime|null
    */
    public function getCurrentTime()
    {
        return $this->container['currentTime'];
    }

    /**
    * Sets currentTime
    *
    * @param \DateTime|null $currentTime 当前时间
    *
    * @return $this
    */
    public function setCurrentTime($currentTime)
    {
        $this->container['currentTime'] = $currentTime;
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

