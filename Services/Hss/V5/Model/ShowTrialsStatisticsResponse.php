<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTrialsStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTrialsStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trialNum  **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    * unprotectedNum  **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    * asset  **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    * vulnerability  **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    * intrusion  **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    * baseline  **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trialNum' => 'int',
            'unprotectedNum' => 'int',
            'asset' => 'int',
            'vulnerability' => 'int',
            'intrusion' => 'int',
            'baseline' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trialNum  **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    * unprotectedNum  **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    * asset  **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    * vulnerability  **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    * intrusion  **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    * baseline  **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trialNum' => 'int32',
        'unprotectedNum' => 'int32',
        'asset' => 'int32',
        'vulnerability' => 'int32',
        'intrusion' => 'int32',
        'baseline' => 'int32'
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
    * trialNum  **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    * unprotectedNum  **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    * asset  **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    * vulnerability  **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    * intrusion  **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    * baseline  **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trialNum' => 'trial_num',
            'unprotectedNum' => 'unprotected_num',
            'asset' => 'asset',
            'vulnerability' => 'vulnerability',
            'intrusion' => 'intrusion',
            'baseline' => 'baseline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trialNum  **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    * unprotectedNum  **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    * asset  **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    * vulnerability  **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    * intrusion  **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    * baseline  **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'trialNum' => 'setTrialNum',
            'unprotectedNum' => 'setUnprotectedNum',
            'asset' => 'setAsset',
            'vulnerability' => 'setVulnerability',
            'intrusion' => 'setIntrusion',
            'baseline' => 'setBaseline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trialNum  **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    * unprotectedNum  **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    * asset  **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    * vulnerability  **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    * intrusion  **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    * baseline  **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'trialNum' => 'getTrialNum',
            'unprotectedNum' => 'getUnprotectedNum',
            'asset' => 'getAsset',
            'vulnerability' => 'getVulnerability',
            'intrusion' => 'getIntrusion',
            'baseline' => 'getBaseline'
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
        $this->container['trialNum'] = isset($data['trialNum']) ? $data['trialNum'] : null;
        $this->container['unprotectedNum'] = isset($data['unprotectedNum']) ? $data['unprotectedNum'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['vulnerability'] = isset($data['vulnerability']) ? $data['vulnerability'] : null;
        $this->container['intrusion'] = isset($data['intrusion']) ? $data['intrusion'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['trialNum']) && ($this->container['trialNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trialNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trialNum']) && ($this->container['trialNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'trialNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unprotectedNum']) && ($this->container['unprotectedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unprotectedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unprotectedNum']) && ($this->container['unprotectedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'asset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] < 0)) {
                $invalidProperties[] = "invalid value for 'asset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] < 0)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baseline']) && ($this->container['baseline'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'baseline', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['baseline']) && ($this->container['baseline'] < 0)) {
                $invalidProperties[] = "invalid value for 'baseline', must be bigger than or equal to 0.";
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
    * Gets trialNum
    *  **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTrialNum()
    {
        return $this->container['trialNum'];
    }

    /**
    * Sets trialNum
    *
    * @param int|null $trialNum **参数解释**: 试用主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTrialNum($trialNum)
    {
        $this->container['trialNum'] = $trialNum;
        return $this;
    }

    /**
    * Gets unprotectedNum
    *  **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnprotectedNum()
    {
        return $this->container['unprotectedNum'];
    }

    /**
    * Sets unprotectedNum
    *
    * @param int|null $unprotectedNum **参数解释**: 未防护数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnprotectedNum($unprotectedNum)
    {
        $this->container['unprotectedNum'] = $unprotectedNum;
        return $this;
    }

    /**
    * Gets asset
    *  **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
    * Sets asset
    *
    * @param int|null $asset **参数解释**: 资产风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;
        return $this;
    }

    /**
    * Gets vulnerability
    *  **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulnerability()
    {
        return $this->container['vulnerability'];
    }

    /**
    * Sets vulnerability
    *
    * @param int|null $vulnerability **参数解释**: 漏洞风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulnerability($vulnerability)
    {
        $this->container['vulnerability'] = $vulnerability;
        return $this;
    }

    /**
    * Gets intrusion
    *  **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getIntrusion()
    {
        return $this->container['intrusion'];
    }

    /**
    * Sets intrusion
    *
    * @param int|null $intrusion **参数解释**: 入侵事件个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setIntrusion($intrusion)
    {
        $this->container['intrusion'] = $intrusion;
        return $this;
    }

    /**
    * Gets baseline
    *  **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param int|null $baseline **参数解释**: 基线检测风险个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
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

