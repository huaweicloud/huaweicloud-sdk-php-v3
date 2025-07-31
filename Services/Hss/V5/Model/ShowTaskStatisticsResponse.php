<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  累计执行的任务总数
    * runningNum  扫描中的任务数
    * lastTaskStartTime  最近一次扫描任务的创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'runningNum' => 'int',
            'lastTaskStartTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  累计执行的任务总数
    * runningNum  扫描中的任务数
    * lastTaskStartTime  最近一次扫描任务的创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'runningNum' => 'int32',
        'lastTaskStartTime' => 'int64'
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
    * totalNum  累计执行的任务总数
    * runningNum  扫描中的任务数
    * lastTaskStartTime  最近一次扫描任务的创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'runningNum' => 'running_num',
            'lastTaskStartTime' => 'last_task_start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  累计执行的任务总数
    * runningNum  扫描中的任务数
    * lastTaskStartTime  最近一次扫描任务的创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'runningNum' => 'setRunningNum',
            'lastTaskStartTime' => 'setLastTaskStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  累计执行的任务总数
    * runningNum  扫描中的任务数
    * lastTaskStartTime  最近一次扫描任务的创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'runningNum' => 'getRunningNum',
            'lastTaskStartTime' => 'getLastTaskStartTime'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['runningNum'] = isset($data['runningNum']) ? $data['runningNum'] : null;
        $this->container['lastTaskStartTime'] = isset($data['lastTaskStartTime']) ? $data['lastTaskStartTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runningNum']) && ($this->container['runningNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'runningNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['runningNum']) && ($this->container['runningNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'runningNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastTaskStartTime']) && ($this->container['lastTaskStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastTaskStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastTaskStartTime']) && ($this->container['lastTaskStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastTaskStartTime', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  累计执行的任务总数
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
    * @param int|null $totalNum 累计执行的任务总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets runningNum
    *  扫描中的任务数
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
    * @param int|null $runningNum 扫描中的任务数
    *
    * @return $this
    */
    public function setRunningNum($runningNum)
    {
        $this->container['runningNum'] = $runningNum;
        return $this;
    }

    /**
    * Gets lastTaskStartTime
    *  最近一次扫描任务的创建时间
    *
    * @return int|null
    */
    public function getLastTaskStartTime()
    {
        return $this->container['lastTaskStartTime'];
    }

    /**
    * Sets lastTaskStartTime
    *
    * @param int|null $lastTaskStartTime 最近一次扫描任务的创建时间
    *
    * @return $this
    */
    public function setLastTaskStartTime($lastTaskStartTime)
    {
        $this->container['lastTaskStartTime'] = $lastTaskStartTime;
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

