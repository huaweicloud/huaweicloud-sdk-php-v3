<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

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
    * name  **参数解释**： 步骤名称。 **取值范围**： 不涉及。
    * task  **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
    * businessType  **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
    * inputs  **参数解释**： 输入参数。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 序列号。 **取值范围**： 不涉及。
    * officialTaskVersion  **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
    * identifier  **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
    * id  **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
    * endpointIds  **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
    * lastDispatchId  **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
    * message  **参数解释**： 错误消息。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'task' => 'string',
            'businessType' => 'string',
            'inputs' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StepRunInputs[]',
            'sequence' => 'int',
            'officialTaskVersion' => 'string',
            'identifier' => 'string',
            'multiStepEditable' => 'int',
            'id' => 'string',
            'endpointIds' => 'string[]',
            'lastDispatchId' => 'string',
            'status' => 'string',
            'message' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 步骤名称。 **取值范围**： 不涉及。
    * task  **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
    * businessType  **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
    * inputs  **参数解释**： 输入参数。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 序列号。 **取值范围**： 不涉及。
    * officialTaskVersion  **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
    * identifier  **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
    * id  **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
    * endpointIds  **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
    * lastDispatchId  **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
    * message  **参数解释**： 错误消息。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
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
    * name  **参数解释**： 步骤名称。 **取值范围**： 不涉及。
    * task  **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
    * businessType  **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
    * inputs  **参数解释**： 输入参数。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 序列号。 **取值范围**： 不涉及。
    * officialTaskVersion  **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
    * identifier  **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
    * id  **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
    * endpointIds  **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
    * lastDispatchId  **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
    * message  **参数解释**： 错误消息。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
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
    * name  **参数解释**： 步骤名称。 **取值范围**： 不涉及。
    * task  **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
    * businessType  **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
    * inputs  **参数解释**： 输入参数。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 序列号。 **取值范围**： 不涉及。
    * officialTaskVersion  **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
    * identifier  **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
    * id  **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
    * endpointIds  **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
    * lastDispatchId  **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
    * message  **参数解释**： 错误消息。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
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
    * name  **参数解释**： 步骤名称。 **取值范围**： 不涉及。
    * task  **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
    * businessType  **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
    * inputs  **参数解释**： 输入参数。 **取值范围**： 不涉及。
    * sequence  **参数解释**： 序列号。 **取值范围**： 不涉及。
    * officialTaskVersion  **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
    * identifier  **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
    * id  **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
    * endpointIds  **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
    * lastDispatchId  **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
    * message  **参数解释**： 错误消息。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 步骤名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 步骤名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
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
    * @param string|null $task **参数解释**： 步骤插件名。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
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
    * @param string|null $businessType **参数解释**： 插件业务类型。 **取值范围**： - Normal：通用。 - Build：构建。 - Test：测试。 - Check：代码检查。 - Deploy：部署。
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
    *  **参数解释**： 输入参数。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StepRunInputs[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StepRunInputs[]|null $inputs **参数解释**： 输入参数。 **取值范围**： 不涉及。
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
    *  **参数解释**： 序列号。 **取值范围**： 不涉及。
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
    * @param int|null $sequence **参数解释**： 序列号。 **取值范围**： 不涉及。
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
    *  **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
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
    * @param string|null $officialTaskVersion **参数解释**： 官方插件版本号。 **取值范围**： 不涉及。
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
    *  **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
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
    * @param string|null $identifier **参数解释**： 唯一标识符。 **取值范围**： 不涉及。
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
    *  **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
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
    * @param int|null $multiStepEditable **参数解释**： 是否可编辑。 **取值范围**： - true：可编辑。 - false：不可编辑。
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
    *  **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $id **参数解释**： 步骤ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    *  **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getEndpointIds()
    {
        return $this->container['endpointIds'];
    }

    /**
    * Sets endpointIds
    *
    * @param string[]|null $endpointIds **参数解释**： 扩展点ID列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $lastDispatchId **参数解释**： 上次下发任务ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    *  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - CANCELED：取消。 - COMPLETED：已完成。 - FAILED：失败。
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
    *  **参数解释**： 错误消息。 **取值范围**： 不涉及。
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
    * @param string|null $message **参数解释**： 错误消息。 **取值范围**： 不涉及。
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
    *  **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
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
    * @param int|null $startTime **参数解释**： 步骤开始时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
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
    * @param int|null $endTime **参数解释**： 步骤结束时间。 **取值范围**： 不涉及。
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

