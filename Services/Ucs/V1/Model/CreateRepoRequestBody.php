<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRepoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRepoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  仓库名称
    * namespace  所在命名空间
    * gitRepositorySpec  gitRepositorySpec
    * secretInfo  secretInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespace' => 'string',
            'gitRepositorySpec' => '\HuaweiCloud\SDK\Ucs\V1\Model\GitRepositorySpec',
            'secretInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\SecretInfo',
            'clusterInfo' => '\HuaweiCloud\SDK\Ucs\V1\Model\ClusterInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  仓库名称
    * namespace  所在命名空间
    * gitRepositorySpec  gitRepositorySpec
    * secretInfo  secretInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespace' => null,
        'gitRepositorySpec' => null,
        'secretInfo' => null,
        'clusterInfo' => null
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
    * name  仓库名称
    * namespace  所在命名空间
    * gitRepositorySpec  gitRepositorySpec
    * secretInfo  secretInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespace' => 'namespace',
            'gitRepositorySpec' => 'gitRepositorySpec',
            'secretInfo' => 'secretInfo',
            'clusterInfo' => 'clusterInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  仓库名称
    * namespace  所在命名空间
    * gitRepositorySpec  gitRepositorySpec
    * secretInfo  secretInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'gitRepositorySpec' => 'setGitRepositorySpec',
            'secretInfo' => 'setSecretInfo',
            'clusterInfo' => 'setClusterInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  仓库名称
    * namespace  所在命名空间
    * gitRepositorySpec  gitRepositorySpec
    * secretInfo  secretInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'gitRepositorySpec' => 'getGitRepositorySpec',
            'secretInfo' => 'getSecretInfo',
            'clusterInfo' => 'getClusterInfo'
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
        $this->container['gitRepositorySpec'] = isset($data['gitRepositorySpec']) ? $data['gitRepositorySpec'] : null;
        $this->container['secretInfo'] = isset($data['secretInfo']) ? $data['secretInfo'] : null;
        $this->container['clusterInfo'] = isset($data['clusterInfo']) ? $data['clusterInfo'] : null;
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
    * Gets namespace
    *  所在命名空间
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
    * @param string|null $namespace 所在命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

