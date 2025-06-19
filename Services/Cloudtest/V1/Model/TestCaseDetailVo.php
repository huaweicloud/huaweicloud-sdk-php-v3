<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseDetailVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseDetailVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * preparation  前置条件
    * remark  备注
    * stage  测试阶段
    * activity  测试类型
    * keywords  关键词
    * market  apitest标记是否代码已提交
    * designer  设计者
    * tags  标签
    * executeParameter  执行参数
    * region  逻辑region
    * owner  处理人id，IteratorTestCase字段
    * issue  issue
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * caseType  用例类型
    * platformType  执行平台类型
    * serviceType  服务类型
    * serviceTypeName  服务类型名称
    * testType  测试类型
    * testTypeName  测试类型名称
    * designNote  设计描述
    * testStep  测试步骤
    * expectOutput  期望结果
    * envType  测试环境类型
    * exePlatform  执行平台
    * testcaseProject  测试工程
    * svnScriptPath  脚本路径
    * mapRestrict  约束条件
    * networkScriptName  网络脚本名
    * autoType  自动化类型，非自动化:0, 是自动化:1
    * toBeAutoExec  被自动化执行
    * lastResult  最后一次结果
    * lastResultUri  最后一次结果Uri
    * featureUri  目录Uri
    * featureName  目录名称
    * interfaceName  测试接口名
    * snpNo  网络问题ID
    * drRelationId  关联需求编号
    * issueName  需求名称
    * testBaseNum  测试基数
    * automaticallyExecuted  是否被自动化执行
    * firstExecuteTime  第一次执行时间
    * detectType  检测类型
    * executeParam  执行参数
    * testFeature  分析领域
    * isContractTestcase  是否是契约用例，0:表示非契约用例, 1：表示契约用例
    * timeCost  总共耗时
    * beAutoTypeTime  记录用例由非自动化变为自动化类型的时间
    * compareNumber  配对用例编号
    * sceneFlag  场景标识
    * baseFlag  场景标识
    * paraValidator  区别是否从yaml中生成的用例，默认false
    * knetNodeId  knet节点id
    * lastExeAuthor  最后一次执行用户
    * cloudCarrier  运营商
    * marketPlace  应用市场
    * testMindId  脑图id
    * testMindUrl  脑图url
    * commitUrl  git提交url
    * testPatternNumber  测试模式编号
    * testFactorNumber  测试因子编号
    * statusCode  状态Code
    * resultCode  结果Code
    * releaseId  迭代ID
    * labelId  标签ID
    * labels  用例标签名称列表
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * executeLatestTime  最后执行时间
    * executeDuration  执行时长
    * executeTimes  执行次数
    * isKeyword  是否关键用例
    * releaseDev  测试版本号
    * newCreated  是否用户新增用例
    * projectUuid  项目ID
    * creationVersionName  创建版本名称，原逻辑marshall添加字段
    * featurePath  特性路径，原逻辑marshall添加字段
    * testcaseUri  实体用例Uri，IteratorTestCase字段
    * ownerName  处理人名称
    * iteratorCaseUri  迭代用例Uri，IteratorTestCase字段
    * scriptLink  脚本链接scriptLink
    * customField1  自定义字段1
    * customField2  自定义字段2
    * customField3  自定义字段3
    * customField4  自定义字段4
    * customField5  自定义字段5
    * customField6  自定义字段6
    * customField7  自定义字段7
    * customField8  自定义字段8
    * customField9  自定义字段9
    * customField10  自定义字段10
    * customField11  自定义字段11
    * customField12  自定义字段12
    * customField13  自定义字段13
    * customField14  自定义字段14
    * customField15  自定义字段15
    * customField16  自定义字段16
    * customField17  自定义字段17
    * customField18  自定义字段18
    * customField19  自定义字段19
    * customField20  自定义字段20
    * customField21  自定义字段21
    * customField22  自定义字段22
    * customField23  自定义字段23
    * customField24  自定义字段24
    * customField25  自定义字段25
    * lastModifierName  更新人名称
    * versionName  迭代
    * steps  测试步骤
    * associateDefect  是否关联缺陷
    * associateIssue  是否关联需求
    * defectList  缺陷关联信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'type' => 'string',
            'author' => 'string',
            'name' => 'string',
            'rank' => 'int',
            'preparation' => 'string',
            'remark' => 'string',
            'stage' => 'string',
            'activity' => 'string',
            'keywords' => 'string',
            'market' => 'string',
            'designer' => 'string',
            'tags' => 'string',
            'executeParameter' => 'string',
            'region' => 'string',
            'owner' => 'string',
            'issue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleIssueVo',
            'lastModifier' => 'string',
            'lastModified' => '\DateTime',
            'lastModifiedTimestamp' => 'int',
            'lastChangeTime' => '\DateTime',
            'versionUri' => 'string',
            'originUri' => 'string',
            'parentUri' => 'string',
            'parentPath' => 'string',
            'creationVersionUri' => 'string',
            'creationDate' => '\DateTime',
            'creationDateTimestamp' => 'int',
            'authorName' => 'string',
            'comment' => 'string',
            'number' => 'string',
            'caseType' => 'int',
            'platformType' => 'int',
            'serviceType' => 'int',
            'serviceTypeName' => 'string',
            'testType' => 'int',
            'testTypeName' => 'string',
            'designNote' => 'string',
            'testStep' => 'string',
            'expectOutput' => 'string',
            'envType' => 'string',
            'exePlatform' => 'string',
            'testcaseProject' => 'string',
            'svnScriptPath' => 'string',
            'mapRestrict' => 'string',
            'networkScriptName' => 'string',
            'autoType' => 'int',
            'toBeAutoExec' => 'int',
            'lastResult' => 'string',
            'lastResultUri' => 'string',
            'featureUri' => 'string',
            'featureName' => 'string',
            'interfaceName' => 'string',
            'snpNo' => 'string',
            'drRelationId' => 'string',
            'issueName' => 'string',
            'testBaseNum' => 'string',
            'automaticallyExecuted' => 'int',
            'firstExecuteTime' => '\DateTime',
            'detectType' => 'string',
            'executeParam' => 'string',
            'testFeature' => 'string',
            'isContractTestcase' => 'int',
            'timeCost' => 'double',
            'beAutoTypeTime' => '\DateTime',
            'compareNumber' => 'string',
            'sceneFlag' => 'string',
            'baseFlag' => 'string',
            'paraValidator' => 'string',
            'knetNodeId' => 'string',
            'lastExeAuthor' => 'string',
            'cloudCarrier' => 'string',
            'marketPlace' => 'string',
            'testMindId' => 'string',
            'testMindUrl' => 'string',
            'commitUrl' => 'string',
            'testPatternNumber' => 'string',
            'testFactorNumber' => 'string',
            'statusCode' => 'string',
            'resultCode' => 'string',
            'releaseId' => 'string',
            'labelId' => 'string',
            'labels' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\LabelVo[]',
            'moduleId' => 'string',
            'moduleName' => 'string',
            'modulePath' => 'string',
            'modulePathName' => 'string',
            'executeLatestTime' => '\DateTime',
            'executeDuration' => 'string',
            'executeTimes' => 'int',
            'isKeyword' => 'int',
            'releaseDev' => 'string',
            'newCreated' => 'string',
            'projectUuid' => 'string',
            'creationVersionName' => 'string',
            'featurePath' => 'string',
            'testcaseUri' => 'string',
            'ownerName' => 'string',
            'iteratorCaseUri' => 'string',
            'scriptLink' => 'string',
            'customField1' => 'string',
            'customField2' => 'string',
            'customField3' => 'string',
            'customField4' => 'string',
            'customField5' => 'string',
            'customField6' => 'string',
            'customField7' => 'string',
            'customField8' => 'string',
            'customField9' => 'string',
            'customField10' => 'string',
            'customField11' => 'string',
            'customField12' => 'string',
            'customField13' => 'string',
            'customField14' => 'string',
            'customField15' => 'string',
            'customField16' => 'string',
            'customField17' => 'string',
            'customField18' => 'string',
            'customField19' => 'string',
            'customField20' => 'string',
            'customField21' => 'string',
            'customField22' => 'string',
            'customField23' => 'string',
            'customField24' => 'string',
            'customField25' => 'string',
            'lastModifierName' => 'string',
            'versionName' => 'string',
            'steps' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseStepVo[]',
            'associateDefect' => 'bool',
            'associateIssue' => 'bool',
            'defectList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * preparation  前置条件
    * remark  备注
    * stage  测试阶段
    * activity  测试类型
    * keywords  关键词
    * market  apitest标记是否代码已提交
    * designer  设计者
    * tags  标签
    * executeParameter  执行参数
    * region  逻辑region
    * owner  处理人id，IteratorTestCase字段
    * issue  issue
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * caseType  用例类型
    * platformType  执行平台类型
    * serviceType  服务类型
    * serviceTypeName  服务类型名称
    * testType  测试类型
    * testTypeName  测试类型名称
    * designNote  设计描述
    * testStep  测试步骤
    * expectOutput  期望结果
    * envType  测试环境类型
    * exePlatform  执行平台
    * testcaseProject  测试工程
    * svnScriptPath  脚本路径
    * mapRestrict  约束条件
    * networkScriptName  网络脚本名
    * autoType  自动化类型，非自动化:0, 是自动化:1
    * toBeAutoExec  被自动化执行
    * lastResult  最后一次结果
    * lastResultUri  最后一次结果Uri
    * featureUri  目录Uri
    * featureName  目录名称
    * interfaceName  测试接口名
    * snpNo  网络问题ID
    * drRelationId  关联需求编号
    * issueName  需求名称
    * testBaseNum  测试基数
    * automaticallyExecuted  是否被自动化执行
    * firstExecuteTime  第一次执行时间
    * detectType  检测类型
    * executeParam  执行参数
    * testFeature  分析领域
    * isContractTestcase  是否是契约用例，0:表示非契约用例, 1：表示契约用例
    * timeCost  总共耗时
    * beAutoTypeTime  记录用例由非自动化变为自动化类型的时间
    * compareNumber  配对用例编号
    * sceneFlag  场景标识
    * baseFlag  场景标识
    * paraValidator  区别是否从yaml中生成的用例，默认false
    * knetNodeId  knet节点id
    * lastExeAuthor  最后一次执行用户
    * cloudCarrier  运营商
    * marketPlace  应用市场
    * testMindId  脑图id
    * testMindUrl  脑图url
    * commitUrl  git提交url
    * testPatternNumber  测试模式编号
    * testFactorNumber  测试因子编号
    * statusCode  状态Code
    * resultCode  结果Code
    * releaseId  迭代ID
    * labelId  标签ID
    * labels  用例标签名称列表
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * executeLatestTime  最后执行时间
    * executeDuration  执行时长
    * executeTimes  执行次数
    * isKeyword  是否关键用例
    * releaseDev  测试版本号
    * newCreated  是否用户新增用例
    * projectUuid  项目ID
    * creationVersionName  创建版本名称，原逻辑marshall添加字段
    * featurePath  特性路径，原逻辑marshall添加字段
    * testcaseUri  实体用例Uri，IteratorTestCase字段
    * ownerName  处理人名称
    * iteratorCaseUri  迭代用例Uri，IteratorTestCase字段
    * scriptLink  脚本链接scriptLink
    * customField1  自定义字段1
    * customField2  自定义字段2
    * customField3  自定义字段3
    * customField4  自定义字段4
    * customField5  自定义字段5
    * customField6  自定义字段6
    * customField7  自定义字段7
    * customField8  自定义字段8
    * customField9  自定义字段9
    * customField10  自定义字段10
    * customField11  自定义字段11
    * customField12  自定义字段12
    * customField13  自定义字段13
    * customField14  自定义字段14
    * customField15  自定义字段15
    * customField16  自定义字段16
    * customField17  自定义字段17
    * customField18  自定义字段18
    * customField19  自定义字段19
    * customField20  自定义字段20
    * customField21  自定义字段21
    * customField22  自定义字段22
    * customField23  自定义字段23
    * customField24  自定义字段24
    * customField25  自定义字段25
    * lastModifierName  更新人名称
    * versionName  迭代
    * steps  测试步骤
    * associateDefect  是否关联缺陷
    * associateIssue  是否关联需求
    * defectList  缺陷关联信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'type' => null,
        'author' => null,
        'name' => null,
        'rank' => 'int32',
        'preparation' => null,
        'remark' => null,
        'stage' => null,
        'activity' => null,
        'keywords' => null,
        'market' => null,
        'designer' => null,
        'tags' => null,
        'executeParameter' => null,
        'region' => null,
        'owner' => null,
        'issue' => null,
        'lastModifier' => null,
        'lastModified' => 'date-time',
        'lastModifiedTimestamp' => 'int64',
        'lastChangeTime' => 'date-time',
        'versionUri' => null,
        'originUri' => null,
        'parentUri' => null,
        'parentPath' => null,
        'creationVersionUri' => null,
        'creationDate' => 'date-time',
        'creationDateTimestamp' => 'int64',
        'authorName' => null,
        'comment' => null,
        'number' => null,
        'caseType' => 'int32',
        'platformType' => 'int32',
        'serviceType' => 'int32',
        'serviceTypeName' => null,
        'testType' => 'int32',
        'testTypeName' => null,
        'designNote' => null,
        'testStep' => null,
        'expectOutput' => null,
        'envType' => null,
        'exePlatform' => null,
        'testcaseProject' => null,
        'svnScriptPath' => null,
        'mapRestrict' => null,
        'networkScriptName' => null,
        'autoType' => 'int32',
        'toBeAutoExec' => 'int32',
        'lastResult' => null,
        'lastResultUri' => null,
        'featureUri' => null,
        'featureName' => null,
        'interfaceName' => null,
        'snpNo' => null,
        'drRelationId' => null,
        'issueName' => null,
        'testBaseNum' => null,
        'automaticallyExecuted' => 'int32',
        'firstExecuteTime' => 'date-time',
        'detectType' => null,
        'executeParam' => null,
        'testFeature' => null,
        'isContractTestcase' => 'int32',
        'timeCost' => 'double',
        'beAutoTypeTime' => 'date-time',
        'compareNumber' => null,
        'sceneFlag' => null,
        'baseFlag' => null,
        'paraValidator' => null,
        'knetNodeId' => null,
        'lastExeAuthor' => null,
        'cloudCarrier' => null,
        'marketPlace' => null,
        'testMindId' => null,
        'testMindUrl' => null,
        'commitUrl' => null,
        'testPatternNumber' => null,
        'testFactorNumber' => null,
        'statusCode' => null,
        'resultCode' => null,
        'releaseId' => null,
        'labelId' => null,
        'labels' => null,
        'moduleId' => null,
        'moduleName' => null,
        'modulePath' => null,
        'modulePathName' => null,
        'executeLatestTime' => 'date-time',
        'executeDuration' => null,
        'executeTimes' => 'int32',
        'isKeyword' => 'int32',
        'releaseDev' => null,
        'newCreated' => null,
        'projectUuid' => null,
        'creationVersionName' => null,
        'featurePath' => null,
        'testcaseUri' => null,
        'ownerName' => null,
        'iteratorCaseUri' => null,
        'scriptLink' => null,
        'customField1' => null,
        'customField2' => null,
        'customField3' => null,
        'customField4' => null,
        'customField5' => null,
        'customField6' => null,
        'customField7' => null,
        'customField8' => null,
        'customField9' => null,
        'customField10' => null,
        'customField11' => null,
        'customField12' => null,
        'customField13' => null,
        'customField14' => null,
        'customField15' => null,
        'customField16' => null,
        'customField17' => null,
        'customField18' => null,
        'customField19' => null,
        'customField20' => null,
        'customField21' => null,
        'customField22' => null,
        'customField23' => null,
        'customField24' => null,
        'customField25' => null,
        'lastModifierName' => null,
        'versionName' => null,
        'steps' => null,
        'associateDefect' => null,
        'associateIssue' => null,
        'defectList' => null
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
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * preparation  前置条件
    * remark  备注
    * stage  测试阶段
    * activity  测试类型
    * keywords  关键词
    * market  apitest标记是否代码已提交
    * designer  设计者
    * tags  标签
    * executeParameter  执行参数
    * region  逻辑region
    * owner  处理人id，IteratorTestCase字段
    * issue  issue
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * caseType  用例类型
    * platformType  执行平台类型
    * serviceType  服务类型
    * serviceTypeName  服务类型名称
    * testType  测试类型
    * testTypeName  测试类型名称
    * designNote  设计描述
    * testStep  测试步骤
    * expectOutput  期望结果
    * envType  测试环境类型
    * exePlatform  执行平台
    * testcaseProject  测试工程
    * svnScriptPath  脚本路径
    * mapRestrict  约束条件
    * networkScriptName  网络脚本名
    * autoType  自动化类型，非自动化:0, 是自动化:1
    * toBeAutoExec  被自动化执行
    * lastResult  最后一次结果
    * lastResultUri  最后一次结果Uri
    * featureUri  目录Uri
    * featureName  目录名称
    * interfaceName  测试接口名
    * snpNo  网络问题ID
    * drRelationId  关联需求编号
    * issueName  需求名称
    * testBaseNum  测试基数
    * automaticallyExecuted  是否被自动化执行
    * firstExecuteTime  第一次执行时间
    * detectType  检测类型
    * executeParam  执行参数
    * testFeature  分析领域
    * isContractTestcase  是否是契约用例，0:表示非契约用例, 1：表示契约用例
    * timeCost  总共耗时
    * beAutoTypeTime  记录用例由非自动化变为自动化类型的时间
    * compareNumber  配对用例编号
    * sceneFlag  场景标识
    * baseFlag  场景标识
    * paraValidator  区别是否从yaml中生成的用例，默认false
    * knetNodeId  knet节点id
    * lastExeAuthor  最后一次执行用户
    * cloudCarrier  运营商
    * marketPlace  应用市场
    * testMindId  脑图id
    * testMindUrl  脑图url
    * commitUrl  git提交url
    * testPatternNumber  测试模式编号
    * testFactorNumber  测试因子编号
    * statusCode  状态Code
    * resultCode  结果Code
    * releaseId  迭代ID
    * labelId  标签ID
    * labels  用例标签名称列表
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * executeLatestTime  最后执行时间
    * executeDuration  执行时长
    * executeTimes  执行次数
    * isKeyword  是否关键用例
    * releaseDev  测试版本号
    * newCreated  是否用户新增用例
    * projectUuid  项目ID
    * creationVersionName  创建版本名称，原逻辑marshall添加字段
    * featurePath  特性路径，原逻辑marshall添加字段
    * testcaseUri  实体用例Uri，IteratorTestCase字段
    * ownerName  处理人名称
    * iteratorCaseUri  迭代用例Uri，IteratorTestCase字段
    * scriptLink  脚本链接scriptLink
    * customField1  自定义字段1
    * customField2  自定义字段2
    * customField3  自定义字段3
    * customField4  自定义字段4
    * customField5  自定义字段5
    * customField6  自定义字段6
    * customField7  自定义字段7
    * customField8  自定义字段8
    * customField9  自定义字段9
    * customField10  自定义字段10
    * customField11  自定义字段11
    * customField12  自定义字段12
    * customField13  自定义字段13
    * customField14  自定义字段14
    * customField15  自定义字段15
    * customField16  自定义字段16
    * customField17  自定义字段17
    * customField18  自定义字段18
    * customField19  自定义字段19
    * customField20  自定义字段20
    * customField21  自定义字段21
    * customField22  自定义字段22
    * customField23  自定义字段23
    * customField24  自定义字段24
    * customField25  自定义字段25
    * lastModifierName  更新人名称
    * versionName  迭代
    * steps  测试步骤
    * associateDefect  是否关联缺陷
    * associateIssue  是否关联需求
    * defectList  缺陷关联信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'type' => 'type',
            'author' => 'author',
            'name' => 'name',
            'rank' => 'rank',
            'preparation' => 'preparation',
            'remark' => 'remark',
            'stage' => 'stage',
            'activity' => 'activity',
            'keywords' => 'keywords',
            'market' => 'market',
            'designer' => 'designer',
            'tags' => 'tags',
            'executeParameter' => 'execute_parameter',
            'region' => 'region',
            'owner' => 'owner',
            'issue' => 'issue',
            'lastModifier' => 'last_modifier',
            'lastModified' => 'last_modified',
            'lastModifiedTimestamp' => 'last_modified_timestamp',
            'lastChangeTime' => 'last_change_time',
            'versionUri' => 'version_uri',
            'originUri' => 'origin_uri',
            'parentUri' => 'parent_uri',
            'parentPath' => 'parent_path',
            'creationVersionUri' => 'creation_version_uri',
            'creationDate' => 'creation_date',
            'creationDateTimestamp' => 'creation_date_timestamp',
            'authorName' => 'author_name',
            'comment' => 'comment',
            'number' => 'number',
            'caseType' => 'case_type',
            'platformType' => 'platform_type',
            'serviceType' => 'service_type',
            'serviceTypeName' => 'service_type_name',
            'testType' => 'test_type',
            'testTypeName' => 'test_type_name',
            'designNote' => 'design_note',
            'testStep' => 'test_step',
            'expectOutput' => 'expect_output',
            'envType' => 'env_type',
            'exePlatform' => 'exe_platform',
            'testcaseProject' => 'testcase_project',
            'svnScriptPath' => 'svn_script_path',
            'mapRestrict' => 'map_restrict',
            'networkScriptName' => 'network_script_name',
            'autoType' => 'auto_type',
            'toBeAutoExec' => 'to_be_auto_exec',
            'lastResult' => 'last_result',
            'lastResultUri' => 'last_result_uri',
            'featureUri' => 'feature_uri',
            'featureName' => 'feature_name',
            'interfaceName' => 'interface_name',
            'snpNo' => 'snp_no',
            'drRelationId' => 'dr_relation_id',
            'issueName' => 'issue_name',
            'testBaseNum' => 'test_base_num',
            'automaticallyExecuted' => 'automatically_executed',
            'firstExecuteTime' => 'first_execute_time',
            'detectType' => 'detect_type',
            'executeParam' => 'execute_param',
            'testFeature' => 'test_feature',
            'isContractTestcase' => 'is_contract_testcase',
            'timeCost' => 'time_cost',
            'beAutoTypeTime' => 'be_auto_type_time',
            'compareNumber' => 'compare_number',
            'sceneFlag' => 'scene_flag',
            'baseFlag' => 'base_flag',
            'paraValidator' => 'para_validator',
            'knetNodeId' => 'knet_node_id',
            'lastExeAuthor' => 'last_exe_author',
            'cloudCarrier' => 'cloud_carrier',
            'marketPlace' => 'market_place',
            'testMindId' => 'test_mind_id',
            'testMindUrl' => 'test_mind_url',
            'commitUrl' => 'commit_url',
            'testPatternNumber' => 'test_pattern_number',
            'testFactorNumber' => 'test_factor_number',
            'statusCode' => 'status_code',
            'resultCode' => 'result_code',
            'releaseId' => 'release_id',
            'labelId' => 'label_id',
            'labels' => 'labels',
            'moduleId' => 'module_id',
            'moduleName' => 'module_name',
            'modulePath' => 'module_path',
            'modulePathName' => 'module_path_name',
            'executeLatestTime' => 'execute_latest_time',
            'executeDuration' => 'execute_duration',
            'executeTimes' => 'execute_times',
            'isKeyword' => 'is_keyword',
            'releaseDev' => 'release_dev',
            'newCreated' => 'new_created',
            'projectUuid' => 'project_uuid',
            'creationVersionName' => 'creation_version_name',
            'featurePath' => 'feature_path',
            'testcaseUri' => 'testcase_uri',
            'ownerName' => 'owner_name',
            'iteratorCaseUri' => 'iterator_case_uri',
            'scriptLink' => 'script_link',
            'customField1' => 'custom_field_1',
            'customField2' => 'custom_field_2',
            'customField3' => 'custom_field_3',
            'customField4' => 'custom_field_4',
            'customField5' => 'custom_field_5',
            'customField6' => 'custom_field_6',
            'customField7' => 'custom_field_7',
            'customField8' => 'custom_field_8',
            'customField9' => 'custom_field_9',
            'customField10' => 'custom_field_10',
            'customField11' => 'custom_field_11',
            'customField12' => 'custom_field_12',
            'customField13' => 'custom_field_13',
            'customField14' => 'custom_field_14',
            'customField15' => 'custom_field_15',
            'customField16' => 'custom_field_16',
            'customField17' => 'custom_field_17',
            'customField18' => 'custom_field_18',
            'customField19' => 'custom_field_19',
            'customField20' => 'custom_field_20',
            'customField21' => 'custom_field_21',
            'customField22' => 'custom_field_22',
            'customField23' => 'custom_field_23',
            'customField24' => 'custom_field_24',
            'customField25' => 'custom_field_25',
            'lastModifierName' => 'last_modifier_name',
            'versionName' => 'version_name',
            'steps' => 'steps',
            'associateDefect' => 'associate_defect',
            'associateIssue' => 'associate_issue',
            'defectList' => 'defect_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * preparation  前置条件
    * remark  备注
    * stage  测试阶段
    * activity  测试类型
    * keywords  关键词
    * market  apitest标记是否代码已提交
    * designer  设计者
    * tags  标签
    * executeParameter  执行参数
    * region  逻辑region
    * owner  处理人id，IteratorTestCase字段
    * issue  issue
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * caseType  用例类型
    * platformType  执行平台类型
    * serviceType  服务类型
    * serviceTypeName  服务类型名称
    * testType  测试类型
    * testTypeName  测试类型名称
    * designNote  设计描述
    * testStep  测试步骤
    * expectOutput  期望结果
    * envType  测试环境类型
    * exePlatform  执行平台
    * testcaseProject  测试工程
    * svnScriptPath  脚本路径
    * mapRestrict  约束条件
    * networkScriptName  网络脚本名
    * autoType  自动化类型，非自动化:0, 是自动化:1
    * toBeAutoExec  被自动化执行
    * lastResult  最后一次结果
    * lastResultUri  最后一次结果Uri
    * featureUri  目录Uri
    * featureName  目录名称
    * interfaceName  测试接口名
    * snpNo  网络问题ID
    * drRelationId  关联需求编号
    * issueName  需求名称
    * testBaseNum  测试基数
    * automaticallyExecuted  是否被自动化执行
    * firstExecuteTime  第一次执行时间
    * detectType  检测类型
    * executeParam  执行参数
    * testFeature  分析领域
    * isContractTestcase  是否是契约用例，0:表示非契约用例, 1：表示契约用例
    * timeCost  总共耗时
    * beAutoTypeTime  记录用例由非自动化变为自动化类型的时间
    * compareNumber  配对用例编号
    * sceneFlag  场景标识
    * baseFlag  场景标识
    * paraValidator  区别是否从yaml中生成的用例，默认false
    * knetNodeId  knet节点id
    * lastExeAuthor  最后一次执行用户
    * cloudCarrier  运营商
    * marketPlace  应用市场
    * testMindId  脑图id
    * testMindUrl  脑图url
    * commitUrl  git提交url
    * testPatternNumber  测试模式编号
    * testFactorNumber  测试因子编号
    * statusCode  状态Code
    * resultCode  结果Code
    * releaseId  迭代ID
    * labelId  标签ID
    * labels  用例标签名称列表
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * executeLatestTime  最后执行时间
    * executeDuration  执行时长
    * executeTimes  执行次数
    * isKeyword  是否关键用例
    * releaseDev  测试版本号
    * newCreated  是否用户新增用例
    * projectUuid  项目ID
    * creationVersionName  创建版本名称，原逻辑marshall添加字段
    * featurePath  特性路径，原逻辑marshall添加字段
    * testcaseUri  实体用例Uri，IteratorTestCase字段
    * ownerName  处理人名称
    * iteratorCaseUri  迭代用例Uri，IteratorTestCase字段
    * scriptLink  脚本链接scriptLink
    * customField1  自定义字段1
    * customField2  自定义字段2
    * customField3  自定义字段3
    * customField4  自定义字段4
    * customField5  自定义字段5
    * customField6  自定义字段6
    * customField7  自定义字段7
    * customField8  自定义字段8
    * customField9  自定义字段9
    * customField10  自定义字段10
    * customField11  自定义字段11
    * customField12  自定义字段12
    * customField13  自定义字段13
    * customField14  自定义字段14
    * customField15  自定义字段15
    * customField16  自定义字段16
    * customField17  自定义字段17
    * customField18  自定义字段18
    * customField19  自定义字段19
    * customField20  自定义字段20
    * customField21  自定义字段21
    * customField22  自定义字段22
    * customField23  自定义字段23
    * customField24  自定义字段24
    * customField25  自定义字段25
    * lastModifierName  更新人名称
    * versionName  迭代
    * steps  测试步骤
    * associateDefect  是否关联缺陷
    * associateIssue  是否关联需求
    * defectList  缺陷关联信息
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'type' => 'setType',
            'author' => 'setAuthor',
            'name' => 'setName',
            'rank' => 'setRank',
            'preparation' => 'setPreparation',
            'remark' => 'setRemark',
            'stage' => 'setStage',
            'activity' => 'setActivity',
            'keywords' => 'setKeywords',
            'market' => 'setMarket',
            'designer' => 'setDesigner',
            'tags' => 'setTags',
            'executeParameter' => 'setExecuteParameter',
            'region' => 'setRegion',
            'owner' => 'setOwner',
            'issue' => 'setIssue',
            'lastModifier' => 'setLastModifier',
            'lastModified' => 'setLastModified',
            'lastModifiedTimestamp' => 'setLastModifiedTimestamp',
            'lastChangeTime' => 'setLastChangeTime',
            'versionUri' => 'setVersionUri',
            'originUri' => 'setOriginUri',
            'parentUri' => 'setParentUri',
            'parentPath' => 'setParentPath',
            'creationVersionUri' => 'setCreationVersionUri',
            'creationDate' => 'setCreationDate',
            'creationDateTimestamp' => 'setCreationDateTimestamp',
            'authorName' => 'setAuthorName',
            'comment' => 'setComment',
            'number' => 'setNumber',
            'caseType' => 'setCaseType',
            'platformType' => 'setPlatformType',
            'serviceType' => 'setServiceType',
            'serviceTypeName' => 'setServiceTypeName',
            'testType' => 'setTestType',
            'testTypeName' => 'setTestTypeName',
            'designNote' => 'setDesignNote',
            'testStep' => 'setTestStep',
            'expectOutput' => 'setExpectOutput',
            'envType' => 'setEnvType',
            'exePlatform' => 'setExePlatform',
            'testcaseProject' => 'setTestcaseProject',
            'svnScriptPath' => 'setSvnScriptPath',
            'mapRestrict' => 'setMapRestrict',
            'networkScriptName' => 'setNetworkScriptName',
            'autoType' => 'setAutoType',
            'toBeAutoExec' => 'setToBeAutoExec',
            'lastResult' => 'setLastResult',
            'lastResultUri' => 'setLastResultUri',
            'featureUri' => 'setFeatureUri',
            'featureName' => 'setFeatureName',
            'interfaceName' => 'setInterfaceName',
            'snpNo' => 'setSnpNo',
            'drRelationId' => 'setDrRelationId',
            'issueName' => 'setIssueName',
            'testBaseNum' => 'setTestBaseNum',
            'automaticallyExecuted' => 'setAutomaticallyExecuted',
            'firstExecuteTime' => 'setFirstExecuteTime',
            'detectType' => 'setDetectType',
            'executeParam' => 'setExecuteParam',
            'testFeature' => 'setTestFeature',
            'isContractTestcase' => 'setIsContractTestcase',
            'timeCost' => 'setTimeCost',
            'beAutoTypeTime' => 'setBeAutoTypeTime',
            'compareNumber' => 'setCompareNumber',
            'sceneFlag' => 'setSceneFlag',
            'baseFlag' => 'setBaseFlag',
            'paraValidator' => 'setParaValidator',
            'knetNodeId' => 'setKnetNodeId',
            'lastExeAuthor' => 'setLastExeAuthor',
            'cloudCarrier' => 'setCloudCarrier',
            'marketPlace' => 'setMarketPlace',
            'testMindId' => 'setTestMindId',
            'testMindUrl' => 'setTestMindUrl',
            'commitUrl' => 'setCommitUrl',
            'testPatternNumber' => 'setTestPatternNumber',
            'testFactorNumber' => 'setTestFactorNumber',
            'statusCode' => 'setStatusCode',
            'resultCode' => 'setResultCode',
            'releaseId' => 'setReleaseId',
            'labelId' => 'setLabelId',
            'labels' => 'setLabels',
            'moduleId' => 'setModuleId',
            'moduleName' => 'setModuleName',
            'modulePath' => 'setModulePath',
            'modulePathName' => 'setModulePathName',
            'executeLatestTime' => 'setExecuteLatestTime',
            'executeDuration' => 'setExecuteDuration',
            'executeTimes' => 'setExecuteTimes',
            'isKeyword' => 'setIsKeyword',
            'releaseDev' => 'setReleaseDev',
            'newCreated' => 'setNewCreated',
            'projectUuid' => 'setProjectUuid',
            'creationVersionName' => 'setCreationVersionName',
            'featurePath' => 'setFeaturePath',
            'testcaseUri' => 'setTestcaseUri',
            'ownerName' => 'setOwnerName',
            'iteratorCaseUri' => 'setIteratorCaseUri',
            'scriptLink' => 'setScriptLink',
            'customField1' => 'setCustomField1',
            'customField2' => 'setCustomField2',
            'customField3' => 'setCustomField3',
            'customField4' => 'setCustomField4',
            'customField5' => 'setCustomField5',
            'customField6' => 'setCustomField6',
            'customField7' => 'setCustomField7',
            'customField8' => 'setCustomField8',
            'customField9' => 'setCustomField9',
            'customField10' => 'setCustomField10',
            'customField11' => 'setCustomField11',
            'customField12' => 'setCustomField12',
            'customField13' => 'setCustomField13',
            'customField14' => 'setCustomField14',
            'customField15' => 'setCustomField15',
            'customField16' => 'setCustomField16',
            'customField17' => 'setCustomField17',
            'customField18' => 'setCustomField18',
            'customField19' => 'setCustomField19',
            'customField20' => 'setCustomField20',
            'customField21' => 'setCustomField21',
            'customField22' => 'setCustomField22',
            'customField23' => 'setCustomField23',
            'customField24' => 'setCustomField24',
            'customField25' => 'setCustomField25',
            'lastModifierName' => 'setLastModifierName',
            'versionName' => 'setVersionName',
            'steps' => 'setSteps',
            'associateDefect' => 'setAssociateDefect',
            'associateIssue' => 'setAssociateIssue',
            'defectList' => 'setDefectList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * preparation  前置条件
    * remark  备注
    * stage  测试阶段
    * activity  测试类型
    * keywords  关键词
    * market  apitest标记是否代码已提交
    * designer  设计者
    * tags  标签
    * executeParameter  执行参数
    * region  逻辑region
    * owner  处理人id，IteratorTestCase字段
    * issue  issue
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * caseType  用例类型
    * platformType  执行平台类型
    * serviceType  服务类型
    * serviceTypeName  服务类型名称
    * testType  测试类型
    * testTypeName  测试类型名称
    * designNote  设计描述
    * testStep  测试步骤
    * expectOutput  期望结果
    * envType  测试环境类型
    * exePlatform  执行平台
    * testcaseProject  测试工程
    * svnScriptPath  脚本路径
    * mapRestrict  约束条件
    * networkScriptName  网络脚本名
    * autoType  自动化类型，非自动化:0, 是自动化:1
    * toBeAutoExec  被自动化执行
    * lastResult  最后一次结果
    * lastResultUri  最后一次结果Uri
    * featureUri  目录Uri
    * featureName  目录名称
    * interfaceName  测试接口名
    * snpNo  网络问题ID
    * drRelationId  关联需求编号
    * issueName  需求名称
    * testBaseNum  测试基数
    * automaticallyExecuted  是否被自动化执行
    * firstExecuteTime  第一次执行时间
    * detectType  检测类型
    * executeParam  执行参数
    * testFeature  分析领域
    * isContractTestcase  是否是契约用例，0:表示非契约用例, 1：表示契约用例
    * timeCost  总共耗时
    * beAutoTypeTime  记录用例由非自动化变为自动化类型的时间
    * compareNumber  配对用例编号
    * sceneFlag  场景标识
    * baseFlag  场景标识
    * paraValidator  区别是否从yaml中生成的用例，默认false
    * knetNodeId  knet节点id
    * lastExeAuthor  最后一次执行用户
    * cloudCarrier  运营商
    * marketPlace  应用市场
    * testMindId  脑图id
    * testMindUrl  脑图url
    * commitUrl  git提交url
    * testPatternNumber  测试模式编号
    * testFactorNumber  测试因子编号
    * statusCode  状态Code
    * resultCode  结果Code
    * releaseId  迭代ID
    * labelId  标签ID
    * labels  用例标签名称列表
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * executeLatestTime  最后执行时间
    * executeDuration  执行时长
    * executeTimes  执行次数
    * isKeyword  是否关键用例
    * releaseDev  测试版本号
    * newCreated  是否用户新增用例
    * projectUuid  项目ID
    * creationVersionName  创建版本名称，原逻辑marshall添加字段
    * featurePath  特性路径，原逻辑marshall添加字段
    * testcaseUri  实体用例Uri，IteratorTestCase字段
    * ownerName  处理人名称
    * iteratorCaseUri  迭代用例Uri，IteratorTestCase字段
    * scriptLink  脚本链接scriptLink
    * customField1  自定义字段1
    * customField2  自定义字段2
    * customField3  自定义字段3
    * customField4  自定义字段4
    * customField5  自定义字段5
    * customField6  自定义字段6
    * customField7  自定义字段7
    * customField8  自定义字段8
    * customField9  自定义字段9
    * customField10  自定义字段10
    * customField11  自定义字段11
    * customField12  自定义字段12
    * customField13  自定义字段13
    * customField14  自定义字段14
    * customField15  自定义字段15
    * customField16  自定义字段16
    * customField17  自定义字段17
    * customField18  自定义字段18
    * customField19  自定义字段19
    * customField20  自定义字段20
    * customField21  自定义字段21
    * customField22  自定义字段22
    * customField23  自定义字段23
    * customField24  自定义字段24
    * customField25  自定义字段25
    * lastModifierName  更新人名称
    * versionName  迭代
    * steps  测试步骤
    * associateDefect  是否关联缺陷
    * associateIssue  是否关联需求
    * defectList  缺陷关联信息
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'type' => 'getType',
            'author' => 'getAuthor',
            'name' => 'getName',
            'rank' => 'getRank',
            'preparation' => 'getPreparation',
            'remark' => 'getRemark',
            'stage' => 'getStage',
            'activity' => 'getActivity',
            'keywords' => 'getKeywords',
            'market' => 'getMarket',
            'designer' => 'getDesigner',
            'tags' => 'getTags',
            'executeParameter' => 'getExecuteParameter',
            'region' => 'getRegion',
            'owner' => 'getOwner',
            'issue' => 'getIssue',
            'lastModifier' => 'getLastModifier',
            'lastModified' => 'getLastModified',
            'lastModifiedTimestamp' => 'getLastModifiedTimestamp',
            'lastChangeTime' => 'getLastChangeTime',
            'versionUri' => 'getVersionUri',
            'originUri' => 'getOriginUri',
            'parentUri' => 'getParentUri',
            'parentPath' => 'getParentPath',
            'creationVersionUri' => 'getCreationVersionUri',
            'creationDate' => 'getCreationDate',
            'creationDateTimestamp' => 'getCreationDateTimestamp',
            'authorName' => 'getAuthorName',
            'comment' => 'getComment',
            'number' => 'getNumber',
            'caseType' => 'getCaseType',
            'platformType' => 'getPlatformType',
            'serviceType' => 'getServiceType',
            'serviceTypeName' => 'getServiceTypeName',
            'testType' => 'getTestType',
            'testTypeName' => 'getTestTypeName',
            'designNote' => 'getDesignNote',
            'testStep' => 'getTestStep',
            'expectOutput' => 'getExpectOutput',
            'envType' => 'getEnvType',
            'exePlatform' => 'getExePlatform',
            'testcaseProject' => 'getTestcaseProject',
            'svnScriptPath' => 'getSvnScriptPath',
            'mapRestrict' => 'getMapRestrict',
            'networkScriptName' => 'getNetworkScriptName',
            'autoType' => 'getAutoType',
            'toBeAutoExec' => 'getToBeAutoExec',
            'lastResult' => 'getLastResult',
            'lastResultUri' => 'getLastResultUri',
            'featureUri' => 'getFeatureUri',
            'featureName' => 'getFeatureName',
            'interfaceName' => 'getInterfaceName',
            'snpNo' => 'getSnpNo',
            'drRelationId' => 'getDrRelationId',
            'issueName' => 'getIssueName',
            'testBaseNum' => 'getTestBaseNum',
            'automaticallyExecuted' => 'getAutomaticallyExecuted',
            'firstExecuteTime' => 'getFirstExecuteTime',
            'detectType' => 'getDetectType',
            'executeParam' => 'getExecuteParam',
            'testFeature' => 'getTestFeature',
            'isContractTestcase' => 'getIsContractTestcase',
            'timeCost' => 'getTimeCost',
            'beAutoTypeTime' => 'getBeAutoTypeTime',
            'compareNumber' => 'getCompareNumber',
            'sceneFlag' => 'getSceneFlag',
            'baseFlag' => 'getBaseFlag',
            'paraValidator' => 'getParaValidator',
            'knetNodeId' => 'getKnetNodeId',
            'lastExeAuthor' => 'getLastExeAuthor',
            'cloudCarrier' => 'getCloudCarrier',
            'marketPlace' => 'getMarketPlace',
            'testMindId' => 'getTestMindId',
            'testMindUrl' => 'getTestMindUrl',
            'commitUrl' => 'getCommitUrl',
            'testPatternNumber' => 'getTestPatternNumber',
            'testFactorNumber' => 'getTestFactorNumber',
            'statusCode' => 'getStatusCode',
            'resultCode' => 'getResultCode',
            'releaseId' => 'getReleaseId',
            'labelId' => 'getLabelId',
            'labels' => 'getLabels',
            'moduleId' => 'getModuleId',
            'moduleName' => 'getModuleName',
            'modulePath' => 'getModulePath',
            'modulePathName' => 'getModulePathName',
            'executeLatestTime' => 'getExecuteLatestTime',
            'executeDuration' => 'getExecuteDuration',
            'executeTimes' => 'getExecuteTimes',
            'isKeyword' => 'getIsKeyword',
            'releaseDev' => 'getReleaseDev',
            'newCreated' => 'getNewCreated',
            'projectUuid' => 'getProjectUuid',
            'creationVersionName' => 'getCreationVersionName',
            'featurePath' => 'getFeaturePath',
            'testcaseUri' => 'getTestcaseUri',
            'ownerName' => 'getOwnerName',
            'iteratorCaseUri' => 'getIteratorCaseUri',
            'scriptLink' => 'getScriptLink',
            'customField1' => 'getCustomField1',
            'customField2' => 'getCustomField2',
            'customField3' => 'getCustomField3',
            'customField4' => 'getCustomField4',
            'customField5' => 'getCustomField5',
            'customField6' => 'getCustomField6',
            'customField7' => 'getCustomField7',
            'customField8' => 'getCustomField8',
            'customField9' => 'getCustomField9',
            'customField10' => 'getCustomField10',
            'customField11' => 'getCustomField11',
            'customField12' => 'getCustomField12',
            'customField13' => 'getCustomField13',
            'customField14' => 'getCustomField14',
            'customField15' => 'getCustomField15',
            'customField16' => 'getCustomField16',
            'customField17' => 'getCustomField17',
            'customField18' => 'getCustomField18',
            'customField19' => 'getCustomField19',
            'customField20' => 'getCustomField20',
            'customField21' => 'getCustomField21',
            'customField22' => 'getCustomField22',
            'customField23' => 'getCustomField23',
            'customField24' => 'getCustomField24',
            'customField25' => 'getCustomField25',
            'lastModifierName' => 'getLastModifierName',
            'versionName' => 'getVersionName',
            'steps' => 'getSteps',
            'associateDefect' => 'getAssociateDefect',
            'associateIssue' => 'getAssociateIssue',
            'defectList' => 'getDefectList'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['preparation'] = isset($data['preparation']) ? $data['preparation'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['designer'] = isset($data['designer']) ? $data['designer'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['executeParameter'] = isset($data['executeParameter']) ? $data['executeParameter'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['lastModifier'] = isset($data['lastModifier']) ? $data['lastModifier'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['lastModifiedTimestamp'] = isset($data['lastModifiedTimestamp']) ? $data['lastModifiedTimestamp'] : null;
        $this->container['lastChangeTime'] = isset($data['lastChangeTime']) ? $data['lastChangeTime'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['originUri'] = isset($data['originUri']) ? $data['originUri'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['parentPath'] = isset($data['parentPath']) ? $data['parentPath'] : null;
        $this->container['creationVersionUri'] = isset($data['creationVersionUri']) ? $data['creationVersionUri'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['creationDateTimestamp'] = isset($data['creationDateTimestamp']) ? $data['creationDateTimestamp'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['caseType'] = isset($data['caseType']) ? $data['caseType'] : null;
        $this->container['platformType'] = isset($data['platformType']) ? $data['platformType'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['testType'] = isset($data['testType']) ? $data['testType'] : null;
        $this->container['testTypeName'] = isset($data['testTypeName']) ? $data['testTypeName'] : null;
        $this->container['designNote'] = isset($data['designNote']) ? $data['designNote'] : null;
        $this->container['testStep'] = isset($data['testStep']) ? $data['testStep'] : null;
        $this->container['expectOutput'] = isset($data['expectOutput']) ? $data['expectOutput'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['exePlatform'] = isset($data['exePlatform']) ? $data['exePlatform'] : null;
        $this->container['testcaseProject'] = isset($data['testcaseProject']) ? $data['testcaseProject'] : null;
        $this->container['svnScriptPath'] = isset($data['svnScriptPath']) ? $data['svnScriptPath'] : null;
        $this->container['mapRestrict'] = isset($data['mapRestrict']) ? $data['mapRestrict'] : null;
        $this->container['networkScriptName'] = isset($data['networkScriptName']) ? $data['networkScriptName'] : null;
        $this->container['autoType'] = isset($data['autoType']) ? $data['autoType'] : null;
        $this->container['toBeAutoExec'] = isset($data['toBeAutoExec']) ? $data['toBeAutoExec'] : null;
        $this->container['lastResult'] = isset($data['lastResult']) ? $data['lastResult'] : null;
        $this->container['lastResultUri'] = isset($data['lastResultUri']) ? $data['lastResultUri'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
        $this->container['featureName'] = isset($data['featureName']) ? $data['featureName'] : null;
        $this->container['interfaceName'] = isset($data['interfaceName']) ? $data['interfaceName'] : null;
        $this->container['snpNo'] = isset($data['snpNo']) ? $data['snpNo'] : null;
        $this->container['drRelationId'] = isset($data['drRelationId']) ? $data['drRelationId'] : null;
        $this->container['issueName'] = isset($data['issueName']) ? $data['issueName'] : null;
        $this->container['testBaseNum'] = isset($data['testBaseNum']) ? $data['testBaseNum'] : null;
        $this->container['automaticallyExecuted'] = isset($data['automaticallyExecuted']) ? $data['automaticallyExecuted'] : null;
        $this->container['firstExecuteTime'] = isset($data['firstExecuteTime']) ? $data['firstExecuteTime'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
        $this->container['executeParam'] = isset($data['executeParam']) ? $data['executeParam'] : null;
        $this->container['testFeature'] = isset($data['testFeature']) ? $data['testFeature'] : null;
        $this->container['isContractTestcase'] = isset($data['isContractTestcase']) ? $data['isContractTestcase'] : null;
        $this->container['timeCost'] = isset($data['timeCost']) ? $data['timeCost'] : null;
        $this->container['beAutoTypeTime'] = isset($data['beAutoTypeTime']) ? $data['beAutoTypeTime'] : null;
        $this->container['compareNumber'] = isset($data['compareNumber']) ? $data['compareNumber'] : null;
        $this->container['sceneFlag'] = isset($data['sceneFlag']) ? $data['sceneFlag'] : null;
        $this->container['baseFlag'] = isset($data['baseFlag']) ? $data['baseFlag'] : null;
        $this->container['paraValidator'] = isset($data['paraValidator']) ? $data['paraValidator'] : null;
        $this->container['knetNodeId'] = isset($data['knetNodeId']) ? $data['knetNodeId'] : null;
        $this->container['lastExeAuthor'] = isset($data['lastExeAuthor']) ? $data['lastExeAuthor'] : null;
        $this->container['cloudCarrier'] = isset($data['cloudCarrier']) ? $data['cloudCarrier'] : null;
        $this->container['marketPlace'] = isset($data['marketPlace']) ? $data['marketPlace'] : null;
        $this->container['testMindId'] = isset($data['testMindId']) ? $data['testMindId'] : null;
        $this->container['testMindUrl'] = isset($data['testMindUrl']) ? $data['testMindUrl'] : null;
        $this->container['commitUrl'] = isset($data['commitUrl']) ? $data['commitUrl'] : null;
        $this->container['testPatternNumber'] = isset($data['testPatternNumber']) ? $data['testPatternNumber'] : null;
        $this->container['testFactorNumber'] = isset($data['testFactorNumber']) ? $data['testFactorNumber'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['modulePath'] = isset($data['modulePath']) ? $data['modulePath'] : null;
        $this->container['modulePathName'] = isset($data['modulePathName']) ? $data['modulePathName'] : null;
        $this->container['executeLatestTime'] = isset($data['executeLatestTime']) ? $data['executeLatestTime'] : null;
        $this->container['executeDuration'] = isset($data['executeDuration']) ? $data['executeDuration'] : null;
        $this->container['executeTimes'] = isset($data['executeTimes']) ? $data['executeTimes'] : null;
        $this->container['isKeyword'] = isset($data['isKeyword']) ? $data['isKeyword'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['newCreated'] = isset($data['newCreated']) ? $data['newCreated'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['creationVersionName'] = isset($data['creationVersionName']) ? $data['creationVersionName'] : null;
        $this->container['featurePath'] = isset($data['featurePath']) ? $data['featurePath'] : null;
        $this->container['testcaseUri'] = isset($data['testcaseUri']) ? $data['testcaseUri'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['iteratorCaseUri'] = isset($data['iteratorCaseUri']) ? $data['iteratorCaseUri'] : null;
        $this->container['scriptLink'] = isset($data['scriptLink']) ? $data['scriptLink'] : null;
        $this->container['customField1'] = isset($data['customField1']) ? $data['customField1'] : null;
        $this->container['customField2'] = isset($data['customField2']) ? $data['customField2'] : null;
        $this->container['customField3'] = isset($data['customField3']) ? $data['customField3'] : null;
        $this->container['customField4'] = isset($data['customField4']) ? $data['customField4'] : null;
        $this->container['customField5'] = isset($data['customField5']) ? $data['customField5'] : null;
        $this->container['customField6'] = isset($data['customField6']) ? $data['customField6'] : null;
        $this->container['customField7'] = isset($data['customField7']) ? $data['customField7'] : null;
        $this->container['customField8'] = isset($data['customField8']) ? $data['customField8'] : null;
        $this->container['customField9'] = isset($data['customField9']) ? $data['customField9'] : null;
        $this->container['customField10'] = isset($data['customField10']) ? $data['customField10'] : null;
        $this->container['customField11'] = isset($data['customField11']) ? $data['customField11'] : null;
        $this->container['customField12'] = isset($data['customField12']) ? $data['customField12'] : null;
        $this->container['customField13'] = isset($data['customField13']) ? $data['customField13'] : null;
        $this->container['customField14'] = isset($data['customField14']) ? $data['customField14'] : null;
        $this->container['customField15'] = isset($data['customField15']) ? $data['customField15'] : null;
        $this->container['customField16'] = isset($data['customField16']) ? $data['customField16'] : null;
        $this->container['customField17'] = isset($data['customField17']) ? $data['customField17'] : null;
        $this->container['customField18'] = isset($data['customField18']) ? $data['customField18'] : null;
        $this->container['customField19'] = isset($data['customField19']) ? $data['customField19'] : null;
        $this->container['customField20'] = isset($data['customField20']) ? $data['customField20'] : null;
        $this->container['customField21'] = isset($data['customField21']) ? $data['customField21'] : null;
        $this->container['customField22'] = isset($data['customField22']) ? $data['customField22'] : null;
        $this->container['customField23'] = isset($data['customField23']) ? $data['customField23'] : null;
        $this->container['customField24'] = isset($data['customField24']) ? $data['customField24'] : null;
        $this->container['customField25'] = isset($data['customField25']) ? $data['customField25'] : null;
        $this->container['lastModifierName'] = isset($data['lastModifierName']) ? $data['lastModifierName'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['associateDefect'] = isset($data['associateDefect']) ? $data['associateDefect'] : null;
        $this->container['associateIssue'] = isset($data['associateIssue']) ? $data['associateIssue'] : null;
        $this->container['defectList'] = isset($data['defectList']) ? $data['defectList'] : null;
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
    * Gets uri
    *  资源URI
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 资源URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets type
    *  资源类型
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
    * @param string|null $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets author
    *  创建人
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author 创建人
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
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
    * Gets rank
    *  级别
    *
    * @return int|null
    */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
    * Sets rank
    *
    * @param int|null $rank 级别
    *
    * @return $this
    */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;
        return $this;
    }

    /**
    * Gets preparation
    *  前置条件
    *
    * @return string|null
    */
    public function getPreparation()
    {
        return $this->container['preparation'];
    }

    /**
    * Sets preparation
    *
    * @param string|null $preparation 前置条件
    *
    * @return $this
    */
    public function setPreparation($preparation)
    {
        $this->container['preparation'] = $preparation;
        return $this;
    }

    /**
    * Gets remark
    *  备注
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
    * @param string|null $remark 备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets stage
    *  测试阶段
    *
    * @return string|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string|null $stage 测试阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets activity
    *  测试类型
    *
    * @return string|null
    */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
    * Sets activity
    *
    * @param string|null $activity 测试类型
    *
    * @return $this
    */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;
        return $this;
    }

    /**
    * Gets keywords
    *  关键词
    *
    * @return string|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param string|null $keywords 关键词
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets market
    *  apitest标记是否代码已提交
    *
    * @return string|null
    */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
    * Sets market
    *
    * @param string|null $market apitest标记是否代码已提交
    *
    * @return $this
    */
    public function setMarket($market)
    {
        $this->container['market'] = $market;
        return $this;
    }

    /**
    * Gets designer
    *  设计者
    *
    * @return string|null
    */
    public function getDesigner()
    {
        return $this->container['designer'];
    }

    /**
    * Sets designer
    *
    * @param string|null $designer 设计者
    *
    * @return $this
    */
    public function setDesigner($designer)
    {
        $this->container['designer'] = $designer;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets executeParameter
    *  执行参数
    *
    * @return string|null
    */
    public function getExecuteParameter()
    {
        return $this->container['executeParameter'];
    }

    /**
    * Sets executeParameter
    *
    * @param string|null $executeParameter 执行参数
    *
    * @return $this
    */
    public function setExecuteParameter($executeParameter)
    {
        $this->container['executeParameter'] = $executeParameter;
        return $this;
    }

    /**
    * Gets region
    *  逻辑region
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
    * @param string|null $region 逻辑region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets owner
    *  处理人id，IteratorTestCase字段
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 处理人id，IteratorTestCase字段
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets issue
    *  issue
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleIssueVo|null
    */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
    * Sets issue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleIssueVo|null $issue issue
    *
    * @return $this
    */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;
        return $this;
    }

    /**
    * Gets lastModifier
    *  最后修改人
    *
    * @return string|null
    */
    public function getLastModifier()
    {
        return $this->container['lastModifier'];
    }

    /**
    * Sets lastModifier
    *
    * @param string|null $lastModifier 最后修改人
    *
    * @return $this
    */
    public function setLastModifier($lastModifier)
    {
        $this->container['lastModifier'] = $lastModifier;
        return $this;
    }

    /**
    * Gets lastModified
    *  最后修改时间
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
    * @param \DateTime|null $lastModified 最后修改时间
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets lastModifiedTimestamp
    *  修改时间时间戳
    *
    * @return int|null
    */
    public function getLastModifiedTimestamp()
    {
        return $this->container['lastModifiedTimestamp'];
    }

    /**
    * Sets lastModifiedTimestamp
    *
    * @param int|null $lastModifiedTimestamp 修改时间时间戳
    *
    * @return $this
    */
    public function setLastModifiedTimestamp($lastModifiedTimestamp)
    {
        $this->container['lastModifiedTimestamp'] = $lastModifiedTimestamp;
        return $this;
    }

    /**
    * Gets lastChangeTime
    *  最后变更时间
    *
    * @return \DateTime|null
    */
    public function getLastChangeTime()
    {
        return $this->container['lastChangeTime'];
    }

    /**
    * Sets lastChangeTime
    *
    * @param \DateTime|null $lastChangeTime 最后变更时间
    *
    * @return $this
    */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->container['lastChangeTime'] = $lastChangeTime;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本URI
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets originUri
    *  源资源URI
    *
    * @return string|null
    */
    public function getOriginUri()
    {
        return $this->container['originUri'];
    }

    /**
    * Sets originUri
    *
    * @param string|null $originUri 源资源URI
    *
    * @return $this
    */
    public function setOriginUri($originUri)
    {
        $this->container['originUri'] = $originUri;
        return $this;
    }

    /**
    * Gets parentUri
    *  父资源URI
    *
    * @return string|null
    */
    public function getParentUri()
    {
        return $this->container['parentUri'];
    }

    /**
    * Sets parentUri
    *
    * @param string|null $parentUri 父资源URI
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets parentPath
    *  父资源路径
    *
    * @return string|null
    */
    public function getParentPath()
    {
        return $this->container['parentPath'];
    }

    /**
    * Sets parentPath
    *
    * @param string|null $parentPath 父资源路径
    *
    * @return $this
    */
    public function setParentPath($parentPath)
    {
        $this->container['parentPath'] = $parentPath;
        return $this;
    }

    /**
    * Gets creationVersionUri
    *  创建版本URI
    *
    * @return string|null
    */
    public function getCreationVersionUri()
    {
        return $this->container['creationVersionUri'];
    }

    /**
    * Sets creationVersionUri
    *
    * @param string|null $creationVersionUri 创建版本URI
    *
    * @return $this
    */
    public function setCreationVersionUri($creationVersionUri)
    {
        $this->container['creationVersionUri'] = $creationVersionUri;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param \DateTime|null $creationDate 创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets creationDateTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreationDateTimestamp()
    {
        return $this->container['creationDateTimestamp'];
    }

    /**
    * Sets creationDateTimestamp
    *
    * @param int|null $creationDateTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreationDateTimestamp($creationDateTimestamp)
    {
        $this->container['creationDateTimestamp'] = $creationDateTimestamp;
        return $this;
    }

    /**
    * Gets authorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName 创建人名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets comment
    *  备注
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 备注
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets number
    *  编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets caseType
    *  用例类型
    *
    * @return int|null
    */
    public function getCaseType()
    {
        return $this->container['caseType'];
    }

    /**
    * Sets caseType
    *
    * @param int|null $caseType 用例类型
    *
    * @return $this
    */
    public function setCaseType($caseType)
    {
        $this->container['caseType'] = $caseType;
        return $this;
    }

    /**
    * Gets platformType
    *  执行平台类型
    *
    * @return int|null
    */
    public function getPlatformType()
    {
        return $this->container['platformType'];
    }

    /**
    * Sets platformType
    *
    * @param int|null $platformType 执行平台类型
    *
    * @return $this
    */
    public function setPlatformType($platformType)
    {
        $this->container['platformType'] = $platformType;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets serviceTypeName
    *  服务类型名称
    *
    * @return string|null
    */
    public function getServiceTypeName()
    {
        return $this->container['serviceTypeName'];
    }

    /**
    * Sets serviceTypeName
    *
    * @param string|null $serviceTypeName 服务类型名称
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
        return $this;
    }

    /**
    * Gets testType
    *  测试类型
    *
    * @return int|null
    */
    public function getTestType()
    {
        return $this->container['testType'];
    }

    /**
    * Sets testType
    *
    * @param int|null $testType 测试类型
    *
    * @return $this
    */
    public function setTestType($testType)
    {
        $this->container['testType'] = $testType;
        return $this;
    }

    /**
    * Gets testTypeName
    *  测试类型名称
    *
    * @return string|null
    */
    public function getTestTypeName()
    {
        return $this->container['testTypeName'];
    }

    /**
    * Sets testTypeName
    *
    * @param string|null $testTypeName 测试类型名称
    *
    * @return $this
    */
    public function setTestTypeName($testTypeName)
    {
        $this->container['testTypeName'] = $testTypeName;
        return $this;
    }

    /**
    * Gets designNote
    *  设计描述
    *
    * @return string|null
    */
    public function getDesignNote()
    {
        return $this->container['designNote'];
    }

    /**
    * Sets designNote
    *
    * @param string|null $designNote 设计描述
    *
    * @return $this
    */
    public function setDesignNote($designNote)
    {
        $this->container['designNote'] = $designNote;
        return $this;
    }

    /**
    * Gets testStep
    *  测试步骤
    *
    * @return string|null
    */
    public function getTestStep()
    {
        return $this->container['testStep'];
    }

    /**
    * Sets testStep
    *
    * @param string|null $testStep 测试步骤
    *
    * @return $this
    */
    public function setTestStep($testStep)
    {
        $this->container['testStep'] = $testStep;
        return $this;
    }

    /**
    * Gets expectOutput
    *  期望结果
    *
    * @return string|null
    */
    public function getExpectOutput()
    {
        return $this->container['expectOutput'];
    }

    /**
    * Sets expectOutput
    *
    * @param string|null $expectOutput 期望结果
    *
    * @return $this
    */
    public function setExpectOutput($expectOutput)
    {
        $this->container['expectOutput'] = $expectOutput;
        return $this;
    }

    /**
    * Gets envType
    *  测试环境类型
    *
    * @return string|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param string|null $envType 测试环境类型
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Gets exePlatform
    *  执行平台
    *
    * @return string|null
    */
    public function getExePlatform()
    {
        return $this->container['exePlatform'];
    }

    /**
    * Sets exePlatform
    *
    * @param string|null $exePlatform 执行平台
    *
    * @return $this
    */
    public function setExePlatform($exePlatform)
    {
        $this->container['exePlatform'] = $exePlatform;
        return $this;
    }

    /**
    * Gets testcaseProject
    *  测试工程
    *
    * @return string|null
    */
    public function getTestcaseProject()
    {
        return $this->container['testcaseProject'];
    }

    /**
    * Sets testcaseProject
    *
    * @param string|null $testcaseProject 测试工程
    *
    * @return $this
    */
    public function setTestcaseProject($testcaseProject)
    {
        $this->container['testcaseProject'] = $testcaseProject;
        return $this;
    }

    /**
    * Gets svnScriptPath
    *  脚本路径
    *
    * @return string|null
    */
    public function getSvnScriptPath()
    {
        return $this->container['svnScriptPath'];
    }

    /**
    * Sets svnScriptPath
    *
    * @param string|null $svnScriptPath 脚本路径
    *
    * @return $this
    */
    public function setSvnScriptPath($svnScriptPath)
    {
        $this->container['svnScriptPath'] = $svnScriptPath;
        return $this;
    }

    /**
    * Gets mapRestrict
    *  约束条件
    *
    * @return string|null
    */
    public function getMapRestrict()
    {
        return $this->container['mapRestrict'];
    }

    /**
    * Sets mapRestrict
    *
    * @param string|null $mapRestrict 约束条件
    *
    * @return $this
    */
    public function setMapRestrict($mapRestrict)
    {
        $this->container['mapRestrict'] = $mapRestrict;
        return $this;
    }

    /**
    * Gets networkScriptName
    *  网络脚本名
    *
    * @return string|null
    */
    public function getNetworkScriptName()
    {
        return $this->container['networkScriptName'];
    }

    /**
    * Sets networkScriptName
    *
    * @param string|null $networkScriptName 网络脚本名
    *
    * @return $this
    */
    public function setNetworkScriptName($networkScriptName)
    {
        $this->container['networkScriptName'] = $networkScriptName;
        return $this;
    }

    /**
    * Gets autoType
    *  自动化类型，非自动化:0, 是自动化:1
    *
    * @return int|null
    */
    public function getAutoType()
    {
        return $this->container['autoType'];
    }

    /**
    * Sets autoType
    *
    * @param int|null $autoType 自动化类型，非自动化:0, 是自动化:1
    *
    * @return $this
    */
    public function setAutoType($autoType)
    {
        $this->container['autoType'] = $autoType;
        return $this;
    }

    /**
    * Gets toBeAutoExec
    *  被自动化执行
    *
    * @return int|null
    */
    public function getToBeAutoExec()
    {
        return $this->container['toBeAutoExec'];
    }

    /**
    * Sets toBeAutoExec
    *
    * @param int|null $toBeAutoExec 被自动化执行
    *
    * @return $this
    */
    public function setToBeAutoExec($toBeAutoExec)
    {
        $this->container['toBeAutoExec'] = $toBeAutoExec;
        return $this;
    }

    /**
    * Gets lastResult
    *  最后一次结果
    *
    * @return string|null
    */
    public function getLastResult()
    {
        return $this->container['lastResult'];
    }

    /**
    * Sets lastResult
    *
    * @param string|null $lastResult 最后一次结果
    *
    * @return $this
    */
    public function setLastResult($lastResult)
    {
        $this->container['lastResult'] = $lastResult;
        return $this;
    }

    /**
    * Gets lastResultUri
    *  最后一次结果Uri
    *
    * @return string|null
    */
    public function getLastResultUri()
    {
        return $this->container['lastResultUri'];
    }

    /**
    * Sets lastResultUri
    *
    * @param string|null $lastResultUri 最后一次结果Uri
    *
    * @return $this
    */
    public function setLastResultUri($lastResultUri)
    {
        $this->container['lastResultUri'] = $lastResultUri;
        return $this;
    }

    /**
    * Gets featureUri
    *  目录Uri
    *
    * @return string|null
    */
    public function getFeatureUri()
    {
        return $this->container['featureUri'];
    }

    /**
    * Sets featureUri
    *
    * @param string|null $featureUri 目录Uri
    *
    * @return $this
    */
    public function setFeatureUri($featureUri)
    {
        $this->container['featureUri'] = $featureUri;
        return $this;
    }

    /**
    * Gets featureName
    *  目录名称
    *
    * @return string|null
    */
    public function getFeatureName()
    {
        return $this->container['featureName'];
    }

    /**
    * Sets featureName
    *
    * @param string|null $featureName 目录名称
    *
    * @return $this
    */
    public function setFeatureName($featureName)
    {
        $this->container['featureName'] = $featureName;
        return $this;
    }

    /**
    * Gets interfaceName
    *  测试接口名
    *
    * @return string|null
    */
    public function getInterfaceName()
    {
        return $this->container['interfaceName'];
    }

    /**
    * Sets interfaceName
    *
    * @param string|null $interfaceName 测试接口名
    *
    * @return $this
    */
    public function setInterfaceName($interfaceName)
    {
        $this->container['interfaceName'] = $interfaceName;
        return $this;
    }

    /**
    * Gets snpNo
    *  网络问题ID
    *
    * @return string|null
    */
    public function getSnpNo()
    {
        return $this->container['snpNo'];
    }

    /**
    * Sets snpNo
    *
    * @param string|null $snpNo 网络问题ID
    *
    * @return $this
    */
    public function setSnpNo($snpNo)
    {
        $this->container['snpNo'] = $snpNo;
        return $this;
    }

    /**
    * Gets drRelationId
    *  关联需求编号
    *
    * @return string|null
    */
    public function getDrRelationId()
    {
        return $this->container['drRelationId'];
    }

    /**
    * Sets drRelationId
    *
    * @param string|null $drRelationId 关联需求编号
    *
    * @return $this
    */
    public function setDrRelationId($drRelationId)
    {
        $this->container['drRelationId'] = $drRelationId;
        return $this;
    }

    /**
    * Gets issueName
    *  需求名称
    *
    * @return string|null
    */
    public function getIssueName()
    {
        return $this->container['issueName'];
    }

    /**
    * Sets issueName
    *
    * @param string|null $issueName 需求名称
    *
    * @return $this
    */
    public function setIssueName($issueName)
    {
        $this->container['issueName'] = $issueName;
        return $this;
    }

    /**
    * Gets testBaseNum
    *  测试基数
    *
    * @return string|null
    */
    public function getTestBaseNum()
    {
        return $this->container['testBaseNum'];
    }

    /**
    * Sets testBaseNum
    *
    * @param string|null $testBaseNum 测试基数
    *
    * @return $this
    */
    public function setTestBaseNum($testBaseNum)
    {
        $this->container['testBaseNum'] = $testBaseNum;
        return $this;
    }

    /**
    * Gets automaticallyExecuted
    *  是否被自动化执行
    *
    * @return int|null
    */
    public function getAutomaticallyExecuted()
    {
        return $this->container['automaticallyExecuted'];
    }

    /**
    * Sets automaticallyExecuted
    *
    * @param int|null $automaticallyExecuted 是否被自动化执行
    *
    * @return $this
    */
    public function setAutomaticallyExecuted($automaticallyExecuted)
    {
        $this->container['automaticallyExecuted'] = $automaticallyExecuted;
        return $this;
    }

    /**
    * Gets firstExecuteTime
    *  第一次执行时间
    *
    * @return \DateTime|null
    */
    public function getFirstExecuteTime()
    {
        return $this->container['firstExecuteTime'];
    }

    /**
    * Sets firstExecuteTime
    *
    * @param \DateTime|null $firstExecuteTime 第一次执行时间
    *
    * @return $this
    */
    public function setFirstExecuteTime($firstExecuteTime)
    {
        $this->container['firstExecuteTime'] = $firstExecuteTime;
        return $this;
    }

    /**
    * Gets detectType
    *  检测类型
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType 检测类型
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
        return $this;
    }

    /**
    * Gets executeParam
    *  执行参数
    *
    * @return string|null
    */
    public function getExecuteParam()
    {
        return $this->container['executeParam'];
    }

    /**
    * Sets executeParam
    *
    * @param string|null $executeParam 执行参数
    *
    * @return $this
    */
    public function setExecuteParam($executeParam)
    {
        $this->container['executeParam'] = $executeParam;
        return $this;
    }

    /**
    * Gets testFeature
    *  分析领域
    *
    * @return string|null
    */
    public function getTestFeature()
    {
        return $this->container['testFeature'];
    }

    /**
    * Sets testFeature
    *
    * @param string|null $testFeature 分析领域
    *
    * @return $this
    */
    public function setTestFeature($testFeature)
    {
        $this->container['testFeature'] = $testFeature;
        return $this;
    }

    /**
    * Gets isContractTestcase
    *  是否是契约用例，0:表示非契约用例, 1：表示契约用例
    *
    * @return int|null
    */
    public function getIsContractTestcase()
    {
        return $this->container['isContractTestcase'];
    }

    /**
    * Sets isContractTestcase
    *
    * @param int|null $isContractTestcase 是否是契约用例，0:表示非契约用例, 1：表示契约用例
    *
    * @return $this
    */
    public function setIsContractTestcase($isContractTestcase)
    {
        $this->container['isContractTestcase'] = $isContractTestcase;
        return $this;
    }

    /**
    * Gets timeCost
    *  总共耗时
    *
    * @return double|null
    */
    public function getTimeCost()
    {
        return $this->container['timeCost'];
    }

    /**
    * Sets timeCost
    *
    * @param double|null $timeCost 总共耗时
    *
    * @return $this
    */
    public function setTimeCost($timeCost)
    {
        $this->container['timeCost'] = $timeCost;
        return $this;
    }

    /**
    * Gets beAutoTypeTime
    *  记录用例由非自动化变为自动化类型的时间
    *
    * @return \DateTime|null
    */
    public function getBeAutoTypeTime()
    {
        return $this->container['beAutoTypeTime'];
    }

    /**
    * Sets beAutoTypeTime
    *
    * @param \DateTime|null $beAutoTypeTime 记录用例由非自动化变为自动化类型的时间
    *
    * @return $this
    */
    public function setBeAutoTypeTime($beAutoTypeTime)
    {
        $this->container['beAutoTypeTime'] = $beAutoTypeTime;
        return $this;
    }

    /**
    * Gets compareNumber
    *  配对用例编号
    *
    * @return string|null
    */
    public function getCompareNumber()
    {
        return $this->container['compareNumber'];
    }

    /**
    * Sets compareNumber
    *
    * @param string|null $compareNumber 配对用例编号
    *
    * @return $this
    */
    public function setCompareNumber($compareNumber)
    {
        $this->container['compareNumber'] = $compareNumber;
        return $this;
    }

    /**
    * Gets sceneFlag
    *  场景标识
    *
    * @return string|null
    */
    public function getSceneFlag()
    {
        return $this->container['sceneFlag'];
    }

    /**
    * Sets sceneFlag
    *
    * @param string|null $sceneFlag 场景标识
    *
    * @return $this
    */
    public function setSceneFlag($sceneFlag)
    {
        $this->container['sceneFlag'] = $sceneFlag;
        return $this;
    }

    /**
    * Gets baseFlag
    *  场景标识
    *
    * @return string|null
    */
    public function getBaseFlag()
    {
        return $this->container['baseFlag'];
    }

    /**
    * Sets baseFlag
    *
    * @param string|null $baseFlag 场景标识
    *
    * @return $this
    */
    public function setBaseFlag($baseFlag)
    {
        $this->container['baseFlag'] = $baseFlag;
        return $this;
    }

    /**
    * Gets paraValidator
    *  区别是否从yaml中生成的用例，默认false
    *
    * @return string|null
    */
    public function getParaValidator()
    {
        return $this->container['paraValidator'];
    }

    /**
    * Sets paraValidator
    *
    * @param string|null $paraValidator 区别是否从yaml中生成的用例，默认false
    *
    * @return $this
    */
    public function setParaValidator($paraValidator)
    {
        $this->container['paraValidator'] = $paraValidator;
        return $this;
    }

    /**
    * Gets knetNodeId
    *  knet节点id
    *
    * @return string|null
    */
    public function getKnetNodeId()
    {
        return $this->container['knetNodeId'];
    }

    /**
    * Sets knetNodeId
    *
    * @param string|null $knetNodeId knet节点id
    *
    * @return $this
    */
    public function setKnetNodeId($knetNodeId)
    {
        $this->container['knetNodeId'] = $knetNodeId;
        return $this;
    }

    /**
    * Gets lastExeAuthor
    *  最后一次执行用户
    *
    * @return string|null
    */
    public function getLastExeAuthor()
    {
        return $this->container['lastExeAuthor'];
    }

    /**
    * Sets lastExeAuthor
    *
    * @param string|null $lastExeAuthor 最后一次执行用户
    *
    * @return $this
    */
    public function setLastExeAuthor($lastExeAuthor)
    {
        $this->container['lastExeAuthor'] = $lastExeAuthor;
        return $this;
    }

    /**
    * Gets cloudCarrier
    *  运营商
    *
    * @return string|null
    */
    public function getCloudCarrier()
    {
        return $this->container['cloudCarrier'];
    }

    /**
    * Sets cloudCarrier
    *
    * @param string|null $cloudCarrier 运营商
    *
    * @return $this
    */
    public function setCloudCarrier($cloudCarrier)
    {
        $this->container['cloudCarrier'] = $cloudCarrier;
        return $this;
    }

    /**
    * Gets marketPlace
    *  应用市场
    *
    * @return string|null
    */
    public function getMarketPlace()
    {
        return $this->container['marketPlace'];
    }

    /**
    * Sets marketPlace
    *
    * @param string|null $marketPlace 应用市场
    *
    * @return $this
    */
    public function setMarketPlace($marketPlace)
    {
        $this->container['marketPlace'] = $marketPlace;
        return $this;
    }

    /**
    * Gets testMindId
    *  脑图id
    *
    * @return string|null
    */
    public function getTestMindId()
    {
        return $this->container['testMindId'];
    }

    /**
    * Sets testMindId
    *
    * @param string|null $testMindId 脑图id
    *
    * @return $this
    */
    public function setTestMindId($testMindId)
    {
        $this->container['testMindId'] = $testMindId;
        return $this;
    }

    /**
    * Gets testMindUrl
    *  脑图url
    *
    * @return string|null
    */
    public function getTestMindUrl()
    {
        return $this->container['testMindUrl'];
    }

    /**
    * Sets testMindUrl
    *
    * @param string|null $testMindUrl 脑图url
    *
    * @return $this
    */
    public function setTestMindUrl($testMindUrl)
    {
        $this->container['testMindUrl'] = $testMindUrl;
        return $this;
    }

    /**
    * Gets commitUrl
    *  git提交url
    *
    * @return string|null
    */
    public function getCommitUrl()
    {
        return $this->container['commitUrl'];
    }

    /**
    * Sets commitUrl
    *
    * @param string|null $commitUrl git提交url
    *
    * @return $this
    */
    public function setCommitUrl($commitUrl)
    {
        $this->container['commitUrl'] = $commitUrl;
        return $this;
    }

    /**
    * Gets testPatternNumber
    *  测试模式编号
    *
    * @return string|null
    */
    public function getTestPatternNumber()
    {
        return $this->container['testPatternNumber'];
    }

    /**
    * Sets testPatternNumber
    *
    * @param string|null $testPatternNumber 测试模式编号
    *
    * @return $this
    */
    public function setTestPatternNumber($testPatternNumber)
    {
        $this->container['testPatternNumber'] = $testPatternNumber;
        return $this;
    }

    /**
    * Gets testFactorNumber
    *  测试因子编号
    *
    * @return string|null
    */
    public function getTestFactorNumber()
    {
        return $this->container['testFactorNumber'];
    }

    /**
    * Sets testFactorNumber
    *
    * @param string|null $testFactorNumber 测试因子编号
    *
    * @return $this
    */
    public function setTestFactorNumber($testFactorNumber)
    {
        $this->container['testFactorNumber'] = $testFactorNumber;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态Code
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 状态Code
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets resultCode
    *  结果Code
    *
    * @return string|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param string|null $resultCode 结果Code
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets releaseId
    *  迭代ID
    *
    * @return string|null
    */
    public function getReleaseId()
    {
        return $this->container['releaseId'];
    }

    /**
    * Sets releaseId
    *
    * @param string|null $releaseId 迭代ID
    *
    * @return $this
    */
    public function setReleaseId($releaseId)
    {
        $this->container['releaseId'] = $releaseId;
        return $this;
    }

    /**
    * Gets labelId
    *  标签ID
    *
    * @return string|null
    */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
    * Sets labelId
    *
    * @param string|null $labelId 标签ID
    *
    * @return $this
    */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;
        return $this;
    }

    /**
    * Gets labels
    *  用例标签名称列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\LabelVo[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\LabelVo[]|null $labels 用例标签名称列表
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块ID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块ID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets moduleName
    *  模块名称
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 模块名称
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets modulePath
    *  模块path
    *
    * @return string|null
    */
    public function getModulePath()
    {
        return $this->container['modulePath'];
    }

    /**
    * Sets modulePath
    *
    * @param string|null $modulePath 模块path
    *
    * @return $this
    */
    public function setModulePath($modulePath)
    {
        $this->container['modulePath'] = $modulePath;
        return $this;
    }

    /**
    * Gets modulePathName
    *  模块路径名称
    *
    * @return string|null
    */
    public function getModulePathName()
    {
        return $this->container['modulePathName'];
    }

    /**
    * Sets modulePathName
    *
    * @param string|null $modulePathName 模块路径名称
    *
    * @return $this
    */
    public function setModulePathName($modulePathName)
    {
        $this->container['modulePathName'] = $modulePathName;
        return $this;
    }

    /**
    * Gets executeLatestTime
    *  最后执行时间
    *
    * @return \DateTime|null
    */
    public function getExecuteLatestTime()
    {
        return $this->container['executeLatestTime'];
    }

    /**
    * Sets executeLatestTime
    *
    * @param \DateTime|null $executeLatestTime 最后执行时间
    *
    * @return $this
    */
    public function setExecuteLatestTime($executeLatestTime)
    {
        $this->container['executeLatestTime'] = $executeLatestTime;
        return $this;
    }

    /**
    * Gets executeDuration
    *  执行时长
    *
    * @return string|null
    */
    public function getExecuteDuration()
    {
        return $this->container['executeDuration'];
    }

    /**
    * Sets executeDuration
    *
    * @param string|null $executeDuration 执行时长
    *
    * @return $this
    */
    public function setExecuteDuration($executeDuration)
    {
        $this->container['executeDuration'] = $executeDuration;
        return $this;
    }

    /**
    * Gets executeTimes
    *  执行次数
    *
    * @return int|null
    */
    public function getExecuteTimes()
    {
        return $this->container['executeTimes'];
    }

    /**
    * Sets executeTimes
    *
    * @param int|null $executeTimes 执行次数
    *
    * @return $this
    */
    public function setExecuteTimes($executeTimes)
    {
        $this->container['executeTimes'] = $executeTimes;
        return $this;
    }

    /**
    * Gets isKeyword
    *  是否关键用例
    *
    * @return int|null
    */
    public function getIsKeyword()
    {
        return $this->container['isKeyword'];
    }

    /**
    * Sets isKeyword
    *
    * @param int|null $isKeyword 是否关键用例
    *
    * @return $this
    */
    public function setIsKeyword($isKeyword)
    {
        $this->container['isKeyword'] = $isKeyword;
        return $this;
    }

    /**
    * Gets releaseDev
    *  测试版本号
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 测试版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets newCreated
    *  是否用户新增用例
    *
    * @return string|null
    */
    public function getNewCreated()
    {
        return $this->container['newCreated'];
    }

    /**
    * Sets newCreated
    *
    * @param string|null $newCreated 是否用户新增用例
    *
    * @return $this
    */
    public function setNewCreated($newCreated)
    {
        $this->container['newCreated'] = $newCreated;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets creationVersionName
    *  创建版本名称，原逻辑marshall添加字段
    *
    * @return string|null
    */
    public function getCreationVersionName()
    {
        return $this->container['creationVersionName'];
    }

    /**
    * Sets creationVersionName
    *
    * @param string|null $creationVersionName 创建版本名称，原逻辑marshall添加字段
    *
    * @return $this
    */
    public function setCreationVersionName($creationVersionName)
    {
        $this->container['creationVersionName'] = $creationVersionName;
        return $this;
    }

    /**
    * Gets featurePath
    *  特性路径，原逻辑marshall添加字段
    *
    * @return string|null
    */
    public function getFeaturePath()
    {
        return $this->container['featurePath'];
    }

    /**
    * Sets featurePath
    *
    * @param string|null $featurePath 特性路径，原逻辑marshall添加字段
    *
    * @return $this
    */
    public function setFeaturePath($featurePath)
    {
        $this->container['featurePath'] = $featurePath;
        return $this;
    }

    /**
    * Gets testcaseUri
    *  实体用例Uri，IteratorTestCase字段
    *
    * @return string|null
    */
    public function getTestcaseUri()
    {
        return $this->container['testcaseUri'];
    }

    /**
    * Sets testcaseUri
    *
    * @param string|null $testcaseUri 实体用例Uri，IteratorTestCase字段
    *
    * @return $this
    */
    public function setTestcaseUri($testcaseUri)
    {
        $this->container['testcaseUri'] = $testcaseUri;
        return $this;
    }

    /**
    * Gets ownerName
    *  处理人名称
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 处理人名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets iteratorCaseUri
    *  迭代用例Uri，IteratorTestCase字段
    *
    * @return string|null
    */
    public function getIteratorCaseUri()
    {
        return $this->container['iteratorCaseUri'];
    }

    /**
    * Sets iteratorCaseUri
    *
    * @param string|null $iteratorCaseUri 迭代用例Uri，IteratorTestCase字段
    *
    * @return $this
    */
    public function setIteratorCaseUri($iteratorCaseUri)
    {
        $this->container['iteratorCaseUri'] = $iteratorCaseUri;
        return $this;
    }

    /**
    * Gets scriptLink
    *  脚本链接scriptLink
    *
    * @return string|null
    */
    public function getScriptLink()
    {
        return $this->container['scriptLink'];
    }

    /**
    * Sets scriptLink
    *
    * @param string|null $scriptLink 脚本链接scriptLink
    *
    * @return $this
    */
    public function setScriptLink($scriptLink)
    {
        $this->container['scriptLink'] = $scriptLink;
        return $this;
    }

    /**
    * Gets customField1
    *  自定义字段1
    *
    * @return string|null
    */
    public function getCustomField1()
    {
        return $this->container['customField1'];
    }

    /**
    * Sets customField1
    *
    * @param string|null $customField1 自定义字段1
    *
    * @return $this
    */
    public function setCustomField1($customField1)
    {
        $this->container['customField1'] = $customField1;
        return $this;
    }

    /**
    * Gets customField2
    *  自定义字段2
    *
    * @return string|null
    */
    public function getCustomField2()
    {
        return $this->container['customField2'];
    }

    /**
    * Sets customField2
    *
    * @param string|null $customField2 自定义字段2
    *
    * @return $this
    */
    public function setCustomField2($customField2)
    {
        $this->container['customField2'] = $customField2;
        return $this;
    }

    /**
    * Gets customField3
    *  自定义字段3
    *
    * @return string|null
    */
    public function getCustomField3()
    {
        return $this->container['customField3'];
    }

    /**
    * Sets customField3
    *
    * @param string|null $customField3 自定义字段3
    *
    * @return $this
    */
    public function setCustomField3($customField3)
    {
        $this->container['customField3'] = $customField3;
        return $this;
    }

    /**
    * Gets customField4
    *  自定义字段4
    *
    * @return string|null
    */
    public function getCustomField4()
    {
        return $this->container['customField4'];
    }

    /**
    * Sets customField4
    *
    * @param string|null $customField4 自定义字段4
    *
    * @return $this
    */
    public function setCustomField4($customField4)
    {
        $this->container['customField4'] = $customField4;
        return $this;
    }

    /**
    * Gets customField5
    *  自定义字段5
    *
    * @return string|null
    */
    public function getCustomField5()
    {
        return $this->container['customField5'];
    }

    /**
    * Sets customField5
    *
    * @param string|null $customField5 自定义字段5
    *
    * @return $this
    */
    public function setCustomField5($customField5)
    {
        $this->container['customField5'] = $customField5;
        return $this;
    }

    /**
    * Gets customField6
    *  自定义字段6
    *
    * @return string|null
    */
    public function getCustomField6()
    {
        return $this->container['customField6'];
    }

    /**
    * Sets customField6
    *
    * @param string|null $customField6 自定义字段6
    *
    * @return $this
    */
    public function setCustomField6($customField6)
    {
        $this->container['customField6'] = $customField6;
        return $this;
    }

    /**
    * Gets customField7
    *  自定义字段7
    *
    * @return string|null
    */
    public function getCustomField7()
    {
        return $this->container['customField7'];
    }

    /**
    * Sets customField7
    *
    * @param string|null $customField7 自定义字段7
    *
    * @return $this
    */
    public function setCustomField7($customField7)
    {
        $this->container['customField7'] = $customField7;
        return $this;
    }

    /**
    * Gets customField8
    *  自定义字段8
    *
    * @return string|null
    */
    public function getCustomField8()
    {
        return $this->container['customField8'];
    }

    /**
    * Sets customField8
    *
    * @param string|null $customField8 自定义字段8
    *
    * @return $this
    */
    public function setCustomField8($customField8)
    {
        $this->container['customField8'] = $customField8;
        return $this;
    }

    /**
    * Gets customField9
    *  自定义字段9
    *
    * @return string|null
    */
    public function getCustomField9()
    {
        return $this->container['customField9'];
    }

    /**
    * Sets customField9
    *
    * @param string|null $customField9 自定义字段9
    *
    * @return $this
    */
    public function setCustomField9($customField9)
    {
        $this->container['customField9'] = $customField9;
        return $this;
    }

    /**
    * Gets customField10
    *  自定义字段10
    *
    * @return string|null
    */
    public function getCustomField10()
    {
        return $this->container['customField10'];
    }

    /**
    * Sets customField10
    *
    * @param string|null $customField10 自定义字段10
    *
    * @return $this
    */
    public function setCustomField10($customField10)
    {
        $this->container['customField10'] = $customField10;
        return $this;
    }

    /**
    * Gets customField11
    *  自定义字段11
    *
    * @return string|null
    */
    public function getCustomField11()
    {
        return $this->container['customField11'];
    }

    /**
    * Sets customField11
    *
    * @param string|null $customField11 自定义字段11
    *
    * @return $this
    */
    public function setCustomField11($customField11)
    {
        $this->container['customField11'] = $customField11;
        return $this;
    }

    /**
    * Gets customField12
    *  自定义字段12
    *
    * @return string|null
    */
    public function getCustomField12()
    {
        return $this->container['customField12'];
    }

    /**
    * Sets customField12
    *
    * @param string|null $customField12 自定义字段12
    *
    * @return $this
    */
    public function setCustomField12($customField12)
    {
        $this->container['customField12'] = $customField12;
        return $this;
    }

    /**
    * Gets customField13
    *  自定义字段13
    *
    * @return string|null
    */
    public function getCustomField13()
    {
        return $this->container['customField13'];
    }

    /**
    * Sets customField13
    *
    * @param string|null $customField13 自定义字段13
    *
    * @return $this
    */
    public function setCustomField13($customField13)
    {
        $this->container['customField13'] = $customField13;
        return $this;
    }

    /**
    * Gets customField14
    *  自定义字段14
    *
    * @return string|null
    */
    public function getCustomField14()
    {
        return $this->container['customField14'];
    }

    /**
    * Sets customField14
    *
    * @param string|null $customField14 自定义字段14
    *
    * @return $this
    */
    public function setCustomField14($customField14)
    {
        $this->container['customField14'] = $customField14;
        return $this;
    }

    /**
    * Gets customField15
    *  自定义字段15
    *
    * @return string|null
    */
    public function getCustomField15()
    {
        return $this->container['customField15'];
    }

    /**
    * Sets customField15
    *
    * @param string|null $customField15 自定义字段15
    *
    * @return $this
    */
    public function setCustomField15($customField15)
    {
        $this->container['customField15'] = $customField15;
        return $this;
    }

    /**
    * Gets customField16
    *  自定义字段16
    *
    * @return string|null
    */
    public function getCustomField16()
    {
        return $this->container['customField16'];
    }

    /**
    * Sets customField16
    *
    * @param string|null $customField16 自定义字段16
    *
    * @return $this
    */
    public function setCustomField16($customField16)
    {
        $this->container['customField16'] = $customField16;
        return $this;
    }

    /**
    * Gets customField17
    *  自定义字段17
    *
    * @return string|null
    */
    public function getCustomField17()
    {
        return $this->container['customField17'];
    }

    /**
    * Sets customField17
    *
    * @param string|null $customField17 自定义字段17
    *
    * @return $this
    */
    public function setCustomField17($customField17)
    {
        $this->container['customField17'] = $customField17;
        return $this;
    }

    /**
    * Gets customField18
    *  自定义字段18
    *
    * @return string|null
    */
    public function getCustomField18()
    {
        return $this->container['customField18'];
    }

    /**
    * Sets customField18
    *
    * @param string|null $customField18 自定义字段18
    *
    * @return $this
    */
    public function setCustomField18($customField18)
    {
        $this->container['customField18'] = $customField18;
        return $this;
    }

    /**
    * Gets customField19
    *  自定义字段19
    *
    * @return string|null
    */
    public function getCustomField19()
    {
        return $this->container['customField19'];
    }

    /**
    * Sets customField19
    *
    * @param string|null $customField19 自定义字段19
    *
    * @return $this
    */
    public function setCustomField19($customField19)
    {
        $this->container['customField19'] = $customField19;
        return $this;
    }

    /**
    * Gets customField20
    *  自定义字段20
    *
    * @return string|null
    */
    public function getCustomField20()
    {
        return $this->container['customField20'];
    }

    /**
    * Sets customField20
    *
    * @param string|null $customField20 自定义字段20
    *
    * @return $this
    */
    public function setCustomField20($customField20)
    {
        $this->container['customField20'] = $customField20;
        return $this;
    }

    /**
    * Gets customField21
    *  自定义字段21
    *
    * @return string|null
    */
    public function getCustomField21()
    {
        return $this->container['customField21'];
    }

    /**
    * Sets customField21
    *
    * @param string|null $customField21 自定义字段21
    *
    * @return $this
    */
    public function setCustomField21($customField21)
    {
        $this->container['customField21'] = $customField21;
        return $this;
    }

    /**
    * Gets customField22
    *  自定义字段22
    *
    * @return string|null
    */
    public function getCustomField22()
    {
        return $this->container['customField22'];
    }

    /**
    * Sets customField22
    *
    * @param string|null $customField22 自定义字段22
    *
    * @return $this
    */
    public function setCustomField22($customField22)
    {
        $this->container['customField22'] = $customField22;
        return $this;
    }

    /**
    * Gets customField23
    *  自定义字段23
    *
    * @return string|null
    */
    public function getCustomField23()
    {
        return $this->container['customField23'];
    }

    /**
    * Sets customField23
    *
    * @param string|null $customField23 自定义字段23
    *
    * @return $this
    */
    public function setCustomField23($customField23)
    {
        $this->container['customField23'] = $customField23;
        return $this;
    }

    /**
    * Gets customField24
    *  自定义字段24
    *
    * @return string|null
    */
    public function getCustomField24()
    {
        return $this->container['customField24'];
    }

    /**
    * Sets customField24
    *
    * @param string|null $customField24 自定义字段24
    *
    * @return $this
    */
    public function setCustomField24($customField24)
    {
        $this->container['customField24'] = $customField24;
        return $this;
    }

    /**
    * Gets customField25
    *  自定义字段25
    *
    * @return string|null
    */
    public function getCustomField25()
    {
        return $this->container['customField25'];
    }

    /**
    * Sets customField25
    *
    * @param string|null $customField25 自定义字段25
    *
    * @return $this
    */
    public function setCustomField25($customField25)
    {
        $this->container['customField25'] = $customField25;
        return $this;
    }

    /**
    * Gets lastModifierName
    *  更新人名称
    *
    * @return string|null
    */
    public function getLastModifierName()
    {
        return $this->container['lastModifierName'];
    }

    /**
    * Sets lastModifierName
    *
    * @param string|null $lastModifierName 更新人名称
    *
    * @return $this
    */
    public function setLastModifierName($lastModifierName)
    {
        $this->container['lastModifierName'] = $lastModifierName;
        return $this;
    }

    /**
    * Gets versionName
    *  迭代
    *
    * @return string|null
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string|null $versionName 迭代
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets steps
    *  测试步骤
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseStepVo[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseStepVo[]|null $steps 测试步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets associateDefect
    *  是否关联缺陷
    *
    * @return bool|null
    */
    public function getAssociateDefect()
    {
        return $this->container['associateDefect'];
    }

    /**
    * Sets associateDefect
    *
    * @param bool|null $associateDefect 是否关联缺陷
    *
    * @return $this
    */
    public function setAssociateDefect($associateDefect)
    {
        $this->container['associateDefect'] = $associateDefect;
        return $this;
    }

    /**
    * Gets associateIssue
    *  是否关联需求
    *
    * @return bool|null
    */
    public function getAssociateIssue()
    {
        return $this->container['associateIssue'];
    }

    /**
    * Sets associateIssue
    *
    * @param bool|null $associateIssue 是否关联需求
    *
    * @return $this
    */
    public function setAssociateIssue($associateIssue)
    {
        $this->container['associateIssue'] = $associateIssue;
        return $this;
    }

    /**
    * Gets defectList
    *  缺陷关联信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo[]|null
    */
    public function getDefectList()
    {
        return $this->container['defectList'];
    }

    /**
    * Sets defectList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo[]|null $defectList 缺陷关联信息
    *
    * @return $this
    */
    public function setDefectList($defectList)
    {
        $this->container['defectList'] = $defectList;
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

