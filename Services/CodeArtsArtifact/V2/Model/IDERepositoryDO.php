<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IDERepositoryDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IDERepositoryDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryName  仓库名称
    * format  仓库类型
    * description  仓库描述
    * release  release仓库名称
    * snapshot  snapshot仓库名称
    * includesPattern  路径
    * shareRight  共享权限级别
    * projectId  项目ID
    * type  仓库类别，本地仓或聚合仓
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryName' => 'string',
            'format' => 'string',
            'description' => 'string',
            'release' => 'string',
            'snapshot' => 'string',
            'includesPattern' => 'string',
            'shareRight' => 'string',
            'projectId' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryName  仓库名称
    * format  仓库类型
    * description  仓库描述
    * release  release仓库名称
    * snapshot  snapshot仓库名称
    * includesPattern  路径
    * shareRight  共享权限级别
    * projectId  项目ID
    * type  仓库类别，本地仓或聚合仓
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryName' => null,
        'format' => null,
        'description' => null,
        'release' => null,
        'snapshot' => null,
        'includesPattern' => null,
        'shareRight' => null,
        'projectId' => null,
        'type' => null
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
    * repositoryName  仓库名称
    * format  仓库类型
    * description  仓库描述
    * release  release仓库名称
    * snapshot  snapshot仓库名称
    * includesPattern  路径
    * shareRight  共享权限级别
    * projectId  项目ID
    * type  仓库类别，本地仓或聚合仓
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryName' => 'repository_name',
            'format' => 'format',
            'description' => 'description',
            'release' => 'release',
            'snapshot' => 'snapshot',
            'includesPattern' => 'includes_pattern',
            'shareRight' => 'share_right',
            'projectId' => 'project_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryName  仓库名称
    * format  仓库类型
    * description  仓库描述
    * release  release仓库名称
    * snapshot  snapshot仓库名称
    * includesPattern  路径
    * shareRight  共享权限级别
    * projectId  项目ID
    * type  仓库类别，本地仓或聚合仓
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryName' => 'setRepositoryName',
            'format' => 'setFormat',
            'description' => 'setDescription',
            'release' => 'setRelease',
            'snapshot' => 'setSnapshot',
            'includesPattern' => 'setIncludesPattern',
            'shareRight' => 'setShareRight',
            'projectId' => 'setProjectId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryName  仓库名称
    * format  仓库类型
    * description  仓库描述
    * release  release仓库名称
    * snapshot  snapshot仓库名称
    * includesPattern  路径
    * shareRight  共享权限级别
    * projectId  项目ID
    * type  仓库类别，本地仓或聚合仓
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryName' => 'getRepositoryName',
            'format' => 'getFormat',
            'description' => 'getDescription',
            'release' => 'getRelease',
            'snapshot' => 'getSnapshot',
            'includesPattern' => 'getIncludesPattern',
            'shareRight' => 'getShareRight',
            'projectId' => 'getProjectId',
            'type' => 'getType'
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
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
        $this->container['snapshot'] = isset($data['snapshot']) ? $data['snapshot'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['shareRight'] = isset($data['shareRight']) ? $data['shareRight'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets repositoryName
    *  仓库名称
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
    * @param string|null $repositoryName 仓库名称
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets format
    *  仓库类型
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
    * @param string|null $format 仓库类型
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
    *  仓库描述
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
    * @param string|null $description 仓库描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets shareRight
    *  共享权限级别
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
    * @param string|null $shareRight 共享权限级别
    *
    * @return $this
    */
    public function setShareRight($shareRight)
    {
        $this->container['shareRight'] = $shareRight;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  仓库类别，本地仓或聚合仓
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 仓库类别，本地仓或聚合仓
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

