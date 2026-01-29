<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnSubscription';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  租户project_id
    * endpoint  订阅终端
    * protocol  终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
    * subscriptionUrn  smn订阅的urn
    * topicUrn  订阅topic对应的urn
    * status  订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'string',
            'endpoint' => 'string',
            'protocol' => 'string',
            'subscriptionUrn' => 'string',
            'topicUrn' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  租户project_id
    * endpoint  订阅终端
    * protocol  终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
    * subscriptionUrn  smn订阅的urn
    * topicUrn  订阅topic对应的urn
    * status  订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'endpoint' => null,
        'protocol' => null,
        'subscriptionUrn' => null,
        'topicUrn' => null,
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
    * owner  租户project_id
    * endpoint  订阅终端
    * protocol  终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
    * subscriptionUrn  smn订阅的urn
    * topicUrn  订阅topic对应的urn
    * status  订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'endpoint' => 'endpoint',
            'protocol' => 'protocol',
            'subscriptionUrn' => 'subscription_urn',
            'topicUrn' => 'topic_urn',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  租户project_id
    * endpoint  订阅终端
    * protocol  终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
    * subscriptionUrn  smn订阅的urn
    * topicUrn  订阅topic对应的urn
    * status  订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'endpoint' => 'setEndpoint',
            'protocol' => 'setProtocol',
            'subscriptionUrn' => 'setSubscriptionUrn',
            'topicUrn' => 'setTopicUrn',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  租户project_id
    * endpoint  订阅终端
    * protocol  终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
    * subscriptionUrn  smn订阅的urn
    * topicUrn  订阅topic对应的urn
    * status  订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'endpoint' => 'getEndpoint',
            'protocol' => 'getProtocol',
            'subscriptionUrn' => 'getSubscriptionUrn',
            'topicUrn' => 'getTopicUrn',
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
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPS = 'HTTPS';
    const PROTOCOL_SMS = 'SMS';
    const PROTOCOL_EMAIL = 'EMAIL';
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    const STATUS_5 = 5;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
            self::PROTOCOL_SMS,
            self::PROTOCOL_EMAIL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
            self::STATUS_2,
            self::STATUS_3,
            self::STATUS_4,
            self::STATUS_5,
        ];
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['subscriptionUrn'] = isset($data['subscriptionUrn']) ? $data['subscriptionUrn'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
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
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
            if ((mb_strlen($this->container['owner']) > 64)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['owner']) < 2)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
            if ((mb_strlen($this->container['endpoint']) > 64)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['endpoint']) < 2)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['protocol']) > 32)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protocol']) < 2)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['subscriptionUrn'] === null) {
            $invalidProperties[] = "'subscriptionUrn' can't be null";
        }
            if ((mb_strlen($this->container['subscriptionUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'subscriptionUrn', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['subscriptionUrn']) < 10)) {
                $invalidProperties[] = "invalid value for 'subscriptionUrn', the character length must be bigger than or equal to 10.";
            }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topicUrn']) < 10)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 10.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (($this->container['status'] > 4)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 4.";
            }
            if (($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
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
    * Gets owner
    *  租户project_id
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
    * @param string $owner 租户project_id
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
    *  订阅终端
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
    * @param string $endpoint 订阅终端
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets protocol
    *  终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
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
    * @param string $protocol 终端协议，比如HTTPS协议，SMS协议，EMAIL协议，HTTP协议
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
    *  smn订阅的urn
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
    * @param string $subscriptionUrn smn订阅的urn
    *
    * @return $this
    */
    public function setSubscriptionUrn($subscriptionUrn)
    {
        $this->container['subscriptionUrn'] = $subscriptionUrn;
        return $this;
    }

    /**
    * Gets topicUrn
    *  订阅topic对应的urn
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
    * @param string $topicUrn 订阅topic对应的urn
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets status
    *  订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
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
    * @param int $status 订阅状态 0：未确认 1：已确认 2：不需要确认 3：已取消确认 4：已经删除。
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

