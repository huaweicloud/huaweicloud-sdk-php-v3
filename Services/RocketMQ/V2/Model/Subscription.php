<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Subscription';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  订阅的topic名称
    * type  订阅类型，取值如下：TAG和SQL92
    * expression  订阅tag字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'type' => 'string',
            'expression' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  订阅的topic名称
    * type  订阅类型，取值如下：TAG和SQL92
    * expression  订阅tag字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'type' => null,
        'expression' => null
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
    * topic  订阅的topic名称
    * type  订阅类型，取值如下：TAG和SQL92
    * expression  订阅tag字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'type' => 'type',
            'expression' => 'expression'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  订阅的topic名称
    * type  订阅类型，取值如下：TAG和SQL92
    * expression  订阅tag字符
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'type' => 'setType',
            'expression' => 'setExpression'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  订阅的topic名称
    * type  订阅类型，取值如下：TAG和SQL92
    * expression  订阅tag字符
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'type' => 'getType',
            'expression' => 'getExpression'
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
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
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
    * Gets topic
    *  订阅的topic名称
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 订阅的topic名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets type
    *  订阅类型，取值如下：TAG和SQL92
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
    * @param string|null $type 订阅类型，取值如下：TAG和SQL92
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets expression
    *  订阅tag字符
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 订阅tag字符
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
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

