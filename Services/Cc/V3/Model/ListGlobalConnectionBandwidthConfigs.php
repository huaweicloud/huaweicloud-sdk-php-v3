<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConnectionBandwidthConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConnectionBandwidthConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sizeRange  计费类型对应全域互联带宽大小范围。
    * chargeMode  支持的计费类型列表。
    * services  支持服务实例类型。
    * gcbType  支持的带宽类型。
    * ratio95peakPlus  按增强型95计费保底消费百分比。
    * ratio95peakGuar  按传统型95计费保底消费百分比。
    * crossborder  是否已经完成跨境审批。
    * quotas  配额信息。
    * slaLevel  支持线路分级。
    * bindLimit  共享带宽允许绑定实例数量上限。
    * enableAreaBandwidth  是否启用传统的大区带宽。
    * enableChange95  是否支持95转按需。
    * enableSpecCode  是否支持多SKU产品功能。
    * cesEnabled  是否支持CES监控。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sizeRange' => '\HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthSizeRange[]',
            'chargeMode' => 'string[]',
            'services' => 'string[]',
            'gcbType' => 'string[]',
            'ratio95peakPlus' => 'int',
            'ratio95peakGuar' => 'int',
            'crossborder' => 'bool',
            'quotas' => '\HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthQuotas[]',
            'slaLevel' => 'string[]',
            'bindLimit' => 'int',
            'enableAreaBandwidth' => 'bool',
            'enableChange95' => 'bool',
            'enableSpecCode' => 'bool',
            'cesEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sizeRange  计费类型对应全域互联带宽大小范围。
    * chargeMode  支持的计费类型列表。
    * services  支持服务实例类型。
    * gcbType  支持的带宽类型。
    * ratio95peakPlus  按增强型95计费保底消费百分比。
    * ratio95peakGuar  按传统型95计费保底消费百分比。
    * crossborder  是否已经完成跨境审批。
    * quotas  配额信息。
    * slaLevel  支持线路分级。
    * bindLimit  共享带宽允许绑定实例数量上限。
    * enableAreaBandwidth  是否启用传统的大区带宽。
    * enableChange95  是否支持95转按需。
    * enableSpecCode  是否支持多SKU产品功能。
    * cesEnabled  是否支持CES监控。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sizeRange' => null,
        'chargeMode' => null,
        'services' => null,
        'gcbType' => null,
        'ratio95peakPlus' => null,
        'ratio95peakGuar' => null,
        'crossborder' => null,
        'quotas' => null,
        'slaLevel' => null,
        'bindLimit' => null,
        'enableAreaBandwidth' => null,
        'enableChange95' => null,
        'enableSpecCode' => null,
        'cesEnabled' => null
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
    * sizeRange  计费类型对应全域互联带宽大小范围。
    * chargeMode  支持的计费类型列表。
    * services  支持服务实例类型。
    * gcbType  支持的带宽类型。
    * ratio95peakPlus  按增强型95计费保底消费百分比。
    * ratio95peakGuar  按传统型95计费保底消费百分比。
    * crossborder  是否已经完成跨境审批。
    * quotas  配额信息。
    * slaLevel  支持线路分级。
    * bindLimit  共享带宽允许绑定实例数量上限。
    * enableAreaBandwidth  是否启用传统的大区带宽。
    * enableChange95  是否支持95转按需。
    * enableSpecCode  是否支持多SKU产品功能。
    * cesEnabled  是否支持CES监控。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sizeRange' => 'size_range',
            'chargeMode' => 'charge_mode',
            'services' => 'services',
            'gcbType' => 'gcb_type',
            'ratio95peakPlus' => 'ratio_95peak_plus',
            'ratio95peakGuar' => 'ratio_95peak_guar',
            'crossborder' => 'crossborder',
            'quotas' => 'quotas',
            'slaLevel' => 'sla_level',
            'bindLimit' => 'bind_limit',
            'enableAreaBandwidth' => 'enable_area_bandwidth',
            'enableChange95' => 'enable_change_95',
            'enableSpecCode' => 'enable_spec_code',
            'cesEnabled' => 'ces_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sizeRange  计费类型对应全域互联带宽大小范围。
    * chargeMode  支持的计费类型列表。
    * services  支持服务实例类型。
    * gcbType  支持的带宽类型。
    * ratio95peakPlus  按增强型95计费保底消费百分比。
    * ratio95peakGuar  按传统型95计费保底消费百分比。
    * crossborder  是否已经完成跨境审批。
    * quotas  配额信息。
    * slaLevel  支持线路分级。
    * bindLimit  共享带宽允许绑定实例数量上限。
    * enableAreaBandwidth  是否启用传统的大区带宽。
    * enableChange95  是否支持95转按需。
    * enableSpecCode  是否支持多SKU产品功能。
    * cesEnabled  是否支持CES监控。
    *
    * @var string[]
    */
    protected static $setters = [
            'sizeRange' => 'setSizeRange',
            'chargeMode' => 'setChargeMode',
            'services' => 'setServices',
            'gcbType' => 'setGcbType',
            'ratio95peakPlus' => 'setRatio95peakPlus',
            'ratio95peakGuar' => 'setRatio95peakGuar',
            'crossborder' => 'setCrossborder',
            'quotas' => 'setQuotas',
            'slaLevel' => 'setSlaLevel',
            'bindLimit' => 'setBindLimit',
            'enableAreaBandwidth' => 'setEnableAreaBandwidth',
            'enableChange95' => 'setEnableChange95',
            'enableSpecCode' => 'setEnableSpecCode',
            'cesEnabled' => 'setCesEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sizeRange  计费类型对应全域互联带宽大小范围。
    * chargeMode  支持的计费类型列表。
    * services  支持服务实例类型。
    * gcbType  支持的带宽类型。
    * ratio95peakPlus  按增强型95计费保底消费百分比。
    * ratio95peakGuar  按传统型95计费保底消费百分比。
    * crossborder  是否已经完成跨境审批。
    * quotas  配额信息。
    * slaLevel  支持线路分级。
    * bindLimit  共享带宽允许绑定实例数量上限。
    * enableAreaBandwidth  是否启用传统的大区带宽。
    * enableChange95  是否支持95转按需。
    * enableSpecCode  是否支持多SKU产品功能。
    * cesEnabled  是否支持CES监控。
    *
    * @var string[]
    */
    protected static $getters = [
            'sizeRange' => 'getSizeRange',
            'chargeMode' => 'getChargeMode',
            'services' => 'getServices',
            'gcbType' => 'getGcbType',
            'ratio95peakPlus' => 'getRatio95peakPlus',
            'ratio95peakGuar' => 'getRatio95peakGuar',
            'crossborder' => 'getCrossborder',
            'quotas' => 'getQuotas',
            'slaLevel' => 'getSlaLevel',
            'bindLimit' => 'getBindLimit',
            'enableAreaBandwidth' => 'getEnableAreaBandwidth',
            'enableChange95' => 'getEnableChange95',
            'enableSpecCode' => 'getEnableSpecCode',
            'cesEnabled' => 'getCesEnabled'
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
    const CHARGE_MODE_BWD = 'bwd';
    const CHARGE_MODE__95 = '95';
    const CHARGE_MODE__95AVR = '95avr';
    const SERVICES_CC = 'CC';
    const SERVICES_GEIP = 'GEIP';
    const SERVICES_GCN = 'GCN';
    const SERVICES_GSN = 'GSN';
    const GCB_TYPE_REGION = 'Region';
    const GCB_TYPE_SUB_AREA = 'SubArea';
    const GCB_TYPE_AREA = 'Area';
    const GCB_TYPE_TRS_AREA = 'TrsArea';
    const SLA_LEVEL_PT = 'Pt';
    const SLA_LEVEL_AU = 'Au';
    const SLA_LEVEL_AG = 'Ag';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BWD,
            self::CHARGE_MODE__95,
            self::CHARGE_MODE__95AVR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServicesAllowableValues()
    {
        return [
            self::SERVICES_CC,
            self::SERVICES_GEIP,
            self::SERVICES_GCN,
            self::SERVICES_GSN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGcbTypeAllowableValues()
    {
        return [
            self::GCB_TYPE_REGION,
            self::GCB_TYPE_SUB_AREA,
            self::GCB_TYPE_AREA,
            self::GCB_TYPE_TRS_AREA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSlaLevelAllowableValues()
    {
        return [
            self::SLA_LEVEL_PT,
            self::SLA_LEVEL_AU,
            self::SLA_LEVEL_AG,
        ];
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
        $this->container['sizeRange'] = isset($data['sizeRange']) ? $data['sizeRange'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['gcbType'] = isset($data['gcbType']) ? $data['gcbType'] : null;
        $this->container['ratio95peakPlus'] = isset($data['ratio95peakPlus']) ? $data['ratio95peakPlus'] : null;
        $this->container['ratio95peakGuar'] = isset($data['ratio95peakGuar']) ? $data['ratio95peakGuar'] : null;
        $this->container['crossborder'] = isset($data['crossborder']) ? $data['crossborder'] : null;
        $this->container['quotas'] = isset($data['quotas']) ? $data['quotas'] : null;
        $this->container['slaLevel'] = isset($data['slaLevel']) ? $data['slaLevel'] : null;
        $this->container['bindLimit'] = isset($data['bindLimit']) ? $data['bindLimit'] : null;
        $this->container['enableAreaBandwidth'] = isset($data['enableAreaBandwidth']) ? $data['enableAreaBandwidth'] : null;
        $this->container['enableChange95'] = isset($data['enableChange95']) ? $data['enableChange95'] : null;
        $this->container['enableSpecCode'] = isset($data['enableSpecCode']) ? $data['enableSpecCode'] : null;
        $this->container['cesEnabled'] = isset($data['cesEnabled']) ? $data['cesEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sizeRange'] === null) {
            $invalidProperties[] = "'sizeRange' can't be null";
        }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
        }
        if ($this->container['gcbType'] === null) {
            $invalidProperties[] = "'gcbType' can't be null";
        }
            if (!is_null($this->container['ratio95peakPlus']) && ($this->container['ratio95peakPlus'] > 100)) {
                $invalidProperties[] = "invalid value for 'ratio95peakPlus', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ratio95peakPlus']) && ($this->container['ratio95peakPlus'] < 0)) {
                $invalidProperties[] = "invalid value for 'ratio95peakPlus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ratio95peakGuar']) && ($this->container['ratio95peakGuar'] > 100)) {
                $invalidProperties[] = "invalid value for 'ratio95peakGuar', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ratio95peakGuar']) && ($this->container['ratio95peakGuar'] < 0)) {
                $invalidProperties[] = "invalid value for 'ratio95peakGuar', must be bigger than or equal to 0.";
            }
        if ($this->container['crossborder'] === null) {
            $invalidProperties[] = "'crossborder' can't be null";
        }
        if ($this->container['quotas'] === null) {
            $invalidProperties[] = "'quotas' can't be null";
        }
        if ($this->container['slaLevel'] === null) {
            $invalidProperties[] = "'slaLevel' can't be null";
        }
        if ($this->container['bindLimit'] === null) {
            $invalidProperties[] = "'bindLimit' can't be null";
        }
            if (($this->container['bindLimit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'bindLimit', must be smaller than or equal to 2000.";
            }
            if (($this->container['bindLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'bindLimit', must be bigger than or equal to 0.";
            }
        if ($this->container['enableAreaBandwidth'] === null) {
            $invalidProperties[] = "'enableAreaBandwidth' can't be null";
        }
        if ($this->container['enableChange95'] === null) {
            $invalidProperties[] = "'enableChange95' can't be null";
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
    * Gets sizeRange
    *  计费类型对应全域互联带宽大小范围。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthSizeRange[]
    */
    public function getSizeRange()
    {
        return $this->container['sizeRange'];
    }

    /**
    * Sets sizeRange
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthSizeRange[] $sizeRange 计费类型对应全域互联带宽大小范围。
    *
    * @return $this
    */
    public function setSizeRange($sizeRange)
    {
        $this->container['sizeRange'] = $sizeRange;
        return $this;
    }

    /**
    * Gets chargeMode
    *  支持的计费类型列表。
    *
    * @return string[]
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string[] $chargeMode 支持的计费类型列表。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets services
    *  支持服务实例类型。
    *
    * @return string[]
    */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
    * Sets services
    *
    * @param string[] $services 支持服务实例类型。
    *
    * @return $this
    */
    public function setServices($services)
    {
        $this->container['services'] = $services;
        return $this;
    }

    /**
    * Gets gcbType
    *  支持的带宽类型。
    *
    * @return string[]
    */
    public function getGcbType()
    {
        return $this->container['gcbType'];
    }

    /**
    * Sets gcbType
    *
    * @param string[] $gcbType 支持的带宽类型。
    *
    * @return $this
    */
    public function setGcbType($gcbType)
    {
        $this->container['gcbType'] = $gcbType;
        return $this;
    }

    /**
    * Gets ratio95peakPlus
    *  按增强型95计费保底消费百分比。
    *
    * @return int|null
    */
    public function getRatio95peakPlus()
    {
        return $this->container['ratio95peakPlus'];
    }

    /**
    * Sets ratio95peakPlus
    *
    * @param int|null $ratio95peakPlus 按增强型95计费保底消费百分比。
    *
    * @return $this
    */
    public function setRatio95peakPlus($ratio95peakPlus)
    {
        $this->container['ratio95peakPlus'] = $ratio95peakPlus;
        return $this;
    }

    /**
    * Gets ratio95peakGuar
    *  按传统型95计费保底消费百分比。
    *
    * @return int|null
    */
    public function getRatio95peakGuar()
    {
        return $this->container['ratio95peakGuar'];
    }

    /**
    * Sets ratio95peakGuar
    *
    * @param int|null $ratio95peakGuar 按传统型95计费保底消费百分比。
    *
    * @return $this
    */
    public function setRatio95peakGuar($ratio95peakGuar)
    {
        $this->container['ratio95peakGuar'] = $ratio95peakGuar;
        return $this;
    }

    /**
    * Gets crossborder
    *  是否已经完成跨境审批。
    *
    * @return bool
    */
    public function getCrossborder()
    {
        return $this->container['crossborder'];
    }

    /**
    * Sets crossborder
    *
    * @param bool $crossborder 是否已经完成跨境审批。
    *
    * @return $this
    */
    public function setCrossborder($crossborder)
    {
        $this->container['crossborder'] = $crossborder;
        return $this;
    }

    /**
    * Gets quotas
    *  配额信息。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthQuotas[]
    */
    public function getQuotas()
    {
        return $this->container['quotas'];
    }

    /**
    * Sets quotas
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthQuotas[] $quotas 配额信息。
    *
    * @return $this
    */
    public function setQuotas($quotas)
    {
        $this->container['quotas'] = $quotas;
        return $this;
    }

    /**
    * Gets slaLevel
    *  支持线路分级。
    *
    * @return string[]
    */
    public function getSlaLevel()
    {
        return $this->container['slaLevel'];
    }

    /**
    * Sets slaLevel
    *
    * @param string[] $slaLevel 支持线路分级。
    *
    * @return $this
    */
    public function setSlaLevel($slaLevel)
    {
        $this->container['slaLevel'] = $slaLevel;
        return $this;
    }

    /**
    * Gets bindLimit
    *  共享带宽允许绑定实例数量上限。
    *
    * @return int
    */
    public function getBindLimit()
    {
        return $this->container['bindLimit'];
    }

    /**
    * Sets bindLimit
    *
    * @param int $bindLimit 共享带宽允许绑定实例数量上限。
    *
    * @return $this
    */
    public function setBindLimit($bindLimit)
    {
        $this->container['bindLimit'] = $bindLimit;
        return $this;
    }

    /**
    * Gets enableAreaBandwidth
    *  是否启用传统的大区带宽。
    *
    * @return bool
    */
    public function getEnableAreaBandwidth()
    {
        return $this->container['enableAreaBandwidth'];
    }

    /**
    * Sets enableAreaBandwidth
    *
    * @param bool $enableAreaBandwidth 是否启用传统的大区带宽。
    *
    * @return $this
    */
    public function setEnableAreaBandwidth($enableAreaBandwidth)
    {
        $this->container['enableAreaBandwidth'] = $enableAreaBandwidth;
        return $this;
    }

    /**
    * Gets enableChange95
    *  是否支持95转按需。
    *
    * @return bool
    */
    public function getEnableChange95()
    {
        return $this->container['enableChange95'];
    }

    /**
    * Sets enableChange95
    *
    * @param bool $enableChange95 是否支持95转按需。
    *
    * @return $this
    */
    public function setEnableChange95($enableChange95)
    {
        $this->container['enableChange95'] = $enableChange95;
        return $this;
    }

    /**
    * Gets enableSpecCode
    *  是否支持多SKU产品功能。
    *
    * @return bool|null
    */
    public function getEnableSpecCode()
    {
        return $this->container['enableSpecCode'];
    }

    /**
    * Sets enableSpecCode
    *
    * @param bool|null $enableSpecCode 是否支持多SKU产品功能。
    *
    * @return $this
    */
    public function setEnableSpecCode($enableSpecCode)
    {
        $this->container['enableSpecCode'] = $enableSpecCode;
        return $this;
    }

    /**
    * Gets cesEnabled
    *  是否支持CES监控。
    *
    * @return bool|null
    */
    public function getCesEnabled()
    {
        return $this->container['cesEnabled'];
    }

    /**
    * Sets cesEnabled
    *
    * @param bool|null $cesEnabled 是否支持CES监控。
    *
    * @return $this
    */
    public function setCesEnabled($cesEnabled)
    {
        $this->container['cesEnabled'] = $cesEnabled;
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

