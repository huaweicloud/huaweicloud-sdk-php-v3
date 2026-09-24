<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateExpirationTimeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateExpirationTimeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expectExpirationDate  预期过期日期，格式：YYYY-MM-DD。
    * timeZone  用户所在时区，格式形如 UTC+08:00
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expectExpirationDate' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expectExpirationDate  预期过期日期，格式：YYYY-MM-DD。
    * timeZone  用户所在时区，格式形如 UTC+08:00
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expectExpirationDate' => null,
        'timeZone' => null
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
    * expectExpirationDate  预期过期日期，格式：YYYY-MM-DD。
    * timeZone  用户所在时区，格式形如 UTC+08:00
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expectExpirationDate' => 'expect_expiration_date',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expectExpirationDate  预期过期日期，格式：YYYY-MM-DD。
    * timeZone  用户所在时区，格式形如 UTC+08:00
    *
    * @var string[]
    */
    protected static $setters = [
            'expectExpirationDate' => 'setExpectExpirationDate',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expectExpirationDate  预期过期日期，格式：YYYY-MM-DD。
    * timeZone  用户所在时区，格式形如 UTC+08:00
    *
    * @var string[]
    */
    protected static $getters = [
            'expectExpirationDate' => 'getExpectExpirationDate',
            'timeZone' => 'getTimeZone'
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
        $this->container['expectExpirationDate'] = isset($data['expectExpirationDate']) ? $data['expectExpirationDate'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['expectExpirationDate'] === null) {
            $invalidProperties[] = "'expectExpirationDate' can't be null";
        }
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
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
    * Gets expectExpirationDate
    *  预期过期日期，格式：YYYY-MM-DD。
    *
    * @return string
    */
    public function getExpectExpirationDate()
    {
        return $this->container['expectExpirationDate'];
    }

    /**
    * Sets expectExpirationDate
    *
    * @param string $expectExpirationDate 预期过期日期，格式：YYYY-MM-DD。
    *
    * @return $this
    */
    public function setExpectExpirationDate($expectExpirationDate)
    {
        $this->container['expectExpirationDate'] = $expectExpirationDate;
        return $this;
    }

    /**
    * Gets timeZone
    *  用户所在时区，格式形如 UTC+08:00
    *
    * @return string
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string $timeZone 用户所在时区，格式形如 UTC+08:00
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

