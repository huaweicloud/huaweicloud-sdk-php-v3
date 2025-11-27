<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccessControlTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccessControlTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
    * endTime  查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    * offset  偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
    * limit  单次查询数据条数，上限为10000，默认为10。
    * status  任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
    * endTime  查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    * offset  偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
    * limit  单次查询数据条数，上限为10000，默认为10。
    * status  任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'offset' => null,
        'limit' => null,
        'status' => null
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
    * startTime  查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
    * endTime  查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    * offset  偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
    * limit  单次查询数据条数，上限为10000，默认为10。
    * status  任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
    * endTime  查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    * offset  偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
    * limit  单次查询数据条数，上限为10000，默认为10。
    * status  任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
    * endTime  查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    * offset  偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
    * limit  单次查询数据条数，上限为10000，默认为10。
    * status  任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'status' => 'getStatus'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets startTime
    *  查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询起始时间戳（毫秒），不传默认为当前时间，需与结束时间戳同时指定，时间跨度不能超过7天。
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
    *  查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 查询结束时间戳（毫秒），不传默认3天前，需与开始时间戳同时指定，时间跨度不能超过7天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
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
    * @param int|null $offset 偏移量：特定数据字段与起始数据字段位置的距离，默认为0。
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
    *  单次查询数据条数，上限为10000，默认为10。
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
    * @param int|null $limit 单次查询数据条数，上限为10000，默认为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务状态，状态类型：processing：处理中；succeed：完成；failed：失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

