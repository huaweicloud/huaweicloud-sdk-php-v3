<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnLineageConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnLineageConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  字段血缘节点名称。
    * inputColumns  输入字段血缘信息。
    * outputColumn  outputColumn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'inputColumns' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnConfig[]',
            'outputColumn' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  字段血缘节点名称。
    * inputColumns  输入字段血缘信息。
    * outputColumn  outputColumn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'inputColumns' => null,
        'outputColumn' => null
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
    * name  字段血缘节点名称。
    * inputColumns  输入字段血缘信息。
    * outputColumn  outputColumn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'inputColumns' => 'input_columns',
            'outputColumn' => 'output_column'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  字段血缘节点名称。
    * inputColumns  输入字段血缘信息。
    * outputColumn  outputColumn
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'inputColumns' => 'setInputColumns',
            'outputColumn' => 'setOutputColumn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  字段血缘节点名称。
    * inputColumns  输入字段血缘信息。
    * outputColumn  outputColumn
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'inputColumns' => 'getInputColumns',
            'outputColumn' => 'getOutputColumn'
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
        $this->container['outputColumn'] = isset($data['outputColumn']) ? $data['outputColumn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['inputColumns'] === null) {
            $invalidProperties[] = "'inputColumns' can't be null";
        }
        if ($this->container['outputColumn'] === null) {
            $invalidProperties[] = "'outputColumn' can't be null";
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
    *  字段血缘节点名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 字段血缘节点名称。
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
    *  输入字段血缘信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnConfig[]
    */
    public function getInputColumns()
    {
        return $this->container['inputColumns'];
    }

    /**
    * Sets inputColumns
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnConfig[] $inputColumns 输入字段血缘信息。
    *
    * @return $this
    */
    public function setInputColumns($inputColumns)
    {
        $this->container['inputColumns'] = $inputColumns;
        return $this;
    }

    /**
    * Gets outputColumn
    *  outputColumn
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnConfig
    */
    public function getOutputColumn()
    {
        return $this->container['outputColumn'];
    }

    /**
    * Sets outputColumn
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnConfig $outputColumn outputColumn
    *
    * @return $this
    */
    public function setOutputColumn($outputColumn)
    {
        $this->container['outputColumn'] = $outputColumn;
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

