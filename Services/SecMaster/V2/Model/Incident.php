<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Incident implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Incident';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
    * id  事件唯一标识，UUID格式，最大36个字符
    * domainId  数据投递后，被委托用户的domain_id
    * regionId  数据投递后，被委托用户的region_id
    * workspaceId  当前的工作空间id
    * labels  标签，仅展示
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * lastObservedTime  最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * arriveTime  接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * title  事件标题
    * description  事件描述信息
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面
    * count  事件发生次数
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    * severity  严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    * incidentType  incidentType
    * networkList  网络信息
    * resourceList  受影响资源
    * remediation  remediation
    * verificationState  验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    * handleStatus  事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    * sla  约束闭环时间：设置风险接受持续时间。单位：小时
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * closeTime  关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * ipdrrPhase  周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    * simulation  调试字段
    * actor  事件调查员
    * owner  责任人、服务责任人
    * creator  创建人
    * closeReason  关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    * closeComment  关闭评论
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  事件管理列表的布局字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'id' => 'string',
            'domainId' => 'string',
            'regionId' => 'string',
            'workspaceId' => 'string',
            'labels' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IncidentEnvironment',
            'dataSource' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertDataSource',
            'firstObservedTime' => 'string',
            'lastObservedTime' => 'string',
            'createTime' => 'string',
            'arriveTime' => 'string',
            'title' => 'string',
            'description' => 'string',
            'sourceUrl' => 'string',
            'count' => 'int',
            'confidence' => 'int',
            'severity' => 'string',
            'criticality' => 'int',
            'incidentType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IncidentIncidentType',
            'networkList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertNetworkList[]',
            'resourceList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertResourceList[]',
            'remediation' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRemediation',
            'verificationState' => 'string',
            'handleStatus' => 'string',
            'sla' => 'int',
            'updateTime' => 'string',
            'closeTime' => 'string',
            'ipdrrPhase' => 'string',
            'simulation' => 'string',
            'actor' => 'string',
            'owner' => 'string',
            'creator' => 'string',
            'closeReason' => 'string',
            'closeComment' => 'string',
            'malware' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspMalware',
            'systemInfo' => 'object',
            'process' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertProcess[]',
            'userInfo' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertUserInfo[]',
            'fileInfo' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertFileInfo[]',
            'systemAlertTable' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
    * id  事件唯一标识，UUID格式，最大36个字符
    * domainId  数据投递后，被委托用户的domain_id
    * regionId  数据投递后，被委托用户的region_id
    * workspaceId  当前的工作空间id
    * labels  标签，仅展示
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * lastObservedTime  最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * arriveTime  接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * title  事件标题
    * description  事件描述信息
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面
    * count  事件发生次数
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    * severity  严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    * incidentType  incidentType
    * networkList  网络信息
    * resourceList  受影响资源
    * remediation  remediation
    * verificationState  验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    * handleStatus  事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    * sla  约束闭环时间：设置风险接受持续时间。单位：小时
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * closeTime  关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * ipdrrPhase  周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    * simulation  调试字段
    * actor  事件调查员
    * owner  责任人、服务责任人
    * creator  创建人
    * closeReason  关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    * closeComment  关闭评论
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  事件管理列表的布局字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'id' => null,
        'domainId' => null,
        'regionId' => null,
        'workspaceId' => null,
        'labels' => null,
        'environment' => null,
        'dataSource' => null,
        'firstObservedTime' => null,
        'lastObservedTime' => null,
        'createTime' => null,
        'arriveTime' => null,
        'title' => null,
        'description' => null,
        'sourceUrl' => null,
        'count' => null,
        'confidence' => null,
        'severity' => null,
        'criticality' => null,
        'incidentType' => null,
        'networkList' => null,
        'resourceList' => null,
        'remediation' => null,
        'verificationState' => null,
        'handleStatus' => null,
        'sla' => null,
        'updateTime' => null,
        'closeTime' => null,
        'ipdrrPhase' => null,
        'simulation' => null,
        'actor' => null,
        'owner' => null,
        'creator' => null,
        'closeReason' => null,
        'closeComment' => null,
        'malware' => null,
        'systemInfo' => null,
        'process' => null,
        'userInfo' => null,
        'fileInfo' => null,
        'systemAlertTable' => null
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
    * version  事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
    * id  事件唯一标识，UUID格式，最大36个字符
    * domainId  数据投递后，被委托用户的domain_id
    * regionId  数据投递后，被委托用户的region_id
    * workspaceId  当前的工作空间id
    * labels  标签，仅展示
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * lastObservedTime  最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * arriveTime  接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * title  事件标题
    * description  事件描述信息
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面
    * count  事件发生次数
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    * severity  严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    * incidentType  incidentType
    * networkList  网络信息
    * resourceList  受影响资源
    * remediation  remediation
    * verificationState  验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    * handleStatus  事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    * sla  约束闭环时间：设置风险接受持续时间。单位：小时
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * closeTime  关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * ipdrrPhase  周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    * simulation  调试字段
    * actor  事件调查员
    * owner  责任人、服务责任人
    * creator  创建人
    * closeReason  关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    * closeComment  关闭评论
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  事件管理列表的布局字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'id' => 'id',
            'domainId' => 'domain_id',
            'regionId' => 'region_id',
            'workspaceId' => 'workspace_id',
            'labels' => 'labels',
            'environment' => 'environment',
            'dataSource' => 'data_source',
            'firstObservedTime' => 'first_observed_time',
            'lastObservedTime' => 'last_observed_time',
            'createTime' => 'create_time',
            'arriveTime' => 'arrive_time',
            'title' => 'title',
            'description' => 'description',
            'sourceUrl' => 'source_url',
            'count' => 'count',
            'confidence' => 'confidence',
            'severity' => 'severity',
            'criticality' => 'criticality',
            'incidentType' => 'incident_type',
            'networkList' => 'network_list',
            'resourceList' => 'resource_list',
            'remediation' => 'remediation',
            'verificationState' => 'verification_state',
            'handleStatus' => 'handle_status',
            'sla' => 'sla',
            'updateTime' => 'update_time',
            'closeTime' => 'close_time',
            'ipdrrPhase' => 'ipdrr_phase',
            'simulation' => 'simulation',
            'actor' => 'actor',
            'owner' => 'owner',
            'creator' => 'creator',
            'closeReason' => 'close_reason',
            'closeComment' => 'close_comment',
            'malware' => 'malware',
            'systemInfo' => 'system_info',
            'process' => 'process',
            'userInfo' => 'user_info',
            'fileInfo' => 'file_info',
            'systemAlertTable' => 'system_alert_table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
    * id  事件唯一标识，UUID格式，最大36个字符
    * domainId  数据投递后，被委托用户的domain_id
    * regionId  数据投递后，被委托用户的region_id
    * workspaceId  当前的工作空间id
    * labels  标签，仅展示
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * lastObservedTime  最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * arriveTime  接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * title  事件标题
    * description  事件描述信息
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面
    * count  事件发生次数
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    * severity  严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    * incidentType  incidentType
    * networkList  网络信息
    * resourceList  受影响资源
    * remediation  remediation
    * verificationState  验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    * handleStatus  事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    * sla  约束闭环时间：设置风险接受持续时间。单位：小时
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * closeTime  关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * ipdrrPhase  周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    * simulation  调试字段
    * actor  事件调查员
    * owner  责任人、服务责任人
    * creator  创建人
    * closeReason  关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    * closeComment  关闭评论
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  事件管理列表的布局字段
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'regionId' => 'setRegionId',
            'workspaceId' => 'setWorkspaceId',
            'labels' => 'setLabels',
            'environment' => 'setEnvironment',
            'dataSource' => 'setDataSource',
            'firstObservedTime' => 'setFirstObservedTime',
            'lastObservedTime' => 'setLastObservedTime',
            'createTime' => 'setCreateTime',
            'arriveTime' => 'setArriveTime',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'sourceUrl' => 'setSourceUrl',
            'count' => 'setCount',
            'confidence' => 'setConfidence',
            'severity' => 'setSeverity',
            'criticality' => 'setCriticality',
            'incidentType' => 'setIncidentType',
            'networkList' => 'setNetworkList',
            'resourceList' => 'setResourceList',
            'remediation' => 'setRemediation',
            'verificationState' => 'setVerificationState',
            'handleStatus' => 'setHandleStatus',
            'sla' => 'setSla',
            'updateTime' => 'setUpdateTime',
            'closeTime' => 'setCloseTime',
            'ipdrrPhase' => 'setIpdrrPhase',
            'simulation' => 'setSimulation',
            'actor' => 'setActor',
            'owner' => 'setOwner',
            'creator' => 'setCreator',
            'closeReason' => 'setCloseReason',
            'closeComment' => 'setCloseComment',
            'malware' => 'setMalware',
            'systemInfo' => 'setSystemInfo',
            'process' => 'setProcess',
            'userInfo' => 'setUserInfo',
            'fileInfo' => 'setFileInfo',
            'systemAlertTable' => 'setSystemAlertTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
    * id  事件唯一标识，UUID格式，最大36个字符
    * domainId  数据投递后，被委托用户的domain_id
    * regionId  数据投递后，被委托用户的region_id
    * workspaceId  当前的工作空间id
    * labels  标签，仅展示
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * lastObservedTime  最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * arriveTime  接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * title  事件标题
    * description  事件描述信息
    * sourceUrl  事件URL链接，指向数据源产品中有关当前事件说明的页面
    * count  事件发生次数
    * confidence  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    * severity  严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    * criticality  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    * incidentType  incidentType
    * networkList  网络信息
    * resourceList  受影响资源
    * remediation  remediation
    * verificationState  验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    * handleStatus  事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    * sla  约束闭环时间：设置风险接受持续时间。单位：小时
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * closeTime  关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * ipdrrPhase  周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    * simulation  调试字段
    * actor  事件调查员
    * owner  责任人、服务责任人
    * creator  创建人
    * closeReason  关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    * closeComment  关闭评论
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  事件管理列表的布局字段
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'regionId' => 'getRegionId',
            'workspaceId' => 'getWorkspaceId',
            'labels' => 'getLabels',
            'environment' => 'getEnvironment',
            'dataSource' => 'getDataSource',
            'firstObservedTime' => 'getFirstObservedTime',
            'lastObservedTime' => 'getLastObservedTime',
            'createTime' => 'getCreateTime',
            'arriveTime' => 'getArriveTime',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'sourceUrl' => 'getSourceUrl',
            'count' => 'getCount',
            'confidence' => 'getConfidence',
            'severity' => 'getSeverity',
            'criticality' => 'getCriticality',
            'incidentType' => 'getIncidentType',
            'networkList' => 'getNetworkList',
            'resourceList' => 'getResourceList',
            'remediation' => 'getRemediation',
            'verificationState' => 'getVerificationState',
            'handleStatus' => 'getHandleStatus',
            'sla' => 'getSla',
            'updateTime' => 'getUpdateTime',
            'closeTime' => 'getCloseTime',
            'ipdrrPhase' => 'getIpdrrPhase',
            'simulation' => 'getSimulation',
            'actor' => 'getActor',
            'owner' => 'getOwner',
            'creator' => 'getCreator',
            'closeReason' => 'getCloseReason',
            'closeComment' => 'getCloseComment',
            'malware' => 'getMalware',
            'systemInfo' => 'getSystemInfo',
            'process' => 'getProcess',
            'userInfo' => 'getUserInfo',
            'fileInfo' => 'getFileInfo',
            'systemAlertTable' => 'getSystemAlertTable'
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
    const SEVERITY_TIPS = 'Tips';
    const SEVERITY_LOW = 'Low';
    const SEVERITY_MEDIUM = 'Medium';
    const SEVERITY_HIGH = 'High';
    const SEVERITY_FATAL = 'Fatal';
    const VERIFICATION_STATE_UNKNOWN = 'Unknown';
    const VERIFICATION_STATE_TRUE_POSITIVE = 'True_Positive';
    const VERIFICATION_STATE_FALSE_POSITIVE = 'False_Positive';
    const HANDLE_STATUS_OPEN = 'Open';
    const HANDLE_STATUS_BLOCK = 'Block';
    const HANDLE_STATUS_CLOSED = 'Closed';
    const IPDRR_PHASE_PREPARTION = 'Prepartion';
    const IPDRR_PHASE_DETECTION_AND_ANALYSIS = 'Detection and Analysis';
    const IPDRR_PHASE_CONTAINMERADICATION_RECOVERY = 'Containm，Eradication& Recovery';
    const IPDRR_PHASE_POST_INCIDENT_ACTIVITY = 'Post-Incident-Activity';
    const CLOSE_REASON_FALSE_DETECTION = 'False detection';
    const CLOSE_REASON_RESOLVED = 'Resolved';
    const CLOSE_REASON_REPEATED = 'Repeated';
    const CLOSE_REASON_OTHER = 'Other';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_TIPS,
            self::SEVERITY_LOW,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_HIGH,
            self::SEVERITY_FATAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVerificationStateAllowableValues()
    {
        return [
            self::VERIFICATION_STATE_UNKNOWN,
            self::VERIFICATION_STATE_TRUE_POSITIVE,
            self::VERIFICATION_STATE_FALSE_POSITIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHandleStatusAllowableValues()
    {
        return [
            self::HANDLE_STATUS_OPEN,
            self::HANDLE_STATUS_BLOCK,
            self::HANDLE_STATUS_CLOSED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpdrrPhaseAllowableValues()
    {
        return [
            self::IPDRR_PHASE_PREPARTION,
            self::IPDRR_PHASE_DETECTION_AND_ANALYSIS,
            self::IPDRR_PHASE_CONTAINMERADICATION_RECOVERY,
            self::IPDRR_PHASE_POST_INCIDENT_ACTIVITY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCloseReasonAllowableValues()
    {
        return [
            self::CLOSE_REASON_FALSE_DETECTION,
            self::CLOSE_REASON_RESOLVED,
            self::CLOSE_REASON_REPEATED,
            self::CLOSE_REASON_OTHER,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['firstObservedTime'] = isset($data['firstObservedTime']) ? $data['firstObservedTime'] : null;
        $this->container['lastObservedTime'] = isset($data['lastObservedTime']) ? $data['lastObservedTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['arriveTime'] = isset($data['arriveTime']) ? $data['arriveTime'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['criticality'] = isset($data['criticality']) ? $data['criticality'] : null;
        $this->container['incidentType'] = isset($data['incidentType']) ? $data['incidentType'] : null;
        $this->container['networkList'] = isset($data['networkList']) ? $data['networkList'] : null;
        $this->container['resourceList'] = isset($data['resourceList']) ? $data['resourceList'] : null;
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['verificationState'] = isset($data['verificationState']) ? $data['verificationState'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['sla'] = isset($data['sla']) ? $data['sla'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['closeTime'] = isset($data['closeTime']) ? $data['closeTime'] : null;
        $this->container['ipdrrPhase'] = isset($data['ipdrrPhase']) ? $data['ipdrrPhase'] : null;
        $this->container['simulation'] = isset($data['simulation']) ? $data['simulation'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['closeReason'] = isset($data['closeReason']) ? $data['closeReason'] : null;
        $this->container['closeComment'] = isset($data['closeComment']) ? $data['closeComment'] : null;
        $this->container['malware'] = isset($data['malware']) ? $data['malware'] : null;
        $this->container['systemInfo'] = isset($data['systemInfo']) ? $data['systemInfo'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['userInfo'] = isset($data['userInfo']) ? $data['userInfo'] : null;
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['systemAlertTable'] = isset($data['systemAlertTable']) ? $data['systemAlertTable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 1024)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 0)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstObservedTime']) && (mb_strlen($this->container['firstObservedTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'firstObservedTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['firstObservedTime']) && (mb_strlen($this->container['firstObservedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'firstObservedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastObservedTime']) && (mb_strlen($this->container['lastObservedTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'lastObservedTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['lastObservedTime']) && (mb_strlen($this->container['lastObservedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastObservedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['arriveTime']) && (mb_strlen($this->container['arriveTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'arriveTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['arriveTime']) && (mb_strlen($this->container['arriveTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'arriveTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 999)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 100)) {
                $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0)) {
                $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 6)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 3)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['criticality']) && ($this->container['criticality'] > 100)) {
                $invalidProperties[] = "invalid value for 'criticality', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['criticality']) && ($this->container['criticality'] < 0)) {
                $invalidProperties[] = "invalid value for 'criticality', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVerificationStateAllowableValues();
                if (!is_null($this->container['verificationState']) && !in_array($this->container['verificationState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'verificationState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['verificationState']) && (mb_strlen($this->container['verificationState']) > 64)) {
                $invalidProperties[] = "invalid value for 'verificationState', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['verificationState']) && (mb_strlen($this->container['verificationState']) < 32)) {
                $invalidProperties[] = "invalid value for 'verificationState', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getHandleStatusAllowableValues();
                if (!is_null($this->container['handleStatus']) && !in_array($this->container['handleStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'handleStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 5)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 4)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['sla']) && ($this->container['sla'] > 999)) {
                $invalidProperties[] = "invalid value for 'sla', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['sla']) && ($this->container['sla'] < 0)) {
                $invalidProperties[] = "invalid value for 'sla', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIpdrrPhaseAllowableValues();
                if (!is_null($this->container['ipdrrPhase']) && !in_array($this->container['ipdrrPhase'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipdrrPhase', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ipdrrPhase']) && (mb_strlen($this->container['ipdrrPhase']) > 64)) {
                $invalidProperties[] = "invalid value for 'ipdrrPhase', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ipdrrPhase']) && (mb_strlen($this->container['ipdrrPhase']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipdrrPhase', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['simulation']) && (mb_strlen($this->container['simulation']) > 64)) {
                $invalidProperties[] = "invalid value for 'simulation', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['simulation']) && (mb_strlen($this->container['simulation']) < 0)) {
                $invalidProperties[] = "invalid value for 'simulation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actor']) && (mb_strlen($this->container['actor']) > 64)) {
                $invalidProperties[] = "invalid value for 'actor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actor']) && (mb_strlen($this->container['actor']) < 0)) {
                $invalidProperties[] = "invalid value for 'actor', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 64)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 0)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 64)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCloseReasonAllowableValues();
                if (!is_null($this->container['closeReason']) && !in_array($this->container['closeReason'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'closeReason', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['closeReason']) && (mb_strlen($this->container['closeReason']) > 64)) {
                $invalidProperties[] = "invalid value for 'closeReason', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['closeReason']) && (mb_strlen($this->container['closeReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeComment']) && (mb_strlen($this->container['closeComment']) > 1024)) {
                $invalidProperties[] = "invalid value for 'closeComment', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['closeComment']) && (mb_strlen($this->container['closeComment']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeComment', the character length must be bigger than or equal to 0.";
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
    * Gets version
    *  事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
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
    * @param string|null $version 事件对象的版本，该字段的值必须为华为云SSA服务确定的官方发布版本之一
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets id
    *  事件唯一标识，UUID格式，最大36个字符
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
    * @param string|null $id 事件唯一标识，UUID格式，最大36个字符
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  数据投递后，被委托用户的domain_id
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
    * @param string|null $domainId 数据投递后，被委托用户的domain_id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets regionId
    *  数据投递后，被委托用户的region_id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 数据投递后，被委托用户的region_id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  当前的工作空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 当前的工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets labels
    *  标签，仅展示
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 标签，仅展示
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IncidentEnvironment|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IncidentEnvironment|null $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets dataSource
    *  dataSource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertDataSource|null
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertDataSource|null $dataSource dataSource
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets firstObservedTime
    *  首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return string|null
    */
    public function getFirstObservedTime()
    {
        return $this->container['firstObservedTime'];
    }

    /**
    * Sets firstObservedTime
    *
    * @param string|null $firstObservedTime 首次发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setFirstObservedTime($firstObservedTime)
    {
        $this->container['firstObservedTime'] = $firstObservedTime;
        return $this;
    }

    /**
    * Gets lastObservedTime
    *  最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return string|null
    */
    public function getLastObservedTime()
    {
        return $this->container['lastObservedTime'];
    }

    /**
    * Sets lastObservedTime
    *
    * @param string|null $lastObservedTime 最近发现时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setLastObservedTime($lastObservedTime)
    {
        $this->container['lastObservedTime'] = $lastObservedTime;
        return $this;
    }

    /**
    * Gets createTime
    *  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
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
    * @param string|null $createTime 记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets arriveTime
    *  接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return string|null
    */
    public function getArriveTime()
    {
        return $this->container['arriveTime'];
    }

    /**
    * Sets arriveTime
    *
    * @param string|null $arriveTime 接收时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setArriveTime($arriveTime)
    {
        $this->container['arriveTime'] = $arriveTime;
        return $this;
    }

    /**
    * Gets title
    *  事件标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 事件标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  事件描述信息
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
    * @param string|null $description 事件描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  事件URL链接，指向数据源产品中有关当前事件说明的页面
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl 事件URL链接，指向数据源产品中有关当前事件说明的页面
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets count
    *  事件发生次数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 事件发生次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets confidence
    *  事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    *
    * @return int|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param int|null $confidence 事件的置信度。置信度的定义旨在说明识别的行为或问题的可能性。 取值范围：0-100，0表示置信度为0%，100表示置信度为100%
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets severity
    *  严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 严重性等级，取值范围：Tips | Low | Medium | High | Fatal 说明： 0: Tips – 未发现任何问题。 1: Low – 无需针对问题执行任何操作。 2: Medium – 问题需要处理，但不紧急。 3: High – 问题必须优先处理。 4: Fatal – 问题必须立即处理，以防止产生进一步的损害
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets criticality
    *  关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    *
    * @return int|null
    */
    public function getCriticality()
    {
        return $this->container['criticality'];
    }

    /**
    * Sets criticality
    *
    * @param int|null $criticality 关键性，是指事件涉及的资源的重要性级别。 取值范围：0-100，0表示资源不关键，100表示最关键资源
    *
    * @return $this
    */
    public function setCriticality($criticality)
    {
        $this->container['criticality'] = $criticality;
        return $this;
    }

    /**
    * Gets incidentType
    *  incidentType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IncidentIncidentType|null
    */
    public function getIncidentType()
    {
        return $this->container['incidentType'];
    }

    /**
    * Sets incidentType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IncidentIncidentType|null $incidentType incidentType
    *
    * @return $this
    */
    public function setIncidentType($incidentType)
    {
        $this->container['incidentType'] = $incidentType;
        return $this;
    }

    /**
    * Gets networkList
    *  网络信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertNetworkList[]|null
    */
    public function getNetworkList()
    {
        return $this->container['networkList'];
    }

    /**
    * Sets networkList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertNetworkList[]|null $networkList 网络信息
    *
    * @return $this
    */
    public function setNetworkList($networkList)
    {
        $this->container['networkList'] = $networkList;
        return $this;
    }

    /**
    * Gets resourceList
    *  受影响资源
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertResourceList[]|null
    */
    public function getResourceList()
    {
        return $this->container['resourceList'];
    }

    /**
    * Sets resourceList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertResourceList[]|null $resourceList 受影响资源
    *
    * @return $this
    */
    public function setResourceList($resourceList)
    {
        $this->container['resourceList'] = $resourceList;
        return $this;
    }

    /**
    * Gets remediation
    *  remediation
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRemediation|null
    */
    public function getRemediation()
    {
        return $this->container['remediation'];
    }

    /**
    * Sets remediation
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRemediation|null $remediation remediation
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets verificationState
    *  验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    *
    * @return string|null
    */
    public function getVerificationState()
    {
        return $this->container['verificationState'];
    }

    /**
    * Sets verificationState
    *
    * @param string|null $verificationState 验证状态，标识事件的准确性。可选类型如下： Unknown – 未知 True_Positive – 确认 False_Positive – 误报 默认填写Unknown
    *
    * @return $this
    */
    public function setVerificationState($verificationState)
    {
        $this->container['verificationState'] = $verificationState;
        return $this;
    }

    /**
    * Gets handleStatus
    *  事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus 事件处理状态，可选类型如下： Open – 打开，默认 Block – 阻塞 Closed – 关闭 默认填写Open
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets sla
    *  约束闭环时间：设置风险接受持续时间。单位：小时
    *
    * @return int|null
    */
    public function getSla()
    {
        return $this->container['sla'];
    }

    /**
    * Sets sla
    *
    * @param int|null $sla 约束闭环时间：设置风险接受持续时间。单位：小时
    *
    * @return $this
    */
    public function setSla($sla)
    {
        $this->container['sla'] = $sla;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
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
    * @param string|null $updateTime 更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets closeTime
    *  关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return string|null
    */
    public function getCloseTime()
    {
        return $this->container['closeTime'];
    }

    /**
    * Sets closeTime
    *
    * @param string|null $closeTime 关闭时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setCloseTime($closeTime)
    {
        $this->container['closeTime'] = $closeTime;
        return $this;
    }

    /**
    * Gets ipdrrPhase
    *  周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    *
    * @return string|null
    */
    public function getIpdrrPhase()
    {
        return $this->container['ipdrrPhase'];
    }

    /**
    * Sets ipdrrPhase
    *
    * @param string|null $ipdrrPhase 周期/处置阶段编号 Prepartion|Detection and Analysis|Containm，Eradication& Recovery|Post-Incident-Activity
    *
    * @return $this
    */
    public function setIpdrrPhase($ipdrrPhase)
    {
        $this->container['ipdrrPhase'] = $ipdrrPhase;
        return $this;
    }

    /**
    * Gets simulation
    *  调试字段
    *
    * @return string|null
    */
    public function getSimulation()
    {
        return $this->container['simulation'];
    }

    /**
    * Sets simulation
    *
    * @param string|null $simulation 调试字段
    *
    * @return $this
    */
    public function setSimulation($simulation)
    {
        $this->container['simulation'] = $simulation;
        return $this;
    }

    /**
    * Gets actor
    *  事件调查员
    *
    * @return string|null
    */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
    * Sets actor
    *
    * @param string|null $actor 事件调查员
    *
    * @return $this
    */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;
        return $this;
    }

    /**
    * Gets owner
    *  责任人、服务责任人
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
    * @param string|null $owner 责任人、服务责任人
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
    *  创建人
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
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets closeReason
    *  关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    *
    * @return string|null
    */
    public function getCloseReason()
    {
        return $this->container['closeReason'];
    }

    /**
    * Sets closeReason
    *
    * @param string|null $closeReason 关闭原因: 误检 - False detection 已解决 - Resolved 重复 - Repeated 其他 - Other
    *
    * @return $this
    */
    public function setCloseReason($closeReason)
    {
        $this->container['closeReason'] = $closeReason;
        return $this;
    }

    /**
    * Gets closeComment
    *  关闭评论
    *
    * @return string|null
    */
    public function getCloseComment()
    {
        return $this->container['closeComment'];
    }

    /**
    * Sets closeComment
    *
    * @param string|null $closeComment 关闭评论
    *
    * @return $this
    */
    public function setCloseComment($closeComment)
    {
        $this->container['closeComment'] = $closeComment;
        return $this;
    }

    /**
    * Gets malware
    *  malware
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspMalware|null
    */
    public function getMalware()
    {
        return $this->container['malware'];
    }

    /**
    * Sets malware
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspMalware|null $malware malware
    *
    * @return $this
    */
    public function setMalware($malware)
    {
        $this->container['malware'] = $malware;
        return $this;
    }

    /**
    * Gets systemInfo
    *  系统信息
    *
    * @return object|null
    */
    public function getSystemInfo()
    {
        return $this->container['systemInfo'];
    }

    /**
    * Sets systemInfo
    *
    * @param object|null $systemInfo 系统信息
    *
    * @return $this
    */
    public function setSystemInfo($systemInfo)
    {
        $this->container['systemInfo'] = $systemInfo;
        return $this;
    }

    /**
    * Gets process
    *  进程信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertProcess[]|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertProcess[]|null $process 进程信息
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets userInfo
    *  用户信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertUserInfo[]|null
    */
    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    /**
    * Sets userInfo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertUserInfo[]|null $userInfo 用户信息
    *
    * @return $this
    */
    public function setUserInfo($userInfo)
    {
        $this->container['userInfo'] = $userInfo;
        return $this;
    }

    /**
    * Gets fileInfo
    *  文件信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertFileInfo[]|null
    */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /**
    * Sets fileInfo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertFileInfo[]|null $fileInfo 文件信息
    *
    * @return $this
    */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;
        return $this;
    }

    /**
    * Gets systemAlertTable
    *  事件管理列表的布局字段
    *
    * @return object|null
    */
    public function getSystemAlertTable()
    {
        return $this->container['systemAlertTable'];
    }

    /**
    * Sets systemAlertTable
    *
    * @param object|null $systemAlertTable 事件管理列表的布局字段
    *
    * @return $this
    */
    public function setSystemAlertTable($systemAlertTable)
    {
        $this->container['systemAlertTable'] = $systemAlertTable;
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

