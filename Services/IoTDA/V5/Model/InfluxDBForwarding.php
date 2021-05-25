<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InfluxDBForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InfluxDBForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  address
    * dbName  连接InfluxDB数据库的库名,不存在会自动创建
    * username  连接InfluxDB数据库的用户名
    * password  连接InfluxDB数据库的密码
    * measurement  InfluxDB数据库的measurement,不存在会自动创建
    * columnMappings  InfluxDB数据库和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => '\HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress',
            'dbName' => 'string',
            'username' => 'string',
            'password' => 'string',
            'measurement' => 'string',
            'columnMappings' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ColumnMapping[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  address
    * dbName  连接InfluxDB数据库的库名,不存在会自动创建
    * username  连接InfluxDB数据库的用户名
    * password  连接InfluxDB数据库的密码
    * measurement  InfluxDB数据库的measurement,不存在会自动创建
    * columnMappings  InfluxDB数据库和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'dbName' => null,
        'username' => null,
        'password' => null,
        'measurement' => null,
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
    * dbName  连接InfluxDB数据库的库名,不存在会自动创建
    * username  连接InfluxDB数据库的用户名
    * password  连接InfluxDB数据库的密码
    * measurement  InfluxDB数据库的measurement,不存在会自动创建
    * columnMappings  InfluxDB数据库和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'dbName' => 'db_name',
            'username' => 'username',
            'password' => 'password',
            'measurement' => 'measurement',
            'columnMappings' => 'column_mappings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  address
    * dbName  连接InfluxDB数据库的库名,不存在会自动创建
    * username  连接InfluxDB数据库的用户名
    * password  连接InfluxDB数据库的密码
    * measurement  InfluxDB数据库的measurement,不存在会自动创建
    * columnMappings  InfluxDB数据库和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'dbName' => 'setDbName',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'measurement' => 'setMeasurement',
            'columnMappings' => 'setColumnMappings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  address
    * dbName  连接InfluxDB数据库的库名,不存在会自动创建
    * username  连接InfluxDB数据库的用户名
    * password  连接InfluxDB数据库的密码
    * measurement  InfluxDB数据库的measurement,不存在会自动创建
    * columnMappings  InfluxDB数据库和流转数据的对应关系列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'dbName' => 'getDbName',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'measurement' => 'getMeasurement',
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
        $this->container['measurement'] = isset($data['measurement']) ? $data['measurement'] : null;
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
            if ((mb_strlen($this->container['dbName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dbName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be bigger than or equal to 1.";
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
        if ($this->container['measurement'] === null) {
            $invalidProperties[] = "'measurement' can't be null";
        }
            if ((mb_strlen($this->container['measurement']) > 64)) {
                $invalidProperties[] = "invalid value for 'measurement', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['measurement']) < 1)) {
                $invalidProperties[] = "invalid value for 'measurement', the character length must be bigger than or equal to 1.";
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
    *  连接InfluxDB数据库的库名,不存在会自动创建
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
    * @param string $dbName 连接InfluxDB数据库的库名,不存在会自动创建
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
    *  连接InfluxDB数据库的用户名
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
    * @param string $username 连接InfluxDB数据库的用户名
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
    *  连接InfluxDB数据库的密码
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
    * @param string $password 连接InfluxDB数据库的密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets measurement
    *  InfluxDB数据库的measurement,不存在会自动创建
    *
    * @return string
    */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
    * Sets measurement
    *
    * @param string $measurement InfluxDB数据库的measurement,不存在会自动创建
    *
    * @return $this
    */
    public function setMeasurement($measurement)
    {
        $this->container['measurement'] = $measurement;
        return $this;
    }

    /**
    * Gets columnMappings
    *  InfluxDB数据库和流转数据的对应关系列表。
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
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ColumnMapping[] $columnMappings InfluxDB数据库和流转数据的对应关系列表。
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

