<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiCreateBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiCreateBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * version  API的版本
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    * reqMethod  API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    * authOpt  authOpt
    * cors  是否支持跨域 - TRUE：支持 - FALSE：不支持
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * backendType  后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    * remark  API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * groupId  API所属的分组编号
    * bodyRemark  API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    * resultNormalSample  正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * resultFailureSample  失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * authorizerId  前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    * tags  标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    * responseId  分组自定义响应ID
    * romaAppId  集成应用ID  暂不支持
    * domainName  API绑定的自定义域名  暂不支持
    * tag  标签  待废弃，优先使用tags字段
    * contentType  请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    * mockInfo  mockInfo
    * funcInfo  funcInfo
    * reqParams  API的请求参数列表，API请求协议为GRPC类型时不支持配置
    * backendParams  API的后端参数列表，API请求协议为GRPC类型时不支持配置
    * policyMocks  mock策略后端列表
    * policyFunctions  函数工作流策略后端列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'int',
            'version' => 'string',
            'reqProtocol' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string',
            'authType' => 'string',
            'authOpt' => '\HuaweiCloud\SDK\Apig\V2\Model\AuthOpt',
            'cors' => 'bool',
            'matchMode' => 'string',
            'backendType' => 'string',
            'remark' => 'string',
            'groupId' => 'string',
            'bodyRemark' => 'string',
            'resultNormalSample' => 'string',
            'resultFailureSample' => 'string',
            'authorizerId' => 'string',
            'tags' => 'string[]',
            'responseId' => 'string',
            'romaAppId' => 'string',
            'domainName' => 'string',
            'tag' => 'string',
            'contentType' => 'string',
            'mockInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\ApiMockCreate',
            'funcInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\ApiFuncCreate',
            'reqParams' => '\HuaweiCloud\SDK\Apig\V2\Model\ReqParamBase[]',
            'backendParams' => '\HuaweiCloud\SDK\Apig\V2\Model\BackendParamBase[]',
            'policyMocks' => '\HuaweiCloud\SDK\Apig\V2\Model\ApiPolicyMockCreate[]',
            'policyFunctions' => '\HuaweiCloud\SDK\Apig\V2\Model\ApiPolicyFunctionCreate[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * version  API的版本
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    * reqMethod  API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    * authOpt  authOpt
    * cors  是否支持跨域 - TRUE：支持 - FALSE：不支持
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * backendType  后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    * remark  API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * groupId  API所属的分组编号
    * bodyRemark  API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    * resultNormalSample  正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * resultFailureSample  失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * authorizerId  前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    * tags  标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    * responseId  分组自定义响应ID
    * romaAppId  集成应用ID  暂不支持
    * domainName  API绑定的自定义域名  暂不支持
    * tag  标签  待废弃，优先使用tags字段
    * contentType  请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    * mockInfo  mockInfo
    * funcInfo  funcInfo
    * reqParams  API的请求参数列表，API请求协议为GRPC类型时不支持配置
    * backendParams  API的后端参数列表，API请求协议为GRPC类型时不支持配置
    * policyMocks  mock策略后端列表
    * policyFunctions  函数工作流策略后端列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => 'int32',
        'version' => null,
        'reqProtocol' => null,
        'reqMethod' => null,
        'reqUri' => null,
        'authType' => null,
        'authOpt' => null,
        'cors' => null,
        'matchMode' => null,
        'backendType' => null,
        'remark' => null,
        'groupId' => null,
        'bodyRemark' => null,
        'resultNormalSample' => null,
        'resultFailureSample' => null,
        'authorizerId' => null,
        'tags' => null,
        'responseId' => null,
        'romaAppId' => null,
        'domainName' => null,
        'tag' => null,
        'contentType' => null,
        'mockInfo' => null,
        'funcInfo' => null,
        'reqParams' => null,
        'backendParams' => null,
        'policyMocks' => null,
        'policyFunctions' => null
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
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * version  API的版本
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    * reqMethod  API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    * authOpt  authOpt
    * cors  是否支持跨域 - TRUE：支持 - FALSE：不支持
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * backendType  后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    * remark  API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * groupId  API所属的分组编号
    * bodyRemark  API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    * resultNormalSample  正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * resultFailureSample  失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * authorizerId  前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    * tags  标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    * responseId  分组自定义响应ID
    * romaAppId  集成应用ID  暂不支持
    * domainName  API绑定的自定义域名  暂不支持
    * tag  标签  待废弃，优先使用tags字段
    * contentType  请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    * mockInfo  mockInfo
    * funcInfo  funcInfo
    * reqParams  API的请求参数列表，API请求协议为GRPC类型时不支持配置
    * backendParams  API的后端参数列表，API请求协议为GRPC类型时不支持配置
    * policyMocks  mock策略后端列表
    * policyFunctions  函数工作流策略后端列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'version' => 'version',
            'reqProtocol' => 'req_protocol',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri',
            'authType' => 'auth_type',
            'authOpt' => 'auth_opt',
            'cors' => 'cors',
            'matchMode' => 'match_mode',
            'backendType' => 'backend_type',
            'remark' => 'remark',
            'groupId' => 'group_id',
            'bodyRemark' => 'body_remark',
            'resultNormalSample' => 'result_normal_sample',
            'resultFailureSample' => 'result_failure_sample',
            'authorizerId' => 'authorizer_id',
            'tags' => 'tags',
            'responseId' => 'response_id',
            'romaAppId' => 'roma_app_id',
            'domainName' => 'domain_name',
            'tag' => 'tag',
            'contentType' => 'content_type',
            'mockInfo' => 'mock_info',
            'funcInfo' => 'func_info',
            'reqParams' => 'req_params',
            'backendParams' => 'backend_params',
            'policyMocks' => 'policy_mocks',
            'policyFunctions' => 'policy_functions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * version  API的版本
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    * reqMethod  API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    * authOpt  authOpt
    * cors  是否支持跨域 - TRUE：支持 - FALSE：不支持
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * backendType  后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    * remark  API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * groupId  API所属的分组编号
    * bodyRemark  API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    * resultNormalSample  正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * resultFailureSample  失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * authorizerId  前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    * tags  标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    * responseId  分组自定义响应ID
    * romaAppId  集成应用ID  暂不支持
    * domainName  API绑定的自定义域名  暂不支持
    * tag  标签  待废弃，优先使用tags字段
    * contentType  请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    * mockInfo  mockInfo
    * funcInfo  funcInfo
    * reqParams  API的请求参数列表，API请求协议为GRPC类型时不支持配置
    * backendParams  API的后端参数列表，API请求协议为GRPC类型时不支持配置
    * policyMocks  mock策略后端列表
    * policyFunctions  函数工作流策略后端列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'version' => 'setVersion',
            'reqProtocol' => 'setReqProtocol',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri',
            'authType' => 'setAuthType',
            'authOpt' => 'setAuthOpt',
            'cors' => 'setCors',
            'matchMode' => 'setMatchMode',
            'backendType' => 'setBackendType',
            'remark' => 'setRemark',
            'groupId' => 'setGroupId',
            'bodyRemark' => 'setBodyRemark',
            'resultNormalSample' => 'setResultNormalSample',
            'resultFailureSample' => 'setResultFailureSample',
            'authorizerId' => 'setAuthorizerId',
            'tags' => 'setTags',
            'responseId' => 'setResponseId',
            'romaAppId' => 'setRomaAppId',
            'domainName' => 'setDomainName',
            'tag' => 'setTag',
            'contentType' => 'setContentType',
            'mockInfo' => 'setMockInfo',
            'funcInfo' => 'setFuncInfo',
            'reqParams' => 'setReqParams',
            'backendParams' => 'setBackendParams',
            'policyMocks' => 'setPolicyMocks',
            'policyFunctions' => 'setPolicyFunctions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * version  API的版本
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    * reqMethod  API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    * authOpt  authOpt
    * cors  是否支持跨域 - TRUE：支持 - FALSE：不支持
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * backendType  后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    * remark  API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * groupId  API所属的分组编号
    * bodyRemark  API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    * resultNormalSample  正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * resultFailureSample  失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    * authorizerId  前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    * tags  标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    * responseId  分组自定义响应ID
    * romaAppId  集成应用ID  暂不支持
    * domainName  API绑定的自定义域名  暂不支持
    * tag  标签  待废弃，优先使用tags字段
    * contentType  请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    * mockInfo  mockInfo
    * funcInfo  funcInfo
    * reqParams  API的请求参数列表，API请求协议为GRPC类型时不支持配置
    * backendParams  API的后端参数列表，API请求协议为GRPC类型时不支持配置
    * policyMocks  mock策略后端列表
    * policyFunctions  函数工作流策略后端列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'version' => 'getVersion',
            'reqProtocol' => 'getReqProtocol',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri',
            'authType' => 'getAuthType',
            'authOpt' => 'getAuthOpt',
            'cors' => 'getCors',
            'matchMode' => 'getMatchMode',
            'backendType' => 'getBackendType',
            'remark' => 'getRemark',
            'groupId' => 'getGroupId',
            'bodyRemark' => 'getBodyRemark',
            'resultNormalSample' => 'getResultNormalSample',
            'resultFailureSample' => 'getResultFailureSample',
            'authorizerId' => 'getAuthorizerId',
            'tags' => 'getTags',
            'responseId' => 'getResponseId',
            'romaAppId' => 'getRomaAppId',
            'domainName' => 'getDomainName',
            'tag' => 'getTag',
            'contentType' => 'getContentType',
            'mockInfo' => 'getMockInfo',
            'funcInfo' => 'getFuncInfo',
            'reqParams' => 'getReqParams',
            'backendParams' => 'getBackendParams',
            'policyMocks' => 'getPolicyMocks',
            'policyFunctions' => 'getPolicyFunctions'
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
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const REQ_PROTOCOL_HTTP = 'HTTP';
    const REQ_PROTOCOL_HTTPS = 'HTTPS';
    const REQ_PROTOCOL_BOTH = 'BOTH';
    const REQ_PROTOCOL_GRPCS = 'GRPCS';
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    const AUTH_TYPE_NONE = 'NONE';
    const AUTH_TYPE_APP = 'APP';
    const AUTH_TYPE_IAM = 'IAM';
    const AUTH_TYPE_AUTHORIZER = 'AUTHORIZER';
    const MATCH_MODE_SWA = 'SWA';
    const MATCH_MODE_NORMAL = 'NORMAL';
    const BACKEND_TYPE_HTTP = 'HTTP';
    const BACKEND_TYPE__FUNCTION = 'FUNCTION';
    const BACKEND_TYPE_MOCK = 'MOCK';
    const BACKEND_TYPE_GRPC = 'GRPC';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    const CONTENT_TYPE_APPLICATION_XML = 'application/xml';
    const CONTENT_TYPE_MULTIPART_FORM_DATA = 'multipart/form-data';
    const CONTENT_TYPE_TEXT_PLAIN = 'text/plain';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_1,
            self::TYPE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqProtocolAllowableValues()
    {
        return [
            self::REQ_PROTOCOL_HTTP,
            self::REQ_PROTOCOL_HTTPS,
            self::REQ_PROTOCOL_BOTH,
            self::REQ_PROTOCOL_GRPCS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_APP,
            self::AUTH_TYPE_IAM,
            self::AUTH_TYPE_AUTHORIZER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchModeAllowableValues()
    {
        return [
            self::MATCH_MODE_SWA,
            self::MATCH_MODE_NORMAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackendTypeAllowableValues()
    {
        return [
            self::BACKEND_TYPE_HTTP,
            self::BACKEND_TYPE__FUNCTION,
            self::BACKEND_TYPE_MOCK,
            self::BACKEND_TYPE_GRPC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_APPLICATION_JSON,
            self::CONTENT_TYPE_APPLICATION_XML,
            self::CONTENT_TYPE_MULTIPART_FORM_DATA,
            self::CONTENT_TYPE_TEXT_PLAIN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['authOpt'] = isset($data['authOpt']) ? $data['authOpt'] : null;
        $this->container['cors'] = isset($data['cors']) ? $data['cors'] : null;
        $this->container['matchMode'] = isset($data['matchMode']) ? $data['matchMode'] : null;
        $this->container['backendType'] = isset($data['backendType']) ? $data['backendType'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['bodyRemark'] = isset($data['bodyRemark']) ? $data['bodyRemark'] : null;
        $this->container['resultNormalSample'] = isset($data['resultNormalSample']) ? $data['resultNormalSample'] : null;
        $this->container['resultFailureSample'] = isset($data['resultFailureSample']) ? $data['resultFailureSample'] : null;
        $this->container['authorizerId'] = isset($data['authorizerId']) ? $data['authorizerId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['responseId'] = isset($data['responseId']) ? $data['responseId'] : null;
        $this->container['romaAppId'] = isset($data['romaAppId']) ? $data['romaAppId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['mockInfo'] = isset($data['mockInfo']) ? $data['mockInfo'] : null;
        $this->container['funcInfo'] = isset($data['funcInfo']) ? $data['funcInfo'] : null;
        $this->container['reqParams'] = isset($data['reqParams']) ? $data['reqParams'] : null;
        $this->container['backendParams'] = isset($data['backendParams']) ? $data['backendParams'] : null;
        $this->container['policyMocks'] = isset($data['policyMocks']) ? $data['policyMocks'] : null;
        $this->container['policyFunctions'] = isset($data['policyFunctions']) ? $data['policyFunctions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 16)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 16.";
            }
        if ($this->container['reqProtocol'] === null) {
            $invalidProperties[] = "'reqProtocol' can't be null";
        }
            $allowedValues = $this->getReqProtocolAllowableValues();
                if (!is_null($this->container['reqProtocol']) && !in_array($this->container['reqProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reqMethod'] === null) {
            $invalidProperties[] = "'reqMethod' can't be null";
        }
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reqUri'] === null) {
            $invalidProperties[] = "'reqUri' can't be null";
        }
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
        }
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMatchModeAllowableValues();
                if (!is_null($this->container['matchMode']) && !in_array($this->container['matchMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'matchMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['backendType'] === null) {
            $invalidProperties[] = "'backendType' can't be null";
        }
            $allowedValues = $this->getBackendTypeAllowableValues();
                if (!is_null($this->container['backendType']) && !in_array($this->container['backendType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backendType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            $allowedValues = $this->getContentTypeAllowableValues();
                if (!is_null($this->container['contentType']) && !in_array($this->container['contentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'contentType', must be one of '%s'",
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
    * Gets name
    *  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  API类型 - 1：公有API - 2：私有API
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type API类型 - 1：公有API - 2：私有API
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  API的版本
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
    * @param string|null $version API的版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    *
    * @return string
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string $reqProtocol API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS - GRPCS
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    *
    * @return string
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string $reqMethod API的请求方式，当API的请求协议为GRPC类型协议时请求方式固定为POST。
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqUri
    *  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    *
    * @return string
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string $reqUri 请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  > 需要服从URI规范。
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets authType
    *  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证，当auth_type取值为AUTHORIZER时，authorizer_id字段必须传入  当API的请求协议为GRPC类型时不支持自定义认证。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets authOpt
    *  authOpt
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\AuthOpt|null
    */
    public function getAuthOpt()
    {
        return $this->container['authOpt'];
    }

    /**
    * Sets authOpt
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\AuthOpt|null $authOpt authOpt
    *
    * @return $this
    */
    public function setAuthOpt($authOpt)
    {
        $this->container['authOpt'] = $authOpt;
        return $this;
    }

    /**
    * Gets cors
    *  是否支持跨域 - TRUE：支持 - FALSE：不支持
    *
    * @return bool|null
    */
    public function getCors()
    {
        return $this->container['cors'];
    }

    /**
    * Sets cors
    *
    * @param bool|null $cors 是否支持跨域 - TRUE：支持 - FALSE：不支持
    *
    * @return $this
    */
    public function setCors($cors)
    {
        $this->container['cors'] = $cors;
        return $this;
    }

    /**
    * Gets matchMode
    *  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @return string|null
    */
    public function getMatchMode()
    {
        return $this->container['matchMode'];
    }

    /**
    * Sets matchMode
    *
    * @param string|null $matchMode API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @return $this
    */
    public function setMatchMode($matchMode)
    {
        $this->container['matchMode'] = $matchMode;
        return $this;
    }

    /**
    * Gets backendType
    *  后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    *
    * @return string
    */
    public function getBackendType()
    {
        return $this->container['backendType'];
    }

    /**
    * Sets backendType
    *
    * @param string $backendType 后端类型 - HTTP：web后端 - FUNCTION：函数工作流，当backend_type取值为FUNCTION时，func_info字段必须传入 - MOCK：模拟的后端，当backend_type取值为MOCK时，mock_info字段必须传入 - GRPC：grpc后端
    *
    * @return $this
    */
    public function setBackendType($backendType)
    {
        $this->container['backendType'] = $backendType;
        return $this;
    }

    /**
    * Gets remark
    *  API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark API描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets groupId
    *  API所属的分组编号
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId API所属的分组编号
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets bodyRemark
    *  API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getBodyRemark()
    {
        return $this->container['bodyRemark'];
    }

    /**
    * Sets bodyRemark
    *
    * @param string|null $bodyRemark API请求体描述，可以是请求体示例、媒体类型、参数等信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setBodyRemark($bodyRemark)
    {
        $this->container['bodyRemark'] = $bodyRemark;
        return $this;
    }

    /**
    * Gets resultNormalSample
    *  正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    *
    * @return string|null
    */
    public function getResultNormalSample()
    {
        return $this->container['resultNormalSample'];
    }

    /**
    * Sets resultNormalSample
    *
    * @param string|null $resultNormalSample 正常响应示例，描述API的正常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    *
    * @return $this
    */
    public function setResultNormalSample($resultNormalSample)
    {
        $this->container['resultNormalSample'] = $resultNormalSample;
        return $this;
    }

    /**
    * Gets resultFailureSample
    *  失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    *
    * @return string|null
    */
    public function getResultFailureSample()
    {
        return $this->container['resultFailureSample'];
    }

    /**
    * Sets resultFailureSample
    *
    * @param string|null $resultFailureSample 失败返回示例，描述API的异常返回信息。字符长度不超过20480 > 中文字符必须为UTF-8或者unicode编码。  当API的请求协议为GRPC类型时不支持配置。
    *
    * @return $this
    */
    public function setResultFailureSample($resultFailureSample)
    {
        $this->container['resultFailureSample'] = $resultFailureSample;
        return $this;
    }

    /**
    * Gets authorizerId
    *  前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    *
    * @return string|null
    */
    public function getAuthorizerId()
    {
        return $this->container['authorizerId'];
    }

    /**
    * Sets authorizerId
    *
    * @param string|null $authorizerId 前端自定义认证对象的ID，API请求协议为GRPC类型时不支持前端自定义认证
    *
    * @return $this
    */
    public function setAuthorizerId($authorizerId)
    {
        $this->container['authorizerId'] = $authorizerId;
        return $this;
    }

    /**
    * Gets tags
    *  标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签。  支持英文，数字，中文，特殊符号（-*#%.:_），且只能以中文或英文开头。  默认支持10个标签，如需扩大配额请联系技术工程师修改API_TAG_NUM_LIMIT配置。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets responseId
    *  分组自定义响应ID
    *
    * @return string|null
    */
    public function getResponseId()
    {
        return $this->container['responseId'];
    }

    /**
    * Sets responseId
    *
    * @param string|null $responseId 分组自定义响应ID
    *
    * @return $this
    */
    public function setResponseId($responseId)
    {
        $this->container['responseId'] = $responseId;
        return $this;
    }

    /**
    * Gets romaAppId
    *  集成应用ID  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppId()
    {
        return $this->container['romaAppId'];
    }

    /**
    * Sets romaAppId
    *
    * @param string|null $romaAppId 集成应用ID  暂不支持
    *
    * @return $this
    */
    public function setRomaAppId($romaAppId)
    {
        $this->container['romaAppId'] = $romaAppId;
        return $this;
    }

    /**
    * Gets domainName
    *  API绑定的自定义域名  暂不支持
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName API绑定的自定义域名  暂不支持
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets tag
    *  标签  待废弃，优先使用tags字段
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 标签  待废弃，优先使用tags字段
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets contentType
    *  请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 请求内容格式类型：  application/json application/xml multipart/form-data text/plain  暂不支持
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets mockInfo
    *  mockInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\ApiMockCreate|null
    */
    public function getMockInfo()
    {
        return $this->container['mockInfo'];
    }

    /**
    * Sets mockInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\ApiMockCreate|null $mockInfo mockInfo
    *
    * @return $this
    */
    public function setMockInfo($mockInfo)
    {
        $this->container['mockInfo'] = $mockInfo;
        return $this;
    }

    /**
    * Gets funcInfo
    *  funcInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\ApiFuncCreate|null
    */
    public function getFuncInfo()
    {
        return $this->container['funcInfo'];
    }

    /**
    * Sets funcInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\ApiFuncCreate|null $funcInfo funcInfo
    *
    * @return $this
    */
    public function setFuncInfo($funcInfo)
    {
        $this->container['funcInfo'] = $funcInfo;
        return $this;
    }

    /**
    * Gets reqParams
    *  API的请求参数列表，API请求协议为GRPC类型时不支持配置
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\ReqParamBase[]|null
    */
    public function getReqParams()
    {
        return $this->container['reqParams'];
    }

    /**
    * Sets reqParams
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\ReqParamBase[]|null $reqParams API的请求参数列表，API请求协议为GRPC类型时不支持配置
    *
    * @return $this
    */
    public function setReqParams($reqParams)
    {
        $this->container['reqParams'] = $reqParams;
        return $this;
    }

    /**
    * Gets backendParams
    *  API的后端参数列表，API请求协议为GRPC类型时不支持配置
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\BackendParamBase[]|null
    */
    public function getBackendParams()
    {
        return $this->container['backendParams'];
    }

    /**
    * Sets backendParams
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\BackendParamBase[]|null $backendParams API的后端参数列表，API请求协议为GRPC类型时不支持配置
    *
    * @return $this
    */
    public function setBackendParams($backendParams)
    {
        $this->container['backendParams'] = $backendParams;
        return $this;
    }

    /**
    * Gets policyMocks
    *  mock策略后端列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\ApiPolicyMockCreate[]|null
    */
    public function getPolicyMocks()
    {
        return $this->container['policyMocks'];
    }

    /**
    * Sets policyMocks
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\ApiPolicyMockCreate[]|null $policyMocks mock策略后端列表
    *
    * @return $this
    */
    public function setPolicyMocks($policyMocks)
    {
        $this->container['policyMocks'] = $policyMocks;
        return $this;
    }

    /**
    * Gets policyFunctions
    *  函数工作流策略后端列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\ApiPolicyFunctionCreate[]|null
    */
    public function getPolicyFunctions()
    {
        return $this->container['policyFunctions'];
    }

    /**
    * Sets policyFunctions
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\ApiPolicyFunctionCreate[]|null $policyFunctions 函数工作流策略后端列表
    *
    * @return $this
    */
    public function setPolicyFunctions($policyFunctions)
    {
        $this->container['policyFunctions'] = $policyFunctions;
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

