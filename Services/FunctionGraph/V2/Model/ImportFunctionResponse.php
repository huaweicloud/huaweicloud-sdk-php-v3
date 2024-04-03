<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportFunctionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportFunctionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    * codeType  函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * versionDescription  函数版本描述。
    * lastModified  函数最后一次更新时间。
    * funcVpc  funcVpc
    * dependList  依赖id列表
    * dependVersionList  依赖版本id列表
    * strategyConfig  strategyConfig
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcUrn' => 'string',
            'funcName' => 'string',
            'domainId' => 'string',
            'namespace' => 'string',
            'projectName' => 'string',
            'package' => 'string',
            'runtime' => 'string',
            'timeout' => 'int',
            'handler' => 'string',
            'memorySize' => 'int',
            'gpuMemory' => 'int',
            'cpu' => 'int',
            'codeType' => 'string',
            'codeUrl' => 'string',
            'codeFilename' => 'string',
            'codeSize' => 'int',
            'userData' => 'string',
            'digest' => 'string',
            'version' => 'string',
            'imageName' => 'string',
            'xrole' => 'string',
            'appXrole' => 'string',
            'description' => 'string',
            'versionDescription' => 'string',
            'lastModified' => '\DateTime',
            'funcVpc' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc',
            'dependList' => 'string[]',
            'dependVersionList' => 'string[]',
            'strategyConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\StrategyConfig',
            'extendConfig' => 'string',
            'initializerHandler' => 'string',
            'initializerTimeout' => 'int',
            'preStopHandler' => 'string',
            'preStopTimeout' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    * codeType  函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * versionDescription  函数版本描述。
    * lastModified  函数最后一次更新时间。
    * funcVpc  funcVpc
    * dependList  依赖id列表
    * dependVersionList  依赖版本id列表
    * strategyConfig  strategyConfig
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcUrn' => null,
        'funcName' => null,
        'domainId' => null,
        'namespace' => null,
        'projectName' => null,
        'package' => null,
        'runtime' => null,
        'timeout' => 'int32',
        'handler' => null,
        'memorySize' => 'int32',
        'gpuMemory' => 'int32',
        'cpu' => 'int32',
        'codeType' => null,
        'codeUrl' => null,
        'codeFilename' => null,
        'codeSize' => 'int64',
        'userData' => null,
        'digest' => null,
        'version' => null,
        'imageName' => null,
        'xrole' => null,
        'appXrole' => null,
        'description' => null,
        'versionDescription' => null,
        'lastModified' => 'date-time',
        'funcVpc' => null,
        'dependList' => null,
        'dependVersionList' => null,
        'strategyConfig' => null,
        'extendConfig' => null,
        'initializerHandler' => null,
        'initializerTimeout' => 'int32',
        'preStopHandler' => null,
        'preStopTimeout' => 'int32',
        'enterpriseProjectId' => null
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
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    * codeType  函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * versionDescription  函数版本描述。
    * lastModified  函数最后一次更新时间。
    * funcVpc  funcVpc
    * dependList  依赖id列表
    * dependVersionList  依赖版本id列表
    * strategyConfig  strategyConfig
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcUrn' => 'func_urn',
            'funcName' => 'func_name',
            'domainId' => 'domain_id',
            'namespace' => 'namespace',
            'projectName' => 'project_name',
            'package' => 'package',
            'runtime' => 'runtime',
            'timeout' => 'timeout',
            'handler' => 'handler',
            'memorySize' => 'memory_size',
            'gpuMemory' => 'gpu_memory',
            'cpu' => 'cpu',
            'codeType' => 'code_type',
            'codeUrl' => 'code_url',
            'codeFilename' => 'code_filename',
            'codeSize' => 'code_size',
            'userData' => 'user_data',
            'digest' => 'digest',
            'version' => 'version',
            'imageName' => 'image_name',
            'xrole' => 'xrole',
            'appXrole' => 'app_xrole',
            'description' => 'description',
            'versionDescription' => 'version_description',
            'lastModified' => 'last_modified',
            'funcVpc' => 'func_vpc',
            'dependList' => 'depend_list',
            'dependVersionList' => 'depend_version_list',
            'strategyConfig' => 'strategy_config',
            'extendConfig' => 'extend_config',
            'initializerHandler' => 'initializer_handler',
            'initializerTimeout' => 'initializer_timeout',
            'preStopHandler' => 'pre_stop_handler',
            'preStopTimeout' => 'pre_stop_timeout',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    * codeType  函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * versionDescription  函数版本描述。
    * lastModified  函数最后一次更新时间。
    * funcVpc  funcVpc
    * dependList  依赖id列表
    * dependVersionList  依赖版本id列表
    * strategyConfig  strategyConfig
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'funcUrn' => 'setFuncUrn',
            'funcName' => 'setFuncName',
            'domainId' => 'setDomainId',
            'namespace' => 'setNamespace',
            'projectName' => 'setProjectName',
            'package' => 'setPackage',
            'runtime' => 'setRuntime',
            'timeout' => 'setTimeout',
            'handler' => 'setHandler',
            'memorySize' => 'setMemorySize',
            'gpuMemory' => 'setGpuMemory',
            'cpu' => 'setCpu',
            'codeType' => 'setCodeType',
            'codeUrl' => 'setCodeUrl',
            'codeFilename' => 'setCodeFilename',
            'codeSize' => 'setCodeSize',
            'userData' => 'setUserData',
            'digest' => 'setDigest',
            'version' => 'setVersion',
            'imageName' => 'setImageName',
            'xrole' => 'setXrole',
            'appXrole' => 'setAppXrole',
            'description' => 'setDescription',
            'versionDescription' => 'setVersionDescription',
            'lastModified' => 'setLastModified',
            'funcVpc' => 'setFuncVpc',
            'dependList' => 'setDependList',
            'dependVersionList' => 'setDependVersionList',
            'strategyConfig' => 'setStrategyConfig',
            'extendConfig' => 'setExtendConfig',
            'initializerHandler' => 'setInitializerHandler',
            'initializerTimeout' => 'setInitializerTimeout',
            'preStopHandler' => 'setPreStopHandler',
            'preStopTimeout' => 'setPreStopTimeout',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    * codeType  函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * versionDescription  函数版本描述。
    * lastModified  函数最后一次更新时间。
    * funcVpc  funcVpc
    * dependList  依赖id列表
    * dependVersionList  依赖版本id列表
    * strategyConfig  strategyConfig
    * extendConfig  函数扩展配置。
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'funcUrn' => 'getFuncUrn',
            'funcName' => 'getFuncName',
            'domainId' => 'getDomainId',
            'namespace' => 'getNamespace',
            'projectName' => 'getProjectName',
            'package' => 'getPackage',
            'runtime' => 'getRuntime',
            'timeout' => 'getTimeout',
            'handler' => 'getHandler',
            'memorySize' => 'getMemorySize',
            'gpuMemory' => 'getGpuMemory',
            'cpu' => 'getCpu',
            'codeType' => 'getCodeType',
            'codeUrl' => 'getCodeUrl',
            'codeFilename' => 'getCodeFilename',
            'codeSize' => 'getCodeSize',
            'userData' => 'getUserData',
            'digest' => 'getDigest',
            'version' => 'getVersion',
            'imageName' => 'getImageName',
            'xrole' => 'getXrole',
            'appXrole' => 'getAppXrole',
            'description' => 'getDescription',
            'versionDescription' => 'getVersionDescription',
            'lastModified' => 'getLastModified',
            'funcVpc' => 'getFuncVpc',
            'dependList' => 'getDependList',
            'dependVersionList' => 'getDependVersionList',
            'strategyConfig' => 'getStrategyConfig',
            'extendConfig' => 'getExtendConfig',
            'initializerHandler' => 'getInitializerHandler',
            'initializerTimeout' => 'getInitializerTimeout',
            'preStopHandler' => 'getPreStopHandler',
            'preStopTimeout' => 'getPreStopTimeout',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const RUNTIME_JAVA17 = 'Java17';
    const RUNTIME_PYTHON2_7 = 'Python2.7';
    const RUNTIME_PYTHON3_6 = 'Python3.6';
    const RUNTIME_PYTHON3_9 = 'Python3.9';
    const RUNTIME_PYTHON3_10 = 'Python3.10';
    const RUNTIME_GO1_8 = 'Go1.8';
    const RUNTIME_GO1_X = 'Go1.x';
    const RUNTIME_NODE_JS6_10 = 'Node.js6.10';
    const RUNTIME_NODE_JS8_10 = 'Node.js8.10';
    const RUNTIME_NODE_JS10_16 = 'Node.js10.16';
    const RUNTIME_NODE_JS12_13 = 'Node.js12.13';
    const RUNTIME_NODE_JS14_18 = 'Node.js14.18';
    const RUNTIME_NODE_JS16_17 = 'Node.js16.17';
    const RUNTIME_NODE_JS18_15 = 'Node.js18.15';
    const RUNTIME_C__NET_CORE_2_0 = 'C#(.NET Core 2.0)';
    const RUNTIME_C__NET_CORE_2_1 = 'C#(.NET Core 2.1)';
    const RUNTIME_C__NET_CORE_3_1 = 'C#(.NET Core 3.1)';
    const RUNTIME_C__NET_CORE_6_0 = 'C#(.NET Core 6.0)';
    const RUNTIME_CUSTOM = 'Custom';
    const RUNTIME_PHP7_3 = 'PHP7.3';
    const RUNTIME_CANGJIE1_0 = 'Cangjie1.0';
    const RUNTIME_HTTP = 'http';
    const RUNTIME_CUSTOM_IMAGE = 'Custom Image';
    const CODE_TYPE_INLINE = 'inline';
    const CODE_TYPE_ZIP = 'zip';
    const CODE_TYPE_OBS = 'obs';
    const CODE_TYPE_JAR = 'jar';
    const CODE_TYPE_CUSTOM_IMAGE_SWR = 'Custom-Image-Swr';
    

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
            self::RUNTIME_JAVA17,
            self::RUNTIME_PYTHON2_7,
            self::RUNTIME_PYTHON3_6,
            self::RUNTIME_PYTHON3_9,
            self::RUNTIME_PYTHON3_10,
            self::RUNTIME_GO1_8,
            self::RUNTIME_GO1_X,
            self::RUNTIME_NODE_JS6_10,
            self::RUNTIME_NODE_JS8_10,
            self::RUNTIME_NODE_JS10_16,
            self::RUNTIME_NODE_JS12_13,
            self::RUNTIME_NODE_JS14_18,
            self::RUNTIME_NODE_JS16_17,
            self::RUNTIME_NODE_JS18_15,
            self::RUNTIME_C__NET_CORE_2_0,
            self::RUNTIME_C__NET_CORE_2_1,
            self::RUNTIME_C__NET_CORE_3_1,
            self::RUNTIME_C__NET_CORE_6_0,
            self::RUNTIME_CUSTOM,
            self::RUNTIME_PHP7_3,
            self::RUNTIME_CANGJIE1_0,
            self::RUNTIME_HTTP,
            self::RUNTIME_CUSTOM_IMAGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodeTypeAllowableValues()
    {
        return [
            self::CODE_TYPE_INLINE,
            self::CODE_TYPE_ZIP,
            self::CODE_TYPE_OBS,
            self::CODE_TYPE_JAR,
            self::CODE_TYPE_CUSTOM_IMAGE_SWR,
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
        $this->container['funcUrn'] = isset($data['funcUrn']) ? $data['funcUrn'] : null;
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['gpuMemory'] = isset($data['gpuMemory']) ? $data['gpuMemory'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['codeType'] = isset($data['codeType']) ? $data['codeType'] : null;
        $this->container['codeUrl'] = isset($data['codeUrl']) ? $data['codeUrl'] : null;
        $this->container['codeFilename'] = isset($data['codeFilename']) ? $data['codeFilename'] : null;
        $this->container['codeSize'] = isset($data['codeSize']) ? $data['codeSize'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['xrole'] = isset($data['xrole']) ? $data['xrole'] : null;
        $this->container['appXrole'] = isset($data['appXrole']) ? $data['appXrole'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['funcVpc'] = isset($data['funcVpc']) ? $data['funcVpc'] : null;
        $this->container['dependList'] = isset($data['dependList']) ? $data['dependList'] : null;
        $this->container['dependVersionList'] = isset($data['dependVersionList']) ? $data['dependVersionList'] : null;
        $this->container['strategyConfig'] = isset($data['strategyConfig']) ? $data['strategyConfig'] : null;
        $this->container['extendConfig'] = isset($data['extendConfig']) ? $data['extendConfig'] : null;
        $this->container['initializerHandler'] = isset($data['initializerHandler']) ? $data['initializerHandler'] : null;
        $this->container['initializerTimeout'] = isset($data['initializerTimeout']) ? $data['initializerTimeout'] : null;
        $this->container['preStopHandler'] = isset($data['preStopHandler']) ? $data['preStopHandler'] : null;
        $this->container['preStopTimeout'] = isset($data['preStopTimeout']) ? $data['preStopTimeout'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRuntimeAllowableValues();
                if (!is_null($this->container['runtime']) && !in_array($this->container['runtime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCodeTypeAllowableValues();
                if (!is_null($this->container['codeType']) && !in_array($this->container['codeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets funcUrn
    *  函数的URN（Uniform Resource Name），唯一标识函数。
    *
    * @return string|null
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string|null $funcUrn 函数的URN（Uniform Resource Name），唯一标识函数。
    *
    * @return $this
    */
    public function setFuncUrn($funcUrn)
    {
        $this->container['funcUrn'] = $funcUrn;
        return $this;
    }

    /**
    * Gets funcName
    *  函数名称。
    *
    * @return string|null
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string|null $funcName 函数名称。
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
        return $this;
    }

    /**
    * Gets domainId
    *  域名id。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 域名id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets namespace
    *  租户的project id。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 租户的project id。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets projectName
    *  租户的project name。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 租户的project name。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets package
    *  函数所属的分组Package，用于用户针对函数的自定义分组。
    *
    * @return string|null
    */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
    * Sets package
    *
    * @param string|null $package 函数所属的分组Package，用于用户针对函数的自定义分组。
    *
    * @return $this
    */
    public function setPackage($package)
    {
        $this->container['package'] = $package;
        return $this;
    }

    /**
    * Gets runtime
    *  FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime FunctionGraph函数的执行环境 Java8: Java语言8版本。 Java11: Java语言11版本。 Java17: Java语言17版本（当前仅支持华北-乌兰察布二零二） Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Python3.10: Python语言3.10版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 Node.js16.17: Nodejs语言16.17版本。 Node.js18.15: Nodejs语言18.15版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 C#(.NET Core 6.0): C#语言6.0版本（当前仅支持华北-乌兰察布二零二）。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 Cangjie1.0：仓颉语言1.0版本。 http: HTTP函数。 Custom Image: 自定义镜像函数。
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
    *  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
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
    * @return string|null
    */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
    * Sets handler
    *
    * @param string|null $handler 函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
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
    * @return int|null
    */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
    * Sets memorySize
    *
    * @param int|null $memorySize 函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
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
    * Gets cpu
    *  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu 函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets codeType
    *  函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    *
    * @return string|null
    */
    public function getCodeType()
    {
        return $this->container['codeType'];
    }

    /**
    * Sets codeType
    *
    * @param string|null $codeType 函数代码类型，取值有5种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。 Custom-Image-Swr: 函数代码来源与SWR自定义镜像。
    *
    * @return $this
    */
    public function setCodeType($codeType)
    {
        $this->container['codeType'] = $codeType;
        return $this;
    }

    /**
    * Gets codeUrl
    *  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    *
    * @return string|null
    */
    public function getCodeUrl()
    {
        return $this->container['codeUrl'];
    }

    /**
    * Sets codeUrl
    *
    * @param string|null $codeUrl 当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    *
    * @return $this
    */
    public function setCodeUrl($codeUrl)
    {
        $this->container['codeUrl'] = $codeUrl;
        return $this;
    }

    /**
    * Gets codeFilename
    *  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    *
    * @return string|null
    */
    public function getCodeFilename()
    {
        return $this->container['codeFilename'];
    }

    /**
    * Sets codeFilename
    *
    * @param string|null $codeFilename 函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    *
    * @return $this
    */
    public function setCodeFilename($codeFilename)
    {
        $this->container['codeFilename'] = $codeFilename;
        return $this;
    }

    /**
    * Gets codeSize
    *  函数大小，单位：字节。
    *
    * @return int|null
    */
    public function getCodeSize()
    {
        return $this->container['codeSize'];
    }

    /**
    * Sets codeSize
    *
    * @param int|null $codeSize 函数大小，单位：字节。
    *
    * @return $this
    */
    public function setCodeSize($codeSize)
    {
        $this->container['codeSize'] = $codeSize;
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
    * Gets digest
    *  函数代码SHA512 hash值，用于判断函数是否变化。
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest 函数代码SHA512 hash值，用于判断函数是否变化。
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets version
    *  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
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
    * @param string|null $version 函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets imageName
    *  函数版本的内部标识。
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 函数版本的内部标识。
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
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
    * Gets versionDescription
    *  函数版本描述。
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 函数版本描述。
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets lastModified
    *  函数最后一次更新时间。
    *
    * @return \DateTime|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param \DateTime|null $lastModified 函数最后一次更新时间。
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
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
    * Gets dependList
    *  依赖id列表
    *
    * @return string[]|null
    */
    public function getDependList()
    {
        return $this->container['dependList'];
    }

    /**
    * Sets dependList
    *
    * @param string[]|null $dependList 依赖id列表
    *
    * @return $this
    */
    public function setDependList($dependList)
    {
        $this->container['dependList'] = $dependList;
        return $this;
    }

    /**
    * Gets dependVersionList
    *  依赖版本id列表
    *
    * @return string[]|null
    */
    public function getDependVersionList()
    {
        return $this->container['dependVersionList'];
    }

    /**
    * Sets dependVersionList
    *
    * @param string[]|null $dependVersionList 依赖版本id列表
    *
    * @return $this
    */
    public function setDependVersionList($dependVersionList)
    {
        $this->container['dependVersionList'] = $dependVersionList;
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
    *  函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
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
    * @param string|null $initializerHandler 函数初始化入口，规则：xx.xx，必须包含“. ”。当配置初始化函数时，此参数必填。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
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
    *  初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
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
    * @param int|null $initializerTimeout 初始化超时时间，超时函数将被强行停止，范围1～300秒。当配置初始化函数时，此参数必填。
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

