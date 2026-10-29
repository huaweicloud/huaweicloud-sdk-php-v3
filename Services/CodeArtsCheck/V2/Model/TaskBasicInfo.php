<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branchName  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * configTemplate  configTemplate
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * isFollowed  **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    * jobResult  jobResult
    * lastJob  lastJob
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    * ruleType  **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branchName' => 'string',
            'canDelete' => 'bool',
            'canEdit' => 'bool',
            'canExecute' => 'bool',
            'canRead' => 'bool',
            'configTemplate' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateBasicInfo',
            'configTemplateId' => 'string',
            'createTime' => 'string',
            'id' => 'string',
            'isFollowed' => 'bool',
            'jobResult' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo',
            'lastJob' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobBasicInfo',
            'lastUpdateTime' => 'string',
            'name' => 'string',
            'owner' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'region' => 'string',
            'repoUrl' => 'string',
            'ruleSets' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]',
            'ruleType' => 'string',
            'taskGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branchName  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * configTemplate  configTemplate
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * isFollowed  **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    * jobResult  jobResult
    * lastJob  lastJob
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    * ruleType  **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branchName' => null,
        'canDelete' => null,
        'canEdit' => null,
        'canExecute' => null,
        'canRead' => null,
        'configTemplate' => null,
        'configTemplateId' => null,
        'createTime' => null,
        'id' => null,
        'isFollowed' => null,
        'jobResult' => null,
        'lastJob' => null,
        'lastUpdateTime' => null,
        'name' => null,
        'owner' => null,
        'projectId' => null,
        'projectName' => null,
        'region' => null,
        'repoUrl' => null,
        'ruleSets' => null,
        'ruleType' => null,
        'taskGroupId' => null
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
    * branchName  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * configTemplate  configTemplate
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * isFollowed  **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    * jobResult  jobResult
    * lastJob  lastJob
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    * ruleType  **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branchName' => 'branchName',
            'canDelete' => 'canDelete',
            'canEdit' => 'canEdit',
            'canExecute' => 'canExecute',
            'canRead' => 'canRead',
            'configTemplate' => 'configTemplate',
            'configTemplateId' => 'configTemplateId',
            'createTime' => 'createTime',
            'id' => 'id',
            'isFollowed' => 'isFollowed',
            'jobResult' => 'jobResult',
            'lastJob' => 'lastJob',
            'lastUpdateTime' => 'lastUpdateTime',
            'name' => 'name',
            'owner' => 'owner',
            'projectId' => 'projectId',
            'projectName' => 'projectName',
            'region' => 'region',
            'repoUrl' => 'repoUrl',
            'ruleSets' => 'ruleSets',
            'ruleType' => 'ruleType',
            'taskGroupId' => 'taskGroupId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branchName  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * configTemplate  configTemplate
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * isFollowed  **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    * jobResult  jobResult
    * lastJob  lastJob
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    * ruleType  **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'branchName' => 'setBranchName',
            'canDelete' => 'setCanDelete',
            'canEdit' => 'setCanEdit',
            'canExecute' => 'setCanExecute',
            'canRead' => 'setCanRead',
            'configTemplate' => 'setConfigTemplate',
            'configTemplateId' => 'setConfigTemplateId',
            'createTime' => 'setCreateTime',
            'id' => 'setId',
            'isFollowed' => 'setIsFollowed',
            'jobResult' => 'setJobResult',
            'lastJob' => 'setLastJob',
            'lastUpdateTime' => 'setLastUpdateTime',
            'name' => 'setName',
            'owner' => 'setOwner',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'region' => 'setRegion',
            'repoUrl' => 'setRepoUrl',
            'ruleSets' => 'setRuleSets',
            'ruleType' => 'setRuleType',
            'taskGroupId' => 'setTaskGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branchName  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * canDelete  **参数解释：** 是否有删除任务的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * canEdit  **参数解释：** 是否有编辑的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canExecute  **参数解释：** 是否有执行的权限。 **取值范围：** - true：有执行的权限。 - false：没有执行的权限。
    * canRead  **参数解释：** 是否有读的权限。 **取值范围：** - true：有读的权限。 - false：没有读的权限。
    * configTemplate  configTemplate
    * configTemplateId  **参数解释：** 任务的配置模板的ID。 **取值范围：** 长度为[1~128]个字符。
    * createTime  **参数解释：** 任务的创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * id  **参数解释：** 任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~128]个字符。
    * isFollowed  **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    * jobResult  jobResult
    * lastJob  lastJob
    * lastUpdateTime  **参数解释：** 任务的上一次更新时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
    * owner  **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    * ruleType  **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    * taskGroupId  **参数解释：** 任务分组的ID。 **取值范围：** 长度为[1~128]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'branchName' => 'getBranchName',
            'canDelete' => 'getCanDelete',
            'canEdit' => 'getCanEdit',
            'canExecute' => 'getCanExecute',
            'canRead' => 'getCanRead',
            'configTemplate' => 'getConfigTemplate',
            'configTemplateId' => 'getConfigTemplateId',
            'createTime' => 'getCreateTime',
            'id' => 'getId',
            'isFollowed' => 'getIsFollowed',
            'jobResult' => 'getJobResult',
            'lastJob' => 'getLastJob',
            'lastUpdateTime' => 'getLastUpdateTime',
            'name' => 'getName',
            'owner' => 'getOwner',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'region' => 'getRegion',
            'repoUrl' => 'getRepoUrl',
            'ruleSets' => 'getRuleSets',
            'ruleType' => 'getRuleType',
            'taskGroupId' => 'getTaskGroupId'
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
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canRead'] = isset($data['canRead']) ? $data['canRead'] : null;
        $this->container['configTemplate'] = isset($data['configTemplate']) ? $data['configTemplate'] : null;
        $this->container['configTemplateId'] = isset($data['configTemplateId']) ? $data['configTemplateId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isFollowed'] = isset($data['isFollowed']) ? $data['isFollowed'] : null;
        $this->container['jobResult'] = isset($data['jobResult']) ? $data['jobResult'] : null;
        $this->container['lastJob'] = isset($data['lastJob']) ? $data['lastJob'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
        $this->container['ruleSets'] = isset($data['ruleSets']) ? $data['ruleSets'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['taskGroupId'] = isset($data['taskGroupId']) ? $data['taskGroupId'] : null;
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
    * Gets branchName
    *  **参数解释：** 分支名称。 **取值范围：** 不涉及。
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
    * @param string|null $branchName **参数解释：** 分支名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
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
    * Gets configTemplate
    *  configTemplate
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateBasicInfo|null
    */
    public function getConfigTemplate()
    {
        return $this->container['configTemplate'];
    }

    /**
    * Sets configTemplate
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateBasicInfo|null $configTemplate configTemplate
    *
    * @return $this
    */
    public function setConfigTemplate($configTemplate)
    {
        $this->container['configTemplate'] = $configTemplate;
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
    * Gets isFollowed
    *  **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    *
    * @return bool|null
    */
    public function getIsFollowed()
    {
        return $this->container['isFollowed'];
    }

    /**
    * Sets isFollowed
    *
    * @param bool|null $isFollowed **参数解释：** 任务是否被关注。 **取值范围：** - true：任务被关注。 - false：任务未被关注。
    *
    * @return $this
    */
    public function setIsFollowed($isFollowed)
    {
        $this->container['isFollowed'] = $isFollowed;
        return $this;
    }

    /**
    * Gets jobResult
    *  jobResult
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo|null
    */
    public function getJobResult()
    {
        return $this->container['jobResult'];
    }

    /**
    * Sets jobResult
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo|null $jobResult jobResult
    *
    * @return $this
    */
    public function setJobResult($jobResult)
    {
        $this->container['jobResult'] = $jobResult;
        return $this;
    }

    /**
    * Gets lastJob
    *  lastJob
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobBasicInfo|null
    */
    public function getLastJob()
    {
        return $this->container['lastJob'];
    }

    /**
    * Sets lastJob
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobBasicInfo|null $lastJob lastJob
    *
    * @return $this
    */
    public function setLastJob($lastJob)
    {
        $this->container['lastJob'] = $lastJob;
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
    * Gets name
    *  **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 代码检查任务名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
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
    * @param string|null $owner **参数解释：** 代码检查任务所有者。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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
    *  **参数解释：** 项目名。 **取值范围：** 不涉及。
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
    * @param string|null $projectName **参数解释：** 项目名。 **取值范围：** 不涉及。
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
    *  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
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
    * @param string|null $region **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets repoUrl
    *  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
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
    * @param string|null $repoUrl **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRepoUrl($repoUrl)
    {
        $this->container['repoUrl'] = $repoUrl;
        return $this;
    }

    /**
    * Gets ruleSets
    *  **参数解释：** 规则集配置列表。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]|null
    */
    public function getRuleSets()
    {
        return $this->container['ruleSets'];
    }

    /**
    * Sets ruleSets
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]|null $ruleSets **参数解释：** 规则集配置列表。
    *
    * @return $this
    */
    public function setRuleSets($ruleSets)
    {
        $this->container['ruleSets'] = $ruleSets;
        return $this;
    }

    /**
    * Gets ruleType
    *  **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType **参数解释：** 任务类型。 **取值范围：** - basic：普通任务。 - security：安全增强包任务。
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
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

