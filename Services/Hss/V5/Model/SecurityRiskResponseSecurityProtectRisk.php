<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityRiskResponseSecurityProtectRisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityRiskResponse_security_protect_risk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unOpenProtectionHostNum  **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unOpenProtectionHostNum' => 'int',
            'deductScore' => 'float',
            'totalRiskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unOpenProtectionHostNum  **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unOpenProtectionHostNum' => 'int32',
        'deductScore' => 'float',
        'totalRiskNum' => 'int32'
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
    * unOpenProtectionHostNum  **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unOpenProtectionHostNum' => 'un_open_protection_host_num',
            'deductScore' => 'deduct_score',
            'totalRiskNum' => 'total_risk_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unOpenProtectionHostNum  **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'unOpenProtectionHostNum' => 'setUnOpenProtectionHostNum',
            'deductScore' => 'setDeductScore',
            'totalRiskNum' => 'setTotalRiskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unOpenProtectionHostNum  **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'unOpenProtectionHostNum' => 'getUnOpenProtectionHostNum',
            'deductScore' => 'getDeductScore',
            'totalRiskNum' => 'getTotalRiskNum'
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
        $this->container['unOpenProtectionHostNum'] = isset($data['unOpenProtectionHostNum']) ? $data['unOpenProtectionHostNum'] : null;
        $this->container['deductScore'] = isset($data['deductScore']) ? $data['deductScore'] : null;
        $this->container['totalRiskNum'] = isset($data['totalRiskNum']) ? $data['totalRiskNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unOpenProtectionHostNum']) && ($this->container['unOpenProtectionHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unOpenProtectionHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unOpenProtectionHostNum']) && ($this->container['unOpenProtectionHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unOpenProtectionHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deductScore']) && ($this->container['deductScore'] > 1E+1)) {
                $invalidProperties[] = "invalid value for 'deductScore', must be smaller than or equal to 1E+1.";
            }
            if (!is_null($this->container['deductScore']) && ($this->container['deductScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'deductScore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalRiskNum']) && ($this->container['totalRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalRiskNum']) && ($this->container['totalRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalRiskNum', must be bigger than or equal to 0.";
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
    * Gets unOpenProtectionHostNum
    *  **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnOpenProtectionHostNum()
    {
        return $this->container['unOpenProtectionHostNum'];
    }

    /**
    * Sets unOpenProtectionHostNum
    *
    * @param int|null $unOpenProtectionHostNum **参数解释**： 未开主机安全防护主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnOpenProtectionHostNum($unOpenProtectionHostNum)
    {
        $this->container['unOpenProtectionHostNum'] = $unOpenProtectionHostNum;
        return $this;
    }

    /**
    * Gets deductScore
    *  **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    *
    * @return float|null
    */
    public function getDeductScore()
    {
        return $this->container['deductScore'];
    }

    /**
    * Sets deductScore
    *
    * @param float|null $deductScore **参数解释**： 扣分 **取值范围**: 最小值0，最大值10
    *
    * @return $this
    */
    public function setDeductScore($deductScore)
    {
        $this->container['deductScore'] = $deductScore;
        return $this;
    }

    /**
    * Gets totalRiskNum
    *  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalRiskNum()
    {
        return $this->container['totalRiskNum'];
    }

    /**
    * Sets totalRiskNum
    *
    * @param int|null $totalRiskNum **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalRiskNum($totalRiskNum)
    {
        $this->container['totalRiskNum'] = $totalRiskNum;
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

