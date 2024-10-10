<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplicationJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplicationJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * backupInfo  backupInfo
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * options  options
    * newDbNames  备份恢复数据库映射新名称。
    * instanceName  RDS实例名称。
    * errorLog  迁移过程中失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'finishTime' => 'string',
            'backupInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupInfoResp',
            'baseInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupJobBaseInfo',
            'targetDbInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupJobEndpointInfo',
            'options' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupRestoreOptionInfo',
            'newDbNames' => 'string',
            'instanceName' => 'string',
            'errorLog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * backupInfo  backupInfo
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * options  options
    * newDbNames  备份恢复数据库映射新名称。
    * instanceName  RDS实例名称。
    * errorLog  迁移过程中失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'createTime' => null,
        'finishTime' => null,
        'backupInfo' => null,
        'baseInfo' => null,
        'targetDbInfo' => null,
        'options' => null,
        'newDbNames' => null,
        'instanceName' => null,
        'errorLog' => null
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
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * backupInfo  backupInfo
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * options  options
    * newDbNames  备份恢复数据库映射新名称。
    * instanceName  RDS实例名称。
    * errorLog  迁移过程中失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'createTime' => 'create_time',
            'finishTime' => 'finish_time',
            'backupInfo' => 'backup_info',
            'baseInfo' => 'base_info',
            'targetDbInfo' => 'target_db_info',
            'options' => 'options',
            'newDbNames' => 'new_db_names',
            'instanceName' => 'instance_name',
            'errorLog' => 'error_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * backupInfo  backupInfo
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * options  options
    * newDbNames  备份恢复数据库映射新名称。
    * instanceName  RDS实例名称。
    * errorLog  迁移过程中失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'finishTime' => 'setFinishTime',
            'backupInfo' => 'setBackupInfo',
            'baseInfo' => 'setBaseInfo',
            'targetDbInfo' => 'setTargetDbInfo',
            'options' => 'setOptions',
            'newDbNames' => 'setNewDbNames',
            'instanceName' => 'setInstanceName',
            'errorLog' => 'setErrorLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * finishTime  任务完成时间。
    * backupInfo  backupInfo
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * options  options
    * newDbNames  备份恢复数据库映射新名称。
    * instanceName  RDS实例名称。
    * errorLog  迁移过程中失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'finishTime' => 'getFinishTime',
            'backupInfo' => 'getBackupInfo',
            'baseInfo' => 'getBaseInfo',
            'targetDbInfo' => 'getTargetDbInfo',
            'options' => 'getOptions',
            'newDbNames' => 'getNewDbNames',
            'instanceName' => 'getInstanceName',
            'errorLog' => 'getErrorLog'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['backupInfo'] = isset($data['backupInfo']) ? $data['backupInfo'] : null;
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['targetDbInfo'] = isset($data['targetDbInfo']) ? $data['targetDbInfo'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['newDbNames'] = isset($data['newDbNames']) ? $data['newDbNames'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['errorLog'] = isset($data['errorLog']) ? $data['errorLog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finishTime']) && (mb_strlen($this->container['finishTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'finishTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['finishTime']) && (mb_strlen($this->container['finishTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'finishTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['newDbNames']) && (mb_strlen($this->container['newDbNames']) > 256)) {
                $invalidProperties[] = "invalid value for 'newDbNames', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['newDbNames']) && (mb_strlen($this->container['newDbNames']) < 0)) {
                $invalidProperties[] = "invalid value for 'newDbNames', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorLog']) && (mb_strlen($this->container['errorLog']) > 512)) {
                $invalidProperties[] = "invalid value for 'errorLog', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['errorLog']) && (mb_strlen($this->container['errorLog']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorLog', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  任务ID。
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
    * @param string|null $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。
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
    * @param string|null $status 任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  任务完成时间。
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 任务完成时间。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets backupInfo
    *  backupInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupInfoResp|null
    */
    public function getBackupInfo()
    {
        return $this->container['backupInfo'];
    }

    /**
    * Sets backupInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupInfoResp|null $backupInfo backupInfo
    *
    * @return $this
    */
    public function setBackupInfo($backupInfo)
    {
        $this->container['backupInfo'] = $backupInfo;
        return $this;
    }

    /**
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupJobBaseInfo|null
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupJobBaseInfo|null $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets targetDbInfo
    *  targetDbInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupJobEndpointInfo|null
    */
    public function getTargetDbInfo()
    {
        return $this->container['targetDbInfo'];
    }

    /**
    * Sets targetDbInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupJobEndpointInfo|null $targetDbInfo targetDbInfo
    *
    * @return $this
    */
    public function setTargetDbInfo($targetDbInfo)
    {
        $this->container['targetDbInfo'] = $targetDbInfo;
        return $this;
    }

    /**
    * Gets options
    *  options
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupRestoreOptionInfo|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupRestoreOptionInfo|null $options options
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets newDbNames
    *  备份恢复数据库映射新名称。
    *
    * @return string|null
    */
    public function getNewDbNames()
    {
        return $this->container['newDbNames'];
    }

    /**
    * Sets newDbNames
    *
    * @param string|null $newDbNames 备份恢复数据库映射新名称。
    *
    * @return $this
    */
    public function setNewDbNames($newDbNames)
    {
        $this->container['newDbNames'] = $newDbNames;
        return $this;
    }

    /**
    * Gets instanceName
    *  RDS实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName RDS实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets errorLog
    *  迁移过程中失败原因。
    *
    * @return string|null
    */
    public function getErrorLog()
    {
        return $this->container['errorLog'];
    }

    /**
    * Sets errorLog
    *
    * @param string|null $errorLog 迁移过程中失败原因。
    *
    * @return $this
    */
    public function setErrorLog($errorLog)
    {
        $this->container['errorLog'] = $errorLog;
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

