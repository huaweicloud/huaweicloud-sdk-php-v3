<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaTargetDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaTargetDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  主题
    * keyTransform  keyTransform
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'keyTransform' => '\HuaweiCloud\SDK\Eg\V1\Model\KafkaTargetDetailKeyTransform'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  主题
    * keyTransform  keyTransform
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'keyTransform' => null
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
    * topic  主题
    * keyTransform  keyTransform
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'keyTransform' => 'keyTransform'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  主题
    * keyTransform  keyTransform
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'keyTransform' => 'setKeyTransform'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  主题
    * keyTransform  keyTransform
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'keyTransform' => 'getKeyTransform'
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
        $this->container['keyTransform'] = isset($data['keyTransform']) ? $data['keyTransform'] : null;
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
    *  主题
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
    * @param string $topic 主题
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets keyTransform
    *  keyTransform
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\KafkaTargetDetailKeyTransform|null
    */
    public function getKeyTransform()
    {
        return $this->container['keyTransform'];
    }

    /**
    * Sets keyTransform
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\KafkaTargetDetailKeyTransform|null $keyTransform keyTransform
    *
    * @return $this
    */
    public function setKeyTransform($keyTransform)
    {
        $this->container['keyTransform'] = $keyTransform;
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

