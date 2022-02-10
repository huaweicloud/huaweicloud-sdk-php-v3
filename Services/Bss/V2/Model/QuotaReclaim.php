<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaReclaim implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaReclaim';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaId  被回收的精英服务商的代金券额度ID。
    * quotaBalance  被回收额度后的代金券额度余额。单位：元。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaId' => 'string',
            'quotaBalance' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaId  被回收的精英服务商的代金券额度ID。
    * quotaBalance  被回收额度后的代金券额度余额。单位：元。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaId' => null,
        'quotaBalance' => 'double'
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
    * quotaId  被回收的精英服务商的代金券额度ID。
    * quotaBalance  被回收额度后的代金券额度余额。单位：元。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaId' => 'quota_id',
            'quotaBalance' => 'quota_balance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaId  被回收的精英服务商的代金券额度ID。
    * quotaBalance  被回收额度后的代金券额度余额。单位：元。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaId' => 'setQuotaId',
            'quotaBalance' => 'setQuotaBalance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaId  被回收的精英服务商的代金券额度ID。
    * quotaBalance  被回收额度后的代金券额度余额。单位：元。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaId' => 'getQuotaId',
            'quotaBalance' => 'getQuotaBalance'
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
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['quotaBalance'] = isset($data['quotaBalance']) ? $data['quotaBalance'] : null;
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
    * Gets quotaId
    *  被回收的精英服务商的代金券额度ID。
    *
    * @return string|null
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string|null $quotaId 被回收的精英服务商的代金券额度ID。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets quotaBalance
    *  被回收额度后的代金券额度余额。单位：元。
    *
    * @return double|null
    */
    public function getQuotaBalance()
    {
        return $this->container['quotaBalance'];
    }

    /**
    * Sets quotaBalance
    *
    * @param double|null $quotaBalance 被回收额度后的代金券额度余额。单位：元。
    *
    * @return $this
    */
    public function setQuotaBalance($quotaBalance)
    {
        $this->container['quotaBalance'] = $quotaBalance;
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

