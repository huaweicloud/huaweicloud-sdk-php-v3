<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineCompareResultOverview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineCompareResultOverview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * lineCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'targetDbName' => 'string',
            'lineCompareResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * lineCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'targetDbName' => null,
        'lineCompareResult' => null
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
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * lineCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'targetDbName' => 'target_db_name',
            'lineCompareResult' => 'line_compare_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * lineCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'targetDbName' => 'setTargetDbName',
            'lineCompareResult' => 'setLineCompareResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * lineCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'targetDbName' => 'getTargetDbName',
            'lineCompareResult' => 'getLineCompareResult'
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
    const LINE_COMPARE_RESULT_CONSISTENT = 'CONSISTENT';
    const LINE_COMPARE_RESULT_INCONSISTENT = 'INCONSISTENT';
    const LINE_COMPARE_RESULT_COMPARING = 'COMPARING';
    const LINE_COMPARE_RESULT_WAITING_FOR_COMPARISON = 'WAITING_FOR_COMPARISON';
    const LINE_COMPARE_RESULT_FAILED_TO_COMPARE = 'FAILED_TO_COMPARE';
    const LINE_COMPARE_RESULT_TARGET_DB_NOT_EXIT = 'TARGET_DB_NOT_EXIT';
    const LINE_COMPARE_RESULT_CAN_NOT_COMPARE = 'CAN_NOT_COMPARE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLineCompareResultAllowableValues()
    {
        return [
            self::LINE_COMPARE_RESULT_CONSISTENT,
            self::LINE_COMPARE_RESULT_INCONSISTENT,
            self::LINE_COMPARE_RESULT_COMPARING,
            self::LINE_COMPARE_RESULT_WAITING_FOR_COMPARISON,
            self::LINE_COMPARE_RESULT_FAILED_TO_COMPARE,
            self::LINE_COMPARE_RESULT_TARGET_DB_NOT_EXIT,
            self::LINE_COMPARE_RESULT_CAN_NOT_COMPARE,
        ];
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
        $this->container['sourceDbName'] = isset($data['sourceDbName']) ? $data['sourceDbName'] : null;
        $this->container['targetDbName'] = isset($data['targetDbName']) ? $data['targetDbName'] : null;
        $this->container['lineCompareResult'] = isset($data['lineCompareResult']) ? $data['lineCompareResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceDbName'] === null) {
            $invalidProperties[] = "'sourceDbName' can't be null";
        }
        if ($this->container['targetDbName'] === null) {
            $invalidProperties[] = "'targetDbName' can't be null";
        }
        if ($this->container['lineCompareResult'] === null) {
            $invalidProperties[] = "'lineCompareResult' can't be null";
        }
            $allowedValues = $this->getLineCompareResultAllowableValues();
                if (!is_null($this->container['lineCompareResult']) && !in_array($this->container['lineCompareResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lineCompareResult', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets sourceDbName
    *  源库名称。
    *
    * @return string
    */
    public function getSourceDbName()
    {
        return $this->container['sourceDbName'];
    }

    /**
    * Sets sourceDbName
    *
    * @param string $sourceDbName 源库名称。
    *
    * @return $this
    */
    public function setSourceDbName($sourceDbName)
    {
        $this->container['sourceDbName'] = $sourceDbName;
        return $this;
    }

    /**
    * Gets targetDbName
    *  目标库名称。
    *
    * @return string
    */
    public function getTargetDbName()
    {
        return $this->container['targetDbName'];
    }

    /**
    * Sets targetDbName
    *
    * @param string $targetDbName 目标库名称。
    *
    * @return $this
    */
    public function setTargetDbName($targetDbName)
    {
        $this->container['targetDbName'] = $targetDbName;
        return $this;
    }

    /**
    * Gets lineCompareResult
    *  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @return string
    */
    public function getLineCompareResult()
    {
        return $this->container['lineCompareResult'];
    }

    /**
    * Sets lineCompareResult
    *
    * @param string $lineCompareResult 对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @return $this
    */
    public function setLineCompareResult($lineCompareResult)
    {
        $this->container['lineCompareResult'] = $lineCompareResult;
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

