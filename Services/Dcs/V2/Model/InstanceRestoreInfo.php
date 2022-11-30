<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceRestoreInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceRestoreInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份记录ID。
    * restoreId  恢复记录ID。
    * backupName  备份记录名称。
    * updatedAt  恢复完成时间。
    * restoreRemark  恢复备注信息。
    * createdAt  恢复任务创建时间。
    * progress  恢复进度。
    * errorCode  恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * restoreName  恢复记录名称。
    * backupRemark  备份备注信息。
    * status  恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'restoreId' => 'string',
            'backupName' => 'string',
            'updatedAt' => 'string',
            'restoreRemark' => 'string',
            'createdAt' => 'string',
            'progress' => 'string',
            'errorCode' => 'string',
            'restoreName' => 'string',
            'backupRemark' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份记录ID。
    * restoreId  恢复记录ID。
    * backupName  备份记录名称。
    * updatedAt  恢复完成时间。
    * restoreRemark  恢复备注信息。
    * createdAt  恢复任务创建时间。
    * progress  恢复进度。
    * errorCode  恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * restoreName  恢复记录名称。
    * backupRemark  备份备注信息。
    * status  恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'restoreId' => null,
        'backupName' => null,
        'updatedAt' => null,
        'restoreRemark' => null,
        'createdAt' => null,
        'progress' => null,
        'errorCode' => null,
        'restoreName' => null,
        'backupRemark' => null,
        'status' => null
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
    * restoreId  恢复记录ID。
    * backupName  备份记录名称。
    * updatedAt  恢复完成时间。
    * restoreRemark  恢复备注信息。
    * createdAt  恢复任务创建时间。
    * progress  恢复进度。
    * errorCode  恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * restoreName  恢复记录名称。
    * backupRemark  备份备注信息。
    * status  恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'restoreId' => 'restore_id',
            'backupName' => 'backup_name',
            'updatedAt' => 'updated_at',
            'restoreRemark' => 'restore_remark',
            'createdAt' => 'created_at',
            'progress' => 'progress',
            'errorCode' => 'error_code',
            'restoreName' => 'restore_name',
            'backupRemark' => 'backup_remark',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份记录ID。
    * restoreId  恢复记录ID。
    * backupName  备份记录名称。
    * updatedAt  恢复完成时间。
    * restoreRemark  恢复备注信息。
    * createdAt  恢复任务创建时间。
    * progress  恢复进度。
    * errorCode  恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * restoreName  恢复记录名称。
    * backupRemark  备份备注信息。
    * status  恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'restoreId' => 'setRestoreId',
            'backupName' => 'setBackupName',
            'updatedAt' => 'setUpdatedAt',
            'restoreRemark' => 'setRestoreRemark',
            'createdAt' => 'setCreatedAt',
            'progress' => 'setProgress',
            'errorCode' => 'setErrorCode',
            'restoreName' => 'setRestoreName',
            'backupRemark' => 'setBackupRemark',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份记录ID。
    * restoreId  恢复记录ID。
    * backupName  备份记录名称。
    * updatedAt  恢复完成时间。
    * restoreRemark  恢复备注信息。
    * createdAt  恢复任务创建时间。
    * progress  恢复进度。
    * errorCode  恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    * restoreName  恢复记录名称。
    * backupRemark  备份备注信息。
    * status  恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'restoreId' => 'getRestoreId',
            'backupName' => 'getBackupName',
            'updatedAt' => 'getUpdatedAt',
            'restoreRemark' => 'getRestoreRemark',
            'createdAt' => 'getCreatedAt',
            'progress' => 'getProgress',
            'errorCode' => 'getErrorCode',
            'restoreName' => 'getRestoreName',
            'backupRemark' => 'getBackupRemark',
            'status' => 'getStatus'
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
    const STATUS_WAITING = 'waiting';
    const STATUS_RESTORING = 'restoring';
    const STATUS_SUCCEED = 'succeed';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_RESTORING,
            self::STATUS_SUCCEED,
            self::STATUS_FAILED,
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
        $this->container['restoreId'] = isset($data['restoreId']) ? $data['restoreId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['restoreRemark'] = isset($data['restoreRemark']) ? $data['restoreRemark'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['restoreName'] = isset($data['restoreName']) ? $data['restoreName'] : null;
        $this->container['backupRemark'] = isset($data['backupRemark']) ? $data['backupRemark'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets restoreId
    *  恢复记录ID。
    *
    * @return string|null
    */
    public function getRestoreId()
    {
        return $this->container['restoreId'];
    }

    /**
    * Sets restoreId
    *
    * @param string|null $restoreId 恢复记录ID。
    *
    * @return $this
    */
    public function setRestoreId($restoreId)
    {
        $this->container['restoreId'] = $restoreId;
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
    * Gets updatedAt
    *  恢复完成时间。
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
    * @param string|null $updatedAt 恢复完成时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets restoreRemark
    *  恢复备注信息。
    *
    * @return string|null
    */
    public function getRestoreRemark()
    {
        return $this->container['restoreRemark'];
    }

    /**
    * Sets restoreRemark
    *
    * @param string|null $restoreRemark 恢复备注信息。
    *
    * @return $this
    */
    public function setRestoreRemark($restoreRemark)
    {
        $this->container['restoreRemark'] = $restoreRemark;
        return $this;
    }

    /**
    * Gets createdAt
    *  恢复任务创建时间。
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
    * @param string|null $createdAt 恢复任务创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets progress
    *  恢复进度。
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
    * @param string|null $progress 恢复进度。
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
    *  恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
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
    * @param string|null $errorCode 恢复失败后错误码 * `dcs.08.0001` - 启动备份恢复工具失败。 * `dcs.08.0002` - 执行超时。 * `dcs.08.0003` - 删除桶失败。 * `dcs.08.0004` - 获取ak/sk 失败。 * `dcs.08.0005` - 创建桶失败。 * `dcs.08.0006` - 查询备份数据大小失败。 * `dcs.08.0007` - 恢复时同步数据失败。 * `dcs.08.0008` - 自动备份任务未运行，实例正在运行其他任务。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets restoreName
    *  恢复记录名称。
    *
    * @return string|null
    */
    public function getRestoreName()
    {
        return $this->container['restoreName'];
    }

    /**
    * Sets restoreName
    *
    * @param string|null $restoreName 恢复记录名称。
    *
    * @return $this
    */
    public function setRestoreName($restoreName)
    {
        $this->container['restoreName'] = $restoreName;
        return $this;
    }

    /**
    * Gets backupRemark
    *  备份备注信息。
    *
    * @return string|null
    */
    public function getBackupRemark()
    {
        return $this->container['backupRemark'];
    }

    /**
    * Sets backupRemark
    *
    * @param string|null $backupRemark 备份备注信息。
    *
    * @return $this
    */
    public function setBackupRemark($backupRemark)
    {
        $this->container['backupRemark'] = $backupRemark;
        return $this;
    }

    /**
    * Gets status
    *  恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
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
    * @param string|null $status 恢复状态。 - waiting：等待中 - restoring：恢复中 - succeed：恢复成功 - failed：恢复失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

