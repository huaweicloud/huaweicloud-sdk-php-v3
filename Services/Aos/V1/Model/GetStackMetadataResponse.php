<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetStackMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetStackMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * varsStructure  HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    * varsBody  HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    * status  资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
    * agencies  委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * varsUriContent  vars_uri对应的文件内容
    * createTime  资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackId' => 'string',
            'stackName' => 'string',
            'description' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]',
            'varsBody' => 'string',
            'enableDeletionProtection' => 'bool',
            'enableAutoRollback' => 'bool',
            'status' => 'string',
            'agencies' => '\HuaweiCloud\SDK\Aos\V1\Model\Agency[]',
            'statusMessage' => 'string',
            'varsUriContent' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * varsStructure  HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    * varsBody  HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    * status  资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
    * agencies  委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * varsUriContent  vars_uri对应的文件内容
    * createTime  资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackId' => null,
        'stackName' => null,
        'description' => null,
        'varsStructure' => null,
        'varsBody' => null,
        'enableDeletionProtection' => null,
        'enableAutoRollback' => null,
        'status' => null,
        'agencies' => null,
        'statusMessage' => null,
        'varsUriContent' => null,
        'createTime' => null,
        'updateTime' => null
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
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * varsStructure  HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    * varsBody  HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    * status  资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
    * agencies  委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * varsUriContent  vars_uri对应的文件内容
    * createTime  资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackId' => 'stack_id',
            'stackName' => 'stack_name',
            'description' => 'description',
            'varsStructure' => 'vars_structure',
            'varsBody' => 'vars_body',
            'enableDeletionProtection' => 'enable_deletion_protection',
            'enableAutoRollback' => 'enable_auto_rollback',
            'status' => 'status',
            'agencies' => 'agencies',
            'statusMessage' => 'status_message',
            'varsUriContent' => 'vars_uri_content',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * varsStructure  HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    * varsBody  HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    * status  资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
    * agencies  委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * varsUriContent  vars_uri对应的文件内容
    * createTime  资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @var string[]
    */
    protected static $setters = [
            'stackId' => 'setStackId',
            'stackName' => 'setStackName',
            'description' => 'setDescription',
            'varsStructure' => 'setVarsStructure',
            'varsBody' => 'setVarsBody',
            'enableDeletionProtection' => 'setEnableDeletionProtection',
            'enableAutoRollback' => 'setEnableAutoRollback',
            'status' => 'setStatus',
            'agencies' => 'setAgencies',
            'statusMessage' => 'setStatusMessage',
            'varsUriContent' => 'setVarsUriContent',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * varsStructure  HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    * varsBody  HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    * enableDeletionProtection  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    * status  资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
    * agencies  委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    * varsUriContent  vars_uri对应的文件内容
    * createTime  资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @var string[]
    */
    protected static $getters = [
            'stackId' => 'getStackId',
            'stackName' => 'getStackName',
            'description' => 'getDescription',
            'varsStructure' => 'getVarsStructure',
            'varsBody' => 'getVarsBody',
            'enableDeletionProtection' => 'getEnableDeletionProtection',
            'enableAutoRollback' => 'getEnableAutoRollback',
            'status' => 'getStatus',
            'agencies' => 'getAgencies',
            'statusMessage' => 'getStatusMessage',
            'varsUriContent' => 'getVarsUriContent',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const STATUS_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const STATUS_DEPLOYMENT_IN_PROGRESS = 'DEPLOYMENT_IN_PROGRESS';
    const STATUS_DEPLOYMENT_FAILED = 'DEPLOYMENT_FAILED';
    const STATUS_DEPLOYMENT_COMPLETE = 'DEPLOYMENT_COMPLETE';
    const STATUS_ROLLBACK_IN_PROGRESS = 'ROLLBACK_IN_PROGRESS';
    const STATUS_ROLLBACK_FAILED = 'ROLLBACK_FAILED';
    const STATUS_ROLLBACK_COMPLETE = 'ROLLBACK_COMPLETE';
    const STATUS_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const STATUS_DELETION_FAILED = 'DELETION_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATION_COMPLETE,
            self::STATUS_DEPLOYMENT_IN_PROGRESS,
            self::STATUS_DEPLOYMENT_FAILED,
            self::STATUS_DEPLOYMENT_COMPLETE,
            self::STATUS_ROLLBACK_IN_PROGRESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_ROLLBACK_COMPLETE,
            self::STATUS_DELETION_IN_PROGRESS,
            self::STATUS_DELETION_FAILED,
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
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
        $this->container['varsBody'] = isset($data['varsBody']) ? $data['varsBody'] : null;
        $this->container['enableDeletionProtection'] = isset($data['enableDeletionProtection']) ? $data['enableDeletionProtection'] : null;
        $this->container['enableAutoRollback'] = isset($data['enableAutoRollback']) ? $data['enableAutoRollback'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['agencies'] = isset($data['agencies']) ? $data['agencies'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['varsUriContent'] = isset($data['varsUriContent']) ? $data['varsUriContent'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['stackName'] === null) {
            $invalidProperties[] = "'stackName' can't be null";
        }
            if ((mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['varsBody']) && (mb_strlen($this->container['varsBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'varsBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['varsBody']) && (mb_strlen($this->container['varsBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'varsBody', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets stackId
    *  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给予的stack_id和当前资源栈的ID不一致，则返回400
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets stackName
    *  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string $stackName 资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets description
    *  资源栈的描述。可用于客户识别自己的资源栈。
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
    * @param string|null $description 资源栈的描述。可用于客户识别自己的资源栈。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets varsStructure
    *  HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null
    */
    public function getVarsStructure()
    {
        return $this->container['varsStructure'];
    }

    /**
    * Sets varsStructure
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null $varsStructure HCL参数结构。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * var_structure可以允许客户提交最简单的字符串类型的参数  * 资源编排服务支持vars_structure，vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * vars_structure中的值只支持简单的字符串类型，如果需要使用其他类型，需要用户自己在HCL引用时转换， 或者用户可以使用vars_uri、vars_body，vars_uri和vars_body中支持HCL支持的各种类型以及复杂结构  * 如果vars_structure过大，可以使用vars_uri  * 注意：vars_structure中默认不应该含有任何敏感信息，资源编排服务会直接明文使用、log、展示、存储对应的vars。如为敏感信息，建议设置encryption字段开启加密
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
        return $this;
    }

    /**
    * Gets varsBody
    *  HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    *
    * @return string|null
    */
    public function getVarsBody()
    {
        return $this->container['varsBody'];
    }

    /**
    * Sets varsBody
    *
    * @param string|null $varsBody HCL参数文件的内容。HCL模板支持参数传入，即，同一个模板可以给予不同的参数而达到不同的效果。  * vars_body使用HCL的tfvars格式，用户可以将“.tfvars”中的内容提交到vars_body中  * 资源编排服务支持vars_body和vars_uri，如果他们中声名了同一个变量，将报错400  * 如果vars_body过大，可以使用vars_uri  * 资源栈集不支持敏感数据加密，资源编排服务会直接明文使用、log、展示、存储对应的vars_body。
    *
    * @return $this
    */
    public function setVarsBody($varsBody)
    {
        $this->container['varsBody'] = $varsBody;
        return $this;
    }

    /**
    * Gets enableDeletionProtection
    *  删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    *
    * @return bool|null
    */
    public function getEnableDeletionProtection()
    {
        return $this->container['enableDeletionProtection'];
    }

    /**
    * Sets enableDeletionProtection
    *
    * @param bool|null $enableDeletionProtection 删除保护的标识位，如果不传默认为false，即默认不开启资源栈删除保护（删除保护开启后资源栈不允许被删除）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的删除保护属性进行更新*
    *
    * @return $this
    */
    public function setEnableDeletionProtection($enableDeletionProtection)
    {
        $this->container['enableDeletionProtection'] = $enableDeletionProtection;
        return $this;
    }

    /**
    * Gets enableAutoRollback
    *  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @return bool|null
    */
    public function getEnableAutoRollback()
    {
        return $this->container['enableAutoRollback'];
    }

    /**
    * Sets enableAutoRollback
    *
    * @param bool|null $enableAutoRollback 自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，若该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @return $this
    */
    public function setEnableAutoRollback($enableAutoRollback)
    {
        $this->container['enableAutoRollback'] = $enableAutoRollback;
        return $this;
    }

    /**
    * Gets status
    *  资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
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
    * @param string|null $status 资源栈的状态    * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署    * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待    * `DEPLOYMENT_FAILED` - 部署失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `DEPLOYMENT_COMPLETE` - 部署完成    * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待    * `ROLLBACK_FAILED` - 回滚失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情    * `ROLLBACK_COMPLETE` - 回滚完成    * `DELETION_IN_PROGRESS` - 正在删除，请等待    * `DELETION_FAILED` - 删除失败。请从status_message获取错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets agencies
    *  委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null
    */
    public function getAgencies()
    {
        return $this->container['agencies'];
    }

    /**
    * Sets agencies
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null $agencies 委托授权的信息。  RFS仅在创建资源栈（触发部署）、创建执行计划、部署资源栈、删除资源栈等涉及资源操作的请求中使用委托，且该委托仅作用于与之绑定的Provider对资源的操作中。若委托中提供的权限不足，有可能导致相关资源操作失败。  [[创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)](tag:hws) [[创建委托及授权方式](https://support.huaweicloud.com/intl/zh-cn/usermanual-iam/iam_06_0002.html)](tag:hws_hk) [[创建委托及授权方式](https://support.huaweicloud.com/eu/usermanual-iam/iam_06_0002.html)](tag:hws_eu)
    *
    * @return $this
    */
    public function setAgencies($agencies)
    {
        $this->container['agencies'] = $agencies;
        return $this;
    }

    /**
    * Gets statusMessage
    *  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets varsUriContent
    *  vars_uri对应的文件内容
    *
    * @return string|null
    */
    public function getVarsUriContent()
    {
        return $this->container['varsUriContent'];
    }

    /**
    * Sets varsUriContent
    *
    * @param string|null $varsUriContent vars_uri对应的文件内容
    *
    * @return $this
    */
    public function setVarsUriContent($varsUriContent)
    {
        $this->container['varsUriContent'] = $varsUriContent;
        return $this;
    }

    /**
    * Gets createTime
    *  资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 资源栈的生成时间 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 资源栈的更新时间（更新场景包括元数据更新场景和部署场景） 格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

