<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityCheckStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityCheckStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalHostNum  **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * highRiskHostNum  **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * mediumRiskHostNum  **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * lowRiskHostNum  **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * safeHostNum  **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalHostNum' => 'int',
            'riskHostNum' => 'int',
            'highRiskHostNum' => 'int',
            'mediumRiskHostNum' => 'int',
            'lowRiskHostNum' => 'int',
            'safeHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalHostNum  **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * highRiskHostNum  **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * mediumRiskHostNum  **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * lowRiskHostNum  **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * safeHostNum  **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalHostNum' => 'int32',
        'riskHostNum' => 'int32',
        'highRiskHostNum' => 'int32',
        'mediumRiskHostNum' => 'int32',
        'lowRiskHostNum' => 'int32',
        'safeHostNum' => 'int32'
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
    * totalHostNum  **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * highRiskHostNum  **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * mediumRiskHostNum  **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * lowRiskHostNum  **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * safeHostNum  **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalHostNum' => 'total_host_num',
            'riskHostNum' => 'risk_host_num',
            'highRiskHostNum' => 'high_risk_host_num',
            'mediumRiskHostNum' => 'medium_risk_host_num',
            'lowRiskHostNum' => 'low_risk_host_num',
            'safeHostNum' => 'safe_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalHostNum  **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * highRiskHostNum  **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * mediumRiskHostNum  **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * lowRiskHostNum  **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * safeHostNum  **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'totalHostNum' => 'setTotalHostNum',
            'riskHostNum' => 'setRiskHostNum',
            'highRiskHostNum' => 'setHighRiskHostNum',
            'mediumRiskHostNum' => 'setMediumRiskHostNum',
            'lowRiskHostNum' => 'setLowRiskHostNum',
            'safeHostNum' => 'setSafeHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalHostNum  **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * highRiskHostNum  **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * mediumRiskHostNum  **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * lowRiskHostNum  **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    * safeHostNum  **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'totalHostNum' => 'getTotalHostNum',
            'riskHostNum' => 'getRiskHostNum',
            'highRiskHostNum' => 'getHighRiskHostNum',
            'mediumRiskHostNum' => 'getMediumRiskHostNum',
            'lowRiskHostNum' => 'getLowRiskHostNum',
            'safeHostNum' => 'getSafeHostNum'
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
        $this->container['totalHostNum'] = isset($data['totalHostNum']) ? $data['totalHostNum'] : null;
        $this->container['riskHostNum'] = isset($data['riskHostNum']) ? $data['riskHostNum'] : null;
        $this->container['highRiskHostNum'] = isset($data['highRiskHostNum']) ? $data['highRiskHostNum'] : null;
        $this->container['mediumRiskHostNum'] = isset($data['mediumRiskHostNum']) ? $data['mediumRiskHostNum'] : null;
        $this->container['lowRiskHostNum'] = isset($data['lowRiskHostNum']) ? $data['lowRiskHostNum'] : null;
        $this->container['safeHostNum'] = isset($data['safeHostNum']) ? $data['safeHostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalHostNum']) && ($this->container['totalHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalHostNum']) && ($this->container['totalHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskHostNum']) && ($this->container['riskHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskHostNum']) && ($this->container['riskHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highRiskHostNum']) && ($this->container['highRiskHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highRiskHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highRiskHostNum']) && ($this->container['highRiskHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'highRiskHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mediumRiskHostNum']) && ($this->container['mediumRiskHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mediumRiskHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mediumRiskHostNum']) && ($this->container['mediumRiskHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'mediumRiskHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lowRiskHostNum']) && ($this->container['lowRiskHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lowRiskHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lowRiskHostNum']) && ($this->container['lowRiskHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'lowRiskHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['safeHostNum']) && ($this->container['safeHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'safeHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['safeHostNum']) && ($this->container['safeHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'safeHostNum', must be bigger than or equal to 0.";
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
    * Gets totalHostNum
    *  **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalHostNum()
    {
        return $this->container['totalHostNum'];
    }

    /**
    * Sets totalHostNum
    *
    * @param int|null $totalHostNum **参数解释**: 本次体检服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalHostNum($totalHostNum)
    {
        $this->container['totalHostNum'] = $totalHostNum;
        return $this;
    }

    /**
    * Gets riskHostNum
    *  **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRiskHostNum()
    {
        return $this->container['riskHostNum'];
    }

    /**
    * Sets riskHostNum
    *
    * @param int|null $riskHostNum **参数解释**: 有安全风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskHostNum($riskHostNum)
    {
        $this->container['riskHostNum'] = $riskHostNum;
        return $this;
    }

    /**
    * Gets highRiskHostNum
    *  **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHighRiskHostNum()
    {
        return $this->container['highRiskHostNum'];
    }

    /**
    * Sets highRiskHostNum
    *
    * @param int|null $highRiskHostNum **参数解释**: 高危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHighRiskHostNum($highRiskHostNum)
    {
        $this->container['highRiskHostNum'] = $highRiskHostNum;
        return $this;
    }

    /**
    * Gets mediumRiskHostNum
    *  **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMediumRiskHostNum()
    {
        return $this->container['mediumRiskHostNum'];
    }

    /**
    * Sets mediumRiskHostNum
    *
    * @param int|null $mediumRiskHostNum **参数解释**: 中危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMediumRiskHostNum($mediumRiskHostNum)
    {
        $this->container['mediumRiskHostNum'] = $mediumRiskHostNum;
        return $this;
    }

    /**
    * Gets lowRiskHostNum
    *  **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLowRiskHostNum()
    {
        return $this->container['lowRiskHostNum'];
    }

    /**
    * Sets lowRiskHostNum
    *
    * @param int|null $lowRiskHostNum **参数解释**: 低危风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLowRiskHostNum($lowRiskHostNum)
    {
        $this->container['lowRiskHostNum'] = $lowRiskHostNum;
        return $this;
    }

    /**
    * Gets safeHostNum
    *  **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSafeHostNum()
    {
        return $this->container['safeHostNum'];
    }

    /**
    * Sets safeHostNum
    *
    * @param int|null $safeHostNum **参数解释**: 无风险的服务器数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSafeHostNum($safeHostNum)
    {
        $this->container['safeHostNum'] = $safeHostNum;
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

