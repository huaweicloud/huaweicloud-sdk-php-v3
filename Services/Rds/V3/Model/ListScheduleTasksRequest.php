<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduleTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduleTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    * instanceId  实例id，按实例id过滤。
    * instanceName  实例名称，按实例名称过滤。
    * status  任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
    * startTime  查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    * endTime  查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    * instanceId  实例id，按实例id过滤。
    * instanceName  实例名称，按实例名称过滤。
    * status  任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
    * startTime  查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    * endTime  查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'instanceId' => null,
        'instanceName' => null,
        'status' => null,
        'startTime' => null,
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
    * offset  索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    * instanceId  实例id，按实例id过滤。
    * instanceName  实例名称，按实例名称过滤。
    * status  任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
    * startTime  查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    * endTime  查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    * instanceId  实例id，按实例id过滤。
    * instanceName  实例名称，按实例名称过滤。
    * status  任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
    * startTime  查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    * endTime  查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    * instanceId  实例id，按实例id过滤。
    * instanceName  实例名称，按实例名称过滤。
    * status  任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
    * startTime  查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    * endTime  查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
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
    const STATUS_INITING = 'Initing';
    const STATUS_PENDING = 'Pending';
    const STATUS_RUNNING = 'Running';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_FAILED = 'Failed';
    const STATUS_UNAUTHORIZED = 'Unauthorized';
    const STATUS_CANCELED = 'Canceled';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INITING,
            self::STATUS_PENDING,
            self::STATUS_RUNNING,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_UNAUTHORIZED,
            self::STATUS_CANCELED,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 50)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
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
    * Gets offset
    *  索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，偏移量。  从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    *  查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数。默认为10，不能为负数，最小值为1，最大值为50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id，按实例id过滤。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id，按实例id过滤。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称，按实例名称过滤。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称，按实例名称过滤。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
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
    * @param string|null $status 任务状态，按任务状态过滤。 Initing:初始化中 Pending:挂起 Running:运行中 Completed:已完成 Failed:已失败 Unauthorized:未授权 Canceled:已取消
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
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
    * @param string|null $startTime 查询任务创建的开始时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
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
    *  查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
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
    * @param string|null $endTime 查询任务创建的结束时间，“start_time”有值时，“end_time”必选。格式为UTC时间戳。
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

