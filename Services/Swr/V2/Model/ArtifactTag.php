<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ArtifactTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ArtifactTag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Tag ID
    * repositoryId  制品仓库ID
    * artifactId  制品版本ID
    * name  tag名称
    * pushTime  tag的上传时间
    * pullTime  tag的下载时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'repositoryId' => 'int',
            'artifactId' => 'int',
            'name' => 'string',
            'pushTime' => '\DateTime',
            'pullTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Tag ID
    * repositoryId  制品仓库ID
    * artifactId  制品版本ID
    * name  tag名称
    * pushTime  tag的上传时间
    * pullTime  tag的下载时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'repositoryId' => 'int64',
        'artifactId' => 'int64',
        'name' => null,
        'pushTime' => 'date-time',
        'pullTime' => 'date-time'
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
    * id  Tag ID
    * repositoryId  制品仓库ID
    * artifactId  制品版本ID
    * name  tag名称
    * pushTime  tag的上传时间
    * pullTime  tag的下载时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'repositoryId' => 'repository_id',
            'artifactId' => 'artifact_id',
            'name' => 'name',
            'pushTime' => 'push_time',
            'pullTime' => 'pull_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Tag ID
    * repositoryId  制品仓库ID
    * artifactId  制品版本ID
    * name  tag名称
    * pushTime  tag的上传时间
    * pullTime  tag的下载时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'repositoryId' => 'setRepositoryId',
            'artifactId' => 'setArtifactId',
            'name' => 'setName',
            'pushTime' => 'setPushTime',
            'pullTime' => 'setPullTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Tag ID
    * repositoryId  制品仓库ID
    * artifactId  制品版本ID
    * name  tag名称
    * pushTime  tag的上传时间
    * pullTime  tag的下载时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'repositoryId' => 'getRepositoryId',
            'artifactId' => 'getArtifactId',
            'name' => 'getName',
            'pushTime' => 'getPushTime',
            'pullTime' => 'getPullTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pushTime'] = isset($data['pushTime']) ? $data['pushTime'] : null;
        $this->container['pullTime'] = isset($data['pullTime']) ? $data['pullTime'] : null;
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
    * Gets id
    *  Tag ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id Tag ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets repositoryId
    *  制品仓库ID
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId 制品仓库ID
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets artifactId
    *  制品版本ID
    *
    * @return int|null
    */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
    * Sets artifactId
    *
    * @param int|null $artifactId 制品版本ID
    *
    * @return $this
    */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;
        return $this;
    }

    /**
    * Gets name
    *  tag名称
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
    * @param string|null $name tag名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets pushTime
    *  tag的上传时间
    *
    * @return \DateTime|null
    */
    public function getPushTime()
    {
        return $this->container['pushTime'];
    }

    /**
    * Sets pushTime
    *
    * @param \DateTime|null $pushTime tag的上传时间
    *
    * @return $this
    */
    public function setPushTime($pushTime)
    {
        $this->container['pushTime'] = $pushTime;
        return $this;
    }

    /**
    * Gets pullTime
    *  tag的下载时间
    *
    * @return \DateTime|null
    */
    public function getPullTime()
    {
        return $this->container['pullTime'];
    }

    /**
    * Sets pullTime
    *
    * @param \DateTime|null $pullTime tag的下载时间
    *
    * @return $this
    */
    public function setPullTime($pullTime)
    {
        $this->container['pullTime'] = $pullTime;
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

