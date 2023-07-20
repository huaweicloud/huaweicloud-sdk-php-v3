<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueueUsersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueueUsersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueName  队列名称。
    * privileges  有权限使用该队列的用户及其对应的权限数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'queueName' => 'string',
            'privileges' => '\HuaweiCloud\SDK\Dli\V1\Model\PrivilegesInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueName  队列名称。
    * privileges  有权限使用该队列的用户及其对应的权限数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'queueName' => null,
        'privileges' => null
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
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueName  队列名称。
    * privileges  有权限使用该队列的用户及其对应的权限数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'queueName' => 'queue_name',
            'privileges' => 'privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueName  队列名称。
    * privileges  有权限使用该队列的用户及其对应的权限数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'queueName' => 'setQueueName',
            'privileges' => 'setPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueName  队列名称。
    * privileges  有权限使用该队列的用户及其对应的权限数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'queueName' => 'getQueueName',
            'privileges' => 'getPrivileges'
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
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
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
    *  执行请求是否成功。“true”表示请求执行成功。
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
    * @param bool|null $isSuccess 执行请求是否成功。“true”表示请求执行成功。
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
    *  系统提示信息，执行成功时，信息可能为空。
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
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets privileges
    *  有权限使用该队列的用户及其对应的权限数组。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\PrivilegesInfo[]|null
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\PrivilegesInfo[]|null $privileges 有权限使用该队列的用户及其对应的权限数组。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
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

