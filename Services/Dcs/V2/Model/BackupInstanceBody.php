<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remark  备份缓存实例的备注信息。
    * backupFormat  备份缓存实例的格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remark' => 'string',
            'backupFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remark  备份缓存实例的备注信息。
    * backupFormat  备份缓存实例的格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remark' => null,
        'backupFormat' => null
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
    * remark  备份缓存实例的备注信息。
    * backupFormat  备份缓存实例的格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remark' => 'remark',
            'backupFormat' => 'backup_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remark  备份缓存实例的备注信息。
    * backupFormat  备份缓存实例的格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'remark' => 'setRemark',
            'backupFormat' => 'setBackupFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remark  备份缓存实例的备注信息。
    * backupFormat  备份缓存实例的格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'remark' => 'getRemark',
            'backupFormat' => 'getBackupFormat'
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
    const BACKUP_FORMAT_AOF = 'aof';
    const BACKUP_FORMAT_RDB = 'rdb';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackupFormatAllowableValues()
    {
        return [
            self::BACKUP_FORMAT_AOF,
            self::BACKUP_FORMAT_RDB,
        ];
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
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['backupFormat'] = isset($data['backupFormat']) ? $data['backupFormat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getBackupFormatAllowableValues();
                if (!is_null($this->container['backupFormat']) && !in_array($this->container['backupFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backupFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets remark
    *  备份缓存实例的备注信息。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备份缓存实例的备注信息。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets backupFormat
    *  备份缓存实例的格式。
    *
    * @return string|null
    */
    public function getBackupFormat()
    {
        return $this->container['backupFormat'];
    }

    /**
    * Sets backupFormat
    *
    * @param string|null $backupFormat 备份缓存实例的格式。
    *
    * @return $this
    */
    public function setBackupFormat($backupFormat)
    {
        $this->container['backupFormat'] = $backupFormat;
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

