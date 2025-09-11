<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchIpdIssuesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchIpdIssuesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  过滤条件
    * page  page
    * returnFields  返回字段
    * sort  排序字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\ConditionVO][]',
            'page' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PageInfoVO',
            'returnFields' => 'string[]',
            'sort' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SortInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  过滤条件
    * page  page
    * returnFields  返回字段
    * sort  排序字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'page' => null,
        'returnFields' => null,
        'sort' => null
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
    * filter  过滤条件
    * page  page
    * returnFields  返回字段
    * sort  排序字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'page' => 'page',
            'returnFields' => 'return_fields',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  过滤条件
    * page  page
    * returnFields  返回字段
    * sort  排序字段
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'page' => 'setPage',
            'returnFields' => 'setReturnFields',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  过滤条件
    * page  page
    * returnFields  返回字段
    * sort  排序字段
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'page' => 'getPage',
            'returnFields' => 'getReturnFields',
            'sort' => 'getSort'
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['returnFields'] = isset($data['returnFields']) ? $data['returnFields'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
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
    * Gets filter
    *  过滤条件
    *
    * @return map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\ConditionVO][]|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\ConditionVO][]|null $filter 过滤条件
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets page
    *  page
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\PageInfoVO|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\PageInfoVO|null $page page
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets returnFields
    *  返回字段
    *
    * @return string[]|null
    */
    public function getReturnFields()
    {
        return $this->container['returnFields'];
    }

    /**
    * Sets returnFields
    *
    * @param string[]|null $returnFields 返回字段
    *
    * @return $this
    */
    public function setReturnFields($returnFields)
    {
        $this->container['returnFields'] = $returnFields;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SortInfo[]|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SortInfo[]|null $sort 排序字段
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

