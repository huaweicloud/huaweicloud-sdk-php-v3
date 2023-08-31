<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerLayoutResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerLayoutResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * layoutBlockCount  模型识别到的文档版面区域数量。
    * layoutBlockList  文档版面区域识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'layoutBlockCount' => 'int',
            'layoutBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerLayoutBlock[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * layoutBlockCount  模型识别到的文档版面区域数量。
    * layoutBlockList  文档版面区域识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'layoutBlockCount' => 'int32',
        'layoutBlockList' => null
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
    * layoutBlockCount  模型识别到的文档版面区域数量。
    * layoutBlockList  文档版面区域识别结果列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'layoutBlockCount' => 'layout_block_count',
            'layoutBlockList' => 'layout_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * layoutBlockCount  模型识别到的文档版面区域数量。
    * layoutBlockList  文档版面区域识别结果列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'layoutBlockCount' => 'setLayoutBlockCount',
            'layoutBlockList' => 'setLayoutBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * layoutBlockCount  模型识别到的文档版面区域数量。
    * layoutBlockList  文档版面区域识别结果列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'layoutBlockCount' => 'getLayoutBlockCount',
            'layoutBlockList' => 'getLayoutBlockList'
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
        $this->container['layoutBlockCount'] = isset($data['layoutBlockCount']) ? $data['layoutBlockCount'] : null;
        $this->container['layoutBlockList'] = isset($data['layoutBlockList']) ? $data['layoutBlockList'] : null;
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
    * Gets layoutBlockCount
    *  模型识别到的文档版面区域数量。
    *
    * @return int|null
    */
    public function getLayoutBlockCount()
    {
        return $this->container['layoutBlockCount'];
    }

    /**
    * Sets layoutBlockCount
    *
    * @param int|null $layoutBlockCount 模型识别到的文档版面区域数量。
    *
    * @return $this
    */
    public function setLayoutBlockCount($layoutBlockCount)
    {
        $this->container['layoutBlockCount'] = $layoutBlockCount;
        return $this;
    }

    /**
    * Gets layoutBlockList
    *  文档版面区域识别结果列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerLayoutBlock[]|null
    */
    public function getLayoutBlockList()
    {
        return $this->container['layoutBlockList'];
    }

    /**
    * Sets layoutBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerLayoutBlock[]|null $layoutBlockList 文档版面区域识别结果列表。
    *
    * @return $this
    */
    public function setLayoutBlockList($layoutBlockList)
    {
        $this->container['layoutBlockList'] = $layoutBlockList;
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

