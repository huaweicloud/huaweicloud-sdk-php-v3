<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowComponentInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowComponentInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  name
    * description  description
    * labels  labels
    * runtimeStack  runtimeStack
    * source  source
    * build  build
    * environmentId  environmentId
    * applicationId  applicationId
    * limitCpu  单位为Core
    * limitMemory  单位为GiB
    * requestCpu  单位为Core
    * requestMemory  单位为GiB
    * replica  replica
    * version  version
    * swimlaneId  泳道id
    * envs  envs
    * storages  storages
    * command  command
    * postStart  postStart
    * preStop  preStop
    * timezone  指定组件运行的时区，比如Asia/Shanghai
    * mesher  mesher
    * deployStrategy  deployStrategy
    * jvmOpts  jvm参数
    * tomcatOpts  tomcatOpts
    * logs  logs
    * customMetric  customMetric
    * affinity  affinity
    * antiAffinity  antiAffinity
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * referResources  referResources
    * status  status
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'labels' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\Label[]',
            'runtimeStack' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\RuntimeStack',
            'source' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\SourceObject',
            'build' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\Build',
            'environmentId' => 'string',
            'applicationId' => 'string',
            'limitCpu' => 'float',
            'limitMemory' => 'float',
            'requestCpu' => 'float',
            'requestMemory' => 'float',
            'replica' => 'int',
            'version' => 'string',
            'swimlaneId' => 'string',
            'envs' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentEnvironment[]',
            'storages' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStorage[]',
            'command' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentCommand',
            'postStart' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLifecycle',
            'preStop' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLifecycle',
            'timezone' => 'string',
            'mesher' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\Mesher',
            'deployStrategy' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategy',
            'jvmOpts' => 'string',
            'tomcatOpts' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentInfoTomcatOpts',
            'logs' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLogs[]',
            'customMetric' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentInfoCustomMetric',
            'affinity' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentAffinity',
            'antiAffinity' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentAffinity',
            'livenessProbe' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentProbe',
            'readinessProbe' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentProbe',
            'referResources' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ReferResourceCreate[]',
            'status' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusView'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  name
    * description  description
    * labels  labels
    * runtimeStack  runtimeStack
    * source  source
    * build  build
    * environmentId  environmentId
    * applicationId  applicationId
    * limitCpu  单位为Core
    * limitMemory  单位为GiB
    * requestCpu  单位为Core
    * requestMemory  单位为GiB
    * replica  replica
    * version  version
    * swimlaneId  泳道id
    * envs  envs
    * storages  storages
    * command  command
    * postStart  postStart
    * preStop  preStop
    * timezone  指定组件运行的时区，比如Asia/Shanghai
    * mesher  mesher
    * deployStrategy  deployStrategy
    * jvmOpts  jvm参数
    * tomcatOpts  tomcatOpts
    * logs  logs
    * customMetric  customMetric
    * affinity  affinity
    * antiAffinity  antiAffinity
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * referResources  referResources
    * status  status
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'labels' => null,
        'runtimeStack' => null,
        'source' => null,
        'build' => null,
        'environmentId' => null,
        'applicationId' => null,
        'limitCpu' => null,
        'limitMemory' => null,
        'requestCpu' => null,
        'requestMemory' => null,
        'replica' => null,
        'version' => null,
        'swimlaneId' => null,
        'envs' => null,
        'storages' => null,
        'command' => null,
        'postStart' => null,
        'preStop' => null,
        'timezone' => null,
        'mesher' => null,
        'deployStrategy' => null,
        'jvmOpts' => null,
        'tomcatOpts' => null,
        'logs' => null,
        'customMetric' => null,
        'affinity' => null,
        'antiAffinity' => null,
        'livenessProbe' => null,
        'readinessProbe' => null,
        'referResources' => null,
        'status' => null
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
    * name  name
    * description  description
    * labels  labels
    * runtimeStack  runtimeStack
    * source  source
    * build  build
    * environmentId  environmentId
    * applicationId  applicationId
    * limitCpu  单位为Core
    * limitMemory  单位为GiB
    * requestCpu  单位为Core
    * requestMemory  单位为GiB
    * replica  replica
    * version  version
    * swimlaneId  泳道id
    * envs  envs
    * storages  storages
    * command  command
    * postStart  postStart
    * preStop  preStop
    * timezone  指定组件运行的时区，比如Asia/Shanghai
    * mesher  mesher
    * deployStrategy  deployStrategy
    * jvmOpts  jvm参数
    * tomcatOpts  tomcatOpts
    * logs  logs
    * customMetric  customMetric
    * affinity  affinity
    * antiAffinity  antiAffinity
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * referResources  referResources
    * status  status
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'labels' => 'labels',
            'runtimeStack' => 'runtime_stack',
            'source' => 'source',
            'build' => 'build',
            'environmentId' => 'environment_id',
            'applicationId' => 'application_id',
            'limitCpu' => 'limit_cpu',
            'limitMemory' => 'limit_memory',
            'requestCpu' => 'request_cpu',
            'requestMemory' => 'request_memory',
            'replica' => 'replica',
            'version' => 'version',
            'swimlaneId' => 'swimlane_id',
            'envs' => 'envs',
            'storages' => 'storages',
            'command' => 'command',
            'postStart' => 'post_start',
            'preStop' => 'pre_stop',
            'timezone' => 'timezone',
            'mesher' => 'mesher',
            'deployStrategy' => 'deploy_strategy',
            'jvmOpts' => 'jvm_opts',
            'tomcatOpts' => 'tomcat_opts',
            'logs' => 'logs',
            'customMetric' => 'custom_metric',
            'affinity' => 'affinity',
            'antiAffinity' => 'anti_affinity',
            'livenessProbe' => 'liveness_probe',
            'readinessProbe' => 'readiness_probe',
            'referResources' => 'refer_resources',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  name
    * description  description
    * labels  labels
    * runtimeStack  runtimeStack
    * source  source
    * build  build
    * environmentId  environmentId
    * applicationId  applicationId
    * limitCpu  单位为Core
    * limitMemory  单位为GiB
    * requestCpu  单位为Core
    * requestMemory  单位为GiB
    * replica  replica
    * version  version
    * swimlaneId  泳道id
    * envs  envs
    * storages  storages
    * command  command
    * postStart  postStart
    * preStop  preStop
    * timezone  指定组件运行的时区，比如Asia/Shanghai
    * mesher  mesher
    * deployStrategy  deployStrategy
    * jvmOpts  jvm参数
    * tomcatOpts  tomcatOpts
    * logs  logs
    * customMetric  customMetric
    * affinity  affinity
    * antiAffinity  antiAffinity
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * referResources  referResources
    * status  status
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'labels' => 'setLabels',
            'runtimeStack' => 'setRuntimeStack',
            'source' => 'setSource',
            'build' => 'setBuild',
            'environmentId' => 'setEnvironmentId',
            'applicationId' => 'setApplicationId',
            'limitCpu' => 'setLimitCpu',
            'limitMemory' => 'setLimitMemory',
            'requestCpu' => 'setRequestCpu',
            'requestMemory' => 'setRequestMemory',
            'replica' => 'setReplica',
            'version' => 'setVersion',
            'swimlaneId' => 'setSwimlaneId',
            'envs' => 'setEnvs',
            'storages' => 'setStorages',
            'command' => 'setCommand',
            'postStart' => 'setPostStart',
            'preStop' => 'setPreStop',
            'timezone' => 'setTimezone',
            'mesher' => 'setMesher',
            'deployStrategy' => 'setDeployStrategy',
            'jvmOpts' => 'setJvmOpts',
            'tomcatOpts' => 'setTomcatOpts',
            'logs' => 'setLogs',
            'customMetric' => 'setCustomMetric',
            'affinity' => 'setAffinity',
            'antiAffinity' => 'setAntiAffinity',
            'livenessProbe' => 'setLivenessProbe',
            'readinessProbe' => 'setReadinessProbe',
            'referResources' => 'setReferResources',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  name
    * description  description
    * labels  labels
    * runtimeStack  runtimeStack
    * source  source
    * build  build
    * environmentId  environmentId
    * applicationId  applicationId
    * limitCpu  单位为Core
    * limitMemory  单位为GiB
    * requestCpu  单位为Core
    * requestMemory  单位为GiB
    * replica  replica
    * version  version
    * swimlaneId  泳道id
    * envs  envs
    * storages  storages
    * command  command
    * postStart  postStart
    * preStop  preStop
    * timezone  指定组件运行的时区，比如Asia/Shanghai
    * mesher  mesher
    * deployStrategy  deployStrategy
    * jvmOpts  jvm参数
    * tomcatOpts  tomcatOpts
    * logs  logs
    * customMetric  customMetric
    * affinity  affinity
    * antiAffinity  antiAffinity
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    * referResources  referResources
    * status  status
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'labels' => 'getLabels',
            'runtimeStack' => 'getRuntimeStack',
            'source' => 'getSource',
            'build' => 'getBuild',
            'environmentId' => 'getEnvironmentId',
            'applicationId' => 'getApplicationId',
            'limitCpu' => 'getLimitCpu',
            'limitMemory' => 'getLimitMemory',
            'requestCpu' => 'getRequestCpu',
            'requestMemory' => 'getRequestMemory',
            'replica' => 'getReplica',
            'version' => 'getVersion',
            'swimlaneId' => 'getSwimlaneId',
            'envs' => 'getEnvs',
            'storages' => 'getStorages',
            'command' => 'getCommand',
            'postStart' => 'getPostStart',
            'preStop' => 'getPreStop',
            'timezone' => 'getTimezone',
            'mesher' => 'getMesher',
            'deployStrategy' => 'getDeployStrategy',
            'jvmOpts' => 'getJvmOpts',
            'tomcatOpts' => 'getTomcatOpts',
            'logs' => 'getLogs',
            'customMetric' => 'getCustomMetric',
            'affinity' => 'getAffinity',
            'antiAffinity' => 'getAntiAffinity',
            'livenessProbe' => 'getLivenessProbe',
            'readinessProbe' => 'getReadinessProbe',
            'referResources' => 'getReferResources',
            'status' => 'getStatus'
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
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['runtimeStack'] = isset($data['runtimeStack']) ? $data['runtimeStack'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['limitCpu'] = isset($data['limitCpu']) ? $data['limitCpu'] : null;
        $this->container['limitMemory'] = isset($data['limitMemory']) ? $data['limitMemory'] : null;
        $this->container['requestCpu'] = isset($data['requestCpu']) ? $data['requestCpu'] : null;
        $this->container['requestMemory'] = isset($data['requestMemory']) ? $data['requestMemory'] : null;
        $this->container['replica'] = isset($data['replica']) ? $data['replica'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['swimlaneId'] = isset($data['swimlaneId']) ? $data['swimlaneId'] : null;
        $this->container['envs'] = isset($data['envs']) ? $data['envs'] : null;
        $this->container['storages'] = isset($data['storages']) ? $data['storages'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['postStart'] = isset($data['postStart']) ? $data['postStart'] : null;
        $this->container['preStop'] = isset($data['preStop']) ? $data['preStop'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['mesher'] = isset($data['mesher']) ? $data['mesher'] : null;
        $this->container['deployStrategy'] = isset($data['deployStrategy']) ? $data['deployStrategy'] : null;
        $this->container['jvmOpts'] = isset($data['jvmOpts']) ? $data['jvmOpts'] : null;
        $this->container['tomcatOpts'] = isset($data['tomcatOpts']) ? $data['tomcatOpts'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['customMetric'] = isset($data['customMetric']) ? $data['customMetric'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['antiAffinity'] = isset($data['antiAffinity']) ? $data['antiAffinity'] : null;
        $this->container['livenessProbe'] = isset($data['livenessProbe']) ? $data['livenessProbe'] : null;
        $this->container['readinessProbe'] = isset($data['readinessProbe']) ? $data['readinessProbe'] : null;
        $this->container['referResources'] = isset($data['referResources']) ? $data['referResources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['name']) && !preg_match("/^[a-z0-9_-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9_-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && !preg_match("/^([0-9]+)(.[0-9]+){2,3}$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^([0-9]+)(.[0-9]+){2,3}$/.";
            }
            if (!is_null($this->container['swimlaneId']) && (mb_strlen($this->container['swimlaneId']) > 64)) {
                $invalidProperties[] = "invalid value for 'swimlaneId', the character length must be smaller than or equal to 64.";
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
    *  name
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
    * @param string|null $name name
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
    *  description
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
    * @param string|null $description description
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets labels
    *  labels
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\Label[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\Label[]|null $labels labels
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets runtimeStack
    *  runtimeStack
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\RuntimeStack|null
    */
    public function getRuntimeStack()
    {
        return $this->container['runtimeStack'];
    }

    /**
    * Sets runtimeStack
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\RuntimeStack|null $runtimeStack runtimeStack
    *
    * @return $this
    */
    public function setRuntimeStack($runtimeStack)
    {
        $this->container['runtimeStack'] = $runtimeStack;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\SourceObject|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\SourceObject|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets build
    *  build
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\Build|null
    */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
    * Sets build
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\Build|null $build build
    *
    * @return $this
    */
    public function setBuild($build)
    {
        $this->container['build'] = $build;
        return $this;
    }

    /**
    * Gets environmentId
    *  environmentId
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId environmentId
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  applicationId
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId applicationId
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets limitCpu
    *  单位为Core
    *
    * @return float|null
    */
    public function getLimitCpu()
    {
        return $this->container['limitCpu'];
    }

    /**
    * Sets limitCpu
    *
    * @param float|null $limitCpu 单位为Core
    *
    * @return $this
    */
    public function setLimitCpu($limitCpu)
    {
        $this->container['limitCpu'] = $limitCpu;
        return $this;
    }

    /**
    * Gets limitMemory
    *  单位为GiB
    *
    * @return float|null
    */
    public function getLimitMemory()
    {
        return $this->container['limitMemory'];
    }

    /**
    * Sets limitMemory
    *
    * @param float|null $limitMemory 单位为GiB
    *
    * @return $this
    */
    public function setLimitMemory($limitMemory)
    {
        $this->container['limitMemory'] = $limitMemory;
        return $this;
    }

    /**
    * Gets requestCpu
    *  单位为Core
    *
    * @return float|null
    */
    public function getRequestCpu()
    {
        return $this->container['requestCpu'];
    }

    /**
    * Sets requestCpu
    *
    * @param float|null $requestCpu 单位为Core
    *
    * @return $this
    */
    public function setRequestCpu($requestCpu)
    {
        $this->container['requestCpu'] = $requestCpu;
        return $this;
    }

    /**
    * Gets requestMemory
    *  单位为GiB
    *
    * @return float|null
    */
    public function getRequestMemory()
    {
        return $this->container['requestMemory'];
    }

    /**
    * Sets requestMemory
    *
    * @param float|null $requestMemory 单位为GiB
    *
    * @return $this
    */
    public function setRequestMemory($requestMemory)
    {
        $this->container['requestMemory'] = $requestMemory;
        return $this;
    }

    /**
    * Gets replica
    *  replica
    *
    * @return int|null
    */
    public function getReplica()
    {
        return $this->container['replica'];
    }

    /**
    * Sets replica
    *
    * @param int|null $replica replica
    *
    * @return $this
    */
    public function setReplica($replica)
    {
        $this->container['replica'] = $replica;
        return $this;
    }

    /**
    * Gets version
    *  version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets swimlaneId
    *  泳道id
    *
    * @return string|null
    */
    public function getSwimlaneId()
    {
        return $this->container['swimlaneId'];
    }

    /**
    * Sets swimlaneId
    *
    * @param string|null $swimlaneId 泳道id
    *
    * @return $this
    */
    public function setSwimlaneId($swimlaneId)
    {
        $this->container['swimlaneId'] = $swimlaneId;
        return $this;
    }

    /**
    * Gets envs
    *  envs
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentEnvironment[]|null
    */
    public function getEnvs()
    {
        return $this->container['envs'];
    }

    /**
    * Sets envs
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentEnvironment[]|null $envs envs
    *
    * @return $this
    */
    public function setEnvs($envs)
    {
        $this->container['envs'] = $envs;
        return $this;
    }

    /**
    * Gets storages
    *  storages
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStorage[]|null
    */
    public function getStorages()
    {
        return $this->container['storages'];
    }

    /**
    * Sets storages
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStorage[]|null $storages storages
    *
    * @return $this
    */
    public function setStorages($storages)
    {
        $this->container['storages'] = $storages;
        return $this;
    }

    /**
    * Gets command
    *  command
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentCommand|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentCommand|null $command command
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets postStart
    *  postStart
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLifecycle|null
    */
    public function getPostStart()
    {
        return $this->container['postStart'];
    }

    /**
    * Sets postStart
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLifecycle|null $postStart postStart
    *
    * @return $this
    */
    public function setPostStart($postStart)
    {
        $this->container['postStart'] = $postStart;
        return $this;
    }

    /**
    * Gets preStop
    *  preStop
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLifecycle|null
    */
    public function getPreStop()
    {
        return $this->container['preStop'];
    }

    /**
    * Sets preStop
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLifecycle|null $preStop preStop
    *
    * @return $this
    */
    public function setPreStop($preStop)
    {
        $this->container['preStop'] = $preStop;
        return $this;
    }

    /**
    * Gets timezone
    *  指定组件运行的时区，比如Asia/Shanghai
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 指定组件运行的时区，比如Asia/Shanghai
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets mesher
    *  mesher
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\Mesher|null
    */
    public function getMesher()
    {
        return $this->container['mesher'];
    }

    /**
    * Sets mesher
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\Mesher|null $mesher mesher
    *
    * @return $this
    */
    public function setMesher($mesher)
    {
        $this->container['mesher'] = $mesher;
        return $this;
    }

    /**
    * Gets deployStrategy
    *  deployStrategy
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategy|null
    */
    public function getDeployStrategy()
    {
        return $this->container['deployStrategy'];
    }

    /**
    * Sets deployStrategy
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategy|null $deployStrategy deployStrategy
    *
    * @return $this
    */
    public function setDeployStrategy($deployStrategy)
    {
        $this->container['deployStrategy'] = $deployStrategy;
        return $this;
    }

    /**
    * Gets jvmOpts
    *  jvm参数
    *
    * @return string|null
    */
    public function getJvmOpts()
    {
        return $this->container['jvmOpts'];
    }

    /**
    * Sets jvmOpts
    *
    * @param string|null $jvmOpts jvm参数
    *
    * @return $this
    */
    public function setJvmOpts($jvmOpts)
    {
        $this->container['jvmOpts'] = $jvmOpts;
        return $this;
    }

    /**
    * Gets tomcatOpts
    *  tomcatOpts
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentInfoTomcatOpts|null
    */
    public function getTomcatOpts()
    {
        return $this->container['tomcatOpts'];
    }

    /**
    * Sets tomcatOpts
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentInfoTomcatOpts|null $tomcatOpts tomcatOpts
    *
    * @return $this
    */
    public function setTomcatOpts($tomcatOpts)
    {
        $this->container['tomcatOpts'] = $tomcatOpts;
        return $this;
    }

    /**
    * Gets logs
    *  logs
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLogs[]|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentLogs[]|null $logs logs
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
        return $this;
    }

    /**
    * Gets customMetric
    *  customMetric
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentInfoCustomMetric|null
    */
    public function getCustomMetric()
    {
        return $this->container['customMetric'];
    }

    /**
    * Sets customMetric
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentInfoCustomMetric|null $customMetric customMetric
    *
    * @return $this
    */
    public function setCustomMetric($customMetric)
    {
        $this->container['customMetric'] = $customMetric;
        return $this;
    }

    /**
    * Gets affinity
    *  affinity
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentAffinity|null
    */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
    * Sets affinity
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentAffinity|null $affinity affinity
    *
    * @return $this
    */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;
        return $this;
    }

    /**
    * Gets antiAffinity
    *  antiAffinity
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentAffinity|null
    */
    public function getAntiAffinity()
    {
        return $this->container['antiAffinity'];
    }

    /**
    * Sets antiAffinity
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentAffinity|null $antiAffinity antiAffinity
    *
    * @return $this
    */
    public function setAntiAffinity($antiAffinity)
    {
        $this->container['antiAffinity'] = $antiAffinity;
        return $this;
    }

    /**
    * Gets livenessProbe
    *  livenessProbe
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentProbe|null
    */
    public function getLivenessProbe()
    {
        return $this->container['livenessProbe'];
    }

    /**
    * Sets livenessProbe
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentProbe|null $livenessProbe livenessProbe
    *
    * @return $this
    */
    public function setLivenessProbe($livenessProbe)
    {
        $this->container['livenessProbe'] = $livenessProbe;
        return $this;
    }

    /**
    * Gets readinessProbe
    *  readinessProbe
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentProbe|null
    */
    public function getReadinessProbe()
    {
        return $this->container['readinessProbe'];
    }

    /**
    * Sets readinessProbe
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentProbe|null $readinessProbe readinessProbe
    *
    * @return $this
    */
    public function setReadinessProbe($readinessProbe)
    {
        $this->container['readinessProbe'] = $readinessProbe;
        return $this;
    }

    /**
    * Gets referResources
    *  referResources
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ReferResourceCreate[]|null
    */
    public function getReferResources()
    {
        return $this->container['referResources'];
    }

    /**
    * Sets referResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ReferResourceCreate[]|null $referResources referResources
    *
    * @return $this
    */
    public function setReferResources($referResources)
    {
        $this->container['referResources'] = $referResources;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusView|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusView|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

