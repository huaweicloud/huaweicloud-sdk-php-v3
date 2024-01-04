<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSubscriptionsFilterPolicesRequestBodyPolices implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSubscriptionsFilterPolicesRequestBody_polices';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionUrn  订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
    * filterPolices  订阅者的过滤策略。策略name不能重复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionUrn' => 'string',
            'filterPolices' => '\HuaweiCloud\SDK\Smn\V2\Model\SubscriptionsFilterPolicy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionUrn  订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
    * filterPolices  订阅者的过滤策略。策略name不能重复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionUrn' => null,
        'filterPolices' => null
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
    * subscriptionUrn  订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
    * filterPolices  订阅者的过滤策略。策略name不能重复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionUrn' => 'subscription_urn',
            'filterPolices' => 'filter_polices'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionUrn  订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
    * filterPolices  订阅者的过滤策略。策略name不能重复
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionUrn' => 'setSubscriptionUrn',
            'filterPolices' => 'setFilterPolices'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionUrn  订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
    * filterPolices  订阅者的过滤策略。策略name不能重复
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionUrn' => 'getSubscriptionUrn',
            'filterPolices' => 'getFilterPolices'
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
        $this->container['filterPolices'] = isset($data['filterPolices']) ? $data['filterPolices'] : null;
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
        if ($this->container['filterPolices'] === null) {
            $invalidProperties[] = "'filterPolices' can't be null";
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
    *  订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
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
    * @param string $subscriptionUrn 订阅者的唯一的资源标识，可通过[查询订阅者列表](ListSubscriptions.xml)获取该标识。
    *
    * @return $this
    */
    public function setSubscriptionUrn($subscriptionUrn)
    {
        $this->container['subscriptionUrn'] = $subscriptionUrn;
        return $this;
    }

    /**
    * Gets filterPolices
    *  订阅者的过滤策略。策略name不能重复
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\SubscriptionsFilterPolicy[]
    */
    public function getFilterPolices()
    {
        return $this->container['filterPolices'];
    }

    /**
    * Sets filterPolices
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\SubscriptionsFilterPolicy[] $filterPolices 订阅者的过滤策略。策略name不能重复
    *
    * @return $this
    */
    public function setFilterPolices($filterPolices)
    {
        $this->container['filterPolices'] = $filterPolices;
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

