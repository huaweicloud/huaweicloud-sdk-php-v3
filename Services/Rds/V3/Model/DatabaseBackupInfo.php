<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseBackupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseBackupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  库名
    * backupFileName  备份文件名
    * backupFileSize  备份文件大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'backupFileName' => 'string',
            'backupFileSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  库名
    * backupFileName  备份文件名
    * backupFileSize  备份文件大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'backupFileName' => null,
        'backupFileSize' => 'int64'
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
    * databaseName  库名
    * backupFileName  备份文件名
    * backupFileSize  备份文件大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'backupFileName' => 'backup_file_name',
            'backupFileSize' => 'backup_file_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  库名
    * backupFileName  备份文件名
    * backupFileSize  备份文件大小
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'backupFileName' => 'setBackupFileName',
            'backupFileSize' => 'setBackupFileSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  库名
    * backupFileName  备份文件名
    * backupFileSize  备份文件大小
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'backupFileName' => 'getBackupFileName',
            'backupFileSize' => 'getBackupFileSize'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['backupFileName'] = isset($data['backupFileName']) ? $data['backupFileName'] : null;
        $this->container['backupFileSize'] = isset($data['backupFileSize']) ? $data['backupFileSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['backupFileName'] === null) {
            $invalidProperties[] = "'backupFileName' can't be null";
        }
        if ($this->container['backupFileSize'] === null) {
            $invalidProperties[] = "'backupFileSize' can't be null";
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
    * Gets databaseName
    *  库名
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
    * @param string $databaseName 库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets backupFileName
    *  备份文件名
    *
    * @return string
    */
    public function getBackupFileName()
    {
        return $this->container['backupFileName'];
    }

    /**
    * Sets backupFileName
    *
    * @param string $backupFileName 备份文件名
    *
    * @return $this
    */
    public function setBackupFileName($backupFileName)
    {
        $this->container['backupFileName'] = $backupFileName;
        return $this;
    }

    /**
    * Gets backupFileSize
    *  备份文件大小
    *
    * @return int
    */
    public function getBackupFileSize()
    {
        return $this->container['backupFileSize'];
    }

    /**
    * Sets backupFileSize
    *
    * @param int $backupFileSize 备份文件大小
    *
    * @return $this
    */
    public function setBackupFileSize($backupFileSize)
    {
        $this->container['backupFileSize'] = $backupFileSize;
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

