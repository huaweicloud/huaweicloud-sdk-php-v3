<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubmoduleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubmoduleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
    * path  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * gitUrl  **参数解释：** 子模块Git地址。
    * submoduleBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    * namespaceUuid  组织名/组织名.../仓库名
    * submoduleRepoId  **参数解释：** 子模块仓库ID。
    * repoName  **参数解释：** 子模块仓库名称。
    * subCommitId  **参数解释：** 子模块仓库提交。
    * deployKeyStatus  **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    * status  **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoId' => 'int',
            'branch' => 'string',
            'path' => 'string',
            'gitUrl' => 'string',
            'submoduleBranch' => 'string',
            'namespaceUuid' => 'string',
            'submoduleRepoId' => 'int',
            'repoName' => 'string',
            'subCommitId' => 'string',
            'deployKeyStatus' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
    * path  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * gitUrl  **参数解释：** 子模块Git地址。
    * submoduleBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    * namespaceUuid  组织名/组织名.../仓库名
    * submoduleRepoId  **参数解释：** 子模块仓库ID。
    * repoName  **参数解释：** 子模块仓库名称。
    * subCommitId  **参数解释：** 子模块仓库提交。
    * deployKeyStatus  **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    * status  **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoId' => null,
        'branch' => null,
        'path' => null,
        'gitUrl' => null,
        'submoduleBranch' => null,
        'namespaceUuid' => null,
        'submoduleRepoId' => null,
        'repoName' => null,
        'subCommitId' => null,
        'deployKeyStatus' => null,
        'status' => null
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
    * repoId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
    * path  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * gitUrl  **参数解释：** 子模块Git地址。
    * submoduleBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    * namespaceUuid  组织名/组织名.../仓库名
    * submoduleRepoId  **参数解释：** 子模块仓库ID。
    * repoName  **参数解释：** 子模块仓库名称。
    * subCommitId  **参数解释：** 子模块仓库提交。
    * deployKeyStatus  **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    * status  **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoId' => 'repo_id',
            'branch' => 'branch',
            'path' => 'path',
            'gitUrl' => 'git_url',
            'submoduleBranch' => 'submodule_branch',
            'namespaceUuid' => 'namespace_uuid',
            'submoduleRepoId' => 'submodule_repo_id',
            'repoName' => 'repo_name',
            'subCommitId' => 'sub_commitId',
            'deployKeyStatus' => 'deployKey_status',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
    * path  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * gitUrl  **参数解释：** 子模块Git地址。
    * submoduleBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    * namespaceUuid  组织名/组织名.../仓库名
    * submoduleRepoId  **参数解释：** 子模块仓库ID。
    * repoName  **参数解释：** 子模块仓库名称。
    * subCommitId  **参数解释：** 子模块仓库提交。
    * deployKeyStatus  **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    * status  **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @var string[]
    */
    protected static $setters = [
            'repoId' => 'setRepoId',
            'branch' => 'setBranch',
            'path' => 'setPath',
            'gitUrl' => 'setGitUrl',
            'submoduleBranch' => 'setSubmoduleBranch',
            'namespaceUuid' => 'setNamespaceUuid',
            'submoduleRepoId' => 'setSubmoduleRepoId',
            'repoName' => 'setRepoName',
            'subCommitId' => 'setSubCommitId',
            'deployKeyStatus' => 'setDeployKeyStatus',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
    * path  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * gitUrl  **参数解释：** 子模块Git地址。
    * submoduleBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    * namespaceUuid  组织名/组织名.../仓库名
    * submoduleRepoId  **参数解释：** 子模块仓库ID。
    * repoName  **参数解释：** 子模块仓库名称。
    * subCommitId  **参数解释：** 子模块仓库提交。
    * deployKeyStatus  **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    * status  **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @var string[]
    */
    protected static $getters = [
            'repoId' => 'getRepoId',
            'branch' => 'getBranch',
            'path' => 'getPath',
            'gitUrl' => 'getGitUrl',
            'submoduleBranch' => 'getSubmoduleBranch',
            'namespaceUuid' => 'getNamespaceUuid',
            'submoduleRepoId' => 'getSubmoduleRepoId',
            'repoName' => 'getRepoName',
            'subCommitId' => 'getSubCommitId',
            'deployKeyStatus' => 'getDeployKeyStatus',
            'status' => 'getStatus'
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
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['submoduleBranch'] = isset($data['submoduleBranch']) ? $data['submoduleBranch'] : null;
        $this->container['namespaceUuid'] = isset($data['namespaceUuid']) ? $data['namespaceUuid'] : null;
        $this->container['submoduleRepoId'] = isset($data['submoduleRepoId']) ? $data['submoduleRepoId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['subCommitId'] = isset($data['subCommitId']) ? $data['subCommitId'] : null;
        $this->container['deployKeyStatus'] = isset($data['deployKeyStatus']) ? $data['deployKeyStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets repoId
    *  **参数解释：** 仓库ID。
    *
    * @return int|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param int|null $repoId **参数解释：** 仓库ID。
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets branch
    *  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
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
    * @param string|null $branch **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节。
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets gitUrl
    *  **参数解释：** 子模块Git地址。
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
    * @param string|null $gitUrl **参数解释：** 子模块Git地址。
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets submoduleBranch
    *  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    *
    * @return string|null
    */
    public function getSubmoduleBranch()
    {
        return $this->container['submoduleBranch'];
    }

    /**
    * Sets submoduleBranch
    *
    * @param string|null $submoduleBranch **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节。
    *
    * @return $this
    */
    public function setSubmoduleBranch($submoduleBranch)
    {
        $this->container['submoduleBranch'] = $submoduleBranch;
        return $this;
    }

    /**
    * Gets namespaceUuid
    *  组织名/组织名.../仓库名
    *
    * @return string|null
    */
    public function getNamespaceUuid()
    {
        return $this->container['namespaceUuid'];
    }

    /**
    * Sets namespaceUuid
    *
    * @param string|null $namespaceUuid 组织名/组织名.../仓库名
    *
    * @return $this
    */
    public function setNamespaceUuid($namespaceUuid)
    {
        $this->container['namespaceUuid'] = $namespaceUuid;
        return $this;
    }

    /**
    * Gets submoduleRepoId
    *  **参数解释：** 子模块仓库ID。
    *
    * @return int|null
    */
    public function getSubmoduleRepoId()
    {
        return $this->container['submoduleRepoId'];
    }

    /**
    * Sets submoduleRepoId
    *
    * @param int|null $submoduleRepoId **参数解释：** 子模块仓库ID。
    *
    * @return $this
    */
    public function setSubmoduleRepoId($submoduleRepoId)
    {
        $this->container['submoduleRepoId'] = $submoduleRepoId;
        return $this;
    }

    /**
    * Gets repoName
    *  **参数解释：** 子模块仓库名称。
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
    * @param string|null $repoName **参数解释：** 子模块仓库名称。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets subCommitId
    *  **参数解释：** 子模块仓库提交。
    *
    * @return string|null
    */
    public function getSubCommitId()
    {
        return $this->container['subCommitId'];
    }

    /**
    * Sets subCommitId
    *
    * @param string|null $subCommitId **参数解释：** 子模块仓库提交。
    *
    * @return $this
    */
    public function setSubCommitId($subCommitId)
    {
        $this->container['subCommitId'] = $subCommitId;
        return $this;
    }

    /**
    * Gets deployKeyStatus
    *  **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    *
    * @return int|null
    */
    public function getDeployKeyStatus()
    {
        return $this->container['deployKeyStatus'];
    }

    /**
    * Sets deployKeyStatus
    *
    * @param int|null $deployKeyStatus **参数解释：** 部署秘钥同步状态。 **取值范围：** - 0，不同步。 - 1，同步。
    *
    * @return $this
    */
    public function setDeployKeyStatus($deployKeyStatus)
    {
        $this->container['deployKeyStatus'] = $deployKeyStatus;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 子模块状态。 **取值范围：** - 0，异常。 - 1，正常。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

