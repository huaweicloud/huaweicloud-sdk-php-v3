<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventSampleItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventSampleItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件示例ID
    * name  事件示例名称
    * content  事件示例内容
    * eventTypeId  事件示例对应的事件类型ID
    * eventTypeName  事件示例对应的事件类型名称
    * eventSourceId  事件示例对应的事件源ID
    * eventSourceName  事件示例对应的事件源名称
    * createdTime  创建时间
    * updatedTime  更新时间
    * deletedTime  删除时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'content' => 'string',
            'eventTypeId' => 'string',
            'eventTypeName' => 'string',
            'eventSourceId' => 'string',
            'eventSourceName' => 'string',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'deletedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件示例ID
    * name  事件示例名称
    * content  事件示例内容
    * eventTypeId  事件示例对应的事件类型ID
    * eventTypeName  事件示例对应的事件类型名称
    * eventSourceId  事件示例对应的事件源ID
    * eventSourceName  事件示例对应的事件源名称
    * createdTime  创建时间
    * updatedTime  更新时间
    * deletedTime  删除时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'content' => null,
        'eventTypeId' => null,
        'eventTypeName' => null,
        'eventSourceId' => null,
        'eventSourceName' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'deletedTime' => null
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
    * id  事件示例ID
    * name  事件示例名称
    * content  事件示例内容
    * eventTypeId  事件示例对应的事件类型ID
    * eventTypeName  事件示例对应的事件类型名称
    * eventSourceId  事件示例对应的事件源ID
    * eventSourceName  事件示例对应的事件源名称
    * createdTime  创建时间
    * updatedTime  更新时间
    * deletedTime  删除时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'content' => 'content',
            'eventTypeId' => 'event_type_id',
            'eventTypeName' => 'event_type_name',
            'eventSourceId' => 'event_source_id',
            'eventSourceName' => 'event_source_name',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'deletedTime' => 'deleted_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件示例ID
    * name  事件示例名称
    * content  事件示例内容
    * eventTypeId  事件示例对应的事件类型ID
    * eventTypeName  事件示例对应的事件类型名称
    * eventSourceId  事件示例对应的事件源ID
    * eventSourceName  事件示例对应的事件源名称
    * createdTime  创建时间
    * updatedTime  更新时间
    * deletedTime  删除时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'content' => 'setContent',
            'eventTypeId' => 'setEventTypeId',
            'eventTypeName' => 'setEventTypeName',
            'eventSourceId' => 'setEventSourceId',
            'eventSourceName' => 'setEventSourceName',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'deletedTime' => 'setDeletedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件示例ID
    * name  事件示例名称
    * content  事件示例内容
    * eventTypeId  事件示例对应的事件类型ID
    * eventTypeName  事件示例对应的事件类型名称
    * eventSourceId  事件示例对应的事件源ID
    * eventSourceName  事件示例对应的事件源名称
    * createdTime  创建时间
    * updatedTime  更新时间
    * deletedTime  删除时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'content' => 'getContent',
            'eventTypeId' => 'getEventTypeId',
            'eventTypeName' => 'getEventTypeName',
            'eventSourceId' => 'getEventSourceId',
            'eventSourceName' => 'getEventSourceName',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'deletedTime' => 'getDeletedTime'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['eventTypeId'] = isset($data['eventTypeId']) ? $data['eventTypeId'] : null;
        $this->container['eventTypeName'] = isset($data['eventTypeName']) ? $data['eventTypeName'] : null;
        $this->container['eventSourceId'] = isset($data['eventSourceId']) ? $data['eventSourceId'] : null;
        $this->container['eventSourceName'] = isset($data['eventSourceName']) ? $data['eventSourceName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['deletedTime'] = isset($data['deletedTime']) ? $data['deletedTime'] : null;
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
    *  事件示例ID
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
    * @param string|null $id 事件示例ID
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
    *  事件示例名称
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
    * @param string|null $name 事件示例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets content
    *  事件示例内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 事件示例内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets eventTypeId
    *  事件示例对应的事件类型ID
    *
    * @return string|null
    */
    public function getEventTypeId()
    {
        return $this->container['eventTypeId'];
    }

    /**
    * Sets eventTypeId
    *
    * @param string|null $eventTypeId 事件示例对应的事件类型ID
    *
    * @return $this
    */
    public function setEventTypeId($eventTypeId)
    {
        $this->container['eventTypeId'] = $eventTypeId;
        return $this;
    }

    /**
    * Gets eventTypeName
    *  事件示例对应的事件类型名称
    *
    * @return string|null
    */
    public function getEventTypeName()
    {
        return $this->container['eventTypeName'];
    }

    /**
    * Sets eventTypeName
    *
    * @param string|null $eventTypeName 事件示例对应的事件类型名称
    *
    * @return $this
    */
    public function setEventTypeName($eventTypeName)
    {
        $this->container['eventTypeName'] = $eventTypeName;
        return $this;
    }

    /**
    * Gets eventSourceId
    *  事件示例对应的事件源ID
    *
    * @return string|null
    */
    public function getEventSourceId()
    {
        return $this->container['eventSourceId'];
    }

    /**
    * Sets eventSourceId
    *
    * @param string|null $eventSourceId 事件示例对应的事件源ID
    *
    * @return $this
    */
    public function setEventSourceId($eventSourceId)
    {
        $this->container['eventSourceId'] = $eventSourceId;
        return $this;
    }

    /**
    * Gets eventSourceName
    *  事件示例对应的事件源名称
    *
    * @return string|null
    */
    public function getEventSourceName()
    {
        return $this->container['eventSourceName'];
    }

    /**
    * Sets eventSourceName
    *
    * @param string|null $eventSourceName 事件示例对应的事件源名称
    *
    * @return $this
    */
    public function setEventSourceName($eventSourceName)
    {
        $this->container['eventSourceName'] = $eventSourceName;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets deletedTime
    *  删除时间
    *
    * @return string|null
    */
    public function getDeletedTime()
    {
        return $this->container['deletedTime'];
    }

    /**
    * Sets deletedTime
    *
    * @param string|null $deletedTime 删除时间
    *
    * @return $this
    */
    public function setDeletedTime($deletedTime)
    {
        $this->container['deletedTime'] = $deletedTime;
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

