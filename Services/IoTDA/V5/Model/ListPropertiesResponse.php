<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPropertiesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPropertiesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
    * response  设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    * errorCode  属性查询异常错误码。
    * errorMsg  属性查询异常错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'response' => 'object',
            'errorCode' => 'string',
            'errorMsg' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
    * response  设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    * errorCode  属性查询异常错误码。
    * errorMsg  属性查询异常错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'response' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * requestId  设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
    * response  设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    * errorCode  属性查询异常错误码。
    * errorMsg  属性查询异常错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'response' => 'response',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
    * response  设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    * errorCode  属性查询异常错误码。
    * errorMsg  属性查询异常错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'response' => 'setResponse',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
    * response  设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    * errorCode  属性查询异常错误码。
    * errorMsg  属性查询异常错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'response' => 'getResponse',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    *  设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
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
    * @param string|null $requestId 设备属性查询ID，用于唯一标识一条属性查询，在下发查询属性时由物联网平台分配获得。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets response
    *  设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    *
    * @return object|null
    */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
    * Sets response
    *
    * @param object|null $response 设备上报的属性执行结果。Json格式，具体格式需要应用和设备约定。
    *
    * @return $this
    */
    public function setResponse($response)
    {
        $this->container['response'] = $response;
        return $this;
    }

    /**
    * Gets errorCode
    *  属性查询异常错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 属性查询异常错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  属性查询异常错误信息。
    *
    * @return object|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param object|null $errorMsg 属性查询异常错误信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

