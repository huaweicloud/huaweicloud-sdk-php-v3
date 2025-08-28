<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTuningResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTuningResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * messageId  诊断信息id
    * status  状态
    * quotaExceeded  诊断配额状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'messageId' => 'string[]',
            'status' => 'bool',
            'quotaExceeded' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * messageId  诊断信息id
    * status  状态
    * quotaExceeded  诊断配额状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'messageId' => null,
        'status' => null,
        'quotaExceeded' => null
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
    * messageId  诊断信息id
    * status  状态
    * quotaExceeded  诊断配额状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'messageId' => 'message_id',
            'status' => 'status',
            'quotaExceeded' => 'quota_exceeded'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * messageId  诊断信息id
    * status  状态
    * quotaExceeded  诊断配额状态
    *
    * @var string[]
    */
    protected static $setters = [
            'messageId' => 'setMessageId',
            'status' => 'setStatus',
            'quotaExceeded' => 'setQuotaExceeded'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * messageId  诊断信息id
    * status  状态
    * quotaExceeded  诊断配额状态
    *
    * @var string[]
    */
    protected static $getters = [
            'messageId' => 'getMessageId',
            'status' => 'getStatus',
            'quotaExceeded' => 'getQuotaExceeded'
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
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['quotaExceeded'] = isset($data['quotaExceeded']) ? $data['quotaExceeded'] : null;
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
    * Gets messageId
    *  诊断信息id
    *
    * @return string[]|null
    */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
    * Sets messageId
    *
    * @param string[]|null $messageId 诊断信息id
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets quotaExceeded
    *  诊断配额状态
    *
    * @return bool|null
    */
    public function getQuotaExceeded()
    {
        return $this->container['quotaExceeded'];
    }

    /**
    * Sets quotaExceeded
    *
    * @param bool|null $quotaExceeded 诊断配额状态
    *
    * @return $this
    */
    public function setQuotaExceeded($quotaExceeded)
    {
        $this->container['quotaExceeded'] = $quotaExceeded;
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

