<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerTableWordsBlock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerTableWordsBlock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  单元格内的文字识别结果。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'rows' => 'int[]',
            'columns' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  单元格内的文字识别结果。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'rows' => 'int32',
        'columns' => 'int32'
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
    * words  单元格内的文字识别结果。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'rows' => 'rows',
            'columns' => 'columns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  单元格内的文字识别结果。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'rows' => 'setRows',
            'columns' => 'setColumns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  单元格内的文字识别结果。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'rows' => 'getRows',
            'columns' => 'getColumns'
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
        $this->container['words'] = isset($data['words']) ? $data['words'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
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
    * Gets words
    *  单元格内的文字识别结果。
    *
    * @return string|null
    */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
    * Sets words
    *
    * @param string|null $words 单元格内的文字识别结果。
    *
    * @return $this
    */
    public function setWords($words)
    {
        $this->container['words'] = $words;
        return $this;
    }

    /**
    * Gets rows
    *  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @return int[]|null
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int[]|null $rows 文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
        return $this;
    }

    /**
    * Gets columns
    *  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @return int[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param int[]|null $columns 文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
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

