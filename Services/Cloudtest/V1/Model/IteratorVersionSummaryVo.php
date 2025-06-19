<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IteratorVersionSummaryVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IteratorVersionSummaryVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * version  待测版本
    * owner  处理者ID
    * creator  创建人ID
    * iterations  关联迭代
    * description  描述
    * region  区域
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
    * isMaster  是否为Master分支
    * isIterator  是否为迭代
    * planStartDate  开始时间
    * planEndDate  结束时间
    * serviceId  微服务ID
    * serviceName  微服务名
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planId  计划ID
    * metricPbiIds  度量PBI ID
    * metricPbiIdNames  度量PBI名称
    * lastSynDate  最后同步时间
    * isClosed  版本是否关闭
    * asynGit  是否同步git库
    * schemaNo  schema编号
    * finishDate  迭代实际完成时间
    * ownerName  处理者名称
    * creatorName  创建人名称
    * currentStage  当前所处阶段
    * serviceTypes  服务类型
    * riskRating  风险等级
    * riskDes  风险描述
    * projectUuid  项目ID
    * domainId  租户ID
    * piId  pi的id
    * startDate  计划开始时间
    * startDateTimestamp  计划开始时间时间戳
    * endDate  计划结束时间
    * endDateTimestamp  计划结束时间时间戳
    * actualStartDate  实际开始时间
    * actualStartDateTimestamp  实际开始时间时间戳
    * actualEndDate  实际完成时间
    * actualEndDateTimestamp  实际开始时间时间戳
    * isExpired  是否超期
    * expiredInfo  计划过期信息,空代表不超期，否则给出具体超期信息
    * stages  迭代计划，默认包含design,execute,report
    * design  design
    * execute  execute
    * report  report
    * branchUri  所属分支URI
    * branchName  所属分支名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'type' => 'string',
            'author' => 'string',
            'name' => 'string',
            'rank' => 'int',
            'version' => 'string',
            'owner' => 'string',
            'creator' => 'string',
            'iterations' => 'string',
            'description' => 'string',
            'region' => 'string',
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
            'isMaster' => 'int',
            'isIterator' => 'int',
            'planStartDate' => '\DateTime',
            'planEndDate' => '\DateTime',
            'serviceId' => 'string',
            'serviceName' => 'string',
            'pbiId' => 'string',
            'pbiName' => 'string',
            'planId' => 'string',
            'metricPbiIds' => 'string',
            'metricPbiIdNames' => 'string',
            'lastSynDate' => '\DateTime',
            'isClosed' => 'string',
            'asynGit' => 'string',
            'schemaNo' => 'int',
            'finishDate' => '\DateTime',
            'ownerName' => 'string',
            'creatorName' => 'string',
            'currentStage' => 'string',
            'serviceTypes' => 'string',
            'riskRating' => 'int',
            'riskDes' => 'string',
            'projectUuid' => 'string',
            'domainId' => 'string',
            'piId' => 'string',
            'startDate' => 'string',
            'startDateTimestamp' => 'int',
            'endDate' => 'string',
            'endDateTimestamp' => 'int',
            'actualStartDate' => 'string',
            'actualStartDateTimestamp' => 'int',
            'actualEndDate' => 'string',
            'actualEndDateTimestamp' => 'int',
            'isExpired' => 'string',
            'expiredInfo' => 'string',
            'stages' => 'string[]',
            'design' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\DesignSummaryVo',
            'execute' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteSummaryVo',
            'report' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ReportSummaryVo',
            'branchUri' => 'string',
            'branchName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * version  待测版本
    * owner  处理者ID
    * creator  创建人ID
    * iterations  关联迭代
    * description  描述
    * region  区域
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
    * isMaster  是否为Master分支
    * isIterator  是否为迭代
    * planStartDate  开始时间
    * planEndDate  结束时间
    * serviceId  微服务ID
    * serviceName  微服务名
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planId  计划ID
    * metricPbiIds  度量PBI ID
    * metricPbiIdNames  度量PBI名称
    * lastSynDate  最后同步时间
    * isClosed  版本是否关闭
    * asynGit  是否同步git库
    * schemaNo  schema编号
    * finishDate  迭代实际完成时间
    * ownerName  处理者名称
    * creatorName  创建人名称
    * currentStage  当前所处阶段
    * serviceTypes  服务类型
    * riskRating  风险等级
    * riskDes  风险描述
    * projectUuid  项目ID
    * domainId  租户ID
    * piId  pi的id
    * startDate  计划开始时间
    * startDateTimestamp  计划开始时间时间戳
    * endDate  计划结束时间
    * endDateTimestamp  计划结束时间时间戳
    * actualStartDate  实际开始时间
    * actualStartDateTimestamp  实际开始时间时间戳
    * actualEndDate  实际完成时间
    * actualEndDateTimestamp  实际开始时间时间戳
    * isExpired  是否超期
    * expiredInfo  计划过期信息,空代表不超期，否则给出具体超期信息
    * stages  迭代计划，默认包含design,execute,report
    * design  design
    * execute  execute
    * report  report
    * branchUri  所属分支URI
    * branchName  所属分支名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'type' => null,
        'author' => null,
        'name' => null,
        'rank' => 'int32',
        'version' => null,
        'owner' => null,
        'creator' => null,
        'iterations' => null,
        'description' => null,
        'region' => null,
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
        'isMaster' => 'int32',
        'isIterator' => 'int32',
        'planStartDate' => 'date-time',
        'planEndDate' => 'date-time',
        'serviceId' => null,
        'serviceName' => null,
        'pbiId' => null,
        'pbiName' => null,
        'planId' => null,
        'metricPbiIds' => null,
        'metricPbiIdNames' => null,
        'lastSynDate' => 'date-time',
        'isClosed' => null,
        'asynGit' => null,
        'schemaNo' => 'int32',
        'finishDate' => 'date-time',
        'ownerName' => null,
        'creatorName' => null,
        'currentStage' => null,
        'serviceTypes' => null,
        'riskRating' => 'int32',
        'riskDes' => null,
        'projectUuid' => null,
        'domainId' => null,
        'piId' => null,
        'startDate' => null,
        'startDateTimestamp' => 'int64',
        'endDate' => null,
        'endDateTimestamp' => 'int64',
        'actualStartDate' => null,
        'actualStartDateTimestamp' => 'int64',
        'actualEndDate' => null,
        'actualEndDateTimestamp' => 'int64',
        'isExpired' => null,
        'expiredInfo' => null,
        'stages' => null,
        'design' => null,
        'execute' => null,
        'report' => null,
        'branchUri' => null,
        'branchName' => null
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
    * version  待测版本
    * owner  处理者ID
    * creator  创建人ID
    * iterations  关联迭代
    * description  描述
    * region  区域
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
    * isMaster  是否为Master分支
    * isIterator  是否为迭代
    * planStartDate  开始时间
    * planEndDate  结束时间
    * serviceId  微服务ID
    * serviceName  微服务名
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planId  计划ID
    * metricPbiIds  度量PBI ID
    * metricPbiIdNames  度量PBI名称
    * lastSynDate  最后同步时间
    * isClosed  版本是否关闭
    * asynGit  是否同步git库
    * schemaNo  schema编号
    * finishDate  迭代实际完成时间
    * ownerName  处理者名称
    * creatorName  创建人名称
    * currentStage  当前所处阶段
    * serviceTypes  服务类型
    * riskRating  风险等级
    * riskDes  风险描述
    * projectUuid  项目ID
    * domainId  租户ID
    * piId  pi的id
    * startDate  计划开始时间
    * startDateTimestamp  计划开始时间时间戳
    * endDate  计划结束时间
    * endDateTimestamp  计划结束时间时间戳
    * actualStartDate  实际开始时间
    * actualStartDateTimestamp  实际开始时间时间戳
    * actualEndDate  实际完成时间
    * actualEndDateTimestamp  实际开始时间时间戳
    * isExpired  是否超期
    * expiredInfo  计划过期信息,空代表不超期，否则给出具体超期信息
    * stages  迭代计划，默认包含design,execute,report
    * design  design
    * execute  execute
    * report  report
    * branchUri  所属分支URI
    * branchName  所属分支名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'type' => 'type',
            'author' => 'author',
            'name' => 'name',
            'rank' => 'rank',
            'version' => 'version',
            'owner' => 'owner',
            'creator' => 'creator',
            'iterations' => 'iterations',
            'description' => 'description',
            'region' => 'region',
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
            'isMaster' => 'is_master',
            'isIterator' => 'is_iterator',
            'planStartDate' => 'plan_start_date',
            'planEndDate' => 'plan_end_date',
            'serviceId' => 'service_id',
            'serviceName' => 'service_name',
            'pbiId' => 'pbi_id',
            'pbiName' => 'pbi_name',
            'planId' => 'plan_id',
            'metricPbiIds' => 'metric_pbi_ids',
            'metricPbiIdNames' => 'metric_pbi_id_names',
            'lastSynDate' => 'last_syn_date',
            'isClosed' => 'is_closed',
            'asynGit' => 'asyn_git',
            'schemaNo' => 'schema_no',
            'finishDate' => 'finish_date',
            'ownerName' => 'owner_name',
            'creatorName' => 'creator_name',
            'currentStage' => 'current_stage',
            'serviceTypes' => 'service_types',
            'riskRating' => 'risk_rating',
            'riskDes' => 'risk_des',
            'projectUuid' => 'project_uuid',
            'domainId' => 'domain_id',
            'piId' => 'pi_id',
            'startDate' => 'start_date',
            'startDateTimestamp' => 'start_date_timestamp',
            'endDate' => 'end_date',
            'endDateTimestamp' => 'end_date_timestamp',
            'actualStartDate' => 'actual_start_date',
            'actualStartDateTimestamp' => 'actual_start_date_timestamp',
            'actualEndDate' => 'actual_end_date',
            'actualEndDateTimestamp' => 'actual_end_date_timestamp',
            'isExpired' => 'is_expired',
            'expiredInfo' => 'expired_info',
            'stages' => 'stages',
            'design' => 'design',
            'execute' => 'execute',
            'report' => 'report',
            'branchUri' => 'branch_uri',
            'branchName' => 'branch_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * version  待测版本
    * owner  处理者ID
    * creator  创建人ID
    * iterations  关联迭代
    * description  描述
    * region  区域
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
    * isMaster  是否为Master分支
    * isIterator  是否为迭代
    * planStartDate  开始时间
    * planEndDate  结束时间
    * serviceId  微服务ID
    * serviceName  微服务名
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planId  计划ID
    * metricPbiIds  度量PBI ID
    * metricPbiIdNames  度量PBI名称
    * lastSynDate  最后同步时间
    * isClosed  版本是否关闭
    * asynGit  是否同步git库
    * schemaNo  schema编号
    * finishDate  迭代实际完成时间
    * ownerName  处理者名称
    * creatorName  创建人名称
    * currentStage  当前所处阶段
    * serviceTypes  服务类型
    * riskRating  风险等级
    * riskDes  风险描述
    * projectUuid  项目ID
    * domainId  租户ID
    * piId  pi的id
    * startDate  计划开始时间
    * startDateTimestamp  计划开始时间时间戳
    * endDate  计划结束时间
    * endDateTimestamp  计划结束时间时间戳
    * actualStartDate  实际开始时间
    * actualStartDateTimestamp  实际开始时间时间戳
    * actualEndDate  实际完成时间
    * actualEndDateTimestamp  实际开始时间时间戳
    * isExpired  是否超期
    * expiredInfo  计划过期信息,空代表不超期，否则给出具体超期信息
    * stages  迭代计划，默认包含design,execute,report
    * design  design
    * execute  execute
    * report  report
    * branchUri  所属分支URI
    * branchName  所属分支名称
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'type' => 'setType',
            'author' => 'setAuthor',
            'name' => 'setName',
            'rank' => 'setRank',
            'version' => 'setVersion',
            'owner' => 'setOwner',
            'creator' => 'setCreator',
            'iterations' => 'setIterations',
            'description' => 'setDescription',
            'region' => 'setRegion',
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
            'isMaster' => 'setIsMaster',
            'isIterator' => 'setIsIterator',
            'planStartDate' => 'setPlanStartDate',
            'planEndDate' => 'setPlanEndDate',
            'serviceId' => 'setServiceId',
            'serviceName' => 'setServiceName',
            'pbiId' => 'setPbiId',
            'pbiName' => 'setPbiName',
            'planId' => 'setPlanId',
            'metricPbiIds' => 'setMetricPbiIds',
            'metricPbiIdNames' => 'setMetricPbiIdNames',
            'lastSynDate' => 'setLastSynDate',
            'isClosed' => 'setIsClosed',
            'asynGit' => 'setAsynGit',
            'schemaNo' => 'setSchemaNo',
            'finishDate' => 'setFinishDate',
            'ownerName' => 'setOwnerName',
            'creatorName' => 'setCreatorName',
            'currentStage' => 'setCurrentStage',
            'serviceTypes' => 'setServiceTypes',
            'riskRating' => 'setRiskRating',
            'riskDes' => 'setRiskDes',
            'projectUuid' => 'setProjectUuid',
            'domainId' => 'setDomainId',
            'piId' => 'setPiId',
            'startDate' => 'setStartDate',
            'startDateTimestamp' => 'setStartDateTimestamp',
            'endDate' => 'setEndDate',
            'endDateTimestamp' => 'setEndDateTimestamp',
            'actualStartDate' => 'setActualStartDate',
            'actualStartDateTimestamp' => 'setActualStartDateTimestamp',
            'actualEndDate' => 'setActualEndDate',
            'actualEndDateTimestamp' => 'setActualEndDateTimestamp',
            'isExpired' => 'setIsExpired',
            'expiredInfo' => 'setExpiredInfo',
            'stages' => 'setStages',
            'design' => 'setDesign',
            'execute' => 'setExecute',
            'report' => 'setReport',
            'branchUri' => 'setBranchUri',
            'branchName' => 'setBranchName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * version  待测版本
    * owner  处理者ID
    * creator  创建人ID
    * iterations  关联迭代
    * description  描述
    * region  区域
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
    * isMaster  是否为Master分支
    * isIterator  是否为迭代
    * planStartDate  开始时间
    * planEndDate  结束时间
    * serviceId  微服务ID
    * serviceName  微服务名
    * pbiId  PBI ID
    * pbiName  PBI信息
    * planId  计划ID
    * metricPbiIds  度量PBI ID
    * metricPbiIdNames  度量PBI名称
    * lastSynDate  最后同步时间
    * isClosed  版本是否关闭
    * asynGit  是否同步git库
    * schemaNo  schema编号
    * finishDate  迭代实际完成时间
    * ownerName  处理者名称
    * creatorName  创建人名称
    * currentStage  当前所处阶段
    * serviceTypes  服务类型
    * riskRating  风险等级
    * riskDes  风险描述
    * projectUuid  项目ID
    * domainId  租户ID
    * piId  pi的id
    * startDate  计划开始时间
    * startDateTimestamp  计划开始时间时间戳
    * endDate  计划结束时间
    * endDateTimestamp  计划结束时间时间戳
    * actualStartDate  实际开始时间
    * actualStartDateTimestamp  实际开始时间时间戳
    * actualEndDate  实际完成时间
    * actualEndDateTimestamp  实际开始时间时间戳
    * isExpired  是否超期
    * expiredInfo  计划过期信息,空代表不超期，否则给出具体超期信息
    * stages  迭代计划，默认包含design,execute,report
    * design  design
    * execute  execute
    * report  report
    * branchUri  所属分支URI
    * branchName  所属分支名称
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'type' => 'getType',
            'author' => 'getAuthor',
            'name' => 'getName',
            'rank' => 'getRank',
            'version' => 'getVersion',
            'owner' => 'getOwner',
            'creator' => 'getCreator',
            'iterations' => 'getIterations',
            'description' => 'getDescription',
            'region' => 'getRegion',
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
            'isMaster' => 'getIsMaster',
            'isIterator' => 'getIsIterator',
            'planStartDate' => 'getPlanStartDate',
            'planEndDate' => 'getPlanEndDate',
            'serviceId' => 'getServiceId',
            'serviceName' => 'getServiceName',
            'pbiId' => 'getPbiId',
            'pbiName' => 'getPbiName',
            'planId' => 'getPlanId',
            'metricPbiIds' => 'getMetricPbiIds',
            'metricPbiIdNames' => 'getMetricPbiIdNames',
            'lastSynDate' => 'getLastSynDate',
            'isClosed' => 'getIsClosed',
            'asynGit' => 'getAsynGit',
            'schemaNo' => 'getSchemaNo',
            'finishDate' => 'getFinishDate',
            'ownerName' => 'getOwnerName',
            'creatorName' => 'getCreatorName',
            'currentStage' => 'getCurrentStage',
            'serviceTypes' => 'getServiceTypes',
            'riskRating' => 'getRiskRating',
            'riskDes' => 'getRiskDes',
            'projectUuid' => 'getProjectUuid',
            'domainId' => 'getDomainId',
            'piId' => 'getPiId',
            'startDate' => 'getStartDate',
            'startDateTimestamp' => 'getStartDateTimestamp',
            'endDate' => 'getEndDate',
            'endDateTimestamp' => 'getEndDateTimestamp',
            'actualStartDate' => 'getActualStartDate',
            'actualStartDateTimestamp' => 'getActualStartDateTimestamp',
            'actualEndDate' => 'getActualEndDate',
            'actualEndDateTimestamp' => 'getActualEndDateTimestamp',
            'isExpired' => 'getIsExpired',
            'expiredInfo' => 'getExpiredInfo',
            'stages' => 'getStages',
            'design' => 'getDesign',
            'execute' => 'getExecute',
            'report' => 'getReport',
            'branchUri' => 'getBranchUri',
            'branchName' => 'getBranchName'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['iterations'] = isset($data['iterations']) ? $data['iterations'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
        $this->container['isMaster'] = isset($data['isMaster']) ? $data['isMaster'] : null;
        $this->container['isIterator'] = isset($data['isIterator']) ? $data['isIterator'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['pbiId'] = isset($data['pbiId']) ? $data['pbiId'] : null;
        $this->container['pbiName'] = isset($data['pbiName']) ? $data['pbiName'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['metricPbiIds'] = isset($data['metricPbiIds']) ? $data['metricPbiIds'] : null;
        $this->container['metricPbiIdNames'] = isset($data['metricPbiIdNames']) ? $data['metricPbiIdNames'] : null;
        $this->container['lastSynDate'] = isset($data['lastSynDate']) ? $data['lastSynDate'] : null;
        $this->container['isClosed'] = isset($data['isClosed']) ? $data['isClosed'] : null;
        $this->container['asynGit'] = isset($data['asynGit']) ? $data['asynGit'] : null;
        $this->container['schemaNo'] = isset($data['schemaNo']) ? $data['schemaNo'] : null;
        $this->container['finishDate'] = isset($data['finishDate']) ? $data['finishDate'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['currentStage'] = isset($data['currentStage']) ? $data['currentStage'] : null;
        $this->container['serviceTypes'] = isset($data['serviceTypes']) ? $data['serviceTypes'] : null;
        $this->container['riskRating'] = isset($data['riskRating']) ? $data['riskRating'] : null;
        $this->container['riskDes'] = isset($data['riskDes']) ? $data['riskDes'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['piId'] = isset($data['piId']) ? $data['piId'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['startDateTimestamp'] = isset($data['startDateTimestamp']) ? $data['startDateTimestamp'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['endDateTimestamp'] = isset($data['endDateTimestamp']) ? $data['endDateTimestamp'] : null;
        $this->container['actualStartDate'] = isset($data['actualStartDate']) ? $data['actualStartDate'] : null;
        $this->container['actualStartDateTimestamp'] = isset($data['actualStartDateTimestamp']) ? $data['actualStartDateTimestamp'] : null;
        $this->container['actualEndDate'] = isset($data['actualEndDate']) ? $data['actualEndDate'] : null;
        $this->container['actualEndDateTimestamp'] = isset($data['actualEndDateTimestamp']) ? $data['actualEndDateTimestamp'] : null;
        $this->container['isExpired'] = isset($data['isExpired']) ? $data['isExpired'] : null;
        $this->container['expiredInfo'] = isset($data['expiredInfo']) ? $data['expiredInfo'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
        $this->container['design'] = isset($data['design']) ? $data['design'] : null;
        $this->container['execute'] = isset($data['execute']) ? $data['execute'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
        $this->container['branchUri'] = isset($data['branchUri']) ? $data['branchUri'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
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
    * Gets version
    *  待测版本
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
    * @param string|null $version 待测版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets owner
    *  处理者ID
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
    * @param string|null $owner 处理者ID
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets creator
    *  创建人ID
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人ID
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets iterations
    *  关联迭代
    *
    * @return string|null
    */
    public function getIterations()
    {
        return $this->container['iterations'];
    }

    /**
    * Sets iterations
    *
    * @param string|null $iterations 关联迭代
    *
    * @return $this
    */
    public function setIterations($iterations)
    {
        $this->container['iterations'] = $iterations;
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
    * Gets isMaster
    *  是否为Master分支
    *
    * @return int|null
    */
    public function getIsMaster()
    {
        return $this->container['isMaster'];
    }

    /**
    * Sets isMaster
    *
    * @param int|null $isMaster 是否为Master分支
    *
    * @return $this
    */
    public function setIsMaster($isMaster)
    {
        $this->container['isMaster'] = $isMaster;
        return $this;
    }

    /**
    * Gets isIterator
    *  是否为迭代
    *
    * @return int|null
    */
    public function getIsIterator()
    {
        return $this->container['isIterator'];
    }

    /**
    * Sets isIterator
    *
    * @param int|null $isIterator 是否为迭代
    *
    * @return $this
    */
    public function setIsIterator($isIterator)
    {
        $this->container['isIterator'] = $isIterator;
        return $this;
    }

    /**
    * Gets planStartDate
    *  开始时间
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
    * @param \DateTime|null $planStartDate 开始时间
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets planEndDate
    *  结束时间
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
    * @param \DateTime|null $planEndDate 结束时间
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets serviceId
    *  微服务ID
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 微服务ID
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets serviceName
    *  微服务名
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 微服务名
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets pbiId
    *  PBI ID
    *
    * @return string|null
    */
    public function getPbiId()
    {
        return $this->container['pbiId'];
    }

    /**
    * Sets pbiId
    *
    * @param string|null $pbiId PBI ID
    *
    * @return $this
    */
    public function setPbiId($pbiId)
    {
        $this->container['pbiId'] = $pbiId;
        return $this;
    }

    /**
    * Gets pbiName
    *  PBI信息
    *
    * @return string|null
    */
    public function getPbiName()
    {
        return $this->container['pbiName'];
    }

    /**
    * Sets pbiName
    *
    * @param string|null $pbiName PBI信息
    *
    * @return $this
    */
    public function setPbiName($pbiName)
    {
        $this->container['pbiName'] = $pbiName;
        return $this;
    }

    /**
    * Gets planId
    *  计划ID
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 计划ID
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets metricPbiIds
    *  度量PBI ID
    *
    * @return string|null
    */
    public function getMetricPbiIds()
    {
        return $this->container['metricPbiIds'];
    }

    /**
    * Sets metricPbiIds
    *
    * @param string|null $metricPbiIds 度量PBI ID
    *
    * @return $this
    */
    public function setMetricPbiIds($metricPbiIds)
    {
        $this->container['metricPbiIds'] = $metricPbiIds;
        return $this;
    }

    /**
    * Gets metricPbiIdNames
    *  度量PBI名称
    *
    * @return string|null
    */
    public function getMetricPbiIdNames()
    {
        return $this->container['metricPbiIdNames'];
    }

    /**
    * Sets metricPbiIdNames
    *
    * @param string|null $metricPbiIdNames 度量PBI名称
    *
    * @return $this
    */
    public function setMetricPbiIdNames($metricPbiIdNames)
    {
        $this->container['metricPbiIdNames'] = $metricPbiIdNames;
        return $this;
    }

    /**
    * Gets lastSynDate
    *  最后同步时间
    *
    * @return \DateTime|null
    */
    public function getLastSynDate()
    {
        return $this->container['lastSynDate'];
    }

    /**
    * Sets lastSynDate
    *
    * @param \DateTime|null $lastSynDate 最后同步时间
    *
    * @return $this
    */
    public function setLastSynDate($lastSynDate)
    {
        $this->container['lastSynDate'] = $lastSynDate;
        return $this;
    }

    /**
    * Gets isClosed
    *  版本是否关闭
    *
    * @return string|null
    */
    public function getIsClosed()
    {
        return $this->container['isClosed'];
    }

    /**
    * Sets isClosed
    *
    * @param string|null $isClosed 版本是否关闭
    *
    * @return $this
    */
    public function setIsClosed($isClosed)
    {
        $this->container['isClosed'] = $isClosed;
        return $this;
    }

    /**
    * Gets asynGit
    *  是否同步git库
    *
    * @return string|null
    */
    public function getAsynGit()
    {
        return $this->container['asynGit'];
    }

    /**
    * Sets asynGit
    *
    * @param string|null $asynGit 是否同步git库
    *
    * @return $this
    */
    public function setAsynGit($asynGit)
    {
        $this->container['asynGit'] = $asynGit;
        return $this;
    }

    /**
    * Gets schemaNo
    *  schema编号
    *
    * @return int|null
    */
    public function getSchemaNo()
    {
        return $this->container['schemaNo'];
    }

    /**
    * Sets schemaNo
    *
    * @param int|null $schemaNo schema编号
    *
    * @return $this
    */
    public function setSchemaNo($schemaNo)
    {
        $this->container['schemaNo'] = $schemaNo;
        return $this;
    }

    /**
    * Gets finishDate
    *  迭代实际完成时间
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
    * @param \DateTime|null $finishDate 迭代实际完成时间
    *
    * @return $this
    */
    public function setFinishDate($finishDate)
    {
        $this->container['finishDate'] = $finishDate;
        return $this;
    }

    /**
    * Gets ownerName
    *  处理者名称
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
    * @param string|null $ownerName 处理者名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets currentStage
    *  当前所处阶段
    *
    * @return string|null
    */
    public function getCurrentStage()
    {
        return $this->container['currentStage'];
    }

    /**
    * Sets currentStage
    *
    * @param string|null $currentStage 当前所处阶段
    *
    * @return $this
    */
    public function setCurrentStage($currentStage)
    {
        $this->container['currentStage'] = $currentStage;
        return $this;
    }

    /**
    * Gets serviceTypes
    *  服务类型
    *
    * @return string|null
    */
    public function getServiceTypes()
    {
        return $this->container['serviceTypes'];
    }

    /**
    * Sets serviceTypes
    *
    * @param string|null $serviceTypes 服务类型
    *
    * @return $this
    */
    public function setServiceTypes($serviceTypes)
    {
        $this->container['serviceTypes'] = $serviceTypes;
        return $this;
    }

    /**
    * Gets riskRating
    *  风险等级
    *
    * @return int|null
    */
    public function getRiskRating()
    {
        return $this->container['riskRating'];
    }

    /**
    * Sets riskRating
    *
    * @param int|null $riskRating 风险等级
    *
    * @return $this
    */
    public function setRiskRating($riskRating)
    {
        $this->container['riskRating'] = $riskRating;
        return $this;
    }

    /**
    * Gets riskDes
    *  风险描述
    *
    * @return string|null
    */
    public function getRiskDes()
    {
        return $this->container['riskDes'];
    }

    /**
    * Sets riskDes
    *
    * @param string|null $riskDes 风险描述
    *
    * @return $this
    */
    public function setRiskDes($riskDes)
    {
        $this->container['riskDes'] = $riskDes;
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
    * Gets domainId
    *  租户ID
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
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets piId
    *  pi的id
    *
    * @return string|null
    */
    public function getPiId()
    {
        return $this->container['piId'];
    }

    /**
    * Sets piId
    *
    * @param string|null $piId pi的id
    *
    * @return $this
    */
    public function setPiId($piId)
    {
        $this->container['piId'] = $piId;
        return $this;
    }

    /**
    * Gets startDate
    *  计划开始时间
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 计划开始时间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets startDateTimestamp
    *  计划开始时间时间戳
    *
    * @return int|null
    */
    public function getStartDateTimestamp()
    {
        return $this->container['startDateTimestamp'];
    }

    /**
    * Sets startDateTimestamp
    *
    * @param int|null $startDateTimestamp 计划开始时间时间戳
    *
    * @return $this
    */
    public function setStartDateTimestamp($startDateTimestamp)
    {
        $this->container['startDateTimestamp'] = $startDateTimestamp;
        return $this;
    }

    /**
    * Gets endDate
    *  计划结束时间
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 计划结束时间
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets endDateTimestamp
    *  计划结束时间时间戳
    *
    * @return int|null
    */
    public function getEndDateTimestamp()
    {
        return $this->container['endDateTimestamp'];
    }

    /**
    * Sets endDateTimestamp
    *
    * @param int|null $endDateTimestamp 计划结束时间时间戳
    *
    * @return $this
    */
    public function setEndDateTimestamp($endDateTimestamp)
    {
        $this->container['endDateTimestamp'] = $endDateTimestamp;
        return $this;
    }

    /**
    * Gets actualStartDate
    *  实际开始时间
    *
    * @return string|null
    */
    public function getActualStartDate()
    {
        return $this->container['actualStartDate'];
    }

    /**
    * Sets actualStartDate
    *
    * @param string|null $actualStartDate 实际开始时间
    *
    * @return $this
    */
    public function setActualStartDate($actualStartDate)
    {
        $this->container['actualStartDate'] = $actualStartDate;
        return $this;
    }

    /**
    * Gets actualStartDateTimestamp
    *  实际开始时间时间戳
    *
    * @return int|null
    */
    public function getActualStartDateTimestamp()
    {
        return $this->container['actualStartDateTimestamp'];
    }

    /**
    * Sets actualStartDateTimestamp
    *
    * @param int|null $actualStartDateTimestamp 实际开始时间时间戳
    *
    * @return $this
    */
    public function setActualStartDateTimestamp($actualStartDateTimestamp)
    {
        $this->container['actualStartDateTimestamp'] = $actualStartDateTimestamp;
        return $this;
    }

    /**
    * Gets actualEndDate
    *  实际完成时间
    *
    * @return string|null
    */
    public function getActualEndDate()
    {
        return $this->container['actualEndDate'];
    }

    /**
    * Sets actualEndDate
    *
    * @param string|null $actualEndDate 实际完成时间
    *
    * @return $this
    */
    public function setActualEndDate($actualEndDate)
    {
        $this->container['actualEndDate'] = $actualEndDate;
        return $this;
    }

    /**
    * Gets actualEndDateTimestamp
    *  实际开始时间时间戳
    *
    * @return int|null
    */
    public function getActualEndDateTimestamp()
    {
        return $this->container['actualEndDateTimestamp'];
    }

    /**
    * Sets actualEndDateTimestamp
    *
    * @param int|null $actualEndDateTimestamp 实际开始时间时间戳
    *
    * @return $this
    */
    public function setActualEndDateTimestamp($actualEndDateTimestamp)
    {
        $this->container['actualEndDateTimestamp'] = $actualEndDateTimestamp;
        return $this;
    }

    /**
    * Gets isExpired
    *  是否超期
    *
    * @return string|null
    */
    public function getIsExpired()
    {
        return $this->container['isExpired'];
    }

    /**
    * Sets isExpired
    *
    * @param string|null $isExpired 是否超期
    *
    * @return $this
    */
    public function setIsExpired($isExpired)
    {
        $this->container['isExpired'] = $isExpired;
        return $this;
    }

    /**
    * Gets expiredInfo
    *  计划过期信息,空代表不超期，否则给出具体超期信息
    *
    * @return string|null
    */
    public function getExpiredInfo()
    {
        return $this->container['expiredInfo'];
    }

    /**
    * Sets expiredInfo
    *
    * @param string|null $expiredInfo 计划过期信息,空代表不超期，否则给出具体超期信息
    *
    * @return $this
    */
    public function setExpiredInfo($expiredInfo)
    {
        $this->container['expiredInfo'] = $expiredInfo;
        return $this;
    }

    /**
    * Gets stages
    *  迭代计划，默认包含design,execute,report
    *
    * @return string[]|null
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param string[]|null $stages 迭代计划，默认包含design,execute,report
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
        return $this;
    }

    /**
    * Gets design
    *  design
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\DesignSummaryVo|null
    */
    public function getDesign()
    {
        return $this->container['design'];
    }

    /**
    * Sets design
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\DesignSummaryVo|null $design design
    *
    * @return $this
    */
    public function setDesign($design)
    {
        $this->container['design'] = $design;
        return $this;
    }

    /**
    * Gets execute
    *  execute
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteSummaryVo|null
    */
    public function getExecute()
    {
        return $this->container['execute'];
    }

    /**
    * Sets execute
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteSummaryVo|null $execute execute
    *
    * @return $this
    */
    public function setExecute($execute)
    {
        $this->container['execute'] = $execute;
        return $this;
    }

    /**
    * Gets report
    *  report
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportSummaryVo|null
    */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
    * Sets report
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportSummaryVo|null $report report
    *
    * @return $this
    */
    public function setReport($report)
    {
        $this->container['report'] = $report;
        return $this;
    }

    /**
    * Gets branchUri
    *  所属分支URI
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
    * @param string|null $branchUri 所属分支URI
    *
    * @return $this
    */
    public function setBranchUri($branchUri)
    {
        $this->container['branchUri'] = $branchUri;
        return $this;
    }

    /**
    * Gets branchName
    *  所属分支名称
    *
    * @return string|null
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string|null $branchName 所属分支名称
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
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

