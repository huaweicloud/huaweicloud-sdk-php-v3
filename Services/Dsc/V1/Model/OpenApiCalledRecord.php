<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenApiCalledRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenApiCalledRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  调用API的user_name
    * userId  调用API的user_id
    * domainName  调用API的domain_name
    * domainId  调用API的domain_id
    * requestUrl  调用API的URL
    * requestMethod  http请求方法
    * responseCode  http状态码
    * failReason  调用API失败原因
    * timestamp  调用API的时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'userId' => 'string',
            'domainName' => 'string',
            'domainId' => 'string',
            'requestUrl' => 'string',
            'requestMethod' => 'string',
            'responseCode' => 'string',
            'failReason' => 'string',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  调用API的user_name
    * userId  调用API的user_id
    * domainName  调用API的domain_name
    * domainId  调用API的domain_id
    * requestUrl  调用API的URL
    * requestMethod  http请求方法
    * responseCode  http状态码
    * failReason  调用API失败原因
    * timestamp  调用API的时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'userId' => null,
        'domainName' => null,
        'domainId' => null,
        'requestUrl' => null,
        'requestMethod' => null,
        'responseCode' => null,
        'failReason' => null,
        'timestamp' => 'int64'
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
    * userName  调用API的user_name
    * userId  调用API的user_id
    * domainName  调用API的domain_name
    * domainId  调用API的domain_id
    * requestUrl  调用API的URL
    * requestMethod  http请求方法
    * responseCode  http状态码
    * failReason  调用API失败原因
    * timestamp  调用API的时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'userId' => 'user_id',
            'domainName' => 'domain_name',
            'domainId' => 'domain_id',
            'requestUrl' => 'request_url',
            'requestMethod' => 'request_method',
            'responseCode' => 'response_code',
            'failReason' => 'fail_reason',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  调用API的user_name
    * userId  调用API的user_id
    * domainName  调用API的domain_name
    * domainId  调用API的domain_id
    * requestUrl  调用API的URL
    * requestMethod  http请求方法
    * responseCode  http状态码
    * failReason  调用API失败原因
    * timestamp  调用API的时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'userId' => 'setUserId',
            'domainName' => 'setDomainName',
            'domainId' => 'setDomainId',
            'requestUrl' => 'setRequestUrl',
            'requestMethod' => 'setRequestMethod',
            'responseCode' => 'setResponseCode',
            'failReason' => 'setFailReason',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  调用API的user_name
    * userId  调用API的user_id
    * domainName  调用API的domain_name
    * domainId  调用API的domain_id
    * requestUrl  调用API的URL
    * requestMethod  http请求方法
    * responseCode  http状态码
    * failReason  调用API失败原因
    * timestamp  调用API的时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'userId' => 'getUserId',
            'domainName' => 'getDomainName',
            'domainId' => 'getDomainId',
            'requestUrl' => 'getRequestUrl',
            'requestMethod' => 'getRequestMethod',
            'responseCode' => 'getResponseCode',
            'failReason' => 'getFailReason',
            'timestamp' => 'getTimestamp'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['requestUrl'] = isset($data['requestUrl']) ? $data['requestUrl'] : null;
        $this->container['requestMethod'] = isset($data['requestMethod']) ? $data['requestMethod'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
    * Gets userName
    *  调用API的user_name
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
    * @param string|null $userName 调用API的user_name
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userId
    *  调用API的user_id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 调用API的user_id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets domainName
    *  调用API的domain_name
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 调用API的domain_name
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets domainId
    *  调用API的domain_id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 调用API的domain_id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets requestUrl
    *  调用API的URL
    *
    * @return string|null
    */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
    * Sets requestUrl
    *
    * @param string|null $requestUrl 调用API的URL
    *
    * @return $this
    */
    public function setRequestUrl($requestUrl)
    {
        $this->container['requestUrl'] = $requestUrl;
        return $this;
    }

    /**
    * Gets requestMethod
    *  http请求方法
    *
    * @return string|null
    */
    public function getRequestMethod()
    {
        return $this->container['requestMethod'];
    }

    /**
    * Sets requestMethod
    *
    * @param string|null $requestMethod http请求方法
    *
    * @return $this
    */
    public function setRequestMethod($requestMethod)
    {
        $this->container['requestMethod'] = $requestMethod;
        return $this;
    }

    /**
    * Gets responseCode
    *  http状态码
    *
    * @return string|null
    */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
    * Sets responseCode
    *
    * @param string|null $responseCode http状态码
    *
    * @return $this
    */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;
        return $this;
    }

    /**
    * Gets failReason
    *  调用API失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 调用API失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets timestamp
    *  调用API的时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 调用API的时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

