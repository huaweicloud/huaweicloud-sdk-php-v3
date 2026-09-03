<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBinlogTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBinlogTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    * fileName  binlog文件名称
    * backupId  归档ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'binlogType' => 'string',
            'fileName' => 'string',
            'backupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    * fileName  binlog文件名称
    * backupId  归档ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'binlogType' => null,
        'fileName' => null,
        'backupId' => null
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
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    * fileName  binlog文件名称
    * backupId  归档ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'binlogType' => 'binlog_type',
            'fileName' => 'file_name',
            'backupId' => 'backup_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    * fileName  binlog文件名称
    * backupId  归档ID
    *
    * @var string[]
    */
    protected static $setters = [
            'binlogType' => 'setBinlogType',
            'fileName' => 'setFileName',
            'backupId' => 'setBackupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    * fileName  binlog文件名称
    * backupId  归档ID
    *
    * @var string[]
    */
    protected static $getters = [
            'binlogType' => 'getBinlogType',
            'fileName' => 'getFileName',
            'backupId' => 'getBackupId'
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
        $this->container['binlogType'] = isset($data['binlogType']) ? $data['binlogType'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['binlogType'] === null) {
            $invalidProperties[] = "'binlogType' can't be null";
        }
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
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
    * Gets binlogType
    *  binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    *
    * @return string
    */
    public function getBinlogType()
    {
        return $this->container['binlogType'];
    }

    /**
    * Sets binlogType
    *
    * @param string $binlogType binlog类型。取值范围：latest（最近日志）、backup（归档日志）、fragment（碎片备份日志）
    *
    * @return $this
    */
    public function setBinlogType($binlogType)
    {
        $this->container['binlogType'] = $binlogType;
        return $this;
    }

    /**
    * Gets fileName
    *  binlog文件名称
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName binlog文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets backupId
    *  归档ID
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 归档ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
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

