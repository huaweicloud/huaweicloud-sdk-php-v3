<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndicatorListSearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndicatorListSearchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  指标ID列表
    * name  指标名称
    * dataclassId  数据类ID
    * condition  condition
    * offset  request offset, from 0
    * limit  request limit size
    * sortBy  sort by property, create_time.
    * fromDate  查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
    * toDate  查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'string[]',
            'name' => 'string',
            'dataclassId' => 'string',
            'condition' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataobjectSearchCondition',
            'offset' => 'int',
            'limit' => 'int',
            'sortBy' => 'string',
            'fromDate' => 'string',
            'toDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  指标ID列表
    * name  指标名称
    * dataclassId  数据类ID
    * condition  condition
    * offset  request offset, from 0
    * limit  request limit size
    * sortBy  sort by property, create_time.
    * fromDate  查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
    * toDate  查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => null,
        'name' => null,
        'dataclassId' => null,
        'condition' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sortBy' => null,
        'fromDate' => null,
        'toDate' => null
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
    * ids  指标ID列表
    * name  指标名称
    * dataclassId  数据类ID
    * condition  condition
    * offset  request offset, from 0
    * limit  request limit size
    * sortBy  sort by property, create_time.
    * fromDate  查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
    * toDate  查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'name' => 'name',
            'dataclassId' => 'dataclass_id',
            'condition' => 'condition',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortBy' => 'sort_by',
            'fromDate' => 'from_date',
            'toDate' => 'to_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  指标ID列表
    * name  指标名称
    * dataclassId  数据类ID
    * condition  condition
    * offset  request offset, from 0
    * limit  request limit size
    * sortBy  sort by property, create_time.
    * fromDate  查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
    * toDate  查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'name' => 'setName',
            'dataclassId' => 'setDataclassId',
            'condition' => 'setCondition',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortBy' => 'setSortBy',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  指标ID列表
    * name  指标名称
    * dataclassId  数据类ID
    * condition  condition
    * offset  request offset, from 0
    * limit  request limit size
    * sortBy  sort by property, create_time.
    * fromDate  查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
    * toDate  查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'name' => 'getName',
            'dataclassId' => 'getDataclassId',
            'condition' => 'getCondition',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortBy' => 'getSortBy',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate'
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 999999)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 999999.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be bigger than or equal to 1.";
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
    * Gets ids
    *  指标ID列表
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids 指标ID列表
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets name
    *  指标名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 指标名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类ID
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 数据类ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataobjectSearchCondition
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataobjectSearchCondition $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets offset
    *  request offset, from 0
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
    * @param int $offset request offset, from 0
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
    *  request limit size
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
    * @param int $limit request limit size
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortBy
    *  sort by property, create_time.
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
    * @param string|null $sortBy sort by property, create_time.
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets fromDate
    *  查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
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
    * @param string|null $fromDate 查询起始时间，例如：2024-01-20T00:00:00.000Z+0800
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
    *  查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
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
    * @param string|null $toDate 查询截止时间，例如：2024-01-26T23:59:59.999Z+0800
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
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

