<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识。
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    * subscriptionUrn  订阅者的唯一资源标识。
    * owner  Topic创建者的项目ID。
    * endpoint  接受消息的接入点。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'protocol' => 'string',
            'subscriptionUrn' => 'string',
            'owner' => 'string',
            'endpoint' => 'string',
            'remark' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识。
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    * subscriptionUrn  订阅者的唯一资源标识。
    * owner  Topic创建者的项目ID。
    * endpoint  接受消息的接入点。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'protocol' => null,
        'subscriptionUrn' => null,
        'owner' => null,
        'endpoint' => null,
        'remark' => null,
        'status' => null
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
    * topicUrn  Topic的唯一的资源标识。
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    * subscriptionUrn  订阅者的唯一资源标识。
    * owner  Topic创建者的项目ID。
    * endpoint  接受消息的接入点。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'protocol' => 'protocol',
            'subscriptionUrn' => 'subscription_urn',
            'owner' => 'owner',
            'endpoint' => 'endpoint',
            'remark' => 'remark',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  Topic的唯一的资源标识。
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    * subscriptionUrn  订阅者的唯一资源标识。
    * owner  Topic创建者的项目ID。
    * endpoint  接受消息的接入点。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'protocol' => 'setProtocol',
            'subscriptionUrn' => 'setSubscriptionUrn',
            'owner' => 'setOwner',
            'endpoint' => 'setEndpoint',
            'remark' => 'setRemark',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  Topic的唯一的资源标识。
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    * subscriptionUrn  订阅者的唯一资源标识。
    * owner  Topic创建者的项目ID。
    * endpoint  接受消息的接入点。
    * remark  备注。
    * status  订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'protocol' => 'getProtocol',
            'subscriptionUrn' => 'getSubscriptionUrn',
            'owner' => 'getOwner',
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['subscriptionUrn'] = isset($data['subscriptionUrn']) ? $data['subscriptionUrn'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['subscriptionUrn'] === null) {
            $invalidProperties[] = "'subscriptionUrn' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['remark'] === null) {
            $invalidProperties[] = "'remark' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets topicUrn
    *  Topic的唯一的资源标识。
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn Topic的唯一的资源标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets protocol
    *  不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 不同协议对应不同的endpoint（接受消息的接入点）。目前支持的协议包括：  \"default\": 默认协议。  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets subscriptionUrn
    *  订阅者的唯一资源标识。
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
    * @param string $subscriptionUrn 订阅者的唯一资源标识。
    *
    * @return $this
    */
    public function setSubscriptionUrn($subscriptionUrn)
    {
        $this->container['subscriptionUrn'] = $subscriptionUrn;
        return $this;
    }

    /**
    * Gets owner
    *  Topic创建者的项目ID。
    *
    * @return string
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string $owner Topic创建者的项目ID。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets endpoint
    *  接受消息的接入点。
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
    * @param string $endpoint 接受消息的接入点。
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
    * @return string
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string $remark 备注。
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
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 订阅者状态：0表示订阅还未确认，1表示已经确认，3表示已经取消确认。
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

