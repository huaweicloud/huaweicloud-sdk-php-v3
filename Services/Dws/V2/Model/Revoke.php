<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Revoke implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Revoke';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permission  **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    * revokeWith  **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permission' => 'string',
            'revokeWith' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permission  **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    * revokeWith  **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permission' => null,
        'revokeWith' => null
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
    * permission  **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    * revokeWith  **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permission' => 'permission',
            'revokeWith' => 'revoke_with'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permission  **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    * revokeWith  **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'permission' => 'setPermission',
            'revokeWith' => 'setRevokeWith'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permission  **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    * revokeWith  **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'permission' => 'getPermission',
            'revokeWith' => 'getRevokeWith'
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
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['revokeWith'] = isset($data['revokeWith']) ? $data['revokeWith'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permission'] === null) {
            $invalidProperties[] = "'permission' can't be null";
        }
        if ($this->container['revokeWith'] === null) {
            $invalidProperties[] = "'revokeWith' can't be null";
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
    * Gets permission
    *  **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    *
    * @return string
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string $permission **参数解释**： 权限名称，根据不通数据库对象类型，拥有权限不同。 **取值范围**： - database：CREATE | CONNECT | TEMPORARY | TEMP  ALL  PRIVILEGES - schema：CREATE | USAGE | ALTER | DROP  ALL  PRIVILEGES - table：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - view：SELECT | INSERT | UPDATE | DELETE | TRUNCATE | REFERENCES | TRIGGER | ANALYZE | ANALYSE | VACUUM | ALTER | DROP  ALL  PRIVILEGES - column：SELECT | INSERT | UPDATE | REFERENCES  ALL  PRIVILEGES - function：EXECUTE  ALL  PRIVILEGES - sequence：SELECT | UPDATE | USAGE  ALL  PRIVILEGES - nodegroup：CREATE | USAGE | COMPUTE  ALL  PRIVILEGES - role：role_name（角色名称）
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets revokeWith
    *  **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @return bool
    */
    public function getRevokeWith()
    {
        return $this->container['revokeWith'];
    }

    /**
    * Sets revokeWith
    *
    * @param bool $revokeWith **参数解释**： 是否仅移除授权选项。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRevokeWith($revokeWith)
    {
        $this->container['revokeWith'] = $revokeWith;
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

