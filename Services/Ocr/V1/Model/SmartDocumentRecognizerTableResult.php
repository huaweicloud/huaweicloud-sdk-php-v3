<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerTableResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerTableResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableCount  模型识别到的表格数量。
    * tableList  表格识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableCount' => 'int',
            'tableList' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableBlock[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableCount  模型识别到的表格数量。
    * tableList  表格识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableCount' => 'int32',
        'tableList' => null
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
    * tableCount  模型识别到的表格数量。
    * tableList  表格识别结果列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableCount' => 'table_count',
            'tableList' => 'table_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableCount  模型识别到的表格数量。
    * tableList  表格识别结果列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableCount' => 'setTableCount',
            'tableList' => 'setTableList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableCount  模型识别到的表格数量。
    * tableList  表格识别结果列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableCount' => 'getTableCount',
            'tableList' => 'getTableList'
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
        $this->container['tableCount'] = isset($data['tableCount']) ? $data['tableCount'] : null;
        $this->container['tableList'] = isset($data['tableList']) ? $data['tableList'] : null;
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
    * Gets tableCount
    *  模型识别到的表格数量。
    *
    * @return int|null
    */
    public function getTableCount()
    {
        return $this->container['tableCount'];
    }

    /**
    * Sets tableCount
    *
    * @param int|null $tableCount 模型识别到的表格数量。
    *
    * @return $this
    */
    public function setTableCount($tableCount)
    {
        $this->container['tableCount'] = $tableCount;
        return $this;
    }

    /**
    * Gets tableList
    *  表格识别结果列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableBlock[]|null
    */
    public function getTableList()
    {
        return $this->container['tableList'];
    }

    /**
    * Sets tableList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableBlock[]|null $tableList 表格识别结果列表。
    *
    * @return $this
    */
    public function setTableList($tableList)
    {
        $this->container['tableList'] = $tableList;
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

