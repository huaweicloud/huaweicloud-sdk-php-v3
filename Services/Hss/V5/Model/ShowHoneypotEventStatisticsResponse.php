<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHoneypotEventStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHoneypotEventStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskyHostNum  **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    * protectionHostNum  **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * criticalRiskyNum  **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    * highRiskyNum  **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    * mediumRiskyNum  **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    * lowRiskyNum  **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskyHostNum' => 'int',
            'protectionHostNum' => 'int',
            'criticalRiskyNum' => 'int',
            'highRiskyNum' => 'int',
            'mediumRiskyNum' => 'int',
            'lowRiskyNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskyHostNum  **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    * protectionHostNum  **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * criticalRiskyNum  **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    * highRiskyNum  **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    * mediumRiskyNum  **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    * lowRiskyNum  **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskyHostNum' => 'int32',
        'protectionHostNum' => 'int32',
        'criticalRiskyNum' => 'int32',
        'highRiskyNum' => 'int32',
        'mediumRiskyNum' => 'int32',
        'lowRiskyNum' => 'int32'
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
    * riskyHostNum  **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    * protectionHostNum  **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * criticalRiskyNum  **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    * highRiskyNum  **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    * mediumRiskyNum  **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    * lowRiskyNum  **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskyHostNum' => 'risky_host_num',
            'protectionHostNum' => 'protection_host_num',
            'criticalRiskyNum' => 'critical_risky_num',
            'highRiskyNum' => 'high_risky_num',
            'mediumRiskyNum' => 'medium_risky_num',
            'lowRiskyNum' => 'low_risky_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskyHostNum  **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    * protectionHostNum  **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * criticalRiskyNum  **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    * highRiskyNum  **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    * mediumRiskyNum  **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    * lowRiskyNum  **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'riskyHostNum' => 'setRiskyHostNum',
            'protectionHostNum' => 'setProtectionHostNum',
            'criticalRiskyNum' => 'setCriticalRiskyNum',
            'highRiskyNum' => 'setHighRiskyNum',
            'mediumRiskyNum' => 'setMediumRiskyNum',
            'lowRiskyNum' => 'setLowRiskyNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskyHostNum  **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    * protectionHostNum  **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * criticalRiskyNum  **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    * highRiskyNum  **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    * mediumRiskyNum  **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    * lowRiskyNum  **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'riskyHostNum' => 'getRiskyHostNum',
            'protectionHostNum' => 'getProtectionHostNum',
            'criticalRiskyNum' => 'getCriticalRiskyNum',
            'highRiskyNum' => 'getHighRiskyNum',
            'mediumRiskyNum' => 'getMediumRiskyNum',
            'lowRiskyNum' => 'getLowRiskyNum'
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
        $this->container['riskyHostNum'] = isset($data['riskyHostNum']) ? $data['riskyHostNum'] : null;
        $this->container['protectionHostNum'] = isset($data['protectionHostNum']) ? $data['protectionHostNum'] : null;
        $this->container['criticalRiskyNum'] = isset($data['criticalRiskyNum']) ? $data['criticalRiskyNum'] : null;
        $this->container['highRiskyNum'] = isset($data['highRiskyNum']) ? $data['highRiskyNum'] : null;
        $this->container['mediumRiskyNum'] = isset($data['mediumRiskyNum']) ? $data['mediumRiskyNum'] : null;
        $this->container['lowRiskyNum'] = isset($data['lowRiskyNum']) ? $data['lowRiskyNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['riskyHostNum']) && ($this->container['riskyHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskyHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskyHostNum']) && ($this->container['riskyHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectionHostNum']) && ($this->container['protectionHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectionHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectionHostNum']) && ($this->container['protectionHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectionHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['criticalRiskyNum']) && ($this->container['criticalRiskyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'criticalRiskyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['criticalRiskyNum']) && ($this->container['criticalRiskyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'criticalRiskyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highRiskyNum']) && ($this->container['highRiskyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highRiskyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highRiskyNum']) && ($this->container['highRiskyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'highRiskyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mediumRiskyNum']) && ($this->container['mediumRiskyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mediumRiskyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mediumRiskyNum']) && ($this->container['mediumRiskyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'mediumRiskyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lowRiskyNum']) && ($this->container['lowRiskyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lowRiskyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lowRiskyNum']) && ($this->container['lowRiskyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'lowRiskyNum', must be bigger than or equal to 0.";
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
    * Gets riskyHostNum
    *  **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRiskyHostNum()
    {
        return $this->container['riskyHostNum'];
    }

    /**
    * Sets riskyHostNum
    *
    * @param int|null $riskyHostNum **参数解释**： 存在风险的服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskyHostNum($riskyHostNum)
    {
        $this->container['riskyHostNum'] = $riskyHostNum;
        return $this;
    }

    /**
    * Gets protectionHostNum
    *  **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectionHostNum()
    {
        return $this->container['protectionHostNum'];
    }

    /**
    * Sets protectionHostNum
    *
    * @param int|null $protectionHostNum **参数解释**： 防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectionHostNum($protectionHostNum)
    {
        $this->container['protectionHostNum'] = $protectionHostNum;
        return $this;
    }

    /**
    * Gets criticalRiskyNum
    *  **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCriticalRiskyNum()
    {
        return $this->container['criticalRiskyNum'];
    }

    /**
    * Sets criticalRiskyNum
    *
    * @param int|null $criticalRiskyNum **参数解释**： 致命风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCriticalRiskyNum($criticalRiskyNum)
    {
        $this->container['criticalRiskyNum'] = $criticalRiskyNum;
        return $this;
    }

    /**
    * Gets highRiskyNum
    *  **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHighRiskyNum()
    {
        return $this->container['highRiskyNum'];
    }

    /**
    * Sets highRiskyNum
    *
    * @param int|null $highRiskyNum **参数解释**： 高危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHighRiskyNum($highRiskyNum)
    {
        $this->container['highRiskyNum'] = $highRiskyNum;
        return $this;
    }

    /**
    * Gets mediumRiskyNum
    *  **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMediumRiskyNum()
    {
        return $this->container['mediumRiskyNum'];
    }

    /**
    * Sets mediumRiskyNum
    *
    * @param int|null $mediumRiskyNum **参数解释**： 中危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMediumRiskyNum($mediumRiskyNum)
    {
        $this->container['mediumRiskyNum'] = $mediumRiskyNum;
        return $this;
    }

    /**
    * Gets lowRiskyNum
    *  **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLowRiskyNum()
    {
        return $this->container['lowRiskyNum'];
    }

    /**
    * Sets lowRiskyNum
    *
    * @param int|null $lowRiskyNum **参数解释**： 低危风险数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLowRiskyNum($lowRiskyNum)
    {
        $this->container['lowRiskyNum'] = $lowRiskyNum;
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

