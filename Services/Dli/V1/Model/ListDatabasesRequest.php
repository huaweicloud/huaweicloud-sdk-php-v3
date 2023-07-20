<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDatabasesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDatabasesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyword  过滤关键字
    * limit  查询数量
    * offset  查询偏移量
    * tags  标签过滤
    * withPriv  是否返回隐私信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyword' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'tags' => 'string',
            'withPriv' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyword  过滤关键字
    * limit  查询数量
    * offset  查询偏移量
    * tags  标签过滤
    * withPriv  是否返回隐私信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyword' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'tags' => null,
        'withPriv' => null
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
    * keyword  过滤关键字
    * limit  查询数量
    * offset  查询偏移量
    * tags  标签过滤
    * withPriv  是否返回隐私信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyword' => 'keyword',
            'limit' => 'limit',
            'offset' => 'offset',
            'tags' => 'tags',
            'withPriv' => 'with-priv'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyword  过滤关键字
    * limit  查询数量
    * offset  查询偏移量
    * tags  标签过滤
    * withPriv  是否返回隐私信息
    *
    * @var string[]
    */
    protected static $setters = [
            'keyword' => 'setKeyword',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'withPriv' => 'setWithPriv'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyword  过滤关键字
    * limit  查询数量
    * offset  查询偏移量
    * tags  标签过滤
    * withPriv  是否返回隐私信息
    *
    * @var string[]
    */
    protected static $getters = [
            'keyword' => 'getKeyword',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'withPriv' => 'getWithPriv'
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
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['withPriv'] = isset($data['withPriv']) ? $data['withPriv'] : null;
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
    * Gets keyword
    *  过滤关键字
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 过滤关键字
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets limit
    *  查询数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量
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
    * @param int|null $offset 查询偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  标签过滤
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签过滤
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets withPriv
    *  是否返回隐私信息
    *
    * @return bool|null
    */
    public function getWithPriv()
    {
        return $this->container['withPriv'];
    }

    /**
    * Sets withPriv
    *
    * @param bool|null $withPriv 是否返回隐私信息
    *
    * @return $this
    */
    public function setWithPriv($withPriv)
    {
        $this->container['withPriv'] = $withPriv;
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

