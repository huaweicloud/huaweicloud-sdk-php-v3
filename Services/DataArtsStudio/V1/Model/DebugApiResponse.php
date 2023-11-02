<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DebugApiResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DebugApiResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求编号
    * url  请求url
    * result  调试结果
    * timeout  调试耗时
    * success  是否调试成功
    * requestHeader  requestHeader
    * responseHeader  responseHeader
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'url' => 'string',
            'result' => 'string',
            'timeout' => 'int',
            'success' => 'bool',
            'requestHeader' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestRequestHeader',
            'responseHeader' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestResponseHeader'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求编号
    * url  请求url
    * result  调试结果
    * timeout  调试耗时
    * success  是否调试成功
    * requestHeader  requestHeader
    * responseHeader  responseHeader
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'url' => null,
        'result' => null,
        'timeout' => 'int64',
        'success' => null,
        'requestHeader' => null,
        'responseHeader' => null
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
    * requestId  请求编号
    * url  请求url
    * result  调试结果
    * timeout  调试耗时
    * success  是否调试成功
    * requestHeader  requestHeader
    * responseHeader  responseHeader
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'url' => 'url',
            'result' => 'result',
            'timeout' => 'timeout',
            'success' => 'success',
            'requestHeader' => 'request_header',
            'responseHeader' => 'response_header'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求编号
    * url  请求url
    * result  调试结果
    * timeout  调试耗时
    * success  是否调试成功
    * requestHeader  requestHeader
    * responseHeader  responseHeader
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'url' => 'setUrl',
            'result' => 'setResult',
            'timeout' => 'setTimeout',
            'success' => 'setSuccess',
            'requestHeader' => 'setRequestHeader',
            'responseHeader' => 'setResponseHeader'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求编号
    * url  请求url
    * result  调试结果
    * timeout  调试耗时
    * success  是否调试成功
    * requestHeader  requestHeader
    * responseHeader  responseHeader
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'url' => 'getUrl',
            'result' => 'getResult',
            'timeout' => 'getTimeout',
            'success' => 'getSuccess',
            'requestHeader' => 'getRequestHeader',
            'responseHeader' => 'getResponseHeader'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['requestHeader'] = isset($data['requestHeader']) ? $data['requestHeader'] : null;
        $this->container['responseHeader'] = isset($data['responseHeader']) ? $data['responseHeader'] : null;
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
    * Gets requestId
    *  请求编号
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
    * @param string|null $requestId 请求编号
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets url
    *  请求url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 请求url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets result
    *  调试结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 调试结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets timeout
    *  调试耗时
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 调试耗时
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets success
    *  是否调试成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否调试成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets requestHeader
    *  requestHeader
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestRequestHeader|null
    */
    public function getRequestHeader()
    {
        return $this->container['requestHeader'];
    }

    /**
    * Sets requestHeader
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestRequestHeader|null $requestHeader requestHeader
    *
    * @return $this
    */
    public function setRequestHeader($requestHeader)
    {
        $this->container['requestHeader'] = $requestHeader;
        return $this;
    }

    /**
    * Gets responseHeader
    *  responseHeader
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestResponseHeader|null
    */
    public function getResponseHeader()
    {
        return $this->container['responseHeader'];
    }

    /**
    * Sets responseHeader
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiTestResponseHeader|null $responseHeader responseHeader
    *
    * @return $this
    */
    public function setResponseHeader($responseHeader)
    {
        $this->container['responseHeader'] = $responseHeader;
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

