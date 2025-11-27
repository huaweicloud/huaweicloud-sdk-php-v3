<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConditionStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConditionStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  状态类型
    * status  状态
    * observedgeneration  状态对象的版本
    * lastTransitionTime  上次状态更新的时间
    * reason  状态原因
    * message  状态信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'status' => 'string',
            'observedgeneration' => 'int',
            'lastTransitionTime' => '\DateTime',
            'reason' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  状态类型
    * status  状态
    * observedgeneration  状态对象的版本
    * lastTransitionTime  上次状态更新的时间
    * reason  状态原因
    * message  状态信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'status' => null,
        'observedgeneration' => 'int32',
        'lastTransitionTime' => 'date-time',
        'reason' => null,
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
    * type  状态类型
    * status  状态
    * observedgeneration  状态对象的版本
    * lastTransitionTime  上次状态更新的时间
    * reason  状态原因
    * message  状态信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'status' => 'status',
            'observedgeneration' => 'observedgeneration',
            'lastTransitionTime' => 'lastTransitionTime',
            'reason' => 'reason',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  状态类型
    * status  状态
    * observedgeneration  状态对象的版本
    * lastTransitionTime  上次状态更新的时间
    * reason  状态原因
    * message  状态信息
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'status' => 'setStatus',
            'observedgeneration' => 'setObservedgeneration',
            'lastTransitionTime' => 'setLastTransitionTime',
            'reason' => 'setReason',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  状态类型
    * status  状态
    * observedgeneration  状态对象的版本
    * lastTransitionTime  上次状态更新的时间
    * reason  状态原因
    * message  状态信息
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'status' => 'getStatus',
            'observedgeneration' => 'getObservedgeneration',
            'lastTransitionTime' => 'getLastTransitionTime',
            'reason' => 'getReason',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['observedgeneration'] = isset($data['observedgeneration']) ? $data['observedgeneration'] : null;
        $this->container['lastTransitionTime'] = isset($data['lastTransitionTime']) ? $data['lastTransitionTime'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
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
    * Gets type
    *  状态类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 状态类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets observedgeneration
    *  状态对象的版本
    *
    * @return int|null
    */
    public function getObservedgeneration()
    {
        return $this->container['observedgeneration'];
    }

    /**
    * Sets observedgeneration
    *
    * @param int|null $observedgeneration 状态对象的版本
    *
    * @return $this
    */
    public function setObservedgeneration($observedgeneration)
    {
        $this->container['observedgeneration'] = $observedgeneration;
        return $this;
    }

    /**
    * Gets lastTransitionTime
    *  上次状态更新的时间
    *
    * @return \DateTime|null
    */
    public function getLastTransitionTime()
    {
        return $this->container['lastTransitionTime'];
    }

    /**
    * Sets lastTransitionTime
    *
    * @param \DateTime|null $lastTransitionTime 上次状态更新的时间
    *
    * @return $this
    */
    public function setLastTransitionTime($lastTransitionTime)
    {
        $this->container['lastTransitionTime'] = $lastTransitionTime;
        return $this;
    }

    /**
    * Gets reason
    *  状态原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 状态原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  状态信息
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
    * @param string|null $message 状态信息
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

