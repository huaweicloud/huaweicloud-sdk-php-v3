<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceEventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceVersionId  **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    * eventCount  **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    * eventType  **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    * eventInfo  **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    * eventInfoCn  **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    * createAt  **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'serviceId' => 'string',
            'serviceVersionId' => 'string',
            'eventCount' => 'int',
            'eventType' => 'string',
            'eventInfo' => 'string',
            'eventInfoCn' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceVersionId  **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    * eventCount  **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    * eventType  **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    * eventInfo  **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    * eventInfoCn  **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    * createAt  **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'serviceId' => null,
        'serviceVersionId' => null,
        'eventCount' => 'int32',
        'eventType' => null,
        'eventInfo' => null,
        'eventInfoCn' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64'
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
    * id  **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceVersionId  **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    * eventCount  **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    * eventType  **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    * eventInfo  **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    * eventInfoCn  **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    * createAt  **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'serviceId' => 'service_id',
            'serviceVersionId' => 'service_version_id',
            'eventCount' => 'event_count',
            'eventType' => 'event_type',
            'eventInfo' => 'event_info',
            'eventInfoCn' => 'event_info_cn',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceVersionId  **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    * eventCount  **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    * eventType  **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    * eventInfo  **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    * eventInfoCn  **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    * createAt  **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'serviceId' => 'setServiceId',
            'serviceVersionId' => 'setServiceVersionId',
            'eventCount' => 'setEventCount',
            'eventType' => 'setEventType',
            'eventInfo' => 'setEventInfo',
            'eventInfoCn' => 'setEventInfoCn',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceVersionId  **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    * eventCount  **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    * eventType  **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    * eventInfo  **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    * eventInfoCn  **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    * createAt  **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'serviceId' => 'getServiceId',
            'serviceVersionId' => 'getServiceVersionId',
            'eventCount' => 'getEventCount',
            'eventType' => 'getEventType',
            'eventInfo' => 'getEventInfo',
            'eventInfoCn' => 'getEventInfoCn',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceVersionId'] = isset($data['serviceVersionId']) ? $data['serviceVersionId'] : null;
        $this->container['eventCount'] = isset($data['eventCount']) ? $data['eventCount'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventInfo'] = isset($data['eventInfo']) ? $data['eventInfo'] : null;
        $this->container['eventInfoCn'] = isset($data['eventInfoCn']) ? $data['eventInfoCn'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    *  **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 服务事件ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets serviceId
    *  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId **参数解释：** 服务ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets serviceVersionId
    *  **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getServiceVersionId()
    {
        return $this->container['serviceVersionId'];
    }

    /**
    * Sets serviceVersionId
    *
    * @param string|null $serviceVersionId **参数解释：** 服务版本ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setServiceVersionId($serviceVersionId)
    {
        $this->container['serviceVersionId'] = $serviceVersionId;
        return $this;
    }

    /**
    * Gets eventCount
    *  **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getEventCount()
    {
        return $this->container['eventCount'];
    }

    /**
    * Sets eventCount
    *
    * @param int|null $eventCount **参数解释：** 服务事件发生计数 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEventCount($eventCount)
    {
        $this->container['eventCount'] = $eventCount;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType **参数解释：** 服务事件类型：NORMAL/ABNORMAL/WARNING **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventInfo
    *  **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getEventInfo()
    {
        return $this->container['eventInfo'];
    }

    /**
    * Sets eventInfo
    *
    * @param string|null $eventInfo **参数解释：** 服务事件信息（英文） **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEventInfo($eventInfo)
    {
        $this->container['eventInfo'] = $eventInfo;
        return $this;
    }

    /**
    * Gets eventInfoCn
    *  **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getEventInfoCn()
    {
        return $this->container['eventInfoCn'];
    }

    /**
    * Sets eventInfoCn
    *
    * @param string|null $eventInfoCn **参数解释：** 服务事件信息（中文） **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEventInfoCn($eventInfoCn)
    {
        $this->container['eventInfoCn'] = $eventInfoCn;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释：** 服务事件第一次发生时间 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释：** 服务事件最后发生时间 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

