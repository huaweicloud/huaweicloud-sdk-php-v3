<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiOverviewDimensionStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiOverviewDimensionStats';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimension  **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    * alarmCount  **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    * riskCount  **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimension' => 'string',
            'alarmCount' => 'int',
            'riskCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimension  **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    * alarmCount  **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    * riskCount  **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimension' => null,
        'alarmCount' => 'int64',
        'riskCount' => 'int64'
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
    * dimension  **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    * alarmCount  **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    * riskCount  **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimension' => 'dimension',
            'alarmCount' => 'alarm_count',
            'riskCount' => 'risk_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimension  **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    * alarmCount  **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    * riskCount  **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'dimension' => 'setDimension',
            'alarmCount' => 'setAlarmCount',
            'riskCount' => 'setRiskCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimension  **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    * alarmCount  **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    * riskCount  **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'dimension' => 'getDimension',
            'alarmCount' => 'getAlarmCount',
            'riskCount' => 'getRiskCount'
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
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['alarmCount'] = isset($data['alarmCount']) ? $data['alarmCount'] : null;
        $this->container['riskCount'] = isset($data['riskCount']) ? $data['riskCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dimension']) && (mb_strlen($this->container['dimension']) > 64)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dimension']) && (mb_strlen($this->container['dimension']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmCount']) && ($this->container['alarmCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskCount']) && ($this->container['riskCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskCount', must be bigger than or equal to 0.";
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
    * Gets dimension
    *  **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension **参数解释**: 防护维度key，取值及含义如下： - consistency_detection：意图行为一致性检测 - command_control：命令执行控制 - file_access_control：文件访问控制 - sensitive_info_detection：敏感信息检测 - role_limit：角色限定（行为轨迹检测不覆盖此维度） - openclaw_detectors：记忆投毒防护（OpenClaw专属维度） - other：其他类  **取值范围**: consistency_detection、command_control、file_access_control、sensitive_info_detection、role_limit、openclaw_detectors、other
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets alarmCount
    *  **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getAlarmCount()
    {
        return $this->container['alarmCount'];
    }

    /**
    * Sets alarmCount
    *
    * @param int|null $alarmCount **参数解释**： 告警数量，type=alarm时返回 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setAlarmCount($alarmCount)
    {
        $this->container['alarmCount'] = $alarmCount;
        return $this;
    }

    /**
    * Gets riskCount
    *  **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getRiskCount()
    {
        return $this->container['riskCount'];
    }

    /**
    * Sets riskCount
    *
    * @param int|null $riskCount **参数解释**： 风险数量，type=risk时返回，role_limit固定为0 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setRiskCount($riskCount)
    {
        $this->container['riskCount'] = $riskCount;
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

