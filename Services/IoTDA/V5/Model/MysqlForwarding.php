<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  address
    * dbName  **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * username  **参数说明**：连接MYSQL数据库的用户名
    * password  **参数说明**：连接MYSQL数据库的密码
    * tableName  **参数说明**：MYSQL数据库的表名
    * columnMappings  **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => '\HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress',
            'dbName' => 'string',
            'username' => 'string',
            'password' => 'string',
            'tableName' => 'string',
            'columnMappings' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ColumnMapping[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  address
    * dbName  **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * username  **参数说明**：连接MYSQL数据库的用户名
    * password  **参数说明**：连接MYSQL数据库的密码
    * tableName  **参数说明**：MYSQL数据库的表名
    * columnMappings  **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'dbName' => null,
        'username' => null,
        'password' => null,
        'tableName' => null,
        'columnMappings' => null
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
    * address  address
    * dbName  **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * username  **参数说明**：连接MYSQL数据库的用户名
    * password  **参数说明**：连接MYSQL数据库的密码
    * tableName  **参数说明**：MYSQL数据库的表名
    * columnMappings  **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'dbName' => 'db_name',
            'username' => 'username',
            'password' => 'password',
            'tableName' => 'table_name',
            'columnMappings' => 'column_mappings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  address
    * dbName  **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * username  **参数说明**：连接MYSQL数据库的用户名
    * password  **参数说明**：连接MYSQL数据库的密码
    * tableName  **参数说明**：MYSQL数据库的表名
    * columnMappings  **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'dbName' => 'setDbName',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'tableName' => 'setTableName',
            'columnMappings' => 'setColumnMappings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  address
    * dbName  **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * username  **参数说明**：连接MYSQL数据库的用户名
    * password  **参数说明**：连接MYSQL数据库的密码
    * tableName  **参数说明**：MYSQL数据库的表名
    * columnMappings  **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'dbName' => 'getDbName',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'tableName' => 'getTableName',
            'columnMappings' => 'getColumnMappings'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnMappings'] = isset($data['columnMappings']) ? $data['columnMappings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9_$-]{1,64}$/", $this->container['dbName'])) {
                $invalidProperties[] = "invalid value for 'dbName', must be conform to the pattern /^[A-Za-z0-9_$-]{1,64}$/.";
            }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
            if ((mb_strlen($this->container['username']) > 256)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 256)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
            if ((mb_strlen($this->container['tableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['columnMappings'] === null) {
            $invalidProperties[] = "'columnMappings' can't be null";
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
    * Gets address
    *  address
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress $address address
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets dbName
    *  **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName **参数说明**：连接MYSQL数据库的库名。 **取值范围**：长度不超过64，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets username
    *  **参数说明**：连接MYSQL数据库的用户名
    *
    * @return string
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string $username **参数说明**：连接MYSQL数据库的用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  **参数说明**：连接MYSQL数据库的密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password **参数说明**：连接MYSQL数据库的密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数说明**：MYSQL数据库的表名
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName **参数说明**：MYSQL数据库的表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets columnMappings
    *  **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ColumnMapping[]
    */
    public function getColumnMappings()
    {
        return $this->container['columnMappings'];
    }

    /**
    * Sets columnMappings
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ColumnMapping[] $columnMappings **参数说明**：MYSQL数据库的列和流转数据的对应关系列表。
    *
    * @return $this
    */
    public function setColumnMappings($columnMappings)
    {
        $this->container['columnMappings'] = $columnMappings;
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

