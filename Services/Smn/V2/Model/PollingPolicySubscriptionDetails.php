<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PollingPolicySubscriptionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PollingPolicySubscriptionDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionUrn  当前轮询的序号。
    * endpoint  订阅终端urn列表。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionUrn' => 'string',
            'endpoint' => 'string',
            'remark' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionUrn  当前轮询的序号。
    * endpoint  订阅终端urn列表。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionUrn' => null,
        'endpoint' => null,
        'remark' => null,
        'status' => 'int32'
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
    * subscriptionUrn  当前轮询的序号。
    * endpoint  订阅终端urn列表。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionUrn' => 'subscription_urn',
            'endpoint' => 'endpoint',
            'remark' => 'remark',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionUrn  当前轮询的序号。
    * endpoint  订阅终端urn列表。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionUrn' => 'setSubscriptionUrn',
            'endpoint' => 'setEndpoint',
            'remark' => 'setRemark',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionUrn  当前轮询的序号。
    * endpoint  订阅终端urn列表。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionUrn' => 'getSubscriptionUrn',
            'endpoint' => 'getEndpoint',
            'remark' => 'getRemark',
            'status' => 'getStatus'
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
        $this->container['subscriptionUrn'] = isset($data['subscriptionUrn']) ? $data['subscriptionUrn'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscriptionUrn'] === null) {
            $invalidProperties[] = "'subscriptionUrn' can't be null";
        }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
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
    * Gets subscriptionUrn
    *  当前轮询的序号。
    *
    * @return string
    */
    public function getSubscriptionUrn()
    {
        return $this->container['subscriptionUrn'];
    }

    /**
    * Sets subscriptionUrn
    *
    * @param string $subscriptionUrn 当前轮询的序号。
    *
    * @return $this
    */
    public function setSubscriptionUrn($subscriptionUrn)
    {
        $this->container['subscriptionUrn'] = $subscriptionUrn;
        return $this;
    }

    /**
    * Gets endpoint
    *  订阅终端urn列表。
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 订阅终端urn列表。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets remark
    *  备注。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets status
    *  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
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
    * @param int|null $status 订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

