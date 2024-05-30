<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * atomicIndex  atomicIndex
    * derivativeIndex  derivativeIndex
    * compoundMetric  compoundMetric
    * bizIndex  bizIndex
    * dimension  dimension
    * conditionGroup  conditionGroup
    * timeCondition  timeCondition
    * commonCondition  commonCondition
    * dimensionLogicTable  dimensionLogicTable
    * factLogicTable  factLogicTable
    * aggregationLogicTable  aggregationLogicTable
    * dataStandard  dataStandard
    * tableModel  tableModel
    * lookupTable  lookupTable
    * pendingReview  待我审核。
    * myApplications  我的申请。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'atomicIndex' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'derivativeIndex' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'compoundMetric' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'bizIndex' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'dimension' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'conditionGroup' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'timeCondition' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'commonCondition' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'dimensionLogicTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'factLogicTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'aggregationLogicTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'dataStandard' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'tableModel' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'lookupTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema',
            'pendingReview' => 'int',
            'myApplications' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * atomicIndex  atomicIndex
    * derivativeIndex  derivativeIndex
    * compoundMetric  compoundMetric
    * bizIndex  bizIndex
    * dimension  dimension
    * conditionGroup  conditionGroup
    * timeCondition  timeCondition
    * commonCondition  commonCondition
    * dimensionLogicTable  dimensionLogicTable
    * factLogicTable  factLogicTable
    * aggregationLogicTable  aggregationLogicTable
    * dataStandard  dataStandard
    * tableModel  tableModel
    * lookupTable  lookupTable
    * pendingReview  待我审核。
    * myApplications  我的申请。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'atomicIndex' => null,
        'derivativeIndex' => null,
        'compoundMetric' => null,
        'bizIndex' => null,
        'dimension' => null,
        'conditionGroup' => null,
        'timeCondition' => null,
        'commonCondition' => null,
        'dimensionLogicTable' => null,
        'factLogicTable' => null,
        'aggregationLogicTable' => null,
        'dataStandard' => null,
        'tableModel' => null,
        'lookupTable' => null,
        'pendingReview' => null,
        'myApplications' => null
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
    * atomicIndex  atomicIndex
    * derivativeIndex  derivativeIndex
    * compoundMetric  compoundMetric
    * bizIndex  bizIndex
    * dimension  dimension
    * conditionGroup  conditionGroup
    * timeCondition  timeCondition
    * commonCondition  commonCondition
    * dimensionLogicTable  dimensionLogicTable
    * factLogicTable  factLogicTable
    * aggregationLogicTable  aggregationLogicTable
    * dataStandard  dataStandard
    * tableModel  tableModel
    * lookupTable  lookupTable
    * pendingReview  待我审核。
    * myApplications  我的申请。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'atomicIndex' => 'atomic_index',
            'derivativeIndex' => 'derivative_index',
            'compoundMetric' => 'compound_metric',
            'bizIndex' => 'biz_index',
            'dimension' => 'dimension',
            'conditionGroup' => 'condition_group',
            'timeCondition' => 'time_condition',
            'commonCondition' => 'common_condition',
            'dimensionLogicTable' => 'dimension_logic_table',
            'factLogicTable' => 'fact_logic_table',
            'aggregationLogicTable' => 'aggregation_logic_table',
            'dataStandard' => 'data_standard',
            'tableModel' => 'table_model',
            'lookupTable' => 'lookup_table',
            'pendingReview' => 'pending_review',
            'myApplications' => 'my_applications'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * atomicIndex  atomicIndex
    * derivativeIndex  derivativeIndex
    * compoundMetric  compoundMetric
    * bizIndex  bizIndex
    * dimension  dimension
    * conditionGroup  conditionGroup
    * timeCondition  timeCondition
    * commonCondition  commonCondition
    * dimensionLogicTable  dimensionLogicTable
    * factLogicTable  factLogicTable
    * aggregationLogicTable  aggregationLogicTable
    * dataStandard  dataStandard
    * tableModel  tableModel
    * lookupTable  lookupTable
    * pendingReview  待我审核。
    * myApplications  我的申请。
    *
    * @var string[]
    */
    protected static $setters = [
            'atomicIndex' => 'setAtomicIndex',
            'derivativeIndex' => 'setDerivativeIndex',
            'compoundMetric' => 'setCompoundMetric',
            'bizIndex' => 'setBizIndex',
            'dimension' => 'setDimension',
            'conditionGroup' => 'setConditionGroup',
            'timeCondition' => 'setTimeCondition',
            'commonCondition' => 'setCommonCondition',
            'dimensionLogicTable' => 'setDimensionLogicTable',
            'factLogicTable' => 'setFactLogicTable',
            'aggregationLogicTable' => 'setAggregationLogicTable',
            'dataStandard' => 'setDataStandard',
            'tableModel' => 'setTableModel',
            'lookupTable' => 'setLookupTable',
            'pendingReview' => 'setPendingReview',
            'myApplications' => 'setMyApplications'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * atomicIndex  atomicIndex
    * derivativeIndex  derivativeIndex
    * compoundMetric  compoundMetric
    * bizIndex  bizIndex
    * dimension  dimension
    * conditionGroup  conditionGroup
    * timeCondition  timeCondition
    * commonCondition  commonCondition
    * dimensionLogicTable  dimensionLogicTable
    * factLogicTable  factLogicTable
    * aggregationLogicTable  aggregationLogicTable
    * dataStandard  dataStandard
    * tableModel  tableModel
    * lookupTable  lookupTable
    * pendingReview  待我审核。
    * myApplications  我的申请。
    *
    * @var string[]
    */
    protected static $getters = [
            'atomicIndex' => 'getAtomicIndex',
            'derivativeIndex' => 'getDerivativeIndex',
            'compoundMetric' => 'getCompoundMetric',
            'bizIndex' => 'getBizIndex',
            'dimension' => 'getDimension',
            'conditionGroup' => 'getConditionGroup',
            'timeCondition' => 'getTimeCondition',
            'commonCondition' => 'getCommonCondition',
            'dimensionLogicTable' => 'getDimensionLogicTable',
            'factLogicTable' => 'getFactLogicTable',
            'aggregationLogicTable' => 'getAggregationLogicTable',
            'dataStandard' => 'getDataStandard',
            'tableModel' => 'getTableModel',
            'lookupTable' => 'getLookupTable',
            'pendingReview' => 'getPendingReview',
            'myApplications' => 'getMyApplications'
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
        $this->container['atomicIndex'] = isset($data['atomicIndex']) ? $data['atomicIndex'] : null;
        $this->container['derivativeIndex'] = isset($data['derivativeIndex']) ? $data['derivativeIndex'] : null;
        $this->container['compoundMetric'] = isset($data['compoundMetric']) ? $data['compoundMetric'] : null;
        $this->container['bizIndex'] = isset($data['bizIndex']) ? $data['bizIndex'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['conditionGroup'] = isset($data['conditionGroup']) ? $data['conditionGroup'] : null;
        $this->container['timeCondition'] = isset($data['timeCondition']) ? $data['timeCondition'] : null;
        $this->container['commonCondition'] = isset($data['commonCondition']) ? $data['commonCondition'] : null;
        $this->container['dimensionLogicTable'] = isset($data['dimensionLogicTable']) ? $data['dimensionLogicTable'] : null;
        $this->container['factLogicTable'] = isset($data['factLogicTable']) ? $data['factLogicTable'] : null;
        $this->container['aggregationLogicTable'] = isset($data['aggregationLogicTable']) ? $data['aggregationLogicTable'] : null;
        $this->container['dataStandard'] = isset($data['dataStandard']) ? $data['dataStandard'] : null;
        $this->container['tableModel'] = isset($data['tableModel']) ? $data['tableModel'] : null;
        $this->container['lookupTable'] = isset($data['lookupTable']) ? $data['lookupTable'] : null;
        $this->container['pendingReview'] = isset($data['pendingReview']) ? $data['pendingReview'] : null;
        $this->container['myApplications'] = isset($data['myApplications']) ? $data['myApplications'] : null;
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
    * Gets atomicIndex
    *  atomicIndex
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getAtomicIndex()
    {
        return $this->container['atomicIndex'];
    }

    /**
    * Sets atomicIndex
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $atomicIndex atomicIndex
    *
    * @return $this
    */
    public function setAtomicIndex($atomicIndex)
    {
        $this->container['atomicIndex'] = $atomicIndex;
        return $this;
    }

    /**
    * Gets derivativeIndex
    *  derivativeIndex
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getDerivativeIndex()
    {
        return $this->container['derivativeIndex'];
    }

    /**
    * Sets derivativeIndex
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $derivativeIndex derivativeIndex
    *
    * @return $this
    */
    public function setDerivativeIndex($derivativeIndex)
    {
        $this->container['derivativeIndex'] = $derivativeIndex;
        return $this;
    }

    /**
    * Gets compoundMetric
    *  compoundMetric
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getCompoundMetric()
    {
        return $this->container['compoundMetric'];
    }

    /**
    * Sets compoundMetric
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $compoundMetric compoundMetric
    *
    * @return $this
    */
    public function setCompoundMetric($compoundMetric)
    {
        $this->container['compoundMetric'] = $compoundMetric;
        return $this;
    }

    /**
    * Gets bizIndex
    *  bizIndex
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getBizIndex()
    {
        return $this->container['bizIndex'];
    }

    /**
    * Sets bizIndex
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $bizIndex bizIndex
    *
    * @return $this
    */
    public function setBizIndex($bizIndex)
    {
        $this->container['bizIndex'] = $bizIndex;
        return $this;
    }

    /**
    * Gets dimension
    *  dimension
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $dimension dimension
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets conditionGroup
    *  conditionGroup
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getConditionGroup()
    {
        return $this->container['conditionGroup'];
    }

    /**
    * Sets conditionGroup
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $conditionGroup conditionGroup
    *
    * @return $this
    */
    public function setConditionGroup($conditionGroup)
    {
        $this->container['conditionGroup'] = $conditionGroup;
        return $this;
    }

    /**
    * Gets timeCondition
    *  timeCondition
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getTimeCondition()
    {
        return $this->container['timeCondition'];
    }

    /**
    * Sets timeCondition
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $timeCondition timeCondition
    *
    * @return $this
    */
    public function setTimeCondition($timeCondition)
    {
        $this->container['timeCondition'] = $timeCondition;
        return $this;
    }

    /**
    * Gets commonCondition
    *  commonCondition
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getCommonCondition()
    {
        return $this->container['commonCondition'];
    }

    /**
    * Sets commonCondition
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $commonCondition commonCondition
    *
    * @return $this
    */
    public function setCommonCondition($commonCondition)
    {
        $this->container['commonCondition'] = $commonCondition;
        return $this;
    }

    /**
    * Gets dimensionLogicTable
    *  dimensionLogicTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getDimensionLogicTable()
    {
        return $this->container['dimensionLogicTable'];
    }

    /**
    * Sets dimensionLogicTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $dimensionLogicTable dimensionLogicTable
    *
    * @return $this
    */
    public function setDimensionLogicTable($dimensionLogicTable)
    {
        $this->container['dimensionLogicTable'] = $dimensionLogicTable;
        return $this;
    }

    /**
    * Gets factLogicTable
    *  factLogicTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getFactLogicTable()
    {
        return $this->container['factLogicTable'];
    }

    /**
    * Sets factLogicTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $factLogicTable factLogicTable
    *
    * @return $this
    */
    public function setFactLogicTable($factLogicTable)
    {
        $this->container['factLogicTable'] = $factLogicTable;
        return $this;
    }

    /**
    * Gets aggregationLogicTable
    *  aggregationLogicTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getAggregationLogicTable()
    {
        return $this->container['aggregationLogicTable'];
    }

    /**
    * Sets aggregationLogicTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $aggregationLogicTable aggregationLogicTable
    *
    * @return $this
    */
    public function setAggregationLogicTable($aggregationLogicTable)
    {
        $this->container['aggregationLogicTable'] = $aggregationLogicTable;
        return $this;
    }

    /**
    * Gets dataStandard
    *  dataStandard
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getDataStandard()
    {
        return $this->container['dataStandard'];
    }

    /**
    * Sets dataStandard
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $dataStandard dataStandard
    *
    * @return $this
    */
    public function setDataStandard($dataStandard)
    {
        $this->container['dataStandard'] = $dataStandard;
        return $this;
    }

    /**
    * Gets tableModel
    *  tableModel
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getTableModel()
    {
        return $this->container['tableModel'];
    }

    /**
    * Sets tableModel
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $tableModel tableModel
    *
    * @return $this
    */
    public function setTableModel($tableModel)
    {
        $this->container['tableModel'] = $tableModel;
        return $this;
    }

    /**
    * Gets lookupTable
    *  lookupTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null
    */
    public function getLookupTable()
    {
        return $this->container['lookupTable'];
    }

    /**
    * Sets lookupTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticSchema|null $lookupTable lookupTable
    *
    * @return $this
    */
    public function setLookupTable($lookupTable)
    {
        $this->container['lookupTable'] = $lookupTable;
        return $this;
    }

    /**
    * Gets pendingReview
    *  待我审核。
    *
    * @return int|null
    */
    public function getPendingReview()
    {
        return $this->container['pendingReview'];
    }

    /**
    * Sets pendingReview
    *
    * @param int|null $pendingReview 待我审核。
    *
    * @return $this
    */
    public function setPendingReview($pendingReview)
    {
        $this->container['pendingReview'] = $pendingReview;
        return $this;
    }

    /**
    * Gets myApplications
    *  我的申请。
    *
    * @return int|null
    */
    public function getMyApplications()
    {
        return $this->container['myApplications'];
    }

    /**
    * Sets myApplications
    *
    * @param int|null $myApplications 我的申请。
    *
    * @return $this
    */
    public function setMyApplications($myApplications)
    {
        $this->container['myApplications'] = $myApplications;
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

