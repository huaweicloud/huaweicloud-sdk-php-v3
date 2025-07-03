<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClientSpanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClientSpanInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalTraceId  vTraceId，虚拟traceI。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境Iid。
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
    * isAsync  是否异步。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否报错。
    * errorReasons  报错原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
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
    * globalTraceId  vTraceId，虚拟traceI。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境Iid。
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
    * isAsync  是否异步。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否报错。
    * errorReasons  报错原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * globalTraceId  vTraceId，虚拟traceI。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境Iid。
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
    * isAsync  是否异步。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否报错。
    * errorReasons  报错原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $attributeMap = [
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
    * globalTraceId  vTraceId，虚拟traceI。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境Iid。
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
    * isAsync  是否异步。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否报错。
    * errorReasons  报错原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $setters = [
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
    * globalTraceId  vTraceId，虚拟traceI。
    * globalPath  虚拟traceId经过的path路径。
    * traceId  traceId。
    * spanId  span id。
    * envId  环境Iid。
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
    * isAsync  是否异步。
    * tags  包含用户自定义参数，header或body体里的内容，httpMethod, bizCode，以及后续可能新增参数。
    * hasError  是否报错。
    * errorReasons  报错原因。
    * type  类型，mysql，kafka等。
    * httpMethod  这里的method实际上是tags里面的http_method，只有url监控项才有。
    * bizCode  业务状态码的采集。
    *
    * @var string[]
    */
    protected static $getters = [
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
    * Gets globalTraceId
    *  vTraceId，虚拟traceI。
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
    * @param string|null $globalTraceId vTraceId，虚拟traceI。
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
    *  环境Iid。
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
    * @param int|null $envId 环境Iid。
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
    *  是否异步。
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
    * @param bool|null $isAsync 是否异步。
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
    *  是否报错。
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
    * @param bool|null $hasError 是否报错。
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
    *  报错原因。
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
    * @param string|null $errorReasons 报错原因。
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

