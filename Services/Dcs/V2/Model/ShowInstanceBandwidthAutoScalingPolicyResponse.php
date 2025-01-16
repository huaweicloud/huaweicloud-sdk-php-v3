<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceBandwidthAutoScalingPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceBandwidthAutoScalingPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * windowSize  带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    * bandwidthUsageUpperThreshold  触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    * scaleOutCooldown  带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    * scaleInEnabled  是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    * bandwidthUsageLowerThreshold  触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    * scaleInCooldown  带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'windowSize' => 'int',
            'bandwidthUsageUpperThreshold' => 'int',
            'scaleOutCooldown' => 'int',
            'scaleInEnabled' => 'bool',
            'bandwidthUsageLowerThreshold' => 'int',
            'scaleInCooldown' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * windowSize  带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    * bandwidthUsageUpperThreshold  触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    * scaleOutCooldown  带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    * scaleInEnabled  是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    * bandwidthUsageLowerThreshold  触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    * scaleInCooldown  带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'windowSize' => 'int32',
        'bandwidthUsageUpperThreshold' => 'int32',
        'scaleOutCooldown' => 'int32',
        'scaleInEnabled' => null,
        'bandwidthUsageLowerThreshold' => 'int32',
        'scaleInCooldown' => 'int32'
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
    * windowSize  带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    * bandwidthUsageUpperThreshold  触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    * scaleOutCooldown  带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    * scaleInEnabled  是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    * bandwidthUsageLowerThreshold  触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    * scaleInCooldown  带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'windowSize' => 'window_size',
            'bandwidthUsageUpperThreshold' => 'bandwidth_usage_upper_threshold',
            'scaleOutCooldown' => 'scale_out_cooldown',
            'scaleInEnabled' => 'scale_in_enabled',
            'bandwidthUsageLowerThreshold' => 'bandwidth_usage_lower_threshold',
            'scaleInCooldown' => 'scale_in_cooldown'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * windowSize  带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    * bandwidthUsageUpperThreshold  触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    * scaleOutCooldown  带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    * scaleInEnabled  是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    * bandwidthUsageLowerThreshold  触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    * scaleInCooldown  带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @var string[]
    */
    protected static $setters = [
            'windowSize' => 'setWindowSize',
            'bandwidthUsageUpperThreshold' => 'setBandwidthUsageUpperThreshold',
            'scaleOutCooldown' => 'setScaleOutCooldown',
            'scaleInEnabled' => 'setScaleInEnabled',
            'bandwidthUsageLowerThreshold' => 'setBandwidthUsageLowerThreshold',
            'scaleInCooldown' => 'setScaleInCooldown'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * windowSize  带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    * bandwidthUsageUpperThreshold  触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    * scaleOutCooldown  带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    * scaleInEnabled  是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    * bandwidthUsageLowerThreshold  触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    * scaleInCooldown  带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @var string[]
    */
    protected static $getters = [
            'windowSize' => 'getWindowSize',
            'bandwidthUsageUpperThreshold' => 'getBandwidthUsageUpperThreshold',
            'scaleOutCooldown' => 'getScaleOutCooldown',
            'scaleInEnabled' => 'getScaleInEnabled',
            'bandwidthUsageLowerThreshold' => 'getBandwidthUsageLowerThreshold',
            'scaleInCooldown' => 'getScaleInCooldown'
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
    const WINDOW_SIZE_1 = 1;
    const WINDOW_SIZE_5 = 5;
    const WINDOW_SIZE_10 = 10;
    const WINDOW_SIZE_15 = 15;
    const WINDOW_SIZE_30 = 30;
    const BANDWIDTH_USAGE_UPPER_THRESHOLD_50 = 50;
    const BANDWIDTH_USAGE_UPPER_THRESHOLD_60 = 60;
    const BANDWIDTH_USAGE_UPPER_THRESHOLD_70 = 70;
    const BANDWIDTH_USAGE_UPPER_THRESHOLD_80 = 80;
    const BANDWIDTH_USAGE_UPPER_THRESHOLD_90 = 90;
    const BANDWIDTH_USAGE_UPPER_THRESHOLD_95 = 95;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWindowSizeAllowableValues()
    {
        return [
            self::WINDOW_SIZE_1,
            self::WINDOW_SIZE_5,
            self::WINDOW_SIZE_10,
            self::WINDOW_SIZE_15,
            self::WINDOW_SIZE_30,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthUsageUpperThresholdAllowableValues()
    {
        return [
            self::BANDWIDTH_USAGE_UPPER_THRESHOLD_50,
            self::BANDWIDTH_USAGE_UPPER_THRESHOLD_60,
            self::BANDWIDTH_USAGE_UPPER_THRESHOLD_70,
            self::BANDWIDTH_USAGE_UPPER_THRESHOLD_80,
            self::BANDWIDTH_USAGE_UPPER_THRESHOLD_90,
            self::BANDWIDTH_USAGE_UPPER_THRESHOLD_95,
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
        $this->container['windowSize'] = isset($data['windowSize']) ? $data['windowSize'] : null;
        $this->container['bandwidthUsageUpperThreshold'] = isset($data['bandwidthUsageUpperThreshold']) ? $data['bandwidthUsageUpperThreshold'] : null;
        $this->container['scaleOutCooldown'] = isset($data['scaleOutCooldown']) ? $data['scaleOutCooldown'] : null;
        $this->container['scaleInEnabled'] = isset($data['scaleInEnabled']) ? $data['scaleInEnabled'] : null;
        $this->container['bandwidthUsageLowerThreshold'] = isset($data['bandwidthUsageLowerThreshold']) ? $data['bandwidthUsageLowerThreshold'] : null;
        $this->container['scaleInCooldown'] = isset($data['scaleInCooldown']) ? $data['scaleInCooldown'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['windowSize'] === null) {
            $invalidProperties[] = "'windowSize' can't be null";
        }
            $allowedValues = $this->getWindowSizeAllowableValues();
                if (!is_null($this->container['windowSize']) && !in_array($this->container['windowSize'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'windowSize', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['bandwidthUsageUpperThreshold'] === null) {
            $invalidProperties[] = "'bandwidthUsageUpperThreshold' can't be null";
        }
            $allowedValues = $this->getBandwidthUsageUpperThresholdAllowableValues();
                if (!is_null($this->container['bandwidthUsageUpperThreshold']) && !in_array($this->container['bandwidthUsageUpperThreshold'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bandwidthUsageUpperThreshold', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (($this->container['bandwidthUsageUpperThreshold'] > 95)) {
                $invalidProperties[] = "invalid value for 'bandwidthUsageUpperThreshold', must be smaller than or equal to 95.";
            }
            if (($this->container['bandwidthUsageUpperThreshold'] < 50)) {
                $invalidProperties[] = "invalid value for 'bandwidthUsageUpperThreshold', must be bigger than or equal to 50.";
            }
        if ($this->container['scaleOutCooldown'] === null) {
            $invalidProperties[] = "'scaleOutCooldown' can't be null";
        }
            if (($this->container['scaleOutCooldown'] > 86400)) {
                $invalidProperties[] = "invalid value for 'scaleOutCooldown', must be smaller than or equal to 86400.";
            }
            if (($this->container['scaleOutCooldown'] < 0)) {
                $invalidProperties[] = "invalid value for 'scaleOutCooldown', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthUsageLowerThreshold']) && ($this->container['bandwidthUsageLowerThreshold'] > 30)) {
                $invalidProperties[] = "invalid value for 'bandwidthUsageLowerThreshold', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['bandwidthUsageLowerThreshold']) && ($this->container['bandwidthUsageLowerThreshold'] < 10)) {
                $invalidProperties[] = "invalid value for 'bandwidthUsageLowerThreshold', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['scaleInCooldown']) && ($this->container['scaleInCooldown'] > 86400)) {
                $invalidProperties[] = "invalid value for 'scaleInCooldown', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['scaleInCooldown']) && ($this->container['scaleInCooldown'] < 0)) {
                $invalidProperties[] = "invalid value for 'scaleInCooldown', must be bigger than or equal to 0.";
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
    * Gets windowSize
    *  带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    *
    * @return int
    */
    public function getWindowSize()
    {
        return $this->container['windowSize'];
    }

    /**
    * Sets windowSize
    *
    * @param int $windowSize 带宽弹性的观测窗口，单位：分钟。支持的取值：1、5、10、15、30。
    *
    * @return $this
    */
    public function setWindowSize($windowSize)
    {
        $this->container['windowSize'] = $windowSize;
        return $this;
    }

    /**
    * Gets bandwidthUsageUpperThreshold
    *  触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    *
    * @return int
    */
    public function getBandwidthUsageUpperThreshold()
    {
        return $this->container['bandwidthUsageUpperThreshold'];
    }

    /**
    * Sets bandwidthUsageUpperThreshold
    *
    * @param int $bandwidthUsageUpperThreshold 触发带宽自动扩展的带宽平均使用率阈值，单位：百分比。支持的取值：50、60、70、80、90、95。
    *
    * @return $this
    */
    public function setBandwidthUsageUpperThreshold($bandwidthUsageUpperThreshold)
    {
        $this->container['bandwidthUsageUpperThreshold'] = $bandwidthUsageUpperThreshold;
        return $this;
    }

    /**
    * Gets scaleOutCooldown
    *  带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    *
    * @return int
    */
    public function getScaleOutCooldown()
    {
        return $this->container['scaleOutCooldown'];
    }

    /**
    * Sets scaleOutCooldown
    *
    * @param int $scaleOutCooldown 带宽扩展操作的静默时间（两次带宽扩展操作之间的最小间隔时间），单位：秒。 默认值：0。取值范围：0~86400。
    *
    * @return $this
    */
    public function setScaleOutCooldown($scaleOutCooldown)
    {
        $this->container['scaleOutCooldown'] = $scaleOutCooldown;
        return $this;
    }

    /**
    * Gets scaleInEnabled
    *  是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    *
    * @return bool|null
    */
    public function getScaleInEnabled()
    {
        return $this->container['scaleInEnabled'];
    }

    /**
    * Sets scaleInEnabled
    *
    * @param bool|null $scaleInEnabled 是否启用带宽自动回缩。默认值：false。该参数暂未启用。
    *
    * @return $this
    */
    public function setScaleInEnabled($scaleInEnabled)
    {
        $this->container['scaleInEnabled'] = $scaleInEnabled;
        return $this;
    }

    /**
    * Gets bandwidthUsageLowerThreshold
    *  触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    *
    * @return int|null
    */
    public function getBandwidthUsageLowerThreshold()
    {
        return $this->container['bandwidthUsageLowerThreshold'];
    }

    /**
    * Sets bandwidthUsageLowerThreshold
    *
    * @param int|null $bandwidthUsageLowerThreshold 触发带宽自动回缩的带宽平均使用率阈值，单位：百分比。支持的取值：10、20、30。该参数暂未启用。
    *
    * @return $this
    */
    public function setBandwidthUsageLowerThreshold($bandwidthUsageLowerThreshold)
    {
        $this->container['bandwidthUsageLowerThreshold'] = $bandwidthUsageLowerThreshold;
        return $this;
    }

    /**
    * Gets scaleInCooldown
    *  带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @return int|null
    */
    public function getScaleInCooldown()
    {
        return $this->container['scaleInCooldown'];
    }

    /**
    * Sets scaleInCooldown
    *
    * @param int|null $scaleInCooldown 带宽回缩操作的静默时间（两次带宽回缩操作之间的最小间隔时间），单位：秒。该参数暂未启用。 默认值：300。取值范围：0~86400。
    *
    * @return $this
    */
    public function setScaleInCooldown($scaleInCooldown)
    {
        $this->container['scaleInCooldown'] = $scaleInCooldown;
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

