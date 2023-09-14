<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFunctionVersionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFunctionVersionResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * lastModified  函数最后一次更新时间。
    * funcVpcId  用户的vpcid
    * concurrency  0：函数被禁用;-1：函数被启用。
    * concurrentNum  并发实例数
    * strategyConfig  strategyConfig
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * longTime  是否是支持长时间运行
    * functionAsyncConfig  functionAsyncConfig
    * type  函数版本
    * enableCloudDebug  是否启用cloud debug功能
    * enableDynamicMemory  是否启用动态内存功能
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * customImage  customImage
    * reservedInstanceIdleMode  是否开启预留实例闲置模式
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
            'cpu' => 'int',
            'codeType' => 'string',
            'codeUrl' => 'string',
            'codeFilename' => 'string',
            'codeSize' => 'int',
            'userData' => 'string',
            'encryptedUserData' => 'string',
            'digest' => 'string',
            'version' => 'string',
            'imageName' => 'string',
            'xrole' => 'string',
            'appXrole' => 'string',
            'lastModified' => '\DateTime',
            'funcVpcId' => 'string',
            'concurrency' => 'int',
            'concurrentNum' => 'int',
            'strategyConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\StrategyConfig',
            'initializerHandler' => 'string',
            'initializerTimeout' => 'int',
            'longTime' => 'bool',
            'functionAsyncConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FunctionAsyncConfig',
            'type' => 'string',
            'enableCloudDebug' => 'string',
            'enableDynamicMemory' => 'bool',
            'enterpriseProjectId' => 'string',
            'isStatefulFunction' => 'bool',
            'enableAuthInHeader' => 'bool',
            'customImage' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage',
            'reservedInstanceIdleMode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * lastModified  函数最后一次更新时间。
    * funcVpcId  用户的vpcid
    * concurrency  0：函数被禁用;-1：函数被启用。
    * concurrentNum  并发实例数
    * strategyConfig  strategyConfig
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * longTime  是否是支持长时间运行
    * functionAsyncConfig  functionAsyncConfig
    * type  函数版本
    * enableCloudDebug  是否启用cloud debug功能
    * enableDynamicMemory  是否启用动态内存功能
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * customImage  customImage
    * reservedInstanceIdleMode  是否开启预留实例闲置模式
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
        'cpu' => 'int32',
        'codeType' => null,
        'codeUrl' => null,
        'codeFilename' => null,
        'codeSize' => 'int64',
        'userData' => null,
        'encryptedUserData' => null,
        'digest' => null,
        'version' => null,
        'imageName' => null,
        'xrole' => null,
        'appXrole' => null,
        'lastModified' => 'date-time',
        'funcVpcId' => null,
        'concurrency' => 'int32',
        'concurrentNum' => 'int32',
        'strategyConfig' => null,
        'initializerHandler' => null,
        'initializerTimeout' => 'int32',
        'longTime' => null,
        'functionAsyncConfig' => null,
        'type' => null,
        'enableCloudDebug' => null,
        'enableDynamicMemory' => null,
        'enterpriseProjectId' => null,
        'isStatefulFunction' => null,
        'enableAuthInHeader' => null,
        'customImage' => null,
        'reservedInstanceIdleMode' => null
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
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * lastModified  函数最后一次更新时间。
    * funcVpcId  用户的vpcid
    * concurrency  0：函数被禁用;-1：函数被启用。
    * concurrentNum  并发实例数
    * strategyConfig  strategyConfig
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * longTime  是否是支持长时间运行
    * functionAsyncConfig  functionAsyncConfig
    * type  函数版本
    * enableCloudDebug  是否启用cloud debug功能
    * enableDynamicMemory  是否启用动态内存功能
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * customImage  customImage
    * reservedInstanceIdleMode  是否开启预留实例闲置模式
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
            'cpu' => 'cpu',
            'codeType' => 'code_type',
            'codeUrl' => 'code_url',
            'codeFilename' => 'code_filename',
            'codeSize' => 'code_size',
            'userData' => 'user_data',
            'encryptedUserData' => 'encrypted_user_data',
            'digest' => 'digest',
            'version' => 'version',
            'imageName' => 'image_name',
            'xrole' => 'xrole',
            'appXrole' => 'app_xrole',
            'lastModified' => 'last_modified',
            'funcVpcId' => 'func_vpc_id',
            'concurrency' => 'concurrency',
            'concurrentNum' => 'concurrent_num',
            'strategyConfig' => 'strategy_config',
            'initializerHandler' => 'initializer_handler',
            'initializerTimeout' => 'initializer_timeout',
            'longTime' => 'long_time',
            'functionAsyncConfig' => 'function_async_config',
            'type' => 'type',
            'enableCloudDebug' => 'enable_cloud_debug',
            'enableDynamicMemory' => 'enable_dynamic_memory',
            'enterpriseProjectId' => 'enterprise_project_id',
            'isStatefulFunction' => 'is_stateful_function',
            'enableAuthInHeader' => 'enable_auth_in_header',
            'customImage' => 'custom_image',
            'reservedInstanceIdleMode' => 'reserved_instance_idle_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * lastModified  函数最后一次更新时间。
    * funcVpcId  用户的vpcid
    * concurrency  0：函数被禁用;-1：函数被启用。
    * concurrentNum  并发实例数
    * strategyConfig  strategyConfig
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * longTime  是否是支持长时间运行
    * functionAsyncConfig  functionAsyncConfig
    * type  函数版本
    * enableCloudDebug  是否启用cloud debug功能
    * enableDynamicMemory  是否启用动态内存功能
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * customImage  customImage
    * reservedInstanceIdleMode  是否开启预留实例闲置模式
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
            'cpu' => 'setCpu',
            'codeType' => 'setCodeType',
            'codeUrl' => 'setCodeUrl',
            'codeFilename' => 'setCodeFilename',
            'codeSize' => 'setCodeSize',
            'userData' => 'setUserData',
            'encryptedUserData' => 'setEncryptedUserData',
            'digest' => 'setDigest',
            'version' => 'setVersion',
            'imageName' => 'setImageName',
            'xrole' => 'setXrole',
            'appXrole' => 'setAppXrole',
            'lastModified' => 'setLastModified',
            'funcVpcId' => 'setFuncVpcId',
            'concurrency' => 'setConcurrency',
            'concurrentNum' => 'setConcurrentNum',
            'strategyConfig' => 'setStrategyConfig',
            'initializerHandler' => 'setInitializerHandler',
            'initializerTimeout' => 'setInitializerTimeout',
            'longTime' => 'setLongTime',
            'functionAsyncConfig' => 'setFunctionAsyncConfig',
            'type' => 'setType',
            'enableCloudDebug' => 'setEnableCloudDebug',
            'enableDynamicMemory' => 'setEnableDynamicMemory',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'isStatefulFunction' => 'setIsStatefulFunction',
            'enableAuthInHeader' => 'setEnableAuthInHeader',
            'customImage' => 'setCustomImage',
            'reservedInstanceIdleMode' => 'setReservedInstanceIdleMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcUrn  函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  函数名称。
    * domainId  域名id。
    * namespace  租户的project id。
    * projectName  租户的project name。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * cpu  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，inline和obs不需要提供。
    * codeSize  函数大小，单位：字节。
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * encryptedUserData  用户自定义的name/value信息，用于需要加密的配置。
    * digest  函数代码SHA512 hash值，用于判断函数是否变化。
    * version  函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
    * imageName  函数版本的内部标识。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * lastModified  函数最后一次更新时间。
    * funcVpcId  用户的vpcid
    * concurrency  0：函数被禁用;-1：函数被启用。
    * concurrentNum  并发实例数
    * strategyConfig  strategyConfig
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * longTime  是否是支持长时间运行
    * functionAsyncConfig  functionAsyncConfig
    * type  函数版本
    * enableCloudDebug  是否启用cloud debug功能
    * enableDynamicMemory  是否启用动态内存功能
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * isStatefulFunction  是否支持有状态，如果需要支持，需要固定传参为true，v2版本支持
    * enableAuthInHeader  是否允许在请求头中添加鉴权信息
    * customImage  customImage
    * reservedInstanceIdleMode  是否开启预留实例闲置模式
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
            'cpu' => 'getCpu',
            'codeType' => 'getCodeType',
            'codeUrl' => 'getCodeUrl',
            'codeFilename' => 'getCodeFilename',
            'codeSize' => 'getCodeSize',
            'userData' => 'getUserData',
            'encryptedUserData' => 'getEncryptedUserData',
            'digest' => 'getDigest',
            'version' => 'getVersion',
            'imageName' => 'getImageName',
            'xrole' => 'getXrole',
            'appXrole' => 'getAppXrole',
            'lastModified' => 'getLastModified',
            'funcVpcId' => 'getFuncVpcId',
            'concurrency' => 'getConcurrency',
            'concurrentNum' => 'getConcurrentNum',
            'strategyConfig' => 'getStrategyConfig',
            'initializerHandler' => 'getInitializerHandler',
            'initializerTimeout' => 'getInitializerTimeout',
            'longTime' => 'getLongTime',
            'functionAsyncConfig' => 'getFunctionAsyncConfig',
            'type' => 'getType',
            'enableCloudDebug' => 'getEnableCloudDebug',
            'enableDynamicMemory' => 'getEnableDynamicMemory',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'isStatefulFunction' => 'getIsStatefulFunction',
            'enableAuthInHeader' => 'getEnableAuthInHeader',
            'customImage' => 'getCustomImage',
            'reservedInstanceIdleMode' => 'getReservedInstanceIdleMode'
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
    const CODE_TYPE_INLINE = 'inline';
    const CODE_TYPE_ZIP = 'zip';
    const CODE_TYPE_OBS = 'obs';
    const CODE_TYPE_JAR = 'jar';
    

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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['codeType'] = isset($data['codeType']) ? $data['codeType'] : null;
        $this->container['codeUrl'] = isset($data['codeUrl']) ? $data['codeUrl'] : null;
        $this->container['codeFilename'] = isset($data['codeFilename']) ? $data['codeFilename'] : null;
        $this->container['codeSize'] = isset($data['codeSize']) ? $data['codeSize'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['encryptedUserData'] = isset($data['encryptedUserData']) ? $data['encryptedUserData'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['xrole'] = isset($data['xrole']) ? $data['xrole'] : null;
        $this->container['appXrole'] = isset($data['appXrole']) ? $data['appXrole'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['funcVpcId'] = isset($data['funcVpcId']) ? $data['funcVpcId'] : null;
        $this->container['concurrency'] = isset($data['concurrency']) ? $data['concurrency'] : null;
        $this->container['concurrentNum'] = isset($data['concurrentNum']) ? $data['concurrentNum'] : null;
        $this->container['strategyConfig'] = isset($data['strategyConfig']) ? $data['strategyConfig'] : null;
        $this->container['initializerHandler'] = isset($data['initializerHandler']) ? $data['initializerHandler'] : null;
        $this->container['initializerTimeout'] = isset($data['initializerTimeout']) ? $data['initializerTimeout'] : null;
        $this->container['longTime'] = isset($data['longTime']) ? $data['longTime'] : null;
        $this->container['functionAsyncConfig'] = isset($data['functionAsyncConfig']) ? $data['functionAsyncConfig'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enableCloudDebug'] = isset($data['enableCloudDebug']) ? $data['enableCloudDebug'] : null;
        $this->container['enableDynamicMemory'] = isset($data['enableDynamicMemory']) ? $data['enableDynamicMemory'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['isStatefulFunction'] = isset($data['isStatefulFunction']) ? $data['isStatefulFunction'] : null;
        $this->container['enableAuthInHeader'] = isset($data['enableAuthInHeader']) ? $data['enableAuthInHeader'] : null;
        $this->container['customImage'] = isset($data['customImage']) ? $data['customImage'] : null;
        $this->container['reservedInstanceIdleMode'] = isset($data['reservedInstanceIdleMode']) ? $data['reservedInstanceIdleMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['funcUrn'] === null) {
            $invalidProperties[] = "'funcUrn' can't be null";
        }
        if ($this->container['funcName'] === null) {
            $invalidProperties[] = "'funcName' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
        if ($this->container['package'] === null) {
            $invalidProperties[] = "'package' can't be null";
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
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['codeType'] === null) {
            $invalidProperties[] = "'codeType' can't be null";
        }
            $allowedValues = $this->getCodeTypeAllowableValues();
                if (!is_null($this->container['codeType']) && !in_array($this->container['codeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['codeSize'] === null) {
            $invalidProperties[] = "'codeSize' can't be null";
        }
        if ($this->container['digest'] === null) {
            $invalidProperties[] = "'digest' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['imageName'] === null) {
            $invalidProperties[] = "'imageName' can't be null";
        }
        if ($this->container['lastModified'] === null) {
            $invalidProperties[] = "'lastModified' can't be null";
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
    * @return string
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string $funcUrn 函数的URN（Uniform Resource Name），唯一标识函数。
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
    * Gets domainId
    *  域名id。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 域名id。
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
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 租户的project id。
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
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 租户的project name。
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
    * @return string
    */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
    * Sets package
    *
    * @param string $package 函数所属的分组Package，用于用户针对函数的自定义分组。
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
    * Gets cpu
    *  函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
    *
    * @return int
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int $cpu 函数占用的cpu资源。 单位为millicore（1 core=1000 millicores）。 取值与MemorySize成比例，默认是128M内存占0.1个核（100 millicores）。 函数占用的CPU为基础CPU：200 millicores，再加上内存按比例占用的CPU，计算方法：内存/128 *100 + 200。
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
    *  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    *
    * @return string
    */
    public function getCodeType()
    {
        return $this->container['codeType'];
    }

    /**
    * Sets codeType
    *
    * @param string $codeType 函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
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
    * @return int
    */
    public function getCodeSize()
    {
        return $this->container['codeSize'];
    }

    /**
    * Sets codeSize
    *
    * @param int $codeSize 函数大小，单位：字节。
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
    * Gets digest
    *  函数代码SHA512 hash值，用于判断函数是否变化。
    *
    * @return string
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string $digest 函数代码SHA512 hash值，用于判断函数是否变化。
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
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 函数版本号，由系统自动生成，规则：vYYYYMMDD-HHMMSS（v+年月日-时分秒）。
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
    * @return string
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string $imageName 函数版本的内部标识。
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
    * Gets lastModified
    *  函数最后一次更新时间。
    *
    * @return \DateTime
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param \DateTime $lastModified 函数最后一次更新时间。
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets funcVpcId
    *  用户的vpcid
    *
    * @return string|null
    */
    public function getFuncVpcId()
    {
        return $this->container['funcVpcId'];
    }

    /**
    * Sets funcVpcId
    *
    * @param string|null $funcVpcId 用户的vpcid
    *
    * @return $this
    */
    public function setFuncVpcId($funcVpcId)
    {
        $this->container['funcVpcId'] = $funcVpcId;
        return $this;
    }

    /**
    * Gets concurrency
    *  0：函数被禁用;-1：函数被启用。
    *
    * @return int|null
    */
    public function getConcurrency()
    {
        return $this->container['concurrency'];
    }

    /**
    * Sets concurrency
    *
    * @param int|null $concurrency 0：函数被禁用;-1：函数被启用。
    *
    * @return $this
    */
    public function setConcurrency($concurrency)
    {
        $this->container['concurrency'] = $concurrency;
        return $this;
    }

    /**
    * Gets concurrentNum
    *  并发实例数
    *
    * @return int|null
    */
    public function getConcurrentNum()
    {
        return $this->container['concurrentNum'];
    }

    /**
    * Sets concurrentNum
    *
    * @param int|null $concurrentNum 并发实例数
    *
    * @return $this
    */
    public function setConcurrentNum($concurrentNum)
    {
        $this->container['concurrentNum'] = $concurrentNum;
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
    * Gets longTime
    *  是否是支持长时间运行
    *
    * @return bool|null
    */
    public function getLongTime()
    {
        return $this->container['longTime'];
    }

    /**
    * Sets longTime
    *
    * @param bool|null $longTime 是否是支持长时间运行
    *
    * @return $this
    */
    public function setLongTime($longTime)
    {
        $this->container['longTime'] = $longTime;
        return $this;
    }

    /**
    * Gets functionAsyncConfig
    *  functionAsyncConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FunctionAsyncConfig|null
    */
    public function getFunctionAsyncConfig()
    {
        return $this->container['functionAsyncConfig'];
    }

    /**
    * Sets functionAsyncConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FunctionAsyncConfig|null $functionAsyncConfig functionAsyncConfig
    *
    * @return $this
    */
    public function setFunctionAsyncConfig($functionAsyncConfig)
    {
        $this->container['functionAsyncConfig'] = $functionAsyncConfig;
        return $this;
    }

    /**
    * Gets type
    *  函数版本
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 函数版本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enableCloudDebug
    *  是否启用cloud debug功能
    *
    * @return string|null
    */
    public function getEnableCloudDebug()
    {
        return $this->container['enableCloudDebug'];
    }

    /**
    * Sets enableCloudDebug
    *
    * @param string|null $enableCloudDebug 是否启用cloud debug功能
    *
    * @return $this
    */
    public function setEnableCloudDebug($enableCloudDebug)
    {
        $this->container['enableCloudDebug'] = $enableCloudDebug;
        return $this;
    }

    /**
    * Gets enableDynamicMemory
    *  是否启用动态内存功能
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
    * @param bool|null $enableDynamicMemory 是否启用动态内存功能
    *
    * @return $this
    */
    public function setEnableDynamicMemory($enableDynamicMemory)
    {
        $this->container['enableDynamicMemory'] = $enableDynamicMemory;
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
    * Gets reservedInstanceIdleMode
    *  是否开启预留实例闲置模式
    *
    * @return bool|null
    */
    public function getReservedInstanceIdleMode()
    {
        return $this->container['reservedInstanceIdleMode'];
    }

    /**
    * Sets reservedInstanceIdleMode
    *
    * @param bool|null $reservedInstanceIdleMode 是否开启预留实例闲置模式
    *
    * @return $this
    */
    public function setReservedInstanceIdleMode($reservedInstanceIdleMode)
    {
        $this->container['reservedInstanceIdleMode'] = $reservedInstanceIdleMode;
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

