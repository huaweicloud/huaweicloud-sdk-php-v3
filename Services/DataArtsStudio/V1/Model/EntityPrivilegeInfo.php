<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EntityPrivilegeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EntityPrivilegeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privileges  特权列表
    * inheritPrivileges  继承特权列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privileges' => 'string[]',
            'inheritPrivileges' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privileges  特权列表
    * inheritPrivileges  继承特权列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privileges' => null,
        'inheritPrivileges' => null
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
    * privileges  特权列表
    * inheritPrivileges  继承特权列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privileges' => 'privileges',
            'inheritPrivileges' => 'inherit_privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privileges  特权列表
    * inheritPrivileges  继承特权列表
    *
    * @var string[]
    */
    protected static $setters = [
            'privileges' => 'setPrivileges',
            'inheritPrivileges' => 'setInheritPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privileges  特权列表
    * inheritPrivileges  继承特权列表
    *
    * @var string[]
    */
    protected static $getters = [
            'privileges' => 'getPrivileges',
            'inheritPrivileges' => 'getInheritPrivileges'
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
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
        $this->container['inheritPrivileges'] = isset($data['inheritPrivileges']) ? $data['inheritPrivileges'] : null;
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
    * Gets privileges
    *  特权列表
    *
    * @return string[]|null
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param string[]|null $privileges 特权列表
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
        return $this;
    }

    /**
    * Gets inheritPrivileges
    *  继承特权列表
    *
    * @return string[]|null
    */
    public function getInheritPrivileges()
    {
        return $this->container['inheritPrivileges'];
    }

    /**
    * Sets inheritPrivileges
    *
    * @param string[]|null $inheritPrivileges 继承特权列表
    *
    * @return $this
    */
    public function setInheritPrivileges($inheritPrivileges)
    {
        $this->container['inheritPrivileges'] = $inheritPrivileges;
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

