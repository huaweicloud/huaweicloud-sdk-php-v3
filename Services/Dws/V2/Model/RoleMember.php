<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleMember';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 角色名。 **取值范围**： 不涉及。
    * desc  **参数解释**： 角色描述。 **取值范围**： 不涉及。
    * permission  **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    * grantWith  **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'desc' => 'string',
            'permission' => 'bool',
            'grantWith' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 角色名。 **取值范围**： 不涉及。
    * desc  **参数解释**： 角色描述。 **取值范围**： 不涉及。
    * permission  **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    * grantWith  **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'desc' => null,
        'permission' => null,
        'grantWith' => null
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
    * name  **参数解释**： 角色名。 **取值范围**： 不涉及。
    * desc  **参数解释**： 角色描述。 **取值范围**： 不涉及。
    * permission  **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    * grantWith  **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'desc' => 'desc',
            'permission' => 'permission',
            'grantWith' => 'grant_with'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 角色名。 **取值范围**： 不涉及。
    * desc  **参数解释**： 角色描述。 **取值范围**： 不涉及。
    * permission  **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    * grantWith  **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'desc' => 'setDesc',
            'permission' => 'setPermission',
            'grantWith' => 'setGrantWith'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 角色名。 **取值范围**： 不涉及。
    * desc  **参数解释**： 角色描述。 **取值范围**： 不涉及。
    * permission  **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    * grantWith  **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'desc' => 'getDesc',
            'permission' => 'getPermission',
            'grantWith' => 'getGrantWith'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['grantWith'] = isset($data['grantWith']) ? $data['grantWith'] : null;
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
    * Gets name
    *  **参数解释**： 角色名。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 角色名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 角色描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 角色描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets permission
    *  **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param bool|null $permission **参数解释**： 是否允许授予某个角色特定的权限。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets grantWith
    *  **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getGrantWith()
    {
        return $this->container['grantWith'];
    }

    /**
    * Sets grantWith
    *
    * @param bool|null $grantWith **参数解释**： 是否允许该角色将已获得的权限再转授给其他角色。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGrantWith($grantWith)
    {
        $this->container['grantWith'] = $grantWith;
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

