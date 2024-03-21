<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAsyncInvocationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAsyncInvocationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * requestId  需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * status  本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * queryBeginTime  搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    * queryEndTime  搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'requestId' => 'string',
            'marker' => 'string',
            'limit' => 'string',
            'status' => 'string',
            'queryBeginTime' => '\DateTime',
            'queryEndTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * requestId  需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * status  本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * queryBeginTime  搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    * queryEndTime  搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'requestId' => null,
        'marker' => null,
        'limit' => null,
        'status' => null,
        'queryBeginTime' => 'date-time',
        'queryEndTime' => 'date-time'
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
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * requestId  需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * status  本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * queryBeginTime  搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    * queryEndTime  搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'requestId' => 'request_id',
            'marker' => 'marker',
            'limit' => 'limit',
            'status' => 'status',
            'queryBeginTime' => 'query_begin_time',
            'queryEndTime' => 'query_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * requestId  需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * status  本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * queryBeginTime  搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    * queryEndTime  搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'requestId' => 'setRequestId',
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'status' => 'setStatus',
            'queryBeginTime' => 'setQueryBeginTime',
            'queryEndTime' => 'setQueryEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * requestId  需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * status  本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * queryBeginTime  搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    * queryEndTime  搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'requestId' => 'getRequestId',
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'status' => 'getStatus',
            'queryBeginTime' => 'getQueryBeginTime',
            'queryEndTime' => 'getQueryEndTime'
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['queryBeginTime'] = isset($data['queryBeginTime']) ? $data['queryBeginTime'] : null;
        $this->container['queryEndTime'] = isset($data['queryEndTime']) ? $data['queryEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
        }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 64)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 1)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 64)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 1)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets functionUrn
    *  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets requestId
    *  需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 需要查询的异步请求ID。如果不指定，默认查询所有异步调用记录
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets marker
    *  本次查询起始位置，默认值0
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 本次查询起始位置，默认值0
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  本次查询最大返回的数据条数，最大值500，默认值100
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
    * @param string|null $limit 本次查询最大返回的数据条数，最大值500，默认值100
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
    *  本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
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
    * @param string|null $status 本次查询指定的异步调用状态，支持5种状态，如果不指定，则查询所有状态的调用记录 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets queryBeginTime
    *  搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    *
    * @return \DateTime|null
    */
    public function getQueryBeginTime()
    {
        return $this->container['queryBeginTime'];
    }

    /**
    * Sets queryBeginTime
    *
    * @param \DateTime|null $queryBeginTime 搜索起始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间前1小时
    *
    * @return $this
    */
    public function setQueryBeginTime($queryBeginTime)
    {
        $this->container['queryBeginTime'] = $queryBeginTime;
        return $this;
    }

    /**
    * Gets queryEndTime
    *  搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @return \DateTime|null
    */
    public function getQueryEndTime()
    {
        return $this->container['queryEndTime'];
    }

    /**
    * Sets queryEndTime
    *
    * @param \DateTime|null $queryEndTime 搜索结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。如果不指定默认为当前时间
    *
    * @return $this
    */
    public function setQueryEndTime($queryEndTime)
    {
        $this->container['queryEndTime'] = $queryEndTime;
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

