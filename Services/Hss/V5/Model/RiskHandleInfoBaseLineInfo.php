<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskHandleInfoBaseLineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskHandleInfo_base_line_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configRiskHostNum  **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    * configRiskNum  **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    * passedRate  **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    * weakPwdNum  **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    * passedNum  **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    * totalConfigRiskNum  **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    * versionRecommend  **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configRiskHostNum' => 'int',
            'configRiskNum' => 'int',
            'passedRate' => 'float',
            'beatRate' => 'float',
            'weakPwdNum' => 'int',
            'passedNum' => 'int',
            'totalConfigRiskNum' => 'int',
            'versionRecommend' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configRiskHostNum  **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    * configRiskNum  **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    * passedRate  **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    * weakPwdNum  **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    * passedNum  **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    * totalConfigRiskNum  **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    * versionRecommend  **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configRiskHostNum' => 'int64',
        'configRiskNum' => 'int64',
        'passedRate' => 'float',
        'beatRate' => 'float',
        'weakPwdNum' => 'int64',
        'passedNum' => 'int64',
        'totalConfigRiskNum' => 'int64',
        'versionRecommend' => null
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
    * configRiskHostNum  **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    * configRiskNum  **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    * passedRate  **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    * weakPwdNum  **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    * passedNum  **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    * totalConfigRiskNum  **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    * versionRecommend  **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configRiskHostNum' => 'config_risk_host_num',
            'configRiskNum' => 'config_risk_num',
            'passedRate' => 'passed_rate',
            'beatRate' => 'beat_rate',
            'weakPwdNum' => 'weak_pwd_num',
            'passedNum' => 'passed_num',
            'totalConfigRiskNum' => 'total_config_risk_num',
            'versionRecommend' => 'version_recommend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configRiskHostNum  **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    * configRiskNum  **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    * passedRate  **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    * weakPwdNum  **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    * passedNum  **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    * totalConfigRiskNum  **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    * versionRecommend  **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @var string[]
    */
    protected static $setters = [
            'configRiskHostNum' => 'setConfigRiskHostNum',
            'configRiskNum' => 'setConfigRiskNum',
            'passedRate' => 'setPassedRate',
            'beatRate' => 'setBeatRate',
            'weakPwdNum' => 'setWeakPwdNum',
            'passedNum' => 'setPassedNum',
            'totalConfigRiskNum' => 'setTotalConfigRiskNum',
            'versionRecommend' => 'setVersionRecommend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configRiskHostNum  **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    * configRiskNum  **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    * passedRate  **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    * weakPwdNum  **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    * passedNum  **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    * totalConfigRiskNum  **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    * versionRecommend  **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @var string[]
    */
    protected static $getters = [
            'configRiskHostNum' => 'getConfigRiskHostNum',
            'configRiskNum' => 'getConfigRiskNum',
            'passedRate' => 'getPassedRate',
            'beatRate' => 'getBeatRate',
            'weakPwdNum' => 'getWeakPwdNum',
            'passedNum' => 'getPassedNum',
            'totalConfigRiskNum' => 'getTotalConfigRiskNum',
            'versionRecommend' => 'getVersionRecommend'
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
        $this->container['configRiskHostNum'] = isset($data['configRiskHostNum']) ? $data['configRiskHostNum'] : null;
        $this->container['configRiskNum'] = isset($data['configRiskNum']) ? $data['configRiskNum'] : null;
        $this->container['passedRate'] = isset($data['passedRate']) ? $data['passedRate'] : null;
        $this->container['beatRate'] = isset($data['beatRate']) ? $data['beatRate'] : null;
        $this->container['weakPwdNum'] = isset($data['weakPwdNum']) ? $data['weakPwdNum'] : null;
        $this->container['passedNum'] = isset($data['passedNum']) ? $data['passedNum'] : null;
        $this->container['totalConfigRiskNum'] = isset($data['totalConfigRiskNum']) ? $data['totalConfigRiskNum'] : null;
        $this->container['versionRecommend'] = isset($data['versionRecommend']) ? $data['versionRecommend'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configRiskHostNum']) && ($this->container['configRiskHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'configRiskHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['configRiskHostNum']) && ($this->container['configRiskHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'configRiskHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['configRiskNum']) && ($this->container['configRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'configRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['configRiskNum']) && ($this->container['configRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'configRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passedRate']) && ($this->container['passedRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'passedRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['passedRate']) && ($this->container['passedRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'passedRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weakPwdNum']) && ($this->container['weakPwdNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'weakPwdNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['weakPwdNum']) && ($this->container['weakPwdNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'weakPwdNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passedNum']) && ($this->container['passedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'passedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['passedNum']) && ($this->container['passedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'passedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalConfigRiskNum']) && ($this->container['totalConfigRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalConfigRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalConfigRiskNum']) && ($this->container['totalConfigRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalConfigRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['versionRecommend']) && (mb_strlen($this->container['versionRecommend']) > 32)) {
                $invalidProperties[] = "invalid value for 'versionRecommend', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['versionRecommend']) && (mb_strlen($this->container['versionRecommend']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionRecommend', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['versionRecommend']) && !preg_match("/^.*$/", $this->container['versionRecommend'])) {
                $invalidProperties[] = "invalid value for 'versionRecommend', must be conform to the pattern /^.*$/.";
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
    * Gets configRiskHostNum
    *  **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getConfigRiskHostNum()
    {
        return $this->container['configRiskHostNum'];
    }

    /**
    * Sets configRiskHostNum
    *
    * @param int|null $configRiskHostNum **参数解释**: 存在配置风险的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setConfigRiskHostNum($configRiskHostNum)
    {
        $this->container['configRiskHostNum'] = $configRiskHostNum;
        return $this;
    }

    /**
    * Gets configRiskNum
    *  **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getConfigRiskNum()
    {
        return $this->container['configRiskNum'];
    }

    /**
    * Sets configRiskNum
    *
    * @param int|null $configRiskNum **参数解释**: 存在的配置风险数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setConfigRiskNum($configRiskNum)
    {
        $this->container['configRiskNum'] = $configRiskNum;
        return $this;
    }

    /**
    * Gets passedRate
    *  **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getPassedRate()
    {
        return $this->container['passedRate'];
    }

    /**
    * Sets passedRate
    *
    * @param float|null $passedRate **参数解释**: 通过率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setPassedRate($passedRate)
    {
        $this->container['passedRate'] = $passedRate;
        return $this;
    }

    /**
    * Gets beatRate
    *  **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getBeatRate()
    {
        return $this->container['beatRate'];
    }

    /**
    * Sets beatRate
    *
    * @param float|null $beatRate **参数解释**: 通过率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setBeatRate($beatRate)
    {
        $this->container['beatRate'] = $beatRate;
        return $this;
    }

    /**
    * Gets weakPwdNum
    *  **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getWeakPwdNum()
    {
        return $this->container['weakPwdNum'];
    }

    /**
    * Sets weakPwdNum
    *
    * @param int|null $weakPwdNum **参数解释**: 弱口令数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setWeakPwdNum($weakPwdNum)
    {
        $this->container['weakPwdNum'] = $weakPwdNum;
        return $this;
    }

    /**
    * Gets passedNum
    *  **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getPassedNum()
    {
        return $this->container['passedNum'];
    }

    /**
    * Sets passedNum
    *
    * @param int|null $passedNum **参数解释**: 通过量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setPassedNum($passedNum)
    {
        $this->container['passedNum'] = $passedNum;
        return $this;
    }

    /**
    * Gets totalConfigRiskNum
    *  **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalConfigRiskNum()
    {
        return $this->container['totalConfigRiskNum'];
    }

    /**
    * Sets totalConfigRiskNum
    *
    * @param int|null $totalConfigRiskNum **参数解释**: 总的风险数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalConfigRiskNum($totalConfigRiskNum)
    {
        $this->container['totalConfigRiskNum'] = $totalConfigRiskNum;
        return $this;
    }

    /**
    * Gets versionRecommend
    *  **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @return string|null
    */
    public function getVersionRecommend()
    {
        return $this->container['versionRecommend'];
    }

    /**
    * Sets versionRecommend
    *
    * @param string|null $versionRecommend **参数解释**: 推荐版本，只支持企业版 hss.version.enterprise **取值范围**: 字符长度1-32位
    *
    * @return $this
    */
    public function setVersionRecommend($versionRecommend)
    {
        $this->container['versionRecommend'] = $versionRecommend;
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

