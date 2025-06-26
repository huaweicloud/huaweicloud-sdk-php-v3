<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDiagnosisTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDiagnosisTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  诊断任务工单ID
    * type  诊断任务实例类别
    * status  诊断任务执行状态
    * region  被诊断实例所在区域
    * creator  诊断工单创建者
    * startTime  诊断工单的开始执行时间
    * endTime  诊断工单的执行结束时间
    * pageIndex  分页查询页索引
    * pageSize  分页查询页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'region' => 'string',
            'creator' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'pageIndex' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  诊断任务工单ID
    * type  诊断任务实例类别
    * status  诊断任务执行状态
    * region  被诊断实例所在区域
    * creator  诊断工单创建者
    * startTime  诊断工单的开始执行时间
    * endTime  诊断工单的执行结束时间
    * pageIndex  分页查询页索引
    * pageSize  分页查询页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'type' => null,
        'status' => null,
        'region' => null,
        'creator' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'pageIndex' => 'int32',
        'pageSize' => 'int32'
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
    * taskId  诊断任务工单ID
    * type  诊断任务实例类别
    * status  诊断任务执行状态
    * region  被诊断实例所在区域
    * creator  诊断工单创建者
    * startTime  诊断工单的开始执行时间
    * endTime  诊断工单的执行结束时间
    * pageIndex  分页查询页索引
    * pageSize  分页查询页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'type' => 'type',
            'status' => 'status',
            'region' => 'region',
            'creator' => 'creator',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  诊断任务工单ID
    * type  诊断任务实例类别
    * status  诊断任务执行状态
    * region  被诊断实例所在区域
    * creator  诊断工单创建者
    * startTime  诊断工单的开始执行时间
    * endTime  诊断工单的执行结束时间
    * pageIndex  分页查询页索引
    * pageSize  分页查询页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'type' => 'setType',
            'status' => 'setStatus',
            'region' => 'setRegion',
            'creator' => 'setCreator',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  诊断任务工单ID
    * type  诊断任务实例类别
    * status  诊断任务执行状态
    * region  被诊断实例所在区域
    * creator  诊断工单创建者
    * startTime  诊断工单的开始执行时间
    * endTime  诊断工单的执行结束时间
    * pageIndex  分页查询页索引
    * pageSize  分页查询页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'type' => 'getType',
            'status' => 'getStatus',
            'region' => 'getRegion',
            'creator' => 'getCreator',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize'
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
    const TYPE_ECS = 'ECS';
    const TYPE_RDS = 'RDS';
    const TYPE_DCS = 'DCS';
    const TYPE_DMS = 'DMS';
    const TYPE_ELB = 'ELB';
    const STATUS_CANCEL = 'cancel';
    const STATUS_EXECUTING = 'executing';
    const STATUS_WAITING = 'waiting';
    const STATUS_FAILED = 'failed';
    const STATUS_FINISH = 'finish';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ECS,
            self::TYPE_RDS,
            self::TYPE_DCS,
            self::TYPE_DMS,
            self::TYPE_ELB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CANCEL,
            self::STATUS_EXECUTING,
            self::STATUS_WAITING,
            self::STATUS_FAILED,
            self::STATUS_FINISH,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 2048)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['pageIndex'] === null) {
            $invalidProperties[] = "'pageIndex' can't be null";
        }
            if (($this->container['pageIndex'] > 10000)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be smaller than or equal to 10000.";
            }
            if (($this->container['pageIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 1.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
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
    *  诊断任务工单ID
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
    * @param string|null $taskId 诊断任务工单ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets type
    *  诊断任务实例类别
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 诊断任务实例类别
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  诊断任务执行状态
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
    * @param string|null $status 诊断任务执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets region
    *  被诊断实例所在区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 被诊断实例所在区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets creator
    *  诊断工单创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 诊断工单创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets startTime
    *  诊断工单的开始执行时间
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
    * @param int|null $startTime 诊断工单的开始执行时间
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
    *  诊断工单的执行结束时间
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
    * @param int|null $endTime 诊断工单的执行结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pageIndex
    *  分页查询页索引
    *
    * @return int
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int $pageIndex 分页查询页索引
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页查询页大小
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 分页查询页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

