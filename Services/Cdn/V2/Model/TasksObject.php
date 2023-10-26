<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TasksObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TasksObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务id。
    * taskType  任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
    * status  刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
    * processing  处理中的url个数。
    * succeed  成功处理的url个数。
    * failed  处理失败的url个数。
    * total  url总数。
    * createTime  任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * fileType  默认是文件file。file：文件,directory：目录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'taskType' => 'string',
            'status' => 'string',
            'processing' => 'int',
            'succeed' => 'int',
            'failed' => 'int',
            'total' => 'int',
            'createTime' => 'int',
            'fileType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务id。
    * taskType  任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
    * status  刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
    * processing  处理中的url个数。
    * succeed  成功处理的url个数。
    * failed  处理失败的url个数。
    * total  url总数。
    * createTime  任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * fileType  默认是文件file。file：文件,directory：目录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'taskType' => null,
        'status' => null,
        'processing' => 'int32',
        'succeed' => 'int32',
        'failed' => 'int32',
        'total' => 'int32',
        'createTime' => 'int64',
        'fileType' => null
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
    * id  任务id。
    * taskType  任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
    * status  刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
    * processing  处理中的url个数。
    * succeed  成功处理的url个数。
    * failed  处理失败的url个数。
    * total  url总数。
    * createTime  任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * fileType  默认是文件file。file：文件,directory：目录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'taskType' => 'task_type',
            'status' => 'status',
            'processing' => 'processing',
            'succeed' => 'succeed',
            'failed' => 'failed',
            'total' => 'total',
            'createTime' => 'create_time',
            'fileType' => 'file_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务id。
    * taskType  任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
    * status  刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
    * processing  处理中的url个数。
    * succeed  成功处理的url个数。
    * failed  处理失败的url个数。
    * total  url总数。
    * createTime  任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * fileType  默认是文件file。file：文件,directory：目录。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'taskType' => 'setTaskType',
            'status' => 'setStatus',
            'processing' => 'setProcessing',
            'succeed' => 'setSucceed',
            'failed' => 'setFailed',
            'total' => 'setTotal',
            'createTime' => 'setCreateTime',
            'fileType' => 'setFileType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务id。
    * taskType  任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
    * status  刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
    * processing  处理中的url个数。
    * succeed  成功处理的url个数。
    * failed  处理失败的url个数。
    * total  url总数。
    * createTime  任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * fileType  默认是文件file。file：文件,directory：目录。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'taskType' => 'getTaskType',
            'status' => 'getStatus',
            'processing' => 'getProcessing',
            'succeed' => 'getSucceed',
            'failed' => 'getFailed',
            'total' => 'getTotal',
            'createTime' => 'getCreateTime',
            'fileType' => 'getFileType'
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
    const TASK_TYPE_REFRESH = 'refresh';
    const TASK_TYPE_PREHEATING = 'preheating';
    const FILE_TYPE_FILE = 'file';
    const FILE_TYPE_DIRECTORY = 'directory';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_REFRESH,
            self::TASK_TYPE_PREHEATING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFileTypeAllowableValues()
    {
        return [
            self::FILE_TYPE_FILE,
            self::FILE_TYPE_DIRECTORY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
        $this->container['succeed'] = isset($data['succeed']) ? $data['succeed'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFileTypeAllowableValues();
                if (!is_null($this->container['fileType']) && !in_array($this->container['fileType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fileType', must be one of '%s'",
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
    * Gets id
    *  任务id。
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
    * @param string|null $id 任务id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets taskType
    *  任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
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
    * @param string|null $taskType 任务的类型， 其值可以为refresh：刷新任务，或preheating：预热任务。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets status
    *  刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
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
    * @param string|null $status 刷新结果。task_done表示刷新成功  ，task_inprocess表示刷新中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets processing
    *  处理中的url个数。
    *
    * @return int|null
    */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
    * Sets processing
    *
    * @param int|null $processing 处理中的url个数。
    *
    * @return $this
    */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;
        return $this;
    }

    /**
    * Gets succeed
    *  成功处理的url个数。
    *
    * @return int|null
    */
    public function getSucceed()
    {
        return $this->container['succeed'];
    }

    /**
    * Sets succeed
    *
    * @param int|null $succeed 成功处理的url个数。
    *
    * @return $this
    */
    public function setSucceed($succeed)
    {
        $this->container['succeed'] = $succeed;
        return $this;
    }

    /**
    * Gets failed
    *  处理失败的url个数。
    *
    * @return int|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param int|null $failed 处理失败的url个数。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets total
    *  url总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total url总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets createTime
    *  任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 任务的创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets fileType
    *  默认是文件file。file：文件,directory：目录。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 默认是文件file。file：文件,directory：目录。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
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

