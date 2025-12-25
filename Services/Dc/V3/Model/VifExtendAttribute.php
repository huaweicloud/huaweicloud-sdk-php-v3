<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VifExtendAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VifExtendAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * haType  虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    * haMode  虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * minTxInterval  检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
    * ipv6RemoteDisclaim  检测的远端的标识，用于静态ipv6 BFD
    * ipv6LocalDisclaim  检测的本端的标识，用于静态ipv6 BFD
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'haType' => 'string',
            'haMode' => 'string',
            'detectMultiplier' => 'int',
            'minRxInterval' => 'int',
            'minTxInterval' => 'int',
            'remoteDisclaim' => 'int',
            'localDisclaim' => 'int',
            'ipv6RemoteDisclaim' => 'int',
            'ipv6LocalDisclaim' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * haType  虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    * haMode  虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * minTxInterval  检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
    * ipv6RemoteDisclaim  检测的远端的标识，用于静态ipv6 BFD
    * ipv6LocalDisclaim  检测的本端的标识，用于静态ipv6 BFD
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'haType' => null,
        'haMode' => null,
        'detectMultiplier' => 'int32',
        'minRxInterval' => 'int32',
        'minTxInterval' => 'int32',
        'remoteDisclaim' => 'int32',
        'localDisclaim' => 'int32',
        'ipv6RemoteDisclaim' => 'int32',
        'ipv6LocalDisclaim' => 'int32'
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
    * haType  虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    * haMode  虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * minTxInterval  检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
    * ipv6RemoteDisclaim  检测的远端的标识，用于静态ipv6 BFD
    * ipv6LocalDisclaim  检测的本端的标识，用于静态ipv6 BFD
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'haType' => 'ha_type',
            'haMode' => 'ha_mode',
            'detectMultiplier' => 'detect_multiplier',
            'minRxInterval' => 'min_rx_interval',
            'minTxInterval' => 'min_tx_interval',
            'remoteDisclaim' => 'remote_disclaim',
            'localDisclaim' => 'local_disclaim',
            'ipv6RemoteDisclaim' => 'ipv6_remote_disclaim',
            'ipv6LocalDisclaim' => 'ipv6_local_disclaim'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * haType  虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    * haMode  虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * minTxInterval  检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
    * ipv6RemoteDisclaim  检测的远端的标识，用于静态ipv6 BFD
    * ipv6LocalDisclaim  检测的本端的标识，用于静态ipv6 BFD
    *
    * @var string[]
    */
    protected static $setters = [
            'haType' => 'setHaType',
            'haMode' => 'setHaMode',
            'detectMultiplier' => 'setDetectMultiplier',
            'minRxInterval' => 'setMinRxInterval',
            'minTxInterval' => 'setMinTxInterval',
            'remoteDisclaim' => 'setRemoteDisclaim',
            'localDisclaim' => 'setLocalDisclaim',
            'ipv6RemoteDisclaim' => 'setIpv6RemoteDisclaim',
            'ipv6LocalDisclaim' => 'setIpv6LocalDisclaim'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * haType  虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    * haMode  虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * minTxInterval  检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
    * ipv6RemoteDisclaim  检测的远端的标识，用于静态ipv6 BFD
    * ipv6LocalDisclaim  检测的本端的标识，用于静态ipv6 BFD
    *
    * @var string[]
    */
    protected static $getters = [
            'haType' => 'getHaType',
            'haMode' => 'getHaMode',
            'detectMultiplier' => 'getDetectMultiplier',
            'minRxInterval' => 'getMinRxInterval',
            'minTxInterval' => 'getMinTxInterval',
            'remoteDisclaim' => 'getRemoteDisclaim',
            'localDisclaim' => 'getLocalDisclaim',
            'ipv6RemoteDisclaim' => 'getIpv6RemoteDisclaim',
            'ipv6LocalDisclaim' => 'getIpv6LocalDisclaim'
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
    const HA_TYPE_NQA = 'nqa';
    const HA_TYPE_BFD = 'bfd';
    const HA_MODE_AUTO_SINGLE = 'auto_single';
    const HA_MODE_AUTO_MULTI = 'auto_multi';
    const HA_MODE_STATIC_SINGLE = 'static_single';
    const HA_MODE_STATIC_MULTI = 'static_multi';
    const HA_MODE_ENHANCE_NQA = 'enhance_nqa';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaTypeAllowableValues()
    {
        return [
            self::HA_TYPE_NQA,
            self::HA_TYPE_BFD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaModeAllowableValues()
    {
        return [
            self::HA_MODE_AUTO_SINGLE,
            self::HA_MODE_AUTO_MULTI,
            self::HA_MODE_STATIC_SINGLE,
            self::HA_MODE_STATIC_MULTI,
            self::HA_MODE_ENHANCE_NQA,
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
        $this->container['haType'] = isset($data['haType']) ? $data['haType'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['detectMultiplier'] = isset($data['detectMultiplier']) ? $data['detectMultiplier'] : null;
        $this->container['minRxInterval'] = isset($data['minRxInterval']) ? $data['minRxInterval'] : null;
        $this->container['minTxInterval'] = isset($data['minTxInterval']) ? $data['minTxInterval'] : null;
        $this->container['remoteDisclaim'] = isset($data['remoteDisclaim']) ? $data['remoteDisclaim'] : null;
        $this->container['localDisclaim'] = isset($data['localDisclaim']) ? $data['localDisclaim'] : null;
        $this->container['ipv6RemoteDisclaim'] = isset($data['ipv6RemoteDisclaim']) ? $data['ipv6RemoteDisclaim'] : null;
        $this->container['ipv6LocalDisclaim'] = isset($data['ipv6LocalDisclaim']) ? $data['ipv6LocalDisclaim'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getHaTypeAllowableValues();
                if (!is_null($this->container['haType']) && !in_array($this->container['haType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHaModeAllowableValues();
                if (!is_null($this->container['haMode']) && !in_array($this->container['haMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['detectMultiplier']) && ($this->container['detectMultiplier'] > 20)) {
                $invalidProperties[] = "invalid value for 'detectMultiplier', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['detectMultiplier']) && ($this->container['detectMultiplier'] < 3)) {
                $invalidProperties[] = "invalid value for 'detectMultiplier', must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['minRxInterval']) && ($this->container['minRxInterval'] > 5000)) {
                $invalidProperties[] = "invalid value for 'minRxInterval', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['minRxInterval']) && ($this->container['minRxInterval'] < 200)) {
                $invalidProperties[] = "invalid value for 'minRxInterval', must be bigger than or equal to 200.";
            }
            if (!is_null($this->container['minTxInterval']) && ($this->container['minTxInterval'] > 5000)) {
                $invalidProperties[] = "invalid value for 'minTxInterval', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['minTxInterval']) && ($this->container['minTxInterval'] < 200)) {
                $invalidProperties[] = "invalid value for 'minTxInterval', must be bigger than or equal to 200.";
            }
            if (!is_null($this->container['remoteDisclaim']) && ($this->container['remoteDisclaim'] > 16384)) {
                $invalidProperties[] = "invalid value for 'remoteDisclaim', must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['remoteDisclaim']) && ($this->container['remoteDisclaim'] < 1)) {
                $invalidProperties[] = "invalid value for 'remoteDisclaim', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['localDisclaim']) && ($this->container['localDisclaim'] > 16384)) {
                $invalidProperties[] = "invalid value for 'localDisclaim', must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['localDisclaim']) && ($this->container['localDisclaim'] < 1)) {
                $invalidProperties[] = "invalid value for 'localDisclaim', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipv6RemoteDisclaim']) && ($this->container['ipv6RemoteDisclaim'] > 16384)) {
                $invalidProperties[] = "invalid value for 'ipv6RemoteDisclaim', must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['ipv6RemoteDisclaim']) && ($this->container['ipv6RemoteDisclaim'] < 1)) {
                $invalidProperties[] = "invalid value for 'ipv6RemoteDisclaim', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipv6LocalDisclaim']) && ($this->container['ipv6LocalDisclaim'] > 16384)) {
                $invalidProperties[] = "invalid value for 'ipv6LocalDisclaim', must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['ipv6LocalDisclaim']) && ($this->container['ipv6LocalDisclaim'] < 1)) {
                $invalidProperties[] = "invalid value for 'ipv6LocalDisclaim', must be bigger than or equal to 1.";
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
    * Gets haType
    *  虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    *
    * @return string|null
    */
    public function getHaType()
    {
        return $this->container['haType'];
    }

    /**
    * Sets haType
    *
    * @param string|null $haType 虚拟接口的可用性检测类型。取值范围： - nqa：网络质量分析 - bfd：双向转发检测
    *
    * @return $this
    */
    public function setHaType($haType)
    {
        $this->container['haType'] = $haType;
        return $this;
    }

    /**
    * Gets haMode
    *  虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    *
    * @return string|null
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string|null $haMode 虚拟接口可用性检测的配置模式。取值范围： - auto_single：自动单跳bfd - auto_multi：自动多跳bfd - static_single：静态单跳bfd - static_multi：静态多跳bfd - enhance_nqa：增强型nqa
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets detectMultiplier
    *  检测的重试次数
    *
    * @return int|null
    */
    public function getDetectMultiplier()
    {
        return $this->container['detectMultiplier'];
    }

    /**
    * Sets detectMultiplier
    *
    * @param int|null $detectMultiplier 检测的重试次数
    *
    * @return $this
    */
    public function setDetectMultiplier($detectMultiplier)
    {
        $this->container['detectMultiplier'] = $detectMultiplier;
        return $this;
    }

    /**
    * Gets minRxInterval
    *  检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    *
    * @return int|null
    */
    public function getMinRxInterval()
    {
        return $this->container['minRxInterval'];
    }

    /**
    * Sets minRxInterval
    *
    * @param int|null $minRxInterval 检测的接收时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    *
    * @return $this
    */
    public function setMinRxInterval($minRxInterval)
    {
        $this->container['minRxInterval'] = $minRxInterval;
        return $this;
    }

    /**
    * Gets minTxInterval
    *  检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    *
    * @return int|null
    */
    public function getMinTxInterval()
    {
        return $this->container['minTxInterval'];
    }

    /**
    * Sets minTxInterval
    *
    * @param int|null $minTxInterval 检测的发送时长间隔，单位为毫秒。   - 当ha_type为nqa时，实际生效的时间间隔为按秒为单位将输入的数值向上取整，例如输入1500毫秒，实际时间间隔为2秒；   - 当ha_type为bfd时，实际生效的时间间隔为按毫秒为单位的输入数值。最小值为200毫秒，最大值为1000毫秒。
    *
    * @return $this
    */
    public function setMinTxInterval($minTxInterval)
    {
        $this->container['minTxInterval'] = $minTxInterval;
        return $this;
    }

    /**
    * Gets remoteDisclaim
    *  检测的远端的标识，用于静态BFD
    *
    * @return int|null
    */
    public function getRemoteDisclaim()
    {
        return $this->container['remoteDisclaim'];
    }

    /**
    * Sets remoteDisclaim
    *
    * @param int|null $remoteDisclaim 检测的远端的标识，用于静态BFD
    *
    * @return $this
    */
    public function setRemoteDisclaim($remoteDisclaim)
    {
        $this->container['remoteDisclaim'] = $remoteDisclaim;
        return $this;
    }

    /**
    * Gets localDisclaim
    *  检测的本端的标识，用于静态BFD
    *
    * @return int|null
    */
    public function getLocalDisclaim()
    {
        return $this->container['localDisclaim'];
    }

    /**
    * Sets localDisclaim
    *
    * @param int|null $localDisclaim 检测的本端的标识，用于静态BFD
    *
    * @return $this
    */
    public function setLocalDisclaim($localDisclaim)
    {
        $this->container['localDisclaim'] = $localDisclaim;
        return $this;
    }

    /**
    * Gets ipv6RemoteDisclaim
    *  检测的远端的标识，用于静态ipv6 BFD
    *
    * @return int|null
    */
    public function getIpv6RemoteDisclaim()
    {
        return $this->container['ipv6RemoteDisclaim'];
    }

    /**
    * Sets ipv6RemoteDisclaim
    *
    * @param int|null $ipv6RemoteDisclaim 检测的远端的标识，用于静态ipv6 BFD
    *
    * @return $this
    */
    public function setIpv6RemoteDisclaim($ipv6RemoteDisclaim)
    {
        $this->container['ipv6RemoteDisclaim'] = $ipv6RemoteDisclaim;
        return $this;
    }

    /**
    * Gets ipv6LocalDisclaim
    *  检测的本端的标识，用于静态ipv6 BFD
    *
    * @return int|null
    */
    public function getIpv6LocalDisclaim()
    {
        return $this->container['ipv6LocalDisclaim'];
    }

    /**
    * Sets ipv6LocalDisclaim
    *
    * @param int|null $ipv6LocalDisclaim 检测的本端的标识，用于静态ipv6 BFD
    *
    * @return $this
    */
    public function setIpv6LocalDisclaim($ipv6LocalDisclaim)
    {
        $this->container['ipv6LocalDisclaim'] = $ipv6LocalDisclaim;
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

