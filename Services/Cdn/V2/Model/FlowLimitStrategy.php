<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowLimitStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowLimitStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * strategyType  **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    * itemType  **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    * limitValue  **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    * alarmPercentThreshold  **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    * banTime  **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'strategyType' => 'string',
            'itemType' => 'string',
            'limitValue' => 'string',
            'alarmPercentThreshold' => 'string',
            'banTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * strategyType  **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    * itemType  **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    * limitValue  **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    * alarmPercentThreshold  **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    * banTime  **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'strategyType' => null,
        'itemType' => null,
        'limitValue' => null,
        'alarmPercentThreshold' => null,
        'banTime' => null
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
    * strategyType  **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    * itemType  **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    * limitValue  **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    * alarmPercentThreshold  **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    * banTime  **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'strategyType' => 'strategy_type',
            'itemType' => 'item_type',
            'limitValue' => 'limit_value',
            'alarmPercentThreshold' => 'alarm_percent_threshold',
            'banTime' => 'ban_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * strategyType  **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    * itemType  **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    * limitValue  **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    * alarmPercentThreshold  **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    * banTime  **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'strategyType' => 'setStrategyType',
            'itemType' => 'setItemType',
            'limitValue' => 'setLimitValue',
            'alarmPercentThreshold' => 'setAlarmPercentThreshold',
            'banTime' => 'setBanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * strategyType  **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    * itemType  **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    * limitValue  **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    * alarmPercentThreshold  **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    * banTime  **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'strategyType' => 'getStrategyType',
            'itemType' => 'getItemType',
            'limitValue' => 'getLimitValue',
            'alarmPercentThreshold' => 'getAlarmPercentThreshold',
            'banTime' => 'getBanTime'
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
        $this->container['strategyType'] = isset($data['strategyType']) ? $data['strategyType'] : null;
        $this->container['itemType'] = isset($data['itemType']) ? $data['itemType'] : null;
        $this->container['limitValue'] = isset($data['limitValue']) ? $data['limitValue'] : null;
        $this->container['alarmPercentThreshold'] = isset($data['alarmPercentThreshold']) ? $data['alarmPercentThreshold'] : null;
        $this->container['banTime'] = isset($data['banTime']) ? $data['banTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets strategyType
    *  **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getStrategyType()
    {
        return $this->container['strategyType'];
    }

    /**
    * Sets strategyType
    *
    * @param string|null $strategyType **参数解释：**  用量统计类型 **约束限制：** 不涉及 **取值范围：** - instant: 瞬时用量 - hour: 累计用量（小时） - day: 累计用量（天） **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStrategyType($strategyType)
    {
        $this->container['strategyType'] = $strategyType;
        return $this;
    }

    /**
    * Gets itemType
    *  **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getItemType()
    {
        return $this->container['itemType'];
    }

    /**
    * Sets itemType
    *
    * @param string|null $itemType **参数解释：**  用量封顶类型 **约束限制：** 不涉及 **取值范围：** - bandwidth: 带宽封顶，单位: bit/s - traffic: 流量封顶，单位: bit **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setItemType($itemType)
    {
        $this->container['itemType'] = $itemType;
        return $this;
    }

    /**
    * Gets limitValue
    *  **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLimitValue()
    {
        return $this->container['limitValue'];
    }

    /**
    * Sets limitValue
    *
    * @param string|null $limitValue **参数解释：** 用量封顶阈值，域名用量达到该阈值后，将会停用域名 **约束限制：** 不涉及 **取值范围：** 必须为正整数 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLimitValue($limitValue)
    {
        $this->container['limitValue'] = $limitValue;
        return $this;
    }

    /**
    * Gets alarmPercentThreshold
    *  **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAlarmPercentThreshold()
    {
        return $this->container['alarmPercentThreshold'];
    }

    /**
    * Sets alarmPercentThreshold
    *
    * @param string|null $alarmPercentThreshold **参数解释：** 用量告警阈值，域名用量达到该阈值后，将会发送告警 **约束限制：** 不涉及 **取值范围：** 1-90 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAlarmPercentThreshold($alarmPercentThreshold)
    {
        $this->container['alarmPercentThreshold'] = $alarmPercentThreshold;
        return $this;
    }

    /**
    * Gets banTime
    *  **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBanTime()
    {
        return $this->container['banTime'];
    }

    /**
    * Sets banTime
    *
    * @param string|null $banTime **参数解释：** 域名封禁周期 **约束限制：** ban_time设置为0时，表示不自动解封，需要客户手动解封域名 **取值范围：** - 0: 不自动解封 - 60: 60分钟，即1个小时 - 720: 720分钟，即12个小时 - 1440: 1440分钟，即24个小时 - 4320: 4320分钟，即3天 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBanTime($banTime)
    {
        $this->container['banTime'] = $banTime;
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

