<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableLineageV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableLineageV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputTables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfoV2[]',
            'outputTables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfoV2[]',
            'columnLineages' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineageV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputTables' => null,
        'outputTables' => null,
        'columnLineages' => null
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
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputTables' => 'input_tables',
            'outputTables' => 'output_tables',
            'columnLineages' => 'column_lineages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $setters = [
            'inputTables' => 'setInputTables',
            'outputTables' => 'setOutputTables',
            'columnLineages' => 'setColumnLineages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $getters = [
            'inputTables' => 'getInputTables',
            'outputTables' => 'getOutputTables',
            'columnLineages' => 'getColumnLineages'
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
        $this->container['inputTables'] = isset($data['inputTables']) ? $data['inputTables'] : null;
        $this->container['outputTables'] = isset($data['outputTables']) ? $data['outputTables'] : null;
        $this->container['columnLineages'] = isset($data['columnLineages']) ? $data['columnLineages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inputTables'] === null) {
            $invalidProperties[] = "'inputTables' can't be null";
        }
        if ($this->container['outputTables'] === null) {
            $invalidProperties[] = "'outputTables' can't be null";
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
    * Gets inputTables
    *  上游血缘表列表，列表大小：1至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfoV2[]
    */
    public function getInputTables()
    {
        return $this->container['inputTables'];
    }

    /**
    * Sets inputTables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfoV2[] $inputTables 上游血缘表列表，列表大小：1至100
    *
    * @return $this
    */
    public function setInputTables($inputTables)
    {
        $this->container['inputTables'] = $inputTables;
        return $this;
    }

    /**
    * Gets outputTables
    *  下游血缘表列表，列表大小：1至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfoV2[]
    */
    public function getOutputTables()
    {
        return $this->container['outputTables'];
    }

    /**
    * Sets outputTables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfoV2[] $outputTables 下游血缘表列表，列表大小：1至100
    *
    * @return $this
    */
    public function setOutputTables($outputTables)
    {
        $this->container['outputTables'] = $outputTables;
        return $this;
    }

    /**
    * Gets columnLineages
    *  字段血缘列表，列表大小：0至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineageV2[]|null
    */
    public function getColumnLineages()
    {
        return $this->container['columnLineages'];
    }

    /**
    * Sets columnLineages
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineageV2[]|null $columnLineages 字段血缘列表，列表大小：0至100
    *
    * @return $this
    */
    public function setColumnLineages($columnLineages)
    {
        $this->container['columnLineages'] = $columnLineages;
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

