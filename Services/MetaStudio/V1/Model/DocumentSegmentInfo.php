<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentSegmentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentSegmentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * textIndex  分段序号
    * id  分段文本ID
    * title  分段文本标题
    * text  分段文本内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'textIndex' => 'int',
            'id' => 'string',
            'title' => 'string',
            'text' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * textIndex  分段序号
    * id  分段文本ID
    * title  分段文本标题
    * text  分段文本内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'textIndex' => null,
        'id' => null,
        'title' => null,
        'text' => null
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
    * textIndex  分段序号
    * id  分段文本ID
    * title  分段文本标题
    * text  分段文本内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'textIndex' => 'text_index',
            'id' => 'id',
            'title' => 'title',
            'text' => 'text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * textIndex  分段序号
    * id  分段文本ID
    * title  分段文本标题
    * text  分段文本内容
    *
    * @var string[]
    */
    protected static $setters = [
            'textIndex' => 'setTextIndex',
            'id' => 'setId',
            'title' => 'setTitle',
            'text' => 'setText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * textIndex  分段序号
    * id  分段文本ID
    * title  分段文本标题
    * text  分段文本内容
    *
    * @var string[]
    */
    protected static $getters = [
            'textIndex' => 'getTextIndex',
            'id' => 'getId',
            'title' => 'getTitle',
            'text' => 'getText'
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
        $this->container['textIndex'] = isset($data['textIndex']) ? $data['textIndex'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['textIndex']) && ($this->container['textIndex'] > 65536)) {
                $invalidProperties[] = "invalid value for 'textIndex', must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['textIndex']) && ($this->container['textIndex'] < 0)) {
                $invalidProperties[] = "invalid value for 'textIndex', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 256)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 0)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
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
    * Gets textIndex
    *  分段序号
    *
    * @return int|null
    */
    public function getTextIndex()
    {
        return $this->container['textIndex'];
    }

    /**
    * Sets textIndex
    *
    * @param int|null $textIndex 分段序号
    *
    * @return $this
    */
    public function setTextIndex($textIndex)
    {
        $this->container['textIndex'] = $textIndex;
        return $this;
    }

    /**
    * Gets id
    *  分段文本ID
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
    * @param string|null $id 分段文本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  分段文本标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 分段文本标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets text
    *  分段文本内容
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 分段文本内容
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
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

