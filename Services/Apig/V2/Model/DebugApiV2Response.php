<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DebugApiV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DebugApiV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * request  调试请求报文内容
    * response  调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    * latency  调试耗时，单位：毫秒
    * log  调试过程日志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'request' => 'string',
            'response' => 'string',
            'latency' => 'int',
            'log' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * request  调试请求报文内容
    * response  调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    * latency  调试耗时，单位：毫秒
    * log  调试过程日志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'request' => null,
        'response' => null,
        'latency' => 'int32',
        'log' => null
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
    * request  调试请求报文内容
    * response  调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    * latency  调试耗时，单位：毫秒
    * log  调试过程日志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'request' => 'request',
            'response' => 'response',
            'latency' => 'latency',
            'log' => 'log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * request  调试请求报文内容
    * response  调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    * latency  调试耗时，单位：毫秒
    * log  调试过程日志
    *
    * @var string[]
    */
    protected static $setters = [
            'request' => 'setRequest',
            'response' => 'setResponse',
            'latency' => 'setLatency',
            'log' => 'setLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * request  调试请求报文内容
    * response  调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    * latency  调试耗时，单位：毫秒
    * log  调试过程日志
    *
    * @var string[]
    */
    protected static $getters = [
            'request' => 'getRequest',
            'response' => 'getResponse',
            'latency' => 'getLatency',
            'log' => 'getLog'
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
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
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
    * Gets request
    *  调试请求报文内容
    *
    * @return string|null
    */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
    * Sets request
    *
    * @param string|null $request 调试请求报文内容
    *
    * @return $this
    */
    public function setRequest($request)
    {
        $this->container['request'] = $request;
        return $this;
    }

    /**
    * Gets response
    *  调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    *
    * @return string|null
    */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
    * Sets response
    *
    * @param string|null $response 调试响应报文内容，响应消息体最大支持2097152字节，超过部分会被截断 > 响应消息体超过限制长度时，超过部分会被截断，并追加\"[TRUNCATED]\"信息。
    *
    * @return $this
    */
    public function setResponse($response)
    {
        $this->container['response'] = $response;
        return $this;
    }

    /**
    * Gets latency
    *  调试耗时，单位：毫秒
    *
    * @return int|null
    */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
    * Sets latency
    *
    * @param int|null $latency 调试耗时，单位：毫秒
    *
    * @return $this
    */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;
        return $this;
    }

    /**
    * Gets log
    *  调试过程日志
    *
    * @return string|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string|null $log 调试过程日志
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
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

