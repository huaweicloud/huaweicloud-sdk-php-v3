<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNotifyPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNotifyPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求ID。
    * id  通知策略ID。
    * protocol  通知策略类型，当前仅支持语音。
    * polling  轮询策略订阅终端。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'id' => 'string',
            'protocol' => 'string',
            'polling' => '\HuaweiCloud\SDK\Smn\V2\Model\PollingPolicyResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求ID。
    * id  通知策略ID。
    * protocol  通知策略类型，当前仅支持语音。
    * polling  轮询策略订阅终端。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'id' => null,
        'protocol' => null,
        'polling' => null
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
    * requestId  请求ID。
    * id  通知策略ID。
    * protocol  通知策略类型，当前仅支持语音。
    * polling  轮询策略订阅终端。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'id' => 'id',
            'protocol' => 'protocol',
            'polling' => 'polling'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求ID。
    * id  通知策略ID。
    * protocol  通知策略类型，当前仅支持语音。
    * polling  轮询策略订阅终端。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'id' => 'setId',
            'protocol' => 'setProtocol',
            'polling' => 'setPolling'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求ID。
    * id  通知策略ID。
    * protocol  通知策略类型，当前仅支持语音。
    * polling  轮询策略订阅终端。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'id' => 'getId',
            'protocol' => 'getProtocol',
            'polling' => 'getPolling'
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
    const PROTOCOL_CALLNOTIFY = 'callnotify';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_CALLNOTIFY,
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['polling'] = isset($data['polling']) ? $data['polling'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets requestId
    *  请求ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets id
    *  通知策略ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 通知策略ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets protocol
    *  通知策略类型，当前仅支持语音。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 通知策略类型，当前仅支持语音。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets polling
    *  轮询策略订阅终端。
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\PollingPolicyResponse[]|null
    */
    public function getPolling()
    {
        return $this->container['polling'];
    }

    /**
    * Sets polling
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\PollingPolicyResponse[]|null $polling 轮询策略订阅终端。
    *
    * @return $this
    */
    public function setPolling($polling)
    {
        $this->container['polling'] = $polling;
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

