<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGaussMysqlDatabaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGaussMysqlDatabaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名称。
    * charset  数据库使用的字符集，如utf8mb4、gbk等。
    * comment  数据库备注。
    * users  已授权数据库用户列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'charset' => 'string',
            'comment' => 'string',
            'users' => '\HuaweiCloud\SDK\GaussDB\V3\Model\GaussMySqlDatabaseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名称。
    * charset  数据库使用的字符集，如utf8mb4、gbk等。
    * comment  数据库备注。
    * users  已授权数据库用户列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'charset' => null,
        'comment' => null,
        'users' => null
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
    * name  数据库名称。
    * charset  数据库使用的字符集，如utf8mb4、gbk等。
    * comment  数据库备注。
    * users  已授权数据库用户列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'charset' => 'charset',
            'comment' => 'comment',
            'users' => 'users'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名称。
    * charset  数据库使用的字符集，如utf8mb4、gbk等。
    * comment  数据库备注。
    * users  已授权数据库用户列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'charset' => 'setCharset',
            'comment' => 'setComment',
            'users' => 'setUsers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名称。
    * charset  数据库使用的字符集，如utf8mb4、gbk等。
    * comment  数据库备注。
    * users  已授权数据库用户列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'charset' => 'getCharset',
            'comment' => 'getComment',
            'users' => 'getUsers'
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
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
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
    *  数据库名称。
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
    * @param string|null $name 数据库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets charset
    *  数据库使用的字符集，如utf8mb4、gbk等。
    *
    * @return string|null
    */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
    * Sets charset
    *
    * @param string|null $charset 数据库使用的字符集，如utf8mb4、gbk等。
    *
    * @return $this
    */
    public function setCharset($charset)
    {
        $this->container['charset'] = $charset;
        return $this;
    }

    /**
    * Gets comment
    *  数据库备注。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 数据库备注。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets users
    *  已授权数据库用户列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\GaussMySqlDatabaseInfo[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\GaussMySqlDatabaseInfo[]|null $users 已授权数据库用户列表。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
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

