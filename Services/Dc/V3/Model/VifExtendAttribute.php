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
    * haType  虚拟接口的可用性检测类型
    * haMode  检测的具体的配置模式
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔
    * minTxInterval  检测的发送时长间隔
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
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
            'localDisclaim' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * haType  虚拟接口的可用性检测类型
    * haMode  检测的具体的配置模式
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔
    * minTxInterval  检测的发送时长间隔
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
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
        'localDisclaim' => 'int32'
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
    * haType  虚拟接口的可用性检测类型
    * haMode  检测的具体的配置模式
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔
    * minTxInterval  检测的发送时长间隔
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
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
            'localDisclaim' => 'local_disclaim'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * haType  虚拟接口的可用性检测类型
    * haMode  检测的具体的配置模式
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔
    * minTxInterval  检测的发送时长间隔
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
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
            'localDisclaim' => 'setLocalDisclaim'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * haType  虚拟接口的可用性检测类型
    * haMode  检测的具体的配置模式
    * detectMultiplier  检测的重试次数
    * minRxInterval  检测的接收时长间隔
    * minTxInterval  检测的发送时长间隔
    * remoteDisclaim  检测的远端的标识，用于静态BFD
    * localDisclaim  检测的本端的标识，用于静态BFD
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
            'localDisclaim' => 'getLocalDisclaim'
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
    *  虚拟接口的可用性检测类型
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
    * @param string|null $haType 虚拟接口的可用性检测类型
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
    *  检测的具体的配置模式
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
    * @param string|null $haMode 检测的具体的配置模式
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
    *  检测的接收时长间隔
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
    * @param int|null $minRxInterval 检测的接收时长间隔
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
    *  检测的发送时长间隔
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
    * @param int|null $minTxInterval 检测的发送时长间隔
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

