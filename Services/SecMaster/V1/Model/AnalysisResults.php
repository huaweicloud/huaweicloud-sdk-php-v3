<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnalysisResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnalysisResults';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datarows  统计分析结果数据
    * schema  统计分析结果字段类型
    * size  返回的统计分析结果条数
    * total  统计分析结果总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datarows' => 'object[][]',
            'schema' => '\HuaweiCloud\SDK\SecMaster\V1\Model\AnalysisField[]',
            'size' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datarows  统计分析结果数据
    * schema  统计分析结果字段类型
    * size  返回的统计分析结果条数
    * total  统计分析结果总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datarows' => null,
        'schema' => null,
        'size' => null,
        'total' => null
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
    * datarows  统计分析结果数据
    * schema  统计分析结果字段类型
    * size  返回的统计分析结果条数
    * total  统计分析结果总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datarows' => 'datarows',
            'schema' => 'schema',
            'size' => 'size',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datarows  统计分析结果数据
    * schema  统计分析结果字段类型
    * size  返回的统计分析结果条数
    * total  统计分析结果总数
    *
    * @var string[]
    */
    protected static $setters = [
            'datarows' => 'setDatarows',
            'schema' => 'setSchema',
            'size' => 'setSize',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datarows  统计分析结果数据
    * schema  统计分析结果字段类型
    * size  返回的统计分析结果条数
    * total  统计分析结果总数
    *
    * @var string[]
    */
    protected static $getters = [
            'datarows' => 'getDatarows',
            'schema' => 'getSchema',
            'size' => 'getSize',
            'total' => 'getTotal'
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
        $this->container['datarows'] = isset($data['datarows']) ? $data['datarows'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datarows'] === null) {
            $invalidProperties[] = "'datarows' can't be null";
        }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 500)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 500.";
            }
            if (($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
            if (($this->container['total'] > 10000)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 10000.";
            }
            if (($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets datarows
    *  统计分析结果数据
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
    * @param object[][] $datarows 统计分析结果数据
    *
    * @return $this
    */
    public function setDatarows($datarows)
    {
        $this->container['datarows'] = $datarows;
        return $this;
    }

    /**
    * Gets schema
    *  统计分析结果字段类型
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\AnalysisField[]
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\AnalysisField[] $schema 统计分析结果字段类型
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets size
    *  返回的统计分析结果条数
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 返回的统计分析结果条数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets total
    *  统计分析结果总数
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total 统计分析结果总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

