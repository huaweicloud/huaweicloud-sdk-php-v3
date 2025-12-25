<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始。
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始。
    * sortBy  排序字段
    * order  升序/降序
    * fromDate  搜索起始时间
    * toDate  搜索结束时间
    * warRoomId  评论的对象ID
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
            'warRoomId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始。
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始。
    * sortBy  排序字段
    * order  升序/降序
    * fromDate  搜索起始时间
    * toDate  搜索结束时间
    * warRoomId  评论的对象ID
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
        'warRoomId' => null
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
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始。
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始。
    * sortBy  排序字段
    * order  升序/降序
    * fromDate  搜索起始时间
    * toDate  搜索结束时间
    * warRoomId  评论的对象ID
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
            'warRoomId' => 'war_room_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始。
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始。
    * sortBy  排序字段
    * order  升序/降序
    * fromDate  搜索起始时间
    * toDate  搜索结束时间
    * warRoomId  评论的对象ID
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
            'warRoomId' => 'setWarRoomId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始。
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始。
    * sortBy  排序字段
    * order  升序/降序
    * fromDate  搜索起始时间
    * toDate  搜索结束时间
    * warRoomId  评论的对象ID
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
            'warRoomId' => 'getWarRoomId'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['warRoomId'] = isset($data['warRoomId']) ? $data['warRoomId'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) > 8)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be smaller than or equal to 8.";
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
            if (!is_null($this->container['warRoomId']) && (mb_strlen($this->container['warRoomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'warRoomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['warRoomId']) && (mb_strlen($this->container['warRoomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'warRoomId', the character length must be bigger than or equal to 0.";
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
    *  分页查询参数，用于指定一次查询最多的结果数，从1开始。
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
    * @param int|null $limit 分页查询参数，用于指定一次查询最多的结果数，从1开始。
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
    *  分页查询参数。用于指定查询结果的起始位置，从0开始。
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
    * @param int|null $offset 分页查询参数。用于指定查询结果的起始位置，从0开始。
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
    *  排序字段
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
    * @param string|null $sortBy 排序字段
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
    *  升序/降序
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
    * @param string|null $order 升序/降序
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
    *  搜索起始时间
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
    * @param string|null $fromDate 搜索起始时间
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
    *  搜索结束时间
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
    * @param string|null $toDate 搜索结束时间
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
        return $this;
    }

    /**
    * Gets warRoomId
    *  评论的对象ID
    *
    * @return string|null
    */
    public function getWarRoomId()
    {
        return $this->container['warRoomId'];
    }

    /**
    * Sets warRoomId
    *
    * @param string|null $warRoomId 评论的对象ID
    *
    * @return $this
    */
    public function setWarRoomId($warRoomId)
    {
        $this->container['warRoomId'] = $warRoomId;
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

