<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerFormResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerFormResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * formCount  模型识别到的有线表单数量。
    * formList  有线表单识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'formCount' => 'int',
            'formList' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableBlock[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * formCount  模型识别到的有线表单数量。
    * formList  有线表单识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'formCount' => 'int32',
        'formList' => null
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
    * formCount  模型识别到的有线表单数量。
    * formList  有线表单识别结果列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'formCount' => 'form_count',
            'formList' => 'form_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * formCount  模型识别到的有线表单数量。
    * formList  有线表单识别结果列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'formCount' => 'setFormCount',
            'formList' => 'setFormList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * formCount  模型识别到的有线表单数量。
    * formList  有线表单识别结果列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'formCount' => 'getFormCount',
            'formList' => 'getFormList'
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
        $this->container['formCount'] = isset($data['formCount']) ? $data['formCount'] : null;
        $this->container['formList'] = isset($data['formList']) ? $data['formList'] : null;
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
    * Gets formCount
    *  模型识别到的有线表单数量。
    *
    * @return int|null
    */
    public function getFormCount()
    {
        return $this->container['formCount'];
    }

    /**
    * Sets formCount
    *
    * @param int|null $formCount 模型识别到的有线表单数量。
    *
    * @return $this
    */
    public function setFormCount($formCount)
    {
        $this->container['formCount'] = $formCount;
        return $this;
    }

    /**
    * Gets formList
    *  有线表单识别结果列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableBlock[]|null
    */
    public function getFormList()
    {
        return $this->container['formList'];
    }

    /**
    * Sets formList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerTableBlock[]|null $formList 有线表单识别结果列表。
    *
    * @return $this
    */
    public function setFormList($formList)
    {
        $this->container['formList'] = $formList;
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

