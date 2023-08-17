<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StepRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StepRun';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  步骤名称
    * task  步骤插件
    * businessType  插件业务类型
    * inputs  输入参数
    * sequence  序列号
    * officialTaskVersion  官方插件版本号
    * identifier  唯一标识符
    * multiStepEditable  是否可编辑
    * id  步骤ID
    * endpointIds  扩展点
    * lastDispatchId  上次下发任务ID
    * status  状态
    * message  错误消息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'task' => 'string',
            'businessType' => 'string',
            'inputs' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRunInputs[]',
            'sequence' => 'int',
            'officialTaskVersion' => 'string',
            'identifier' => 'string',
            'multiStepEditable' => 'int',
            'id' => 'string',
            'endpointIds' => 'string',
            'lastDispatchId' => 'string',
            'status' => 'string',
            'message' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  步骤名称
    * task  步骤插件
    * businessType  插件业务类型
    * inputs  输入参数
    * sequence  序列号
    * officialTaskVersion  官方插件版本号
    * identifier  唯一标识符
    * multiStepEditable  是否可编辑
    * id  步骤ID
    * endpointIds  扩展点
    * lastDispatchId  上次下发任务ID
    * status  状态
    * message  错误消息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'task' => null,
        'businessType' => null,
        'inputs' => null,
        'sequence' => 'int32',
        'officialTaskVersion' => null,
        'identifier' => null,
        'multiStepEditable' => 'int32',
        'id' => null,
        'endpointIds' => null,
        'lastDispatchId' => null,
        'status' => null,
        'message' => null,
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * name  步骤名称
    * task  步骤插件
    * businessType  插件业务类型
    * inputs  输入参数
    * sequence  序列号
    * officialTaskVersion  官方插件版本号
    * identifier  唯一标识符
    * multiStepEditable  是否可编辑
    * id  步骤ID
    * endpointIds  扩展点
    * lastDispatchId  上次下发任务ID
    * status  状态
    * message  错误消息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'task' => 'task',
            'businessType' => 'business_type',
            'inputs' => 'inputs',
            'sequence' => 'sequence',
            'officialTaskVersion' => 'official_task_version',
            'identifier' => 'identifier',
            'multiStepEditable' => 'multi_step_editable',
            'id' => 'id',
            'endpointIds' => 'endpoint_ids',
            'lastDispatchId' => 'last_dispatch_id',
            'status' => 'status',
            'message' => 'message',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  步骤名称
    * task  步骤插件
    * businessType  插件业务类型
    * inputs  输入参数
    * sequence  序列号
    * officialTaskVersion  官方插件版本号
    * identifier  唯一标识符
    * multiStepEditable  是否可编辑
    * id  步骤ID
    * endpointIds  扩展点
    * lastDispatchId  上次下发任务ID
    * status  状态
    * message  错误消息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'task' => 'setTask',
            'businessType' => 'setBusinessType',
            'inputs' => 'setInputs',
            'sequence' => 'setSequence',
            'officialTaskVersion' => 'setOfficialTaskVersion',
            'identifier' => 'setIdentifier',
            'multiStepEditable' => 'setMultiStepEditable',
            'id' => 'setId',
            'endpointIds' => 'setEndpointIds',
            'lastDispatchId' => 'setLastDispatchId',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  步骤名称
    * task  步骤插件
    * businessType  插件业务类型
    * inputs  输入参数
    * sequence  序列号
    * officialTaskVersion  官方插件版本号
    * identifier  唯一标识符
    * multiStepEditable  是否可编辑
    * id  步骤ID
    * endpointIds  扩展点
    * lastDispatchId  上次下发任务ID
    * status  状态
    * message  错误消息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'task' => 'getTask',
            'businessType' => 'getBusinessType',
            'inputs' => 'getInputs',
            'sequence' => 'getSequence',
            'officialTaskVersion' => 'getOfficialTaskVersion',
            'identifier' => 'getIdentifier',
            'multiStepEditable' => 'getMultiStepEditable',
            'id' => 'getId',
            'endpointIds' => 'getEndpointIds',
            'lastDispatchId' => 'getLastDispatchId',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['officialTaskVersion'] = isset($data['officialTaskVersion']) ? $data['officialTaskVersion'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['multiStepEditable'] = isset($data['multiStepEditable']) ? $data['multiStepEditable'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['endpointIds'] = isset($data['endpointIds']) ? $data['endpointIds'] : null;
        $this->container['lastDispatchId'] = isset($data['lastDispatchId']) ? $data['lastDispatchId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets name
    *  步骤名称
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
    * @param string|null $name 步骤名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets task
    *  步骤插件
    *
    * @return string|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param string|null $task 步骤插件
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets businessType
    *  插件业务类型
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 插件业务类型
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets inputs
    *  输入参数
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRunInputs[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\StepRunInputs[]|null $inputs 输入参数
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
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
    * Gets officialTaskVersion
    *  官方插件版本号
    *
    * @return string|null
    */
    public function getOfficialTaskVersion()
    {
        return $this->container['officialTaskVersion'];
    }

    /**
    * Sets officialTaskVersion
    *
    * @param string|null $officialTaskVersion 官方插件版本号
    *
    * @return $this
    */
    public function setOfficialTaskVersion($officialTaskVersion)
    {
        $this->container['officialTaskVersion'] = $officialTaskVersion;
        return $this;
    }

    /**
    * Gets identifier
    *  唯一标识符
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
    * @param string|null $identifier 唯一标识符
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets multiStepEditable
    *  是否可编辑
    *
    * @return int|null
    */
    public function getMultiStepEditable()
    {
        return $this->container['multiStepEditable'];
    }

    /**
    * Sets multiStepEditable
    *
    * @param int|null $multiStepEditable 是否可编辑
    *
    * @return $this
    */
    public function setMultiStepEditable($multiStepEditable)
    {
        $this->container['multiStepEditable'] = $multiStepEditable;
        return $this;
    }

    /**
    * Gets id
    *  步骤ID
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
    * @param string|null $id 步骤ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets endpointIds
    *  扩展点
    *
    * @return string|null
    */
    public function getEndpointIds()
    {
        return $this->container['endpointIds'];
    }

    /**
    * Sets endpointIds
    *
    * @param string|null $endpointIds 扩展点
    *
    * @return $this
    */
    public function setEndpointIds($endpointIds)
    {
        $this->container['endpointIds'] = $endpointIds;
        return $this;
    }

    /**
    * Gets lastDispatchId
    *  上次下发任务ID
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
    * @param string|null $lastDispatchId 上次下发任务ID
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
    *  错误消息
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
    * @param string|null $message 错误消息
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

