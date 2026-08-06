<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchFullsqlSwitchResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchFullsqlSwitchResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * openStatus  开关状态
    * retentionDays  保留天数
    * canOpen  是否能开启
    * cantOpenMsg  不能开启的原因
    * lastOpenTime  上次开启时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'openStatus' => 'int',
            'retentionDays' => 'int',
            'canOpen' => 'bool',
            'cantOpenMsg' => 'string',
            'lastOpenTime' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * openStatus  开关状态
    * retentionDays  保留天数
    * canOpen  是否能开启
    * cantOpenMsg  不能开启的原因
    * lastOpenTime  上次开启时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'openStatus' => null,
        'retentionDays' => null,
        'canOpen' => null,
        'cantOpenMsg' => null,
        'lastOpenTime' => null
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
    * openStatus  开关状态
    * retentionDays  保留天数
    * canOpen  是否能开启
    * cantOpenMsg  不能开启的原因
    * lastOpenTime  上次开启时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'openStatus' => 'open_status',
            'retentionDays' => 'retention_days',
            'canOpen' => 'can_open',
            'cantOpenMsg' => 'cant_open_msg',
            'lastOpenTime' => 'last_open_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * openStatus  开关状态
    * retentionDays  保留天数
    * canOpen  是否能开启
    * cantOpenMsg  不能开启的原因
    * lastOpenTime  上次开启时间
    *
    * @var string[]
    */
    protected static $setters = [
            'openStatus' => 'setOpenStatus',
            'retentionDays' => 'setRetentionDays',
            'canOpen' => 'setCanOpen',
            'cantOpenMsg' => 'setCantOpenMsg',
            'lastOpenTime' => 'setLastOpenTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * openStatus  开关状态
    * retentionDays  保留天数
    * canOpen  是否能开启
    * cantOpenMsg  不能开启的原因
    * lastOpenTime  上次开启时间
    *
    * @var string[]
    */
    protected static $getters = [
            'openStatus' => 'getOpenStatus',
            'retentionDays' => 'getRetentionDays',
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
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
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
    *  开关状态
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
    * @param int|null $openStatus 开关状态
    *
    * @return $this
    */
    public function setOpenStatus($openStatus)
    {
        $this->container['openStatus'] = $openStatus;
        return $this;
    }

    /**
    * Gets retentionDays
    *  保留天数
    *
    * @return int|null
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int|null $retentionDays 保留天数
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
        return $this;
    }

    /**
    * Gets canOpen
    *  是否能开启
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
    * @param bool|null $canOpen 是否能开启
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
    *  不能开启的原因
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
    * @param string|null $cantOpenMsg 不能开启的原因
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
    *  上次开启时间
    *
    * @return float|null
    */
    public function getLastOpenTime()
    {
        return $this->container['lastOpenTime'];
    }

    /**
    * Sets lastOpenTime
    *
    * @param float|null $lastOpenTime 上次开启时间
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

