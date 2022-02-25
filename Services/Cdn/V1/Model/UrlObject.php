<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'url' => 'string',
            'status' => 'string',
            'createTime' => 'int',
            'taskId' => 'string',
            'taskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'url' => null,
        'status' => null,
        'createTime' => 'int64',
        'taskId' => null,
        'taskType' => null
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
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'url' => 'url',
            'status' => 'status',
            'createTime' => 'create_time',
            'taskId' => 'task_id',
            'taskType' => 'task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'url' => 'setUrl',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'url' => 'getUrl',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'taskId' => 'getTaskId',
            'taskType' => 'getTaskType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
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
    * Gets id
    *  url的id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id url的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets url
    *  url的地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url的地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets status
    *  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
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
    * @param string|null $status url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskType
    *  任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务的类型， 其值可以为REFRESH、PREHEATING、REFRESH_AFTER_PREHEATING
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
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

