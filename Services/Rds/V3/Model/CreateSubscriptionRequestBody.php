<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptions  订阅详情。一次最多创建十个订阅。
    * currentPublicationId  给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptions' => '\HuaweiCloud\SDK\Rds\V3\Model\CreateSubscriptionInfo[]',
            'currentPublicationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptions  订阅详情。一次最多创建十个订阅。
    * currentPublicationId  给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptions' => null,
        'currentPublicationId' => null
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
    * subscriptions  订阅详情。一次最多创建十个订阅。
    * currentPublicationId  给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptions' => 'subscriptions',
            'currentPublicationId' => 'current_publication_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptions  订阅详情。一次最多创建十个订阅。
    * currentPublicationId  给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptions' => 'setSubscriptions',
            'currentPublicationId' => 'setCurrentPublicationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptions  订阅详情。一次最多创建十个订阅。
    * currentPublicationId  给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptions' => 'getSubscriptions',
            'currentPublicationId' => 'getCurrentPublicationId'
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
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
        $this->container['currentPublicationId'] = isset($data['currentPublicationId']) ? $data['currentPublicationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscriptions'] === null) {
            $invalidProperties[] = "'subscriptions' can't be null";
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
    * Gets subscriptions
    *  订阅详情。一次最多创建十个订阅。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscriptionInfo[]
    */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
    * Sets subscriptions
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscriptionInfo[] $subscriptions 订阅详情。一次最多创建十个订阅。
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
        return $this;
    }

    /**
    * Gets currentPublicationId
    *  给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @return string|null
    */
    public function getCurrentPublicationId()
    {
        return $this->container['currentPublicationId'];
    }

    /**
    * Sets currentPublicationId
    *
    * @param string|null $currentPublicationId 给发布创建订阅时的发布id。给发布创建订阅时必传，不传时则为创建本地订阅。
    *
    * @return $this
    */
    public function setCurrentPublicationId($currentPublicationId)
    {
        $this->container['currentPublicationId'] = $currentPublicationId;
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

