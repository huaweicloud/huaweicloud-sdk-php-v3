<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFunctionConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFunctionConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcName  函数名称。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcVpc  funcVpc
    * mountConfig  mountConfig
    * strategyConfig  strategyConfig
    * customImage  customImage
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * ephemeralStorage  临时存储大小, 默认512M, 支持配置10G。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * logConfig  logConfig
    * networkController  networkController
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableDynamicMemory  是否启动动态内存配置
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * domainNames  内网域名配置。
    * restoreHookHandler  函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    * restoreHookTimeout  快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcName' => 'string',
            'runtime' => 'string',
            'timeout' => 'int',
            'handler' => 'string',
            'memorySize' => 'int',
            'gpuMemory' => 'int',
            'userData' => 'string',
            'encryptedUserData' => 'string',
            'xrole' => 'string',
            'appXrole' => 'string',
            'description' => 'string',
            'funcVpc' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc',
            'mountConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\MountConfig',
            'strategyConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\StrategyConfig',
            'customImage' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage',
            'extendConfig' => 'string',
            'initializerHandler' => 'string',
            'initializerTimeout' => 'int',
            'preStopHandler' => 'string',
            'preStopTimeout' => 'int',
            'ephemeralStorage' => 'int',
            'enterpriseProjectId' => 'string',
            'logConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncLogConfig',
            'networkController' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\NetworkControlConfig',
            'isStatefulFunction' => 'bool',
            'enableDynamicMemory' => 'bool',
            'enableAuthInHeader' => 'bool',
            'domainNames' => 'string',
            'restoreHookHandler' => 'string',
            'restoreHookTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcName  函数名称。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcVpc  funcVpc
    * mountConfig  mountConfig
    * strategyConfig  strategyConfig
    * customImage  customImage
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * ephemeralStorage  临时存储大小, 默认512M, 支持配置10G。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * logConfig  logConfig
    * networkController  networkController
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableDynamicMemory  是否启动动态内存配置
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * domainNames  内网域名配置。
    * restoreHookHandler  函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    * restoreHookTimeout  快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcName' => null,
        'runtime' => null,
        'timeout' => 'int32',
        'handler' => null,
        'memorySize' => 'int32',
        'gpuMemory' => 'int32',
        'userData' => null,
        'encryptedUserData' => null,
        'xrole' => null,
        'appXrole' => null,
        'description' => null,
        'funcVpc' => null,
        'mountConfig' => null,
        'strategyConfig' => null,
        'customImage' => null,
        'extendConfig' => null,
        'initializerHandler' => null,
        'initializerTimeout' => 'int32',
        'preStopHandler' => null,
        'preStopTimeout' => 'int32',
        'ephemeralStorage' => null,
        'enterpriseProjectId' => null,
        'logConfig' => null,
        'networkController' => null,
        'isStatefulFunction' => null,
        'enableDynamicMemory' => null,
        'enableAuthInHeader' => null,
        'domainNames' => null,
        'restoreHookHandler' => null,
        'restoreHookTimeout' => 'int32'
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
    * funcName  函数名称。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcVpc  funcVpc
    * mountConfig  mountConfig
    * strategyConfig  strategyConfig
    * customImage  customImage
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * ephemeralStorage  临时存储大小, 默认512M, 支持配置10G。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * logConfig  logConfig
    * networkController  networkController
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableDynamicMemory  是否启动动态内存配置
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * domainNames  内网域名配置。
    * restoreHookHandler  函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    * restoreHookTimeout  快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcName' => 'func_name',
            'runtime' => 'runtime',
            'timeout' => 'timeout',
            'handler' => 'handler',
            'memorySize' => 'memory_size',
            'gpuMemory' => 'gpu_memory',
            'userData' => 'user_data',
            'encryptedUserData' => 'encrypted_user_data',
            'xrole' => 'xrole',
            'appXrole' => 'app_xrole',
            'description' => 'description',
            'funcVpc' => 'func_vpc',
            'mountConfig' => 'mount_config',
            'strategyConfig' => 'strategy_config',
            'customImage' => 'custom_image',
            'extendConfig' => 'extend_config',
            'initializerHandler' => 'initializer_handler',
            'initializerTimeout' => 'initializer_timeout',
            'preStopHandler' => 'pre_stop_handler',
            'preStopTimeout' => 'pre_stop_timeout',
            'ephemeralStorage' => 'ephemeral_storage',
            'enterpriseProjectId' => 'enterprise_project_id',
            'logConfig' => 'log_config',
            'networkController' => 'network_controller',
            'isStatefulFunction' => 'is_stateful_function',
            'enableDynamicMemory' => 'enable_dynamic_memory',
            'enableAuthInHeader' => 'enable_auth_in_header',
            'domainNames' => 'domain_names',
            'restoreHookHandler' => 'restore_hook_handler',
            'restoreHookTimeout' => 'restore_hook_timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcName  函数名称。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcVpc  funcVpc
    * mountConfig  mountConfig
    * strategyConfig  strategyConfig
    * customImage  customImage
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * ephemeralStorage  临时存储大小, 默认512M, 支持配置10G。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * logConfig  logConfig
    * networkController  networkController
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableDynamicMemory  是否启动动态内存配置
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * domainNames  内网域名配置。
    * restoreHookHandler  函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    * restoreHookTimeout  快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'funcName' => 'setFuncName',
            'runtime' => 'setRuntime',
            'timeout' => 'setTimeout',
            'handler' => 'setHandler',
            'memorySize' => 'setMemorySize',
            'gpuMemory' => 'setGpuMemory',
            'userData' => 'setUserData',
            'encryptedUserData' => 'setEncryptedUserData',
            'xrole' => 'setXrole',
            'appXrole' => 'setAppXrole',
            'description' => 'setDescription',
            'funcVpc' => 'setFuncVpc',
            'mountConfig' => 'setMountConfig',
            'strategyConfig' => 'setStrategyConfig',
            'customImage' => 'setCustomImage',
            'extendConfig' => 'setExtendConfig',
            'initializerHandler' => 'setInitializerHandler',
            'initializerTimeout' => 'setInitializerTimeout',
            'preStopHandler' => 'setPreStopHandler',
            'preStopTimeout' => 'setPreStopTimeout',
            'ephemeralStorage' => 'setEphemeralStorage',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'logConfig' => 'setLogConfig',
            'networkController' => 'setNetworkController',
            'isStatefulFunction' => 'setIsStatefulFunction',
            'enableDynamicMemory' => 'setEnableDynamicMemory',
            'enableAuthInHeader' => 'setEnableAuthInHeader',
            'domainNames' => 'setDomainNames',
            'restoreHookHandler' => 'setRestoreHookHandler',
            'restoreHookTimeout' => 'setRestoreHookTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcName  函数名称。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcVpc  funcVpc
    * mountConfig  mountConfig
    * strategyConfig  strategyConfig
    * customImage  customImage
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * ephemeralStorage  临时存储大小, 默认512M, 支持配置10G。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * logConfig  logConfig
    * networkController  networkController
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableDynamicMemory  是否启动动态内存配置
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * domainNames  内网域名配置。
    * restoreHookHandler  函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    * restoreHookTimeout  快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'funcName' => 'getFuncName',
            'runtime' => 'getRuntime',
            'timeout' => 'getTimeout',
            'handler' => 'getHandler',
            'memorySize' => 'getMemorySize',
            'gpuMemory' => 'getGpuMemory',
            'userData' => 'getUserData',
            'encryptedUserData' => 'getEncryptedUserData',
            'xrole' => 'getXrole',
            'appXrole' => 'getAppXrole',
            'description' => 'getDescription',
            'funcVpc' => 'getFuncVpc',
            'mountConfig' => 'getMountConfig',
            'strategyConfig' => 'getStrategyConfig',
            'customImage' => 'getCustomImage',
            'extendConfig' => 'getExtendConfig',
            'initializerHandler' => 'getInitializerHandler',
            'initializerTimeout' => 'getInitializerTimeout',
            'preStopHandler' => 'getPreStopHandler',
            'preStopTimeout' => 'getPreStopTimeout',
            'ephemeralStorage' => 'getEphemeralStorage',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'logConfig' => 'getLogConfig',
            'networkController' => 'getNetworkController',
            'isStatefulFunction' => 'getIsStatefulFunction',
            'enableDynamicMemory' => 'getEnableDynamicMemory',
            'enableAuthInHeader' => 'getEnableAuthInHeader',
            'domainNames' => 'getDomainNames',
            'restoreHookHandler' => 'getRestoreHookHandler',
            'restoreHookTimeout' => 'getRestoreHookTimeout'
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
    const RUNTIME_JAVA8 = 'Java8';
    const RUNTIME_JAVA11 = 'Java11';
    const RUNTIME_NODE_JS6_10 = 'Node.js6.10';
    const RUNTIME_NODE_JS8_10 = 'Node.js8.10';
    const RUNTIME_NODE_JS10_16 = 'Node.js10.16';
    const RUNTIME_NODE_JS12_13 = 'Node.js12.13';
    const RUNTIME_NODE_JS14_18 = 'Node.js14.18';
    const RUNTIME_PYTHON2_7 = 'Python2.7';
    const RUNTIME_PYTHON3_6 = 'Python3.6';
    const RUNTIME_GO1_8 = 'Go1.8';
    const RUNTIME_GO1_X = 'Go1.x';
    const RUNTIME_C__NET_CORE_2_0 = 'C#(.NET Core 2.0)';
    const RUNTIME_C__NET_CORE_2_1 = 'C#(.NET Core 2.1)';
    const RUNTIME_C__NET_CORE_3_1 = 'C#(.NET Core 3.1)';
    const RUNTIME_PHP7_3 = 'PHP7.3';
    const RUNTIME_PYTHON3_9 = 'Python3.9';
    const RUNTIME_CUSTOM = 'Custom';
    const RUNTIME_HTTP = 'http';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuntimeAllowableValues()
    {
        return [
            self::RUNTIME_JAVA8,
            self::RUNTIME_JAVA11,
            self::RUNTIME_NODE_JS6_10,
            self::RUNTIME_NODE_JS8_10,
            self::RUNTIME_NODE_JS10_16,
            self::RUNTIME_NODE_JS12_13,
            self::RUNTIME_NODE_JS14_18,
            self::RUNTIME_PYTHON2_7,
            self::RUNTIME_PYTHON3_6,
            self::RUNTIME_GO1_8,
            self::RUNTIME_GO1_X,
            self::RUNTIME_C__NET_CORE_2_0,
            self::RUNTIME_C__NET_CORE_2_1,
            self::RUNTIME_C__NET_CORE_3_1,
            self::RUNTIME_PHP7_3,
            self::RUNTIME_PYTHON3_9,
            self::RUNTIME_CUSTOM,
            self::RUNTIME_HTTP,
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
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['gpuMemory'] = isset($data['gpuMemory']) ? $data['gpuMemory'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['encryptedUserData'] = isset($data['encryptedUserData']) ? $data['encryptedUserData'] : null;
        $this->container['xrole'] = isset($data['xrole']) ? $data['xrole'] : null;
        $this->container['appXrole'] = isset($data['appXrole']) ? $data['appXrole'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['funcVpc'] = isset($data['funcVpc']) ? $data['funcVpc'] : null;
        $this->container['mountConfig'] = isset($data['mountConfig']) ? $data['mountConfig'] : null;
        $this->container['strategyConfig'] = isset($data['strategyConfig']) ? $data['strategyConfig'] : null;
        $this->container['customImage'] = isset($data['customImage']) ? $data['customImage'] : null;
        $this->container['extendConfig'] = isset($data['extendConfig']) ? $data['extendConfig'] : null;
        $this->container['initializerHandler'] = isset($data['initializerHandler']) ? $data['initializerHandler'] : null;
        $this->container['initializerTimeout'] = isset($data['initializerTimeout']) ? $data['initializerTimeout'] : null;
        $this->container['preStopHandler'] = isset($data['preStopHandler']) ? $data['preStopHandler'] : null;
        $this->container['preStopTimeout'] = isset($data['preStopTimeout']) ? $data['preStopTimeout'] : null;
        $this->container['ephemeralStorage'] = isset($data['ephemeralStorage']) ? $data['ephemeralStorage'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['logConfig'] = isset($data['logConfig']) ? $data['logConfig'] : null;
        $this->container['networkController'] = isset($data['networkController']) ? $data['networkController'] : null;
        $this->container['isStatefulFunction'] = isset($data['isStatefulFunction']) ? $data['isStatefulFunction'] : null;
        $this->container['enableDynamicMemory'] = isset($data['enableDynamicMemory']) ? $data['enableDynamicMemory'] : null;
        $this->container['enableAuthInHeader'] = isset($data['enableAuthInHeader']) ? $data['enableAuthInHeader'] : null;
        $this->container['domainNames'] = isset($data['domainNames']) ? $data['domainNames'] : null;
        $this->container['restoreHookHandler'] = isset($data['restoreHookHandler']) ? $data['restoreHookHandler'] : null;
        $this->container['restoreHookTimeout'] = isset($data['restoreHookTimeout']) ? $data['restoreHookTimeout'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['funcName'] === null) {
            $invalidProperties[] = "'funcName' can't be null";
        }
        if ($this->container['runtime'] === null) {
            $invalidProperties[] = "'runtime' can't be null";
        }
            $allowedValues = $this->getRuntimeAllowableValues();
                if (!is_null($this->container['runtime']) && !in_array($this->container['runtime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        if ($this->container['handler'] === null) {
            $invalidProperties[] = "'handler' can't be null";
        }
        if ($this->container['memorySize'] === null) {
            $invalidProperties[] = "'memorySize' can't be null";
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
    * Gets funcName
    *  函数名称。
    *
    * @return string
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string $funcName 函数名称。
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
        return $this;
    }

    /**
    * Gets runtime
    *  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    *
    * @return string
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string $runtime FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets timeout
    *  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets handler
    *  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    *
    * @return string
    */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
    * Sets handler
    *
    * @param string $handler 函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    *
    * @return $this
    */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;
        return $this;
    }

    /**
    * Gets memorySize
    *  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    *
    * @return int
    */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
    * Sets memorySize
    *
    * @param int $memorySize 函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    *
    * @return $this
    */
    public function setMemorySize($memorySize)
    {
        $this->container['memorySize'] = $memorySize;
        return $this;
    }

    /**
    * Gets gpuMemory
    *  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    *
    * @return int|null
    */
    public function getGpuMemory()
    {
        return $this->container['gpuMemory'];
    }

    /**
    * Sets gpuMemory
    *
    * @param int|null $gpuMemory 函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    *
    * @return $this
    */
    public function setGpuMemory($gpuMemory)
    {
        $this->container['gpuMemory'] = $gpuMemory;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets encryptedUserData
    *  用户自定义的name/value信息，用于需要加密的配置。
    *
    * @return string|null
    */
    public function getEncryptedUserData()
    {
        return $this->container['encryptedUserData'];
    }

    /**
    * Sets encryptedUserData
    *
    * @param string|null $encryptedUserData 用户自定义的name/value信息，用于需要加密的配置。
    *
    * @return $this
    */
    public function setEncryptedUserData($encryptedUserData)
    {
        $this->container['encryptedUserData'] = $encryptedUserData;
        return $this;
    }

    /**
    * Gets xrole
    *  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return string|null
    */
    public function getXrole()
    {
        return $this->container['xrole'];
    }

    /**
    * Sets xrole
    *
    * @param string|null $xrole 函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return $this
    */
    public function setXrole($xrole)
    {
        $this->container['xrole'] = $xrole;
        return $this;
    }

    /**
    * Gets appXrole
    *  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return string|null
    */
    public function getAppXrole()
    {
        return $this->container['appXrole'];
    }

    /**
    * Sets appXrole
    *
    * @param string|null $appXrole 函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return $this
    */
    public function setAppXrole($appXrole)
    {
        $this->container['appXrole'] = $appXrole;
        return $this;
    }

    /**
    * Gets description
    *  函数描述。
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
    * @param string|null $description 函数描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets funcVpc
    *  funcVpc
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc|null
    */
    public function getFuncVpc()
    {
        return $this->container['funcVpc'];
    }

    /**
    * Sets funcVpc
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc|null $funcVpc funcVpc
    *
    * @return $this
    */
    public function setFuncVpc($funcVpc)
    {
        $this->container['funcVpc'] = $funcVpc;
        return $this;
    }

    /**
    * Gets mountConfig
    *  mountConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\MountConfig|null
    */
    public function getMountConfig()
    {
        return $this->container['mountConfig'];
    }

    /**
    * Sets mountConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\MountConfig|null $mountConfig mountConfig
    *
    * @return $this
    */
    public function setMountConfig($mountConfig)
    {
        $this->container['mountConfig'] = $mountConfig;
        return $this;
    }

    /**
    * Gets strategyConfig
    *  strategyConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\StrategyConfig|null
    */
    public function getStrategyConfig()
    {
        return $this->container['strategyConfig'];
    }

    /**
    * Sets strategyConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\StrategyConfig|null $strategyConfig strategyConfig
    *
    * @return $this
    */
    public function setStrategyConfig($strategyConfig)
    {
        $this->container['strategyConfig'] = $strategyConfig;
        return $this;
    }

    /**
    * Gets customImage
    *  customImage
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage|null
    */
    public function getCustomImage()
    {
        return $this->container['customImage'];
    }

    /**
    * Sets customImage
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage|null $customImage customImage
    *
    * @return $this
    */
    public function setCustomImage($customImage)
    {
        $this->container['customImage'] = $customImage;
        return $this;
    }

    /**
    * Gets extendConfig
    *  函数扩展配置。
    *
    * @return string|null
    */
    public function getExtendConfig()
    {
        return $this->container['extendConfig'];
    }

    /**
    * Sets extendConfig
    *
    * @param string|null $extendConfig 函数扩展配置。
    *
    * @return $this
    */
    public function setExtendConfig($extendConfig)
    {
        $this->container['extendConfig'] = $extendConfig;
        return $this;
    }

    /**
    * Gets initializerHandler
    *  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    *
    * @return string|null
    */
    public function getInitializerHandler()
    {
        return $this->container['initializerHandler'];
    }

    /**
    * Sets initializerHandler
    *
    * @param string|null $initializerHandler 函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    *
    * @return $this
    */
    public function setInitializerHandler($initializerHandler)
    {
        $this->container['initializerHandler'] = $initializerHandler;
        return $this;
    }

    /**
    * Gets initializerTimeout
    *  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @return int|null
    */
    public function getInitializerTimeout()
    {
        return $this->container['initializerTimeout'];
    }

    /**
    * Sets initializerTimeout
    *
    * @param int|null $initializerTimeout 初始化超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @return $this
    */
    public function setInitializerTimeout($initializerTimeout)
    {
        $this->container['initializerTimeout'] = $initializerTimeout;
        return $this;
    }

    /**
    * Gets preStopHandler
    *  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    *
    * @return string|null
    */
    public function getPreStopHandler()
    {
        return $this->container['preStopHandler'];
    }

    /**
    * Sets preStopHandler
    *
    * @param string|null $preStopHandler 函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    *
    * @return $this
    */
    public function setPreStopHandler($preStopHandler)
    {
        $this->container['preStopHandler'] = $preStopHandler;
        return $this;
    }

    /**
    * Gets preStopTimeout
    *  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    *
    * @return int|null
    */
    public function getPreStopTimeout()
    {
        return $this->container['preStopTimeout'];
    }

    /**
    * Sets preStopTimeout
    *
    * @param int|null $preStopTimeout 初始化超时时间，超时函数将被强行停止，范围1～90秒。
    *
    * @return $this
    */
    public function setPreStopTimeout($preStopTimeout)
    {
        $this->container['preStopTimeout'] = $preStopTimeout;
        return $this;
    }

    /**
    * Gets ephemeralStorage
    *  临时存储大小, 默认512M, 支持配置10G。
    *
    * @return int|null
    */
    public function getEphemeralStorage()
    {
        return $this->container['ephemeralStorage'];
    }

    /**
    * Sets ephemeralStorage
    *
    * @param int|null $ephemeralStorage 临时存储大小, 默认512M, 支持配置10G。
    *
    * @return $this
    */
    public function setEphemeralStorage($ephemeralStorage)
    {
        $this->container['ephemeralStorage'] = $ephemeralStorage;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，在企业用户创建函数时必填。
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
    * @param string|null $enterpriseProjectId 企业项目ID，在企业用户创建函数时必填。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets logConfig
    *  logConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncLogConfig|null
    */
    public function getLogConfig()
    {
        return $this->container['logConfig'];
    }

    /**
    * Sets logConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncLogConfig|null $logConfig logConfig
    *
    * @return $this
    */
    public function setLogConfig($logConfig)
    {
        $this->container['logConfig'] = $logConfig;
        return $this;
    }

    /**
    * Gets networkController
    *  networkController
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\NetworkControlConfig|null
    */
    public function getNetworkController()
    {
        return $this->container['networkController'];
    }

    /**
    * Sets networkController
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\NetworkControlConfig|null $networkController networkController
    *
    * @return $this
    */
    public function setNetworkController($networkController)
    {
        $this->container['networkController'] = $networkController;
        return $this;
    }

    /**
    * Gets isStatefulFunction
    *  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    *
    * @return bool|null
    */
    public function getIsStatefulFunction()
    {
        return $this->container['isStatefulFunction'];
    }

    /**
    * Sets isStatefulFunction
    *
    * @param bool|null $isStatefulFunction 是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    *
    * @return $this
    */
    public function setIsStatefulFunction($isStatefulFunction)
    {
        $this->container['isStatefulFunction'] = $isStatefulFunction;
        return $this;
    }

    /**
    * Gets enableDynamicMemory
    *  是否启动动态内存配置
    *
    * @return bool|null
    */
    public function getEnableDynamicMemory()
    {
        return $this->container['enableDynamicMemory'];
    }

    /**
    * Sets enableDynamicMemory
    *
    * @param bool|null $enableDynamicMemory 是否启动动态内存配置
    *
    * @return $this
    */
    public function setEnableDynamicMemory($enableDynamicMemory)
    {
        $this->container['enableDynamicMemory'] = $enableDynamicMemory;
        return $this;
    }

    /**
    * Gets enableAuthInHeader
    *  是否允许在请求头中添加鉴权信息
    *
    * @return bool|null
    */
    public function getEnableAuthInHeader()
    {
        return $this->container['enableAuthInHeader'];
    }

    /**
    * Sets enableAuthInHeader
    *
    * @param bool|null $enableAuthInHeader 是否允许在请求头中添加鉴权信息
    *
    * @return $this
    */
    public function setEnableAuthInHeader($enableAuthInHeader)
    {
        $this->container['enableAuthInHeader'] = $enableAuthInHeader;
        return $this;
    }

    /**
    * Gets domainNames
    *  内网域名配置。
    *
    * @return string|null
    */
    public function getDomainNames()
    {
        return $this->container['domainNames'];
    }

    /**
    * Sets domainNames
    *
    * @param string|null $domainNames 内网域名配置。
    *
    * @return $this
    */
    public function setDomainNames($domainNames)
    {
        $this->container['domainNames'] = $domainNames;
        return $this;
    }

    /**
    * Gets restoreHookHandler
    *  函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    *
    * @return string|null
    */
    public function getRestoreHookHandler()
    {
        return $this->container['restoreHookHandler'];
    }

    /**
    * Sets restoreHookHandler
    *
    * @param string|null $restoreHookHandler 函数快照式冷启动Restore Hook入口，仅支持Java，规则：xx.xx，必须包含“. ”。如：com.xxx.demo.Test.restoreHook
    *
    * @return $this
    */
    public function setRestoreHookHandler($restoreHookHandler)
    {
        $this->container['restoreHookHandler'] = $restoreHookHandler;
        return $this;
    }

    /**
    * Gets restoreHookTimeout
    *  快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @return int|null
    */
    public function getRestoreHookTimeout()
    {
        return $this->container['restoreHookTimeout'];
    }

    /**
    * Sets restoreHookTimeout
    *
    * @param int|null $restoreHookTimeout 快照冷启动Restore Hook的超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @return $this
    */
    public function setRestoreHookTimeout($restoreHookTimeout)
    {
        $this->container['restoreHookTimeout'] = $restoreHookTimeout;
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

