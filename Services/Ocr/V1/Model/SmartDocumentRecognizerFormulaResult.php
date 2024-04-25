<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerFormulaResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerFormulaResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * formulaCount  数学公式数量。
    * formulaList  数学公式识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'formulaCount' => 'int',
            'formulaList' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerFormulaBlock[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * formulaCount  数学公式数量。
    * formulaList  数学公式识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'formulaCount' => 'int32',
        'formulaList' => null
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
    * formulaCount  数学公式数量。
    * formulaList  数学公式识别结果列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'formulaCount' => 'formula_count',
            'formulaList' => 'formula_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * formulaCount  数学公式数量。
    * formulaList  数学公式识别结果列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'formulaCount' => 'setFormulaCount',
            'formulaList' => 'setFormulaList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * formulaCount  数学公式数量。
    * formulaList  数学公式识别结果列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'formulaCount' => 'getFormulaCount',
            'formulaList' => 'getFormulaList'
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
        $this->container['formulaCount'] = isset($data['formulaCount']) ? $data['formulaCount'] : null;
        $this->container['formulaList'] = isset($data['formulaList']) ? $data['formulaList'] : null;
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
    * Gets formulaCount
    *  数学公式数量。
    *
    * @return int|null
    */
    public function getFormulaCount()
    {
        return $this->container['formulaCount'];
    }

    /**
    * Sets formulaCount
    *
    * @param int|null $formulaCount 数学公式数量。
    *
    * @return $this
    */
    public function setFormulaCount($formulaCount)
    {
        $this->container['formulaCount'] = $formulaCount;
        return $this;
    }

    /**
    * Gets formulaList
    *  数学公式识别结果列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerFormulaBlock[]|null
    */
    public function getFormulaList()
    {
        return $this->container['formulaList'];
    }

    /**
    * Sets formulaList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerFormulaBlock[]|null $formulaList 数学公式识别结果列表。
    *
    * @return $this
    */
    public function setFormulaList($formulaList)
    {
        $this->container['formulaList'] = $formulaList;
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

