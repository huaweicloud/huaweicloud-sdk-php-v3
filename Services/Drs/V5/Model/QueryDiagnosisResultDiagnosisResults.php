<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDiagnosisResultDiagnosisResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDiagnosisResult_diagnosis_results';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * item  item
    * state  诊断项状态。
    * resultList  诊断结果。
    * suggestionList  诊断建议。
    * score  诊断项得分。
    * time  完成时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'item' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultItem',
            'state' => 'string',
            'resultList' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultResultList[]',
            'suggestionList' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultSuggestionList[]',
            'score' => 'int',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * item  item
    * state  诊断项状态。
    * resultList  诊断结果。
    * suggestionList  诊断建议。
    * score  诊断项得分。
    * time  完成时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'item' => null,
        'state' => null,
        'resultList' => null,
        'suggestionList' => null,
        'score' => 'int32',
        'time' => null
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
    * item  item
    * state  诊断项状态。
    * resultList  诊断结果。
    * suggestionList  诊断建议。
    * score  诊断项得分。
    * time  完成时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'item' => 'item',
            'state' => 'state',
            'resultList' => 'result_list',
            'suggestionList' => 'suggestion_list',
            'score' => 'score',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * item  item
    * state  诊断项状态。
    * resultList  诊断结果。
    * suggestionList  诊断建议。
    * score  诊断项得分。
    * time  完成时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'item' => 'setItem',
            'state' => 'setState',
            'resultList' => 'setResultList',
            'suggestionList' => 'setSuggestionList',
            'score' => 'setScore',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * item  item
    * state  诊断项状态。
    * resultList  诊断结果。
    * suggestionList  诊断建议。
    * score  诊断项得分。
    * time  完成时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'item' => 'getItem',
            'state' => 'getState',
            'resultList' => 'getResultList',
            'suggestionList' => 'getSuggestionList',
            'score' => 'getScore',
            'time' => 'getTime'
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['resultList'] = isset($data['resultList']) ? $data['resultList'] : null;
        $this->container['suggestionList'] = isset($data['suggestionList']) ? $data['suggestionList'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
    * Gets item
    *  item
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultItem|null
    */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
    * Sets item
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultItem|null $item item
    *
    * @return $this
    */
    public function setItem($item)
    {
        $this->container['item'] = $item;
        return $this;
    }

    /**
    * Gets state
    *  诊断项状态。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 诊断项状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets resultList
    *  诊断结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultResultList[]|null
    */
    public function getResultList()
    {
        return $this->container['resultList'];
    }

    /**
    * Sets resultList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultResultList[]|null $resultList 诊断结果。
    *
    * @return $this
    */
    public function setResultList($resultList)
    {
        $this->container['resultList'] = $resultList;
        return $this;
    }

    /**
    * Gets suggestionList
    *  诊断建议。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultSuggestionList[]|null
    */
    public function getSuggestionList()
    {
        return $this->container['suggestionList'];
    }

    /**
    * Sets suggestionList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultSuggestionList[]|null $suggestionList 诊断建议。
    *
    * @return $this
    */
    public function setSuggestionList($suggestionList)
    {
        $this->container['suggestionList'] = $suggestionList;
        return $this;
    }

    /**
    * Gets score
    *  诊断项得分。
    *
    * @return int|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param int|null $score 诊断项得分。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets time
    *  完成时间。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 完成时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

