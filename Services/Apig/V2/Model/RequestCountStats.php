<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestCountStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestCountStats';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reqCount' => 'int',
            'reqCount2xx' => 'int',
            'reqCount4xx' => 'int',
            'reqCount5xx' => 'int',
            'reqCountError' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reqCount' => 'int32',
        'reqCount2xx' => 'int32',
        'reqCount4xx' => 'int32',
        'reqCount5xx' => 'int32',
        'reqCountError' => 'int32'
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
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reqCount' => 'req_count',
            'reqCount2xx' => 'req_count2xx',
            'reqCount4xx' => 'req_count4xx',
            'reqCount5xx' => 'req_count5xx',
            'reqCountError' => 'req_count_error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    *
    * @var string[]
    */
    protected static $setters = [
            'reqCount' => 'setReqCount',
            'reqCount2xx' => 'setReqCount2xx',
            'reqCount4xx' => 'setReqCount4xx',
            'reqCount5xx' => 'setReqCount5xx',
            'reqCountError' => 'setReqCountError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    *
    * @var string[]
    */
    protected static $getters = [
            'reqCount' => 'getReqCount',
            'reqCount2xx' => 'getReqCount2xx',
            'reqCount4xx' => 'getReqCount4xx',
            'reqCount5xx' => 'getReqCount5xx',
            'reqCountError' => 'getReqCountError'
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
        $this->container['reqCount'] = isset($data['reqCount']) ? $data['reqCount'] : null;
        $this->container['reqCount2xx'] = isset($data['reqCount2xx']) ? $data['reqCount2xx'] : null;
        $this->container['reqCount4xx'] = isset($data['reqCount4xx']) ? $data['reqCount4xx'] : null;
        $this->container['reqCount5xx'] = isset($data['reqCount5xx']) ? $data['reqCount5xx'] : null;
        $this->container['reqCountError'] = isset($data['reqCountError']) ? $data['reqCountError'] : null;
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
    * Gets reqCount
    *  请求总次数
    *
    * @return int|null
    */
    public function getReqCount()
    {
        return $this->container['reqCount'];
    }

    /**
    * Sets reqCount
    *
    * @param int|null $reqCount 请求总次数
    *
    * @return $this
    */
    public function setReqCount($reqCount)
    {
        $this->container['reqCount'] = $reqCount;
        return $this;
    }

    /**
    * Gets reqCount2xx
    *  2xx响应码总次数
    *
    * @return int|null
    */
    public function getReqCount2xx()
    {
        return $this->container['reqCount2xx'];
    }

    /**
    * Sets reqCount2xx
    *
    * @param int|null $reqCount2xx 2xx响应码总次数
    *
    * @return $this
    */
    public function setReqCount2xx($reqCount2xx)
    {
        $this->container['reqCount2xx'] = $reqCount2xx;
        return $this;
    }

    /**
    * Gets reqCount4xx
    *  4xx响应码总次数
    *
    * @return int|null
    */
    public function getReqCount4xx()
    {
        return $this->container['reqCount4xx'];
    }

    /**
    * Sets reqCount4xx
    *
    * @param int|null $reqCount4xx 4xx响应码总次数
    *
    * @return $this
    */
    public function setReqCount4xx($reqCount4xx)
    {
        $this->container['reqCount4xx'] = $reqCount4xx;
        return $this;
    }

    /**
    * Gets reqCount5xx
    *  5xx响应码总次数
    *
    * @return int|null
    */
    public function getReqCount5xx()
    {
        return $this->container['reqCount5xx'];
    }

    /**
    * Sets reqCount5xx
    *
    * @param int|null $reqCount5xx 5xx响应码总次数
    *
    * @return $this
    */
    public function setReqCount5xx($reqCount5xx)
    {
        $this->container['reqCount5xx'] = $reqCount5xx;
        return $this;
    }

    /**
    * Gets reqCountError
    *  错误次数
    *
    * @return int|null
    */
    public function getReqCountError()
    {
        return $this->container['reqCountError'];
    }

    /**
    * Sets reqCountError
    *
    * @param int|null $reqCountError 错误次数
    *
    * @return $this
    */
    public function setReqCountError($reqCountError)
    {
        $this->container['reqCountError'] = $reqCountError;
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

