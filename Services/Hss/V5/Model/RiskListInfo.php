<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * riskNum  **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
    * effectedHostNum  **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'riskNum' => 'int',
            'effectedHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * riskNum  **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
    * effectedHostNum  **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'riskNum' => null,
        'effectedHostNum' => null
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
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * riskNum  **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
    * effectedHostNum  **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'riskNum' => 'risk_num',
            'effectedHostNum' => 'effected_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * riskNum  **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
    * effectedHostNum  **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'riskNum' => 'setRiskNum',
            'effectedHostNum' => 'setEffectedHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * riskNum  **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
    * effectedHostNum  **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'riskNum' => 'getRiskNum',
            'effectedHostNum' => 'getEffectedHostNum'
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['effectedHostNum'] = isset($data['effectedHostNum']) ? $data['effectedHostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectedHostNum']) && ($this->container['effectedHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'effectedHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['effectedHostNum']) && ($this->container['effectedHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'effectedHostNum', must be bigger than or equal to 0.";
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
    * Gets severity
    *  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets riskNum
    *  **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $riskNum **参数解释**： 风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets effectedHostNum
    *  **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getEffectedHostNum()
    {
        return $this->container['effectedHostNum'];
    }

    /**
    * Sets effectedHostNum
    *
    * @param int|null $effectedHostNum **参数解释**： 受影响资产数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setEffectedHostNum($effectedHostNum)
    {
        $this->container['effectedHostNum'] = $effectedHostNum;
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

