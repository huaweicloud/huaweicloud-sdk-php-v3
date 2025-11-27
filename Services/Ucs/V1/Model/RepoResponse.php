<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  仓库的唯一标识符
    * name  仓库名称
    * repoType  仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
    * namespace  命名空间
    * gitRepository  gitRepository
    * repoStatus  仓库状态，包括Health、Failed、Unknown、Progressing
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string',
            'repoType' => 'string',
            'namespace' => 'string',
            'gitRepository' => '\HuaweiCloud\SDK\Ucs\V1\Model\GitRepository',
            'repoStatus' => 'string',
            'clusterInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\ClusterInfo',
            'secretInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\SecretInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  仓库的唯一标识符
    * name  仓库名称
    * repoType  仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
    * namespace  命名空间
    * gitRepository  gitRepository
    * repoStatus  仓库状态，包括Health、Failed、Unknown、Progressing
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null,
        'repoType' => null,
        'namespace' => null,
        'gitRepository' => null,
        'repoStatus' => null,
        'clusterInfo' => null,
        'secretInfo' => null
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
    * uid  仓库的唯一标识符
    * name  仓库名称
    * repoType  仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
    * namespace  命名空间
    * gitRepository  gitRepository
    * repoStatus  仓库状态，包括Health、Failed、Unknown、Progressing
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name',
            'repoType' => 'repoType',
            'namespace' => 'namespace',
            'gitRepository' => 'gitRepository',
            'repoStatus' => 'repoStatus',
            'clusterInfo' => 'clusterInfo',
            'secretInfo' => 'secretInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  仓库的唯一标识符
    * name  仓库名称
    * repoType  仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
    * namespace  命名空间
    * gitRepository  gitRepository
    * repoStatus  仓库状态，包括Health、Failed、Unknown、Progressing
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName',
            'repoType' => 'setRepoType',
            'namespace' => 'setNamespace',
            'gitRepository' => 'setGitRepository',
            'repoStatus' => 'setRepoStatus',
            'clusterInfo' => 'setClusterInfo',
            'secretInfo' => 'setSecretInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  仓库的唯一标识符
    * name  仓库名称
    * repoType  仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
    * namespace  命名空间
    * gitRepository  gitRepository
    * repoStatus  仓库状态，包括Health、Failed、Unknown、Progressing
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName',
            'repoType' => 'getRepoType',
            'namespace' => 'getNamespace',
            'gitRepository' => 'getGitRepository',
            'repoStatus' => 'getRepoStatus',
            'clusterInfo' => 'getClusterInfo',
            'secretInfo' => 'getSecretInfo'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['gitRepository'] = isset($data['gitRepository']) ? $data['gitRepository'] : null;
        $this->container['repoStatus'] = isset($data['repoStatus']) ? $data['repoStatus'] : null;
        $this->container['clusterInfo'] = isset($data['clusterInfo']) ? $data['clusterInfo'] : null;
        $this->container['secretInfo'] = isset($data['secretInfo']) ? $data['secretInfo'] : null;
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
    * Gets uid
    *  仓库的唯一标识符
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 仓库的唯一标识符
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets name
    *  仓库名称
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
    * @param string|null $name 仓库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets repoType
    *  仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
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
    * @param string|null $repoType 仓库类型，包括Bucket、HelmChart、GitRepository、HelmRepository，目前仅支持GitRepository
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets gitRepository
    *  gitRepository
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\GitRepository|null
    */
    public function getGitRepository()
    {
        return $this->container['gitRepository'];
    }

    /**
    * Sets gitRepository
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\GitRepository|null $gitRepository gitRepository
    *
    * @return $this
    */
    public function setGitRepository($gitRepository)
    {
        $this->container['gitRepository'] = $gitRepository;
        return $this;
    }

    /**
    * Gets repoStatus
    *  仓库状态，包括Health、Failed、Unknown、Progressing
    *
    * @return string|null
    */
    public function getRepoStatus()
    {
        return $this->container['repoStatus'];
    }

    /**
    * Sets repoStatus
    *
    * @param string|null $repoStatus 仓库状态，包括Health、Failed、Unknown、Progressing
    *
    * @return $this
    */
    public function setRepoStatus($repoStatus)
    {
        $this->container['repoStatus'] = $repoStatus;
        return $this;
    }

    /**
    * Gets clusterInfo
    *  clusterInfo
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ClusterInfo|null
    */
    public function getClusterInfo()
    {
        return $this->container['clusterInfo'];
    }

    /**
    * Sets clusterInfo
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ClusterInfo|null $clusterInfo clusterInfo
    *
    * @return $this
    */
    public function setClusterInfo($clusterInfo)
    {
        $this->container['clusterInfo'] = $clusterInfo;
        return $this;
    }

    /**
    * Gets secretInfo
    *  secretInfo
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\SecretInfo|null
    */
    public function getSecretInfo()
    {
        return $this->container['secretInfo'];
    }

    /**
    * Sets secretInfo
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\SecretInfo|null $secretInfo secretInfo
    *
    * @return $this
    */
    public function setSecretInfo($secretInfo)
    {
        $this->container['secretInfo'] = $secretInfo;
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

