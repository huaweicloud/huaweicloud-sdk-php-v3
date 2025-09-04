<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFullDeadLockSwitchResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFullDeadLockSwitchResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOn  开关状态
    * retentionHours  保存时长
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOn' => 'bool',
            'retentionHours' => 'int',
            'canOpen' => 'bool',
            'cantOpenMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOn  开关状态
    * retentionHours  保存时长
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOn' => null,
        'retentionHours' => 'int64',
        'canOpen' => null,
        'cantOpenMsg' => null
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
    * switchOn  开关状态
    * retentionHours  保存时长
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOn' => 'switch_on',
            'retentionHours' => 'retention_hours',
            'canOpen' => 'can_open',
            'cantOpenMsg' => 'cant_open_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOn  开关状态
    * retentionHours  保存时长
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOn' => 'setSwitchOn',
            'retentionHours' => 'setRetentionHours',
            'canOpen' => 'setCanOpen',
            'cantOpenMsg' => 'setCantOpenMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOn  开关状态
    * retentionHours  保存时长
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOn' => 'getSwitchOn',
            'retentionHours' => 'getRetentionHours',
            'canOpen' => 'getCanOpen',
            'cantOpenMsg' => 'getCantOpenMsg'
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
        $this->container['switchOn'] = isset($data['switchOn']) ? $data['switchOn'] : null;
        $this->container['retentionHours'] = isset($data['retentionHours']) ? $data['retentionHours'] : null;
        $this->container['canOpen'] = isset($data['canOpen']) ? $data['canOpen'] : null;
        $this->container['cantOpenMsg'] = isset($data['cantOpenMsg']) ? $data['cantOpenMsg'] : null;
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
    * Gets switchOn
    *  开关状态
    *
    * @return bool|null
    */
    public function getSwitchOn()
    {
        return $this->container['switchOn'];
    }

    /**
    * Sets switchOn
    *
    * @param bool|null $switchOn 开关状态
    *
    * @return $this
    */
    public function setSwitchOn($switchOn)
    {
        $this->container['switchOn'] = $switchOn;
        return $this;
    }

    /**
    * Gets retentionHours
    *  保存时长
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
    * @param int|null $retentionHours 保存时长
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
    *  无法开启原因
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
    * @param string|null $cantOpenMsg 无法开启原因
    *
    * @return $this
    */
    public function setCantOpenMsg($cantOpenMsg)
    {
        $this->container['cantOpenMsg'] = $cantOpenMsg;
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

