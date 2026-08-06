<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowExportTaskInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowExportTaskInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  创建时间
    * downloadUrl  下载链接
    * endTime  结束时间
    * exportLineNum  导出条数
    * instanceId  实例ID
    * lastRecordTime  最新SQL执行时间
    * startTime  开始时间
    * taskId  任务ID
    * taskStatus  任务状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'float',
            'downloadUrl' => 'string',
            'endTime' => 'float',
            'exportLineNum' => 'float',
            'instanceId' => 'string',
            'lastRecordTime' => 'float',
            'startTime' => 'float',
            'taskId' => 'float',
            'taskStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  创建时间
    * downloadUrl  下载链接
    * endTime  结束时间
    * exportLineNum  导出条数
    * instanceId  实例ID
    * lastRecordTime  最新SQL执行时间
    * startTime  开始时间
    * taskId  任务ID
    * taskStatus  任务状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => null,
        'downloadUrl' => null,
        'endTime' => null,
        'exportLineNum' => null,
        'instanceId' => null,
        'lastRecordTime' => null,
        'startTime' => null,
        'taskId' => null,
        'taskStatus' => null
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
    * createAt  创建时间
    * downloadUrl  下载链接
    * endTime  结束时间
    * exportLineNum  导出条数
    * instanceId  实例ID
    * lastRecordTime  最新SQL执行时间
    * startTime  开始时间
    * taskId  任务ID
    * taskStatus  任务状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'create_at',
            'downloadUrl' => 'download_url',
            'endTime' => 'end_time',
            'exportLineNum' => 'export_line_num',
            'instanceId' => 'instance_id',
            'lastRecordTime' => 'last_record_time',
            'startTime' => 'start_time',
            'taskId' => 'task_id',
            'taskStatus' => 'task_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  创建时间
    * downloadUrl  下载链接
    * endTime  结束时间
    * exportLineNum  导出条数
    * instanceId  实例ID
    * lastRecordTime  最新SQL执行时间
    * startTime  开始时间
    * taskId  任务ID
    * taskStatus  任务状态
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'downloadUrl' => 'setDownloadUrl',
            'endTime' => 'setEndTime',
            'exportLineNum' => 'setExportLineNum',
            'instanceId' => 'setInstanceId',
            'lastRecordTime' => 'setLastRecordTime',
            'startTime' => 'setStartTime',
            'taskId' => 'setTaskId',
            'taskStatus' => 'setTaskStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  创建时间
    * downloadUrl  下载链接
    * endTime  结束时间
    * exportLineNum  导出条数
    * instanceId  实例ID
    * lastRecordTime  最新SQL执行时间
    * startTime  开始时间
    * taskId  任务ID
    * taskStatus  任务状态
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'downloadUrl' => 'getDownloadUrl',
            'endTime' => 'getEndTime',
            'exportLineNum' => 'getExportLineNum',
            'instanceId' => 'getInstanceId',
            'lastRecordTime' => 'getLastRecordTime',
            'startTime' => 'getStartTime',
            'taskId' => 'getTaskId',
            'taskStatus' => 'getTaskStatus'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['exportLineNum'] = isset($data['exportLineNum']) ? $data['exportLineNum'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['lastRecordTime'] = isset($data['lastRecordTime']) ? $data['lastRecordTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
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
    * Gets createAt
    *  创建时间
    *
    * @return float|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param float|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  下载链接
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
    * @param string|null $downloadUrl 下载链接
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return float|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param float|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets exportLineNum
    *  导出条数
    *
    * @return float|null
    */
    public function getExportLineNum()
    {
        return $this->container['exportLineNum'];
    }

    /**
    * Sets exportLineNum
    *
    * @param float|null $exportLineNum 导出条数
    *
    * @return $this
    */
    public function setExportLineNum($exportLineNum)
    {
        $this->container['exportLineNum'] = $exportLineNum;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets lastRecordTime
    *  最新SQL执行时间
    *
    * @return float|null
    */
    public function getLastRecordTime()
    {
        return $this->container['lastRecordTime'];
    }

    /**
    * Sets lastRecordTime
    *
    * @param float|null $lastRecordTime 最新SQL执行时间
    *
    * @return $this
    */
    public function setLastRecordTime($lastRecordTime)
    {
        $this->container['lastRecordTime'] = $lastRecordTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return float|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param float|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID
    *
    * @return float|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param float|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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

