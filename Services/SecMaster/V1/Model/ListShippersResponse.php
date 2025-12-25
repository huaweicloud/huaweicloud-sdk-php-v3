<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListShippersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListShippersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  错误码，0表示成功，其他值表示错误
    * data  data
    * msg  返回的状态信息，用于描述当前请求的结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'int',
            'data' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ApiResponseData',
            'msg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  错误码，0表示成功，其他值表示错误
    * data  data
    * msg  返回的状态信息，用于描述当前请求的结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'data' => null,
        'msg' => null
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
    * code  错误码，0表示成功，其他值表示错误
    * data  data
    * msg  返回的状态信息，用于描述当前请求的结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'data' => 'data',
            'msg' => 'msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  错误码，0表示成功，其他值表示错误
    * data  data
    * msg  返回的状态信息，用于描述当前请求的结果
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'data' => 'setData',
            'msg' => 'setMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  错误码，0表示成功，其他值表示错误
    * data  data
    * msg  返回的状态信息，用于描述当前请求的结果
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'data' => 'getData',
            'msg' => 'getMsg'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
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
    *  错误码，0表示成功，其他值表示错误
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
    * @param int|null $code 错误码，0表示成功，其他值表示错误
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ApiResponseData|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ApiResponseData|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets msg
    *  返回的状态信息，用于描述当前请求的结果
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
    * @param string|null $msg 返回的状态信息，用于描述当前请求的结果
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
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

