<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityRiskResponseBaselineRisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityRiskResponse_baseline_risk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskList  **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
    * policyList  **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    * existedPwdHostNum  **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    * unScannedBaselineHostNum  **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskList' => '\HuaweiCloud\SDK\Hss\V5\Model\RiskListInfo[]',
            'deductScore' => 'float',
            'policyList' => '\HuaweiCloud\SDK\Hss\V5\Model\PolicyInfo[]',
            'existedPwdHostNum' => 'int',
            'unScannedBaselineHostNum' => 'int',
            'totalRiskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskList  **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
    * policyList  **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    * existedPwdHostNum  **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    * unScannedBaselineHostNum  **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskList' => null,
        'deductScore' => 'float',
        'policyList' => null,
        'existedPwdHostNum' => 'int32',
        'unScannedBaselineHostNum' => 'int32',
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
    * riskList  **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
    * policyList  **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    * existedPwdHostNum  **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    * unScannedBaselineHostNum  **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskList' => 'risk_list',
            'deductScore' => 'deduct_score',
            'policyList' => 'policy_list',
            'existedPwdHostNum' => 'existed_pwd_host_num',
            'unScannedBaselineHostNum' => 'un_scanned_baseline_host_num',
            'totalRiskNum' => 'total_risk_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskList  **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
    * policyList  **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    * existedPwdHostNum  **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    * unScannedBaselineHostNum  **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'riskList' => 'setRiskList',
            'deductScore' => 'setDeductScore',
            'policyList' => 'setPolicyList',
            'existedPwdHostNum' => 'setExistedPwdHostNum',
            'unScannedBaselineHostNum' => 'setUnScannedBaselineHostNum',
            'totalRiskNum' => 'setTotalRiskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskList  **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    * deductScore  **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
    * policyList  **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    * existedPwdHostNum  **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    * unScannedBaselineHostNum  **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'riskList' => 'getRiskList',
            'deductScore' => 'getDeductScore',
            'policyList' => 'getPolicyList',
            'existedPwdHostNum' => 'getExistedPwdHostNum',
            'unScannedBaselineHostNum' => 'getUnScannedBaselineHostNum',
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
        $this->container['riskList'] = isset($data['riskList']) ? $data['riskList'] : null;
        $this->container['deductScore'] = isset($data['deductScore']) ? $data['deductScore'] : null;
        $this->container['policyList'] = isset($data['policyList']) ? $data['policyList'] : null;
        $this->container['existedPwdHostNum'] = isset($data['existedPwdHostNum']) ? $data['existedPwdHostNum'] : null;
        $this->container['unScannedBaselineHostNum'] = isset($data['unScannedBaselineHostNum']) ? $data['unScannedBaselineHostNum'] : null;
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
            if (!is_null($this->container['deductScore']) && ($this->container['deductScore'] > 2E+1)) {
                $invalidProperties[] = "invalid value for 'deductScore', must be smaller than or equal to 2E+1.";
            }
            if (!is_null($this->container['deductScore']) && ($this->container['deductScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'deductScore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['existedPwdHostNum']) && ($this->container['existedPwdHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'existedPwdHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['existedPwdHostNum']) && ($this->container['existedPwdHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'existedPwdHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unScannedBaselineHostNum']) && ($this->container['unScannedBaselineHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unScannedBaselineHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unScannedBaselineHostNum']) && ($this->container['unScannedBaselineHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unScannedBaselineHostNum', must be bigger than or equal to 0.";
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
    * Gets riskList
    *  **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RiskListInfo[]|null
    */
    public function getRiskList()
    {
        return $this->container['riskList'];
    }

    /**
    * Sets riskList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RiskListInfo[]|null $riskList **参数解释**： 基线风险列表 **取值范围**: 最小值0，最大值4
    *
    * @return $this
    */
    public function setRiskList($riskList)
    {
        $this->container['riskList'] = $riskList;
        return $this;
    }

    /**
    * Gets deductScore
    *  **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
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
    * @param float|null $deductScore **参数解释**： 扣分 **取值范围**: 最小值0，最大值20
    *
    * @return $this
    */
    public function setDeductScore($deductScore)
    {
        $this->container['deductScore'] = $deductScore;
        return $this;
    }

    /**
    * Gets policyList
    *  **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PolicyInfo[]|null
    */
    public function getPolicyList()
    {
        return $this->container['policyList'];
    }

    /**
    * Sets policyList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PolicyInfo[]|null $policyList **参数解释**： 未开启的策略列表 **取值范围**: 最小值0，最大值32
    *
    * @return $this
    */
    public function setPolicyList($policyList)
    {
        $this->container['policyList'] = $policyList;
        return $this;
    }

    /**
    * Gets existedPwdHostNum
    *  **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getExistedPwdHostNum()
    {
        return $this->container['existedPwdHostNum'];
    }

    /**
    * Sets existedPwdHostNum
    *
    * @param int|null $existedPwdHostNum **参数解释**： 存在弱口令主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setExistedPwdHostNum($existedPwdHostNum)
    {
        $this->container['existedPwdHostNum'] = $existedPwdHostNum;
        return $this;
    }

    /**
    * Gets unScannedBaselineHostNum
    *  **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnScannedBaselineHostNum()
    {
        return $this->container['unScannedBaselineHostNum'];
    }

    /**
    * Sets unScannedBaselineHostNum
    *
    * @param int|null $unScannedBaselineHostNum **参数解释**： 未进行基线配置检查的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnScannedBaselineHostNum($unScannedBaselineHostNum)
    {
        $this->container['unScannedBaselineHostNum'] = $unScannedBaselineHostNum;
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

