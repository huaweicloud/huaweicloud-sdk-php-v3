<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyAopWorkflowVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyAopWorkflowVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * description  **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'status' => 'string',
            'taskconfig' => 'string',
            'taskflow' => 'string',
            'taskflowType' => 'string',
            'aopType' => 'string',
            'input' => 'string',
            'output' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * description  **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'status' => null,
        'taskconfig' => null,
        'taskflow' => null,
        'taskflowType' => null,
        'aopType' => null,
        'input' => null,
        'output' => null
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
    * name  **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * description  **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'taskconfig' => 'taskconfig',
            'taskflow' => 'taskflow',
            'taskflowType' => 'taskflow_type',
            'aopType' => 'aop_type',
            'input' => 'input',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * description  **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'taskconfig' => 'setTaskconfig',
            'taskflow' => 'setTaskflow',
            'taskflowType' => 'setTaskflowType',
            'aopType' => 'setAopType',
            'input' => 'setInput',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * description  **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'taskconfig' => 'getTaskconfig',
            'taskflow' => 'getTaskflow',
            'taskflowType' => 'getTaskflowType',
            'aopType' => 'getAopType',
            'input' => 'getInput',
            'output' => 'getOutput'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskconfig'] = isset($data['taskconfig']) ? $data['taskconfig'] : null;
        $this->container['taskflow'] = isset($data['taskflow']) ? $data['taskflow'] : null;
        $this->container['taskflowType'] = isset($data['taskflowType']) ? $data['taskflowType'] : null;
        $this->container['aopType'] = isset($data['aopType']) ? $data['aopType'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskconfig']) && (mb_strlen($this->container['taskconfig']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskconfig', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['taskconfig']) && (mb_strlen($this->container['taskconfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskconfig', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskflow']) && (mb_strlen($this->container['taskflow']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskflow', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['taskflow']) && (mb_strlen($this->container['taskflow']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskflow', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskflowType']) && (mb_strlen($this->container['taskflowType']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskflowType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskflowType']) && (mb_strlen($this->container['taskflowType']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskflowType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) < 1)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) > 65535)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) < 0)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 65535)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 0)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $name **参数解释**: 流程名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
    *  **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $description **参数解释**: 流程的描述 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
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
    * @param string|null $status **参数解释**: 更新流程的动作 - pending_submit 更新流程基础信息 - pending_approval 提交审核 - not_activated 取消激活 - activated 激活流程  **约束限制**: 不涉及         **取值范围**: - pending_submit - pending_approval - not_activated - activated  **默认值**:  pending_submit
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskconfig
    *  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskconfig()
    {
        return $this->container['taskconfig'];
    }

    /**
    * Sets taskconfig
    *
    * @param string|null $taskconfig **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskconfig($taskconfig)
    {
        $this->container['taskconfig'] = $taskconfig;
        return $this;
    }

    /**
    * Gets taskflow
    *  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskflow()
    {
        return $this->container['taskflow'];
    }

    /**
    * Sets taskflow
    *
    * @param string|null $taskflow **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskflow($taskflow)
    {
        $this->container['taskflow'] = $taskflow;
        return $this;
    }

    /**
    * Gets taskflowType
    *  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskflowType()
    {
        return $this->container['taskflowType'];
    }

    /**
    * Sets taskflowType
    *
    * @param string|null $taskflowType **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskflowType($taskflowType)
    {
        $this->container['taskflowType'] = $taskflowType;
        return $this;
    }

    /**
    * Gets aopType
    *  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getAopType()
    {
        return $this->container['aopType'];
    }

    /**
    * Sets aopType
    *
    * @param string|null $aopType **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setAopType($aopType)
    {
        $this->container['aopType'] = $aopType;
        return $this;
    }

    /**
    * Gets input
    *  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param string|null $input **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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

