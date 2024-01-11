<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnLineage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnLineage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业算子名称
    * inputColumns  上游血缘字段列表，列表大小：1至100
    * outputColumns  下游血缘字段列表，列表大小：1至100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'inputColumns' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnDetails[]',
            'outputColumns' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnDetails[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业算子名称
    * inputColumns  上游血缘字段列表，列表大小：1至100
    * outputColumns  下游血缘字段列表，列表大小：1至100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'inputColumns' => null,
        'outputColumns' => null
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
    * name  作业算子名称
    * inputColumns  上游血缘字段列表，列表大小：1至100
    * outputColumns  下游血缘字段列表，列表大小：1至100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'inputColumns' => 'input_columns',
            'outputColumns' => 'output_columns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业算子名称
    * inputColumns  上游血缘字段列表，列表大小：1至100
    * outputColumns  下游血缘字段列表，列表大小：1至100
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'inputColumns' => 'setInputColumns',
            'outputColumns' => 'setOutputColumns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业算子名称
    * inputColumns  上游血缘字段列表，列表大小：1至100
    * outputColumns  下游血缘字段列表，列表大小：1至100
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'inputColumns' => 'getInputColumns',
            'outputColumns' => 'getOutputColumns'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inputColumns'] = isset($data['inputColumns']) ? $data['inputColumns'] : null;
        $this->container['outputColumns'] = isset($data['outputColumns']) ? $data['outputColumns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['inputColumns'] === null) {
            $invalidProperties[] = "'inputColumns' can't be null";
        }
        if ($this->container['outputColumns'] === null) {
            $invalidProperties[] = "'outputColumns' can't be null";
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
    * Gets name
    *  作业算子名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 作业算子名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets inputColumns
    *  上游血缘字段列表，列表大小：1至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnDetails[]
    */
    public function getInputColumns()
    {
        return $this->container['inputColumns'];
    }

    /**
    * Sets inputColumns
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnDetails[] $inputColumns 上游血缘字段列表，列表大小：1至100
    *
    * @return $this
    */
    public function setInputColumns($inputColumns)
    {
        $this->container['inputColumns'] = $inputColumns;
        return $this;
    }

    /**
    * Gets outputColumns
    *  下游血缘字段列表，列表大小：1至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnDetails[]
    */
    public function getOutputColumns()
    {
        return $this->container['outputColumns'];
    }

    /**
    * Sets outputColumns
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnDetails[] $outputColumns 下游血缘字段列表，列表大小：1至100
    *
    * @return $this
    */
    public function setOutputColumns($outputColumns)
    {
        $this->container['outputColumns'] = $outputColumns;
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

