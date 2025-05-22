<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealTimeLogResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealTimeLogResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hasMoreData  是否还有剩余日志标识
    * offset  偏移量，可用于下一次请求
    * content  返回日志内容，可能会空，请再次请求
    * currentOffset  当前请求偏移量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hasMoreData' => 'bool',
            'offset' => 'int',
            'content' => 'string',
            'currentOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hasMoreData  是否还有剩余日志标识
    * offset  偏移量，可用于下一次请求
    * content  返回日志内容，可能会空，请再次请求
    * currentOffset  当前请求偏移量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hasMoreData' => null,
        'offset' => null,
        'content' => null,
        'currentOffset' => null
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
    * hasMoreData  是否还有剩余日志标识
    * offset  偏移量，可用于下一次请求
    * content  返回日志内容，可能会空，请再次请求
    * currentOffset  当前请求偏移量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hasMoreData' => 'has_more_data',
            'offset' => 'offset',
            'content' => 'content',
            'currentOffset' => 'current_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hasMoreData  是否还有剩余日志标识
    * offset  偏移量，可用于下一次请求
    * content  返回日志内容，可能会空，请再次请求
    * currentOffset  当前请求偏移量
    *
    * @var string[]
    */
    protected static $setters = [
            'hasMoreData' => 'setHasMoreData',
            'offset' => 'setOffset',
            'content' => 'setContent',
            'currentOffset' => 'setCurrentOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hasMoreData  是否还有剩余日志标识
    * offset  偏移量，可用于下一次请求
    * content  返回日志内容，可能会空，请再次请求
    * currentOffset  当前请求偏移量
    *
    * @var string[]
    */
    protected static $getters = [
            'hasMoreData' => 'getHasMoreData',
            'offset' => 'getOffset',
            'content' => 'getContent',
            'currentOffset' => 'getCurrentOffset'
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
        $this->container['hasMoreData'] = isset($data['hasMoreData']) ? $data['hasMoreData'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['currentOffset'] = isset($data['currentOffset']) ? $data['currentOffset'] : null;
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
    * Gets hasMoreData
    *  是否还有剩余日志标识
    *
    * @return bool|null
    */
    public function getHasMoreData()
    {
        return $this->container['hasMoreData'];
    }

    /**
    * Sets hasMoreData
    *
    * @param bool|null $hasMoreData 是否还有剩余日志标识
    *
    * @return $this
    */
    public function setHasMoreData($hasMoreData)
    {
        $this->container['hasMoreData'] = $hasMoreData;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，可用于下一次请求
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，可用于下一次请求
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets content
    *  返回日志内容，可能会空，请再次请求
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 返回日志内容，可能会空，请再次请求
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets currentOffset
    *  当前请求偏移量
    *
    * @return int|null
    */
    public function getCurrentOffset()
    {
        return $this->container['currentOffset'];
    }

    /**
    * Sets currentOffset
    *
    * @param int|null $currentOffset 当前请求偏移量
    *
    * @return $this
    */
    public function setCurrentOffset($currentOffset)
    {
        $this->container['currentOffset'] = $currentOffset;
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

