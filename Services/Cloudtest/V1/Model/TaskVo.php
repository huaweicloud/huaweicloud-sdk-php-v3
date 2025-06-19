<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  测试任务URI
    * name  测试任务名称
    * stage  测试阶段
    * number  编号
    * tags  标签
    * description  描述
    * region  区域
    * authorId  创建人ID
    * authorName  创建人名称
    * ownerId  责任人ID
    * ownerName  责任人名称
    * parentUri  父任务URI
    * parentPath  父任务路径
    * originUri  源任务URI
    * versionUri  版本URI
    * branchUri  分支URI
    * versionName  版本名称
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * relationChangeTime  关联关系修改时时间
    * relationChangeTimeTimestamp  关联关系修改时间时间戳
    * testCaseCondition  动态任务用例过滤条件
    * updatorId  修改人Id
    * updatorName  修改人名称
    * relationChangerId  关联关系修改人Id
    * serviceType  服务类型ID
    * serviceTypeName  服务类型名称
    * tagList  标签名称集合
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * releaseDev  发布版本号
    * extParam  扩展参数
    * executeWay  执行方式（1：串行，2：并行）
    * executeType  执行类型（0：冒烟，1：定时）
    * statusCode  生命周期状态Code
    * statusName  生命周期状态名称
    * resultCode  执行结果Code
    * resultName  执行状态名称
    * executeStatusCode  Echo执行状态Code
    * executeStatusName  Echo执行状态名称
    * executorId  执行人ID
    * executorName  执行人名称
    * executeLatestTime  最近执行时间
    * executeLatestTimeTimestamp  最近执行时间时间戳
    * executeDuration  执行时长
    * executeTimes  执行次数
    * projectUuid  项目ID
    * caseOperationInfo  caseOperationInfo
    * assignCaseNum  关联用例数
    * finishCaseNum  已完成用例数量
    * assignDefectNum  关联缺陷数量
    * taskAssignMsg  任务关联用例变更提示信息
    * iteratorVersionUri  测试套所属迭代uri，非迭代下创建的测试套返回null
    * resultNumberList  用户自定义结果对应的用例数目
    * finishDate  测试套完成时间
    * finishDateTimestamp  测试套完成时间戳
    * planStartDate  计划开始时间
    * planStartTimestamp  计划开始时间戳
    * planEndDate  计划结束时间
    * planEndTimestamp  计划结束时间戳
    * expirationStatus  测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    * expirationStatusName  测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'stage' => 'string',
            'number' => 'string',
            'tags' => 'string',
            'description' => 'string',
            'region' => 'string',
            'authorId' => 'string',
            'authorName' => 'string',
            'ownerId' => 'string',
            'ownerName' => 'string',
            'parentUri' => 'string',
            'parentPath' => 'string',
            'originUri' => 'string',
            'versionUri' => 'string',
            'branchUri' => 'string',
            'versionName' => 'string',
            'creationDate' => '\DateTime',
            'createDateTimestamp' => 'int',
            'updateTime' => '\DateTime',
            'updateTimeTimestamp' => 'int',
            'relationChangeTime' => '\DateTime',
            'relationChangeTimeTimestamp' => 'int',
            'testCaseCondition' => 'string',
            'updatorId' => 'string',
            'updatorName' => 'string',
            'relationChangerId' => 'string',
            'serviceType' => 'int',
            'serviceTypeName' => 'string',
            'tagList' => 'string[]',
            'moduleId' => 'string',
            'moduleName' => 'string',
            'modulePath' => 'string',
            'modulePathName' => 'string',
            'releaseDev' => 'string',
            'extParam' => 'string',
            'executeWay' => 'int',
            'executeType' => 'int',
            'statusCode' => 'int',
            'statusName' => 'string',
            'resultCode' => 'int',
            'resultName' => 'string',
            'executeStatusCode' => 'int',
            'executeStatusName' => 'string',
            'executorId' => 'string',
            'executorName' => 'string',
            'executeLatestTime' => '\DateTime',
            'executeLatestTimeTimestamp' => 'int',
            'executeDuration' => 'string',
            'executeTimes' => 'int',
            'projectUuid' => 'string',
            'caseOperationInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseOperationVo',
            'assignCaseNum' => 'int',
            'finishCaseNum' => 'int',
            'assignDefectNum' => 'int',
            'taskAssignMsg' => 'string',
            'iteratorVersionUri' => 'string',
            'resultNumberList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueAndCodeVo[]',
            'finishDate' => '\DateTime',
            'finishDateTimestamp' => 'int',
            'planStartDate' => '\DateTime',
            'planStartTimestamp' => 'int',
            'planEndDate' => '\DateTime',
            'planEndTimestamp' => 'int',
            'expirationStatus' => 'int',
            'expirationStatusName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  测试任务URI
    * name  测试任务名称
    * stage  测试阶段
    * number  编号
    * tags  标签
    * description  描述
    * region  区域
    * authorId  创建人ID
    * authorName  创建人名称
    * ownerId  责任人ID
    * ownerName  责任人名称
    * parentUri  父任务URI
    * parentPath  父任务路径
    * originUri  源任务URI
    * versionUri  版本URI
    * branchUri  分支URI
    * versionName  版本名称
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * relationChangeTime  关联关系修改时时间
    * relationChangeTimeTimestamp  关联关系修改时间时间戳
    * testCaseCondition  动态任务用例过滤条件
    * updatorId  修改人Id
    * updatorName  修改人名称
    * relationChangerId  关联关系修改人Id
    * serviceType  服务类型ID
    * serviceTypeName  服务类型名称
    * tagList  标签名称集合
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * releaseDev  发布版本号
    * extParam  扩展参数
    * executeWay  执行方式（1：串行，2：并行）
    * executeType  执行类型（0：冒烟，1：定时）
    * statusCode  生命周期状态Code
    * statusName  生命周期状态名称
    * resultCode  执行结果Code
    * resultName  执行状态名称
    * executeStatusCode  Echo执行状态Code
    * executeStatusName  Echo执行状态名称
    * executorId  执行人ID
    * executorName  执行人名称
    * executeLatestTime  最近执行时间
    * executeLatestTimeTimestamp  最近执行时间时间戳
    * executeDuration  执行时长
    * executeTimes  执行次数
    * projectUuid  项目ID
    * caseOperationInfo  caseOperationInfo
    * assignCaseNum  关联用例数
    * finishCaseNum  已完成用例数量
    * assignDefectNum  关联缺陷数量
    * taskAssignMsg  任务关联用例变更提示信息
    * iteratorVersionUri  测试套所属迭代uri，非迭代下创建的测试套返回null
    * resultNumberList  用户自定义结果对应的用例数目
    * finishDate  测试套完成时间
    * finishDateTimestamp  测试套完成时间戳
    * planStartDate  计划开始时间
    * planStartTimestamp  计划开始时间戳
    * planEndDate  计划结束时间
    * planEndTimestamp  计划结束时间戳
    * expirationStatus  测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    * expirationStatusName  测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'stage' => null,
        'number' => null,
        'tags' => null,
        'description' => null,
        'region' => null,
        'authorId' => null,
        'authorName' => null,
        'ownerId' => null,
        'ownerName' => null,
        'parentUri' => null,
        'parentPath' => null,
        'originUri' => null,
        'versionUri' => null,
        'branchUri' => null,
        'versionName' => null,
        'creationDate' => 'date-time',
        'createDateTimestamp' => 'int64',
        'updateTime' => 'date-time',
        'updateTimeTimestamp' => 'int64',
        'relationChangeTime' => 'date-time',
        'relationChangeTimeTimestamp' => 'int64',
        'testCaseCondition' => null,
        'updatorId' => null,
        'updatorName' => null,
        'relationChangerId' => null,
        'serviceType' => 'int32',
        'serviceTypeName' => null,
        'tagList' => null,
        'moduleId' => null,
        'moduleName' => null,
        'modulePath' => null,
        'modulePathName' => null,
        'releaseDev' => null,
        'extParam' => null,
        'executeWay' => 'int32',
        'executeType' => 'int32',
        'statusCode' => 'int32',
        'statusName' => null,
        'resultCode' => 'int32',
        'resultName' => null,
        'executeStatusCode' => 'int32',
        'executeStatusName' => null,
        'executorId' => null,
        'executorName' => null,
        'executeLatestTime' => 'date-time',
        'executeLatestTimeTimestamp' => 'int64',
        'executeDuration' => null,
        'executeTimes' => 'int32',
        'projectUuid' => null,
        'caseOperationInfo' => null,
        'assignCaseNum' => 'int32',
        'finishCaseNum' => 'int32',
        'assignDefectNum' => 'int32',
        'taskAssignMsg' => null,
        'iteratorVersionUri' => null,
        'resultNumberList' => null,
        'finishDate' => 'date-time',
        'finishDateTimestamp' => 'int64',
        'planStartDate' => 'date-time',
        'planStartTimestamp' => 'int64',
        'planEndDate' => 'date-time',
        'planEndTimestamp' => 'int64',
        'expirationStatus' => 'int32',
        'expirationStatusName' => null
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
    * uri  测试任务URI
    * name  测试任务名称
    * stage  测试阶段
    * number  编号
    * tags  标签
    * description  描述
    * region  区域
    * authorId  创建人ID
    * authorName  创建人名称
    * ownerId  责任人ID
    * ownerName  责任人名称
    * parentUri  父任务URI
    * parentPath  父任务路径
    * originUri  源任务URI
    * versionUri  版本URI
    * branchUri  分支URI
    * versionName  版本名称
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * relationChangeTime  关联关系修改时时间
    * relationChangeTimeTimestamp  关联关系修改时间时间戳
    * testCaseCondition  动态任务用例过滤条件
    * updatorId  修改人Id
    * updatorName  修改人名称
    * relationChangerId  关联关系修改人Id
    * serviceType  服务类型ID
    * serviceTypeName  服务类型名称
    * tagList  标签名称集合
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * releaseDev  发布版本号
    * extParam  扩展参数
    * executeWay  执行方式（1：串行，2：并行）
    * executeType  执行类型（0：冒烟，1：定时）
    * statusCode  生命周期状态Code
    * statusName  生命周期状态名称
    * resultCode  执行结果Code
    * resultName  执行状态名称
    * executeStatusCode  Echo执行状态Code
    * executeStatusName  Echo执行状态名称
    * executorId  执行人ID
    * executorName  执行人名称
    * executeLatestTime  最近执行时间
    * executeLatestTimeTimestamp  最近执行时间时间戳
    * executeDuration  执行时长
    * executeTimes  执行次数
    * projectUuid  项目ID
    * caseOperationInfo  caseOperationInfo
    * assignCaseNum  关联用例数
    * finishCaseNum  已完成用例数量
    * assignDefectNum  关联缺陷数量
    * taskAssignMsg  任务关联用例变更提示信息
    * iteratorVersionUri  测试套所属迭代uri，非迭代下创建的测试套返回null
    * resultNumberList  用户自定义结果对应的用例数目
    * finishDate  测试套完成时间
    * finishDateTimestamp  测试套完成时间戳
    * planStartDate  计划开始时间
    * planStartTimestamp  计划开始时间戳
    * planEndDate  计划结束时间
    * planEndTimestamp  计划结束时间戳
    * expirationStatus  测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    * expirationStatusName  测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'stage' => 'stage',
            'number' => 'number',
            'tags' => 'tags',
            'description' => 'description',
            'region' => 'region',
            'authorId' => 'author_id',
            'authorName' => 'author_name',
            'ownerId' => 'owner_id',
            'ownerName' => 'owner_name',
            'parentUri' => 'parent_uri',
            'parentPath' => 'parent_path',
            'originUri' => 'origin_uri',
            'versionUri' => 'version_uri',
            'branchUri' => 'branch_uri',
            'versionName' => 'version_name',
            'creationDate' => 'creation_date',
            'createDateTimestamp' => 'create_date_timestamp',
            'updateTime' => 'update_time',
            'updateTimeTimestamp' => 'update_time_timestamp',
            'relationChangeTime' => 'relation_change_time',
            'relationChangeTimeTimestamp' => 'relation_change_time_timestamp',
            'testCaseCondition' => 'test_case_condition',
            'updatorId' => 'updator_id',
            'updatorName' => 'updator_name',
            'relationChangerId' => 'relation_changer_id',
            'serviceType' => 'service_type',
            'serviceTypeName' => 'service_type_name',
            'tagList' => 'tag_list',
            'moduleId' => 'module_id',
            'moduleName' => 'module_name',
            'modulePath' => 'module_path',
            'modulePathName' => 'module_path_name',
            'releaseDev' => 'release_dev',
            'extParam' => 'ext_param',
            'executeWay' => 'execute_way',
            'executeType' => 'execute_type',
            'statusCode' => 'status_code',
            'statusName' => 'status_name',
            'resultCode' => 'result_code',
            'resultName' => 'result_name',
            'executeStatusCode' => 'execute_status_code',
            'executeStatusName' => 'execute_status_name',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name',
            'executeLatestTime' => 'execute_latest_time',
            'executeLatestTimeTimestamp' => 'execute_latest_time_timestamp',
            'executeDuration' => 'execute_duration',
            'executeTimes' => 'execute_times',
            'projectUuid' => 'project_uuid',
            'caseOperationInfo' => 'case_operation_info',
            'assignCaseNum' => 'assign_case_num',
            'finishCaseNum' => 'finish_case_num',
            'assignDefectNum' => 'assign_defect_num',
            'taskAssignMsg' => 'task_assign_msg',
            'iteratorVersionUri' => 'iterator_version_uri',
            'resultNumberList' => 'result_number_list',
            'finishDate' => 'finish_date',
            'finishDateTimestamp' => 'finish_date_timestamp',
            'planStartDate' => 'plan_start_date',
            'planStartTimestamp' => 'plan_start_timestamp',
            'planEndDate' => 'plan_end_date',
            'planEndTimestamp' => 'plan_end_timestamp',
            'expirationStatus' => 'expiration_status',
            'expirationStatusName' => 'expiration_status_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  测试任务URI
    * name  测试任务名称
    * stage  测试阶段
    * number  编号
    * tags  标签
    * description  描述
    * region  区域
    * authorId  创建人ID
    * authorName  创建人名称
    * ownerId  责任人ID
    * ownerName  责任人名称
    * parentUri  父任务URI
    * parentPath  父任务路径
    * originUri  源任务URI
    * versionUri  版本URI
    * branchUri  分支URI
    * versionName  版本名称
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * relationChangeTime  关联关系修改时时间
    * relationChangeTimeTimestamp  关联关系修改时间时间戳
    * testCaseCondition  动态任务用例过滤条件
    * updatorId  修改人Id
    * updatorName  修改人名称
    * relationChangerId  关联关系修改人Id
    * serviceType  服务类型ID
    * serviceTypeName  服务类型名称
    * tagList  标签名称集合
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * releaseDev  发布版本号
    * extParam  扩展参数
    * executeWay  执行方式（1：串行，2：并行）
    * executeType  执行类型（0：冒烟，1：定时）
    * statusCode  生命周期状态Code
    * statusName  生命周期状态名称
    * resultCode  执行结果Code
    * resultName  执行状态名称
    * executeStatusCode  Echo执行状态Code
    * executeStatusName  Echo执行状态名称
    * executorId  执行人ID
    * executorName  执行人名称
    * executeLatestTime  最近执行时间
    * executeLatestTimeTimestamp  最近执行时间时间戳
    * executeDuration  执行时长
    * executeTimes  执行次数
    * projectUuid  项目ID
    * caseOperationInfo  caseOperationInfo
    * assignCaseNum  关联用例数
    * finishCaseNum  已完成用例数量
    * assignDefectNum  关联缺陷数量
    * taskAssignMsg  任务关联用例变更提示信息
    * iteratorVersionUri  测试套所属迭代uri，非迭代下创建的测试套返回null
    * resultNumberList  用户自定义结果对应的用例数目
    * finishDate  测试套完成时间
    * finishDateTimestamp  测试套完成时间戳
    * planStartDate  计划开始时间
    * planStartTimestamp  计划开始时间戳
    * planEndDate  计划结束时间
    * planEndTimestamp  计划结束时间戳
    * expirationStatus  测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    * expirationStatusName  测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'stage' => 'setStage',
            'number' => 'setNumber',
            'tags' => 'setTags',
            'description' => 'setDescription',
            'region' => 'setRegion',
            'authorId' => 'setAuthorId',
            'authorName' => 'setAuthorName',
            'ownerId' => 'setOwnerId',
            'ownerName' => 'setOwnerName',
            'parentUri' => 'setParentUri',
            'parentPath' => 'setParentPath',
            'originUri' => 'setOriginUri',
            'versionUri' => 'setVersionUri',
            'branchUri' => 'setBranchUri',
            'versionName' => 'setVersionName',
            'creationDate' => 'setCreationDate',
            'createDateTimestamp' => 'setCreateDateTimestamp',
            'updateTime' => 'setUpdateTime',
            'updateTimeTimestamp' => 'setUpdateTimeTimestamp',
            'relationChangeTime' => 'setRelationChangeTime',
            'relationChangeTimeTimestamp' => 'setRelationChangeTimeTimestamp',
            'testCaseCondition' => 'setTestCaseCondition',
            'updatorId' => 'setUpdatorId',
            'updatorName' => 'setUpdatorName',
            'relationChangerId' => 'setRelationChangerId',
            'serviceType' => 'setServiceType',
            'serviceTypeName' => 'setServiceTypeName',
            'tagList' => 'setTagList',
            'moduleId' => 'setModuleId',
            'moduleName' => 'setModuleName',
            'modulePath' => 'setModulePath',
            'modulePathName' => 'setModulePathName',
            'releaseDev' => 'setReleaseDev',
            'extParam' => 'setExtParam',
            'executeWay' => 'setExecuteWay',
            'executeType' => 'setExecuteType',
            'statusCode' => 'setStatusCode',
            'statusName' => 'setStatusName',
            'resultCode' => 'setResultCode',
            'resultName' => 'setResultName',
            'executeStatusCode' => 'setExecuteStatusCode',
            'executeStatusName' => 'setExecuteStatusName',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName',
            'executeLatestTime' => 'setExecuteLatestTime',
            'executeLatestTimeTimestamp' => 'setExecuteLatestTimeTimestamp',
            'executeDuration' => 'setExecuteDuration',
            'executeTimes' => 'setExecuteTimes',
            'projectUuid' => 'setProjectUuid',
            'caseOperationInfo' => 'setCaseOperationInfo',
            'assignCaseNum' => 'setAssignCaseNum',
            'finishCaseNum' => 'setFinishCaseNum',
            'assignDefectNum' => 'setAssignDefectNum',
            'taskAssignMsg' => 'setTaskAssignMsg',
            'iteratorVersionUri' => 'setIteratorVersionUri',
            'resultNumberList' => 'setResultNumberList',
            'finishDate' => 'setFinishDate',
            'finishDateTimestamp' => 'setFinishDateTimestamp',
            'planStartDate' => 'setPlanStartDate',
            'planStartTimestamp' => 'setPlanStartTimestamp',
            'planEndDate' => 'setPlanEndDate',
            'planEndTimestamp' => 'setPlanEndTimestamp',
            'expirationStatus' => 'setExpirationStatus',
            'expirationStatusName' => 'setExpirationStatusName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  测试任务URI
    * name  测试任务名称
    * stage  测试阶段
    * number  编号
    * tags  标签
    * description  描述
    * region  区域
    * authorId  创建人ID
    * authorName  创建人名称
    * ownerId  责任人ID
    * ownerName  责任人名称
    * parentUri  父任务URI
    * parentPath  父任务路径
    * originUri  源任务URI
    * versionUri  版本URI
    * branchUri  分支URI
    * versionName  版本名称
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * relationChangeTime  关联关系修改时时间
    * relationChangeTimeTimestamp  关联关系修改时间时间戳
    * testCaseCondition  动态任务用例过滤条件
    * updatorId  修改人Id
    * updatorName  修改人名称
    * relationChangerId  关联关系修改人Id
    * serviceType  服务类型ID
    * serviceTypeName  服务类型名称
    * tagList  标签名称集合
    * moduleId  模块ID
    * moduleName  模块名称
    * modulePath  模块path
    * modulePathName  模块路径名称
    * releaseDev  发布版本号
    * extParam  扩展参数
    * executeWay  执行方式（1：串行，2：并行）
    * executeType  执行类型（0：冒烟，1：定时）
    * statusCode  生命周期状态Code
    * statusName  生命周期状态名称
    * resultCode  执行结果Code
    * resultName  执行状态名称
    * executeStatusCode  Echo执行状态Code
    * executeStatusName  Echo执行状态名称
    * executorId  执行人ID
    * executorName  执行人名称
    * executeLatestTime  最近执行时间
    * executeLatestTimeTimestamp  最近执行时间时间戳
    * executeDuration  执行时长
    * executeTimes  执行次数
    * projectUuid  项目ID
    * caseOperationInfo  caseOperationInfo
    * assignCaseNum  关联用例数
    * finishCaseNum  已完成用例数量
    * assignDefectNum  关联缺陷数量
    * taskAssignMsg  任务关联用例变更提示信息
    * iteratorVersionUri  测试套所属迭代uri，非迭代下创建的测试套返回null
    * resultNumberList  用户自定义结果对应的用例数目
    * finishDate  测试套完成时间
    * finishDateTimestamp  测试套完成时间戳
    * planStartDate  计划开始时间
    * planStartTimestamp  计划开始时间戳
    * planEndDate  计划结束时间
    * planEndTimestamp  计划结束时间戳
    * expirationStatus  测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    * expirationStatusName  测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'stage' => 'getStage',
            'number' => 'getNumber',
            'tags' => 'getTags',
            'description' => 'getDescription',
            'region' => 'getRegion',
            'authorId' => 'getAuthorId',
            'authorName' => 'getAuthorName',
            'ownerId' => 'getOwnerId',
            'ownerName' => 'getOwnerName',
            'parentUri' => 'getParentUri',
            'parentPath' => 'getParentPath',
            'originUri' => 'getOriginUri',
            'versionUri' => 'getVersionUri',
            'branchUri' => 'getBranchUri',
            'versionName' => 'getVersionName',
            'creationDate' => 'getCreationDate',
            'createDateTimestamp' => 'getCreateDateTimestamp',
            'updateTime' => 'getUpdateTime',
            'updateTimeTimestamp' => 'getUpdateTimeTimestamp',
            'relationChangeTime' => 'getRelationChangeTime',
            'relationChangeTimeTimestamp' => 'getRelationChangeTimeTimestamp',
            'testCaseCondition' => 'getTestCaseCondition',
            'updatorId' => 'getUpdatorId',
            'updatorName' => 'getUpdatorName',
            'relationChangerId' => 'getRelationChangerId',
            'serviceType' => 'getServiceType',
            'serviceTypeName' => 'getServiceTypeName',
            'tagList' => 'getTagList',
            'moduleId' => 'getModuleId',
            'moduleName' => 'getModuleName',
            'modulePath' => 'getModulePath',
            'modulePathName' => 'getModulePathName',
            'releaseDev' => 'getReleaseDev',
            'extParam' => 'getExtParam',
            'executeWay' => 'getExecuteWay',
            'executeType' => 'getExecuteType',
            'statusCode' => 'getStatusCode',
            'statusName' => 'getStatusName',
            'resultCode' => 'getResultCode',
            'resultName' => 'getResultName',
            'executeStatusCode' => 'getExecuteStatusCode',
            'executeStatusName' => 'getExecuteStatusName',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName',
            'executeLatestTime' => 'getExecuteLatestTime',
            'executeLatestTimeTimestamp' => 'getExecuteLatestTimeTimestamp',
            'executeDuration' => 'getExecuteDuration',
            'executeTimes' => 'getExecuteTimes',
            'projectUuid' => 'getProjectUuid',
            'caseOperationInfo' => 'getCaseOperationInfo',
            'assignCaseNum' => 'getAssignCaseNum',
            'finishCaseNum' => 'getFinishCaseNum',
            'assignDefectNum' => 'getAssignDefectNum',
            'taskAssignMsg' => 'getTaskAssignMsg',
            'iteratorVersionUri' => 'getIteratorVersionUri',
            'resultNumberList' => 'getResultNumberList',
            'finishDate' => 'getFinishDate',
            'finishDateTimestamp' => 'getFinishDateTimestamp',
            'planStartDate' => 'getPlanStartDate',
            'planStartTimestamp' => 'getPlanStartTimestamp',
            'planEndDate' => 'getPlanEndDate',
            'planEndTimestamp' => 'getPlanEndTimestamp',
            'expirationStatus' => 'getExpirationStatus',
            'expirationStatusName' => 'getExpirationStatusName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['parentPath'] = isset($data['parentPath']) ? $data['parentPath'] : null;
        $this->container['originUri'] = isset($data['originUri']) ? $data['originUri'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['branchUri'] = isset($data['branchUri']) ? $data['branchUri'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['createDateTimestamp'] = isset($data['createDateTimestamp']) ? $data['createDateTimestamp'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeTimestamp'] = isset($data['updateTimeTimestamp']) ? $data['updateTimeTimestamp'] : null;
        $this->container['relationChangeTime'] = isset($data['relationChangeTime']) ? $data['relationChangeTime'] : null;
        $this->container['relationChangeTimeTimestamp'] = isset($data['relationChangeTimeTimestamp']) ? $data['relationChangeTimeTimestamp'] : null;
        $this->container['testCaseCondition'] = isset($data['testCaseCondition']) ? $data['testCaseCondition'] : null;
        $this->container['updatorId'] = isset($data['updatorId']) ? $data['updatorId'] : null;
        $this->container['updatorName'] = isset($data['updatorName']) ? $data['updatorName'] : null;
        $this->container['relationChangerId'] = isset($data['relationChangerId']) ? $data['relationChangerId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['modulePath'] = isset($data['modulePath']) ? $data['modulePath'] : null;
        $this->container['modulePathName'] = isset($data['modulePathName']) ? $data['modulePathName'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['extParam'] = isset($data['extParam']) ? $data['extParam'] : null;
        $this->container['executeWay'] = isset($data['executeWay']) ? $data['executeWay'] : null;
        $this->container['executeType'] = isset($data['executeType']) ? $data['executeType'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['resultName'] = isset($data['resultName']) ? $data['resultName'] : null;
        $this->container['executeStatusCode'] = isset($data['executeStatusCode']) ? $data['executeStatusCode'] : null;
        $this->container['executeStatusName'] = isset($data['executeStatusName']) ? $data['executeStatusName'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
        $this->container['executeLatestTime'] = isset($data['executeLatestTime']) ? $data['executeLatestTime'] : null;
        $this->container['executeLatestTimeTimestamp'] = isset($data['executeLatestTimeTimestamp']) ? $data['executeLatestTimeTimestamp'] : null;
        $this->container['executeDuration'] = isset($data['executeDuration']) ? $data['executeDuration'] : null;
        $this->container['executeTimes'] = isset($data['executeTimes']) ? $data['executeTimes'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['caseOperationInfo'] = isset($data['caseOperationInfo']) ? $data['caseOperationInfo'] : null;
        $this->container['assignCaseNum'] = isset($data['assignCaseNum']) ? $data['assignCaseNum'] : null;
        $this->container['finishCaseNum'] = isset($data['finishCaseNum']) ? $data['finishCaseNum'] : null;
        $this->container['assignDefectNum'] = isset($data['assignDefectNum']) ? $data['assignDefectNum'] : null;
        $this->container['taskAssignMsg'] = isset($data['taskAssignMsg']) ? $data['taskAssignMsg'] : null;
        $this->container['iteratorVersionUri'] = isset($data['iteratorVersionUri']) ? $data['iteratorVersionUri'] : null;
        $this->container['resultNumberList'] = isset($data['resultNumberList']) ? $data['resultNumberList'] : null;
        $this->container['finishDate'] = isset($data['finishDate']) ? $data['finishDate'] : null;
        $this->container['finishDateTimestamp'] = isset($data['finishDateTimestamp']) ? $data['finishDateTimestamp'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['planStartTimestamp'] = isset($data['planStartTimestamp']) ? $data['planStartTimestamp'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['planEndTimestamp'] = isset($data['planEndTimestamp']) ? $data['planEndTimestamp'] : null;
        $this->container['expirationStatus'] = isset($data['expirationStatus']) ? $data['expirationStatus'] : null;
        $this->container['expirationStatusName'] = isset($data['expirationStatusName']) ? $data['expirationStatusName'] : null;
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
    *  测试任务URI
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
    * @param string|null $uri 测试任务URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  测试任务名称
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
    * @param string|null $name 测试任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets region
    *  区域
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
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets authorId
    *  创建人ID
    *
    * @return string|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param string|null $authorId 创建人ID
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
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
    * Gets ownerId
    *  责任人ID
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
    * @param string|null $ownerId 责任人ID
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人名称
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
    * @param string|null $ownerName 责任人名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets parentUri
    *  父任务URI
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
    * @param string|null $parentUri 父任务URI
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
    *  父任务路径
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
    * @param string|null $parentPath 父任务路径
    *
    * @return $this
    */
    public function setParentPath($parentPath)
    {
        $this->container['parentPath'] = $parentPath;
        return $this;
    }

    /**
    * Gets originUri
    *  源任务URI
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
    * @param string|null $originUri 源任务URI
    *
    * @return $this
    */
    public function setOriginUri($originUri)
    {
        $this->container['originUri'] = $originUri;
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
    * Gets branchUri
    *  分支URI
    *
    * @return string|null
    */
    public function getBranchUri()
    {
        return $this->container['branchUri'];
    }

    /**
    * Sets branchUri
    *
    * @param string|null $branchUri 分支URI
    *
    * @return $this
    */
    public function setBranchUri($branchUri)
    {
        $this->container['branchUri'] = $branchUri;
        return $this;
    }

    /**
    * Gets versionName
    *  版本名称
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
    * @param string|null $versionName 版本名称
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
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
    * Gets createDateTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateDateTimestamp()
    {
        return $this->container['createDateTimestamp'];
    }

    /**
    * Sets createDateTimestamp
    *
    * @param int|null $createDateTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreateDateTimestamp($createDateTimestamp)
    {
        $this->container['createDateTimestamp'] = $createDateTimestamp;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeTimestamp
    *  更新时间时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeTimestamp()
    {
        return $this->container['updateTimeTimestamp'];
    }

    /**
    * Sets updateTimeTimestamp
    *
    * @param int|null $updateTimeTimestamp 更新时间时间戳
    *
    * @return $this
    */
    public function setUpdateTimeTimestamp($updateTimeTimestamp)
    {
        $this->container['updateTimeTimestamp'] = $updateTimeTimestamp;
        return $this;
    }

    /**
    * Gets relationChangeTime
    *  关联关系修改时时间
    *
    * @return \DateTime|null
    */
    public function getRelationChangeTime()
    {
        return $this->container['relationChangeTime'];
    }

    /**
    * Sets relationChangeTime
    *
    * @param \DateTime|null $relationChangeTime 关联关系修改时时间
    *
    * @return $this
    */
    public function setRelationChangeTime($relationChangeTime)
    {
        $this->container['relationChangeTime'] = $relationChangeTime;
        return $this;
    }

    /**
    * Gets relationChangeTimeTimestamp
    *  关联关系修改时间时间戳
    *
    * @return int|null
    */
    public function getRelationChangeTimeTimestamp()
    {
        return $this->container['relationChangeTimeTimestamp'];
    }

    /**
    * Sets relationChangeTimeTimestamp
    *
    * @param int|null $relationChangeTimeTimestamp 关联关系修改时间时间戳
    *
    * @return $this
    */
    public function setRelationChangeTimeTimestamp($relationChangeTimeTimestamp)
    {
        $this->container['relationChangeTimeTimestamp'] = $relationChangeTimeTimestamp;
        return $this;
    }

    /**
    * Gets testCaseCondition
    *  动态任务用例过滤条件
    *
    * @return string|null
    */
    public function getTestCaseCondition()
    {
        return $this->container['testCaseCondition'];
    }

    /**
    * Sets testCaseCondition
    *
    * @param string|null $testCaseCondition 动态任务用例过滤条件
    *
    * @return $this
    */
    public function setTestCaseCondition($testCaseCondition)
    {
        $this->container['testCaseCondition'] = $testCaseCondition;
        return $this;
    }

    /**
    * Gets updatorId
    *  修改人Id
    *
    * @return string|null
    */
    public function getUpdatorId()
    {
        return $this->container['updatorId'];
    }

    /**
    * Sets updatorId
    *
    * @param string|null $updatorId 修改人Id
    *
    * @return $this
    */
    public function setUpdatorId($updatorId)
    {
        $this->container['updatorId'] = $updatorId;
        return $this;
    }

    /**
    * Gets updatorName
    *  修改人名称
    *
    * @return string|null
    */
    public function getUpdatorName()
    {
        return $this->container['updatorName'];
    }

    /**
    * Sets updatorName
    *
    * @param string|null $updatorName 修改人名称
    *
    * @return $this
    */
    public function setUpdatorName($updatorName)
    {
        $this->container['updatorName'] = $updatorName;
        return $this;
    }

    /**
    * Gets relationChangerId
    *  关联关系修改人Id
    *
    * @return string|null
    */
    public function getRelationChangerId()
    {
        return $this->container['relationChangerId'];
    }

    /**
    * Sets relationChangerId
    *
    * @param string|null $relationChangerId 关联关系修改人Id
    *
    * @return $this
    */
    public function setRelationChangerId($relationChangerId)
    {
        $this->container['relationChangerId'] = $relationChangerId;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型ID
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
    * @param int|null $serviceType 服务类型ID
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
    * Gets tagList
    *  标签名称集合
    *
    * @return string[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param string[]|null $tagList 标签名称集合
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
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
    * Gets releaseDev
    *  发布版本号
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
    * @param string|null $releaseDev 发布版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets extParam
    *  扩展参数
    *
    * @return string|null
    */
    public function getExtParam()
    {
        return $this->container['extParam'];
    }

    /**
    * Sets extParam
    *
    * @param string|null $extParam 扩展参数
    *
    * @return $this
    */
    public function setExtParam($extParam)
    {
        $this->container['extParam'] = $extParam;
        return $this;
    }

    /**
    * Gets executeWay
    *  执行方式（1：串行，2：并行）
    *
    * @return int|null
    */
    public function getExecuteWay()
    {
        return $this->container['executeWay'];
    }

    /**
    * Sets executeWay
    *
    * @param int|null $executeWay 执行方式（1：串行，2：并行）
    *
    * @return $this
    */
    public function setExecuteWay($executeWay)
    {
        $this->container['executeWay'] = $executeWay;
        return $this;
    }

    /**
    * Gets executeType
    *  执行类型（0：冒烟，1：定时）
    *
    * @return int|null
    */
    public function getExecuteType()
    {
        return $this->container['executeType'];
    }

    /**
    * Sets executeType
    *
    * @param int|null $executeType 执行类型（0：冒烟，1：定时）
    *
    * @return $this
    */
    public function setExecuteType($executeType)
    {
        $this->container['executeType'] = $executeType;
        return $this;
    }

    /**
    * Gets statusCode
    *  生命周期状态Code
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 生命周期状态Code
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets statusName
    *  生命周期状态名称
    *
    * @return string|null
    */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
    * Sets statusName
    *
    * @param string|null $statusName 生命周期状态名称
    *
    * @return $this
    */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;
        return $this;
    }

    /**
    * Gets resultCode
    *  执行结果Code
    *
    * @return int|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param int|null $resultCode 执行结果Code
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets resultName
    *  执行状态名称
    *
    * @return string|null
    */
    public function getResultName()
    {
        return $this->container['resultName'];
    }

    /**
    * Sets resultName
    *
    * @param string|null $resultName 执行状态名称
    *
    * @return $this
    */
    public function setResultName($resultName)
    {
        $this->container['resultName'] = $resultName;
        return $this;
    }

    /**
    * Gets executeStatusCode
    *  Echo执行状态Code
    *
    * @return int|null
    */
    public function getExecuteStatusCode()
    {
        return $this->container['executeStatusCode'];
    }

    /**
    * Sets executeStatusCode
    *
    * @param int|null $executeStatusCode Echo执行状态Code
    *
    * @return $this
    */
    public function setExecuteStatusCode($executeStatusCode)
    {
        $this->container['executeStatusCode'] = $executeStatusCode;
        return $this;
    }

    /**
    * Gets executeStatusName
    *  Echo执行状态名称
    *
    * @return string|null
    */
    public function getExecuteStatusName()
    {
        return $this->container['executeStatusName'];
    }

    /**
    * Sets executeStatusName
    *
    * @param string|null $executeStatusName Echo执行状态名称
    *
    * @return $this
    */
    public function setExecuteStatusName($executeStatusName)
    {
        $this->container['executeStatusName'] = $executeStatusName;
        return $this;
    }

    /**
    * Gets executorId
    *  执行人ID
    *
    * @return string|null
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string|null $executorId 执行人ID
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorName
    *  执行人名称
    *
    * @return string|null
    */
    public function getExecutorName()
    {
        return $this->container['executorName'];
    }

    /**
    * Sets executorName
    *
    * @param string|null $executorName 执行人名称
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
        return $this;
    }

    /**
    * Gets executeLatestTime
    *  最近执行时间
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
    * @param \DateTime|null $executeLatestTime 最近执行时间
    *
    * @return $this
    */
    public function setExecuteLatestTime($executeLatestTime)
    {
        $this->container['executeLatestTime'] = $executeLatestTime;
        return $this;
    }

    /**
    * Gets executeLatestTimeTimestamp
    *  最近执行时间时间戳
    *
    * @return int|null
    */
    public function getExecuteLatestTimeTimestamp()
    {
        return $this->container['executeLatestTimeTimestamp'];
    }

    /**
    * Sets executeLatestTimeTimestamp
    *
    * @param int|null $executeLatestTimeTimestamp 最近执行时间时间戳
    *
    * @return $this
    */
    public function setExecuteLatestTimeTimestamp($executeLatestTimeTimestamp)
    {
        $this->container['executeLatestTimeTimestamp'] = $executeLatestTimeTimestamp;
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
    * Gets caseOperationInfo
    *  caseOperationInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseOperationVo|null
    */
    public function getCaseOperationInfo()
    {
        return $this->container['caseOperationInfo'];
    }

    /**
    * Sets caseOperationInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseOperationVo|null $caseOperationInfo caseOperationInfo
    *
    * @return $this
    */
    public function setCaseOperationInfo($caseOperationInfo)
    {
        $this->container['caseOperationInfo'] = $caseOperationInfo;
        return $this;
    }

    /**
    * Gets assignCaseNum
    *  关联用例数
    *
    * @return int|null
    */
    public function getAssignCaseNum()
    {
        return $this->container['assignCaseNum'];
    }

    /**
    * Sets assignCaseNum
    *
    * @param int|null $assignCaseNum 关联用例数
    *
    * @return $this
    */
    public function setAssignCaseNum($assignCaseNum)
    {
        $this->container['assignCaseNum'] = $assignCaseNum;
        return $this;
    }

    /**
    * Gets finishCaseNum
    *  已完成用例数量
    *
    * @return int|null
    */
    public function getFinishCaseNum()
    {
        return $this->container['finishCaseNum'];
    }

    /**
    * Sets finishCaseNum
    *
    * @param int|null $finishCaseNum 已完成用例数量
    *
    * @return $this
    */
    public function setFinishCaseNum($finishCaseNum)
    {
        $this->container['finishCaseNum'] = $finishCaseNum;
        return $this;
    }

    /**
    * Gets assignDefectNum
    *  关联缺陷数量
    *
    * @return int|null
    */
    public function getAssignDefectNum()
    {
        return $this->container['assignDefectNum'];
    }

    /**
    * Sets assignDefectNum
    *
    * @param int|null $assignDefectNum 关联缺陷数量
    *
    * @return $this
    */
    public function setAssignDefectNum($assignDefectNum)
    {
        $this->container['assignDefectNum'] = $assignDefectNum;
        return $this;
    }

    /**
    * Gets taskAssignMsg
    *  任务关联用例变更提示信息
    *
    * @return string|null
    */
    public function getTaskAssignMsg()
    {
        return $this->container['taskAssignMsg'];
    }

    /**
    * Sets taskAssignMsg
    *
    * @param string|null $taskAssignMsg 任务关联用例变更提示信息
    *
    * @return $this
    */
    public function setTaskAssignMsg($taskAssignMsg)
    {
        $this->container['taskAssignMsg'] = $taskAssignMsg;
        return $this;
    }

    /**
    * Gets iteratorVersionUri
    *  测试套所属迭代uri，非迭代下创建的测试套返回null
    *
    * @return string|null
    */
    public function getIteratorVersionUri()
    {
        return $this->container['iteratorVersionUri'];
    }

    /**
    * Sets iteratorVersionUri
    *
    * @param string|null $iteratorVersionUri 测试套所属迭代uri，非迭代下创建的测试套返回null
    *
    * @return $this
    */
    public function setIteratorVersionUri($iteratorVersionUri)
    {
        $this->container['iteratorVersionUri'] = $iteratorVersionUri;
        return $this;
    }

    /**
    * Gets resultNumberList
    *  用户自定义结果对应的用例数目
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueAndCodeVo[]|null
    */
    public function getResultNumberList()
    {
        return $this->container['resultNumberList'];
    }

    /**
    * Sets resultNumberList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueAndCodeVo[]|null $resultNumberList 用户自定义结果对应的用例数目
    *
    * @return $this
    */
    public function setResultNumberList($resultNumberList)
    {
        $this->container['resultNumberList'] = $resultNumberList;
        return $this;
    }

    /**
    * Gets finishDate
    *  测试套完成时间
    *
    * @return \DateTime|null
    */
    public function getFinishDate()
    {
        return $this->container['finishDate'];
    }

    /**
    * Sets finishDate
    *
    * @param \DateTime|null $finishDate 测试套完成时间
    *
    * @return $this
    */
    public function setFinishDate($finishDate)
    {
        $this->container['finishDate'] = $finishDate;
        return $this;
    }

    /**
    * Gets finishDateTimestamp
    *  测试套完成时间戳
    *
    * @return int|null
    */
    public function getFinishDateTimestamp()
    {
        return $this->container['finishDateTimestamp'];
    }

    /**
    * Sets finishDateTimestamp
    *
    * @param int|null $finishDateTimestamp 测试套完成时间戳
    *
    * @return $this
    */
    public function setFinishDateTimestamp($finishDateTimestamp)
    {
        $this->container['finishDateTimestamp'] = $finishDateTimestamp;
        return $this;
    }

    /**
    * Gets planStartDate
    *  计划开始时间
    *
    * @return \DateTime|null
    */
    public function getPlanStartDate()
    {
        return $this->container['planStartDate'];
    }

    /**
    * Sets planStartDate
    *
    * @param \DateTime|null $planStartDate 计划开始时间
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets planStartTimestamp
    *  计划开始时间戳
    *
    * @return int|null
    */
    public function getPlanStartTimestamp()
    {
        return $this->container['planStartTimestamp'];
    }

    /**
    * Sets planStartTimestamp
    *
    * @param int|null $planStartTimestamp 计划开始时间戳
    *
    * @return $this
    */
    public function setPlanStartTimestamp($planStartTimestamp)
    {
        $this->container['planStartTimestamp'] = $planStartTimestamp;
        return $this;
    }

    /**
    * Gets planEndDate
    *  计划结束时间
    *
    * @return \DateTime|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param \DateTime|null $planEndDate 计划结束时间
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets planEndTimestamp
    *  计划结束时间戳
    *
    * @return int|null
    */
    public function getPlanEndTimestamp()
    {
        return $this->container['planEndTimestamp'];
    }

    /**
    * Sets planEndTimestamp
    *
    * @param int|null $planEndTimestamp 计划结束时间戳
    *
    * @return $this
    */
    public function setPlanEndTimestamp($planEndTimestamp)
    {
        $this->container['planEndTimestamp'] = $planEndTimestamp;
        return $this;
    }

    /**
    * Gets expirationStatus
    *  测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @return int|null
    */
    public function getExpirationStatus()
    {
        return $this->container['expirationStatus'];
    }

    /**
    * Sets expirationStatus
    *
    * @param int|null $expirationStatus 测试套超期状态值，分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @return $this
    */
    public function setExpirationStatus($expirationStatus)
    {
        $this->container['expirationStatus'] = $expirationStatus;
        return $this;
    }

    /**
    * Gets expirationStatusName
    *  测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @return string|null
    */
    public function getExpirationStatusName()
    {
        return $this->container['expirationStatusName'];
    }

    /**
    * Sets expirationStatusName
    *
    * @param string|null $expirationStatusName 测试套超期状态名称，分别为：无状态(不显示状态)、未超期(Unexpired)、即将超期(About to expire)、已超期(Expired)、延期完成(Delayed completion)、按期完成(On schedule completion)
    *
    * @return $this
    */
    public function setExpirationStatusName($expirationStatusName)
    {
        $this->container['expirationStatusName'] = $expirationStatusName;
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

