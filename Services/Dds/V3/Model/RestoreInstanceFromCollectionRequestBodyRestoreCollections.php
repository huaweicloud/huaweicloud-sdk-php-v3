<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreInstanceFromCollectionRequestBodyRestoreCollections implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreInstanceFromCollectionRequestBody_restore_collections';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * database  数据库名称。
    * restoreDatabaseTime  数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    * collections  集合信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'database' => 'string',
            'restoreDatabaseTime' => 'string',
            'collections' => '\HuaweiCloud\SDK\Dds\V3\Model\RestoreInstanceFromCollectionRequestBodyCollections[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * database  数据库名称。
    * restoreDatabaseTime  数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    * collections  集合信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'database' => null,
        'restoreDatabaseTime' => null,
        'collections' => null
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
    * database  数据库名称。
    * restoreDatabaseTime  数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    * collections  集合信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'database' => 'database',
            'restoreDatabaseTime' => 'restore_database_time',
            'collections' => 'collections'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * database  数据库名称。
    * restoreDatabaseTime  数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    * collections  集合信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'database' => 'setDatabase',
            'restoreDatabaseTime' => 'setRestoreDatabaseTime',
            'collections' => 'setCollections'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * database  数据库名称。
    * restoreDatabaseTime  数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    * collections  集合信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'database' => 'getDatabase',
            'restoreDatabaseTime' => 'getRestoreDatabaseTime',
            'collections' => 'getCollections'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['restoreDatabaseTime'] = isset($data['restoreDatabaseTime']) ? $data['restoreDatabaseTime'] : null;
        $this->container['collections'] = isset($data['collections']) ? $data['collections'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
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
    * Gets database
    *  数据库名称。
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库名称。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets restoreDatabaseTime
    *  数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @return string|null
    */
    public function getRestoreDatabaseTime()
    {
        return $this->container['restoreDatabaseTime'];
    }

    /**
    * Sets restoreDatabaseTime
    *
    * @param string|null $restoreDatabaseTime 数据库恢复时间点。如果是数据库级恢复，该参数必传，UNIX时间戳格式，单位是毫秒，时区是UTC。
    *
    * @return $this
    */
    public function setRestoreDatabaseTime($restoreDatabaseTime)
    {
        $this->container['restoreDatabaseTime'] = $restoreDatabaseTime;
        return $this;
    }

    /**
    * Gets collections
    *  集合信息。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\RestoreInstanceFromCollectionRequestBodyCollections[]|null
    */
    public function getCollections()
    {
        return $this->container['collections'];
    }

    /**
    * Sets collections
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\RestoreInstanceFromCollectionRequestBodyCollections[]|null $collections 集合信息。
    *
    * @return $this
    */
    public function setCollections($collections)
    {
        $this->container['collections'] = $collections;
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

