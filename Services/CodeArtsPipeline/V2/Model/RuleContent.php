<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  分组名称
    * canModifyWhenInherit  继承后的子策略是否可以修改阈值
    * properties  规则属性列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'canModifyWhenInherit' => 'bool',
            'properties' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleProperty[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  分组名称
    * canModifyWhenInherit  继承后的子策略是否可以修改阈值
    * properties  规则属性列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'canModifyWhenInherit' => null,
        'properties' => null
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
    * groupName  分组名称
    * canModifyWhenInherit  继承后的子策略是否可以修改阈值
    * properties  规则属性列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'canModifyWhenInherit' => 'can_modify_when_inherit',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  分组名称
    * canModifyWhenInherit  继承后的子策略是否可以修改阈值
    * properties  规则属性列表
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'canModifyWhenInherit' => 'setCanModifyWhenInherit',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  分组名称
    * canModifyWhenInherit  继承后的子策略是否可以修改阈值
    * properties  规则属性列表
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'canModifyWhenInherit' => 'getCanModifyWhenInherit',
            'properties' => 'getProperties'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['canModifyWhenInherit'] = isset($data['canModifyWhenInherit']) ? $data['canModifyWhenInherit'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if ((mb_strlen($this->container['groupName']) > 85)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 85.";
            }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
    * Gets groupName
    *  分组名称
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 分组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets canModifyWhenInherit
    *  继承后的子策略是否可以修改阈值
    *
    * @return bool|null
    */
    public function getCanModifyWhenInherit()
    {
        return $this->container['canModifyWhenInherit'];
    }

    /**
    * Sets canModifyWhenInherit
    *
    * @param bool|null $canModifyWhenInherit 继承后的子策略是否可以修改阈值
    *
    * @return $this
    */
    public function setCanModifyWhenInherit($canModifyWhenInherit)
    {
        $this->container['canModifyWhenInherit'] = $canModifyWhenInherit;
        return $this;
    }

    /**
    * Gets properties
    *  规则属性列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleProperty[]
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleProperty[] $properties 规则属性列表
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

