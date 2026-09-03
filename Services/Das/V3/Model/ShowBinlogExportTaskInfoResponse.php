<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBinlogExportTaskInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBinlogExportTaskInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  导出任务ID
    * instanceId  实例ID
    * taskStatus  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * startTime  任务开始时间，单位毫秒
    * endTime  任务结束时间，单位毫秒
    * createAt  任务创建时间，单位毫秒
    * exportLineNum  导出行数
    * downloadUrl  导出文件下载地址
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
    * taskId  导出任务ID
    * instanceId  实例ID
    * taskStatus  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * startTime  任务开始时间，单位毫秒
    * endTime  任务结束时间，单位毫秒
    * createAt  任务创建时间，单位毫秒
    * exportLineNum  导出行数
    * downloadUrl  导出文件下载地址
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
    * taskId  导出任务ID
    * instanceId  实例ID
    * taskStatus  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * startTime  任务开始时间，单位毫秒
    * endTime  任务结束时间，单位毫秒
    * createAt  任务创建时间，单位毫秒
    * exportLineNum  导出行数
    * downloadUrl  导出文件下载地址
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
    * taskId  导出任务ID
    * instanceId  实例ID
    * taskStatus  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * startTime  任务开始时间，单位毫秒
    * endTime  任务结束时间，单位毫秒
    * createAt  任务创建时间，单位毫秒
    * exportLineNum  导出行数
    * downloadUrl  导出文件下载地址
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
    * taskId  导出任务ID
    * instanceId  实例ID
    * taskStatus  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * startTime  任务开始时间，单位毫秒
    * endTime  任务结束时间，单位毫秒
    * createAt  任务创建时间，单位毫秒
    * exportLineNum  导出行数
    * downloadUrl  导出文件下载地址
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
    *  导出任务ID
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
    * @param int|null $taskId 导出任务ID
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
    * Gets taskStatus
    *  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
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
    * @param int|null $taskStatus 任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
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
    *  任务开始时间，单位毫秒
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
    * @param int|null $startTime 任务开始时间，单位毫秒
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
    *  任务结束时间，单位毫秒
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
    * @param int|null $endTime 任务结束时间，单位毫秒
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
    *  任务创建时间，单位毫秒
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
    * @param int|null $createAt 任务创建时间，单位毫秒
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
    *  导出行数
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
    * @param int|null $exportLineNum 导出行数
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
    *  导出文件下载地址
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
    * @param string|null $downloadUrl 导出文件下载地址
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

