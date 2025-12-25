<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryDOV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryDOV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * repositoryName  **参数解释**: 仓库名称。 **取值范围**: 不涉及。
    * format  **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
    * type  **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
    * description  **参数解释**: 仓库描述。 **取值范围**: 不涉及。
    * release  **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * snapshot  **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * includesPattern  **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
    * excludesPattern  **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    * shareRight  **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * disable  **参数解释**: 是否禁用。 **取值范围**: 不涉及。
    * policy  **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
    * npm  **参数解释**: npm。 **取值范围**: 不涉及。
    * uri  **参数解释**: uri。 **取值范围**: 不涉及。
    * repositories  **参数解释**: repositories。 **取值范围**: 不涉及。
    * userName  **参数解释**: 账号。 **取值范围**: 不涉及。
    * password  **参数解释**: 密码。 **取值范围**: 不涉及。
    * proxy  **参数解释**: 代理。 **取值范围**: 不涉及。
    * scope  **参数解释**: 范围。 **取值范围**: 不涉及。
    * url  **参数解释**: 地址。 **取值范围**: 不涉及。
    * tabId  **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
    * snapshotStatus  **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
    * releaseStatus  **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
    * repositoryIds  **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
    * parentRepoName  **参数解释**: 父仓库名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
    * remoteAuth  **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    * pypiRegistryUrl  **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    * defaultDeployRepository  **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 制品类型。 **取值范围**: 不涉及。
    * nexuRepo  **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
    * migrateFlag  **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'domainId' => 'string',
            'region' => 'string',
            'createdTime' => 'string',
            'modifiedTime' => 'string',
            'createdUserId' => 'string',
            'createdUserName' => 'string',
            'modifiedUserId' => 'string',
            'modifiedUserName' => 'string',
            'repositoryName' => 'string',
            'format' => 'string',
            'type' => 'string',
            'description' => 'string',
            'release' => 'string',
            'snapshot' => 'string',
            'includesPattern' => 'string',
            'excludesPattern' => 'string',
            'shareRight' => 'string',
            'projectId' => 'string',
            'name' => 'string',
            'disable' => 'bool',
            'policy' => 'string',
            'npm' => 'string',
            'uri' => 'string',
            'repositories' => 'string',
            'userName' => 'string',
            'password' => 'string',
            'proxy' => 'string',
            'scope' => 'int',
            'url' => 'string',
            'tabId' => 'string',
            'displayName' => 'string',
            'snapshotStatus' => 'string',
            'releaseStatus' => 'string',
            'repositoryIds' => 'string',
            'deploymentPolicy' => 'string',
            'parentRepoName' => 'string',
            'remoteUrl' => 'string',
            'remoteAuth' => 'string',
            'pypiRegistryUrl' => 'string',
            'defaultDeployRepository' => 'string',
            'packageType' => 'string',
            'nexuRepo' => 'bool',
            'migrateFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * repositoryName  **参数解释**: 仓库名称。 **取值范围**: 不涉及。
    * format  **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
    * type  **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
    * description  **参数解释**: 仓库描述。 **取值范围**: 不涉及。
    * release  **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * snapshot  **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * includesPattern  **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
    * excludesPattern  **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    * shareRight  **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * disable  **参数解释**: 是否禁用。 **取值范围**: 不涉及。
    * policy  **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
    * npm  **参数解释**: npm。 **取值范围**: 不涉及。
    * uri  **参数解释**: uri。 **取值范围**: 不涉及。
    * repositories  **参数解释**: repositories。 **取值范围**: 不涉及。
    * userName  **参数解释**: 账号。 **取值范围**: 不涉及。
    * password  **参数解释**: 密码。 **取值范围**: 不涉及。
    * proxy  **参数解释**: 代理。 **取值范围**: 不涉及。
    * scope  **参数解释**: 范围。 **取值范围**: 不涉及。
    * url  **参数解释**: 地址。 **取值范围**: 不涉及。
    * tabId  **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
    * snapshotStatus  **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
    * releaseStatus  **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
    * repositoryIds  **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
    * parentRepoName  **参数解释**: 父仓库名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
    * remoteAuth  **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    * pypiRegistryUrl  **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    * defaultDeployRepository  **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 制品类型。 **取值范围**: 不涉及。
    * nexuRepo  **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
    * migrateFlag  **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'domainId' => null,
        'region' => null,
        'createdTime' => null,
        'modifiedTime' => null,
        'createdUserId' => null,
        'createdUserName' => null,
        'modifiedUserId' => null,
        'modifiedUserName' => null,
        'repositoryName' => null,
        'format' => null,
        'type' => null,
        'description' => null,
        'release' => null,
        'snapshot' => null,
        'includesPattern' => null,
        'excludesPattern' => null,
        'shareRight' => null,
        'projectId' => null,
        'name' => null,
        'disable' => null,
        'policy' => null,
        'npm' => null,
        'uri' => null,
        'repositories' => null,
        'userName' => null,
        'password' => null,
        'proxy' => null,
        'scope' => 'int32',
        'url' => null,
        'tabId' => null,
        'displayName' => null,
        'snapshotStatus' => null,
        'releaseStatus' => null,
        'repositoryIds' => null,
        'deploymentPolicy' => null,
        'parentRepoName' => null,
        'remoteUrl' => null,
        'remoteAuth' => null,
        'pypiRegistryUrl' => null,
        'defaultDeployRepository' => null,
        'packageType' => null,
        'nexuRepo' => null,
        'migrateFlag' => 'int32'
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
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * repositoryName  **参数解释**: 仓库名称。 **取值范围**: 不涉及。
    * format  **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
    * type  **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
    * description  **参数解释**: 仓库描述。 **取值范围**: 不涉及。
    * release  **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * snapshot  **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * includesPattern  **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
    * excludesPattern  **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    * shareRight  **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * disable  **参数解释**: 是否禁用。 **取值范围**: 不涉及。
    * policy  **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
    * npm  **参数解释**: npm。 **取值范围**: 不涉及。
    * uri  **参数解释**: uri。 **取值范围**: 不涉及。
    * repositories  **参数解释**: repositories。 **取值范围**: 不涉及。
    * userName  **参数解释**: 账号。 **取值范围**: 不涉及。
    * password  **参数解释**: 密码。 **取值范围**: 不涉及。
    * proxy  **参数解释**: 代理。 **取值范围**: 不涉及。
    * scope  **参数解释**: 范围。 **取值范围**: 不涉及。
    * url  **参数解释**: 地址。 **取值范围**: 不涉及。
    * tabId  **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
    * snapshotStatus  **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
    * releaseStatus  **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
    * repositoryIds  **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
    * parentRepoName  **参数解释**: 父仓库名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
    * remoteAuth  **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    * pypiRegistryUrl  **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    * defaultDeployRepository  **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 制品类型。 **取值范围**: 不涉及。
    * nexuRepo  **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
    * migrateFlag  **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'domainId' => 'domain_id',
            'region' => 'region',
            'createdTime' => 'created_time',
            'modifiedTime' => 'modified_time',
            'createdUserId' => 'created_user_id',
            'createdUserName' => 'created_user_name',
            'modifiedUserId' => 'modified_user_id',
            'modifiedUserName' => 'modified_user_name',
            'repositoryName' => 'repository_name',
            'format' => 'format',
            'type' => 'type',
            'description' => 'description',
            'release' => 'release',
            'snapshot' => 'snapshot',
            'includesPattern' => 'includes_pattern',
            'excludesPattern' => 'excludes_pattern',
            'shareRight' => 'share_right',
            'projectId' => 'project_id',
            'name' => 'name',
            'disable' => 'disable',
            'policy' => 'policy',
            'npm' => 'npm',
            'uri' => 'uri',
            'repositories' => 'repositories',
            'userName' => 'user_name',
            'password' => 'password',
            'proxy' => 'proxy',
            'scope' => 'scope',
            'url' => 'url',
            'tabId' => 'tab_id',
            'displayName' => 'display_name',
            'snapshotStatus' => 'snapshot_status',
            'releaseStatus' => 'release_status',
            'repositoryIds' => 'repository_ids',
            'deploymentPolicy' => 'deployment_policy',
            'parentRepoName' => 'parent_repo_name',
            'remoteUrl' => 'remote_url',
            'remoteAuth' => 'remote_auth',
            'pypiRegistryUrl' => 'pypi_registry_url',
            'defaultDeployRepository' => 'default_deploy_repository',
            'packageType' => 'package_type',
            'nexuRepo' => 'nexu_repo',
            'migrateFlag' => 'migrate_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * repositoryName  **参数解释**: 仓库名称。 **取值范围**: 不涉及。
    * format  **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
    * type  **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
    * description  **参数解释**: 仓库描述。 **取值范围**: 不涉及。
    * release  **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * snapshot  **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * includesPattern  **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
    * excludesPattern  **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    * shareRight  **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * disable  **参数解释**: 是否禁用。 **取值范围**: 不涉及。
    * policy  **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
    * npm  **参数解释**: npm。 **取值范围**: 不涉及。
    * uri  **参数解释**: uri。 **取值范围**: 不涉及。
    * repositories  **参数解释**: repositories。 **取值范围**: 不涉及。
    * userName  **参数解释**: 账号。 **取值范围**: 不涉及。
    * password  **参数解释**: 密码。 **取值范围**: 不涉及。
    * proxy  **参数解释**: 代理。 **取值范围**: 不涉及。
    * scope  **参数解释**: 范围。 **取值范围**: 不涉及。
    * url  **参数解释**: 地址。 **取值范围**: 不涉及。
    * tabId  **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
    * snapshotStatus  **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
    * releaseStatus  **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
    * repositoryIds  **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
    * parentRepoName  **参数解释**: 父仓库名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
    * remoteAuth  **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    * pypiRegistryUrl  **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    * defaultDeployRepository  **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 制品类型。 **取值范围**: 不涉及。
    * nexuRepo  **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
    * migrateFlag  **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'domainId' => 'setDomainId',
            'region' => 'setRegion',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime',
            'createdUserId' => 'setCreatedUserId',
            'createdUserName' => 'setCreatedUserName',
            'modifiedUserId' => 'setModifiedUserId',
            'modifiedUserName' => 'setModifiedUserName',
            'repositoryName' => 'setRepositoryName',
            'format' => 'setFormat',
            'type' => 'setType',
            'description' => 'setDescription',
            'release' => 'setRelease',
            'snapshot' => 'setSnapshot',
            'includesPattern' => 'setIncludesPattern',
            'excludesPattern' => 'setExcludesPattern',
            'shareRight' => 'setShareRight',
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'disable' => 'setDisable',
            'policy' => 'setPolicy',
            'npm' => 'setNpm',
            'uri' => 'setUri',
            'repositories' => 'setRepositories',
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'proxy' => 'setProxy',
            'scope' => 'setScope',
            'url' => 'setUrl',
            'tabId' => 'setTabId',
            'displayName' => 'setDisplayName',
            'snapshotStatus' => 'setSnapshotStatus',
            'releaseStatus' => 'setReleaseStatus',
            'repositoryIds' => 'setRepositoryIds',
            'deploymentPolicy' => 'setDeploymentPolicy',
            'parentRepoName' => 'setParentRepoName',
            'remoteUrl' => 'setRemoteUrl',
            'remoteAuth' => 'setRemoteAuth',
            'pypiRegistryUrl' => 'setPypiRegistryUrl',
            'defaultDeployRepository' => 'setDefaultDeployRepository',
            'packageType' => 'setPackageType',
            'nexuRepo' => 'setNexuRepo',
            'migrateFlag' => 'setMigrateFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * repositoryName  **参数解释**: 仓库名称。 **取值范围**: 不涉及。
    * format  **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
    * type  **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
    * description  **参数解释**: 仓库描述。 **取值范围**: 不涉及。
    * release  **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * snapshot  **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    * includesPattern  **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
    * excludesPattern  **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    * shareRight  **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
    * projectId  **参数解释**: 项目ID。 **取值范围**: 不涉及。
    * name  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * disable  **参数解释**: 是否禁用。 **取值范围**: 不涉及。
    * policy  **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
    * npm  **参数解释**: npm。 **取值范围**: 不涉及。
    * uri  **参数解释**: uri。 **取值范围**: 不涉及。
    * repositories  **参数解释**: repositories。 **取值范围**: 不涉及。
    * userName  **参数解释**: 账号。 **取值范围**: 不涉及。
    * password  **参数解释**: 密码。 **取值范围**: 不涉及。
    * proxy  **参数解释**: 代理。 **取值范围**: 不涉及。
    * scope  **参数解释**: 范围。 **取值范围**: 不涉及。
    * url  **参数解释**: 地址。 **取值范围**: 不涉及。
    * tabId  **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
    * snapshotStatus  **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
    * releaseStatus  **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
    * repositoryIds  **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
    * parentRepoName  **参数解释**: 父仓库名。 **取值范围**: 不涉及。
    * remoteUrl  **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
    * remoteAuth  **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    * pypiRegistryUrl  **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    * defaultDeployRepository  **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 制品类型。 **取值范围**: 不涉及。
    * nexuRepo  **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
    * migrateFlag  **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'domainId' => 'getDomainId',
            'region' => 'getRegion',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime',
            'createdUserId' => 'getCreatedUserId',
            'createdUserName' => 'getCreatedUserName',
            'modifiedUserId' => 'getModifiedUserId',
            'modifiedUserName' => 'getModifiedUserName',
            'repositoryName' => 'getRepositoryName',
            'format' => 'getFormat',
            'type' => 'getType',
            'description' => 'getDescription',
            'release' => 'getRelease',
            'snapshot' => 'getSnapshot',
            'includesPattern' => 'getIncludesPattern',
            'excludesPattern' => 'getExcludesPattern',
            'shareRight' => 'getShareRight',
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'disable' => 'getDisable',
            'policy' => 'getPolicy',
            'npm' => 'getNpm',
            'uri' => 'getUri',
            'repositories' => 'getRepositories',
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'proxy' => 'getProxy',
            'scope' => 'getScope',
            'url' => 'getUrl',
            'tabId' => 'getTabId',
            'displayName' => 'getDisplayName',
            'snapshotStatus' => 'getSnapshotStatus',
            'releaseStatus' => 'getReleaseStatus',
            'repositoryIds' => 'getRepositoryIds',
            'deploymentPolicy' => 'getDeploymentPolicy',
            'parentRepoName' => 'getParentRepoName',
            'remoteUrl' => 'getRemoteUrl',
            'remoteAuth' => 'getRemoteAuth',
            'pypiRegistryUrl' => 'getPypiRegistryUrl',
            'defaultDeployRepository' => 'getDefaultDeployRepository',
            'packageType' => 'getPackageType',
            'nexuRepo' => 'getNexuRepo',
            'migrateFlag' => 'getMigrateFlag'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['createdUserId'] = isset($data['createdUserId']) ? $data['createdUserId'] : null;
        $this->container['createdUserName'] = isset($data['createdUserName']) ? $data['createdUserName'] : null;
        $this->container['modifiedUserId'] = isset($data['modifiedUserId']) ? $data['modifiedUserId'] : null;
        $this->container['modifiedUserName'] = isset($data['modifiedUserName']) ? $data['modifiedUserName'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
        $this->container['snapshot'] = isset($data['snapshot']) ? $data['snapshot'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['excludesPattern'] = isset($data['excludesPattern']) ? $data['excludesPattern'] : null;
        $this->container['shareRight'] = isset($data['shareRight']) ? $data['shareRight'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['npm'] = isset($data['npm']) ? $data['npm'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['repositories'] = isset($data['repositories']) ? $data['repositories'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['tabId'] = isset($data['tabId']) ? $data['tabId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['snapshotStatus'] = isset($data['snapshotStatus']) ? $data['snapshotStatus'] : null;
        $this->container['releaseStatus'] = isset($data['releaseStatus']) ? $data['releaseStatus'] : null;
        $this->container['repositoryIds'] = isset($data['repositoryIds']) ? $data['repositoryIds'] : null;
        $this->container['deploymentPolicy'] = isset($data['deploymentPolicy']) ? $data['deploymentPolicy'] : null;
        $this->container['parentRepoName'] = isset($data['parentRepoName']) ? $data['parentRepoName'] : null;
        $this->container['remoteUrl'] = isset($data['remoteUrl']) ? $data['remoteUrl'] : null;
        $this->container['remoteAuth'] = isset($data['remoteAuth']) ? $data['remoteAuth'] : null;
        $this->container['pypiRegistryUrl'] = isset($data['pypiRegistryUrl']) ? $data['pypiRegistryUrl'] : null;
        $this->container['defaultDeployRepository'] = isset($data['defaultDeployRepository']) ? $data['defaultDeployRepository'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['nexuRepo'] = isset($data['nexuRepo']) ? $data['nexuRepo'] : null;
        $this->container['migrateFlag'] = isset($data['migrateFlag']) ? $data['migrateFlag'] : null;
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
    * Gets status
    *  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
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
    * @param string|null $status **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
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
    *  **参数解释**: 租户id。 **取值范围**: 不涉及。
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
    * @param string|null $domainId **参数解释**: 租户id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 区域。 **取值范围**: 不涉及。
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
    * @param string|null $region **参数解释**: 区域。 **取值范围**: 不涉及。
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
    *  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
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
    * @param string|null $createdTime **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
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
    *  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
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
    * @param string|null $modifiedTime **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
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
    *  **参数解释**: 创建人id。 **取值范围**: 不涉及。
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
    * @param string|null $createdUserId **参数解释**: 创建人id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 创建人。 **取值范围**: 不涉及。
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
    * @param string|null $createdUserName **参数解释**: 创建人。 **取值范围**: 不涉及。
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
    *  **参数解释**: 修改人id。 **取值范围**: 不涉及。
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
    * @param string|null $modifiedUserId **参数解释**: 修改人id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 修改人。 **取值范围**: 不涉及。
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
    * @param string|null $modifiedUserName **参数解释**: 修改人。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserName($modifiedUserName)
    {
        $this->container['modifiedUserName'] = $modifiedUserName;
        return $this;
    }

    /**
    * Gets repositoryName
    *  **参数解释**: 仓库名称。 **取值范围**: 不涉及。
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
    * @param string|null $repositoryName **参数解释**: 仓库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets format
    *  **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
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
    * @param string|null $format **参数解释**: 制品类型。 **取值范围**: - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda
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
    *  **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
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
    * @param string|null $type **参数解释**: 仓库类型。 **取值范围**: hosted：本地仓库。 remote：代理仓库。 virtual：聚合仓库。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 仓库描述。 **取值范围**: 不涉及。
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
    * @param string|null $description **参数解释**: 仓库描述。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets release
    *  **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
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
    * @param string|null $release **参数解释**: release仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRelease($release)
    {
        $this->container['release'] = $release;
        return $this;
    }

    /**
    * Gets snapshot
    *  **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
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
    * @param string|null $snapshot **参数解释**: snapshot仓库名称,release和snapshot至少二选一。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;
        return $this;
    }

    /**
    * Gets includesPattern
    *  **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
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
    * @param string|null $includesPattern **参数解释**: 路径包含规则。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIncludesPattern($includesPattern)
    {
        $this->container['includesPattern'] = $includesPattern;
        return $this;
    }

    /**
    * Gets excludesPattern
    *  **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getExcludesPattern()
    {
        return $this->container['excludesPattern'];
    }

    /**
    * Sets excludesPattern
    *
    * @param string|null $excludesPattern **参数解释**: 路径排除规则。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExcludesPattern($excludesPattern)
    {
        $this->container['excludesPattern'] = $excludesPattern;
        return $this;
    }

    /**
    * Gets shareRight
    *  **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
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
    * @param string|null $shareRight **参数解释**: 共享权限级别。 **取值范围**: PROJECT。
    *
    * @return $this
    */
    public function setShareRight($shareRight)
    {
        $this->container['shareRight'] = $shareRight;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**: 项目ID。 **取值范围**: 不涉及。
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
    * @param string|null $projectId **参数解释**: 项目ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 仓库id。 **取值范围**: 不涉及。
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
    * @param string|null $name **参数解释**: 仓库id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 是否禁用。 **取值范围**: 不涉及。
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
    * @param bool|null $disable **参数解释**: 是否禁用。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets policy
    *  **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
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
    * @param string|null $policy **参数解释**: 仓库策略。 **取值范围**: release或snapshot。
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets npm
    *  **参数解释**: npm。 **取值范围**: 不涉及。
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
    * @param string|null $npm **参数解释**: npm。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNpm($npm)
    {
        $this->container['npm'] = $npm;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**: uri。 **取值范围**: 不涉及。
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
    * @param string|null $uri **参数解释**: uri。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets repositories
    *  **参数解释**: repositories。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRepositories()
    {
        return $this->container['repositories'];
    }

    /**
    * Sets repositories
    *
    * @param string|null $repositories **参数解释**: repositories。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepositories($repositories)
    {
        $this->container['repositories'] = $repositories;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 账号。 **取值范围**: 不涉及。
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
    * @param string|null $userName **参数解释**: 账号。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释**: 密码。 **取值范围**: 不涉及。
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
    * @param string|null $password **参数解释**: 密码。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets proxy
    *  **参数解释**: 代理。 **取值范围**: 不涉及。
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
    * @param string|null $proxy **参数解释**: 代理。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**: 范围。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param int|null $scope **参数解释**: 范围。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**: 地址。 **取值范围**: 不涉及。
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
    * @param string|null $url **参数解释**: 地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets tabId
    *  **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
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
    * @param string|null $tabId **参数解释**: 用于标记一对maven仓库(release、snapshot)，相同的tab_id即为一对maven仓库。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTabId($tabId)
    {
        $this->container['tabId'] = $tabId;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
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
    * @param string|null $displayName **参数解释**: 展示的仓库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets snapshotStatus
    *  **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
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
    * @param string|null $snapshotStatus **参数解释**: 快照仓状态。 **取值范围**: 不涉及。
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
    *  **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
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
    * @param string|null $releaseStatus **参数解释**: 发布仓状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setReleaseStatus($releaseStatus)
    {
        $this->container['releaseStatus'] = $releaseStatus;
        return $this;
    }

    /**
    * Gets repositoryIds
    *  **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryIds()
    {
        return $this->container['repositoryIds'];
    }

    /**
    * Sets repositoryIds
    *
    * @param string|null $repositoryIds **参数解释**: 仓库id列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepositoryIds($repositoryIds)
    {
        $this->container['repositoryIds'] = $repositoryIds;
        return $this;
    }

    /**
    * Gets deploymentPolicy
    *  **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
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
    * @param string|null $deploymentPolicy **参数解释**: 覆盖策略。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDeploymentPolicy($deploymentPolicy)
    {
        $this->container['deploymentPolicy'] = $deploymentPolicy;
        return $this;
    }

    /**
    * Gets parentRepoName
    *  **参数解释**: 父仓库名。 **取值范围**: 不涉及。
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
    * @param string|null $parentRepoName **参数解释**: 父仓库名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setParentRepoName($parentRepoName)
    {
        $this->container['parentRepoName'] = $parentRepoName;
        return $this;
    }

    /**
    * Gets remoteUrl
    *  **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
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
    * @param string|null $remoteUrl **参数解释**: 代理仓地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRemoteUrl($remoteUrl)
    {
        $this->container['remoteUrl'] = $remoteUrl;
        return $this;
    }

    /**
    * Gets remoteAuth
    *  **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRemoteAuth()
    {
        return $this->container['remoteAuth'];
    }

    /**
    * Sets remoteAuth
    *
    * @param string|null $remoteAuth **参数解释**: 代理仓认证。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRemoteAuth($remoteAuth)
    {
        $this->container['remoteAuth'] = $remoteAuth;
        return $this;
    }

    /**
    * Gets pypiRegistryUrl
    *  **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPypiRegistryUrl()
    {
        return $this->container['pypiRegistryUrl'];
    }

    /**
    * Sets pypiRegistryUrl
    *
    * @param string|null $pypiRegistryUrl **参数解释**: pypi索引代理地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPypiRegistryUrl($pypiRegistryUrl)
    {
        $this->container['pypiRegistryUrl'] = $pypiRegistryUrl;
        return $this;
    }

    /**
    * Gets defaultDeployRepository
    *  **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
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
    * @param string|null $defaultDeployRepository **参数解释**: 虚仓的默认仓库。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDefaultDeployRepository($defaultDeployRepository)
    {
        $this->container['defaultDeployRepository'] = $defaultDeployRepository;
        return $this;
    }

    /**
    * Gets packageType
    *  **参数解释**: 制品类型。 **取值范围**: 不涉及。
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
    * @param string|null $packageType **参数解释**: 制品类型。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets nexuRepo
    *  **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
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
    * @param bool|null $nexuRepo **参数解释**: 是否nexu仓库。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNexuRepo($nexuRepo)
    {
        $this->container['nexuRepo'] = $nexuRepo;
        return $this;
    }

    /**
    * Gets migrateFlag
    *  **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMigrateFlag()
    {
        return $this->container['migrateFlag'];
    }

    /**
    * Sets migrateFlag
    *
    * @param int|null $migrateFlag **参数解释**: 迁移标识。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMigrateFlag($migrateFlag)
    {
        $this->container['migrateFlag'] = $migrateFlag;
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

