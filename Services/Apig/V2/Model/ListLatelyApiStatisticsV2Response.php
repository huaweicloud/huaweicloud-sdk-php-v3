<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLatelyApiStatisticsV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLatelyApiStatisticsV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  响应码
    * msg  返回消息
    * startTime  开始时间的UTC的时间戳
    * endTime  截止时间的UTC的时间戳
    * list  统计指标的数据结构结构体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'msg' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'list' => '\HuaweiCloud\SDK\Apig\V2\Model\StatisticsAPI[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  响应码
    * msg  返回消息
    * startTime  开始时间的UTC的时间戳
    * endTime  截止时间的UTC的时间戳
    * list  统计指标的数据结构结构体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'msg' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'list' => null
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
    * code  响应码
    * msg  返回消息
    * startTime  开始时间的UTC的时间戳
    * endTime  截止时间的UTC的时间戳
    * list  统计指标的数据结构结构体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'msg' => 'msg',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'list' => 'list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  响应码
    * msg  返回消息
    * startTime  开始时间的UTC的时间戳
    * endTime  截止时间的UTC的时间戳
    * list  统计指标的数据结构结构体
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'msg' => 'setMsg',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'list' => 'setList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  响应码
    * msg  返回消息
    * startTime  开始时间的UTC的时间戳
    * endTime  截止时间的UTC的时间戳
    * list  统计指标的数据结构结构体
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'msg' => 'getMsg',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'list' => 'getList'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
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
    * Gets code
    *  响应码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 响应码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets msg
    *  返回消息
    *
    * @return string|null
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string|null $msg 返回消息
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间的UTC的时间戳
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
    * @param int|null $startTime 开始时间的UTC的时间戳
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
    *  截止时间的UTC的时间戳
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
    * @param int|null $endTime 截止时间的UTC的时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets list
    *  统计指标的数据结构结构体
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\StatisticsAPI[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\StatisticsAPI[]|null $list 统计指标的数据结构结构体
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
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

