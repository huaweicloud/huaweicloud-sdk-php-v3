<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseExistingInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseExistingInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  数据库实例ID（必须为PostgreSQL实例）。
    * databaseName  对接的数据库用户名。
    * databasePwd  对接的数据库密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'databaseName' => 'string',
            'databasePwd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  数据库实例ID（必须为PostgreSQL实例）。
    * databaseName  对接的数据库用户名。
    * databasePwd  对接的数据库密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'databaseName' => null,
        'databasePwd' => null
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
    * instanceId  数据库实例ID（必须为PostgreSQL实例）。
    * databaseName  对接的数据库用户名。
    * databasePwd  对接的数据库密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'databaseName' => 'database_name',
            'databasePwd' => 'database_pwd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  数据库实例ID（必须为PostgreSQL实例）。
    * databaseName  对接的数据库用户名。
    * databasePwd  对接的数据库密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'databaseName' => 'setDatabaseName',
            'databasePwd' => 'setDatabasePwd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  数据库实例ID（必须为PostgreSQL实例）。
    * databaseName  对接的数据库用户名。
    * databasePwd  对接的数据库密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'databaseName' => 'getDatabaseName',
            'databasePwd' => 'getDatabasePwd'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['databasePwd'] = isset($data['databasePwd']) ? $data['databasePwd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['databasePwd'] === null) {
            $invalidProperties[] = "'databasePwd' can't be null";
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
    * Gets instanceId
    *  数据库实例ID（必须为PostgreSQL实例）。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 数据库实例ID（必须为PostgreSQL实例）。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets databaseName
    *  对接的数据库用户名。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 对接的数据库用户名。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets databasePwd
    *  对接的数据库密码。
    *
    * @return string
    */
    public function getDatabasePwd()
    {
        return $this->container['databasePwd'];
    }

    /**
    * Sets databasePwd
    *
    * @param string $databasePwd 对接的数据库密码。
    *
    * @return $this
    */
    public function setDatabasePwd($databasePwd)
    {
        $this->container['databasePwd'] = $databasePwd;
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

