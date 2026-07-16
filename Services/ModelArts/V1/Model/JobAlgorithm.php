<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobAlgorithm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobAlgorithm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * subscriptionId  **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * itemVersionId  **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * codeDir  **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchConfigPath  **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchFrameworkPath  **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * command  **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parameters  **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
    * engine  engine
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
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
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Parameters[]',
            'policies' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobPolicies',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Input[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Output[]',
            'engine' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobEngine',
            'localCodeDir' => 'string',
            'workingDir' => 'string',
            'environments' => 'map[string,string]',
            'summary' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Summary'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * subscriptionId  **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * itemVersionId  **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * codeDir  **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchConfigPath  **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchFrameworkPath  **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * command  **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parameters  **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
    * engine  engine
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
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
    * id  **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * subscriptionId  **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * itemVersionId  **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * codeDir  **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchConfigPath  **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchFrameworkPath  **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * command  **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parameters  **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
    * engine  engine
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
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
    * id  **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * subscriptionId  **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * itemVersionId  **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * codeDir  **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchConfigPath  **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchFrameworkPath  **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * command  **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parameters  **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
    * engine  engine
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
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
    * id  **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * subscriptionId  **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * itemVersionId  **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * codeDir  **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchConfigPath  **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * autosearchFrameworkPath  **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * command  **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parameters  **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
    * policies  policies
    * inputs  **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
    * engine  engine
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
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
    *  **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $id **参数解释**：算法管理的算法id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $name **参数解释**：算法名称。无需填写。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $subscriptionId **参数解释**：订阅算法的订阅ID。 **约束限制**：应与item_version_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $itemVersionId **参数解释**：订阅算法的版本。 **约束限制**：应与subscription_id一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $codeDir **参数解释**：训练作业的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现，如果boot_file填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $bootFile **参数解释**：训练作业的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现，如果code_dir填入id或subscription_id+item_version_id，则此参数无需填写。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $autosearchConfigPath **参数解释**：自动化搜索作业的yaml配置路径，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $autosearchFrameworkPath **参数解释**：自动化搜索作业的框架代码目录，需要提供一个OBS路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $command **参数解释**：自定义镜像场景下，训练作业的自定义镜像的容器的启动命令。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Parameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Parameters[]|null $parameters **参数解释**：训练作业的运行参数。 **约束限制**：不涉及。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobPolicies|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobPolicies|null $policies policies
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
    *  **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Input[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Input[]|null $inputs **参数解释**：训练作业的数据输入。 **约束限制**：不涉及。
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
    *  **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Output[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Output[]|null $outputs **参数解释**：训练作业的结果输出。 **约束限制**：不涉及。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobEngine|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobEngine|null $engine engine
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
    *  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $localCodeDir **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录。 - v1兼容模式下，当前字段不生效。 - 当code_dir以file://为前缀时，当前字段不生效。 - 不支持配置成/home/ma-user/modelarts，/home/ma-user/modelarts-dev，/home/ma-user/infer以及它们底下的目录，也不支持配置成/home/ma-user  **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $workingDir **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
    *
    * @return map[string,string]|null
    */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
    * Sets environments
    *
    * @param map[string,string]|null $environments **参数解释**：训练作业的环境变量。格式：\"key\":\"value\"。 **约束限制**：其中key最大允许填写8192字符，value最大允许填写4096字符，最多允许100对环境变量。变量名应该仅包含字母、数字、下划线，且以字母或下划线开头。 注：不支持使用符号 $ 引用变量。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Summary|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Summary|null $summary summary
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

