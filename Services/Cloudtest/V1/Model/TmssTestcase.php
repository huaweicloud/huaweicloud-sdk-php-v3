<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TmssTestcase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TmssTestcase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activityId  活动id
    * appliedProduct  应用产品
    * author  创建人
    * autoType  自动化类型
    * cataId  用例分类ID
    * creationDate  创建日期
    * customField1  customField1
    * customField10  customField10
    * customField11  customField11
    * customField12  customField12
    * customField13  customField13
    * customField14  customField14
    * customField15  customField15
    * customField16  customField16
    * customField17  customField17
    * customField18  customField18
    * customField19  customField19
    * customField2  customField2
    * customField20  customField20
    * customField21  customField21
    * customField22  customField22
    * customField23  customField23
    * customField24  customField24
    * customField25  customField25
    * customField3  customField3
    * customField4  customField4
    * customField5  customField5
    * customField6  customField6
    * customField7  customField7
    * customField8  customField8
    * customField9  customField9
    * description  描述
    * drRelationid  dr关系ID
    * envType  环境类型
    * exePlatform  执行平台
    * expectOutput  内部预期输出
    * featurePath  特性路径
    * isKeyWord  是否为关键字
    * isContractTestcase  是否为合同测试用例
    * isParaValidatorTestcase  是否为参数校验测试用例
    * labelId  标签ID列表
    * lastModified  最后修改时间
    * lastModifier  最后修改人
    * lastResult  最后的结果
    * level  用例级别
    * market  市场
    * moduleId  模块ID
    * name  用例名称
    * networkScriptName  公共aw和项目的关联关系
    * nodeName  节点名称
    * number  用例编号
    * originUri  原始的uri
    * owner  测试的所有者
    * ownerId  所有者ID
    * preparation  测试前置条件
    * releaseDev  新服务新建用例版本号
    * releaseId  发布ID
    * remark  备注
    * stage  阶段
    * steps  存储测试步骤和预期结果值对象
    * svnScriptPath  脚本路径
    * tags  标签
    * testFeature  测试特性
    * testStep  内部测试步骤
    * testType  测试类型
    * uri  用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activityId' => 'string',
            'appliedProduct' => 'string',
            'author' => 'string',
            'autoType' => 'string',
            'cataId' => 'string',
            'creationDate' => 'string',
            'customField1' => 'string',
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
            'customField2' => 'string',
            'customField20' => 'string',
            'customField21' => 'string',
            'customField22' => 'string',
            'customField23' => 'string',
            'customField24' => 'string',
            'customField25' => 'string',
            'customField3' => 'string',
            'customField4' => 'string',
            'customField5' => 'string',
            'customField6' => 'string',
            'customField7' => 'string',
            'customField8' => 'string',
            'customField9' => 'string',
            'description' => 'string',
            'drRelationid' => 'string',
            'envType' => 'string',
            'exePlatform' => 'string',
            'expectOutput' => 'string',
            'featurePath' => 'string',
            'isKeyWord' => 'int',
            'isContractTestcase' => 'string',
            'isParaValidatorTestcase' => 'string',
            'labelId' => 'string[]',
            'lastModified' => 'string',
            'lastModifier' => 'string',
            'lastResult' => 'string',
            'level' => 'int',
            'market' => 'string',
            'moduleId' => 'string',
            'name' => 'string',
            'networkScriptName' => 'string',
            'nodeName' => 'string',
            'number' => 'string',
            'originUri' => 'string',
            'owner' => 'string',
            'ownerId' => 'string',
            'preparation' => 'string',
            'releaseDev' => 'string',
            'releaseId' => 'string',
            'remark' => 'string',
            'stage' => 'string',
            'steps' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TmssStep[]',
            'svnScriptPath' => 'string',
            'tags' => 'string',
            'testFeature' => 'string',
            'testStep' => 'string',
            'testType' => 'int',
            'uri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activityId  活动id
    * appliedProduct  应用产品
    * author  创建人
    * autoType  自动化类型
    * cataId  用例分类ID
    * creationDate  创建日期
    * customField1  customField1
    * customField10  customField10
    * customField11  customField11
    * customField12  customField12
    * customField13  customField13
    * customField14  customField14
    * customField15  customField15
    * customField16  customField16
    * customField17  customField17
    * customField18  customField18
    * customField19  customField19
    * customField2  customField2
    * customField20  customField20
    * customField21  customField21
    * customField22  customField22
    * customField23  customField23
    * customField24  customField24
    * customField25  customField25
    * customField3  customField3
    * customField4  customField4
    * customField5  customField5
    * customField6  customField6
    * customField7  customField7
    * customField8  customField8
    * customField9  customField9
    * description  描述
    * drRelationid  dr关系ID
    * envType  环境类型
    * exePlatform  执行平台
    * expectOutput  内部预期输出
    * featurePath  特性路径
    * isKeyWord  是否为关键字
    * isContractTestcase  是否为合同测试用例
    * isParaValidatorTestcase  是否为参数校验测试用例
    * labelId  标签ID列表
    * lastModified  最后修改时间
    * lastModifier  最后修改人
    * lastResult  最后的结果
    * level  用例级别
    * market  市场
    * moduleId  模块ID
    * name  用例名称
    * networkScriptName  公共aw和项目的关联关系
    * nodeName  节点名称
    * number  用例编号
    * originUri  原始的uri
    * owner  测试的所有者
    * ownerId  所有者ID
    * preparation  测试前置条件
    * releaseDev  新服务新建用例版本号
    * releaseId  发布ID
    * remark  备注
    * stage  阶段
    * steps  存储测试步骤和预期结果值对象
    * svnScriptPath  脚本路径
    * tags  标签
    * testFeature  测试特性
    * testStep  内部测试步骤
    * testType  测试类型
    * uri  用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activityId' => null,
        'appliedProduct' => null,
        'author' => null,
        'autoType' => null,
        'cataId' => null,
        'creationDate' => null,
        'customField1' => null,
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
        'customField2' => null,
        'customField20' => null,
        'customField21' => null,
        'customField22' => null,
        'customField23' => null,
        'customField24' => null,
        'customField25' => null,
        'customField3' => null,
        'customField4' => null,
        'customField5' => null,
        'customField6' => null,
        'customField7' => null,
        'customField8' => null,
        'customField9' => null,
        'description' => null,
        'drRelationid' => null,
        'envType' => null,
        'exePlatform' => null,
        'expectOutput' => null,
        'featurePath' => null,
        'isKeyWord' => 'int32',
        'isContractTestcase' => null,
        'isParaValidatorTestcase' => null,
        'labelId' => null,
        'lastModified' => null,
        'lastModifier' => null,
        'lastResult' => null,
        'level' => 'int32',
        'market' => null,
        'moduleId' => null,
        'name' => null,
        'networkScriptName' => null,
        'nodeName' => null,
        'number' => null,
        'originUri' => null,
        'owner' => null,
        'ownerId' => null,
        'preparation' => null,
        'releaseDev' => null,
        'releaseId' => null,
        'remark' => null,
        'stage' => null,
        'steps' => null,
        'svnScriptPath' => null,
        'tags' => null,
        'testFeature' => null,
        'testStep' => null,
        'testType' => 'int32',
        'uri' => null
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
    * activityId  活动id
    * appliedProduct  应用产品
    * author  创建人
    * autoType  自动化类型
    * cataId  用例分类ID
    * creationDate  创建日期
    * customField1  customField1
    * customField10  customField10
    * customField11  customField11
    * customField12  customField12
    * customField13  customField13
    * customField14  customField14
    * customField15  customField15
    * customField16  customField16
    * customField17  customField17
    * customField18  customField18
    * customField19  customField19
    * customField2  customField2
    * customField20  customField20
    * customField21  customField21
    * customField22  customField22
    * customField23  customField23
    * customField24  customField24
    * customField25  customField25
    * customField3  customField3
    * customField4  customField4
    * customField5  customField5
    * customField6  customField6
    * customField7  customField7
    * customField8  customField8
    * customField9  customField9
    * description  描述
    * drRelationid  dr关系ID
    * envType  环境类型
    * exePlatform  执行平台
    * expectOutput  内部预期输出
    * featurePath  特性路径
    * isKeyWord  是否为关键字
    * isContractTestcase  是否为合同测试用例
    * isParaValidatorTestcase  是否为参数校验测试用例
    * labelId  标签ID列表
    * lastModified  最后修改时间
    * lastModifier  最后修改人
    * lastResult  最后的结果
    * level  用例级别
    * market  市场
    * moduleId  模块ID
    * name  用例名称
    * networkScriptName  公共aw和项目的关联关系
    * nodeName  节点名称
    * number  用例编号
    * originUri  原始的uri
    * owner  测试的所有者
    * ownerId  所有者ID
    * preparation  测试前置条件
    * releaseDev  新服务新建用例版本号
    * releaseId  发布ID
    * remark  备注
    * stage  阶段
    * steps  存储测试步骤和预期结果值对象
    * svnScriptPath  脚本路径
    * tags  标签
    * testFeature  测试特性
    * testStep  内部测试步骤
    * testType  测试类型
    * uri  用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activityId' => 'activity_id',
            'appliedProduct' => 'applied_product',
            'author' => 'author',
            'autoType' => 'auto_type',
            'cataId' => 'cataId',
            'creationDate' => 'creation_date',
            'customField1' => 'custom_field_1',
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
            'customField2' => 'custom_field_2',
            'customField20' => 'custom_field_20',
            'customField21' => 'custom_field_21',
            'customField22' => 'custom_field_22',
            'customField23' => 'custom_field_23',
            'customField24' => 'custom_field_24',
            'customField25' => 'custom_field_25',
            'customField3' => 'custom_field_3',
            'customField4' => 'custom_field_4',
            'customField5' => 'custom_field_5',
            'customField6' => 'custom_field_6',
            'customField7' => 'custom_field_7',
            'customField8' => 'custom_field_8',
            'customField9' => 'custom_field_9',
            'description' => 'description',
            'drRelationid' => 'dr_relationid',
            'envType' => 'env_type',
            'exePlatform' => 'exe_platform',
            'expectOutput' => 'expect_output',
            'featurePath' => 'feature_path',
            'isKeyWord' => 'isKeyWord',
            'isContractTestcase' => 'is_contract_testcase',
            'isParaValidatorTestcase' => 'is_paraValidator_testcase',
            'labelId' => 'labelId',
            'lastModified' => 'last_modified',
            'lastModifier' => 'last_modifier',
            'lastResult' => 'last_result',
            'level' => 'level',
            'market' => 'market',
            'moduleId' => 'moduleId',
            'name' => 'name',
            'networkScriptName' => 'networkScriptName',
            'nodeName' => 'node_name',
            'number' => 'number',
            'originUri' => 'originUri',
            'owner' => 'owner',
            'ownerId' => 'ownerId',
            'preparation' => 'preparation',
            'releaseDev' => 'releaseDev',
            'releaseId' => 'releaseId',
            'remark' => 'remark',
            'stage' => 'stage',
            'steps' => 'steps',
            'svnScriptPath' => 'svnScriptPath',
            'tags' => 'tags',
            'testFeature' => 'test_feature',
            'testStep' => 'test_step',
            'testType' => 'test_type',
            'uri' => 'uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activityId  活动id
    * appliedProduct  应用产品
    * author  创建人
    * autoType  自动化类型
    * cataId  用例分类ID
    * creationDate  创建日期
    * customField1  customField1
    * customField10  customField10
    * customField11  customField11
    * customField12  customField12
    * customField13  customField13
    * customField14  customField14
    * customField15  customField15
    * customField16  customField16
    * customField17  customField17
    * customField18  customField18
    * customField19  customField19
    * customField2  customField2
    * customField20  customField20
    * customField21  customField21
    * customField22  customField22
    * customField23  customField23
    * customField24  customField24
    * customField25  customField25
    * customField3  customField3
    * customField4  customField4
    * customField5  customField5
    * customField6  customField6
    * customField7  customField7
    * customField8  customField8
    * customField9  customField9
    * description  描述
    * drRelationid  dr关系ID
    * envType  环境类型
    * exePlatform  执行平台
    * expectOutput  内部预期输出
    * featurePath  特性路径
    * isKeyWord  是否为关键字
    * isContractTestcase  是否为合同测试用例
    * isParaValidatorTestcase  是否为参数校验测试用例
    * labelId  标签ID列表
    * lastModified  最后修改时间
    * lastModifier  最后修改人
    * lastResult  最后的结果
    * level  用例级别
    * market  市场
    * moduleId  模块ID
    * name  用例名称
    * networkScriptName  公共aw和项目的关联关系
    * nodeName  节点名称
    * number  用例编号
    * originUri  原始的uri
    * owner  测试的所有者
    * ownerId  所有者ID
    * preparation  测试前置条件
    * releaseDev  新服务新建用例版本号
    * releaseId  发布ID
    * remark  备注
    * stage  阶段
    * steps  存储测试步骤和预期结果值对象
    * svnScriptPath  脚本路径
    * tags  标签
    * testFeature  测试特性
    * testStep  内部测试步骤
    * testType  测试类型
    * uri  用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
    *
    * @var string[]
    */
    protected static $setters = [
            'activityId' => 'setActivityId',
            'appliedProduct' => 'setAppliedProduct',
            'author' => 'setAuthor',
            'autoType' => 'setAutoType',
            'cataId' => 'setCataId',
            'creationDate' => 'setCreationDate',
            'customField1' => 'setCustomField1',
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
            'customField2' => 'setCustomField2',
            'customField20' => 'setCustomField20',
            'customField21' => 'setCustomField21',
            'customField22' => 'setCustomField22',
            'customField23' => 'setCustomField23',
            'customField24' => 'setCustomField24',
            'customField25' => 'setCustomField25',
            'customField3' => 'setCustomField3',
            'customField4' => 'setCustomField4',
            'customField5' => 'setCustomField5',
            'customField6' => 'setCustomField6',
            'customField7' => 'setCustomField7',
            'customField8' => 'setCustomField8',
            'customField9' => 'setCustomField9',
            'description' => 'setDescription',
            'drRelationid' => 'setDrRelationid',
            'envType' => 'setEnvType',
            'exePlatform' => 'setExePlatform',
            'expectOutput' => 'setExpectOutput',
            'featurePath' => 'setFeaturePath',
            'isKeyWord' => 'setIsKeyWord',
            'isContractTestcase' => 'setIsContractTestcase',
            'isParaValidatorTestcase' => 'setIsParaValidatorTestcase',
            'labelId' => 'setLabelId',
            'lastModified' => 'setLastModified',
            'lastModifier' => 'setLastModifier',
            'lastResult' => 'setLastResult',
            'level' => 'setLevel',
            'market' => 'setMarket',
            'moduleId' => 'setModuleId',
            'name' => 'setName',
            'networkScriptName' => 'setNetworkScriptName',
            'nodeName' => 'setNodeName',
            'number' => 'setNumber',
            'originUri' => 'setOriginUri',
            'owner' => 'setOwner',
            'ownerId' => 'setOwnerId',
            'preparation' => 'setPreparation',
            'releaseDev' => 'setReleaseDev',
            'releaseId' => 'setReleaseId',
            'remark' => 'setRemark',
            'stage' => 'setStage',
            'steps' => 'setSteps',
            'svnScriptPath' => 'setSvnScriptPath',
            'tags' => 'setTags',
            'testFeature' => 'setTestFeature',
            'testStep' => 'setTestStep',
            'testType' => 'setTestType',
            'uri' => 'setUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activityId  活动id
    * appliedProduct  应用产品
    * author  创建人
    * autoType  自动化类型
    * cataId  用例分类ID
    * creationDate  创建日期
    * customField1  customField1
    * customField10  customField10
    * customField11  customField11
    * customField12  customField12
    * customField13  customField13
    * customField14  customField14
    * customField15  customField15
    * customField16  customField16
    * customField17  customField17
    * customField18  customField18
    * customField19  customField19
    * customField2  customField2
    * customField20  customField20
    * customField21  customField21
    * customField22  customField22
    * customField23  customField23
    * customField24  customField24
    * customField25  customField25
    * customField3  customField3
    * customField4  customField4
    * customField5  customField5
    * customField6  customField6
    * customField7  customField7
    * customField8  customField8
    * customField9  customField9
    * description  描述
    * drRelationid  dr关系ID
    * envType  环境类型
    * exePlatform  执行平台
    * expectOutput  内部预期输出
    * featurePath  特性路径
    * isKeyWord  是否为关键字
    * isContractTestcase  是否为合同测试用例
    * isParaValidatorTestcase  是否为参数校验测试用例
    * labelId  标签ID列表
    * lastModified  最后修改时间
    * lastModifier  最后修改人
    * lastResult  最后的结果
    * level  用例级别
    * market  市场
    * moduleId  模块ID
    * name  用例名称
    * networkScriptName  公共aw和项目的关联关系
    * nodeName  节点名称
    * number  用例编号
    * originUri  原始的uri
    * owner  测试的所有者
    * ownerId  所有者ID
    * preparation  测试前置条件
    * releaseDev  新服务新建用例版本号
    * releaseId  发布ID
    * remark  备注
    * stage  阶段
    * steps  存储测试步骤和预期结果值对象
    * svnScriptPath  脚本路径
    * tags  标签
    * testFeature  测试特性
    * testStep  内部测试步骤
    * testType  测试类型
    * uri  用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
    *
    * @var string[]
    */
    protected static $getters = [
            'activityId' => 'getActivityId',
            'appliedProduct' => 'getAppliedProduct',
            'author' => 'getAuthor',
            'autoType' => 'getAutoType',
            'cataId' => 'getCataId',
            'creationDate' => 'getCreationDate',
            'customField1' => 'getCustomField1',
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
            'customField2' => 'getCustomField2',
            'customField20' => 'getCustomField20',
            'customField21' => 'getCustomField21',
            'customField22' => 'getCustomField22',
            'customField23' => 'getCustomField23',
            'customField24' => 'getCustomField24',
            'customField25' => 'getCustomField25',
            'customField3' => 'getCustomField3',
            'customField4' => 'getCustomField4',
            'customField5' => 'getCustomField5',
            'customField6' => 'getCustomField6',
            'customField7' => 'getCustomField7',
            'customField8' => 'getCustomField8',
            'customField9' => 'getCustomField9',
            'description' => 'getDescription',
            'drRelationid' => 'getDrRelationid',
            'envType' => 'getEnvType',
            'exePlatform' => 'getExePlatform',
            'expectOutput' => 'getExpectOutput',
            'featurePath' => 'getFeaturePath',
            'isKeyWord' => 'getIsKeyWord',
            'isContractTestcase' => 'getIsContractTestcase',
            'isParaValidatorTestcase' => 'getIsParaValidatorTestcase',
            'labelId' => 'getLabelId',
            'lastModified' => 'getLastModified',
            'lastModifier' => 'getLastModifier',
            'lastResult' => 'getLastResult',
            'level' => 'getLevel',
            'market' => 'getMarket',
            'moduleId' => 'getModuleId',
            'name' => 'getName',
            'networkScriptName' => 'getNetworkScriptName',
            'nodeName' => 'getNodeName',
            'number' => 'getNumber',
            'originUri' => 'getOriginUri',
            'owner' => 'getOwner',
            'ownerId' => 'getOwnerId',
            'preparation' => 'getPreparation',
            'releaseDev' => 'getReleaseDev',
            'releaseId' => 'getReleaseId',
            'remark' => 'getRemark',
            'stage' => 'getStage',
            'steps' => 'getSteps',
            'svnScriptPath' => 'getSvnScriptPath',
            'tags' => 'getTags',
            'testFeature' => 'getTestFeature',
            'testStep' => 'getTestStep',
            'testType' => 'getTestType',
            'uri' => 'getUri'
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
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
        $this->container['appliedProduct'] = isset($data['appliedProduct']) ? $data['appliedProduct'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['autoType'] = isset($data['autoType']) ? $data['autoType'] : null;
        $this->container['cataId'] = isset($data['cataId']) ? $data['cataId'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['customField1'] = isset($data['customField1']) ? $data['customField1'] : null;
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
        $this->container['customField2'] = isset($data['customField2']) ? $data['customField2'] : null;
        $this->container['customField20'] = isset($data['customField20']) ? $data['customField20'] : null;
        $this->container['customField21'] = isset($data['customField21']) ? $data['customField21'] : null;
        $this->container['customField22'] = isset($data['customField22']) ? $data['customField22'] : null;
        $this->container['customField23'] = isset($data['customField23']) ? $data['customField23'] : null;
        $this->container['customField24'] = isset($data['customField24']) ? $data['customField24'] : null;
        $this->container['customField25'] = isset($data['customField25']) ? $data['customField25'] : null;
        $this->container['customField3'] = isset($data['customField3']) ? $data['customField3'] : null;
        $this->container['customField4'] = isset($data['customField4']) ? $data['customField4'] : null;
        $this->container['customField5'] = isset($data['customField5']) ? $data['customField5'] : null;
        $this->container['customField6'] = isset($data['customField6']) ? $data['customField6'] : null;
        $this->container['customField7'] = isset($data['customField7']) ? $data['customField7'] : null;
        $this->container['customField8'] = isset($data['customField8']) ? $data['customField8'] : null;
        $this->container['customField9'] = isset($data['customField9']) ? $data['customField9'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['drRelationid'] = isset($data['drRelationid']) ? $data['drRelationid'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['exePlatform'] = isset($data['exePlatform']) ? $data['exePlatform'] : null;
        $this->container['expectOutput'] = isset($data['expectOutput']) ? $data['expectOutput'] : null;
        $this->container['featurePath'] = isset($data['featurePath']) ? $data['featurePath'] : null;
        $this->container['isKeyWord'] = isset($data['isKeyWord']) ? $data['isKeyWord'] : null;
        $this->container['isContractTestcase'] = isset($data['isContractTestcase']) ? $data['isContractTestcase'] : null;
        $this->container['isParaValidatorTestcase'] = isset($data['isParaValidatorTestcase']) ? $data['isParaValidatorTestcase'] : null;
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['lastModifier'] = isset($data['lastModifier']) ? $data['lastModifier'] : null;
        $this->container['lastResult'] = isset($data['lastResult']) ? $data['lastResult'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['networkScriptName'] = isset($data['networkScriptName']) ? $data['networkScriptName'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['originUri'] = isset($data['originUri']) ? $data['originUri'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['preparation'] = isset($data['preparation']) ? $data['preparation'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['svnScriptPath'] = isset($data['svnScriptPath']) ? $data['svnScriptPath'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['testFeature'] = isset($data['testFeature']) ? $data['testFeature'] : null;
        $this->container['testStep'] = isset($data['testStep']) ? $data['testStep'] : null;
        $this->container['testType'] = isset($data['testType']) ? $data['testType'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
    * Gets activityId
    *  活动id
    *
    * @return string|null
    */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
    * Sets activityId
    *
    * @param string|null $activityId 活动id
    *
    * @return $this
    */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;
        return $this;
    }

    /**
    * Gets appliedProduct
    *  应用产品
    *
    * @return string|null
    */
    public function getAppliedProduct()
    {
        return $this->container['appliedProduct'];
    }

    /**
    * Sets appliedProduct
    *
    * @param string|null $appliedProduct 应用产品
    *
    * @return $this
    */
    public function setAppliedProduct($appliedProduct)
    {
        $this->container['appliedProduct'] = $appliedProduct;
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
    * Gets autoType
    *  自动化类型
    *
    * @return string|null
    */
    public function getAutoType()
    {
        return $this->container['autoType'];
    }

    /**
    * Sets autoType
    *
    * @param string|null $autoType 自动化类型
    *
    * @return $this
    */
    public function setAutoType($autoType)
    {
        $this->container['autoType'] = $autoType;
        return $this;
    }

    /**
    * Gets cataId
    *  用例分类ID
    *
    * @return string|null
    */
    public function getCataId()
    {
        return $this->container['cataId'];
    }

    /**
    * Sets cataId
    *
    * @param string|null $cataId 用例分类ID
    *
    * @return $this
    */
    public function setCataId($cataId)
    {
        $this->container['cataId'] = $cataId;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建日期
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 创建日期
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets customField1
    *  customField1
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
    * @param string|null $customField1 customField1
    *
    * @return $this
    */
    public function setCustomField1($customField1)
    {
        $this->container['customField1'] = $customField1;
        return $this;
    }

    /**
    * Gets customField10
    *  customField10
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
    * @param string|null $customField10 customField10
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
    *  customField11
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
    * @param string|null $customField11 customField11
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
    *  customField12
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
    * @param string|null $customField12 customField12
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
    *  customField13
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
    * @param string|null $customField13 customField13
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
    *  customField14
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
    * @param string|null $customField14 customField14
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
    *  customField15
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
    * @param string|null $customField15 customField15
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
    *  customField16
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
    * @param string|null $customField16 customField16
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
    *  customField17
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
    * @param string|null $customField17 customField17
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
    *  customField18
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
    * @param string|null $customField18 customField18
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
    *  customField19
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
    * @param string|null $customField19 customField19
    *
    * @return $this
    */
    public function setCustomField19($customField19)
    {
        $this->container['customField19'] = $customField19;
        return $this;
    }

    /**
    * Gets customField2
    *  customField2
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
    * @param string|null $customField2 customField2
    *
    * @return $this
    */
    public function setCustomField2($customField2)
    {
        $this->container['customField2'] = $customField2;
        return $this;
    }

    /**
    * Gets customField20
    *  customField20
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
    * @param string|null $customField20 customField20
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
    *  customField21
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
    * @param string|null $customField21 customField21
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
    *  customField22
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
    * @param string|null $customField22 customField22
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
    *  customField23
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
    * @param string|null $customField23 customField23
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
    *  customField24
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
    * @param string|null $customField24 customField24
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
    *  customField25
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
    * @param string|null $customField25 customField25
    *
    * @return $this
    */
    public function setCustomField25($customField25)
    {
        $this->container['customField25'] = $customField25;
        return $this;
    }

    /**
    * Gets customField3
    *  customField3
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
    * @param string|null $customField3 customField3
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
    *  customField4
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
    * @param string|null $customField4 customField4
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
    *  customField5
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
    * @param string|null $customField5 customField5
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
    *  customField6
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
    * @param string|null $customField6 customField6
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
    *  customField7
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
    * @param string|null $customField7 customField7
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
    *  customField8
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
    * @param string|null $customField8 customField8
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
    *  customField9
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
    * @param string|null $customField9 customField9
    *
    * @return $this
    */
    public function setCustomField9($customField9)
    {
        $this->container['customField9'] = $customField9;
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
    * Gets drRelationid
    *  dr关系ID
    *
    * @return string|null
    */
    public function getDrRelationid()
    {
        return $this->container['drRelationid'];
    }

    /**
    * Sets drRelationid
    *
    * @param string|null $drRelationid dr关系ID
    *
    * @return $this
    */
    public function setDrRelationid($drRelationid)
    {
        $this->container['drRelationid'] = $drRelationid;
        return $this;
    }

    /**
    * Gets envType
    *  环境类型
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
    * @param string|null $envType 环境类型
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
    * Gets expectOutput
    *  内部预期输出
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
    * @param string|null $expectOutput 内部预期输出
    *
    * @return $this
    */
    public function setExpectOutput($expectOutput)
    {
        $this->container['expectOutput'] = $expectOutput;
        return $this;
    }

    /**
    * Gets featurePath
    *  特性路径
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
    * @param string|null $featurePath 特性路径
    *
    * @return $this
    */
    public function setFeaturePath($featurePath)
    {
        $this->container['featurePath'] = $featurePath;
        return $this;
    }

    /**
    * Gets isKeyWord
    *  是否为关键字
    *
    * @return int|null
    */
    public function getIsKeyWord()
    {
        return $this->container['isKeyWord'];
    }

    /**
    * Sets isKeyWord
    *
    * @param int|null $isKeyWord 是否为关键字
    *
    * @return $this
    */
    public function setIsKeyWord($isKeyWord)
    {
        $this->container['isKeyWord'] = $isKeyWord;
        return $this;
    }

    /**
    * Gets isContractTestcase
    *  是否为合同测试用例
    *
    * @return string|null
    */
    public function getIsContractTestcase()
    {
        return $this->container['isContractTestcase'];
    }

    /**
    * Sets isContractTestcase
    *
    * @param string|null $isContractTestcase 是否为合同测试用例
    *
    * @return $this
    */
    public function setIsContractTestcase($isContractTestcase)
    {
        $this->container['isContractTestcase'] = $isContractTestcase;
        return $this;
    }

    /**
    * Gets isParaValidatorTestcase
    *  是否为参数校验测试用例
    *
    * @return string|null
    */
    public function getIsParaValidatorTestcase()
    {
        return $this->container['isParaValidatorTestcase'];
    }

    /**
    * Sets isParaValidatorTestcase
    *
    * @param string|null $isParaValidatorTestcase 是否为参数校验测试用例
    *
    * @return $this
    */
    public function setIsParaValidatorTestcase($isParaValidatorTestcase)
    {
        $this->container['isParaValidatorTestcase'] = $isParaValidatorTestcase;
        return $this;
    }

    /**
    * Gets labelId
    *  标签ID列表
    *
    * @return string[]|null
    */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
    * Sets labelId
    *
    * @param string[]|null $labelId 标签ID列表
    *
    * @return $this
    */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;
        return $this;
    }

    /**
    * Gets lastModified
    *  最后修改时间
    *
    * @return string|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param string|null $lastModified 最后修改时间
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
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
    * Gets lastResult
    *  最后的结果
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
    * @param string|null $lastResult 最后的结果
    *
    * @return $this
    */
    public function setLastResult($lastResult)
    {
        $this->container['lastResult'] = $lastResult;
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
    * Gets market
    *  市场
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
    * @param string|null $market 市场
    *
    * @return $this
    */
    public function setMarket($market)
    {
        $this->container['market'] = $market;
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
    * Gets name
    *  用例名称
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
    * @param string|null $name 用例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets networkScriptName
    *  公共aw和项目的关联关系
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
    * @param string|null $networkScriptName 公共aw和项目的关联关系
    *
    * @return $this
    */
    public function setNetworkScriptName($networkScriptName)
    {
        $this->container['networkScriptName'] = $networkScriptName;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets number
    *  用例编号
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
    * @param string|null $number 用例编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets originUri
    *  原始的uri
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
    * @param string|null $originUri 原始的uri
    *
    * @return $this
    */
    public function setOriginUri($originUri)
    {
        $this->container['originUri'] = $originUri;
        return $this;
    }

    /**
    * Gets owner
    *  测试的所有者
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
    * @param string|null $owner 测试的所有者
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets ownerId
    *  所有者ID
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 所有者ID
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets preparation
    *  测试前置条件
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
    * @param string|null $preparation 测试前置条件
    *
    * @return $this
    */
    public function setPreparation($preparation)
    {
        $this->container['preparation'] = $preparation;
        return $this;
    }

    /**
    * Gets releaseDev
    *  新服务新建用例版本号
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
    * @param string|null $releaseDev 新服务新建用例版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets releaseId
    *  发布ID
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
    * @param string|null $releaseId 发布ID
    *
    * @return $this
    */
    public function setReleaseId($releaseId)
    {
        $this->container['releaseId'] = $releaseId;
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
    *  阶段
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
    * @param string|null $stage 阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets steps
    *  存储测试步骤和预期结果值对象
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TmssStep[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TmssStep[]|null $steps 存储测试步骤和预期结果值对象
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
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
    * Gets testFeature
    *  测试特性
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
    * @param string|null $testFeature 测试特性
    *
    * @return $this
    */
    public function setTestFeature($testFeature)
    {
        $this->container['testFeature'] = $testFeature;
        return $this;
    }

    /**
    * Gets testStep
    *  内部测试步骤
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
    * @param string|null $testStep 内部测试步骤
    *
    * @return $this
    */
    public function setTestStep($testStep)
    {
        $this->container['testStep'] = $testStep;
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
    * Gets uri
    *  用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
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
    * @param string|null $uri 用例基线Uri(BAM 接口覆盖率迭代下用例信息获取用)
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
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

