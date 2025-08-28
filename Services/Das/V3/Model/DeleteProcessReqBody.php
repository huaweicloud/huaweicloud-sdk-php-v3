<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteProcessReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteProcessReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbUserId  数据库用户ID
    * processIds  会话ID列表。process_ids、user、database至少指定一个参数。
    * user  用户
    * database  数据库名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbUserId' => 'string',
            'processIds' => 'string[]',
            'user' => 'string',
            'database' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbUserId  数据库用户ID
    * processIds  会话ID列表。process_ids、user、database至少指定一个参数。
    * user  用户
    * database  数据库名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbUserId' => null,
        'processIds' => null,
        'user' => null,
        'database' => null
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
    * dbUserId  数据库用户ID
    * processIds  会话ID列表。process_ids、user、database至少指定一个参数。
    * user  用户
    * database  数据库名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbUserId' => 'db_user_id',
            'processIds' => 'process_ids',
            'user' => 'user',
            'database' => 'database'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbUserId  数据库用户ID
    * processIds  会话ID列表。process_ids、user、database至少指定一个参数。
    * user  用户
    * database  数据库名称
    *
    * @var string[]
    */
    protected static $setters = [
            'dbUserId' => 'setDbUserId',
            'processIds' => 'setProcessIds',
            'user' => 'setUser',
            'database' => 'setDatabase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbUserId  数据库用户ID
    * processIds  会话ID列表。process_ids、user、database至少指定一个参数。
    * user  用户
    * database  数据库名称
    *
    * @var string[]
    */
    protected static $getters = [
            'dbUserId' => 'getDbUserId',
            'processIds' => 'getProcessIds',
            'user' => 'getUser',
            'database' => 'getDatabase'
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
        $this->container['dbUserId'] = isset($data['dbUserId']) ? $data['dbUserId'] : null;
        $this->container['processIds'] = isset($data['processIds']) ? $data['processIds'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbUserId'] === null) {
            $invalidProperties[] = "'dbUserId' can't be null";
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
    * Gets dbUserId
    *  数据库用户ID
    *
    * @return string
    */
    public function getDbUserId()
    {
        return $this->container['dbUserId'];
    }

    /**
    * Sets dbUserId
    *
    * @param string $dbUserId 数据库用户ID
    *
    * @return $this
    */
    public function setDbUserId($dbUserId)
    {
        $this->container['dbUserId'] = $dbUserId;
        return $this;
    }

    /**
    * Gets processIds
    *  会话ID列表。process_ids、user、database至少指定一个参数。
    *
    * @return string[]|null
    */
    public function getProcessIds()
    {
        return $this->container['processIds'];
    }

    /**
    * Sets processIds
    *
    * @param string[]|null $processIds 会话ID列表。process_ids、user、database至少指定一个参数。
    *
    * @return $this
    */
    public function setProcessIds($processIds)
    {
        $this->container['processIds'] = $processIds;
        return $this;
    }

    /**
    * Gets user
    *  用户
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名称
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
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

