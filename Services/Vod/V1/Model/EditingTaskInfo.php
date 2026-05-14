<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EditingTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EditingTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  编辑任务ID
    * assetId  输出的媒资ID
    * status  任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
    * progress  进度，取值0-100
    * createTime  任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTime  任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'assetId' => 'string',
            'status' => 'string',
            'progress' => 'int',
            'createTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  编辑任务ID
    * assetId  输出的媒资ID
    * status  任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
    * progress  进度，取值0-100
    * createTime  任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTime  任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'assetId' => null,
        'status' => null,
        'progress' => null,
        'createTime' => null,
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
    * taskId  编辑任务ID
    * assetId  输出的媒资ID
    * status  任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
    * progress  进度，取值0-100
    * createTime  任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTime  任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'assetId' => 'asset_id',
            'status' => 'status',
            'progress' => 'progress',
            'createTime' => 'create_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  编辑任务ID
    * assetId  输出的媒资ID
    * status  任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
    * progress  进度，取值0-100
    * createTime  任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTime  任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'assetId' => 'setAssetId',
            'status' => 'setStatus',
            'progress' => 'setProgress',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  编辑任务ID
    * assetId  输出的媒资ID
    * status  任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
    * progress  进度，取值0-100
    * createTime  任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTime  任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'assetId' => 'getAssetId',
            'status' => 'getStatus',
            'progress' => 'getProgress',
            'createTime' => 'getCreateTime',
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
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
    *  编辑任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 编辑任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets assetId
    *  输出的媒资ID
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 输出的媒资ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
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
    * @param string|null $status 任务状态 - WAITING 等待中 - PROCESSING 处理中； - SUCCEED 成功； - FAILED 失败； - CANCEL 已取消；
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets progress
    *  进度，取值0-100
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 进度，取值0-100
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
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
    * @param string|null $createTime 任务创建时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
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
    * @param string|null $endTime 任务结束时间，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z，当任务结束时才有值
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

