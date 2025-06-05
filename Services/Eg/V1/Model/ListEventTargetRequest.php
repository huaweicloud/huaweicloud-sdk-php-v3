<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventTargetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventTargetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * fuzzyLabel  指定查询的事件目标标签，模糊匹配
    * supportTypes  事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'sort' => 'string',
            'fuzzyLabel' => 'string',
            'supportTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * fuzzyLabel  指定查询的事件目标标签，模糊匹配
    * supportTypes  事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'sort' => null,
        'fuzzyLabel' => null,
        'supportTypes' => null
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
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * fuzzyLabel  指定查询的事件目标标签，模糊匹配
    * supportTypes  事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'sort' => 'sort',
            'fuzzyLabel' => 'fuzzy_label',
            'supportTypes' => 'support_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * fuzzyLabel  指定查询的事件目标标签，模糊匹配
    * supportTypes  事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sort' => 'setSort',
            'fuzzyLabel' => 'setFuzzyLabel',
            'supportTypes' => 'setSupportTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * fuzzyLabel  指定查询的事件目标标签，模糊匹配
    * supportTypes  事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sort' => 'getSort',
            'fuzzyLabel' => 'getFuzzyLabel',
            'supportTypes' => 'getSupportTypes'
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
    const SUPPORT_TYPES_SUBSCRIPTION = 'SUBSCRIPTION';
    const SUPPORT_TYPES_FLOW = 'FLOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportTypesAllowableValues()
    {
        return [
            self::SUPPORT_TYPES_SUBSCRIPTION,
            self::SUPPORT_TYPES_FLOW,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['fuzzyLabel'] = isset($data['fuzzyLabel']) ? $data['fuzzyLabel'] : null;
        $this->container['supportTypes'] = isset($data['supportTypes']) ? $data['supportTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，偏移量不能小于0
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，偏移量不能小于0
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
    *  每页显示的条目数量，不能小于1或大于1000
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
    * @param int|null $limit 每页显示的条目数量，不能小于1或大于1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sort
    *  指定查询排序
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 指定查询排序
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets fuzzyLabel
    *  指定查询的事件目标标签，模糊匹配
    *
    * @return string|null
    */
    public function getFuzzyLabel()
    {
        return $this->container['fuzzyLabel'];
    }

    /**
    * Sets fuzzyLabel
    *
    * @param string|null $fuzzyLabel 指定查询的事件目标标签，模糊匹配
    *
    * @return $this
    */
    public function setFuzzyLabel($fuzzyLabel)
    {
        $this->container['fuzzyLabel'] = $fuzzyLabel;
        return $this;
    }

    /**
    * Gets supportTypes
    *  事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @return string[]|null
    */
    public function getSupportTypes()
    {
        return $this->container['supportTypes'];
    }

    /**
    * Sets supportTypes
    *
    * @param string[]|null $supportTypes 事件目标支持方式：事件订阅：SUBSCRIPTION、事件流：FLOW
    *
    * @return $this
    */
    public function setSupportTypes($supportTypes)
    {
        $this->container['supportTypes'] = $supportTypes;
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

