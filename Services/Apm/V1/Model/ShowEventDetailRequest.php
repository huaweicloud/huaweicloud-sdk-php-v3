<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * traceId  trace id。
    * spanId  span id。
    * eventId  event id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'traceId' => 'string',
            'spanId' => 'string',
            'eventId' => 'string',
            'envId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * traceId  trace id。
    * spanId  span id。
    * eventId  event id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'traceId' => null,
        'spanId' => null,
        'eventId' => null,
        'envId' => 'int64'
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
    * traceId  trace id。
    * spanId  span id。
    * eventId  event id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'traceId' => 'trace_id',
            'spanId' => 'span_id',
            'eventId' => 'event_id',
            'envId' => 'env_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * traceId  trace id。
    * spanId  span id。
    * eventId  event id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $setters = [
            'traceId' => 'setTraceId',
            'spanId' => 'setSpanId',
            'eventId' => 'setEventId',
            'envId' => 'setEnvId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * traceId  trace id。
    * spanId  span id。
    * eventId  event id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $getters = [
            'traceId' => 'getTraceId',
            'spanId' => 'getSpanId',
            'eventId' => 'getEventId',
            'envId' => 'getEnvId'
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
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['spanId'] = isset($data['spanId']) ? $data['spanId'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['traceId'] === null) {
            $invalidProperties[] = "'traceId' can't be null";
        }
        if ($this->container['spanId'] === null) {
            $invalidProperties[] = "'spanId' can't be null";
        }
        if ($this->container['eventId'] === null) {
            $invalidProperties[] = "'eventId' can't be null";
        }
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
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
    * Gets traceId
    *  trace id。
    *
    * @return string
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string $traceId trace id。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets spanId
    *  span id。
    *
    * @return string
    */
    public function getSpanId()
    {
        return $this->container['spanId'];
    }

    /**
    * Sets spanId
    *
    * @param string $spanId span id。
    *
    * @return $this
    */
    public function setSpanId($spanId)
    {
        $this->container['spanId'] = $spanId;
        return $this;
    }

    /**
    * Gets eventId
    *  event id。
    *
    * @return string
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string $eventId event id。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
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

