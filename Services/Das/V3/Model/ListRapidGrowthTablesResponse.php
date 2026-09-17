<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRapidGrowthTablesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRapidGrowthTablesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tables  异常增长表信息列表
    * threshold  诊断阈值
    * lastDiagnoseTimestamp  上次诊断时间
    * first2LastTimestamp  最近一次诊断时间
    * second2LastTimestamp  最近第二次诊断时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tables' => '\HuaweiCloud\SDK\Das\V3\Model\RapidGrowthTableInfo[]',
            'threshold' => 'int',
            'lastDiagnoseTimestamp' => 'int',
            'first2LastTimestamp' => 'int',
            'second2LastTimestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tables  异常增长表信息列表
    * threshold  诊断阈值
    * lastDiagnoseTimestamp  上次诊断时间
    * first2LastTimestamp  最近一次诊断时间
    * second2LastTimestamp  最近第二次诊断时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tables' => null,
        'threshold' => 'int64',
        'lastDiagnoseTimestamp' => 'int64',
        'first2LastTimestamp' => 'int64',
        'second2LastTimestamp' => 'int64'
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
    * tables  异常增长表信息列表
    * threshold  诊断阈值
    * lastDiagnoseTimestamp  上次诊断时间
    * first2LastTimestamp  最近一次诊断时间
    * second2LastTimestamp  最近第二次诊断时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tables' => 'tables',
            'threshold' => 'threshold',
            'lastDiagnoseTimestamp' => 'last_diagnose_timestamp',
            'first2LastTimestamp' => 'first2_last_timestamp',
            'second2LastTimestamp' => 'second2_last_timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tables  异常增长表信息列表
    * threshold  诊断阈值
    * lastDiagnoseTimestamp  上次诊断时间
    * first2LastTimestamp  最近一次诊断时间
    * second2LastTimestamp  最近第二次诊断时间
    *
    * @var string[]
    */
    protected static $setters = [
            'tables' => 'setTables',
            'threshold' => 'setThreshold',
            'lastDiagnoseTimestamp' => 'setLastDiagnoseTimestamp',
            'first2LastTimestamp' => 'setFirst2LastTimestamp',
            'second2LastTimestamp' => 'setSecond2LastTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tables  异常增长表信息列表
    * threshold  诊断阈值
    * lastDiagnoseTimestamp  上次诊断时间
    * first2LastTimestamp  最近一次诊断时间
    * second2LastTimestamp  最近第二次诊断时间
    *
    * @var string[]
    */
    protected static $getters = [
            'tables' => 'getTables',
            'threshold' => 'getThreshold',
            'lastDiagnoseTimestamp' => 'getLastDiagnoseTimestamp',
            'first2LastTimestamp' => 'getFirst2LastTimestamp',
            'second2LastTimestamp' => 'getSecond2LastTimestamp'
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
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['lastDiagnoseTimestamp'] = isset($data['lastDiagnoseTimestamp']) ? $data['lastDiagnoseTimestamp'] : null;
        $this->container['first2LastTimestamp'] = isset($data['first2LastTimestamp']) ? $data['first2LastTimestamp'] : null;
        $this->container['second2LastTimestamp'] = isset($data['second2LastTimestamp']) ? $data['second2LastTimestamp'] : null;
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
    * Gets tables
    *  异常增长表信息列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\RapidGrowthTableInfo[]|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\RapidGrowthTableInfo[]|null $tables 异常增长表信息列表
    *
    * @return $this
    */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;
        return $this;
    }

    /**
    * Gets threshold
    *  诊断阈值
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 诊断阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets lastDiagnoseTimestamp
    *  上次诊断时间
    *
    * @return int|null
    */
    public function getLastDiagnoseTimestamp()
    {
        return $this->container['lastDiagnoseTimestamp'];
    }

    /**
    * Sets lastDiagnoseTimestamp
    *
    * @param int|null $lastDiagnoseTimestamp 上次诊断时间
    *
    * @return $this
    */
    public function setLastDiagnoseTimestamp($lastDiagnoseTimestamp)
    {
        $this->container['lastDiagnoseTimestamp'] = $lastDiagnoseTimestamp;
        return $this;
    }

    /**
    * Gets first2LastTimestamp
    *  最近一次诊断时间
    *
    * @return int|null
    */
    public function getFirst2LastTimestamp()
    {
        return $this->container['first2LastTimestamp'];
    }

    /**
    * Sets first2LastTimestamp
    *
    * @param int|null $first2LastTimestamp 最近一次诊断时间
    *
    * @return $this
    */
    public function setFirst2LastTimestamp($first2LastTimestamp)
    {
        $this->container['first2LastTimestamp'] = $first2LastTimestamp;
        return $this;
    }

    /**
    * Gets second2LastTimestamp
    *  最近第二次诊断时间
    *
    * @return int|null
    */
    public function getSecond2LastTimestamp()
    {
        return $this->container['second2LastTimestamp'];
    }

    /**
    * Sets second2LastTimestamp
    *
    * @param int|null $second2LastTimestamp 最近第二次诊断时间
    *
    * @return $this
    */
    public function setSecond2LastTimestamp($second2LastTimestamp)
    {
        $this->container['second2LastTimestamp'] = $second2LastTimestamp;
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

