<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeliverDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeliverDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deliverTime  投递时间   格式 yyyy/mm/dd xx:yy:zz
    * deliverStatus  投递状态     SUCCESS Or  FAILED
    * deliverConsuming  投递耗时，单位ms
    * deliverRspCode  投递响应码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deliverTime' => 'string',
            'deliverStatus' => 'string',
            'deliverConsuming' => 'string',
            'deliverRspCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deliverTime  投递时间   格式 yyyy/mm/dd xx:yy:zz
    * deliverStatus  投递状态     SUCCESS Or  FAILED
    * deliverConsuming  投递耗时，单位ms
    * deliverRspCode  投递响应码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deliverTime' => null,
        'deliverStatus' => null,
        'deliverConsuming' => null,
        'deliverRspCode' => null
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
    * deliverTime  投递时间   格式 yyyy/mm/dd xx:yy:zz
    * deliverStatus  投递状态     SUCCESS Or  FAILED
    * deliverConsuming  投递耗时，单位ms
    * deliverRspCode  投递响应码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deliverTime' => 'deliverTime',
            'deliverStatus' => 'deliverStatus',
            'deliverConsuming' => 'deliverConsuming',
            'deliverRspCode' => 'deliverRspCode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deliverTime  投递时间   格式 yyyy/mm/dd xx:yy:zz
    * deliverStatus  投递状态     SUCCESS Or  FAILED
    * deliverConsuming  投递耗时，单位ms
    * deliverRspCode  投递响应码
    *
    * @var string[]
    */
    protected static $setters = [
            'deliverTime' => 'setDeliverTime',
            'deliverStatus' => 'setDeliverStatus',
            'deliverConsuming' => 'setDeliverConsuming',
            'deliverRspCode' => 'setDeliverRspCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deliverTime  投递时间   格式 yyyy/mm/dd xx:yy:zz
    * deliverStatus  投递状态     SUCCESS Or  FAILED
    * deliverConsuming  投递耗时，单位ms
    * deliverRspCode  投递响应码
    *
    * @var string[]
    */
    protected static $getters = [
            'deliverTime' => 'getDeliverTime',
            'deliverStatus' => 'getDeliverStatus',
            'deliverConsuming' => 'getDeliverConsuming',
            'deliverRspCode' => 'getDeliverRspCode'
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
        $this->container['deliverTime'] = isset($data['deliverTime']) ? $data['deliverTime'] : null;
        $this->container['deliverStatus'] = isset($data['deliverStatus']) ? $data['deliverStatus'] : null;
        $this->container['deliverConsuming'] = isset($data['deliverConsuming']) ? $data['deliverConsuming'] : null;
        $this->container['deliverRspCode'] = isset($data['deliverRspCode']) ? $data['deliverRspCode'] : null;
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
    * Gets deliverTime
    *  投递时间   格式 yyyy/mm/dd xx:yy:zz
    *
    * @return string|null
    */
    public function getDeliverTime()
    {
        return $this->container['deliverTime'];
    }

    /**
    * Sets deliverTime
    *
    * @param string|null $deliverTime 投递时间   格式 yyyy/mm/dd xx:yy:zz
    *
    * @return $this
    */
    public function setDeliverTime($deliverTime)
    {
        $this->container['deliverTime'] = $deliverTime;
        return $this;
    }

    /**
    * Gets deliverStatus
    *  投递状态     SUCCESS Or  FAILED
    *
    * @return string|null
    */
    public function getDeliverStatus()
    {
        return $this->container['deliverStatus'];
    }

    /**
    * Sets deliverStatus
    *
    * @param string|null $deliverStatus 投递状态     SUCCESS Or  FAILED
    *
    * @return $this
    */
    public function setDeliverStatus($deliverStatus)
    {
        $this->container['deliverStatus'] = $deliverStatus;
        return $this;
    }

    /**
    * Gets deliverConsuming
    *  投递耗时，单位ms
    *
    * @return string|null
    */
    public function getDeliverConsuming()
    {
        return $this->container['deliverConsuming'];
    }

    /**
    * Sets deliverConsuming
    *
    * @param string|null $deliverConsuming 投递耗时，单位ms
    *
    * @return $this
    */
    public function setDeliverConsuming($deliverConsuming)
    {
        $this->container['deliverConsuming'] = $deliverConsuming;
        return $this;
    }

    /**
    * Gets deliverRspCode
    *  投递响应码
    *
    * @return string|null
    */
    public function getDeliverRspCode()
    {
        return $this->container['deliverRspCode'];
    }

    /**
    * Sets deliverRspCode
    *
    * @param string|null $deliverRspCode 投递响应码
    *
    * @return $this
    */
    public function setDeliverRspCode($deliverRspCode)
    {
        $this->container['deliverRspCode'] = $deliverRspCode;
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

