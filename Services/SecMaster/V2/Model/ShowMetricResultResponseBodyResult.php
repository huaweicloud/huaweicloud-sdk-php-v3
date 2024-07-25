<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetricResultResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetricResultResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * labels  指标查询结果表格标题
    * datarows  指标查询结果内容表格
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'labels' => 'string[]',
            'datarows' => 'object[][]',
            'effectiveColumn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * labels  指标查询结果表格标题
    * datarows  指标查询结果内容表格
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'labels' => null,
        'datarows' => null,
        'effectiveColumn' => null
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
    * labels  指标查询结果表格标题
    * datarows  指标查询结果内容表格
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'labels' => 'labels',
            'datarows' => 'datarows',
            'effectiveColumn' => 'effective_column'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * labels  指标查询结果表格标题
    * datarows  指标查询结果内容表格
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @var string[]
    */
    protected static $setters = [
            'labels' => 'setLabels',
            'datarows' => 'setDatarows',
            'effectiveColumn' => 'setEffectiveColumn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * labels  指标查询结果表格标题
    * datarows  指标查询结果内容表格
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @var string[]
    */
    protected static $getters = [
            'labels' => 'getLabels',
            'datarows' => 'getDatarows',
            'effectiveColumn' => 'getEffectiveColumn'
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
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['datarows'] = isset($data['datarows']) ? $data['datarows'] : null;
        $this->container['effectiveColumn'] = isset($data['effectiveColumn']) ? $data['effectiveColumn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['datarows'] === null) {
            $invalidProperties[] = "'datarows' can't be null";
        }
            if (!is_null($this->container['effectiveColumn']) && !preg_match("/\\d+:\\d+/", $this->container['effectiveColumn'])) {
                $invalidProperties[] = "invalid value for 'effectiveColumn', must be conform to the pattern /\\d+:\\d+/.";
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
    * Gets labels
    *  指标查询结果表格标题
    *
    * @return string[]
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[] $labels 指标查询结果表格标题
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets datarows
    *  指标查询结果内容表格
    *
    * @return object[][]
    */
    public function getDatarows()
    {
        return $this->container['datarows'];
    }

    /**
    * Sets datarows
    *
    * @param object[][] $datarows 指标查询结果内容表格
    *
    * @return $this
    */
    public function setDatarows($datarows)
    {
        $this->container['datarows'] = $datarows;
        return $this;
    }

    /**
    * Gets effectiveColumn
    *  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @return string|null
    */
    public function getEffectiveColumn()
    {
        return $this->container['effectiveColumn'];
    }

    /**
    * Sets effectiveColumn
    *
    * @param string|null $effectiveColumn 生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @return $this
    */
    public function setEffectiveColumn($effectiveColumn)
    {
        $this->container['effectiveColumn'] = $effectiveColumn;
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

