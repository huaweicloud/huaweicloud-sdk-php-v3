<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机ID
    * hostName  主机名称
    * backupName  备份名称
    * process  恢复进度（百分比）
    * status  恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
    * startedAt  任务开始时间
    * endedAt  任务结束时间
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'backupName' => 'string',
            'process' => 'int',
            'status' => 'string',
            'startedAt' => 'string',
            'endedAt' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ErrorInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机ID
    * hostName  主机名称
    * backupName  备份名称
    * process  恢复进度（百分比）
    * status  恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
    * startedAt  任务开始时间
    * endedAt  任务结束时间
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'backupName' => null,
        'process' => 'int32',
        'status' => null,
        'startedAt' => null,
        'endedAt' => null,
        'errorInfo' => null
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
    * hostId  主机ID
    * hostName  主机名称
    * backupName  备份名称
    * process  恢复进度（百分比）
    * status  恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
    * startedAt  任务开始时间
    * endedAt  任务结束时间
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'backupName' => 'backup_name',
            'process' => 'process',
            'status' => 'status',
            'startedAt' => 'started_at',
            'endedAt' => 'ended_at',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机ID
    * hostName  主机名称
    * backupName  备份名称
    * process  恢复进度（百分比）
    * status  恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
    * startedAt  任务开始时间
    * endedAt  任务结束时间
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'backupName' => 'setBackupName',
            'process' => 'setProcess',
            'status' => 'setStatus',
            'startedAt' => 'setStartedAt',
            'endedAt' => 'setEndedAt',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机ID
    * hostName  主机名称
    * backupName  备份名称
    * process  恢复进度（百分比）
    * status  恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
    * startedAt  任务开始时间
    * endedAt  任务结束时间
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'backupName' => 'getBackupName',
            'process' => 'getProcess',
            'status' => 'getStatus',
            'startedAt' => 'getStartedAt',
            'endedAt' => 'getEndedAt',
            'errorInfo' => 'getErrorInfo'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['endedAt'] = isset($data['endedAt']) ? $data['endedAt'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['process']) && ($this->container['process'] > 100)) {
                $invalidProperties[] = "invalid value for 'process', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['process']) && ($this->container['process'] < 0)) {
                $invalidProperties[] = "invalid value for 'process', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startedAt']) && (mb_strlen($this->container['startedAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'startedAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startedAt']) && (mb_strlen($this->container['startedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'startedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endedAt']) && (mb_strlen($this->container['endedAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'endedAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endedAt']) && (mb_strlen($this->container['endedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'endedAt', the character length must be bigger than or equal to 1.";
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
    * Gets hostId
    *  主机ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 主机ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets backupName
    *  备份名称
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
    * @param string|null $backupName 备份名称
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets process
    *  恢复进度（百分比）
    *
    * @return int|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param int|null $process 恢复进度（百分比）
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets status
    *  恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
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
    * @param string|null $status 恢复状态，包含如下：   - success : 成功   - skipped : 跳过   - failed : 失败   - running : 正在运行   - timeout : 超时   - waiting : 等待
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startedAt
    *  任务开始时间
    *
    * @return string|null
    */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
    * Sets startedAt
    *
    * @param string|null $startedAt 任务开始时间
    *
    * @return $this
    */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;
        return $this;
    }

    /**
    * Gets endedAt
    *  任务结束时间
    *
    * @return string|null
    */
    public function getEndedAt()
    {
        return $this->container['endedAt'];
    }

    /**
    * Sets endedAt
    *
    * @param string|null $endedAt 任务结束时间
    *
    * @return $this
    */
    public function setEndedAt($endedAt)
    {
        $this->container['endedAt'] = $endedAt;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ErrorInfo|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ErrorInfo|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

