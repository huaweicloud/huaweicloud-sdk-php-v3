<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WordsRegionList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WordsRegionList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    * wordsBlockCount  子区域识别文字块数目。
    * wordsBlockList  子区域识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'wordsBlockCount' => 'int',
            'wordsBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\GeneralTableWordsBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    * wordsBlockCount  子区域识别文字块数目。
    * wordsBlockList  子区域识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
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
    * type  文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    * wordsBlockCount  子区域识别文字块数目。
    * wordsBlockList  子区域识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'wordsBlockCount' => 'words_block_count',
            'wordsBlockList' => 'words_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    * wordsBlockCount  子区域识别文字块数目。
    * wordsBlockList  子区域识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'wordsBlockCount' => 'setWordsBlockCount',
            'wordsBlockList' => 'setWordsBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    * wordsBlockCount  子区域识别文字块数目。
    * wordsBlockList  子区域识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
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
    * Gets type
    *  文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 文字识别区域类型。 - text：文本识别区域; - table：表格识别区域。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets wordsBlockCount
    *  子区域识别文字块数目。
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
    * @param int $wordsBlockCount 子区域识别文字块数目。
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
    *  子区域识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\GeneralTableWordsBlockList[]
    */
    public function getWordsBlockList()
    {
        return $this->container['wordsBlockList'];
    }

    /**
    * Sets wordsBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\GeneralTableWordsBlockList[] $wordsBlockList 子区域识别文字块列表，输出顺序从左到右，先上后下。
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

