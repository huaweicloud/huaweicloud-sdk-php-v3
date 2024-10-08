<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdatePoliciesPriorityRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdatePoliciesPriorityRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * l7policies  参数解释：转发策略的结构体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'l7policies' => '\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePriorityRequestBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * l7policies  参数解释：转发策略的结构体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'l7policies' => null
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
    * l7policies  参数解释：转发策略的结构体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'l7policies' => 'l7policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * l7policies  参数解释：转发策略的结构体。
    *
    * @var string[]
    */
    protected static $setters = [
            'l7policies' => 'setL7policies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * l7policies  参数解释：转发策略的结构体。
    *
    * @var string[]
    */
    protected static $getters = [
            'l7policies' => 'getL7policies'
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
        $this->container['l7policies'] = isset($data['l7policies']) ? $data['l7policies'] : null;
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
    * Gets l7policies
    *  参数解释：转发策略的结构体。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePriorityRequestBody[]|null
    */
    public function getL7policies()
    {
        return $this->container['l7policies'];
    }

    /**
    * Sets l7policies
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePriorityRequestBody[]|null $l7policies 参数解释：转发策略的结构体。
    *
    * @return $this
    */
    public function setL7policies($l7policies)
    {
        $this->container['l7policies'] = $l7policies;
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

