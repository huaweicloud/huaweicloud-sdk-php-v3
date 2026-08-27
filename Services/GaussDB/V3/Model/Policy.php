<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Policy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * period  **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    * retentionDays  **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    * policyType  **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'period' => 'string',
            'retentionDays' => 'int',
            'policyType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * period  **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    * retentionDays  **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    * policyType  **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'period' => null,
        'retentionDays' => 'int32',
        'policyType' => null
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
    * period  **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    * retentionDays  **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    * policyType  **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'period' => 'period',
            'retentionDays' => 'retention_days',
            'policyType' => 'policy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * period  **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    * retentionDays  **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    * policyType  **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'period' => 'setPeriod',
            'retentionDays' => 'setRetentionDays',
            'policyType' => 'setPolicyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * period  **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    * retentionDays  **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    * policyType  **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'period' => 'getPeriod',
            'retentionDays' => 'getRetentionDays',
            'policyType' => 'getPolicyType'
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['retentionDays'] === null) {
            $invalidProperties[] = "'retentionDays' can't be null";
        }
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
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
    * Gets period
    *  **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string $period **参数解释**：  备份周期配置。  **约束限制**：  格式必须为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。  **取值范围**：  日期支持填写1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，需以逗号隔开。 月份支持填写1~12、特殊字符*（表示任意值）。 星期支持填写1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，需以逗号隔开。  取值示例： - \\* \\* 6 表示每周六执行任务，适用于周策略。 - \\* \\* 1,2,3 表示每周一、二、三执行任务，适用于周策略。 - 1,2 * * 表示每月1号、2号执行任务，适用于月策略。 - L * * 表示每月的最后一天执行任务，适用于月策略。 - 15 3 * 表示每年的3月15日执行任务，适用于年策略。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets retentionDays
    *  **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int $retentionDays **参数解释**：  备份文件的保留天数，单位为天。  **约束限制**：  不涉及。  **取值范围**：  1~732天。 您也可以联系客服申请开通最大保留天数为3660。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
        return $this;
    }

    /**
    * Gets policyType
    *  **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string $policyType **参数解释**：  备份策略类型。  **约束限制**：  不涉及。  **取值范围**：    - base：表示基础策略。    - sparse：表示稀疏策略。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
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

