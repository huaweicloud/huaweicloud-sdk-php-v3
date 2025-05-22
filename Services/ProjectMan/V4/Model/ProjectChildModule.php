<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectChildModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectChildModule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * moduleId  模块id
    * moduleName  模块名称
    * owner  owner
    * deepth  模块层级
    * isParent  是否是父级，true 父模块， false 非父模块
    * parentModuleId  父模块id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'moduleId' => 'int',
            'moduleName' => 'string',
            'owner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ModuleOwner',
            'deepth' => 'int',
            'isParent' => 'bool',
            'parentModuleId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * moduleId  模块id
    * moduleName  模块名称
    * owner  owner
    * deepth  模块层级
    * isParent  是否是父级，true 父模块， false 非父模块
    * parentModuleId  父模块id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'moduleId' => 'int32',
        'moduleName' => null,
        'owner' => null,
        'deepth' => 'int32',
        'isParent' => null,
        'parentModuleId' => 'int32'
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
    * moduleId  模块id
    * moduleName  模块名称
    * owner  owner
    * deepth  模块层级
    * isParent  是否是父级，true 父模块， false 非父模块
    * parentModuleId  父模块id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'moduleId' => 'module_id',
            'moduleName' => 'module_name',
            'owner' => 'owner',
            'deepth' => 'deepth',
            'isParent' => 'is_parent',
            'parentModuleId' => 'parent_module_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * moduleId  模块id
    * moduleName  模块名称
    * owner  owner
    * deepth  模块层级
    * isParent  是否是父级，true 父模块， false 非父模块
    * parentModuleId  父模块id
    *
    * @var string[]
    */
    protected static $setters = [
            'moduleId' => 'setModuleId',
            'moduleName' => 'setModuleName',
            'owner' => 'setOwner',
            'deepth' => 'setDeepth',
            'isParent' => 'setIsParent',
            'parentModuleId' => 'setParentModuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * moduleId  模块id
    * moduleName  模块名称
    * owner  owner
    * deepth  模块层级
    * isParent  是否是父级，true 父模块， false 非父模块
    * parentModuleId  父模块id
    *
    * @var string[]
    */
    protected static $getters = [
            'moduleId' => 'getModuleId',
            'moduleName' => 'getModuleName',
            'owner' => 'getOwner',
            'deepth' => 'getDeepth',
            'isParent' => 'getIsParent',
            'parentModuleId' => 'getParentModuleId'
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
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['deepth'] = isset($data['deepth']) ? $data['deepth'] : null;
        $this->container['isParent'] = isset($data['isParent']) ? $data['isParent'] : null;
        $this->container['parentModuleId'] = isset($data['parentModuleId']) ? $data['parentModuleId'] : null;
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
    * Gets moduleId
    *  模块id
    *
    * @return int|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param int|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets moduleName
    *  模块名称
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 模块名称
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ModuleOwner|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ModuleOwner|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets deepth
    *  模块层级
    *
    * @return int|null
    */
    public function getDeepth()
    {
        return $this->container['deepth'];
    }

    /**
    * Sets deepth
    *
    * @param int|null $deepth 模块层级
    *
    * @return $this
    */
    public function setDeepth($deepth)
    {
        $this->container['deepth'] = $deepth;
        return $this;
    }

    /**
    * Gets isParent
    *  是否是父级，true 父模块， false 非父模块
    *
    * @return bool|null
    */
    public function getIsParent()
    {
        return $this->container['isParent'];
    }

    /**
    * Sets isParent
    *
    * @param bool|null $isParent 是否是父级，true 父模块， false 非父模块
    *
    * @return $this
    */
    public function setIsParent($isParent)
    {
        $this->container['isParent'] = $isParent;
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

