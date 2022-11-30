<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatUsageSummaryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatUsageSummaryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID。
    * actualDays  有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    * bandWidth  计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    * monthlyGuaranteedBandWidth  月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * monthlyPeakBandWidth  月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * bandWidthMeasureId  带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'actualDays' => 'string',
            'bandWidth' => 'string',
            'monthlyGuaranteedBandWidth' => 'string',
            'monthlyPeakBandWidth' => 'string',
            'bandWidthMeasureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID。
    * actualDays  有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    * bandWidth  计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    * monthlyGuaranteedBandWidth  月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * monthlyPeakBandWidth  月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * bandWidthMeasureId  带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'actualDays' => null,
        'bandWidth' => null,
        'monthlyGuaranteedBandWidth' => null,
        'monthlyPeakBandWidth' => null,
        'bandWidthMeasureId' => 'int32'
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
    * resourceId  资源ID。
    * actualDays  有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    * bandWidth  计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    * monthlyGuaranteedBandWidth  月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * monthlyPeakBandWidth  月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * bandWidthMeasureId  带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'actualDays' => 'actual_days',
            'bandWidth' => 'band_width',
            'monthlyGuaranteedBandWidth' => 'monthly_guaranteed_band_width',
            'monthlyPeakBandWidth' => 'monthly_peak_band_width',
            'bandWidthMeasureId' => 'band_width_measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID。
    * actualDays  有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    * bandWidth  计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    * monthlyGuaranteedBandWidth  月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * monthlyPeakBandWidth  月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * bandWidthMeasureId  带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'actualDays' => 'setActualDays',
            'bandWidth' => 'setBandWidth',
            'monthlyGuaranteedBandWidth' => 'setMonthlyGuaranteedBandWidth',
            'monthlyPeakBandWidth' => 'setMonthlyPeakBandWidth',
            'bandWidthMeasureId' => 'setBandWidthMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID。
    * actualDays  有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    * bandWidth  计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    * monthlyGuaranteedBandWidth  月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * monthlyPeakBandWidth  月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * bandWidthMeasureId  带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'actualDays' => 'getActualDays',
            'bandWidth' => 'getBandWidth',
            'monthlyGuaranteedBandWidth' => 'getMonthlyGuaranteedBandWidth',
            'monthlyPeakBandWidth' => 'getMonthlyPeakBandWidth',
            'bandWidthMeasureId' => 'getBandWidthMeasureId'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['actualDays'] = isset($data['actualDays']) ? $data['actualDays'] : null;
        $this->container['bandWidth'] = isset($data['bandWidth']) ? $data['bandWidth'] : null;
        $this->container['monthlyGuaranteedBandWidth'] = isset($data['monthlyGuaranteedBandWidth']) ? $data['monthlyGuaranteedBandWidth'] : null;
        $this->container['monthlyPeakBandWidth'] = isset($data['monthlyPeakBandWidth']) ? $data['monthlyPeakBandWidth'] : null;
        $this->container['bandWidthMeasureId'] = isset($data['bandWidthMeasureId']) ? $data['bandWidthMeasureId'] : null;
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
    * Gets resourceId
    *  资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets actualDays
    *  有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    *
    * @return string|null
    */
    public function getActualDays()
    {
        return $this->container['actualDays'];
    }

    /**
    * Sets actualDays
    *
    * @param string|null $actualDays 有效天数，精度最高返回小数点后20位。  说明： 计算方式为上报的点数/288所得出的值。其中288为一天的点数，5分钟为一个点数单位。计算95费用时，因95费用是按月定价，若实际不足月，则是使用官网价*折扣*actual_days/当月天数，来计算费用明细。
    *
    * @return $this
    */
    public function setActualDays($actualDays)
    {
        $this->container['actualDays'] = $actualDays;
        return $this;
    }

    /**
    * Gets bandWidth
    *  计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    *
    * @return string|null
    */
    public function getBandWidth()
    {
        return $this->container['bandWidth'];
    }

    /**
    * Sets bandWidth
    *
    * @param string|null $bandWidth 计费带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。
    *
    * @return $this
    */
    public function setBandWidth($bandWidth)
    {
        $this->container['bandWidth'] = $bandWidth;
        return $this;
    }

    /**
    * Gets monthlyGuaranteedBandWidth
    *  月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    *
    * @return string|null
    */
    public function getMonthlyGuaranteedBandWidth()
    {
        return $this->container['monthlyGuaranteedBandWidth'];
    }

    /**
    * Sets monthlyGuaranteedBandWidth
    *
    * @param string|null $monthlyGuaranteedBandWidth 月保底带宽的按月汇总。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    *
    * @return $this
    */
    public function setMonthlyGuaranteedBandWidth($monthlyGuaranteedBandWidth)
    {
        $this->container['monthlyGuaranteedBandWidth'] = $monthlyGuaranteedBandWidth;
        return $this;
    }

    /**
    * Gets monthlyPeakBandWidth
    *  月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    *
    * @return string|null
    */
    public function getMonthlyPeakBandWidth()
    {
        return $this->container['monthlyPeakBandWidth'];
    }

    /**
    * Sets monthlyPeakBandWidth
    *
    * @param string|null $monthlyPeakBandWidth 月峰值带宽。  说明： 每月2日20点后可查询上月数据；若查询当月数据，则为空。该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    *
    * @return $this
    */
    public function setMonthlyPeakBandWidth($monthlyPeakBandWidth)
    {
        $this->container['monthlyPeakBandWidth'] = $monthlyPeakBandWidth;
        return $this;
    }

    /**
    * Gets bandWidthMeasureId
    *  带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @return int|null
    */
    public function getBandWidthMeasureId()
    {
        return $this->container['bandWidthMeasureId'];
    }

    /**
    * Sets bandWidthMeasureId
    *
    * @param int|null $bandWidthMeasureId 带宽单位，您可以调用查询度量单位列表接口获取。若所有带宽为空，则该字段为空。
    *
    * @return $this
    */
    public function setBandWidthMeasureId($bandWidthMeasureId)
    {
        $this->container['bandWidthMeasureId'] = $bandWidthMeasureId;
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

