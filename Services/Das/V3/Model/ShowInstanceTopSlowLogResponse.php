<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceTopSlowLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceTopSlowLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectSlowLog  采集慢SQL开关
    * topExecuteSlowLogs  按执行次数排序的慢SQL列表
    * topAvgQueryTimeSlowLogs  按平均执行时间排序的慢SQL列表
    * topMaxQueryTimeSlowLogs  按最大执行时间排序的慢SQL列表
    * rowsExaminedExceeding  按扫描返回比排序的慢SQL列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectSlowLog' => 'bool',
            'topExecuteSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]',
            'topAvgQueryTimeSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]',
            'topMaxQueryTimeSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]',
            'rowsExaminedExceeding' => '\HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectSlowLog  采集慢SQL开关
    * topExecuteSlowLogs  按执行次数排序的慢SQL列表
    * topAvgQueryTimeSlowLogs  按平均执行时间排序的慢SQL列表
    * topMaxQueryTimeSlowLogs  按最大执行时间排序的慢SQL列表
    * rowsExaminedExceeding  按扫描返回比排序的慢SQL列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectSlowLog' => null,
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
    * collectSlowLog  采集慢SQL开关
    * topExecuteSlowLogs  按执行次数排序的慢SQL列表
    * topAvgQueryTimeSlowLogs  按平均执行时间排序的慢SQL列表
    * topMaxQueryTimeSlowLogs  按最大执行时间排序的慢SQL列表
    * rowsExaminedExceeding  按扫描返回比排序的慢SQL列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectSlowLog' => 'collect_slow_log',
            'topExecuteSlowLogs' => 'top_execute_slow_logs',
            'topAvgQueryTimeSlowLogs' => 'top_avg_query_time_slow_logs',
            'topMaxQueryTimeSlowLogs' => 'top_max_query_time_slow_logs',
            'rowsExaminedExceeding' => 'rows_examined_exceeding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectSlowLog  采集慢SQL开关
    * topExecuteSlowLogs  按执行次数排序的慢SQL列表
    * topAvgQueryTimeSlowLogs  按平均执行时间排序的慢SQL列表
    * topMaxQueryTimeSlowLogs  按最大执行时间排序的慢SQL列表
    * rowsExaminedExceeding  按扫描返回比排序的慢SQL列表
    *
    * @var string[]
    */
    protected static $setters = [
            'collectSlowLog' => 'setCollectSlowLog',
            'topExecuteSlowLogs' => 'setTopExecuteSlowLogs',
            'topAvgQueryTimeSlowLogs' => 'setTopAvgQueryTimeSlowLogs',
            'topMaxQueryTimeSlowLogs' => 'setTopMaxQueryTimeSlowLogs',
            'rowsExaminedExceeding' => 'setRowsExaminedExceeding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectSlowLog  采集慢SQL开关
    * topExecuteSlowLogs  按执行次数排序的慢SQL列表
    * topAvgQueryTimeSlowLogs  按平均执行时间排序的慢SQL列表
    * topMaxQueryTimeSlowLogs  按最大执行时间排序的慢SQL列表
    * rowsExaminedExceeding  按扫描返回比排序的慢SQL列表
    *
    * @var string[]
    */
    protected static $getters = [
            'collectSlowLog' => 'getCollectSlowLog',
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
        $this->container['collectSlowLog'] = isset($data['collectSlowLog']) ? $data['collectSlowLog'] : null;
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
    * Gets collectSlowLog
    *  采集慢SQL开关
    *
    * @return bool|null
    */
    public function getCollectSlowLog()
    {
        return $this->container['collectSlowLog'];
    }

    /**
    * Sets collectSlowLog
    *
    * @param bool|null $collectSlowLog 采集慢SQL开关
    *
    * @return $this
    */
    public function setCollectSlowLog($collectSlowLog)
    {
        $this->container['collectSlowLog'] = $collectSlowLog;
        return $this;
    }

    /**
    * Gets topExecuteSlowLogs
    *  按执行次数排序的慢SQL列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null
    */
    public function getTopExecuteSlowLogs()
    {
        return $this->container['topExecuteSlowLogs'];
    }

    /**
    * Sets topExecuteSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null $topExecuteSlowLogs 按执行次数排序的慢SQL列表
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
    *  按平均执行时间排序的慢SQL列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null
    */
    public function getTopAvgQueryTimeSlowLogs()
    {
        return $this->container['topAvgQueryTimeSlowLogs'];
    }

    /**
    * Sets topAvgQueryTimeSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null $topAvgQueryTimeSlowLogs 按平均执行时间排序的慢SQL列表
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
    *  按最大执行时间排序的慢SQL列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null
    */
    public function getTopMaxQueryTimeSlowLogs()
    {
        return $this->container['topMaxQueryTimeSlowLogs'];
    }

    /**
    * Sets topMaxQueryTimeSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null $topMaxQueryTimeSlowLogs 按最大执行时间排序的慢SQL列表
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
    *  按扫描返回比排序的慢SQL列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null
    */
    public function getRowsExaminedExceeding()
    {
        return $this->container['rowsExaminedExceeding'];
    }

    /**
    * Sets rowsExaminedExceeding
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InsTopSlowLogInfo[]|null $rowsExaminedExceeding 按扫描返回比排序的慢SQL列表
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

