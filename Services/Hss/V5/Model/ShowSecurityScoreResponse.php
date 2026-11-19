<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityScoreResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityScoreResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityRiskNum  **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    * securityScore  **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    * detectTime  **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * freeHealthCheckTotalHostNum  **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityRiskNum' => 'int',
            'securityScore' => 'float',
            'detectTime' => 'int',
            'freeHealthCheckTotalHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityRiskNum  **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    * securityScore  **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    * detectTime  **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * freeHealthCheckTotalHostNum  **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityRiskNum' => 'int32',
        'securityScore' => 'float',
        'detectTime' => 'int64',
        'freeHealthCheckTotalHostNum' => 'int32'
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
    * securityRiskNum  **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    * securityScore  **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    * detectTime  **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * freeHealthCheckTotalHostNum  **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityRiskNum' => 'security_risk_num',
            'securityScore' => 'security_score',
            'detectTime' => 'detect_time',
            'freeHealthCheckTotalHostNum' => 'free_health_check_total_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityRiskNum  **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    * securityScore  **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    * detectTime  **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * freeHealthCheckTotalHostNum  **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'securityRiskNum' => 'setSecurityRiskNum',
            'securityScore' => 'setSecurityScore',
            'detectTime' => 'setDetectTime',
            'freeHealthCheckTotalHostNum' => 'setFreeHealthCheckTotalHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityRiskNum  **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    * securityScore  **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    * detectTime  **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * freeHealthCheckTotalHostNum  **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'securityRiskNum' => 'getSecurityRiskNum',
            'securityScore' => 'getSecurityScore',
            'detectTime' => 'getDetectTime',
            'freeHealthCheckTotalHostNum' => 'getFreeHealthCheckTotalHostNum'
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
        $this->container['securityRiskNum'] = isset($data['securityRiskNum']) ? $data['securityRiskNum'] : null;
        $this->container['securityScore'] = isset($data['securityScore']) ? $data['securityScore'] : null;
        $this->container['detectTime'] = isset($data['detectTime']) ? $data['detectTime'] : null;
        $this->container['freeHealthCheckTotalHostNum'] = isset($data['freeHealthCheckTotalHostNum']) ? $data['freeHealthCheckTotalHostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['securityRiskNum']) && ($this->container['securityRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'securityRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['securityRiskNum']) && ($this->container['securityRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'securityRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityScore']) && ($this->container['securityScore'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'securityScore', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['securityScore']) && ($this->container['securityScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'securityScore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detectTime']) && ($this->container['detectTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'detectTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['detectTime']) && ($this->container['detectTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'detectTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeHealthCheckTotalHostNum']) && ($this->container['freeHealthCheckTotalHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'freeHealthCheckTotalHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['freeHealthCheckTotalHostNum']) && ($this->container['freeHealthCheckTotalHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeHealthCheckTotalHostNum', must be bigger than or equal to 0.";
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
    * Gets securityRiskNum
    *  **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSecurityRiskNum()
    {
        return $this->container['securityRiskNum'];
    }

    /**
    * Sets securityRiskNum
    *
    * @param int|null $securityRiskNum **参数解释**: 安全风险总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSecurityRiskNum($securityRiskNum)
    {
        $this->container['securityRiskNum'] = $securityRiskNum;
        return $this;
    }

    /**
    * Gets securityScore
    *  **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    *
    * @return float|null
    */
    public function getSecurityScore()
    {
        return $this->container['securityScore'];
    }

    /**
    * Sets securityScore
    *
    * @param float|null $securityScore **参数解释**: 安全评分 **取值范围**: 最小值0，最大值100
    *
    * @return $this
    */
    public function setSecurityScore($securityScore)
    {
        $this->container['securityScore'] = $securityScore;
        return $this;
    }

    /**
    * Gets detectTime
    *  **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getDetectTime()
    {
        return $this->container['detectTime'];
    }

    /**
    * Sets detectTime
    *
    * @param int|null $detectTime **参数解释**: 更新时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setDetectTime($detectTime)
    {
        $this->container['detectTime'] = $detectTime;
        return $this;
    }

    /**
    * Gets freeHealthCheckTotalHostNum
    *  **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFreeHealthCheckTotalHostNum()
    {
        return $this->container['freeHealthCheckTotalHostNum'];
    }

    /**
    * Sets freeHealthCheckTotalHostNum
    *
    * @param int|null $freeHealthCheckTotalHostNum **参数解释**: 免费体检主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFreeHealthCheckTotalHostNum($freeHealthCheckTotalHostNum)
    {
        $this->container['freeHealthCheckTotalHostNum'] = $freeHealthCheckTotalHostNum;
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

