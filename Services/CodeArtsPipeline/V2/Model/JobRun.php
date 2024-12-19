<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobRun';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * category  任务类型
    * sequence  序列号
    * async  是否异步
    * name  任务名称
    * identifier  任务唯一标识
    * dependsOn  依赖
    * condition  运行条件
    * resource  执行资源
    * isSelect  是否选中
    * timeout  任务超时设置
    * lastDispatchId  任务上次下发ID
    * status  状态
    * message  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * steps  步骤
    * execId  任务执行ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'category' => 'string',
            'sequence' => 'int',
            'async' => 'bool',
            'name' => 'string',
            'identifier' => 'string',
            'dependsOn' => 'string[]',
            'condition' => 'string',
            'resource' => 'string',
            'isSelect' => 'bool',
            'timeout' => 'string',
            'lastDispatchId' => 'string',
            'status' => 'string',
            'message' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'steps' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StepRun[]',
            'execId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * category  任务类型
    * sequence  序列号
    * async  是否异步
    * name  任务名称
    * identifier  任务唯一标识
    * dependsOn  依赖
    * condition  运行条件
    * resource  执行资源
    * isSelect  是否选中
    * timeout  任务超时设置
    * lastDispatchId  任务上次下发ID
    * status  状态
    * message  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * steps  步骤
    * execId  任务执行ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'category' => null,
        'sequence' => 'int32',
        'async' => null,
        'name' => null,
        'identifier' => null,
        'dependsOn' => null,
        'condition' => null,
        'resource' => null,
        'isSelect' => null,
        'timeout' => null,
        'lastDispatchId' => null,
        'status' => null,
        'message' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'steps' => null,
        'execId' => null
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
    * id  任务ID
    * category  任务类型
    * sequence  序列号
    * async  是否异步
    * name  任务名称
    * identifier  任务唯一标识
    * dependsOn  依赖
    * condition  运行条件
    * resource  执行资源
    * isSelect  是否选中
    * timeout  任务超时设置
    * lastDispatchId  任务上次下发ID
    * status  状态
    * message  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * steps  步骤
    * execId  任务执行ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'category' => 'category',
            'sequence' => 'sequence',
            'async' => 'async',
            'name' => 'name',
            'identifier' => 'identifier',
            'dependsOn' => 'depends_on',
            'condition' => 'condition',
            'resource' => 'resource',
            'isSelect' => 'is_select',
            'timeout' => 'timeout',
            'lastDispatchId' => 'last_dispatch_id',
            'status' => 'status',
            'message' => 'message',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'steps' => 'steps',
            'execId' => 'exec_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * category  任务类型
    * sequence  序列号
    * async  是否异步
    * name  任务名称
    * identifier  任务唯一标识
    * dependsOn  依赖
    * condition  运行条件
    * resource  执行资源
    * isSelect  是否选中
    * timeout  任务超时设置
    * lastDispatchId  任务上次下发ID
    * status  状态
    * message  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * steps  步骤
    * execId  任务执行ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'category' => 'setCategory',
            'sequence' => 'setSequence',
            'async' => 'setAsync',
            'name' => 'setName',
            'identifier' => 'setIdentifier',
            'dependsOn' => 'setDependsOn',
            'condition' => 'setCondition',
            'resource' => 'setResource',
            'isSelect' => 'setIsSelect',
            'timeout' => 'setTimeout',
            'lastDispatchId' => 'setLastDispatchId',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'steps' => 'setSteps',
            'execId' => 'setExecId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * category  任务类型
    * sequence  序列号
    * async  是否异步
    * name  任务名称
    * identifier  任务唯一标识
    * dependsOn  依赖
    * condition  运行条件
    * resource  执行资源
    * isSelect  是否选中
    * timeout  任务超时设置
    * lastDispatchId  任务上次下发ID
    * status  状态
    * message  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * steps  步骤
    * execId  任务执行ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'category' => 'getCategory',
            'sequence' => 'getSequence',
            'async' => 'getAsync',
            'name' => 'getName',
            'identifier' => 'getIdentifier',
            'dependsOn' => 'getDependsOn',
            'condition' => 'getCondition',
            'resource' => 'getResource',
            'isSelect' => 'getIsSelect',
            'timeout' => 'getTimeout',
            'lastDispatchId' => 'getLastDispatchId',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'steps' => 'getSteps',
            'execId' => 'getExecId'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['async'] = isset($data['async']) ? $data['async'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['dependsOn'] = isset($data['dependsOn']) ? $data['dependsOn'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['isSelect'] = isset($data['isSelect']) ? $data['isSelect'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['lastDispatchId'] = isset($data['lastDispatchId']) ? $data['lastDispatchId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['execId'] = isset($data['execId']) ? $data['execId'] : null;
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
    *  任务ID
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
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets category
    *  任务类型
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 任务类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets sequence
    *  序列号
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 序列号
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets async
    *  是否异步
    *
    * @return bool|null
    */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
    * Sets async
    *
    * @param bool|null $async 是否异步
    *
    * @return $this
    */
    public function setAsync($async)
    {
        $this->container['async'] = $async;
        return $this;
    }

    /**
    * Gets name
    *  任务名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets identifier
    *  任务唯一标识
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier 任务唯一标识
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets dependsOn
    *  依赖
    *
    * @return string[]|null
    */
    public function getDependsOn()
    {
        return $this->container['dependsOn'];
    }

    /**
    * Sets dependsOn
    *
    * @param string[]|null $dependsOn 依赖
    *
    * @return $this
    */
    public function setDependsOn($dependsOn)
    {
        $this->container['dependsOn'] = $dependsOn;
        return $this;
    }

    /**
    * Gets condition
    *  运行条件
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 运行条件
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets resource
    *  执行资源
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 执行资源
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets isSelect
    *  是否选中
    *
    * @return bool|null
    */
    public function getIsSelect()
    {
        return $this->container['isSelect'];
    }

    /**
    * Sets isSelect
    *
    * @param bool|null $isSelect 是否选中
    *
    * @return $this
    */
    public function setIsSelect($isSelect)
    {
        $this->container['isSelect'] = $isSelect;
        return $this;
    }

    /**
    * Gets timeout
    *  任务超时设置
    *
    * @return string|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param string|null $timeout 任务超时设置
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets lastDispatchId
    *  任务上次下发ID
    *
    * @return string|null
    */
    public function getLastDispatchId()
    {
        return $this->container['lastDispatchId'];
    }

    /**
    * Sets lastDispatchId
    *
    * @param string|null $lastDispatchId 任务上次下发ID
    *
    * @return $this
    */
    public function setLastDispatchId($lastDispatchId)
    {
        $this->container['lastDispatchId'] = $lastDispatchId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  错误信息
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
    * @param string|null $message 错误信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param int|null $startTime 开始时间
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
    *  结束时间
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
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets steps
    *  步骤
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StepRun[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StepRun[]|null $steps 步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets execId
    *  任务执行ID
    *
    * @return string|null
    */
    public function getExecId()
    {
        return $this->container['execId'];
    }

    /**
    * Sets execId
    *
    * @param string|null $execId 任务执行ID
    *
    * @return $this
    */
    public function setExecId($execId)
    {
        $this->container['execId'] = $execId;
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

