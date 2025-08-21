<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserRefPermissionBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserRefPermissionBasicDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hasPermission  **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    * isProtect  **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hasPermission' => 'bool',
            'isProtect' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hasPermission  **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    * isProtect  **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hasPermission' => null,
        'isProtect' => null
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
    * hasPermission  **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    * isProtect  **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hasPermission' => 'has_permission',
            'isProtect' => 'is_protect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hasPermission  **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    * isProtect  **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @var string[]
    */
    protected static $setters = [
            'hasPermission' => 'setHasPermission',
            'isProtect' => 'setIsProtect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hasPermission  **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    * isProtect  **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @var string[]
    */
    protected static $getters = [
            'hasPermission' => 'getHasPermission',
            'isProtect' => 'getIsProtect'
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
        $this->container['hasPermission'] = isset($data['hasPermission']) ? $data['hasPermission'] : null;
        $this->container['isProtect'] = isset($data['isProtect']) ? $data['isProtect'] : null;
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
    * Gets hasPermission
    *  **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    *
    * @return bool|null
    */
    public function getHasPermission()
    {
        return $this->container['hasPermission'];
    }

    /**
    * Sets hasPermission
    *
    * @param bool|null $hasPermission **参数解释：** 是否有权限。 **取值范围：** true：有权限，false：没权限
    *
    * @return $this
    */
    public function setHasPermission($hasPermission)
    {
        $this->container['hasPermission'] = $hasPermission;
        return $this;
    }

    /**
    * Gets isProtect
    *  **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @return bool|null
    */
    public function getIsProtect()
    {
        return $this->container['isProtect'];
    }

    /**
    * Sets isProtect
    *
    * @param bool|null $isProtect **参数解释：** 是否保护分支。 **取值范围：** true：是保护分支，false：非保护分支
    *
    * @return $this
    */
    public function setIsProtect($isProtect)
    {
        $this->container['isProtect'] = $isProtect;
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

