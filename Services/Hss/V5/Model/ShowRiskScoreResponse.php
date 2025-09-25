<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRiskScoreResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRiskScoreResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  安全评分
    * riskNum  安全风险个数
    * riskServerNum  安全风险主机个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'int',
            'riskNum' => 'int',
            'riskServerNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  安全评分
    * riskNum  安全风险个数
    * riskServerNum  安全风险主机个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => 'int32',
        'riskNum' => 'int32',
        'riskServerNum' => 'int32'
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
    * score  安全评分
    * riskNum  安全风险个数
    * riskServerNum  安全风险主机个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'riskNum' => 'risk_num',
            'riskServerNum' => 'risk_server_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  安全评分
    * riskNum  安全风险个数
    * riskServerNum  安全风险主机个数
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'riskNum' => 'setRiskNum',
            'riskServerNum' => 'setRiskServerNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  安全评分
    * riskNum  安全风险个数
    * riskServerNum  安全风险主机个数
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'riskNum' => 'getRiskNum',
            'riskServerNum' => 'getRiskServerNum'
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
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['riskServerNum'] = isset($data['riskServerNum']) ? $data['riskServerNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['score']) && ($this->container['score'] > 10000)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskServerNum']) && ($this->container['riskServerNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'riskServerNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['riskServerNum']) && ($this->container['riskServerNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskServerNum', must be bigger than or equal to 0.";
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
    * Gets score
    *  安全评分
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
    * @param int|null $score 安全评分
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets riskNum
    *  安全风险个数
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum 安全风险个数
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets riskServerNum
    *  安全风险主机个数
    *
    * @return int|null
    */
    public function getRiskServerNum()
    {
        return $this->container['riskServerNum'];
    }

    /**
    * Sets riskServerNum
    *
    * @param int|null $riskServerNum 安全风险主机个数
    *
    * @return $this
    */
    public function setRiskServerNum($riskServerNum)
    {
        $this->container['riskServerNum'] = $riskServerNum;
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

