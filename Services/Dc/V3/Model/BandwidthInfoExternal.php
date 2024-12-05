<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthInfoExternal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthInfoExternal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthSize  带宽值
    * gcbId  带宽包ID
    * freezeStatus  冻结状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthSize' => 'int',
            'gcbId' => 'string',
            'freezeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthSize  带宽值
    * gcbId  带宽包ID
    * freezeStatus  冻结状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthSize' => 'int64',
        'gcbId' => null,
        'freezeStatus' => null
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
    * bandwidthSize  带宽值
    * gcbId  带宽包ID
    * freezeStatus  冻结状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthSize' => 'bandwidth_size',
            'gcbId' => 'gcb_id',
            'freezeStatus' => 'freeze_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthSize  带宽值
    * gcbId  带宽包ID
    * freezeStatus  冻结状态
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthSize' => 'setBandwidthSize',
            'gcbId' => 'setGcbId',
            'freezeStatus' => 'setFreezeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthSize  带宽值
    * gcbId  带宽包ID
    * freezeStatus  冻结状态
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthSize' => 'getBandwidthSize',
            'gcbId' => 'getGcbId',
            'freezeStatus' => 'getFreezeStatus'
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
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['gcbId'] = isset($data['gcbId']) ? $data['gcbId'] : null;
        $this->container['freezeStatus'] = isset($data['freezeStatus']) ? $data['freezeStatus'] : null;
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
    * Gets bandwidthSize
    *  带宽值
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 带宽值
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets gcbId
    *  带宽包ID
    *
    * @return string|null
    */
    public function getGcbId()
    {
        return $this->container['gcbId'];
    }

    /**
    * Sets gcbId
    *
    * @param string|null $gcbId 带宽包ID
    *
    * @return $this
    */
    public function setGcbId($gcbId)
    {
        $this->container['gcbId'] = $gcbId;
        return $this;
    }

    /**
    * Gets freezeStatus
    *  冻结状态
    *
    * @return string|null
    */
    public function getFreezeStatus()
    {
        return $this->container['freezeStatus'];
    }

    /**
    * Sets freezeStatus
    *
    * @param string|null $freezeStatus 冻结状态
    *
    * @return $this
    */
    public function setFreezeStatus($freezeStatus)
    {
        $this->container['freezeStatus'] = $freezeStatus;
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

