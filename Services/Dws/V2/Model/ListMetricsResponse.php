<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  响应码
    * msg  响应信息
    * data  指标列表。
    * count  总列表大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'int',
            'msg' => 'string',
            'data' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterMetric[]',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  响应码
    * msg  响应信息
    * data  指标列表。
    * count  总列表大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => 'int32',
        'msg' => null,
        'data' => null,
        'count' => 'int64'
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
    * msg  响应信息
    * data  指标列表。
    * count  总列表大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'msg' => 'msg',
            'data' => 'data',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  响应码
    * msg  响应信息
    * data  指标列表。
    * count  总列表大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'msg' => 'setMsg',
            'data' => 'setData',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  响应码
    * msg  响应信息
    * data  指标列表。
    * count  总列表大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'msg' => 'getMsg',
            'data' => 'getData',
            'count' => 'getCount'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * @return int|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param int|null $code 响应码
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
    *  响应信息
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
    * @param string|null $msg 响应信息
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
        return $this;
    }

    /**
    * Gets data
    *  指标列表。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterMetric[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterMetric[]|null $data 指标列表。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets count
    *  总列表大小。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总列表大小。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

