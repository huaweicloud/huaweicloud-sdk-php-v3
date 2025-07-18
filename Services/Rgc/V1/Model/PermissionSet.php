<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionSet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionSetId  权限集ID。
    * permissionSetName  权限集名称。
    * description  权限集描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionSetId' => 'string',
            'permissionSetName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionSetId  权限集ID。
    * permissionSetName  权限集名称。
    * description  权限集描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionSetId' => null,
        'permissionSetName' => null,
        'description' => null
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
    * permissionSetId  权限集ID。
    * permissionSetName  权限集名称。
    * description  权限集描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionSetId' => 'permission_set_id',
            'permissionSetName' => 'permission_set_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionSetId  权限集ID。
    * permissionSetName  权限集名称。
    * description  权限集描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionSetId' => 'setPermissionSetId',
            'permissionSetName' => 'setPermissionSetName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionSetId  权限集ID。
    * permissionSetName  权限集名称。
    * description  权限集描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionSetId' => 'getPermissionSetId',
            'permissionSetName' => 'getPermissionSetName',
            'description' => 'getDescription'
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['permissionSetName'] = isset($data['permissionSetName']) ? $data['permissionSetName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionSetName']) && (mb_strlen($this->container['permissionSetName']) > 64)) {
                $invalidProperties[] = "invalid value for 'permissionSetName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['permissionSetName']) && (mb_strlen($this->container['permissionSetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets permissionSetId
    *  权限集ID。
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 权限集ID。
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets permissionSetName
    *  权限集名称。
    *
    * @return string|null
    */
    public function getPermissionSetName()
    {
        return $this->container['permissionSetName'];
    }

    /**
    * Sets permissionSetName
    *
    * @param string|null $permissionSetName 权限集名称。
    *
    * @return $this
    */
    public function setPermissionSetName($permissionSetName)
    {
        $this->container['permissionSetName'] = $permissionSetName;
        return $this;
    }

    /**
    * Gets description
    *  权限集描述。
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
    * @param string|null $description 权限集描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

