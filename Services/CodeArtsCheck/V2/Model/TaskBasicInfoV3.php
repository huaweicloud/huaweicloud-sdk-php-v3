<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskBasicInfoV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskBasicInfoV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * avastarType  **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    * branchName  **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
    * canChangeIgnoreMode  **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canEditTemplateSwitch  **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * checkParamList  **参数解释：** 自定义参数列表。
    * checkParamMap  checkParamMap
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * criterionSets  **参数解释：** 规则集列表，该字段一般返回空数组[]。
    * customParams  **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    * defaultBranchName  **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    * fileEncoding  **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    * hwCloudRegion  **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * includePaths  **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    * isSetMrWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetPushWebhook  **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isTemplateTask  **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * jobTimeout  **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    * lastFinishedFullJobId  **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * lastJob  lastJob
    * lastReviser  **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * modelSets  **参数解释：** 模型集列表，该字段一般返回空数组[]。
    * mrCheckBranchStrategy  **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
    * notificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
    * ownerId  **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    * region  **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
    * repoId  **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * reviewData  **参数解释：** 门禁配置，该字段一般返回空数组[]。
    * ruleSets  **参数解释：** 规则集配置，该字段一般返回空数组[]。
    * source  **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    * taskIds  **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    * tenantId  **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    * useCache  **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    * useWorkspaceNotificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    * versionUpdateDelayDays  **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    * webhookCheckMode  **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    * zone  **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'avastarType' => 'string',
            'branchName' => 'string',
            'canChangeIgnoreMode' => 'bool',
            'canDelete' => 'bool',
            'canEdit' => 'bool',
            'canEditTemplateSwitch' => 'bool',
            'canExecute' => 'bool',
            'canRead' => 'bool',
            'checkParamList' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomParameter[]',
            'checkParamMap' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\TaskBasicInfoV3CheckParamMap',
            'configTemplateId' => 'string',
            'createTime' => 'string',
            'criterionSets' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]',
            'customParams' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomParameter[]',
            'defaultBranchName' => 'string',
            'fileEncoding' => 'string',
            'hwCloudRegion' => 'string',
            'id' => 'string',
            'includePaths' => 'string',
            'isSetMrWebhook' => 'bool',
            'isSetPushWebhook' => 'bool',
            'isSetWebhook' => 'bool',
            'isTemplateTask' => 'bool',
            'jobId' => 'string',
            'jobTimeout' => 'string',
            'lastFinishedFullJobId' => 'string',
            'lastJob' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobBasicInfoV3',
            'lastReviser' => 'string',
            'lastUpdateTime' => 'string',
            'modelSets' => 'string[]',
            'mrCheckBranchStrategy' => 'int',
            'name' => 'string',
            'notificationConfig' => 'string',
            'owner' => 'string',
            'ownerId' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'region' => 'string',
            'repoId' => 'string',
            'repoUrl' => 'string',
            'reviewData' => 'string[]',
            'ruleSets' => 'string[]',
            'source' => 'string',
            'taskGroupId' => 'string',
            'taskIds' => 'string[]',
            'tenantId' => 'string',
            'useCache' => 'bool',
            'useWorkspaceNotificationConfig' => 'int',
            'versionUpdateDelayDays' => 'string[]',
            'webhookCheckMode' => 'int',
            'zone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * avastarType  **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    * branchName  **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
    * canChangeIgnoreMode  **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canEditTemplateSwitch  **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * checkParamList  **参数解释：** 自定义参数列表。
    * checkParamMap  checkParamMap
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * criterionSets  **参数解释：** 规则集列表，该字段一般返回空数组[]。
    * customParams  **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    * defaultBranchName  **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    * fileEncoding  **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    * hwCloudRegion  **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * includePaths  **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    * isSetMrWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetPushWebhook  **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isTemplateTask  **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * jobTimeout  **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    * lastFinishedFullJobId  **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * lastJob  lastJob
    * lastReviser  **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * modelSets  **参数解释：** 模型集列表，该字段一般返回空数组[]。
    * mrCheckBranchStrategy  **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
    * notificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
    * ownerId  **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    * region  **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
    * repoId  **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * reviewData  **参数解释：** 门禁配置，该字段一般返回空数组[]。
    * ruleSets  **参数解释：** 规则集配置，该字段一般返回空数组[]。
    * source  **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    * taskIds  **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    * tenantId  **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    * useCache  **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    * useWorkspaceNotificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    * versionUpdateDelayDays  **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    * webhookCheckMode  **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    * zone  **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'avastarType' => null,
        'branchName' => null,
        'canChangeIgnoreMode' => null,
        'canDelete' => null,
        'canEdit' => null,
        'canEditTemplateSwitch' => null,
        'canExecute' => null,
        'canRead' => null,
        'checkParamList' => null,
        'checkParamMap' => null,
        'configTemplateId' => null,
        'createTime' => null,
        'criterionSets' => null,
        'customParams' => null,
        'defaultBranchName' => null,
        'fileEncoding' => null,
        'hwCloudRegion' => null,
        'id' => null,
        'includePaths' => null,
        'isSetMrWebhook' => null,
        'isSetPushWebhook' => null,
        'isSetWebhook' => null,
        'isTemplateTask' => null,
        'jobId' => null,
        'jobTimeout' => null,
        'lastFinishedFullJobId' => null,
        'lastJob' => null,
        'lastReviser' => null,
        'lastUpdateTime' => null,
        'modelSets' => null,
        'mrCheckBranchStrategy' => null,
        'name' => null,
        'notificationConfig' => null,
        'owner' => null,
        'ownerId' => null,
        'projectId' => null,
        'projectName' => null,
        'region' => null,
        'repoId' => null,
        'repoUrl' => null,
        'reviewData' => null,
        'ruleSets' => null,
        'source' => null,
        'taskGroupId' => null,
        'taskIds' => null,
        'tenantId' => null,
        'useCache' => null,
        'useWorkspaceNotificationConfig' => null,
        'versionUpdateDelayDays' => null,
        'webhookCheckMode' => null,
        'zone' => null
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
    * avastarType  **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    * branchName  **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
    * canChangeIgnoreMode  **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canEditTemplateSwitch  **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * checkParamList  **参数解释：** 自定义参数列表。
    * checkParamMap  checkParamMap
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * criterionSets  **参数解释：** 规则集列表，该字段一般返回空数组[]。
    * customParams  **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    * defaultBranchName  **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    * fileEncoding  **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    * hwCloudRegion  **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * includePaths  **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    * isSetMrWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetPushWebhook  **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isTemplateTask  **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * jobTimeout  **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    * lastFinishedFullJobId  **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * lastJob  lastJob
    * lastReviser  **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * modelSets  **参数解释：** 模型集列表，该字段一般返回空数组[]。
    * mrCheckBranchStrategy  **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
    * notificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
    * ownerId  **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    * region  **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
    * repoId  **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * reviewData  **参数解释：** 门禁配置，该字段一般返回空数组[]。
    * ruleSets  **参数解释：** 规则集配置，该字段一般返回空数组[]。
    * source  **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    * taskIds  **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    * tenantId  **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    * useCache  **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    * useWorkspaceNotificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    * versionUpdateDelayDays  **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    * webhookCheckMode  **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    * zone  **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'avastarType' => 'avastarType',
            'branchName' => 'branchName',
            'canChangeIgnoreMode' => 'canChangeIgnoreMode',
            'canDelete' => 'canDelete',
            'canEdit' => 'canEdit',
            'canEditTemplateSwitch' => 'canEditTemplateSwitch',
            'canExecute' => 'canExecute',
            'canRead' => 'canRead',
            'checkParamList' => 'checkParamList',
            'checkParamMap' => 'checkParamMap',
            'configTemplateId' => 'configTemplateId',
            'createTime' => 'createTime',
            'criterionSets' => 'criterionSets',
            'customParams' => 'customParams',
            'defaultBranchName' => 'defaultBranchName',
            'fileEncoding' => 'fileEncoding',
            'hwCloudRegion' => 'hwCloudRegion',
            'id' => 'id',
            'includePaths' => 'includePaths',
            'isSetMrWebhook' => 'isSetMrWebhook',
            'isSetPushWebhook' => 'isSetPushWebhook',
            'isSetWebhook' => 'isSetWebhook',
            'isTemplateTask' => 'isTemplateTask',
            'jobId' => 'jobId',
            'jobTimeout' => 'jobTimeout',
            'lastFinishedFullJobId' => 'lastFinishedFullJobId',
            'lastJob' => 'lastJob',
            'lastReviser' => 'lastReviser',
            'lastUpdateTime' => 'lastUpdateTime',
            'modelSets' => 'modelSets',
            'mrCheckBranchStrategy' => 'mrCheckBranchStrategy',
            'name' => 'name',
            'notificationConfig' => 'notificationConfig',
            'owner' => 'owner',
            'ownerId' => 'ownerId',
            'projectId' => 'projectId',
            'projectName' => 'projectName',
            'region' => 'region',
            'repoId' => 'repoId',
            'repoUrl' => 'repoUrl',
            'reviewData' => 'reviewData',
            'ruleSets' => 'ruleSets',
            'source' => 'source',
            'taskGroupId' => 'taskGroupId',
            'taskIds' => 'taskIds',
            'tenantId' => 'tenantId',
            'useCache' => 'useCache',
            'useWorkspaceNotificationConfig' => 'useWorkspaceNotificationConfig',
            'versionUpdateDelayDays' => 'versionUpdateDelayDays',
            'webhookCheckMode' => 'webhookCheckMode',
            'zone' => 'zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * avastarType  **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    * branchName  **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
    * canChangeIgnoreMode  **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canEditTemplateSwitch  **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * checkParamList  **参数解释：** 自定义参数列表。
    * checkParamMap  checkParamMap
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * criterionSets  **参数解释：** 规则集列表，该字段一般返回空数组[]。
    * customParams  **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    * defaultBranchName  **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    * fileEncoding  **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    * hwCloudRegion  **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * includePaths  **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    * isSetMrWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetPushWebhook  **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isTemplateTask  **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * jobTimeout  **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    * lastFinishedFullJobId  **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * lastJob  lastJob
    * lastReviser  **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * modelSets  **参数解释：** 模型集列表，该字段一般返回空数组[]。
    * mrCheckBranchStrategy  **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
    * notificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
    * ownerId  **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    * region  **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
    * repoId  **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * reviewData  **参数解释：** 门禁配置，该字段一般返回空数组[]。
    * ruleSets  **参数解释：** 规则集配置，该字段一般返回空数组[]。
    * source  **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    * taskIds  **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    * tenantId  **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    * useCache  **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    * useWorkspaceNotificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    * versionUpdateDelayDays  **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    * webhookCheckMode  **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    * zone  **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @var string[]
    */
    protected static $setters = [
            'avastarType' => 'setAvastarType',
            'branchName' => 'setBranchName',
            'canChangeIgnoreMode' => 'setCanChangeIgnoreMode',
            'canDelete' => 'setCanDelete',
            'canEdit' => 'setCanEdit',
            'canEditTemplateSwitch' => 'setCanEditTemplateSwitch',
            'canExecute' => 'setCanExecute',
            'canRead' => 'setCanRead',
            'checkParamList' => 'setCheckParamList',
            'checkParamMap' => 'setCheckParamMap',
            'configTemplateId' => 'setConfigTemplateId',
            'createTime' => 'setCreateTime',
            'criterionSets' => 'setCriterionSets',
            'customParams' => 'setCustomParams',
            'defaultBranchName' => 'setDefaultBranchName',
            'fileEncoding' => 'setFileEncoding',
            'hwCloudRegion' => 'setHwCloudRegion',
            'id' => 'setId',
            'includePaths' => 'setIncludePaths',
            'isSetMrWebhook' => 'setIsSetMrWebhook',
            'isSetPushWebhook' => 'setIsSetPushWebhook',
            'isSetWebhook' => 'setIsSetWebhook',
            'isTemplateTask' => 'setIsTemplateTask',
            'jobId' => 'setJobId',
            'jobTimeout' => 'setJobTimeout',
            'lastFinishedFullJobId' => 'setLastFinishedFullJobId',
            'lastJob' => 'setLastJob',
            'lastReviser' => 'setLastReviser',
            'lastUpdateTime' => 'setLastUpdateTime',
            'modelSets' => 'setModelSets',
            'mrCheckBranchStrategy' => 'setMrCheckBranchStrategy',
            'name' => 'setName',
            'notificationConfig' => 'setNotificationConfig',
            'owner' => 'setOwner',
            'ownerId' => 'setOwnerId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'region' => 'setRegion',
            'repoId' => 'setRepoId',
            'repoUrl' => 'setRepoUrl',
            'reviewData' => 'setReviewData',
            'ruleSets' => 'setRuleSets',
            'source' => 'setSource',
            'taskGroupId' => 'setTaskGroupId',
            'taskIds' => 'setTaskIds',
            'tenantId' => 'setTenantId',
            'useCache' => 'setUseCache',
            'useWorkspaceNotificationConfig' => 'setUseWorkspaceNotificationConfig',
            'versionUpdateDelayDays' => 'setVersionUpdateDelayDays',
            'webhookCheckMode' => 'setWebhookCheckMode',
            'zone' => 'setZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * avastarType  **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    * branchName  **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
    * canChangeIgnoreMode  **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canEditTemplateSwitch  **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * checkParamList  **参数解释：** 自定义参数列表。
    * checkParamMap  checkParamMap
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * criterionSets  **参数解释：** 规则集列表，该字段一般返回空数组[]。
    * customParams  **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    * defaultBranchName  **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    * fileEncoding  **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    * hwCloudRegion  **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * includePaths  **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    * isSetMrWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetPushWebhook  **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isSetWebhook  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    * isTemplateTask  **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    * jobId  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * jobTimeout  **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    * lastFinishedFullJobId  **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    * lastJob  lastJob
    * lastReviser  **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * modelSets  **参数解释：** 模型集列表，该字段一般返回空数组[]。
    * mrCheckBranchStrategy  **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
    * notificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
    * ownerId  **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    * region  **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
    * repoId  **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    * reviewData  **参数解释：** 门禁配置，该字段一般返回空数组[]。
    * ruleSets  **参数解释：** 规则集配置，该字段一般返回空数组[]。
    * source  **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    * taskIds  **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    * tenantId  **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    * useCache  **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    * useWorkspaceNotificationConfig  **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    * versionUpdateDelayDays  **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    * webhookCheckMode  **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    * zone  **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @var string[]
    */
    protected static $getters = [
            'avastarType' => 'getAvastarType',
            'branchName' => 'getBranchName',
            'canChangeIgnoreMode' => 'getCanChangeIgnoreMode',
            'canDelete' => 'getCanDelete',
            'canEdit' => 'getCanEdit',
            'canEditTemplateSwitch' => 'getCanEditTemplateSwitch',
            'canExecute' => 'getCanExecute',
            'canRead' => 'getCanRead',
            'checkParamList' => 'getCheckParamList',
            'checkParamMap' => 'getCheckParamMap',
            'configTemplateId' => 'getConfigTemplateId',
            'createTime' => 'getCreateTime',
            'criterionSets' => 'getCriterionSets',
            'customParams' => 'getCustomParams',
            'defaultBranchName' => 'getDefaultBranchName',
            'fileEncoding' => 'getFileEncoding',
            'hwCloudRegion' => 'getHwCloudRegion',
            'id' => 'getId',
            'includePaths' => 'getIncludePaths',
            'isSetMrWebhook' => 'getIsSetMrWebhook',
            'isSetPushWebhook' => 'getIsSetPushWebhook',
            'isSetWebhook' => 'getIsSetWebhook',
            'isTemplateTask' => 'getIsTemplateTask',
            'jobId' => 'getJobId',
            'jobTimeout' => 'getJobTimeout',
            'lastFinishedFullJobId' => 'getLastFinishedFullJobId',
            'lastJob' => 'getLastJob',
            'lastReviser' => 'getLastReviser',
            'lastUpdateTime' => 'getLastUpdateTime',
            'modelSets' => 'getModelSets',
            'mrCheckBranchStrategy' => 'getMrCheckBranchStrategy',
            'name' => 'getName',
            'notificationConfig' => 'getNotificationConfig',
            'owner' => 'getOwner',
            'ownerId' => 'getOwnerId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'region' => 'getRegion',
            'repoId' => 'getRepoId',
            'repoUrl' => 'getRepoUrl',
            'reviewData' => 'getReviewData',
            'ruleSets' => 'getRuleSets',
            'source' => 'getSource',
            'taskGroupId' => 'getTaskGroupId',
            'taskIds' => 'getTaskIds',
            'tenantId' => 'getTenantId',
            'useCache' => 'getUseCache',
            'useWorkspaceNotificationConfig' => 'getUseWorkspaceNotificationConfig',
            'versionUpdateDelayDays' => 'getVersionUpdateDelayDays',
            'webhookCheckMode' => 'getWebhookCheckMode',
            'zone' => 'getZone'
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
        $this->container['avastarType'] = isset($data['avastarType']) ? $data['avastarType'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['canChangeIgnoreMode'] = isset($data['canChangeIgnoreMode']) ? $data['canChangeIgnoreMode'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canEditTemplateSwitch'] = isset($data['canEditTemplateSwitch']) ? $data['canEditTemplateSwitch'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canRead'] = isset($data['canRead']) ? $data['canRead'] : null;
        $this->container['checkParamList'] = isset($data['checkParamList']) ? $data['checkParamList'] : null;
        $this->container['checkParamMap'] = isset($data['checkParamMap']) ? $data['checkParamMap'] : null;
        $this->container['configTemplateId'] = isset($data['configTemplateId']) ? $data['configTemplateId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['criterionSets'] = isset($data['criterionSets']) ? $data['criterionSets'] : null;
        $this->container['customParams'] = isset($data['customParams']) ? $data['customParams'] : null;
        $this->container['defaultBranchName'] = isset($data['defaultBranchName']) ? $data['defaultBranchName'] : null;
        $this->container['fileEncoding'] = isset($data['fileEncoding']) ? $data['fileEncoding'] : null;
        $this->container['hwCloudRegion'] = isset($data['hwCloudRegion']) ? $data['hwCloudRegion'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['includePaths'] = isset($data['includePaths']) ? $data['includePaths'] : null;
        $this->container['isSetMrWebhook'] = isset($data['isSetMrWebhook']) ? $data['isSetMrWebhook'] : null;
        $this->container['isSetPushWebhook'] = isset($data['isSetPushWebhook']) ? $data['isSetPushWebhook'] : null;
        $this->container['isSetWebhook'] = isset($data['isSetWebhook']) ? $data['isSetWebhook'] : null;
        $this->container['isTemplateTask'] = isset($data['isTemplateTask']) ? $data['isTemplateTask'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobTimeout'] = isset($data['jobTimeout']) ? $data['jobTimeout'] : null;
        $this->container['lastFinishedFullJobId'] = isset($data['lastFinishedFullJobId']) ? $data['lastFinishedFullJobId'] : null;
        $this->container['lastJob'] = isset($data['lastJob']) ? $data['lastJob'] : null;
        $this->container['lastReviser'] = isset($data['lastReviser']) ? $data['lastReviser'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['modelSets'] = isset($data['modelSets']) ? $data['modelSets'] : null;
        $this->container['mrCheckBranchStrategy'] = isset($data['mrCheckBranchStrategy']) ? $data['mrCheckBranchStrategy'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notificationConfig'] = isset($data['notificationConfig']) ? $data['notificationConfig'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
        $this->container['reviewData'] = isset($data['reviewData']) ? $data['reviewData'] : null;
        $this->container['ruleSets'] = isset($data['ruleSets']) ? $data['ruleSets'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['taskGroupId'] = isset($data['taskGroupId']) ? $data['taskGroupId'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['useCache'] = isset($data['useCache']) ? $data['useCache'] : null;
        $this->container['useWorkspaceNotificationConfig'] = isset($data['useWorkspaceNotificationConfig']) ? $data['useWorkspaceNotificationConfig'] : null;
        $this->container['versionUpdateDelayDays'] = isset($data['versionUpdateDelayDays']) ? $data['versionUpdateDelayDays'] : null;
        $this->container['webhookCheckMode'] = isset($data['webhookCheckMode']) ? $data['webhookCheckMode'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
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
    * Gets avastarType
    *  **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    *
    * @return string|null
    */
    public function getAvastarType()
    {
        return $this->container['avastarType'];
    }

    /**
    * Sets avastarType
    *
    * @param string|null $avastarType **参数解释：** 头像颜色。 **取值范围：** - pure-blue：蓝色。 - pure-purple：紫色。 - pure-tomato：红色。 - pure-green：绿色。 - pure-orange：橙色。 - pure-pink：粉色。
    *
    * @return $this
    */
    public function setAvastarType($avastarType)
    {
        $this->container['avastarType'] = $avastarType;
        return $this;
    }

    /**
    * Gets branchName
    *  **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
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
    * @param string|null $branchName **参数解释：** 分支名称。 **取值范围：** 长度为[1~200]个字符。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets canChangeIgnoreMode
    *  **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    *
    * @return bool|null
    */
    public function getCanChangeIgnoreMode()
    {
        return $this->container['canChangeIgnoreMode'];
    }

    /**
    * Sets canChangeIgnoreMode
    *
    * @param bool|null $canChangeIgnoreMode **参数解释：** 是否可以更新忽略文件模式。 **取值范围：** - true：能更新忽略文件模式。 - false：不能更新忽略文件模式。
    *
    * @return $this
    */
    public function setCanChangeIgnoreMode($canChangeIgnoreMode)
    {
        $this->container['canChangeIgnoreMode'] = $canChangeIgnoreMode;
        return $this;
    }

    /**
    * Gets canDelete
    *  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canEdit
    *  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    *
    * @return bool|null
    */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
    * Sets canEdit
    *
    * @param bool|null $canEdit **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    *
    * @return $this
    */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;
        return $this;
    }

    /**
    * Gets canEditTemplateSwitch
    *  **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    *
    * @return bool|null
    */
    public function getCanEditTemplateSwitch()
    {
        return $this->container['canEditTemplateSwitch'];
    }

    /**
    * Sets canEditTemplateSwitch
    *
    * @param bool|null $canEditTemplateSwitch **参数解释：** 是否有切换任务模板的权限。 **取值范围：** - true：有切换任务模板的权限。 - false：没有切换任务模板的权限。
    *
    * @return $this
    */
    public function setCanEditTemplateSwitch($canEditTemplateSwitch)
    {
        $this->container['canEditTemplateSwitch'] = $canEditTemplateSwitch;
        return $this;
    }

    /**
    * Gets canExecute
    *  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    *
    * @return bool|null
    */
    public function getCanExecute()
    {
        return $this->container['canExecute'];
    }

    /**
    * Sets canExecute
    *
    * @param bool|null $canExecute **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    *
    * @return $this
    */
    public function setCanExecute($canExecute)
    {
        $this->container['canExecute'] = $canExecute;
        return $this;
    }

    /**
    * Gets canRead
    *  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    *
    * @return bool|null
    */
    public function getCanRead()
    {
        return $this->container['canRead'];
    }

    /**
    * Sets canRead
    *
    * @param bool|null $canRead **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    *
    * @return $this
    */
    public function setCanRead($canRead)
    {
        $this->container['canRead'] = $canRead;
        return $this;
    }

    /**
    * Gets checkParamList
    *  **参数解释：** 自定义参数列表。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomParameter[]|null
    */
    public function getCheckParamList()
    {
        return $this->container['checkParamList'];
    }

    /**
    * Sets checkParamList
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomParameter[]|null $checkParamList **参数解释：** 自定义参数列表。
    *
    * @return $this
    */
    public function setCheckParamList($checkParamList)
    {
        $this->container['checkParamList'] = $checkParamList;
        return $this;
    }

    /**
    * Gets checkParamMap
    *  checkParamMap
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\TaskBasicInfoV3CheckParamMap|null
    */
    public function getCheckParamMap()
    {
        return $this->container['checkParamMap'];
    }

    /**
    * Sets checkParamMap
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\TaskBasicInfoV3CheckParamMap|null $checkParamMap checkParamMap
    *
    * @return $this
    */
    public function setCheckParamMap($checkParamMap)
    {
        $this->container['checkParamMap'] = $checkParamMap;
        return $this;
    }

    /**
    * Gets configTemplateId
    *  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return string|null
    */
    public function getConfigTemplateId()
    {
        return $this->container['configTemplateId'];
    }

    /**
    * Sets configTemplateId
    *
    * @param string|null $configTemplateId **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setConfigTemplateId($configTemplateId)
    {
        $this->container['configTemplateId'] = $configTemplateId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
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
    * @param string|null $createTime **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets criterionSets
    *  **参数解释：** 规则集列表，该字段一般返回空数组[]。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]|null
    */
    public function getCriterionSets()
    {
        return $this->container['criterionSets'];
    }

    /**
    * Sets criterionSets
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]|null $criterionSets **参数解释：** 规则集列表，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setCriterionSets($criterionSets)
    {
        $this->container['criterionSets'] = $criterionSets;
        return $this;
    }

    /**
    * Gets customParams
    *  **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomParameter[]|null
    */
    public function getCustomParams()
    {
        return $this->container['customParams'];
    }

    /**
    * Sets customParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CustomParameter[]|null $customParams **参数解释：** 自定义参数列表，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setCustomParams($customParams)
    {
        $this->container['customParams'] = $customParams;
        return $this;
    }

    /**
    * Gets defaultBranchName
    *  **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    *
    * @return string|null
    */
    public function getDefaultBranchName()
    {
        return $this->container['defaultBranchName'];
    }

    /**
    * Sets defaultBranchName
    *
    * @param string|null $defaultBranchName **参数解释：** 默认分支的分支名。 **取值范围：** 长度为[1~200]个字符。
    *
    * @return $this
    */
    public function setDefaultBranchName($defaultBranchName)
    {
        $this->container['defaultBranchName'] = $defaultBranchName;
        return $this;
    }

    /**
    * Gets fileEncoding
    *  **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    *
    * @return string|null
    */
    public function getFileEncoding()
    {
        return $this->container['fileEncoding'];
    }

    /**
    * Sets fileEncoding
    *
    * @param string|null $fileEncoding **参数解释：** 文件编码。 **取值范围：** - UTF-8：UTF-8格式。 - GBK：GBK格式。
    *
    * @return $this
    */
    public function setFileEncoding($fileEncoding)
    {
        $this->container['fileEncoding'] = $fileEncoding;
        return $this;
    }

    /**
    * Gets hwCloudRegion
    *  **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return string|null
    */
    public function getHwCloudRegion()
    {
        return $this->container['hwCloudRegion'];
    }

    /**
    * Sets hwCloudRegion
    *
    * @param string|null $hwCloudRegion **参数解释：** 华为云地域。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setHwCloudRegion($hwCloudRegion)
    {
        $this->container['hwCloudRegion'] = $hwCloudRegion;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
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
    * @param string|null $id **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets includePaths
    *  **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    *
    * @return string|null
    */
    public function getIncludePaths()
    {
        return $this->container['includePaths'];
    }

    /**
    * Sets includePaths
    *
    * @param string|null $includePaths **参数解释：** 检查目录。 不配置检查目录时，检查代码仓中所有目录下的代码文件； 配置检查目录时，只检查配置目录中的代码文件。 **取值范围：** 长度为[1~200]个字符。
    *
    * @return $this
    */
    public function setIncludePaths($includePaths)
    {
        $this->container['includePaths'] = $includePaths;
        return $this;
    }

    /**
    * Gets isSetMrWebhook
    *  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    *
    * @return bool|null
    */
    public function getIsSetMrWebhook()
    {
        return $this->container['isSetMrWebhook'];
    }

    /**
    * Sets isSetMrWebhook
    *
    * @param bool|null $isSetMrWebhook **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    *
    * @return $this
    */
    public function setIsSetMrWebhook($isSetMrWebhook)
    {
        $this->container['isSetMrWebhook'] = $isSetMrWebhook;
        return $this;
    }

    /**
    * Gets isSetPushWebhook
    *  **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    *
    * @return bool|null
    */
    public function getIsSetPushWebhook()
    {
        return $this->container['isSetPushWebhook'];
    }

    /**
    * Sets isSetPushWebhook
    *
    * @param bool|null $isSetPushWebhook **参数解释：** 是否打开代码提交时触发。 **取值范围：** - true：打开。 - false：关闭。
    *
    * @return $this
    */
    public function setIsSetPushWebhook($isSetPushWebhook)
    {
        $this->container['isSetPushWebhook'] = $isSetPushWebhook;
        return $this;
    }

    /**
    * Gets isSetWebhook
    *  **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    *
    * @return bool|null
    */
    public function getIsSetWebhook()
    {
        return $this->container['isSetWebhook'];
    }

    /**
    * Sets isSetWebhook
    *
    * @param bool|null $isSetWebhook **参数解释：** 是否打开合并请求时触发。 **取值范围：** - true：打开。 - false：关闭。
    *
    * @return $this
    */
    public function setIsSetWebhook($isSetWebhook)
    {
        $this->container['isSetWebhook'] = $isSetWebhook;
        return $this;
    }

    /**
    * Gets isTemplateTask
    *  **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    *
    * @return bool|null
    */
    public function getIsTemplateTask()
    {
        return $this->container['isTemplateTask'];
    }

    /**
    * Sets isTemplateTask
    *
    * @param bool|null $isTemplateTask **参数解释：** 是否是任务模板。 **取值范围：** - true：是任务模板。 - false：不是任务模板。
    *
    * @return $this
    */
    public function setIsTemplateTask($isTemplateTask)
    {
        $this->container['isTemplateTask'] = $isTemplateTask;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释：** 执行ID，来自代码检查执行任务接口的返回值，每次执行代码检查任务都有唯一的执行ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobTimeout
    *  **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getJobTimeout()
    {
        return $this->container['jobTimeout'];
    }

    /**
    * Sets jobTimeout
    *
    * @param string|null $jobTimeout **参数解释:** 超时时间，以分钟为单位，格式固定为\"xxx min\"，其中xxx为整数，0 ＜ xxx ≤ 1200。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setJobTimeout($jobTimeout)
    {
        $this->container['jobTimeout'] = $jobTimeout;
        return $this;
    }

    /**
    * Gets lastFinishedFullJobId
    *  **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return string|null
    */
    public function getLastFinishedFullJobId()
    {
        return $this->container['lastFinishedFullJobId'];
    }

    /**
    * Sets lastFinishedFullJobId
    *
    * @param string|null $lastFinishedFullJobId **参数解释：** 最后一次检查完成的任务的执行ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setLastFinishedFullJobId($lastFinishedFullJobId)
    {
        $this->container['lastFinishedFullJobId'] = $lastFinishedFullJobId;
        return $this;
    }

    /**
    * Gets lastJob
    *  lastJob
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobBasicInfoV3|null
    */
    public function getLastJob()
    {
        return $this->container['lastJob'];
    }

    /**
    * Sets lastJob
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobBasicInfoV3|null $lastJob lastJob
    *
    * @return $this
    */
    public function setLastJob($lastJob)
    {
        $this->container['lastJob'] = $lastJob;
        return $this;
    }

    /**
    * Gets lastReviser
    *  **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastReviser()
    {
        return $this->container['lastReviser'];
    }

    /**
    * Sets lastReviser
    *
    * @param string|null $lastReviser **参数解释：** 任务的最后修改人。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastReviser($lastReviser)
    {
        $this->container['lastReviser'] = $lastReviser;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets modelSets
    *  **参数解释：** 模型集列表，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getModelSets()
    {
        return $this->container['modelSets'];
    }

    /**
    * Sets modelSets
    *
    * @param string[]|null $modelSets **参数解释：** 模型集列表，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setModelSets($modelSets)
    {
        $this->container['modelSets'] = $modelSets;
        return $this;
    }

    /**
    * Gets mrCheckBranchStrategy
    *  **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    *
    * @return int|null
    */
    public function getMrCheckBranchStrategy()
    {
        return $this->container['mrCheckBranchStrategy'];
    }

    /**
    * Sets mrCheckBranchStrategy
    *
    * @param int|null $mrCheckBranchStrategy **参数解释：** mr检查分支门禁策略。 **取值范围：** - 0：白名单。
    *
    * @return $this
    */
    public function setMrCheckBranchStrategy($mrCheckBranchStrategy)
    {
        $this->container['mrCheckBranchStrategy'] = $mrCheckBranchStrategy;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
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
    * @param string|null $name **参数解释：** 代码检查任务名。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets notificationConfig
    *  **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    *
    * @return string|null
    */
    public function getNotificationConfig()
    {
        return $this->container['notificationConfig'];
    }

    /**
    * Sets notificationConfig
    *
    * @param string|null $notificationConfig **参数解释：** 消息通知是否使用项目通知设置的配置项，格式为x,x,x,x,x,x，其中x的取值为0或者1。 x为0时代表使用任务的通知设置，x为1时代表使用项目通知设置。 从左到右依次为站内消息通知、邮件通知、企业微信、钉钉、飞书、通用webhook的消息通知配置。 **取值范围：** 格式为x,x,x,x,x,x，其中x的取值为0或者1。
    *
    * @return $this
    */
    public function setNotificationConfig($notificationConfig)
    {
        $this->container['notificationConfig'] = $notificationConfig;
        return $this;
    }

    /**
    * Gets owner
    *  **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
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
    * @param string|null $owner **参数解释：** 代码检查任务所有者。 **取值范围：** 长度为[1~255]个字符。
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
    *  **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
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
    * @param string|null $ownerId **参数解释：** 代码检查任务所有者的用户ID。 **取值范围：** 长度为[1~64]个字符。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
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
    * @param string|null $projectId **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释：** 项目名。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
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
    * @param string|null $region **参数解释：** 地域，此字段固定为\"suzhou\"。 **取值范围：** suzhou。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets repoId
    *  **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return string|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string|null $repoId **参数解释：** 代码仓地址对应的CodeartsRepo仓的RepoId。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets repoUrl
    *  **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    *
    * @return string|null
    */
    public function getRepoUrl()
    {
        return $this->container['repoUrl'];
    }

    /**
    * Sets repoUrl
    *
    * @param string|null $repoUrl **参数解释：** 代码仓地址。 **取值范围：** 长度为[1~1024]个字符。
    *
    * @return $this
    */
    public function setRepoUrl($repoUrl)
    {
        $this->container['repoUrl'] = $repoUrl;
        return $this;
    }

    /**
    * Gets reviewData
    *  **参数解释：** 门禁配置，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getReviewData()
    {
        return $this->container['reviewData'];
    }

    /**
    * Sets reviewData
    *
    * @param string[]|null $reviewData **参数解释：** 门禁配置，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setReviewData($reviewData)
    {
        $this->container['reviewData'] = $reviewData;
        return $this;
    }

    /**
    * Gets ruleSets
    *  **参数解释：** 规则集配置，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getRuleSets()
    {
        return $this->container['ruleSets'];
    }

    /**
    * Sets ruleSets
    *
    * @param string[]|null $ruleSets **参数解释：** 规则集配置，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setRuleSets($ruleSets)
    {
        $this->container['ruleSets'] = $ruleSets;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
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
    * @param string|null $source **参数解释：** 任务来源，一般为\"customer\"。 **取值范围：** customer。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets taskGroupId
    *  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return string|null
    */
    public function getTaskGroupId()
    {
        return $this->container['taskGroupId'];
    }

    /**
    * Sets taskGroupId
    *
    * @param string|null $taskGroupId **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setTaskGroupId($taskGroupId)
    {
        $this->container['taskGroupId'] = $taskGroupId;
        return $this;
    }

    /**
    * Gets taskIds
    *  **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param string[]|null $taskIds **参数解释：** 任务ID列表，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释：** 任务所属的租户的租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets useCache
    *  **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    *
    * @return bool|null
    */
    public function getUseCache()
    {
        return $this->container['useCache'];
    }

    /**
    * Sets useCache
    *
    * @param bool|null $useCache **参数解释：** 查询任务信息是否使用缓存。 **取值范围：** - true：使用缓存。 - false：不使用缓存。
    *
    * @return $this
    */
    public function setUseCache($useCache)
    {
        $this->container['useCache'] = $useCache;
        return $this;
    }

    /**
    * Gets useWorkspaceNotificationConfig
    *  **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    *
    * @return int|null
    */
    public function getUseWorkspaceNotificationConfig()
    {
        return $this->container['useWorkspaceNotificationConfig'];
    }

    /**
    * Sets useWorkspaceNotificationConfig
    *
    * @param int|null $useWorkspaceNotificationConfig **参数解释：** 消息通知是否使用项目通知设置的配置项，来自notificationConfig的对应的二进制的取反转化成十进制。 例如，notificationConfig配置为1,1,0,1,0,0，则二进制为110100，取反为001011，转化为10进制时该值为11，最终useWorkspaceNotificationConfig的值为11。 **取值范围：** 0-31
    *
    * @return $this
    */
    public function setUseWorkspaceNotificationConfig($useWorkspaceNotificationConfig)
    {
        $this->container['useWorkspaceNotificationConfig'] = $useWorkspaceNotificationConfig;
        return $this;
    }

    /**
    * Gets versionUpdateDelayDays
    *  **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    *
    * @return string[]|null
    */
    public function getVersionUpdateDelayDays()
    {
        return $this->container['versionUpdateDelayDays'];
    }

    /**
    * Sets versionUpdateDelayDays
    *
    * @param string[]|null $versionUpdateDelayDays **参数解释：** 版本升级缓冲期，该字段一般返回空数组[]。
    *
    * @return $this
    */
    public function setVersionUpdateDelayDays($versionUpdateDelayDays)
    {
        $this->container['versionUpdateDelayDays'] = $versionUpdateDelayDays;
        return $this;
    }

    /**
    * Gets webhookCheckMode
    *  **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    *
    * @return int|null
    */
    public function getWebhookCheckMode()
    {
        return $this->container['webhookCheckMode'];
    }

    /**
    * Sets webhookCheckMode
    *
    * @param int|null $webhookCheckMode **参数解释：** webhook检查模式，一般为0，代表禁止来自其它代码仓的MR。 **取值范围：** 0
    *
    * @return $this
    */
    public function setWebhookCheckMode($webhookCheckMode)
    {
        $this->container['webhookCheckMode'] = $webhookCheckMode;
        return $this;
    }

    /**
    * Gets zone
    *  **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @return string|null
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string|null $zone **参数解释：** 区域，一般为green。 **取值范围：** green。
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
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

