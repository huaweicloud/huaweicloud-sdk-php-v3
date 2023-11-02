<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessAssetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessAssetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * searchAllAttributes  关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    * tags  标签信息 Set<String>
    * limit  查询返回数目
    * offset  查询偏移量
    * guid  查询节点的guid
    * query  查询关键字
    * type  查询类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'searchAllAttributes' => 'bool',
            'tags' => 'object',
            'limit' => 'int',
            'offset' => 'int',
            'guid' => 'string',
            'query' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * searchAllAttributes  关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    * tags  标签信息 Set<String>
    * limit  查询返回数目
    * offset  查询偏移量
    * guid  查询节点的guid
    * query  查询关键字
    * type  查询类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'searchAllAttributes' => null,
        'tags' => null,
        'limit' => null,
        'offset' => null,
        'guid' => null,
        'query' => null,
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
    * searchAllAttributes  关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    * tags  标签信息 Set<String>
    * limit  查询返回数目
    * offset  查询偏移量
    * guid  查询节点的guid
    * query  查询关键字
    * type  查询类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'searchAllAttributes' => 'search_all_attributes',
            'tags' => 'tags',
            'limit' => 'limit',
            'offset' => 'offset',
            'guid' => 'guid',
            'query' => 'query',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * searchAllAttributes  关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    * tags  标签信息 Set<String>
    * limit  查询返回数目
    * offset  查询偏移量
    * guid  查询节点的guid
    * query  查询关键字
    * type  查询类型
    *
    * @var string[]
    */
    protected static $setters = [
            'searchAllAttributes' => 'setSearchAllAttributes',
            'tags' => 'setTags',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'guid' => 'setGuid',
            'query' => 'setQuery',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * searchAllAttributes  关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    * tags  标签信息 Set<String>
    * limit  查询返回数目
    * offset  查询偏移量
    * guid  查询节点的guid
    * query  查询关键字
    * type  查询类型
    *
    * @var string[]
    */
    protected static $getters = [
            'searchAllAttributes' => 'getSearchAllAttributes',
            'tags' => 'getTags',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'guid' => 'getGuid',
            'query' => 'getQuery',
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
    const TYPE_BUSINESS = 'BUSINESS';
    const TYPE_LOGICENTITY = 'LOGICENTITY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BUSINESS,
            self::TYPE_LOGICENTITY,
        ];
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
        $this->container['searchAllAttributes'] = isset($data['searchAllAttributes']) ? $data['searchAllAttributes'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
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
        if ($this->container['searchAllAttributes'] === null) {
            $invalidProperties[] = "'searchAllAttributes' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets searchAllAttributes
    *  关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    *
    * @return bool
    */
    public function getSearchAllAttributes()
    {
        return $this->container['searchAllAttributes'];
    }

    /**
    * Sets searchAllAttributes
    *
    * @param bool $searchAllAttributes 关键字查询是否匹配所有属性，true为查询所有属性，false为仅查询名称描述
    *
    * @return $this
    */
    public function setSearchAllAttributes($searchAllAttributes)
    {
        $this->container['searchAllAttributes'] = $searchAllAttributes;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息 Set<String>
    *
    * @return object|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object|null $tags 标签信息 Set<String>
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回数目
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 查询返回数目
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
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 查询偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets guid
    *  查询节点的guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 查询节点的guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets query
    *  查询关键字
    *
    * @return string
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string $query 查询关键字
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets type
    *  查询类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 查询类型
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

