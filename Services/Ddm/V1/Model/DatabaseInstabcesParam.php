<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseInstabcesParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseInstabcesParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  逻辑库关联的RDS的id
    * adminUser  关联RDS实例的用户。
    * adminPassword  关联RDS实例的密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'adminUser' => 'string',
            'adminPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  逻辑库关联的RDS的id
    * adminUser  关联RDS实例的用户。
    * adminPassword  关联RDS实例的密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'adminUser' => null,
        'adminPassword' => null
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
    * id  逻辑库关联的RDS的id
    * adminUser  关联RDS实例的用户。
    * adminPassword  关联RDS实例的密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'adminUser' => 'adminUser',
            'adminPassword' => 'adminPassword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  逻辑库关联的RDS的id
    * adminUser  关联RDS实例的用户。
    * adminPassword  关联RDS实例的密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'adminUser' => 'setAdminUser',
            'adminPassword' => 'setAdminPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  逻辑库关联的RDS的id
    * adminUser  关联RDS实例的用户。
    * adminPassword  关联RDS实例的密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'adminUser' => 'getAdminUser',
            'adminPassword' => 'getAdminPassword'
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
        $this->container['adminUser'] = isset($data['adminUser']) ? $data['adminUser'] : null;
        $this->container['adminPassword'] = isset($data['adminPassword']) ? $data['adminPassword'] : null;
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
        if ($this->container['adminUser'] === null) {
            $invalidProperties[] = "'adminUser' can't be null";
        }
        if ($this->container['adminPassword'] === null) {
            $invalidProperties[] = "'adminPassword' can't be null";
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
    *  逻辑库关联的RDS的id
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
    * @param string $id 逻辑库关联的RDS的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets adminUser
    *  关联RDS实例的用户。
    *
    * @return string
    */
    public function getAdminUser()
    {
        return $this->container['adminUser'];
    }

    /**
    * Sets adminUser
    *
    * @param string $adminUser 关联RDS实例的用户。
    *
    * @return $this
    */
    public function setAdminUser($adminUser)
    {
        $this->container['adminUser'] = $adminUser;
        return $this;
    }

    /**
    * Gets adminPassword
    *  关联RDS实例的密码。
    *
    * @return string
    */
    public function getAdminPassword()
    {
        return $this->container['adminPassword'];
    }

    /**
    * Sets adminPassword
    *
    * @param string $adminPassword 关联RDS实例的密码。
    *
    * @return $this
    */
    public function setAdminPassword($adminPassword)
    {
        $this->container['adminPassword'] = $adminPassword;
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

