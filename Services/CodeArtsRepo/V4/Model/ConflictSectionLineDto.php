<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConflictSectionLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConflictSectionLineDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineCode  行
    * type  类型
    * oldLine  旧行
    * newLine  新行
    * text  文本
    * metaData  metaData
    * richText  富文本
    * canReceiveSuggestion  可接受建议
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineCode' => 'string',
            'type' => 'string',
            'oldLine' => 'int',
            'newLine' => 'int',
            'text' => 'string',
            'metaData' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictSectionLineMetaDataDto',
            'richText' => 'string',
            'canReceiveSuggestion' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineCode  行
    * type  类型
    * oldLine  旧行
    * newLine  新行
    * text  文本
    * metaData  metaData
    * richText  富文本
    * canReceiveSuggestion  可接受建议
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineCode' => null,
        'type' => null,
        'oldLine' => 'int32',
        'newLine' => 'int32',
        'text' => null,
        'metaData' => null,
        'richText' => null,
        'canReceiveSuggestion' => null
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
    * lineCode  行
    * type  类型
    * oldLine  旧行
    * newLine  新行
    * text  文本
    * metaData  metaData
    * richText  富文本
    * canReceiveSuggestion  可接受建议
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineCode' => 'line_code',
            'type' => 'type',
            'oldLine' => 'old_line',
            'newLine' => 'new_line',
            'text' => 'text',
            'metaData' => 'meta_data',
            'richText' => 'rich_text',
            'canReceiveSuggestion' => 'can_receive_suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineCode  行
    * type  类型
    * oldLine  旧行
    * newLine  新行
    * text  文本
    * metaData  metaData
    * richText  富文本
    * canReceiveSuggestion  可接受建议
    *
    * @var string[]
    */
    protected static $setters = [
            'lineCode' => 'setLineCode',
            'type' => 'setType',
            'oldLine' => 'setOldLine',
            'newLine' => 'setNewLine',
            'text' => 'setText',
            'metaData' => 'setMetaData',
            'richText' => 'setRichText',
            'canReceiveSuggestion' => 'setCanReceiveSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineCode  行
    * type  类型
    * oldLine  旧行
    * newLine  新行
    * text  文本
    * metaData  metaData
    * richText  富文本
    * canReceiveSuggestion  可接受建议
    *
    * @var string[]
    */
    protected static $getters = [
            'lineCode' => 'getLineCode',
            'type' => 'getType',
            'oldLine' => 'getOldLine',
            'newLine' => 'getNewLine',
            'text' => 'getText',
            'metaData' => 'getMetaData',
            'richText' => 'getRichText',
            'canReceiveSuggestion' => 'getCanReceiveSuggestion'
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
        $this->container['lineCode'] = isset($data['lineCode']) ? $data['lineCode'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['oldLine'] = isset($data['oldLine']) ? $data['oldLine'] : null;
        $this->container['newLine'] = isset($data['newLine']) ? $data['newLine'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['richText'] = isset($data['richText']) ? $data['richText'] : null;
        $this->container['canReceiveSuggestion'] = isset($data['canReceiveSuggestion']) ? $data['canReceiveSuggestion'] : null;
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
    * Gets lineCode
    *  行
    *
    * @return string|null
    */
    public function getLineCode()
    {
        return $this->container['lineCode'];
    }

    /**
    * Sets lineCode
    *
    * @param string|null $lineCode 行
    *
    * @return $this
    */
    public function setLineCode($lineCode)
    {
        $this->container['lineCode'] = $lineCode;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets oldLine
    *  旧行
    *
    * @return int|null
    */
    public function getOldLine()
    {
        return $this->container['oldLine'];
    }

    /**
    * Sets oldLine
    *
    * @param int|null $oldLine 旧行
    *
    * @return $this
    */
    public function setOldLine($oldLine)
    {
        $this->container['oldLine'] = $oldLine;
        return $this;
    }

    /**
    * Gets newLine
    *  新行
    *
    * @return int|null
    */
    public function getNewLine()
    {
        return $this->container['newLine'];
    }

    /**
    * Sets newLine
    *
    * @param int|null $newLine 新行
    *
    * @return $this
    */
    public function setNewLine($newLine)
    {
        $this->container['newLine'] = $newLine;
        return $this;
    }

    /**
    * Gets text
    *  文本
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 文本
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictSectionLineMetaDataDto|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictSectionLineMetaDataDto|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
        return $this;
    }

    /**
    * Gets richText
    *  富文本
    *
    * @return string|null
    */
    public function getRichText()
    {
        return $this->container['richText'];
    }

    /**
    * Sets richText
    *
    * @param string|null $richText 富文本
    *
    * @return $this
    */
    public function setRichText($richText)
    {
        $this->container['richText'] = $richText;
        return $this;
    }

    /**
    * Gets canReceiveSuggestion
    *  可接受建议
    *
    * @return bool|null
    */
    public function getCanReceiveSuggestion()
    {
        return $this->container['canReceiveSuggestion'];
    }

    /**
    * Sets canReceiveSuggestion
    *
    * @param bool|null $canReceiveSuggestion 可接受建议
    *
    * @return $this
    */
    public function setCanReceiveSuggestion($canReceiveSuggestion)
    {
        $this->container['canReceiveSuggestion'] = $canReceiveSuggestion;
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

