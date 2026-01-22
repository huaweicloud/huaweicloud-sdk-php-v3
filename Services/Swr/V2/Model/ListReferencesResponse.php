<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReferencesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReferencesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nextMarker  下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    * hasMore  分页查询时表示是否还有下一页的数据
    * tags  镜像版本列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nextMarker' => 'string',
            'hasMore' => 'bool',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nextMarker  下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    * hasMore  分页查询时表示是否还有下一页的数据
    * tags  镜像版本列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nextMarker' => null,
        'hasMore' => null,
        'tags' => null
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
    * nextMarker  下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    * hasMore  分页查询时表示是否还有下一页的数据
    * tags  镜像版本列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nextMarker' => 'next_marker',
            'hasMore' => 'has_more',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nextMarker  下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    * hasMore  分页查询时表示是否还有下一页的数据
    * tags  镜像版本列表
    *
    * @var string[]
    */
    protected static $setters = [
            'nextMarker' => 'setNextMarker',
            'hasMore' => 'setHasMore',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nextMarker  下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    * hasMore  分页查询时表示是否还有下一页的数据
    * tags  镜像版本列表
    *
    * @var string[]
    */
    protected static $getters = [
            'nextMarker' => 'getNextMarker',
            'hasMore' => 'getHasMore',
            'tags' => 'getTags'
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
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['hasMore'] = isset($data['hasMore']) ? $data['hasMore'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets nextMarker
    *  下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 下一次分页查询的起始ID。如果未返回该值，则表示数据已查询完毕
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets hasMore
    *  分页查询时表示是否还有下一页的数据
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
    * @param bool|null $hasMore 分页查询时表示是否还有下一页的数据
    *
    * @return $this
    */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;
        return $this;
    }

    /**
    * Gets tags
    *  镜像版本列表
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 镜像版本列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

