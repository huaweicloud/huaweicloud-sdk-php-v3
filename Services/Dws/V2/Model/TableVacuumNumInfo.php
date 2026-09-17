<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableVacuumNumInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableVacuumNumInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * waitingNum  **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    * runningNum  **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    * finishedNum  **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    * canceledNum  **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    * totalNum  **参数解释**： 总数。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'waitingNum' => 'int',
            'runningNum' => 'int',
            'finishedNum' => 'int',
            'canceledNum' => 'int',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * waitingNum  **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    * runningNum  **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    * finishedNum  **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    * canceledNum  **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    * totalNum  **参数解释**： 总数。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'waitingNum' => 'int32',
        'runningNum' => 'int32',
        'finishedNum' => 'int32',
        'canceledNum' => 'int32',
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
    * waitingNum  **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    * runningNum  **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    * finishedNum  **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    * canceledNum  **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    * totalNum  **参数解释**： 总数。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'waitingNum' => 'waiting_num',
            'runningNum' => 'running_num',
            'finishedNum' => 'finished_num',
            'canceledNum' => 'canceled_num',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * waitingNum  **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    * runningNum  **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    * finishedNum  **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    * canceledNum  **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    * totalNum  **参数解释**： 总数。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'waitingNum' => 'setWaitingNum',
            'runningNum' => 'setRunningNum',
            'finishedNum' => 'setFinishedNum',
            'canceledNum' => 'setCanceledNum',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * waitingNum  **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    * runningNum  **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    * finishedNum  **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    * canceledNum  **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    * totalNum  **参数解释**： 总数。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'waitingNum' => 'getWaitingNum',
            'runningNum' => 'getRunningNum',
            'finishedNum' => 'getFinishedNum',
            'canceledNum' => 'getCanceledNum',
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
        $this->container['waitingNum'] = isset($data['waitingNum']) ? $data['waitingNum'] : null;
        $this->container['runningNum'] = isset($data['runningNum']) ? $data['runningNum'] : null;
        $this->container['finishedNum'] = isset($data['finishedNum']) ? $data['finishedNum'] : null;
        $this->container['canceledNum'] = isset($data['canceledNum']) ? $data['canceledNum'] : null;
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
    * Gets waitingNum
    *  **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getWaitingNum()
    {
        return $this->container['waitingNum'];
    }

    /**
    * Sets waitingNum
    *
    * @param int|null $waitingNum **参数解释**： 等待的表数量。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setWaitingNum($waitingNum)
    {
        $this->container['waitingNum'] = $waitingNum;
        return $this;
    }

    /**
    * Gets runningNum
    *  **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getRunningNum()
    {
        return $this->container['runningNum'];
    }

    /**
    * Sets runningNum
    *
    * @param int|null $runningNum **参数解释**： 运行中的表数量。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRunningNum($runningNum)
    {
        $this->container['runningNum'] = $runningNum;
        return $this;
    }

    /**
    * Gets finishedNum
    *  **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getFinishedNum()
    {
        return $this->container['finishedNum'];
    }

    /**
    * Sets finishedNum
    *
    * @param int|null $finishedNum **参数解释**： 已完成的表数量。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFinishedNum($finishedNum)
    {
        $this->container['finishedNum'] = $finishedNum;
        return $this;
    }

    /**
    * Gets canceledNum
    *  **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getCanceledNum()
    {
        return $this->container['canceledNum'];
    }

    /**
    * Sets canceledNum
    *
    * @param int|null $canceledNum **参数解释**： 取消的表数量。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCanceledNum($canceledNum)
    {
        $this->container['canceledNum'] = $canceledNum;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**： 总数。 **默认取值**： 不涉及。
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
    * @param int|null $totalNum **参数解释**： 总数。 **默认取值**： 不涉及。
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

