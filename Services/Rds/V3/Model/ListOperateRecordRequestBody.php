<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOperateRecordRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOperateRecordRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  查询开始时间，格式为毫秒级时间戳。
    * endTime  查询结束时间，格式为毫秒级时间戳。
    * operateType  操作类型
    * userName  用户名称
    * level  事件等级
    * offset  查询偏移量，默认为0。
    * limit  查询数量，默认为10。
    * sort  排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
    * order  排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'operateType' => 'string',
            'userName' => 'string',
            'level' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'sort' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  查询开始时间，格式为毫秒级时间戳。
    * endTime  查询结束时间，格式为毫秒级时间戳。
    * operateType  操作类型
    * userName  用户名称
    * level  事件等级
    * offset  查询偏移量，默认为0。
    * limit  查询数量，默认为10。
    * sort  排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
    * order  排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'operateType' => null,
        'userName' => null,
        'level' => null,
        'offset' => null,
        'limit' => null,
        'sort' => null,
        'order' => null
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
    * startTime  查询开始时间，格式为毫秒级时间戳。
    * endTime  查询结束时间，格式为毫秒级时间戳。
    * operateType  操作类型
    * userName  用户名称
    * level  事件等级
    * offset  查询偏移量，默认为0。
    * limit  查询数量，默认为10。
    * sort  排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
    * order  排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'operateType' => 'operate_type',
            'userName' => 'user_name',
            'level' => 'level',
            'offset' => 'offset',
            'limit' => 'limit',
            'sort' => 'sort',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  查询开始时间，格式为毫秒级时间戳。
    * endTime  查询结束时间，格式为毫秒级时间戳。
    * operateType  操作类型
    * userName  用户名称
    * level  事件等级
    * offset  查询偏移量，默认为0。
    * limit  查询数量，默认为10。
    * sort  排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
    * order  排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'operateType' => 'setOperateType',
            'userName' => 'setUserName',
            'level' => 'setLevel',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sort' => 'setSort',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  查询开始时间，格式为毫秒级时间戳。
    * endTime  查询结束时间，格式为毫秒级时间戳。
    * operateType  操作类型
    * userName  用户名称
    * level  事件等级
    * offset  查询偏移量，默认为0。
    * limit  查询数量，默认为10。
    * sort  排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
    * order  排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'operateType' => 'getOperateType',
            'userName' => 'getUserName',
            'level' => 'getLevel',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sort' => 'getSort',
            'order' => 'getOrder'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) > 36)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) < 0)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 36)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 36)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && (mb_strlen($this->container['offset']) > 1000)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && (mb_strlen($this->container['offset']) < 0)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 0)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sort']) && (mb_strlen($this->container['sort']) > 36)) {
                $invalidProperties[] = "invalid value for 'sort', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sort']) && (mb_strlen($this->container['sort']) < 0)) {
                $invalidProperties[] = "invalid value for 'sort', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) > 36)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) < 0)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be bigger than or equal to 0.";
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
    * Gets startTime
    *  查询开始时间，格式为毫秒级时间戳。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 查询开始时间，格式为毫秒级时间戳。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间，格式为毫秒级时间戳。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 查询结束时间，格式为毫秒级时间戳。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 操作类型
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets level
    *  事件等级
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 事件等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量，默认为0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 查询偏移量，默认为0。
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
    *  查询数量，默认为10。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询数量，默认为10。
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
    *  排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
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
    * @param string|null $sort 排序字段，默认为operate_time。取值范围：operate_type、user_name、operate_time、level。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets order
    *  排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
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
    * @param string|null $order 排序方式，默认为desc（倒序）。取值范围：desc（倒序）、asc（正序）。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

