<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TakeOverTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TakeOverTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  桶名。
    * object  目录/文件名。
    * hostType  托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    * outputBucket  输出桶 。
    * outputPath  输出路径 。
    * taskId  任务ID。
    * suffix  托管文件类型。
    * templateGroupName  转码模板组 。
    * createTime  创建时间。
    * endTime  结束时间。
    * status  任务状态。
    * execDesc  媒资的任务执行描述汇总。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'object' => 'string',
            'hostType' => 'int',
            'outputBucket' => 'string',
            'outputPath' => 'string',
            'taskId' => 'string',
            'suffix' => 'string[]',
            'templateGroupName' => 'string',
            'createTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'execDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  桶名。
    * object  目录/文件名。
    * hostType  托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    * outputBucket  输出桶 。
    * outputPath  输出路径 。
    * taskId  任务ID。
    * suffix  托管文件类型。
    * templateGroupName  转码模板组 。
    * createTime  创建时间。
    * endTime  结束时间。
    * status  任务状态。
    * execDesc  媒资的任务执行描述汇总。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'object' => null,
        'hostType' => null,
        'outputBucket' => null,
        'outputPath' => null,
        'taskId' => null,
        'suffix' => null,
        'templateGroupName' => null,
        'createTime' => null,
        'endTime' => null,
        'status' => null,
        'execDesc' => null
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
    * bucket  桶名。
    * object  目录/文件名。
    * hostType  托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    * outputBucket  输出桶 。
    * outputPath  输出路径 。
    * taskId  任务ID。
    * suffix  托管文件类型。
    * templateGroupName  转码模板组 。
    * createTime  创建时间。
    * endTime  结束时间。
    * status  任务状态。
    * execDesc  媒资的任务执行描述汇总。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'object' => 'object',
            'hostType' => 'host_type',
            'outputBucket' => 'output_bucket',
            'outputPath' => 'output_path',
            'taskId' => 'task_id',
            'suffix' => 'suffix',
            'templateGroupName' => 'template_group_name',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'execDesc' => 'exec_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  桶名。
    * object  目录/文件名。
    * hostType  托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    * outputBucket  输出桶 。
    * outputPath  输出路径 。
    * taskId  任务ID。
    * suffix  托管文件类型。
    * templateGroupName  转码模板组 。
    * createTime  创建时间。
    * endTime  结束时间。
    * status  任务状态。
    * execDesc  媒资的任务执行描述汇总。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'object' => 'setObject',
            'hostType' => 'setHostType',
            'outputBucket' => 'setOutputBucket',
            'outputPath' => 'setOutputPath',
            'taskId' => 'setTaskId',
            'suffix' => 'setSuffix',
            'templateGroupName' => 'setTemplateGroupName',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'execDesc' => 'setExecDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  桶名。
    * object  目录/文件名。
    * hostType  托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    * outputBucket  输出桶 。
    * outputPath  输出路径 。
    * taskId  任务ID。
    * suffix  托管文件类型。
    * templateGroupName  转码模板组 。
    * createTime  创建时间。
    * endTime  结束时间。
    * status  任务状态。
    * execDesc  媒资的任务执行描述汇总。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'object' => 'getObject',
            'hostType' => 'getHostType',
            'outputBucket' => 'getOutputBucket',
            'outputPath' => 'getOutputPath',
            'taskId' => 'getTaskId',
            'suffix' => 'getSuffix',
            'templateGroupName' => 'getTemplateGroupName',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'execDesc' => 'getExecDesc'
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
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUCCEED = 'SUCCEED';
    const STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['outputBucket'] = isset($data['outputBucket']) ? $data['outputBucket'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['templateGroupName'] = isset($data['templateGroupName']) ? $data['templateGroupName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['execDesc'] = isset($data['execDesc']) ? $data['execDesc'] : null;
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
    * Gets bucket
    *  桶名。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 桶名。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets object
    *  目录/文件名。
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object 目录/文件名。
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets hostType
    *  托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    *
    * @return int|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param int|null $hostType 托管类型。  取值如下： - 0：表示存储到点播桶 - 1：表示存储在租户桶 - 2：表示存储到租户OBS桶中，且输出目录与源文件的存储目录相同。
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets outputBucket
    *  输出桶 。
    *
    * @return string|null
    */
    public function getOutputBucket()
    {
        return $this->container['outputBucket'];
    }

    /**
    * Sets outputBucket
    *
    * @param string|null $outputBucket 输出桶 。
    *
    * @return $this
    */
    public function setOutputBucket($outputBucket)
    {
        $this->container['outputBucket'] = $outputBucket;
        return $this;
    }

    /**
    * Gets outputPath
    *  输出路径 。
    *
    * @return string|null
    */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /**
    * Sets outputPath
    *
    * @param string|null $outputPath 输出路径 。
    *
    * @return $this
    */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID。
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
    * @param string|null $taskId 任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets suffix
    *  托管文件类型。
    *
    * @return string[]|null
    */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
    * Sets suffix
    *
    * @param string[]|null $suffix 托管文件类型。
    *
    * @return $this
    */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;
        return $this;
    }

    /**
    * Gets templateGroupName
    *  转码模板组 。
    *
    * @return string|null
    */
    public function getTemplateGroupName()
    {
        return $this->container['templateGroupName'];
    }

    /**
    * Sets templateGroupName
    *
    * @param string|null $templateGroupName 转码模板组 。
    *
    * @return $this
    */
    public function setTemplateGroupName($templateGroupName)
    {
        $this->container['templateGroupName'] = $templateGroupName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param string|null $createTime 创建时间。
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
    *  结束时间。
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
    * @param string|null $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets execDesc
    *  媒资的任务执行描述汇总。
    *
    * @return string|null
    */
    public function getExecDesc()
    {
        return $this->container['execDesc'];
    }

    /**
    * Sets execDesc
    *
    * @param string|null $execDesc 媒资的任务执行描述汇总。
    *
    * @return $this
    */
    public function setExecDesc($execDesc)
    {
        $this->container['execDesc'] = $execDesc;
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

