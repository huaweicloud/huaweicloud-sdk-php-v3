<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Role implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Role';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  角色id
    * displayName  角色名称
    * roleDescription  角色描述
    * description  描述
    * scope  角色范围
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'displayName' => 'string',
            'roleDescription' => 'string',
            'description' => 'string',
            'scope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  角色id
    * displayName  角色名称
    * roleDescription  角色描述
    * description  描述
    * scope  角色范围
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'displayName' => null,
        'roleDescription' => null,
        'description' => null,
        'scope' => null
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
    * id  角色id
    * displayName  角色名称
    * roleDescription  角色描述
    * description  描述
    * scope  角色范围
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'displayName' => 'display_name',
            'roleDescription' => 'role_description',
            'description' => 'description',
            'scope' => 'scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  角色id
    * displayName  角色名称
    * roleDescription  角色描述
    * description  描述
    * scope  角色范围
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'displayName' => 'setDisplayName',
            'roleDescription' => 'setRoleDescription',
            'description' => 'setDescription',
            'scope' => 'setScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  角色id
    * displayName  角色名称
    * roleDescription  角色描述
    * description  描述
    * scope  角色范围
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'displayName' => 'getDisplayName',
            'roleDescription' => 'getRoleDescription',
            'description' => 'getDescription',
            'scope' => 'getScope'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['roleDescription'] = isset($data['roleDescription']) ? $data['roleDescription'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
            if ((mb_strlen($this->container['displayName']) > 256)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['displayName']) < 2)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['roleDescription'] === null) {
            $invalidProperties[] = "'roleDescription' can't be null";
        }
            if ((mb_strlen($this->container['roleDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'roleDescription', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['roleDescription']) < 2)) {
                $invalidProperties[] = "invalid value for 'roleDescription', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['description']) < 2)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
            if ((mb_strlen($this->container['scope']) > 20)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['scope']) < 2)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 2.";
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
    * Gets id
    *  角色id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 角色id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets displayName
    *  角色名称
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 角色名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets roleDescription
    *  角色描述
    *
    * @return string
    */
    public function getRoleDescription()
    {
        return $this->container['roleDescription'];
    }

    /**
    * Sets roleDescription
    *
    * @param string $roleDescription 角色描述
    *
    * @return $this
    */
    public function setRoleDescription($roleDescription)
    {
        $this->container['roleDescription'] = $roleDescription;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets scope
    *  角色范围
    *
    * @return string
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string $scope 角色范围
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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

