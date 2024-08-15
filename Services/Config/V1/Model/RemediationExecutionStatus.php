<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemediationExecutionStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemediationExecutionStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceKey  resourceKey
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceKey' => '\HuaweiCloud\SDK\Config\V1\Model\RemediationResourceKey',
            'invocationTime' => 'string',
            'state' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceKey  resourceKey
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceKey' => null,
        'invocationTime' => null,
        'state' => null,
        'message' => null
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
    * resourceKey  resourceKey
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceKey' => 'resource_key',
            'invocationTime' => 'invocation_time',
            'state' => 'state',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceKey  resourceKey
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceKey' => 'setResourceKey',
            'invocationTime' => 'setInvocationTime',
            'state' => 'setState',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceKey  resourceKey
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceKey' => 'getResourceKey',
            'invocationTime' => 'getInvocationTime',
            'state' => 'getState',
            'message' => 'getMessage'
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
    const STATE_IN_QUEUE = 'IN_QUEUE';
    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_SUCCEEDED = 'SUCCEEDED';
    const STATE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_IN_QUEUE,
            self::STATE_IN_PROGRESS,
            self::STATE_SUCCEEDED,
            self::STATE_FAILED,
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
        $this->container['resourceKey'] = isset($data['resourceKey']) ? $data['resourceKey'] : null;
        $this->container['invocationTime'] = isset($data['invocationTime']) ? $data['invocationTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets resourceKey
    *  resourceKey
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\RemediationResourceKey|null
    */
    public function getResourceKey()
    {
        return $this->container['resourceKey'];
    }

    /**
    * Sets resourceKey
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\RemediationResourceKey|null $resourceKey resourceKey
    *
    * @return $this
    */
    public function setResourceKey($resourceKey)
    {
        $this->container['resourceKey'] = $resourceKey;
        return $this;
    }

    /**
    * Gets invocationTime
    *  补救执行的开始时间。
    *
    * @return string|null
    */
    public function getInvocationTime()
    {
        return $this->container['invocationTime'];
    }

    /**
    * Sets invocationTime
    *
    * @param string|null $invocationTime 补救执行的开始时间。
    *
    * @return $this
    */
    public function setInvocationTime($invocationTime)
    {
        $this->container['invocationTime'] = $invocationTime;
        return $this;
    }

    /**
    * Gets state
    *  合规规则修正执行的状态。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 合规规则修正执行的状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets message
    *  合规规则修正执行的信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 合规规则修正执行的信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

