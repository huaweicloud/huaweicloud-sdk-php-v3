<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrendRiskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrendRiskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * assetRiskNum  **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    * alarmRiskNum  **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    * vulRiskNum  **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * time  **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * score  **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baselineRiskNum' => 'int',
            'assetRiskNum' => 'int',
            'alarmRiskNum' => 'int',
            'vulRiskNum' => 'int',
            'updateTime' => 'int',
            'time' => 'int',
            'score' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * assetRiskNum  **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    * alarmRiskNum  **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    * vulRiskNum  **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * time  **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * score  **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baselineRiskNum' => 'int32',
        'assetRiskNum' => 'int32',
        'alarmRiskNum' => 'int32',
        'vulRiskNum' => 'int32',
        'updateTime' => 'int64',
        'time' => 'int64',
        'score' => 'float'
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
    * assetRiskNum  **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    * alarmRiskNum  **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    * vulRiskNum  **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * time  **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * score  **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baselineRiskNum' => 'baseline_risk_num',
            'assetRiskNum' => 'asset_risk_num',
            'alarmRiskNum' => 'alarm_risk_num',
            'vulRiskNum' => 'vul_risk_num',
            'updateTime' => 'update_time',
            'time' => 'time',
            'score' => 'score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * assetRiskNum  **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    * alarmRiskNum  **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    * vulRiskNum  **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * time  **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * score  **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @var string[]
    */
    protected static $setters = [
            'baselineRiskNum' => 'setBaselineRiskNum',
            'assetRiskNum' => 'setAssetRiskNum',
            'alarmRiskNum' => 'setAlarmRiskNum',
            'vulRiskNum' => 'setVulRiskNum',
            'updateTime' => 'setUpdateTime',
            'time' => 'setTime',
            'score' => 'setScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baselineRiskNum  **参数解释**: 基线风险数量 **取值范围**: 最小值0，最大值2147483647
    * assetRiskNum  **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    * alarmRiskNum  **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    * vulRiskNum  **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    * updateTime  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    * time  **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * score  **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @var string[]
    */
    protected static $getters = [
            'baselineRiskNum' => 'getBaselineRiskNum',
            'assetRiskNum' => 'getAssetRiskNum',
            'alarmRiskNum' => 'getAlarmRiskNum',
            'vulRiskNum' => 'getVulRiskNum',
            'updateTime' => 'getUpdateTime',
            'time' => 'getTime',
            'score' => 'getScore'
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
        $this->container['assetRiskNum'] = isset($data['assetRiskNum']) ? $data['assetRiskNum'] : null;
        $this->container['alarmRiskNum'] = isset($data['alarmRiskNum']) ? $data['alarmRiskNum'] : null;
        $this->container['vulRiskNum'] = isset($data['vulRiskNum']) ? $data['vulRiskNum'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
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
            if (!is_null($this->container['assetRiskNum']) && ($this->container['assetRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'assetRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['assetRiskNum']) && ($this->container['assetRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'assetRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmRiskNum']) && ($this->container['alarmRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'alarmRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['alarmRiskNum']) && ($this->container['alarmRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulRiskNum']) && ($this->container['vulRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulRiskNum']) && ($this->container['vulRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] < 0)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
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
    * Gets assetRiskNum
    *  **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAssetRiskNum()
    {
        return $this->container['assetRiskNum'];
    }

    /**
    * Sets assetRiskNum
    *
    * @param int|null $assetRiskNum **参数解释**: 资产风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAssetRiskNum($assetRiskNum)
    {
        $this->container['assetRiskNum'] = $assetRiskNum;
        return $this;
    }

    /**
    * Gets alarmRiskNum
    *  **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAlarmRiskNum()
    {
        return $this->container['alarmRiskNum'];
    }

    /**
    * Sets alarmRiskNum
    *
    * @param int|null $alarmRiskNum **参数解释**: 告警数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAlarmRiskNum($alarmRiskNum)
    {
        $this->container['alarmRiskNum'] = $alarmRiskNum;
        return $this;
    }

    /**
    * Gets vulRiskNum
    *  **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulRiskNum()
    {
        return $this->container['vulRiskNum'];
    }

    /**
    * Sets vulRiskNum
    *
    * @param int|null $vulRiskNum **参数解释**: 漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulRiskNum($vulRiskNum)
    {
        $this->container['vulRiskNum'] = $vulRiskNum;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**： 创建时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time **参数解释**: 时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets score
    *  **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @return float|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param float|null $score **参数解释**: 分数 **取值范围**: 最小值0，最大值100
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
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

