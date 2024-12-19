<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupBandwidthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupBandwidthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  分片ID。
    * updatedAt  更新时间，UTC时间。
    * bandwidth  当前带宽(Mbit/s)。
    * maxBandwidth  最大带宽(Mbit/s)。
    * assuredBandwidth  基准带宽(Mbit/s)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'updatedAt' => 'string',
            'bandwidth' => 'int',
            'maxBandwidth' => 'int',
            'assuredBandwidth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  分片ID。
    * updatedAt  更新时间，UTC时间。
    * bandwidth  当前带宽(Mbit/s)。
    * maxBandwidth  最大带宽(Mbit/s)。
    * assuredBandwidth  基准带宽(Mbit/s)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'updatedAt' => null,
        'bandwidth' => 'int32',
        'maxBandwidth' => 'int32',
        'assuredBandwidth' => 'int32'
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
    * groupId  分片ID。
    * updatedAt  更新时间，UTC时间。
    * bandwidth  当前带宽(Mbit/s)。
    * maxBandwidth  最大带宽(Mbit/s)。
    * assuredBandwidth  基准带宽(Mbit/s)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'updatedAt' => 'updated_at',
            'bandwidth' => 'bandwidth',
            'maxBandwidth' => 'max_bandwidth',
            'assuredBandwidth' => 'assured_bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  分片ID。
    * updatedAt  更新时间，UTC时间。
    * bandwidth  当前带宽(Mbit/s)。
    * maxBandwidth  最大带宽(Mbit/s)。
    * assuredBandwidth  基准带宽(Mbit/s)。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'updatedAt' => 'setUpdatedAt',
            'bandwidth' => 'setBandwidth',
            'maxBandwidth' => 'setMaxBandwidth',
            'assuredBandwidth' => 'setAssuredBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  分片ID。
    * updatedAt  更新时间，UTC时间。
    * bandwidth  当前带宽(Mbit/s)。
    * maxBandwidth  最大带宽(Mbit/s)。
    * assuredBandwidth  基准带宽(Mbit/s)。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'updatedAt' => 'getUpdatedAt',
            'bandwidth' => 'getBandwidth',
            'maxBandwidth' => 'getMaxBandwidth',
            'assuredBandwidth' => 'getAssuredBandwidth'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['maxBandwidth'] = isset($data['maxBandwidth']) ? $data['maxBandwidth'] : null;
        $this->container['assuredBandwidth'] = isset($data['assuredBandwidth']) ? $data['assuredBandwidth'] : null;
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
    * Gets groupId
    *  分片ID。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分片ID。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间，UTC时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间，UTC时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets bandwidth
    *  当前带宽(Mbit/s)。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 当前带宽(Mbit/s)。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets maxBandwidth
    *  最大带宽(Mbit/s)。
    *
    * @return int|null
    */
    public function getMaxBandwidth()
    {
        return $this->container['maxBandwidth'];
    }

    /**
    * Sets maxBandwidth
    *
    * @param int|null $maxBandwidth 最大带宽(Mbit/s)。
    *
    * @return $this
    */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->container['maxBandwidth'] = $maxBandwidth;
        return $this;
    }

    /**
    * Gets assuredBandwidth
    *  基准带宽(Mbit/s)。
    *
    * @return int|null
    */
    public function getAssuredBandwidth()
    {
        return $this->container['assuredBandwidth'];
    }

    /**
    * Sets assuredBandwidth
    *
    * @param int|null $assuredBandwidth 基准带宽(Mbit/s)。
    *
    * @return $this
    */
    public function setAssuredBandwidth($assuredBandwidth)
    {
        $this->container['assuredBandwidth'] = $assuredBandwidth;
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

