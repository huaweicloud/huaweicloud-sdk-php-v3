<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAddMembersRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAddMembersRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * images  镜像ID列表
    * projects  项目ID列表
    * domains  账号ID列表
    * organizations  组织URN列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'images' => 'string[]',
            'projects' => 'string[]',
            'domains' => 'string[]',
            'organizations' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * images  镜像ID列表
    * projects  项目ID列表
    * domains  账号ID列表
    * organizations  组织URN列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'images' => null,
        'projects' => null,
        'domains' => null,
        'organizations' => null
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
    * images  镜像ID列表
    * projects  项目ID列表
    * domains  账号ID列表
    * organizations  组织URN列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'images' => 'images',
            'projects' => 'projects',
            'domains' => 'domains',
            'organizations' => 'organizations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * images  镜像ID列表
    * projects  项目ID列表
    * domains  账号ID列表
    * organizations  组织URN列表
    *
    * @var string[]
    */
    protected static $setters = [
            'images' => 'setImages',
            'projects' => 'setProjects',
            'domains' => 'setDomains',
            'organizations' => 'setOrganizations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * images  镜像ID列表
    * projects  项目ID列表
    * domains  账号ID列表
    * organizations  组织URN列表
    *
    * @var string[]
    */
    protected static $getters = [
            'images' => 'getImages',
            'projects' => 'getProjects',
            'domains' => 'getDomains',
            'organizations' => 'getOrganizations'
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
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['organizations'] = isset($data['organizations']) ? $data['organizations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ($this->container['projects'] === null) {
            $invalidProperties[] = "'projects' can't be null";
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
    * Gets images
    *  镜像ID列表
    *
    * @return string[]
    */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
    * Sets images
    *
    * @param string[] $images 镜像ID列表
    *
    * @return $this
    */
    public function setImages($images)
    {
        $this->container['images'] = $images;
        return $this;
    }

    /**
    * Gets projects
    *  项目ID列表
    *
    * @return string[]
    */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
    * Sets projects
    *
    * @param string[] $projects 项目ID列表
    *
    * @return $this
    */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;
        return $this;
    }

    /**
    * Gets domains
    *  账号ID列表
    *
    * @return string[]|null
    */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
    * Sets domains
    *
    * @param string[]|null $domains 账号ID列表
    *
    * @return $this
    */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;
        return $this;
    }

    /**
    * Gets organizations
    *  组织URN列表
    *
    * @return string[]|null
    */
    public function getOrganizations()
    {
        return $this->container['organizations'];
    }

    /**
    * Sets organizations
    *
    * @param string[]|null $organizations 组织URN列表
    *
    * @return $this
    */
    public function setOrganizations($organizations)
    {
        $this->container['organizations'] = $organizations;
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

