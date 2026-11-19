<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityCheckOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityCheckOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskRating  **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    * severity  **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * scanTime  **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    * hostNum  **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    * riskNum  **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
    * scheduledCheckStatus  **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskRating' => 'int',
            'severity' => 'string',
            'scanTime' => 'int',
            'hostNum' => 'int',
            'riskNum' => 'int',
            'scheduledCheckStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskRating  **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    * severity  **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * scanTime  **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    * hostNum  **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    * riskNum  **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
    * scheduledCheckStatus  **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskRating' => 'int32',
        'severity' => null,
        'scanTime' => 'int64',
        'hostNum' => 'int32',
        'riskNum' => 'int32',
        'scheduledCheckStatus' => null
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
    * riskRating  **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    * severity  **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * scanTime  **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    * hostNum  **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    * riskNum  **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
    * scheduledCheckStatus  **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskRating' => 'risk_rating',
            'severity' => 'severity',
            'scanTime' => 'scan_time',
            'hostNum' => 'host_num',
            'riskNum' => 'risk_num',
            'scheduledCheckStatus' => 'scheduled_check_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskRating  **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    * severity  **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * scanTime  **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    * hostNum  **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    * riskNum  **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
    * scheduledCheckStatus  **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @var string[]
    */
    protected static $setters = [
            'riskRating' => 'setRiskRating',
            'severity' => 'setSeverity',
            'scanTime' => 'setScanTime',
            'hostNum' => 'setHostNum',
            'riskNum' => 'setRiskNum',
            'scheduledCheckStatus' => 'setScheduledCheckStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskRating  **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    * severity  **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
    * scanTime  **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    * hostNum  **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    * riskNum  **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
    * scheduledCheckStatus  **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @var string[]
    */
    protected static $getters = [
            'riskRating' => 'getRiskRating',
            'severity' => 'getSeverity',
            'scanTime' => 'getScanTime',
            'hostNum' => 'getHostNum',
            'riskNum' => 'getRiskNum',
            'scheduledCheckStatus' => 'getScheduledCheckStatus'
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
        $this->container['riskRating'] = isset($data['riskRating']) ? $data['riskRating'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['scheduledCheckStatus'] = isset($data['scheduledCheckStatus']) ? $data['scheduledCheckStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['riskRating']) && ($this->container['riskRating'] > 100)) {
                $invalidProperties[] = "invalid value for 'riskRating', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['riskRating']) && ($this->container['riskRating'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskRating', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be bigger than or equal to 0.";
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
    * Gets riskRating
    *  **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    *
    * @return int|null
    */
    public function getRiskRating()
    {
        return $this->container['riskRating'];
    }

    /**
    * Sets riskRating
    *
    * @param int|null $riskRating **参数解释**: 风险评分 **取值范围**: 最小值0，最大值100
    *
    * @return $this
    */
    public function setRiskRating($riskRating)
    {
        $this->container['riskRating'] = $riskRating;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
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
    * @param string|null $severity **参数解释**: 风险级别 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**: 最新检测时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807（UTC时区，从1970-01-01 00:00:00开始计算）
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 防护的服务器数量 **取值范围**: 最小值0，最大值2000000
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets riskNum
    *  **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $riskNum **参数解释**: 安全风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets scheduledCheckStatus
    *  **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @return bool|null
    */
    public function getScheduledCheckStatus()
    {
        return $this->container['scheduledCheckStatus'];
    }

    /**
    * Sets scheduledCheckStatus
    *
    * @param bool|null $scheduledCheckStatus **参数解释**: 定时体检开启状态 **取值范围**: - true：已开启 - false：未开启
    *
    * @return $this
    */
    public function setScheduledCheckStatus($scheduledCheckStatus)
    {
        $this->container['scheduledCheckStatus'] = $scheduledCheckStatus;
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

