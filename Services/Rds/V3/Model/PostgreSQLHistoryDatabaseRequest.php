<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostgreSQLHistoryDatabaseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostgreSQLHistoryDatabaseRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  实例ID集合
    * restoreTime  恢复时间点
    * databaseNameLike  数据库名，模糊查询
    * instanceNameLike  实例名称，模糊查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'restoreTime' => 'int',
            'databaseNameLike' => 'string',
            'instanceNameLike' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  实例ID集合
    * restoreTime  恢复时间点
    * databaseNameLike  数据库名，模糊查询
    * instanceNameLike  实例名称，模糊查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'restoreTime' => 'int64',
        'databaseNameLike' => null,
        'instanceNameLike' => null
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
    * instanceIds  实例ID集合
    * restoreTime  恢复时间点
    * databaseNameLike  数据库名，模糊查询
    * instanceNameLike  实例名称，模糊查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'restoreTime' => 'restore_time',
            'databaseNameLike' => 'database_name_like',
            'instanceNameLike' => 'instance_name_like'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  实例ID集合
    * restoreTime  恢复时间点
    * databaseNameLike  数据库名，模糊查询
    * instanceNameLike  实例名称，模糊查询
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'restoreTime' => 'setRestoreTime',
            'databaseNameLike' => 'setDatabaseNameLike',
            'instanceNameLike' => 'setInstanceNameLike'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  实例ID集合
    * restoreTime  恢复时间点
    * databaseNameLike  数据库名，模糊查询
    * instanceNameLike  实例名称，模糊查询
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'restoreTime' => 'getRestoreTime',
            'databaseNameLike' => 'getDatabaseNameLike',
            'instanceNameLike' => 'getInstanceNameLike'
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['databaseNameLike'] = isset($data['databaseNameLike']) ? $data['databaseNameLike'] : null;
        $this->container['instanceNameLike'] = isset($data['instanceNameLike']) ? $data['instanceNameLike'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
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
    * Gets instanceIds
    *  实例ID集合
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds 实例ID集合
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets restoreTime
    *  恢复时间点
    *
    * @return int
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param int $restoreTime 恢复时间点
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets databaseNameLike
    *  数据库名，模糊查询
    *
    * @return string|null
    */
    public function getDatabaseNameLike()
    {
        return $this->container['databaseNameLike'];
    }

    /**
    * Sets databaseNameLike
    *
    * @param string|null $databaseNameLike 数据库名，模糊查询
    *
    * @return $this
    */
    public function setDatabaseNameLike($databaseNameLike)
    {
        $this->container['databaseNameLike'] = $databaseNameLike;
        return $this;
    }

    /**
    * Gets instanceNameLike
    *  实例名称，模糊查询
    *
    * @return string|null
    */
    public function getInstanceNameLike()
    {
        return $this->container['instanceNameLike'];
    }

    /**
    * Sets instanceNameLike
    *
    * @param string|null $instanceNameLike 实例名称，模糊查询
    *
    * @return $this
    */
    public function setInstanceNameLike($instanceNameLike)
    {
        $this->container['instanceNameLike'] = $instanceNameLike;
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

