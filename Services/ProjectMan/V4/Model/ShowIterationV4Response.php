<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIterationV4Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIterationV4Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  迭代结束时间，年-月-日
    * charts  燃尽图
    * closedTotal  已关闭的工单数
    * createdTime  迭代创建时间
    * endTime  迭代开始时间，年-月-日
    * haveTask  是否有task
    * iterationId  迭代id
    * name  迭代标题
    * openedTotal  开启的工单数
    * progress  工作进展
    * total  工单总数
    * updatedTime  迭代更新时间
    * status  迭代的状态,0 未开始，1 进行中，2 结束
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'string',
            'charts' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\Chart[]',
            'closedTotal' => 'int',
            'createdTime' => 'string',
            'endTime' => 'string',
            'haveTask' => 'bool',
            'iterationId' => 'int',
            'name' => 'string',
            'openedTotal' => 'int',
            'progress' => 'string',
            'total' => 'int',
            'updatedTime' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  迭代结束时间，年-月-日
    * charts  燃尽图
    * closedTotal  已关闭的工单数
    * createdTime  迭代创建时间
    * endTime  迭代开始时间，年-月-日
    * haveTask  是否有task
    * iterationId  迭代id
    * name  迭代标题
    * openedTotal  开启的工单数
    * progress  工作进展
    * total  工单总数
    * updatedTime  迭代更新时间
    * status  迭代的状态,0 未开始，1 进行中，2 结束
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => null,
        'charts' => null,
        'closedTotal' => 'int32',
        'createdTime' => null,
        'endTime' => null,
        'haveTask' => null,
        'iterationId' => 'int32',
        'name' => null,
        'openedTotal' => 'int32',
        'progress' => null,
        'total' => 'int32',
        'updatedTime' => null,
        'status' => null
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
    * beginTime  迭代结束时间，年-月-日
    * charts  燃尽图
    * closedTotal  已关闭的工单数
    * createdTime  迭代创建时间
    * endTime  迭代开始时间，年-月-日
    * haveTask  是否有task
    * iterationId  迭代id
    * name  迭代标题
    * openedTotal  开启的工单数
    * progress  工作进展
    * total  工单总数
    * updatedTime  迭代更新时间
    * status  迭代的状态,0 未开始，1 进行中，2 结束
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'charts' => 'charts',
            'closedTotal' => 'closed_total',
            'createdTime' => 'created_time',
            'endTime' => 'end_time',
            'haveTask' => 'have_task',
            'iterationId' => 'iteration_id',
            'name' => 'name',
            'openedTotal' => 'opened_total',
            'progress' => 'progress',
            'total' => 'total',
            'updatedTime' => 'updated_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  迭代结束时间，年-月-日
    * charts  燃尽图
    * closedTotal  已关闭的工单数
    * createdTime  迭代创建时间
    * endTime  迭代开始时间，年-月-日
    * haveTask  是否有task
    * iterationId  迭代id
    * name  迭代标题
    * openedTotal  开启的工单数
    * progress  工作进展
    * total  工单总数
    * updatedTime  迭代更新时间
    * status  迭代的状态,0 未开始，1 进行中，2 结束
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'charts' => 'setCharts',
            'closedTotal' => 'setClosedTotal',
            'createdTime' => 'setCreatedTime',
            'endTime' => 'setEndTime',
            'haveTask' => 'setHaveTask',
            'iterationId' => 'setIterationId',
            'name' => 'setName',
            'openedTotal' => 'setOpenedTotal',
            'progress' => 'setProgress',
            'total' => 'setTotal',
            'updatedTime' => 'setUpdatedTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  迭代结束时间，年-月-日
    * charts  燃尽图
    * closedTotal  已关闭的工单数
    * createdTime  迭代创建时间
    * endTime  迭代开始时间，年-月-日
    * haveTask  是否有task
    * iterationId  迭代id
    * name  迭代标题
    * openedTotal  开启的工单数
    * progress  工作进展
    * total  工单总数
    * updatedTime  迭代更新时间
    * status  迭代的状态,0 未开始，1 进行中，2 结束
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'charts' => 'getCharts',
            'closedTotal' => 'getClosedTotal',
            'createdTime' => 'getCreatedTime',
            'endTime' => 'getEndTime',
            'haveTask' => 'getHaveTask',
            'iterationId' => 'getIterationId',
            'name' => 'getName',
            'openedTotal' => 'getOpenedTotal',
            'progress' => 'getProgress',
            'total' => 'getTotal',
            'updatedTime' => 'getUpdatedTime',
            'status' => 'getStatus'
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
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['closedTotal'] = isset($data['closedTotal']) ? $data['closedTotal'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['haveTask'] = isset($data['haveTask']) ? $data['haveTask'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['openedTotal'] = isset($data['openedTotal']) ? $data['openedTotal'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  迭代结束时间，年-月-日
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 迭代结束时间，年-月-日
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets charts
    *  燃尽图
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\Chart[]|null
    */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
    * Sets charts
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\Chart[]|null $charts 燃尽图
    *
    * @return $this
    */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;
        return $this;
    }

    /**
    * Gets closedTotal
    *  已关闭的工单数
    *
    * @return int|null
    */
    public function getClosedTotal()
    {
        return $this->container['closedTotal'];
    }

    /**
    * Sets closedTotal
    *
    * @param int|null $closedTotal 已关闭的工单数
    *
    * @return $this
    */
    public function setClosedTotal($closedTotal)
    {
        $this->container['closedTotal'] = $closedTotal;
        return $this;
    }

    /**
    * Gets createdTime
    *  迭代创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 迭代创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets endTime
    *  迭代开始时间，年-月-日
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
    * @param string|null $endTime 迭代开始时间，年-月-日
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets haveTask
    *  是否有task
    *
    * @return bool|null
    */
    public function getHaveTask()
    {
        return $this->container['haveTask'];
    }

    /**
    * Sets haveTask
    *
    * @param bool|null $haveTask 是否有task
    *
    * @return $this
    */
    public function setHaveTask($haveTask)
    {
        $this->container['haveTask'] = $haveTask;
        return $this;
    }

    /**
    * Gets iterationId
    *  迭代id
    *
    * @return int|null
    */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
    * Sets iterationId
    *
    * @param int|null $iterationId 迭代id
    *
    * @return $this
    */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;
        return $this;
    }

    /**
    * Gets name
    *  迭代标题
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
    * @param string|null $name 迭代标题
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets openedTotal
    *  开启的工单数
    *
    * @return int|null
    */
    public function getOpenedTotal()
    {
        return $this->container['openedTotal'];
    }

    /**
    * Sets openedTotal
    *
    * @param int|null $openedTotal 开启的工单数
    *
    * @return $this
    */
    public function setOpenedTotal($openedTotal)
    {
        $this->container['openedTotal'] = $openedTotal;
        return $this;
    }

    /**
    * Gets progress
    *  工作进展
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 工作进展
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets total
    *  工单总数
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
    * @param int|null $total 工单总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets updatedTime
    *  迭代更新时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 迭代更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets status
    *  迭代的状态,0 未开始，1 进行中，2 结束
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
    * @param string|null $status 迭代的状态,0 未开始，1 进行中，2 结束
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

