<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HandwritingResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HandwritingResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * wordsBlockCount  代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'wordsBlockCount' => 'int',
            'wordsBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\HandwritingWordsBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * wordsBlockCount  代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'wordsBlockCount' => 'int32',
        'wordsBlockList' => null
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
    * wordsBlockCount  代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'wordsBlockCount' => 'words_block_count',
            'wordsBlockList' => 'words_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * wordsBlockCount  代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $setters = [
            'wordsBlockCount' => 'setWordsBlockCount',
            'wordsBlockList' => 'setWordsBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * wordsBlockCount  代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $getters = [
            'wordsBlockCount' => 'getWordsBlockCount',
            'wordsBlockList' => 'getWordsBlockList'
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
        $this->container['wordsBlockCount'] = isset($data['wordsBlockCount']) ? $data['wordsBlockCount'] : null;
        $this->container['wordsBlockList'] = isset($data['wordsBlockList']) ? $data['wordsBlockList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['wordsBlockCount'] === null) {
            $invalidProperties[] = "'wordsBlockCount' can't be null";
        }
        if ($this->container['wordsBlockList'] === null) {
            $invalidProperties[] = "'wordsBlockList' can't be null";
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
    * Gets wordsBlockCount
    *  代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    *
    * @return int
    */
    public function getWordsBlockCount()
    {
        return $this->container['wordsBlockCount'];
    }

    /**
    * Sets wordsBlockCount
    *
    * @param int $wordsBlockCount 代表检测识别出来的文字块数目。 \"segment_digit\" 和\"segment\"默认为1。
    *
    * @return $this
    */
    public function setWordsBlockCount($wordsBlockCount)
    {
        $this->container['wordsBlockCount'] = $wordsBlockCount;
        return $this;
    }

    /**
    * Gets wordsBlockList
    *  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\HandwritingWordsBlockList[]
    */
    public function getWordsBlockList()
    {
        return $this->container['wordsBlockList'];
    }

    /**
    * Sets wordsBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\HandwritingWordsBlockList[] $wordsBlockList 识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @return $this
    */
    public function setWordsBlockList($wordsBlockList)
    {
        $this->container['wordsBlockList'] = $wordsBlockList;
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

