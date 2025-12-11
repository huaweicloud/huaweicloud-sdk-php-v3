<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupTaskFailReason  备份失败原因
    * backupTime  备份时间,yyyy-MM-dd HH:mm:ss
    * deleted  标记删除
    * endTime  备份结束时间,yyyy-MM-dd HH:mm:ss
    * fileSize  文件大小
    * fileSizeUnit  文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    * id  备份ID
    * mode  备份方式 - AUTO：自动备份
    * name  备份名称
    * percentage  备份进度
    * progress  进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    * restoreTaskFailReason  还原失败原因
    * sha256  文件SHA256
    * startTime  备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupTaskFailReason' => 'string',
            'backupTime' => '\DateTime',
            'deleted' => 'bool',
            'endTime' => '\DateTime',
            'fileSize' => 'int',
            'fileSizeUnit' => 'string',
            'id' => 'string',
            'mode' => 'string',
            'name' => 'string',
            'percentage' => 'int',
            'progress' => 'string',
            'restoreTaskFailReason' => 'string',
            'sha256' => 'string',
            'startTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupTaskFailReason  备份失败原因
    * backupTime  备份时间,yyyy-MM-dd HH:mm:ss
    * deleted  标记删除
    * endTime  备份结束时间,yyyy-MM-dd HH:mm:ss
    * fileSize  文件大小
    * fileSizeUnit  文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    * id  备份ID
    * mode  备份方式 - AUTO：自动备份
    * name  备份名称
    * percentage  备份进度
    * progress  进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    * restoreTaskFailReason  还原失败原因
    * sha256  文件SHA256
    * startTime  备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupTaskFailReason' => null,
        'backupTime' => 'date-time',
        'deleted' => null,
        'endTime' => 'date-time',
        'fileSize' => 'int64',
        'fileSizeUnit' => null,
        'id' => null,
        'mode' => null,
        'name' => null,
        'percentage' => 'int32',
        'progress' => null,
        'restoreTaskFailReason' => null,
        'sha256' => null,
        'startTime' => 'date-time'
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
    * backupTaskFailReason  备份失败原因
    * backupTime  备份时间,yyyy-MM-dd HH:mm:ss
    * deleted  标记删除
    * endTime  备份结束时间,yyyy-MM-dd HH:mm:ss
    * fileSize  文件大小
    * fileSizeUnit  文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    * id  备份ID
    * mode  备份方式 - AUTO：自动备份
    * name  备份名称
    * percentage  备份进度
    * progress  进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    * restoreTaskFailReason  还原失败原因
    * sha256  文件SHA256
    * startTime  备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupTaskFailReason' => 'backup_task_fail_reason',
            'backupTime' => 'backup_time',
            'deleted' => 'deleted',
            'endTime' => 'end_time',
            'fileSize' => 'file_size',
            'fileSizeUnit' => 'file_size_unit',
            'id' => 'id',
            'mode' => 'mode',
            'name' => 'name',
            'percentage' => 'percentage',
            'progress' => 'progress',
            'restoreTaskFailReason' => 'restore_task_fail_reason',
            'sha256' => 'sha256',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupTaskFailReason  备份失败原因
    * backupTime  备份时间,yyyy-MM-dd HH:mm:ss
    * deleted  标记删除
    * endTime  备份结束时间,yyyy-MM-dd HH:mm:ss
    * fileSize  文件大小
    * fileSizeUnit  文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    * id  备份ID
    * mode  备份方式 - AUTO：自动备份
    * name  备份名称
    * percentage  备份进度
    * progress  进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    * restoreTaskFailReason  还原失败原因
    * sha256  文件SHA256
    * startTime  备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'backupTaskFailReason' => 'setBackupTaskFailReason',
            'backupTime' => 'setBackupTime',
            'deleted' => 'setDeleted',
            'endTime' => 'setEndTime',
            'fileSize' => 'setFileSize',
            'fileSizeUnit' => 'setFileSizeUnit',
            'id' => 'setId',
            'mode' => 'setMode',
            'name' => 'setName',
            'percentage' => 'setPercentage',
            'progress' => 'setProgress',
            'restoreTaskFailReason' => 'setRestoreTaskFailReason',
            'sha256' => 'setSha256',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupTaskFailReason  备份失败原因
    * backupTime  备份时间,yyyy-MM-dd HH:mm:ss
    * deleted  标记删除
    * endTime  备份结束时间,yyyy-MM-dd HH:mm:ss
    * fileSize  文件大小
    * fileSizeUnit  文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    * id  备份ID
    * mode  备份方式 - AUTO：自动备份
    * name  备份名称
    * percentage  备份进度
    * progress  进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    * restoreTaskFailReason  还原失败原因
    * sha256  文件SHA256
    * startTime  备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'backupTaskFailReason' => 'getBackupTaskFailReason',
            'backupTime' => 'getBackupTime',
            'deleted' => 'getDeleted',
            'endTime' => 'getEndTime',
            'fileSize' => 'getFileSize',
            'fileSizeUnit' => 'getFileSizeUnit',
            'id' => 'getId',
            'mode' => 'getMode',
            'name' => 'getName',
            'percentage' => 'getPercentage',
            'progress' => 'getProgress',
            'restoreTaskFailReason' => 'getRestoreTaskFailReason',
            'sha256' => 'getSha256',
            'startTime' => 'getStartTime'
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
        $this->container['backupTaskFailReason'] = isset($data['backupTaskFailReason']) ? $data['backupTaskFailReason'] : null;
        $this->container['backupTime'] = isset($data['backupTime']) ? $data['backupTime'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileSizeUnit'] = isset($data['fileSizeUnit']) ? $data['fileSizeUnit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['restoreTaskFailReason'] = isset($data['restoreTaskFailReason']) ? $data['restoreTaskFailReason'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    * Gets backupTaskFailReason
    *  备份失败原因
    *
    * @return string|null
    */
    public function getBackupTaskFailReason()
    {
        return $this->container['backupTaskFailReason'];
    }

    /**
    * Sets backupTaskFailReason
    *
    * @param string|null $backupTaskFailReason 备份失败原因
    *
    * @return $this
    */
    public function setBackupTaskFailReason($backupTaskFailReason)
    {
        $this->container['backupTaskFailReason'] = $backupTaskFailReason;
        return $this;
    }

    /**
    * Gets backupTime
    *  备份时间,yyyy-MM-dd HH:mm:ss
    *
    * @return \DateTime|null
    */
    public function getBackupTime()
    {
        return $this->container['backupTime'];
    }

    /**
    * Sets backupTime
    *
    * @param \DateTime|null $backupTime 备份时间,yyyy-MM-dd HH:mm:ss
    *
    * @return $this
    */
    public function setBackupTime($backupTime)
    {
        $this->container['backupTime'] = $backupTime;
        return $this;
    }

    /**
    * Gets deleted
    *  标记删除
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted 标记删除
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets endTime
    *  备份结束时间,yyyy-MM-dd HH:mm:ss
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 备份结束时间,yyyy-MM-dd HH:mm:ss
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets fileSizeUnit
    *  文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    *
    * @return string|null
    */
    public function getFileSizeUnit()
    {
        return $this->container['fileSizeUnit'];
    }

    /**
    * Sets fileSizeUnit
    *
    * @param string|null $fileSizeUnit 文件大小单位 - Byte：Byte - KB：kb - MB: mb - GB: gb
    *
    * @return $this
    */
    public function setFileSizeUnit($fileSizeUnit)
    {
        $this->container['fileSizeUnit'] = $fileSizeUnit;
        return $this;
    }

    /**
    * Gets id
    *  备份ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 备份ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mode
    *  备份方式 - AUTO：自动备份
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 备份方式 - AUTO：自动备份
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets name
    *  备份名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 备份名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets percentage
    *  备份进度
    *
    * @return int|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param int|null $percentage 备份进度
    *
    * @return $this
    */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
        return $this;
    }

    /**
    * Gets progress
    *  进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 进度 - CLEAN_AFTER_FAILED: 清理失败 - DELETING：删除中 - DELETED：已删除 - DELETE_FAIL：删除失败 - RESTORING_WAITING：恢复等待中 - RESTORING：恢复中 - RESTORED：已恢复 - RESTORE_FAIL：恢复失败 - BACKUP_WAITING：等待备份 - FILE_UPLOAD_WAITING：等待上传备份文件 - FILE_UPLOADING：上传中 - AUTO_BACKUPING：自动备份中 - AUTO_BACKUPED：自动备份结束 - AUTO_BACKUP_FAIL：自动备份失败 - MANUAL_BACKUPING：手动备份中 - MANUAL_BACKUPED：手动备份结束 - MANUAL_BACKUP_FAIL：手动备份失败 - ISAP_WAITING：ISAP等待备份 - ISAP_BACKUPING：ISAP备份中 - ISAP_BACKUPED：ISAP备份成功 - ISAP_BACKUP_FAIL：ISAP备份失败 - ISAP_FILE_UPLOAD_WAITING：ISAP等待上传备份文件 - ISAP_FILE_UPLOADING：ISAP上传中
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets restoreTaskFailReason
    *  还原失败原因
    *
    * @return string|null
    */
    public function getRestoreTaskFailReason()
    {
        return $this->container['restoreTaskFailReason'];
    }

    /**
    * Sets restoreTaskFailReason
    *
    * @param string|null $restoreTaskFailReason 还原失败原因
    *
    * @return $this
    */
    public function setRestoreTaskFailReason($restoreTaskFailReason)
    {
        $this->container['restoreTaskFailReason'] = $restoreTaskFailReason;
        return $this;
    }

    /**
    * Gets sha256
    *  文件SHA256
    *
    * @return string|null
    */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
    * Sets sha256
    *
    * @param string|null $sha256 文件SHA256
    *
    * @return $this
    */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;
        return $this;
    }

    /**
    * Gets startTime
    *  备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 备份开始时间,yyyy-MM-dd HH:mm:ss
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

