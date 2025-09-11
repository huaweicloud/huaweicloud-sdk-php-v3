<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskStatisticsBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskStatisticsBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * highRiskNum  高风险数量
    * lowRiskNum  低风险数量
    * middleRiskNum  中风险数量
    * noRiskNum  无风险数量
    * period  周期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'highRiskNum' => 'int',
            'lowRiskNum' => 'int',
            'middleRiskNum' => 'int',
            'noRiskNum' => 'int',
            'period' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * highRiskNum  高风险数量
    * lowRiskNum  低风险数量
    * middleRiskNum  中风险数量
    * noRiskNum  无风险数量
    * period  周期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'highRiskNum' => 'int64',
        'lowRiskNum' => 'int64',
        'middleRiskNum' => 'int64',
        'noRiskNum' => 'int64',
        'period' => null
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
    * highRiskNum  高风险数量
    * lowRiskNum  低风险数量
    * middleRiskNum  中风险数量
    * noRiskNum  无风险数量
    * period  周期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'highRiskNum' => 'high_risk_num',
            'lowRiskNum' => 'low_risk_num',
            'middleRiskNum' => 'middle_risk_num',
            'noRiskNum' => 'no_risk_num',
            'period' => 'period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * highRiskNum  高风险数量
    * lowRiskNum  低风险数量
    * middleRiskNum  中风险数量
    * noRiskNum  无风险数量
    * period  周期
    *
    * @var string[]
    */
    protected static $setters = [
            'highRiskNum' => 'setHighRiskNum',
            'lowRiskNum' => 'setLowRiskNum',
            'middleRiskNum' => 'setMiddleRiskNum',
            'noRiskNum' => 'setNoRiskNum',
            'period' => 'setPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * highRiskNum  高风险数量
    * lowRiskNum  低风险数量
    * middleRiskNum  中风险数量
    * noRiskNum  无风险数量
    * period  周期
    *
    * @var string[]
    */
    protected static $getters = [
            'highRiskNum' => 'getHighRiskNum',
            'lowRiskNum' => 'getLowRiskNum',
            'middleRiskNum' => 'getMiddleRiskNum',
            'noRiskNum' => 'getNoRiskNum',
            'period' => 'getPeriod'
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
        $this->container['highRiskNum'] = isset($data['highRiskNum']) ? $data['highRiskNum'] : null;
        $this->container['lowRiskNum'] = isset($data['lowRiskNum']) ? $data['lowRiskNum'] : null;
        $this->container['middleRiskNum'] = isset($data['middleRiskNum']) ? $data['middleRiskNum'] : null;
        $this->container['noRiskNum'] = isset($data['noRiskNum']) ? $data['noRiskNum'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
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
    * Gets highRiskNum
    *  高风险数量
    *
    * @return int|null
    */
    public function getHighRiskNum()
    {
        return $this->container['highRiskNum'];
    }

    /**
    * Sets highRiskNum
    *
    * @param int|null $highRiskNum 高风险数量
    *
    * @return $this
    */
    public function setHighRiskNum($highRiskNum)
    {
        $this->container['highRiskNum'] = $highRiskNum;
        return $this;
    }

    /**
    * Gets lowRiskNum
    *  低风险数量
    *
    * @return int|null
    */
    public function getLowRiskNum()
    {
        return $this->container['lowRiskNum'];
    }

    /**
    * Sets lowRiskNum
    *
    * @param int|null $lowRiskNum 低风险数量
    *
    * @return $this
    */
    public function setLowRiskNum($lowRiskNum)
    {
        $this->container['lowRiskNum'] = $lowRiskNum;
        return $this;
    }

    /**
    * Gets middleRiskNum
    *  中风险数量
    *
    * @return int|null
    */
    public function getMiddleRiskNum()
    {
        return $this->container['middleRiskNum'];
    }

    /**
    * Sets middleRiskNum
    *
    * @param int|null $middleRiskNum 中风险数量
    *
    * @return $this
    */
    public function setMiddleRiskNum($middleRiskNum)
    {
        $this->container['middleRiskNum'] = $middleRiskNum;
        return $this;
    }

    /**
    * Gets noRiskNum
    *  无风险数量
    *
    * @return int|null
    */
    public function getNoRiskNum()
    {
        return $this->container['noRiskNum'];
    }

    /**
    * Sets noRiskNum
    *
    * @param int|null $noRiskNum 无风险数量
    *
    * @return $this
    */
    public function setNoRiskNum($noRiskNum)
    {
        $this->container['noRiskNum'] = $noRiskNum;
        return $this;
    }

    /**
    * Gets period
    *  周期
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
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

