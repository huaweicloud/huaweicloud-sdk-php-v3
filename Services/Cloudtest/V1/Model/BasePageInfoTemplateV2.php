<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasePageInfoTemplateV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasePageInfoTemplateV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页显示的条目数量，最大支持200条
    * list  list
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * pages  pages
    * size  size
    * total  total
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'list' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TemplateV2[]',
            'offset' => 'int',
            'pages' => 'int',
            'size' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页显示的条目数量，最大支持200条
    * list  list
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * pages  pages
    * size  size
    * total  total
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'list' => null,
        'offset' => 'int32',
        'pages' => 'int32',
        'size' => 'int32',
        'total' => 'int64'
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
    * limit  每页显示的条目数量，最大支持200条
    * list  list
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * pages  pages
    * size  size
    * total  total
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'list' => 'list',
            'offset' => 'offset',
            'pages' => 'pages',
            'size' => 'size',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页显示的条目数量，最大支持200条
    * list  list
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * pages  pages
    * size  size
    * total  total
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'list' => 'setList',
            'offset' => 'setOffset',
            'pages' => 'setPages',
            'size' => 'setSize',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页显示的条目数量，最大支持200条
    * list  list
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * pages  pages
    * size  size
    * total  total
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'list' => 'getList',
            'offset' => 'getOffset',
            'pages' => 'getPages',
            'size' => 'getSize',
            'total' => 'getTotal'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets limit
    *  每页显示的条目数量，最大支持200条
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
    * @param int|null $limit 每页显示的条目数量，最大支持200条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets list
    *  list
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TemplateV2[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TemplateV2[]|null $list list
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
    *  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
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
    * @param int|null $offset 起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

