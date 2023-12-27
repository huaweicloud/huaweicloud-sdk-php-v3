<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNotMavenRepoDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNotMavenRepoDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * format  仓库格式
    * type  仓库类型
    * repositoryName  仓库名称
    * description  仓库描述
    * includesPattern  路径白名单
    * projectId  项目id
    * shareRight  共享策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'format' => 'string',
            'type' => 'string',
            'repositoryName' => 'string',
            'description' => 'string',
            'includesPattern' => 'string',
            'projectId' => 'string',
            'shareRight' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * format  仓库格式
    * type  仓库类型
    * repositoryName  仓库名称
    * description  仓库描述
    * includesPattern  路径白名单
    * projectId  项目id
    * shareRight  共享策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'format' => null,
        'type' => null,
        'repositoryName' => null,
        'description' => null,
        'includesPattern' => null,
        'projectId' => null,
        'shareRight' => null
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
    * format  仓库格式
    * type  仓库类型
    * repositoryName  仓库名称
    * description  仓库描述
    * includesPattern  路径白名单
    * projectId  项目id
    * shareRight  共享策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'format' => 'format',
            'type' => 'type',
            'repositoryName' => 'repository_name',
            'description' => 'description',
            'includesPattern' => 'includes_pattern',
            'projectId' => 'project_id',
            'shareRight' => 'share_right'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * format  仓库格式
    * type  仓库类型
    * repositoryName  仓库名称
    * description  仓库描述
    * includesPattern  路径白名单
    * projectId  项目id
    * shareRight  共享策略
    *
    * @var string[]
    */
    protected static $setters = [
            'format' => 'setFormat',
            'type' => 'setType',
            'repositoryName' => 'setRepositoryName',
            'description' => 'setDescription',
            'includesPattern' => 'setIncludesPattern',
            'projectId' => 'setProjectId',
            'shareRight' => 'setShareRight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * format  仓库格式
    * type  仓库类型
    * repositoryName  仓库名称
    * description  仓库描述
    * includesPattern  路径白名单
    * projectId  项目id
    * shareRight  共享策略
    *
    * @var string[]
    */
    protected static $getters = [
            'format' => 'getFormat',
            'type' => 'getType',
            'repositoryName' => 'getRepositoryName',
            'description' => 'getDescription',
            'includesPattern' => 'getIncludesPattern',
            'projectId' => 'getProjectId',
            'shareRight' => 'getShareRight'
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['shareRight'] = isset($data['shareRight']) ? $data['shareRight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['repositoryName'] === null) {
            $invalidProperties[] = "'repositoryName' can't be null";
        }
        if ($this->container['includesPattern'] === null) {
            $invalidProperties[] = "'includesPattern' can't be null";
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
    * Gets format
    *  仓库格式
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
    * @param string $format 仓库格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets type
    *  仓库类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 仓库类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets repositoryName
    *  仓库名称
    *
    * @return string
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string $repositoryName 仓库名称
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
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
    * Gets includesPattern
    *  路径白名单
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
    * @param string $includesPattern 路径白名单
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
    * Gets shareRight
    *  共享策略
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
    * @param string|null $shareRight 共享策略
    *
    * @return $this
    */
    public function setShareRight($shareRight)
    {
        $this->container['shareRight'] = $shareRight;
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

