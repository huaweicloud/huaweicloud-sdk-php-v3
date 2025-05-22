<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Chart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Chart';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  统计时间
    * finishedNum  完成story工单
    * iterationId  迭代id
    * projectNumId  项目id
    * remainingNum  未完成story数
    * total  总story数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'string',
            'finishedNum' => 'int',
            'iterationId' => 'int',
            'projectNumId' => 'int',
            'remainingNum' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  统计时间
    * finishedNum  完成story工单
    * iterationId  迭代id
    * projectNumId  项目id
    * remainingNum  未完成story数
    * total  总story数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => null,
        'finishedNum' => 'int32',
        'iterationId' => 'int32',
        'projectNumId' => 'int32',
        'remainingNum' => 'int32',
        'total' => 'int32'
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
    * date  统计时间
    * finishedNum  完成story工单
    * iterationId  迭代id
    * projectNumId  项目id
    * remainingNum  未完成story数
    * total  总story数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'finishedNum' => 'finished_num',
            'iterationId' => 'iteration_id',
            'projectNumId' => 'project_num_id',
            'remainingNum' => 'remaining_num',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  统计时间
    * finishedNum  完成story工单
    * iterationId  迭代id
    * projectNumId  项目id
    * remainingNum  未完成story数
    * total  总story数
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'finishedNum' => 'setFinishedNum',
            'iterationId' => 'setIterationId',
            'projectNumId' => 'setProjectNumId',
            'remainingNum' => 'setRemainingNum',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  统计时间
    * finishedNum  完成story工单
    * iterationId  迭代id
    * projectNumId  项目id
    * remainingNum  未完成story数
    * total  总story数
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'finishedNum' => 'getFinishedNum',
            'iterationId' => 'getIterationId',
            'projectNumId' => 'getProjectNumId',
            'remainingNum' => 'getRemainingNum',
            'total' => 'getTotal'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['finishedNum'] = isset($data['finishedNum']) ? $data['finishedNum'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['projectNumId'] = isset($data['projectNumId']) ? $data['projectNumId'] : null;
        $this->container['remainingNum'] = isset($data['remainingNum']) ? $data['remainingNum'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets date
    *  统计时间
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 统计时间
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets finishedNum
    *  完成story工单
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
    * @param int|null $finishedNum 完成story工单
    *
    * @return $this
    */
    public function setFinishedNum($finishedNum)
    {
        $this->container['finishedNum'] = $finishedNum;
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
    * Gets projectNumId
    *  项目id
    *
    * @return int|null
    */
    public function getProjectNumId()
    {
        return $this->container['projectNumId'];
    }

    /**
    * Sets projectNumId
    *
    * @param int|null $projectNumId 项目id
    *
    * @return $this
    */
    public function setProjectNumId($projectNumId)
    {
        $this->container['projectNumId'] = $projectNumId;
        return $this;
    }

    /**
    * Gets remainingNum
    *  未完成story数
    *
    * @return int|null
    */
    public function getRemainingNum()
    {
        return $this->container['remainingNum'];
    }

    /**
    * Sets remainingNum
    *
    * @param int|null $remainingNum 未完成story数
    *
    * @return $this
    */
    public function setRemainingNum($remainingNum)
    {
        $this->container['remainingNum'] = $remainingNum;
        return $this;
    }

    /**
    * Gets total
    *  总story数
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
    * @param int|null $total 总story数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

