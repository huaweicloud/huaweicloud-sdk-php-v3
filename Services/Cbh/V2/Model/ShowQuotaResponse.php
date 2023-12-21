<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quota  云堡垒机实例最大创建数量。
    * quotaUsed  当前云堡垒机实例创建个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quota' => 'int',
            'quotaUsed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quota  云堡垒机实例最大创建数量。
    * quotaUsed  当前云堡垒机实例创建个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quota' => null,
        'quotaUsed' => null
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
    * quota  云堡垒机实例最大创建数量。
    * quotaUsed  当前云堡垒机实例创建个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quota' => 'quota',
            'quotaUsed' => 'quota_used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quota  云堡垒机实例最大创建数量。
    * quotaUsed  当前云堡垒机实例创建个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'quota' => 'setQuota',
            'quotaUsed' => 'setQuotaUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quota  云堡垒机实例最大创建数量。
    * quotaUsed  当前云堡垒机实例创建个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'quota' => 'getQuota',
            'quotaUsed' => 'getQuotaUsed'
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
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['quotaUsed'] = isset($data['quotaUsed']) ? $data['quotaUsed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['quota']) && ($this->container['quota'] > 64)) {
                $invalidProperties[] = "invalid value for 'quota', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] < 0)) {
                $invalidProperties[] = "invalid value for 'quota', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['quotaUsed']) && ($this->container['quotaUsed'] > 64)) {
                $invalidProperties[] = "invalid value for 'quotaUsed', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['quotaUsed']) && ($this->container['quotaUsed'] < 0)) {
                $invalidProperties[] = "invalid value for 'quotaUsed', must be bigger than or equal to 0.";
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
    * Gets quota
    *  云堡垒机实例最大创建数量。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 云堡垒机实例最大创建数量。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets quotaUsed
    *  当前云堡垒机实例创建个数。
    *
    * @return int|null
    */
    public function getQuotaUsed()
    {
        return $this->container['quotaUsed'];
    }

    /**
    * Sets quotaUsed
    *
    * @param int|null $quotaUsed 当前云堡垒机实例创建个数。
    *
    * @return $this
    */
    public function setQuotaUsed($quotaUsed)
    {
        $this->container['quotaUsed'] = $quotaUsed;
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

