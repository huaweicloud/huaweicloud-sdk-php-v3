<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Config implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
    * used  该实例对应配额已使用数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configId' => 'string',
            'configName' => 'string',
            'configValue' => 'string',
            'configTime' => '\DateTime',
            'remark' => 'string',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
    * used  该实例对应配额已使用数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configId' => null,
        'configName' => null,
        'configValue' => null,
        'configTime' => 'date-time',
        'remark' => null,
        'used' => 'int64'
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
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
    * used  该实例对应配额已使用数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configId' => 'config_id',
            'configName' => 'config_name',
            'configValue' => 'config_value',
            'configTime' => 'config_time',
            'remark' => 'remark',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
    * used  该实例对应配额已使用数量
    *
    * @var string[]
    */
    protected static $setters = [
            'configId' => 'setConfigId',
            'configName' => 'setConfigName',
            'configValue' => 'setConfigValue',
            'configTime' => 'setConfigTime',
            'remark' => 'setRemark',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
    * used  该实例对应配额已使用数量
    *
    * @var string[]
    */
    protected static $getters = [
            'configId' => 'getConfigId',
            'configName' => 'getConfigName',
            'configValue' => 'getConfigValue',
            'configTime' => 'getConfigTime',
            'remark' => 'getRemark',
            'used' => 'getUsed'
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
    const CONFIG_NAME_API_NUM_LIMIT = 'API_NUM_LIMIT';
    const CONFIG_NAME_APP_NUM_LIMIT = 'APP_NUM_LIMIT';
    const CONFIG_NAME_APIGROUP_NUM_LIMIT = 'APIGROUP_NUM_LIMIT';
    const CONFIG_NAME_ENVIRONMENT_NUM_LIMIT = 'ENVIRONMENT_NUM_LIMIT';
    const CONFIG_NAME_VARIABLE_NUM_LIMIT = 'VARIABLE_NUM_LIMIT';
    const CONFIG_NAME_SIGN_NUM_LIMIT = 'SIGN_NUM_LIMIT';
    const CONFIG_NAME_THROTTLE_NUM_LIMIT = 'THROTTLE_NUM_LIMIT';
    const CONFIG_NAME_APIGROUP_DOMAIN_NUM_LIMIT = 'APIGROUP_DOMAIN_NUM_LIMIT';
    const CONFIG_NAME_API_VERSION_NUM_LIMIT = 'API_VERSION_NUM_LIMIT';
    const CONFIG_NAME_VPC_NUM_LIMIT = 'VPC_NUM_LIMIT';
    const CONFIG_NAME_VPC_INSTANCE_NUM_LIMIT = 'VPC_INSTANCE_NUM_LIMIT';
    const CONFIG_NAME_API_PARAM_NUM_LIMIT = 'API_PARAM_NUM_LIMIT';
    const CONFIG_NAME_API_USER_CALL_LIMIT = 'API_USER_CALL_LIMIT';
    const CONFIG_NAME_ACL_NUM_LIMIT = 'ACL_NUM_LIMIT';
    const CONFIG_NAME_APP_THROTTLE_LIMIT = 'APP_THROTTLE_LIMIT';
    const CONFIG_NAME_USER_THROTTLE_LIMIT = 'USER_THROTTLE_LIMIT';
    const CONFIG_NAME_API_NUM_LIMIT_PER_GROUP = 'API_NUM_LIMIT_PER_GROUP';
    const CONFIG_NAME_API_POLICY_NUM_LIMIT = 'API_POLICY_NUM_LIMIT';
    const CONFIG_NAME_API_CONDITION_NUM_LIMIT = 'API_CONDITION_NUM_LIMIT';
    const CONFIG_NAME_SL_DOMAIN_CALL_LIMIT = 'SL_DOMAIN_CALL_LIMIT';
    const CONFIG_NAME_ELB_SWITCH = 'ELB_SWITCH';
    const CONFIG_NAME_AUTHORIZER_NUM_LIMIT = 'AUTHORIZER_NUM_LIMIT';
    const CONFIG_NAME_AUTHORIZER_IDENTITY_NUM_LIMIT = 'AUTHORIZER_IDENTITY_NUM_LIMIT';
    const CONFIG_NAME_APP_CODE_NUM_LIMIT = 'APP_CODE_NUM_LIMIT';
    const CONFIG_NAME_REGION_MANAGER_WHITELIST_SERVICES = 'REGION_MANAGER_WHITELIST_SERVICES';
    const CONFIG_NAME_API_SWAGGER_NUM_LIMIT = 'API_SWAGGER_NUM_LIMIT';
    const CONFIG_NAME_API_TAG_NUM_LIMIT = 'API_TAG_NUM_LIMIT';
    const CONFIG_NAME_LTS_SWITCH = 'LTS_SWITCH';
    const CONFIG_NAME_APP_KEY_SECRET_SWITCH = 'APP_KEY_SECRET_SWITCH';
    const CONFIG_NAME_RESPONSE_NUM_LIMIT = 'RESPONSE_NUM_LIMIT';
    const CONFIG_NAME_CONFIG_NUM_LIMIT_PER_APP = 'CONFIG_NUM_LIMIT_PER_APP';
    const CONFIG_NAME_BACKEND_TOKEN_ALLOW_SWITCH = 'BACKEND_TOKEN_ALLOW_SWITCH';
    const CONFIG_NAME_APP_TOKEN_SWITCH = 'APP_TOKEN_SWITCH';
    const CONFIG_NAME_API_DESIGNER_SWITCH = 'API_DESIGNER_SWITCH';
    const CONFIG_NAME_APP_API_KEY_SWITCH = 'APP_API_KEY_SWITCH';
    const CONFIG_NAME_APP_BASIC_SWITCH = 'APP_BASIC_SWITCH';
    const CONFIG_NAME_APP_JWT_SWITCH = 'APP_JWT_SWITCH';
    const CONFIG_NAME_APP_ROUTE_SWITCH = 'APP_ROUTE_SWITCH';
    const CONFIG_NAME_PUBLIC_KEY_SWITCH = 'PUBLIC_KEY_SWITCH';
    const CONFIG_NAME_APP_SECRET_SWITCH = 'APP_SECRET_SWITCH';
    const CONFIG_NAME_CASCADE_SWITCH = 'CASCADE_SWITCH';
    const CONFIG_NAME_IS_INIT_API_PATH_HASH = 'IS_INIT_API_PATH_HASH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigNameAllowableValues()
    {
        return [
            self::CONFIG_NAME_API_NUM_LIMIT,
            self::CONFIG_NAME_APP_NUM_LIMIT,
            self::CONFIG_NAME_APIGROUP_NUM_LIMIT,
            self::CONFIG_NAME_ENVIRONMENT_NUM_LIMIT,
            self::CONFIG_NAME_VARIABLE_NUM_LIMIT,
            self::CONFIG_NAME_SIGN_NUM_LIMIT,
            self::CONFIG_NAME_THROTTLE_NUM_LIMIT,
            self::CONFIG_NAME_APIGROUP_DOMAIN_NUM_LIMIT,
            self::CONFIG_NAME_API_VERSION_NUM_LIMIT,
            self::CONFIG_NAME_VPC_NUM_LIMIT,
            self::CONFIG_NAME_VPC_INSTANCE_NUM_LIMIT,
            self::CONFIG_NAME_API_PARAM_NUM_LIMIT,
            self::CONFIG_NAME_API_USER_CALL_LIMIT,
            self::CONFIG_NAME_ACL_NUM_LIMIT,
            self::CONFIG_NAME_APP_THROTTLE_LIMIT,
            self::CONFIG_NAME_USER_THROTTLE_LIMIT,
            self::CONFIG_NAME_API_NUM_LIMIT_PER_GROUP,
            self::CONFIG_NAME_API_POLICY_NUM_LIMIT,
            self::CONFIG_NAME_API_CONDITION_NUM_LIMIT,
            self::CONFIG_NAME_SL_DOMAIN_CALL_LIMIT,
            self::CONFIG_NAME_ELB_SWITCH,
            self::CONFIG_NAME_AUTHORIZER_NUM_LIMIT,
            self::CONFIG_NAME_AUTHORIZER_IDENTITY_NUM_LIMIT,
            self::CONFIG_NAME_APP_CODE_NUM_LIMIT,
            self::CONFIG_NAME_REGION_MANAGER_WHITELIST_SERVICES,
            self::CONFIG_NAME_API_SWAGGER_NUM_LIMIT,
            self::CONFIG_NAME_API_TAG_NUM_LIMIT,
            self::CONFIG_NAME_LTS_SWITCH,
            self::CONFIG_NAME_APP_KEY_SECRET_SWITCH,
            self::CONFIG_NAME_RESPONSE_NUM_LIMIT,
            self::CONFIG_NAME_CONFIG_NUM_LIMIT_PER_APP,
            self::CONFIG_NAME_BACKEND_TOKEN_ALLOW_SWITCH,
            self::CONFIG_NAME_APP_TOKEN_SWITCH,
            self::CONFIG_NAME_API_DESIGNER_SWITCH,
            self::CONFIG_NAME_APP_API_KEY_SWITCH,
            self::CONFIG_NAME_APP_BASIC_SWITCH,
            self::CONFIG_NAME_APP_JWT_SWITCH,
            self::CONFIG_NAME_APP_ROUTE_SWITCH,
            self::CONFIG_NAME_PUBLIC_KEY_SWITCH,
            self::CONFIG_NAME_APP_SECRET_SWITCH,
            self::CONFIG_NAME_CASCADE_SWITCH,
            self::CONFIG_NAME_IS_INIT_API_PATH_HASH,
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
        $this->container['configId'] = isset($data['configId']) ? $data['configId'] : null;
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['configTime'] = isset($data['configTime']) ? $data['configTime'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConfigNameAllowableValues();
                if (!is_null($this->container['configName']) && !in_array($this->container['configName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configName', must be one of '%s'",
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
    * Gets configId
    *  配额编号
    *
    * @return string|null
    */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
    * Sets configId
    *
    * @param string|null $configId 配额编号
    *
    * @return $this
    */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;
        return $this;
    }

    /**
    * Gets configName
    *  配额名称
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 配额名称
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets configValue
    *  配额值  当前实例所在租户该配额对应的数量
    *
    * @return string|null
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string|null $configValue 配额值  当前实例所在租户该配额对应的数量
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
        return $this;
    }

    /**
    * Gets configTime
    *  配额创建时间
    *
    * @return \DateTime|null
    */
    public function getConfigTime()
    {
        return $this->container['configTime'];
    }

    /**
    * Sets configTime
    *
    * @param \DateTime|null $configTime 配额创建时间
    *
    * @return $this
    */
    public function setConfigTime($configTime)
    {
        $this->container['configTime'] = $configTime;
        return $this;
    }

    /**
    * Gets remark
    *  配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
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
    * @param string|null $remark 配额描述： - API_NUM_LIMIT：租户可以创建的API个数限制 - APP_NUM_LIMIT：租户可以创建的APP个数限制 - APIGROUP_NUM_LIMIT：租户可以创建的API分组个数限制 - ENVIRONMENT_NUM_LIMIT：租户可以创建的环境个数限制 - VARIABLE_NUM_LIMIT：每个API分组上可以创建的环境变量个数限制 - SIGN_NUM_LIMIT：租户可以创建的签名密钥个数限制 - THROTTLE_NUM_LIMIT：租户可以创建的流控策略个数限制 - APIGROUP_DOMAIN_NUM_LIMIT：每个API分组上可以绑定的自定义域名个数限制 - API_VERSION_NUM_LIMIT：每个API可以保留的发布版本个数限制 - VPC_NUM_LIMIT：租户可以创建的VPC通道个数限制 - VPC_INSTANCE_NUM_LIMIT：每个VPC通道上可以绑定的弹性云服务器个数限制 - API_PARAM_NUM_LIMIT：每个API可以设置的参数个数限制 - API_USER_CALL_LIMIT：每个租户的API单位时间内的请求默认限制 - ACL_NUM_LIMIT：每个租户可以创建的ACL策略个数限制 - APP_THROTTLE_LIMIT：特殊应用流控策略个数限制 - USER_THROTTLE_LIMIT：特殊用户流控策略个数限制 - API_NUM_LIMIT_PER_GROUP：租户每个API分组可以创建的API数量限制 - API_POLICY_NUM_LIMIT：每个API可以设置的策略后端个数限制 - API_CONDITION_NUM_LIMIT：每个API策略后端可以设置的条件个数限制 - SL_DOMAIN_CALL_LIMIT：每个二级域名单位时间内的请求默认限制 - ELB_SWITCH：是否启用ELB通道 - AUTHORIZER_NUM_LIMIT：租户可创建的自定义认证个数限制 - AUTHORIZER_IDENTITY_NUM_LIMIT：每个自定义认证可以设置的身份来源个数限制 - APP_CODE_NUM_LIMIT：每个APP可以创建的APP code数量限制 - REGION_MANAGER_WHITELIST_SERVICES：不校验region manager服务白名单列表，暂不支持 - API_SWAGGER_NUM_LIMIT：单个API分组可以绑定的swagger文档数量限制 - API_TAG_NUM_LIMIT：每个API可以设置的标签个数限制 - LTS_SWITCH：是启用LTS上报 - APP_KEY_SECRET_SWITCH：是否打开APP支持自定义KEY和SECRET的开关，1：开启；2：关闭 - RESPONSE_NUM_LIMIT：分组自定义响应个数限制 - CONFIG_NUM_LIMIT_PER_APP：每个APP可以设置的配置项个数限制 - BACKEND_TOKEN_ALLOW_SWITCH：是否支持普通租户透传后端token，1：开启；2：关闭 - APP_TOKEN_SWITCH：是否启用APPTOKEN - API_DESIGNER_SWITCH：是否启用api设计器，1：开启；2：关闭 - APP_API_KEY_SWITCH：是否启用APP_API_KEY认证方式 - APP_BASIC_SWITCH：是否启用APP_BASIC认证方式 - APP_JWT_SWITCH：是否启用APP_JWT认证方式 - APP_ROUTE_SWITCH：是否启用APP路由 - PUBLIC_KEY_SWITCH：是否启用PUBLIK_KEY后端认证方式 - APP_SECRET_SWITCH：是否启用APP_SECRET认证方式 - CASCADE_SWITCH：是否启用级联网关 - IS_INIT_API_PATH_HASH：是否执行过API PATH HASH刷新
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets used
    *  该实例对应配额已使用数量
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 该实例对应配额已使用数量
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

