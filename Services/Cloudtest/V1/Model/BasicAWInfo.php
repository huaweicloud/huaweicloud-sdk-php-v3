<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicAWInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicAWInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * awCode  aw代码, hasCode为1时有效
    * awDescription  模板描述
    * awInsList  组合aw包含的aw实例信息，awType为2时该字段有效
    * awMark  aw标记 0-normal；1-new；2-update 3-delete
    * awOperationid  接口的operationId
    * awTags  接口的tags
    * awType  AW类型1-普通aw,2-组合aw,3-导入aw
    * awUniqueid  awOperationId_awTags的拼接
    * byOrder  顺序
    * cataType  目录层级
    * childList  新增childList以支持嵌套层级结构
    * createTime  创建时间
    * createTimeStamp  时间戳字段
    * createTimeString  时间字符串
    * createUser  创建人
    * createUserId  创建人id
    * customAwLibs  aw库的文件列表
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待
    * dftRetryTimes  重试次数
    * dftVariableList  默认变量信息List
    * extraInfo  extraInfo
    * groupName  组名
    * hasCode  是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    * id  id
    * importPackage  导入的包
    * interfaceLabel  接口的x-extend
    * isFavorite  是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    * isFolder  判断是否为文件夹的标识
    * keywordVariableValue  关键字局部变量
    * method  方法
    * name  名称
    * nameView  aw在页面上显示的名字
    * originProject  源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    * outputParamList  组合aw的输出参数信息，该字段不存数据库，实时获取
    * pageNo  当前页数
    * pageSize  每页条数
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    * parentId  aw目录父编号
    * projectId  aw目录父编号
    * protocolType  协议类型 (http/dsf/other)
    * publicAwLib  publicAwLib
    * publicAwLibId  所属公共aw库Id
    * region  区域名称
    * returnType  返回类型
    * rootId  root id
    * source  来源
    * specialType  特殊AW类型 0-common,10-header,1-beforeHeader
    * tmssCaseNumber  关键字管理的用例编号
    * tmssCaseId  关键字aw管理的用例ID
    * totalPage  总页数
    * totalSize  总条数
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新字符串
    * updateUser  更新人
    * warningMsg  警告信息
    * yamlName  所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'awCode' => 'string',
            'awDescription' => 'string',
            'awInsList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstanceRes[]',
            'awMark' => 'int',
            'awOperationid' => 'string',
            'awTags' => 'string',
            'awType' => 'int',
            'awUniqueid' => 'string',
            'byOrder' => 'int',
            'cataType' => 'int',
            'childList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAWInfo[]',
            'createTime' => 'string',
            'createTimeStamp' => 'int',
            'createTimeString' => 'string',
            'createUser' => 'string',
            'createUserId' => 'string',
            'customAwLibs' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\UploadFileRes[]',
            'deleteTime' => 'string',
            'deleteUser' => 'string',
            'description' => 'string',
            'dftCheckPointList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]',
            'dftCustomHeader' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'dftRetryInterval' => 'string',
            'dftRetryTimes' => 'string',
            'dftVariableList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'extraInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\JsonNode',
            'groupName' => 'string',
            'hasCode' => 'int',
            'id' => 'string',
            'importPackage' => 'string[]',
            'interfaceLabel' => 'string',
            'isFavorite' => 'int',
            'isFolder' => 'string',
            'keywordVariableValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'method' => 'string',
            'name' => 'string',
            'nameView' => 'string',
            'originProject' => 'string',
            'outputParamList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'paramTypeAndDftValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'parentId' => 'string',
            'projectId' => 'string',
            'protocolType' => 'string',
            'publicAwLib' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\PublicAwLibRes',
            'publicAwLibId' => 'string',
            'region' => 'string',
            'returnType' => 'string',
            'rootId' => 'string',
            'source' => 'string',
            'specialType' => 'int',
            'tmssCaseNumber' => 'string',
            'tmssCaseId' => 'string',
            'totalPage' => 'int',
            'totalSize' => 'int',
            'updateTime' => 'string',
            'updateTimeStamp' => 'int',
            'updateTimeString' => 'string',
            'updateUser' => 'string',
            'warningMsg' => 'string',
            'yamlName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * awCode  aw代码, hasCode为1时有效
    * awDescription  模板描述
    * awInsList  组合aw包含的aw实例信息，awType为2时该字段有效
    * awMark  aw标记 0-normal；1-new；2-update 3-delete
    * awOperationid  接口的operationId
    * awTags  接口的tags
    * awType  AW类型1-普通aw,2-组合aw,3-导入aw
    * awUniqueid  awOperationId_awTags的拼接
    * byOrder  顺序
    * cataType  目录层级
    * childList  新增childList以支持嵌套层级结构
    * createTime  创建时间
    * createTimeStamp  时间戳字段
    * createTimeString  时间字符串
    * createUser  创建人
    * createUserId  创建人id
    * customAwLibs  aw库的文件列表
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待
    * dftRetryTimes  重试次数
    * dftVariableList  默认变量信息List
    * extraInfo  extraInfo
    * groupName  组名
    * hasCode  是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    * id  id
    * importPackage  导入的包
    * interfaceLabel  接口的x-extend
    * isFavorite  是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    * isFolder  判断是否为文件夹的标识
    * keywordVariableValue  关键字局部变量
    * method  方法
    * name  名称
    * nameView  aw在页面上显示的名字
    * originProject  源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    * outputParamList  组合aw的输出参数信息，该字段不存数据库，实时获取
    * pageNo  当前页数
    * pageSize  每页条数
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    * parentId  aw目录父编号
    * projectId  aw目录父编号
    * protocolType  协议类型 (http/dsf/other)
    * publicAwLib  publicAwLib
    * publicAwLibId  所属公共aw库Id
    * region  区域名称
    * returnType  返回类型
    * rootId  root id
    * source  来源
    * specialType  特殊AW类型 0-common,10-header,1-beforeHeader
    * tmssCaseNumber  关键字管理的用例编号
    * tmssCaseId  关键字aw管理的用例ID
    * totalPage  总页数
    * totalSize  总条数
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新字符串
    * updateUser  更新人
    * warningMsg  警告信息
    * yamlName  所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'awCode' => null,
        'awDescription' => null,
        'awInsList' => null,
        'awMark' => 'int32',
        'awOperationid' => null,
        'awTags' => null,
        'awType' => 'int32',
        'awUniqueid' => null,
        'byOrder' => 'int32',
        'cataType' => 'int32',
        'childList' => null,
        'createTime' => null,
        'createTimeStamp' => 'int64',
        'createTimeString' => null,
        'createUser' => null,
        'createUserId' => null,
        'customAwLibs' => null,
        'deleteTime' => null,
        'deleteUser' => null,
        'description' => null,
        'dftCheckPointList' => null,
        'dftCustomHeader' => null,
        'dftRetryInterval' => null,
        'dftRetryTimes' => null,
        'dftVariableList' => null,
        'extraInfo' => null,
        'groupName' => null,
        'hasCode' => 'int32',
        'id' => null,
        'importPackage' => null,
        'interfaceLabel' => null,
        'isFavorite' => 'int32',
        'isFolder' => null,
        'keywordVariableValue' => null,
        'method' => null,
        'name' => null,
        'nameView' => null,
        'originProject' => null,
        'outputParamList' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'paramTypeAndDftValue' => null,
        'parentId' => null,
        'projectId' => null,
        'protocolType' => null,
        'publicAwLib' => null,
        'publicAwLibId' => null,
        'region' => null,
        'returnType' => null,
        'rootId' => null,
        'source' => null,
        'specialType' => 'int32',
        'tmssCaseNumber' => null,
        'tmssCaseId' => null,
        'totalPage' => 'int32',
        'totalSize' => 'int32',
        'updateTime' => null,
        'updateTimeStamp' => 'int64',
        'updateTimeString' => null,
        'updateUser' => null,
        'warningMsg' => null,
        'yamlName' => null
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
    * awCode  aw代码, hasCode为1时有效
    * awDescription  模板描述
    * awInsList  组合aw包含的aw实例信息，awType为2时该字段有效
    * awMark  aw标记 0-normal；1-new；2-update 3-delete
    * awOperationid  接口的operationId
    * awTags  接口的tags
    * awType  AW类型1-普通aw,2-组合aw,3-导入aw
    * awUniqueid  awOperationId_awTags的拼接
    * byOrder  顺序
    * cataType  目录层级
    * childList  新增childList以支持嵌套层级结构
    * createTime  创建时间
    * createTimeStamp  时间戳字段
    * createTimeString  时间字符串
    * createUser  创建人
    * createUserId  创建人id
    * customAwLibs  aw库的文件列表
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待
    * dftRetryTimes  重试次数
    * dftVariableList  默认变量信息List
    * extraInfo  extraInfo
    * groupName  组名
    * hasCode  是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    * id  id
    * importPackage  导入的包
    * interfaceLabel  接口的x-extend
    * isFavorite  是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    * isFolder  判断是否为文件夹的标识
    * keywordVariableValue  关键字局部变量
    * method  方法
    * name  名称
    * nameView  aw在页面上显示的名字
    * originProject  源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    * outputParamList  组合aw的输出参数信息，该字段不存数据库，实时获取
    * pageNo  当前页数
    * pageSize  每页条数
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    * parentId  aw目录父编号
    * projectId  aw目录父编号
    * protocolType  协议类型 (http/dsf/other)
    * publicAwLib  publicAwLib
    * publicAwLibId  所属公共aw库Id
    * region  区域名称
    * returnType  返回类型
    * rootId  root id
    * source  来源
    * specialType  特殊AW类型 0-common,10-header,1-beforeHeader
    * tmssCaseNumber  关键字管理的用例编号
    * tmssCaseId  关键字aw管理的用例ID
    * totalPage  总页数
    * totalSize  总条数
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新字符串
    * updateUser  更新人
    * warningMsg  警告信息
    * yamlName  所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'awCode' => 'aw_code',
            'awDescription' => 'aw_description',
            'awInsList' => 'aw_ins_list',
            'awMark' => 'aw_mark',
            'awOperationid' => 'aw_operationid',
            'awTags' => 'aw_tags',
            'awType' => 'aw_type',
            'awUniqueid' => 'aw_uniqueid',
            'byOrder' => 'by_order',
            'cataType' => 'cata_type',
            'childList' => 'child_list',
            'createTime' => 'create_time',
            'createTimeStamp' => 'create_time_stamp',
            'createTimeString' => 'create_time_string',
            'createUser' => 'create_user',
            'createUserId' => 'create_user_id',
            'customAwLibs' => 'custom_aw_libs',
            'deleteTime' => 'delete_time',
            'deleteUser' => 'delete_user',
            'description' => 'description',
            'dftCheckPointList' => 'dft_check_point_list',
            'dftCustomHeader' => 'dft_custom_header',
            'dftRetryInterval' => 'dft_retry_interval',
            'dftRetryTimes' => 'dft_retry_times',
            'dftVariableList' => 'dft_variable_list',
            'extraInfo' => 'extra_info',
            'groupName' => 'group_name',
            'hasCode' => 'has_code',
            'id' => 'id',
            'importPackage' => 'import_package',
            'interfaceLabel' => 'interface_label',
            'isFavorite' => 'is_favorite',
            'isFolder' => 'is_folder',
            'keywordVariableValue' => 'keyword_variable_value',
            'method' => 'method',
            'name' => 'name',
            'nameView' => 'nameView',
            'originProject' => 'origin_project',
            'outputParamList' => 'output_param_list',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'paramTypeAndDftValue' => 'param_type_and_dft_value',
            'parentId' => 'parent_id',
            'projectId' => 'project_id',
            'protocolType' => 'protocol_type',
            'publicAwLib' => 'public_aw_lib',
            'publicAwLibId' => 'public_aw_lib_id',
            'region' => 'region',
            'returnType' => 'return_type',
            'rootId' => 'root_id',
            'source' => 'source',
            'specialType' => 'special_type',
            'tmssCaseNumber' => 'tmssCaseNumber',
            'tmssCaseId' => 'tmss_case_id',
            'totalPage' => 'total_page',
            'totalSize' => 'total_size',
            'updateTime' => 'update_time',
            'updateTimeStamp' => 'update_time_stamp',
            'updateTimeString' => 'update_time_string',
            'updateUser' => 'update_user',
            'warningMsg' => 'warningMsg',
            'yamlName' => 'yamlName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * awCode  aw代码, hasCode为1时有效
    * awDescription  模板描述
    * awInsList  组合aw包含的aw实例信息，awType为2时该字段有效
    * awMark  aw标记 0-normal；1-new；2-update 3-delete
    * awOperationid  接口的operationId
    * awTags  接口的tags
    * awType  AW类型1-普通aw,2-组合aw,3-导入aw
    * awUniqueid  awOperationId_awTags的拼接
    * byOrder  顺序
    * cataType  目录层级
    * childList  新增childList以支持嵌套层级结构
    * createTime  创建时间
    * createTimeStamp  时间戳字段
    * createTimeString  时间字符串
    * createUser  创建人
    * createUserId  创建人id
    * customAwLibs  aw库的文件列表
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待
    * dftRetryTimes  重试次数
    * dftVariableList  默认变量信息List
    * extraInfo  extraInfo
    * groupName  组名
    * hasCode  是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    * id  id
    * importPackage  导入的包
    * interfaceLabel  接口的x-extend
    * isFavorite  是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    * isFolder  判断是否为文件夹的标识
    * keywordVariableValue  关键字局部变量
    * method  方法
    * name  名称
    * nameView  aw在页面上显示的名字
    * originProject  源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    * outputParamList  组合aw的输出参数信息，该字段不存数据库，实时获取
    * pageNo  当前页数
    * pageSize  每页条数
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    * parentId  aw目录父编号
    * projectId  aw目录父编号
    * protocolType  协议类型 (http/dsf/other)
    * publicAwLib  publicAwLib
    * publicAwLibId  所属公共aw库Id
    * region  区域名称
    * returnType  返回类型
    * rootId  root id
    * source  来源
    * specialType  特殊AW类型 0-common,10-header,1-beforeHeader
    * tmssCaseNumber  关键字管理的用例编号
    * tmssCaseId  关键字aw管理的用例ID
    * totalPage  总页数
    * totalSize  总条数
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新字符串
    * updateUser  更新人
    * warningMsg  警告信息
    * yamlName  所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @var string[]
    */
    protected static $setters = [
            'awCode' => 'setAwCode',
            'awDescription' => 'setAwDescription',
            'awInsList' => 'setAwInsList',
            'awMark' => 'setAwMark',
            'awOperationid' => 'setAwOperationid',
            'awTags' => 'setAwTags',
            'awType' => 'setAwType',
            'awUniqueid' => 'setAwUniqueid',
            'byOrder' => 'setByOrder',
            'cataType' => 'setCataType',
            'childList' => 'setChildList',
            'createTime' => 'setCreateTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'createTimeString' => 'setCreateTimeString',
            'createUser' => 'setCreateUser',
            'createUserId' => 'setCreateUserId',
            'customAwLibs' => 'setCustomAwLibs',
            'deleteTime' => 'setDeleteTime',
            'deleteUser' => 'setDeleteUser',
            'description' => 'setDescription',
            'dftCheckPointList' => 'setDftCheckPointList',
            'dftCustomHeader' => 'setDftCustomHeader',
            'dftRetryInterval' => 'setDftRetryInterval',
            'dftRetryTimes' => 'setDftRetryTimes',
            'dftVariableList' => 'setDftVariableList',
            'extraInfo' => 'setExtraInfo',
            'groupName' => 'setGroupName',
            'hasCode' => 'setHasCode',
            'id' => 'setId',
            'importPackage' => 'setImportPackage',
            'interfaceLabel' => 'setInterfaceLabel',
            'isFavorite' => 'setIsFavorite',
            'isFolder' => 'setIsFolder',
            'keywordVariableValue' => 'setKeywordVariableValue',
            'method' => 'setMethod',
            'name' => 'setName',
            'nameView' => 'setNameView',
            'originProject' => 'setOriginProject',
            'outputParamList' => 'setOutputParamList',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'paramTypeAndDftValue' => 'setParamTypeAndDftValue',
            'parentId' => 'setParentId',
            'projectId' => 'setProjectId',
            'protocolType' => 'setProtocolType',
            'publicAwLib' => 'setPublicAwLib',
            'publicAwLibId' => 'setPublicAwLibId',
            'region' => 'setRegion',
            'returnType' => 'setReturnType',
            'rootId' => 'setRootId',
            'source' => 'setSource',
            'specialType' => 'setSpecialType',
            'tmssCaseNumber' => 'setTmssCaseNumber',
            'tmssCaseId' => 'setTmssCaseId',
            'totalPage' => 'setTotalPage',
            'totalSize' => 'setTotalSize',
            'updateTime' => 'setUpdateTime',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'updateTimeString' => 'setUpdateTimeString',
            'updateUser' => 'setUpdateUser',
            'warningMsg' => 'setWarningMsg',
            'yamlName' => 'setYamlName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * awCode  aw代码, hasCode为1时有效
    * awDescription  模板描述
    * awInsList  组合aw包含的aw实例信息，awType为2时该字段有效
    * awMark  aw标记 0-normal；1-new；2-update 3-delete
    * awOperationid  接口的operationId
    * awTags  接口的tags
    * awType  AW类型1-普通aw,2-组合aw,3-导入aw
    * awUniqueid  awOperationId_awTags的拼接
    * byOrder  顺序
    * cataType  目录层级
    * childList  新增childList以支持嵌套层级结构
    * createTime  创建时间
    * createTimeStamp  时间戳字段
    * createTimeString  时间字符串
    * createUser  创建人
    * createUserId  创建人id
    * customAwLibs  aw库的文件列表
    * deleteTime  更新时间
    * deleteUser  删除人
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待
    * dftRetryTimes  重试次数
    * dftVariableList  默认变量信息List
    * extraInfo  extraInfo
    * groupName  组名
    * hasCode  是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    * id  id
    * importPackage  导入的包
    * interfaceLabel  接口的x-extend
    * isFavorite  是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    * isFolder  判断是否为文件夹的标识
    * keywordVariableValue  关键字局部变量
    * method  方法
    * name  名称
    * nameView  aw在页面上显示的名字
    * originProject  源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    * outputParamList  组合aw的输出参数信息，该字段不存数据库，实时获取
    * pageNo  当前页数
    * pageSize  每页条数
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    * parentId  aw目录父编号
    * projectId  aw目录父编号
    * protocolType  协议类型 (http/dsf/other)
    * publicAwLib  publicAwLib
    * publicAwLibId  所属公共aw库Id
    * region  区域名称
    * returnType  返回类型
    * rootId  root id
    * source  来源
    * specialType  特殊AW类型 0-common,10-header,1-beforeHeader
    * tmssCaseNumber  关键字管理的用例编号
    * tmssCaseId  关键字aw管理的用例ID
    * totalPage  总页数
    * totalSize  总条数
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新字符串
    * updateUser  更新人
    * warningMsg  警告信息
    * yamlName  所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @var string[]
    */
    protected static $getters = [
            'awCode' => 'getAwCode',
            'awDescription' => 'getAwDescription',
            'awInsList' => 'getAwInsList',
            'awMark' => 'getAwMark',
            'awOperationid' => 'getAwOperationid',
            'awTags' => 'getAwTags',
            'awType' => 'getAwType',
            'awUniqueid' => 'getAwUniqueid',
            'byOrder' => 'getByOrder',
            'cataType' => 'getCataType',
            'childList' => 'getChildList',
            'createTime' => 'getCreateTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'createTimeString' => 'getCreateTimeString',
            'createUser' => 'getCreateUser',
            'createUserId' => 'getCreateUserId',
            'customAwLibs' => 'getCustomAwLibs',
            'deleteTime' => 'getDeleteTime',
            'deleteUser' => 'getDeleteUser',
            'description' => 'getDescription',
            'dftCheckPointList' => 'getDftCheckPointList',
            'dftCustomHeader' => 'getDftCustomHeader',
            'dftRetryInterval' => 'getDftRetryInterval',
            'dftRetryTimes' => 'getDftRetryTimes',
            'dftVariableList' => 'getDftVariableList',
            'extraInfo' => 'getExtraInfo',
            'groupName' => 'getGroupName',
            'hasCode' => 'getHasCode',
            'id' => 'getId',
            'importPackage' => 'getImportPackage',
            'interfaceLabel' => 'getInterfaceLabel',
            'isFavorite' => 'getIsFavorite',
            'isFolder' => 'getIsFolder',
            'keywordVariableValue' => 'getKeywordVariableValue',
            'method' => 'getMethod',
            'name' => 'getName',
            'nameView' => 'getNameView',
            'originProject' => 'getOriginProject',
            'outputParamList' => 'getOutputParamList',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'paramTypeAndDftValue' => 'getParamTypeAndDftValue',
            'parentId' => 'getParentId',
            'projectId' => 'getProjectId',
            'protocolType' => 'getProtocolType',
            'publicAwLib' => 'getPublicAwLib',
            'publicAwLibId' => 'getPublicAwLibId',
            'region' => 'getRegion',
            'returnType' => 'getReturnType',
            'rootId' => 'getRootId',
            'source' => 'getSource',
            'specialType' => 'getSpecialType',
            'tmssCaseNumber' => 'getTmssCaseNumber',
            'tmssCaseId' => 'getTmssCaseId',
            'totalPage' => 'getTotalPage',
            'totalSize' => 'getTotalSize',
            'updateTime' => 'getUpdateTime',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'updateTimeString' => 'getUpdateTimeString',
            'updateUser' => 'getUpdateUser',
            'warningMsg' => 'getWarningMsg',
            'yamlName' => 'getYamlName'
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
        $this->container['awCode'] = isset($data['awCode']) ? $data['awCode'] : null;
        $this->container['awDescription'] = isset($data['awDescription']) ? $data['awDescription'] : null;
        $this->container['awInsList'] = isset($data['awInsList']) ? $data['awInsList'] : null;
        $this->container['awMark'] = isset($data['awMark']) ? $data['awMark'] : null;
        $this->container['awOperationid'] = isset($data['awOperationid']) ? $data['awOperationid'] : null;
        $this->container['awTags'] = isset($data['awTags']) ? $data['awTags'] : null;
        $this->container['awType'] = isset($data['awType']) ? $data['awType'] : null;
        $this->container['awUniqueid'] = isset($data['awUniqueid']) ? $data['awUniqueid'] : null;
        $this->container['byOrder'] = isset($data['byOrder']) ? $data['byOrder'] : null;
        $this->container['cataType'] = isset($data['cataType']) ? $data['cataType'] : null;
        $this->container['childList'] = isset($data['childList']) ? $data['childList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['createTimeString'] = isset($data['createTimeString']) ? $data['createTimeString'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['customAwLibs'] = isset($data['customAwLibs']) ? $data['customAwLibs'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['deleteUser'] = isset($data['deleteUser']) ? $data['deleteUser'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dftCheckPointList'] = isset($data['dftCheckPointList']) ? $data['dftCheckPointList'] : null;
        $this->container['dftCustomHeader'] = isset($data['dftCustomHeader']) ? $data['dftCustomHeader'] : null;
        $this->container['dftRetryInterval'] = isset($data['dftRetryInterval']) ? $data['dftRetryInterval'] : null;
        $this->container['dftRetryTimes'] = isset($data['dftRetryTimes']) ? $data['dftRetryTimes'] : null;
        $this->container['dftVariableList'] = isset($data['dftVariableList']) ? $data['dftVariableList'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hasCode'] = isset($data['hasCode']) ? $data['hasCode'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['importPackage'] = isset($data['importPackage']) ? $data['importPackage'] : null;
        $this->container['interfaceLabel'] = isset($data['interfaceLabel']) ? $data['interfaceLabel'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['isFolder'] = isset($data['isFolder']) ? $data['isFolder'] : null;
        $this->container['keywordVariableValue'] = isset($data['keywordVariableValue']) ? $data['keywordVariableValue'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameView'] = isset($data['nameView']) ? $data['nameView'] : null;
        $this->container['originProject'] = isset($data['originProject']) ? $data['originProject'] : null;
        $this->container['outputParamList'] = isset($data['outputParamList']) ? $data['outputParamList'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['paramTypeAndDftValue'] = isset($data['paramTypeAndDftValue']) ? $data['paramTypeAndDftValue'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['publicAwLib'] = isset($data['publicAwLib']) ? $data['publicAwLib'] : null;
        $this->container['publicAwLibId'] = isset($data['publicAwLibId']) ? $data['publicAwLibId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['returnType'] = isset($data['returnType']) ? $data['returnType'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['specialType'] = isset($data['specialType']) ? $data['specialType'] : null;
        $this->container['tmssCaseNumber'] = isset($data['tmssCaseNumber']) ? $data['tmssCaseNumber'] : null;
        $this->container['tmssCaseId'] = isset($data['tmssCaseId']) ? $data['tmssCaseId'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['updateTimeString'] = isset($data['updateTimeString']) ? $data['updateTimeString'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['warningMsg'] = isset($data['warningMsg']) ? $data['warningMsg'] : null;
        $this->container['yamlName'] = isset($data['yamlName']) ? $data['yamlName'] : null;
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
    * Gets awCode
    *  aw代码, hasCode为1时有效
    *
    * @return string|null
    */
    public function getAwCode()
    {
        return $this->container['awCode'];
    }

    /**
    * Sets awCode
    *
    * @param string|null $awCode aw代码, hasCode为1时有效
    *
    * @return $this
    */
    public function setAwCode($awCode)
    {
        $this->container['awCode'] = $awCode;
        return $this;
    }

    /**
    * Gets awDescription
    *  模板描述
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
    * @param string|null $awDescription 模板描述
    *
    * @return $this
    */
    public function setAwDescription($awDescription)
    {
        $this->container['awDescription'] = $awDescription;
        return $this;
    }

    /**
    * Gets awInsList
    *  组合aw包含的aw实例信息，awType为2时该字段有效
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstanceRes[]|null
    */
    public function getAwInsList()
    {
        return $this->container['awInsList'];
    }

    /**
    * Sets awInsList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstanceRes[]|null $awInsList 组合aw包含的aw实例信息，awType为2时该字段有效
    *
    * @return $this
    */
    public function setAwInsList($awInsList)
    {
        $this->container['awInsList'] = $awInsList;
        return $this;
    }

    /**
    * Gets awMark
    *  aw标记 0-normal；1-new；2-update 3-delete
    *
    * @return int|null
    */
    public function getAwMark()
    {
        return $this->container['awMark'];
    }

    /**
    * Sets awMark
    *
    * @param int|null $awMark aw标记 0-normal；1-new；2-update 3-delete
    *
    * @return $this
    */
    public function setAwMark($awMark)
    {
        $this->container['awMark'] = $awMark;
        return $this;
    }

    /**
    * Gets awOperationid
    *  接口的operationId
    *
    * @return string|null
    */
    public function getAwOperationid()
    {
        return $this->container['awOperationid'];
    }

    /**
    * Sets awOperationid
    *
    * @param string|null $awOperationid 接口的operationId
    *
    * @return $this
    */
    public function setAwOperationid($awOperationid)
    {
        $this->container['awOperationid'] = $awOperationid;
        return $this;
    }

    /**
    * Gets awTags
    *  接口的tags
    *
    * @return string|null
    */
    public function getAwTags()
    {
        return $this->container['awTags'];
    }

    /**
    * Sets awTags
    *
    * @param string|null $awTags 接口的tags
    *
    * @return $this
    */
    public function setAwTags($awTags)
    {
        $this->container['awTags'] = $awTags;
        return $this;
    }

    /**
    * Gets awType
    *  AW类型1-普通aw,2-组合aw,3-导入aw
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
    * @param int|null $awType AW类型1-普通aw,2-组合aw,3-导入aw
    *
    * @return $this
    */
    public function setAwType($awType)
    {
        $this->container['awType'] = $awType;
        return $this;
    }

    /**
    * Gets awUniqueid
    *  awOperationId_awTags的拼接
    *
    * @return string|null
    */
    public function getAwUniqueid()
    {
        return $this->container['awUniqueid'];
    }

    /**
    * Sets awUniqueid
    *
    * @param string|null $awUniqueid awOperationId_awTags的拼接
    *
    * @return $this
    */
    public function setAwUniqueid($awUniqueid)
    {
        $this->container['awUniqueid'] = $awUniqueid;
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
    * Gets cataType
    *  目录层级
    *
    * @return int|null
    */
    public function getCataType()
    {
        return $this->container['cataType'];
    }

    /**
    * Sets cataType
    *
    * @param int|null $cataType 目录层级
    *
    * @return $this
    */
    public function setCataType($cataType)
    {
        $this->container['cataType'] = $cataType;
        return $this;
    }

    /**
    * Gets childList
    *  新增childList以支持嵌套层级结构
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAWInfo[]|null
    */
    public function getChildList()
    {
        return $this->container['childList'];
    }

    /**
    * Sets childList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAWInfo[]|null $childList 新增childList以支持嵌套层级结构
    *
    * @return $this
    */
    public function setChildList($childList)
    {
        $this->container['childList'] = $childList;
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
    *  时间戳字段
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
    * @param int|null $createTimeStamp 时间戳字段
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
    *  时间字符串
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
    * @param string|null $createTimeString 时间字符串
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
    * Gets createUserId
    *  创建人id
    *
    * @return string|null
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string|null $createUserId 创建人id
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets customAwLibs
    *  aw库的文件列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\UploadFileRes[]|null
    */
    public function getCustomAwLibs()
    {
        return $this->container['customAwLibs'];
    }

    /**
    * Sets customAwLibs
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\UploadFileRes[]|null $customAwLibs aw库的文件列表
    *
    * @return $this
    */
    public function setCustomAwLibs($customAwLibs)
    {
        $this->container['customAwLibs'] = $customAwLibs;
        return $this;
    }

    /**
    * Gets deleteTime
    *  更新时间
    *
    * @return string|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param string|null $deleteTime 更新时间
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets deleteUser
    *  删除人
    *
    * @return string|null
    */
    public function getDeleteUser()
    {
        return $this->container['deleteUser'];
    }

    /**
    * Sets deleteUser
    *
    * @param string|null $deleteUser 删除人
    *
    * @return $this
    */
    public function setDeleteUser($deleteUser)
    {
        $this->container['deleteUser'] = $deleteUser;
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
    * Gets dftCheckPointList
    *  默认检查点List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]|null
    */
    public function getDftCheckPointList()
    {
        return $this->container['dftCheckPointList'];
    }

    /**
    * Sets dftCheckPointList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]|null $dftCheckPointList 默认检查点List
    *
    * @return $this
    */
    public function setDftCheckPointList($dftCheckPointList)
    {
        $this->container['dftCheckPointList'] = $dftCheckPointList;
        return $this;
    }

    /**
    * Gets dftCustomHeader
    *  默认请求头参数对象
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getDftCustomHeader()
    {
        return $this->container['dftCustomHeader'];
    }

    /**
    * Sets dftCustomHeader
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $dftCustomHeader 默认请求头参数对象
    *
    * @return $this
    */
    public function setDftCustomHeader($dftCustomHeader)
    {
        $this->container['dftCustomHeader'] = $dftCustomHeader;
        return $this;
    }

    /**
    * Gets dftRetryInterval
    *  重试间隔时间 (ms) 为空表示不等待
    *
    * @return string|null
    */
    public function getDftRetryInterval()
    {
        return $this->container['dftRetryInterval'];
    }

    /**
    * Sets dftRetryInterval
    *
    * @param string|null $dftRetryInterval 重试间隔时间 (ms) 为空表示不等待
    *
    * @return $this
    */
    public function setDftRetryInterval($dftRetryInterval)
    {
        $this->container['dftRetryInterval'] = $dftRetryInterval;
        return $this;
    }

    /**
    * Gets dftRetryTimes
    *  重试次数
    *
    * @return string|null
    */
    public function getDftRetryTimes()
    {
        return $this->container['dftRetryTimes'];
    }

    /**
    * Sets dftRetryTimes
    *
    * @param string|null $dftRetryTimes 重试次数
    *
    * @return $this
    */
    public function setDftRetryTimes($dftRetryTimes)
    {
        $this->container['dftRetryTimes'] = $dftRetryTimes;
        return $this;
    }

    /**
    * Gets dftVariableList
    *  默认变量信息List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getDftVariableList()
    {
        return $this->container['dftVariableList'];
    }

    /**
    * Sets dftVariableList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $dftVariableList 默认变量信息List
    *
    * @return $this
    */
    public function setDftVariableList($dftVariableList)
    {
        $this->container['dftVariableList'] = $dftVariableList;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\JsonNode|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\JsonNode|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets groupName
    *  组名
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets hasCode
    *  是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    *
    * @return int|null
    */
    public function getHasCode()
    {
        return $this->container['hasCode'];
    }

    /**
    * Sets hasCode
    *
    * @param int|null $hasCode 是否自带代码 0-不自带代码，该aw依赖source字段中的源；1-自带代码
    *
    * @return $this
    */
    public function setHasCode($hasCode)
    {
        $this->container['hasCode'] = $hasCode;
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
    * Gets importPackage
    *  导入的包
    *
    * @return string[]|null
    */
    public function getImportPackage()
    {
        return $this->container['importPackage'];
    }

    /**
    * Sets importPackage
    *
    * @param string[]|null $importPackage 导入的包
    *
    * @return $this
    */
    public function setImportPackage($importPackage)
    {
        $this->container['importPackage'] = $importPackage;
        return $this;
    }

    /**
    * Gets interfaceLabel
    *  接口的x-extend
    *
    * @return string|null
    */
    public function getInterfaceLabel()
    {
        return $this->container['interfaceLabel'];
    }

    /**
    * Sets interfaceLabel
    *
    * @param string|null $interfaceLabel 接口的x-extend
    *
    * @return $this
    */
    public function setInterfaceLabel($interfaceLabel)
    {
        $this->container['interfaceLabel'] = $interfaceLabel;
        return $this;
    }

    /**
    * Gets isFavorite
    *  是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    *
    * @return int|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param int|null $isFavorite 是否是当前工程的收藏aw，该字段不存数据库，每次获取时实时判断
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets isFolder
    *  判断是否为文件夹的标识
    *
    * @return string|null
    */
    public function getIsFolder()
    {
        return $this->container['isFolder'];
    }

    /**
    * Sets isFolder
    *
    * @param string|null $isFolder 判断是否为文件夹的标识
    *
    * @return $this
    */
    public function setIsFolder($isFolder)
    {
        $this->container['isFolder'] = $isFolder;
        return $this;
    }

    /**
    * Gets keywordVariableValue
    *  关键字局部变量
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getKeywordVariableValue()
    {
        return $this->container['keywordVariableValue'];
    }

    /**
    * Sets keywordVariableValue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $keywordVariableValue 关键字局部变量
    *
    * @return $this
    */
    public function setKeywordVariableValue($keywordVariableValue)
    {
        $this->container['keywordVariableValue'] = $keywordVariableValue;
        return $this;
    }

    /**
    * Gets method
    *  方法
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 方法
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
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
    * Gets nameView
    *  aw在页面上显示的名字
    *
    * @return string|null
    */
    public function getNameView()
    {
        return $this->container['nameView'];
    }

    /**
    * Sets nameView
    *
    * @param string|null $nameView aw在页面上显示的名字
    *
    * @return $this
    */
    public function setNameView($nameView)
    {
        $this->container['nameView'] = $nameView;
        return $this;
    }

    /**
    * Gets originProject
    *  源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    *
    * @return string|null
    */
    public function getOriginProject()
    {
        return $this->container['originProject'];
    }

    /**
    * Sets originProject
    *
    * @param string|null $originProject 源工程信息，如果该aw是从其他工程过来的(继承或者copy to local)
    *
    * @return $this
    */
    public function setOriginProject($originProject)
    {
        $this->container['originProject'] = $originProject;
        return $this;
    }

    /**
    * Gets outputParamList
    *  组合aw的输出参数信息，该字段不存数据库，实时获取
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getOutputParamList()
    {
        return $this->container['outputParamList'];
    }

    /**
    * Sets outputParamList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $outputParamList 组合aw的输出参数信息，该字段不存数据库，实时获取
    *
    * @return $this
    */
    public function setOutputParamList($outputParamList)
    {
        $this->container['outputParamList'] = $outputParamList;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets paramTypeAndDftValue
    *  参数类型和参数默认值对应List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getParamTypeAndDftValue()
    {
        return $this->container['paramTypeAndDftValue'];
    }

    /**
    * Sets paramTypeAndDftValue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $paramTypeAndDftValue 参数类型和参数默认值对应List
    *
    * @return $this
    */
    public function setParamTypeAndDftValue($paramTypeAndDftValue)
    {
        $this->container['paramTypeAndDftValue'] = $paramTypeAndDftValue;
        return $this;
    }

    /**
    * Gets parentId
    *  aw目录父编号
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId aw目录父编号
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets projectId
    *  aw目录父编号
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
    * @param string|null $projectId aw目录父编号
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protocolType
    *  协议类型 (http/dsf/other)
    *
    * @return string|null
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string|null $protocolType 协议类型 (http/dsf/other)
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
        return $this;
    }

    /**
    * Gets publicAwLib
    *  publicAwLib
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\PublicAwLibRes|null
    */
    public function getPublicAwLib()
    {
        return $this->container['publicAwLib'];
    }

    /**
    * Sets publicAwLib
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\PublicAwLibRes|null $publicAwLib publicAwLib
    *
    * @return $this
    */
    public function setPublicAwLib($publicAwLib)
    {
        $this->container['publicAwLib'] = $publicAwLib;
        return $this;
    }

    /**
    * Gets publicAwLibId
    *  所属公共aw库Id
    *
    * @return string|null
    */
    public function getPublicAwLibId()
    {
        return $this->container['publicAwLibId'];
    }

    /**
    * Sets publicAwLibId
    *
    * @param string|null $publicAwLibId 所属公共aw库Id
    *
    * @return $this
    */
    public function setPublicAwLibId($publicAwLibId)
    {
        $this->container['publicAwLibId'] = $publicAwLibId;
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
    * Gets returnType
    *  返回类型
    *
    * @return string|null
    */
    public function getReturnType()
    {
        return $this->container['returnType'];
    }

    /**
    * Sets returnType
    *
    * @param string|null $returnType 返回类型
    *
    * @return $this
    */
    public function setReturnType($returnType)
    {
        $this->container['returnType'] = $returnType;
        return $this;
    }

    /**
    * Gets rootId
    *  root id
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId root id
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets source
    *  来源
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets specialType
    *  特殊AW类型 0-common,10-header,1-beforeHeader
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
    * @param int|null $specialType 特殊AW类型 0-common,10-header,1-beforeHeader
    *
    * @return $this
    */
    public function setSpecialType($specialType)
    {
        $this->container['specialType'] = $specialType;
        return $this;
    }

    /**
    * Gets tmssCaseNumber
    *  关键字管理的用例编号
    *
    * @return string|null
    */
    public function getTmssCaseNumber()
    {
        return $this->container['tmssCaseNumber'];
    }

    /**
    * Sets tmssCaseNumber
    *
    * @param string|null $tmssCaseNumber 关键字管理的用例编号
    *
    * @return $this
    */
    public function setTmssCaseNumber($tmssCaseNumber)
    {
        $this->container['tmssCaseNumber'] = $tmssCaseNumber;
        return $this;
    }

    /**
    * Gets tmssCaseId
    *  关键字aw管理的用例ID
    *
    * @return string|null
    */
    public function getTmssCaseId()
    {
        return $this->container['tmssCaseId'];
    }

    /**
    * Sets tmssCaseId
    *
    * @param string|null $tmssCaseId 关键字aw管理的用例ID
    *
    * @return $this
    */
    public function setTmssCaseId($tmssCaseId)
    {
        $this->container['tmssCaseId'] = $tmssCaseId;
        return $this;
    }

    /**
    * Gets totalPage
    *  总页数
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总页数
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets totalSize
    *  总条数
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 总条数
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
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
    *  更新字符串
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
    * @param string|null $updateTimeString 更新字符串
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
    * Gets warningMsg
    *  警告信息
    *
    * @return string|null
    */
    public function getWarningMsg()
    {
        return $this->container['warningMsg'];
    }

    /**
    * Sets warningMsg
    *
    * @param string|null $warningMsg 警告信息
    *
    * @return $this
    */
    public function setWarningMsg($warningMsg)
    {
        $this->container['warningMsg'] = $warningMsg;
        return $this;
    }

    /**
    * Gets yamlName
    *  所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @return string|null
    */
    public function getYamlName()
    {
        return $this->container['yamlName'];
    }

    /**
    * Sets yamlName
    *
    * @param string|null $yamlName 所属yaml文件名称,该字段不存库，用来记录从哪个yaml文件导入
    *
    * @return $this
    */
    public function setYamlName($yamlName)
    {
        $this->container['yamlName'] = $yamlName;
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

