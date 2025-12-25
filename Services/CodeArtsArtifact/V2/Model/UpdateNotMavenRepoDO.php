<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNotMavenRepoDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNotMavenRepoDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoName  **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    * format  **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    * description  **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
    * repositoryIds  **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    * includesPattern  **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
    * autoCleanSnapshot  **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * snapshotAliveDays  **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * maxUniqueSnapshots  **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * allowAnonymous  **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoName' => 'string',
            'format' => 'string',
            'description' => 'string',
            'repositoryIds' => 'string[]',
            'includesPattern' => 'string',
            'deploymentPolicy' => 'string',
            'autoCleanSnapshot' => 'bool',
            'snapshotAliveDays' => 'string',
            'maxUniqueSnapshots' => 'string',
            'allowAnonymous' => 'bool',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoName  **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    * format  **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    * description  **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
    * repositoryIds  **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    * includesPattern  **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
    * autoCleanSnapshot  **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * snapshotAliveDays  **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * maxUniqueSnapshots  **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * allowAnonymous  **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoName' => null,
        'format' => null,
        'description' => null,
        'repositoryIds' => null,
        'includesPattern' => null,
        'deploymentPolicy' => null,
        'autoCleanSnapshot' => null,
        'snapshotAliveDays' => null,
        'maxUniqueSnapshots' => null,
        'allowAnonymous' => null,
        'projectId' => null
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
    * repoName  **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    * format  **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    * description  **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
    * repositoryIds  **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    * includesPattern  **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
    * autoCleanSnapshot  **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * snapshotAliveDays  **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * maxUniqueSnapshots  **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * allowAnonymous  **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoName' => 'repo_name',
            'format' => 'format',
            'description' => 'description',
            'repositoryIds' => 'repository_ids',
            'includesPattern' => 'includes_pattern',
            'deploymentPolicy' => 'deployment_policy',
            'autoCleanSnapshot' => 'auto_clean_snapshot',
            'snapshotAliveDays' => 'snapshot_alive_days',
            'maxUniqueSnapshots' => 'max_unique_snapshots',
            'allowAnonymous' => 'allow_anonymous',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoName  **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    * format  **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    * description  **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
    * repositoryIds  **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    * includesPattern  **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
    * autoCleanSnapshot  **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * snapshotAliveDays  **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * maxUniqueSnapshots  **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * allowAnonymous  **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $setters = [
            'repoName' => 'setRepoName',
            'format' => 'setFormat',
            'description' => 'setDescription',
            'repositoryIds' => 'setRepositoryIds',
            'includesPattern' => 'setIncludesPattern',
            'deploymentPolicy' => 'setDeploymentPolicy',
            'autoCleanSnapshot' => 'setAutoCleanSnapshot',
            'snapshotAliveDays' => 'setSnapshotAliveDays',
            'maxUniqueSnapshots' => 'setMaxUniqueSnapshots',
            'allowAnonymous' => 'setAllowAnonymous',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoName  **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    * format  **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    * description  **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
    * repositoryIds  **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    * includesPattern  **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
    * deploymentPolicy  **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
    * autoCleanSnapshot  **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * snapshotAliveDays  **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * maxUniqueSnapshots  **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * allowAnonymous  **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $getters = [
            'repoName' => 'getRepoName',
            'format' => 'getFormat',
            'description' => 'getDescription',
            'repositoryIds' => 'getRepositoryIds',
            'includesPattern' => 'getIncludesPattern',
            'deploymentPolicy' => 'getDeploymentPolicy',
            'autoCleanSnapshot' => 'getAutoCleanSnapshot',
            'snapshotAliveDays' => 'getSnapshotAliveDays',
            'maxUniqueSnapshots' => 'getMaxUniqueSnapshots',
            'allowAnonymous' => 'getAllowAnonymous',
            'projectId' => 'getProjectId'
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
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['repositoryIds'] = isset($data['repositoryIds']) ? $data['repositoryIds'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['deploymentPolicy'] = isset($data['deploymentPolicy']) ? $data['deploymentPolicy'] : null;
        $this->container['autoCleanSnapshot'] = isset($data['autoCleanSnapshot']) ? $data['autoCleanSnapshot'] : null;
        $this->container['snapshotAliveDays'] = isset($data['snapshotAliveDays']) ? $data['snapshotAliveDays'] : null;
        $this->container['maxUniqueSnapshots'] = isset($data['maxUniqueSnapshots']) ? $data['maxUniqueSnapshots'] : null;
        $this->container['allowAnonymous'] = isset($data['allowAnonymous']) ? $data['allowAnonymous'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repoName'] === null) {
            $invalidProperties[] = "'repoName' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['repositoryIds'] === null) {
            $invalidProperties[] = "'repositoryIds' can't be null";
        }
        if ($this->container['includesPattern'] === null) {
            $invalidProperties[] = "'includesPattern' can't be null";
        }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^[a-z0-9]{32,32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[a-z0-9]{32,32}$/.";
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
    * Gets repoName
    *  **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string $repoName **参数解释**: 仓库名称。 **约束限制**: 长度1-20。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets format
    *  **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format **参数解释**: 制品类型。 **约束限制**: 不涉及。 **取值范围**: docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    * @param string|null $description **参数解释**: 仓库描述。 **约束限制**: 最大长度200。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets repositoryIds
    *  **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string[]
    */
    public function getRepositoryIds()
    {
        return $this->container['repositoryIds'];
    }

    /**
    * Sets repositoryIds
    *
    * @param string[] $repositoryIds **参数解释**: 仓库id列表。仓库id，格式为{region}_{domainId}_{format}_{sequence}。可以从私有依赖库首页->仓库概览->仓库地址 url 中获取，最后两个\"/\"中间的字符串即为仓库id。 **约束限制**: 根据仓库id格式中region, domainId需要为有效值，format有效值为:npm|go|pypi|rpm|composer|maven|debian|conan|nuget|docker2|cocoapods|ohpm, sequence取值根据套餐不同有不同上限值。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setRepositoryIds($repositoryIds)
    {
        $this->container['repositoryIds'] = $repositoryIds;
        return $this;
    }

    /**
    * Gets includesPattern
    *  **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getIncludesPattern()
    {
        return $this->container['includesPattern'];
    }

    /**
    * Sets includesPattern
    *
    * @param string $includesPattern **参数解释**: 路径包含规则。 **约束限制**: 最大长度512。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    *  **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
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
    * @param string|null $deploymentPolicy **参数解释**: 覆盖策略。 **约束限制**: 不涉及。 **取值范围**: allowRedeploy：允许覆盖 disableRedeploy：禁止覆盖 readOnly：只读。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setDeploymentPolicy($deploymentPolicy)
    {
        $this->container['deploymentPolicy'] = $deploymentPolicy;
        return $this;
    }

    /**
    * Gets autoCleanSnapshot
    *  **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    * @param bool|null $autoCleanSnapshot **参数解释**: 自动清理快照。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    *  **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    * @param string|null $snapshotAliveDays **参数解释**: 快照保存时间长度。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    *  **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    * @param string|null $maxUniqueSnapshots **参数解释**: 最大不同快照个数。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setMaxUniqueSnapshots($maxUniqueSnapshots)
    {
        $this->container['maxUniqueSnapshots'] = $maxUniqueSnapshots;
        return $this;
    }

    /**
    * Gets allowAnonymous
    *  **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param bool|null $allowAnonymous **参数解释**: 是否允许匿名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAllowAnonymous($allowAnonymous)
    {
        $this->container['allowAnonymous'] = $allowAnonymous;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
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
    * @param string|null $projectId **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

