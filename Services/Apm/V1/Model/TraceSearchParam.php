<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TraceSearchParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TraceSearchParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  region名称。
    * orderParam  orderParam
    * realSourceFullMatch  是否为精确搜索。
    * sourceFullMatch  全匹配搜索。
    * tagsContent  header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    * startTimeString  开始时间。
    * endTimeString  结束时间。
    * timeUsedMin  最小耗时。
    * timeUsedMax  最大耗时。
    * containTagsContent  搜索结果是否包含tags内容详情。
    * pageSize  每一页返回的行数。
    * page  查询第几页的数据,默认查询第一页。
    * parameters  参数。
    * codes  字符串格式的的状态码，用于支持多个状态码查询。
    * globalTraceId  vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  在root的span调用产生的全局id，以此往后透传。
    * spanId  代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event 的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误。
    * errorReasons  错误类型。
    * type  类型。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'orderParam' => '\HuaweiCloud\SDK\Apm\V1\Model\OrderParam',
            'realSourceFullMatch' => 'bool',
            'sourceFullMatch' => 'bool',
            'tagsContent' => 'string',
            'startTimeString' => 'string',
            'endTimeString' => 'string',
            'timeUsedMin' => 'int',
            'timeUsedMax' => 'string',
            'containTagsContent' => 'bool',
            'pageSize' => 'int',
            'page' => 'int',
            'parameters' => 'string',
            'codes' => 'int[]',
            'globalTraceId' => 'string',
            'globalPath' => 'string',
            'traceId' => 'string',
            'spanId' => 'string',
            'envId' => 'int',
            'instanceId' => 'int',
            'appId' => 'int',
            'bizId' => 'int',
            'domainId' => 'int',
            'source' => 'string',
            'realSource' => 'string',
            'startTime' => 'int',
            'timeUsed' => 'int',
            'code' => 'int',
            'className' => 'string',
            'isAsync' => 'bool',
            'tags' => 'map[string,string]',
            'hasError' => 'bool',
            'errorReasons' => 'string',
            'type' => 'string',
            'httpMethod' => 'string',
            'bizCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  region名称。
    * orderParam  orderParam
    * realSourceFullMatch  是否为精确搜索。
    * sourceFullMatch  全匹配搜索。
    * tagsContent  header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    * startTimeString  开始时间。
    * endTimeString  结束时间。
    * timeUsedMin  最小耗时。
    * timeUsedMax  最大耗时。
    * containTagsContent  搜索结果是否包含tags内容详情。
    * pageSize  每一页返回的行数。
    * page  查询第几页的数据,默认查询第一页。
    * parameters  参数。
    * codes  字符串格式的的状态码，用于支持多个状态码查询。
    * globalTraceId  vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  在root的span调用产生的全局id，以此往后透传。
    * spanId  代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event 的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误。
    * errorReasons  错误类型。
    * type  类型。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'orderParam' => null,
        'realSourceFullMatch' => null,
        'sourceFullMatch' => null,
        'tagsContent' => null,
        'startTimeString' => null,
        'endTimeString' => null,
        'timeUsedMin' => 'int64',
        'timeUsedMax' => null,
        'containTagsContent' => null,
        'pageSize' => 'int32',
        'page' => 'int32',
        'parameters' => null,
        'codes' => 'int32',
        'globalTraceId' => null,
        'globalPath' => null,
        'traceId' => null,
        'spanId' => null,
        'envId' => 'int64',
        'instanceId' => 'int64',
        'appId' => 'int64',
        'bizId' => 'int64',
        'domainId' => 'int32',
        'source' => null,
        'realSource' => null,
        'startTime' => 'int64',
        'timeUsed' => 'int64',
        'code' => 'int32',
        'className' => null,
        'isAsync' => null,
        'tags' => null,
        'hasError' => null,
        'errorReasons' => null,
        'type' => null,
        'httpMethod' => null,
        'bizCode' => null
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
    * region  region名称。
    * orderParam  orderParam
    * realSourceFullMatch  是否为精确搜索。
    * sourceFullMatch  全匹配搜索。
    * tagsContent  header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    * startTimeString  开始时间。
    * endTimeString  结束时间。
    * timeUsedMin  最小耗时。
    * timeUsedMax  最大耗时。
    * containTagsContent  搜索结果是否包含tags内容详情。
    * pageSize  每一页返回的行数。
    * page  查询第几页的数据,默认查询第一页。
    * parameters  参数。
    * codes  字符串格式的的状态码，用于支持多个状态码查询。
    * globalTraceId  vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  在root的span调用产生的全局id，以此往后透传。
    * spanId  代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event 的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误。
    * errorReasons  错误类型。
    * type  类型。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'orderParam' => 'order_param',
            'realSourceFullMatch' => 'real_source_full_match',
            'sourceFullMatch' => 'source_full_match',
            'tagsContent' => 'tags_content',
            'startTimeString' => 'start_time_string',
            'endTimeString' => 'end_time_string',
            'timeUsedMin' => 'time_used_min',
            'timeUsedMax' => 'time_used_max',
            'containTagsContent' => 'contain_tags_content',
            'pageSize' => 'page_size',
            'page' => 'page',
            'parameters' => 'parameters',
            'codes' => 'codes',
            'globalTraceId' => 'global_trace_id',
            'globalPath' => 'global_path',
            'traceId' => 'trace_id',
            'spanId' => 'span_id',
            'envId' => 'env_id',
            'instanceId' => 'instance_id',
            'appId' => 'app_id',
            'bizId' => 'biz_id',
            'domainId' => 'domain_id',
            'source' => 'source',
            'realSource' => 'real_source',
            'startTime' => 'start_time',
            'timeUsed' => 'time_used',
            'code' => 'code',
            'className' => 'class_name',
            'isAsync' => 'is_async',
            'tags' => 'tags',
            'hasError' => 'has_error',
            'errorReasons' => 'error_reasons',
            'type' => 'type',
            'httpMethod' => 'http_method',
            'bizCode' => 'biz_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  region名称。
    * orderParam  orderParam
    * realSourceFullMatch  是否为精确搜索。
    * sourceFullMatch  全匹配搜索。
    * tagsContent  header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    * startTimeString  开始时间。
    * endTimeString  结束时间。
    * timeUsedMin  最小耗时。
    * timeUsedMax  最大耗时。
    * containTagsContent  搜索结果是否包含tags内容详情。
    * pageSize  每一页返回的行数。
    * page  查询第几页的数据,默认查询第一页。
    * parameters  参数。
    * codes  字符串格式的的状态码，用于支持多个状态码查询。
    * globalTraceId  vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  在root的span调用产生的全局id，以此往后透传。
    * spanId  代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event 的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误。
    * errorReasons  错误类型。
    * type  类型。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'orderParam' => 'setOrderParam',
            'realSourceFullMatch' => 'setRealSourceFullMatch',
            'sourceFullMatch' => 'setSourceFullMatch',
            'tagsContent' => 'setTagsContent',
            'startTimeString' => 'setStartTimeString',
            'endTimeString' => 'setEndTimeString',
            'timeUsedMin' => 'setTimeUsedMin',
            'timeUsedMax' => 'setTimeUsedMax',
            'containTagsContent' => 'setContainTagsContent',
            'pageSize' => 'setPageSize',
            'page' => 'setPage',
            'parameters' => 'setParameters',
            'codes' => 'setCodes',
            'globalTraceId' => 'setGlobalTraceId',
            'globalPath' => 'setGlobalPath',
            'traceId' => 'setTraceId',
            'spanId' => 'setSpanId',
            'envId' => 'setEnvId',
            'instanceId' => 'setInstanceId',
            'appId' => 'setAppId',
            'bizId' => 'setBizId',
            'domainId' => 'setDomainId',
            'source' => 'setSource',
            'realSource' => 'setRealSource',
            'startTime' => 'setStartTime',
            'timeUsed' => 'setTimeUsed',
            'code' => 'setCode',
            'className' => 'setClassName',
            'isAsync' => 'setIsAsync',
            'tags' => 'setTags',
            'hasError' => 'setHasError',
            'errorReasons' => 'setErrorReasons',
            'type' => 'setType',
            'httpMethod' => 'setHttpMethod',
            'bizCode' => 'setBizCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  region名称。
    * orderParam  orderParam
    * realSourceFullMatch  是否为精确搜索。
    * sourceFullMatch  全匹配搜索。
    * tagsContent  header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    * startTimeString  开始时间。
    * endTimeString  结束时间。
    * timeUsedMin  最小耗时。
    * timeUsedMax  最大耗时。
    * containTagsContent  搜索结果是否包含tags内容详情。
    * pageSize  每一页返回的行数。
    * page  查询第几页的数据,默认查询第一页。
    * parameters  参数。
    * codes  字符串格式的的状态码，用于支持多个状态码查询。
    * globalTraceId  vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  在root的span调用产生的全局id，以此往后透传。
    * spanId  代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event 的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误。
    * errorReasons  错误类型。
    * type  类型。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'orderParam' => 'getOrderParam',
            'realSourceFullMatch' => 'getRealSourceFullMatch',
            'sourceFullMatch' => 'getSourceFullMatch',
            'tagsContent' => 'getTagsContent',
            'startTimeString' => 'getStartTimeString',
            'endTimeString' => 'getEndTimeString',
            'timeUsedMin' => 'getTimeUsedMin',
            'timeUsedMax' => 'getTimeUsedMax',
            'containTagsContent' => 'getContainTagsContent',
            'pageSize' => 'getPageSize',
            'page' => 'getPage',
            'parameters' => 'getParameters',
            'codes' => 'getCodes',
            'globalTraceId' => 'getGlobalTraceId',
            'globalPath' => 'getGlobalPath',
            'traceId' => 'getTraceId',
            'spanId' => 'getSpanId',
            'envId' => 'getEnvId',
            'instanceId' => 'getInstanceId',
            'appId' => 'getAppId',
            'bizId' => 'getBizId',
            'domainId' => 'getDomainId',
            'source' => 'getSource',
            'realSource' => 'getRealSource',
            'startTime' => 'getStartTime',
            'timeUsed' => 'getTimeUsed',
            'code' => 'getCode',
            'className' => 'getClassName',
            'isAsync' => 'getIsAsync',
            'tags' => 'getTags',
            'hasError' => 'getHasError',
            'errorReasons' => 'getErrorReasons',
            'type' => 'getType',
            'httpMethod' => 'getHttpMethod',
            'bizCode' => 'getBizCode'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['orderParam'] = isset($data['orderParam']) ? $data['orderParam'] : null;
        $this->container['realSourceFullMatch'] = isset($data['realSourceFullMatch']) ? $data['realSourceFullMatch'] : null;
        $this->container['sourceFullMatch'] = isset($data['sourceFullMatch']) ? $data['sourceFullMatch'] : null;
        $this->container['tagsContent'] = isset($data['tagsContent']) ? $data['tagsContent'] : null;
        $this->container['startTimeString'] = isset($data['startTimeString']) ? $data['startTimeString'] : null;
        $this->container['endTimeString'] = isset($data['endTimeString']) ? $data['endTimeString'] : null;
        $this->container['timeUsedMin'] = isset($data['timeUsedMin']) ? $data['timeUsedMin'] : null;
        $this->container['timeUsedMax'] = isset($data['timeUsedMax']) ? $data['timeUsedMax'] : null;
        $this->container['containTagsContent'] = isset($data['containTagsContent']) ? $data['containTagsContent'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['codes'] = isset($data['codes']) ? $data['codes'] : null;
        $this->container['globalTraceId'] = isset($data['globalTraceId']) ? $data['globalTraceId'] : null;
        $this->container['globalPath'] = isset($data['globalPath']) ? $data['globalPath'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['spanId'] = isset($data['spanId']) ? $data['spanId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['realSource'] = isset($data['realSource']) ? $data['realSource'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['timeUsed'] = isset($data['timeUsed']) ? $data['timeUsed'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['className'] = isset($data['className']) ? $data['className'] : null;
        $this->container['isAsync'] = isset($data['isAsync']) ? $data['isAsync'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['hasError'] = isset($data['hasError']) ? $data['hasError'] : null;
        $this->container['errorReasons'] = isset($data['errorReasons']) ? $data['errorReasons'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['bizCode'] = isset($data['bizCode']) ? $data['bizCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['bizId'] === null) {
            $invalidProperties[] = "'bizId' can't be null";
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
    * Gets region
    *  region名称。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region region名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets orderParam
    *  orderParam
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\OrderParam|null
    */
    public function getOrderParam()
    {
        return $this->container['orderParam'];
    }

    /**
    * Sets orderParam
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\OrderParam|null $orderParam orderParam
    *
    * @return $this
    */
    public function setOrderParam($orderParam)
    {
        $this->container['orderParam'] = $orderParam;
        return $this;
    }

    /**
    * Gets realSourceFullMatch
    *  是否为精确搜索。
    *
    * @return bool|null
    */
    public function getRealSourceFullMatch()
    {
        return $this->container['realSourceFullMatch'];
    }

    /**
    * Sets realSourceFullMatch
    *
    * @param bool|null $realSourceFullMatch 是否为精确搜索。
    *
    * @return $this
    */
    public function setRealSourceFullMatch($realSourceFullMatch)
    {
        $this->container['realSourceFullMatch'] = $realSourceFullMatch;
        return $this;
    }

    /**
    * Gets sourceFullMatch
    *  全匹配搜索。
    *
    * @return bool|null
    */
    public function getSourceFullMatch()
    {
        return $this->container['sourceFullMatch'];
    }

    /**
    * Sets sourceFullMatch
    *
    * @param bool|null $sourceFullMatch 全匹配搜索。
    *
    * @return $this
    */
    public function setSourceFullMatch($sourceFullMatch)
    {
        $this->container['sourceFullMatch'] = $sourceFullMatch;
        return $this;
    }

    /**
    * Gets tagsContent
    *  header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    *
    * @return string|null
    */
    public function getTagsContent()
    {
        return $this->container['tagsContent'];
    }

    /**
    * Sets tagsContent
    *
    * @param string|null $tagsContent header或body体，或自定义参数，或其他tags里字段的关键词搜索。
    *
    * @return $this
    */
    public function setTagsContent($tagsContent)
    {
        $this->container['tagsContent'] = $tagsContent;
        return $this;
    }

    /**
    * Gets startTimeString
    *  开始时间。
    *
    * @return string|null
    */
    public function getStartTimeString()
    {
        return $this->container['startTimeString'];
    }

    /**
    * Sets startTimeString
    *
    * @param string|null $startTimeString 开始时间。
    *
    * @return $this
    */
    public function setStartTimeString($startTimeString)
    {
        $this->container['startTimeString'] = $startTimeString;
        return $this;
    }

    /**
    * Gets endTimeString
    *  结束时间。
    *
    * @return string|null
    */
    public function getEndTimeString()
    {
        return $this->container['endTimeString'];
    }

    /**
    * Sets endTimeString
    *
    * @param string|null $endTimeString 结束时间。
    *
    * @return $this
    */
    public function setEndTimeString($endTimeString)
    {
        $this->container['endTimeString'] = $endTimeString;
        return $this;
    }

    /**
    * Gets timeUsedMin
    *  最小耗时。
    *
    * @return int|null
    */
    public function getTimeUsedMin()
    {
        return $this->container['timeUsedMin'];
    }

    /**
    * Sets timeUsedMin
    *
    * @param int|null $timeUsedMin 最小耗时。
    *
    * @return $this
    */
    public function setTimeUsedMin($timeUsedMin)
    {
        $this->container['timeUsedMin'] = $timeUsedMin;
        return $this;
    }

    /**
    * Gets timeUsedMax
    *  最大耗时。
    *
    * @return string|null
    */
    public function getTimeUsedMax()
    {
        return $this->container['timeUsedMax'];
    }

    /**
    * Sets timeUsedMax
    *
    * @param string|null $timeUsedMax 最大耗时。
    *
    * @return $this
    */
    public function setTimeUsedMax($timeUsedMax)
    {
        $this->container['timeUsedMax'] = $timeUsedMax;
        return $this;
    }

    /**
    * Gets containTagsContent
    *  搜索结果是否包含tags内容详情。
    *
    * @return bool|null
    */
    public function getContainTagsContent()
    {
        return $this->container['containTagsContent'];
    }

    /**
    * Sets containTagsContent
    *
    * @param bool|null $containTagsContent 搜索结果是否包含tags内容详情。
    *
    * @return $this
    */
    public function setContainTagsContent($containTagsContent)
    {
        $this->container['containTagsContent'] = $containTagsContent;
        return $this;
    }

    /**
    * Gets pageSize
    *  每一页返回的行数。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每一页返回的行数。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets page
    *  查询第几页的数据,默认查询第一页。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 查询第几页的数据,默认查询第一页。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets parameters
    *  参数。
    *
    * @return string|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param string|null $parameters 参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets codes
    *  字符串格式的的状态码，用于支持多个状态码查询。
    *
    * @return int[]|null
    */
    public function getCodes()
    {
        return $this->container['codes'];
    }

    /**
    * Sets codes
    *
    * @param int[]|null $codes 字符串格式的的状态码，用于支持多个状态码查询。
    *
    * @return $this
    */
    public function setCodes($codes)
    {
        $this->container['codes'] = $codes;
        return $this;
    }

    /**
    * Gets globalTraceId
    *  vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    *
    * @return string|null
    */
    public function getGlobalTraceId()
    {
        return $this->container['globalTraceId'];
    }

    /**
    * Sets globalTraceId
    *
    * @param string|null $globalTraceId vTraceId，虚拟traceId，一个vTraceId对应多个实际的traceId， vTraceId会从开始一直往下应用传输。
    *
    * @return $this
    */
    public function setGlobalTraceId($globalTraceId)
    {
        $this->container['globalTraceId'] = $globalTraceId;
        return $this;
    }

    /**
    * Gets globalPath
    *  虚拟traceId经过的path路径。
    *
    * @return string|null
    */
    public function getGlobalPath()
    {
        return $this->container['globalPath'];
    }

    /**
    * Sets globalPath
    *
    * @param string|null $globalPath 虚拟traceId经过的path路径。
    *
    * @return $this
    */
    public function setGlobalPath($globalPath)
    {
        $this->container['globalPath'] = $globalPath;
        return $this;
    }

    /**
    * Gets traceId
    *  在root的span调用产生的全局id，以此往后透传。
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
    * @param string|null $traceId 在root的span调用产生的全局id，以此往后透传。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets spanId
    *  代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    *
    * @return string|null
    */
    public function getSpanId()
    {
        return $this->container['spanId'];
    }

    /**
    * Sets spanId
    *
    * @param string|null $spanId 代表一次rpc的调用的id，对于root的调用，值为字符串1，对于当前span调用的下一个spanId编号为1-1,1-2等格式，以此往后类推。
    *
    * @return $this
    */
    public function setSpanId($spanId)
    {
        $this->container['spanId'] = $spanId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets appId
    *  组件id。
    *
    * @return int|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param int|null $appId 组件id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets bizId
    *  应用id。
    *
    * @return int
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param int $bizId 应用id。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id。
    *
    * @return int|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param int|null $domainId 租户id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets source
    *  只有是根event也就是span的时候有值。
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 只有是根event也就是span的时候有值。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets realSource
    *  根event 的时候存在，实际调用的url。
    *
    * @return string|null
    */
    public function getRealSource()
    {
        return $this->container['realSource'];
    }

    /**
    * Sets realSource
    *
    * @param string|null $realSource 根event 的时候存在，实际调用的url。
    *
    * @return $this
    */
    public function setRealSource($realSource)
    {
        $this->container['realSource'] = $realSource;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
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
    * @param int|null $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets timeUsed
    *  耗时。
    *
    * @return int|null
    */
    public function getTimeUsed()
    {
        return $this->container['timeUsed'];
    }

    /**
    * Sets timeUsed
    *
    * @param int|null $timeUsed 耗时。
    *
    * @return $this
    */
    public function setTimeUsed($timeUsed)
    {
        $this->container['timeUsed'] = $timeUsed;
        return $this;
    }

    /**
    * Gets code
    *  状态码，针对http的调用有效。
    *
    * @return int|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param int|null $code 状态码，针对http的调用有效。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets className
    *  类名。
    *
    * @return string|null
    */
    public function getClassName()
    {
        return $this->container['className'];
    }

    /**
    * Sets className
    *
    * @param string|null $className 类名。
    *
    * @return $this
    */
    public function setClassName($className)
    {
        $this->container['className'] = $className;
        return $this;
    }

    /**
    * Gets isAsync
    *  是否异步的event。
    *
    * @return bool|null
    */
    public function getIsAsync()
    {
        return $this->container['isAsync'];
    }

    /**
    * Sets isAsync
    *
    * @param bool|null $isAsync 是否异步的event。
    *
    * @return $this
    */
    public function setIsAsync($isAsync)
    {
        $this->container['isAsync'] = $isAsync;
        return $this;
    }

    /**
    * Gets tags
    *  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets hasError
    *  是否有错误。
    *
    * @return bool|null
    */
    public function getHasError()
    {
        return $this->container['hasError'];
    }

    /**
    * Sets hasError
    *
    * @param bool|null $hasError 是否有错误。
    *
    * @return $this
    */
    public function setHasError($hasError)
    {
        $this->container['hasError'] = $hasError;
        return $this;
    }

    /**
    * Gets errorReasons
    *  错误类型。
    *
    * @return string|null
    */
    public function getErrorReasons()
    {
        return $this->container['errorReasons'];
    }

    /**
    * Sets errorReasons
    *
    * @param string|null $errorReasons 错误类型。
    *
    * @return $this
    */
    public function setErrorReasons($errorReasons)
    {
        $this->container['errorReasons'] = $errorReasons;
        return $this;
    }

    /**
    * Gets type
    *  类型。
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
    * @param string|null $type 类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets httpMethod
    *  这里的method实际上是tags里面的http_method，只有url监控项才有。
    *
    * @return string|null
    */
    public function getHttpMethod()
    {
        return $this->container['httpMethod'];
    }

    /**
    * Sets httpMethod
    *
    * @param string|null $httpMethod 这里的method实际上是tags里面的http_method，只有url监控项才有。
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets bizCode
    *  业务状态码的采集。
    *
    * @return string|null
    */
    public function getBizCode()
    {
        return $this->container['bizCode'];
    }

    /**
    * Sets bizCode
    *
    * @param string|null $bizCode 业务状态码的采集。
    *
    * @return $this
    */
    public function setBizCode($bizCode)
    {
        $this->container['bizCode'] = $bizCode;
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

