<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAuthorizableTicketsExternalResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAuthorizableTicketsExternalResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerCode  服务标识
    * errorCode  请求响应代码，范围：0000~9999，正常时取值：0
    * errorMsg  请求响应描述
    * data  可授权单信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerCode' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'data' => '\HuaweiCloud\SDK\Coc\V1\Model\AuthorizeTicketInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerCode  服务标识
    * errorCode  请求响应代码，范围：0000~9999，正常时取值：0
    * errorMsg  请求响应描述
    * data  可授权单信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerCode' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'data' => null
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
    * providerCode  服务标识
    * errorCode  请求响应代码，范围：0000~9999，正常时取值：0
    * errorMsg  请求响应描述
    * data  可授权单信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerCode' => 'provider_code',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerCode  服务标识
    * errorCode  请求响应代码，范围：0000~9999，正常时取值：0
    * errorMsg  请求响应描述
    * data  可授权单信息
    *
    * @var string[]
    */
    protected static $setters = [
            'providerCode' => 'setProviderCode',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerCode  服务标识
    * errorCode  请求响应代码，范围：0000~9999，正常时取值：0
    * errorMsg  请求响应描述
    * data  可授权单信息
    *
    * @var string[]
    */
    protected static $getters = [
            'providerCode' => 'getProviderCode',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'data' => 'getData'
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
        $this->container['providerCode'] = isset($data['providerCode']) ? $data['providerCode'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['providerCode'] === null) {
            $invalidProperties[] = "'providerCode' can't be null";
        }
            if ((mb_strlen($this->container['providerCode']) > 3)) {
                $invalidProperties[] = "invalid value for 'providerCode', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['providerCode']) < 3)) {
                $invalidProperties[] = "invalid value for 'providerCode', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['errorCode'] === null) {
            $invalidProperties[] = "'errorCode' can't be null";
        }
            if ((mb_strlen($this->container['errorCode']) > 20)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['errorCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 10240)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
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
    * Gets providerCode
    *  服务标识
    *
    * @return string
    */
    public function getProviderCode()
    {
        return $this->container['providerCode'];
    }

    /**
    * Sets providerCode
    *
    * @param string $providerCode 服务标识
    *
    * @return $this
    */
    public function setProviderCode($providerCode)
    {
        $this->container['providerCode'] = $providerCode;
        return $this;
    }

    /**
    * Gets errorCode
    *  请求响应代码，范围：0000~9999，正常时取值：0
    *
    * @return string
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string $errorCode 请求响应代码，范围：0000~9999，正常时取值：0
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
    *  请求响应描述
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 请求响应描述
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets data
    *  可授权单信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\AuthorizeTicketInfo[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\AuthorizeTicketInfo[]|null $data 可授权单信息
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

