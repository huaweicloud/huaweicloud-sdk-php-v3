<?php

namespace HuaweiCloud\SDK\MaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteChatCompletionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteChatCompletionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  响应ID
    * created  响应时间
    * choices  模型回复
    * usage  usage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'created' => 'int',
            'choices' => '\HuaweiCloud\SDK\MaStudio\V1\Model\ChatChoice[]',
            'usage' => '\HuaweiCloud\SDK\MaStudio\V1\Model\CompletionUsage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  响应ID
    * created  响应时间
    * choices  模型回复
    * usage  usage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => null,
        'choices' => null,
        'usage' => null
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
    * id  响应ID
    * created  响应时间
    * choices  模型回复
    * usage  usage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'created' => 'created',
            'choices' => 'choices',
            'usage' => 'usage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  响应ID
    * created  响应时间
    * choices  模型回复
    * usage  usage
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'created' => 'setCreated',
            'choices' => 'setChoices',
            'usage' => 'setUsage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  响应ID
    * created  响应时间
    * choices  模型回复
    * usage  usage
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'created' => 'getCreated',
            'choices' => 'getChoices',
            'usage' => 'getUsage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['choices'] = isset($data['choices']) ? $data['choices'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
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
    * Gets id
    *  响应ID
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
    * @param string|null $id 响应ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets created
    *  响应时间
    *
    * @return int|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int|null $created 响应时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets choices
    *  模型回复
    *
    * @return \HuaweiCloud\SDK\MaStudio\V1\Model\ChatChoice[]|null
    */
    public function getChoices()
    {
        return $this->container['choices'];
    }

    /**
    * Sets choices
    *
    * @param \HuaweiCloud\SDK\MaStudio\V1\Model\ChatChoice[]|null $choices 模型回复
    *
    * @return $this
    */
    public function setChoices($choices)
    {
        $this->container['choices'] = $choices;
        return $this;
    }

    /**
    * Gets usage
    *  usage
    *
    * @return \HuaweiCloud\SDK\MaStudio\V1\Model\CompletionUsage|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param \HuaweiCloud\SDK\MaStudio\V1\Model\CompletionUsage|null $usage usage
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
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

