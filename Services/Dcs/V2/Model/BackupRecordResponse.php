<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupRecordResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupRecordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份记录ID。
    * period  备份执行时间段。
    * backupName  备份记录名称。
    * instanceId  实例ID。
    * size  备份文件大小（Byte）。
    * backupType  备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    * createdAt  备份任务创建时间。
    * updatedAt  备份完成时间。
    * progress  备份进度。
    * errorCode  备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * remark  备份缓存实例的备注信息。
    * status  备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
    * isSupportRestore  是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'period' => 'string',
            'backupName' => 'string',
            'instanceId' => 'string',
            'size' => 'int',
            'backupType' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'progress' => 'string',
            'errorCode' => 'string',
            'remark' => 'string',
            'status' => 'string',
            'isSupportRestore' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份记录ID。
    * period  备份执行时间段。
    * backupName  备份记录名称。
    * instanceId  实例ID。
    * size  备份文件大小（Byte）。
    * backupType  备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    * createdAt  备份任务创建时间。
    * updatedAt  备份完成时间。
    * progress  备份进度。
    * errorCode  备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * remark  备份缓存实例的备注信息。
    * status  备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
    * isSupportRestore  是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => 'string',
        'period' => 'string',
        'backupName' => 'string',
        'instanceId' => 'string',
        'size' => 'int64',
        'backupType' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'progress' => 'string',
        'errorCode' => null,
        'remark' => 'string',
        'status' => 'string',
        'isSupportRestore' => 'string'
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
    * backupId  备份记录ID。
    * period  备份执行时间段。
    * backupName  备份记录名称。
    * instanceId  实例ID。
    * size  备份文件大小（Byte）。
    * backupType  备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    * createdAt  备份任务创建时间。
    * updatedAt  备份完成时间。
    * progress  备份进度。
    * errorCode  备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * remark  备份缓存实例的备注信息。
    * status  备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
    * isSupportRestore  是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'period' => 'period',
            'backupName' => 'backup_name',
            'instanceId' => 'instance_id',
            'size' => 'size',
            'backupType' => 'backup_type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'progress' => 'progress',
            'errorCode' => 'error_code',
            'remark' => 'remark',
            'status' => 'status',
            'isSupportRestore' => 'is_support_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份记录ID。
    * period  备份执行时间段。
    * backupName  备份记录名称。
    * instanceId  实例ID。
    * size  备份文件大小（Byte）。
    * backupType  备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    * createdAt  备份任务创建时间。
    * updatedAt  备份完成时间。
    * progress  备份进度。
    * errorCode  备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * remark  备份缓存实例的备注信息。
    * status  备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
    * isSupportRestore  是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'period' => 'setPeriod',
            'backupName' => 'setBackupName',
            'instanceId' => 'setInstanceId',
            'size' => 'setSize',
            'backupType' => 'setBackupType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'progress' => 'setProgress',
            'errorCode' => 'setErrorCode',
            'remark' => 'setRemark',
            'status' => 'setStatus',
            'isSupportRestore' => 'setIsSupportRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份记录ID。
    * period  备份执行时间段。
    * backupName  备份记录名称。
    * instanceId  实例ID。
    * size  备份文件大小（Byte）。
    * backupType  备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    * createdAt  备份任务创建时间。
    * updatedAt  备份完成时间。
    * progress  备份进度。
    * errorCode  备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * remark  备份缓存实例的备注信息。
    * status  备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
    * isSupportRestore  是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'period' => 'getPeriod',
            'backupName' => 'getBackupName',
            'instanceId' => 'getInstanceId',
            'size' => 'getSize',
            'backupType' => 'getBackupType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'progress' => 'getProgress',
            'errorCode' => 'getErrorCode',
            'remark' => 'getRemark',
            'status' => 'getStatus',
            'isSupportRestore' => 'getIsSupportRestore'
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
    const BACKUP_TYPE_MANUAL = 'manual';
    const BACKUP_TYPE_AUTO = 'auto';
    const STATUS_WAITING = 'waiting';
    const STATUS_BACKUPING = 'backuping';
    const STATUS_SUCCEED = 'succeed';
    const STATUS_FAILED = 'failed';
    const STATUS_EXPIRED = 'expired';
    const STATUS_DELETED = 'deleted';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackupTypeAllowableValues()
    {
        return [
            self::BACKUP_TYPE_MANUAL,
            self::BACKUP_TYPE_AUTO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_BACKUPING,
            self::STATUS_SUCCEED,
            self::STATUS_FAILED,
            self::STATUS_EXPIRED,
            self::STATUS_DELETED,
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isSupportRestore'] = isset($data['isSupportRestore']) ? $data['isSupportRestore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getBackupTypeAllowableValues();
                if (!is_null($this->container['backupType']) && !in_array($this->container['backupType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backupType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets backupId
    *  备份记录ID。
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
    * @param string|null $backupId 备份记录ID。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets period
    *  备份执行时间段。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 备份执行时间段。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets backupName
    *  备份记录名称。
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
    * @param string|null $backupName 备份记录名称。
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets size
    *  备份文件大小（Byte）。
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
    * @param int|null $size 备份文件大小（Byte）。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets backupType
    *  备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType 备份类型。 - manual：表示备份类型为手动备份 - auto：表示备份类型为自动备份
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets createdAt
    *  备份任务创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 备份任务创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  备份完成时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 备份完成时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets progress
    *  备份进度。
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
    * @param string|null $progress 备份进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets errorCode
    *  备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 备份失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
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
    * Gets status
    *  备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
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
    * @param string|null $status 备份状态。 - waiting：等待中。 - backuping：备份中。 - succeed：备份成功。 - failed：备份失败。 - expired：备份文件过期。 - deleted：已手动删除备份文件。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isSupportRestore
    *  是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @return string|null
    */
    public function getIsSupportRestore()
    {
        return $this->container['isSupportRestore'];
    }

    /**
    * Sets isSupportRestore
    *
    * @param string|null $isSupportRestore 是否可以进行恢复操作，取值为TRUE或FALSE。
    *
    * @return $this
    */
    public function setIsSupportRestore($isSupportRestore)
    {
        $this->container['isSupportRestore'] = $isSupportRestore;
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

