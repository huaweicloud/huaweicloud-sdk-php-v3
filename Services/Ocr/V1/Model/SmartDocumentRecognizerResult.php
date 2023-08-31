<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ocrResult  ocrResult
    * kvResult  kvResult
    * tableResult  tableResult
    * layoutResult  layoutResult
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ocrResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerOcrResult',
            'kvResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerKvResult',
            'tableResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableResult',
            'layoutResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerLayoutResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ocrResult  ocrResult
    * kvResult  kvResult
    * tableResult  tableResult
    * layoutResult  layoutResult
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ocrResult' => null,
        'kvResult' => null,
        'tableResult' => null,
        'layoutResult' => null
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
    * ocrResult  ocrResult
    * kvResult  kvResult
    * tableResult  tableResult
    * layoutResult  layoutResult
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ocrResult' => 'ocr_result',
            'kvResult' => 'kv_result',
            'tableResult' => 'table_result',
            'layoutResult' => 'layout_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ocrResult  ocrResult
    * kvResult  kvResult
    * tableResult  tableResult
    * layoutResult  layoutResult
    *
    * @var string[]
    */
    protected static $setters = [
            'ocrResult' => 'setOcrResult',
            'kvResult' => 'setKvResult',
            'tableResult' => 'setTableResult',
            'layoutResult' => 'setLayoutResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ocrResult  ocrResult
    * kvResult  kvResult
    * tableResult  tableResult
    * layoutResult  layoutResult
    *
    * @var string[]
    */
    protected static $getters = [
            'ocrResult' => 'getOcrResult',
            'kvResult' => 'getKvResult',
            'tableResult' => 'getTableResult',
            'layoutResult' => 'getLayoutResult'
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
        $this->container['ocrResult'] = isset($data['ocrResult']) ? $data['ocrResult'] : null;
        $this->container['kvResult'] = isset($data['kvResult']) ? $data['kvResult'] : null;
        $this->container['tableResult'] = isset($data['tableResult']) ? $data['tableResult'] : null;
        $this->container['layoutResult'] = isset($data['layoutResult']) ? $data['layoutResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ocrResult'] === null) {
            $invalidProperties[] = "'ocrResult' can't be null";
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
    * Gets ocrResult
    *  ocrResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerOcrResult
    */
    public function getOcrResult()
    {
        return $this->container['ocrResult'];
    }

    /**
    * Sets ocrResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerOcrResult $ocrResult ocrResult
    *
    * @return $this
    */
    public function setOcrResult($ocrResult)
    {
        $this->container['ocrResult'] = $ocrResult;
        return $this;
    }

    /**
    * Gets kvResult
    *  kvResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerKvResult|null
    */
    public function getKvResult()
    {
        return $this->container['kvResult'];
    }

    /**
    * Sets kvResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerKvResult|null $kvResult kvResult
    *
    * @return $this
    */
    public function setKvResult($kvResult)
    {
        $this->container['kvResult'] = $kvResult;
        return $this;
    }

    /**
    * Gets tableResult
    *  tableResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableResult|null
    */
    public function getTableResult()
    {
        return $this->container['tableResult'];
    }

    /**
    * Sets tableResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableResult|null $tableResult tableResult
    *
    * @return $this
    */
    public function setTableResult($tableResult)
    {
        $this->container['tableResult'] = $tableResult;
        return $this;
    }

    /**
    * Gets layoutResult
    *  layoutResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerLayoutResult|null
    */
    public function getLayoutResult()
    {
        return $this->container['layoutResult'];
    }

    /**
    * Sets layoutResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerLayoutResult|null $layoutResult layoutResult
    *
    * @return $this
    */
    public function setLayoutResult($layoutResult)
    {
        $this->container['layoutResult'] = $layoutResult;
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

