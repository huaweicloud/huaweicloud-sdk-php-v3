<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceInfosRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceInfosRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instance  实例id
    * workspaceId  空间id
    * taskId  作业算子id
    * jobName  作业算子名称
    * startTime  搜索参数时间范围的开始时间，例：1705248000000
    * endTime  搜索参数时间范围的结束时间,例：1705311669796
    * offset  分页参数偏移量
    * limit  分页参每页数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => 'string',
            'workspaceId' => 'string',
            'taskId' => 'string',
            'jobName' => 'string',
            'startTime' => 'float',
            'endTime' => 'float',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  实例id
    * workspaceId  空间id
    * taskId  作业算子id
    * jobName  作业算子名称
    * startTime  搜索参数时间范围的开始时间，例：1705248000000
    * endTime  搜索参数时间范围的结束时间,例：1705311669796
    * offset  分页参数偏移量
    * limit  分页参每页数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'workspaceId' => null,
        'taskId' => null,
        'jobName' => null,
        'startTime' => null,
        'endTime' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * instance  实例id
    * workspaceId  空间id
    * taskId  作业算子id
    * jobName  作业算子名称
    * startTime  搜索参数时间范围的开始时间，例：1705248000000
    * endTime  搜索参数时间范围的结束时间,例：1705311669796
    * offset  分页参数偏移量
    * limit  分页参每页数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'workspaceId' => 'workspace_id',
            'taskId' => 'task_id',
            'jobName' => 'job_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  实例id
    * workspaceId  空间id
    * taskId  作业算子id
    * jobName  作业算子名称
    * startTime  搜索参数时间范围的开始时间，例：1705248000000
    * endTime  搜索参数时间范围的结束时间,例：1705311669796
    * offset  分页参数偏移量
    * limit  分页参每页数量
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'workspaceId' => 'setWorkspaceId',
            'taskId' => 'setTaskId',
            'jobName' => 'setJobName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  实例id
    * workspaceId  空间id
    * taskId  作业算子id
    * jobName  作业算子名称
    * startTime  搜索参数时间范围的开始时间，例：1705248000000
    * endTime  搜索参数时间范围的结束时间,例：1705311669796
    * offset  分页参数偏移量
    * limit  分页参每页数量
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'workspaceId' => 'getWorkspaceId',
            'taskId' => 'getTaskId',
            'jobName' => 'getJobName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
            if ((mb_strlen($this->container['instance']) > 36)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instance']) < 32)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    * Gets instance
    *  实例id
    *
    * @return string
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param string $instance 实例id
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets workspaceId
    *  空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets taskId
    *  作业算子id
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 作业算子id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets jobName
    *  作业算子名称
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业算子名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets startTime
    *  搜索参数时间范围的开始时间，例：1705248000000
    *
    * @return float
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param float $startTime 搜索参数时间范围的开始时间，例：1705248000000
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
    *  搜索参数时间范围的结束时间,例：1705311669796
    *
    * @return float
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param float $endTime 搜索参数时间范围的结束时间,例：1705311669796
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数偏移量
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
    * @param int $offset 分页参数偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页参每页数量
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
    * @param int $limit 分页参每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

