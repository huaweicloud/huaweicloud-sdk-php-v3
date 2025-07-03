<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTicketParamsV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTicketParamsV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  返回字段
    * countFilters  批量计数
    * stringFilters  字符串搜索条件
    * groupByFilter  groupByFilter
    * intFilters  整形过滤器
    * sortFilter  sortFilter
    * condition  表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string[]',
            'countFilters' => '\HuaweiCloud\SDK\Coc\V1\Model\ListTicketParamsV2CountFilters[]',
            'stringFilters' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2[]',
            'groupByFilter' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2',
            'intFilters' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2[]',
            'sortFilter' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2',
            'condition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  返回字段
    * countFilters  批量计数
    * stringFilters  字符串搜索条件
    * groupByFilter  groupByFilter
    * intFilters  整形过滤器
    * sortFilter  sortFilter
    * condition  表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'countFilters' => null,
        'stringFilters' => null,
        'groupByFilter' => null,
        'intFilters' => null,
        'sortFilter' => null,
        'condition' => null
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
    * fields  返回字段
    * countFilters  批量计数
    * stringFilters  字符串搜索条件
    * groupByFilter  groupByFilter
    * intFilters  整形过滤器
    * sortFilter  sortFilter
    * condition  表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'countFilters' => 'count_filters',
            'stringFilters' => 'string_filters',
            'groupByFilter' => 'group_by_filter',
            'intFilters' => 'int_filters',
            'sortFilter' => 'sort_filter',
            'condition' => 'condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  返回字段
    * countFilters  批量计数
    * stringFilters  字符串搜索条件
    * groupByFilter  groupByFilter
    * intFilters  整形过滤器
    * sortFilter  sortFilter
    * condition  表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'countFilters' => 'setCountFilters',
            'stringFilters' => 'setStringFilters',
            'groupByFilter' => 'setGroupByFilter',
            'intFilters' => 'setIntFilters',
            'sortFilter' => 'setSortFilter',
            'condition' => 'setCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  返回字段
    * countFilters  批量计数
    * stringFilters  字符串搜索条件
    * groupByFilter  groupByFilter
    * intFilters  整形过滤器
    * sortFilter  sortFilter
    * condition  表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'countFilters' => 'getCountFilters',
            'stringFilters' => 'getStringFilters',
            'groupByFilter' => 'getGroupByFilter',
            'intFilters' => 'getIntFilters',
            'sortFilter' => 'getSortFilter',
            'condition' => 'getCondition'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['countFilters'] = isset($data['countFilters']) ? $data['countFilters'] : null;
        $this->container['stringFilters'] = isset($data['stringFilters']) ? $data['stringFilters'] : null;
        $this->container['groupByFilter'] = isset($data['groupByFilter']) ? $data['groupByFilter'] : null;
        $this->container['intFilters'] = isset($data['intFilters']) ? $data['intFilters'] : null;
        $this->container['sortFilter'] = isset($data['sortFilter']) ? $data['sortFilter'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['condition']) && (mb_strlen($this->container['condition']) > 10000)) {
                $invalidProperties[] = "invalid value for 'condition', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['condition']) && (mb_strlen($this->container['condition']) < 0)) {
                $invalidProperties[] = "invalid value for 'condition', the character length must be bigger than or equal to 0.";
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
    * Gets fields
    *  返回字段
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 返回字段
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets countFilters
    *  批量计数
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ListTicketParamsV2CountFilters[]|null
    */
    public function getCountFilters()
    {
        return $this->container['countFilters'];
    }

    /**
    * Sets countFilters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ListTicketParamsV2CountFilters[]|null $countFilters 批量计数
    *
    * @return $this
    */
    public function setCountFilters($countFilters)
    {
        $this->container['countFilters'] = $countFilters;
        return $this;
    }

    /**
    * Gets stringFilters
    *  字符串搜索条件
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2[]|null
    */
    public function getStringFilters()
    {
        return $this->container['stringFilters'];
    }

    /**
    * Sets stringFilters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2[]|null $stringFilters 字符串搜索条件
    *
    * @return $this
    */
    public function setStringFilters($stringFilters)
    {
        $this->container['stringFilters'] = $stringFilters;
        return $this;
    }

    /**
    * Gets groupByFilter
    *  groupByFilter
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2|null
    */
    public function getGroupByFilter()
    {
        return $this->container['groupByFilter'];
    }

    /**
    * Sets groupByFilter
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2|null $groupByFilter groupByFilter
    *
    * @return $this
    */
    public function setGroupByFilter($groupByFilter)
    {
        $this->container['groupByFilter'] = $groupByFilter;
        return $this;
    }

    /**
    * Gets intFilters
    *  整形过滤器
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2[]|null
    */
    public function getIntFilters()
    {
        return $this->container['intFilters'];
    }

    /**
    * Sets intFilters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2[]|null $intFilters 整形过滤器
    *
    * @return $this
    */
    public function setIntFilters($intFilters)
    {
        $this->container['intFilters'] = $intFilters;
        return $this;
    }

    /**
    * Gets sortFilter
    *  sortFilter
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2|null
    */
    public function getSortFilter()
    {
        return $this->container['sortFilter'];
    }

    /**
    * Sets sortFilter
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilterV2|null $sortFilter sortFilter
    *
    * @return $this
    */
    public function setSortFilter($sortFilter)
    {
        $this->container['sortFilter'] = $sortFilter;
        return $this;
    }

    /**
    * Gets condition
    *  表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 表达式，对复杂表达式进行组装，可以用英文括号()、与&、或|。示例：( filterName1 & filterName2) | filterName3。filterName*：取自string_filters ObjectFilter.name。如果为空，string_filters中的条件默认是与的关系
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
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

