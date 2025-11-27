<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfigSetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfigSetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  源代码仓库名称
    * bucketSpec  对象存储桶的基本信息
    * helmChartSpec  Helm Chart源基本信息
    * gitRepositorySpec  gitRepositorySpec
    * helmRepositorySpec  Helm仓库基本信息
    * kustomizationSpec  kustomizationSpec
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespace' => 'string',
            'configSetType' => 'string',
            'repoName' => 'string',
            'bucketSpec' => 'object',
            'helmChartSpec' => 'object',
            'gitRepositorySpec' => '\HuaweiCloud\SDK\Ucs\V1\Model\GitRepositorySpec',
            'helmRepositorySpec' => 'object',
            'kustomizationSpec' => '\HuaweiCloud\SDK\Ucs\V1\Model\KustomizationSpec',
            'clusterInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\ClusterInfo',
            'secretInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\SecretInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  源代码仓库名称
    * bucketSpec  对象存储桶的基本信息
    * helmChartSpec  Helm Chart源基本信息
    * gitRepositorySpec  gitRepositorySpec
    * helmRepositorySpec  Helm仓库基本信息
    * kustomizationSpec  kustomizationSpec
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespace' => null,
        'configSetType' => null,
        'repoName' => null,
        'bucketSpec' => null,
        'helmChartSpec' => null,
        'gitRepositorySpec' => null,
        'helmRepositorySpec' => null,
        'kustomizationSpec' => null,
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
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  源代码仓库名称
    * bucketSpec  对象存储桶的基本信息
    * helmChartSpec  Helm Chart源基本信息
    * gitRepositorySpec  gitRepositorySpec
    * helmRepositorySpec  Helm仓库基本信息
    * kustomizationSpec  kustomizationSpec
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespace' => 'namespace',
            'configSetType' => 'configSetType',
            'repoName' => 'repoName',
            'bucketSpec' => 'bucketSpec',
            'helmChartSpec' => 'helmChartSpec',
            'gitRepositorySpec' => 'gitRepositorySpec',
            'helmRepositorySpec' => 'helmRepositorySpec',
            'kustomizationSpec' => 'kustomizationSpec',
            'clusterInfo' => 'clusterInfo',
            'secretInfo' => 'secretInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  源代码仓库名称
    * bucketSpec  对象存储桶的基本信息
    * helmChartSpec  Helm Chart源基本信息
    * gitRepositorySpec  gitRepositorySpec
    * helmRepositorySpec  Helm仓库基本信息
    * kustomizationSpec  kustomizationSpec
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'configSetType' => 'setConfigSetType',
            'repoName' => 'setRepoName',
            'bucketSpec' => 'setBucketSpec',
            'helmChartSpec' => 'setHelmChartSpec',
            'gitRepositorySpec' => 'setGitRepositorySpec',
            'helmRepositorySpec' => 'setHelmRepositorySpec',
            'kustomizationSpec' => 'setKustomizationSpec',
            'clusterInfo' => 'setClusterInfo',
            'secretInfo' => 'setSecretInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  配置集合的名称
    * namespace  命名空间
    * configSetType  配置集合的类型
    * repoName  源代码仓库名称
    * bucketSpec  对象存储桶的基本信息
    * helmChartSpec  Helm Chart源基本信息
    * gitRepositorySpec  gitRepositorySpec
    * helmRepositorySpec  Helm仓库基本信息
    * kustomizationSpec  kustomizationSpec
    * clusterInfo  clusterInfo
    * secretInfo  secretInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'configSetType' => 'getConfigSetType',
            'repoName' => 'getRepoName',
            'bucketSpec' => 'getBucketSpec',
            'helmChartSpec' => 'getHelmChartSpec',
            'gitRepositorySpec' => 'getGitRepositorySpec',
            'helmRepositorySpec' => 'getHelmRepositorySpec',
            'kustomizationSpec' => 'getKustomizationSpec',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['configSetType'] = isset($data['configSetType']) ? $data['configSetType'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['bucketSpec'] = isset($data['bucketSpec']) ? $data['bucketSpec'] : null;
        $this->container['helmChartSpec'] = isset($data['helmChartSpec']) ? $data['helmChartSpec'] : null;
        $this->container['gitRepositorySpec'] = isset($data['gitRepositorySpec']) ? $data['gitRepositorySpec'] : null;
        $this->container['helmRepositorySpec'] = isset($data['helmRepositorySpec']) ? $data['helmRepositorySpec'] : null;
        $this->container['kustomizationSpec'] = isset($data['kustomizationSpec']) ? $data['kustomizationSpec'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
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
    * Gets name
    *  配置集合的名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 配置集合的名称
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
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间
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
    *  源代码仓库名称
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
    * @param string|null $repoName 源代码仓库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets bucketSpec
    *  对象存储桶的基本信息
    *
    * @return object|null
    */
    public function getBucketSpec()
    {
        return $this->container['bucketSpec'];
    }

    /**
    * Sets bucketSpec
    *
    * @param object|null $bucketSpec 对象存储桶的基本信息
    *
    * @return $this
    */
    public function setBucketSpec($bucketSpec)
    {
        $this->container['bucketSpec'] = $bucketSpec;
        return $this;
    }

    /**
    * Gets helmChartSpec
    *  Helm Chart源基本信息
    *
    * @return object|null
    */
    public function getHelmChartSpec()
    {
        return $this->container['helmChartSpec'];
    }

    /**
    * Sets helmChartSpec
    *
    * @param object|null $helmChartSpec Helm Chart源基本信息
    *
    * @return $this
    */
    public function setHelmChartSpec($helmChartSpec)
    {
        $this->container['helmChartSpec'] = $helmChartSpec;
        return $this;
    }

    /**
    * Gets gitRepositorySpec
    *  gitRepositorySpec
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\GitRepositorySpec|null
    */
    public function getGitRepositorySpec()
    {
        return $this->container['gitRepositorySpec'];
    }

    /**
    * Sets gitRepositorySpec
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\GitRepositorySpec|null $gitRepositorySpec gitRepositorySpec
    *
    * @return $this
    */
    public function setGitRepositorySpec($gitRepositorySpec)
    {
        $this->container['gitRepositorySpec'] = $gitRepositorySpec;
        return $this;
    }

    /**
    * Gets helmRepositorySpec
    *  Helm仓库基本信息
    *
    * @return object|null
    */
    public function getHelmRepositorySpec()
    {
        return $this->container['helmRepositorySpec'];
    }

    /**
    * Sets helmRepositorySpec
    *
    * @param object|null $helmRepositorySpec Helm仓库基本信息
    *
    * @return $this
    */
    public function setHelmRepositorySpec($helmRepositorySpec)
    {
        $this->container['helmRepositorySpec'] = $helmRepositorySpec;
        return $this;
    }

    /**
    * Gets kustomizationSpec
    *  kustomizationSpec
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\KustomizationSpec|null
    */
    public function getKustomizationSpec()
    {
        return $this->container['kustomizationSpec'];
    }

    /**
    * Sets kustomizationSpec
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\KustomizationSpec|null $kustomizationSpec kustomizationSpec
    *
    * @return $this
    */
    public function setKustomizationSpec($kustomizationSpec)
    {
        $this->container['kustomizationSpec'] = $kustomizationSpec;
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

