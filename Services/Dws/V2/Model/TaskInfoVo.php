<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**： 分类。 **默认取值**： VacuumFull
    * description  **参数解释**： 描述信息。 **默认取值**： 不涉及。
    * type  **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskName  **参数解释**： 任务名称。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
    * whiteList  **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    * vacuumMode  **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    * vacuumTarget  **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    * isPaused  **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    * vacuumThreshold  **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    * vacuumRetrievingSpace  **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    * vacuumPriority  **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    * timeZone  **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'description' => 'string',
            'type' => 'string',
            'taskId' => 'string',
            'taskName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'whiteList' => '\HuaweiCloud\SDK\Dws\V2\Model\DateInfo[]',
            'vacuumMode' => 'string',
            'vacuumTarget' => 'string',
            'isPaused' => 'int',
            'vacuumThreshold' => 'string',
            'vacuumRetrievingSpace' => 'string',
            'vacuumPriority' => '\HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**： 分类。 **默认取值**： VacuumFull
    * description  **参数解释**： 描述信息。 **默认取值**： 不涉及。
    * type  **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskName  **参数解释**： 任务名称。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
    * whiteList  **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    * vacuumMode  **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    * vacuumTarget  **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    * isPaused  **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    * vacuumThreshold  **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    * vacuumRetrievingSpace  **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    * vacuumPriority  **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    * timeZone  **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'description' => null,
        'type' => null,
        'taskId' => null,
        'taskName' => null,
        'startTime' => null,
        'endTime' => null,
        'whiteList' => null,
        'vacuumMode' => null,
        'vacuumTarget' => null,
        'isPaused' => 'int32',
        'vacuumThreshold' => null,
        'vacuumRetrievingSpace' => null,
        'vacuumPriority' => null,
        'timeZone' => null
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
    * category  **参数解释**： 分类。 **默认取值**： VacuumFull
    * description  **参数解释**： 描述信息。 **默认取值**： 不涉及。
    * type  **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskName  **参数解释**： 任务名称。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
    * whiteList  **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    * vacuumMode  **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    * vacuumTarget  **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    * isPaused  **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    * vacuumThreshold  **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    * vacuumRetrievingSpace  **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    * vacuumPriority  **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    * timeZone  **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'description' => 'description',
            'type' => 'type',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'whiteList' => 'white_list',
            'vacuumMode' => 'vacuum_mode',
            'vacuumTarget' => 'vacuum_target',
            'isPaused' => 'is_paused',
            'vacuumThreshold' => 'vacuum_threshold',
            'vacuumRetrievingSpace' => 'vacuum_retrieving_space',
            'vacuumPriority' => 'vacuum_priority',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**： 分类。 **默认取值**： VacuumFull
    * description  **参数解释**： 描述信息。 **默认取值**： 不涉及。
    * type  **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskName  **参数解释**： 任务名称。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
    * whiteList  **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    * vacuumMode  **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    * vacuumTarget  **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    * isPaused  **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    * vacuumThreshold  **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    * vacuumRetrievingSpace  **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    * vacuumPriority  **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    * timeZone  **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'description' => 'setDescription',
            'type' => 'setType',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'whiteList' => 'setWhiteList',
            'vacuumMode' => 'setVacuumMode',
            'vacuumTarget' => 'setVacuumTarget',
            'isPaused' => 'setIsPaused',
            'vacuumThreshold' => 'setVacuumThreshold',
            'vacuumRetrievingSpace' => 'setVacuumRetrievingSpace',
            'vacuumPriority' => 'setVacuumPriority',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**： 分类。 **默认取值**： VacuumFull
    * description  **参数解释**： 描述信息。 **默认取值**： 不涉及。
    * type  **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskName  **参数解释**： 任务名称。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
    * whiteList  **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    * vacuumMode  **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    * vacuumTarget  **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    * isPaused  **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    * vacuumThreshold  **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    * vacuumRetrievingSpace  **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    * vacuumPriority  **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    * timeZone  **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'description' => 'getDescription',
            'type' => 'getType',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'whiteList' => 'getWhiteList',
            'vacuumMode' => 'getVacuumMode',
            'vacuumTarget' => 'getVacuumTarget',
            'isPaused' => 'getIsPaused',
            'vacuumThreshold' => 'getVacuumThreshold',
            'vacuumRetrievingSpace' => 'getVacuumRetrievingSpace',
            'vacuumPriority' => 'getVacuumPriority',
            'timeZone' => 'getTimeZone'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['whiteList'] = isset($data['whiteList']) ? $data['whiteList'] : null;
        $this->container['vacuumMode'] = isset($data['vacuumMode']) ? $data['vacuumMode'] : null;
        $this->container['vacuumTarget'] = isset($data['vacuumTarget']) ? $data['vacuumTarget'] : null;
        $this->container['isPaused'] = isset($data['isPaused']) ? $data['isPaused'] : null;
        $this->container['vacuumThreshold'] = isset($data['vacuumThreshold']) ? $data['vacuumThreshold'] : null;
        $this->container['vacuumRetrievingSpace'] = isset($data['vacuumRetrievingSpace']) ? $data['vacuumRetrievingSpace'] : null;
        $this->container['vacuumPriority'] = isset($data['vacuumPriority']) ? $data['vacuumPriority'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
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
    * Gets category
    *  **参数解释**： 分类。 **默认取值**： VacuumFull
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 分类。 **默认取值**： VacuumFull
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 描述信息。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 描述信息。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
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
    * @param string|null $type **参数解释**： 任务类型。 **默认取值**： Window：周期型任务； Date：单次型任务；
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**： 任务ID。 **默认取值**： 不涉及。
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
    * @param string|null $taskId **参数解释**： 任务ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**： 任务名称。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**： 任务名称。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 任务开始时间。 **默认取值**： 不涉及。
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
    *  **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 任务结束时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets whiteList
    *  **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\DateInfo[]|null
    */
    public function getWhiteList()
    {
        return $this->container['whiteList'];
    }

    /**
    * Sets whiteList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\DateInfo[]|null $whiteList **参数解释**： 任务时间窗。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setWhiteList($whiteList)
    {
        $this->container['whiteList'] = $whiteList;
        return $this;
    }

    /**
    * Gets vacuumMode
    *  **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    *
    * @return string|null
    */
    public function getVacuumMode()
    {
        return $this->container['vacuumMode'];
    }

    /**
    * Sets vacuumMode
    *
    * @param string|null $vacuumMode **参数解释**： 任务模式。 **默认取值**： manual：指定目标； auto：自动；
    *
    * @return $this
    */
    public function setVacuumMode($vacuumMode)
    {
        $this->container['vacuumMode'] = $vacuumMode;
        return $this;
    }

    /**
    * Gets vacuumTarget
    *  **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    *
    * @return string|null
    */
    public function getVacuumTarget()
    {
        return $this->container['vacuumTarget'];
    }

    /**
    * Sets vacuumTarget
    *
    * @param string|null $vacuumTarget **参数解释**： 自动Vacuum目标。 **默认取值**： user_vacuumfull：用户表VacuumFull； system_vacuum：系统表VacuumFull；
    *
    * @return $this
    */
    public function setVacuumTarget($vacuumTarget)
    {
        $this->container['vacuumTarget'] = $vacuumTarget;
        return $this;
    }

    /**
    * Gets isPaused
    *  **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    *
    * @return int|null
    */
    public function getIsPaused()
    {
        return $this->container['isPaused'];
    }

    /**
    * Sets isPaused
    *
    * @param int|null $isPaused **参数解释**： 是否暂停。 **默认取值**： 0：否； 1：是；
    *
    * @return $this
    */
    public function setIsPaused($isPaused)
    {
        $this->container['isPaused'] = $isPaused;
        return $this;
    }

    /**
    * Gets vacuumThreshold
    *  **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getVacuumThreshold()
    {
        return $this->container['vacuumThreshold'];
    }

    /**
    * Sets vacuumThreshold
    *
    * @param string|null $vacuumThreshold **参数解释**： 膨胀率，单位为百分比。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVacuumThreshold($vacuumThreshold)
    {
        $this->container['vacuumThreshold'] = $vacuumThreshold;
        return $this;
    }

    /**
    * Gets vacuumRetrievingSpace
    *  **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getVacuumRetrievingSpace()
    {
        return $this->container['vacuumRetrievingSpace'];
    }

    /**
    * Sets vacuumRetrievingSpace
    *
    * @param string|null $vacuumRetrievingSpace **参数解释**： 目标表可回收空间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVacuumRetrievingSpace($vacuumRetrievingSpace)
    {
        $this->container['vacuumRetrievingSpace'] = $vacuumRetrievingSpace;
        return $this;
    }

    /**
    * Gets vacuumPriority
    *  **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null
    */
    public function getVacuumPriority()
    {
        return $this->container['vacuumPriority'];
    }

    /**
    * Sets vacuumPriority
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null $vacuumPriority **参数解释**： 优先Vacuum目标。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVacuumPriority($vacuumPriority)
    {
        $this->container['vacuumPriority'] = $vacuumPriority;
        return $this;
    }

    /**
    * Gets timeZone
    *  **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone **参数解释**： 时区信息。 **默认取值**： 一般为null。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

