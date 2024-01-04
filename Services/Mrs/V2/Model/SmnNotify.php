<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnNotify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnNotify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    * subscriptionName  该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'subscriptionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    * subscriptionName  该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'subscriptionName' => null
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
    * topicUrn  SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    * subscriptionName  该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'subscriptionName' => 'subscription_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    * subscriptionName  该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'subscriptionName' => 'setSubscriptionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    * subscriptionName  该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'subscriptionName' => 'getSubscriptionName'
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['subscriptionName'] = isset($data['subscriptionName']) ? $data['subscriptionName'] : null;
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
    * Gets topicUrn
    *  SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn SMN消息通知服务的主题urn，如果需要开启告警订阅，则必填。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets subscriptionName
    *  该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @return string|null
    */
    public function getSubscriptionName()
    {
        return $this->container['subscriptionName'];
    }

    /**
    * Sets subscriptionName
    *
    * @param string|null $subscriptionName 该订阅规则名称。如果不填写，则默认为default_alert_rule。
    *
    * @return $this
    */
    public function setSubscriptionName($subscriptionName)
    {
        $this->container['subscriptionName'] = $subscriptionName;
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

