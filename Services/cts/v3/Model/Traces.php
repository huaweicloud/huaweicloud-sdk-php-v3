<?php

namespace HuaweiCloud\SDK\Cts\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Traces implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Traces';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  标识事件对应的云服务资源ID。
    * traceName  标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
    * traceRating  标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
    * traceType  标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    * request  标识事件对应接口请求内容，即资源操作请求体。
    * response  记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    * code  记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    * apiVersion  标识事件对应的云服务接口版本。
    * message  标识其他云服务为此条事件添加的备注信息。
    * recordTime  标识云审计服务记录本次事件的时间戳。
    * traceId  标识事件的ID，由系统生成的UUID。
    * time  标识事件产生的时间戳。
    * user  user
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resourceType  查询事件列表对应的资源类型。
    * sourceIp  标识触发事件的租户IP。
    * resourceName  标识事件对应的资源名称。
    * requestId  记录本次请求的request id
    * locationInfo  记录本次请求出错后，问题定位所需要的辅助信息。
    * endpoint  云资源的详情页面
    * resourceUrl  云资源的详情页面的访问链接（不含endpoint）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'traceName' => 'string',
            'traceRating' => 'string',
            'traceType' => 'string',
            'request' => 'string',
            'response' => 'string',
            'code' => 'string',
            'apiVersion' => 'string',
            'message' => 'string',
            'recordTime' => 'int',
            'traceId' => 'string',
            'time' => 'int',
            'user' => '\HuaweiCloud\SDK\Cts\v3\Model\UserInfo',
            'serviceType' => 'string',
            'resourceType' => 'string',
            'sourceIp' => 'string',
            'resourceName' => 'string',
            'requestId' => 'string',
            'locationInfo' => 'string',
            'endpoint' => 'string',
            'resourceUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  标识事件对应的云服务资源ID。
    * traceName  标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
    * traceRating  标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
    * traceType  标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    * request  标识事件对应接口请求内容，即资源操作请求体。
    * response  记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    * code  记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    * apiVersion  标识事件对应的云服务接口版本。
    * message  标识其他云服务为此条事件添加的备注信息。
    * recordTime  标识云审计服务记录本次事件的时间戳。
    * traceId  标识事件的ID，由系统生成的UUID。
    * time  标识事件产生的时间戳。
    * user  user
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resourceType  查询事件列表对应的资源类型。
    * sourceIp  标识触发事件的租户IP。
    * resourceName  标识事件对应的资源名称。
    * requestId  记录本次请求的request id
    * locationInfo  记录本次请求出错后，问题定位所需要的辅助信息。
    * endpoint  云资源的详情页面
    * resourceUrl  云资源的详情页面的访问链接（不含endpoint）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'traceName' => null,
        'traceRating' => null,
        'traceType' => null,
        'request' => null,
        'response' => null,
        'code' => null,
        'apiVersion' => null,
        'message' => null,
        'recordTime' => 'int64',
        'traceId' => null,
        'time' => 'int64',
        'user' => null,
        'serviceType' => null,
        'resourceType' => null,
        'sourceIp' => null,
        'resourceName' => null,
        'requestId' => null,
        'locationInfo' => null,
        'endpoint' => null,
        'resourceUrl' => null
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
    * resourceId  标识事件对应的云服务资源ID。
    * traceName  标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
    * traceRating  标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
    * traceType  标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    * request  标识事件对应接口请求内容，即资源操作请求体。
    * response  记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    * code  记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    * apiVersion  标识事件对应的云服务接口版本。
    * message  标识其他云服务为此条事件添加的备注信息。
    * recordTime  标识云审计服务记录本次事件的时间戳。
    * traceId  标识事件的ID，由系统生成的UUID。
    * time  标识事件产生的时间戳。
    * user  user
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resourceType  查询事件列表对应的资源类型。
    * sourceIp  标识触发事件的租户IP。
    * resourceName  标识事件对应的资源名称。
    * requestId  记录本次请求的request id
    * locationInfo  记录本次请求出错后，问题定位所需要的辅助信息。
    * endpoint  云资源的详情页面
    * resourceUrl  云资源的详情页面的访问链接（不含endpoint）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'traceName' => 'trace_name',
            'traceRating' => 'trace_rating',
            'traceType' => 'trace_type',
            'request' => 'request',
            'response' => 'response',
            'code' => 'code',
            'apiVersion' => 'api_version',
            'message' => 'message',
            'recordTime' => 'record_time',
            'traceId' => 'trace_id',
            'time' => 'time',
            'user' => 'user',
            'serviceType' => 'service_type',
            'resourceType' => 'resource_type',
            'sourceIp' => 'source_ip',
            'resourceName' => 'resource_name',
            'requestId' => 'request_id',
            'locationInfo' => 'location_info',
            'endpoint' => 'endpoint',
            'resourceUrl' => 'resource_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  标识事件对应的云服务资源ID。
    * traceName  标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
    * traceRating  标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
    * traceType  标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    * request  标识事件对应接口请求内容，即资源操作请求体。
    * response  记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    * code  记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    * apiVersion  标识事件对应的云服务接口版本。
    * message  标识其他云服务为此条事件添加的备注信息。
    * recordTime  标识云审计服务记录本次事件的时间戳。
    * traceId  标识事件的ID，由系统生成的UUID。
    * time  标识事件产生的时间戳。
    * user  user
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resourceType  查询事件列表对应的资源类型。
    * sourceIp  标识触发事件的租户IP。
    * resourceName  标识事件对应的资源名称。
    * requestId  记录本次请求的request id
    * locationInfo  记录本次请求出错后，问题定位所需要的辅助信息。
    * endpoint  云资源的详情页面
    * resourceUrl  云资源的详情页面的访问链接（不含endpoint）
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'traceName' => 'setTraceName',
            'traceRating' => 'setTraceRating',
            'traceType' => 'setTraceType',
            'request' => 'setRequest',
            'response' => 'setResponse',
            'code' => 'setCode',
            'apiVersion' => 'setApiVersion',
            'message' => 'setMessage',
            'recordTime' => 'setRecordTime',
            'traceId' => 'setTraceId',
            'time' => 'setTime',
            'user' => 'setUser',
            'serviceType' => 'setServiceType',
            'resourceType' => 'setResourceType',
            'sourceIp' => 'setSourceIp',
            'resourceName' => 'setResourceName',
            'requestId' => 'setRequestId',
            'locationInfo' => 'setLocationInfo',
            'endpoint' => 'setEndpoint',
            'resourceUrl' => 'setResourceUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  标识事件对应的云服务资源ID。
    * traceName  标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
    * traceRating  标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
    * traceType  标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    * request  标识事件对应接口请求内容，即资源操作请求体。
    * response  记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    * code  记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    * apiVersion  标识事件对应的云服务接口版本。
    * message  标识其他云服务为此条事件添加的备注信息。
    * recordTime  标识云审计服务记录本次事件的时间戳。
    * traceId  标识事件的ID，由系统生成的UUID。
    * time  标识事件产生的时间戳。
    * user  user
    * serviceType  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resourceType  查询事件列表对应的资源类型。
    * sourceIp  标识触发事件的租户IP。
    * resourceName  标识事件对应的资源名称。
    * requestId  记录本次请求的request id
    * locationInfo  记录本次请求出错后，问题定位所需要的辅助信息。
    * endpoint  云资源的详情页面
    * resourceUrl  云资源的详情页面的访问链接（不含endpoint）
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'traceName' => 'getTraceName',
            'traceRating' => 'getTraceRating',
            'traceType' => 'getTraceType',
            'request' => 'getRequest',
            'response' => 'getResponse',
            'code' => 'getCode',
            'apiVersion' => 'getApiVersion',
            'message' => 'getMessage',
            'recordTime' => 'getRecordTime',
            'traceId' => 'getTraceId',
            'time' => 'getTime',
            'user' => 'getUser',
            'serviceType' => 'getServiceType',
            'resourceType' => 'getResourceType',
            'sourceIp' => 'getSourceIp',
            'resourceName' => 'getResourceName',
            'requestId' => 'getRequestId',
            'locationInfo' => 'getLocationInfo',
            'endpoint' => 'getEndpoint',
            'resourceUrl' => 'getResourceUrl'
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
    const TRACE_RATING_NORMAL = 'normal';
    const TRACE_RATING_WARNING = 'warning';
    const TRACE_RATING_INCIDENT = 'incident';
    

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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['traceName'] = isset($data['traceName']) ? $data['traceName'] : null;
        $this->container['traceRating'] = isset($data['traceRating']) ? $data['traceRating'] : null;
        $this->container['traceType'] = isset($data['traceType']) ? $data['traceType'] : null;
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['locationInfo'] = isset($data['locationInfo']) ? $data['locationInfo'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['resourceUrl'] = isset($data['resourceUrl']) ? $data['resourceUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 350)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 350.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
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

            if (!is_null($this->container['traceType']) && (mb_strlen($this->container['traceType']) > 20)) {
                $invalidProperties[] = "invalid value for 'traceType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['traceType']) && (mb_strlen($this->container['traceType']) < 5)) {
                $invalidProperties[] = "invalid value for 'traceType', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['request']) && (mb_strlen($this->container['request']) > 5000)) {
                $invalidProperties[] = "invalid value for 'request', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['request']) && (mb_strlen($this->container['request']) < 0)) {
                $invalidProperties[] = "invalid value for 'request', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['response']) && (mb_strlen($this->container['response']) > 5000)) {
                $invalidProperties[] = "invalid value for 'response', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['response']) && (mb_strlen($this->container['response']) < 0)) {
                $invalidProperties[] = "invalid value for 'response', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 20)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) > 10)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 5000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordTime']) && ($this->container['recordTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'recordTime', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['recordTime']) && ($this->container['recordTime'] < 946656000000)) {
                $invalidProperties[] = "invalid value for 'recordTime', must be bigger than or equal to 946656000000.";
            }
            if (!is_null($this->container['traceId']) && (mb_strlen($this->container['traceId']) > 200)) {
                $invalidProperties[] = "invalid value for 'traceId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['traceId']) && (mb_strlen($this->container['traceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'traceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] < 946656000000)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 946656000000.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 100)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 300)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 300)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['locationInfo']) && (mb_strlen($this->container['locationInfo']) > 300)) {
                $invalidProperties[] = "invalid value for 'locationInfo', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['locationInfo']) && (mb_strlen($this->container['locationInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'locationInfo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endpoint']) && (mb_strlen($this->container['endpoint']) > 500)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['endpoint']) && (mb_strlen($this->container['endpoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceUrl']) && (mb_strlen($this->container['resourceUrl']) > 300)) {
                $invalidProperties[] = "invalid value for 'resourceUrl', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['resourceUrl']) && (mb_strlen($this->container['resourceUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceUrl', the character length must be bigger than or equal to 0.";
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
    * Gets resourceId
    *  标识事件对应的云服务资源ID。
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
    * @param string|null $resourceId 标识事件对应的云服务资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets traceName
    *  标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
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
    * @param string|null $traceName 标识查询事件列表对应的事件名称。由0-9,a-z,A-Z,'-','.','_',组成，长度为1～64个字符，且以首字符必须为字母。
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
    *  标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
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
    * @param string|null $traceRating 标识事件等级，目前有三种：正常（normal），警告（warning），事故（incident）。
    *
    * @return $this
    */
    public function setTraceRating($traceRating)
    {
        $this->container['traceRating'] = $traceRating;
        return $this;
    }

    /**
    * Gets traceType
    *  标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    *
    * @return string|null
    */
    public function getTraceType()
    {
        return $this->container['traceType'];
    }

    /**
    * Sets traceType
    *
    * @param string|null $traceType 标识事件发生源头类型，管理类事件主要包括API调用（ApiCall），Console页面调用（ConsoleAction）和系统间调用（SystemAction）。 数据类事件主要包括ObsSDK，ObsAPI。
    *
    * @return $this
    */
    public function setTraceType($traceType)
    {
        $this->container['traceType'] = $traceType;
        return $this;
    }

    /**
    * Gets request
    *  标识事件对应接口请求内容，即资源操作请求体。
    *
    * @return string|null
    */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
    * Sets request
    *
    * @param string|null $request 标识事件对应接口请求内容，即资源操作请求体。
    *
    * @return $this
    */
    public function setRequest($request)
    {
        $this->container['request'] = $request;
        return $this;
    }

    /**
    * Gets response
    *  记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    *
    * @return string|null
    */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
    * Sets response
    *
    * @param string|null $response 记录用户请求的响应，标识事件对应接口响应内容，即资源操作结果返回体。
    *
    * @return $this
    */
    public function setResponse($response)
    {
        $this->container['response'] = $response;
        return $this;
    }

    /**
    * Gets code
    *  记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 记录用户请求的响应，标识事件对应接口返回的HTTP状态码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets apiVersion
    *  标识事件对应的云服务接口版本。
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion 标识事件对应的云服务接口版本。
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets message
    *  标识其他云服务为此条事件添加的备注信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 标识其他云服务为此条事件添加的备注信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets recordTime
    *  标识云审计服务记录本次事件的时间戳。
    *
    * @return int|null
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param int|null $recordTime 标识云审计服务记录本次事件的时间戳。
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets traceId
    *  标识事件的ID，由系统生成的UUID。
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
    * @param string|null $traceId 标识事件的ID，由系统生成的UUID。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets time
    *  标识事件产生的时间戳。
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 标识事件产生的时间戳。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\Cts\v3\Model\UserInfo|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Cts\v3\Model\UserInfo|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets serviceType
    *  标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
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
    * @param string|null $serviceType 标识查询事件列表对应的云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  查询事件列表对应的资源类型。
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
    * @param string|null $resourceType 查询事件列表对应的资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets sourceIp
    *  标识触发事件的租户IP。
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 标识触发事件的租户IP。
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets resourceName
    *  标识事件对应的资源名称。
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
    * @param string|null $resourceName 标识事件对应的资源名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets requestId
    *  记录本次请求的request id
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 记录本次请求的request id
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets locationInfo
    *  记录本次请求出错后，问题定位所需要的辅助信息。
    *
    * @return string|null
    */
    public function getLocationInfo()
    {
        return $this->container['locationInfo'];
    }

    /**
    * Sets locationInfo
    *
    * @param string|null $locationInfo 记录本次请求出错后，问题定位所需要的辅助信息。
    *
    * @return $this
    */
    public function setLocationInfo($locationInfo)
    {
        $this->container['locationInfo'] = $locationInfo;
        return $this;
    }

    /**
    * Gets endpoint
    *  云资源的详情页面
    *
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint 云资源的详情页面
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets resourceUrl
    *  云资源的详情页面的访问链接（不含endpoint）
    *
    * @return string|null
    */
    public function getResourceUrl()
    {
        return $this->container['resourceUrl'];
    }

    /**
    * Sets resourceUrl
    *
    * @param string|null $resourceUrl 云资源的详情页面的访问链接（不含endpoint）
    *
    * @return $this
    */
    public function setResourceUrl($resourceUrl)
    {
        $this->container['resourceUrl'] = $resourceUrl;
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

