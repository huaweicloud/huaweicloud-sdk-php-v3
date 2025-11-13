<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Subscription4PublicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Subscription4PublicationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionInstanceName  订阅服务器名称。
    * subscriptionInstanceIp  订阅服务器ip。
    * subscriptionInstanceId  订阅实例id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionInstanceName' => 'string',
            'subscriptionInstanceIp' => 'string',
            'subscriptionInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionInstanceName  订阅服务器名称。
    * subscriptionInstanceIp  订阅服务器ip。
    * subscriptionInstanceId  订阅实例id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionInstanceName' => null,
        'subscriptionInstanceIp' => null,
        'subscriptionInstanceId' => null
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
    * subscriptionInstanceName  订阅服务器名称。
    * subscriptionInstanceIp  订阅服务器ip。
    * subscriptionInstanceId  订阅实例id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionInstanceName' => 'subscription_instance_name',
            'subscriptionInstanceIp' => 'subscription_instance_ip',
            'subscriptionInstanceId' => 'subscription_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionInstanceName  订阅服务器名称。
    * subscriptionInstanceIp  订阅服务器ip。
    * subscriptionInstanceId  订阅实例id。
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionInstanceName' => 'setSubscriptionInstanceName',
            'subscriptionInstanceIp' => 'setSubscriptionInstanceIp',
            'subscriptionInstanceId' => 'setSubscriptionInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionInstanceName  订阅服务器名称。
    * subscriptionInstanceIp  订阅服务器ip。
    * subscriptionInstanceId  订阅实例id。
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionInstanceName' => 'getSubscriptionInstanceName',
            'subscriptionInstanceIp' => 'getSubscriptionInstanceIp',
            'subscriptionInstanceId' => 'getSubscriptionInstanceId'
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
        $this->container['subscriptionInstanceName'] = isset($data['subscriptionInstanceName']) ? $data['subscriptionInstanceName'] : null;
        $this->container['subscriptionInstanceIp'] = isset($data['subscriptionInstanceIp']) ? $data['subscriptionInstanceIp'] : null;
        $this->container['subscriptionInstanceId'] = isset($data['subscriptionInstanceId']) ? $data['subscriptionInstanceId'] : null;
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
    * Gets subscriptionInstanceName
    *  订阅服务器名称。
    *
    * @return string|null
    */
    public function getSubscriptionInstanceName()
    {
        return $this->container['subscriptionInstanceName'];
    }

    /**
    * Sets subscriptionInstanceName
    *
    * @param string|null $subscriptionInstanceName 订阅服务器名称。
    *
    * @return $this
    */
    public function setSubscriptionInstanceName($subscriptionInstanceName)
    {
        $this->container['subscriptionInstanceName'] = $subscriptionInstanceName;
        return $this;
    }

    /**
    * Gets subscriptionInstanceIp
    *  订阅服务器ip。
    *
    * @return string|null
    */
    public function getSubscriptionInstanceIp()
    {
        return $this->container['subscriptionInstanceIp'];
    }

    /**
    * Sets subscriptionInstanceIp
    *
    * @param string|null $subscriptionInstanceIp 订阅服务器ip。
    *
    * @return $this
    */
    public function setSubscriptionInstanceIp($subscriptionInstanceIp)
    {
        $this->container['subscriptionInstanceIp'] = $subscriptionInstanceIp;
        return $this;
    }

    /**
    * Gets subscriptionInstanceId
    *  订阅实例id。
    *
    * @return string|null
    */
    public function getSubscriptionInstanceId()
    {
        return $this->container['subscriptionInstanceId'];
    }

    /**
    * Sets subscriptionInstanceId
    *
    * @param string|null $subscriptionInstanceId 订阅实例id。
    *
    * @return $this
    */
    public function setSubscriptionInstanceId($subscriptionInstanceId)
    {
        $this->container['subscriptionInstanceId'] = $subscriptionInstanceId;
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

