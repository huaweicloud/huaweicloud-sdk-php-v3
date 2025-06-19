<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTaskCaseSuccessLineDetailVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskCaseSuccessLineDetailVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  统计时间
    * passRate  成功率
    * taskId  任务id
    * taskName  任务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'int',
            'passRate' => 'float',
            'taskId' => 'string',
            'taskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  统计时间
    * passRate  成功率
    * taskId  任务id
    * taskName  任务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => 'int64',
        'passRate' => 'float',
        'taskId' => null,
        'taskName' => null
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
    * passRate  成功率
    * taskId  任务id
    * taskName  任务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'passRate' => 'pass_rate',
            'taskId' => 'task_id',
            'taskName' => 'task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  统计时间
    * passRate  成功率
    * taskId  任务id
    * taskName  任务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'passRate' => 'setPassRate',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  统计时间
    * passRate  成功率
    * taskId  任务id
    * taskName  任务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'passRate' => 'getPassRate',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName'
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
        $this->container['passRate'] = isset($data['passRate']) ? $data['passRate'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
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
    * @return int|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param int|null $date 统计时间
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets passRate
    *  成功率
    *
    * @return float|null
    */
    public function getPassRate()
    {
        return $this->container['passRate'];
    }

    /**
    * Sets passRate
    *
    * @param float|null $passRate 成功率
    *
    * @return $this
    */
    public function setPassRate($passRate)
    {
        $this->container['passRate'] = $passRate;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id
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
    * @param string|null $taskId 任务id
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
    *  任务名称
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
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
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

