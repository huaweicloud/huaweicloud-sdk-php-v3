<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserStoredValueCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserStoredValueCard';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cardId  储值卡ID。
    * cardName  储值卡名称。
    * status  状态： 1：可使用 2：已用完
    * faceValue  储值卡面值。
    * balance  储值卡余额。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cardId' => 'string',
            'cardName' => 'string',
            'status' => 'int',
            'faceValue' => 'string',
            'balance' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cardId  储值卡ID。
    * cardName  储值卡名称。
    * status  状态： 1：可使用 2：已用完
    * faceValue  储值卡面值。
    * balance  储值卡余额。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cardId' => null,
        'cardName' => null,
        'status' => 'int32',
        'faceValue' => null,
        'balance' => null,
        'effectiveTime' => null,
        'expireTime' => null
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
    * cardId  储值卡ID。
    * cardName  储值卡名称。
    * status  状态： 1：可使用 2：已用完
    * faceValue  储值卡面值。
    * balance  储值卡余额。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cardId' => 'card_id',
            'cardName' => 'card_name',
            'status' => 'status',
            'faceValue' => 'face_value',
            'balance' => 'balance',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cardId  储值卡ID。
    * cardName  储值卡名称。
    * status  状态： 1：可使用 2：已用完
    * faceValue  储值卡面值。
    * balance  储值卡余额。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @var string[]
    */
    protected static $setters = [
            'cardId' => 'setCardId',
            'cardName' => 'setCardName',
            'status' => 'setStatus',
            'faceValue' => 'setFaceValue',
            'balance' => 'setBalance',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cardId  储值卡ID。
    * cardName  储值卡名称。
    * status  状态： 1：可使用 2：已用完
    * faceValue  储值卡面值。
    * balance  储值卡余额。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @var string[]
    */
    protected static $getters = [
            'cardId' => 'getCardId',
            'cardName' => 'getCardName',
            'status' => 'getStatus',
            'faceValue' => 'getFaceValue',
            'balance' => 'getBalance',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime'
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
        $this->container['cardId'] = isset($data['cardId']) ? $data['cardId'] : null;
        $this->container['cardName'] = isset($data['cardName']) ? $data['cardName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['faceValue'] = isset($data['faceValue']) ? $data['faceValue'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    * Gets cardId
    *  储值卡ID。
    *
    * @return string|null
    */
    public function getCardId()
    {
        return $this->container['cardId'];
    }

    /**
    * Sets cardId
    *
    * @param string|null $cardId 储值卡ID。
    *
    * @return $this
    */
    public function setCardId($cardId)
    {
        $this->container['cardId'] = $cardId;
        return $this;
    }

    /**
    * Gets cardName
    *  储值卡名称。
    *
    * @return string|null
    */
    public function getCardName()
    {
        return $this->container['cardName'];
    }

    /**
    * Sets cardName
    *
    * @param string|null $cardName 储值卡名称。
    *
    * @return $this
    */
    public function setCardName($cardName)
    {
        $this->container['cardName'] = $cardName;
        return $this;
    }

    /**
    * Gets status
    *  状态： 1：可使用 2：已用完
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态： 1：可使用 2：已用完
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets faceValue
    *  储值卡面值。
    *
    * @return string|null
    */
    public function getFaceValue()
    {
        return $this->container['faceValue'];
    }

    /**
    * Sets faceValue
    *
    * @param string|null $faceValue 储值卡面值。
    *
    * @return $this
    */
    public function setFaceValue($faceValue)
    {
        $this->container['faceValue'] = $faceValue;
        return $this;
    }

    /**
    * Gets balance
    *  储值卡余额。
    *
    * @return string|null
    */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
    * Sets balance
    *
    * @param string|null $balance 储值卡余额。
    *
    * @return $this
    */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

