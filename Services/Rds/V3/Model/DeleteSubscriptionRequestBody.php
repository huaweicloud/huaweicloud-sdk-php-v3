<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteSubscriptionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteSubscriptionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionIds  删除的订阅id列表。每次删除的订阅必须属于同一实例。
    * cleanSubscription  清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionIds' => 'string[]',
            'cleanSubscription' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionIds  删除的订阅id列表。每次删除的订阅必须属于同一实例。
    * cleanSubscription  清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionIds' => null,
        'cleanSubscription' => null
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
    * subscriptionIds  删除的订阅id列表。每次删除的订阅必须属于同一实例。
    * cleanSubscription  清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionIds' => 'subscription_ids',
            'cleanSubscription' => 'clean_subscription'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionIds  删除的订阅id列表。每次删除的订阅必须属于同一实例。
    * cleanSubscription  清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionIds' => 'setSubscriptionIds',
            'cleanSubscription' => 'setCleanSubscription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionIds  删除的订阅id列表。每次删除的订阅必须属于同一实例。
    * cleanSubscription  清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionIds' => 'getSubscriptionIds',
            'cleanSubscription' => 'getCleanSubscription'
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
        $this->container['subscriptionIds'] = isset($data['subscriptionIds']) ? $data['subscriptionIds'] : null;
        $this->container['cleanSubscription'] = isset($data['cleanSubscription']) ? $data['cleanSubscription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscriptionIds'] === null) {
            $invalidProperties[] = "'subscriptionIds' can't be null";
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
    * Gets subscriptionIds
    *  删除的订阅id列表。每次删除的订阅必须属于同一实例。
    *
    * @return string[]
    */
    public function getSubscriptionIds()
    {
        return $this->container['subscriptionIds'];
    }

    /**
    * Sets subscriptionIds
    *
    * @param string[] $subscriptionIds 删除的订阅id列表。每次删除的订阅必须属于同一实例。
    *
    * @return $this
    */
    public function setSubscriptionIds($subscriptionIds)
    {
        $this->container['subscriptionIds'] = $subscriptionIds;
        return $this;
    }

    /**
    * Gets cleanSubscription
    *  清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @return bool|null
    */
    public function getCleanSubscription()
    {
        return $this->container['cleanSubscription'];
    }

    /**
    * Sets cleanSubscription
    *
    * @param bool|null $cleanSubscription 清理订阅配置。默认为false。  true：清理。 false：不清理。
    *
    * @return $this
    */
    public function setCleanSubscription($cleanSubscription)
    {
        $this->container['cleanSubscription'] = $cleanSubscription;
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

