<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioModerationResultRequestParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioModerationResult_request_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  eventType
    * data  data
    * callback  callback
    * categories  categories
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\AudioModerationResultRequestParamsData',
            'callback' => 'string',
            'categories' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  eventType
    * data  data
    * callback  callback
    * categories  categories
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'data' => null,
        'callback' => null,
        'categories' => null
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
    * eventType  eventType
    * data  data
    * callback  callback
    * categories  categories
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'data' => 'data',
            'callback' => 'callback',
            'categories' => 'categories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  eventType
    * data  data
    * callback  callback
    * categories  categories
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'data' => 'setData',
            'callback' => 'setCallback',
            'categories' => 'setCategories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  eventType
    * data  data
    * callback  callback
    * categories  categories
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'data' => 'getData',
            'callback' => 'getCallback',
            'categories' => 'getCategories'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
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
    * Gets eventType
    *  eventType
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType eventType
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\AudioModerationResultRequestParamsData|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\AudioModerationResultRequestParamsData|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets callback
    *  callback
    *
    * @return string|null
    */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
    * Sets callback
    *
    * @param string|null $callback callback
    *
    * @return $this
    */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;
        return $this;
    }

    /**
    * Gets categories
    *  categories
    *
    * @return string[]|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[]|null $categories categories
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
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

