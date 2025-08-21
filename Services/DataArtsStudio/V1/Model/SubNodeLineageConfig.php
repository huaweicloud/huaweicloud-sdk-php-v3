<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubNodeLineageConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubNodeLineageConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  节点名称。
    * sqlStatement  待接续sql语句。
    * inputTables  输入表。
    * outputTable  outputTable
    * columnLineages  字段血缘信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sqlStatement' => 'string',
            'inputTables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableConfig[]',
            'outputTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableConfig',
            'columnLineages' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineageConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  节点名称。
    * sqlStatement  待接续sql语句。
    * inputTables  输入表。
    * outputTable  outputTable
    * columnLineages  字段血缘信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sqlStatement' => null,
        'inputTables' => null,
        'outputTable' => null,
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
    * name  节点名称。
    * sqlStatement  待接续sql语句。
    * inputTables  输入表。
    * outputTable  outputTable
    * columnLineages  字段血缘信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sqlStatement' => 'sql_statement',
            'inputTables' => 'input_tables',
            'outputTable' => 'output_table',
            'columnLineages' => 'column_lineages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  节点名称。
    * sqlStatement  待接续sql语句。
    * inputTables  输入表。
    * outputTable  outputTable
    * columnLineages  字段血缘信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sqlStatement' => 'setSqlStatement',
            'inputTables' => 'setInputTables',
            'outputTable' => 'setOutputTable',
            'columnLineages' => 'setColumnLineages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  节点名称。
    * sqlStatement  待接续sql语句。
    * inputTables  输入表。
    * outputTable  outputTable
    * columnLineages  字段血缘信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sqlStatement' => 'getSqlStatement',
            'inputTables' => 'getInputTables',
            'outputTable' => 'getOutputTable',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['inputTables'] = isset($data['inputTables']) ? $data['inputTables'] : null;
        $this->container['outputTable'] = isset($data['outputTable']) ? $data['outputTable'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 100)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sqlStatement']) && (mb_strlen($this->container['sqlStatement']) > 32768)) {
                $invalidProperties[] = "invalid value for 'sqlStatement', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['sqlStatement']) && (mb_strlen($this->container['sqlStatement']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlStatement', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['inputTables'] === null) {
            $invalidProperties[] = "'inputTables' can't be null";
        }
        if ($this->container['outputTable'] === null) {
            $invalidProperties[] = "'outputTable' can't be null";
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
    *  节点名称。
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
    * @param string $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  待接续sql语句。
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement 待接续sql语句。
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets inputTables
    *  输入表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableConfig[]
    */
    public function getInputTables()
    {
        return $this->container['inputTables'];
    }

    /**
    * Sets inputTables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableConfig[] $inputTables 输入表。
    *
    * @return $this
    */
    public function setInputTables($inputTables)
    {
        $this->container['inputTables'] = $inputTables;
        return $this;
    }

    /**
    * Gets outputTable
    *  outputTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableConfig
    */
    public function getOutputTable()
    {
        return $this->container['outputTable'];
    }

    /**
    * Sets outputTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableConfig $outputTable outputTable
    *
    * @return $this
    */
    public function setOutputTable($outputTable)
    {
        $this->container['outputTable'] = $outputTable;
        return $this;
    }

    /**
    * Gets columnLineages
    *  字段血缘信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineageConfig[]|null
    */
    public function getColumnLineages()
    {
        return $this->container['columnLineages'];
    }

    /**
    * Sets columnLineages
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineageConfig[]|null $columnLineages 字段血缘信息。
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

