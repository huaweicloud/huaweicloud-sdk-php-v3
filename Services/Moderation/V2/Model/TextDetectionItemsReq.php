<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextDetectionItemsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextDetectionItemsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    * type  文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    * type  文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'type' => null
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
    * text  待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    * type  文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    * type  文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    * type  文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'type' => 'getType'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
            if ((mb_strlen($this->container['text']) > 5000)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 5000.";
            }
            if ((mb_strlen($this->container['text']) < 1)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 1.";
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
    * Gets text
    *  待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    *
    * @return string
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string $text 待检测文本，编码格式为“utf-8”，限定5000个字符以内，文本长度超过5000个字符时，只检测前5000个字符。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets type
    *  文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
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
    * @param string|null $type 文本类型，默认为“content”，即正文内容，当前只支持“content”类型，未来会扩大支持类型范围。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

