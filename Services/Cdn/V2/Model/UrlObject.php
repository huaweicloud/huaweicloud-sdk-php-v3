<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

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
    * taskType  任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
    * failClassify  失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    * failDesc  刷新预热失败描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'url' => 'string',
            'status' => 'string',
            'createTime' => 'int',
            'taskId' => 'string',
            'taskType' => 'string',
            'failClassify' => 'string',
            'failDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
    * failClassify  失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    * failDesc  刷新预热失败描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'url' => null,
        'status' => null,
        'createTime' => 'int64',
        'taskId' => null,
        'taskType' => null,
        'failClassify' => null,
        'failDesc' => null
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
    * taskType  任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
    * failClassify  失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    * failDesc  刷新预热失败描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'url' => 'url',
            'status' => 'status',
            'createTime' => 'create_time',
            'taskId' => 'task_id',
            'taskType' => 'task_type',
            'failClassify' => 'fail_classify',
            'failDesc' => 'fail_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
    * failClassify  失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    * failDesc  刷新预热失败描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'url' => 'setUrl',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType',
            'failClassify' => 'setFailClassify',
            'failDesc' => 'setFailDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  url的id
    * url  url的地址。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * createTime  url创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * taskId  任务id。
    * taskType  任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
    * failClassify  失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    * failDesc  刷新预热失败描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'url' => 'getUrl',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'taskId' => 'getTaskId',
            'taskType' => 'getTaskType',
            'failClassify' => 'getFailClassify',
            'failDesc' => 'getFailDesc'
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
        $this->container['failClassify'] = isset($data['failClassify']) ? $data['failClassify'] : null;
        $this->container['failDesc'] = isset($data['failDesc']) ? $data['failDesc'] : null;
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
    *  任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
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
    * @param string|null $taskType 任务的类型， 其值可以为REFRESH：刷新任务、PREHEATING：预热任务、REFRESH_AFTER_PREHEATING：预热后刷新
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets failClassify
    *  失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    *
    * @return string|null
    */
    public function getFailClassify()
    {
        return $this->container['failClassify'];
    }

    /**
    * Sets failClassify
    *
    * @param string|null $failClassify 失败原因，url状态为failed时返回。   - ORIGIN_ERROR：源站错误。   - INNER_ERROR：内部错误。   - UNKNOWN_ERROR：未知错误。
    *
    * @return $this
    */
    public function setFailClassify($failClassify)
    {
        $this->container['failClassify'] = $failClassify;
        return $this;
    }

    /**
    * Gets failDesc
    *  刷新预热失败描述。
    *
    * @return string|null
    */
    public function getFailDesc()
    {
        return $this->container['failDesc'];
    }

    /**
    * Sets failDesc
    *
    * @param string|null $failDesc 刷新预热失败描述。
    *
    * @return $this
    */
    public function setFailDesc($failDesc)
    {
        $this->container['failDesc'] = $failDesc;
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

