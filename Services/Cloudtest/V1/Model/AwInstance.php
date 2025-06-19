<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AwInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AwInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aliasRunaw  AW内容描述字段
    * authenticationInfo  authenticationInfo
    * authenticationType  认证类型,0-无认证;1-aksk认证
    * awDescription  脚本模板描述信息，在用例更新时添加
    * awId  aw id
    * awType  aw类型 0-setup;1-test;2-teardown
    * basicAw  basicAw
    * bodyParamType  instance的参数body体类型：form/text
    * byOrder  顺序
    * changeSign  change sign
    * checkPointList  检查点List
    * children  aw实例
    * conditionStatement  条件语句
    * conditionType  条件类型 0-not condition;1-if begin;2-if
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * customHeader  测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    * description  描述
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * fromOutside  该aw是否来自外部工程 0-no;1-yes
    * hasLevel  level
    * headerArray  headerArray
    * hisScript  值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    * id  id
    * isBasic  是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    * isContractAw  是否是契约AW 0-否；1-yes
    * isDisabled  是否被禁用 0-否；1-yes
    * isSectestAw  是否是安全测试aw
    * level  用例级别
    * name  名称
    * paramDependent  参数依赖
    * paramDependentEnabled  是否启用参数依赖
    * paramTypeAndValue  参数类型和参数值对应List
    * projectId  工程id
    * region  区域名称
    * relation  awId层级关系
    * relationId  relation id
    * relationType  映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    * retryInterval  重试间隔时间 (ms) 为空表示不等待
    * retryTimes  重试次数
    * scriptName  获取脚本生成时，要使用的步骤名称
    * serviceAndStage  aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    * specialType  测试步骤来源
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    * userId  user id
    * variableList  用例局部变量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aliasRunaw' => 'string',
            'authenticationInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AuthInfo',
            'authenticationType' => 'string',
            'awDescription' => 'string',
            'awId' => 'string',
            'awType' => 'int',
            'basicAw' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAw',
            'bodyParamType' => 'string',
            'byOrder' => 'int',
            'changeSign' => 'int',
            'checkPointList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]',
            'children' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]',
            'conditionStatement' => 'string',
            'conditionType' => 'int',
            'createTime' => 'string',
            'createTimeStamp' => 'int',
            'createTimeString' => 'string',
            'createUser' => 'string',
            'customHeader' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'description' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ErrorInfo',
            'extraInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExtraInfo',
            'fromOutside' => 'int',
            'hasLevel' => 'int',
            'headerArray' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ArrayNode[]',
            'hisScript' => 'string',
            'id' => 'string',
            'isBasic' => 'int',
            'isContractAw' => 'int',
            'isDisabled' => 'int',
            'isSectestAw' => 'int',
            'level' => 'int',
            'name' => 'string',
            'paramDependent' => 'string',
            'paramDependentEnabled' => 'int',
            'paramTypeAndValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'projectId' => 'string',
            'region' => 'string',
            'relation' => 'string',
            'relationId' => 'string',
            'relationType' => 'int',
            'retryInterval' => 'string',
            'retryTimes' => 'string',
            'scriptName' => 'string',
            'serviceAndStage' => 'string',
            'specialType' => 'int',
            'updateTime' => 'string',
            'updateTimeStamp' => 'int',
            'updateTimeString' => 'string',
            'updateUser' => 'string',
            'userId' => 'string',
            'variableList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aliasRunaw  AW内容描述字段
    * authenticationInfo  authenticationInfo
    * authenticationType  认证类型,0-无认证;1-aksk认证
    * awDescription  脚本模板描述信息，在用例更新时添加
    * awId  aw id
    * awType  aw类型 0-setup;1-test;2-teardown
    * basicAw  basicAw
    * bodyParamType  instance的参数body体类型：form/text
    * byOrder  顺序
    * changeSign  change sign
    * checkPointList  检查点List
    * children  aw实例
    * conditionStatement  条件语句
    * conditionType  条件类型 0-not condition;1-if begin;2-if
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * customHeader  测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    * description  描述
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * fromOutside  该aw是否来自外部工程 0-no;1-yes
    * hasLevel  level
    * headerArray  headerArray
    * hisScript  值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    * id  id
    * isBasic  是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    * isContractAw  是否是契约AW 0-否；1-yes
    * isDisabled  是否被禁用 0-否；1-yes
    * isSectestAw  是否是安全测试aw
    * level  用例级别
    * name  名称
    * paramDependent  参数依赖
    * paramDependentEnabled  是否启用参数依赖
    * paramTypeAndValue  参数类型和参数值对应List
    * projectId  工程id
    * region  区域名称
    * relation  awId层级关系
    * relationId  relation id
    * relationType  映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    * retryInterval  重试间隔时间 (ms) 为空表示不等待
    * retryTimes  重试次数
    * scriptName  获取脚本生成时，要使用的步骤名称
    * serviceAndStage  aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    * specialType  测试步骤来源
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    * userId  user id
    * variableList  用例局部变量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aliasRunaw' => null,
        'authenticationInfo' => null,
        'authenticationType' => null,
        'awDescription' => null,
        'awId' => null,
        'awType' => 'int32',
        'basicAw' => null,
        'bodyParamType' => null,
        'byOrder' => 'int32',
        'changeSign' => 'int32',
        'checkPointList' => null,
        'children' => null,
        'conditionStatement' => null,
        'conditionType' => 'int32',
        'createTime' => null,
        'createTimeStamp' => 'int64',
        'createTimeString' => null,
        'createUser' => null,
        'customHeader' => null,
        'description' => null,
        'errorInfo' => null,
        'extraInfo' => null,
        'fromOutside' => 'int32',
        'hasLevel' => 'int32',
        'headerArray' => null,
        'hisScript' => null,
        'id' => null,
        'isBasic' => 'int32',
        'isContractAw' => 'int32',
        'isDisabled' => 'int32',
        'isSectestAw' => 'int32',
        'level' => 'int32',
        'name' => null,
        'paramDependent' => null,
        'paramDependentEnabled' => 'int32',
        'paramTypeAndValue' => null,
        'projectId' => null,
        'region' => null,
        'relation' => null,
        'relationId' => null,
        'relationType' => 'int32',
        'retryInterval' => null,
        'retryTimes' => null,
        'scriptName' => null,
        'serviceAndStage' => null,
        'specialType' => 'int32',
        'updateTime' => null,
        'updateTimeStamp' => 'int64',
        'updateTimeString' => null,
        'updateUser' => null,
        'userId' => null,
        'variableList' => null
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
    * aliasRunaw  AW内容描述字段
    * authenticationInfo  authenticationInfo
    * authenticationType  认证类型,0-无认证;1-aksk认证
    * awDescription  脚本模板描述信息，在用例更新时添加
    * awId  aw id
    * awType  aw类型 0-setup;1-test;2-teardown
    * basicAw  basicAw
    * bodyParamType  instance的参数body体类型：form/text
    * byOrder  顺序
    * changeSign  change sign
    * checkPointList  检查点List
    * children  aw实例
    * conditionStatement  条件语句
    * conditionType  条件类型 0-not condition;1-if begin;2-if
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * customHeader  测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    * description  描述
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * fromOutside  该aw是否来自外部工程 0-no;1-yes
    * hasLevel  level
    * headerArray  headerArray
    * hisScript  值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    * id  id
    * isBasic  是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    * isContractAw  是否是契约AW 0-否；1-yes
    * isDisabled  是否被禁用 0-否；1-yes
    * isSectestAw  是否是安全测试aw
    * level  用例级别
    * name  名称
    * paramDependent  参数依赖
    * paramDependentEnabled  是否启用参数依赖
    * paramTypeAndValue  参数类型和参数值对应List
    * projectId  工程id
    * region  区域名称
    * relation  awId层级关系
    * relationId  relation id
    * relationType  映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    * retryInterval  重试间隔时间 (ms) 为空表示不等待
    * retryTimes  重试次数
    * scriptName  获取脚本生成时，要使用的步骤名称
    * serviceAndStage  aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    * specialType  测试步骤来源
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    * userId  user id
    * variableList  用例局部变量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aliasRunaw' => 'alias_runaw',
            'authenticationInfo' => 'authentication_info',
            'authenticationType' => 'authentication_type',
            'awDescription' => 'aw_description',
            'awId' => 'aw_id',
            'awType' => 'aw_type',
            'basicAw' => 'basic_aw',
            'bodyParamType' => 'body_param_type',
            'byOrder' => 'by_order',
            'changeSign' => 'changeSign',
            'checkPointList' => 'check_point_list',
            'children' => 'children',
            'conditionStatement' => 'condition_statement',
            'conditionType' => 'condition_type',
            'createTime' => 'create_time',
            'createTimeStamp' => 'create_time_stamp',
            'createTimeString' => 'create_time_string',
            'createUser' => 'create_user',
            'customHeader' => 'custom_header',
            'description' => 'description',
            'errorInfo' => 'error_info',
            'extraInfo' => 'extra_info',
            'fromOutside' => 'from_outside',
            'hasLevel' => 'hasLevel',
            'headerArray' => 'header_array',
            'hisScript' => 'his_script',
            'id' => 'id',
            'isBasic' => 'is_basic',
            'isContractAw' => 'is_contract_aw',
            'isDisabled' => 'is_disabled',
            'isSectestAw' => 'is_sectest_aw',
            'level' => 'level',
            'name' => 'name',
            'paramDependent' => 'param_dependent',
            'paramDependentEnabled' => 'param_dependent_enabled',
            'paramTypeAndValue' => 'param_type_and_value',
            'projectId' => 'projectId',
            'region' => 'region',
            'relation' => 'relation',
            'relationId' => 'relation_id',
            'relationType' => 'relation_type',
            'retryInterval' => 'retry_interval',
            'retryTimes' => 'retry_times',
            'scriptName' => 'scriptName',
            'serviceAndStage' => 'service_and_stage',
            'specialType' => 'special_type',
            'updateTime' => 'update_time',
            'updateTimeStamp' => 'update_time_stamp',
            'updateTimeString' => 'update_time_string',
            'updateUser' => 'update_user',
            'userId' => 'user_id',
            'variableList' => 'variable_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aliasRunaw  AW内容描述字段
    * authenticationInfo  authenticationInfo
    * authenticationType  认证类型,0-无认证;1-aksk认证
    * awDescription  脚本模板描述信息，在用例更新时添加
    * awId  aw id
    * awType  aw类型 0-setup;1-test;2-teardown
    * basicAw  basicAw
    * bodyParamType  instance的参数body体类型：form/text
    * byOrder  顺序
    * changeSign  change sign
    * checkPointList  检查点List
    * children  aw实例
    * conditionStatement  条件语句
    * conditionType  条件类型 0-not condition;1-if begin;2-if
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * customHeader  测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    * description  描述
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * fromOutside  该aw是否来自外部工程 0-no;1-yes
    * hasLevel  level
    * headerArray  headerArray
    * hisScript  值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    * id  id
    * isBasic  是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    * isContractAw  是否是契约AW 0-否；1-yes
    * isDisabled  是否被禁用 0-否；1-yes
    * isSectestAw  是否是安全测试aw
    * level  用例级别
    * name  名称
    * paramDependent  参数依赖
    * paramDependentEnabled  是否启用参数依赖
    * paramTypeAndValue  参数类型和参数值对应List
    * projectId  工程id
    * region  区域名称
    * relation  awId层级关系
    * relationId  relation id
    * relationType  映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    * retryInterval  重试间隔时间 (ms) 为空表示不等待
    * retryTimes  重试次数
    * scriptName  获取脚本生成时，要使用的步骤名称
    * serviceAndStage  aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    * specialType  测试步骤来源
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    * userId  user id
    * variableList  用例局部变量
    *
    * @var string[]
    */
    protected static $setters = [
            'aliasRunaw' => 'setAliasRunaw',
            'authenticationInfo' => 'setAuthenticationInfo',
            'authenticationType' => 'setAuthenticationType',
            'awDescription' => 'setAwDescription',
            'awId' => 'setAwId',
            'awType' => 'setAwType',
            'basicAw' => 'setBasicAw',
            'bodyParamType' => 'setBodyParamType',
            'byOrder' => 'setByOrder',
            'changeSign' => 'setChangeSign',
            'checkPointList' => 'setCheckPointList',
            'children' => 'setChildren',
            'conditionStatement' => 'setConditionStatement',
            'conditionType' => 'setConditionType',
            'createTime' => 'setCreateTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'createTimeString' => 'setCreateTimeString',
            'createUser' => 'setCreateUser',
            'customHeader' => 'setCustomHeader',
            'description' => 'setDescription',
            'errorInfo' => 'setErrorInfo',
            'extraInfo' => 'setExtraInfo',
            'fromOutside' => 'setFromOutside',
            'hasLevel' => 'setHasLevel',
            'headerArray' => 'setHeaderArray',
            'hisScript' => 'setHisScript',
            'id' => 'setId',
            'isBasic' => 'setIsBasic',
            'isContractAw' => 'setIsContractAw',
            'isDisabled' => 'setIsDisabled',
            'isSectestAw' => 'setIsSectestAw',
            'level' => 'setLevel',
            'name' => 'setName',
            'paramDependent' => 'setParamDependent',
            'paramDependentEnabled' => 'setParamDependentEnabled',
            'paramTypeAndValue' => 'setParamTypeAndValue',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'relation' => 'setRelation',
            'relationId' => 'setRelationId',
            'relationType' => 'setRelationType',
            'retryInterval' => 'setRetryInterval',
            'retryTimes' => 'setRetryTimes',
            'scriptName' => 'setScriptName',
            'serviceAndStage' => 'setServiceAndStage',
            'specialType' => 'setSpecialType',
            'updateTime' => 'setUpdateTime',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'updateTimeString' => 'setUpdateTimeString',
            'updateUser' => 'setUpdateUser',
            'userId' => 'setUserId',
            'variableList' => 'setVariableList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aliasRunaw  AW内容描述字段
    * authenticationInfo  authenticationInfo
    * authenticationType  认证类型,0-无认证;1-aksk认证
    * awDescription  脚本模板描述信息，在用例更新时添加
    * awId  aw id
    * awType  aw类型 0-setup;1-test;2-teardown
    * basicAw  basicAw
    * bodyParamType  instance的参数body体类型：form/text
    * byOrder  顺序
    * changeSign  change sign
    * checkPointList  检查点List
    * children  aw实例
    * conditionStatement  条件语句
    * conditionType  条件类型 0-not condition;1-if begin;2-if
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * customHeader  测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    * description  描述
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * fromOutside  该aw是否来自外部工程 0-no;1-yes
    * hasLevel  level
    * headerArray  headerArray
    * hisScript  值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    * id  id
    * isBasic  是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    * isContractAw  是否是契约AW 0-否；1-yes
    * isDisabled  是否被禁用 0-否；1-yes
    * isSectestAw  是否是安全测试aw
    * level  用例级别
    * name  名称
    * paramDependent  参数依赖
    * paramDependentEnabled  是否启用参数依赖
    * paramTypeAndValue  参数类型和参数值对应List
    * projectId  工程id
    * region  区域名称
    * relation  awId层级关系
    * relationId  relation id
    * relationType  映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    * retryInterval  重试间隔时间 (ms) 为空表示不等待
    * retryTimes  重试次数
    * scriptName  获取脚本生成时，要使用的步骤名称
    * serviceAndStage  aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    * specialType  测试步骤来源
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    * userId  user id
    * variableList  用例局部变量
    *
    * @var string[]
    */
    protected static $getters = [
            'aliasRunaw' => 'getAliasRunaw',
            'authenticationInfo' => 'getAuthenticationInfo',
            'authenticationType' => 'getAuthenticationType',
            'awDescription' => 'getAwDescription',
            'awId' => 'getAwId',
            'awType' => 'getAwType',
            'basicAw' => 'getBasicAw',
            'bodyParamType' => 'getBodyParamType',
            'byOrder' => 'getByOrder',
            'changeSign' => 'getChangeSign',
            'checkPointList' => 'getCheckPointList',
            'children' => 'getChildren',
            'conditionStatement' => 'getConditionStatement',
            'conditionType' => 'getConditionType',
            'createTime' => 'getCreateTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'createTimeString' => 'getCreateTimeString',
            'createUser' => 'getCreateUser',
            'customHeader' => 'getCustomHeader',
            'description' => 'getDescription',
            'errorInfo' => 'getErrorInfo',
            'extraInfo' => 'getExtraInfo',
            'fromOutside' => 'getFromOutside',
            'hasLevel' => 'getHasLevel',
            'headerArray' => 'getHeaderArray',
            'hisScript' => 'getHisScript',
            'id' => 'getId',
            'isBasic' => 'getIsBasic',
            'isContractAw' => 'getIsContractAw',
            'isDisabled' => 'getIsDisabled',
            'isSectestAw' => 'getIsSectestAw',
            'level' => 'getLevel',
            'name' => 'getName',
            'paramDependent' => 'getParamDependent',
            'paramDependentEnabled' => 'getParamDependentEnabled',
            'paramTypeAndValue' => 'getParamTypeAndValue',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'relation' => 'getRelation',
            'relationId' => 'getRelationId',
            'relationType' => 'getRelationType',
            'retryInterval' => 'getRetryInterval',
            'retryTimes' => 'getRetryTimes',
            'scriptName' => 'getScriptName',
            'serviceAndStage' => 'getServiceAndStage',
            'specialType' => 'getSpecialType',
            'updateTime' => 'getUpdateTime',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'updateTimeString' => 'getUpdateTimeString',
            'updateUser' => 'getUpdateUser',
            'userId' => 'getUserId',
            'variableList' => 'getVariableList'
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
        $this->container['aliasRunaw'] = isset($data['aliasRunaw']) ? $data['aliasRunaw'] : null;
        $this->container['authenticationInfo'] = isset($data['authenticationInfo']) ? $data['authenticationInfo'] : null;
        $this->container['authenticationType'] = isset($data['authenticationType']) ? $data['authenticationType'] : null;
        $this->container['awDescription'] = isset($data['awDescription']) ? $data['awDescription'] : null;
        $this->container['awId'] = isset($data['awId']) ? $data['awId'] : null;
        $this->container['awType'] = isset($data['awType']) ? $data['awType'] : null;
        $this->container['basicAw'] = isset($data['basicAw']) ? $data['basicAw'] : null;
        $this->container['bodyParamType'] = isset($data['bodyParamType']) ? $data['bodyParamType'] : null;
        $this->container['byOrder'] = isset($data['byOrder']) ? $data['byOrder'] : null;
        $this->container['changeSign'] = isset($data['changeSign']) ? $data['changeSign'] : null;
        $this->container['checkPointList'] = isset($data['checkPointList']) ? $data['checkPointList'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['conditionStatement'] = isset($data['conditionStatement']) ? $data['conditionStatement'] : null;
        $this->container['conditionType'] = isset($data['conditionType']) ? $data['conditionType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['createTimeString'] = isset($data['createTimeString']) ? $data['createTimeString'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['customHeader'] = isset($data['customHeader']) ? $data['customHeader'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['fromOutside'] = isset($data['fromOutside']) ? $data['fromOutside'] : null;
        $this->container['hasLevel'] = isset($data['hasLevel']) ? $data['hasLevel'] : null;
        $this->container['headerArray'] = isset($data['headerArray']) ? $data['headerArray'] : null;
        $this->container['hisScript'] = isset($data['hisScript']) ? $data['hisScript'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isBasic'] = isset($data['isBasic']) ? $data['isBasic'] : null;
        $this->container['isContractAw'] = isset($data['isContractAw']) ? $data['isContractAw'] : null;
        $this->container['isDisabled'] = isset($data['isDisabled']) ? $data['isDisabled'] : null;
        $this->container['isSectestAw'] = isset($data['isSectestAw']) ? $data['isSectestAw'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paramDependent'] = isset($data['paramDependent']) ? $data['paramDependent'] : null;
        $this->container['paramDependentEnabled'] = isset($data['paramDependentEnabled']) ? $data['paramDependentEnabled'] : null;
        $this->container['paramTypeAndValue'] = isset($data['paramTypeAndValue']) ? $data['paramTypeAndValue'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['relation'] = isset($data['relation']) ? $data['relation'] : null;
        $this->container['relationId'] = isset($data['relationId']) ? $data['relationId'] : null;
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
        $this->container['retryInterval'] = isset($data['retryInterval']) ? $data['retryInterval'] : null;
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['serviceAndStage'] = isset($data['serviceAndStage']) ? $data['serviceAndStage'] : null;
        $this->container['specialType'] = isset($data['specialType']) ? $data['specialType'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['updateTimeString'] = isset($data['updateTimeString']) ? $data['updateTimeString'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['variableList'] = isset($data['variableList']) ? $data['variableList'] : null;
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
    * Gets aliasRunaw
    *  AW内容描述字段
    *
    * @return string|null
    */
    public function getAliasRunaw()
    {
        return $this->container['aliasRunaw'];
    }

    /**
    * Sets aliasRunaw
    *
    * @param string|null $aliasRunaw AW内容描述字段
    *
    * @return $this
    */
    public function setAliasRunaw($aliasRunaw)
    {
        $this->container['aliasRunaw'] = $aliasRunaw;
        return $this;
    }

    /**
    * Gets authenticationInfo
    *  authenticationInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AuthInfo|null
    */
    public function getAuthenticationInfo()
    {
        return $this->container['authenticationInfo'];
    }

    /**
    * Sets authenticationInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AuthInfo|null $authenticationInfo authenticationInfo
    *
    * @return $this
    */
    public function setAuthenticationInfo($authenticationInfo)
    {
        $this->container['authenticationInfo'] = $authenticationInfo;
        return $this;
    }

    /**
    * Gets authenticationType
    *  认证类型,0-无认证;1-aksk认证
    *
    * @return string|null
    */
    public function getAuthenticationType()
    {
        return $this->container['authenticationType'];
    }

    /**
    * Sets authenticationType
    *
    * @param string|null $authenticationType 认证类型,0-无认证;1-aksk认证
    *
    * @return $this
    */
    public function setAuthenticationType($authenticationType)
    {
        $this->container['authenticationType'] = $authenticationType;
        return $this;
    }

    /**
    * Gets awDescription
    *  脚本模板描述信息，在用例更新时添加
    *
    * @return string|null
    */
    public function getAwDescription()
    {
        return $this->container['awDescription'];
    }

    /**
    * Sets awDescription
    *
    * @param string|null $awDescription 脚本模板描述信息，在用例更新时添加
    *
    * @return $this
    */
    public function setAwDescription($awDescription)
    {
        $this->container['awDescription'] = $awDescription;
        return $this;
    }

    /**
    * Gets awId
    *  aw id
    *
    * @return string|null
    */
    public function getAwId()
    {
        return $this->container['awId'];
    }

    /**
    * Sets awId
    *
    * @param string|null $awId aw id
    *
    * @return $this
    */
    public function setAwId($awId)
    {
        $this->container['awId'] = $awId;
        return $this;
    }

    /**
    * Gets awType
    *  aw类型 0-setup;1-test;2-teardown
    *
    * @return int|null
    */
    public function getAwType()
    {
        return $this->container['awType'];
    }

    /**
    * Sets awType
    *
    * @param int|null $awType aw类型 0-setup;1-test;2-teardown
    *
    * @return $this
    */
    public function setAwType($awType)
    {
        $this->container['awType'] = $awType;
        return $this;
    }

    /**
    * Gets basicAw
    *  basicAw
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAw|null
    */
    public function getBasicAw()
    {
        return $this->container['basicAw'];
    }

    /**
    * Sets basicAw
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAw|null $basicAw basicAw
    *
    * @return $this
    */
    public function setBasicAw($basicAw)
    {
        $this->container['basicAw'] = $basicAw;
        return $this;
    }

    /**
    * Gets bodyParamType
    *  instance的参数body体类型：form/text
    *
    * @return string|null
    */
    public function getBodyParamType()
    {
        return $this->container['bodyParamType'];
    }

    /**
    * Sets bodyParamType
    *
    * @param string|null $bodyParamType instance的参数body体类型：form/text
    *
    * @return $this
    */
    public function setBodyParamType($bodyParamType)
    {
        $this->container['bodyParamType'] = $bodyParamType;
        return $this;
    }

    /**
    * Gets byOrder
    *  顺序
    *
    * @return int|null
    */
    public function getByOrder()
    {
        return $this->container['byOrder'];
    }

    /**
    * Sets byOrder
    *
    * @param int|null $byOrder 顺序
    *
    * @return $this
    */
    public function setByOrder($byOrder)
    {
        $this->container['byOrder'] = $byOrder;
        return $this;
    }

    /**
    * Gets changeSign
    *  change sign
    *
    * @return int|null
    */
    public function getChangeSign()
    {
        return $this->container['changeSign'];
    }

    /**
    * Sets changeSign
    *
    * @param int|null $changeSign change sign
    *
    * @return $this
    */
    public function setChangeSign($changeSign)
    {
        $this->container['changeSign'] = $changeSign;
        return $this;
    }

    /**
    * Gets checkPointList
    *  检查点List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]|null
    */
    public function getCheckPointList()
    {
        return $this->container['checkPointList'];
    }

    /**
    * Sets checkPointList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]|null $checkPointList 检查点List
    *
    * @return $this
    */
    public function setCheckPointList($checkPointList)
    {
        $this->container['checkPointList'] = $checkPointList;
        return $this;
    }

    /**
    * Gets children
    *  aw实例
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null $children aw实例
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets conditionStatement
    *  条件语句
    *
    * @return string|null
    */
    public function getConditionStatement()
    {
        return $this->container['conditionStatement'];
    }

    /**
    * Sets conditionStatement
    *
    * @param string|null $conditionStatement 条件语句
    *
    * @return $this
    */
    public function setConditionStatement($conditionStatement)
    {
        $this->container['conditionStatement'] = $conditionStatement;
        return $this;
    }

    /**
    * Gets conditionType
    *  条件类型 0-not condition;1-if begin;2-if
    *
    * @return int|null
    */
    public function getConditionType()
    {
        return $this->container['conditionType'];
    }

    /**
    * Sets conditionType
    *
    * @param int|null $conditionType 条件类型 0-not condition;1-if begin;2-if
    *
    * @return $this
    */
    public function setConditionType($conditionType)
    {
        $this->container['conditionType'] = $conditionType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets createTimeString
    *  创建时间字符串
    *
    * @return string|null
    */
    public function getCreateTimeString()
    {
        return $this->container['createTimeString'];
    }

    /**
    * Sets createTimeString
    *
    * @param string|null $createTimeString 创建时间字符串
    *
    * @return $this
    */
    public function setCreateTimeString($createTimeString)
    {
        $this->container['createTimeString'] = $createTimeString;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets customHeader
    *  测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getCustomHeader()
    {
        return $this->container['customHeader'];
    }

    /**
    * Sets customHeader
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $customHeader 测试步骤自定义请求头List；后续自定义URL请求头不再使用该字段
    *
    * @return $this
    */
    public function setCustomHeader($customHeader)
    {
        $this->container['customHeader'] = $customHeader;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ErrorInfo|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ErrorInfo|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtraInfo|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtraInfo|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets fromOutside
    *  该aw是否来自外部工程 0-no;1-yes
    *
    * @return int|null
    */
    public function getFromOutside()
    {
        return $this->container['fromOutside'];
    }

    /**
    * Sets fromOutside
    *
    * @param int|null $fromOutside 该aw是否来自外部工程 0-no;1-yes
    *
    * @return $this
    */
    public function setFromOutside($fromOutside)
    {
        $this->container['fromOutside'] = $fromOutside;
        return $this;
    }

    /**
    * Gets hasLevel
    *  level
    *
    * @return int|null
    */
    public function getHasLevel()
    {
        return $this->container['hasLevel'];
    }

    /**
    * Sets hasLevel
    *
    * @param int|null $hasLevel level
    *
    * @return $this
    */
    public function setHasLevel($hasLevel)
    {
        $this->container['hasLevel'] = $hasLevel;
        return $this;
    }

    /**
    * Gets headerArray
    *  headerArray
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ArrayNode[]|null
    */
    public function getHeaderArray()
    {
        return $this->container['headerArray'];
    }

    /**
    * Sets headerArray
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ArrayNode[]|null $headerArray headerArray
    *
    * @return $this
    */
    public function setHeaderArray($headerArray)
    {
        $this->container['headerArray'] = $headerArray;
        return $this;
    }

    /**
    * Gets hisScript
    *  值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    *
    * @return string|null
    */
    public function getHisScript()
    {
        return $this->container['hisScript'];
    }

    /**
    * Sets hisScript
    *
    * @param string|null $hisScript 值不为null表示老的IF判断语句；值为null表示新的IF判断语句
    *
    * @return $this
    */
    public function setHisScript($hisScript)
    {
        $this->container['hisScript'] = $hisScript;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isBasic
    *  是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    *
    * @return int|null
    */
    public function getIsBasic()
    {
        return $this->container['isBasic'];
    }

    /**
    * Sets isBasic
    *
    * @param int|null $isBasic 是否模板类型测试步骤 0：自定义URL配置类型；1：模板类型测试步骤
    *
    * @return $this
    */
    public function setIsBasic($isBasic)
    {
        $this->container['isBasic'] = $isBasic;
        return $this;
    }

    /**
    * Gets isContractAw
    *  是否是契约AW 0-否；1-yes
    *
    * @return int|null
    */
    public function getIsContractAw()
    {
        return $this->container['isContractAw'];
    }

    /**
    * Sets isContractAw
    *
    * @param int|null $isContractAw 是否是契约AW 0-否；1-yes
    *
    * @return $this
    */
    public function setIsContractAw($isContractAw)
    {
        $this->container['isContractAw'] = $isContractAw;
        return $this;
    }

    /**
    * Gets isDisabled
    *  是否被禁用 0-否；1-yes
    *
    * @return int|null
    */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
    * Sets isDisabled
    *
    * @param int|null $isDisabled 是否被禁用 0-否；1-yes
    *
    * @return $this
    */
    public function setIsDisabled($isDisabled)
    {
        $this->container['isDisabled'] = $isDisabled;
        return $this;
    }

    /**
    * Gets isSectestAw
    *  是否是安全测试aw
    *
    * @return int|null
    */
    public function getIsSectestAw()
    {
        return $this->container['isSectestAw'];
    }

    /**
    * Sets isSectestAw
    *
    * @param int|null $isSectestAw 是否是安全测试aw
    *
    * @return $this
    */
    public function setIsSectestAw($isSectestAw)
    {
        $this->container['isSectestAw'] = $isSectestAw;
        return $this;
    }

    /**
    * Gets level
    *  用例级别
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 用例级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets paramDependent
    *  参数依赖
    *
    * @return string|null
    */
    public function getParamDependent()
    {
        return $this->container['paramDependent'];
    }

    /**
    * Sets paramDependent
    *
    * @param string|null $paramDependent 参数依赖
    *
    * @return $this
    */
    public function setParamDependent($paramDependent)
    {
        $this->container['paramDependent'] = $paramDependent;
        return $this;
    }

    /**
    * Gets paramDependentEnabled
    *  是否启用参数依赖
    *
    * @return int|null
    */
    public function getParamDependentEnabled()
    {
        return $this->container['paramDependentEnabled'];
    }

    /**
    * Sets paramDependentEnabled
    *
    * @param int|null $paramDependentEnabled 是否启用参数依赖
    *
    * @return $this
    */
    public function setParamDependentEnabled($paramDependentEnabled)
    {
        $this->container['paramDependentEnabled'] = $paramDependentEnabled;
        return $this;
    }

    /**
    * Gets paramTypeAndValue
    *  参数类型和参数值对应List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getParamTypeAndValue()
    {
        return $this->container['paramTypeAndValue'];
    }

    /**
    * Sets paramTypeAndValue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $paramTypeAndValue 参数类型和参数值对应List
    *
    * @return $this
    */
    public function setParamTypeAndValue($paramTypeAndValue)
    {
        $this->container['paramTypeAndValue'] = $paramTypeAndValue;
        return $this;
    }

    /**
    * Gets projectId
    *  工程id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 工程id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets region
    *  区域名称
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets relation
    *  awId层级关系
    *
    * @return string|null
    */
    public function getRelation()
    {
        return $this->container['relation'];
    }

    /**
    * Sets relation
    *
    * @param string|null $relation awId层级关系
    *
    * @return $this
    */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;
        return $this;
    }

    /**
    * Gets relationId
    *  relation id
    *
    * @return string|null
    */
    public function getRelationId()
    {
        return $this->container['relationId'];
    }

    /**
    * Sets relationId
    *
    * @param string|null $relationId relation id
    *
    * @return $this
    */
    public function setRelationId($relationId)
    {
        $this->container['relationId'] = $relationId;
        return $this;
    }

    /**
    * Gets relationType
    *  映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    *
    * @return int|null
    */
    public function getRelationType()
    {
        return $this->container['relationType'];
    }

    /**
    * Sets relationType
    *
    * @param int|null $relationType 映射类型 1-反向删除映射;2-用例自动添加的方向删除步骤
    *
    * @return $this
    */
    public function setRelationType($relationType)
    {
        $this->container['relationType'] = $relationType;
        return $this;
    }

    /**
    * Gets retryInterval
    *  重试间隔时间 (ms) 为空表示不等待
    *
    * @return string|null
    */
    public function getRetryInterval()
    {
        return $this->container['retryInterval'];
    }

    /**
    * Sets retryInterval
    *
    * @param string|null $retryInterval 重试间隔时间 (ms) 为空表示不等待
    *
    * @return $this
    */
    public function setRetryInterval($retryInterval)
    {
        $this->container['retryInterval'] = $retryInterval;
        return $this;
    }

    /**
    * Gets retryTimes
    *  重试次数
    *
    * @return string|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param string|null $retryTimes 重试次数
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
        return $this;
    }

    /**
    * Gets scriptName
    *  获取脚本生成时，要使用的步骤名称
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName 获取脚本生成时，要使用的步骤名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets serviceAndStage
    *  aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    *
    * @return string|null
    */
    public function getServiceAndStage()
    {
        return $this->container['serviceAndStage'];
    }

    /**
    * Sets serviceAndStage
    *
    * @param string|null $serviceAndStage aw所来自工程的服务名和阶段名 fromOutside为1时该值有效
    *
    * @return $this
    */
    public function setServiceAndStage($serviceAndStage)
    {
        $this->container['serviceAndStage'] = $serviceAndStage;
        return $this;
    }

    /**
    * Gets specialType
    *  测试步骤来源
    *
    * @return int|null
    */
    public function getSpecialType()
    {
        return $this->container['specialType'];
    }

    /**
    * Sets specialType
    *
    * @param int|null $specialType 测试步骤来源
    *
    * @return $this
    */
    public function setSpecialType($specialType)
    {
        $this->container['specialType'] = $specialType;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeStamp
    *  更新时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp 更新时间戳
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeString
    *  更新时间字符串
    *
    * @return string|null
    */
    public function getUpdateTimeString()
    {
        return $this->container['updateTimeString'];
    }

    /**
    * Sets updateTimeString
    *
    * @param string|null $updateTimeString 更新时间字符串
    *
    * @return $this
    */
    public function setUpdateTimeString($updateTimeString)
    {
        $this->container['updateTimeString'] = $updateTimeString;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets userId
    *  user id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId user id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets variableList
    *  用例局部变量
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getVariableList()
    {
        return $this->container['variableList'];
    }

    /**
    * Sets variableList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $variableList 用例局部变量
    *
    * @return $this
    */
    public function setVariableList($variableList)
    {
        $this->container['variableList'] = $variableList;
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

