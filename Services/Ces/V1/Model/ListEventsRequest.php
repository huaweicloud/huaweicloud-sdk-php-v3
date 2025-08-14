<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'subEventType' => 'string',
            'eventName' => 'string',
            'from' => 'int',
            'to' => 'int',
            'start' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'subEventType' => null,
        'eventName' => null,
        'from' => 'int64',
        'to' => 'int64',
        'start' => 'int32',
        'limit' => 'int32'
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
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'subEventType' => 'sub_event_type',
            'eventName' => 'event_name',
            'from' => 'from',
            'to' => 'to',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'subEventType' => 'setSubEventType',
            'eventName' => 'setEventName',
            'from' => 'setFrom',
            'to' => 'setTo',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型，值为EVENT.SYS或EVENT.CUSTOM，EVENT.SYS表示系统事件，EVENT.CUSTOM表示自定义事件。
    * subEventType  事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
    * eventName  事件名称，值为系统产生的事件名称，或用户自定义上报的事件名称。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'subEventType' => 'getSubEventType',
            'eventName' => 'getEventName',
            'from' => 'getFrom',
            'to' => 'getTo',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['subEventType'] = isset($data['subEventType']) ? $data['subEventType'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    *  事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
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
    * @param string|null $subEventType 事件子类, 枚举类型：SUB_EVENT.OPS 运维事件, SUB_EVENT.PLAN 计划事件，SUB_EVENT.CUSTOM 自定义事件
    *
    * @return $this
    */
    public function setSubEventType($subEventType)
    {
        $this->container['subEventType'] = $subEventType;
        return $this;
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
    * Gets from
    *  查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 查询数据起始时间，UNIX时间戳，单位毫秒；例如：1605952700911。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to 查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to，例如：1606557500911。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets start
    *  分页起始值，类型为integer，默认值为0。
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 分页起始值，类型为integer，默认值为0。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 单次查询的条数限制，取值范围(0,100]，默认值为100，用于限制结果数据条数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

