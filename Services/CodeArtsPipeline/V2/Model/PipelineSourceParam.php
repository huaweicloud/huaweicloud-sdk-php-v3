<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineSourceParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineSourceParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alias  **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    * gitType  **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * gitUrl  **参数解释**： git链接。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 网页url。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    * artifactType  **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    * artifactTypeName  **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * directory  **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    * directoryId  **参数解释**： 目录ID。 **取值范围**： 不涉及。
    * organization  **参数解释**： Docker组织。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 制品源版本。 **取值范围**： 不涉及。
    * versionStrategy  **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    * sourceSystem  **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alias' => 'string',
            'gitType' => 'string',
            'codehubId' => 'string',
            'endpointId' => 'string',
            'defaultBranch' => 'string',
            'gitUrl' => 'string',
            'sshGitUrl' => 'string',
            'webUrl' => 'string',
            'repoName' => 'string',
            'artifactType' => 'string',
            'artifactTypeName' => 'string',
            'branchFilter' => 'string',
            'directory' => 'string',
            'directoryId' => 'string',
            'organization' => 'string',
            'packageName' => 'string',
            'version' => 'string',
            'versionStrategy' => 'string',
            'sourceSystem' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alias  **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    * gitType  **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * gitUrl  **参数解释**： git链接。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 网页url。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    * artifactType  **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    * artifactTypeName  **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * directory  **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    * directoryId  **参数解释**： 目录ID。 **取值范围**： 不涉及。
    * organization  **参数解释**： Docker组织。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 制品源版本。 **取值范围**： 不涉及。
    * versionStrategy  **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    * sourceSystem  **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alias' => null,
        'gitType' => null,
        'codehubId' => null,
        'endpointId' => null,
        'defaultBranch' => null,
        'gitUrl' => null,
        'sshGitUrl' => null,
        'webUrl' => null,
        'repoName' => null,
        'artifactType' => null,
        'artifactTypeName' => null,
        'branchFilter' => null,
        'directory' => null,
        'directoryId' => null,
        'organization' => null,
        'packageName' => null,
        'version' => null,
        'versionStrategy' => null,
        'sourceSystem' => null
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
    * alias  **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    * gitType  **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * gitUrl  **参数解释**： git链接。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 网页url。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    * artifactType  **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    * artifactTypeName  **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * directory  **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    * directoryId  **参数解释**： 目录ID。 **取值范围**： 不涉及。
    * organization  **参数解释**： Docker组织。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 制品源版本。 **取值范围**： 不涉及。
    * versionStrategy  **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    * sourceSystem  **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alias' => 'alias',
            'gitType' => 'git_type',
            'codehubId' => 'codehub_id',
            'endpointId' => 'endpoint_id',
            'defaultBranch' => 'default_branch',
            'gitUrl' => 'git_url',
            'sshGitUrl' => 'ssh_git_url',
            'webUrl' => 'web_url',
            'repoName' => 'repo_name',
            'artifactType' => 'artifact_type',
            'artifactTypeName' => 'artifact_type_name',
            'branchFilter' => 'branch_filter',
            'directory' => 'directory',
            'directoryId' => 'directory_id',
            'organization' => 'organization',
            'packageName' => 'package_name',
            'version' => 'version',
            'versionStrategy' => 'version_strategy',
            'sourceSystem' => 'source_system'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alias  **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    * gitType  **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * gitUrl  **参数解释**： git链接。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 网页url。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    * artifactType  **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    * artifactTypeName  **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * directory  **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    * directoryId  **参数解释**： 目录ID。 **取值范围**： 不涉及。
    * organization  **参数解释**： Docker组织。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 制品源版本。 **取值范围**： 不涉及。
    * versionStrategy  **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    * sourceSystem  **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'alias' => 'setAlias',
            'gitType' => 'setGitType',
            'codehubId' => 'setCodehubId',
            'endpointId' => 'setEndpointId',
            'defaultBranch' => 'setDefaultBranch',
            'gitUrl' => 'setGitUrl',
            'sshGitUrl' => 'setSshGitUrl',
            'webUrl' => 'setWebUrl',
            'repoName' => 'setRepoName',
            'artifactType' => 'setArtifactType',
            'artifactTypeName' => 'setArtifactTypeName',
            'branchFilter' => 'setBranchFilter',
            'directory' => 'setDirectory',
            'directoryId' => 'setDirectoryId',
            'organization' => 'setOrganization',
            'packageName' => 'setPackageName',
            'version' => 'setVersion',
            'versionStrategy' => 'setVersionStrategy',
            'sourceSystem' => 'setSourceSystem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alias  **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    * gitType  **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * gitUrl  **参数解释**： git链接。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 网页url。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    * artifactType  **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    * artifactTypeName  **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * directory  **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    * directoryId  **参数解释**： 目录ID。 **取值范围**： 不涉及。
    * organization  **参数解释**： Docker组织。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 制品源版本。 **取值范围**： 不涉及。
    * versionStrategy  **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    * sourceSystem  **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'alias' => 'getAlias',
            'gitType' => 'getGitType',
            'codehubId' => 'getCodehubId',
            'endpointId' => 'getEndpointId',
            'defaultBranch' => 'getDefaultBranch',
            'gitUrl' => 'getGitUrl',
            'sshGitUrl' => 'getSshGitUrl',
            'webUrl' => 'getWebUrl',
            'repoName' => 'getRepoName',
            'artifactType' => 'getArtifactType',
            'artifactTypeName' => 'getArtifactTypeName',
            'branchFilter' => 'getBranchFilter',
            'directory' => 'getDirectory',
            'directoryId' => 'getDirectoryId',
            'organization' => 'getOrganization',
            'packageName' => 'getPackageName',
            'version' => 'getVersion',
            'versionStrategy' => 'getVersionStrategy',
            'sourceSystem' => 'getSourceSystem'
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
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['gitType'] = isset($data['gitType']) ? $data['gitType'] : null;
        $this->container['codehubId'] = isset($data['codehubId']) ? $data['codehubId'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['defaultBranch'] = isset($data['defaultBranch']) ? $data['defaultBranch'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['sshGitUrl'] = isset($data['sshGitUrl']) ? $data['sshGitUrl'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['artifactTypeName'] = isset($data['artifactTypeName']) ? $data['artifactTypeName'] : null;
        $this->container['branchFilter'] = isset($data['branchFilter']) ? $data['branchFilter'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionStrategy'] = isset($data['versionStrategy']) ? $data['versionStrategy'] : null;
        $this->container['sourceSystem'] = isset($data['sourceSystem']) ? $data['sourceSystem'] : null;
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
    * Gets alias
    *  **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias **参数解释**： 代码/制品源参数 - 代码仓/制品源别名。 **取值范围**： 别名仅支持输入大小写英文字母、数字、“_”，至多128个字符。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets gitType
    *  **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    *
    * @return string|null
    */
    public function getGitType()
    {
        return $this->container['gitType'];
    }

    /**
    * Sets gitType
    *
    * @param string|null $gitType **参数解释**： git代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    *
    * @return $this
    */
    public function setGitType($gitType)
    {
        $this->container['gitType'] = $gitType;
        return $this;
    }

    /**
    * Gets codehubId
    *  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCodehubId()
    {
        return $this->container['codehubId'];
    }

    /**
    * Sets codehubId
    *
    * @param string|null $codehubId **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCodehubId($codehubId)
    {
        $this->container['codehubId'] = $codehubId;
        return $this;
    }

    /**
    * Gets endpointId
    *  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
    * Sets endpointId
    *
    * @param string|null $endpointId **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets defaultBranch
    *  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDefaultBranch()
    {
        return $this->container['defaultBranch'];
    }

    /**
    * Sets defaultBranch
    *
    * @param string|null $defaultBranch **参数解释**： 默认分支。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefaultBranch($defaultBranch)
    {
        $this->container['defaultBranch'] = $defaultBranch;
        return $this;
    }

    /**
    * Gets gitUrl
    *  **参数解释**： git链接。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl **参数解释**： git链接。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets sshGitUrl
    *  **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSshGitUrl()
    {
        return $this->container['sshGitUrl'];
    }

    /**
    * Sets sshGitUrl
    *
    * @param string|null $sshGitUrl **参数解释**： ssh_git链接。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSshGitUrl($sshGitUrl)
    {
        $this->container['sshGitUrl'] = $sshGitUrl;
        return $this;
    }

    /**
    * Gets webUrl
    *  **参数解释**： 网页url。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl **参数解释**： 网页url。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets repoName
    *  **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName **参数解释**： 流水线源名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets artifactType
    *  **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    *
    * @return string|null
    */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
    * Sets artifactType
    *
    * @param string|null $artifactType **参数解释**： 制品源类型。 **取值范围**： 仅包含[generic，docker]。
    *
    * @return $this
    */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;
        return $this;
    }

    /**
    * Gets artifactTypeName
    *  **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getArtifactTypeName()
    {
        return $this->container['artifactTypeName'];
    }

    /**
    * Sets artifactTypeName
    *
    * @param string|null $artifactTypeName **参数解释**： 制品源类型名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setArtifactTypeName($artifactTypeName)
    {
        $this->container['artifactTypeName'] = $artifactTypeName;
        return $this;
    }

    /**
    * Gets branchFilter
    *  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBranchFilter()
    {
        return $this->container['branchFilter'];
    }

    /**
    * Sets branchFilter
    *
    * @param string|null $branchFilter **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBranchFilter($branchFilter)
    {
        $this->container['branchFilter'] = $branchFilter;
        return $this;
    }

    /**
    * Gets directory
    *  **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory **参数解释**： 制品源所在目录。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets directoryId
    *  **参数解释**： 目录ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param string|null $directoryId **参数解释**： 目录ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets organization
    *  **参数解释**： Docker组织。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization **参数解释**： Docker组织。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets packageName
    *  **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName **参数解释**： 软件包名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 制品源版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 制品源版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets versionStrategy
    *  **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    *
    * @return string|null
    */
    public function getVersionStrategy()
    {
        return $this->container['versionStrategy'];
    }

    /**
    * Sets versionStrategy
    *
    * @param string|null $versionStrategy **参数解释**： 获取制品源版本的策略。 **取值范围**： 仅包含[latest，specificVersion]。
    *
    * @return $this
    */
    public function setVersionStrategy($versionStrategy)
    {
        $this->container['versionStrategy'] = $versionStrategy;
        return $this;
    }

    /**
    * Gets sourceSystem
    *  **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceSystem()
    {
        return $this->container['sourceSystem'];
    }

    /**
    * Sets sourceSystem
    *
    * @param string|null $sourceSystem **参数解释**： 制品源名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceSystem($sourceSystem)
    {
        $this->container['sourceSystem'] = $sourceSystem;
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

