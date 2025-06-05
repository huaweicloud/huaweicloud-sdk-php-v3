<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventStreamingCreateReqRuleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventStreamingCreateReq_rule_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transform  transform
    * filter  过滤规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transform' => '\HuaweiCloud\SDK\Eg\V1\Model\TransForm',
            'filter' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transform  transform
    * filter  过滤规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transform' => null,
        'filter' => null
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
    * transform  transform
    * filter  过滤规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transform' => 'transform',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transform  transform
    * filter  过滤规则
    *
    * @var string[]
    */
    protected static $setters = [
            'transform' => 'setTransform',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transform  transform
    * filter  过滤规则
    *
    * @var string[]
    */
    protected static $getters = [
            'transform' => 'getTransform',
            'filter' => 'getFilter'
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
        $this->container['transform'] = isset($data['transform']) ? $data['transform'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
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
    * Gets transform
    *  transform
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\TransForm|null
    */
    public function getTransform()
    {
        return $this->container['transform'];
    }

    /**
    * Sets transform
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\TransForm|null $transform transform
    *
    * @return $this
    */
    public function setTransform($transform)
    {
        $this->container['transform'] = $transform;
        return $this;
    }

    /**
    * Gets filter
    *  过滤规则
    *
    * @return object|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param object|null $filter 过滤规则
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
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

