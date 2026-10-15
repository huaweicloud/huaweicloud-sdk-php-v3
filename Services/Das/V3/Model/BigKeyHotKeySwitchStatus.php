<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BigKeyHotKeySwitchStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BigKeyHotKeySwitchStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * openStatus  开关状态。0-关闭，1-开启
    * retentionHours  数据保留小时数
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启的原因（如内核版本不满足等）
    * lastOpenTime  最后开启时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'openStatus' => 'int',
            'retentionHours' => 'int',
            'canOpen' => 'bool',
            'cantOpenMsg' => 'string',
            'lastOpenTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * openStatus  开关状态。0-关闭，1-开启
    * retentionHours  数据保留小时数
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启的原因（如内核版本不满足等）
    * lastOpenTime  最后开启时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'openStatus' => 'int32',
        'retentionHours' => 'int64',
        'canOpen' => null,
        'cantOpenMsg' => null,
        'lastOpenTime' => 'int64'
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
    * openStatus  开关状态。0-关闭，1-开启
    * retentionHours  数据保留小时数
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启的原因（如内核版本不满足等）
    * lastOpenTime  最后开启时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'openStatus' => 'open_status',
            'retentionHours' => 'retention_hours',
            'canOpen' => 'can_open',
            'cantOpenMsg' => 'cant_open_msg',
            'lastOpenTime' => 'last_open_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * openStatus  开关状态。0-关闭，1-开启
    * retentionHours  数据保留小时数
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启的原因（如内核版本不满足等）
    * lastOpenTime  最后开启时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $setters = [
            'openStatus' => 'setOpenStatus',
            'retentionHours' => 'setRetentionHours',
            'canOpen' => 'setCanOpen',
            'cantOpenMsg' => 'setCantOpenMsg',
            'lastOpenTime' => 'setLastOpenTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * openStatus  开关状态。0-关闭，1-开启
    * retentionHours  数据保留小时数
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启的原因（如内核版本不满足等）
    * lastOpenTime  最后开启时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $getters = [
            'openStatus' => 'getOpenStatus',
            'retentionHours' => 'getRetentionHours',
            'canOpen' => 'getCanOpen',
            'cantOpenMsg' => 'getCantOpenMsg',
            'lastOpenTime' => 'getLastOpenTime'
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
        $this->container['openStatus'] = isset($data['openStatus']) ? $data['openStatus'] : null;
        $this->container['retentionHours'] = isset($data['retentionHours']) ? $data['retentionHours'] : null;
        $this->container['canOpen'] = isset($data['canOpen']) ? $data['canOpen'] : null;
        $this->container['cantOpenMsg'] = isset($data['cantOpenMsg']) ? $data['cantOpenMsg'] : null;
        $this->container['lastOpenTime'] = isset($data['lastOpenTime']) ? $data['lastOpenTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['openStatus']) && ($this->container['openStatus'] > 1)) {
                $invalidProperties[] = "invalid value for 'openStatus', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['openStatus']) && ($this->container['openStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'openStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['retentionHours']) && ($this->container['retentionHours'] > 168)) {
                $invalidProperties[] = "invalid value for 'retentionHours', must be smaller than or equal to 168.";
            }
            if (!is_null($this->container['retentionHours']) && ($this->container['retentionHours'] < 1)) {
                $invalidProperties[] = "invalid value for 'retentionHours', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cantOpenMsg']) && (mb_strlen($this->container['cantOpenMsg']) > 2048)) {
                $invalidProperties[] = "invalid value for 'cantOpenMsg', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['cantOpenMsg']) && (mb_strlen($this->container['cantOpenMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'cantOpenMsg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastOpenTime']) && ($this->container['lastOpenTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'lastOpenTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['lastOpenTime']) && ($this->container['lastOpenTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastOpenTime', must be bigger than or equal to 0.";
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
    * Gets openStatus
    *  开关状态。0-关闭，1-开启
    *
    * @return int|null
    */
    public function getOpenStatus()
    {
        return $this->container['openStatus'];
    }

    /**
    * Sets openStatus
    *
    * @param int|null $openStatus 开关状态。0-关闭，1-开启
    *
    * @return $this
    */
    public function setOpenStatus($openStatus)
    {
        $this->container['openStatus'] = $openStatus;
        return $this;
    }

    /**
    * Gets retentionHours
    *  数据保留小时数
    *
    * @return int|null
    */
    public function getRetentionHours()
    {
        return $this->container['retentionHours'];
    }

    /**
    * Sets retentionHours
    *
    * @param int|null $retentionHours 数据保留小时数
    *
    * @return $this
    */
    public function setRetentionHours($retentionHours)
    {
        $this->container['retentionHours'] = $retentionHours;
        return $this;
    }

    /**
    * Gets canOpen
    *  是否可以开启
    *
    * @return bool|null
    */
    public function getCanOpen()
    {
        return $this->container['canOpen'];
    }

    /**
    * Sets canOpen
    *
    * @param bool|null $canOpen 是否可以开启
    *
    * @return $this
    */
    public function setCanOpen($canOpen)
    {
        $this->container['canOpen'] = $canOpen;
        return $this;
    }

    /**
    * Gets cantOpenMsg
    *  无法开启的原因（如内核版本不满足等）
    *
    * @return string|null
    */
    public function getCantOpenMsg()
    {
        return $this->container['cantOpenMsg'];
    }

    /**
    * Sets cantOpenMsg
    *
    * @param string|null $cantOpenMsg 无法开启的原因（如内核版本不满足等）
    *
    * @return $this
    */
    public function setCantOpenMsg($cantOpenMsg)
    {
        $this->container['cantOpenMsg'] = $cantOpenMsg;
        return $this;
    }

    /**
    * Gets lastOpenTime
    *  最后开启时间（毫秒时间戳）
    *
    * @return int|null
    */
    public function getLastOpenTime()
    {
        return $this->container['lastOpenTime'];
    }

    /**
    * Sets lastOpenTime
    *
    * @param int|null $lastOpenTime 最后开启时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setLastOpenTime($lastOpenTime)
    {
        $this->container['lastOpenTime'] = $lastOpenTime;
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

