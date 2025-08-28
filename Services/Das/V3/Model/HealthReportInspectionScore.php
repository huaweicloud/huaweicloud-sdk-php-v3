<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportInspectionScore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportInspectionScore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  得分。
    * critical  严重事件。
    * medium  警告事件。
    * light  优化事件。
    * cpuUsage  CPU使用率。
    * memUsage  内存使用率。
    * spaceUsage  空间使用率。
    * connectionRate  连接使用率。
    * iopsUsage  IOPS使用率。
    * threadRunning  活跃会话。
    * slowSqlTotal  慢SQL数量。
    * lostPointsDetailList  扣分详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'double',
            'critical' => 'int',
            'medium' => 'int',
            'light' => 'int',
            'cpuUsage' => 'double',
            'memUsage' => 'double',
            'spaceUsage' => 'double',
            'connectionRate' => 'double',
            'iopsUsage' => 'double',
            'threadRunning' => 'double',
            'slowSqlTotal' => 'int',
            'lostPointsDetailList' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportLostPointsDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  得分。
    * critical  严重事件。
    * medium  警告事件。
    * light  优化事件。
    * cpuUsage  CPU使用率。
    * memUsage  内存使用率。
    * spaceUsage  空间使用率。
    * connectionRate  连接使用率。
    * iopsUsage  IOPS使用率。
    * threadRunning  活跃会话。
    * slowSqlTotal  慢SQL数量。
    * lostPointsDetailList  扣分详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => 'double',
        'critical' => 'int32',
        'medium' => 'int32',
        'light' => 'int32',
        'cpuUsage' => 'double',
        'memUsage' => 'double',
        'spaceUsage' => 'double',
        'connectionRate' => 'double',
        'iopsUsage' => 'double',
        'threadRunning' => 'double',
        'slowSqlTotal' => 'int64',
        'lostPointsDetailList' => null
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
    * score  得分。
    * critical  严重事件。
    * medium  警告事件。
    * light  优化事件。
    * cpuUsage  CPU使用率。
    * memUsage  内存使用率。
    * spaceUsage  空间使用率。
    * connectionRate  连接使用率。
    * iopsUsage  IOPS使用率。
    * threadRunning  活跃会话。
    * slowSqlTotal  慢SQL数量。
    * lostPointsDetailList  扣分详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'critical' => 'critical',
            'medium' => 'medium',
            'light' => 'light',
            'cpuUsage' => 'cpu_usage',
            'memUsage' => 'mem_usage',
            'spaceUsage' => 'space_usage',
            'connectionRate' => 'connection_rate',
            'iopsUsage' => 'iops_usage',
            'threadRunning' => 'thread_running',
            'slowSqlTotal' => 'slow_sql_total',
            'lostPointsDetailList' => 'lost_points_detail_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  得分。
    * critical  严重事件。
    * medium  警告事件。
    * light  优化事件。
    * cpuUsage  CPU使用率。
    * memUsage  内存使用率。
    * spaceUsage  空间使用率。
    * connectionRate  连接使用率。
    * iopsUsage  IOPS使用率。
    * threadRunning  活跃会话。
    * slowSqlTotal  慢SQL数量。
    * lostPointsDetailList  扣分详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'critical' => 'setCritical',
            'medium' => 'setMedium',
            'light' => 'setLight',
            'cpuUsage' => 'setCpuUsage',
            'memUsage' => 'setMemUsage',
            'spaceUsage' => 'setSpaceUsage',
            'connectionRate' => 'setConnectionRate',
            'iopsUsage' => 'setIopsUsage',
            'threadRunning' => 'setThreadRunning',
            'slowSqlTotal' => 'setSlowSqlTotal',
            'lostPointsDetailList' => 'setLostPointsDetailList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  得分。
    * critical  严重事件。
    * medium  警告事件。
    * light  优化事件。
    * cpuUsage  CPU使用率。
    * memUsage  内存使用率。
    * spaceUsage  空间使用率。
    * connectionRate  连接使用率。
    * iopsUsage  IOPS使用率。
    * threadRunning  活跃会话。
    * slowSqlTotal  慢SQL数量。
    * lostPointsDetailList  扣分详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'critical' => 'getCritical',
            'medium' => 'getMedium',
            'light' => 'getLight',
            'cpuUsage' => 'getCpuUsage',
            'memUsage' => 'getMemUsage',
            'spaceUsage' => 'getSpaceUsage',
            'connectionRate' => 'getConnectionRate',
            'iopsUsage' => 'getIopsUsage',
            'threadRunning' => 'getThreadRunning',
            'slowSqlTotal' => 'getSlowSqlTotal',
            'lostPointsDetailList' => 'getLostPointsDetailList'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['critical'] = isset($data['critical']) ? $data['critical'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['light'] = isset($data['light']) ? $data['light'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['memUsage'] = isset($data['memUsage']) ? $data['memUsage'] : null;
        $this->container['spaceUsage'] = isset($data['spaceUsage']) ? $data['spaceUsage'] : null;
        $this->container['connectionRate'] = isset($data['connectionRate']) ? $data['connectionRate'] : null;
        $this->container['iopsUsage'] = isset($data['iopsUsage']) ? $data['iopsUsage'] : null;
        $this->container['threadRunning'] = isset($data['threadRunning']) ? $data['threadRunning'] : null;
        $this->container['slowSqlTotal'] = isset($data['slowSqlTotal']) ? $data['slowSqlTotal'] : null;
        $this->container['lostPointsDetailList'] = isset($data['lostPointsDetailList']) ? $data['lostPointsDetailList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if ($this->container['critical'] === null) {
            $invalidProperties[] = "'critical' can't be null";
        }
        if ($this->container['medium'] === null) {
            $invalidProperties[] = "'medium' can't be null";
        }
        if ($this->container['light'] === null) {
            $invalidProperties[] = "'light' can't be null";
        }
        if ($this->container['cpuUsage'] === null) {
            $invalidProperties[] = "'cpuUsage' can't be null";
        }
        if ($this->container['memUsage'] === null) {
            $invalidProperties[] = "'memUsage' can't be null";
        }
        if ($this->container['spaceUsage'] === null) {
            $invalidProperties[] = "'spaceUsage' can't be null";
        }
        if ($this->container['connectionRate'] === null) {
            $invalidProperties[] = "'connectionRate' can't be null";
        }
        if ($this->container['iopsUsage'] === null) {
            $invalidProperties[] = "'iopsUsage' can't be null";
        }
        if ($this->container['threadRunning'] === null) {
            $invalidProperties[] = "'threadRunning' can't be null";
        }
        if ($this->container['slowSqlTotal'] === null) {
            $invalidProperties[] = "'slowSqlTotal' can't be null";
        }
        if ($this->container['lostPointsDetailList'] === null) {
            $invalidProperties[] = "'lostPointsDetailList' can't be null";
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
    * Gets score
    *  得分。
    *
    * @return double
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param double $score 得分。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets critical
    *  严重事件。
    *
    * @return int
    */
    public function getCritical()
    {
        return $this->container['critical'];
    }

    /**
    * Sets critical
    *
    * @param int $critical 严重事件。
    *
    * @return $this
    */
    public function setCritical($critical)
    {
        $this->container['critical'] = $critical;
        return $this;
    }

    /**
    * Gets medium
    *  警告事件。
    *
    * @return int
    */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
    * Sets medium
    *
    * @param int $medium 警告事件。
    *
    * @return $this
    */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;
        return $this;
    }

    /**
    * Gets light
    *  优化事件。
    *
    * @return int
    */
    public function getLight()
    {
        return $this->container['light'];
    }

    /**
    * Sets light
    *
    * @param int $light 优化事件。
    *
    * @return $this
    */
    public function setLight($light)
    {
        $this->container['light'] = $light;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  CPU使用率。
    *
    * @return double
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param double $cpuUsage CPU使用率。
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets memUsage
    *  内存使用率。
    *
    * @return double
    */
    public function getMemUsage()
    {
        return $this->container['memUsage'];
    }

    /**
    * Sets memUsage
    *
    * @param double $memUsage 内存使用率。
    *
    * @return $this
    */
    public function setMemUsage($memUsage)
    {
        $this->container['memUsage'] = $memUsage;
        return $this;
    }

    /**
    * Gets spaceUsage
    *  空间使用率。
    *
    * @return double
    */
    public function getSpaceUsage()
    {
        return $this->container['spaceUsage'];
    }

    /**
    * Sets spaceUsage
    *
    * @param double $spaceUsage 空间使用率。
    *
    * @return $this
    */
    public function setSpaceUsage($spaceUsage)
    {
        $this->container['spaceUsage'] = $spaceUsage;
        return $this;
    }

    /**
    * Gets connectionRate
    *  连接使用率。
    *
    * @return double
    */
    public function getConnectionRate()
    {
        return $this->container['connectionRate'];
    }

    /**
    * Sets connectionRate
    *
    * @param double $connectionRate 连接使用率。
    *
    * @return $this
    */
    public function setConnectionRate($connectionRate)
    {
        $this->container['connectionRate'] = $connectionRate;
        return $this;
    }

    /**
    * Gets iopsUsage
    *  IOPS使用率。
    *
    * @return double
    */
    public function getIopsUsage()
    {
        return $this->container['iopsUsage'];
    }

    /**
    * Sets iopsUsage
    *
    * @param double $iopsUsage IOPS使用率。
    *
    * @return $this
    */
    public function setIopsUsage($iopsUsage)
    {
        $this->container['iopsUsage'] = $iopsUsage;
        return $this;
    }

    /**
    * Gets threadRunning
    *  活跃会话。
    *
    * @return double
    */
    public function getThreadRunning()
    {
        return $this->container['threadRunning'];
    }

    /**
    * Sets threadRunning
    *
    * @param double $threadRunning 活跃会话。
    *
    * @return $this
    */
    public function setThreadRunning($threadRunning)
    {
        $this->container['threadRunning'] = $threadRunning;
        return $this;
    }

    /**
    * Gets slowSqlTotal
    *  慢SQL数量。
    *
    * @return int
    */
    public function getSlowSqlTotal()
    {
        return $this->container['slowSqlTotal'];
    }

    /**
    * Sets slowSqlTotal
    *
    * @param int $slowSqlTotal 慢SQL数量。
    *
    * @return $this
    */
    public function setSlowSqlTotal($slowSqlTotal)
    {
        $this->container['slowSqlTotal'] = $slowSqlTotal;
        return $this;
    }

    /**
    * Gets lostPointsDetailList
    *  扣分详情。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportLostPointsDetail[]
    */
    public function getLostPointsDetailList()
    {
        return $this->container['lostPointsDetailList'];
    }

    /**
    * Sets lostPointsDetailList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportLostPointsDetail[] $lostPointsDetailList 扣分详情。
    *
    * @return $this
    */
    public function setLostPointsDetailList($lostPointsDetailList)
    {
        $this->container['lostPointsDetailList'] = $lostPointsDetailList;
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

