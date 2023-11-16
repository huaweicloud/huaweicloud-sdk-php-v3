<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBuildJobSteps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBuildJobSteps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * properties  具体的构建步骤
    * moduleId  构建模块id
    * name  构建模块名称
    * version  构建版本
    * enable  是否开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'properties' => 'map[string,object]',
            'moduleId' => 'string',
            'name' => 'string',
            'version' => 'string',
            'enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * properties  具体的构建步骤
    * moduleId  构建模块id
    * name  构建模块名称
    * version  构建版本
    * enable  是否开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'properties' => null,
        'moduleId' => null,
        'name' => null,
        'version' => null,
        'enable' => null
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
    * properties  具体的构建步骤
    * moduleId  构建模块id
    * name  构建模块名称
    * version  构建版本
    * enable  是否开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'properties' => 'properties',
            'moduleId' => 'module_id',
            'name' => 'name',
            'version' => 'version',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * properties  具体的构建步骤
    * moduleId  构建模块id
    * name  构建模块名称
    * version  构建版本
    * enable  是否开启
    *
    * @var string[]
    */
    protected static $setters = [
            'properties' => 'setProperties',
            'moduleId' => 'setModuleId',
            'name' => 'setName',
            'version' => 'setVersion',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * properties  具体的构建步骤
    * moduleId  构建模块id
    * name  构建模块名称
    * version  构建版本
    * enable  是否开启
    *
    * @var string[]
    */
    protected static $getters = [
            'properties' => 'getProperties',
            'moduleId' => 'getModuleId',
            'name' => 'getName',
            'version' => 'getVersion',
            'enable' => 'getEnable'
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
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['moduleId'] === null) {
            $invalidProperties[] = "'moduleId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets properties
    *  具体的构建步骤
    *
    * @return map[string,object]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,object]|null $properties 具体的构建步骤
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets moduleId
    *  构建模块id
    *
    * @return string
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string $moduleId 构建模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets name
    *  构建模块名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 构建模块名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  构建版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 构建版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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

