<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasePageInfoReview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasePageInfoReview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  total
    * list  list
    * offset  offset
    * limit  limit
    * pages  pages
    * size  size
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'list' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Review[]',
            'offset' => 'int',
            'limit' => 'int',
            'pages' => 'int',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  total
    * list  list
    * offset  offset
    * limit  limit
    * pages  pages
    * size  size
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int64',
        'list' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'pages' => 'int32',
        'size' => 'int32'
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
    * total  total
    * list  list
    * offset  offset
    * limit  limit
    * pages  pages
    * size  size
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'list' => 'list',
            'offset' => 'offset',
            'limit' => 'limit',
            'pages' => 'pages',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  total
    * list  list
    * offset  offset
    * limit  limit
    * pages  pages
    * size  size
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'list' => 'setList',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'pages' => 'setPages',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  total
    * list  list
    * offset  offset
    * limit  limit
    * pages  pages
    * size  size
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'list' => 'getList',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'pages' => 'getPages',
            'size' => 'getSize'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets total
    *  total
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total total
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets list
    *  list
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\Review[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\Review[]|null $list list
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets offset
    *  offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pages
    *  pages
    *
    * @return int|null
    */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
    * Sets pages
    *
    * @param int|null $pages pages
    *
    * @return $this
    */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;
        return $this;
    }

    /**
    * Gets size
    *  size
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size size
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

