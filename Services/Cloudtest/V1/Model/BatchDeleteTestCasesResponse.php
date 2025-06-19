<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteTestCasesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteTestCasesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  success|error
    * result  result
    * error  error
    * requestId  由接口调用方传入，建议使用UUID保证请求的唯一性。
    * serverAddress  对内接口才有此属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ResultValueString',
            'error' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ApiError',
            'requestId' => 'string',
            'serverAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  success|error
    * result  result
    * error  error
    * requestId  由接口调用方传入，建议使用UUID保证请求的唯一性。
    * serverAddress  对内接口才有此属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'result' => null,
        'error' => null,
        'requestId' => null,
        'serverAddress' => null
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
    * status  success|error
    * result  result
    * error  error
    * requestId  由接口调用方传入，建议使用UUID保证请求的唯一性。
    * serverAddress  对内接口才有此属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'result' => 'result',
            'error' => 'error',
            'requestId' => 'request_id',
            'serverAddress' => 'server_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  success|error
    * result  result
    * error  error
    * requestId  由接口调用方传入，建议使用UUID保证请求的唯一性。
    * serverAddress  对内接口才有此属性
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'result' => 'setResult',
            'error' => 'setError',
            'requestId' => 'setRequestId',
            'serverAddress' => 'setServerAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  success|error
    * result  result
    * error  error
    * requestId  由接口调用方传入，建议使用UUID保证请求的唯一性。
    * serverAddress  对内接口才有此属性
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'result' => 'getResult',
            'error' => 'getError',
            'requestId' => 'getRequestId',
            'serverAddress' => 'getServerAddress'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['serverAddress'] = isset($data['serverAddress']) ? $data['serverAddress'] : null;
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
    * Gets status
    *  success|error
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
    * @param string|null $status success|error
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ResultValueString|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ResultValueString|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ApiError|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ApiError|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets requestId
    *  由接口调用方传入，建议使用UUID保证请求的唯一性。
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
    * @param string|null $requestId 由接口调用方传入，建议使用UUID保证请求的唯一性。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets serverAddress
    *  对内接口才有此属性
    *
    * @return string|null
    */
    public function getServerAddress()
    {
        return $this->container['serverAddress'];
    }

    /**
    * Sets serverAddress
    *
    * @param string|null $serverAddress 对内接口才有此属性
    *
    * @return $this
    */
    public function setServerAddress($serverAddress)
    {
        $this->container['serverAddress'] = $serverAddress;
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

