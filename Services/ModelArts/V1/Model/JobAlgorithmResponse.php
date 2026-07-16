<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobAlgorithmResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobAlgorithmResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
    * name  算法名称。
    * subscriptionId  订阅算法的订阅ID。应与item_version_id一同出现。
    * itemVersionId  订阅算法的版本。应与subscription_id一同出现。
    * codeDir  训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * bootFile  训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * autosearchConfigPath  自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    * autosearchFrameworkPath  自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    * command  自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    * parameters  训练作业的运行参数。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。
    * outputs  **参数解释**：训练作业的结果输出。
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    * summary  summary
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'subscriptionId' => 'string',
            'itemVersionId' => 'string',
            'codeDir' => 'string',
            'bootFile' => 'string',
            'autosearchConfigPath' => 'string',
            'autosearchFrameworkPath' => 'string',
            'command' => 'string',
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Parameter[]',
            'policies' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePolicies',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\InputResp[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\OutputResp[]',
            'engine' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobEngineResp',
            'localCodeDir' => 'string',
            'workingDir' => 'string',
            'environments' => 'map[string,string][]',
            'summary' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SummaryResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
    * name  算法名称。
    * subscriptionId  订阅算法的订阅ID。应与item_version_id一同出现。
    * itemVersionId  订阅算法的版本。应与subscription_id一同出现。
    * codeDir  训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * bootFile  训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * autosearchConfigPath  自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    * autosearchFrameworkPath  自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    * command  自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    * parameters  训练作业的运行参数。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。
    * outputs  **参数解释**：训练作业的结果输出。
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    * summary  summary
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'subscriptionId' => null,
        'itemVersionId' => null,
        'codeDir' => null,
        'bootFile' => null,
        'autosearchConfigPath' => null,
        'autosearchFrameworkPath' => null,
        'command' => null,
        'parameters' => null,
        'policies' => null,
        'inputs' => null,
        'outputs' => null,
        'engine' => null,
        'localCodeDir' => null,
        'workingDir' => null,
        'environments' => null,
        'summary' => null
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
    * id  训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
    * name  算法名称。
    * subscriptionId  订阅算法的订阅ID。应与item_version_id一同出现。
    * itemVersionId  订阅算法的版本。应与subscription_id一同出现。
    * codeDir  训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * bootFile  训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * autosearchConfigPath  自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    * autosearchFrameworkPath  自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    * command  自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    * parameters  训练作业的运行参数。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。
    * outputs  **参数解释**：训练作业的结果输出。
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    * summary  summary
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'subscriptionId' => 'subscription_id',
            'itemVersionId' => 'item_version_id',
            'codeDir' => 'code_dir',
            'bootFile' => 'boot_file',
            'autosearchConfigPath' => 'autosearch_config_path',
            'autosearchFrameworkPath' => 'autosearch_framework_path',
            'command' => 'command',
            'parameters' => 'parameters',
            'policies' => 'policies',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'engine' => 'engine',
            'localCodeDir' => 'local_code_dir',
            'workingDir' => 'working_dir',
            'environments' => 'environments',
            'summary' => 'summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
    * name  算法名称。
    * subscriptionId  订阅算法的订阅ID。应与item_version_id一同出现。
    * itemVersionId  订阅算法的版本。应与subscription_id一同出现。
    * codeDir  训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * bootFile  训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * autosearchConfigPath  自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    * autosearchFrameworkPath  自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    * command  自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    * parameters  训练作业的运行参数。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。
    * outputs  **参数解释**：训练作业的结果输出。
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    * summary  summary
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'subscriptionId' => 'setSubscriptionId',
            'itemVersionId' => 'setItemVersionId',
            'codeDir' => 'setCodeDir',
            'bootFile' => 'setBootFile',
            'autosearchConfigPath' => 'setAutosearchConfigPath',
            'autosearchFrameworkPath' => 'setAutosearchFrameworkPath',
            'command' => 'setCommand',
            'parameters' => 'setParameters',
            'policies' => 'setPolicies',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'engine' => 'setEngine',
            'localCodeDir' => 'setLocalCodeDir',
            'workingDir' => 'setWorkingDir',
            'environments' => 'setEnvironments',
            'summary' => 'setSummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
    * name  算法名称。
    * subscriptionId  订阅算法的订阅ID。应与item_version_id一同出现。
    * itemVersionId  订阅算法的版本。应与subscription_id一同出现。
    * codeDir  训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * bootFile  训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    * autosearchConfigPath  自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    * autosearchFrameworkPath  自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    * command  自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    * parameters  训练作业的运行参数。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。
    * outputs  **参数解释**：训练作业的结果输出。
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    * summary  summary
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'subscriptionId' => 'getSubscriptionId',
            'itemVersionId' => 'getItemVersionId',
            'codeDir' => 'getCodeDir',
            'bootFile' => 'getBootFile',
            'autosearchConfigPath' => 'getAutosearchConfigPath',
            'autosearchFrameworkPath' => 'getAutosearchFrameworkPath',
            'command' => 'getCommand',
            'parameters' => 'getParameters',
            'policies' => 'getPolicies',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'engine' => 'getEngine',
            'localCodeDir' => 'getLocalCodeDir',
            'workingDir' => 'getWorkingDir',
            'environments' => 'getEnvironments',
            'summary' => 'getSummary'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['itemVersionId'] = isset($data['itemVersionId']) ? $data['itemVersionId'] : null;
        $this->container['codeDir'] = isset($data['codeDir']) ? $data['codeDir'] : null;
        $this->container['bootFile'] = isset($data['bootFile']) ? $data['bootFile'] : null;
        $this->container['autosearchConfigPath'] = isset($data['autosearchConfigPath']) ? $data['autosearchConfigPath'] : null;
        $this->container['autosearchFrameworkPath'] = isset($data['autosearchFrameworkPath']) ? $data['autosearchFrameworkPath'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['localCodeDir'] = isset($data['localCodeDir']) ? $data['localCodeDir'] : null;
        $this->container['workingDir'] = isset($data['workingDir']) ? $data['workingDir'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
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
    *  训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
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
    * @param string|null $id 训练作业算法。目前支持三种形式：   - id：只取算法的id；   - subscription_id+item_version_id：取算法的订阅id和版本id；   - code_dir+boot_file：取训练作业的代码目录和启动文件。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  算法名称。
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
    * @param string|null $name 算法名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  订阅算法的订阅ID。应与item_version_id一同出现。
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
    * @param string|null $subscriptionId 订阅算法的订阅ID。应与item_version_id一同出现。
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets itemVersionId
    *  订阅算法的版本。应与subscription_id一同出现。
    *
    * @return string|null
    */
    public function getItemVersionId()
    {
        return $this->container['itemVersionId'];
    }

    /**
    * Sets itemVersionId
    *
    * @param string|null $itemVersionId 订阅算法的版本。应与subscription_id一同出现。
    *
    * @return $this
    */
    public function setItemVersionId($itemVersionId)
    {
        $this->container['itemVersionId'] = $itemVersionId;
        return $this;
    }

    /**
    * Gets codeDir
    *  训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    *
    * @return string|null
    */
    public function getCodeDir()
    {
        return $this->container['codeDir'];
    }

    /**
    * Sets codeDir
    *
    * @param string|null $codeDir 训练作业的代码目录。如：“/usr/app/”。应与boot_file一同出现，如果boot_file已经填入id或subscription_id+item_version_id，则无需填写此参数。
    *
    * @return $this
    */
    public function setCodeDir($codeDir)
    {
        $this->container['codeDir'] = $codeDir;
        return $this;
    }

    /**
    * Gets bootFile
    *  训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    *
    * @return string|null
    */
    public function getBootFile()
    {
        return $this->container['bootFile'];
    }

    /**
    * Sets bootFile
    *
    * @param string|null $bootFile 训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现，如果code_dir已经填入id或subscription_id+item_version_id，则无需填写此参数。
    *
    * @return $this
    */
    public function setBootFile($bootFile)
    {
        $this->container['bootFile'] = $bootFile;
        return $this;
    }

    /**
    * Gets autosearchConfigPath
    *  自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    *
    * @return string|null
    */
    public function getAutosearchConfigPath()
    {
        return $this->container['autosearchConfigPath'];
    }

    /**
    * Sets autosearchConfigPath
    *
    * @param string|null $autosearchConfigPath 自动化搜索作业的yaml配置路径，需要提供一个OBS路径。如：“obs://bucket/file.yaml”。
    *
    * @return $this
    */
    public function setAutosearchConfigPath($autosearchConfigPath)
    {
        $this->container['autosearchConfigPath'] = $autosearchConfigPath;
        return $this;
    }

    /**
    * Gets autosearchFrameworkPath
    *  自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    *
    * @return string|null
    */
    public function getAutosearchFrameworkPath()
    {
        return $this->container['autosearchFrameworkPath'];
    }

    /**
    * Sets autosearchFrameworkPath
    *
    * @param string|null $autosearchFrameworkPath 自动化搜索作业的框架代码目录，需要提供一个OBS路径。如：“obs://bucket/files/”。
    *
    * @return $this
    */
    public function setAutosearchFrameworkPath($autosearchFrameworkPath)
    {
        $this->container['autosearchFrameworkPath'] = $autosearchFrameworkPath;
        return $this;
    }

    /**
    * Gets command
    *  自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 自定义镜像训练作业的自定义镜像的容器的启动命令。例如python train.py。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets parameters
    *  训练作业的运行参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Parameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Parameter[]|null $parameters 训练作业的运行参数。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePolicies|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponsePolicies|null $policies policies
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
        return $this;
    }

    /**
    * Gets inputs
    *  **参数解释**：训练作业的数据输入。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\InputResp[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\InputResp[]|null $inputs **参数解释**：训练作业的数据输入。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets outputs
    *  **参数解释**：训练作业的结果输出。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\OutputResp[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\OutputResp[]|null $outputs **参数解释**：训练作业的结果输出。
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets engine
    *  engine
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobEngineResp|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobEngineResp|null $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets localCodeDir
    *  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    *
    * @return string|null
    */
    public function getLocalCodeDir()
    {
        return $this->container['localCodeDir'];
    }

    /**
    * Sets localCodeDir
    *
    * @param string|null $localCodeDir 算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    *
    * @return $this
    */
    public function setLocalCodeDir($localCodeDir)
    {
        $this->container['localCodeDir'] = $localCodeDir;
        return $this;
    }

    /**
    * Gets workingDir
    *  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    *
    * @return string|null
    */
    public function getWorkingDir()
    {
        return $this->container['workingDir'];
    }

    /**
    * Sets workingDir
    *
    * @param string|null $workingDir 运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    *
    * @return $this
    */
    public function setWorkingDir($workingDir)
    {
        $this->container['workingDir'] = $workingDir;
        return $this;
    }

    /**
    * Gets environments
    *  训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    *
    * @return map[string,string][]|null
    */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
    * Sets environments
    *
    * @param map[string,string][]|null $environments 训练作业的环境变量。格式：\"key\":\"value\"，无需填写。
    *
    * @return $this
    */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;
        return $this;
    }

    /**
    * Gets summary
    *  summary
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SummaryResp|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SummaryResp|null $summary summary
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
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

