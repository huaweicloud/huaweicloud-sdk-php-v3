<?php

namespace HuaweiCloud\SDK\Cts\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckBucketResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckBucketResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorCode  错误码。
    * errorMessage  错误信息。
    * responseCode  返回的http状态码。
    * success  是否成功转储。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'responseCode' => 'int',
            'success' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorCode  错误码。
    * errorMessage  错误信息。
    * responseCode  返回的http状态码。
    * success  是否成功转储。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorCode' => null,
        'errorMessage' => null,
        'responseCode' => 'int32',
        'success' => null
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
    * errorCode  错误码。
    * errorMessage  错误信息。
    * responseCode  返回的http状态码。
    * success  是否成功转储。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'responseCode' => 'response_code',
            'success' => 'success'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorCode  错误码。
    * errorMessage  错误信息。
    * responseCode  返回的http状态码。
    * success  是否成功转储。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'responseCode' => 'setResponseCode',
            'success' => 'setSuccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorCode  错误码。
    * errorMessage  错误信息。
    * responseCode  返回的http状态码。
    * success  是否成功转储。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
            'responseCode' => 'getResponseCode',
            'success' => 'getSuccess'
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
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 15)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 15)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 2048)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['responseCode']) && ($this->container['responseCode'] >= 1000)) {
                $invalidProperties[] = "invalid value for 'responseCode', must be smaller than 1000.";
            }
            if (!is_null($this->container['responseCode']) && ($this->container['responseCode'] <= 0)) {
                $invalidProperties[] = "invalid value for 'responseCode', must be bigger than 0.";
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
    * Gets errorCode
    *  错误码。
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
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets responseCode
    *  返回的http状态码。
    *
    * @return int|null
    */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
    * Sets responseCode
    *
    * @param int|null $responseCode 返回的http状态码。
    *
    * @return $this
    */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;
        return $this;
    }

    /**
    * Gets success
    *  是否成功转储。
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
    * @param bool|null $success 是否成功转储。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
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

