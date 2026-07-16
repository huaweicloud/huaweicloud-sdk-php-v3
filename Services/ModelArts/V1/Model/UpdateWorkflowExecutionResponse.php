<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWorkflowExecutionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWorkflowExecutionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录名称。 **取值范围**：不涉及。
    * executionId  **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    * description  **参数解释**：执行记录描述。 **取值范围**：不涉及。
    * status  **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * workflowName  **参数解释**：工作流名称。 **取值范围**：不涉及。
    * sceneId  **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    * sceneName  **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    * stepsExecution  **参数解释**：执行记录的step。 **约束限制**：不涉及。
    * subGraphs  **参数解释**：子图。
    * duration  **参数解释**：执行的时长。 **取值范围**：不涉及。
    * events  **参数解释**：执行的事件。
    * labels  **参数解释**：为执行记录设置的标签。
    * dataRequirements  **参数解释**：节点steps使用到的数据。
    * parameters  **参数解释**：节点steps使用到的参数。
    * policies  policies
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'name' => 'string',
            'executionId' => 'string',
            'description' => 'string',
            'status' => 'string',
            'workspaceId' => 'string',
            'workflowId' => 'string',
            'workflowName' => 'string',
            'sceneId' => 'string',
            'sceneName' => 'string',
            'stepsExecution' => '\HuaweiCloud\SDK\ModelArts\V1\Model\StepExecutionResp[]',
            'subGraphs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSubgraphResp[]',
            'duration' => 'string',
            'events' => 'string[]',
            'labels' => 'string[]',
            'dataRequirements' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirementResp[]',
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameterResp[]',
            'policies' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowDagPoliciesResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录名称。 **取值范围**：不涉及。
    * executionId  **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    * description  **参数解释**：执行记录描述。 **取值范围**：不涉及。
    * status  **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * workflowName  **参数解释**：工作流名称。 **取值范围**：不涉及。
    * sceneId  **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    * sceneName  **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    * stepsExecution  **参数解释**：执行记录的step。 **约束限制**：不涉及。
    * subGraphs  **参数解释**：子图。
    * duration  **参数解释**：执行的时长。 **取值范围**：不涉及。
    * events  **参数解释**：执行的事件。
    * labels  **参数解释**：为执行记录设置的标签。
    * dataRequirements  **参数解释**：节点steps使用到的数据。
    * parameters  **参数解释**：节点steps使用到的参数。
    * policies  policies
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'name' => null,
        'executionId' => null,
        'description' => null,
        'status' => null,
        'workspaceId' => null,
        'workflowId' => null,
        'workflowName' => null,
        'sceneId' => null,
        'sceneName' => null,
        'stepsExecution' => null,
        'subGraphs' => null,
        'duration' => null,
        'events' => null,
        'labels' => null,
        'dataRequirements' => null,
        'parameters' => null,
        'policies' => null
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
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录名称。 **取值范围**：不涉及。
    * executionId  **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    * description  **参数解释**：执行记录描述。 **取值范围**：不涉及。
    * status  **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * workflowName  **参数解释**：工作流名称。 **取值范围**：不涉及。
    * sceneId  **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    * sceneName  **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    * stepsExecution  **参数解释**：执行记录的step。 **约束限制**：不涉及。
    * subGraphs  **参数解释**：子图。
    * duration  **参数解释**：执行的时长。 **取值范围**：不涉及。
    * events  **参数解释**：执行的事件。
    * labels  **参数解释**：为执行记录设置的标签。
    * dataRequirements  **参数解释**：节点steps使用到的数据。
    * parameters  **参数解释**：节点steps使用到的参数。
    * policies  policies
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'name' => 'name',
            'executionId' => 'execution_id',
            'description' => 'description',
            'status' => 'status',
            'workspaceId' => 'workspace_id',
            'workflowId' => 'workflow_id',
            'workflowName' => 'workflow_name',
            'sceneId' => 'scene_id',
            'sceneName' => 'scene_name',
            'stepsExecution' => 'steps_execution',
            'subGraphs' => 'sub_graphs',
            'duration' => 'duration',
            'events' => 'events',
            'labels' => 'labels',
            'dataRequirements' => 'data_requirements',
            'parameters' => 'parameters',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录名称。 **取值范围**：不涉及。
    * executionId  **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    * description  **参数解释**：执行记录描述。 **取值范围**：不涉及。
    * status  **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * workflowName  **参数解释**：工作流名称。 **取值范围**：不涉及。
    * sceneId  **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    * sceneName  **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    * stepsExecution  **参数解释**：执行记录的step。 **约束限制**：不涉及。
    * subGraphs  **参数解释**：子图。
    * duration  **参数解释**：执行的时长。 **取值范围**：不涉及。
    * events  **参数解释**：执行的事件。
    * labels  **参数解释**：为执行记录设置的标签。
    * dataRequirements  **参数解释**：节点steps使用到的数据。
    * parameters  **参数解释**：节点steps使用到的参数。
    * policies  policies
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'name' => 'setName',
            'executionId' => 'setExecutionId',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'workspaceId' => 'setWorkspaceId',
            'workflowId' => 'setWorkflowId',
            'workflowName' => 'setWorkflowName',
            'sceneId' => 'setSceneId',
            'sceneName' => 'setSceneName',
            'stepsExecution' => 'setStepsExecution',
            'subGraphs' => 'setSubGraphs',
            'duration' => 'setDuration',
            'events' => 'setEvents',
            'labels' => 'setLabels',
            'dataRequirements' => 'setDataRequirements',
            'parameters' => 'setParameters',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录名称。 **取值范围**：不涉及。
    * executionId  **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    * description  **参数解释**：执行记录描述。 **取值范围**：不涉及。
    * status  **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    * workflowId  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    * workflowName  **参数解释**：工作流名称。 **取值范围**：不涉及。
    * sceneId  **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    * sceneName  **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    * stepsExecution  **参数解释**：执行记录的step。 **约束限制**：不涉及。
    * subGraphs  **参数解释**：子图。
    * duration  **参数解释**：执行的时长。 **取值范围**：不涉及。
    * events  **参数解释**：执行的事件。
    * labels  **参数解释**：为执行记录设置的标签。
    * dataRequirements  **参数解释**：节点steps使用到的数据。
    * parameters  **参数解释**：节点steps使用到的参数。
    * policies  policies
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'name' => 'getName',
            'executionId' => 'getExecutionId',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'workspaceId' => 'getWorkspaceId',
            'workflowId' => 'getWorkflowId',
            'workflowName' => 'getWorkflowName',
            'sceneId' => 'getSceneId',
            'sceneName' => 'getSceneName',
            'stepsExecution' => 'getStepsExecution',
            'subGraphs' => 'getSubGraphs',
            'duration' => 'getDuration',
            'events' => 'getEvents',
            'labels' => 'getLabels',
            'dataRequirements' => 'getDataRequirements',
            'parameters' => 'getParameters',
            'policies' => 'getPolicies'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['workflowName'] = isset($data['workflowName']) ? $data['workflowName'] : null;
        $this->container['sceneId'] = isset($data['sceneId']) ? $data['sceneId'] : null;
        $this->container['sceneName'] = isset($data['sceneName']) ? $data['sceneName'] : null;
        $this->container['stepsExecution'] = isset($data['stepsExecution']) ? $data['stepsExecution'] : null;
        $this->container['subGraphs'] = isset($data['subGraphs']) ? $data['subGraphs'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['dataRequirements'] = isset($data['dataRequirements']) ? $data['dataRequirements'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
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
    * Gets createdAt
    *  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：执行记录名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：执行记录名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets executionId
    *  **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId **参数解释**：工作流执行ID。[获取方法请参见[获取Execution列表](ListWorkflowExecutions.xml)。](tag:hc)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：执行记录描述。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：执行记录描述。 **取值范围**：不涉及。
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
    *  **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
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
    * @param string|null $status **参数解释**：执行记录状态。 **取值范围**：枚举值如下： - init：初始化 - running：运行中 - completed：运行成功 - stopped：已停止 - abnormal：异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets workflowId
    *  **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId **参数解释**：Workflow工作流ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets workflowName
    *  **参数解释**：工作流名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getWorkflowName()
    {
        return $this->container['workflowName'];
    }

    /**
    * Sets workflowName
    *
    * @param string|null $workflowName **参数解释**：工作流名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkflowName($workflowName)
    {
        $this->container['workflowName'] = $workflowName;
        return $this;
    }

    /**
    * Gets sceneId
    *  **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSceneId()
    {
        return $this->container['sceneId'];
    }

    /**
    * Sets sceneId
    *
    * @param string|null $sceneId **参数解释**：自定义场景ID，[获取方法请参见[查询工作流执行记录列表](CreateWorkflow.xml)](tag:hc)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSceneId($sceneId)
    {
        $this->container['sceneId'] = $sceneId;
        return $this;
    }

    /**
    * Gets sceneName
    *  **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSceneName()
    {
        return $this->container['sceneName'];
    }

    /**
    * Sets sceneName
    *
    * @param string|null $sceneName **参数解释**：自定义场景名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSceneName($sceneName)
    {
        $this->container['sceneName'] = $sceneName;
        return $this;
    }

    /**
    * Gets stepsExecution
    *  **参数解释**：执行记录的step。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\StepExecutionResp[]|null
    */
    public function getStepsExecution()
    {
        return $this->container['stepsExecution'];
    }

    /**
    * Sets stepsExecution
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\StepExecutionResp[]|null $stepsExecution **参数解释**：执行记录的step。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setStepsExecution($stepsExecution)
    {
        $this->container['stepsExecution'] = $stepsExecution;
        return $this;
    }

    /**
    * Gets subGraphs
    *  **参数解释**：子图。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSubgraphResp[]|null
    */
    public function getSubGraphs()
    {
        return $this->container['subGraphs'];
    }

    /**
    * Sets subGraphs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSubgraphResp[]|null $subGraphs **参数解释**：子图。
    *
    * @return $this
    */
    public function setSubGraphs($subGraphs)
    {
        $this->container['subGraphs'] = $subGraphs;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**：执行的时长。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration **参数解释**：执行的时长。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets events
    *  **参数解释**：执行的事件。
    *
    * @return string[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string[]|null $events **参数解释**：执行的事件。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**：为执行记录设置的标签。
    *
    * @return string[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[]|null $labels **参数解释**：为执行记录设置的标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets dataRequirements
    *  **参数解释**：节点steps使用到的数据。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirementResp[]|null
    */
    public function getDataRequirements()
    {
        return $this->container['dataRequirements'];
    }

    /**
    * Sets dataRequirements
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirementResp[]|null $dataRequirements **参数解释**：节点steps使用到的数据。
    *
    * @return $this
    */
    public function setDataRequirements($dataRequirements)
    {
        $this->container['dataRequirements'] = $dataRequirements;
        return $this;
    }

    /**
    * Gets parameters
    *  **参数解释**：节点steps使用到的参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameterResp[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameterResp[]|null $parameters **参数解释**：节点steps使用到的参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets policies
    *  policies
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowDagPoliciesResp|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowDagPoliciesResp|null $policies policies
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

