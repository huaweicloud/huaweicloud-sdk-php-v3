<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHistoryTransactionExportTaskInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHistoryTransactionExportTaskInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  导出任务id
    * instanceId  实例id
    * taskStatus  任务状态
    * startTime  导出任务开始时间
    * endTime  导出任务结束时间
    * createAt  导出任务创建时间
    * exportLineNum  导出记录行数
    * downloadUrl  导出文件OBS下载链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'int',
            'instanceId' => 'string',
            'taskStatus' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'createAt' => 'int',
            'exportLineNum' => 'int',
            'downloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  导出任务id
    * instanceId  实例id
    * taskStatus  任务状态
    * startTime  导出任务开始时间
    * endTime  导出任务结束时间
    * createAt  导出任务创建时间
    * exportLineNum  导出记录行数
    * downloadUrl  导出文件OBS下载链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => 'int64',
        'instanceId' => null,
        'taskStatus' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'createAt' => 'int64',
        'exportLineNum' => 'int64',
        'downloadUrl' => null
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
    * taskId  导出任务id
    * instanceId  实例id
    * taskStatus  任务状态
    * startTime  导出任务开始时间
    * endTime  导出任务结束时间
    * createAt  导出任务创建时间
    * exportLineNum  导出记录行数
    * downloadUrl  导出文件OBS下载链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'instanceId' => 'instance_id',
            'taskStatus' => 'task_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'createAt' => 'create_at',
            'exportLineNum' => 'export_line_num',
            'downloadUrl' => 'download_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  导出任务id
    * instanceId  实例id
    * taskStatus  任务状态
    * startTime  导出任务开始时间
    * endTime  导出任务结束时间
    * createAt  导出任务创建时间
    * exportLineNum  导出记录行数
    * downloadUrl  导出文件OBS下载链接
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'instanceId' => 'setInstanceId',
            'taskStatus' => 'setTaskStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'createAt' => 'setCreateAt',
            'exportLineNum' => 'setExportLineNum',
            'downloadUrl' => 'setDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  导出任务id
    * instanceId  实例id
    * taskStatus  任务状态
    * startTime  导出任务开始时间
    * endTime  导出任务结束时间
    * createAt  导出任务创建时间
    * exportLineNum  导出记录行数
    * downloadUrl  导出文件OBS下载链接
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'instanceId' => 'getInstanceId',
            'taskStatus' => 'getTaskStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'createAt' => 'getCreateAt',
            'exportLineNum' => 'getExportLineNum',
            'downloadUrl' => 'getDownloadUrl'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['exportLineNum'] = isset($data['exportLineNum']) ? $data['exportLineNum'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && ($this->container['taskId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'taskId', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['taskId']) && ($this->container['taskId'] < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['taskStatus']) && ($this->container['taskStatus'] > 24)) {
                $invalidProperties[] = "invalid value for 'taskStatus', must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['taskStatus']) && ($this->container['taskStatus'] < -1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['exportLineNum']) && ($this->container['exportLineNum'] > 100000)) {
                $invalidProperties[] = "invalid value for 'exportLineNum', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['exportLineNum']) && ($this->container['exportLineNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'exportLineNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  导出任务id
    *
    * @return int|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int|null $taskId 导出任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
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
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态
    *
    * @return int|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param int|null $taskStatus 任务状态
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  导出任务开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 导出任务开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  导出任务结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 导出任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets createAt
    *  导出任务创建时间
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 导出任务创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets exportLineNum
    *  导出记录行数
    *
    * @return int|null
    */
    public function getExportLineNum()
    {
        return $this->container['exportLineNum'];
    }

    /**
    * Sets exportLineNum
    *
    * @param int|null $exportLineNum 导出记录行数
    *
    * @return $this
    */
    public function setExportLineNum($exportLineNum)
    {
        $this->container['exportLineNum'] = $exportLineNum;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  导出文件OBS下载链接
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl 导出文件OBS下载链接
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
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

