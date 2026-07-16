<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInferServiceEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInferServiceEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * eventType  **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
    * startTime  **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * endTime  **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * eventInfoKey  **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * sortDir  **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'eventType' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'eventInfoKey' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * eventType  **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
    * startTime  **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * endTime  **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * eventInfoKey  **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * sortDir  **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'eventType' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'eventInfoKey' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'sortKey' => null,
        'sortDir' => null,
        'contentType' => null
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
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * eventType  **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
    * startTime  **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * endTime  **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * eventInfoKey  **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * sortDir  **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'eventType' => 'event_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'eventInfoKey' => 'event_info_key',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * eventType  **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
    * startTime  **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * endTime  **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * eventInfoKey  **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * sortDir  **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'eventType' => 'setEventType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'eventInfoKey' => 'setEventInfoKey',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * eventType  **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
    * startTime  **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * endTime  **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    * eventInfoKey  **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * sortDir  **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'eventType' => 'getEventType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'eventInfoKey' => 'getEventInfoKey',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'contentType' => 'getContentType'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['eventInfoKey'] = isset($data['eventInfoKey']) ? $data['eventInfoKey'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['serviceId'])) {
                $invalidProperties[] = "invalid value for 'serviceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
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
    * Gets serviceId
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
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
    * @param string|null $eventType **参数解释：** 在线服务事件类型。 **约束限制：** 不涉及。 **取值范围：** - NORMAL：正常 - ABNORMAL：异常 - WARNING：警告 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释：** 事件开始时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释：** 事件结束时间。 **约束限制：** 不涉及。 **取值范围：** 毫秒级时间戳，13位数字。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets eventInfoKey
    *  **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    *
    * @return string|null
    */
    public function getEventInfoKey()
    {
        return $this->container['eventInfoKey'];
    }

    /**
    * Sets eventInfoKey
    *
    * @param string|null $eventInfoKey **参数解释：** 事件信息过滤关键字。 **约束限制：** 不支持'\";%_*!@#$&\\这些字符的查询。
    *
    * @return $this
    */
    public function setEventInfoKey($eventInfoKey)
    {
        $this->container['eventInfoKey'] = $eventInfoKey;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
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
    * @param int|null $limit **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释：** 排序方式。 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets contentType
    *  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json - application/json;charset=utf-8 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

