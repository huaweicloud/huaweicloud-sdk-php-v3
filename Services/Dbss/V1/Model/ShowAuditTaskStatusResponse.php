<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditTaskStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditTaskStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  开始时间
    * busiType  业务类型  - audit: 审计  - risk: 风险
    * completedNum  已统计实例数
    * endTime  结束时间
    * id  Task任务ID
    * projectId  项目ID
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    * taskStatus  任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
    * taskSwitch  任务开关
    * totalNum  总实例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'int',
            'busiType' => 'string',
            'completedNum' => 'int',
            'endTime' => 'int',
            'id' => 'int',
            'projectId' => 'string',
            'queryBeginTime' => 'int',
            'queryEndTime' => 'int',
            'taskStatus' => 'string',
            'taskSwitch' => 'string',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  开始时间
    * busiType  业务类型  - audit: 审计  - risk: 风险
    * completedNum  已统计实例数
    * endTime  结束时间
    * id  Task任务ID
    * projectId  项目ID
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    * taskStatus  任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
    * taskSwitch  任务开关
    * totalNum  总实例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => 'int64',
        'busiType' => null,
        'completedNum' => 'int32',
        'endTime' => 'int64',
        'id' => 'int64',
        'projectId' => null,
        'queryBeginTime' => 'int64',
        'queryEndTime' => 'int64',
        'taskStatus' => null,
        'taskSwitch' => null,
        'totalNum' => 'int32'
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
    * beginTime  开始时间
    * busiType  业务类型  - audit: 审计  - risk: 风险
    * completedNum  已统计实例数
    * endTime  结束时间
    * id  Task任务ID
    * projectId  项目ID
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    * taskStatus  任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
    * taskSwitch  任务开关
    * totalNum  总实例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'busiType' => 'busi_type',
            'completedNum' => 'completed_num',
            'endTime' => 'end_time',
            'id' => 'id',
            'projectId' => 'project_id',
            'queryBeginTime' => 'query_begin_time',
            'queryEndTime' => 'query_end_time',
            'taskStatus' => 'task_status',
            'taskSwitch' => 'task_switch',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  开始时间
    * busiType  业务类型  - audit: 审计  - risk: 风险
    * completedNum  已统计实例数
    * endTime  结束时间
    * id  Task任务ID
    * projectId  项目ID
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    * taskStatus  任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
    * taskSwitch  任务开关
    * totalNum  总实例数
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'busiType' => 'setBusiType',
            'completedNum' => 'setCompletedNum',
            'endTime' => 'setEndTime',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'queryBeginTime' => 'setQueryBeginTime',
            'queryEndTime' => 'setQueryEndTime',
            'taskStatus' => 'setTaskStatus',
            'taskSwitch' => 'setTaskSwitch',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  开始时间
    * busiType  业务类型  - audit: 审计  - risk: 风险
    * completedNum  已统计实例数
    * endTime  结束时间
    * id  Task任务ID
    * projectId  项目ID
    * queryBeginTime  查询条件：开始时间
    * queryEndTime  查询条件：结束时间
    * taskStatus  任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
    * taskSwitch  任务开关
    * totalNum  总实例数
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'busiType' => 'getBusiType',
            'completedNum' => 'getCompletedNum',
            'endTime' => 'getEndTime',
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'queryBeginTime' => 'getQueryBeginTime',
            'queryEndTime' => 'getQueryEndTime',
            'taskStatus' => 'getTaskStatus',
            'taskSwitch' => 'getTaskSwitch',
            'totalNum' => 'getTotalNum'
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['busiType'] = isset($data['busiType']) ? $data['busiType'] : null;
        $this->container['completedNum'] = isset($data['completedNum']) ? $data['completedNum'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['queryBeginTime'] = isset($data['queryBeginTime']) ? $data['queryBeginTime'] : null;
        $this->container['queryEndTime'] = isset($data['queryEndTime']) ? $data['queryEndTime'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['taskSwitch'] = isset($data['taskSwitch']) ? $data['taskSwitch'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
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
    * Gets beginTime
    *  开始时间
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets busiType
    *  业务类型  - audit: 审计  - risk: 风险
    *
    * @return string|null
    */
    public function getBusiType()
    {
        return $this->container['busiType'];
    }

    /**
    * Sets busiType
    *
    * @param string|null $busiType 业务类型  - audit: 审计  - risk: 风险
    *
    * @return $this
    */
    public function setBusiType($busiType)
    {
        $this->container['busiType'] = $busiType;
        return $this;
    }

    /**
    * Gets completedNum
    *  已统计实例数
    *
    * @return int|null
    */
    public function getCompletedNum()
    {
        return $this->container['completedNum'];
    }

    /**
    * Sets completedNum
    *
    * @param int|null $completedNum 已统计实例数
    *
    * @return $this
    */
    public function setCompletedNum($completedNum)
    {
        $this->container['completedNum'] = $completedNum;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
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
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets id
    *  Task任务ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id Task任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets queryBeginTime
    *  查询条件：开始时间
    *
    * @return int|null
    */
    public function getQueryBeginTime()
    {
        return $this->container['queryBeginTime'];
    }

    /**
    * Sets queryBeginTime
    *
    * @param int|null $queryBeginTime 查询条件：开始时间
    *
    * @return $this
    */
    public function setQueryBeginTime($queryBeginTime)
    {
        $this->container['queryBeginTime'] = $queryBeginTime;
        return $this;
    }

    /**
    * Gets queryEndTime
    *  查询条件：结束时间
    *
    * @return int|null
    */
    public function getQueryEndTime()
    {
        return $this->container['queryEndTime'];
    }

    /**
    * Sets queryEndTime
    *
    * @param int|null $queryEndTime 查询条件：结束时间
    *
    * @return $this
    */
    public function setQueryEndTime($queryEndTime)
    {
        $this->container['queryEndTime'] = $queryEndTime;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
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
    * @param string|null $taskStatus 任务状态  - 0：已就绪  - 1：运行中  - 2：成功  - 3：失败
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets taskSwitch
    *  任务开关
    *
    * @return string|null
    */
    public function getTaskSwitch()
    {
        return $this->container['taskSwitch'];
    }

    /**
    * Sets taskSwitch
    *
    * @param string|null $taskSwitch 任务开关
    *
    * @return $this
    */
    public function setTaskSwitch($taskSwitch)
    {
        $this->container['taskSwitch'] = $taskSwitch;
        return $this;
    }

    /**
    * Gets totalNum
    *  总实例数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 总实例数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

