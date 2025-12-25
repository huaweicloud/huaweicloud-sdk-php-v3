<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPlaybookInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPlaybookInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    * workspaceId  工作空间ID
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * name  实例名称
    * playbookName  剧本名称
    * dataclassName  数据类名称
    * dataobjectName  数据对象名称
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * fromDate  查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * toDate  查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * dateType  时间类型. START--按照开始时间检索, END--按照结束时间检索
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'status' => 'string',
            'name' => 'string',
            'playbookName' => 'string',
            'dataclassName' => 'string',
            'dataobjectName' => 'string',
            'triggerType' => 'string',
            'fromDate' => 'string',
            'toDate' => 'string',
            'dateType' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    * workspaceId  工作空间ID
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * name  实例名称
    * playbookName  剧本名称
    * dataclassName  数据类名称
    * dataobjectName  数据对象名称
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * fromDate  查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * toDate  查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * dateType  时间类型. START--按照开始时间检索, END--按照结束时间检索
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'status' => null,
        'name' => null,
        'playbookName' => null,
        'dataclassName' => null,
        'dataobjectName' => null,
        'triggerType' => null,
        'fromDate' => null,
        'toDate' => null,
        'dateType' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * contentType  **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    * workspaceId  工作空间ID
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * name  实例名称
    * playbookName  剧本名称
    * dataclassName  数据类名称
    * dataobjectName  数据对象名称
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * fromDate  查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * toDate  查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * dateType  时间类型. START--按照开始时间检索, END--按照结束时间检索
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'status' => 'status',
            'name' => 'name',
            'playbookName' => 'playbook_name',
            'dataclassName' => 'dataclass_name',
            'dataobjectName' => 'dataobject_name',
            'triggerType' => 'trigger_type',
            'fromDate' => 'from_date',
            'toDate' => 'to_date',
            'dateType' => 'date_type',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    * workspaceId  工作空间ID
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * name  实例名称
    * playbookName  剧本名称
    * dataclassName  数据类名称
    * dataobjectName  数据对象名称
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * fromDate  查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * toDate  查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * dateType  时间类型. START--按照开始时间检索, END--按照结束时间检索
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'status' => 'setStatus',
            'name' => 'setName',
            'playbookName' => 'setPlaybookName',
            'dataclassName' => 'setDataclassName',
            'dataobjectName' => 'setDataobjectName',
            'triggerType' => 'setTriggerType',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate',
            'dateType' => 'setDateType',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    * workspaceId  工作空间ID
    * status  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * name  实例名称
    * playbookName  剧本名称
    * dataclassName  数据类名称
    * dataobjectName  数据对象名称
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    * fromDate  查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * toDate  查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    * dateType  时间类型. START--按照开始时间检索, END--按照结束时间检索
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'status' => 'getStatus',
            'name' => 'getName',
            'playbookName' => 'getPlaybookName',
            'dataclassName' => 'getDataclassName',
            'dataobjectName' => 'getDataobjectName',
            'triggerType' => 'getTriggerType',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate',
            'dateType' => 'getDateType',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['playbookName'] = isset($data['playbookName']) ? $data['playbookName'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['dataobjectName'] = isset($data['dataobjectName']) ? $data['dataobjectName'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['dateType'] = isset($data['dateType']) ? $data['dateType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookName']) && (mb_strlen($this->container['playbookName']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookName']) && (mb_strlen($this->container['playbookName']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataobjectName']) && (mb_strlen($this->container['dataobjectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataobjectName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataobjectName']) && (mb_strlen($this->container['dataobjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataobjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) > 36)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) > 36)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dateType']) && (mb_strlen($this->container['dateType']) > 36)) {
                $invalidProperties[] = "invalid value for 'dateType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dateType']) && (mb_strlen($this->container['dateType']) < 0)) {
                $invalidProperties[] = "invalid value for 'dateType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 9999)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 9999.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 9999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9999.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets contentType
    *  **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 - application/json    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json  **默认取值：** application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets status
    *  剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
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
    * @param string|null $status 剧本实例状态. (RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets playbookName
    *  剧本名称
    *
    * @return string|null
    */
    public function getPlaybookName()
    {
        return $this->container['playbookName'];
    }

    /**
    * Sets playbookName
    *
    * @param string|null $playbookName 剧本名称
    *
    * @return $this
    */
    public function setPlaybookName($playbookName)
    {
        $this->container['playbookName'] = $playbookName;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets dataobjectName
    *  数据对象名称
    *
    * @return string|null
    */
    public function getDataobjectName()
    {
        return $this->container['dataobjectName'];
    }

    /**
    * Sets dataobjectName
    *
    * @param string|null $dataobjectName 数据对象名称
    *
    * @return $this
    */
    public function setDataobjectName($dataobjectName)
    {
        $this->container['dataobjectName'] = $dataobjectName;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets fromDate
    *  查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    *
    * @return string|null
    */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
    * Sets fromDate
    *
    * @param string|null $fromDate 查询起始时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    *
    * @return $this
    */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;
        return $this;
    }

    /**
    * Gets toDate
    *  查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    *
    * @return string|null
    */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
    * Sets toDate
    *
    * @param string|null $toDate 查询结束时间，时间格式 yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
        return $this;
    }

    /**
    * Gets dateType
    *  时间类型. START--按照开始时间检索, END--按照结束时间检索
    *
    * @return string|null
    */
    public function getDateType()
    {
        return $this->container['dateType'];
    }

    /**
    * Sets dateType
    *
    * @param string|null $dateType 时间类型. START--按照开始时间检索, END--按照结束时间检索
    *
    * @return $this
    */
    public function setDateType($dateType)
    {
        $this->container['dateType'] = $dateType;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页查询参数，用于指定一次查询最多的结果数，从1开始，limit 和 offset相加需要小于10000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 分页查询参数。用于指定查询结果的起始位置，从0开始, limit 和 offset相加需要小于10000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

