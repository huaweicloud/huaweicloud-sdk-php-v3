<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventSearchResultV2Events implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventSearchResultV2_events';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件ID。
    * name  事件名称。
    * type  事件类型，取值为ERROR和SLOW_DOWN。
    * status  事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
    * baselineName  基线任务名称。
    * taskName  作业名称。
    * taskId  作业ID。
    * taskVersion  作业版本号。
    * happenTime  发生时间戳，单位毫秒。
    * ownerName  责任人用户名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'status' => 'string',
            'baselineName' => 'string',
            'taskName' => 'string',
            'taskId' => 'string',
            'taskVersion' => 'int',
            'happenTime' => 'int',
            'ownerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件ID。
    * name  事件名称。
    * type  事件类型，取值为ERROR和SLOW_DOWN。
    * status  事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
    * baselineName  基线任务名称。
    * taskName  作业名称。
    * taskId  作业ID。
    * taskVersion  作业版本号。
    * happenTime  发生时间戳，单位毫秒。
    * ownerName  责任人用户名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'status' => null,
        'baselineName' => null,
        'taskName' => null,
        'taskId' => null,
        'taskVersion' => 'int32',
        'happenTime' => 'int32',
        'ownerName' => null
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
    * id  事件ID。
    * name  事件名称。
    * type  事件类型，取值为ERROR和SLOW_DOWN。
    * status  事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
    * baselineName  基线任务名称。
    * taskName  作业名称。
    * taskId  作业ID。
    * taskVersion  作业版本号。
    * happenTime  发生时间戳，单位毫秒。
    * ownerName  责任人用户名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'status' => 'status',
            'baselineName' => 'baseline_name',
            'taskName' => 'task_name',
            'taskId' => 'task_id',
            'taskVersion' => 'task_version',
            'happenTime' => 'happen_time',
            'ownerName' => 'owner_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件ID。
    * name  事件名称。
    * type  事件类型，取值为ERROR和SLOW_DOWN。
    * status  事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
    * baselineName  基线任务名称。
    * taskName  作业名称。
    * taskId  作业ID。
    * taskVersion  作业版本号。
    * happenTime  发生时间戳，单位毫秒。
    * ownerName  责任人用户名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'status' => 'setStatus',
            'baselineName' => 'setBaselineName',
            'taskName' => 'setTaskName',
            'taskId' => 'setTaskId',
            'taskVersion' => 'setTaskVersion',
            'happenTime' => 'setHappenTime',
            'ownerName' => 'setOwnerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件ID。
    * name  事件名称。
    * type  事件类型，取值为ERROR和SLOW_DOWN。
    * status  事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
    * baselineName  基线任务名称。
    * taskName  作业名称。
    * taskId  作业ID。
    * taskVersion  作业版本号。
    * happenTime  发生时间戳，单位毫秒。
    * ownerName  责任人用户名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'status' => 'getStatus',
            'baselineName' => 'getBaselineName',
            'taskName' => 'getTaskName',
            'taskId' => 'getTaskId',
            'taskVersion' => 'getTaskVersion',
            'happenTime' => 'getHappenTime',
            'ownerName' => 'getOwnerName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['baselineName'] = isset($data['baselineName']) ? $data['baselineName'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskVersion'] = isset($data['taskVersion']) ? $data['taskVersion'] : null;
        $this->container['happenTime'] = isset($data['happenTime']) ? $data['happenTime'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
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
    *  事件ID。
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
    * @param string|null $id 事件ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  事件名称。
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
    * @param string|null $name 事件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  事件类型，取值为ERROR和SLOW_DOWN。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 事件类型，取值为ERROR和SLOW_DOWN。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
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
    * @param string|null $status 事件状态，取值为NEW_DISCOVERY、PROCESSING、RESTORED和IGNORED。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets baselineName
    *  基线任务名称。
    *
    * @return string|null
    */
    public function getBaselineName()
    {
        return $this->container['baselineName'];
    }

    /**
    * Sets baselineName
    *
    * @param string|null $baselineName 基线任务名称。
    *
    * @return $this
    */
    public function setBaselineName($baselineName)
    {
        $this->container['baselineName'] = $baselineName;
        return $this;
    }

    /**
    * Gets taskName
    *  作业名称。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 作业名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskId
    *  作业ID。
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
    * @param string|null $taskId 作业ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskVersion
    *  作业版本号。
    *
    * @return int|null
    */
    public function getTaskVersion()
    {
        return $this->container['taskVersion'];
    }

    /**
    * Sets taskVersion
    *
    * @param int|null $taskVersion 作业版本号。
    *
    * @return $this
    */
    public function setTaskVersion($taskVersion)
    {
        $this->container['taskVersion'] = $taskVersion;
        return $this;
    }

    /**
    * Gets happenTime
    *  发生时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getHappenTime()
    {
        return $this->container['happenTime'];
    }

    /**
    * Sets happenTime
    *
    * @param int|null $happenTime 发生时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setHappenTime($happenTime)
    {
        $this->container['happenTime'] = $happenTime;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人用户名称。
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人用户名称。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
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

