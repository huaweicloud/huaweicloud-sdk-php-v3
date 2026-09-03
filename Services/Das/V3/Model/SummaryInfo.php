<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SummaryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SummaryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * analysisResults  分析结果列表
    * healthRank  健康等级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'analysisResults' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportAnalysisResult[]',
            'healthRank' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * analysisResults  分析结果列表
    * healthRank  健康等级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'analysisResults' => null,
        'healthRank' => null
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
    * analysisResults  分析结果列表
    * healthRank  健康等级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'analysisResults' => 'analysis_results',
            'healthRank' => 'health_rank'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * analysisResults  分析结果列表
    * healthRank  健康等级
    *
    * @var string[]
    */
    protected static $setters = [
            'analysisResults' => 'setAnalysisResults',
            'healthRank' => 'setHealthRank'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * analysisResults  分析结果列表
    * healthRank  健康等级
    *
    * @var string[]
    */
    protected static $getters = [
            'analysisResults' => 'getAnalysisResults',
            'healthRank' => 'getHealthRank'
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
        $this->container['healthRank'] = isset($data['healthRank']) ? $data['healthRank'] : null;
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
    * Gets analysisResults
    *  分析结果列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportAnalysisResult[]|null
    */
    public function getAnalysisResults()
    {
        return $this->container['analysisResults'];
    }

    /**
    * Sets analysisResults
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportAnalysisResult[]|null $analysisResults 分析结果列表
    *
    * @return $this
    */
    public function setAnalysisResults($analysisResults)
    {
        $this->container['analysisResults'] = $analysisResults;
        return $this;
    }

    /**
    * Gets healthRank
    *  健康等级
    *
    * @return string|null
    */
    public function getHealthRank()
    {
        return $this->container['healthRank'];
    }

    /**
    * Sets healthRank
    *
    * @param string|null $healthRank 健康等级
    *
    * @return $this
    */
    public function setHealthRank($healthRank)
    {
        $this->container['healthRank'] = $healthRank;
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

