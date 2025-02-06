<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDatabaseLevelDatabaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDatabaseLevelDatabaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databases  库信息列表
    * databaseLimit  可恢复库的个数
    * bucketName  obs桶名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databases' => '\HuaweiCloud\SDK\Rds\V3\Model\DatabaseBackupInfo[]',
            'databaseLimit' => 'int',
            'bucketName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databases  库信息列表
    * databaseLimit  可恢复库的个数
    * bucketName  obs桶名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databases' => null,
        'databaseLimit' => 'int32',
        'bucketName' => null
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
    * databases  库信息列表
    * databaseLimit  可恢复库的个数
    * bucketName  obs桶名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databases' => 'databases',
            'databaseLimit' => 'database_limit',
            'bucketName' => 'bucket_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databases  库信息列表
    * databaseLimit  可恢复库的个数
    * bucketName  obs桶名
    *
    * @var string[]
    */
    protected static $setters = [
            'databases' => 'setDatabases',
            'databaseLimit' => 'setDatabaseLimit',
            'bucketName' => 'setBucketName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databases  库信息列表
    * databaseLimit  可恢复库的个数
    * bucketName  obs桶名
    *
    * @var string[]
    */
    protected static $getters = [
            'databases' => 'getDatabases',
            'databaseLimit' => 'getDatabaseLimit',
            'bucketName' => 'getBucketName'
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
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['databaseLimit'] = isset($data['databaseLimit']) ? $data['databaseLimit'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
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
    * Gets databases
    *  库信息列表
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DatabaseBackupInfo[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DatabaseBackupInfo[]|null $databases 库信息列表
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets databaseLimit
    *  可恢复库的个数
    *
    * @return int|null
    */
    public function getDatabaseLimit()
    {
        return $this->container['databaseLimit'];
    }

    /**
    * Sets databaseLimit
    *
    * @param int|null $databaseLimit 可恢复库的个数
    *
    * @return $this
    */
    public function setDatabaseLimit($databaseLimit)
    {
        $this->container['databaseLimit'] = $databaseLimit;
        return $this;
    }

    /**
    * Gets bucketName
    *  obs桶名
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName obs桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
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

