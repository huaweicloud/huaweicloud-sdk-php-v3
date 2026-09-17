<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  查询过滤器
    * filterMode  过滤模式
    * page  page
    * sort  排序条件
    * returnFields  返回字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\ConditionVO][]',
            'filterMode' => 'string',
            'page' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PageInfoVO',
            'sort' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SortInfo[]',
            'returnFields' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  查询过滤器
    * filterMode  过滤模式
    * page  page
    * sort  排序条件
    * returnFields  返回字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'filterMode' => null,
        'page' => null,
        'sort' => null,
        'returnFields' => null
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
    * filter  查询过滤器
    * filterMode  过滤模式
    * page  page
    * sort  排序条件
    * returnFields  返回字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'filterMode' => 'filter_mode',
            'page' => 'page',
            'sort' => 'sort',
            'returnFields' => 'return_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  查询过滤器
    * filterMode  过滤模式
    * page  page
    * sort  排序条件
    * returnFields  返回字段
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'filterMode' => 'setFilterMode',
            'page' => 'setPage',
            'sort' => 'setSort',
            'returnFields' => 'setReturnFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  查询过滤器
    * filterMode  过滤模式
    * page  page
    * sort  排序条件
    * returnFields  返回字段
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'filterMode' => 'getFilterMode',
            'page' => 'getPage',
            'sort' => 'getSort',
            'returnFields' => 'getReturnFields'
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
        $this->container['filterMode'] = isset($data['filterMode']) ? $data['filterMode'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['returnFields'] = isset($data['returnFields']) ? $data['returnFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['filterMode']) && (mb_strlen($this->container['filterMode']) > 512)) {
                $invalidProperties[] = "invalid value for 'filterMode', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['filterMode']) && (mb_strlen($this->container['filterMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'filterMode', the character length must be bigger than or equal to 0.";
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
    * Gets filter
    *  查询过滤器
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
    * @param map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\ConditionVO][]|null $filter 查询过滤器
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets filterMode
    *  过滤模式
    *
    * @return string|null
    */
    public function getFilterMode()
    {
        return $this->container['filterMode'];
    }

    /**
    * Sets filterMode
    *
    * @param string|null $filterMode 过滤模式
    *
    * @return $this
    */
    public function setFilterMode($filterMode)
    {
        $this->container['filterMode'] = $filterMode;
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
    * Gets sort
    *  排序条件
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SortInfo[]|null $sort 排序条件
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

