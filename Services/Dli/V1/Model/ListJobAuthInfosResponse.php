<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobAuthInfosResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobAuthInfosResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  是否成功
    * message  请求消息
    * count  认证信息个数
    * authInfos  认证信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'count' => 'int',
            'authInfos' => '\HuaweiCloud\SDK\Dli\V1\Model\AuthInfos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  是否成功
    * message  请求消息
    * count  认证信息个数
    * authInfos  认证信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'count' => 'int32',
        'authInfos' => null
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
    * isSuccess  是否成功
    * message  请求消息
    * count  认证信息个数
    * authInfos  认证信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'count' => 'count',
            'authInfos' => 'auth_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  是否成功
    * message  请求消息
    * count  认证信息个数
    * authInfos  认证信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'count' => 'setCount',
            'authInfos' => 'setAuthInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  是否成功
    * message  请求消息
    * count  认证信息个数
    * authInfos  认证信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'count' => 'getCount',
            'authInfos' => 'getAuthInfos'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['authInfos'] = isset($data['authInfos']) ? $data['authInfos'] : null;
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
    * Gets isSuccess
    *  是否成功
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 是否成功
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  请求消息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 请求消息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets count
    *  认证信息个数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 认证信息个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets authInfos
    *  认证信息列表
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\AuthInfos[]|null
    */
    public function getAuthInfos()
    {
        return $this->container['authInfos'];
    }

    /**
    * Sets authInfos
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\AuthInfos[]|null $authInfos 认证信息列表
    *
    * @return $this
    */
    public function setAuthInfos($authInfos)
    {
        $this->container['authInfos'] = $authInfos;
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

