<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupRestoreServerMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupRestoreServerMapping';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    * volumeId  待恢复目标卷ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'volumeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    * volumeId  待恢复目标卷ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'volumeId' => null
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
    * backupId  卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    * volumeId  待恢复目标卷ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'volumeId' => 'volume_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    * volumeId  待恢复目标卷ID
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'volumeId' => 'setVolumeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    * volumeId  待恢复目标卷ID
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'volumeId' => 'getVolumeId'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupId'] === null) {
            $invalidProperties[] = "'backupId' can't be null";
        }
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
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
    * Gets backupId
    *  卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    *
    * @return string
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string $backupId 卷备份ID，可以通过控制台查看云服务器备份详情中磁盘级备份的ID；或“查询指定备份”接口，获取备份中children内的磁盘级备份的ID。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets volumeId
    *  待恢复目标卷ID
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId 待恢复目标卷ID
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
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

