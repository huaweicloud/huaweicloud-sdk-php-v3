<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceTopSlowLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceTopSlowLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topExecuteSlowLogs  执行次数列表
    * topAvgQueryTimeSlowLogs  平均执行时间列表
    * topMaxQueryTimeSlowLogs  最大执行时间列表
    * rowsExaminedExceeding  扫描返回比列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topExecuteSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]',
            'topAvgQueryTimeSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]',
            'topMaxQueryTimeSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]',
            'rowsExaminedExceeding' => '\HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogRowsExaminedExceeding[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topExecuteSlowLogs  执行次数列表
    * topAvgQueryTimeSlowLogs  平均执行时间列表
    * topMaxQueryTimeSlowLogs  最大执行时间列表
    * rowsExaminedExceeding  扫描返回比列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topExecuteSlowLogs' => null,
        'topAvgQueryTimeSlowLogs' => null,
        'topMaxQueryTimeSlowLogs' => null,
        'rowsExaminedExceeding' => null
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
    * topExecuteSlowLogs  执行次数列表
    * topAvgQueryTimeSlowLogs  平均执行时间列表
    * topMaxQueryTimeSlowLogs  最大执行时间列表
    * rowsExaminedExceeding  扫描返回比列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topExecuteSlowLogs' => 'top_execute_slow_logs',
            'topAvgQueryTimeSlowLogs' => 'top_avg_query_time_slow_logs',
            'topMaxQueryTimeSlowLogs' => 'top_max_query_time_slow_logs',
            'rowsExaminedExceeding' => 'rows_examined_exceeding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topExecuteSlowLogs  执行次数列表
    * topAvgQueryTimeSlowLogs  平均执行时间列表
    * topMaxQueryTimeSlowLogs  最大执行时间列表
    * rowsExaminedExceeding  扫描返回比列表
    *
    * @var string[]
    */
    protected static $setters = [
            'topExecuteSlowLogs' => 'setTopExecuteSlowLogs',
            'topAvgQueryTimeSlowLogs' => 'setTopAvgQueryTimeSlowLogs',
            'topMaxQueryTimeSlowLogs' => 'setTopMaxQueryTimeSlowLogs',
            'rowsExaminedExceeding' => 'setRowsExaminedExceeding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topExecuteSlowLogs  执行次数列表
    * topAvgQueryTimeSlowLogs  平均执行时间列表
    * topMaxQueryTimeSlowLogs  最大执行时间列表
    * rowsExaminedExceeding  扫描返回比列表
    *
    * @var string[]
    */
    protected static $getters = [
            'topExecuteSlowLogs' => 'getTopExecuteSlowLogs',
            'topAvgQueryTimeSlowLogs' => 'getTopAvgQueryTimeSlowLogs',
            'topMaxQueryTimeSlowLogs' => 'getTopMaxQueryTimeSlowLogs',
            'rowsExaminedExceeding' => 'getRowsExaminedExceeding'
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
        $this->container['topExecuteSlowLogs'] = isset($data['topExecuteSlowLogs']) ? $data['topExecuteSlowLogs'] : null;
        $this->container['topAvgQueryTimeSlowLogs'] = isset($data['topAvgQueryTimeSlowLogs']) ? $data['topAvgQueryTimeSlowLogs'] : null;
        $this->container['topMaxQueryTimeSlowLogs'] = isset($data['topMaxQueryTimeSlowLogs']) ? $data['topMaxQueryTimeSlowLogs'] : null;
        $this->container['rowsExaminedExceeding'] = isset($data['rowsExaminedExceeding']) ? $data['rowsExaminedExceeding'] : null;
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
    * Gets topExecuteSlowLogs
    *  执行次数列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]|null
    */
    public function getTopExecuteSlowLogs()
    {
        return $this->container['topExecuteSlowLogs'];
    }

    /**
    * Sets topExecuteSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]|null $topExecuteSlowLogs 执行次数列表
    *
    * @return $this
    */
    public function setTopExecuteSlowLogs($topExecuteSlowLogs)
    {
        $this->container['topExecuteSlowLogs'] = $topExecuteSlowLogs;
        return $this;
    }

    /**
    * Gets topAvgQueryTimeSlowLogs
    *  平均执行时间列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]|null
    */
    public function getTopAvgQueryTimeSlowLogs()
    {
        return $this->container['topAvgQueryTimeSlowLogs'];
    }

    /**
    * Sets topAvgQueryTimeSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]|null $topAvgQueryTimeSlowLogs 平均执行时间列表
    *
    * @return $this
    */
    public function setTopAvgQueryTimeSlowLogs($topAvgQueryTimeSlowLogs)
    {
        $this->container['topAvgQueryTimeSlowLogs'] = $topAvgQueryTimeSlowLogs;
        return $this;
    }

    /**
    * Gets topMaxQueryTimeSlowLogs
    *  最大执行时间列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]|null
    */
    public function getTopMaxQueryTimeSlowLogs()
    {
        return $this->container['topMaxQueryTimeSlowLogs'];
    }

    /**
    * Sets topMaxQueryTimeSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogTopExecuteSlowLogs[]|null $topMaxQueryTimeSlowLogs 最大执行时间列表
    *
    * @return $this
    */
    public function setTopMaxQueryTimeSlowLogs($topMaxQueryTimeSlowLogs)
    {
        $this->container['topMaxQueryTimeSlowLogs'] = $topMaxQueryTimeSlowLogs;
        return $this;
    }

    /**
    * Gets rowsExaminedExceeding
    *  扫描返回比列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogRowsExaminedExceeding[]|null
    */
    public function getRowsExaminedExceeding()
    {
        return $this->container['rowsExaminedExceeding'];
    }

    /**
    * Sets rowsExaminedExceeding
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TopInstanceSlowLogRowsExaminedExceeding[]|null $rowsExaminedExceeding 扫描返回比列表
    *
    * @return $this
    */
    public function setRowsExaminedExceeding($rowsExaminedExceeding)
    {
        $this->container['rowsExaminedExceeding'] = $rowsExaminedExceeding;
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

