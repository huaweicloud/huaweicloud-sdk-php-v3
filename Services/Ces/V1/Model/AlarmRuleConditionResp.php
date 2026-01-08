<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmRuleConditionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmRuleConditionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comparisonOperator  **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    * count  **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    * filter  filter
    * period  period
    * unit  **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    * selectedUnit  **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    * suppressDuration  suppressDuration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comparisonOperator' => 'string',
            'count' => 'int',
            'filter' => '\HuaweiCloud\SDK\Ces\V1\Model\FilterResp',
            'period' => '\HuaweiCloud\SDK\Ces\V1\Model\PeriodResp',
            'unit' => 'string',
            'selectedUnit' => 'string',
            'value' => 'double',
            'suppressDuration' => '\HuaweiCloud\SDK\Ces\V1\Model\SuppressDurationResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comparisonOperator  **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    * count  **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    * filter  filter
    * period  period
    * unit  **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    * selectedUnit  **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    * suppressDuration  suppressDuration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comparisonOperator' => null,
        'count' => 'int32',
        'filter' => null,
        'period' => null,
        'unit' => null,
        'selectedUnit' => null,
        'value' => 'double',
        'suppressDuration' => null
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
    * comparisonOperator  **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    * count  **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    * filter  filter
    * period  period
    * unit  **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    * selectedUnit  **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    * suppressDuration  suppressDuration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comparisonOperator' => 'comparison_operator',
            'count' => 'count',
            'filter' => 'filter',
            'period' => 'period',
            'unit' => 'unit',
            'selectedUnit' => 'selected_unit',
            'value' => 'value',
            'suppressDuration' => 'suppress_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comparisonOperator  **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    * count  **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    * filter  filter
    * period  period
    * unit  **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    * selectedUnit  **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    * suppressDuration  suppressDuration
    *
    * @var string[]
    */
    protected static $setters = [
            'comparisonOperator' => 'setComparisonOperator',
            'count' => 'setCount',
            'filter' => 'setFilter',
            'period' => 'setPeriod',
            'unit' => 'setUnit',
            'selectedUnit' => 'setSelectedUnit',
            'value' => 'setValue',
            'suppressDuration' => 'setSuppressDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comparisonOperator  **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    * count  **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    * filter  filter
    * period  period
    * unit  **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    * selectedUnit  **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    * suppressDuration  suppressDuration
    *
    * @var string[]
    */
    protected static $getters = [
            'comparisonOperator' => 'getComparisonOperator',
            'count' => 'getCount',
            'filter' => 'getFilter',
            'period' => 'getPeriod',
            'unit' => 'getUnit',
            'selectedUnit' => 'getSelectedUnit',
            'value' => 'getValue',
            'suppressDuration' => 'getSuppressDuration'
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
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['selectedUnit'] = isset($data['selectedUnit']) ? $data['selectedUnit'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['suppressDuration'] = isset($data['suppressDuration']) ? $data['suppressDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['comparisonOperator']) && !preg_match("/^(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave)$/", $this->container['comparisonOperator'])) {
                $invalidProperties[] = "invalid value for 'comparisonOperator', must be conform to the pattern /^(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave)$/.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 100)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['selectedUnit']) && (mb_strlen($this->container['selectedUnit']) > 32)) {
                $invalidProperties[] = "invalid value for 'selectedUnit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['selectedUnit']) && (mb_strlen($this->container['selectedUnit']) < 0)) {
                $invalidProperties[] = "invalid value for 'selectedUnit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to -1.7976931348623156E+108.";
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
    * Gets comparisonOperator
    *  **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    *
    * @return string|null
    */
    public function getComparisonOperator()
    {
        return $this->container['comparisonOperator'];
    }

    /**
    * Sets comparisonOperator
    *
    * @param string|null $comparisonOperator **参数解释**： 阈值符号。     **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。
    *
    * @return $this
    */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->container['comparisonOperator'] = $comparisonOperator;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**： 触发告警的连续发生次数。 **取值范围**： 整数，取值范围[1, 5]。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\FilterResp|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\FilterResp|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets period
    *  period
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\PeriodResp|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\PeriodResp|null $period period
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit **参数解释**： 数据的原始单位。 **取值范围**： 长度为[0,32]个字符。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets selectedUnit
    *  **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    *
    * @return string|null
    */
    public function getSelectedUnit()
    {
        return $this->container['selectedUnit'];
    }

    /**
    * Sets selectedUnit
    *
    * @param string|null $selectedUnit **参数解释**： 用户选择的数据单位。 **取值范围**： 长度为[0,32]个字符。
    *
    * @return $this
    */
    public function setSelectedUnit($selectedUnit)
    {
        $this->container['selectedUnit'] = $selectedUnit;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    *
    * @return double|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double|null $value **参数解释**： 告警阈值。具体阈值取值请参见附录中各服务监控指标中取值范围，如[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)中ECS的CPU使用率cpu_util取值范围可配置80。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets suppressDuration
    *  suppressDuration
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\SuppressDurationResp|null
    */
    public function getSuppressDuration()
    {
        return $this->container['suppressDuration'];
    }

    /**
    * Sets suppressDuration
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\SuppressDurationResp|null $suppressDuration suppressDuration
    *
    * @return $this
    */
    public function setSuppressDuration($suppressDuration)
    {
        $this->container['suppressDuration'] = $suppressDuration;
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

