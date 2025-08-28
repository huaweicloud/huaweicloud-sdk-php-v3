<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceTypes  资源类型
    * projectId  项目ID
    * tagTypes  标签类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceTypes' => 'string',
            'projectId' => 'string',
            'tagTypes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceTypes  资源类型
    * projectId  项目ID
    * tagTypes  标签类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceTypes' => null,
        'projectId' => null,
        'tagTypes' => null
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
    * resourceTypes  资源类型
    * projectId  项目ID
    * tagTypes  标签类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceTypes' => 'resource_types',
            'projectId' => 'project_id',
            'tagTypes' => 'tag_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceTypes  资源类型
    * projectId  项目ID
    * tagTypes  标签类型
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceTypes' => 'setResourceTypes',
            'projectId' => 'setProjectId',
            'tagTypes' => 'setTagTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceTypes  资源类型
    * projectId  项目ID
    * tagTypes  标签类型
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceTypes' => 'getResourceTypes',
            'projectId' => 'getProjectId',
            'tagTypes' => 'getTagTypes'
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
    const TAG_TYPES_RESOURCE = 'resource';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTagTypesAllowableValues()
    {
        return [
            self::TAG_TYPES_RESOURCE,
        ];
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
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tagTypes'] = isset($data['tagTypes']) ? $data['tagTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceTypes'] === null) {
            $invalidProperties[] = "'resourceTypes' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['tagTypes'] === null) {
            $invalidProperties[] = "'tagTypes' can't be null";
        }
            $allowedValues = $this->getTagTypesAllowableValues();
                if (!is_null($this->container['tagTypes']) && !in_array($this->container['tagTypes'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagTypes', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets resourceTypes
    *  资源类型
    *
    * @return string
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string $resourceTypes 资源类型
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tagTypes
    *  标签类型
    *
    * @return string
    */
    public function getTagTypes()
    {
        return $this->container['tagTypes'];
    }

    /**
    * Sets tagTypes
    *
    * @param string $tagTypes 标签类型
    *
    * @return $this
    */
    public function setTagTypes($tagTypes)
    {
        $this->container['tagTypes'] = $tagTypes;
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

