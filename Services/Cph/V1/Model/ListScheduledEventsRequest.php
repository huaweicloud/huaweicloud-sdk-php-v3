<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的事件个数。取值范围：1~100（默认值为10）
    * marker  分页标记。从marker指定的下一条数据开始查询。
    * eventId  计划事件id。
    * serverId  云手机服务器的唯一标识。
    * publishSince  事件发布开始时间，按照时间范围过滤。
    * publishUntil  事件发布结束时间，按照时间范围过滤。
    * state  计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * type  计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'eventId' => 'string',
            'serverId' => 'string',
            'publishSince' => 'string',
            'publishUntil' => 'string',
            'state' => 'string[]',
            'type' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的事件个数。取值范围：1~100（默认值为10）
    * marker  分页标记。从marker指定的下一条数据开始查询。
    * eventId  计划事件id。
    * serverId  云手机服务器的唯一标识。
    * publishSince  事件发布开始时间，按照时间范围过滤。
    * publishUntil  事件发布结束时间，按照时间范围过滤。
    * state  计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * type  计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'eventId' => null,
        'serverId' => null,
        'publishSince' => null,
        'publishUntil' => null,
        'state' => null,
        'type' => null
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
    * limit  每页返回的事件个数。取值范围：1~100（默认值为10）
    * marker  分页标记。从marker指定的下一条数据开始查询。
    * eventId  计划事件id。
    * serverId  云手机服务器的唯一标识。
    * publishSince  事件发布开始时间，按照时间范围过滤。
    * publishUntil  事件发布结束时间，按照时间范围过滤。
    * state  计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * type  计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'eventId' => 'event_id',
            'serverId' => 'server_id',
            'publishSince' => 'publish_since',
            'publishUntil' => 'publish_until',
            'state' => 'state',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的事件个数。取值范围：1~100（默认值为10）
    * marker  分页标记。从marker指定的下一条数据开始查询。
    * eventId  计划事件id。
    * serverId  云手机服务器的唯一标识。
    * publishSince  事件发布开始时间，按照时间范围过滤。
    * publishUntil  事件发布结束时间，按照时间范围过滤。
    * state  计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * type  计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'eventId' => 'setEventId',
            'serverId' => 'setServerId',
            'publishSince' => 'setPublishSince',
            'publishUntil' => 'setPublishUntil',
            'state' => 'setState',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的事件个数。取值范围：1~100（默认值为10）
    * marker  分页标记。从marker指定的下一条数据开始查询。
    * eventId  计划事件id。
    * serverId  云手机服务器的唯一标识。
    * publishSince  事件发布开始时间，按照时间范围过滤。
    * publishUntil  事件发布结束时间，按照时间范围过滤。
    * state  计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    * type  计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'eventId' => 'getEventId',
            'serverId' => 'getServerId',
            'publishSince' => 'getPublishSince',
            'publishUntil' => 'getPublishUntil',
            'state' => 'getState',
            'type' => 'getType'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['publishSince'] = isset($data['publishSince']) ? $data['publishSince'] : null;
        $this->container['publishUntil'] = isset($data['publishUntil']) ? $data['publishUntil'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets limit
    *  每页返回的事件个数。取值范围：1~100（默认值为10）
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
    * @param int|null $limit 每页返回的事件个数。取值范围：1~100（默认值为10）
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页标记。从marker指定的下一条数据开始查询。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页标记。从marker指定的下一条数据开始查询。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets eventId
    *  计划事件id。
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId 计划事件id。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机服务器的唯一标识。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机服务器的唯一标识。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets publishSince
    *  事件发布开始时间，按照时间范围过滤。
    *
    * @return string|null
    */
    public function getPublishSince()
    {
        return $this->container['publishSince'];
    }

    /**
    * Sets publishSince
    *
    * @param string|null $publishSince 事件发布开始时间，按照时间范围过滤。
    *
    * @return $this
    */
    public function setPublishSince($publishSince)
    {
        $this->container['publishSince'] = $publishSince;
        return $this;
    }

    /**
    * Gets publishUntil
    *  事件发布结束时间，按照时间范围过滤。
    *
    * @return string|null
    */
    public function getPublishUntil()
    {
        return $this->container['publishUntil'];
    }

    /**
    * Sets publishUntil
    *
    * @param string|null $publishUntil 事件发布结束时间，按照时间范围过滤。
    *
    * @return $this
    */
    public function setPublishUntil($publishUntil)
    {
        $this->container['publishUntil'] = $publishUntil;
        return $this;
    }

    /**
    * Gets state
    *  计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    *
    * @return string[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string[]|null $state 计划事件状态。支持多值查询过滤。 取值范围： inquiring: 待授权、 scheduled：待执行、 executing：执行中、 completed：执行成功、 failed：执行失败、 canceled：取消
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets type
    *  计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 计划事件类型。支持多值查询过滤。取值范围： localdisk-recovery：本地盘换盘、 system-maintenance：系统维护
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

