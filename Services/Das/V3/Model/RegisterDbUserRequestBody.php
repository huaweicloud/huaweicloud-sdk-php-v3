<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterDbUserRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterDbUserRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbUsername  数据库用户名称
    * dbUserPassword  数据库用户密码
    * datastoreType  数据库类型，取值为MySQL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbUsername' => 'string',
            'dbUserPassword' => 'string',
            'datastoreType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbUsername  数据库用户名称
    * dbUserPassword  数据库用户密码
    * datastoreType  数据库类型，取值为MySQL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbUsername' => null,
        'dbUserPassword' => null,
        'datastoreType' => null
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
    * dbUsername  数据库用户名称
    * dbUserPassword  数据库用户密码
    * datastoreType  数据库类型，取值为MySQL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbUsername' => 'db_username',
            'dbUserPassword' => 'db_user_password',
            'datastoreType' => 'datastore_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbUsername  数据库用户名称
    * dbUserPassword  数据库用户密码
    * datastoreType  数据库类型，取值为MySQL
    *
    * @var string[]
    */
    protected static $setters = [
            'dbUsername' => 'setDbUsername',
            'dbUserPassword' => 'setDbUserPassword',
            'datastoreType' => 'setDatastoreType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbUsername  数据库用户名称
    * dbUserPassword  数据库用户密码
    * datastoreType  数据库类型，取值为MySQL
    *
    * @var string[]
    */
    protected static $getters = [
            'dbUsername' => 'getDbUsername',
            'dbUserPassword' => 'getDbUserPassword',
            'datastoreType' => 'getDatastoreType'
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
        $this->container['dbUsername'] = isset($data['dbUsername']) ? $data['dbUsername'] : null;
        $this->container['dbUserPassword'] = isset($data['dbUserPassword']) ? $data['dbUserPassword'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbUsername'] === null) {
            $invalidProperties[] = "'dbUsername' can't be null";
        }
        if ($this->container['dbUserPassword'] === null) {
            $invalidProperties[] = "'dbUserPassword' can't be null";
        }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
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
    * Gets dbUsername
    *  数据库用户名称
    *
    * @return string
    */
    public function getDbUsername()
    {
        return $this->container['dbUsername'];
    }

    /**
    * Sets dbUsername
    *
    * @param string $dbUsername 数据库用户名称
    *
    * @return $this
    */
    public function setDbUsername($dbUsername)
    {
        $this->container['dbUsername'] = $dbUsername;
        return $this;
    }

    /**
    * Gets dbUserPassword
    *  数据库用户密码
    *
    * @return string
    */
    public function getDbUserPassword()
    {
        return $this->container['dbUserPassword'];
    }

    /**
    * Sets dbUserPassword
    *
    * @param string $dbUserPassword 数据库用户密码
    *
    * @return $this
    */
    public function setDbUserPassword($dbUserPassword)
    {
        $this->container['dbUserPassword'] = $dbUserPassword;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型，取值为MySQL
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库类型，取值为MySQL
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
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

