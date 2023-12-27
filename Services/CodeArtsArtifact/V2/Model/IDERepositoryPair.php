<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IDERepositoryPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IDERepositoryPair';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoName  仓库名称
    * includesPattern  路径
    * projectId  项目id
    * description  描述
    * snapshot  snapshot仓库名称
    * release  release仓库名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoName' => 'string',
            'includesPattern' => 'string',
            'projectId' => 'string',
            'description' => 'string',
            'snapshot' => 'string',
            'release' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoName  仓库名称
    * includesPattern  路径
    * projectId  项目id
    * description  描述
    * snapshot  snapshot仓库名称
    * release  release仓库名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoName' => null,
        'includesPattern' => null,
        'projectId' => null,
        'description' => null,
        'snapshot' => null,
        'release' => null
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
    * repoName  仓库名称
    * includesPattern  路径
    * projectId  项目id
    * description  描述
    * snapshot  snapshot仓库名称
    * release  release仓库名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoName' => 'repo_name',
            'includesPattern' => 'includes_pattern',
            'projectId' => 'project_id',
            'description' => 'description',
            'snapshot' => 'snapshot',
            'release' => 'release'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoName  仓库名称
    * includesPattern  路径
    * projectId  项目id
    * description  描述
    * snapshot  snapshot仓库名称
    * release  release仓库名称
    *
    * @var string[]
    */
    protected static $setters = [
            'repoName' => 'setRepoName',
            'includesPattern' => 'setIncludesPattern',
            'projectId' => 'setProjectId',
            'description' => 'setDescription',
            'snapshot' => 'setSnapshot',
            'release' => 'setRelease'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoName  仓库名称
    * includesPattern  路径
    * projectId  项目id
    * description  描述
    * snapshot  snapshot仓库名称
    * release  release仓库名称
    *
    * @var string[]
    */
    protected static $getters = [
            'repoName' => 'getRepoName',
            'includesPattern' => 'getIncludesPattern',
            'projectId' => 'getProjectId',
            'description' => 'getDescription',
            'snapshot' => 'getSnapshot',
            'release' => 'getRelease'
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
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['snapshot'] = isset($data['snapshot']) ? $data['snapshot'] : null;
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
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
    * Gets includesPattern
    *  路径
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
    * @param string|null $includesPattern 路径
    *
    * @return $this
    */
    public function setIncludesPattern($includesPattern)
    {
        $this->container['includesPattern'] = $includesPattern;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets snapshot
    *  snapshot仓库名称
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
    * @param string|null $snapshot snapshot仓库名称
    *
    * @return $this
    */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;
        return $this;
    }

    /**
    * Gets release
    *  release仓库名称
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
    * @param string|null $release release仓库名称
    *
    * @return $this
    */
    public function setRelease($release)
    {
        $this->container['release'] = $release;
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

