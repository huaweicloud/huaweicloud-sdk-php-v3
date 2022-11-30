<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PcrTestRecordResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PcrTestRecordResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名
    * samplingTime  核酸检测采样时间
    * testTime  核酸检测结果更新时间
    * testResult  核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    * confidence  confidence
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'samplingTime' => 'string',
            'testTime' => 'string',
            'testResult' => 'string',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\PcrTestRecordConfidence',
            'wordsBlockCount' => 'int',
            'wordsBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\PcrTestRecordWordsBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名
    * samplingTime  核酸检测采样时间
    * testTime  核酸检测结果更新时间
    * testResult  核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    * confidence  confidence
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'samplingTime' => null,
        'testTime' => null,
        'testResult' => null,
        'confidence' => null,
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
    * name  姓名
    * samplingTime  核酸检测采样时间
    * testTime  核酸检测结果更新时间
    * testResult  核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    * confidence  confidence
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'samplingTime' => 'sampling_time',
            'testTime' => 'test_time',
            'testResult' => 'test_result',
            'confidence' => 'confidence',
            'wordsBlockCount' => 'words_block_count',
            'wordsBlockList' => 'words_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名
    * samplingTime  核酸检测采样时间
    * testTime  核酸检测结果更新时间
    * testResult  核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    * confidence  confidence
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'samplingTime' => 'setSamplingTime',
            'testTime' => 'setTestTime',
            'testResult' => 'setTestResult',
            'confidence' => 'setConfidence',
            'wordsBlockCount' => 'setWordsBlockCount',
            'wordsBlockList' => 'setWordsBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名
    * samplingTime  核酸检测采样时间
    * testTime  核酸检测结果更新时间
    * testResult  核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    * confidence  confidence
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'samplingTime' => 'getSamplingTime',
            'testTime' => 'getTestTime',
            'testResult' => 'getTestResult',
            'confidence' => 'getConfidence',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['samplingTime'] = isset($data['samplingTime']) ? $data['samplingTime'] : null;
        $this->container['testTime'] = isset($data['testTime']) ? $data['testTime'] : null;
        $this->container['testResult'] = isset($data['testResult']) ? $data['testResult'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['samplingTime'] === null) {
            $invalidProperties[] = "'samplingTime' can't be null";
        }
        if ($this->container['testTime'] === null) {
            $invalidProperties[] = "'testTime' can't be null";
        }
        if ($this->container['testResult'] === null) {
            $invalidProperties[] = "'testResult' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
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
    * Gets name
    *  姓名
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
    * @param string $name 姓名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets samplingTime
    *  核酸检测采样时间
    *
    * @return string
    */
    public function getSamplingTime()
    {
        return $this->container['samplingTime'];
    }

    /**
    * Sets samplingTime
    *
    * @param string $samplingTime 核酸检测采样时间
    *
    * @return $this
    */
    public function setSamplingTime($samplingTime)
    {
        $this->container['samplingTime'] = $samplingTime;
        return $this;
    }

    /**
    * Gets testTime
    *  核酸检测结果更新时间
    *
    * @return string
    */
    public function getTestTime()
    {
        return $this->container['testTime'];
    }

    /**
    * Sets testTime
    *
    * @param string $testTime 核酸检测结果更新时间
    *
    * @return $this
    */
    public function setTestTime($testTime)
    {
        $this->container['testTime'] = $testTime;
        return $this;
    }

    /**
    * Gets testResult
    *  核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    *
    * @return string
    */
    public function getTestResult()
    {
        return $this->container['testResult'];
    }

    /**
    * Sets testResult
    *
    * @param string $testResult 核酸检测结果，可选值包括：  - \"positive\",即阳性  - \"negative\",即阴性  - \"unknown\",未知
    *
    * @return $this
    */
    public function setTestResult($testResult)
    {
        $this->container['testResult'] = $testResult;
        return $this;
    }

    /**
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\PcrTestRecordConfidence
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\PcrTestRecordConfidence $confidence confidence
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets wordsBlockCount
    *  代表检测识别出来的文字块数目。
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
    * @param int $wordsBlockCount 代表检测识别出来的文字块数目。
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
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\PcrTestRecordWordsBlockList[]
    */
    public function getWordsBlockList()
    {
        return $this->container['wordsBlockList'];
    }

    /**
    * Sets wordsBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\PcrTestRecordWordsBlockList[] $wordsBlockList 识别文字块列表，输出顺序从左到右，从上到下。
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

