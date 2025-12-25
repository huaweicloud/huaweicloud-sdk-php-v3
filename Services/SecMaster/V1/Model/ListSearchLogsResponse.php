<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSearchLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSearchLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * analysisResults  analysisResults
    * count  查询结果的条数
    * results  返回的查询结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'analysisResults' => '\HuaweiCloud\SDK\SecMaster\V1\Model\AnalysisResults',
            'count' => 'int',
            'results' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SearchResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * analysisResults  analysisResults
    * count  查询结果的条数
    * results  返回的查询结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'analysisResults' => null,
        'count' => 'int64',
        'results' => null
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
    * analysisResults  analysisResults
    * count  查询结果的条数
    * results  返回的查询结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'analysisResults' => 'analysis_results',
            'count' => 'count',
            'results' => 'results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * analysisResults  analysisResults
    * count  查询结果的条数
    * results  返回的查询结果
    *
    * @var string[]
    */
    protected static $setters = [
            'analysisResults' => 'setAnalysisResults',
            'count' => 'setCount',
            'results' => 'setResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * analysisResults  analysisResults
    * count  查询结果的条数
    * results  返回的查询结果
    *
    * @var string[]
    */
    protected static $getters = [
            'analysisResults' => 'getAnalysisResults',
            'count' => 'getCount',
            'results' => 'getResults'
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
        $this->container['analysisResults'] = isset($data['analysisResults']) ? $data['analysisResults'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets analysisResults
    *  analysisResults
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\AnalysisResults|null
    */
    public function getAnalysisResults()
    {
        return $this->container['analysisResults'];
    }

    /**
    * Sets analysisResults
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\AnalysisResults|null $analysisResults analysisResults
    *
    * @return $this
    */
    public function setAnalysisResults($analysisResults)
    {
        $this->container['analysisResults'] = $analysisResults;
        return $this;
    }

    /**
    * Gets count
    *  查询结果的条数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 查询结果的条数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets results
    *  返回的查询结果
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SearchResult[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SearchResult[]|null $results 返回的查询结果
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
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

