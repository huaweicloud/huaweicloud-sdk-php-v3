<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareTaskList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareTaskList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareTaskId  对比任务的id。
    * compareType  对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    * compareTaskStatus  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * createTime  对比开始时间。
    * endTime  对比结束时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareTaskId' => 'string',
            'compareType' => 'string',
            'compareTaskStatus' => 'string',
            'createTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareTaskId  对比任务的id。
    * compareType  对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    * compareTaskStatus  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * createTime  对比开始时间。
    * endTime  对比结束时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareTaskId' => null,
        'compareType' => null,
        'compareTaskStatus' => null,
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
    * compareTaskId  对比任务的id。
    * compareType  对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    * compareTaskStatus  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * createTime  对比开始时间。
    * endTime  对比结束时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareTaskId' => 'compare_task_id',
            'compareType' => 'compare_type',
            'compareTaskStatus' => 'compare_task_status',
            'createTime' => 'create_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareTaskId  对比任务的id。
    * compareType  对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    * compareTaskStatus  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * createTime  对比开始时间。
    * endTime  对比结束时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareTaskId' => 'setCompareTaskId',
            'compareType' => 'setCompareType',
            'compareTaskStatus' => 'setCompareTaskStatus',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareTaskId  对比任务的id。
    * compareType  对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    * compareTaskStatus  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * createTime  对比开始时间。
    * endTime  对比结束时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareTaskId' => 'getCompareTaskId',
            'compareType' => 'getCompareType',
            'compareTaskStatus' => 'getCompareTaskStatus',
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
    const COMPARE_TASK_STATUS_RUNNING = 'RUNNING';
    const COMPARE_TASK_STATUS_WAITING_FOR_RUNNING = 'WAITING_FOR_RUNNING';
    const COMPARE_TASK_STATUS_SUCCESSFUL = 'SUCCESSFUL';
    const COMPARE_TASK_STATUS_FAILED = 'FAILED';
    const COMPARE_TASK_STATUS_CANCELLED = 'CANCELLED';
    const COMPARE_TASK_STATUS_TIMEOUT_INTERRUPT = 'TIMEOUT_INTERRUPT';
    const COMPARE_TASK_STATUS_FULL_DOING = 'FULL_DOING';
    const COMPARE_TASK_STATUS_INCRE_DOING = 'INCRE_DOING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareTaskStatusAllowableValues()
    {
        return [
            self::COMPARE_TASK_STATUS_RUNNING,
            self::COMPARE_TASK_STATUS_WAITING_FOR_RUNNING,
            self::COMPARE_TASK_STATUS_SUCCESSFUL,
            self::COMPARE_TASK_STATUS_FAILED,
            self::COMPARE_TASK_STATUS_CANCELLED,
            self::COMPARE_TASK_STATUS_TIMEOUT_INTERRUPT,
            self::COMPARE_TASK_STATUS_FULL_DOING,
            self::COMPARE_TASK_STATUS_INCRE_DOING,
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
        $this->container['compareTaskId'] = isset($data['compareTaskId']) ? $data['compareTaskId'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['compareTaskStatus'] = isset($data['compareTaskStatus']) ? $data['compareTaskStatus'] : null;
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
        if ($this->container['compareTaskId'] === null) {
            $invalidProperties[] = "'compareTaskId' can't be null";
        }
        if ($this->container['compareType'] === null) {
            $invalidProperties[] = "'compareType' can't be null";
        }
        if ($this->container['compareTaskStatus'] === null) {
            $invalidProperties[] = "'compareTaskStatus' can't be null";
        }
            $allowedValues = $this->getCompareTaskStatusAllowableValues();
                if (!is_null($this->container['compareTaskStatus']) && !in_array($this->container['compareTaskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareTaskStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
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
    * Gets compareTaskId
    *  对比任务的id。
    *
    * @return string
    */
    public function getCompareTaskId()
    {
        return $this->container['compareTaskId'];
    }

    /**
    * Sets compareTaskId
    *
    * @param string $compareTaskId 对比任务的id。
    *
    * @return $this
    */
    public function setCompareTaskId($compareTaskId)
    {
        $this->container['compareTaskId'] = $compareTaskId;
        return $this;
    }

    /**
    * Gets compareType
    *  对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    *
    * @return string
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string $compareType 对比任务的类型。 lines：行对比，contents：值对比，object_comparison：对象级对比落库，object：对象级对比落库，account：账户对比，random：抽样比对，node：内核计算对比结果，mgr：管控计算对比结果
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets compareTaskStatus
    *  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    *
    * @return string
    */
    public function getCompareTaskStatus()
    {
        return $this->container['compareTaskStatus'];
    }

    /**
    * Sets compareTaskStatus
    *
    * @param string $compareTaskStatus 对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    *
    * @return $this
    */
    public function setCompareTaskStatus($compareTaskStatus)
    {
        $this->container['compareTaskStatus'] = $compareTaskStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  对比开始时间。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 对比开始时间。
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
    *  对比结束时间。
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
    * @param string|null $endTime 对比结束时间。
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

