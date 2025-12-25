<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryBuildVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryBuildVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  **参数解释**： 账号。 **取值范围**： 不涉及。
    * password  **参数解释**： 密码。 **取值范围**： 不涉及。
    * status  **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * createdUserId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * disable  **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * type  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * release  **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * npm  **参数解释**： npm。 **取值范围**： 不涉及。
    * snapshotStatus  **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    * releaseStatus  **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * repositoryIds  **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    * uri  **参数解释**： uri。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * repositories  **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    * parentRepoName  **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    * defaultDeployRepository  **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    * remoteType  **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    * proxy  **参数解释**： 代理。 **取值范围**： 不涉及。
    * allowAnonymous  **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    * autoCleanSnapshot  **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    * snapshotAliveDays  **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    * maxUniqueSnapshots  **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * nexuRepo  **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'password' => 'string',
            'status' => 'string',
            'domainId' => 'string',
            'region' => 'string',
            'createdTime' => 'string',
            'modifiedTime' => 'string',
            'createdUserId' => 'string',
            'createdUserName' => 'string',
            'modifiedUserId' => 'string',
            'modifiedUserName' => 'string',
            'name' => 'string',
            'disable' => 'bool',
            'format' => 'string',
            'type' => 'string',
            'policy' => 'string',
            'tabId' => 'string',
            'repositoryName' => 'string',
            'displayName' => 'string',
            'description' => 'string',
            'snapshot' => 'string',
            'release' => 'string',
            'npm' => 'string',
            'snapshotStatus' => 'string',
            'releaseStatus' => 'string',
            'projectId' => 'string',
            'includesPattern' => 'string',
            'repositoryIds' => 'string[]',
            'uri' => 'string',
            'deploymentPolicy' => 'string',
            'repositories' => 'string[]',
            'parentRepoName' => 'string',
            'userName' => 'string',
            'remoteUrl' => 'string',
            'defaultDeployRepository' => 'string',
            'remoteType' => 'string',
            'proxy' => 'string',
            'allowAnonymous' => 'bool',
            'autoCleanSnapshot' => 'bool',
            'snapshotAliveDays' => 'string',
            'maxUniqueSnapshots' => 'string',
            'shareRight' => 'string',
            'nexuRepo' => 'bool',
            'url' => 'string',
            'packageType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  **参数解释**： 账号。 **取值范围**： 不涉及。
    * password  **参数解释**： 密码。 **取值范围**： 不涉及。
    * status  **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * createdUserId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * disable  **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * type  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * release  **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * npm  **参数解释**： npm。 **取值范围**： 不涉及。
    * snapshotStatus  **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    * releaseStatus  **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * repositoryIds  **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    * uri  **参数解释**： uri。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * repositories  **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    * parentRepoName  **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    * defaultDeployRepository  **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    * remoteType  **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    * proxy  **参数解释**： 代理。 **取值范围**： 不涉及。
    * allowAnonymous  **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    * autoCleanSnapshot  **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    * snapshotAliveDays  **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    * maxUniqueSnapshots  **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * nexuRepo  **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'password' => null,
        'status' => null,
        'domainId' => null,
        'region' => null,
        'createdTime' => null,
        'modifiedTime' => null,
        'createdUserId' => null,
        'createdUserName' => null,
        'modifiedUserId' => null,
        'modifiedUserName' => null,
        'name' => null,
        'disable' => null,
        'format' => null,
        'type' => null,
        'policy' => null,
        'tabId' => null,
        'repositoryName' => null,
        'displayName' => null,
        'description' => null,
        'snapshot' => null,
        'release' => null,
        'npm' => null,
        'snapshotStatus' => null,
        'releaseStatus' => null,
        'projectId' => null,
        'includesPattern' => null,
        'repositoryIds' => null,
        'uri' => null,
        'deploymentPolicy' => null,
        'repositories' => null,
        'parentRepoName' => null,
        'userName' => null,
        'remoteUrl' => null,
        'defaultDeployRepository' => null,
        'remoteType' => null,
        'proxy' => null,
        'allowAnonymous' => null,
        'autoCleanSnapshot' => null,
        'snapshotAliveDays' => null,
        'maxUniqueSnapshots' => null,
        'shareRight' => null,
        'nexuRepo' => null,
        'url' => null,
        'packageType' => null
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
    * username  **参数解释**： 账号。 **取值范围**： 不涉及。
    * password  **参数解释**： 密码。 **取值范围**： 不涉及。
    * status  **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * createdUserId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * disable  **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * type  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * release  **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * npm  **参数解释**： npm。 **取值范围**： 不涉及。
    * snapshotStatus  **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    * releaseStatus  **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * repositoryIds  **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    * uri  **参数解释**： uri。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * repositories  **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    * parentRepoName  **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    * defaultDeployRepository  **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    * remoteType  **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    * proxy  **参数解释**： 代理。 **取值范围**： 不涉及。
    * allowAnonymous  **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    * autoCleanSnapshot  **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    * snapshotAliveDays  **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    * maxUniqueSnapshots  **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * nexuRepo  **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'username',
            'password' => 'password',
            'status' => 'status',
            'domainId' => 'domainId',
            'region' => 'region',
            'createdTime' => 'createdTime',
            'modifiedTime' => 'modifiedTime',
            'createdUserId' => 'createdUserId',
            'createdUserName' => 'createdUserName',
            'modifiedUserId' => 'modifiedUserId',
            'modifiedUserName' => 'modifiedUserName',
            'name' => 'name',
            'disable' => 'disable',
            'format' => 'format',
            'type' => 'type',
            'policy' => 'policy',
            'tabId' => 'tabId',
            'repositoryName' => 'repositoryName',
            'displayName' => 'displayName',
            'description' => 'description',
            'snapshot' => 'snapshot',
            'release' => 'release',
            'npm' => 'npm',
            'snapshotStatus' => 'snapshotStatus',
            'releaseStatus' => 'releaseStatus',
            'projectId' => 'projectId',
            'includesPattern' => 'includesPattern',
            'repositoryIds' => 'repositoryIds',
            'uri' => 'uri',
            'deploymentPolicy' => 'deploymentPolicy',
            'repositories' => 'repositories',
            'parentRepoName' => 'parentRepoName',
            'userName' => 'userName',
            'remoteUrl' => 'remoteUrl',
            'defaultDeployRepository' => 'defaultDeployRepository',
            'remoteType' => 'remoteType',
            'proxy' => 'proxy',
            'allowAnonymous' => 'allowAnonymous',
            'autoCleanSnapshot' => 'autoCleanSnapshot',
            'snapshotAliveDays' => 'snapshotAliveDays',
            'maxUniqueSnapshots' => 'maxUniqueSnapshots',
            'shareRight' => 'shareRight',
            'nexuRepo' => 'nexuRepo',
            'url' => 'url',
            'packageType' => 'packageType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  **参数解释**： 账号。 **取值范围**： 不涉及。
    * password  **参数解释**： 密码。 **取值范围**： 不涉及。
    * status  **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * createdUserId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * disable  **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * type  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * release  **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * npm  **参数解释**： npm。 **取值范围**： 不涉及。
    * snapshotStatus  **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    * releaseStatus  **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * repositoryIds  **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    * uri  **参数解释**： uri。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * repositories  **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    * parentRepoName  **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    * defaultDeployRepository  **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    * remoteType  **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    * proxy  **参数解释**： 代理。 **取值范围**： 不涉及。
    * allowAnonymous  **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    * autoCleanSnapshot  **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    * snapshotAliveDays  **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    * maxUniqueSnapshots  **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * nexuRepo  **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'password' => 'setPassword',
            'status' => 'setStatus',
            'domainId' => 'setDomainId',
            'region' => 'setRegion',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime',
            'createdUserId' => 'setCreatedUserId',
            'createdUserName' => 'setCreatedUserName',
            'modifiedUserId' => 'setModifiedUserId',
            'modifiedUserName' => 'setModifiedUserName',
            'name' => 'setName',
            'disable' => 'setDisable',
            'format' => 'setFormat',
            'type' => 'setType',
            'policy' => 'setPolicy',
            'tabId' => 'setTabId',
            'repositoryName' => 'setRepositoryName',
            'displayName' => 'setDisplayName',
            'description' => 'setDescription',
            'snapshot' => 'setSnapshot',
            'release' => 'setRelease',
            'npm' => 'setNpm',
            'snapshotStatus' => 'setSnapshotStatus',
            'releaseStatus' => 'setReleaseStatus',
            'projectId' => 'setProjectId',
            'includesPattern' => 'setIncludesPattern',
            'repositoryIds' => 'setRepositoryIds',
            'uri' => 'setUri',
            'deploymentPolicy' => 'setDeploymentPolicy',
            'repositories' => 'setRepositories',
            'parentRepoName' => 'setParentRepoName',
            'userName' => 'setUserName',
            'remoteUrl' => 'setRemoteUrl',
            'defaultDeployRepository' => 'setDefaultDeployRepository',
            'remoteType' => 'setRemoteType',
            'proxy' => 'setProxy',
            'allowAnonymous' => 'setAllowAnonymous',
            'autoCleanSnapshot' => 'setAutoCleanSnapshot',
            'snapshotAliveDays' => 'setSnapshotAliveDays',
            'maxUniqueSnapshots' => 'setMaxUniqueSnapshots',
            'shareRight' => 'setShareRight',
            'nexuRepo' => 'setNexuRepo',
            'url' => 'setUrl',
            'packageType' => 'setPackageType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  **参数解释**： 账号。 **取值范围**： 不涉及。
    * password  **参数解释**： 密码。 **取值范围**： 不涉及。
    * status  **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * createdUserId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * disable  **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * type  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * release  **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    * npm  **参数解释**： npm。 **取值范围**： 不涉及。
    * snapshotStatus  **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    * releaseStatus  **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * repositoryIds  **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    * uri  **参数解释**： uri。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * repositories  **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    * parentRepoName  **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    * defaultDeployRepository  **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    * remoteType  **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    * proxy  **参数解释**： 代理。 **取值范围**： 不涉及。
    * allowAnonymous  **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    * autoCleanSnapshot  **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    * snapshotAliveDays  **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    * maxUniqueSnapshots  **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * nexuRepo  **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'password' => 'getPassword',
            'status' => 'getStatus',
            'domainId' => 'getDomainId',
            'region' => 'getRegion',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime',
            'createdUserId' => 'getCreatedUserId',
            'createdUserName' => 'getCreatedUserName',
            'modifiedUserId' => 'getModifiedUserId',
            'modifiedUserName' => 'getModifiedUserName',
            'name' => 'getName',
            'disable' => 'getDisable',
            'format' => 'getFormat',
            'type' => 'getType',
            'policy' => 'getPolicy',
            'tabId' => 'getTabId',
            'repositoryName' => 'getRepositoryName',
            'displayName' => 'getDisplayName',
            'description' => 'getDescription',
            'snapshot' => 'getSnapshot',
            'release' => 'getRelease',
            'npm' => 'getNpm',
            'snapshotStatus' => 'getSnapshotStatus',
            'releaseStatus' => 'getReleaseStatus',
            'projectId' => 'getProjectId',
            'includesPattern' => 'getIncludesPattern',
            'repositoryIds' => 'getRepositoryIds',
            'uri' => 'getUri',
            'deploymentPolicy' => 'getDeploymentPolicy',
            'repositories' => 'getRepositories',
            'parentRepoName' => 'getParentRepoName',
            'userName' => 'getUserName',
            'remoteUrl' => 'getRemoteUrl',
            'defaultDeployRepository' => 'getDefaultDeployRepository',
            'remoteType' => 'getRemoteType',
            'proxy' => 'getProxy',
            'allowAnonymous' => 'getAllowAnonymous',
            'autoCleanSnapshot' => 'getAutoCleanSnapshot',
            'snapshotAliveDays' => 'getSnapshotAliveDays',
            'maxUniqueSnapshots' => 'getMaxUniqueSnapshots',
            'shareRight' => 'getShareRight',
            'nexuRepo' => 'getNexuRepo',
            'url' => 'getUrl',
            'packageType' => 'getPackageType'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['createdUserId'] = isset($data['createdUserId']) ? $data['createdUserId'] : null;
        $this->container['createdUserName'] = isset($data['createdUserName']) ? $data['createdUserName'] : null;
        $this->container['modifiedUserId'] = isset($data['modifiedUserId']) ? $data['modifiedUserId'] : null;
        $this->container['modifiedUserName'] = isset($data['modifiedUserName']) ? $data['modifiedUserName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['tabId'] = isset($data['tabId']) ? $data['tabId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['snapshot'] = isset($data['snapshot']) ? $data['snapshot'] : null;
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
        $this->container['npm'] = isset($data['npm']) ? $data['npm'] : null;
        $this->container['snapshotStatus'] = isset($data['snapshotStatus']) ? $data['snapshotStatus'] : null;
        $this->container['releaseStatus'] = isset($data['releaseStatus']) ? $data['releaseStatus'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['repositoryIds'] = isset($data['repositoryIds']) ? $data['repositoryIds'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['deploymentPolicy'] = isset($data['deploymentPolicy']) ? $data['deploymentPolicy'] : null;
        $this->container['repositories'] = isset($data['repositories']) ? $data['repositories'] : null;
        $this->container['parentRepoName'] = isset($data['parentRepoName']) ? $data['parentRepoName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['remoteUrl'] = isset($data['remoteUrl']) ? $data['remoteUrl'] : null;
        $this->container['defaultDeployRepository'] = isset($data['defaultDeployRepository']) ? $data['defaultDeployRepository'] : null;
        $this->container['remoteType'] = isset($data['remoteType']) ? $data['remoteType'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['allowAnonymous'] = isset($data['allowAnonymous']) ? $data['allowAnonymous'] : null;
        $this->container['autoCleanSnapshot'] = isset($data['autoCleanSnapshot']) ? $data['autoCleanSnapshot'] : null;
        $this->container['snapshotAliveDays'] = isset($data['snapshotAliveDays']) ? $data['snapshotAliveDays'] : null;
        $this->container['maxUniqueSnapshots'] = isset($data['maxUniqueSnapshots']) ? $data['maxUniqueSnapshots'] : null;
        $this->container['shareRight'] = isset($data['shareRight']) ? $data['shareRight'] : null;
        $this->container['nexuRepo'] = isset($data['nexuRepo']) ? $data['nexuRepo'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
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
    * Gets username
    *  **参数解释**： 账号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释**： 账号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释**： 密码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password **参数解释**： 密码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 仓库状态。 **取值范围**： - active：正常。 - delete：删除。 - disabled：无效。 - view：可浏览。 - trash：废弃。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户ID。 **取值范围**： 不涉及。
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
    * @param string|null $domainId **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 区域。 **取值范围**： 不涉及。
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
    * @param string|null $region **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime **参数解释**： 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets createdUserId
    *  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedUserId()
    {
        return $this->container['createdUserId'];
    }

    /**
    * Sets createdUserId
    *
    * @param string|null $createdUserId **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedUserId($createdUserId)
    {
        $this->container['createdUserId'] = $createdUserId;
        return $this;
    }

    /**
    * Gets createdUserName
    *  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedUserName()
    {
        return $this->container['createdUserName'];
    }

    /**
    * Sets createdUserName
    *
    * @param string|null $createdUserName **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedUserName($createdUserName)
    {
        $this->container['createdUserName'] = $createdUserName;
        return $this;
    }

    /**
    * Gets modifiedUserId
    *  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedUserId()
    {
        return $this->container['modifiedUserId'];
    }

    /**
    * Sets modifiedUserId
    *
    * @param string|null $modifiedUserId **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->container['modifiedUserId'] = $modifiedUserId;
        return $this;
    }

    /**
    * Gets modifiedUserName
    *  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedUserName()
    {
        return $this->container['modifiedUserName'];
    }

    /**
    * Sets modifiedUserName
    *
    * @param string|null $modifiedUserName **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserName($modifiedUserName)
    {
        $this->container['modifiedUserName'] = $modifiedUserName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets disable
    *  **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
    * Sets disable
    *
    * @param bool|null $disable **参数解释**： 是否禁用。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets format
    *  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
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
    * @param string|null $type **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets policy
    *  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets tabId
    *  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTabId()
    {
        return $this->container['tabId'];
    }

    /**
    * Sets tabId
    *
    * @param string|null $tabId **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTabId($tabId)
    {
        $this->container['tabId'] = $tabId;
        return $this;
    }

    /**
    * Gets repositoryName
    *  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets snapshot
    *  **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSnapshot()
    {
        return $this->container['snapshot'];
    }

    /**
    * Sets snapshot
    *
    * @param string|null $snapshot **参数解释**： snapshot仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;
        return $this;
    }

    /**
    * Gets release
    *  **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
    * Sets release
    *
    * @param string|null $release **参数解释**： release仓库名称,release和snapshot至少二选一。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelease($release)
    {
        $this->container['release'] = $release;
        return $this;
    }

    /**
    * Gets npm
    *  **参数解释**： npm。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNpm()
    {
        return $this->container['npm'];
    }

    /**
    * Sets npm
    *
    * @param string|null $npm **参数解释**： npm。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNpm($npm)
    {
        $this->container['npm'] = $npm;
        return $this;
    }

    /**
    * Gets snapshotStatus
    *  **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSnapshotStatus()
    {
        return $this->container['snapshotStatus'];
    }

    /**
    * Sets snapshotStatus
    *
    * @param string|null $snapshotStatus **参数解释**： 快照仓库状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSnapshotStatus($snapshotStatus)
    {
        $this->container['snapshotStatus'] = $snapshotStatus;
        return $this;
    }

    /**
    * Gets releaseStatus
    *  **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getReleaseStatus()
    {
        return $this->container['releaseStatus'];
    }

    /**
    * Sets releaseStatus
    *
    * @param string|null $releaseStatus **参数解释**： 正式仓库状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReleaseStatus($releaseStatus)
    {
        $this->container['releaseStatus'] = $releaseStatus;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目id。 **取值范围**： 不涉及。
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
    * @param string|null $projectId **参数解释**： 项目id。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets includesPattern
    *  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIncludesPattern()
    {
        return $this->container['includesPattern'];
    }

    /**
    * Sets includesPattern
    *
    * @param string|null $includesPattern **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIncludesPattern($includesPattern)
    {
        $this->container['includesPattern'] = $includesPattern;
        return $this;
    }

    /**
    * Gets repositoryIds
    *  **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getRepositoryIds()
    {
        return $this->container['repositoryIds'];
    }

    /**
    * Sets repositoryIds
    *
    * @param string[]|null $repositoryIds **参数解释**： 仓库ID列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositoryIds($repositoryIds)
    {
        $this->container['repositoryIds'] = $repositoryIds;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**： uri。 **取值范围**： 不涉及。
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
    * @param string|null $uri **参数解释**： uri。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets deploymentPolicy
    *  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDeploymentPolicy()
    {
        return $this->container['deploymentPolicy'];
    }

    /**
    * Sets deploymentPolicy
    *
    * @param string|null $deploymentPolicy **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDeploymentPolicy($deploymentPolicy)
    {
        $this->container['deploymentPolicy'] = $deploymentPolicy;
        return $this;
    }

    /**
    * Gets repositories
    *  **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getRepositories()
    {
        return $this->container['repositories'];
    }

    /**
    * Sets repositories
    *
    * @param string[]|null $repositories **参数解释**： 仓库列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositories($repositories)
    {
        $this->container['repositories'] = $repositories;
        return $this;
    }

    /**
    * Gets parentRepoName
    *  **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getParentRepoName()
    {
        return $this->container['parentRepoName'];
    }

    /**
    * Sets parentRepoName
    *
    * @param string|null $parentRepoName **参数解释**： 父仓库名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setParentRepoName($parentRepoName)
    {
        $this->container['parentRepoName'] = $parentRepoName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets remoteUrl
    *  **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRemoteUrl()
    {
        return $this->container['remoteUrl'];
    }

    /**
    * Sets remoteUrl
    *
    * @param string|null $remoteUrl **参数解释**： 代理仓地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRemoteUrl($remoteUrl)
    {
        $this->container['remoteUrl'] = $remoteUrl;
        return $this;
    }

    /**
    * Gets defaultDeployRepository
    *  **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDefaultDeployRepository()
    {
        return $this->container['defaultDeployRepository'];
    }

    /**
    * Sets defaultDeployRepository
    *
    * @param string|null $defaultDeployRepository **参数解释**： 默认仓库。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefaultDeployRepository($defaultDeployRepository)
    {
        $this->container['defaultDeployRepository'] = $defaultDeployRepository;
        return $this;
    }

    /**
    * Gets remoteType
    *  **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    *
    * @return string|null
    */
    public function getRemoteType()
    {
        return $this->container['remoteType'];
    }

    /**
    * Sets remoteType
    *
    * @param string|null $remoteType **参数解释**： 代理仓类型。 **取值范围**： - public：公共代理仓； - customize：用户自定义代理仓。
    *
    * @return $this
    */
    public function setRemoteType($remoteType)
    {
        $this->container['remoteType'] = $remoteType;
        return $this;
    }

    /**
    * Gets proxy
    *  **参数解释**： 代理。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param string|null $proxy **参数解释**： 代理。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets allowAnonymous
    *  **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getAllowAnonymous()
    {
        return $this->container['allowAnonymous'];
    }

    /**
    * Sets allowAnonymous
    *
    * @param bool|null $allowAnonymous **参数解释**： 是否允许匿名下载。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAllowAnonymous($allowAnonymous)
    {
        $this->container['allowAnonymous'] = $allowAnonymous;
        return $this;
    }

    /**
    * Gets autoCleanSnapshot
    *  **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getAutoCleanSnapshot()
    {
        return $this->container['autoCleanSnapshot'];
    }

    /**
    * Sets autoCleanSnapshot
    *
    * @param bool|null $autoCleanSnapshot **参数解释**： 是否自动清理快照版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAutoCleanSnapshot($autoCleanSnapshot)
    {
        $this->container['autoCleanSnapshot'] = $autoCleanSnapshot;
        return $this;
    }

    /**
    * Gets snapshotAliveDays
    *  **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSnapshotAliveDays()
    {
        return $this->container['snapshotAliveDays'];
    }

    /**
    * Sets snapshotAliveDays
    *
    * @param string|null $snapshotAliveDays **参数解释**： 快照版本有效期，单位：天。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSnapshotAliveDays($snapshotAliveDays)
    {
        $this->container['snapshotAliveDays'] = $snapshotAliveDays;
        return $this;
    }

    /**
    * Gets maxUniqueSnapshots
    *  **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxUniqueSnapshots()
    {
        return $this->container['maxUniqueSnapshots'];
    }

    /**
    * Sets maxUniqueSnapshots
    *
    * @param string|null $maxUniqueSnapshots **参数解释**： 最大快照数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxUniqueSnapshots($maxUniqueSnapshots)
    {
        $this->container['maxUniqueSnapshots'] = $maxUniqueSnapshots;
        return $this;
    }

    /**
    * Gets shareRight
    *  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    *
    * @return string|null
    */
    public function getShareRight()
    {
        return $this->container['shareRight'];
    }

    /**
    * Sets shareRight
    *
    * @param string|null $shareRight **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    *
    * @return $this
    */
    public function setShareRight($shareRight)
    {
        $this->container['shareRight'] = $shareRight;
        return $this;
    }

    /**
    * Gets nexuRepo
    *  **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getNexuRepo()
    {
        return $this->container['nexuRepo'];
    }

    /**
    * Sets nexuRepo
    *
    * @param bool|null $nexuRepo **参数解释**： 是否nexus仓库。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNexuRepo($nexuRepo)
    {
        $this->container['nexuRepo'] = $nexuRepo;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets packageType
    *  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
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

