<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventUsers  上报事件时用户的名称，也可能为projectID。
    * eventSources  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    * eventInfo  一条或者多条事件详细信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'eventType' => 'string',
            'subEventType' => 'string',
            'eventUsers' => 'string[]',
            'eventSources' => 'string[]',
            'eventInfo' => '\HuaweiCloud\SDK\Ces\V1\Model\EventInfoDetail[]',
            'metaData' => '\HuaweiCloud\SDK\Ces\V1\Model\TotalMetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventUsers  上报事件时用户的名称，也可能为projectID。
    * eventSources  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    * eventInfo  一条或者多条事件详细信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'eventType' => null,
        'subEventType' => null,
        'eventUsers' => null,
        'eventSources' => null,
        'eventInfo' => null,
        'metaData' => null
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
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventUsers  上报事件时用户的名称，也可能为projectID。
    * eventSources  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    * eventInfo  一条或者多条事件详细信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'eventType' => 'event_type',
            'subEventType' => 'sub_event_type',
            'eventUsers' => 'event_users',
            'eventSources' => 'event_sources',
            'eventInfo' => 'event_info',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventUsers  上报事件时用户的名称，也可能为projectID。
    * eventSources  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    * eventInfo  一条或者多条事件详细信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'eventType' => 'setEventType',
            'subEventType' => 'setSubEventType',
            'eventUsers' => 'setEventUsers',
            'eventSources' => 'setEventSources',
            'eventInfo' => 'setEventInfo',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventUsers  上报事件时用户的名称，也可能为projectID。
    * eventSources  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    * eventInfo  一条或者多条事件详细信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'eventType' => 'getEventType',
            'subEventType' => 'getSubEventType',
            'eventUsers' => 'getEventUsers',
            'eventSources' => 'getEventSources',
            'eventInfo' => 'getEventInfo',
            'metaData' => 'getMetaData'
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
    const EVENT_TYPE_EVENT_SYS = 'EVENT.SYS';
    const EVENT_TYPE_EVENT_CUSTOM = 'EVENT.CUSTOM';
    const SUB_EVENT_TYPE_SUB_EVENT_OPS = 'SUB_EVENT.OPS';
    const SUB_EVENT_TYPE_SUB_EVENT_PLAN = 'SUB_EVENT.PLAN';
    const SUB_EVENT_TYPE_SUB_EVENT_CUSTOM = 'SUB_EVENT.CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_EVENT_SYS,
            self::EVENT_TYPE_EVENT_CUSTOM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubEventTypeAllowableValues()
    {
        return [
            self::SUB_EVENT_TYPE_SUB_EVENT_OPS,
            self::SUB_EVENT_TYPE_SUB_EVENT_PLAN,
            self::SUB_EVENT_TYPE_SUB_EVENT_CUSTOM,
        ];
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['subEventType'] = isset($data['subEventType']) ? $data['subEventType'] : null;
        $this->container['eventUsers'] = isset($data['eventUsers']) ? $data['eventUsers'] : null;
        $this->container['eventSources'] = isset($data['eventSources']) ? $data['eventSources'] : null;
        $this->container['eventInfo'] = isset($data['eventInfo']) ? $data['eventInfo'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSubEventTypeAllowableValues();
                if (!is_null($this->container['subEventType']) && !in_array($this->container['subEventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subEventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets eventName
    *  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
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
    * @param string|null $eventType 事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets subEventType
    *  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    *
    * @return string|null
    */
    public function getSubEventType()
    {
        return $this->container['subEventType'];
    }

    /**
    * Sets subEventType
    *
    * @param string|null $subEventType 事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    *
    * @return $this
    */
    public function setSubEventType($subEventType)
    {
        $this->container['subEventType'] = $subEventType;
        return $this;
    }

    /**
    * Gets eventUsers
    *  上报事件时用户的名称，也可能为projectID。
    *
    * @return string[]|null
    */
    public function getEventUsers()
    {
        return $this->container['eventUsers'];
    }

    /**
    * Sets eventUsers
    *
    * @param string[]|null $eventUsers 上报事件时用户的名称，也可能为projectID。
    *
    * @return $this
    */
    public function setEventUsers($eventUsers)
    {
        $this->container['eventUsers'] = $eventUsers;
        return $this;
    }

    /**
    * Gets eventSources
    *  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @return string[]|null
    */
    public function getEventSources()
    {
        return $this->container['eventSources'];
    }

    /**
    * Sets eventSources
    *
    * @param string[]|null $eventSources 事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @return $this
    */
    public function setEventSources($eventSources)
    {
        $this->container['eventSources'] = $eventSources;
        return $this;
    }

    /**
    * Gets eventInfo
    *  一条或者多条事件详细信息。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\EventInfoDetail[]|null
    */
    public function getEventInfo()
    {
        return $this->container['eventInfo'];
    }

    /**
    * Sets eventInfo
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\EventInfoDetail[]|null $eventInfo 一条或者多条事件详细信息。
    *
    * @return $this
    */
    public function setEventInfo($eventInfo)
    {
        $this->container['eventInfo'] = $eventInfo;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\TotalMetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\TotalMetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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

