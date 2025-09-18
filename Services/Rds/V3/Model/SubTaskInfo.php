<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subTaskName  子任务名
    * percent  子任务进度
    * executedTime  子任务执行时间
    * status  子任务状态
    * remainingTime  子任务剩余预估时长
    * showDetail  是否展示已恢复库表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subTaskName' => 'string',
            'percent' => 'string',
            'executedTime' => 'string',
            'status' => 'string',
            'remainingTime' => 'string',
            'showDetail' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subTaskName  子任务名
    * percent  子任务进度
    * executedTime  子任务执行时间
    * status  子任务状态
    * remainingTime  子任务剩余预估时长
    * showDetail  是否展示已恢复库表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subTaskName' => null,
        'percent' => null,
        'executedTime' => null,
        'status' => null,
        'remainingTime' => null,
        'showDetail' => null
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
    * subTaskName  子任务名
    * percent  子任务进度
    * executedTime  子任务执行时间
    * status  子任务状态
    * remainingTime  子任务剩余预估时长
    * showDetail  是否展示已恢复库表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subTaskName' => 'sub_task_name',
            'percent' => 'percent',
            'executedTime' => 'executed_time',
            'status' => 'status',
            'remainingTime' => 'remaining_time',
            'showDetail' => 'show_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subTaskName  子任务名
    * percent  子任务进度
    * executedTime  子任务执行时间
    * status  子任务状态
    * remainingTime  子任务剩余预估时长
    * showDetail  是否展示已恢复库表
    *
    * @var string[]
    */
    protected static $setters = [
            'subTaskName' => 'setSubTaskName',
            'percent' => 'setPercent',
            'executedTime' => 'setExecutedTime',
            'status' => 'setStatus',
            'remainingTime' => 'setRemainingTime',
            'showDetail' => 'setShowDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subTaskName  子任务名
    * percent  子任务进度
    * executedTime  子任务执行时间
    * status  子任务状态
    * remainingTime  子任务剩余预估时长
    * showDetail  是否展示已恢复库表
    *
    * @var string[]
    */
    protected static $getters = [
            'subTaskName' => 'getSubTaskName',
            'percent' => 'getPercent',
            'executedTime' => 'getExecutedTime',
            'status' => 'getStatus',
            'remainingTime' => 'getRemainingTime',
            'showDetail' => 'getShowDetail'
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
        $this->container['subTaskName'] = isset($data['subTaskName']) ? $data['subTaskName'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['executedTime'] = isset($data['executedTime']) ? $data['executedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
        $this->container['showDetail'] = isset($data['showDetail']) ? $data['showDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subTaskName']) && (mb_strlen($this->container['subTaskName']) > 4096)) {
                $invalidProperties[] = "invalid value for 'subTaskName', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['subTaskName']) && (mb_strlen($this->container['subTaskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'subTaskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['percent']) && (mb_strlen($this->container['percent']) > 4096)) {
                $invalidProperties[] = "invalid value for 'percent', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['percent']) && (mb_strlen($this->container['percent']) < 1)) {
                $invalidProperties[] = "invalid value for 'percent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executedTime']) && (mb_strlen($this->container['executedTime']) > 4096)) {
                $invalidProperties[] = "invalid value for 'executedTime', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['executedTime']) && (mb_strlen($this->container['executedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'executedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 4096)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remainingTime']) && (mb_strlen($this->container['remainingTime']) > 4096)) {
                $invalidProperties[] = "invalid value for 'remainingTime', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['remainingTime']) && (mb_strlen($this->container['remainingTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'remainingTime', the character length must be bigger than or equal to 0.";
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
    * Gets subTaskName
    *  子任务名
    *
    * @return string|null
    */
    public function getSubTaskName()
    {
        return $this->container['subTaskName'];
    }

    /**
    * Sets subTaskName
    *
    * @param string|null $subTaskName 子任务名
    *
    * @return $this
    */
    public function setSubTaskName($subTaskName)
    {
        $this->container['subTaskName'] = $subTaskName;
        return $this;
    }

    /**
    * Gets percent
    *  子任务进度
    *
    * @return string|null
    */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
    * Sets percent
    *
    * @param string|null $percent 子任务进度
    *
    * @return $this
    */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;
        return $this;
    }

    /**
    * Gets executedTime
    *  子任务执行时间
    *
    * @return string|null
    */
    public function getExecutedTime()
    {
        return $this->container['executedTime'];
    }

    /**
    * Sets executedTime
    *
    * @param string|null $executedTime 子任务执行时间
    *
    * @return $this
    */
    public function setExecutedTime($executedTime)
    {
        $this->container['executedTime'] = $executedTime;
        return $this;
    }

    /**
    * Gets status
    *  子任务状态
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
    * @param string|null $status 子任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets remainingTime
    *  子任务剩余预估时长
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime 子任务剩余预估时长
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
        return $this;
    }

    /**
    * Gets showDetail
    *  是否展示已恢复库表
    *
    * @return bool|null
    */
    public function getShowDetail()
    {
        return $this->container['showDetail'];
    }

    /**
    * Sets showDetail
    *
    * @param bool|null $showDetail 是否展示已恢复库表
    *
    * @return $this
    */
    public function setShowDetail($showDetail)
    {
        $this->container['showDetail'] = $showDetail;
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

