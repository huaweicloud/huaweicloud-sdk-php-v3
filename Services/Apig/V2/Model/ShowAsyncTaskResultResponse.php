<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAsyncTaskResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAsyncTaskResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * taskStatus  任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    * taskType  任务类型。 import_api为异步导入api，export_api为异步导出api。
    * taskResult  任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskStatus' => 'string',
            'taskType' => 'string',
            'taskResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * taskStatus  任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    * taskType  任务类型。 import_api为异步导入api，export_api为异步导出api。
    * taskResult  任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskStatus' => null,
        'taskType' => null,
        'taskResult' => null
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
    * taskId  任务id
    * taskStatus  任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    * taskType  任务类型。 import_api为异步导入api，export_api为异步导出api。
    * taskResult  任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskStatus' => 'task_status',
            'taskType' => 'task_type',
            'taskResult' => 'task_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * taskStatus  任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    * taskType  任务类型。 import_api为异步导入api，export_api为异步导出api。
    * taskResult  任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskStatus' => 'setTaskStatus',
            'taskType' => 'setTaskType',
            'taskResult' => 'setTaskResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * taskStatus  任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    * taskType  任务类型。 import_api为异步导入api，export_api为异步导出api。
    * taskResult  任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskStatus' => 'getTaskStatus',
            'taskType' => 'getTaskType',
            'taskResult' => 'getTaskResult'
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
    const TASK_STATUS_WAITING = 'waiting';
    const TASK_STATUS_PROCESSING = 'processing';
    const TASK_STATUS_SUCCEED = 'succeed';
    const TASK_STATUS_FAILED = 'failed';
    const TASK_TYPE_IMPORT_API = 'import_api';
    const TASK_TYPE_EXPORT_API = 'export_api';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskStatusAllowableValues()
    {
        return [
            self::TASK_STATUS_WAITING,
            self::TASK_STATUS_PROCESSING,
            self::TASK_STATUS_SUCCEED,
            self::TASK_STATUS_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_IMPORT_API,
            self::TASK_TYPE_EXPORT_API,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskResult'] = isset($data['taskResult']) ? $data['taskResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskStatusAllowableValues();
                if (!is_null($this->container['taskStatus']) && !in_array($this->container['taskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
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
    * Gets taskId
    *  任务id
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
    * @param string|null $taskId 任务id
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
    *  任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态。waiting等待处理，processing处理中，succeed成功，failed失败。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型。 import_api为异步导入api，export_api为异步导出api。
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型。 import_api为异步导入api，export_api为异步导出api。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets taskResult
    *  任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @return string|null
    */
    public function getTaskResult()
    {
        return $this->container['taskResult'];
    }

    /**
    * Sets taskResult
    *
    * @param string|null $taskResult 任务结果。string可转成json object。 当task_type为import_api时，字段包括API分组编号group_id、success数组、failure数组、swagger结构体、ignore数组。其中success数组元素中包括4个字段，导入成功的API编号id、API请求方法method、API请求路径path、导入行为action（枚举值，update表示更新API，create表示新建API）。failure数组元素中包括4个字段，API请求方法method、API请求路径path、导入失败的错误码error_code、导入失败的错误信息error_msg。swagger结构体包括2个字段，swagger文档编号id、导入结果说明result。ignore数组元素包括API请求方法method、API请求路径path。 当task_type为export_api时，字段包括导出文件类型file_type、导出文件内容content。
    *
    * @return $this
    */
    public function setTaskResult($taskResult)
    {
        $this->container['taskResult'] = $taskResult;
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

