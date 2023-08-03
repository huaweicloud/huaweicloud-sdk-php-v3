<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowCreateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowCreateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  函数流名称
    * description  函数流描述
    * start  流程开始节点ID
    * triggers  触发器列表
    * functions  函数列表
    * states  函数流节点清单，定义参考SleepState和OperationState
    * constants  函数流中的常量
    * retries  重试策略清单
    * mode  函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    * expressConfig  expressConfig
    * enterpriseProjectId  企业项目ID
    * enableStreamResponse  是否返回流数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'start' => 'string',
            'triggers' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\Trigger[]',
            'functions' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\ModelFunction[]',
            'states' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\OperationState[]',
            'constants' => 'object',
            'retries' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\Retry[]',
            'mode' => 'string',
            'expressConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\ExpressConfig',
            'enterpriseProjectId' => 'string',
            'enableStreamResponse' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  函数流名称
    * description  函数流描述
    * start  流程开始节点ID
    * triggers  触发器列表
    * functions  函数列表
    * states  函数流节点清单，定义参考SleepState和OperationState
    * constants  函数流中的常量
    * retries  重试策略清单
    * mode  函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    * expressConfig  expressConfig
    * enterpriseProjectId  企业项目ID
    * enableStreamResponse  是否返回流数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'start' => null,
        'triggers' => null,
        'functions' => null,
        'states' => null,
        'constants' => null,
        'retries' => null,
        'mode' => null,
        'expressConfig' => null,
        'enterpriseProjectId' => null,
        'enableStreamResponse' => null
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
    * name  函数流名称
    * description  函数流描述
    * start  流程开始节点ID
    * triggers  触发器列表
    * functions  函数列表
    * states  函数流节点清单，定义参考SleepState和OperationState
    * constants  函数流中的常量
    * retries  重试策略清单
    * mode  函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    * expressConfig  expressConfig
    * enterpriseProjectId  企业项目ID
    * enableStreamResponse  是否返回流数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'start' => 'start',
            'triggers' => 'triggers',
            'functions' => 'functions',
            'states' => 'states',
            'constants' => 'constants',
            'retries' => 'retries',
            'mode' => 'mode',
            'expressConfig' => 'express_config',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enableStreamResponse' => 'enable_stream_response'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  函数流名称
    * description  函数流描述
    * start  流程开始节点ID
    * triggers  触发器列表
    * functions  函数列表
    * states  函数流节点清单，定义参考SleepState和OperationState
    * constants  函数流中的常量
    * retries  重试策略清单
    * mode  函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    * expressConfig  expressConfig
    * enterpriseProjectId  企业项目ID
    * enableStreamResponse  是否返回流数据
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'start' => 'setStart',
            'triggers' => 'setTriggers',
            'functions' => 'setFunctions',
            'states' => 'setStates',
            'constants' => 'setConstants',
            'retries' => 'setRetries',
            'mode' => 'setMode',
            'expressConfig' => 'setExpressConfig',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enableStreamResponse' => 'setEnableStreamResponse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  函数流名称
    * description  函数流描述
    * start  流程开始节点ID
    * triggers  触发器列表
    * functions  函数列表
    * states  函数流节点清单，定义参考SleepState和OperationState
    * constants  函数流中的常量
    * retries  重试策略清单
    * mode  函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    * expressConfig  expressConfig
    * enterpriseProjectId  企业项目ID
    * enableStreamResponse  是否返回流数据
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'start' => 'getStart',
            'triggers' => 'getTriggers',
            'functions' => 'getFunctions',
            'states' => 'getStates',
            'constants' => 'getConstants',
            'retries' => 'getRetries',
            'mode' => 'getMode',
            'expressConfig' => 'getExpressConfig',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enableStreamResponse' => 'getEnableStreamResponse'
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
    const MODE_NORMAL = 'NORMAL';
    const MODE_EXPRESS = 'EXPRESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_NORMAL,
            self::MODE_EXPRESS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['functions'] = isset($data['functions']) ? $data['functions'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['constants'] = isset($data['constants']) ? $data['constants'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['expressConfig'] = isset($data['expressConfig']) ? $data['expressConfig'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enableStreamResponse'] = isset($data['enableStreamResponse']) ? $data['enableStreamResponse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,64}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,512}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,512}$/.";
            }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
            if ((mb_strlen($this->container['start']) > 256)) {
                $invalidProperties[] = "invalid value for 'start', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['start']) < 1)) {
                $invalidProperties[] = "invalid value for 'start', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['functions'] === null) {
            $invalidProperties[] = "'functions' can't be null";
        }
        if ($this->container['states'] === null) {
            $invalidProperties[] = "'states' can't be null";
        }
        if ($this->container['constants'] === null) {
            $invalidProperties[] = "'constants' can't be null";
        }
        if ($this->container['retries'] === null) {
            $invalidProperties[] = "'retries' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  函数流名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 函数流名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  函数流描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 函数流描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets start
    *  流程开始节点ID
    *
    * @return string
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string $start 流程开始节点ID
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets triggers
    *  触发器列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\Trigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\Trigger[]|null $triggers 触发器列表
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets functions
    *  函数列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\ModelFunction[]
    */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
    * Sets functions
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\ModelFunction[] $functions 函数列表
    *
    * @return $this
    */
    public function setFunctions($functions)
    {
        $this->container['functions'] = $functions;
        return $this;
    }

    /**
    * Gets states
    *  函数流节点清单，定义参考SleepState和OperationState
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\OperationState[]
    */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
    * Sets states
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\OperationState[] $states 函数流节点清单，定义参考SleepState和OperationState
    *
    * @return $this
    */
    public function setStates($states)
    {
        $this->container['states'] = $states;
        return $this;
    }

    /**
    * Gets constants
    *  函数流中的常量
    *
    * @return object
    */
    public function getConstants()
    {
        return $this->container['constants'];
    }

    /**
    * Sets constants
    *
    * @param object $constants 函数流中的常量
    *
    * @return $this
    */
    public function setConstants($constants)
    {
        $this->container['constants'] = $constants;
        return $this;
    }

    /**
    * Gets retries
    *  重试策略清单
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\Retry[]
    */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
    * Sets retries
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\Retry[] $retries 重试策略清单
    *
    * @return $this
    */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;
        return $this;
    }

    /**
    * Gets mode
    *  函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 函数流模式，当前支持两种模式 NORMAL: 标准模式，普通模式面向普通的业务场景，支持长时间任务，支持执行历史持久化和查询，只支持异步调用 EXPRESS: 快速模式，快速模式面向业务执行时长较短，需要极致性能的场景，只支持流程执行时长低于5分钟的场景，不支持执行历史持久化，支持同步和异步调用 默认为标准模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets expressConfig
    *  expressConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\ExpressConfig|null
    */
    public function getExpressConfig()
    {
        return $this->container['expressConfig'];
    }

    /**
    * Sets expressConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\ExpressConfig|null $expressConfig expressConfig
    *
    * @return $this
    */
    public function setExpressConfig($expressConfig)
    {
        $this->container['expressConfig'] = $expressConfig;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enableStreamResponse
    *  是否返回流数据
    *
    * @return bool|null
    */
    public function getEnableStreamResponse()
    {
        return $this->container['enableStreamResponse'];
    }

    /**
    * Sets enableStreamResponse
    *
    * @param bool|null $enableStreamResponse 是否返回流数据
    *
    * @return $this
    */
    public function setEnableStreamResponse($enableStreamResponse)
    {
        $this->container['enableStreamResponse'] = $enableStreamResponse;
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

