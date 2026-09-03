<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BinlogFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BinlogFileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名称
    * backupId  备份ID
    * fileSize  文件大小
    * taskInfo  taskInfo
    * beginTime  binlog备份开始时间
    * endTime  binlog备份结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'backupId' => 'string',
            'fileSize' => 'int',
            'taskInfo' => '\HuaweiCloud\SDK\Das\V3\Model\BinlogParseTaskInfo',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名称
    * backupId  备份ID
    * fileSize  文件大小
    * taskInfo  taskInfo
    * beginTime  binlog备份开始时间
    * endTime  binlog备份结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'backupId' => null,
        'fileSize' => 'int64',
        'taskInfo' => null,
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
    * fileName  文件名称
    * backupId  备份ID
    * fileSize  文件大小
    * taskInfo  taskInfo
    * beginTime  binlog备份开始时间
    * endTime  binlog备份结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'backupId' => 'backup_id',
            'fileSize' => 'file_size',
            'taskInfo' => 'task_info',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名称
    * backupId  备份ID
    * fileSize  文件大小
    * taskInfo  taskInfo
    * beginTime  binlog备份开始时间
    * endTime  binlog备份结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'backupId' => 'setBackupId',
            'fileSize' => 'setFileSize',
            'taskInfo' => 'setTaskInfo',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名称
    * backupId  备份ID
    * fileSize  文件大小
    * taskInfo  taskInfo
    * beginTime  binlog备份开始时间
    * endTime  binlog备份结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'backupId' => 'getBackupId',
            'fileSize' => 'getFileSize',
            'taskInfo' => 'getTaskInfo',
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['taskInfo'] = isset($data['taskInfo']) ? $data['taskInfo'] : null;
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
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
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
    *  备份ID
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
    * @param string|null $backupId 备份ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 文件大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets taskInfo
    *  taskInfo
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\BinlogParseTaskInfo|null
    */
    public function getTaskInfo()
    {
        return $this->container['taskInfo'];
    }

    /**
    * Sets taskInfo
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\BinlogParseTaskInfo|null $taskInfo taskInfo
    *
    * @return $this
    */
    public function setTaskInfo($taskInfo)
    {
        $this->container['taskInfo'] = $taskInfo;
        return $this;
    }

    /**
    * Gets beginTime
    *  binlog备份开始时间
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
    * @param string|null $beginTime binlog备份开始时间
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
    *  binlog备份结束时间
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
    * @param string|null $endTime binlog备份结束时间
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

