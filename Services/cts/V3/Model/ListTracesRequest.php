<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTracesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTracesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * traceType  标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    * limit  标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
    * from  标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
    * next  取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    * to  标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
    * trackerName  当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    * user  标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceId  标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceName  标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * resourceType  标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceId  标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceName  标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * traceRating  标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'traceType' => 'string',
            'limit' => 'int',
            'from' => 'int',
            'next' => 'string',
            'to' => 'int',
            'trackerName' => 'string',
            'serviceType' => 'string',
            'user' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'traceId' => 'string',
            'traceName' => 'string',
            'traceRating' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * traceType  标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    * limit  标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
    * from  标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
    * next  取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    * to  标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
    * trackerName  当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    * user  标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceId  标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceName  标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * resourceType  标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceId  标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceName  标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * traceRating  标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'traceType' => null,
        'limit' => 'int32',
        'from' => 'int64',
        'next' => null,
        'to' => 'int64',
        'trackerName' => null,
        'serviceType' => null,
        'user' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceType' => null,
        'traceId' => null,
        'traceName' => null,
        'traceRating' => null
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
    * traceType  标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    * limit  标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
    * from  标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
    * next  取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    * to  标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
    * trackerName  当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    * user  标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceId  标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceName  标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * resourceType  标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceId  标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceName  标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * traceRating  标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'traceType' => 'trace_type',
            'limit' => 'limit',
            'from' => 'from',
            'next' => 'next',
            'to' => 'to',
            'trackerName' => 'tracker_name',
            'serviceType' => 'service_type',
            'user' => 'user',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'traceId' => 'trace_id',
            'traceName' => 'trace_name',
            'traceRating' => 'trace_rating'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * traceType  标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    * limit  标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
    * from  标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
    * next  取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    * to  标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
    * trackerName  当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    * user  标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceId  标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceName  标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * resourceType  标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceId  标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceName  标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * traceRating  标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'traceType' => 'setTraceType',
            'limit' => 'setLimit',
            'from' => 'setFrom',
            'next' => 'setNext',
            'to' => 'setTo',
            'trackerName' => 'setTrackerName',
            'serviceType' => 'setServiceType',
            'user' => 'setUser',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'traceId' => 'setTraceId',
            'traceName' => 'setTraceName',
            'traceRating' => 'setTraceRating'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * traceType  标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    * limit  标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
    * from  标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
    * next  取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    * to  标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
    * trackerName  当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    * user  标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceId  标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * resourceName  标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * resourceType  标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceId  标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    * traceName  标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    * traceRating  标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'traceType' => 'getTraceType',
            'limit' => 'getLimit',
            'from' => 'getFrom',
            'next' => 'getNext',
            'to' => 'getTo',
            'trackerName' => 'getTrackerName',
            'serviceType' => 'getServiceType',
            'user' => 'getUser',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'traceId' => 'getTraceId',
            'traceName' => 'getTraceName',
            'traceRating' => 'getTraceRating'
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
    const TRACE_TYPE_SYSTEM = 'system';
    const TRACE_TYPE_DATA = 'data';
    const TRACE_RATING_NORMAL = 'normal';
    const TRACE_RATING_WARNING = 'warning';
    const TRACE_RATING_INCIDENT = 'incident';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTraceTypeAllowableValues()
    {
        return [
            self::TRACE_TYPE_SYSTEM,
            self::TRACE_TYPE_DATA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTraceRatingAllowableValues()
    {
        return [
            self::TRACE_RATING_NORMAL,
            self::TRACE_RATING_WARNING,
            self::TRACE_RATING_INCIDENT,
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
        $this->container['traceType'] = isset($data['traceType']) ? $data['traceType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['traceName'] = isset($data['traceName']) ? $data['traceName'] : null;
        $this->container['traceRating'] = isset($data['traceRating']) ? $data['traceRating'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['traceType'] === null) {
            $invalidProperties[] = "'traceType' can't be null";
        }
            $allowedValues = $this->getTraceTypeAllowableValues();
                if (!is_null($this->container['traceType']) && !in_array($this->container['traceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'traceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['traceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'traceType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['traceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'traceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 946656000000)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 946656000000.";
            }
            if (!is_null($this->container['next']) && (mb_strlen($this->container['next']) > 50)) {
                $invalidProperties[] = "invalid value for 'next', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['next']) && (mb_strlen($this->container['next']) < 10)) {
                $invalidProperties[] = "invalid value for 'next', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 946656000000)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 946656000000.";
            }
            if (!is_null($this->container['trackerName']) && (mb_strlen($this->container['trackerName']) > 32)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['trackerName']) && (mb_strlen($this->container['trackerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) > 1024)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 350)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 350.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 300)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 100)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['traceId']) && (mb_strlen($this->container['traceId']) > 200)) {
                $invalidProperties[] = "invalid value for 'traceId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['traceId']) && (mb_strlen($this->container['traceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'traceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['traceName']) && (mb_strlen($this->container['traceName']) > 100)) {
                $invalidProperties[] = "invalid value for 'traceName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['traceName']) && (mb_strlen($this->container['traceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'traceName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTraceRatingAllowableValues();
                if (!is_null($this->container['traceRating']) && !in_array($this->container['traceRating'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'traceRating', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['traceRating']) && (mb_strlen($this->container['traceRating']) > 10)) {
                $invalidProperties[] = "invalid value for 'traceRating', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['traceRating']) && (mb_strlen($this->container['traceRating']) < 5)) {
                $invalidProperties[] = "invalid value for 'traceRating', the character length must be bigger than or equal to 5.";
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
    * Gets traceType
    *  标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    *
    * @return string
    */
    public function getTraceType()
    {
        return $this->container['traceType'];
    }

    /**
    * Sets traceType
    *
    * @param string $traceType 标识审计事件类型。 目前支持管理类事件（system）和数据类事件（data）。 默认值为\"system\"。
    *
    * @return $this
    */
    public function setTraceType($traceType)
    {
        $this->container['traceType'] = $traceType;
        return $this;
    }

    /**
    * Gets limit
    *  标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
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
    * @param int|null $limit 标示查询事件列表中限定返回的事件条数。不传时默认10条，最大值200条。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets from
    *  标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
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
    * @param int|null $from 标识查询事件列表的起始时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为上一小时的时间戳。查询条件from与to配套使用。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets next
    *  取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    *
    * @return string|null
    */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
    * Sets next
    *
    * @param string|null $next 取值为响应中中marker的值，用于标识查询事件的起始时间（自此条事件的记录时间起，向更早时间查询）。 可以与“from”、“to”结合使用。 最终的查询条件取两组时间条件的交集。
    *
    * @return $this
    */
    public function setNext($next)
    {
        $this->container['next'] = $next;
        return $this;
    }

    /**
    * Gets to
    *  标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
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
    * @param int|null $to 标识查询事件列表的结束时间戳（timestamp，为标准UTC时间，毫秒级，13位数字，不包括传入时间）默认为当前时间戳。查询条件to与from配套使用。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets trackerName
    *  当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    *
    * @return string|null
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string|null $trackerName 当\"trace_type\"字段值为\"system\"时，该字段值默认为\"system\"。 当\"trace_type\"字段值为\"data\"时，该字段值可以传入数据类追踪器名称，达到筛选某个数据类追踪器下的数据事件目的。
    *
    * @return $this
    */
    public function setTrackerName($trackerName)
    {
        $this->container['trackerName'] = $trackerName;
        return $this;
    }

    /**
    * Gets serviceType
    *  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 已对接的云服务列表参见《云审计服务用户指南》“支持的服务”章节。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets user
    *  标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 标识特定用户名称，用以查询该用户下的所有事件。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets resourceId
    *  标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 标示查询事件列表对应的云服务资源ID。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 标示查询事件列表对应的的资源名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 标示查询事件列表对应的资源类型。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets traceId
    *  标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return string|null
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string|null $traceId 标示某一条事件的事件ID。当传入这个查询条件时，其他查询条件自动不生效。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets traceName
    *  标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    *
    * @return string|null
    */
    public function getTraceName()
    {
        return $this->container['traceName'];
    }

    /**
    * Sets traceName
    *
    * @param string|null $traceName 标示查询事件列表对应的事件名称。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。 说明：该字段可能包含大写字母。
    *
    * @return $this
    */
    public function setTraceName($traceName)
    {
        $this->container['traceName'] = $traceName;
        return $this;
    }

    /**
    * Gets traceRating
    *  标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return string|null
    */
    public function getTraceRating()
    {
        return $this->container['traceRating'];
    }

    /**
    * Sets traceRating
    *
    * @param string|null $traceRating 标示查询事件列表对应的事件等级目前有三种：正常(normal), 警告(warning),事故(incident)。 当\"trace_type\"字段值为\"system\"时，该字段筛选有效\"。
    *
    * @return $this
    */
    public function setTraceRating($traceRating)
    {
        $this->container['traceRating'] = $traceRating;
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

