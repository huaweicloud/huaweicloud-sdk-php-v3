<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpanEventInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpanEventInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envName  环境名称。
    * appName  组件名称。
    * indent  缩进。
    * region  区域。
    * hostName  主机名称。
    * ipAddress  ip地址。
    * instanceName  实例名称。
    * eventId  event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
    * nextSpanId  产生下一个span的源的eventId。
    * sourceEventId  调用方的eventid。
    * method  方法名。
    * childrenEventCount  子event的个数。
    * discard  丢弃的子event个数，key是类型。
    * argument  界面展示的参数，每个类型的event自己来实现。
    * attachment  注册信息里面的attachment。
    * globalTraceId  vTraceId，虚拟traceId。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误，主要用在span的场景。
    * errorReasons  错误原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    * id  spanId。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envName' => 'string',
            'appName' => 'string',
            'indent' => 'int',
            'region' => 'string',
            'hostName' => 'string',
            'ipAddress' => 'string',
            'instanceName' => 'string',
            'eventId' => 'string',
            'nextSpanId' => 'string',
            'sourceEventId' => 'string',
            'method' => 'string',
            'childrenEventCount' => 'int',
            'discard' => '\HuaweiCloud\SDK\Apm\V1\Model\DiscardInfo[]',
            'argument' => 'string',
            'attachment' => 'map[string,string]',
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
            'bizCode' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envName  环境名称。
    * appName  组件名称。
    * indent  缩进。
    * region  区域。
    * hostName  主机名称。
    * ipAddress  ip地址。
    * instanceName  实例名称。
    * eventId  event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
    * nextSpanId  产生下一个span的源的eventId。
    * sourceEventId  调用方的eventid。
    * method  方法名。
    * childrenEventCount  子event的个数。
    * discard  丢弃的子event个数，key是类型。
    * argument  界面展示的参数，每个类型的event自己来实现。
    * attachment  注册信息里面的attachment。
    * globalTraceId  vTraceId，虚拟traceId。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误，主要用在span的场景。
    * errorReasons  错误原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    * id  spanId。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envName' => null,
        'appName' => null,
        'indent' => 'int32',
        'region' => null,
        'hostName' => null,
        'ipAddress' => null,
        'instanceName' => null,
        'eventId' => null,
        'nextSpanId' => null,
        'sourceEventId' => null,
        'method' => null,
        'childrenEventCount' => 'int32',
        'discard' => null,
        'argument' => null,
        'attachment' => null,
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
        'bizCode' => null,
        'id' => null
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
    * envName  环境名称。
    * appName  组件名称。
    * indent  缩进。
    * region  区域。
    * hostName  主机名称。
    * ipAddress  ip地址。
    * instanceName  实例名称。
    * eventId  event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
    * nextSpanId  产生下一个span的源的eventId。
    * sourceEventId  调用方的eventid。
    * method  方法名。
    * childrenEventCount  子event的个数。
    * discard  丢弃的子event个数，key是类型。
    * argument  界面展示的参数，每个类型的event自己来实现。
    * attachment  注册信息里面的attachment。
    * globalTraceId  vTraceId，虚拟traceId。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误，主要用在span的场景。
    * errorReasons  错误原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    * id  spanId。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envName' => 'env_name',
            'appName' => 'app_name',
            'indent' => 'indent',
            'region' => 'region',
            'hostName' => 'host_name',
            'ipAddress' => 'ip_address',
            'instanceName' => 'instance_name',
            'eventId' => 'event_id',
            'nextSpanId' => 'next_spanId',
            'sourceEventId' => 'source_event_id',
            'method' => 'method',
            'childrenEventCount' => 'children_event_count',
            'discard' => 'discard',
            'argument' => 'argument',
            'attachment' => 'attachment',
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
            'bizCode' => 'biz_code',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envName  环境名称。
    * appName  组件名称。
    * indent  缩进。
    * region  区域。
    * hostName  主机名称。
    * ipAddress  ip地址。
    * instanceName  实例名称。
    * eventId  event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
    * nextSpanId  产生下一个span的源的eventId。
    * sourceEventId  调用方的eventid。
    * method  方法名。
    * childrenEventCount  子event的个数。
    * discard  丢弃的子event个数，key是类型。
    * argument  界面展示的参数，每个类型的event自己来实现。
    * attachment  注册信息里面的attachment。
    * globalTraceId  vTraceId，虚拟traceId。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误，主要用在span的场景。
    * errorReasons  错误原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    * id  spanId。
    *
    * @var string[]
    */
    protected static $setters = [
            'envName' => 'setEnvName',
            'appName' => 'setAppName',
            'indent' => 'setIndent',
            'region' => 'setRegion',
            'hostName' => 'setHostName',
            'ipAddress' => 'setIpAddress',
            'instanceName' => 'setInstanceName',
            'eventId' => 'setEventId',
            'nextSpanId' => 'setNextSpanId',
            'sourceEventId' => 'setSourceEventId',
            'method' => 'setMethod',
            'childrenEventCount' => 'setChildrenEventCount',
            'discard' => 'setDiscard',
            'argument' => 'setArgument',
            'attachment' => 'setAttachment',
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
            'bizCode' => 'setBizCode',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envName  环境名称。
    * appName  组件名称。
    * indent  缩进。
    * region  区域。
    * hostName  主机名称。
    * ipAddress  ip地址。
    * instanceName  实例名称。
    * eventId  event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
    * nextSpanId  产生下一个span的源的eventId。
    * sourceEventId  调用方的eventid。
    * method  方法名。
    * childrenEventCount  子event的个数。
    * discard  丢弃的子event个数，key是类型。
    * argument  界面展示的参数，每个类型的event自己来实现。
    * attachment  注册信息里面的attachment。
    * globalTraceId  vTraceId，虚拟traceId。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境id。
    * instanceId  实例id。
    * appId  组件id。
    * bizId  应用id。
    * domainId  租户id。
    * source  只有是根event也就是span的时候有值。
    * realSource  根event的时候存在，实际调用的url。
    * startTime  开始时间。
    * timeUsed  耗时。
    * code  状态码，针对http的调用有效。
    * className  类名。
    * isAsync  是否异步的event。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否有错误，主要用在span的场景。
    * errorReasons  错误原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    * id  spanId。
    *
    * @var string[]
    */
    protected static $getters = [
            'envName' => 'getEnvName',
            'appName' => 'getAppName',
            'indent' => 'getIndent',
            'region' => 'getRegion',
            'hostName' => 'getHostName',
            'ipAddress' => 'getIpAddress',
            'instanceName' => 'getInstanceName',
            'eventId' => 'getEventId',
            'nextSpanId' => 'getNextSpanId',
            'sourceEventId' => 'getSourceEventId',
            'method' => 'getMethod',
            'childrenEventCount' => 'getChildrenEventCount',
            'discard' => 'getDiscard',
            'argument' => 'getArgument',
            'attachment' => 'getAttachment',
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
            'bizCode' => 'getBizCode',
            'id' => 'getId'
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
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['indent'] = isset($data['indent']) ? $data['indent'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['nextSpanId'] = isset($data['nextSpanId']) ? $data['nextSpanId'] : null;
        $this->container['sourceEventId'] = isset($data['sourceEventId']) ? $data['sourceEventId'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['childrenEventCount'] = isset($data['childrenEventCount']) ? $data['childrenEventCount'] : null;
        $this->container['discard'] = isset($data['discard']) ? $data['discard'] : null;
        $this->container['argument'] = isset($data['argument']) ? $data['argument'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets envName
    *  环境名称。
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 环境名称。
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets indent
    *  缩进。
    *
    * @return int|null
    */
    public function getIndent()
    {
        return $this->container['indent'];
    }

    /**
    * Sets indent
    *
    * @param int|null $indent 缩进。
    *
    * @return $this
    */
    public function setIndent($indent)
    {
        $this->container['indent'] = $indent;
        return $this;
    }

    /**
    * Gets region
    *  区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称。
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets ipAddress
    *  ip地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress ip地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets eventId
    *  event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
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
    * @param string|null $eventId event的ID，在一个具体的span下面event的编号，一般是1-1-2这种格式。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets nextSpanId
    *  产生下一个span的源的eventId。
    *
    * @return string|null
    */
    public function getNextSpanId()
    {
        return $this->container['nextSpanId'];
    }

    /**
    * Sets nextSpanId
    *
    * @param string|null $nextSpanId 产生下一个span的源的eventId。
    *
    * @return $this
    */
    public function setNextSpanId($nextSpanId)
    {
        $this->container['nextSpanId'] = $nextSpanId;
        return $this;
    }

    /**
    * Gets sourceEventId
    *  调用方的eventid。
    *
    * @return string|null
    */
    public function getSourceEventId()
    {
        return $this->container['sourceEventId'];
    }

    /**
    * Sets sourceEventId
    *
    * @param string|null $sourceEventId 调用方的eventid。
    *
    * @return $this
    */
    public function setSourceEventId($sourceEventId)
    {
        $this->container['sourceEventId'] = $sourceEventId;
        return $this;
    }

    /**
    * Gets method
    *  方法名。
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 方法名。
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets childrenEventCount
    *  子event的个数。
    *
    * @return int|null
    */
    public function getChildrenEventCount()
    {
        return $this->container['childrenEventCount'];
    }

    /**
    * Sets childrenEventCount
    *
    * @param int|null $childrenEventCount 子event的个数。
    *
    * @return $this
    */
    public function setChildrenEventCount($childrenEventCount)
    {
        $this->container['childrenEventCount'] = $childrenEventCount;
        return $this;
    }

    /**
    * Gets discard
    *  丢弃的子event个数，key是类型。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\DiscardInfo[]|null
    */
    public function getDiscard()
    {
        return $this->container['discard'];
    }

    /**
    * Sets discard
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\DiscardInfo[]|null $discard 丢弃的子event个数，key是类型。
    *
    * @return $this
    */
    public function setDiscard($discard)
    {
        $this->container['discard'] = $discard;
        return $this;
    }

    /**
    * Gets argument
    *  界面展示的参数，每个类型的event自己来实现。
    *
    * @return string|null
    */
    public function getArgument()
    {
        return $this->container['argument'];
    }

    /**
    * Sets argument
    *
    * @param string|null $argument 界面展示的参数，每个类型的event自己来实现。
    *
    * @return $this
    */
    public function setArgument($argument)
    {
        $this->container['argument'] = $argument;
        return $this;
    }

    /**
    * Gets attachment
    *  注册信息里面的attachment。
    *
    * @return map[string,string]|null
    */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
    * Sets attachment
    *
    * @param map[string,string]|null $attachment 注册信息里面的attachment。
    *
    * @return $this
    */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;
        return $this;
    }

    /**
    * Gets globalTraceId
    *  vTraceId，虚拟traceId。
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
    * @param string|null $globalTraceId vTraceId，虚拟traceId。
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
    *  traceId。
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
    * @param string|null $traceId traceId。
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
    *  span id。
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
    * @param string|null $spanId span id。
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
    * @return int|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param int|null $bizId 应用id。
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
    *  根event的时候存在，实际调用的url。
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
    * @param string|null $realSource 根event的时候存在，实际调用的url。
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
    *  是否有错误，主要用在span的场景。
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
    * @param bool|null $hasError 是否有错误，主要用在span的场景。
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
    *  错误原因。
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
    * @param string|null $errorReasons 错误原因。
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
    *  类型，mysql，kafka等。
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
    * @param string|null $type 类型，mysql，kafka等。
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
    * Gets id
    *  spanId。
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
    * @param string|null $id spanId。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

