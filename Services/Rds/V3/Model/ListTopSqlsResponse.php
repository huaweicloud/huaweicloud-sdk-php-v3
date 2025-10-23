<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTopSqlsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTopSqlsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  总数。
    * list  TOP SQL 信息列表。
    * avgCpuTimeTopValues  平均CPU开销表TOP SQL列表。
    * avgDurationTimeTopValues  平均执行耗时TOP SQL列表。
    * avgRowsTopValues  平均返回行TOP SQL列表。
    * avgLogicalTopValues  平均逻辑读TOP SQL列表。
    * totalCpuTimeTopValues  总CPU开销表TOP SQL列表。
    * totalDurationTimeTopValues  总执行耗时TOP SQL列表。
    * totalRowsTopValues  总返回行TOP SQL列表。
    * totalLogicalReadsTopValues  总逻辑读TOP SQL列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'list' => '\HuaweiCloud\SDK\Rds\V3\Model\QueryTopSqlsResult[]',
            'avgCpuTimeTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]',
            'avgDurationTimeTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]',
            'avgRowsTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsRowResult[]',
            'avgLogicalTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsLogicalReadResult[]',
            'totalCpuTimeTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]',
            'totalDurationTimeTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]',
            'totalRowsTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsRowResult[]',
            'totalLogicalReadsTopValues' => '\HuaweiCloud\SDK\Rds\V3\Model\TopSqlsLogicalReadResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  总数。
    * list  TOP SQL 信息列表。
    * avgCpuTimeTopValues  平均CPU开销表TOP SQL列表。
    * avgDurationTimeTopValues  平均执行耗时TOP SQL列表。
    * avgRowsTopValues  平均返回行TOP SQL列表。
    * avgLogicalTopValues  平均逻辑读TOP SQL列表。
    * totalCpuTimeTopValues  总CPU开销表TOP SQL列表。
    * totalDurationTimeTopValues  总执行耗时TOP SQL列表。
    * totalRowsTopValues  总返回行TOP SQL列表。
    * totalLogicalReadsTopValues  总逻辑读TOP SQL列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'list' => null,
        'avgCpuTimeTopValues' => null,
        'avgDurationTimeTopValues' => null,
        'avgRowsTopValues' => null,
        'avgLogicalTopValues' => null,
        'totalCpuTimeTopValues' => null,
        'totalDurationTimeTopValues' => null,
        'totalRowsTopValues' => null,
        'totalLogicalReadsTopValues' => null
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
    * totalCount  总数。
    * list  TOP SQL 信息列表。
    * avgCpuTimeTopValues  平均CPU开销表TOP SQL列表。
    * avgDurationTimeTopValues  平均执行耗时TOP SQL列表。
    * avgRowsTopValues  平均返回行TOP SQL列表。
    * avgLogicalTopValues  平均逻辑读TOP SQL列表。
    * totalCpuTimeTopValues  总CPU开销表TOP SQL列表。
    * totalDurationTimeTopValues  总执行耗时TOP SQL列表。
    * totalRowsTopValues  总返回行TOP SQL列表。
    * totalLogicalReadsTopValues  总逻辑读TOP SQL列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'list' => 'list',
            'avgCpuTimeTopValues' => 'avg_cpu_time_top_values',
            'avgDurationTimeTopValues' => 'avg_duration_time_top_values',
            'avgRowsTopValues' => 'avg_rows_top_values',
            'avgLogicalTopValues' => 'avg_logical_top_values',
            'totalCpuTimeTopValues' => 'total_cpu_time_top_values',
            'totalDurationTimeTopValues' => 'total_duration_time_top_values',
            'totalRowsTopValues' => 'total_rows_top_values',
            'totalLogicalReadsTopValues' => 'total_logical_reads_top_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  总数。
    * list  TOP SQL 信息列表。
    * avgCpuTimeTopValues  平均CPU开销表TOP SQL列表。
    * avgDurationTimeTopValues  平均执行耗时TOP SQL列表。
    * avgRowsTopValues  平均返回行TOP SQL列表。
    * avgLogicalTopValues  平均逻辑读TOP SQL列表。
    * totalCpuTimeTopValues  总CPU开销表TOP SQL列表。
    * totalDurationTimeTopValues  总执行耗时TOP SQL列表。
    * totalRowsTopValues  总返回行TOP SQL列表。
    * totalLogicalReadsTopValues  总逻辑读TOP SQL列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'list' => 'setList',
            'avgCpuTimeTopValues' => 'setAvgCpuTimeTopValues',
            'avgDurationTimeTopValues' => 'setAvgDurationTimeTopValues',
            'avgRowsTopValues' => 'setAvgRowsTopValues',
            'avgLogicalTopValues' => 'setAvgLogicalTopValues',
            'totalCpuTimeTopValues' => 'setTotalCpuTimeTopValues',
            'totalDurationTimeTopValues' => 'setTotalDurationTimeTopValues',
            'totalRowsTopValues' => 'setTotalRowsTopValues',
            'totalLogicalReadsTopValues' => 'setTotalLogicalReadsTopValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  总数。
    * list  TOP SQL 信息列表。
    * avgCpuTimeTopValues  平均CPU开销表TOP SQL列表。
    * avgDurationTimeTopValues  平均执行耗时TOP SQL列表。
    * avgRowsTopValues  平均返回行TOP SQL列表。
    * avgLogicalTopValues  平均逻辑读TOP SQL列表。
    * totalCpuTimeTopValues  总CPU开销表TOP SQL列表。
    * totalDurationTimeTopValues  总执行耗时TOP SQL列表。
    * totalRowsTopValues  总返回行TOP SQL列表。
    * totalLogicalReadsTopValues  总逻辑读TOP SQL列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'list' => 'getList',
            'avgCpuTimeTopValues' => 'getAvgCpuTimeTopValues',
            'avgDurationTimeTopValues' => 'getAvgDurationTimeTopValues',
            'avgRowsTopValues' => 'getAvgRowsTopValues',
            'avgLogicalTopValues' => 'getAvgLogicalTopValues',
            'totalCpuTimeTopValues' => 'getTotalCpuTimeTopValues',
            'totalDurationTimeTopValues' => 'getTotalDurationTimeTopValues',
            'totalRowsTopValues' => 'getTotalRowsTopValues',
            'totalLogicalReadsTopValues' => 'getTotalLogicalReadsTopValues'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['avgCpuTimeTopValues'] = isset($data['avgCpuTimeTopValues']) ? $data['avgCpuTimeTopValues'] : null;
        $this->container['avgDurationTimeTopValues'] = isset($data['avgDurationTimeTopValues']) ? $data['avgDurationTimeTopValues'] : null;
        $this->container['avgRowsTopValues'] = isset($data['avgRowsTopValues']) ? $data['avgRowsTopValues'] : null;
        $this->container['avgLogicalTopValues'] = isset($data['avgLogicalTopValues']) ? $data['avgLogicalTopValues'] : null;
        $this->container['totalCpuTimeTopValues'] = isset($data['totalCpuTimeTopValues']) ? $data['totalCpuTimeTopValues'] : null;
        $this->container['totalDurationTimeTopValues'] = isset($data['totalDurationTimeTopValues']) ? $data['totalDurationTimeTopValues'] : null;
        $this->container['totalRowsTopValues'] = isset($data['totalRowsTopValues']) ? $data['totalRowsTopValues'] : null;
        $this->container['totalLogicalReadsTopValues'] = isset($data['totalLogicalReadsTopValues']) ? $data['totalLogicalReadsTopValues'] : null;
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
    * Gets totalCount
    *  总数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets list
    *  TOP SQL 信息列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\QueryTopSqlsResult[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\QueryTopSqlsResult[]|null $list TOP SQL 信息列表。
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets avgCpuTimeTopValues
    *  平均CPU开销表TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null
    */
    public function getAvgCpuTimeTopValues()
    {
        return $this->container['avgCpuTimeTopValues'];
    }

    /**
    * Sets avgCpuTimeTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null $avgCpuTimeTopValues 平均CPU开销表TOP SQL列表。
    *
    * @return $this
    */
    public function setAvgCpuTimeTopValues($avgCpuTimeTopValues)
    {
        $this->container['avgCpuTimeTopValues'] = $avgCpuTimeTopValues;
        return $this;
    }

    /**
    * Gets avgDurationTimeTopValues
    *  平均执行耗时TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null
    */
    public function getAvgDurationTimeTopValues()
    {
        return $this->container['avgDurationTimeTopValues'];
    }

    /**
    * Sets avgDurationTimeTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null $avgDurationTimeTopValues 平均执行耗时TOP SQL列表。
    *
    * @return $this
    */
    public function setAvgDurationTimeTopValues($avgDurationTimeTopValues)
    {
        $this->container['avgDurationTimeTopValues'] = $avgDurationTimeTopValues;
        return $this;
    }

    /**
    * Gets avgRowsTopValues
    *  平均返回行TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsRowResult[]|null
    */
    public function getAvgRowsTopValues()
    {
        return $this->container['avgRowsTopValues'];
    }

    /**
    * Sets avgRowsTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsRowResult[]|null $avgRowsTopValues 平均返回行TOP SQL列表。
    *
    * @return $this
    */
    public function setAvgRowsTopValues($avgRowsTopValues)
    {
        $this->container['avgRowsTopValues'] = $avgRowsTopValues;
        return $this;
    }

    /**
    * Gets avgLogicalTopValues
    *  平均逻辑读TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsLogicalReadResult[]|null
    */
    public function getAvgLogicalTopValues()
    {
        return $this->container['avgLogicalTopValues'];
    }

    /**
    * Sets avgLogicalTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsLogicalReadResult[]|null $avgLogicalTopValues 平均逻辑读TOP SQL列表。
    *
    * @return $this
    */
    public function setAvgLogicalTopValues($avgLogicalTopValues)
    {
        $this->container['avgLogicalTopValues'] = $avgLogicalTopValues;
        return $this;
    }

    /**
    * Gets totalCpuTimeTopValues
    *  总CPU开销表TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null
    */
    public function getTotalCpuTimeTopValues()
    {
        return $this->container['totalCpuTimeTopValues'];
    }

    /**
    * Sets totalCpuTimeTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null $totalCpuTimeTopValues 总CPU开销表TOP SQL列表。
    *
    * @return $this
    */
    public function setTotalCpuTimeTopValues($totalCpuTimeTopValues)
    {
        $this->container['totalCpuTimeTopValues'] = $totalCpuTimeTopValues;
        return $this;
    }

    /**
    * Gets totalDurationTimeTopValues
    *  总执行耗时TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null
    */
    public function getTotalDurationTimeTopValues()
    {
        return $this->container['totalDurationTimeTopValues'];
    }

    /**
    * Sets totalDurationTimeTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsTimeResult[]|null $totalDurationTimeTopValues 总执行耗时TOP SQL列表。
    *
    * @return $this
    */
    public function setTotalDurationTimeTopValues($totalDurationTimeTopValues)
    {
        $this->container['totalDurationTimeTopValues'] = $totalDurationTimeTopValues;
        return $this;
    }

    /**
    * Gets totalRowsTopValues
    *  总返回行TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsRowResult[]|null
    */
    public function getTotalRowsTopValues()
    {
        return $this->container['totalRowsTopValues'];
    }

    /**
    * Sets totalRowsTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsRowResult[]|null $totalRowsTopValues 总返回行TOP SQL列表。
    *
    * @return $this
    */
    public function setTotalRowsTopValues($totalRowsTopValues)
    {
        $this->container['totalRowsTopValues'] = $totalRowsTopValues;
        return $this;
    }

    /**
    * Gets totalLogicalReadsTopValues
    *  总逻辑读TOP SQL列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsLogicalReadResult[]|null
    */
    public function getTotalLogicalReadsTopValues()
    {
        return $this->container['totalLogicalReadsTopValues'];
    }

    /**
    * Sets totalLogicalReadsTopValues
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopSqlsLogicalReadResult[]|null $totalLogicalReadsTopValues 总逻辑读TOP SQL列表。
    *
    * @return $this
    */
    public function setTotalLogicalReadsTopValues($totalLogicalReadsTopValues)
    {
        $this->container['totalLogicalReadsTopValues'] = $totalLogicalReadsTopValues;
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

