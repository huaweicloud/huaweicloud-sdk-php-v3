<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunPipelineSourceParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunPipelineSource_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gitType  **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * gitUrl  **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 代码仓名。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * alias  **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gitType' => 'string',
            'gitUrl' => 'string',
            'sshGitUrl' => 'string',
            'webUrl' => 'string',
            'repoName' => 'string',
            'defaultBranch' => 'string',
            'endpointId' => 'string',
            'codehubId' => 'string',
            'alias' => 'string',
            'buildParams' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineSourceParamsBuildParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gitType  **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * gitUrl  **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 代码仓名。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * alias  **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gitType' => null,
        'gitUrl' => null,
        'sshGitUrl' => null,
        'webUrl' => null,
        'repoName' => null,
        'defaultBranch' => null,
        'endpointId' => null,
        'codehubId' => null,
        'alias' => null,
        'buildParams' => null
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
    * gitType  **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * gitUrl  **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 代码仓名。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * alias  **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gitType' => 'git_type',
            'gitUrl' => 'git_url',
            'sshGitUrl' => 'ssh_git_url',
            'webUrl' => 'web_url',
            'repoName' => 'repo_name',
            'defaultBranch' => 'default_branch',
            'endpointId' => 'endpoint_id',
            'codehubId' => 'codehub_id',
            'alias' => 'alias',
            'buildParams' => 'build_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gitType  **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * gitUrl  **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 代码仓名。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * alias  **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $setters = [
            'gitType' => 'setGitType',
            'gitUrl' => 'setGitUrl',
            'sshGitUrl' => 'setSshGitUrl',
            'webUrl' => 'setWebUrl',
            'repoName' => 'setRepoName',
            'defaultBranch' => 'setDefaultBranch',
            'endpointId' => 'setEndpointId',
            'codehubId' => 'setCodehubId',
            'alias' => 'setAlias',
            'buildParams' => 'setBuildParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gitType  **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    * gitUrl  **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
    * sshGitUrl  **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
    * webUrl  **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 代码仓名。 **取值范围**： 不涉及。
    * defaultBranch  **参数解释**： 默认分支。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * alias  **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $getters = [
            'gitType' => 'getGitType',
            'gitUrl' => 'getGitUrl',
            'sshGitUrl' => 'getSshGitUrl',
            'webUrl' => 'getWebUrl',
            'repoName' => 'getRepoName',
            'defaultBranch' => 'getDefaultBranch',
            'endpointId' => 'getEndpointId',
            'codehubId' => 'getCodehubId',
            'alias' => 'getAlias',
            'buildParams' => 'getBuildParams'
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
        $this->container['gitType'] = isset($data['gitType']) ? $data['gitType'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['sshGitUrl'] = isset($data['sshGitUrl']) ? $data['sshGitUrl'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['defaultBranch'] = isset($data['defaultBranch']) ? $data['defaultBranch'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['codehubId'] = isset($data['codehubId']) ? $data['codehubId'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['buildParams'] = isset($data['buildParams']) ? $data['buildParams'] : null;
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
    * Gets gitType
    *  **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
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
    * @param string|null $gitType **参数解释**： 代码仓类型。 **取值范围**： - codehub。 - gitee。 - github。 - gitcode。 - gitlab。
    *
    * @return $this
    */
    public function setGitType($gitType)
    {
        $this->container['gitType'] = $gitType;
        return $this;
    }

    /**
    * Gets gitUrl
    *  **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
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
    * @param string|null $gitUrl **参数解释**： 代码仓https地址。 **取值范围**： 不涉及。
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
    *  **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
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
    * @param string|null $sshGitUrl **参数解释**： 代码仓ssh地址。 **取值范围**： 不涉及。
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
    *  **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
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
    * @param string|null $webUrl **参数解释**： 代码仓页面地址。 **取值范围**： 不涉及。
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
    *  **参数解释**： 代码仓名。 **取值范围**： 不涉及。
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
    * @param string|null $repoName **参数解释**： 代码仓名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
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
    * Gets endpointId
    *  **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
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
    * @param string|null $endpointId **参数解释**： 扩展点ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
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
    * Gets alias
    *  **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
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
    * @param string|null $alias **参数解释**： 代码仓别名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets buildParams
    *  buildParams
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineSourceParamsBuildParams|null
    */
    public function getBuildParams()
    {
        return $this->container['buildParams'];
    }

    /**
    * Sets buildParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineSourceParamsBuildParams|null $buildParams buildParams
    *
    * @return $this
    */
    public function setBuildParams($buildParams)
    {
        $this->container['buildParams'] = $buildParams;
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

