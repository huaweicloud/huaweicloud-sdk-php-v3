<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAppLogResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAppLogResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hasMore  是否有更多日志信息
    * text  日志信息
    * offset  日志起始偏移量
    * endOffset  日志末位偏移量，与offset参数配合使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hasMore' => 'bool',
            'text' => 'string',
            'offset' => 'string',
            'endOffset' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hasMore  是否有更多日志信息
    * text  日志信息
    * offset  日志起始偏移量
    * endOffset  日志末位偏移量，与offset参数配合使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hasMore' => null,
        'text' => null,
        'offset' => null,
        'endOffset' => null
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
    * hasMore  是否有更多日志信息
    * text  日志信息
    * offset  日志起始偏移量
    * endOffset  日志末位偏移量，与offset参数配合使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hasMore' => 'has_more',
            'text' => 'text',
            'offset' => 'offset',
            'endOffset' => 'end_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hasMore  是否有更多日志信息
    * text  日志信息
    * offset  日志起始偏移量
    * endOffset  日志末位偏移量，与offset参数配合使用
    *
    * @var string[]
    */
    protected static $setters = [
            'hasMore' => 'setHasMore',
            'text' => 'setText',
            'offset' => 'setOffset',
            'endOffset' => 'setEndOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hasMore  是否有更多日志信息
    * text  日志信息
    * offset  日志起始偏移量
    * endOffset  日志末位偏移量，与offset参数配合使用
    *
    * @var string[]
    */
    protected static $getters = [
            'hasMore' => 'getHasMore',
            'text' => 'getText',
            'offset' => 'getOffset',
            'endOffset' => 'getEndOffset'
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
        $this->container['hasMore'] = isset($data['hasMore']) ? $data['hasMore'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['endOffset'] = isset($data['endOffset']) ? $data['endOffset'] : null;
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
    * Gets hasMore
    *  是否有更多日志信息
    *
    * @return bool|null
    */
    public function getHasMore()
    {
        return $this->container['hasMore'];
    }

    /**
    * Sets hasMore
    *
    * @param bool|null $hasMore 是否有更多日志信息
    *
    * @return $this
    */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;
        return $this;
    }

    /**
    * Gets text
    *  日志信息
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
    * @param string|null $text 日志信息
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets offset
    *  日志起始偏移量
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 日志起始偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets endOffset
    *  日志末位偏移量，与offset参数配合使用
    *
    * @return string|null
    */
    public function getEndOffset()
    {
        return $this->container['endOffset'];
    }

    /**
    * Sets endOffset
    *
    * @param string|null $endOffset 日志末位偏移量，与offset参数配合使用
    *
    * @return $this
    */
    public function setEndOffset($endOffset)
    {
        $this->container['endOffset'] = $endOffset;
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

