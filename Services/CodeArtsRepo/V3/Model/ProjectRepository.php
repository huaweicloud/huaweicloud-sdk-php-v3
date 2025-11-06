<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectRepository implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectRepository';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryUuid  仓库UUID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'repositoryUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryUuid  仓库UUID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'repositoryUuid' => null
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
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryUuid  仓库UUID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'projectUuid',
            'repositoryUuid' => 'repositoryUuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryUuid  仓库UUID
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'repositoryUuid' => 'setRepositoryUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryUuid  仓库UUID
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'repositoryUuid' => 'getRepositoryUuid'
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
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['repositoryUuid'] = isset($data['repositoryUuid']) ? $data['repositoryUuid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectUuid']) && (mb_strlen($this->container['projectUuid']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectUuid', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectUuid']) && (mb_strlen($this->container['projectUuid']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectUuid', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['repositoryUuid']) && (mb_strlen($this->container['repositoryUuid']) > 32)) {
                $invalidProperties[] = "invalid value for 'repositoryUuid', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repositoryUuid']) && (mb_strlen($this->container['repositoryUuid']) < 32)) {
                $invalidProperties[] = "invalid value for 'repositoryUuid', the character length must be bigger than or equal to 32.";
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
    * Gets projectUuid
    *  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets repositoryUuid
    *  仓库UUID
    *
    * @return string|null
    */
    public function getRepositoryUuid()
    {
        return $this->container['repositoryUuid'];
    }

    /**
    * Sets repositoryUuid
    *
    * @param string|null $repositoryUuid 仓库UUID
    *
    * @return $this
    */
    public function setRepositoryUuid($repositoryUuid)
    {
        $this->container['repositoryUuid'] = $repositoryUuid;
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

