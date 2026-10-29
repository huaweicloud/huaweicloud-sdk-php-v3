<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigTemplateBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigTemplateBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    * branch  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * creator  **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
    * exclude  **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    * id  **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
    * includePaths  **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
    * lastReviser  **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoType  **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * resourcePoolId  **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    * resourcePoolName  **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    * resourcePoolType  **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    * reviewData  **参数解释：** 任务门禁配置列表。
    * reviewDataJson  **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'branch' => 'string',
            'createTime' => 'string',
            'creator' => 'string',
            'exclude' => 'string',
            'id' => 'string',
            'includePaths' => 'string',
            'lastReviser' => 'string',
            'lastUpdateTime' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'region' => 'string',
            'repoType' => 'string',
            'repoUrl' => 'string',
            'resourcePoolId' => 'string',
            'resourcePoolName' => 'string',
            'resourcePoolType' => 'string',
            'reviewData' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ReviewDataInfoResponse[]',
            'reviewDataJson' => 'string',
            'ruleSets' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ConfigTemplateRuleSetInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    * branch  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * creator  **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
    * exclude  **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    * id  **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
    * includePaths  **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
    * lastReviser  **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoType  **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * resourcePoolId  **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    * resourcePoolName  **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    * resourcePoolType  **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    * reviewData  **参数解释：** 任务门禁配置列表。
    * reviewDataJson  **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'branch' => null,
        'createTime' => null,
        'creator' => null,
        'exclude' => null,
        'id' => null,
        'includePaths' => null,
        'lastReviser' => null,
        'lastUpdateTime' => null,
        'name' => null,
        'projectId' => null,
        'projectName' => null,
        'region' => null,
        'repoType' => null,
        'repoUrl' => null,
        'resourcePoolId' => null,
        'resourcePoolName' => null,
        'resourcePoolType' => null,
        'reviewData' => null,
        'reviewDataJson' => null,
        'ruleSets' => null
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
    * arch  **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    * branch  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * creator  **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
    * exclude  **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    * id  **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
    * includePaths  **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
    * lastReviser  **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoType  **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * resourcePoolId  **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    * resourcePoolName  **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    * resourcePoolType  **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    * reviewData  **参数解释：** 任务门禁配置列表。
    * reviewDataJson  **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'branch' => 'branch',
            'createTime' => 'createTime',
            'creator' => 'creator',
            'exclude' => 'exclude',
            'id' => 'id',
            'includePaths' => 'includePaths',
            'lastReviser' => 'lastReviser',
            'lastUpdateTime' => 'lastUpdateTime',
            'name' => 'name',
            'projectId' => 'projectId',
            'projectName' => 'projectName',
            'region' => 'region',
            'repoType' => 'repoType',
            'repoUrl' => 'repoUrl',
            'resourcePoolId' => 'resourcePoolId',
            'resourcePoolName' => 'resourcePoolName',
            'resourcePoolType' => 'resource_pool_type',
            'reviewData' => 'reviewData',
            'reviewDataJson' => 'reviewDataJson',
            'ruleSets' => 'ruleSets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    * branch  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * creator  **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
    * exclude  **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    * id  **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
    * includePaths  **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
    * lastReviser  **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoType  **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * resourcePoolId  **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    * resourcePoolName  **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    * resourcePoolType  **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    * reviewData  **参数解释：** 任务门禁配置列表。
    * reviewDataJson  **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'branch' => 'setBranch',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator',
            'exclude' => 'setExclude',
            'id' => 'setId',
            'includePaths' => 'setIncludePaths',
            'lastReviser' => 'setLastReviser',
            'lastUpdateTime' => 'setLastUpdateTime',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'region' => 'setRegion',
            'repoType' => 'setRepoType',
            'repoUrl' => 'setRepoUrl',
            'resourcePoolId' => 'setResourcePoolId',
            'resourcePoolName' => 'setResourcePoolName',
            'resourcePoolType' => 'setResourcePoolType',
            'reviewData' => 'setReviewData',
            'reviewDataJson' => 'setReviewDataJson',
            'ruleSets' => 'setRuleSets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    * branch  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * creator  **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
    * exclude  **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    * id  **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
    * includePaths  **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
    * lastReviser  **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
    * lastUpdateTime  **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * name  **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目的32位UUID，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **取值范围：** 长度为[1~32]个字符。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * region  **参数解释：** 华为云地域。 **取值范围：** 不涉及。
    * repoType  **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    * repoUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * resourcePoolId  **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    * resourcePoolName  **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    * resourcePoolType  **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    * reviewData  **参数解释：** 任务门禁配置列表。
    * reviewDataJson  **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    * ruleSets  **参数解释：** 规则集配置列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'branch' => 'getBranch',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator',
            'exclude' => 'getExclude',
            'id' => 'getId',
            'includePaths' => 'getIncludePaths',
            'lastReviser' => 'getLastReviser',
            'lastUpdateTime' => 'getLastUpdateTime',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'region' => 'getRegion',
            'repoType' => 'getRepoType',
            'repoUrl' => 'getRepoUrl',
            'resourcePoolId' => 'getResourcePoolId',
            'resourcePoolName' => 'getResourcePoolName',
            'resourcePoolType' => 'getResourcePoolType',
            'reviewData' => 'getReviewData',
            'reviewDataJson' => 'getReviewDataJson',
            'ruleSets' => 'getRuleSets'
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
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['exclude'] = isset($data['exclude']) ? $data['exclude'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['includePaths'] = isset($data['includePaths']) ? $data['includePaths'] : null;
        $this->container['lastReviser'] = isset($data['lastReviser']) ? $data['lastReviser'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
        $this->container['resourcePoolId'] = isset($data['resourcePoolId']) ? $data['resourcePoolId'] : null;
        $this->container['resourcePoolName'] = isset($data['resourcePoolName']) ? $data['resourcePoolName'] : null;
        $this->container['resourcePoolType'] = isset($data['resourcePoolType']) ? $data['resourcePoolType'] : null;
        $this->container['reviewData'] = isset($data['reviewData']) ? $data['reviewData'] : null;
        $this->container['reviewDataJson'] = isset($data['reviewDataJson']) ? $data['reviewDataJson'] : null;
        $this->container['ruleSets'] = isset($data['ruleSets']) ? $data['ruleSets'] : null;
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
    * Gets arch
    *  **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释：** 执行机类型。 **取值范围：** X86/ARM。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets branch
    *  **参数解释：** 分支名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch **参数解释：** 分支名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
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
    * @param string|null $createTime **参数解释：** 配置模板创建时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creator
    *  **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
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
    * @param string|null $creator **参数解释：** 配置模板创建者。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets exclude
    *  **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    *
    * @return string|null
    */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
    * Sets exclude
    *
    * @param string|null $exclude **参数解释：** 任务配置的排除目录信息。 **取值范围:** 不涉及。
    *
    * @return $this
    */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
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
    * @param string|null $id **参数解释：** 配置模板ID，修改配置信息需要用到配置模板ID，每个代码检查任务及其下的分支任务都有相同的且唯一的配置模板ID。 **取值范围:** 不涉及。
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
    *  **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
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
    * @param string|null $includePaths **参数解释：** 检查目录。不配置检查目录时，检查代码仓中所有目录下的代码文件；配置检查目录时，只检查配置目录中的文件。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIncludePaths($includePaths)
    {
        $this->container['includePaths'] = $includePaths;
        return $this;
    }

    /**
    * Gets lastReviser
    *  **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
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
    * @param string|null $lastReviser **参数解释：** 最后修改人的用户名。 **取值范围：** 不涉及。
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
    *  **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
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
    * @param string|null $lastUpdateTime **参数解释：** 配置模板上一次修改时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
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
    *  **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 配置模板的名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets repoType
    *  **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    *
    * @return string|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string|null $repoType **参数解释：** 代码仓类型。 **取值范围：** - DevCloud：CodeArtsRepo仓。 - Gitee：Gitee仓。 - GitHub：GitHub仓。 - GitPub：通用Git仓。 - gitcode：GitCode仓。 - gitlab：GitLab仓。 - self_gitlab：自建GitLab仓。 - tfs_git：TFS仓。 - bitbucket：Bitbucket仓。
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
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
    * Gets resourcePoolId
    *  **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getResourcePoolId()
    {
        return $this->container['resourcePoolId'];
    }

    /**
    * Sets resourcePoolId
    *
    * @param string|null $resourcePoolId **参数解释：** 启用的资源池ID，使用内置执行机的情况下为\"\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setResourcePoolId($resourcePoolId)
    {
        $this->container['resourcePoolId'] = $resourcePoolId;
        return $this;
    }

    /**
    * Gets resourcePoolName
    *  **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getResourcePoolName()
    {
        return $this->container['resourcePoolName'];
    }

    /**
    * Sets resourcePoolName
    *
    * @param string|null $resourcePoolName **参数解释：** 启用的资源池名称，使用内置执行机的情况下为空。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setResourcePoolName($resourcePoolName)
    {
        $this->container['resourcePoolName'] = $resourcePoolName;
        return $this;
    }

    /**
    * Gets resourcePoolType
    *  **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    *
    * @return string|null
    */
    public function getResourcePoolType()
    {
        return $this->container['resourcePoolType'];
    }

    /**
    * Sets resourcePoolType
    *
    * @param string|null $resourcePoolType **参数解释：** 启用的资源池类型。 **取值范围：** - default：使用内置资源池。 - exclusive：使用专属资源池。 - self-hosted：使用自定义资源池。
    *
    * @return $this
    */
    public function setResourcePoolType($resourcePoolType)
    {
        $this->container['resourcePoolType'] = $resourcePoolType;
        return $this;
    }

    /**
    * Gets reviewData
    *  **参数解释：** 任务门禁配置列表。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ReviewDataInfoResponse[]|null
    */
    public function getReviewData()
    {
        return $this->container['reviewData'];
    }

    /**
    * Sets reviewData
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ReviewDataInfoResponse[]|null $reviewData **参数解释：** 任务门禁配置列表。
    *
    * @return $this
    */
    public function setReviewData($reviewData)
    {
        $this->container['reviewData'] = $reviewData;
        return $this;
    }

    /**
    * Gets reviewDataJson
    *  **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getReviewDataJson()
    {
        return $this->container['reviewDataJson'];
    }

    /**
    * Sets reviewDataJson
    *
    * @param string|null $reviewDataJson **参数解释：** 任务门禁配置列表的json字符串。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setReviewDataJson($reviewDataJson)
    {
        $this->container['reviewDataJson'] = $reviewDataJson;
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

