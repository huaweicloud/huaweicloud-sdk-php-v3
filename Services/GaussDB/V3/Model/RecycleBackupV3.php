<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleBackupV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleBackupV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupLevel  备份级别。
    * backupId  备份ID。
    * backupName  备份名称。
    * size  备份大小，单位是字节。
    * status  回收状态。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupLevel' => 'string',
            'backupId' => 'string',
            'backupName' => 'string',
            'size' => 'int',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupLevel  备份级别。
    * backupId  备份ID。
    * backupName  备份名称。
    * size  备份大小，单位是字节。
    * status  回收状态。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupLevel' => null,
        'backupId' => null,
        'backupName' => null,
        'size' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null
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
    * backupLevel  备份级别。
    * backupId  备份ID。
    * backupName  备份名称。
    * size  备份大小，单位是字节。
    * status  回收状态。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupLevel' => 'backup_level',
            'backupId' => 'backup_id',
            'backupName' => 'backup_name',
            'size' => 'size',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupLevel  备份级别。
    * backupId  备份ID。
    * backupName  备份名称。
    * size  备份大小，单位是字节。
    * status  回收状态。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupLevel' => 'setBackupLevel',
            'backupId' => 'setBackupId',
            'backupName' => 'setBackupName',
            'size' => 'setSize',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupLevel  备份级别。
    * backupId  备份ID。
    * backupName  备份名称。
    * size  备份大小，单位是字节。
    * status  回收状态。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupLevel' => 'getBackupLevel',
            'backupId' => 'getBackupId',
            'backupName' => 'getBackupName',
            'size' => 'getSize',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime'
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
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets backupLevel
    *  备份级别。
    *
    * @return string|null
    */
    public function getBackupLevel()
    {
        return $this->container['backupLevel'];
    }

    /**
    * Sets backupLevel
    *
    * @param string|null $backupLevel 备份级别。
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
        return $this;
    }

    /**
    * Gets backupId
    *  备份ID。
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
    * @param string|null $backupId 备份ID。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backupName
    *  备份名称。
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName 备份名称。
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets size
    *  备份大小，单位是字节。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 备份大小，单位是字节。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  回收状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 回收状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  备份开始时间。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 备份开始时间。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  备份结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 备份结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

