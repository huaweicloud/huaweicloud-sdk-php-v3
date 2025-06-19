<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBasicAwResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBasicAwResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  错误码
    * error  error
    * reason  失败原因
    * result  result
    * status  状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'error' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CommonResponseErrorOfAPITest',
            'reason' => 'string',
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAwRes',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  错误码
    * error  error
    * reason  失败原因
    * result  result
    * status  状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'error' => null,
        'reason' => null,
        'result' => null,
        'status' => null
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
    * code  错误码
    * error  error
    * reason  失败原因
    * result  result
    * status  状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'error' => 'error',
            'reason' => 'reason',
            'result' => 'result',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  错误码
    * error  error
    * reason  失败原因
    * result  result
    * status  状态
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'error' => 'setError',
            'reason' => 'setReason',
            'result' => 'setResult',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  错误码
    * error  error
    * reason  失败原因
    * result  result
    * status  状态
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'error' => 'getError',
            'reason' => 'getReason',
            'result' => 'getResult',
            'status' => 'getStatus'
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  错误码
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
    * @param string|null $code 错误码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonResponseErrorOfAPITest|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonResponseErrorOfAPITest|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets reason
    *  失败原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 失败原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAwRes|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAwRes|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

