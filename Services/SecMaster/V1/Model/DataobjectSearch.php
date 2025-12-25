<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataobjectSearch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataobjectSearch';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页大小
    * offset  偏移量
    * sortBy  排序字段：create_time | update_time
    * order  排序方式：DESC | ASC
    * fromDate  搜索开始时间，例如：2023-02-20T00:00:00.000Z
    * toDate  搜索结束时间，例如：2023-02-27T23:59:59.999Z
    * condition  condition
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'fromDate' => 'string',
            'toDate' => 'string',
            'condition' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DataobjectSearchCondition'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页大小
    * offset  偏移量
    * sortBy  排序字段：create_time | update_time
    * order  排序方式：DESC | ASC
    * fromDate  搜索开始时间，例如：2023-02-20T00:00:00.000Z
    * toDate  搜索结束时间，例如：2023-02-27T23:59:59.999Z
    * condition  condition
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'order' => null,
        'fromDate' => null,
        'toDate' => null,
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
    * limit  分页大小
    * offset  偏移量
    * sortBy  排序字段：create_time | update_time
    * order  排序方式：DESC | ASC
    * fromDate  搜索开始时间，例如：2023-02-20T00:00:00.000Z
    * toDate  搜索结束时间，例如：2023-02-27T23:59:59.999Z
    * condition  condition
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'fromDate' => 'from_date',
            'toDate' => 'to_date',
            'condition' => 'condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页大小
    * offset  偏移量
    * sortBy  排序字段：create_time | update_time
    * order  排序方式：DESC | ASC
    * fromDate  搜索开始时间，例如：2023-02-20T00:00:00.000Z
    * toDate  搜索结束时间，例如：2023-02-27T23:59:59.999Z
    * condition  condition
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate',
            'condition' => 'setCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页大小
    * offset  偏移量
    * sortBy  排序字段：create_time | update_time
    * order  排序方式：DESC | ASC
    * fromDate  搜索开始时间，例如：2023-02-20T00:00:00.000Z
    * toDate  搜索结束时间，例如：2023-02-27T23:59:59.999Z
    * condition  condition
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate',
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
    const ORDER_DESC = 'DESC';
    const ORDER_ASC = 'ASC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_DESC,
            self::ORDER_ASC,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 9998)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9998.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) > 1000)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) > 1000)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) < 0)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) > 64)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) > 64)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be bigger than or equal to 0.";
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
    *  分页大小
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
    * @param int|null $limit 分页大小
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
    *  偏移量
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
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序字段：create_time | update_time
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序字段：create_time | update_time
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  排序方式：DESC | ASC
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序方式：DESC | ASC
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets fromDate
    *  搜索开始时间，例如：2023-02-20T00:00:00.000Z
    *
    * @return string|null
    */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
    * Sets fromDate
    *
    * @param string|null $fromDate 搜索开始时间，例如：2023-02-20T00:00:00.000Z
    *
    * @return $this
    */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;
        return $this;
    }

    /**
    * Gets toDate
    *  搜索结束时间，例如：2023-02-27T23:59:59.999Z
    *
    * @return string|null
    */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
    * Sets toDate
    *
    * @param string|null $toDate 搜索结束时间，例如：2023-02-27T23:59:59.999Z
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DataobjectSearchCondition|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DataobjectSearchCondition|null $condition condition
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

