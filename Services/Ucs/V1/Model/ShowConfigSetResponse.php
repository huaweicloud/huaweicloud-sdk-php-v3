<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConfigSetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConfigSetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  配置集合的唯一标识
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  仓库名称
    * bucket  bucket基本信息
    * helmChart  Helm Chart源基本信息
    * gitRepository  gitRepository
    * helmRepository  Helm仓库的定义与状态等信息
    * repoStatus  仓库状态信息
    * helmRelease  Helm Chart的发布配置和状态信息
    * kustomization  kustomization
    * configSetStatus  配置集合状态信息
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'configSetType' => 'string',
            'repoName' => 'string',
            'bucket' => 'object',
            'helmChart' => 'object',
            'gitRepository' => '\HuaweiCloud\SDK\Ucs\V1\Model\GitRepository',
            'helmRepository' => 'object',
            'repoStatus' => 'string',
            'helmRelease' => 'object',
            'kustomization' => '\HuaweiCloud\SDK\Ucs\V1\Model\Kustomization',
            'configSetStatus' => 'string',
            'clusterInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\ClusterInfo',
            'secretInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\SecretInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  配置集合的唯一标识
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  仓库名称
    * bucket  bucket基本信息
    * helmChart  Helm Chart源基本信息
    * gitRepository  gitRepository
    * helmRepository  Helm仓库的定义与状态等信息
    * repoStatus  仓库状态信息
    * helmRelease  Helm Chart的发布配置和状态信息
    * kustomization  kustomization
    * configSetStatus  配置集合状态信息
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null,
        'namespace' => null,
        'configSetType' => null,
        'repoName' => null,
        'bucket' => null,
        'helmChart' => null,
        'gitRepository' => null,
        'helmRepository' => null,
        'repoStatus' => null,
        'helmRelease' => null,
        'kustomization' => null,
        'configSetStatus' => null,
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
    * uid  配置集合的唯一标识
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  仓库名称
    * bucket  bucket基本信息
    * helmChart  Helm Chart源基本信息
    * gitRepository  gitRepository
    * helmRepository  Helm仓库的定义与状态等信息
    * repoStatus  仓库状态信息
    * helmRelease  Helm Chart的发布配置和状态信息
    * kustomization  kustomization
    * configSetStatus  配置集合状态信息
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name',
            'namespace' => 'namespace',
            'configSetType' => 'configSetType',
            'repoName' => 'repoName',
            'bucket' => 'bucket',
            'helmChart' => 'helmChart',
            'gitRepository' => 'gitRepository',
            'helmRepository' => 'helmRepository',
            'repoStatus' => 'repoStatus',
            'helmRelease' => 'helmRelease',
            'kustomization' => 'kustomization',
            'configSetStatus' => 'configSetStatus',
            'clusterInfo' => 'clusterInfo',
            'secretInfo' => 'secretInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  配置集合的唯一标识
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  仓库名称
    * bucket  bucket基本信息
    * helmChart  Helm Chart源基本信息
    * gitRepository  gitRepository
    * helmRepository  Helm仓库的定义与状态等信息
    * repoStatus  仓库状态信息
    * helmRelease  Helm Chart的发布配置和状态信息
    * kustomization  kustomization
    * configSetStatus  配置集合状态信息
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'configSetType' => 'setConfigSetType',
            'repoName' => 'setRepoName',
            'bucket' => 'setBucket',
            'helmChart' => 'setHelmChart',
            'gitRepository' => 'setGitRepository',
            'helmRepository' => 'setHelmRepository',
            'repoStatus' => 'setRepoStatus',
            'helmRelease' => 'setHelmRelease',
            'kustomization' => 'setKustomization',
            'configSetStatus' => 'setConfigSetStatus',
            'clusterInfo' => 'setClusterInfo',
            'secretInfo' => 'setSecretInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  配置集合的唯一标识
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  仓库名称
    * bucket  bucket基本信息
    * helmChart  Helm Chart源基本信息
    * gitRepository  gitRepository
    * helmRepository  Helm仓库的定义与状态等信息
    * repoStatus  仓库状态信息
    * helmRelease  Helm Chart的发布配置和状态信息
    * kustomization  kustomization
    * configSetStatus  配置集合状态信息
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'configSetType' => 'getConfigSetType',
            'repoName' => 'getRepoName',
            'bucket' => 'getBucket',
            'helmChart' => 'getHelmChart',
            'gitRepository' => 'getGitRepository',
            'helmRepository' => 'getHelmRepository',
            'repoStatus' => 'getRepoStatus',
            'helmRelease' => 'getHelmRelease',
            'kustomization' => 'getKustomization',
            'configSetStatus' => 'getConfigSetStatus',
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['configSetType'] = isset($data['configSetType']) ? $data['configSetType'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['helmChart'] = isset($data['helmChart']) ? $data['helmChart'] : null;
        $this->container['gitRepository'] = isset($data['gitRepository']) ? $data['gitRepository'] : null;
        $this->container['helmRepository'] = isset($data['helmRepository']) ? $data['helmRepository'] : null;
        $this->container['repoStatus'] = isset($data['repoStatus']) ? $data['repoStatus'] : null;
        $this->container['helmRelease'] = isset($data['helmRelease']) ? $data['helmRelease'] : null;
        $this->container['kustomization'] = isset($data['kustomization']) ? $data['kustomization'] : null;
        $this->container['configSetStatus'] = isset($data['configSetStatus']) ? $data['configSetStatus'] : null;
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
    *  配置集合的唯一标识
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
    * @param string|null $uid 配置集合的唯一标识
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
    *  配置集合的名称
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
    * @param string|null $name 配置集合的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets configSetType
    *  配置集合的类型
    *
    * @return string|null
    */
    public function getConfigSetType()
    {
        return $this->container['configSetType'];
    }

    /**
    * Sets configSetType
    *
    * @param string|null $configSetType 配置集合的类型
    *
    * @return $this
    */
    public function setConfigSetType($configSetType)
    {
        $this->container['configSetType'] = $configSetType;
        return $this;
    }

    /**
    * Gets repoName
    *  仓库名称
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
    * @param string|null $repoName 仓库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets bucket
    *  bucket基本信息
    *
    * @return object|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param object|null $bucket bucket基本信息
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets helmChart
    *  Helm Chart源基本信息
    *
    * @return object|null
    */
    public function getHelmChart()
    {
        return $this->container['helmChart'];
    }

    /**
    * Sets helmChart
    *
    * @param object|null $helmChart Helm Chart源基本信息
    *
    * @return $this
    */
    public function setHelmChart($helmChart)
    {
        $this->container['helmChart'] = $helmChart;
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
    * Gets helmRepository
    *  Helm仓库的定义与状态等信息
    *
    * @return object|null
    */
    public function getHelmRepository()
    {
        return $this->container['helmRepository'];
    }

    /**
    * Sets helmRepository
    *
    * @param object|null $helmRepository Helm仓库的定义与状态等信息
    *
    * @return $this
    */
    public function setHelmRepository($helmRepository)
    {
        $this->container['helmRepository'] = $helmRepository;
        return $this;
    }

    /**
    * Gets repoStatus
    *  仓库状态信息
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
    * @param string|null $repoStatus 仓库状态信息
    *
    * @return $this
    */
    public function setRepoStatus($repoStatus)
    {
        $this->container['repoStatus'] = $repoStatus;
        return $this;
    }

    /**
    * Gets helmRelease
    *  Helm Chart的发布配置和状态信息
    *
    * @return object|null
    */
    public function getHelmRelease()
    {
        return $this->container['helmRelease'];
    }

    /**
    * Sets helmRelease
    *
    * @param object|null $helmRelease Helm Chart的发布配置和状态信息
    *
    * @return $this
    */
    public function setHelmRelease($helmRelease)
    {
        $this->container['helmRelease'] = $helmRelease;
        return $this;
    }

    /**
    * Gets kustomization
    *  kustomization
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Kustomization|null
    */
    public function getKustomization()
    {
        return $this->container['kustomization'];
    }

    /**
    * Sets kustomization
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Kustomization|null $kustomization kustomization
    *
    * @return $this
    */
    public function setKustomization($kustomization)
    {
        $this->container['kustomization'] = $kustomization;
        return $this;
    }

    /**
    * Gets configSetStatus
    *  配置集合状态信息
    *
    * @return string|null
    */
    public function getConfigSetStatus()
    {
        return $this->container['configSetStatus'];
    }

    /**
    * Sets configSetStatus
    *
    * @param string|null $configSetStatus 配置集合状态信息
    *
    * @return $this
    */
    public function setConfigSetStatus($configSetStatus)
    {
        $this->container['configSetStatus'] = $configSetStatus;
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

