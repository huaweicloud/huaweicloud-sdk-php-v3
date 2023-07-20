<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableQueueInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableQueueInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  执行请求是否成功。“true”表示请求执行成功。
    * name  队列名称。
    * uuid  uuid。
    * errMsg  状态为失败时的详细报错信息。
    * updateTime  作业更新时间, 毫秒数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'name' => 'string',
            'uuid' => 'string',
            'errMsg' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  执行请求是否成功。“true”表示请求执行成功。
    * name  队列名称。
    * uuid  uuid。
    * errMsg  状态为失败时的详细报错信息。
    * updateTime  作业更新时间, 毫秒数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'name' => null,
        'uuid' => null,
        'errMsg' => null,
        'updateTime' => 'int64'
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
    * status  执行请求是否成功。“true”表示请求执行成功。
    * name  队列名称。
    * uuid  uuid。
    * errMsg  状态为失败时的详细报错信息。
    * updateTime  作业更新时间, 毫秒数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'name' => 'name',
            'uuid' => 'uuid',
            'errMsg' => 'err_msg',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  执行请求是否成功。“true”表示请求执行成功。
    * name  队列名称。
    * uuid  uuid。
    * errMsg  状态为失败时的详细报错信息。
    * updateTime  作业更新时间, 毫秒数。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'name' => 'setName',
            'uuid' => 'setUuid',
            'errMsg' => 'setErrMsg',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  执行请求是否成功。“true”表示请求执行成功。
    * name  队列名称。
    * uuid  uuid。
    * errMsg  状态为失败时的详细报错信息。
    * updateTime  作业更新时间, 毫秒数。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'name' => 'getName',
            'uuid' => 'getUuid',
            'errMsg' => 'getErrMsg',
            'updateTime' => 'getUpdateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['errMsg'] = isset($data['errMsg']) ? $data['errMsg'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    *  执行请求是否成功。“true”表示请求执行成功。
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
    * @param string|null $status 执行请求是否成功。“true”表示请求执行成功。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  队列名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 队列名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uuid
    *  uuid。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid uuid。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets errMsg
    *  状态为失败时的详细报错信息。
    *
    * @return string|null
    */
    public function getErrMsg()
    {
        return $this->container['errMsg'];
    }

    /**
    * Sets errMsg
    *
    * @param string|null $errMsg 状态为失败时的详细报错信息。
    *
    * @return $this
    */
    public function setErrMsg($errMsg)
    {
        $this->container['errMsg'] = $errMsg;
        return $this;
    }

    /**
    * Gets updateTime
    *  作业更新时间, 毫秒数。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 作业更新时间, 毫秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

