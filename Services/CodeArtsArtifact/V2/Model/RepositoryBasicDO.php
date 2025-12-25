<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryBasicDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryBasicDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： ID。 **取值范围**： 不涉及。
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
    * repoType  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * storageSummaryInfo  storageSummaryInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
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
            'repoType' => 'string',
            'policy' => 'string',
            'tabId' => 'string',
            'repositoryName' => 'string',
            'displayName' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'includesPattern' => 'string',
            'deploymentPolicy' => 'string',
            'shareRight' => 'string',
            'url' => 'string',
            'packageType' => 'string',
            'storageSummaryInfo' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DownloadFolderInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： ID。 **取值范围**： 不涉及。
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
    * repoType  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * storageSummaryInfo  storageSummaryInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
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
        'repoType' => null,
        'policy' => null,
        'tabId' => null,
        'repositoryName' => null,
        'displayName' => null,
        'description' => null,
        'projectId' => null,
        'includesPattern' => null,
        'deploymentPolicy' => null,
        'shareRight' => null,
        'url' => null,
        'packageType' => null,
        'storageSummaryInfo' => null
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
    * id  **参数解释**： ID。 **取值范围**： 不涉及。
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
    * repoType  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * storageSummaryInfo  storageSummaryInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
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
            'repoType' => 'repoType',
            'policy' => 'policy',
            'tabId' => 'tabId',
            'repositoryName' => 'repositoryName',
            'displayName' => 'displayName',
            'description' => 'description',
            'projectId' => 'projectId',
            'includesPattern' => 'includesPattern',
            'deploymentPolicy' => 'deploymentPolicy',
            'shareRight' => 'shareRight',
            'url' => 'url',
            'packageType' => 'packageType',
            'storageSummaryInfo' => 'storageSummaryInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： ID。 **取值范围**： 不涉及。
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
    * repoType  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * storageSummaryInfo  storageSummaryInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
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
            'repoType' => 'setRepoType',
            'policy' => 'setPolicy',
            'tabId' => 'setTabId',
            'repositoryName' => 'setRepositoryName',
            'displayName' => 'setDisplayName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'includesPattern' => 'setIncludesPattern',
            'deploymentPolicy' => 'setDeploymentPolicy',
            'shareRight' => 'setShareRight',
            'url' => 'setUrl',
            'packageType' => 'setPackageType',
            'storageSummaryInfo' => 'setStorageSummaryInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： ID。 **取值范围**： 不涉及。
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
    * repoType  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * tabId  **参数解释**： 用于标记一对Maven仓库(release、snapshot)，相同的tab_id即为一对Maven仓库。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示的仓库名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 仓库描述。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目id。 **取值范围**： 不涉及。
    * includesPattern  **参数解释**： 路径包含规则。 **取值范围**： 不涉及。
    * deploymentPolicy  **参数解释**： 覆盖策略。 **取值范围**： 不涉及。
    * shareRight  **参数解释**： 共享权限级别。 **取值范围**： PROJECT
    * url  **参数解释**： 仓库地址。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 制品类型。 **取值范围**： - maven - maven2 - npm - go - pypi - rpm - composer - debian - conan - nuget - docker2 - cocoapods - ohpm - generic - helm - conda - huggingfaceml
    * storageSummaryInfo  storageSummaryInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
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
            'repoType' => 'getRepoType',
            'policy' => 'getPolicy',
            'tabId' => 'getTabId',
            'repositoryName' => 'getRepositoryName',
            'displayName' => 'getDisplayName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'includesPattern' => 'getIncludesPattern',
            'deploymentPolicy' => 'getDeploymentPolicy',
            'shareRight' => 'getShareRight',
            'url' => 'getUrl',
            'packageType' => 'getPackageType',
            'storageSummaryInfo' => 'getStorageSummaryInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['tabId'] = isset($data['tabId']) ? $data['tabId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['deploymentPolicy'] = isset($data['deploymentPolicy']) ? $data['deploymentPolicy'] : null;
        $this->container['shareRight'] = isset($data['shareRight']) ? $data['shareRight'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['storageSummaryInfo'] = isset($data['storageSummaryInfo']) ? $data['storageSummaryInfo'] : null;
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
    * Gets id
    *  **参数解释**： ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets repoType
    *  **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
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
    * @param string|null $repoType **参数解释**： 仓库类型。 **取值范围**： - hosted：本地仓库。 - remote：代理仓库。 - virtual：虚拟仓库。
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
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
    * Gets storageSummaryInfo
    *  storageSummaryInfo
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DownloadFolderInfo|null
    */
    public function getStorageSummaryInfo()
    {
        return $this->container['storageSummaryInfo'];
    }

    /**
    * Sets storageSummaryInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\DownloadFolderInfo|null $storageSummaryInfo storageSummaryInfo
    *
    * @return $this
    */
    public function setStorageSummaryInfo($storageSummaryInfo)
    {
        $this->container['storageSummaryInfo'] = $storageSummaryInfo;
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

