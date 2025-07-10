<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BestPracticeOverviewItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BestPracticeOverviewItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  分数
    * detectionCount  检测项个数
    * highRiskCount  高风险项个数
    * mediumRiskCount  中风险项个数
    * lowRiskCount  低风险项个数
    * riskItemDescription  风险描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'float',
            'detectionCount' => 'int',
            'highRiskCount' => 'int',
            'mediumRiskCount' => 'int',
            'lowRiskCount' => 'int',
            'riskItemDescription' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  分数
    * detectionCount  检测项个数
    * highRiskCount  高风险项个数
    * mediumRiskCount  中风险项个数
    * lowRiskCount  低风险项个数
    * riskItemDescription  风险描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => null,
        'detectionCount' => null,
        'highRiskCount' => null,
        'mediumRiskCount' => null,
        'lowRiskCount' => null,
        'riskItemDescription' => null
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
    * score  分数
    * detectionCount  检测项个数
    * highRiskCount  高风险项个数
    * mediumRiskCount  中风险项个数
    * lowRiskCount  低风险项个数
    * riskItemDescription  风险描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'detectionCount' => 'detection_count',
            'highRiskCount' => 'high_risk_count',
            'mediumRiskCount' => 'medium_risk_count',
            'lowRiskCount' => 'low_risk_count',
            'riskItemDescription' => 'risk_item_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  分数
    * detectionCount  检测项个数
    * highRiskCount  高风险项个数
    * mediumRiskCount  中风险项个数
    * lowRiskCount  低风险项个数
    * riskItemDescription  风险描述
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'detectionCount' => 'setDetectionCount',
            'highRiskCount' => 'setHighRiskCount',
            'mediumRiskCount' => 'setMediumRiskCount',
            'lowRiskCount' => 'setLowRiskCount',
            'riskItemDescription' => 'setRiskItemDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  分数
    * detectionCount  检测项个数
    * highRiskCount  高风险项个数
    * mediumRiskCount  中风险项个数
    * lowRiskCount  低风险项个数
    * riskItemDescription  风险描述
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'detectionCount' => 'getDetectionCount',
            'highRiskCount' => 'getHighRiskCount',
            'mediumRiskCount' => 'getMediumRiskCount',
            'lowRiskCount' => 'getLowRiskCount',
            'riskItemDescription' => 'getRiskItemDescription'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['detectionCount'] = isset($data['detectionCount']) ? $data['detectionCount'] : null;
        $this->container['highRiskCount'] = isset($data['highRiskCount']) ? $data['highRiskCount'] : null;
        $this->container['mediumRiskCount'] = isset($data['mediumRiskCount']) ? $data['mediumRiskCount'] : null;
        $this->container['lowRiskCount'] = isset($data['lowRiskCount']) ? $data['lowRiskCount'] : null;
        $this->container['riskItemDescription'] = isset($data['riskItemDescription']) ? $data['riskItemDescription'] : null;
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
    * Gets score
    *  分数
    *
    * @return float|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param float|null $score 分数
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets detectionCount
    *  检测项个数
    *
    * @return int|null
    */
    public function getDetectionCount()
    {
        return $this->container['detectionCount'];
    }

    /**
    * Sets detectionCount
    *
    * @param int|null $detectionCount 检测项个数
    *
    * @return $this
    */
    public function setDetectionCount($detectionCount)
    {
        $this->container['detectionCount'] = $detectionCount;
        return $this;
    }

    /**
    * Gets highRiskCount
    *  高风险项个数
    *
    * @return int|null
    */
    public function getHighRiskCount()
    {
        return $this->container['highRiskCount'];
    }

    /**
    * Sets highRiskCount
    *
    * @param int|null $highRiskCount 高风险项个数
    *
    * @return $this
    */
    public function setHighRiskCount($highRiskCount)
    {
        $this->container['highRiskCount'] = $highRiskCount;
        return $this;
    }

    /**
    * Gets mediumRiskCount
    *  中风险项个数
    *
    * @return int|null
    */
    public function getMediumRiskCount()
    {
        return $this->container['mediumRiskCount'];
    }

    /**
    * Sets mediumRiskCount
    *
    * @param int|null $mediumRiskCount 中风险项个数
    *
    * @return $this
    */
    public function setMediumRiskCount($mediumRiskCount)
    {
        $this->container['mediumRiskCount'] = $mediumRiskCount;
        return $this;
    }

    /**
    * Gets lowRiskCount
    *  低风险项个数
    *
    * @return int|null
    */
    public function getLowRiskCount()
    {
        return $this->container['lowRiskCount'];
    }

    /**
    * Sets lowRiskCount
    *
    * @param int|null $lowRiskCount 低风险项个数
    *
    * @return $this
    */
    public function setLowRiskCount($lowRiskCount)
    {
        $this->container['lowRiskCount'] = $lowRiskCount;
        return $this;
    }

    /**
    * Gets riskItemDescription
    *  风险描述
    *
    * @return string[]|null
    */
    public function getRiskItemDescription()
    {
        return $this->container['riskItemDescription'];
    }

    /**
    * Sets riskItemDescription
    *
    * @param string[]|null $riskItemDescription 风险描述
    *
    * @return $this
    */
    public function setRiskItemDescription($riskItemDescription)
    {
        $this->container['riskItemDescription'] = $riskItemDescription;
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

