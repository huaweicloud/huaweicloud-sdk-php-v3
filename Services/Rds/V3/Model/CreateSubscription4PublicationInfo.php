<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscription4PublicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscription4PublicationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionInstanceId  订阅服务器来源为云上实例时的订阅实例id。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionInstanceId' => 'string',
            'userInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ReplicationUserInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionInstanceId  订阅服务器来源为云上实例时的订阅实例id。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionInstanceId' => null,
        'userInfo' => null
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
    * subscriptionInstanceId  订阅服务器来源为云上实例时的订阅实例id。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionInstanceId' => 'subscription_instance_id',
            'userInfo' => 'user_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionInstanceId  订阅服务器来源为云上实例时的订阅实例id。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionInstanceId' => 'setSubscriptionInstanceId',
            'userInfo' => 'setUserInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionInstanceId  订阅服务器来源为云上实例时的订阅实例id。
    * userInfo  userInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionInstanceId' => 'getSubscriptionInstanceId',
            'userInfo' => 'getUserInfo'
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
        $this->container['subscriptionInstanceId'] = isset($data['subscriptionInstanceId']) ? $data['subscriptionInstanceId'] : null;
        $this->container['userInfo'] = isset($data['userInfo']) ? $data['userInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscriptionInstanceId'] === null) {
            $invalidProperties[] = "'subscriptionInstanceId' can't be null";
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
    * Gets subscriptionInstanceId
    *  订阅服务器来源为云上实例时的订阅实例id。
    *
    * @return string
    */
    public function getSubscriptionInstanceId()
    {
        return $this->container['subscriptionInstanceId'];
    }

    /**
    * Sets subscriptionInstanceId
    *
    * @param string $subscriptionInstanceId 订阅服务器来源为云上实例时的订阅实例id。
    *
    * @return $this
    */
    public function setSubscriptionInstanceId($subscriptionInstanceId)
    {
        $this->container['subscriptionInstanceId'] = $subscriptionInstanceId;
        return $this;
    }

    /**
    * Gets userInfo
    *  userInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ReplicationUserInfo|null
    */
    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    /**
    * Sets userInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ReplicationUserInfo|null $userInfo userInfo
    *
    * @return $this
    */
    public function setUserInfo($userInfo)
    {
        $this->container['userInfo'] = $userInfo;
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

