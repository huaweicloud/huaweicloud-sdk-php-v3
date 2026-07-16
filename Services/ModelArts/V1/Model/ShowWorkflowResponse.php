<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkflowResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkflowResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
    * workflowId  Workflow工作流ID。创建工作流时后台自动生成。
    * createdAt  Workflow工作流的创建时间。
    * description  Workflow工作流的描述信息。
    * steps  Workflow工作流包含的步骤定义。
    * userName  创建Workflow工作流的用户名。
    * workspaceId  工作空间ID。
    * dataRequirements  Workflow需要的数据。
    * data  Workflow包含的数据。
    * parameters  Workflow包含的参数。
    * sourceWorkflowId  从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    * gallerySubscription  gallerySubscription
    * latestExecution  latestExecution
    * runCount  工作流的已运行次数。
    * paramReady  当前工作流的必选参数是否都已填完。
    * source  工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
    * storages  Workflow包含的统一存储定义。
    * labels  为Workflow工作流设置的标签。
    * assets  工作流绑定的资产。
    * subGraphs  工作流包含的子图。
    * extend  计费工作流使用的拓展字段。
    * policy  policy
    * withSubscription  工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    * smnSwitch  SMN开关。
    * subscriptionId  SMN消息订阅ID。
    * exemlTemplateId  自动学习模板ID。
    * lastModifiedAt  最近一次修改的时间。
    * package  package
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'workflowId' => 'string',
            'createdAt' => 'string',
            'description' => 'string',
            'steps' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStep[]',
            'userName' => 'string',
            'workspaceId' => 'string',
            'dataRequirements' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]',
            'data' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Data[]',
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]',
            'sourceWorkflowId' => 'string',
            'gallerySubscription' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowGallerySubscription',
            'latestExecution' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ExecutionBrief',
            'runCount' => 'int',
            'paramReady' => 'bool',
            'source' => 'string',
            'storages' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStorage[]',
            'labels' => 'string[]',
            'assets' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowAsset[]',
            'subGraphs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSubgraph[]',
            'extend' => 'map[string,object]',
            'policy' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowPolicy',
            'withSubscription' => 'bool',
            'smnSwitch' => 'bool',
            'subscriptionId' => 'string',
            'exemlTemplateId' => 'string',
            'lastModifiedAt' => 'string',
            'package' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowServicePackege'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
    * workflowId  Workflow工作流ID。创建工作流时后台自动生成。
    * createdAt  Workflow工作流的创建时间。
    * description  Workflow工作流的描述信息。
    * steps  Workflow工作流包含的步骤定义。
    * userName  创建Workflow工作流的用户名。
    * workspaceId  工作空间ID。
    * dataRequirements  Workflow需要的数据。
    * data  Workflow包含的数据。
    * parameters  Workflow包含的参数。
    * sourceWorkflowId  从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    * gallerySubscription  gallerySubscription
    * latestExecution  latestExecution
    * runCount  工作流的已运行次数。
    * paramReady  当前工作流的必选参数是否都已填完。
    * source  工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
    * storages  Workflow包含的统一存储定义。
    * labels  为Workflow工作流设置的标签。
    * assets  工作流绑定的资产。
    * subGraphs  工作流包含的子图。
    * extend  计费工作流使用的拓展字段。
    * policy  policy
    * withSubscription  工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    * smnSwitch  SMN开关。
    * subscriptionId  SMN消息订阅ID。
    * exemlTemplateId  自动学习模板ID。
    * lastModifiedAt  最近一次修改的时间。
    * package  package
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'workflowId' => null,
        'createdAt' => null,
        'description' => null,
        'steps' => null,
        'userName' => null,
        'workspaceId' => null,
        'dataRequirements' => null,
        'data' => null,
        'parameters' => null,
        'sourceWorkflowId' => null,
        'gallerySubscription' => null,
        'latestExecution' => null,
        'runCount' => null,
        'paramReady' => null,
        'source' => null,
        'storages' => null,
        'labels' => null,
        'assets' => null,
        'subGraphs' => null,
        'extend' => null,
        'policy' => null,
        'withSubscription' => null,
        'smnSwitch' => null,
        'subscriptionId' => null,
        'exemlTemplateId' => null,
        'lastModifiedAt' => null,
        'package' => null
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
    * name  Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
    * workflowId  Workflow工作流ID。创建工作流时后台自动生成。
    * createdAt  Workflow工作流的创建时间。
    * description  Workflow工作流的描述信息。
    * steps  Workflow工作流包含的步骤定义。
    * userName  创建Workflow工作流的用户名。
    * workspaceId  工作空间ID。
    * dataRequirements  Workflow需要的数据。
    * data  Workflow包含的数据。
    * parameters  Workflow包含的参数。
    * sourceWorkflowId  从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    * gallerySubscription  gallerySubscription
    * latestExecution  latestExecution
    * runCount  工作流的已运行次数。
    * paramReady  当前工作流的必选参数是否都已填完。
    * source  工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
    * storages  Workflow包含的统一存储定义。
    * labels  为Workflow工作流设置的标签。
    * assets  工作流绑定的资产。
    * subGraphs  工作流包含的子图。
    * extend  计费工作流使用的拓展字段。
    * policy  policy
    * withSubscription  工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    * smnSwitch  SMN开关。
    * subscriptionId  SMN消息订阅ID。
    * exemlTemplateId  自动学习模板ID。
    * lastModifiedAt  最近一次修改的时间。
    * package  package
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'workflowId' => 'workflow_id',
            'createdAt' => 'created_at',
            'description' => 'description',
            'steps' => 'steps',
            'userName' => 'user_name',
            'workspaceId' => 'workspace_id',
            'dataRequirements' => 'data_requirements',
            'data' => 'data',
            'parameters' => 'parameters',
            'sourceWorkflowId' => 'source_workflow_id',
            'gallerySubscription' => 'gallery_subscription',
            'latestExecution' => 'latest_execution',
            'runCount' => 'run_count',
            'paramReady' => 'param_ready',
            'source' => 'source',
            'storages' => 'storages',
            'labels' => 'labels',
            'assets' => 'assets',
            'subGraphs' => 'sub_graphs',
            'extend' => 'extend',
            'policy' => 'policy',
            'withSubscription' => 'with_subscription',
            'smnSwitch' => 'smn_switch',
            'subscriptionId' => 'subscription_id',
            'exemlTemplateId' => 'exeml_template_id',
            'lastModifiedAt' => 'last_modified_at',
            'package' => 'package'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
    * workflowId  Workflow工作流ID。创建工作流时后台自动生成。
    * createdAt  Workflow工作流的创建时间。
    * description  Workflow工作流的描述信息。
    * steps  Workflow工作流包含的步骤定义。
    * userName  创建Workflow工作流的用户名。
    * workspaceId  工作空间ID。
    * dataRequirements  Workflow需要的数据。
    * data  Workflow包含的数据。
    * parameters  Workflow包含的参数。
    * sourceWorkflowId  从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    * gallerySubscription  gallerySubscription
    * latestExecution  latestExecution
    * runCount  工作流的已运行次数。
    * paramReady  当前工作流的必选参数是否都已填完。
    * source  工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
    * storages  Workflow包含的统一存储定义。
    * labels  为Workflow工作流设置的标签。
    * assets  工作流绑定的资产。
    * subGraphs  工作流包含的子图。
    * extend  计费工作流使用的拓展字段。
    * policy  policy
    * withSubscription  工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    * smnSwitch  SMN开关。
    * subscriptionId  SMN消息订阅ID。
    * exemlTemplateId  自动学习模板ID。
    * lastModifiedAt  最近一次修改的时间。
    * package  package
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'workflowId' => 'setWorkflowId',
            'createdAt' => 'setCreatedAt',
            'description' => 'setDescription',
            'steps' => 'setSteps',
            'userName' => 'setUserName',
            'workspaceId' => 'setWorkspaceId',
            'dataRequirements' => 'setDataRequirements',
            'data' => 'setData',
            'parameters' => 'setParameters',
            'sourceWorkflowId' => 'setSourceWorkflowId',
            'gallerySubscription' => 'setGallerySubscription',
            'latestExecution' => 'setLatestExecution',
            'runCount' => 'setRunCount',
            'paramReady' => 'setParamReady',
            'source' => 'setSource',
            'storages' => 'setStorages',
            'labels' => 'setLabels',
            'assets' => 'setAssets',
            'subGraphs' => 'setSubGraphs',
            'extend' => 'setExtend',
            'policy' => 'setPolicy',
            'withSubscription' => 'setWithSubscription',
            'smnSwitch' => 'setSmnSwitch',
            'subscriptionId' => 'setSubscriptionId',
            'exemlTemplateId' => 'setExemlTemplateId',
            'lastModifiedAt' => 'setLastModifiedAt',
            'package' => 'setPackage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
    * workflowId  Workflow工作流ID。创建工作流时后台自动生成。
    * createdAt  Workflow工作流的创建时间。
    * description  Workflow工作流的描述信息。
    * steps  Workflow工作流包含的步骤定义。
    * userName  创建Workflow工作流的用户名。
    * workspaceId  工作空间ID。
    * dataRequirements  Workflow需要的数据。
    * data  Workflow包含的数据。
    * parameters  Workflow包含的参数。
    * sourceWorkflowId  从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    * gallerySubscription  gallerySubscription
    * latestExecution  latestExecution
    * runCount  工作流的已运行次数。
    * paramReady  当前工作流的必选参数是否都已填完。
    * source  工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
    * storages  Workflow包含的统一存储定义。
    * labels  为Workflow工作流设置的标签。
    * assets  工作流绑定的资产。
    * subGraphs  工作流包含的子图。
    * extend  计费工作流使用的拓展字段。
    * policy  policy
    * withSubscription  工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    * smnSwitch  SMN开关。
    * subscriptionId  SMN消息订阅ID。
    * exemlTemplateId  自动学习模板ID。
    * lastModifiedAt  最近一次修改的时间。
    * package  package
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'workflowId' => 'getWorkflowId',
            'createdAt' => 'getCreatedAt',
            'description' => 'getDescription',
            'steps' => 'getSteps',
            'userName' => 'getUserName',
            'workspaceId' => 'getWorkspaceId',
            'dataRequirements' => 'getDataRequirements',
            'data' => 'getData',
            'parameters' => 'getParameters',
            'sourceWorkflowId' => 'getSourceWorkflowId',
            'gallerySubscription' => 'getGallerySubscription',
            'latestExecution' => 'getLatestExecution',
            'runCount' => 'getRunCount',
            'paramReady' => 'getParamReady',
            'source' => 'getSource',
            'storages' => 'getStorages',
            'labels' => 'getLabels',
            'assets' => 'getAssets',
            'subGraphs' => 'getSubGraphs',
            'extend' => 'getExtend',
            'policy' => 'getPolicy',
            'withSubscription' => 'getWithSubscription',
            'smnSwitch' => 'getSmnSwitch',
            'subscriptionId' => 'getSubscriptionId',
            'exemlTemplateId' => 'getExemlTemplateId',
            'lastModifiedAt' => 'getLastModifiedAt',
            'package' => 'getPackage'
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataRequirements'] = isset($data['dataRequirements']) ? $data['dataRequirements'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['sourceWorkflowId'] = isset($data['sourceWorkflowId']) ? $data['sourceWorkflowId'] : null;
        $this->container['gallerySubscription'] = isset($data['gallerySubscription']) ? $data['gallerySubscription'] : null;
        $this->container['latestExecution'] = isset($data['latestExecution']) ? $data['latestExecution'] : null;
        $this->container['runCount'] = isset($data['runCount']) ? $data['runCount'] : null;
        $this->container['paramReady'] = isset($data['paramReady']) ? $data['paramReady'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['storages'] = isset($data['storages']) ? $data['storages'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['assets'] = isset($data['assets']) ? $data['assets'] : null;
        $this->container['subGraphs'] = isset($data['subGraphs']) ? $data['subGraphs'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['withSubscription'] = isset($data['withSubscription']) ? $data['withSubscription'] : null;
        $this->container['smnSwitch'] = isset($data['smnSwitch']) ? $data['smnSwitch'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['exemlTemplateId'] = isset($data['exemlTemplateId']) ? $data['exemlTemplateId'] : null;
        $this->container['lastModifiedAt'] = isset($data['lastModifiedAt']) ? $data['lastModifiedAt'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
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
    *  Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
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
    * @param string|null $name Workflow工作流名称，1到64位只包含中英文、数字、空格、下划线（_）和中划线（-），并且以中英文开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets workflowId
    *  Workflow工作流ID。创建工作流时后台自动生成。
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
    * @param string|null $workflowId Workflow工作流ID。创建工作流时后台自动生成。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets createdAt
    *  Workflow工作流的创建时间。
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
    * @param string|null $createdAt Workflow工作流的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets description
    *  Workflow工作流的描述信息。
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
    * @param string|null $description Workflow工作流的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets steps
    *  Workflow工作流包含的步骤定义。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStep[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStep[]|null $steps Workflow工作流包含的步骤定义。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets userName
    *  创建Workflow工作流的用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 创建Workflow工作流的用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。
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
    * @param string|null $workspaceId 工作空间ID。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets dataRequirements
    *  Workflow需要的数据。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]|null
    */
    public function getDataRequirements()
    {
        return $this->container['dataRequirements'];
    }

    /**
    * Sets dataRequirements
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]|null $dataRequirements Workflow需要的数据。
    *
    * @return $this
    */
    public function setDataRequirements($dataRequirements)
    {
        $this->container['dataRequirements'] = $dataRequirements;
        return $this;
    }

    /**
    * Gets data
    *  Workflow包含的数据。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Data[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Data[]|null $data Workflow包含的数据。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets parameters
    *  Workflow包含的参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]|null $parameters Workflow包含的参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets sourceWorkflowId
    *  从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    *
    * @return string|null
    */
    public function getSourceWorkflowId()
    {
        return $this->container['sourceWorkflowId'];
    }

    /**
    * Sets sourceWorkflowId
    *
    * @param string|null $sourceWorkflowId 从指定Workflow工作流进行复制。通过复制来创建Workflow时必填。
    *
    * @return $this
    */
    public function setSourceWorkflowId($sourceWorkflowId)
    {
        $this->container['sourceWorkflowId'] = $sourceWorkflowId;
        return $this;
    }

    /**
    * Gets gallerySubscription
    *  gallerySubscription
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowGallerySubscription|null
    */
    public function getGallerySubscription()
    {
        return $this->container['gallerySubscription'];
    }

    /**
    * Sets gallerySubscription
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowGallerySubscription|null $gallerySubscription gallerySubscription
    *
    * @return $this
    */
    public function setGallerySubscription($gallerySubscription)
    {
        $this->container['gallerySubscription'] = $gallerySubscription;
        return $this;
    }

    /**
    * Gets latestExecution
    *  latestExecution
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ExecutionBrief|null
    */
    public function getLatestExecution()
    {
        return $this->container['latestExecution'];
    }

    /**
    * Sets latestExecution
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ExecutionBrief|null $latestExecution latestExecution
    *
    * @return $this
    */
    public function setLatestExecution($latestExecution)
    {
        $this->container['latestExecution'] = $latestExecution;
        return $this;
    }

    /**
    * Gets runCount
    *  工作流的已运行次数。
    *
    * @return int|null
    */
    public function getRunCount()
    {
        return $this->container['runCount'];
    }

    /**
    * Sets runCount
    *
    * @param int|null $runCount 工作流的已运行次数。
    *
    * @return $this
    */
    public function setRunCount($runCount)
    {
        $this->container['runCount'] = $runCount;
        return $this;
    }

    /**
    * Gets paramReady
    *  当前工作流的必选参数是否都已填完。
    *
    * @return bool|null
    */
    public function getParamReady()
    {
        return $this->container['paramReady'];
    }

    /**
    * Sets paramReady
    *
    * @param bool|null $paramReady 当前工作流的必选参数是否都已填完。
    *
    * @return $this
    */
    public function setParamReady($paramReady)
    {
        $this->container['paramReady'] = $paramReady;
        return $this;
    }

    /**
    * Gets source
    *  工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
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
    * @param string|null $source 工作流来源，可选值为ai_gallery，表示工作流是从AI Gallery导入的。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets storages
    *  Workflow包含的统一存储定义。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStorage[]|null
    */
    public function getStorages()
    {
        return $this->container['storages'];
    }

    /**
    * Sets storages
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStorage[]|null $storages Workflow包含的统一存储定义。
    *
    * @return $this
    */
    public function setStorages($storages)
    {
        $this->container['storages'] = $storages;
        return $this;
    }

    /**
    * Gets labels
    *  为Workflow工作流设置的标签。
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
    * @param string[]|null $labels 为Workflow工作流设置的标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets assets
    *  工作流绑定的资产。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowAsset[]|null
    */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
    * Sets assets
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowAsset[]|null $assets 工作流绑定的资产。
    *
    * @return $this
    */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;
        return $this;
    }

    /**
    * Gets subGraphs
    *  工作流包含的子图。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSubgraph[]|null
    */
    public function getSubGraphs()
    {
        return $this->container['subGraphs'];
    }

    /**
    * Sets subGraphs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowSubgraph[]|null $subGraphs 工作流包含的子图。
    *
    * @return $this
    */
    public function setSubGraphs($subGraphs)
    {
        $this->container['subGraphs'] = $subGraphs;
        return $this;
    }

    /**
    * Gets extend
    *  计费工作流使用的拓展字段。
    *
    * @return map[string,object]|null
    */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
    * Sets extend
    *
    * @param map[string,object]|null $extend 计费工作流使用的拓展字段。
    *
    * @return $this
    */
    public function setExtend($extend)
    {
        $this->container['extend'] = $extend;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowPolicy|null $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets withSubscription
    *  工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    *
    * @return bool|null
    */
    public function getWithSubscription()
    {
        return $this->container['withSubscription'];
    }

    /**
    * Sets withSubscription
    *
    * @param bool|null $withSubscription 工作流SMN消息订阅开关，默认为false，表示关闭消息订阅开关。
    *
    * @return $this
    */
    public function setWithSubscription($withSubscription)
    {
        $this->container['withSubscription'] = $withSubscription;
        return $this;
    }

    /**
    * Gets smnSwitch
    *  SMN开关。
    *
    * @return bool|null
    */
    public function getSmnSwitch()
    {
        return $this->container['smnSwitch'];
    }

    /**
    * Sets smnSwitch
    *
    * @param bool|null $smnSwitch SMN开关。
    *
    * @return $this
    */
    public function setSmnSwitch($smnSwitch)
    {
        $this->container['smnSwitch'] = $smnSwitch;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  SMN消息订阅ID。
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId SMN消息订阅ID。
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets exemlTemplateId
    *  自动学习模板ID。
    *
    * @return string|null
    */
    public function getExemlTemplateId()
    {
        return $this->container['exemlTemplateId'];
    }

    /**
    * Sets exemlTemplateId
    *
    * @param string|null $exemlTemplateId 自动学习模板ID。
    *
    * @return $this
    */
    public function setExemlTemplateId($exemlTemplateId)
    {
        $this->container['exemlTemplateId'] = $exemlTemplateId;
        return $this;
    }

    /**
    * Gets lastModifiedAt
    *  最近一次修改的时间。
    *
    * @return string|null
    */
    public function getLastModifiedAt()
    {
        return $this->container['lastModifiedAt'];
    }

    /**
    * Sets lastModifiedAt
    *
    * @param string|null $lastModifiedAt 最近一次修改的时间。
    *
    * @return $this
    */
    public function setLastModifiedAt($lastModifiedAt)
    {
        $this->container['lastModifiedAt'] = $lastModifiedAt;
        return $this;
    }

    /**
    * Gets package
    *  package
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowServicePackege|null
    */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
    * Sets package
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowServicePackege|null $package package
    *
    * @return $this
    */
    public function setPackage($package)
    {
        $this->container['package'] = $package;
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

