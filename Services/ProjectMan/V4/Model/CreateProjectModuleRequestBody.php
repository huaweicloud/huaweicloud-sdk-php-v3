<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateProjectModuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateProjectModuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  模块描述
    * moduleName  模块名称
    * parentModuleId  父模块id
    * owner  owner
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'moduleName' => 'string',
            'parentModuleId' => 'int',
            'owner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  模块描述
    * moduleName  模块名称
    * parentModuleId  父模块id
    * owner  owner
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'moduleName' => null,
        'parentModuleId' => 'int32',
        'owner' => null
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
    * description  模块描述
    * moduleName  模块名称
    * parentModuleId  父模块id
    * owner  owner
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'moduleName' => 'module_name',
            'parentModuleId' => 'parent_module_id',
            'owner' => 'owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  模块描述
    * moduleName  模块名称
    * parentModuleId  父模块id
    * owner  owner
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'moduleName' => 'setModuleName',
            'parentModuleId' => 'setParentModuleId',
            'owner' => 'setOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  模块描述
    * moduleName  模块名称
    * parentModuleId  父模块id
    * owner  owner
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'moduleName' => 'getModuleName',
            'parentModuleId' => 'getParentModuleId',
            'owner' => 'getOwner'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['parentModuleId'] = isset($data['parentModuleId']) ? $data['parentModuleId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['moduleName'] === null) {
            $invalidProperties[] = "'moduleName' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
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
    * Gets description
    *  模块描述
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
    * @param string|null $description 模块描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets moduleName
    *  模块名称
    *
    * @return string
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string $moduleName 模块名称
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets parentModuleId
    *  父模块id
    *
    * @return int|null
    */
    public function getParentModuleId()
    {
        return $this->container['parentModuleId'];
    }

    /**
    * Sets parentModuleId
    *
    * @param int|null $parentModuleId 父模块id
    *
    * @return $this
    */
    public function setParentModuleId($parentModuleId)
    {
        $this->container['parentModuleId'] = $parentModuleId;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserRequest
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserRequest $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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

