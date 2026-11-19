<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerRiskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerRiskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * vulTotalNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * criticalVulNum  **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baselineRiskNum' => 'int',
            'vulTotalNum' => 'int',
            'criticalVulNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * vulTotalNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * criticalVulNum  **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baselineRiskNum' => 'int32',
        'vulTotalNum' => 'int32',
        'criticalVulNum' => 'int32'
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
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * vulTotalNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * criticalVulNum  **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baselineRiskNum' => 'baseline_risk_num',
            'vulTotalNum' => 'vul_total_num',
            'criticalVulNum' => 'critical_vul_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * vulTotalNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * criticalVulNum  **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'baselineRiskNum' => 'setBaselineRiskNum',
            'vulTotalNum' => 'setVulTotalNum',
            'criticalVulNum' => 'setCriticalVulNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * vulTotalNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * criticalVulNum  **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'baselineRiskNum' => 'getBaselineRiskNum',
            'vulTotalNum' => 'getVulTotalNum',
            'criticalVulNum' => 'getCriticalVulNum'
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
        $this->container['baselineRiskNum'] = isset($data['baselineRiskNum']) ? $data['baselineRiskNum'] : null;
        $this->container['vulTotalNum'] = isset($data['vulTotalNum']) ? $data['vulTotalNum'] : null;
        $this->container['criticalVulNum'] = isset($data['criticalVulNum']) ? $data['criticalVulNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['baselineRiskNum']) && ($this->container['baselineRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'baselineRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['baselineRiskNum']) && ($this->container['baselineRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'baselineRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulTotalNum']) && ($this->container['vulTotalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulTotalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulTotalNum']) && ($this->container['vulTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['criticalVulNum']) && ($this->container['criticalVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'criticalVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['criticalVulNum']) && ($this->container['criticalVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'criticalVulNum', must be bigger than or equal to 0.";
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
    * Gets baselineRiskNum
    *  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getBaselineRiskNum()
    {
        return $this->container['baselineRiskNum'];
    }

    /**
    * Sets baselineRiskNum
    *
    * @param int|null $baselineRiskNum **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setBaselineRiskNum($baselineRiskNum)
    {
        $this->container['baselineRiskNum'] = $baselineRiskNum;
        return $this;
    }

    /**
    * Gets vulTotalNum
    *  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulTotalNum()
    {
        return $this->container['vulTotalNum'];
    }

    /**
    * Sets vulTotalNum
    *
    * @param int|null $vulTotalNum **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulTotalNum($vulTotalNum)
    {
        $this->container['vulTotalNum'] = $vulTotalNum;
        return $this;
    }

    /**
    * Gets criticalVulNum
    *  **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCriticalVulNum()
    {
        return $this->container['criticalVulNum'];
    }

    /**
    * Sets criticalVulNum
    *
    * @param int|null $criticalVulNum **参数解释**: 紧急漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCriticalVulNum($criticalVulNum)
    {
        $this->container['criticalVulNum'] = $criticalVulNum;
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

