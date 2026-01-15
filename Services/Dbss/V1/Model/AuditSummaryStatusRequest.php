<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditSummaryStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditSummaryStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  操作码，operType为switch时必输入  - on：开启  - off：关闭
    * operType  操作类型  - switch：任务开关  - execute：立即刷新
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'operType' => 'string',
            'queryBeginTime' => 'int',
            'queryEndTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  操作码，operType为switch时必输入  - on：开启  - off：关闭
    * operType  操作类型  - switch：任务开关  - execute：立即刷新
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'operType' => null,
        'queryBeginTime' => 'int64',
        'queryEndTime' => 'int64'
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
    * code  操作码，operType为switch时必输入  - on：开启  - off：关闭
    * operType  操作类型  - switch：任务开关  - execute：立即刷新
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'operType' => 'oper_type',
            'queryBeginTime' => 'query_begin_time',
            'queryEndTime' => 'query_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  操作码，operType为switch时必输入  - on：开启  - off：关闭
    * operType  操作类型  - switch：任务开关  - execute：立即刷新
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'operType' => 'setOperType',
            'queryBeginTime' => 'setQueryBeginTime',
            'queryEndTime' => 'setQueryEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  操作码，operType为switch时必输入  - on：开启  - off：关闭
    * operType  操作类型  - switch：任务开关  - execute：立即刷新
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'operType' => 'getOperType',
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['operType'] = isset($data['operType']) ? $data['operType'] : null;
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
        if ($this->container['operType'] === null) {
            $invalidProperties[] = "'operType' can't be null";
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
    * Gets code
    *  操作码，operType为switch时必输入  - on：开启  - off：关闭
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
    * @param string|null $code 操作码，operType为switch时必输入  - on：开启  - off：关闭
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets operType
    *  操作类型  - switch：任务开关  - execute：立即刷新
    *
    * @return string
    */
    public function getOperType()
    {
        return $this->container['operType'];
    }

    /**
    * Sets operType
    *
    * @param string $operType 操作类型  - switch：任务开关  - execute：立即刷新
    *
    * @return $this
    */
    public function setOperType($operType)
    {
        $this->container['operType'] = $operType;
        return $this;
    }

    /**
    * Gets queryBeginTime
    *  查询条件：开始时间
    *
    * @return int|null
    */
    public function getQueryBeginTime()
    {
        return $this->container['queryBeginTime'];
    }

    /**
    * Sets queryBeginTime
    *
    * @param int|null $queryBeginTime 查询条件：开始时间
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
    *  查询条件：结束时间
    *
    * @return int|null
    */
    public function getQueryEndTime()
    {
        return $this->container['queryEndTime'];
    }

    /**
    * Sets queryEndTime
    *
    * @param int|null $queryEndTime 查询条件：结束时间
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

