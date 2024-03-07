<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendKafkaMessageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendKafkaMessageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  Kafka的topic
    * body  消息内容
    * propertyList  topic的分区信息等
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'body' => 'string',
            'propertyList' => '\HuaweiCloud\SDK\Kafka\V2\Model\SendKafkaMessageRequestBodyPropertyList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  Kafka的topic
    * body  消息内容
    * propertyList  topic的分区信息等
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'body' => null,
        'propertyList' => null
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
    * topic  Kafka的topic
    * body  消息内容
    * propertyList  topic的分区信息等
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'body' => 'body',
            'propertyList' => 'property_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  Kafka的topic
    * body  消息内容
    * propertyList  topic的分区信息等
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'body' => 'setBody',
            'propertyList' => 'setPropertyList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  Kafka的topic
    * body  消息内容
    * propertyList  topic的分区信息等
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'body' => 'getBody',
            'propertyList' => 'getPropertyList'
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['propertyList'] = isset($data['propertyList']) ? $data['propertyList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['propertyList'] === null) {
            $invalidProperties[] = "'propertyList' can't be null";
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
    * Gets topic
    *  Kafka的topic
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic Kafka的topic
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets body
    *  消息内容
    *
    * @return string
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string $body 消息内容
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets propertyList
    *  topic的分区信息等
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SendKafkaMessageRequestBodyPropertyList[]
    */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
    * Sets propertyList
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SendKafkaMessageRequestBodyPropertyList[] $propertyList topic的分区信息等
    *
    * @return $this
    */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;
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

